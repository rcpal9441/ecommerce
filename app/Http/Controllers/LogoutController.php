<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    function logout()
    {
        Session::flush();
    	Auth::logout();
    	return redirect()->route('login');
    }

    function frontlogout()
    {
        Session::flush();
    	Auth::logout();
    	return redirect('/');
    }
}
