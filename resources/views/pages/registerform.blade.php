<div class="register">
    <div class="register__header">
        <h2>Регистрация</h2>
        <p>Для регистрации заполните все поля</p>
    </div>
    <div class="register__form">
        <form method="POST" action="{{ route('public.user.registerPost') }}">
            {{ csrf_field() }}
            <ul>
                <li
                    @if($errors->has('fname')) :
                        class = "error"
                    @endif;
                >
                    <div class="item">
                        <label for="fname" class="col-sm-3">Фамилия</label>
                        <div class="item__input">
                            <input type="text" id="fname" name="fname" value = "{{ old('fname') }}" placeholder="Фамилия">
                            @if ($errors->has('fname'))
                                <p class="form_error">
                                    {{ $errors->first('fname') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </li>

                <li
                    @if($errors->has('name')) :
                        class = "error"
                    @endif;
                >
                    <div class="item">
                        <label for="name" class="col-sm-3">Имя</label>
                        <div class="item__input">
                            <input type="text" id="name" name="name" value = "{{ old('name') }}" placeholder="Имя">
                            @if ($errors->has('name'))
                                <p class="form_error">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </li>

                <li
                    @if($errors->has('sname')) :
                    class = "error"
                    @endif;
                >
                    <div class="item">
                        <label for="sname" class="col-sm-3">Отчество</label>
                        <div class="item__input">
                            <input type="text" id="sname" name="sname" value = "{{ old('sname') }}" placeholder="Отчество">
                            @if ($errors->has('sname'))
                                <p class="form_error">
                                    {{ $errors->first('sname') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </li>

                <li
                    @if($errors->has('email')) :
                        class = "error"
                    @endif;
                >
                    <div class="item">
                        <label for="email" class="col-sm-3">E-mail</label>
                        <div class="item__input">
                            <input type="text" id="email" name="email" value = "{{ old('email') }}" placeholder="user@domain.ru">
                            @if ($errors->has('email'))
                                <p class="form_error">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </li>
                <li
                    @if($errors->has('password')) :
                    class = "error"
                    @endif;
                >
                    <div class="item">
                        <label for="password">Пароль</label>
                        <div class="item__input">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
                            @if ($errors->has('password'))
                                <p class="form_error">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </li>
                <li
                    @if($errors->has('password_confirm')) :
                    class = "error"
                    @endif;
                >
                    <div class="item">
                        <label for="password_confirm">Подтвердите пароль</label>
                        <div class="item__input">
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтверждение пароля">
                            @if ($errors->has('password_confirm'))
                                <p class="form_error">
                                    {{ $errors->first('password_confirm') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <label for="role">Доступ</label>
                        <div class="item__input">
                            <select name="role" id="role">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $role->id == 2 ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </li>
            </ul>

            <div>
                <div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </form>
    </div>

</div>
