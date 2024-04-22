@extends('layouts.index')

@section('content')
<section class="login">
    <div class="login__inner">
        <form action="login" class="login__form" method="POST">
            @csrf
            <div class="login__item">
                <label for="email" class="login__item-label">Email</label>
                <input type="text" class="login__item-input" name="email" id="email">
                @if($errors->has('email'))
                <p class="register__item-error">{{ $errors->first('email') }}</p>
                @elseif(Session::has('login_errors'))
                <p class="register__item-error">Email or password invalid</p>
                @endif
            </div>
            <div class="login__item">
                <label for="password" class="login__item-label">Password</label>
                <input type="password" class="login__item-input" name="password" id="password">
                @if($errors->has('password'))
                <p class="register__item-error">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <button type="submit" class="login__button">Login</button>
        </form>
    </div>
</section>
@endsection