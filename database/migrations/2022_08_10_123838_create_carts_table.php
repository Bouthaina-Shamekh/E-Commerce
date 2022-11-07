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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->integer('quantity')->default(1);

            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->foreignId('user_id');

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->on('users')->onDelete('cascade');

            $table->foreignId('product_id');
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
        Schema::dropIfExists('carts');
    }
};
