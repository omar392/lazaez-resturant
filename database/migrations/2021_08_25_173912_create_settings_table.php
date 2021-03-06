<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->integer('tax');
            $table->integer('service');
            $table->string('whatsapp');
            $table->string('website_url');
            $table->string('apple_url');
            $table->string('android_url');
            $table->string('twitter');
            $table->string('snapchat');
            $table->string('instagram');
            $table->mediumText('address_ar');
            $table->mediumText('address_en');
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
        Schema::dropIfExists('settings');
    }
}
