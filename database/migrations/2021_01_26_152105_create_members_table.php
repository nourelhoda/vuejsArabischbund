<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('address');
            $table->date('Birthdate');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('children')->default(0);
            $table->string('job');
            $table->string('social_status')->default('married');
            $table->integer('user_id')->unsigned();
            $table->string('state')->default('active');
            $table->date('expierdate')->default(Carbon::now()->copy()->endOfYear());
      //$table->integer('parent_comment_id')->unsigned()->nullable()->default(NULL)->index();

            // $table->foreign('user_id')->references('id')->on('users')->onchange();
            //$table->('Vorname');
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
        Schema::dropIfExists('members');
    }
}
