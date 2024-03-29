<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    //
    public function list(){

        $posts_api = env('BACKEND_URL') .'/blog/posts/';
        // env

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
    
            $url =  env('BACKEND_URL'). '/blog/posts/' . $id;
    
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
    
        public function add(Request $request){
                // create a new post
                // redirect to the admin dashboard
            }
        
            public function edit(Request $request){
                // update an existing post
                // redirect to the admin dashboard
            }
        
            public function delete(Request $request){
                // delete a post
                // redirect to the admin dashboard
            }
            
        }
