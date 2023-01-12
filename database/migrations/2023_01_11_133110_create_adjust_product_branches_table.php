<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdjustProductBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial',30);

            $table->timestamps();
        });

        Schema::create('product_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('product_id');
            $table->float('price_sell',8,2)->default(0.01);
            $table->integer('min_inventory')->default(1);
            $table->integer('max_inventory')->default(1);
            $table->timestamps();

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['price_sell','min_inventory','max_inventory']);
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
            $table->float('price_sell',8,2)->default(0.01);
            $table->integer('min_inventory')->default(1);
            $table->integer('max_inventory')->default(1);
        });

        Schema::dropIfExists('product_filiais');
        Schema::dropIfExists('filiais');
       
    }
}
