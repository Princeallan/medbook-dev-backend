<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'service' => $this->when($this->service()->exists(), function () {
                return new ServiceResource($this->service);
            }),
            'patient' => $this->when($this->patient()->exists(), function () {
                return new PatientResource($this->patient);
            }),
            'comment' => $this->comment,
        ];
    }
}
