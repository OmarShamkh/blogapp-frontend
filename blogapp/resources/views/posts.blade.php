@extends('layout')

@include('nav')

@section('content')
    <style>
        body {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            background-color: #fdfdfd;
        }

        .head_text {
            color: white;
        }

        .card {
            box-shadow: 0 16px 48px #dfe6ed;
        }
    </style>
    
    <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-1 mx-auto">
                    <div class="site-heading">
                        <h3 class=" site-heading my-4 mt-3 text-white"> Welcome to my awesome Blog </h3>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8 mt-3 left">

                @foreach ($posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title"> {{ $post->title}} </a></h2>

                            <p class="card-text text-muted h6"> Admin | {{ $post->published_date}} </p>

                            <p class="card-text">{{Str::limit($post->content ,200)}}</p>

                            <a href="/blog/{{$post->id}}" class="btn btn-primary">Read More.. </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection