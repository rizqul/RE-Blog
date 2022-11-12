@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }} </h1>
</div>

<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1>{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><span
                    data-feather="edit"></span> Edit</a> {{-- href is default setting from resource controller check in
            terminal command: php artisan route:list --}}
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure to delete post ?')"><span
                        data-feather="trash-2"></span> Delete</button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}"
                    class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
                alt="{{ $post->category->name }}" class="img-fluid">
            @endif


            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection