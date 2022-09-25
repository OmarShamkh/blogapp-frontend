<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    //
    public function list(){

        $url = 'http://127.0.0.1:8000/blog/posts/';
        $response = file_get_contents($url);
        $posts = json_decode($response);
 
	    return view('posts' , [
            'posts' => $posts,
        ]);
    }

    public function details($id){

        $url = 'http://127.0.0.1:8000/blog/posts/' . $id;
        $response = file_get_contents($url);
        $post = json_decode($response);

	    return view('post' , [
            'post' => $post,
        ]);
    }
}
