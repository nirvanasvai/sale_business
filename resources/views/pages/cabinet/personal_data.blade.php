<div class="tab-pane fade show active" id="personalInfo">
    <form action="{{route('update.user',[session('city'),$user->id])}}">
    <div class="cabinet-personal">
        <form class="cabinet-form">
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Имя <span>*</span>
                    </label>
                </div>
                <div class="col-xl-5">
                    <input type="text" name="firstname" class="form-control cabinet-form__input" value="{{$user->firstname}}">
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Фамилия
                    </label>
                </div>
                <div class="col-xl-5">
                    <input type="text" name="lastname" class="form-control cabinet-form__input" value="{{$user->lastname}}">
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Номер телефона <span>*</span>
                    </label>
                </div>
                <div class="col-xl-5">
                    <input type="text" name="phone" class="form-control cabinet-form__input" value="{{$user->phone}}">
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Эл. почта <span>*</span>
                    </label>
                </div>
                <div class="col-xl-5">
                    <input type="text" name="email" class="form-control cabinet-form__input" value="{{$user->email}}">
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Год рождения <span>*</span>
                    </label>
                </div>
                <div class="col-xl-2">
                    <select class="custom-select cabinet-select" name="date_birth">
                        <option @if((isset($user->date_birth) && $user->date_birth)== $user->id)){{  'selected' }}@endif >{{$user->date_birth}}
                        </option>
                        @for ($i = 1960; $i <2021 ; $i++)
                            <option value="{{$i}}">
                                    {{$i}}
                            </option>

                        @endfor

                    </select>
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Пол
                    </label>
                </div>
                <div class="col-xl-3">
                    <div class="d-flex">
                        <div class="custom-control custom-radio cabinet-radio">
                            <input type="radio" id="sexMan" name="gender" class="custom-control-input" value="1">
                            <label class="custom-control-label" for="sexMan">мужской</label>
                        </div>
                        <div class="custom-control custom-radio cabinet-radio">
                            <input type="radio" id="sexWoman" name="gender" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="sexWoman">женский</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Регион
                    </label>
                </div>
                <div class="col-xl-5">
                    <select class="custom-select cabinet-select">
                        <option selected>Регион</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Город
                    </label>
                </div>
                <div class="col-xl-5">
                    <select class="custom-select cabinet-select">
                        <option selected>Город</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="offset-xl-3 col-xl-3">
                <button type="submit" class="button-g cabinet-submit">
                    Сохранить изменения
                </button>
            </div>
        </form>
    </div>
    </form>
</div>
