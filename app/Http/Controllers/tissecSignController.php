<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class tissecSignController extends Controller
{

    public function index(){
        return view('welcome');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function signInCURL(Request $request)
    {
        $response = Curl::to('https://tissec.com/new/1/signup-login/api/User/signup.php')
                    ->withData(['username'=>$request->username, 'password'=>$request->password])
                    ->asJson( true )
                    ->post();
        return redirect(url()->previous())->with('success',  $response['message']);

    }
    public function loginInCURL(Request $request)
    {
        $response = Curl::to('https://tissec.com/new/1/signup-login/api/User/login.php')
            ->withData(['username'=>$request->usernameLogin, 'password'=>$request->passwordLogin])
            ->withContentType('application/json')
            ->asJson( true )
            ->post();
        if($response['status'] == true){
            return redirect('dashboard')->with('successLogin',  $response['message']);
        }else{
            return redirect(url()->previous())->with('errorLogin',  $response['message']);
        }


    }


}
