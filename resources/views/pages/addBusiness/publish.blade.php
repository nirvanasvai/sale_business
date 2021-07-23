@extends('layouts.app')

@section('content')
    <section class="publish">
        <div class="container">
            <nav aria-label="breadcrumb" class="d-none d-xl-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Личный кабинет</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Мои объявления</li>
                </ol>
            </nav>
            <h1 class="page-title">
                Подать новое объявление
            </h1>
            <div class="row justify-content-between">
                <div class="col-xl-9">
                    <form class="publish-form">
                        <div class="col-xl-12 pl-0 pr-0 pl-xl-0">
                            <div class="publish-block">
                                <div class="publish-categories">
                                    <h2 class="publish-subtitle">
                                        Выберите категорию <span>*</span>
                                    </h2>
                                    <div class="col-xl-5 pl-0 d-none d-xl-block">
                                        <input type="search" class="form-control search publish-input" placeholder="Поиск...">
                                    </div>
                                    <select class="custom-select cabinet-select d-block d-xl-none">
                                        <option selected>Выбрать категорию...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="publish-categories__list d-none d-xl-flex flex-wrap">
                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">
                                                <img src="img/categories/cat-1.svg" alt="">
                                                Общепит
                                            </label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"><img src="img/categories/cat-2.svg" alt="">Бары, пабы, клубы</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3"><img src="img/categories/cat-3.svg" alt="">Продуктовый ритейл</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4"><img src="img/categories/cat-4.svg" alt="">Гостеприимство</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5"><img src="img/categories/cat-5.svg" alt="">Автодело</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6"><img src="img/categories/cat-6.svg" alt="">Магазин товаров</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7"><img src="img/categories/cat-7.svg" alt="">Доставка еды</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label" for="customCheck8"><img src="img/categories/cat-8.svg" alt="">Индустрия красоты</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9"><img src="img/categories/cat-9.svg" alt="">Активный отдых, развлечения</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10"><img src="img/categories/cat-10.svg" alt="">Островки, отделы в ТРЦ</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11"><img src="img/categories/cat-11.svg" alt="">Производство</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12"><img src="img/categories/cat-12.svg" alt="">Рекламный бизнес</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label" for="customCheck13"><img src="img/categories/cat-13.svg" alt="">Аптеки</label>
                                        </div>


                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                            <label class="custom-control-label" for="customCheck14"><img src="img/categories/cat-14.svg" alt="">Онлайн бизнес</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                            <label class="custom-control-label" for="customCheck15"><img src="img/categories/cat-15.svg" alt="">Бани, сауны</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck16">
                                            <label class="custom-control-label" for="customCheck16"><img src="img/categories/cat-16.svg" alt="">Спорт</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                                            <label class="custom-control-label" for="customCheck17"><img src="img/categories/cat-17.svg" alt="">Зоо бизнес</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                                            <label class="custom-control-label" for="customCheck18"><img src="img/categories/cat-18.svg" alt="">Медицинские центры, стоматологии</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                                            <label class="custom-control-label" for="customCheck19"><img src="img/categories/cat-19.svg" alt="">Строительный бизнес</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck20">
                                            <label class="custom-control-label" for="customCheck20"><img src="img/categories/cat-20.svg" alt="">Туристический бизнес</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck21">
                                            <label class="custom-control-label" for="customCheck21"><img src="img/categories/cat-21.svg" alt="">Образование</label>
                                        </div>

                                        <div class="custom-control custom-checkbox categories-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck22">
                                            <label class="custom-control-label" for="customCheck22"><img src="img/categories/cat-22.svg" alt="">Другие виды бизнеса</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block">
                                <h2 class="publish-subtitle">
                                    Заголовок объявления <span>*</span>
                                </h2>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <label for="businessName" class="cabinet-form__label">
                                            Название бизнеса
                                        </label>
                                    </div>
                                    <div class="pl-0 col-xl-8 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Введите название">
                                    </div>
                                </div>
                                <div class="col-xl-8 pl-0 offset-xl-4">
                                    <p class="note">Например: Цветочный магазин в центре левого берега</p>
                                </div>
                            </div>

                            <div class="publish-block">
                                <h2 class="publish-subtitle">
                                    Форма и возраст бизнеса <span>*</span>
                                </h2>
                                <div class="publish-wrap d-flex align-items-center justify-content-start">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Организационно-правовая форма компании
                                        </p>
                                    </div>
                                    <div class="col-12 col-xl-8 pl-0 pl-xl-3">
                                        <div class="d-none d-xl-flex">
                                            <div class="custom-control custom-radio cabinet-radio">
                                                <input type="radio" id="individualP" name="individualP" class="custom-control-input">
                                                <label class="custom-control-label" for="individualP">ИП</label>
                                            </div>
                                            <div class="custom-control custom-radio cabinet-radio">
                                                <input type="radio" id="partnerShip" name="partnerShip" class="custom-control-input">
                                                <label class="custom-control-label" for="partnerShip">ТОО</label>
                                            </div>
                                        </div>
                                        <select class="custom-select cabinet-select d-block d-xl-none">
                                            <option selected>Выберите</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-start">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Возраст бизнеса
                                        </p>
                                    </div>
                                    <div class="col-12 col-xl-3 pl-0 pl-xl-3">
                                        <select class="custom-select cabinet-select">
                                            <option selected>Выберите</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-xl-0 pl-0">
                                        <p class="cabinet-form__label">
                                            Является ли бизнес франшизой *
                                        </p>
                                    </div>
                                    <div class="col-12 col-xl-8 pl-0 pl-xl-3">
                                        <div class="d-none d-xl-flex">
                                            <div class="custom-control custom-radio cabinet-radio">
                                                <input type="radio" id="yes" name="yes" class="custom-control-input">
                                                <label class="custom-control-label" for="yes">Да</label>
                                            </div>
                                            <div class="custom-control custom-radio cabinet-radio">
                                                <input type="radio" id="no" name="no" class="custom-control-input">
                                                <label class="custom-control-label" for="no">Нет</label>
                                            </div>
                                        </div>
                                        <select class="custom-select cabinet-select d-block d-xl-none">
                                            <option selected>Выберите</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="publish-block fin-status">
                                <h2 class="publish-subtitle">
                                    Финансовое состояние бизнеса <span>*</span>
                                </h2>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Оборот компании за последние 6 мес.
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">

                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-start justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Чистая прибыль компании за последние 6 мес.
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                        <p class="note">
                                            Подтверждающие документы ускоряют продажу бизнеса в 5 раз
                                            <small>Это может быть любой файл: выписка из 1С в формате pdf, скриншот или файл excel</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-start justify-content-start">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Документальное подтверждение оборота из системы учёта
                                        </p>
                                    </div>
                                    <div class="col-xl-4 pl-0 pl-xl-3 pr-0">
                                        <div class="custom-file publish-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label add-docs" for="customFile"><img src="img/icons/add-doc.svg" alt="">Добавить документ</label>
                                        </div>
                                        <div class="added">
                                            <div class="added-file d-flex">
                                                Выписка из системы 1С.pdf
                                                <div class="added-delete">
                                                    <img src="img/icons/delete-icon.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="added-file d-flex">
                                                Скрин выручки.jpg
                                                <div class="added-delete">
                                                    <img src="img/icons/delete-icon.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="added-file d-flex">
                                                Продажи.xls
                                                <div class="added-delete">
                                                    <img src="img/icons/delete-icon.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block">
                                <h2 class="publish-subtitle">
                                    Продажи <span>*</span>
                                </h2>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Средний чек
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                        <a href="#" class="link">
                                            Как посчитать
                                        </a>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Среднемесячное кол-во продаж за последние 6 мес.
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                        <a href="#" class="link">
                                            Как посчитать
                                        </a>
                                    </div>
                                </div>

                            </div>


                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Помещение <span>*</span>
                                    </h2>
                                    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="noPremises">
                                        <label class="custom-control-label" for="noPremises">В моем бизнесе нет помещений</label>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Организационно-правовая форма компании
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3">
                                        <div class="d-flex">
                                            <div class="custom-control custom-radio cabinet-radio">
                                                <input type="radio" id="owned" name="owned" class="custom-control-input">
                                                <label class="custom-control-label" for="owned">В собственности</label>
                                            </div>
                                            <div class="custom-control custom-radio cabinet-radio">
                                                <input type="radio" id="onLease" name="onLease" class="custom-control-input">
                                                <label class="custom-control-label" for="onLease">В аренде</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-start">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Кол-во помещений
                                        </p>
                                    </div>
                                    <div class="col-xl-3 pl-0 pl-xl-3">
                                        <select class="custom-select cabinet-select">
                                            <option selected>Кол-во</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Общая площадь
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Стоимость месячной аренды.
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Стоимость ком. учлуг в месяц
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Персонал <span>*</span>
                                    </h2>
                                    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="noPersonal">
                                        <label class="custom-control-label" for="noPersonal">В моем бизнесе нет персонала</label>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Кол-во сотрудников
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Фонд оплаты труда в мес.
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Напишите цифру">
                                    </div>
                                </div>

                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Оборудование и мебель <span>*</span>
                                    </h2>
                                    <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="noEquipment">
                                        <label class="custom-control-label" for="noEquipment">В моем бизнесе нет оборудования и мебели</label>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-start justify-content-between">
                                    <div class="col-xl-3 pl-0 pl-xl-0">
                                        <label for="listEq" class="cabinet-form__label">
                                            Список оборудования
                                        </label>
                                    </div>
                                    <div class="col-12 col-xl-8 pl-0 pl-xl-3 pr-0">
                                           <textarea class="form-control publish-textarea" placeholder="Напишите список оборудования через запятую" id="listEq">
                                           </textarea>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-start justify-content-between">
                                    <div class="col-xl-3 pl-0 pl-xl-0">
                                        <label for="listFurniture" class="cabinet-form__label">
                                            Список мебели
                                        </label>
                                    </div>
                                    <div class="col-12 col-xl-8 pl-0 pl-xl-3 pr-0">
                                           <textarea class="form-control publish-textarea" placeholder="Напишите список мебели через запятую" id="listFurniture">
                                           </textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Фотографии <span>*</span>
                                    </h2>
                                    Объявления с фото получают в 5 раз больше откликов
                                </div>
                                <div class="col-xl-12 pl-0">
                                    <div class="publish-photos row justify-content-around">
                                        <div class="col-5 col-xl-4">
                                            <div class="photo">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    <div class="icon">
                                                        <img src="img/icons/camera-icon.svg" alt="">
                                                    </div>
                                                    <span class="text">
                                                            Нажмите, чтобы добавить главное фото
                                                        </span>
                                                </label>
                                                <div class="del d-block d-xl-none">
                                                    <img src="img/icons/del-r.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 col-xl-4">
                                            <div class="photo">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    <div class="icon">
                                                        <img src="img/icons/camera-icon.svg" alt="">
                                                    </div>
                                                    <span class="text">
                                                            Нажмите, чтобы добавить главное фото
                                                        </span>
                                                </label>
                                                <div class="del d-block d-xl-none">
                                                    <img src="img/icons/del-r.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 col-xl-4">
                                            <div class="photo">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    <div class="icon">
                                                        <img src="img/icons/camera-icon.svg" alt="">
                                                    </div>
                                                    <span class="text">
                                                            Нажмите, чтобы добавить главное фото
                                                        </span>
                                                </label>
                                                <div class="del d-block d-xl-none">
                                                    <img src="img/icons/del-r.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 col-xl-4">
                                            <div class="photo">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    <div class="icon">
                                                        <img src="img/icons/camera-icon.svg" alt="">
                                                    </div>
                                                    <span class="text">
                                                            Нажмите, чтобы добавить главное фото
                                                        </span>
                                                </label>
                                                <div class="del d-block d-xl-none">
                                                    <img src="img/icons/del-r.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 col-xl-4">
                                            <div class="photo">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    <div class="icon">
                                                        <img src="img/icons/camera-icon.svg" alt="">
                                                    </div>
                                                    <span class="text">
                                                            Нажмите, чтобы добавить главное фото
                                                        </span>
                                                </label>
                                                <div class="del d-block d-xl-none">
                                                    <img src="img/icons/del-r.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 col-xl-4">
                                            <div class="photo">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">
                                                    <div class="icon">
                                                        <img src="img/icons/camera-icon.svg" alt="">
                                                    </div>
                                                    <span class="text">
                                                            Нажмите, чтобы добавить главное фото
                                                        </span>
                                                </label>
                                                <div class="del d-block d-xl-none">
                                                    <img src="img/icons/del-r.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block business-price">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Цена, ₸
                                    </h2>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <p class="cabinet-form__label">
                                            Напишите цену своего бизнеса
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Введите цифру">
                                    </div>
                                </div>
                                <div class="col-xl-8 pl-0 pl-xl-3 offset-xl-4">
                                    <p class="note">
                                        Рекоммендуемая цена — <span>6 500 000 ₸</span>
                                        <a href="#" class="link">Калькулятор рассчета стоимости бизнеса</a>
                                    </p>
                                </div>
                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Автоматизация
                                    </h2>
                                </div>
                                <div class="publish-wrap d-flex flex-wrap align-items-start justify-content-between">
                                    <div class="col-12 col-xl-4 mb-3 mb-xl-5 pl-0">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="accountingSystem">
                                            <label class="custom-control-label" for="accountingSystem">Система финансового учета</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-8 mb-3 mb-xl-0 pl-0 pl-xl-3">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="systemCRM">
                                            <label class="custom-control-label" for="systemCRM">Система СRM (учет клиентов и продаж)</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 mb-3 mb-xl-0 pl-0">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="clientBase">
                                            <label class="custom-control-label" for="clientBase">Клиентская база</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Контроль
                                    </h2>
                                </div>
                                <div class="publish-wrap d-flex flex-wrap align-items-start justify-content-start">
                                    <div class="col-xl-4 pl-0 mb-3 mb-xl-0">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="ccTV">
                                            <label class="custom-control-label" for="ccTV">Видеонаблюдение</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pl-0 pl-xl-3">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="callRecording">
                                            <label class="custom-control-label" for="callRecording">Запись звонков</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Маркетинговые каналы
                                    </h2>
                                </div>
                                <div class="publish-wrap d-flex flex-wrap align-items-start justify-content-between">
                                    <div class="col-xl-4 pl-0 mb-4">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="markGis">
                                            <label class="custom-control-label" for="markGis">Отметка в системе 2ГИС</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="noticeBoards">
                                            <label class="custom-control-label" for="noticeBoards">Доски объявлений</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="siteYour">
                                            <label class="custom-control-label" for="siteYour">Сайт</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pl-0 mb-4">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="faceB">
                                            <label class="custom-control-label" for="faceB">Фейсбук</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="instaGram">
                                            <label class="custom-control-label" for="instaGram">Инстаграм</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="vKontakte">
                                            <label class="custom-control-label" for="vKontakte">Вконтакте</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Маркетинговые инструменты
                                    </h2>
                                </div>
                                <div class="publish-wrap d-flex flex-wrap align-items-start justify-content-start">
                                    <div class="col-xl-4 mb-3 mb-xl-4 pl-0">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-s">
                                            <input type="checkbox" class="custom-control-input" id="contextual">
                                            <label class="custom-control-label" for="contextual">Контекстная реклама</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 pl-0 mb-3 mb-xl-0 pl-xl-3">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="seoProm">
                                            <label class="custom-control-label" for="seoProm">SEO-продвижение</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 pl-0 mb-3 mb-xl-0">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="targeting">
                                            <label class="custom-control-label" for="targeting">Таргетированная реклама</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-between">
                                    <div class="col-xl-4 pl-xl-0 pl-0">
                                        <p class="cabinet-form__label">
                                            Затраты на рекламу в мес.
                                        </p>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Введите цифру">
                                    </div>
                                </div>
                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Описание от владельца
                                    </h2>
                                </div>
                                <div class="publish-wrap d-flex align-items-start justify-content-between">
                                    <div class="col-xl-3 pl-0 pl-xl-0">
                                        <label for="descriptionBusiness" class="cabinet-form__label">
                                            Опишите свой бизнес
                                        </label>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                           <textarea class="form-control publish-textarea" placeholder="Расскажите о своем бизнесе в свободной форме" id="descriptionBusiness">
                                           </textarea>
                                    </div>
                                </div>
                                <div class="col-xl-8 pl-0 pl-xl-3 offset-xl-4">
                                    <p class="note">
                                        Не указывайте в описании цену, номера телефонов, e-mail и другие контактные данные
                                    </p>
                                </div>
                            </div>

                            <div class="publish-block">
                                <div class="heading">
                                    <h2 class="publish-subtitle">
                                        Контакты
                                    </h2>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-start">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <label for="businessName" class="cabinet-form__label">
                                            Город
                                        </label>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <select class="custom-select cabinet-select">
                                            <option selected>Город</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-start justify-content-start">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <label for="businessName" class="cabinet-form__label">
                                            Номер телефона
                                        </label>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3">
                                        <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                            <input type="checkbox" class="custom-control-input" id="userPhone">
                                            <label class="custom-control-label" for="userPhone">+7 (707) 885-88-93</label>
                                        </div>
                                        <a href="dwddw" class="link d-block">Добавить номер телефона</a>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-start">
                                    <div class="offset-xl-4 pl-0 pl-xl-3 col-xl-8 pr-0">
                                        <input type="text" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="+7 (___) ___-__-__">
                                        <div class="d-flex mt-4">
                                            <a href="#" class="button-g">
                                                Подтвердить
                                            </a>
                                            <div class="col-xl-5">
                                                <input type="num" class="form-control cabinet-form__input" id="businessName" name="businesName" placeholder="Код из смс">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="publish-wrap d-flex align-items-center justify-content-start">
                                    <div class="col-xl-4 pl-0 pl-xl-0">
                                        <label for="businessName" class="cabinet-form__label">
                                            Электронная почта
                                        </label>
                                    </div>
                                    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                                        <input type="text" class="form-control cabinet-form__input mail" id="businessName" name="businesName" placeholder="businessbuy@gmail.com">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="publish-block d-none d-xl-block">
                            <div class="heading">
                                <h2 class="publish-subtitle">
                                    Предпросмотр
                                </h2>
                            </div>
                            <div class="col-xl-12 pl-0 pr-0">
                                <div class="preview">
                                    <div class="object-card d-flex justify-content-xl-start">
                                        <div class="object-img">
                                            <img src="img/objects/object-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-xl-5 pl-xl-0 ml-3">
                                            <div class="object-text">
                                                <h3 class="object-name">
                                                    <a href="#">
                                                        Лаундж-бар Like Shisha
                                                    </a>
                                                </h3>
                                                <p class="object-excerpt">
                                                    28 аппаратов привезенных из Арабских Эмиратов специальным рейсом, ручной табак, изготавливаекмый...
                                                </p>
                                                <div class="object-price">6 000 000 Т</div>
                                                <div class="object-profit">Чистая прибыль: <span>350 000 Т / мес.</span></div>
                                                <div class="object-payback">Окупаемость: <span>17 мес.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="publish-sub pt-5 pt-xl-0 d-flex flex-wrap align-items-center">
                            <div class="col-12 col-xl-4 mb-3 pr-0 pl-0 d-block d-xl-none">
                                <a href="object-preview.html" class="button-prev">
                                    Предпросмотр
                                </a>
                            </div>
                            <div class="col-12 col-xl-4 pr-0 pl-0">
                                <button type="submit" class="button-m">
                                    Опубликовать объявление
                                </button>
                            </div>
                            <div class="col-12 pl-0 pr-xl-3 col-xl-7">
                                <p>
                                    Нажимая на кнопку «Подать объявление»,
                                    вы соглашаетесь с <a href="#">правилами размещения объявлений</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="publish-reset sticky-top">
                        <a href="#" class="button">
                            <img src="img/icons/b-close.svg" alt="">
                            Сбросить форму
                        </a>
                        <div class="progress"></div>
                        <div class="publish-reset__body">
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiCat">
                                <label class="custom-control-label" for="rBusiCat">Категория бизнеса</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiName">
                                <label class="custom-control-label" for="rBusiName">Название бизнеса</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiForm">
                                <label class="custom-control-label" for="rBusiForm">Форма и возраст</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiFin">
                                <label class="custom-control-label" for="rBusiFin">Финансовое состояние</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiSal">
                                <label class="custom-control-label" for="rBusiSal">Продажи</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiPrem">
                                <label class="custom-control-label" for="rBusiPrem">Помещение</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiPers">
                                <label class="custom-control-label" for="rBusiPers">Персонал</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiEqu">
                                <label class="custom-control-label" for="rBusiEqu">Оборудование и мебель</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiPho">
                                <label class="custom-control-label" for="rBusiPho">Фотографии</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiPrice">
                                <label class="custom-control-label" for="rBusiPrice">Цена</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiAuto">
                                <label class="custom-control-label" for="rBusiAuto">Автоматизация</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiMarketing">
                                <label class="custom-control-label" for="rBusiMarketing">Маркетинг</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiDes">
                                <label class="custom-control-label" for="rBusiDes">Описание</label>
                            </div>
                            <div class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="rBusiCnt">
                                <label class="custom-control-label" for="rBusiCnt">Контакты</label>
                            </div>
                            <div class="text">
                                Срок жизни объявления на сайте — 7 дней. Продлить объявление можно в вашем личном кабинете
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

