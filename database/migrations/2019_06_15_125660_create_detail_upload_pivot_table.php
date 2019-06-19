<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailUploadPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_upload', function (Blueprint $table) {
            $table->integer('detail_id')
                ->unsigned()
                ->nullable();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('upload_id')
                ->unsigned()
                ->nullable();
            $table->foreign('upload_id')
                ->references('id')
                ->on('uploads')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['detail_id', 'upload_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_upload');
    }
}
