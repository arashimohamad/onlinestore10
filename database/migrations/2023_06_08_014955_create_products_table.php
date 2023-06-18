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
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->decimal('price')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();              //current_timestamp() 
            $table->timestamp('updated_at')->nullable()->useCurrent();              //current_timestamp()
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
