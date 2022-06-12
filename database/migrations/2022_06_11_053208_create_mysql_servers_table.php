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
        Schema::create('mysql_servers', function (Blueprint $table) {
            $table->bigIncrements('id_mysql_server');
            $table->string('mysql_connect_name');
            $table->string('mysql_host_ip');
            $table->string('mysql_db_name');
            $table->string('mysql_port');
            $table->string('mysql_user');
            $table->string('mysql_password');
            $table->string('mysql_socket_path')->nullable();
            $table->integer('open')->default(1);
            $table->integer('run')->default(0);
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
        Schema::dropIfExists('mysql_servers');
    }
};
