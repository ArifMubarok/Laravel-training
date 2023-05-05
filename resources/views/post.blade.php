@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By: <a href="/author/{{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none"
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}</p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:scroll">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                        alt="{{ $post->category->name }}">
                @endif
                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-3 btn btn-primary">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
