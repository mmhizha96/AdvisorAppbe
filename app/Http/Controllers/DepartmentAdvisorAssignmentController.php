<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentAdvisorAssignmentController extends Controller
{
    public function index()
    {
        $assignments = DepartmentAdvisorAssignment::all();
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
            'advisor_id' => 'required|integer',
            'department_id' => 'required|integer',
        ]);

        $assignment = DepartmentAdvisorAssignment::create($request->all());
        return response()->json($assignment, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DepartmentAdvisorAssignment  $departmentAdvisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function show(DepartmentAdvisorAssignment $departmentAdvisorAssignment)
    {
        return response()->json($departmentAdvisorAssignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepartmentAdvisorAssignment  $departmentAdvisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function edit(DepartmentAdvisorAssignment $departmentAdvisorAssignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DepartmentAdvisorAssignment  $departmentAdvisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepartmentAdvisorAssignment $departmentAdvisorAssignment)
    {
        $request->validate([
            'advisor_id' => 'sometimes|required|integer',
            'department_id' => 'sometimes|required|integer',
        ]);

        $departmentAdvisorAssignment->update($request->all());
        return response()->json($departmentAdvisorAssignment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepartmentAdvisorAssignment  $departmentAdvisorAssignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepartmentAdvisorAssignment $departmentAdvisorAssignment)
    {
        $departmentAdvisorAssignment->delete();
        return response()->json(null, 204);
    }
}
