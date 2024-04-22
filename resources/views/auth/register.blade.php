@extends('layouts.index')

@section('content')
<section class="register">
    <div class="register__inner">
        <form action="register" class="register__form" method="POST">
            @csrf
            <div class="register__item">
                <label for="name" class="register__item-label">Name</label>
                <input type="text" class="register__item-input" name="name" id="name">
                @if($errors->has('name'))
                <p class="register__item-error">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="register__item">
                <label for="email" class="register__item-label">Email</label>
                <input type="text" class="register__item-input" name="email" id="email">
                @if($errors->has('email'))
                <p class="register__item-error">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="register__item">
                <label for="password" class="register__item-label">Password</label>
                <input type="password" class="register__item-input" name="password" id="password">
                @if($errors->has('password'))
                <p class="register__item-error">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="register__item">
                <label for="password_confirmation" class="register__item-label">Confirm password</label>
                <input type="password" class="register__item-input" name="password_confirmation" id="password_confirmation">
            </div>
            <button type="submit" class="register__button">Register</button>
        </form>
    </div>
</section>
@endsection