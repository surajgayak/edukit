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
        Schema::create('getadmissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->string('academic_level')->nullable();
            $table->string('college')->nullable();
            $table->string('payment_image')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('upcommingclasses_id');
            $table->foreign('upcommingclasses_id')->references('id')->on('upcommingclasses')->onDelete('cascade');
            $table->unsignedBigInteger('paymentmethod_id')->nullable();
            $table->foreign('paymentmethod_id')->references('id')->on('paymentmethods')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('getadmissions');
    }
};
