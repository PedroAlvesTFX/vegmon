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
        Schema::create('plants', function (Blueprint $table) {
            $table->uuid()->primary();

            $table->string('name_popular');
            $table->string('name_scientific');

            $table->enum('classification', ['tree', 'bush', 'palm', 'seaweed', 'vine']);
            
            $table->boolean('planc')->default(false);            
            $table->boolean('apicola')->default(false);            
            $table->boolean('forrageira')->default(false);            

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
