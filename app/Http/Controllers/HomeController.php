<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        if(Session::has('customAuthUser') || Session::has('clientAuthUser'))
        {
            return view('home');
        }
        else {
                return view('auth.login');
            }

    }

    public function contact(Request $request)
    {
        return view('frontend.contact.index');
    }

    public function plan(Request $request)
    {
        return view('frontend.plan.index');
    }
}
