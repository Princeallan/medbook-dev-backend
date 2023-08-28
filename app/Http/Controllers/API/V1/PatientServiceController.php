<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientServiceResource;
use App\Models\PatientService;
use Illuminate\Http\Request;

class PatientServiceController extends Controller
{
    public function __invoke(Request $request)
    {
        $patientservices = PatientService::with(['service', 'patient'])
            ->get();

        return (PatientServiceResource::collection($patientservices));
    }
}
