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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('asset_name');
            $table->string('asset_description');
            $table->string('serial_no');
            $table->string('fa_no');
            $table->foreignId('category_id')->constrained()->onDelete('restrict')->onUpdate('cascade');
            $table->tinyInteger('isActive')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
