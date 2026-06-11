<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
   public function student()
   {
      return $this->belongsTo(Student::class);
   }

   public function teachingAssignment()
   {
      return $this->belongsTo(TeachingAssignment::class);
   }

   public function period()
   {
      return $this->belongsTo(
         EvaluationPeriod::class,
         'evaluation_period_id'
      );
   }

   public function answers()
   {
      return $this->hasMany(EvaluationAnswer::class);
   }
}
