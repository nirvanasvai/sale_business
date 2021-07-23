@extends('layouts.app')

@section('title','Личный Кабинет')

@section('content')

    <section class="cabinet">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Личный кабинет</li>
                </ol>
            </nav>
            <div class="cabinet-head">
                <div class="row align-items-center justify-content-start">
                    <div class="col-xl-3 pr-0">
                        <h1 class="page-title">
                            Личный кабинет
                        </h1>
                    </div>
                    <div class="col-xl-9">
                        <ul class="nav nav-tabs cabinet-tabs">
                            <li class="nav-item cabinet-tab">
                                <a class="nav-link cabinet-tab__link active" data-toggle="tab" href="#settingsProfile">
                                    <img src="/images/icons/profile-set.svg" alt="">
                                    Настройки профиля
                                </a>
                            </li>
                            <li class="nav-item cabinet-tab">
                                <a class="nav-link cabinet-tab__link" data-toggle="tab" href="#myObjects">
                                    <img src="/images/icons/myobjects.svg" alt="">
                                    Мои объявления
                                </a>
                            </li>
                            <li class="nav-item cabinet-tab">
                                <a class="nav-link cabinet-tab__link" data-toggle="tab" href="#myFavorites">
                                    <img src="/images/icons/myfav.svg" alt="">
                                    Избранное
                                </a>
                            </li>
                            <li class="nav-item cabinet-tab">
                                <a class="nav-link cabinet-tab__link" data-toggle="tab" href="#mySms">
                                    <img src="/images/icons/sms.svg" alt="">
                                    Сообщения
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cabinet-content tab-content">
                <div class="tab-pane fade show active" id="settingsProfile">
                    <h2 class="cabinet-content__title">
                        Настройки личного профиля
                    </h2>
                    <ul class="nav nav-tabs cabinet-tabs">
                        <li class="nav-item cabinet-tab">
                            <a class="nav-link cabinet-tab__link active" data-toggle="tab" href="#personalInfo">
                                Персональные данные
                            </a>
                        </li>
                        <li class="nav-item cabinet-tab">
                            <a class="nav-link cabinet-tab__link" data-toggle="tab" href="#changePassword">
                                Смена пароля
                            </a>
                        </li>
                    </ul>
                    <div class="cabinet-content tab-content">
                        @include('pages.cabinet.personal_data')
                        <div class="tab-pane fade" id="changePassword">
                            @include('pages.cabinet.password')
                        </div>
                    </div>
                </div>
                @include('pages.cabinet.add.my_add')
                @include('pages.cabinet.favorites')
                <div class="tab-pane fade" id="mySms">
                    <h2 class="cabinet-content__title">
                        Сообщения
                    </h2>
                    @livewire('chat')
                </div>
            </div>
            </div>

    </section>

@endsection
