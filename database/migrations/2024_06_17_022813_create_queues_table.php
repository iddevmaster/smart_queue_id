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
        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('service_id');
            $table->integer('queue_number');
            $table->dateTime('queue_date')->nullable();
            $table->string('time_range');
            $table->dateTime('queue_at')->nullable();
            $table->string('queue_brn');
            $table->string('auto_shift');
            $table->dateTime('finish_at')->nullable();
            $table->string('finish_brn');
            $table->integer('channel');
            $table->enum('paid', ['unpaid', 'paid'])->default('paid');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queues');
    }
};
