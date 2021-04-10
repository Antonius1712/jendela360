<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellingData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selling_data', function (Blueprint $table) {
            $table->id();
            $table->string('customerName')->nullable();
            $table->string('customerEmail')->nullable();
            $table->string('customerPhone')->nullable();
            $table->string('purchasedCar')->nullable();
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
        Schema::dropIfExists('selling_data');
    }
}
