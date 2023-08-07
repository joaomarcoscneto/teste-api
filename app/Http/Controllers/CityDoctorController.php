<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityDoctorController extends Controller
{
    public function index($id, Request $request)
    {
        return response()->json(Doctor::where('city_id', $id)->get());
    }
}
