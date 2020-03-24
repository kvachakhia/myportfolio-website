<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('admin.login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function postLogin(Request $request)
    {
        request()->validate(['email' => 'required', 'password' => 'required', ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")
            ->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {

        if (Auth::check())
        {
            return view('admin.dashboard');
        }
        return Redirect::to("login")
            ->withSuccess('Opps! You do not have access');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}

