<div class="cabinet-publish">
    <div class="row">
       @foreach ($inModer as $item)
            <div class="col-xl-6">
                <div class="publish-object moderation">
                                                <span class="category">
                                                    БИЗНЕС — РИТЕЙЛ
                                                </span>
                    <div class="d-flex align-items-center mb-3">
                        <div class="id">ID объявления: 1003258</div>
                        <div class="status">
                            <div class="on-check">На проверке</div>
                        </div>
                    </div>
                    <h3 class="name">
                        <a href="#">
                            {{$item->title}} за {{number_format($item->price)}} Т
                        </a>
                    </h3>
                    <a href="object.html" class="view">
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
                            {{$item->city->genitive ?? ''}}
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
       @endforeach
    </div>
</div>
