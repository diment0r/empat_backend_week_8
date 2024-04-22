@extends('layouts.index')

@section('content')
<section class="dashboard">
    <div class="dashboard__inner">
        <a class="dashboard__links" href="{{ route('posts') }}">Posts</a>
        <a class="dashboard__links" href="{{ route('categories') }}">Categories</a>
        <a class="dashboard__links" href="{{ route('users') }}">Users</a>
    </div>
</section>
@endsection