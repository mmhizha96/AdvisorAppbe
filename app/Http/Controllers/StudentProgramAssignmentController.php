<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentProgramAssignmentController extends Controller
{
    public function index()
    {
        $assignments = StudentProgramAssignment::all();
        return response()->json($assignments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|integer',
            'program_id' => 'required|integer',
        ]);

        $assignment = StudentProgramAssignment::create($request->all());
        return response()->json($assignment, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentProgramAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(StudentProgramAssignment $assignment)
    {
        return response()->json($assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentProgramAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentProgramAssignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentProgramAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentProgramAssignment $assignment)
    {
        $request->validate([
            'student_id' => 'sometimes|required|integer',
            'program_id' => 'sometimes|required|integer',
        ]);

        $assignment->update($request->all());
        return response()->json($assignment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentProgramAssignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentProgramAssignment $assignment)
    {
        $assignment->delete();
        return response()->json(null, 204);
    }

}
