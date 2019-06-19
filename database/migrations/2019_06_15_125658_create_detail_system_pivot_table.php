<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailSystemPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_system', function (Blueprint $table) {
            $table->integer('detail_id')
                ->unsigned()
                ->nullable();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('system_id')
                ->unsigned()
                ->nullable();
            $table->foreign('system_id')
                ->references('id')
                ->on('systems')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['detail_id', 'system_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_system');
    }
}
