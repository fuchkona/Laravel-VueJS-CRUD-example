<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLqeQuestTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lqe_quest_template', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id');
            $table->bigInteger('network_id')->nullable();
            $table->bigInteger('instruction_photo_id')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('lqe_quest_template');
    }
}
