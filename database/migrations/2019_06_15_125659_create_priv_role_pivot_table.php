<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivRolePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priv_role', function (Blueprint $table) {
            $table->integer('priv_id')
                ->unsigned()
                ->nullable();
            $table->foreign('priv_id')
                ->references('id')
                ->on('privs')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('role_id')
                ->unsigned()
                ->nullable();
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['priv_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('priv_role');
    }
}
