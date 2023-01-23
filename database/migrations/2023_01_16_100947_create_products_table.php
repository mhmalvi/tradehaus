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
            $table->text('product_name')->unique();
            $table->text('product_short_description');
            $table->text('product_details');
            $table->text('slug')->nullable()->unique();
            $table->integer('product_price');
            $table->text('size')->nullable();
            // $table->integer('product_weight');
            // $table->text('product_dimension')->nullable();
            $table->text('product_color')->nullable();
            $table->string('product_image');
            $table->string('product_image_1')->nullable();
            $table->string('product_image_2')->nullable();
            $table->string('product_image_3')->nullable();
            $table->string('product_image_4')->nullable();
            $table->string('product_image_5')->nullable();
            $table->string('product_image_6')->nullable();
            $table->string('product_discount')->nullable();
            $table->integer('product_quantity')->nullable();
            // $table->string('tags')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade')->nullable();
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
