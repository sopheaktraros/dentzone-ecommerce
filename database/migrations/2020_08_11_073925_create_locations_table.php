<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name_en')->unique();
            $table->string('name_kh')->unique()->nullable();
            $table->string('slug')->unique();
            $table->integer('parent_id')->nullable();
            $table->boolean('type')->comment('0 = Countries, 1 = Province , 2 = District , 3 = Commune, 4 = Village');
            $table->text('description_en')->nullable();
            $table->text('description_kh')->nullable();
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
        Schema::dropIfExists('locations');
    }
}
