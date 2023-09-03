@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <h2>Add Post</h2>
    <form method="POST" action="/admin/add">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="Add Post">
    </form>

    <h2>Edit Post</h2>
    <form method="POST" action="/admin/edit">
        @csrf
        <label for="id">Post ID:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="Edit Post">
    </form>

    <h2>Delete Post</h2>
    <form method="POST" action="/admin/delete">
        @csrf
        <label for="id">Post ID:</label><br>
        <input type="text" id="id" name="id"><br>
        <input type="submit" value="Delete Post">
    </form>
</div>
@endsection
