<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained('stores', 'id');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->enum('function', ['vendedor', 'lojista', 'gerente']);
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_employees');
    }
};
