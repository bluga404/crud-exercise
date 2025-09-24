<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Major;
use App\Models\Faculty;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with(['major', 'faculty'])->latest()->paginate(5);
        return view('students.index', compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::all();
        $faculties = Faculty::all();
        return view('students.create', compact('majors', 'faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'major_id'   => 'required|string|max:255',
            'faculty_id' => 'required|string|max:255',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $majors = Major::all();
        $faculties = Faculty::all();
        return view('students.edit', compact('student', 'majors', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'address'    => 'required|string',
            'major_id'   => 'required|exists:majors,id',
            'faculty_id' => 'required|exists:faculties,id', 
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
