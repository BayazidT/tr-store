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
        Schema::create('portfolio.education_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profile_id');
            $table->string('degree_title');
            $table->string('institute_name')->nullable();
            $table->integer('institute_type')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('department')->nullable();
            $table->integer('result_type')->nullable();
            $table->decimal('result')->nullable();
            $table->text('skills')->nullable();
            $table->string('speciality')->nullable();
            $table->date('starting_date')->nullable();
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
        Schema::dropIfExists('portfolio.education_info');
    }
};
