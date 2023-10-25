<?php

// use App\Models\Register;
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
        Schema::create('register_observations', function (Blueprint $table) {
            $table->id();
            
            $table->string('image_path');

            $table->text('description')->nullable();
            
            $table->foreignUuid('register_uuid')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_observations');
    }
};
