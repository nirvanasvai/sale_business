@extends('layouts.app')

@section('content')
    <section class="login">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Вход в систему</li>
                </ol>
            </nav>
            <div class="row justify-content-between align-items-start">
                <div class="col-xl-5">
                    <h1 class="page-title">
                        Вход в систему
                    </h1>
                    <p class="page-subtitle">
                        Введите номер телефона и пароль, чтобы войти в систему
                    </p>
                </div>
                <div class="col-xl-5 offset-xl-1">
                    <form class="login-form" action="{{route('login')}}" method="post">
                        @csrf
                        <input type="tel" name="phone" class="form-control" placeholder="Введите номер телефона">
                        <input type="password" name="password" class="form-control" placeholder="Введите пароль">
                        <div class="login-actions d-flex justify-content-between">
                            <a href="{{route('register', session('city'))}}" class="btn button-grey">Регистрация</a>
                            <button type="submit" class="btn btn-primary button">Далее</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
