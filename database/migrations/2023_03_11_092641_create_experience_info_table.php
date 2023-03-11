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
        Schema::create('portfolio.experience_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profile_id');
            $table->string('job_title');
            $table->string('company_name')->nullable();
            $table->integer('company_type')->nullable();
            $table->text('job_description')->nullable();
            $table->text('skills')->nullable();
            $table->string('speciality')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('ending_date')->nullable();
            $table->date('continued')->nullable();
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
        Schema::dropIfExists('portfolio.experience_info');
    }
};
