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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id_project');
            $table->string('name');
            $table->string('website');
            $table->unsignedBigInteger('country_id')->index();
            $table->unsignedBigInteger('currency_id')->index();
            $table->unsignedBigInteger('timezone_id')->index();
            $table->integer('is_selected')->default(0);
            $table->string('token');
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
        Schema::dropIfExists('projects');
    }
};
