<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeveloperResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'level' => $this->level,
            'total_assign_hour' => $this->total_assign_hour,
            'total_week' => number_format($this->total_assign_hour / config('todos.work_hour'), 2),
            'todos' => TodoResource::collection($this->todos)
        ];
    }
}
