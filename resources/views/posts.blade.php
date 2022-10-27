@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())
    <div class="card mb-5">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <small class="text-muted">
                <p>By <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name   }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}</p>
            </small>   
            <p class="card-text">{{ $posts[0]->excert }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
             
        </div>
    </div>
@else
    <p class="text-center fs-4">No post found</p>    
@endif


<div class="container">
    <div class="row">
    @foreach ($posts->skip(1) as $post)
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{ $post->category }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excert }}</p>
                    <p>
                    <small class="text-muted">
                        By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name   }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                        {{ $post->created_at->diffForHumans() }}</p>
                    </small>
                    </p>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>


<!-- <article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>

    <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name   }}</a>
        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }}</a></p>

    <p>{{ $post->title }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more ...</a> -->

<!-- </article> -->

@endsection
