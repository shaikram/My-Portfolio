<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;//for hash or encryption
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Extensions\MongoSessionHandler;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use DB;


class MainController extends Controller
{
    public function index(){
      return view('login');
    }
    public function checkLogin(Request $request){
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|alphaNum|min:3'
      ]);
      // $data = $request->input();
      $userData = array(
        'email' => $request->get('email'),
        'password' => $request->get('password')
      );

      if(Auth::attempt($userData)){
        $request->session()->put('email', $userData['email']);
        return redirect('admin');
        // echo "login success";
      }else{
        return back()->with('error', 'Wrong login details ');
      }
    }
    public function succeslogin(){
      return view('admin');
    }
    public function logout(Request $request){
      Auth::logout();
      Session::flush();
      $request->session()->forget('email');

      return redirect('login');
    }
    public function messages(){
      return view('message');
    }
    public function portfolio(){
      return view('portfolio');
    }
}
