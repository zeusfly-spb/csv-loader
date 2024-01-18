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
            $table->string('level1')->nullable()->default(null);
            $table->string('level2')->nullable()->default(null);
            $table->string('level3')->nullable()->default(null);
            $table->string('price')->nullable()->default(null);
            $table->string('price_sp')->nullable()->default(null);
            $table->string('quantity')->nullable()->default(null);
            $table->string('property_fields')->nullable()->default(null);
            $table->string('joint_purchases')->nullable()->default(null);
            $table->string('unit')->nullable()->default(null);
            $table->string('picture')->nullable()->default(null);
            $table->string('show_on_main')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
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
