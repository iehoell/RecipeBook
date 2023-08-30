<header>
    <style>
        .header{
            height: 80px;
            width: 100%;
            position: fixed;
            background-color: white;
        }
        .headerItems{
            margin: 0 5% 0 5%;
            margin-top: 2%;
            display: flex;
            justify-content: space-between;
        }
        .header__appname{
            text-decoration: none;
            color: #FDB100;
            font-weight: 700;
            font-size: 24px;
            margin-right: 20%;
        }
        .header__category{
            margin-top: 10px;
            margin-right: 15%;
            text-decoration: none;
            color: #9196A1;
        }
        .header__category:active{
            color: #3A3C41;
        }
        .header__login{
            text-decoration: none;
            color: #FDB100;
            font-weight: 600;
            font-size: 18px;
            margin-top: 8px;
        }
        .header__loginSVG{
            margin-right: 20px;
            background-color: #FDB100;
            width: 40px;
            height: 40px;
            border-radius: 50px;
        }
        .userSVG{
            margin-top: 12px;
            margin-left: 0px;
        }
        .loginBar{
            display: flex;
            width: fit-content;
        }
        .active{
            color: #3A3C41;
            font-weight: 600;
            font-size: 18px;
        }
        .logOutButton__SVG{
            background-color: white; 
            margin-top: 8px; 
            width: 60px;
            margin-left: 20px;
            border-left: 1px solid #FDB100B8;
        }
    </style>
    <div class='header'>
        <div class='headerItems'>
            <div class='d-flex'>
                <a class='header__appname'
                    href='{{ route('home') }}'>
                        {{ config('app.name') }}
                </a>
                <a 
                    class='header__category  {{ Route::is('home*') ? 'active' : '' }}' 
                    href="{{ route('home') }}">
                        {{ __('Главная') }}
                </a>
                <a 
                    class='header__category  {{ Route::is('recipes*') ? 'active' : '' }}' 
                    href="{{ route('recipes') }}">
                        {{ __('Рецепты') }}
                </a>
                <a 
                    class='header__category  {{ Route::is('favorites*') ? 'active' : '' }}' 
                    href="{{ route('favorites') }}">
                        {{ __('Избранное') }}
                </a>
            </div>
            <div class='loginBar'>
                <div class='header__loginSVG'>
                    <svg class='userSVG' width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 1.9C9.16 1.9 10.1 2.84 10.1 4C10.1 5.16 9.16 6.1 8 6.1C6.84 6.1 5.9 5.16 5.9 4C5.9 2.84 6.84 1.9 8 1.9ZM8 10.9C10.97 10.9 14.1 12.36 14.1 13V14.1H1.9V13C1.9 12.36 5.03 10.9 8 10.9ZM8 0C5.79 0 4 1.79 4 4C4 6.21 5.79 8 8 8C10.21 8 12 6.21 12 4C12 1.79 10.21 0 8 0ZM8 9C5.33 9 0 10.34 0 13V16H16V13C16 10.34 10.67 9 8 9Z" fill="white"/>
                    </svg>  
                </div>
                @if(($login = session('login')) == null)
                    <a 
                        class='header__login' 
                        href="{{ route('login') }}">
                        {{ __('Войти') }}
                    </a>  
                @else
                    <p class='header__login'>
                        {{ __('Привет, ') }}
                        {{ $login }}
                    </p>
                    <svg class='logOutButton__SVG' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_809)">
                            <path d="M10.09 15.59L11.5 17L16.5 12L11.5 7L10.09 8.41L12.67 11H3V13H12.67L10.09 15.59ZM19 3H5C3.89 3 3 3.9 3 5V9H5V5H19V19H5V15H3V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3Z" fill="#9196A1"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_809">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>                           
                @endif            
            </div>
        </div>
    </div>
</header>