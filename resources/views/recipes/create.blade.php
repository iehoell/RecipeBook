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
        }
        .recipeCardText{
            color: #25292D;
            font-weight: 400;
            font-size: 16px;
        }
        .recipeCard__image{
            width: 430px;
            height: 430px;
            background-color: orange;
        }
        .recipeCard__info{
            margin: 5%;
        }
        input{
            border: 1px solid #9196A166;
            border-radius: 16px;
            padding: 15px;
            width: 133%;
        }
        .recipeDescription{
            width: 133%;
            height: 117px;
            border: 1px solid #9196A166;
            border-radius: 16px;
            resize: none; 
            padding: 15px;
        }
        .recipeCard__info__flexInputs{
            width: 133%;
            display: flex;
            justify-content: space-between;
        }
        .flexInput{
            width: 25%;
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
                <div class='recipeCard__image'></div>
                <div class='recipeCard__info'>
                    <div class='recipeCard__info__title'>
                        <input 
                            type='text' 
                            placeholder="{{ __('Название рецепта') }}"
                            autofocus
                            required>
                    </div>
                    <div class='recipeCard__info__description'>
                        <textarea 
                            class='recipeDescription'
                            type='text'
                            required
                            maxlength='150' 
                            placeholder="{{ __('Краткое описание рецепта (150 символов)') }}"
                        ></textarea>
                    </div>
                    <div class='recipeCard__info__tags'>
                        <input
                            type='text'
                            required
                            placeholder="{{ __('Добавить теги')}}">
                    </div>
                    <div class='recipeCard__info__flexInputs'>
                        <div class='recipeCard__info__cookingTime'>
                            <input
                                type='text'
                                class='flexInput'
                                required
                                placeholder="{{ __('Время готовки') }}">
                        </div>
                        <p class='recipeCardText'>
                            {{ __('Минут') }}
                        </p>
                        <div class='recipeCard__info__personsCount'>
                            <input
                                type='text'
                                class='flexInput'
                                required
                                placeholder="{{ __('Порций в блюде') }}">
                        </div>
                        <p class='recipeCardText'>
                            {{ __('Персон') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection