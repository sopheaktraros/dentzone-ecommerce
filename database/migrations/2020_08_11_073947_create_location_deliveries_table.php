<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_deliveries', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->integer('location_id');
            $table->double('estimate')->default(1);
            $table->decimal('fee',19,2)->default(0.00);
            $table->decimal('fee_reference',19,2)->default(0.00);
            $table->boolean('create_by')->comment('a value of user group, it can be admin or customer');
            $table->boolean('update_by')->comment('a value of user group, it can be admin or customer');
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
        Schema::dropIfExists('location_deliveries');
    }
}
