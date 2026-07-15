<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('teacher')) {
            // Ambil data teacher yang terhubung dengan user yang sedang login
            $teacher = $user->teacher;

            // Teacher hanya bisa melihat course miliknya sendiri
            $courses = Course::where('teacher_id', $teacher->id)->latest()->get();
        } else {
            // Owner bisa melihat seluruh course dari semua teacher
            $courses = Course::latest()->get();
        }

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'about'        => 'required|string',
            'category_id'  => 'required|exists:categories,id',
            'thumbnail'    => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'path_trailer' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
        ]);

        DB::transaction(function () use ($request, $validated) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

            $trailerPath = null;
            if ($request->hasFile('path_trailer')) {
                $trailerPath = $request->file('path_trailer')->store('trailers', 'public');
            }

            Course::create([
                'name'         => $validated['name'],
                'slug'         => Str::slug($validated['name']),
                'about'        => $validated['about'],
                'category_id'  => $validated['category_id'],
                'thumbnail'    => $thumbnailPath,
                'path_trailer' => $trailerPath,
                'teacher_id'   => auth()->user()->teacher->id, // otomatis dari teacher yang login
            ]);
        });

        return redirect()->route('admin.courses.index')->with('success', 'Course berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $this->authorizeCourseOwner($course);

        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $this->authorizeCourseOwner($course);

        $categories = Category::all();
        return view('admin.courses.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $this->authorizeCourseOwner($course);

        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'about'        => 'required|string',
            'category_id'  => 'required|exists:categories,id',
            'thumbnail'    => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'path_trailer' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
        ]);

        DB::transaction(function () use ($request, $validated, $course) {
            $thumbnailPath = $course->thumbnail;
            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
            }

            $trailerPath = $course->path_trailer;
            if ($request->hasFile('path_trailer')) {
                $trailerPath = $request->file('path_trailer')->store('trailers', 'public');
            }

            $course->update([
                'name'         => $validated['name'],
                'slug'         => Str::slug($validated['name']),
                'about'        => $validated['about'],
                'category_id'  => $validated['category_id'],
                'thumbnail'    => $thumbnailPath,
                'path_trailer' => $trailerPath,
            ]);
        });

        return redirect()->route('admin.courses.index')->with('success', 'Course berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $this->authorizeCourseOwner($course);

        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course berhasil dihapus!');
    }

    /**
     * Helper: pastikan Teacher hanya bisa akses course miliknya sendiri.
     * Owner tetap bisa akses semua course tanpa batasan.
     */
    private function authorizeCourseOwner(Course $course): void
    {
        $user = auth()->user();

        if ($user->hasRole('teacher') && $course->teacher_id !== $user->teacher->id) {
            abort(403, 'Anda tidak memiliki akses ke course ini.');
        }
    }
}