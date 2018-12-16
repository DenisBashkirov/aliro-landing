<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('layout_benefits'))
        {
            Schema::create('layout_benefits', function (Blueprint $table) {
                $table->increments('id');
                $table->string('icon')->nullable();
                $table->string('title');
                $table->text('text');
                $table->integer('ordering')->unsigned()->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layout_benefits');
    }
}
