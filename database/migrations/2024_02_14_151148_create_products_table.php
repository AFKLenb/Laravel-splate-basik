<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название товара');;
            $table->text('content')->comment('Описание товара');;
            $table->text('image')->comment('Изображение товара');;
            $table->string('price')->comment('Цена товара');;
            $table->boolean('isActive')->default('0')->comment('Статус товара');
            $table->boolean('isPopular')->default('0')->comment('Популярность товара');
            $table->boolean('isNew')->default('0')->comment('Новизна товара');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
