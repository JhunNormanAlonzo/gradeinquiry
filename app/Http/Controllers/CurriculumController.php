<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\SchoolYear;
use App\Models\Subject;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curriculums = Curriculum::all();

        $years = Curriculum::distinct('school_year_id')->pluck('school_year_id');

        $sch_year = [];
        foreach ($years as $year) {
            $school_year_name = SchoolYear::where('id', $year)->first()->school_year;
            $subjects = Curriculum::where('school_year_id', $year)->get();
            $sch_year[$school_year_name] = $subjects;
        }

        return view('curriculum.index', compact('curriculums', 'sch_year'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        $schoolYears = SchoolYear::all();

        return view('curriculum.create', compact('subjects', 'schoolYears'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $school_year_id = $request->school_year_id;

        $subject_ids = $request->subject_id;

        for ($x = 0; $x < count($subject_ids); $x++) {
            Curriculum::create([
                'school_year_id' => $school_year_id,
                'curriculum_status' => 1,
                'is_active' => "1",
                'subject_id' => $subject_ids[$x]
            ]);
        }
        return back()->with('success', 'Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curriculum $curriculum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curriculum $curriculum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curriculum $curriculum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curriculum $curriculum)
    {
        //
    }
}
