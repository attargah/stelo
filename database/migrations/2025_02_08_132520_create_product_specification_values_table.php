<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {

    public function up(): void
    {
        Schema::create('product_specification_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specification_id')->constrained('product_specifications')->cascadeOnDelete();
            $table->json('value');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_specification_values');
    }
};
