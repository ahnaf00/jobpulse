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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->cascadeOnUpdate()->restrictOnDelete();

            $table->string('father_name', 30)->nullable();
            $table->string('mother_name', 30)->nullable();
            $table->string('bloodgrp', 10)->nullable();
            $table->string('nid', 20)->nullable();
            $table->string('phn', 11)->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('portfolio_website')->nullable();
            $table->string('education')->nullable();
            $table->string('professional_training')->nullable();
            $table->string('skills')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
