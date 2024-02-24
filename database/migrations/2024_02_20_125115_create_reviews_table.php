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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ФИО клиента');;
            $table->text('text')->comment('Текст отзыва');;
            $table->text('image')->comment('фото клиента');;
            $table->boolean('rating')->default('1')->comment('Рейтинг отзыва');;
            $table->boolean('isActive')->default('0')->comment('Статус отзыва');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
