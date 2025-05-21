<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return[
            'id' => $this->childID,
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'dateOfBirth' => $this->dateOfBirth,
            'weight' => $this->weight,
            'height' => $this->height,
            'medicalHistory' => $this->medicalHistory,
            'allergy' => $this->allergy,
        ];
    }
}
