<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('tittle_en');
            $table->string('tittle_kh');
            $table->string('slug');
            $table->string('thumbnail');
            $table->text('description_en');
            $table->text('description_kh');
            $table->boolean('create_by')->comment('a value of user group, it can be admin or shop owner');
            $table->boolean('update_by')->comment('a value of user group, it can be admin or shop owner');
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
        Schema::dropIfExists('news');
    }
}
