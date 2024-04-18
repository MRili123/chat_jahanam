<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
 use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserControler extends Controller
{
////////////////////////////////////////////////////////////////////////
public function login(){
    return view("chat_app.auth.loginpage");
}
//////////////////////////////////////////////////////////////////////////
public function loginpost(Request $request){
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect('/home');

    }else{
  return redirect('/login');   }
}
/////////////////////////////////////////////////////////
public function register(){
    return view("chat_app.auth.register");
}
//////////////////////////////////////////////////////////////////////////////////
public function registerpost(Request $request){
     $user = new User();
     $user->name = $request->name;
     $user->email = $request->email;
     $user->password = Hash::make($request->password);
     $user->save();
     return redirect('/');
}
public function logout(){
    Auth::logout();
    return redirect()->route('login');
}
}
