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
      Schema::create('evaluation_periods', function (Blueprint $table) {
         $table->id();

         $table->string('nama');

         $table->foreignId('academic_year_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->foreignId('semester_id')
            ->constrained()
            ->cascadeOnDelete();

         $table->date('mulai');

         $table->date('selesai');

         $table->boolean('is_active')
            ->default(false);

         $table->boolean('is_locked')
            ->default(false);

         $table->boolean('is_anonymous')
            ->default(false);

         $table->timestamps();

         $table->unique([
            'academic_year_id',
            'semester_id'
         ], 'uniq_period');
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('evaluation_periods');
   }
};
