<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class projectResource extends JsonResource
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
            'name'=>$this->name,
            'salary'=>$this->salary,
            'description'=>$this->description,
//            'manager_id'=>$this->manager_id,
            'members'=>$this->members,
        ];
    }
}
