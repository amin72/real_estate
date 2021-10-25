<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('title', 200);
            $table->string('address', 300);
            $table->string('city', 100);
            $table->string('zipcode', 20);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('price');
            $table->unsignedTinyInteger('bedrooms');
            $table->boolean('has_store');
            $table->boolean('has_garage');
            $table->unsignedInteger('sqft');
            $table->boolean('is_published')->default(false);

            $table->string('image');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();

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
        Schema::dropIfExists('listings');
    }
}
