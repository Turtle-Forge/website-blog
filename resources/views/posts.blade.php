@extends('layouts.main')

@section('title', 'Blog')

@section('container')
    <h1>{{ $title }}</h1>

    @foreach ($posts as $post)
        <article class="mt-5" style="border: 1px solid black; padding: 20px; border-radius: 8px">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <h6>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                    {{ $post->author->name }}</a>
                |
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                </h5>
                {!! $post->excerpt !!}
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none"><i>Selengkapnya</i></a>
        </article>
    @endforeach

@endsection
