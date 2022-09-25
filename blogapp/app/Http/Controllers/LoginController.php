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
        // dd($email , $username , $password);

        $url = 'http://127.0.0.1:8000/user/login/';

        $client = new Client();
        $response = $client->request('POST', $url, [
            'form_params' => [
                'username' => $username,
                'password' => $password
            ]
            
        ]);

        if($response->getStatusCode() == 202){

            return redirect('/blog')->with('success', 'Welcome Back!');
        }
    }

    public function logout()
    {
        $url = 'http://127.0.0.1:8000/user/logout/';

        $client = new Client();
        $response = $client->request('GET', $url, [

        ]);
        
        dd($response);

        return redirect('/blog')->with('success', 'Goodbye!');
        
    }
}
