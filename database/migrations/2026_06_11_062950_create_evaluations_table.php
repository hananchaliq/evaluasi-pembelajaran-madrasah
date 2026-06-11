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
      Schema::create('evaluations', function (Blueprint $table) {
         $table->id();

         $table->foreignId('student_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->foreignId('teaching_assignment_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->foreignId('evaluation_period_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->decimal('average_score', 5, 2)
            ->nullable();

         $table->enum('status', [
            'draft',
            'submitted'
         ])->default('draft');

         $table->timestamp('submitted_at')
            ->nullable();

         $table->timestamps();

         $table->unique([
            'student_id',
            'teaching_assignment_id',
            'evaluation_period_id'
         ], 'uniq_student_eval');
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('evaluations');
   }
};
