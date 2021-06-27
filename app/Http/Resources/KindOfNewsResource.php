<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KindOfNewsResource extends JsonResource
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
            'name'=>$this ->name,
            'category_id' =>$this ->id,
        ];
    }
}
