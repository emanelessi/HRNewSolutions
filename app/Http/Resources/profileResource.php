<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class profileResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'hire_date' => $this->hire_date,
            'salary' => $this->salary,
            'photo' => $this->photo,
            'department' => new departmentResource($this->department),
            'type'=>$this->type,
            'manager' => new profileResource($this->manager),
        ];
    }
}
