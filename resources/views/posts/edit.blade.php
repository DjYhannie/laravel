@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
    <h1>Update Post</h1>
    <form action="{{ route('posts.update',$post)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" placeholder="Title ni.." name="title" value="{{ $post->title}}">
        @error('title')
            {{ $message }}
        @enderror
        <input type="text" placeholder="Body nii.." name="body" value="{{ $post->body}}">
        <button>Update</button>
    </form>
@endsection
