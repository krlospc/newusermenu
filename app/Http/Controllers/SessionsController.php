<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login(Request $request){
        dd('asdfasdfasdf');
        return view('session.login');
    }

    public function loginPost(Request $request){
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        //dd(Hash::make('test'));
        $credentials = $request->only('username', 'password');
        //dd($credentials);
        if(Auth::attempt($credentials)){
            session()->regenerate();
            return redirect('dashboard')->with(['success'=>'You are logged in.']);
        }else{
            // return redirect()->intended('/');
            return redirect()->back()->withErrors(['username'=>'Usuario o password, alguno es invalido .']);
        }
        
        return view('welcome');
    }

    public function destroy(){

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
