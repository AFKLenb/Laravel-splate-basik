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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique()->comment('Название категории');
            $table->text('description')->comment('Описание категории');
            $table->string('image')->comment('Фото категории');
            $table->boolean('isActive')->default('0')->comment('Статус категории');
            $table->boolean('isPopular')->default('0')->comment('Популярность категории');
            $table->boolean('isNew')->default('0')->comment('Новизна категории');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
