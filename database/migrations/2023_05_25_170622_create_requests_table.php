<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('story_id');
            $table->unsignedBigInteger('reader_id');
            $table->unsignedBigInteger('creator_id');
            $table->string('status')->default('pending');
            // Additional columns...
            $table->timestamps();

            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade');
            $table->foreign('reader_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');
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
