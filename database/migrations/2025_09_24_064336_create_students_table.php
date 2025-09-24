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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            # add student name and address columns
            $table->string('name');
            $table->string('address');

            # add foreign keys referencing majors and faculties
            $table->foreignId('major_id')->constrained('majors');
            $table->foreignId('faculty_id')->constrained('faculties');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
