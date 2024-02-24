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
        Schema::create('casees', function (Blueprint $table) {
            $table->id();
            $table->text('image')->comment('Фото услуги');
            $table->boolean('isActive')->default('0')->comment('Статус услуги');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casees');
    }
};
