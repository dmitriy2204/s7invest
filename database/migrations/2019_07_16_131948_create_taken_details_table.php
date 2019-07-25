<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakenDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taken_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_id')
                ->unsigned()
                ->nullable();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('user_id')
                ->unsigned()
                ->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('simulator_id')
                ->unsigned()
                ->nullable();
            $table->foreign('simulator_id')
                ->references('id')
                ->on('simulators')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('amount');
            $table->string('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taken_details');
    }
}
