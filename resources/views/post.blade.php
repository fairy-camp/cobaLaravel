@extends('layouts.main')

@section('container')
<article class="mb-5">
    <h2>{{ $post->title }}</h2>

    <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name   }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

    <p> {!! $post->body !!} </p>
</article>

<a href="/blog">Back to Posts</a>
@endsection

