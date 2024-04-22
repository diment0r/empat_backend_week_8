@extends('layouts.index')

@section('content')
<section class="category">
    <div class="category__inner">
        @foreach($categories as $category)
        <a class="category__item" href="/category/{{ $category->id }}">{{ $category->name }}</a>
        @endforeach
    </div>
</section>
@endsection