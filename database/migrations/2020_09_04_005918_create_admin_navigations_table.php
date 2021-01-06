<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_navigations', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('slug',100);
            $table->string('icon',50)->nullable();
            $table->string('link')->nullable();
            $table->string('parent_id',50)->nullable();
            $table->string('type')->comment('1=>Tittle,2=>Main,3=>Child');
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
        Schema::dropIfExists('admin_navigations');
    }
}
