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
            $table->string('product_name', 50);
            $table->text('description');
            $table->string('model', 50);
            $table->text('photo_url');
            $table->decimal('cost', 8, 2);
            $table->decimal('price', 8, 2);
            $table->foreignId('brand_id');
            $table->foreignId('product_category_id');
            $table->foreignId('background_id');
            $table->enum('state', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
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
        Schema::dropIfExists('products');
    }
}