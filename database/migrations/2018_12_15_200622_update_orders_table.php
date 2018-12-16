<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('orders') && !Schema::hasColumn('client_id', 'type_id'))
        {
            Schema::table('orders', function (Blueprint $table)
            {
                $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
                $table->foreign('type_id')->references('id')->on('order_types')->onDelete('cascade');
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
        //
    }
}
