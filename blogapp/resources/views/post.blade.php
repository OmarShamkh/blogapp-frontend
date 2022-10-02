@extends('layout')

@include('nav')

@section('content')

<div class="container">

  {{-- post --}}
  <div class="row">
    <div class="col-md-8 card mb-4  mt-3 left  top">

      <div class="card-body">

        <h1>{{ $post->title }} </h1>

        <p class="text-muted">Admin | {{$post->published_date}} </p>

        <p class="card-text ">{{ $post->content }}</p>

      </div>

    </div>

  </div>

  <h2>Comments</h2><br>

  <div>
    {{-- Only Authenticated users can add comments --}}
    @if (session()->has('username'))

    @include('addcomment')

    @else
    
    <p>Please <a href="/login"> Login </a> or <a href="/register"> Create </a> an account to add comments.</p>
    @endif

    @foreach ($post->comments as $comment)
    <div class="card mb-1" style="max-width:750px;">

      <div class="card-body">

        <h5 class="card-title">{{ $comment->user_name }}</h5>

        <p class="card-text">{{ $comment->content }}</p>

        @if ($username == $comment->user_name )

        <a href="/comments/edit/{{$comment->id}}" class="card-link">edit comment</a>
        <a href="/comments/delete/{{$comment->id}}" class="card-link">delete comment</a>

        @endif

      </div>
    </div>
    @endforeach

  </div>

</div>

@endsection