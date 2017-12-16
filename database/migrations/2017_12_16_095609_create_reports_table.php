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
            $table->increments('id');
            $table->string('imo')->references('imo')->on('vessels')->onDelete('set null');
            $table->timestamp('created_on');
            $table->enum('conditionType',['steaming', 'anchor']);
            $table->unsignedInteger('meHours')->nullable();
            $table->double('meCons',15,2)->nullable();
            $table->unsignedInteger('auxHours')->nullable();
            $table->double('auxCons',15,2)->nullable();
            $table->double('observedDistance',15,1)->nullable();
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
