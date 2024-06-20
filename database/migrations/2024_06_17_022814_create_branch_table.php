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
        Schema::create('branch', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('detail');
            $table->text('address');
            $table->text('tel');
            $table->text('social');
            $table->integer('reserve_day');
            $table->integer('cancel_day');
            $table->integer('org_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch');
    }
};
