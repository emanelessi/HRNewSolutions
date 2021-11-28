<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class rewardResource extends JsonResource
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
            'cost'=>$this->cost,
            'note'=>$this->note,
            'employee'=>new employeeResource($this->user),
            'project'=>new projectResource($this->project),
        ];
    }
}
