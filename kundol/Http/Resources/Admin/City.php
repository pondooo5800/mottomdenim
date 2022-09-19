<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\Admin\State as StateResource;
use Illuminate\Http\Resources\Json\JsonResource;

class City extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'states_id' => $this->states_id,
            'state' => new StateResource($this->whenLoaded('state')),
        ];
    }
}