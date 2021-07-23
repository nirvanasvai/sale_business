@extends('layouts.app')

@section('content')

{{--    {{dd($catalog->metas->keyBy('option')['age']->value)}}}--}}

    {{--    {{dd(array_search('price', $catalog->metas))}}--}}
    <section class="offer">
        <div class="container">
            <div class="col-12 col-sm-12 col-xl-12 pl-xl-0 p-0">
                <div class="offer-text">
                    <div class="offer-geo">
                        <img src="/images/icons/geo.svg" alt="">
                        Нур-Султан
                    </div>
                    <h1 class="offer-title">
                        Продажа готового бизнеса в Астане
                    </h1>
                    <p class="offer-subtitle d-none d-xl-block">
                        Площадка по продаже готового бизнеса
                        в Казахстане
                    </p>
                </div>
                <div class="offer-actions row align-items-center">
                    <div class="col-12 col-sm-12 col-xl-4 mb-4 mb-xl-0">
                        <a href="{{route('catalog', session('city'))}}" class="button offer-button">Начать поиск
                            бизнеса</a>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-4">
                        <a href="{{route('publish', session('city'))}}" class="button-o">Продать бизнес</a>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="offer-features row align-items-center">
                        <div class="col-xl-4 p-0 p-sm-0 pl-xl-0 mb-3">
                            <div class="offer-feature d-flex align-items-center">
                                <img src="/images/icons/ft-1.svg" alt="ft">
                                Проверка финансового состояния бизнеса
                            </div>
                        </div>
                        <div class="col-xl-4 p-0 p-sm-2 mb-3">
                            <div class="offer-feature d-flex align-items-center">
                                <img src="/images/icons/ft-2.svg" alt="ft">
                                Проверка бизнеса на наличие долгов
                            </div>
                        </div>
                        <div class="col-xl-3 p-0 p-sm-0 mb-3">
                            <div class="offer-feature d-flex align-items-center">
                                <img src="/images/icons/ft-3.svg" alt="ft">
                                Сопровождение сделок
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose">
        <div class="container">
            <div class="col-12 col-sm-12 col-xl-12 pl-0 d-none d-sm-none d-xl-block">
                <h2 class="title">
                    Выберите бизнес из каталога
                </h2>
            </div>
            <p class="d-block d-sm-block d-xl-none filters-subtitle">
                Найдено 1208 предложений
            </p>
            <div class="filters d-none d-sm-none d-xl-block">
                <div class="filters-wrap">
                    <div class="filters-block row justify-content-between align-items-center">
                        <div class="col-12 col-sm-12 col-xl-3">
                            <select class="custom-select filters-select">
                                <option selected>Выберите город</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-xl-3">
                            <select class="custom-select filters-select">
                                <option selected>Выберите категорию</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-xl-2">
                            <select class="custom-select filters-select">
                                <option selected>Цена от</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-xl-2">
                            <select class="custom-select filters-select">
                                <option selected>Цена до</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-xl-2 pl-2">
                            <a href="#" class="advanced d-flex align-items-center">
                                <img src="/images/icons/advanced-search.svg" alt="">
                                Расширенный поиск
                            </a>
                        </div>
                    </div>
                    <div class="offset-xl-7 col-12 col-sm-12 col-xl-5">
                        <div class="filters-actions row justify-content-end align-items-center">
                            <a href="#" class="reset d-flex align-items-center">
                                <img src="/images/icons/reset.svg" alt="reset">
                                Сбросить фильтр
                            </a>
                            <a href="#" class="button filters-button">
                                Показать резуальтаты <span class="count">(36)</span>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="filters-subtitle">
                    Найдено 1208 предложений
                </p>
                <div class="filters-sub d-flex align-items-center">
                    <p>Сначала:</p>
                    <a href="#" class="filters-sub__link active">новые предложения</a>
                    <a href="#" class="filters-sub__link">по низкой цене</a>
                    <a href="#" class="filters-sub__link">по высокой цене</a>
                </div>
            </div>
            <div class="choose-list">
                <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                    <div class="object-img d-none d-sm-none d-xl-block">
                        <img src="/images/objects/object-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                        <div class="object-text">
                            <h3 class="object-name">
                                <a href="object.html">
                                    Цветочный магазин в центре левого берега
                                </a>
                            </h3>
                            <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                <img src="/images/objects/object-1.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="object-excerpt d-none d-sm-none d-xl-block">
                                Холодильник произведён и собран в Италии. Гарантийный срок непрерывной службы 10 лет.
                                Установлен японский...
                            </p>
                            <div class="object-price d-xl-block d-none d-sm-none">5 000 000 Т</div>
                            <div class="object-profit">Чистая прибыль: <span>300 000 Т / мес.</span></div>
                            <div class="object-payback">Окупаемость: <span>17 мес.</span></div>
                            <p class="object-excerpt d-block d-sm-block d-xl-none">
                                Холодильник произведён и собран в Италии. Гарантийный срок непрерывной службы 10 лет.
                                Установлен японский...
                            </p>
                            <div class="object-footer d-flex justify-content-between">
                                <div class="object-block d-flex justify-content-between align-items-start">
                                    <div class="object-city">
                                        Нур-Султан (Астана)
                                    </div>
                                    <div class="object-date">
                                        07.09.2020
                                    </div>
                                    <div class="object-views">
                                        <img src="/images/icons/views.svg" alt="views">
                                        1025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                        <div class="object-wrap">
                            <div class="object-price d-xl-none d-block d-sm-block">5 000 000 Т</div>
                            <div class="object-check d-flex">
                                <div class="object-check__item">
                                    <img src="/images/icons/check-1.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-2.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-3.svg" alt="">
                                </div>
                            </div>
                            <div class="add-favorite">
                                <a href="#">
                                    <img src="/images/icons/favorite.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                    <div class="object-img d-none d-sm-none d-xl-block">
                        <img src="/images/objects/object-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                        <div class="object-text">
                            <h3 class="object-name">
                                <a href="object.html">
                                    Производство полуфабрикатов
                                </a>
                            </h3>
                            <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                <img src="/images/objects/object-2.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="object-excerpt d-none d-sm-none d-xl-block">
                                Пельменный цех со всем необходимым оборудованием в промышленном районе города...
                            </p>
                            <div class="object-price d-xl-block d-none d-sm-none">15 000 000 Т</div>
                            <div class="object-profit">Чистая прибыль: <span>750 000 Т / мес.</span></div>
                            <div class="object-payback">Окупаемость: <span>20 мес.</span></div>
                            <p class="object-excerpt d-block d-sm-block d-xl-none">
                                Пельменный цех со всем необходимым оборудованием в промышленном районе города...
                            </p>
                            <div class="object-footer d-flex justify-content-between">
                                <div class="object-block d-flex justify-content-between align-items-start">
                                    <div class="object-city">
                                        Нур-Султан (Астана)
                                    </div>
                                    <div class="object-date">
                                        07.09.2020
                                    </div>
                                    <div class="object-views">
                                        <img src="/images/icons/views.svg" alt="views">
                                        1025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                        <div class="object-wrap">
                            <div class="object-price d-xl-none d-block d-sm-block">15 000 000 Т</div>
                            <div class="object-check d-flex">
                                <div class="object-check__item">
                                    <img src="/images/icons/check-1.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-2.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-3.svg" alt="">
                                </div>
                            </div>
                            <div class="add-favorite">
                                <a href="#">
                                    <img src="/images/icons/favorite.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                    <div class="object-img d-none d-sm-none d-xl-block">
                        <img src="/images/objects/object-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                        <div class="object-text">
                            <h3 class="object-name">
                                <a href="object.html">
                                    Йога-центр в Золотом квадрате
                                </a>
                            </h3>
                            <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                <img src="/images/objects/object-3.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="object-excerpt d-none d-sm-none d-xl-block">
                                ПГрупповые и индифидеальные занятия. Евроремонт, новое оборудование, собственная
                                парковка...
                            </p>
                            <div class="object-price d-xl-block d-none d-sm-none">38 000 000 Т</div>
                            <div class="object-profit">Чистая прибыль: <span>1 200 000 Т / мес.</span></div>
                            <div class="object-payback">Окупаемость: <span>32 мес.</span></div>
                            <p class="object-excerpt d-block d-sm-block d-xl-none">
                                Групповые и индифидеальные занятия. Евроремонт, новое оборудование, собственная
                                парковка...
                            </p>
                            <div class="object-footer d-flex justify-content-between">
                                <div class="object-block d-flex justify-content-between align-items-start">
                                    <div class="object-city">
                                        Нур-Султан (Астана)
                                    </div>
                                    <div class="object-date">
                                        07.09.2020
                                    </div>
                                    <div class="object-views">
                                        <img src="/images/icons/views.svg" alt="views">
                                        1025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                        <div class="object-wrap">
                            <div class="object-price d-xl-none d-block d-sm-block">38 000 000 Т</div>
                            <div class="object-check d-flex">
                                <div class="object-check__item">
                                    <img src="/images/icons/check-1.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-2.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-3.svg" alt="">
                                </div>
                            </div>
                            <div class="add-favorite">
                                <a href="#">
                                    <img src="/images/icons/favorite.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                    <div class="object-img d-none d-sm-none d-xl-block">
                        <img src="/images/objects/object-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                        <div class="object-text">
                            <h3 class="object-name">
                                <a href="object.html">
                                    Бутик женской одежда в ТЦ Сарыарка
                                </a>
                            </h3>
                            <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                <img src="/images/objects/object-4.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="object-excerpt d-none d-sm-none d-xl-block">
                                Групповые и индифидеальные занятия. Евроремонт, новое оборудование, собственная
                                парковка...
                            </p>
                            <div class="object-price d-xl-block d-none d-sm-none">6 500 000 Т</div>
                            <div class="object-profit">Чистая прибыль: <span>400 000 Т / мес.</span></div>
                            <div class="object-payback">Окупаемость: <span>16 мес.</span></div>
                            <p class="object-excerpt d-block d-sm-block d-xl-none">
                                Групповые и индифидеальные занятия. Евроремонт, новое оборудование, собственная
                                парковка...
                            </p>
                            <div class="object-footer d-flex justify-content-between">
                                <div class="object-block d-flex justify-content-between align-items-start">
                                    <div class="object-city">
                                        Нур-Султан (Астана)
                                    </div>
                                    <div class="object-date">
                                        07.09.2020
                                    </div>
                                    <div class="object-views">
                                        <img src="/images/icons/views.svg" alt="views">
                                        1025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                        <div class="object-wrap">
                            <div class="object-price d-xl-none d-block d-sm-block">6 500 000 Т</div>
                            <div class="object-check d-flex">
                                <div class="object-check__item">
                                    <img src="/images/icons/check-1.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-2.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-3.svg" alt="">
                                </div>
                            </div>
                            <div class="add-favorite">
                                <a href="#">
                                    <img src="/images/icons/favorite.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                    <div class="object-img d-none d-sm-none d-xl-block">
                        <img src="/images/objects/object-5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                        <div class="object-text">
                            <h3 class="object-name">
                                <a href="object.html">
                                    Лаундж-бар Like Shisha
                                </a>
                            </h3>
                            <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                <img src="/images/objects/object-5.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="object-excerpt d-none d-sm-none d-xl-block">
                                28 аппаратов привезенных из Арабских Эмиратов специальным рейсом, ручной табак,
                                изготавливаекмый...
                            </p>
                            <div class="object-price d-xl-block d-none d-sm-none">6 000 000 Т</div>
                            <div class="object-profit">Чистая прибыль: <span>350 000 Т / мес.</span></div>
                            <div class="object-payback">Окупаемость: <span>17 мес.</span></div>
                            <p class="object-excerpt d-block d-sm-block d-xl-none">
                                28 аппаратов привезенных из Арабских Эмиратов специальным рейсом, ручной табак,
                                изготавливаекмый...
                            </p>
                            <div class="object-footer d-flex justify-content-between">
                                <div class="object-block d-flex justify-content-between align-items-start">
                                    <div class="object-city">
                                        Нур-Султан (Астана)
                                    </div>
                                    <div class="object-date">
                                        07.09.2020
                                    </div>
                                    <div class="object-views">
                                        <img src="/images/icons/views.svg" alt="views">
                                        1025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                        <div class="object-wrap">
                            <div class="object-price d-xl-none d-block d-sm-block">6 000 000 Т</div>
                            <div class="object-check d-flex">
                                <div class="object-check__item">
                                    <img src="/images/icons/check-1.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-2.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-3.svg" alt="">
                                </div>
                            </div>
                            <div class="add-favorite">
                                <a href="#">
                                    <img src="/images/icons/favorite.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                    <div class="object-img d-none d-sm-none d-xl-block">
                        <img src="/images/objects/object-6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                        <div class="object-text">
                            <h3 class="object-name">
                                <a href="object.html">
                                    Детское антикафе
                                </a>
                            </h3>
                            <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                <img src="/images/objects/object-6.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="object-excerpt d-none d-sm-none d-xl-block">
                                Помещение в аренде на выгодных условиях. Антикафе для проведения детских мероприятий...
                            </p>
                            <div class="object-price d-xl-block d-none d-sm-none">3 000 000 Т</div>
                            <div class="object-profit">Чистая прибыль: <span>200 000 Т / мес.</span></div>
                            <div class="object-payback">Окупаемость: <span>15 мес.</span></div>
                            <p class="object-excerpt d-block d-sm-block d-xl-none">
                                Помещение в аренде на выгодных условиях. Антикафе для проведения детских мероприятий...
                            </p>
                            <div class="object-footer d-flex justify-content-between">
                                <div class="object-block d-flex justify-content-between align-items-start">
                                    <div class="object-city">
                                        Нур-Султан (Астана)
                                    </div>
                                    <div class="object-date">
                                        07.09.2020
                                    </div>
                                    <div class="object-views">
                                        <img src="/images/icons/views.svg" alt="views">
                                        1025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                        <div class="object-wrap">
                            <div class="object-price d-xl-none d-block d-sm-block">3 000 000 Т</div>
                            <div class="object-check d-flex">
                                <div class="object-check__item">
                                    <img src="/images/icons/check-1.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-2.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-3.svg" alt="">
                                </div>
                            </div>
                            <div class="add-favorite">
                                <a href="#">
                                    <img src="/images/icons/favorite.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                    <div class="object-img d-none d-sm-none d-xl-block">
                        <img src="/images/objects/object-7.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                        <div class="object-text">
                            <h3 class="object-name">
                                <a href="object.html">
                                    Салон красоты на Самале
                                </a>
                            </h3>
                            <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                <img src="/images/objects/object-7.jpg" class="img-fluid" alt="">
                            </div>
                            <p class="object-excerpt d-none d-sm-none d-xl-block">
                                Полный комплекс услуг. Матера работаю на проценте. Куплены 2 больших педикюрных
                                кресла...
                            </p>
                            <div class="object-price d-xl-block d-none d-sm-none">4 500 000 Т</div>
                            <div class="object-profit">Чистая прибыль: <span>350 000 Т / мес.</span></div>
                            <div class="object-payback">Окупаемость: <span>13 мес.</span></div>
                            <p class="object-excerpt d-block d-sm-block d-xl-none">
                                Полный комплекс услуг. Матера работаю на проценте. Куплены 2 больших педикюрных
                                кресла...
                            </p>
                            <div class="object-footer d-flex justify-content-between">
                                <div class="object-block d-flex justify-content-between align-items-start">
                                    <div class="object-city">
                                        Нур-Султан (Астана)
                                    </div>
                                    <div class="object-date">
                                        07.09.2020
                                    </div>
                                    <div class="object-views">
                                        <img src="/images/icons/views.svg" alt="views">
                                        1025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                        <div class="object-wrap">
                            <div class="object-price d-xl-none d-block d-sm-block">4 500 000 Т</div>
                            <div class="object-check d-flex">
                                <div class="object-check__item">
                                    <img src="/images/icons/check-1.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-2.svg" alt="">
                                </div>
                                <div class="object-check__item">
                                    <img src="/images/icons/check-3.svg" alt="">
                                </div>
                            </div>
                            <div class="add-favorite">
                                <a href="#">
                                    <img src="/images/icons/favorite.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="pl-0 col-12 col-sm-12 col-xl-7">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 476.213 476.213" xml:space="preserve">
                                    <polygon points="476.213,223.107 57.427,223.107 151.82,128.713 130.607,107.5 0,238.106 130.607,368.714 151.82,347.5
                                        57.427,253.107 476.213,253.107 "/>
                                    </svg>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">29</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;"
                                     xml:space="preserve">
                                    <polygon points="345.606,107.5 324.394,128.713 418.787,223.107 0,223.107 0,253.107 418.787,253.107 324.394,347.5
                                        345.606,368.713 476.213,238.106 "/>
                                    </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="business">
        <div class="container">
            <h4>Продажа готового бизнеса на площадке BusinessBuy!</h4>
            <p>
                Разнообразный и богатый опыт укрепление и развитие структуры представляет собой интересный эксперимент
                проверки направлений прогрессивного развития. Таким образом сложившаяся структура организации в
                значительной степени обуславливает создание направлений прогрессивного развития. Идейные соображения
                высшего порядка, а также новая модель организационной деятельности обеспечивает широкому кругу
                (специалистов) участие в формировании направлений прогрессивного развития.
            </p>
            <p>
                Задача организации, в особенности же начало повседневной работы по формированию позиции обеспечивает
                широкому кругу (специалистов) участие в формировании модели развития. Товарищи! консультация с широким
                активом играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей
                деятельности требуют определения и уточнения направлений прогрессивного развития. Задача организации, в
                особенности же укрепление и развитие структуры требуют от нас анализа соответствующий условий
                активизации.
            </p>
            <p>
                Идейные соображения высшего порядка, а также консультация с широким активом играет важную роль в
                формировании новых предложений. Таким образом консультация с широким активом позволяет оценить значение
                форм развития. Не следует, однако забывать, что укрепление и развитие структуры позволяет выполнять
                важные задания по разработке существенных финансовых и административных условий.
            </p>
            <p>
                Задача организации, в особенности же постоянный количественный рост и сфера нашей активности играет
                важную роль в формировании новых предложений. Товарищи! новая модель организационной деятельности
                обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.
            </p>
            <p>
                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает
                создание модели развития. Разнообразный и богатый опыт постоянное информационно-пропагандистское
                обеспечение нашей деятельности в значительной степени обуславливает создание форм развития. Товарищи!
                дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание
                соответствующий условий активизации.
            </p>
        </div>
    </section>
    <!-- Кнопки вызова модалок, временно! -->
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Auth 1
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                        <p class="modal-subtitle">
                            Выполните вход в систему
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            <input type="tel" class="form-control modal-input" placeholder="Введите номер телефона">
                            <button type="submit" class="button-m">
                                Продолжить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#auth2">
            Auth 2
        </button>
        <!-- Modal -->
        <div class="modal fade" id="auth2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                        <p class="modal-subtitle">
                            Выполните вход в систему
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            <div class="form-control modal-input grey">
                                +7 (702) 262-54-23
                                <div class="reset">
                                    <span aria-hidden="true">&times;</span>
                                </div>
                            </div>
                            <small class="mb-2">
                                Вам отправлено SMS с кодом подтверждения, проверьте
                            </small>
                            <input type="tel" class="form-control modal-input" placeholder="Введите код из SMS">
                            <small class="text-center">
                                Отправить код повторно через: 00:59
                            </small>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#auth3">
            Auth 3
        </button>
        <!-- Modal -->
        <div class="modal fade" id="auth3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                        <p class="modal-subtitle">
                            Выполните вход в систему
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            <div class="form-control modal-input grey">
                                +7 (702) 262-54-23
                                <div class="reset">
                                    <span aria-hidden="true">&times;</span>
                                </div>
                            </div>
                            <small class="mb-2">
                                Вам отправлено SMS с кодом подтверждения, проверьте
                            </small>
                            <input type="tel" class="form-control modal-input" placeholder="Введите код из SMS">
                            <a href="#" class="link text-center">
                                Отправить код еще раз
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#auth4">
            Auth 4
        </button>
        <!-- Modal -->
        <div class="modal fade" id="auth4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                        <p class="modal-subtitle">
                            Выполните вход в систему
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            <input type="tel" class="form-control modal-input"
                                   placeholder="Введите номер телефона или эл. почту">
                            <button type="submit" class="button-m">
                                Продолжить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#auth5">
            Auth 5
        </button>
        <!-- Modal -->
        <div class="modal fade" id="auth5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                        <p class="modal-subtitle">
                            Выполните вход в систему
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            <div class="form-control modal-input grey">
                                businessbuykz@gmail.com
                                <div class="reset">
                                    <span aria-hidden="true">&times;</span>
                                </div>
                            </div>
                            <input type="password" class="form-control modal-input" placeholder="Введите пароль">
                            <button type="submit" class="button-m">
                                Войти
                            </button>
                            <a href="#" class="link text-center">
                                Отправить код еще раз
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#auth6">
            Auth 6
        </button>
        <!-- Modal -->
        <div class="modal fade" id="auth6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                        <p class="modal-subtitle">
                            Выполните вход в систему
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            <div class="form-control modal-input grey">
                                businessbuykz@gmail.com
                                <div class="reset">
                                    <span aria-hidden="true">&times;</span>
                                </div>
                            </div>
                            <small class="mb-2">
                                На вашу эл. почту отправлен код подтверждения, проверьте
                            </small>
                            <input type="tel" class="form-control modal-input" placeholder="Введите код из эл. почты">
                            <small class="text-center">
                                Отправить код повторно через: 00:59
                            </small>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#auth7">
            Auth 7
        </button>
        <!-- Modal -->
        <div class="modal fade" id="auth7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                        <p class="modal-subtitle">
                            Выполните вход в систему
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            <div class="form-control modal-input grey">
                                businessbuykz@gmail.com
                                <div class="reset">
                                    <span aria-hidden="true">&times;</span>
                                </div>
                            </div>
                            <small class="mb-2">
                                На вашу эл. почту отправлен код подтверждения, проверьте
                            </small>
                            <input type="tel" class="form-control modal-input" placeholder="Введите код из эл. почты">
                            <a href="#" class="link text-center">
                                Отправить код еще раз
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pay1">
            pay 1
        </button>
        <!-- Modal -->
        <div class="modal fade" id="pay1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Способ оплаты</h5>
                        <p class="modal-subtitle">
                            Выберите удобный способ оплаты:
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="#" class="pay__btn">
                            <img src="/images/icons/caspi.svg" alt="">
                            ОПЛАТА ЧЕРЕЗ KASPI.KZ
                        </a>
                        <a href="#" class="pay__btn-o">
                            ОПЛАТА ЛЮБОЙ БАНКОВCКОЙ КАРТОЙ
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pay2">
            pay 2
        </button>
        <!-- Modal -->
        <div class="modal fade" id="pay2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Оплата Kaspi.kz</h5>
                        <p class="modal-subtitle mb-4">
                            Следуйте инструкции
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="amount d-flex align-items-start">
                            <div class="item">
                                <div class="legend">
                                    <img src="/images/icons/check-green.svg" alt="">
                                    Сумма к оплате:
                                </div>

                                <span class="price">
                                    1 900 ₸
                                </span>
                            </div>
                            <div class="item">
                                <div class="legend">
                                    <img src="/images/icons/check-green.svg" alt="">
                                    Оплата за:
                                </div>
                                <p>
                                    Полный отчет с документами, подтверждающими оборот бизнеса за последние 6 месяцев
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="info">
                            <div class="phone">
                                +7 (702) 262-54-23
                            </div>
                            <div class="copy-block">
                                <p>Номер телефона для перевода</p>
                                <div class="copy-btn">
                                    <img src="/images/icons/copy.svg" alt="">
                                    Скопировать
                                </div>
                            </div>
                            <div class="data">
                                <div>Номер карты: <span>9652 2323 5846 4587</span></div>
                                <div>ФИО получателя: <span>Умаров Р. М.</span></div>
                            </div>
                        </div>
                        <ol>
                            <li>
                                Нажмите на кнопку “Оплатить”
                            </li>
                            <li>
                                Перейдите в приложение Kaspi.kz
                            </li>
                            <li>
                                Перейдите в “переводы”
                            </li>
                            <li>
                                Затем “Клиенту Kaspi”
                            </li>
                            <li>
                                Введите номер телефона и указанную сумму для оплаты вашего курса
                            </li>
                            <li>
                                Укажите свою эл. почту в сообщении перевода
                            </li>
                            <li>
                                Нажмите кнопку “Перевести”
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
