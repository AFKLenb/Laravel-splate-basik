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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ФИО');;
            $table->string('number')->comment('Номер телефона');;
            $table->text('email')->comment('Сообщение');;
            $table->string('dateCreate')->comment('Дата создания');;
            $table->string('date')->comment('Дата вызова');;
            $table->boolean('isType')->default('0')->comment('Тип помещения');
            $table->boolean('isStatus')->default('0')->comment('Статус заявки');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
