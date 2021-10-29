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
            $table->string('name', 100);
            $table->string('descripiton')->nullable()->default("Deskripsi belum tersedia");
            $table->bigInteger('price');
            $table->integer('transaction_done')->unsigned()->nullable()->default(0);
            $table->timestamp('date_added')->useCurrent();
            $table->decimal('rating', 1, 1)->nullable();
            $table->integer('total_review')->unsigned()->nullable()->default(0);
            $table->timestamps();

            $table->foreignId('seller_id')->constrained();
            $table->foreignId('product_type_id')->constrained();
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
