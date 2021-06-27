<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'title'=>$this->faker->name,
            'description'=>$this->faker->name,
            'content'=>$this->faker->name,
            'thumbnail'=>$this->faker->imageUrl(),
            'kindofnews_id'=>id,
            
        ];
    }
}
