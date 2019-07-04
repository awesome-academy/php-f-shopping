<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// @codingStandardsIgnoreLine
class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'contacts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('full_name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->text('content')->nullable();
                $table->text('content_reply')->nullable();
                $table->tinyInteger('deleted_flag')->default(0)->comment('1: deleted');
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
        Schema::dropIfExists('contacts');
    }
}
