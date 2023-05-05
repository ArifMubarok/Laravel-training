@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success mb-2"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-2"><span
                        data-feather="edit"></span>Edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('Are you sure ? ')"><span
                            data-feather="trash-2"></span>Delete</button>
                </form>

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
            </div>
        </div>
    </div>
@endsection