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
             $table->date('yearof');
             $table->float('millage');
             $table->string('condition');
             $table->string('color');
             $table->string('oil');
             $table->string('body_type');
             $table->string('transmission');
             $table->string('image')->nullable();
             $table->string('images')->nullable();
             $table->integer('quantity')->default(0);
             $table->integer('stock')->unsigned()->default(0); 
             $table->unsignedBigInteger('brands_id')->nullable();
             $table->foreign('brands_id')->references('id')->on('brands');
             $table->unsignedBigInteger('category_id')->nullable();
             $table->foreign('category_id')->references('id')->on('categories');  
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
