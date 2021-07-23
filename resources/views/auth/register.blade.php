@extends('layouts.app')

@section('content')
    <section class="login">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{route('login', session('city'))}}">Вход в систему</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Регистрация</li>
                </ol>
            </nav>
            <div class="row justify-content-between align-items-start">
                <div class="col-xl-5">
                    <h1 class="page-title">
                        Регистрация
                    </h1>
                    <p class="page-subtitle">
                        Заполните персональную информацию, чтобы зарегистрироваться на нашей площадке
                    </p>
                </div>
                <div class="col-xl-5 offset-xl-1">
                    <form class="login-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="firstname" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Введите номер телефона">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="Введите имя">
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Введите фамилию">
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Введите почту">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Введите пароль">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Подтвердите пароль">
                        <div class="login-actions d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn button-grey" {{url()->previous()}}>Назад</button>
                            <button type="submit" class="btn btn-primary">Продолжить</button>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Я согласен с условиями <a href="#">публичной
                                    оферты</a></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
