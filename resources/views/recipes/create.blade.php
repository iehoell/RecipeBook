@extends('layouts.base')

@section('page.title', 'Рецепты')

    <style>
        .mainContainer{
            width: 90%;
            margin-left: 5%;
            margin-top: 5%;
        }
        .toBack{
            color: #FDB100;
            font-size: 18px;
            font-weight: 500;
            margin-right: 99%;
            text-decoration: none;
        }
        .titleBar{
            margin-top: 2%;
            display: flex;
            justify-content: space-between;
        }
        .title{
            color: #25292D;
            font-size: 42px;
            font-weight: 700;
        }
        .publishButton{
            background-color: #FDB100;
            border: none;
            border-radius: 16px;
            min-width: 278px;
            min-height: 60px;
            margin-bottom: 20px;
        }
        .publishButtonText{
            color: #FFFFFF;
            font-weight: 600;
            font-size: 18px;
            text-decoration: none;
            margin-top: 10px;
        }
        .createRecipeCard{
            border: none;
            box-shadow: 0 0 40px lightgrey;
            display: flex;
            border-radius: 72px 0px 0px 0px;
        }
        .recipeCardText{
            color: #25292D;
            font-weight: 400;
            font-size: 16px;
            float: left;
            display: table-cell;
        }
        .recipeCard__image{
            width: 430px;
            height: 430px;
            background-color: orange;
            border-radius: 72px 0 72px 0;
        }
        .recipeCard__info{
            margin: 3% 5% 0 5%;
        }
        .recipeCard__info__title{
            width: 110%;
            margin-bottom: 3%;
        }
        .recipeCard__info__tags{
            width: 110%;
            margin-bottom: 3%;  
        }
        input{
            border: 1px solid #9196A166;
            border-radius: 16px;
            padding: 15px;
            width: 133%;
        }
        svg{
            margin: 0 5% 2% 5%;
        }
        .recipeDescription{
            width: 110%;
            height: 117px;
            border: 1px solid #9196A166;
            border-radius: 16px;
            resize: none; 
            padding: 15px;
            margin-bottom: 3%;
        }
        .recipeCard__info__tableInputs{
            width: 110%;
            display: table;
        }
        .tableInput__InputColumn{
            float: left;
            display: table-cell;
            width: 25%;
        }
        .tableInput__textColumn{
            color: #25292D;
            font-weight: 400;
            font-size: 16px;
            float: left;
            display: table-cell;
            width: 25%;
            margin-top: 2%;
        }
        .userPhoto{  
            border-radius: 72px 0px 72px 0px;
            border: none;
            margin: 200px 50px 200px 50px;
        }
        .secondContainer{
            width: 90%;
            margin-left: 5%;
            margin-top: 5%;
            display: flex;
        }
        .ingredients{
            width: 25%;
            box-shadow: 0 0 40px lightgrey;
        }
        .ingredientsTitle{
            color: #4A525A;
            font-size: 20px;
            font-weight: 700;
            text-align: left;
        }
        .ingredients_title{
            margin: 0 5% 5% 5%;
            width: 90%;
        }
        .ingredientsDescription{
            margin-right: 5%;
            margin-left: 5%;
            width: 90%;
            height: 117px;
            border: 1px solid #9196A166;
            border-radius: 16px;
            resize: none; 
            padding: 15px;
        }
        .addTitleButton{
            margin: 2% 5% 2% 5%;
            width: 90%;
            height: 60px;
            border-radius: 16px;
            background-color: white;
            border: 1px solid orange;
            color: orange;
            font-weight: 600;
            font-size: 18px;
            text-decoration: none;
        }
        .steps{
            width: 70%;
            box-shadow: 0 0 40px lightgrey;
            margin-left: 50px;
        }
        .stepCount{
            text-align: left;
            color: #4A525A;
            font-weight: 600;
            font-size: 18px;
            margin: 5% 0 2% 5%;
        }
        .stepDescription{
            margin: 0 5% 2% 5%;
            width: 90%;
            height: 117px;
            border: 1px solid #9196A166;
            border-radius: 16px;
            resize: none; 
            padding: 15px;
        }
    </style>

@section('content')
    <form action='{{ route('recipes.store') }}' method='POST'>
        @csrf
        <div class='mainContainer'>
            <a 
                class='toBack'
                href='{{ route('recipes') }}'>
                Назад
            </a>
            <div class='titleBar'>
                <p class='title'>
                    {{ __('Добавить новый рецепт') }}
                </p>
                <button class=publishButton type='submit'>
                    <p class='publishButtonText'>
                        {{ __('опубликовать') }}
                    </p>
                </button>
            </div>
            <div class='createRecipeCard'>
                <div class='recipeCard__image'>
                    <input class='userPhoto' name='photo' type='file'>
                </div>
                <div class='recipeCard__info'>
                    <input 
                        class='recipeCard__info__title'
                        name='title'
                        type='text' 
                        placeholder="{{ __('Название рецепта') }}"
                        autofocus
                        required>
                    <textarea 
                        name='description'
                        class='recipeDescription'
                        type='text'
                        required
                        maxlength='150' 
                        placeholder="{{ __('Краткое описание рецепта (150 символов)') }}"
                    ></textarea>
                    <input
                        class='recipeCard__info__tags'
                        name='tags'
                        type='text'
                        required
                        placeholder="{{ __('Добавить теги')}}">
                    <div class='recipeCard__info__tableInputs'>
                        <input
                            class='tableInput__InputColumn'
                            name='cooking__time'
                            type='text'
                            required
                            placeholder="{{ __('Время готовки') }}">
                        <p class='tableInput__textColumn'>
                            {{ __('Минут') }}
                        </p>
                        <input
                            class='tableInput__InputColumn'
                            name='persons__count'
                            type='text'
                            required
                            placeholder="{{ __('Порций в блюде') }}">
                        <p class='tableInput__textColumn'>
                            {{ __('Персон') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class='secondContainer'>
            <div class='ingredients'>
                <p class='ingredientsTitle'>
                    {{ __('Ингредиенты') }}
                </p>
                <input
                    class='ingredients_title'
                    name='ingredients_title'
                    type='text'
                    placeholder='{{ __('Заголовок для ингридиентов') }}'>
                <textarea
                    class='ingredientsDescription'
                    name='ingredients_description'
                    type='text'
                    placeholder='{{ __('Спиок продуктов для категории') }}'
                ></textarea>
                <button class='addTitleButton'>
                    <svg class='svg' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_464)">
                            <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z" fill="orange"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_464">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __('Добавить заголовок') }}
                </button>
            </div>
            <div class='steps'>
                <p class='stepCount'>
                    {{ __('Шаг 1') }}
                </p>
                <textarea
                    class='stepDescription'
                    name='step_description'
                    type='text'
                    placeholder='{{ __('Описание шага') }}'
                ></textarea>
                <button class='addTitleButton'>
                    <svg class='svg' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_464)">
                            <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z" fill="orange"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_464">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __('Добавить шаг') }}
                </button>
            </div>
        </div>
    </form>
@endsection