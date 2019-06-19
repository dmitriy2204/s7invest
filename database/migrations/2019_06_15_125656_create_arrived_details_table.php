<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrivedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrived_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_id')
                ->unsigned()
                ->nullable();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('name');
            $table->string('supplier_num');
            $table->string('producer_num');
            $table->string('serial');

            $table->integer('status_id')
                ->unsigned()
                ->nullable();
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('comment');
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
        Schema::dropIfExists('arrived_details');
    }
}
