<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   public function category()
   {
      return $this->belongsTo(SubjectCategory::class, 'subject_category_id');
   }

   public function levels()
   {
      return $this->hasMany(SubjectLevel::class);
   }

   public function teachingAssignments()
   {
      return $this->hasMany(TeachingAssignment::class);
   }
}
