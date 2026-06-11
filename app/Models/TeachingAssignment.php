<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachingAssignment extends Model
{
   public function teacher()
   {
      return $this->belongsTo(Teacher::class);
   }

   public function subject()
   {
      return $this->belongsTo(Subject::class);
   }

   public function kelas()
   {
      return $this->belongsTo(Kelas::class);
   }

   public function academicYear()
   {
      return $this->belongsTo(AcademicYear::class);
   }

   public function semester()
   {
      return $this->belongsTo(Semester::class);
   }

   public function evaluations()
   {
      return $this->hasMany(Evaluation::class);
   }
}
