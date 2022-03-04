<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->id();
            $table->string('consultant');
            $table->string('manager');
            $table->string('total_advancement');
            $table->string('first_advancement');
            $table->string('during_advancement');
            $table->string('after_advancement');
            $table->string('estimated_amount');
            $table->string('final_amount');
            $table->string('reference_email');
            $table->string('practice_state');
            $table->string('real_estate_type');
            $table->text('description');
            $table->string('type_of_intervention');
            $table->string('additional_info');
            $table->string('note');
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
        Schema::dropIfExists('practices');
    }
}
