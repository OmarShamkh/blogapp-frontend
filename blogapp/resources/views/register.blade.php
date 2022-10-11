@extends('layout')

@section('content')

<style>
    body {
        align-content: center;
        max-width: 600px;
        margin: auto;
        padding-top: 50px;
    }
</style>


<h2>Register</h2>

<form method="POST" action="/register">
    @csrf

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>


    <div class="form-group">
        <label for="username">UserName:</label>
        <input type="text" class="form-control" id="username" name="username"  required>
    </div>


    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Register</button>
    </div>

</form>

@if (\Session::has('error'))

    <div class="alert alert-danger">
        {{\Session::get('error')}}
    </div>

@endif

<div>
    <p> Already have an account? <a href="/login"> Login </a></p>
</div>

<div>
    <a class="navbar-brand" href="/blog">Back to Blog</a>
</div>

@endsection