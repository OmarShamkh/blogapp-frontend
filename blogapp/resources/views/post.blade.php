@extends('layout')

@include('nav')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-8 card mb-4  mt-3 left  top">
        <div class="card-body">

          <h1>{{ $post->title }} </h1>

          <p class=" text-muted">Admin | {{$post->published_date}} </p>

          <p class="card-text ">{{ $post->content }}</p>

        </div>
      </div>
    </div>
    
</div>

@endsection