<div>
    <div class="row justify-content-between">
        <div class="col-xl-9">
            <div class="col-xl-12 pl-0 pr-0 pl-xl-0">
                <div class="publish-block">
                    <div class="publish-categories">
                        <h2 class="publish-subtitle">
                            Выберите категорию <span>*</span>
                        </h2>
                        <div class="col-xl-5 pl-0 d-none d-xl-block">
                            <input type="search" wire:model="search" class="form-control search publish-input"
                                   placeholder="Поиск...">
                        </div>
                        <div class="publish-categories__list d-none d-xl-flex flex-wrap">

                            @foreach($categories as $category)
                                <div class="custom-control custom-checkbox categories-checkbox">
                                    <input type="checkbox" multiple wire:model="category_id.{{$category->id}}"
                                           class="custom-control-input" value="{{$category->id}}"
                                           id="category_{{$category->id}}">
                                    <label class="custom-control-label" for="category_{{$category->id}}">
                                        {{$category->name}}
                                    </label>
                                </div>
                            @endforeach
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
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="title" placeholder="Введите название">
                        </div>
                        @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
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
                                    <input type="radio" id="individualP" wire:model="metas.legal_form"
                                           class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="individualP">ИП</label>
                                </div>
                                <div class="custom-control custom-radio cabinet-radio">
                                    <input type="radio" id="partnerShip" wire:model="metas.legal_form"
                                           class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="partnerShip">ТОО</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="publish-wrap d-flex align-items-center justify-content-start">
                        <div class="col-xl-4 pl-0 pl-xl-0">
                            <p class="cabinet-form__label">
                                Возраст бизнеса
                            </p>
                        </div>
                        <div class="col-12 col-xl-3 pl-0 pl-xl-3">
                            <select class="custom-select cabinet-select" wire:model="metas.age">
                                <option selected>Выберите</option>
                                @for($i = 0;$i < 101;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
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
                                    <input type="radio" id="yes" wire:model="metas.franchise"
                                           class="custom-control-input"
                                           value="1">
                                    <label class="custom-control-label" for="yes">Да</label>
                                </div>
                                <div class="custom-control custom-radio cabinet-radio">
                                    <input type="radio" id="no" wire:model="metas.franchise"
                                           class="custom-control-input"
                                           value="2">
                                    <label class="custom-control-label" for="no">Нет</label>
                                </div>
                            </div>
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
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.turnover" placeholder="Напишите цифру">

                        </div>
                    </div>
                    <div class="publish-wrap d-flex align-items-start justify-content-between">
                        <div class="col-xl-4 pl-0 pl-xl-0">
                            <p class="cabinet-form__label">
                                Чистая прибыль компании за последние 6 мес.
                            </p>
                        </div>
                        <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.net_profit" placeholder="Напишите цифру">
                            <p class="note">
                                Подтверждающие документы ускоряют продажу бизнеса в 5 раз
                                <small>Это может быть любой файл: выписка из 1С в формате pdf, скриншот или
                                    файл excel</small>
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
                                <input type="file" class="custom-file-input" wire:model="docs" multiple id="customFile">
                                <label class="custom-file-label add-docs" for="customFile"><img
                                        src="/images/icons/add-doc.svg" alt="">Добавить документ</label>
                            </div>
                            <div class="added">
{{--                                @foreach($docs as $doc)--}}
                                @if($docs)
                                    {{dd($docs)}}
{{--                                <div class="added-file d-flex">--}}
{{--                                    <img src=" {{$docs[0]->temporaryUrl()}}" alt="">--}}
{{--                                    <div class="added-delete">--}}
{{--                                        <img src="/images/icons/delete-icon.svg" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                @endif
{{--                                @endforeach--}}
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
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.check" placeholder="Напишите цифру">
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
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.monthly_check" placeholder="Напишите цифру">
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
                        <div
                            class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                            <input type="checkbox" wire:model="metas.premises" class="custom-control-input"
                                   id="noPremises" value="1">
                            <label class="custom-control-label" for="noPremises">В моем бизнесе нет
                                помещений</label>
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
                                    <input type="radio" id="owned" wire:model="metas.owned"
                                           class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="owned">В собственности</label>
                                </div>
                                <div class="custom-control custom-radio cabinet-radio">
                                    <input type="radio" id="onLease" wire:model="metas.on_lease"
                                           class="custom-control-input" value="1">
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
                            <select class="custom-select cabinet-select" wire:model="metas.rooms">
                                <option selected>Выберите</option>
                                @for($i = 0;$i < 101;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
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
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.total_area" placeholder="Напишите цифру">
                        </div>
                    </div>
                    <div class="publish-wrap d-flex align-items-center justify-content-between">
                        <div class="col-xl-4 pl-0 pl-xl-0">
                            <p class="cabinet-form__label">
                                Стоимость месячной аренды.
                            </p>
                        </div>
                        <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.rental_price" placeholder="Напишите цифру">
                        </div>
                    </div>
                    <div class="publish-wrap d-flex align-items-center justify-content-between">
                        <div class="col-xl-4 pl-0 pl-xl-0">
                            <p class="cabinet-form__label">
                                Стоимость ком. учлуг в месяц
                            </p>
                        </div>
                        <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.service_per_month" placeholder="Напишите цифру">
                        </div>
                    </div>
                </div>

                <div class="publish-block">
                    <div class="heading">
                        <h2 class="publish-subtitle">
                            Персонал <span>*</span>
                        </h2>
                        <div
                            class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                            <input type="checkbox" class="custom-control-input" id="noPersonal" wire:model="metas.staff"
                                   value="1">
                            <label class="custom-control-label" for="noPersonal">В моем бизнесе нет
                                персонала</label>
                        </div>
                    </div>
                    <div class="publish-wrap d-flex align-items-center justify-content-between">
                        <div class="col-xl-4 pl-0 pl-xl-0">
                            <p class="cabinet-form__label">
                                Кол-во сотрудников
                            </p>
                        </div>
                        <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.employees" placeholder="Напишите цифру">
                        </div>
                    </div>
                    <div class="publish-wrap d-flex align-items-center justify-content-between">
                        <div class="col-xl-4 pl-0 pl-xl-0">
                            <p class="cabinet-form__label">
                                Фонд оплаты труда в мес.
                            </p>
                        </div>
                        <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.wages" placeholder="Напишите цифру">
                        </div>
                    </div>

                </div>

                <div class="publish-block">
                    <div class="heading">
                        <h2 class="publish-subtitle">
                            Оборудование и мебель <span>*</span>
                        </h2>
                        <div
                            class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                            <input type="checkbox" wire:model="equipment_and_furniture" class="custom-control-input"
                                   id="noEquipment" value="1">
                            <label class="custom-control-label" for="noEquipment">В моем бизнесе нет
                                оборудования и мебели</label>
                        </div>
                    </div>
                    <div class="publish-wrap d-flex align-items-start justify-content-between">
                        <div class="col-xl-3 pl-0 pl-xl-0">
                            <label for="listEq" class="cabinet-form__label">
                                Список оборудования
                            </label>
                        </div>
                        <div class="col-12 col-xl-8 pl-0 pl-xl-3 pr-0">
                                           <textarea class="form-control publish-textarea"
                                                     placeholder="Напишите список оборудования через запятую"
                                                     id="listEq" wire:model="metas.equipment_list">
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
                                           <textarea class="form-control publish-textarea"
                                                     placeholder="Напишите список мебели через запятую"
                                                     id="listFurniture" wire:model="metas.furniture_list">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    >
                                    <label class="text-center custom-file-upload">
                                        <small>Главное изображение</small>
                                        <input type="file" style="display: none" class="custom-file"
                                               wire:model="photo_main">
                                        <img @if($photo_main) src="{{$photo_main->temporaryUrl()}}"
                                             @endif class="rounded img-fluid" width="200">
                                    </label>
                                        <div x-show="isUploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    >
                                    <label for="photos2" class="text-center form-check-label custom-file-upload">
                                        <small>Дополнительные изображение</small>
                                        <input id="photos2" type="file" style="display: none" class="form-control"
                                               wire:model="photo_second">
                                        <img @if($photo_second) src="{{$photo_second->temporaryUrl()}}"
                                             @endif class="rounded img-fluid" width="200">
                                    </label>
                                        <div x-show="isUploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    >
                                    <label for="photos3" class="text-center form-check-label custom-file-upload">
                                        <small>Дополнительные изображение</small>
                                        <input id="photos3" type="file" style="display: none" class="form-control"
                                               wire:model="photo_third">
                                        <img @if($photo_third) src="{{$photo_third->temporaryUrl()}}"
                                             @endif class="rounded img-fluid" width="200">

                                    </label>
                                        <div x-show="isUploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    >
                                    <label for="photos4" class="text-center form-check-label custom-file-upload">
                                        <small>Дополнительные изображение</small>
                                        <input id="photos4" type="file" style="display: none" class="form-control"
                                               wire:model="photo_for">
                                        <img @if($photo_for) src="{{$photo_for->temporaryUrl()}}"
                                             @endif class="rounded img-fluid" width="200">

                                    </label>
                                    <div x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    >
                                    <label for="photos5" class="text-center form-check-label custom-file-upload">
                                        <small>Дополнительные изображение</small>
                                        <input id="photos5" type="file" style="display: none" class="form-control"
                                               wire:model="photo_five">
                                        <img @if($photo_five) src="{{$photo_five->temporaryUrl()}}"
                                             @endif class="rounded img-fluid" width="200">

                                    </label>
                                        <div x-show="isUploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                                    >
                                    <label for="photos6" class="text-center form-check-label custom-file-upload">
                                        <small>Дополнительные изображение</small>
                                        <input id="photos6" type="file" style="display: none" class="form-control"
                                               wire:model="photo_six">
                                        <img @if($photo_six) src="{{$photo_six->temporaryUrl()}}"
                                             @endif class="rounded img-fluid" width="200">

                                    </label>
                                    <div x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
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
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="price" placeholder="Введите цифру">
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
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="accountingSystem"
                                       wire:model="metas.automation" value="1">
                                <label class="custom-control-label" for="accountingSystem">Система
                                    финансового учета</label>
                            </div>
                        </div>
                        <div class="col-12 col-xl-8 mb-3 mb-xl-0 pl-0 pl-xl-3">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="systemCRM"
                                       wire:model="metas.financial_accounting" value="1">
                                <label class="custom-control-label" for="systemCRM">Система СRM (учет
                                    клиентов и продаж)</label>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 mb-3 mb-xl-0 pl-0">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="clientBase"
                                       wire:model="metas.client_base" value="1">
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
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="ccTV"
                                       wire:model="metas.video_control" value="1">
                                <label class="custom-control-label" for="ccTV">Видеонаблюдение</label>
                            </div>
                        </div>
                        <div class="col-xl-4 pl-0 pl-xl-3">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="callRecording"
                                       wire:model="metas.recording_calls" value="1">
                                <label class="custom-control-label" for="callRecording">Запись
                                    звонков</label>
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
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="markGis"
                                       wire:model="metas.2gis" value="1">
                                <label class="custom-control-label" for="markGis">Отметка в системе
                                    2ГИС</label>
                            </div>
                        </div>
                        <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="noticeBoards"
                                       wire:model="metas.planks_ads" value="1">
                                <label class="custom-control-label" for="noticeBoards">Доски
                                    объявлений</label>
                            </div>
                        </div>
                        <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="siteYour"
                                       wire:model="metas.site" value="1">
                                <label class="custom-control-label" for="siteYour">Сайт</label>
                            </div>
                        </div>
                        <div class="col-xl-4 pl-0 mb-4">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="faceB"
                                       wire:model="metas.facebook" value="1">
                                <label class="custom-control-label" for="faceB">Фейсбук</label>
                            </div>
                        </div>
                        <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="instaGram"
                                       wire:model="metas.instagram" value="1">
                                <label class="custom-control-label" for="instaGram">Инстаграм</label>
                            </div>
                        </div>
                        <div class="col-xl-4 pl-0 pl-xl-3 mb-4">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="vKontakte"
                                       wire:model="metas.vkontakte" value="1">
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
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-s">
                                <input type="checkbox" class="custom-control-input" id="contextual"
                                       wire:model="metas.contextual_advertising" value="1">
                                <label class="custom-control-label" for="contextual">Контекстная
                                    реклама</label>
                            </div>
                        </div>
                        <div class="col-xl-4 pl-0 mb-3 mb-xl-0 pl-xl-3">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="seoProm"
                                       wire:model="metas.seo" value="1">
                                <label class="custom-control-label" for="seoProm">SEO-продвижение</label>
                            </div>
                        </div>
                        <div class="col-xl-12 pl-0 mb-3 mb-xl-0">
                            <div
                                class="custom-control custom-checkbox publish-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="targeting"
                                       wire:model="metas.target_adds" value="1">
                                <label class="custom-control-label" for="targeting">Таргетированная
                                    реклама</label>
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
                            <input type="text" class="form-control cabinet-form__input" id="businessName"
                                   wire:model="metas.Add_costs_per_month" placeholder="Введите цифру">
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
                                           <textarea class="form-control publish-textarea"
                                                     wire:model="body"
                                                     placeholder="Расскажите о своем бизнесе в свободной форме"
                                                     id="descriptionBusiness">
                                           </textarea>
                        </div>
                    </div>
                    <div class="col-xl-8 pl-0 pl-xl-3 offset-xl-4">
                        <p class="note">
                            Не указывайте в описании цену, номера телефонов, e-mail и другие контактные
                            данные
                        </p>
                    </div>
                </div>
                @include('livewire.sale_business.contacts')
            </div>
            @include('livewire.sale_business.preview')
            {{--            @include('components.message')--}}
            <div class="publish-sub pt-5 pt-xl-0 d-flex flex-wrap align-items-center">
                <div class="col-12 col-xl-4 mb-3 pr-0 pl-0 d-block d-xl-none">
                    <a href="object-preview.html" class="button-prev">
                        Предпросмотр
                    </a>
                </div>
                <div class="col-12 col-xl-4 pr-0 pl-0">
                    <button wire:click.prevent="store()" type="button"
                            class="btn btn-primary">
                        Сохранить
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
                    <img src="/images/icons/b-close.svg" alt="">
                    Сбросить форму
                </a>
                <div class="progress"></div>
                @include('livewire.sale_business.check_form')

            </div>
        </div>
    </div>
</div>
