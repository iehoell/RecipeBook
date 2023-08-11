<header>
    <div class='d-flex justify-content-around mt-4'>
        <div class='d-flex'>
            <div class='me-5'>
                Рецепты
            </div>
            <a class='me-5 text-decoration-none text-dark' href="{{ route('home') }}">Главная</a>
            <a class='me-5 text-decoration-none text-dark' href="{{ route('recipes') }}">Рецепты</a>
            <a class='me-5 text-decoration-none text-dark' href="{{ route('favorites') }}">Избранное</a>
        </div>
        <div>
            <a class='text-decoration-none text-warning' href="{{ route('login') }}">
                Войти
            </a>
            <a class='text-decoration-none text-warning' href="{{ route('register') }}">
                Регистрация
            </a>
        </div>
    </div>
</header>