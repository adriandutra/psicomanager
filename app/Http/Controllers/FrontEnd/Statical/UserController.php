<?php

namespace App\Http\Controllers\FrontEnd\Statical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Session;
use App\User;
use App\Authorization\AuthCustom;


class UserController extends Controller
{
    public function login(Request $request){
        $validator =  Validator::make($request->all(), [
          'email' => 'required|string|email|max:255',
          'password' => 'required|string',
        ]);

        if($validator->fails()) {
          return redirect()->back()
            ->withInput($request->input())
            ->withErrors($validator)
            ->with('msg', 'showLogin');
        }

        $client = new Client([
            'base_uri' => env('API_SECURITY'),
        ]);


      try{
          $response = $client->post('api/login', [
              'headers' => [
              ],
              'form_params' => [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
              ],
          ]);

          $response = json_decode((string) $response->getBody(), true);

          $token = $response;

          $response = $client->post('api/details', [
            'headers' => [
              'Authorization' => 'Bearer ' . $token['access_token']
            ],
          ]);

          $response = json_decode((string) $response->getBody(), true);

          $user = new User($response);

          AuthCustom::login($user, $token);


          return redirect()->route('home');

        } catch (\GuzzleHttp\Exception\ClientException $exception) {
          $response = json_decode((string) $exception->getResponse()->getBody(), true);

          $validator = Validator::make([], []);

          if($response['error'] == 'Inactive')
            $validator->errors()->add('password', 'La cuenta aún no ha sido activada.');
          else
            $validator->errors()->add('password', 'Revise email y password ingresados.');

          return redirect()->back()
            ->withInput($request->input())
            ->withErrors($validator)
            ->with('msg', 'showLogin');
        }
      }
}
