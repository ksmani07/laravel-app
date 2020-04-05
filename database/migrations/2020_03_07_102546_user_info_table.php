<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Userinfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('fulladdress')->nullable();
            $table->string('aadharno')->nullable();
            $table->string('State')->nullable();
            $table->string('District')->nullable();
            $table->string('Graduation')->nullable();
            $table->date('dateofbirth')->nullable();
            $table->integer('age')->nullable();
            $table->string('institution')->nullable();
            $table->integer('mark')->nullable();
            $table->string('contact')->nullable();
            $table->string('F_name')->nullable();
            $table->string('M_name')->nullable();
            $table->string('F_occupation')->nullable();
            $table->string('M_occupation')->nullable();
            $table->string('bankaccountno')->nullable();
            $table->string('bankname')->nullable();
            $table->string('bankarea')->nullable();
            $table->string('Micrcodeno')->nullable();
            $table->string('Ifsccodeno')->nullable();
            $table->string('imgcommunity')->nullable();
            $table->string('imgplus2mark')->nullable();
            $table->string('imgcollegebonafide')->nullable();
            $table->string('studentsign')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('bank_image')->nullable();
            $table->boolean('status')->default(false); // false not submit form, true - submited form
            $table->integer('steps')->default(1);
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
        Schema::dropIfExists('users_info');
    }
}
