<?php

namespace App\Http\Controllers;
use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return response()->json($appointments);
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
            'date' => 'required|date',
            'status' => 'required|string|max:255',
            'purpose' => 'required|string',
        ]);

        $appointment = Appointment::create($request->all());
        return response()->json($appointment, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return response()->json($appointment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'assignment_id' => 'sometimes|required|integer',
            'student_id' => 'sometimes|required|integer',
            'advisor_id' => 'sometimes|required|integer',
            'date' => 'sometimes|required|date',
            'status' => 'sometimes|required|string|max:255',
            'purpose' => 'sometimes|required|string',
        ]);

        $appointment->update($request->all());
        return response()->json($appointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return response()->json(null, 204);
    }
}
