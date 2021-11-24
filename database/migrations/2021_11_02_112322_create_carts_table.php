<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('spice_id')->nullable();
            $table->unsignedBigInteger('cooking_id')->nullable();
            $table->unsignedBigInteger('wrapping_id')->nullable();
            $table->unsignedBigInteger('cutting_id')->nullable();

            $table->integer('price');
            $table->integer('offer_price');
            $table->integer('quantity');
            $table->integer('total_price_before');
            $table->integer('total_price_after');

            $table->foreign('spice_id')->references('id')->on('spices')->onDelete('cascade');
            $table->foreign('cooking_id')->references('id')->on('cookings')->onDelete('cascade');
            $table->foreign('wrapping_id')->references('id')->on('wrappings')->onDelete('cascade');
            $table->foreign('cutting_id')->references('id')->on('cuttings')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
}
