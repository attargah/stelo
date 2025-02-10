<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {

    public function up(): void
    {
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specification_group_id')->constrained('product_specification_groups')->cascadeOnDelete();
            $table->json('name');
            $table->enum('type', [
                'text',
                'textarea',
                'select',
                'multiselect',
                'list',
                'table',
                'content',
                'number',
                'boolean'
            ]);
            $table->json('options')->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_specifications');
    }
};
