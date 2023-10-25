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
        Schema::create('registers', function (Blueprint $table) {
            $table->uuid()->primary();

            $table->double('lat', 10, 6);
            $table->double('long', 10, 6);
            
            $table->text('description');
            
            $table->boolean('in_group')->default(false);

            $table->foreignUuid('plant_uuid')->constrained()->cascadeOnDelete();
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->index(['created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
