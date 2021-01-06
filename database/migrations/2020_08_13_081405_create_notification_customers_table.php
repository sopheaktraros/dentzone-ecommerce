<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('tittle');
            $table->text('description');
            $table->integer('sent_by');
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
        Schema::dropIfExists('notification_customers');
    }
}
