<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 11);
            $table->string('mobile', 11);
            $table->string('whatsapp', 11);
            $table->string('email');
            $table->string('instagram');
            $table->string('telegram');
            $table->string('youtube');
            $table->string('aparat');
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
        Schema::dropIfExists('manager_info');
    }
}
