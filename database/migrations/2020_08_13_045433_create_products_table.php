<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('shop_id')->constrained('shops')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('code')->nullable();
            $table->string('name_en');
            $table->string('name_kh')->nullable();
            $table->string('slug');
            $table->text('short_description_en')->nullable();
            $table->text('short_description_kh')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_kh')->nullable();
            $table->integer('total_view')->default(0);
            $table->integer('total_order')->default(0);
            $table->text('thumbnail')->nullable();
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
        Schema::dropIfExists('products');
    }
}
