<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdvisorAssignment;

class AdvisorAssignmentController extends Controller
{
    public function index()
    {
        $assignments = AdvisorAssignment::all();
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
            'assignment_id' => 'required|integer',
            'student_id' => 'required|integer',
            'advisor_id' => 'required|integer',
            'date_assigned' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        $assignment = AdvisorAssignment::create($request->all());
        return response()->json($assignment, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvisorAssignment  $advisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function show(AdvisorAssignment $advisorAssignment)
    {
        return response()->json($advisorAssignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvisorAssignment  $advisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvisorAssignment $advisorAssignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvisorAssignment  $advisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvisorAssignment $advisorAssignment)
    {
        $request->validate([
            'assignment_id' => 'sometimes|required|integer',
            'student_id' => 'sometimes|required|integer',
            'advisor_id' => 'sometimes|required|integer',
            'date_assigned' => 'sometimes|required|date',
            'status' => 'sometimes|required|string|max:255',
        ]);

        $advisorAssignment->update($request->all());
        return response()->json($advisorAssignment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvisorAssignment  $advisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvisorAssignment $advisorAssignment)
    {
        $advisorAssignment->delete();
        return response()->json(null, 204);
    }
}
