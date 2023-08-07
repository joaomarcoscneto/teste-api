<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DoctorPatientRequest;
use App\Models\Doctor;
use App\Models\Patient;

class DoctorPatientController extends Controller
{
    public function index($id)
    {
        return response()->json(Doctor::findOrFail($id)->patients);
    }

    public function store(DoctorPatientRequest $request)
    {
        $data = $request->validated();

        $doctor = Doctor::findOrFail($data['doctor_id']);
        $patient = Patient::findOrFail($data['patient_id']);

        $doctor->patients()->attach($patient);

        return response()->json(['doctor' => $doctor, 'patient' => $patient], 201);
    }
}
