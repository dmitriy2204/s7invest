<header class="header boxed push-down-45">
    <div class="wrapper">
        <div class="logo col-md-3"><a href="/"><img src="/upload/s7invest_logo.png" alt=""></a></div>

        <form class="searchform" action="{{ route('public.user.search') }}" method="GET">
            <label for="input_search" class="col-sm-3">Введите ключевое слово: </label>
            <input type="text" id="input_search" name="search">
            <button type="submit">Поиск</button>
        </form>

        <div class="greeting boxed">
            <div class="wrapper">
                @if (Auth::check())
                    <h5>Вошли как: <a href="{{ Auth::user()->role_id == 1 ? route('public.admin.lk', ['id' => Auth::user()->id]) : route('public.user.lk', ['id' => Auth::user()->id]) }}">{{ Auth::user()->fname }}</a>
                        || <a href="{{ route('public.user.logout') }}">Выход</a>
                    </h5>
                @endif
            </div>
        </div>

    </div>
</header>