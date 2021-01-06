<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('uuid')->unique();
            $table->string('name')->unique();
            $table->unsignedInteger('location_id')->comment('Shop location');
            $table->char('phone_line1','15')->comment('Contact number line 1');
            $table->char('phone_line2','15')->comment('Contact number line 2')->nullable();
            $table->string('business_email')->comment('The business email have been connected to your shop');
            $table->text('address')->nullable()->comment('Address detail who wanna find your shop.');
            $table->text('description')->nullable()->comment('Write about your details to audience or customer');
            $table->text('logo')->comment('Your shop logo');
            $table->double('commission',2)->default(0)->nullable()->comment('The percent need to paid platform.');
            $table->boolean('status')->default('0')->comment('0 = Register, 1 = Approved, 2 = Reject, 3 = Block');
            $table->text('reason')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
