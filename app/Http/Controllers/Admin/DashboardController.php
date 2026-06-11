<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Inertia\Inertia;

class DashboardController extends Controller
{
   public function index()
   {
      return Inertia::render('Admin/Dashboard', [
         'stats' => [
            'teachers' => Teacher::count(),
            'students' => Student::count(),
            'kelas' => Kelas::count(),
            'subjects' => Subject::count(),
            'evaluations' => Evaluation::count(),
         ],
      ]);
   }
}