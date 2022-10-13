<?php

namespace App\Http\Controllers;

use Exception;
use GuzzleHttp\Exception\ClientException;
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

        try{
            $response = $client->request('POST', $register_api, [

                'form_params' => [
                    'email' => $email,
                    'username' => $username,
                    'password' => $password
                ]
                
            ]);

            return redirect('/login')->with('success' , 'message');
        }

        catch (ClientException $e) {
            $response = $e->getResponse();
            $res = json_decode($response->getBody()->getContents());
            // dd($res);
            try{
                $error_message = $res->error[0];
            }
            catch(Exception){
                $error_message = $res->password[0];
            }
            return redirect('register')->with('error' , $error_message);
        }

    }
}
