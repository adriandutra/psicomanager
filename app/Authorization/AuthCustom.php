<?php

namespace App\Authorization;

use Illuminate\Support\Facades\Auth;
use Session;

class AuthCustom extends Auth
{
  public static function login(\Illuminate\Contracts\Auth\Authenticatable $user, $token){
    Session::put('customAuthUser', $user);
    Session::put('tokenAuthUser', $token);
  }

  public static function setClient($client){
    Session::put('clientAuthUser', $client);
  }

  public static function logout(){
    Session::forget('customAuthUser');
    Session::forget('tokenAuthUser');
    Session::forget('clientAuthUser');
  }

  public static function user(){
    if(Session::has('customAuthUser'))
      return Session::get('customAuthUser');
    else
      return null;
  }

  public static function client(){
    if(Session::has('clientAuthUser'))
      return (object)Session::get('clientAuthUser');
    else
      return (object)['suscriptions' => []];
  }

  public static function clientUser(){
    if(Session::has('clientAuthUser'))
      return (object)Session::get('clientAuthUser');
    else
      return Session::get('customAuthUser') ?: null;
  }

  public static function access_token(){
    if(Session::has('tokenAuthUser'))
      return Session::get('tokenAuthUser')['access_token'];
    else
      return null;
  }

  public static function check(){
    if(Session::has('customAuthUser'))
      return true;
    else
      return false;
  }
}
