<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldsToNullableInNewArrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_arrivals', function (Blueprint $table) {
            $table->text('short_description')->nullable()->change();
            $table->text('full_details')->nullable()->change();
            $table->string('image')->nullable()->change();
            $table->integer('price')->nullable()->change();
            $table->integer('quantity')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_arrivals', function (Blueprint $table) {
            //
        });
    }
}
