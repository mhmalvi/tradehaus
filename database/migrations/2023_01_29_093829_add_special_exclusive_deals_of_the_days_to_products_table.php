<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecialExclusiveDealsOfTheDaysToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('isSpecial')->default('n')->nullable();
            $table->text('isExclusive')->default('n')->nullable();
            $table->text('deals_of_the_days')->default('n')->nullable();
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
            $table->text('isSpecial')->default('n')->nullable();
            $table->text('isExclusive')->default('n')->nullable();
            $table->text('deals_of_the_days')->default('n')->nullable();
        });
    }
}
