@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
    <h1>Create Post</h1>
    <form action="/posts" method="post">
        @csrf
        <input type="text" placeholder="Title ni.." name="title">
        @error('title')
            {{ $message }}
        @enderror
        <input type="text" placeholder="Body nii.." name="body">
        <button>Create</button>
    </form>
@endsection
