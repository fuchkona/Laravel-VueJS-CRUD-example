<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphTransitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_machine_module_graph_transition', function (Blueprint $table) {
            $table->integer('graph_id')->unsigned()->nullable();
            $table->foreign('graph_id')->references('id')->on('state_machine_module_graphs')->onDelete('cascade');
            $table->integer('transition_id')->unsigned()->nullable();
            $table->foreign('transition_id')->references('id')->on('state_machine_module_transitions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state_machine_module_graph_transition');
    }
}
