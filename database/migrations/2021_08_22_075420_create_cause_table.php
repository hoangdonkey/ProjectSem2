<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->id('cause_id');
            $table->string('cause_title');
            $table->string('category');
            $table->string('description');
            $table->integer('goal');
            $table->integer('total_amount');
            $table->integer('dnt_amount');
            $table->boolean('status');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cause');
    }
}
