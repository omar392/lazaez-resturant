<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('spice_id');
            $table->unsignedBigInteger('cooking_id');
            $table->unsignedBigInteger('wrapping_id');
            $table->unsignedBigInteger('cutting_id');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('child_cat_id')->nullable();

            $table->string('name_ar');
            $table->string('name_en');
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('image');

            $table->float('price')->default(0);
            $table->float('offer_price')->default(0);
            $table->float('discount')->default(0);
            $table->enum('status',['active','inactive'])->default('active');
            
            $table->foreign('spice_id')->references('id')->on('spices')->onDelete('cascade');
            $table->foreign('cooking_id')->references('id')->on('cookings')->onDelete('cascade');
            $table->foreign('wrapping_id')->references('id')->on('cuttings')->onDelete('cascade');
            $table->foreign('cutting_id')->references('id')->on('cuttings')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');

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
        Schema::dropIfExists('products');
    }
}
