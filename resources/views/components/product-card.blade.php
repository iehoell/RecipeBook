<style>
    .productCards__card{
        display: flex;
        margin-top: 30px;
        height: 430px;
        border-radius: 1px;
        box-shadow: 0 0 40px lightgrey;
        border: none;
        border-radius: 72px 0 0 0;
    }
    .cardImage{
        width: 430px;
        height: 430px;
        border-radius: 72px 0 72px 0;
    }
    .cardInfo{
        margin-left: 40px;
    }
    .cardInfo__categoriesAndFavourites{
        margin-top: 40px;
        display: flex;
    }
    .cardInfo__categories{
        display: flex;
        margin-top: 15px;
    }
    .category{
        border-radius: 5px;
        background-color: #FFEFCC;
        margin-right: 15px;
        height: 25px;
        color: #F29E1F;
    }
    .cardInfo__favourites{
        display: flex;
        margin-left: 240px;
    }
    .favouritesContainer{
        display: flex;
        width: 107px;
        height: 50px;
        border-radius: 16px;
        border: 1px solid orange;
        margin-right: 20px;
    }
    .favouritesContainerSVG{
        margin-top: 17px;
        margin-left: 30px;
    }
    .favouritesContainerAmount{
        color: orange;
        font-weight: 600;
        font-size: 18px;
        margin-left: 10px;
    }
    .recipeName{
        text-decoration: none;
        margin-right: 63%;
        color: #25292D;
        font-weight: 700;
        font-size: 24px;
    }
    .recipeDescription{
        text-align: left;
        color: #4A525A;
        font-weight: 400;
        font-size: 18px;
    }
    .recipeInfo{
        margin-top: 60px;
        display: flex;
    }
    .cookingTime{
        display: flex;
        height: 64px;
        width: 250px;
    }
    .personsCount{
        margin-left: 40px;
        display: flex;
        height: 64px;
        width: 250px;
    }
    .cookingTime__description{
        display: grid;
        grid-row: 2;
        margin-left: 10px;
    }
    .cookingTimeSVG{
        margin-top: 20px;
    }
    .personsCountSVG{
        margin-top: 20px;
    }
    .cookingTime__description__timing{
        font-weight: 400;
        font-size: 14px;
        color: gray;
    }
    .cookingTime__description_time{
        font-weight: 400;
        font-size: 16px;
        color: #25292D;
    }
    .buttonLink{
        width: 100%;
        height: 430px;
        text-decoration: none;
    }
</style>

<div class='productCards__card'>
    <div>
        <img class='cardImage' src='https://yastatic.net/s3/fiji-static/_/BhSOy0uVxgiuSYKBBKCi2JGQy6U.png' alt='img'>
    </div>
    <div class='cardInfo'>
        <div class='cardInfo__categoriesAndFavourites'>
            <div class='cardInfo__categories'>
                <div class='category'>
                    {{ __('десерты') }}
                </div>
                <div class='category'>
                    {{ __('клубника') }}
                </div>
                <div class='category'>
                    {{ __('сливки') }}
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
            <a class='recipeName' href='{{ route('recipes') }}'>
                {{ __('Клубничная Панна-Котта') }}
            </a>
            <p class='recipeDescription'>
                {{ __('Десерт, который невероятно легко и быстро готовится. Советую подавать его порционно в красивых бокалах, украсив взбитыми сливками, свежими ягодами и мятой.') }}
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
                        <p class='cookingTime__description__timing'>{{ __('Время приготовления:') }}</p>
                        <p class='cookingTime__description_time'>{{ __('35 мин') }}</p>
                    </div>
                </div>
                <div class='personsCount'>
                    <svg class='personsCountSVG' width="64" height="64" viewBox="0 0 59 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41.3335 21.6667C38.1335 21.6667 33.1468 22.5733 29.3335 24.3333C25.5201 22.5467 20.5335 21.6667 17.3335 21.6667C11.5468 21.6667 0.00012207 24.5467 0.00012207 30.3333V37.6667H58.6668V30.3333C58.6668 24.5467 47.1201 21.6667 41.3335 21.6667ZM30.6668 33.6667H4.00012V30.3333C4.00012 28.8933 10.8268 25.6667 17.3335 25.6667C23.8401 25.6667 30.6668 28.8933 30.6668 30.3333V33.6667ZM54.6668 33.6667H34.6668V30.3333C34.6668 29.1067 34.1335 28.04 33.2801 27.08C35.6268 26.28 38.5068 25.6667 41.3335 25.6667C47.8401 25.6667 54.6668 28.8933 54.6668 30.3333V33.6667ZM17.3335 19C22.4801 19 26.6668 14.8133 26.6668 9.66668C26.6668 4.52001 22.4801 0.333344 17.3335 0.333344C12.1868 0.333344 8.00012 4.52001 8.00012 9.66668C8.00012 14.8133 12.1868 19 17.3335 19ZM17.3335 4.33334C20.2668 4.33334 22.6668 6.73334 22.6668 9.66668C22.6668 12.6 20.2668 15 17.3335 15C14.4001 15 12.0001 12.6 12.0001 9.66668C12.0001 6.73334 14.4001 4.33334 17.3335 4.33334ZM41.3335 19C46.4801 19 50.6668 14.8133 50.6668 9.66668C50.6668 4.52001 46.4801 0.333344 41.3335 0.333344C36.1868 0.333344 32.0001 4.52001 32.0001 9.66668C32.0001 14.8133 36.1868 19 41.3335 19ZM41.3335 4.33334C44.2668 4.33334 46.6668 6.73334 46.6668 9.66668C46.6668 12.6 44.2668 15 41.3335 15C38.4001 15 36.0001 12.6 36.0001 9.66668C36.0001 6.73334 38.4001 4.33334 41.3335 4.33334Z" fill="#FDB100"/>
                    </svg>
                    <div class='cookingTime__description'>
                        <p class='cookingTime__description__timing'>{{ __('Рецепт на:') }}</p>
                        <p class='cookingTime__description_time'>{{ __('5 персон') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>