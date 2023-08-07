<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PatientUpdateRequest;
use App\Http\Requests\PatientStoreRequest;
use App\Models\Patient;

class PatientController extends Controller
{
    public function store(PatientStoreRequest $request)
    {
        return response()->json(Patient::create($request->validated()), 201);
    }

    public function update($patient_id, PatientUpdateRequest $request)
    {
        $patient = Patient::findOrFail($patient_id);
        $patient->update($request->validated());

        return response()->json($patient);
    }
}
