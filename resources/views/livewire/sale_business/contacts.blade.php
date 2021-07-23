@include('components.message')
@guest()
    <div class="publish-block">
        <div class="heading">
            <h2 class="publish-subtitle">
                Контакты
            </h2>
        </div>

        @if($number_check)
            <div class="publish-wrap d-flex align-items-center justify-content-start">
                <div class="offset-xl-4 pl-0 pl-xl-3 col-xl-8 pr-0">
                    <input type="text" class="form-control cabinet-form__input" id="businessName"
                           wire:model="phone" placeholder="+7 (___) ___-__-__">
                    <div class="d-flex mt-4">
                        <button wire:click.prevent="sendSms()" class="btn btn-primary">
                            Отправить
                        </button>
                    </div>

                    @if($login)
                        <div class="form-group">
                            <label for="">Введите пароль</label>
                            <input type="password" class="form-control" wire:model="password" placeholder="введите пароль">
                        </div>
                        <button class="btn btn-primary" wire:click.prevent="login">Войти</button>
                    @endif

                    @if($smsConfirm)
                        <div class="d-flex mt-4">
                            <button class="button-g" wire:click.prevent="smsCode()">
                                Подтвердить
                            </button>
                            <div class="col-xl-5">
                                <input type="num" class="form-control cabinet-form__input"
                                       id="businessName" wire:model="code" placeholder="Код из смс">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        @if($registerForm)
            <div class="publish-wrap d-flex align-items-center justify-content-between">
                <div class="col-xl-4 pl-xl-0 pl-0">
                    <p class="cabinet-form__label">
                        Фамилия
                    </p>
                </div>
                <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                    <input type="text" class="form-control cabinet-form__input" id="businessName"
                           wire:model="firstname" placeholder="Введите ФИО">
                </div>
            </div>
            <div class="publish-wrap d-flex align-items-center justify-content-between">
                <div class="col-xl-4 pl-xl-0 pl-0">
                    <p class="cabinet-form__label">
                        Имя
                    </p>
                </div>
                <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                    <input type="text" class="form-control cabinet-form__input" id="businessName"
                           wire:model="lastname" placeholder="Введите ФИО">
                </div>
            </div>
            <div class="publish-wrap d-flex align-items-center justify-content-between">
                <div class="col-xl-4 pl-xl-0 pl-0">
                    <p class="cabinet-form__label">
                        Почта
                    </p>
                </div>
                @error('email')
                <span class="text-danger error">{{ $message }}</span>
                @enderror
                <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                    <input type="email" class="form-control cabinet-form__input" id="businessName"
                           wire:model="email" placeholder="Введите почту">
                </div>
            </div>
            <div class="publish-wrap d-flex align-items-center justify-content-between">
                <div class="col-xl-4 pl-xl-0 pl-0">
                    <p class="cabinet-form__label">
                        Пароль
                    </p>
                </div>
                @error('password') <span
                    class="text-danger error">{{ $message }}</span>
                @enderror
                <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                    <input type="password" class="form-control cabinet-form__input" id="businessName"
                           wire:model="password" placeholder="Введите пароль" required autocomplete="new-password">
                </div>
            </div>
            <div class="publish-wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-4 pl-0 pl-xl-0">
                    <label for="businessName" class="cabinet-form__label">
                        Город
                    </label>
                </div>
                <div class="col-xl-8 pl-0 pl-xl-3 pr-0">
                    <select class="custom-select cabinet-select" wire:model="city_id">
                        <option selected>Выберите</option>
                        @foreach($cities as $item)
                            <option value="{{$item->id}}">{{$item->genitive}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" wire:click.prenet="registerStore()">Регистрация</button>
        @endif
    </div>


    {{--<div class="publish-wrap d-flex align-items-center justify-content-start">--}}
    {{--    <div class="col-xl-4 pl-0 pl-xl-0">--}}
    {{--        <label for="businessName" class="cabinet-form__label">--}}
    {{--            Электронная почта--}}
    {{--        </label>--}}
    {{--    </div>--}}
    {{--    <div class="col-xl-8 pl-0 pl-xl-3 pr-0">--}}
    {{--        <input type="text" class="form-control cabinet-form__input mail"--}}
    {{--               id="businessName" name="businesName" placeholder="businessbuy@gmail.com">--}}
    {{--    </div>--}}
    {{--</div>--}}
@endguest

