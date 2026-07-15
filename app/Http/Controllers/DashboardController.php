<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\SubscribeTransaction;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        // Dashboard Teacher
        if (Auth::user()->hasRole('teacher')) {

            $teacher = Teacher::where('user_id', Auth::id())->first();

            $student = CourseStudent::distinct('user_id')
                ->count('user_id');

            $course = Course::where('teacher_id', $teacher->id)
                ->count();

            return view('dashboard', compact(
                'student',
                'course'
            ));
        }

        // Dashboard Owner/Admin
        $student = CourseStudent::distinct('user_id')
            ->count('user_id');

        $course = Course::count();

        $category = Category::count();

        $transaction = SubscribeTransaction::count();

        $teacher = Teacher::count();

        return view('dashboard', compact(
            'student',
            'course',
            'category',
            'transaction',
            'teacher'
        ));
    }
}