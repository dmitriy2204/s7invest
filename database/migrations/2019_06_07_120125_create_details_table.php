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
            $table->string('serial')->nullable();
            $table->string('supplier')->nullable();
            $table->string('producer')->nullable();
            $table->integer('amount');
            $table->integer('min_amount')->nullable();
            $table->string('location_id')->nullable();
            $table->integer('status')
                ->unsigned()
                ->nullable();
            $table->foreign('status')
                ->references('id')
                ->on('statuses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('type')
                ->unsigned()
                ->nullable();
            $table->foreign('type')
                ->references('id')
                ->on('types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('analogues')->nullable();
            $table->string('comment')->nullable();
            $table->string('source')->nullable();
            $table->integer('used')->default(0);
            $table->integer('ordered')->default(0);
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
        Schema::dropIfExists('details');
    }
}
