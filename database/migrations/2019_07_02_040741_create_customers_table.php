<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// @codingStandardsIgnoreLine
class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'customers', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('province_id');
                $table->integer('district_id');
                $table->string('first_name');
                $table->string('last_name');
                $table->string('email');
                $table->string('phone');
                $table->string('password');
                $table->string('token');
                $table->integer('status')->default(10)->comment('20: active');
                $table->tinyInteger('deleted_flag')->default(0)->comment('1: xรณa');
                $table->rememberToken();
                $table->timestamps();
            }
        );
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
