<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::with(['user', 'gender'])
            ->get();

        return (PatientResource::collection($patients));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
    {
        $validData = $request->validated();

        $patient = Patient::create($validData);

        return new PatientResource($patient);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return new PatientResource($patient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
