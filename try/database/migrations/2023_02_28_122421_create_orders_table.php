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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigIntiger('salon_id');
            $table->foreign('salon_id')->references('id')->on('salons');
            $table->unsignedBigIntiger('master_id');
            $table->foreign('master_id')->references('id')->on('masters');
            $table->unsignedBigIntiger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedBigIntiger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};