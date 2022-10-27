@extends('layouts.main')

@section('container')

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->title }}</h2>

                <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name   }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{ $post->category->name }}" class="img-fluid">
                <article>
                    <p> {!! $post->body !!} </p>
                </article>
                


                <a href="/blog" class="mb-3">Back to Posts</a>
            </div>
        </div>
    </div>

    
@endsection

