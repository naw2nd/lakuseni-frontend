<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name', 100);
            $table->timestamp('join_date')->useCurrent();
            $table->string('biodata')->nullable()->default('Deskripsi masih kosong');
            $table->string('profile_picture_url')->nullable();
            $table->timestamps();

            $table->foreignId('seller_type_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
