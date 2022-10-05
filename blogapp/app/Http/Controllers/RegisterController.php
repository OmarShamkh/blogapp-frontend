<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class RegisterController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function store(){

        $email = request()->email;
        $username = request()->username;
        $password = request()->password;
        // dd($email , $username , $password);

        $register_api =  env('BACKEND_URL') .'/user/signup/';

        $client = new Client([
            'cookies' => true
        ]);

        $response = $client->request('POST', $register_api, [

            'form_params' => [
                'email' => $email,
                'username' => $username,
                'password' => $password
            ]
            
        ]);

        session(['username' => $username]);
        
        if($response->getStatusCode() == 201){
            
            return redirect('/blog');
        }

    }
}
