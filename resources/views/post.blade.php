@extends("layouts.main")

@section("title", "Single Post")

@section("container")

<a href="/blog">Back</a>

    <article class="mt-5">
        <h2>{{ $post->title }}</h2>
        <h6>By: <a href="#" class="text-decoration-none"> {{ $post->user->name }}</a> | <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        {!! $post->body !!}
    </article>

@endsection