@extends("layouts.main")

@section("title", "Category")

@section("container")
    <h1>Blog | Categories</h1>

    @foreach ($categories as $category)
    
    <ul>
        <li>
            <h4><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h4>
        </li>
    </ul>

    @endforeach

@endsection