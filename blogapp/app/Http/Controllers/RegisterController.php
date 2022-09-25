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

        $url = 'http://127.0.0.1:8000/user/signup/';

        $client = new Client();
        $response = $client->request('POST', $url, [
            'form_params' => [
                'email' => $email,
                'username' => $username,
                'password' => $password
            ]
            
        ]);

        if($response->getStatusCode() ==201){
            return redirect('/blog')->with('success', 'Your account has been created.');
        }


    }
}
