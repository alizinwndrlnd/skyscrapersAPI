<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //$created = new Carbon ($this->created_at);
     

        
        return [
            'id'=>$this->id,
            'country_code'=>$this->country_code,
            'name'=>$this->name,
            'skyscrapers' => SkyscraperResource::collection($this->whenLoaded('skyscrapers'))
        ];
    }
}
