<div class="cabinet-personal">
    <form method="POST" action="{{ route('change.password',[session('city'),$user->id]) }}">
        @csrf
        <form class="cabinet-form">
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Старый пароль
                    </label>
                </div>
                <div class="col-xl-5">
                    <input type="password" name="current_password" class="form-control cabinet-form__input" placeholder="Старый пароль">
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Новый пароль
                    </label>
                </div>
                <div class="col-xl-5">
                    <input type="password" name="new_password" class="form-control cabinet-form__input" placeholder="Введите новый пароль">
                </div>
            </div>
            <div class="cabinet-form__wrap d-flex align-items-center justify-content-start">
                <div class="col-xl-3 pl-xl-0">
                    <label for="#" class="cabinet-form__label">
                        Повторите пароль
                    </label>
                </div>
                <div class="col-xl-5">
                    <input type="password" name="new_confirm_password" class="form-control cabinet-form__input"
                           placeholder="Введите новый пароль еще раз">
                </div>
            </div>

            <div class="offset-xl-3 col-xl-3">
                <button type="submit" class="button-g cabinet-submit">
                    Сохранить изменения
                </button>
            </div>
        </form>
    </form>
</div>
