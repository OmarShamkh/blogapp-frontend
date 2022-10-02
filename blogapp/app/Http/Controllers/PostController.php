<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    //
    public function list(){

        $posts_api = 'http://127.0.0.1:8000/blog/posts/';

        if(request()->session()->exists('username')){
            $username = request()->session()->all()['username'];
        }
        else{
            $username = "";
        }
 
        $response = file_get_contents($posts_api);
        $posts = json_decode($response);

        return view('posts' , [
            'posts' => $posts,
            'username' => $username
        ]);
        
    }

    public function details($id){

        $url = 'http://127.0.0.1:8000/blog/posts/' . $id;

        if(request()->session()->exists('username')){
            $username = request()->session()->all()['username'];
        }
        else{
            $username = "";
        }

        $response = file_get_contents($url);
        $post = json_decode($response);
        
	    return view('post' , [
            'post' => $post,
            'username' => $username
        ]);
    }
    
}
