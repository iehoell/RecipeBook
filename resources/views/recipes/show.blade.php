@extends('layouts.base')

@section('page.title', 'Клубничная Панна-Котта')

@section('content')

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
    .recipeButtons{
        display: flex;
    }
    .editButton{
        background-color: #FDB100;
        border: none;
        border-radius: 16px;
        min-width: 278px;
        min-height: 60px;
        margin-bottom: 20px;
        margin-left: 20px;
    }
    .editButtonText{
        color: #FFFFFF;
        font-weight: 600;
        font-size: 18px;
        text-decoration: none;
        margin-top: 10px;
    }
    .deleteButton{
        width: 60px;
        height: 60px;
        border-radius: 16px;
        border: 1px solid #9196A1B2;
        background-color: white;
    }
    .trash{
        margin-bottom: 5px;
    }
    .ingredientsList{
        width: 25%;
        margin-top: 2%;
    }
    .ingredientsList__title{
        color: #FDB100;
        font-size: 20px;
        font-weight: 700;
        text-align: left;
    }
    ul{
        color: #4A525A;
        font-weight: 600;
        font-size: 18px;
        list-style: none;
        margin-bottom: 3%;
        text-align: left;
        padding: 0;
    }
    li{
        color: #4A525A;
        font-weight: 400;
        font-size: 18px;
        text-align: left;
    }
    .ingredientsList__subtitle{
        margin-bottom: 30px;
    }
    .stepsList{
        width: 75%;
        margin-left: 5%;
    }
    .bonAppetit{
        color: #FDB100;
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        margin-top: 2%;
    }
</style>
<div class='mainContainer'>
    <a 
        class='toBack'
        href='{{ route('recipes') }}'>
        Назад
    </a>
    <div class='titleBar'>
        <p class='title'>
            {{ __('Клубничная Панна-Котта') }}
        </p>
        <div class='recipeButtons'>
            <button class='deleteButton'>
                <svg class='trash' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 9V19H8V9H16ZM14.5 3H9.5L8.5 4H5V6H19V4H15.5L14.5 3ZM18 7H6V19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7Z" fill="#9EA3AC" fill-opacity="0.7"/>
                </svg>                    
            </button>
            <button class='editButton' type='submit'>
                <p class='editButtonText'>
                    {{ __('Редактировать') }}
                </p>
            </button>
        </div>
    </div>
    <x-product-card/> 
    <div class='d-flex'>
        <div class='ingredientsList'>
            <p class='ingredientsList__title'>
                {{ __('Ингредиенты') }}
            </p>
            <ul class='ingredientsList__subtitle'>
                {{ __('Для панна-котты') }}
                <li>{{ __('Сливки-20-30% - 500мл.') }}</li>
                <li>{{ __('Молоко - 100мл.') }}</li>
                <li>{{ __('Желатин - 2ч.л.') }}</li>
                <li>{{ __('Сахар - 3ст.л.') }}</li>
                <li>{{ __('Ванильный сахар - 2 ч.л.') }}</li>
            </ul>
            <ul class='ingredientsList__subtitle'>
                {{ __('Для клубничного желе') }}
                <li>{{ __('Сливки-20-30% - 500мл.') }}</li>
                <li>{{ __('Молоко - 100мл.') }}</li>
                <li>{{ __('Желатин - 2ч.л.') }}</li>
                <li>{{ __('Сахар - 3ст.л.') }}</li>
                <li>{{ __('Ванильный сахар - 2 ч.л.') }}</li>
            </ul>
        </div>
        <div class='stepsList'>
            <x-step-card/>
            <x-step-card/>
            <x-step-card/>
            <x-step-card/>
            <x-step-card/>
            <x-step-card/>
        </div>
    </div>  
</div>
<p class='bonAppetit'>
    {{ __('Приятного аппетита!') }}
</p>

@endsection