<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_machine_module_transitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('code');
            $table->integer('state_from_id')->unsigned();
            $table->foreign('state_from_id')->references('id')->on('state_machine_module_states');
            $table->integer('state_to_id')->unsigned();
            $table->foreign('state_to_id')->references('id')->on('state_machine_module_states');
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
        Schema::dropIfExists('state_machine_module_transitions');
    }
}
