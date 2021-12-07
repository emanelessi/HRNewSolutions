<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class holidayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'duration' => $this->duration,
            'description' => $this->description,
            'date' => $this->date,
            'type' => $this->type,
            'status' => $this->status,
            'employee' => new employeeResource($this->user),


        ];
    }
}
