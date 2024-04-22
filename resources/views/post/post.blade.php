@extends('layouts.index')

@section('content')
<section class="post">
    <div class="post__inner">
        <div class="post__body">
            <h1 class="post__body-title">{{ $post->title }}</h1>
            <div class="post__categories">
                @foreach($post->categories as $category)
                <a class="post__categories-item" href="/category/{{ $category->id }}">{{ $category->name }}</a>
                @endforeach
            </div>
            <p class="post__body-description">{{ $post->description }}</p>
            <p class="post__body-datetime">{{ $post->created_at }}</p>
            <a class="post__body-author" href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
        </div>
    </div>
</section>
@endsection