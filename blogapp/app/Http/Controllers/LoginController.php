<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\ClientException;
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

        $login_api =  env('BACKEND_URL') .'/user/login/';

        $client = new Client();
        try {
            $response = $client->request('POST', $login_api, [
                'form_params' => [ 
                    'username' => $username,
                    'password' => $password
                ],
            ]);

            $status_code = $response->getStatusCode();
            if($status_code == 200){
                $response = (string) $response->getBody();
                $response =json_decode($response);
                $auth_token = ($response->token);
                //store sessions 
                session(['username' => $username , 'auth_token' => $auth_token]);
                return redirect('/blog');
            }
        }
        
        catch (ClientException $e) {
            return redirect('/login')->with('error' , 'Access Denied, Wrong usernamr Or password!!');
        }
    }     
        
}
