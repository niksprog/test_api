<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('reports', function (Blueprint $table) {
            // Fields
            $table->increments('id');
            $table->integer('vessel_id')->unsigned();
            $table->timestamp('created_on');
            $table->string('conditionType');
            $table->decimal('meHours', 3, 1);
            $table->decimal('meCons', 5, 2);
            $table->tinyInteger('auxHours');
            $table->decimal('auxCons', 3, 2);
            $table->decimal('observedDistance', 4, 1);
            // Indexes
            $table->index('vessel_id');
            // Foreign keys
            $table->foreign('vessel_id')->references('id')->on('vessels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
