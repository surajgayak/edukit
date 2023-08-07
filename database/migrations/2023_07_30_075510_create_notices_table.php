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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->longtext('highlights')->nullable();
            $table->longtext('description');
            $table->enum('status', [1, 0])->default(1);
            $table->string('image')->nullable();
            $table->string('tag')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->unsignedInteger('priority')->default(0);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
