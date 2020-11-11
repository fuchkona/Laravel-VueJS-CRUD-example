<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLqeQuestBlockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lqe_quest_block', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lqe_quest_template_id');
            $table->string('title');
            $table->boolean('is_disabled')->default(false);
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
        Schema::dropIfExists('lqe_quest_block');
    }
}
