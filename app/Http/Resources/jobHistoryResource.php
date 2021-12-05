<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class jobHistoryResource extends JsonResource
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
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'employee'=>new employeeResource($this->user),
            'job'=>new jobResource($this->user->job),
            'department'=>new departmentResource($this->user->department),
        ];
    }
}
