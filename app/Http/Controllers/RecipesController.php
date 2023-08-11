<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        return view('recipes.index');
    }

    public function create()
    {
        return 'Страница создание рецепта';
    }

    public function store()
    {
        return 'Запрос создание рецепта';
    }

    public function show($recipe)
    {
        return "Страница просмотр рецепта {$recipe}";
    }

    public function edit($recipe)
    {
        return "Страница изменение поста {$recipe}";
    }

    public function update()
    {
        return 'Запрос изменение рецепта';
    }

    public function delete()
    {
        return 'Запрос удаление рецепта';
    }

    public function __invoke()
    {
        return 'Recipes';
    }
}
