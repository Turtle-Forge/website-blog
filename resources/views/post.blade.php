@extends("layouts.main")

@section("title", "Single Post")

@section("container")

<a href="/blog">Back</a>

    <article class="mt-5">
        <h2>{{ $post->title }}</a></h2>
        <h6>By: {{ $post->author }}</h6>
        {!! $post->body !!}
    </article>

@endsection