<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users');

            $table->string('title');
            $table->text('description');
            $table->string('tags')->nullable();
            $table->string('cookingTime');
            $table->string('personsCount');
            $table->string('recipePhoto');

            $table->string('engredientsTitle');
            $table->text('engredientsDescription');

            $table->text('stepDescription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
