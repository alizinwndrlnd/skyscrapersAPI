<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkyscraperResource extends JsonResource
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
           'name'=>$this->name,  
           'city_id'=>$this->city_id,  
           'height'=>$this->height,  
           'stories'=>$this->stories,  
           'finished'=>$this->finished,  
           'cities'=>CityResource::collection($this->whenLoaded('cities')),  
                   
        ];
        return parent::toArray($request);
    }
}
