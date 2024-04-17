<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LibraryPatronResource extends JsonResource
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
            'firstName' => $this->firstname,
            'lastName' => $this->lastname,
            'email' => $this->email,
            'contact' => $this->contact,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'location' => $this->location,
            'identityCard' => $this->identity_card,
            'identityNumber' => $this->identity_no,
        ];
    }
}
