@extends('layouts.base')

@section('page.title', 'Рецепты')

@section('content')
    <style>
        .mainContainer{
            width: 90%;
            margin-left: 5%;
            margin-top: 5%;
        }
        .mainContainer__Recipes{
            display: flex;
            justify-content: space-between;
        }
        .mainContainer__Recipes__Recipe{
            margin-top: 0;
            font-size: 42px;
            line-height: 62px;
            font-weight: 700;
        }
        .mainContainer__Recipes__addRecipe{
            display: flex;
            width: 278px;
            height: 60px;
            border-radius: 16px;
            color: white;
            background-color: orange;
            border: none;
        }
        .mainContainer__Recipes__addRecipe__text{
            text-decoration: none;
            color: white;
            margin-top: 17px;
            font-weight: 600;
            font-size: 18px;
            line-height: 28px;
            margin-left: 24px;
        }
        .svg{
            margin-top: 20px;
            margin-left: 30px;
        }
        .mainContainer__typesOfRecipes{
            margin-top: 3%;
            display: flex;
            justify-content: space-between;
        }
        .typesOfRecipes__text{
            margin-left: 16px;
            font-weight: 700;
            font-size: 24px;
            text-align: left;
        }
        .typesOfRecipes__container{
            width: 278px;
            min-height: 140px;
            border: none;
            border-radius: 14px;
            box-shadow: 0 0 40px lightgrey;
        }
        .borderOfImage{
            margin-left: 16px;
            margin-top: 16px;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background-color: #FFEFCC;
        }
        .typesSVG{
            margin-top: 25%;
            margin-left: 25%;
        }
        .mainContainer__search{
            margin-top: 80px;
            display: flex;
            justify-content: space-between;
            height: 100px;
        }
        .mainContainer__search__name{
            font-weight: 700;
            font-size: 24px;
            line-height: 30px;
        }
        .mainContainer__search__input{
            width: 779px;
            height: 73px;
            border-radius: 16px;
            border: none;
            box-shadow: 0 0 40px lightgrey;
            font-size: 18px;
            font-weight: 500;
            padding-left: 20px;
        }
        .mainContainer__search__findButton{
            color: white;
            background-color: orange;
            border-radius: 16px;
            width: 152px;
            height: 73px;
            border: none;
        }
        .mainContainer__searchHelper{
            display: flex;
            margin-left: 275px;
        }
        .findButtonText{
            font-weight: 600;
            font-size: 18px;
            line-height: 28px;
        }
        .searchHelper__request{
            margin-right: 15px;
            font-weight: 400;
            font-size: 16px;
            line-height: 18px;
            color: #808080;
            text-decoration: none;
        }
        .mainContainer__productCards{
            margin-top: 40px;
        }
        .loadMore{
            margin-top: 60px;
            display: flex;
            justify-content: center;
        }
        .loadMoreButton{
            width: 309px;
            height: 60px;
            border-radius: 16px;
            background-color: white;
            border: 1px solid orange;
            color: orange;
            font-weight: 600;
            font-size: 18px;
            align-content: center;
        }
    </style>
    <div class='mainContainer'>
        <div class='mainContainer__Recipes'>
            <div>
                <p class='mainContainer__Recipes__Recipe'>
                    {{ __('Рецепты') }}
                </p>
            </div>
            <div>
                <button class='mainContainer__Recipes__addRecipe' >
                    <svg class='svg' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_464)">
                            <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_464">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <a class='mainContainer__Recipes__addRecipe__text' href='{{ route('recipes.create')}}'>
                        {{ __('Добавить рецепт') }}
                    </a>
                </button>
            </div>
        </div>
        <div class='mainContainer__typesOfRecipes'>
            <div class='typesOfRecipes__container'>
                <div class='borderOfImage'>
                    <svg class='typesSVG' width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H2.44444V24H0V0ZM19.5556 0H3.66667V24H19.5556C20.9037 24 22 22.9236 22 21.6V2.4C22 1.0764 20.9037 0 19.5556 0ZM18.3333 12H7.33333V9.6H18.3333V12ZM18.3333 7.2H7.33333V4.8H18.3333V7.2Z" fill="#F29E1F"/>
                    </svg>
                </div>
                <p class='typesOfRecipes__text'>
                    {{ __('Простые блюда') }}
                </p>
            </div>
            <div class='typesOfRecipes__container'>
                <div class='borderOfImage'>
                    <svg class='typesSVG' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.3056 0.782625L23.2204 0.696624C23.0003 0.475816 22.7388 0.300619 22.4509 0.181077C22.163 0.061535 21.8543 0 21.5425 0C21.2308 0 20.9221 0.061535 20.6342 0.181077C20.3463 0.300619 20.0848 0.475816 19.8647 0.696624L15.8431 4.73107C11.8398 2.24184 6.51617 2.73625 3.04053 6.22269C-1.01391 10.2907 -1.01311 16.8836 3.04053 20.9493C7.09458 25.0165 13.6667 25.0173 17.7219 20.9493C21.1703 17.4908 21.6827 12.2056 19.2663 8.20071L23.3056 4.14826C23.7506 3.70126 24.0004 3.09619 24.0004 2.46544C24.0004 1.8347 23.7506 1.22963 23.3056 0.782625ZM15.2559 16.2852C13.6175 19.9281 9.78901 21.7485 6.70538 20.3509C3.61934 18.9524 2.44693 14.8648 4.08415 11.2219C5.72216 7.57751 9.54981 5.75788 12.6346 7.1555C15.7191 8.55312 16.8927 12.6416 15.2559 16.2852ZM21.4443 4.05626C21.0492 4.05542 20.6706 3.89775 20.3917 3.61792C20.1127 3.33808 19.9563 2.95896 19.9567 2.56385C19.9567 1.74024 20.6231 1.07223 21.4443 1.07223C22.2656 1.07223 22.932 1.74024 22.932 2.56385C22.9324 2.95896 22.7759 3.33808 22.497 3.61792C22.2181 3.89775 21.8395 4.05542 21.4443 4.05626Z" fill="#F29E1F"/>
                        <path d="M8.38118 16.7859C10.1485 16.7859 11.5812 15.3533 11.5812 13.586C11.5812 11.8188 10.1485 10.3861 8.38118 10.3861C6.61385 10.3861 5.18115 11.8188 5.18115 13.586C5.18115 15.3533 6.61385 16.7859 8.38118 16.7859Z" fill="#F29E1F"/>
                    </svg>
                </div>
                <p class='typesOfRecipes__text'>
                    {{ __('Детское') }}
                </p>
            </div>
            <div class='typesOfRecipes__container'>
                <div class='borderOfImage'>
                    <svg class='typesSVG' width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7049 4.66231C18.3626 3.32979 17.565 2.14615 16.4398 1.30087C15.3145 0.455586 13.9267 -0.00247203 12.4985 1.32239e-05C11.0265 -0.00292308 9.59871 0.483215 8.45695 1.37608C7.31519 2.26894 6.52968 3.51364 6.23347 4.89933C5.82532 4.79055 5.40429 4.73275 4.98076 4.72735C4.32657 4.72697 3.67871 4.85052 3.07424 5.09093C2.46977 5.33135 1.92054 5.68391 1.45795 6.12846C0.995365 6.57301 0.6285 7.10083 0.378334 7.68174C0.128167 8.26265 -0.000394494 8.88525 9.09306e-07 9.51394C9.09306e-07 12.1573 1.78507 14.3005 4.53713 14.3005C4.5657 14.3005 4.59127 14.2933 4.62134 14.2933V20.0467H19.4719V15.1561C22.3037 14.9538 24 12.6862 24 9.91426C23.9977 8.55007 23.4443 7.24004 22.4565 6.26029C21.4687 5.28055 20.1237 4.70763 18.7049 4.66231ZM11.8639 2.4699C10.5977 3.25611 9.78407 4.49467 9.78407 5.8922H7.82756C7.82756 3.87177 9.53143 2.17652 11.8338 1.70104C12.2504 1.61722 12.5136 2.06524 11.8639 2.4699Z" fill="#F29E1F"/>
                    </svg>
                </div>
                <p class='typesOfRecipes__text'>
                    {{ __('От Шеф-поваров') }}
                </p>
            </div>
            <div class='typesOfRecipes__container'>
                <div class='borderOfImage'>
                    <svg class='typesSVG' width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9675 0L12.7636 1.20876L14.5471 2.99951C14.7924 3.27932 14.915 3.60389 14.915 3.97324C14.915 4.34258 14.7924 4.68954 14.5471 4.93577L10.5899 8.97616L11.7046 10.1849L15.751 6.14453C16.3418 5.48418 16.6317 4.75669 16.6317 3.97324C16.6317 3.18978 16.3418 2.45109 15.751 1.79075L13.9675 0ZM9.53089 2.26083L8.32699 3.46959L9.00697 4.09635C9.25221 4.34258 9.37482 4.67835 9.37482 5.09246C9.37482 5.50657 9.25221 5.84234 9.00697 6.08856L8.32699 6.71533L9.53089 7.92409L10.1551 7.24136C10.7459 6.58102 11.0469 5.86472 11.0469 5.09246C11.0469 4.28662 10.7459 3.55912 10.1551 2.88759L9.53089 2.26083ZM21.1797 4.04039C20.4106 4.04039 19.6972 4.34258 19.0395 4.93577L12.7636 11.2482L13.9675 12.3674L20.1876 6.14453C20.4663 5.86472 20.8007 5.71922 21.1797 5.71922C21.5588 5.71922 21.8932 5.86472 22.1719 6.14453L22.8518 6.82725L24 5.61849L23.3758 4.93577C22.7181 4.34258 21.9823 4.04039 21.1797 4.04039ZM5.57362 7.3309L0 23L15.6061 17.4039L5.57362 7.3309ZM18.9503 10.7557C18.17 10.7557 17.4566 11.0579 16.7877 11.6511L15.0153 13.4307L16.2192 14.6394L17.9916 12.8599C18.2703 12.58 18.5824 12.4346 18.9503 12.4346C19.3182 12.4346 19.6526 12.58 19.9313 12.8599L21.7371 14.6394L22.9076 13.4866L21.124 11.6511C20.4663 11.0579 19.7306 10.7557 18.9503 10.7557Z" fill="#F29E1F"/>
                    </svg>
                </div>
                <p class='typesOfRecipes__text'>
                    {{ __('На праздник') }}
                </p>
            </div>
        </div>
        
        @include('recipes.filter')

        <div class='mainContainer__searchHelper'>
            <a class='searchHelper__request' href=''>{{ __('мясо') }}</a>
            <a class='searchHelper__request' href=''>{{ __('деликатесы') }}</a>
            <a class='searchHelper__request' href=''>{{ __('пироги') }}</a>
            <a class='searchHelper__request' href=''>{{ __('рыба') }}</a>
            <a class='searchHelper__request' href=''>{{ __('пост') }}</a>
            <a class='searchHelper__request' href=''>{{ __('пасха2023') }}</a>
        </div>
        {{-- @if(empty($posts)) --}}
            {{-- {{ __('Нет ни одного поста') }} --}}
        {{-- @else --}}
            <div class='mainContainer__productCards'>
                {{-- @foreach($posts as $post) --}}
                    <x-product-card/>
                    <x-product-card/>
                    <x-product-card/>
                {{-- @endforeach --}}
            </div>
        {{-- @endif --}}
    </div>
    <div class='loadMore'>
        <button class='loadMoreButton'>
            Загрузить еще
        </button>
    </div>
@endsection