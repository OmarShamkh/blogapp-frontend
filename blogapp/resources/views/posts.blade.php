@extends('layout')

@include('nav')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mt-3 left">

            @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title"> {{ $post->title}} </a></h2>

                    <p class="card-text text-muted h6"> Admin | {{\Carbon\Carbon::parse($post->published_date)->diffForHumans()}} </p>

                    <p class="card-text">{{Str::limit($post->content ,200)}}</p>

                    <a href="/blog/{{$post->id}}" class="btn btn-primary">Read More.. </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
