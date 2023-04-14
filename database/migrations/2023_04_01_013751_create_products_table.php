<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //  name, description, price, discount, yearof, millage, transmission, color, oil, condition

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            // $table->foreignId('brands_id')->constrained()->nullable();
            $table->id();
             $table->string('name');
             $table->text('description');
             $table->decimal('price', 10, 2);
             $table->boolean('discount')->default('false');
             $table->string('model')->nullable();
             $table->string('body_type');
             $table->date('date_of_year');
             $table->float('millage');
             $table->string('transmission');
             $table->string('color');
             $table->string('oil_type');
             $table->string('condition');
             $table->string('address');
             $table->string('user_name');
             $table->string('user_number');
             $table->string('image')->nullable();
             $table->string('images')->nullable();
             $table->integer('quantity')->default(1);
             $table->integer('stock')->unsigned()->default(0); 
             $table->unsignedBigInteger('brands_id')->nullable();
             $table->foreign('brands_id')->references('id')->on('brands');
             $table->unsignedBigInteger('categories_id');
             $table->foreign('categories_id')->references('id')->on('categories');

             $table->timestamps();
        }); 
    }  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
