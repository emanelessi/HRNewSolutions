<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class employeesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'photo'=>$this->photo,
            'email'=>$this->email,
            'hire_date'=>$this->hire_date,
            'salary'=>$this->salary,
            'job'=>new jobResource($this->job),
            'department'=>new departmentResource($this->department),
        ];
    }
}
