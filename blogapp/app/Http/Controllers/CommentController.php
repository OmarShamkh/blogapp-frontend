<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class CommentController extends Controller
{
    //
    public function create($id)
    {
        // add comment to post with post_id
        $api =  env('BACKEND_URL'). '/blog/comments/' . $id;

        $client = new Client(array(
            'cookies' => true,
        ));

        $auth_token = session()->all()['auth_token'];
        $response = $client->request('POST', $api, [
            'form_params' => [
                'content' => request()->content
            ],
            'headers' => [
                'Authorization' => 'Token ' . $auth_token,
            ]
        ]);

        return redirect('blog/' . $id);
    }

    public function edit($comment_id)
    {
        $api =  env('BACKEND_URL') .'/blog/comments/' . $comment_id;

        $client = new Client(array(
            'cookies' => true,
        ));

        $auth_token = session()->all()['auth_token'];
        $response = $client->request('PUT', $api, [
            'form_params' => [
                'content' => request()->content
            ],
            'headers' => [
                'Authorization' => 'Token ' . $auth_token,
            ]
        ]);

        // dd($response);
        return redirect('blog/');
    }

    public function edit_form($comment_id)
    {

        return view('editcomment', ['comment_id' => $comment_id]);
    }


    public function delete($comment_id)
    {
        $api =  env('BACKEND_URL') .'/blog/comments/' . $comment_id;

        $client = new Client(array(
            'cookies' => true,
        ));

        $auth_token = session()->all()['auth_token'];
        $response = $client->request('delete', $api, [
            'headers' => [
                'Authorization' => 'Token ' . $auth_token,
            ]
        ]);

        // dd($response);
        return redirect('blog/');
    }
}
