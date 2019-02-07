<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
      return view('auth.login');
    }

    public function login(Request $request){
      $this->validate($request,[
        'username' => 'required',
        'password' => 'required|min:6'
      ]);

      $credential = [
        'username' => $request->username,
        'password' => $request->password
      ];

      if (Auth::guard('admin')->attempt($credential, $request->member)) {
        return redirect()->route('home');
      }
      // else{
      //   return redirect()->back()->with('error','Login Gagal')->withInput($request->only('email','remember'));
      // }
      return redirect()->back()->withInput($request->only('username','remember'));
    }

    public function logout(){
      Auth::guard('admin')->logout();
      return redirect()->route('login');
    }
}
