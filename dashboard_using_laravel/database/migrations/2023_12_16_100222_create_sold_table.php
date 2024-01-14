<?php

// In the create_sold_table migration file
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoldTable extends Migration {
    public function up(): void {
        Schema::create('sold', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('product_id');
            $table->integer('quantity_sold');
            $table->float('price_sold', 10, 2);
            $table->timestamps();

            // $table->foreign('product_id')->references('id')->on('products');
        });
    }

    public function down(): void {
        Schema::dropIfExists('sold');
    }
}
