<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->bigInteger('price');
            $table->boolean('selected')->nullable()->default(false);
            $table->timestamps();
        });
        // Schema::table('performances', function (Blueprint $table) {
        //     $table->foreignId ('performance_id')->constrained();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additional_orders');
    }
}
