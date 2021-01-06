<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name')->nullable();
            $table->boolean('gender')->comment('1 = male, 2 = female')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('username')->nullable();
            $table->string('password');
            $table->text('image_profile')->nullable();
            $table->text('avatar');
            $table->text('remark')->nullable();
            $table->boolean('phone_verify')->default(0)->comment('0 => Not Verify , 1=> Verify' );
            $table->boolean('email_verify')->default(0)->comment('0 => Not Verify , 1=> Verify' );
            $table->boolean('active')->default(0)->comment('0 = Not Active , 1 = Active');
            $table->boolean('delete')->default(0)->comment('0 = Not Delete , 1 = Delete');
            $table->boolean('create_by')->comment('a value of user group, it can be admin or customer');
            $table->boolean('update_by')->comment('a value of user group, it can be admin or customer');
            $table->date('date_sign_up');
            $table->rememberToken();
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
        Schema::dropIfExists('customers');
    }
}
