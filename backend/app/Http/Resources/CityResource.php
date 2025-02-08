<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $created = new Carbon ($this->created_at);
        
        return [
            'id'=>$this->id,
            'country_code'=>$this->country_code,
            'name'=>$this->name
        ];
    }
}
