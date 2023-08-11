<header>
    <div class='d-flex justify-content-around mt-4'>
        <div class='d-flex'>
            <div class='me-5'>
                {{ config('app.name') }}
            </div>
            <a class='me-5 text-decoration-none text-dark' href="{{ route('home') }}">{{ __('Главная') }}</a>
            <a class='me-5 text-decoration-none text-dark' href="{{ route('recipes') }}">{{ __('Рецепты') }}</a>
            <a class='me-5 text-decoration-none text-dark' href="{{ route('favorites') }}">{{ __('Избранное') }}</a>
        </div>
        <div>
            <a class='text-decoration-none text-warning' href="{{ route('login') }}">
                {{ __('Войти') }}
            </a>
            <a class='text-decoration-none text-warning' href="{{ route('register') }}">
                {{ __('Регистрация') }}
            </a>
        </div>
    </div>
</header>