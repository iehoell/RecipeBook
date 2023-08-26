<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index(Request $request)
    {
        $recipe = (object) [
            'id' => '123',
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, dolore.',
            'category_id' => 1,
        ];

        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $recipes = array_fill(0, 10, $recipe);

        $recipes = array_filter($recipes, function ($recipe) use ($search, $category_id) {
            if($search && ! str_contains($recipe->title, $search)){
                return false;
            }

            if($category_id && $recipe->category_id != $category_id){
                return false;
            }

            return true;
        });

        return view('recipes.index');
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $photo = $request->input('photo');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $cooking__time = $request->input('cooking__time');
        $persons__count = $request->input('persons__count');
        $ingredients_title = $request->input('ingredients_title');
        $ingredients_description = $request->input('ingredients_description');
        $step_description = $request->input('step_description');


        dd($title, $photo, $description, $tags, $cooking__time, $persons__count, $ingredients_title, $ingredients_description, $step_description);

        return 'Запрос создание рецепта';
    }

    public function show($recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    public function edit($recipe)
    {
        $recipe = (object) [
            'id' => '123',
            'title' => 'Клубничная Панна-Котта',
            'content' => 'Десерт, который невероятно легко и быстро готовится. Советую подавать его порционно в красивых бокалах, украсив взбитыми сливками, свежими ягодами и мятой.',
            'category_id' => 1,
        ];
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request)
    {
        $title = $request->input('title');
        $photo = $request->input('photo');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $cooking__time = $request->input('cooking__time');
        $persons__count = $request->input('persons__count');
        $ingredients_title = $request->input('ingredients_title');
        $ingredients_description = $request->input('ingredients_description');
        $step_description = $request->input('step_description');

        dd($title, $photo, $description, $tags, $cooking__time, $persons__count, $ingredients_title, $ingredients_description, $step_description);

        return 'Запрос изменение рецепта';
    }

    public function delete($recipe)
    {
        return 'Запрос удаление рецепта';
    }

    public function __invoke()
    {
        return 'Recipes';
    }
}
