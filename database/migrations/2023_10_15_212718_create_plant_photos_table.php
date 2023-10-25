<?php

// use App\Models\Plant;
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
        Schema::create('plant_photos', function (Blueprint $table) {
            $table->uuid()->primary();

            $table->string('image_path');
            
            $table->foreignUuid('plant_uuid')->constrained()->cascadeOnDelete();

            $table->timestamps();
            
            $table->index(['created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant_photos');
    }
};
