<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advisor;
class AdvisorController extends Controller
{
    public function index()
    {
        $advisors = Advisor::all();
        return response()->json($advisors);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'sex' => 'required|string|max:10',
            'age' => 'required|integer|min:1',
            'phone_number' => 'required|string|max:15',
            'office_location' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $advisor = Advisor::create($request->all());
        return response()->json($advisor, 201);
    }

    public function show(Advisor $advisor)
    {
        return response()->json($advisor);
    }
    public function update(Request $request, Advisor $advisor)
    {
        $request->validate([
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'sex' => 'sometimes|required|string|max:10',
            'age' => 'sometimes|required|integer|min:1',
            'phone_number' => 'sometimes|required|string|max:15',
            'office_location' => 'sometimes|required|string|max:255',
            'user_id' => 'sometimes|required|integer|exists:users,id',
        ]);

        $advisor->update($request->all());
        return response()->json($advisor);
    }


    public function destroy(Advisor $advisor)
    {
        $advisor->delete();
        return response()->json(null, 204);
    }


}
