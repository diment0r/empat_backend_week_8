@extends('layouts.index')

@section('content')
<section class="users">
    <div class="users__inner">
        @foreach($users as $user)
        <a class="users__item" href="/user/{{ $user->id }}">{{ $user->name }}</a>
        @endforeach
    </div>
</section>
@endsection