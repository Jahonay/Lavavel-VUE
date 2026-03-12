<?php

use App\Models\Submission;

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
        Schema::create('submission_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor('Submission')->constrained()->cascadeOnDelete();
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_images');
    }
};
