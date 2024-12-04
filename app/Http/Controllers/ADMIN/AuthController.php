<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
// use Session;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        if ($request->isMethod("POST")) {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed',
            ]);

            $data = $request->all();

            $user = User::create($data);

            Auth::login($user);

            return redirect("admin")->withSuccess('Great! You have Successfully loggedin');

        }

        return view('ADMIN.Pages.Auth.Register');

    }

    public function login(Request $request)
    {
        if(Auth::check()){
            return view('ADMIN.Pages.Home');
        }
        
        if ($request->isMethod("POST")) {

            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->intended('admin')
                    ->withSuccess('You have Successfully loggedin');
            }
            return redirect("admin/login")->withError('Oppes! You have entered invalid credentials');
        }

        return view('ADMIN.Pages.Auth.Login');
    }

    public function admin()
    {
        if(Auth::check()){
            return view('ADMIN.Pages.Home');
        }
  
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login');
    }
}
