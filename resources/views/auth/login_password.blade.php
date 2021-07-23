@extends('layouts.app')

@section('title','Войти')

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
                        Введите пароль
                    </h1>
                    <p class="page-subtitle">
                        Мы отправили вам СМС с паролем по указанному номеру. Вы всегда можете изменить его в личном кабинете.
                    </p>
                </div>
                <div class="col-xl-5 offset-xl-1">
                    <form class="login-form">
                        <input type="password" class="form-control" placeholder="Введите пароль">
                        <div class="login-actions d-flex justify-content-start align-items-center">
                            <button type="submit" class="btn btn-primary button">Далее</button>
                            <a href="#" class="remember-me">
                                Забыл пароль
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
