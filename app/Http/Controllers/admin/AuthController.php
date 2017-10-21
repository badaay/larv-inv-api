<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $redirectTo = '/admin/home';
    protected $guard = 'admin';
  

    public function showLoginForm(){

        if(view()->exists('admin.authenticate')){
            return view('admin.authenticate');
        }
        return view('admin.auth.login');
    }
    
    public function showRegistrationForm(){

        return view('admin.auth.register');
    }

    public function authenticate(Request $request)
    {
        // $credential['email'] =  $request->input('email');
        // $credential['password'] =  $request->input('password');
        // if (Auth::guard('admin')->attempt($credential)) {
        //     // Authentication passed...
        //     return redirect()->intended('dashboard');
        // }else{
        //     return redirect('admin/login');
        // }

        // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(url('admin/home'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(url( 'admin/login' ));
    }

    
}
