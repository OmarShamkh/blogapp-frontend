<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class LoginController extends Controller
{
    //
    
    public function create()
    {
        return view('login');
    }

    public function store()
    {
        
        $username = request()->username;
        $password = request()->password;    


        $login_api = 'http://127.0.0.1:8000/user/login/';

        $client = new Client();
        
        $response = $client->request('POST', $login_api, [
            'form_params' => [ 
                'username' => $username,
                'password' => $password
            ]
        ]);

        $status_code = $response->getStatusCode();
        $response = (string) $response->getBody();
        $response =json_decode($response);

        $auth_token = ($response->token);
        // dd($auth_token);
        // dd($response->getBody()->getContents());

        // // store username in sessions 
        session(['username' => $username , 'auth_token' => $auth_token]);
        // dd(request()->session());   

        if($status_code == 200){
            
            return redirect('/blog');
        }
    }

    
}
