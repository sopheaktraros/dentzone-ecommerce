<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_discounts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('product_id')->constrained('products')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('discount');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->boolean('create_by')->comment('a value of user group, it can be admin or shop owner');
            $table->boolean('update_by')->comment('a value of user group, it can be admin or shop owner');
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
        Schema::dropIfExists('product_discounts');
    }
}
