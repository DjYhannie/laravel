@extends('layouts.app')
@section('title')
    Posts
@endsection

@section('content')
    <h1>Posts List </h1> <a href="{{ route('posts.create') }}" class="btn">create post</a>
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-xs-3-12 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <p class="card-text"> {{ $post->body}} </p>
                            <a href="{{ route('posts.edit',$post) }}">Edit</a>
                            <form action="{{ route('posts.destroy',$post)}}" method="post">

                                @csrf //authorized the request
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
