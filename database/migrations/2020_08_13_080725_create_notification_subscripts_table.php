<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationSubscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_subscripts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscript_id')->constrained('subscripts')
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
        Schema::dropIfExists('notification_subscripts');
    }
}
