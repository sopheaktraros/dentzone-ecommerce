<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_group_id');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->boolean('active')->default(0)->comment('0 = Not Active , 1 = Active');
            $table->boolean('delete')->default(0)->comment('0 = Not Delete , 1 = Delete');
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
        Schema::dropIfExists('roles');
    }
}
