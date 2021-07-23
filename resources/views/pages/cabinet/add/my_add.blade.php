<div class="tab-pane fade" id="myObjects">
    <h2 class="cabinet-content__title">
        Ваши объявления на сайте
        <a href="{{route('publish', session('city'))}}" class="button-m add-object">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px"
                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.853,256-256S397.167,0,256,0z M256,472.341
                                            c-119.275,0-216.341-97.046-216.341-216.341S136.725,39.659,256,39.659S472.341,136.705,472.341,256S375.295,472.341,256,472.341z
                                            "/>
                                    </g>
                                </g>
                <g>
                    <g>
                        <path d="M355.148,234.386H275.83v-79.318c0-10.946-8.864-19.83-19.83-19.83s-19.83,8.884-19.83,19.83v79.318h-79.318
                                            c-10.966,0-19.83,8.884-19.83,19.83s8.864,19.83,19.83,19.83h79.318v79.318c0,10.946,8.864,19.83,19.83,19.83
                                            s19.83-8.884,19.83-19.83v-79.318h79.318c10.966,0,19.83-8.884,19.83-19.83S366.114,234.386,355.148,234.386z"/>
                    </g>
                </g>
                                </svg>
            Подать объявление
        </a>
    </h2>
    <ul class="nav nav-tabs cabinet-tabs">
        <li class="nav-item cabinet-tab">
            <a class="nav-link cabinet-tab__link active" data-toggle="tab" href="#objectsPublish">
                На сайте <span class="count">{{$catalogs->count()}}</span>
            </a>
        </li>
        <li class="nav-item cabinet-tab">
            <a class="nav-link cabinet-tab__link" data-toggle="tab" href="#objectsModer">
                На модерации <span class="count">{{$inModer->count()}}</span>
            </a>
        </li>
        <li class="nav-item cabinet-tab">
            <a class="nav-link cabinet-tab__link" data-toggle="tab" href="#objectsArchive">
                В архиве <span class="count">{{$archive->count()}}</span>
            </a>
        </li>
    </ul>
    <div class="cabinet-content tab-content">
        <div class="tab-pane fade show active" id="objectsPublish">
            @foreach($catalogs as $item)
                <div class="cabinet-publish">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="publish-object">
                                                <span class="category">
                                                    БИЗНЕС — РИТЕЙЛ
                                                </span>
                                <div class="id">ID объявления: 1003258</div>
                                <h3 class="name">
                                    <a href="#">
                                        {{$item->title}} за {{$item->price}} Т
                                    </a>
                                </h3>
                                <a href="{{route('object',[session('city'),'slug'=>$item->slug])}}" class="view">
                                    Посмотреть на сайте
                                </a>
                                <div class="col-xl-6 pl-0">
                                    <div class="thumb">
                                        <img src="img/objects/object-2.jpg" alt="">
                                    </div>
                                </div>
                                <p class="description">
                                    {{$item->body}}
                                </p>
                                <div class="contact">
                                    <div class="city">
                                        {{$item->city->genitive}}
                                    </div>
                                    <a href="tel:+7 (707) 556-66-55">Тел.: {{preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{2})(\d{2}).*~','+7($1) $2-$3-$4', $user->phone)}}</a>
                                </div>
                                <div class="info">
                                    <div class="publishing">
                                        Добавлено {{ Date::parse($item->created_at)->format('j F Y г.') }}
                                    </div>
                                    <div class="deleted">
                                        Будет удалено через <span>4 дня и 18 часов</span>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="#">
                                        <img src="img/icons/pensil.svg" alt="">
                                        Редактировать объявление
                                    </a>
                                    <a href="#">
                                        <img src="img/icons/deleted-g.svg" alt="">
                                        Перенести в архив
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="statistic sticky-top">
                                <h2>
                                    Статистика
                                </h2>
                                <div class="statistic-box">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">ДЕЙСТВИЕ</th>
                                            <th scope="col">ВСЕГО</th>
                                            <th scope="col">ЗА 7 ДНЕЙ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Просмотров объявления</td>
                                            <td>215</td>
                                            <td>215</td>
                                        </tr>
                                        <tr>
                                            <td>Просмотров телефона</td>
                                            <td>17</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>Добавили в избранное</td>
                                            <td>8</td>
                                            <td>8</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="tab-pane fade" id="objectsModer">
            @include('pages.cabinet.add.in_moder')
        </div>
        <div class="tab-pane fade" id="objectsArchive">
            @include('pages.cabinet.add.archive')
        </div>
    </div>
</div>
