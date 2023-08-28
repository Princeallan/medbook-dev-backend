<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->when($this->gender()->exists(), function () {
                return new GenderResource($this->gender);
            }),
            'user' => $this->when($this->user()->exists(), function () {
                return new UserResource($this->user);
            }),

        ];
    }
}
