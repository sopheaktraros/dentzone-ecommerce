<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductItemOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_item_options', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('product_item_id')->constrained('product_items')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_attribute_id')->constrained('product_attributes')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_attribute_value_id')->constrained('product_attribute_values')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('key',100);
            $table->string('value',100);
            $table->text('image')->nullable();
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
        Schema::dropIfExists('product_item_options');
    }
}
