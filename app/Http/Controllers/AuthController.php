<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

    public function getUpdateProfile(Request $request) {
        try {
            if($request->isMethod('POST')) {
                $id = \Auth::user()->id;
                $validate = Validator::make($request->all(), [
                    'email'     => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,'.$id,
                    'name'      => 'required|min:5',
                    'phone'     => 'required|digits_between:10,12',
                    'company'   => 'required|min:5',
                    'country'   => 'required|min:5',
                    'address'   => 'required|min:10',
                    'job'       => 'required|min:5',
                    'about'     => 'required|min:50',
                    'twitter'   => 'required|url|min:5',
                    'facebook'  => 'required|url|min:5',
                    'instagram' => 'required|url|min:5',
                    'linkedin'  => 'required|url|min:5',
                    'image'     => 'image|mimes:jpg,jpeg,png|max:50',
                ]);
    
                if($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();

                if($request->hasFile('image')) { $file = uploadFiles($request, 'image', 'user'); }
                
                DB::beginTransaction();
                
                $user               =   User::find($id);
                    if(isset($file) && $user) {
                        deleteFiles($user->image);
                        $user->image =   $file;
                    }
                $user->email        =   $request->email;
                $user->name         =   $request->name;
                $user->phone        =   $request->phone;
                $user->company      =   $request->company;
                $user->country      =   $request->country;
                $user->address      =   $request->address;
                $user->job          =   $request->job;
                $user->about        =   $request->about;
                $user->twitter      =   $request->twitter;
                $user->facebook     =   $request->facebook;
                $user->instagram    =   $request->instagram;
                $user->linkedin     =   $request->linkedin;
                $user->save();

                DB::commit();
                // return view('back-end.pages.get-update-profile');
                return redirect()->back()->with('success', 'Profile updated successfully.');
            } else{
                return view('back-end.pages.get-update-profile');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
