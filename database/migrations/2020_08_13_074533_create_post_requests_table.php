<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_requests', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('description');
            $table->string('email');
            $table->json('reference')->nullable();
            $table->boolean('status')->default(0)->comment('0=Pending 1=Check, 2=Solve, 3=Not Solved');
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
        Schema::dropIfExists('post_requests');
    }
}
