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


<h2>Update Comment</h2>

<form method="POST">
    @csrf

    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" name="content" required></textarea>
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">submit</button>
    </div>

</form>


@endsection