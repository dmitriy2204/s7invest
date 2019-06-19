<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailSimulatorPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_simulator', function (Blueprint $table) {
            $table->integer('detail_id')
                ->unsigned()
                ->nullable();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
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

            $table->unique(['detail_id', 'simulator_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_simulator');
    }
}
