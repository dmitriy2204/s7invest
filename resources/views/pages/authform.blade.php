<div class="auth">
    <div class="auth__header">
        <h2>Авторизация</h2>
        <p>Для продолжения необходимо ввести логин и пароль</p>
    </div>
    <div class="auth__form">
        <form method="POST" action="{{ route('public.user.loginPost') }}">
            {{ csrf_field() }}

            @if (session('authError'))
                <div class="auth_error">
                    <p>{{ session('authError') }}</p>
                </div>
            @endif

            <div class="item">
                <label for="email" class="col-sm-3 control-label">Логин</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
            <div class="item">
                <label for="password" class="col-sm-3 control-label">Пароль</label>
                <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
            </div>
            <div class="remember">
                <p>Запомнить меня</p>
                <input type="checkbox" name="remember">
            </div>
            <div class="item">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
        </form>
    </div>
</div>
