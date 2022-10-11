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


<h2>Login</h2>
@if (\Session::has('message'))
    <div>
        <p class="card-text">Registered Successfull, Please login!</p>
    </div>
@endif



<form method="POST" action="/login">
    @csrf

    <div class="form-group">
        <label for="username">UserName:</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>


    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
    </div>

</form>

@if (\Session::has('error'))
    <div>
        <p class="card-text" style="color: red;">Access Denied, Wrong usernamr Or password!</p>
    </div>
@endif
<div>

    <p>Haven't signed up yet? <a href="/register"> register </a></p>

</div>
<div>
    <a class="navbar-brand" href="/blog">Back to Blog</a>
</div>

@endsection