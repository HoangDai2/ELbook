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
            $table->string('product_code')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('author')->nullable(); // tac gia
            $table->string('publisher')->nullable(); // nha xuat ban
            $table->string('specified_age')->nullable(); // tuoi
            $table->string('language')->nullable();
            $table->integer('year_of_publication')->nullable(); // nam xuat ban
            $table->integer('page_number')->nullable(); // so trang
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
