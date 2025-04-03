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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('reference')->nullable();
            $table->string('type')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('filename')->nullable();
            $table->string('message');
            $table->string('status')->nullable();
            $table->double('final_price')->nullable()->default(0.0);
            $table->datetime('valid_until')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
