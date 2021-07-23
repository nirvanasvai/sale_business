@extends('layouts.app')

@section('content')
    <section class="publish">
        <div class="container">
            <nav aria-label="breadcrumb" class="d-none d-xl-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Личный кабинет</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Мои объявления</li>
                </ol>
            </nav>
            <h1 class="page-title">
                Подать новое объявление
            </h1>
            @livewire('form')
        </div>
    </section>
@endsection

