<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Friends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('user_friend_id');


            //SETTING THE PRIMARY KEYS
            $table->primary(['user_id','user_friend_id']);

            $table->dateTime('add_date');//date add friend
            $table->string('status');//status [friend,pending]

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
