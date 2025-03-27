<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->bigInteger('category_id')->unsigned()->nullable(false);
            $table->double('price')->nullable(false);
            $table->text('description')->nullable(false);
            $table->text('images')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');

            // Create a non-null 'category_id' column, link it to 'id' in 'categories', enforcing a foreign key constraint.
            //$table->foreignId('category_id')->constrained('categories')->nullable(false);
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
