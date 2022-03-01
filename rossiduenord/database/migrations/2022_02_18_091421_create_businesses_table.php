<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('created_by')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('referent')->nullable();
            $table->string('referent_phone', 15)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type')->nullable();
            $table->string('p_iva', 11)->nullable();
            $table->string('c_f')->nullable();
            $table->string('legal_form')->nullable();
            $table->string('rea')->nullable();
            $table->string('c_ateco')->nullable();
            $table->string('reg_date')->nullable();
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
        Schema::table('businesses', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
        Schema::dropIfExists('businesses');
    }
}
