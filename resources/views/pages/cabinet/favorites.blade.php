<div class="tab-pane fade" id="myFavorites">
    <h2 class="cabinet-content__title">
        Избранное
    </h2>
    <div class="favorite">
        @forelse ($favoritesView as $favorite)
            @foreach($favorite->favorites as $key)
            <div class="favorite-object d-flex justify-content-xl-between">
                <div class="col-xl-3 pl-0">
                    <div class="favorite-image">
                        <img src="/storage/{{$favorite->images->url ?? ''}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="favorite-text">
                        <h3 class="favorite-name">
                            <a href="{{route('object',[session('city'),'slug'=>$favorite->slug])}}">
                                {{$favorite->title}}
                            </a>
                        </h3>
                        <p class="favorite-excerpt">
                            {!!Str::words($favorite->body ?? '',25)!!}
                        </p>
                        <div class="favorite-footer d-flex justify-content-between">
                            <div class="favorite-block d-flex">
                                <div class="favorite-city">
                                    {{$favorite->city->prepositional}}
                                </div>
                                <div class="favorite-date">
                                    {{ Date::parse($favorite->created_at)->format('j F Y г.') }}
                                </div>
                                <div class="favorite-views">
                                    <img src="/images/icons/views.svg" alt="views">
                                    1025
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 pr-0">
                    <div class="favorite-wrap">
                        <div class="favorite-price">{{number_format($favorite->price )}} Т</div>
                        @livewire('favorite-in-cabinet',['favorite'=>$favorite])
                    </div>
                </div>
            </div>
            @endforeach
        @empty
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Вы пока ничего не добавили в избранное! </h1>
                    <p class="lead">Перейдите в <a href="{{route('catalog', session('city'))}}">Каталог</a> что бы добавить  .</p>
                </div>
            </div>
        @endforelse

    </div>
</div>
