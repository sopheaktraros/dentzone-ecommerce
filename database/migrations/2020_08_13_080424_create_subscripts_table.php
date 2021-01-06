<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscripts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('email');
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
        Schema::dropIfExists('subscripts');
    }
}
