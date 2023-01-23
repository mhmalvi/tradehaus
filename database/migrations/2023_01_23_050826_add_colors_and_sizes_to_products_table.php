<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorsAndSizesToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('color_1')->nullable();
            $table->string('color_2')->nullable();
            $table->string('color_3')->nullable();
            $table->string('color_4')->nullable();

            $table->string('size1')->nullable();
            $table->string('size2')->nullable();
            $table->string('size3')->nullable();
            $table->string('size4')->nullable();
            $table->string('size5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('color_1')->nullable();
            $table->string('color_2')->nullable();
            $table->string('color_3')->nullable();
            $table->string('color_4')->nullable();

            $table->string('size1')->nullable();
            $table->string('size2')->nullable();
            $table->string('size3')->nullable();
            $table->string('size4')->nullable();
            $table->string('size5')->nullable();
        });
    }
}
