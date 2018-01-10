<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            // Fields
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('path');
            $table->string('body');
            $table->mediumText('response');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            // Indexes
            $table->index('user_id');
            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
