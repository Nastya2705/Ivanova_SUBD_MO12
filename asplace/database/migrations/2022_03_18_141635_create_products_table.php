<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->integer('id')->autoIncrement();
            $table->timestamps();
            $table->string('name');
            $table->integer('category_id');
            $table->integer('supplier_id');
            $table->string('product_number')->unique();
            $table->string('color');
            $table->date('date_release');
            $table->integer('warranty_period_months')->default(2);
            $table->decimal('price', 20, 2);
            $table->integer('in_stock');
            $table->longText('description');
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
