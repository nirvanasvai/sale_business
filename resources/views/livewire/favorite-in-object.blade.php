<div>
    @if (auth()->check())
        @if (isset($object->favorite->id))
            <div class="object-actions__item d-flex align-items-center">
                <img class="cursor" src="/images/icons/heart.svg" alt="">
                <label for="favorite">Добавить в избранное</label>
                <input id="favorite" type="checkbox" class="d-none" value="{{$object->id}}" wire:model="delete">
            </div>
        @else
            <div class="object-actions__item d-flex align-items-center">
                <img class="cursor" src="/images/icons/fav-active.svg" alt="">
                <label for="favorite">Добавить в избранное</label>
                <input id="favorite" type="checkbox" class="d-none" value="{{$object->id}}" wire:model="add">
            </div>

        @endif
    @else
        <a data-toggle="popover" title="Авторизуйтесь"
           data-content="Для того,что бы добавлять в избранное вам необходимо авторизоваться!">
            <div class="object-actions__item d-flex align-items-center">
                <img class="cursor" src="/images/icons/heart.svg" alt="">
                <label for="favorite">Добавить в избранное</label>
            </div>
        </a>
    @endif

</div>
