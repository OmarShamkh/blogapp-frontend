@extends('layout')

@section('content')

    <style>
        body{
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
            <input type="email" class="form-control" id="email" name="email">
        </div>


        <div class="form-group">
            <label for="username">UserName:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>


        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


@endsection