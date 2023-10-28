<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view("back-end.pages.login");
    }

    public function login(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'email'     => 'required|email|exists:users,email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password' => 'required|min:9'
            ]);

            if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();
            
            $credentials = $request->only("email","password");
            if (\Auth::attempt($credentials)) {
                return redirect('dashboard');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    public function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect('login');
    }
}
