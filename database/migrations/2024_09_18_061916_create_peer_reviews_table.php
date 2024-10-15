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
        Schema::create('peer_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('title', 20);
            $table->text('instruction');
            $table->integer('num_reviews')->unsigned();
            $table->integer('max_score')->unsigned();
            $table->datetime('due_date');
            $table->enum('type', ['student-select', 'teacher-assign']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peer_reviews');
    }
};
