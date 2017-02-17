<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function getLogin()
    {

        if (Auth::check()) {
            return redirect('/index')->withErrors(['Je bent al aangemeld.']);
        }

        return view('users.login');

    }

    public function getRegister()
    {

        if (Auth::check()) {
            return redirect('/index')->withErrors(['Je bent al aangemeld.']);
        }

        return view('users.register');

    }

    public function getIndex()
    {

        if (!Auth::check()) {
            return redirect('/login')->withErrors(['Je moet aangemeld zijn.']);
        }
        $result = Community::checkComm();

        if($result === 'false')
            return redirect('/choose')->withErrors(['Je moet nog een community kiezen.']);
        else
            return view('users.index');

    }



}
