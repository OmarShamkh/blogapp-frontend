<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class LogoutController extends Controller
{
    //
    public function destroy()
    {
        
        $logout_api = 'http://127.0.0.1:8000/user/logout/';

        $client = new Client([
            'cookies' => true
        ]);
        
        $auth_token = session()->all()['auth_token'];
        $response = $client->request('POST', $logout_api ,[
            'headers' => [
                'Authorization' => 'Token '.$auth_token,
            ]
        ]);

        if(request()->session()->all()['username'] != ""){
            request()->session()->pull('username');
        };    
        
        return redirect('/blog');
        
    }
}
