<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserHobby extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_hobby', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('hobby_id');

            //FOREIGN KEY CONSTRAINTS
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('hobby_id')->references('id')->on('hobby')->onDelete('cascade');

            //SETTING THE PRIMARY KEYS
            $table->primary(['user_id','hobby_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
