<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register_submit(Request $request){
        $validated = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        if($validated->fails()){
            return redirect()->route('home')->withErrors($validated);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('login')->withSuccess('Registration Completed Successfully');
    }

    public function login_submit(Request $request)
        {
            $validated = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            if ($validated->fails()) {
                return redirect()->route('login')->withErrors($validated);
            }

            if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                return redirect()->route('dashboards');
            }

            return redirect()->back()->with('fail', 'Login Fail invalid email or password');
        }

     public function dashboards(){
        $role = Auth::user()->role;
        if($role == 'admin'){
            return redirect()->route('admin_dashboard');
        }elseif($role == 'manager'){
            return redirect()->route('manager_dashboard');
        }elseif($role == 'user'){
            return redirect()->route('user_dashboard');
        }else{
               return redirect()->back()->with('fail', 'Invalid role contact dev');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home')->withSuccess('Logout Success');
    }
}
