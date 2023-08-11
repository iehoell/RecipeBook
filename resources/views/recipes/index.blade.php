@extends('layouts.base')

@section('page.title', 'Рецепты')

@section('content')
    <div class='w-90 ms-5 mt-5 me-5'>
        <div class='d-flex justify-content-between'>
            <div>
                <p class='mt-0 font-size-42px line-height-62px font-weight-700'>
                    Рецепты
                </p>
            </div>
            <div>
                <button class='mainContainer__Recipes__addRecipe'>
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
                    <p class='mainContainer__Recipes__addRecipe__text'>
                        Добавить рецепт
                    </p>
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
                    Простые блюда
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
                    Детское
                </p>
            </div>
            <div class='typesOfRecipes__container'>
                <div class='borderOfImage'>
                    <svg class='typesSVG' width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7049 4.66231C18.3626 3.32979 17.565 2.14615 16.4398 1.30087C15.3145 0.455586 13.9267 -0.00247203 12.4985 1.32239e-05C11.0265 -0.00292308 9.59871 0.483215 8.45695 1.37608C7.31519 2.26894 6.52968 3.51364 6.23347 4.89933C5.82532 4.79055 5.40429 4.73275 4.98076 4.72735C4.32657 4.72697 3.67871 4.85052 3.07424 5.09093C2.46977 5.33135 1.92054 5.68391 1.45795 6.12846C0.995365 6.57301 0.6285 7.10083 0.378334 7.68174C0.128167 8.26265 -0.000394494 8.88525 9.09306e-07 9.51394C9.09306e-07 12.1573 1.78507 14.3005 4.53713 14.3005C4.5657 14.3005 4.59127 14.2933 4.62134 14.2933V20.0467H19.4719V15.1561C22.3037 14.9538 24 12.6862 24 9.91426C23.9977 8.55007 23.4443 7.24004 22.4565 6.26029C21.4687 5.28055 20.1237 4.70763 18.7049 4.66231ZM11.8639 2.4699C10.5977 3.25611 9.78407 4.49467 9.78407 5.8922H7.82756C7.82756 3.87177 9.53143 2.17652 11.8338 1.70104C12.2504 1.61722 12.5136 2.06524 11.8639 2.4699Z" fill="#F29E1F"/>
                    </svg>
                </div>
                <p class='typesOfRecipes__text'>
                    От шеф-поваров
                </p>
            </div>
            <div class='typesOfRecipes__container'>
                <div class='borderOfImage'>
                    <svg class='typesSVG' width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9675 0L12.7636 1.20876L14.5471 2.99951C14.7924 3.27932 14.915 3.60389 14.915 3.97324C14.915 4.34258 14.7924 4.68954 14.5471 4.93577L10.5899 8.97616L11.7046 10.1849L15.751 6.14453C16.3418 5.48418 16.6317 4.75669 16.6317 3.97324C16.6317 3.18978 16.3418 2.45109 15.751 1.79075L13.9675 0ZM9.53089 2.26083L8.32699 3.46959L9.00697 4.09635C9.25221 4.34258 9.37482 4.67835 9.37482 5.09246C9.37482 5.50657 9.25221 5.84234 9.00697 6.08856L8.32699 6.71533L9.53089 7.92409L10.1551 7.24136C10.7459 6.58102 11.0469 5.86472 11.0469 5.09246C11.0469 4.28662 10.7459 3.55912 10.1551 2.88759L9.53089 2.26083ZM21.1797 4.04039C20.4106 4.04039 19.6972 4.34258 19.0395 4.93577L12.7636 11.2482L13.9675 12.3674L20.1876 6.14453C20.4663 5.86472 20.8007 5.71922 21.1797 5.71922C21.5588 5.71922 21.8932 5.86472 22.1719 6.14453L22.8518 6.82725L24 5.61849L23.3758 4.93577C22.7181 4.34258 21.9823 4.04039 21.1797 4.04039ZM5.57362 7.3309L0 23L15.6061 17.4039L5.57362 7.3309ZM18.9503 10.7557C18.17 10.7557 17.4566 11.0579 16.7877 11.6511L15.0153 13.4307L16.2192 14.6394L17.9916 12.8599C18.2703 12.58 18.5824 12.4346 18.9503 12.4346C19.3182 12.4346 19.6526 12.58 19.9313 12.8599L21.7371 14.6394L22.9076 13.4866L21.124 11.6511C20.4663 11.0579 19.7306 10.7557 18.9503 10.7557Z" fill="#F29E1F"/>
                    </svg>
                </div>
                <p class='typesOfRecipes__text'>
                    На праздник
                </p>
            </div>
        </div>
        <div class='mainContainer__search'>
            <div>
                <p class='mainContainer__search__name'>
                    Поиск рецепта
                </p>
            </div>
            <div>
                <input class='mainContainer__search__input' placeholder='Название блюда...'></input>
            </div>
            <div>
                <button class='mainContainer__search__findButton' type=''>
                    <p class='findButtonText'>Поиск</p>
                </button>
            </div>
        </div>
        <div class='mainContainer__searchHelper'>
            <a class='searchHelper__request' href=''>мясо</a>
            <a class='searchHelper__request' href=''>деликатесы</a>
            <a class='searchHelper__request' href=''>пироги</a>
            <a class='searchHelper__request' href=''>рыба</a>
            <a class='searchHelper__request' href=''>пост</a>
            <a class='searchHelper__request' href=''>пасха2021</a>
        </div>
        <div class='mainContainer__productCards'>
            <div class='productCards__card'>
                <div>
                    <img class='cardImage' src='https://yastatic.net/s3/fiji-static/_/BhSOy0uVxgiuSYKBBKCi2JGQy6U.png' alt='img'></img>
                </div>
                <div class='cardInfo'>
                    <div class='cardInfo__categoriesAndFavourites'>
                        <div class='cardInfo__categories'>
                            <div class='category'>
                                десерты
                            </div>
                            <div class='category'>
                                клубника
                            </div>
                            <div class='category'>
                                сливки
                            </div>
                        </div>
                        <div class='cardInfo__favourites'>
                            <div class='favouritesContainer'>
                                <svg class='favouritesContainerSVG' width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_228)">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FDB100"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_228">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <p class='favouritesContainerAmount'>10</p>
                            </div>
                            <div class='favouritesContainer'>
                                <svg class='favouritesContainerSVG' width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_220)">
                                <g clip-path="url(#clip1_2_220)">
                                <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="#FDB100"/>
                                </g>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_220">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                <clipPath id="clip1_2_220">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <p class='favouritesContainerAmount'>8</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class='recipeName'>
                            Клубничная Панна-Котта
                        </p>
                        <p class='recipeDescription'>
                            Десерт, который невероятно легко и быстро готовится. Советую подавать его порционно в красивых бокалах, украсив взбитыми сливками, свежими ягодами и мятой.
                        </p>
                        <div class='recipeInfo'>
                            <div class='cookingTime'>
                                <svg class='cookingTimeSVG' width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_252)">
                                <path opacity="0.5" d="M32 2.66666H16V7.99999H32V2.66666ZM21.3333 37.3333H26.6667V21.3333H21.3333V37.3333ZM42.7467 19.7067L46.5333 15.92C45.3867 14.56 44.1333 13.28 42.7733 12.16L38.9867 15.9467C34.8533 12.64 29.6533 10.6667 24 10.6667C10.7467 10.6667 0 21.4133 0 34.6667C0 47.92 10.72 58.6667 24 58.6667C37.28 58.6667 48 47.92 48 34.6667C48 29.0133 46.0267 23.8133 42.7467 19.7067ZM24 53.3333C13.68 53.3333 5.33333 44.9867 5.33333 34.6667C5.33333 24.3467 13.68 16 24 16C34.32 16 42.6667 24.3467 42.6667 34.6667C42.6667 44.9867 34.32 53.3333 24 53.3333Z" fill="#FDB100"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_252">
                                <rect width="64" height="64" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <div class='cookingTime__description'>
                                    <p class='cookingTime__description__timing'>Время приготовления:</p>
                                    <p class='cookingTime__description_time'>35 мин</p>
                                </div>
                            </div>
                            <div class='personsCount'>
                                <svg class='personsCountSVG' width="64" height="64" viewBox="0 0 59 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M41.3335 21.6667C38.1335 21.6667 33.1468 22.5733 29.3335 24.3333C25.5201 22.5467 20.5335 21.6667 17.3335 21.6667C11.5468 21.6667 0.00012207 24.5467 0.00012207 30.3333V37.6667H58.6668V30.3333C58.6668 24.5467 47.1201 21.6667 41.3335 21.6667ZM30.6668 33.6667H4.00012V30.3333C4.00012 28.8933 10.8268 25.6667 17.3335 25.6667C23.8401 25.6667 30.6668 28.8933 30.6668 30.3333V33.6667ZM54.6668 33.6667H34.6668V30.3333C34.6668 29.1067 34.1335 28.04 33.2801 27.08C35.6268 26.28 38.5068 25.6667 41.3335 25.6667C47.8401 25.6667 54.6668 28.8933 54.6668 30.3333V33.6667ZM17.3335 19C22.4801 19 26.6668 14.8133 26.6668 9.66668C26.6668 4.52001 22.4801 0.333344 17.3335 0.333344C12.1868 0.333344 8.00012 4.52001 8.00012 9.66668C8.00012 14.8133 12.1868 19 17.3335 19ZM17.3335 4.33334C20.2668 4.33334 22.6668 6.73334 22.6668 9.66668C22.6668 12.6 20.2668 15 17.3335 15C14.4001 15 12.0001 12.6 12.0001 9.66668C12.0001 6.73334 14.4001 4.33334 17.3335 4.33334ZM41.3335 19C46.4801 19 50.6668 14.8133 50.6668 9.66668C50.6668 4.52001 46.4801 0.333344 41.3335 0.333344C36.1868 0.333344 32.0001 4.52001 32.0001 9.66668C32.0001 14.8133 36.1868 19 41.3335 19ZM41.3335 4.33334C44.2668 4.33334 46.6668 6.73334 46.6668 9.66668C46.6668 12.6 44.2668 15 41.3335 15C38.4001 15 36.0001 12.6 36.0001 9.66668C36.0001 6.73334 38.4001 4.33334 41.3335 4.33334Z" fill="#FDB100"/>
                                </svg>
                                <div class='cookingTime__description'>
                                    <p class='cookingTime__description__timing'>Рецепт на:</p>
                                    <p class='cookingTime__description_time'>5 персон</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='productCards__card'>
                <div>
                    <img class='cardImage' src='https://yastatic.net/s3/fiji-static/_/BhSOy0uVxgiuSYKBBKCi2JGQy6U.png' alt='img'></img>
                </div>
                <div class='cardInfo'>
                    <div class='cardInfo__categoriesAndFavourites'>
                        <div class='cardInfo__categories'>
                            <div class='category'>
                                десерты
                            </div>
                            <div class='category'>
                                клубника
                            </div>
                            <div class='category'>
                                сливки
                            </div>
                        </div>
                        <div class='cardInfo__favourites'>
                            <div class='favouritesContainer'>
                                <svg class='favouritesContainerSVG' width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_228)">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FDB100"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_228">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <p class='favouritesContainerAmount'>10</p>
                            </div>
                            <div class='favouritesContainer'>
                                <svg class='favouritesContainerSVG' width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_220)">
                                <g clip-path="url(#clip1_2_220)">
                                <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="#FDB100"/>
                                </g>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_220">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                <clipPath id="clip1_2_220">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <p class='favouritesContainerAmount'>8</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class='recipeName'>
                            Клубничная Панна-Котта
                        </p>
                        <p class='recipeDescription'>
                            Десерт, который невероятно легко и быстро готовится. Советую подавать его порционно в красивых бокалах, украсив взбитыми сливками, свежими ягодами и мятой.
                        </p>
                        <div class='recipeInfo'>
                            <div class='cookingTime'>
                                <svg class='cookingTimeSVG' width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_252)">
                                <path opacity="0.5" d="M32 2.66666H16V7.99999H32V2.66666ZM21.3333 37.3333H26.6667V21.3333H21.3333V37.3333ZM42.7467 19.7067L46.5333 15.92C45.3867 14.56 44.1333 13.28 42.7733 12.16L38.9867 15.9467C34.8533 12.64 29.6533 10.6667 24 10.6667C10.7467 10.6667 0 21.4133 0 34.6667C0 47.92 10.72 58.6667 24 58.6667C37.28 58.6667 48 47.92 48 34.6667C48 29.0133 46.0267 23.8133 42.7467 19.7067ZM24 53.3333C13.68 53.3333 5.33333 44.9867 5.33333 34.6667C5.33333 24.3467 13.68 16 24 16C34.32 16 42.6667 24.3467 42.6667 34.6667C42.6667 44.9867 34.32 53.3333 24 53.3333Z" fill="#FDB100"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_252">
                                <rect width="64" height="64" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <div class='cookingTime__description'>
                                    <p class='cookingTime__description__timing'>Время приготовления:</p>
                                    <p class='cookingTime__description_time'>35 мин</p>
                                </div>
                            </div>
                            <div class='personsCount'>
                                <svg class='personsCountSVG' width="64" height="64" viewBox="0 0 59 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M41.3335 21.6667C38.1335 21.6667 33.1468 22.5733 29.3335 24.3333C25.5201 22.5467 20.5335 21.6667 17.3335 21.6667C11.5468 21.6667 0.00012207 24.5467 0.00012207 30.3333V37.6667H58.6668V30.3333C58.6668 24.5467 47.1201 21.6667 41.3335 21.6667ZM30.6668 33.6667H4.00012V30.3333C4.00012 28.8933 10.8268 25.6667 17.3335 25.6667C23.8401 25.6667 30.6668 28.8933 30.6668 30.3333V33.6667ZM54.6668 33.6667H34.6668V30.3333C34.6668 29.1067 34.1335 28.04 33.2801 27.08C35.6268 26.28 38.5068 25.6667 41.3335 25.6667C47.8401 25.6667 54.6668 28.8933 54.6668 30.3333V33.6667ZM17.3335 19C22.4801 19 26.6668 14.8133 26.6668 9.66668C26.6668 4.52001 22.4801 0.333344 17.3335 0.333344C12.1868 0.333344 8.00012 4.52001 8.00012 9.66668C8.00012 14.8133 12.1868 19 17.3335 19ZM17.3335 4.33334C20.2668 4.33334 22.6668 6.73334 22.6668 9.66668C22.6668 12.6 20.2668 15 17.3335 15C14.4001 15 12.0001 12.6 12.0001 9.66668C12.0001 6.73334 14.4001 4.33334 17.3335 4.33334ZM41.3335 19C46.4801 19 50.6668 14.8133 50.6668 9.66668C50.6668 4.52001 46.4801 0.333344 41.3335 0.333344C36.1868 0.333344 32.0001 4.52001 32.0001 9.66668C32.0001 14.8133 36.1868 19 41.3335 19ZM41.3335 4.33334C44.2668 4.33334 46.6668 6.73334 46.6668 9.66668C46.6668 12.6 44.2668 15 41.3335 15C38.4001 15 36.0001 12.6 36.0001 9.66668C36.0001 6.73334 38.4001 4.33334 41.3335 4.33334Z" fill="#FDB100"/>
                                </svg>
                                <div class='cookingTime__description'>
                                    <p class='cookingTime__description__timing'>Рецепт на:</p>
                                    <p class='cookingTime__description_time'>5 персон</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='productCards__card'>
                <div>
                    <img class='cardImage' src='https://yastatic.net/s3/fiji-static/_/BhSOy0uVxgiuSYKBBKCi2JGQy6U.png' alt='img'></img>
                </div>
                <div class='cardInfo'>
                    <div class='cardInfo__categoriesAndFavourites'>
                        <div class='cardInfo__categories'>
                            <div class='category'>
                                десерты
                            </div>
                            <div class='category'>
                                клубника
                            </div>
                            <div class='category'>
                                сливки
                            </div>
                        </div>
                        <div class='cardInfo__favourites'>
                            <div class='favouritesContainer'>
                                <svg class='favouritesContainerSVG' width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_228)">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="#FDB100"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_228">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <p class='favouritesContainerAmount'>10</p>
                            </div>
                            <div class='favouritesContainer'>
                                <svg class='favouritesContainerSVG' width="20" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_220)">
                                <g clip-path="url(#clip1_2_220)">
                                <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="#FDB100"/>
                                </g>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_220">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                <clipPath id="clip1_2_220">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <p class='favouritesContainerAmount'>8</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class='recipeName'>
                            Клубничная Панна-Котта
                        </p>
                        <p class='recipeDescription'>
                            Десерт, который невероятно легко и быстро готовится. Советую подавать его порционно в красивых бокалах, украсив взбитыми сливками, свежими ягодами и мятой.
                        </p>
                        <div class='recipeInfo'>
                            <div class='cookingTime'>
                                <svg class='cookingTimeSVG' width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_252)">
                                <path opacity="0.5" d="M32 2.66666H16V7.99999H32V2.66666ZM21.3333 37.3333H26.6667V21.3333H21.3333V37.3333ZM42.7467 19.7067L46.5333 15.92C45.3867 14.56 44.1333 13.28 42.7733 12.16L38.9867 15.9467C34.8533 12.64 29.6533 10.6667 24 10.6667C10.7467 10.6667 0 21.4133 0 34.6667C0 47.92 10.72 58.6667 24 58.6667C37.28 58.6667 48 47.92 48 34.6667C48 29.0133 46.0267 23.8133 42.7467 19.7067ZM24 53.3333C13.68 53.3333 5.33333 44.9867 5.33333 34.6667C5.33333 24.3467 13.68 16 24 16C34.32 16 42.6667 24.3467 42.6667 34.6667C42.6667 44.9867 34.32 53.3333 24 53.3333Z" fill="#FDB100"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2_252">
                                <rect width="64" height="64" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                <div class='cookingTime__description'>
                                    <p class='cookingTime__description__timing'>Время приготовления:</p>
                                    <p class='cookingTime__description_time'>35 мин</p>
                                </div>
                            </div>
                            <div class='personsCount'>
                                <svg class='personsCountSVG' width="64" height="64" viewBox="0 0 59 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M41.3335 21.6667C38.1335 21.6667 33.1468 22.5733 29.3335 24.3333C25.5201 22.5467 20.5335 21.6667 17.3335 21.6667C11.5468 21.6667 0.00012207 24.5467 0.00012207 30.3333V37.6667H58.6668V30.3333C58.6668 24.5467 47.1201 21.6667 41.3335 21.6667ZM30.6668 33.6667H4.00012V30.3333C4.00012 28.8933 10.8268 25.6667 17.3335 25.6667C23.8401 25.6667 30.6668 28.8933 30.6668 30.3333V33.6667ZM54.6668 33.6667H34.6668V30.3333C34.6668 29.1067 34.1335 28.04 33.2801 27.08C35.6268 26.28 38.5068 25.6667 41.3335 25.6667C47.8401 25.6667 54.6668 28.8933 54.6668 30.3333V33.6667ZM17.3335 19C22.4801 19 26.6668 14.8133 26.6668 9.66668C26.6668 4.52001 22.4801 0.333344 17.3335 0.333344C12.1868 0.333344 8.00012 4.52001 8.00012 9.66668C8.00012 14.8133 12.1868 19 17.3335 19ZM17.3335 4.33334C20.2668 4.33334 22.6668 6.73334 22.6668 9.66668C22.6668 12.6 20.2668 15 17.3335 15C14.4001 15 12.0001 12.6 12.0001 9.66668C12.0001 6.73334 14.4001 4.33334 17.3335 4.33334ZM41.3335 19C46.4801 19 50.6668 14.8133 50.6668 9.66668C50.6668 4.52001 46.4801 0.333344 41.3335 0.333344C36.1868 0.333344 32.0001 4.52001 32.0001 9.66668C32.0001 14.8133 36.1868 19 41.3335 19ZM41.3335 4.33334C44.2668 4.33334 46.6668 6.73334 46.6668 9.66668C46.6668 12.6 44.2668 15 41.3335 15C38.4001 15 36.0001 12.6 36.0001 9.66668C36.0001 6.73334 38.4001 4.33334 41.3335 4.33334Z" fill="#FDB100"/>
                                </svg>
                                <div class='cookingTime__description'>
                                    <p class='cookingTime__description__timing'>Рецепт на:</p>
                                    <p class='cookingTime__description_time'>5 персон</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='loadMore'>
        <button class='loadMoreButton'>
            Загрузить еще
        </button>
    </div>
@endsection