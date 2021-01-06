<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stock_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('product_id')->constrained('products')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_item_id')->constrained('product_items')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('sku',50);
            $table->decimal('unit_price',19,2);
            $table->smallInteger('quantity');
            $table->smallInteger('current_quantity');
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
        Schema::dropIfExists('product_stock_details');
    }
}
