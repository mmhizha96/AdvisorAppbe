<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SessionNote;
class SessionNoteController extends Controller
{
    public function index()
    {
        $sessionNotes = SessionNote::all();
        return response()->json($sessionNotes);
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
            'student_id' => 'required|integer',
            'note' => 'required|string',
            'date_created' => 'required|date',
        ]);

        $sessionNote = SessionNote::create($request->all());
        return response()->json($sessionNote, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SessionNote  $sessionNote
     * @return \Illuminate\Http\Response
     */
    public function show(SessionNote $sessionNote)
    {
        return response()->json($sessionNote);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SessionNote  $sessionNote
     * @return \Illuminate\Http\Response
     */
    public function edit(SessionNote $sessionNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SessionNote  $sessionNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SessionNote $sessionNote)
    {
        $request->validate([
            'advisor_id' => 'sometimes|required|integer',
            'student_id' => 'sometimes|required|integer',
            'note' => 'sometimes|required|string',
            'date_created' => 'sometimes|required|date',
        ]);

        $sessionNote->update($request->all());
        return response()->json($sessionNote);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SessionNote  $sessionNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(SessionNote $sessionNote)
    {
        $sessionNote->delete();
        return response()->json(null, 204);
    }
}
