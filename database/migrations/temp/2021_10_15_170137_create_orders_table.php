<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('location_link', 100);
            $table->string('location_description', 100);
            $table->string('order_notes', 100)->nullable()->default('text');
            $table->string('seller_notes', 100)->nullable()->default('text');
            $table->timestamps();
        });
        // Schema::table('performances', function (Blueprint $table) {
        //     $table->foreignId ('seller_id')->constrained();
        //     $table->foreignId ('customer_id')->constrained();
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
        Schema::dropIfExists('orders');
    }
}
