<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('supplier_num');
            $table->string('producer_num');
            $table->string('serial');
            $table->string('supplier');
            $table->string('producer');
            $table->integer('amount');
            $table->integer('min_amount');
            $table->integer('location_id');
            $table->string('analogues');
            $table->integer('used');
            $table->integer('ordered');
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
        Schema::dropIfExists('details');
    }
}
