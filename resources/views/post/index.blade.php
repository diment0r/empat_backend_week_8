@extends('layouts.index')

@section('content')
<section class="posts">
    <div class="posts__inner">
        @if(count($posts) === 0)
        <h1 class="posts__message">No data</h1>
        @else
        <div class="posts__body">
            @foreach($posts as $post)
            <div class="posts__post">
                <a href="/post/{{ $post->id }}" class="posts__post-title">{{ $post->title }}</a>
                <div class="posts__categories">
                    @foreach($post->categories as $category)
                    <p class="posts__categories-item">{{ $category->name }}</p>
                    @endforeach
                </div>
                <p class="posts__post-desc">{{ $post->description }}</p>
                <p class="posts__post-datetime">{{ $post->created_at }}</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endsection