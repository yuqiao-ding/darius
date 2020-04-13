<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersdata', function (Blueprint $table) {
            $table->id();
            $table->date('created_at');
            $table->string('name');
            $table->string('age');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersdata');
    }
}
