<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// @codingStandardsIgnoreLine
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'products', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('category_id')->unsigned();
                $table->string('product_name');
                $table->string('price');
                $table->string('sale_price')->nullable();
                $table->string('qty');
                $table->text('description')->nullable();
                $table->string('image');
                $table->tinyInteger('hot')->default(0)->comment('1: bán chạy');
                $table->tinyInteger('status')->default(0)->comment('1: kích hoạt');
                $table->tinyInteger('deleted_flag')->default(0)->comment('1: xóa');
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
        Schema::dropIfExists('products');
    }
}
