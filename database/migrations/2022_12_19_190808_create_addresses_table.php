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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->nullable(true);
            $table->foreignId('store_id')->constrained('stores', 'id')->nullable(true);
            $table->enum('type', ['comercial', 'pessoal']);
            $table->string('state');
            $table->string('city');
            $table->string('district');
            $table->string('street');
            $table->string('zip_code')->nullable(true);
            $table->string('number');
            $table->string('complement')->nullable(true);
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
        Schema::dropIfExists('addresses');
    }
};
