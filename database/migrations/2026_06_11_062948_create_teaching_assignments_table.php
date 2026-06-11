<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   /**
    * Run the migrations.
    */
   public function up(): void
   {
      Schema::create('teaching_assignments', function (Blueprint $table) {
         $table->id();

         $table->foreignId('teacher_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->foreignId('subject_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->foreignId('kelas_id')
            ->constrained('kelas')
            ->cascadeOnDelete();

         $table->foreignId('academic_year_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->foreignId('semester_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->timestamps();

         $table->unique([
            'teacher_id',
            'subject_id',
            'kelas_id',
            'academic_year_id',
            'semester_id'
         ], 'uniq_teaching_assignment');

         $table->index([
            'kelas_id',
            'academic_year_id',
            'semester_id'
         ]);
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('teaching_assignments');
   }
};
