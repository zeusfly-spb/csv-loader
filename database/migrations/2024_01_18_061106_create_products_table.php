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
            $table->string('code', 8);
            $table->string('name');
            $table->string('level1')->default('');
            $table->string('level2')->default('');
            $table->string('level3')->default('');
            $table->integer('price')->nullable()->default(null);
            $table->integer('price_sp')->nullable()->default(null);
            $table->integer('quantity')->nullable()->default(null);
            $table->string('property_fields')->default('');
            $table->string('joint_purchases')->default('');
            $table->string('unit')->default('');
            $table->string('picture')->default('');
            $table->string('show_on_main')->default('');
            $table->string('description')->default('');
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
