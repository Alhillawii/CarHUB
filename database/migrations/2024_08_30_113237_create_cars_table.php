<?php

use App\Models\Brand;
use App\Models\Engine;
use App\Models\Transmission;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Engine::class)->constrained();
            $table->foreignIdFor(Transmission::class)->constrained();
            $table->string('name');
            $table->string('pice');
            $table->string('seat');
            $table->string('color');
            $table->string('year');
            $table->string('status');
            $table->string('type');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
