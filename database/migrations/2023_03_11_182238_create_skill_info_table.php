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
        Schema::create('portfolio.skill_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profile_id');
            $table->string('skill_title');
            $table->string('background_color')->nullable();
            $table->integer('expertise_level');
            $table->boolean('status')->default(true)->nullable();
            $table->integer('cb')->nullable();
            $table->integer('ub')->nullable();
            $table->dateTime('cd')->nullable();
            $table->dateTime('ud')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio.skill_info');
    }
};
