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
        Schema::create('child', function (Blueprint $table) {
            $table->id('childID');
            $table->unsignedBigInteger('parent_id');
            $table->string('name');
            $table->date('dateOfBirth');
            $table->float('weight',5 ,2);
            $table->float('height',5 ,2);
            $table->string('medicalHistory')->nullable();
            $table->string('allergy')->nullable();
            $table->timestamps();

            $table->unique(['parent_id', 'name']);

            $table->foreign('parent_id')->references('id')->on('parent')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child');
    }
};
