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
                @if (session('message'))
                    <h5>{{ session('message') }}</h5>
                @elseif (isset($activeUser->profile->name))
                    <h5>{{ $activeUser->profile->name }}</h5>
                    <a href="/user/logout">Выход</a>
                @else
                    <h5>Добро пожаловать!</h5>
                @endif
            </div>
        </div>

    </div>
</header>