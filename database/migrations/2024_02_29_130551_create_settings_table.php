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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // название компании
            $table->string('address'); // адрес компании
            $table->string('phone_number'); // телефон компании
            $table->string('email'); // email адрес
            $table->string('schedule'); // график работы
            $table->string('logo')->nullable(); // логотип сайта
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
