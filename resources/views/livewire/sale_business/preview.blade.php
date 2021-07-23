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
                    @if($photo_main)
                    <img src="{{$photo_main->temporaryUrl()}}" class="img-fluid" alt="">
                        @endif
                </div>
                <div class="col-xl-5 pl-xl-0 ml-3">
                    <div class="object-text">
                        <h3 class="object-name">
                            <a href="#">
                                @if($title)
                                    {{$title ?? ''}}
                                @endif
                            </a>
                        </h3>
                        <p class="object-excerpt">
                            @if($body)
                                {{$body ?? ''}}
                            @endif
                        </p>
                        <div class="object-price">
                            @if($price)
                                {{number_format($price)}}
                            @endif
                        </div>
                        <div class="object-profit">Чистая прибыль: <span>
                               @if($metas)
                                    {{$metas['net_profit'] ?? 'Укажите чистую прибыль'}}Т / мес.
                                @endif
                                   </span>
                        </div>
                        <div class="object-payback">Окупаемость: <span>17 мес.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
