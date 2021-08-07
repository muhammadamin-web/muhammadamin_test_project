<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FactoriesResource extends JsonResource
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
            'slug' => $this->slug
        ];
    }
    
    public function with($request)
    {
        return [
            'version' => '1.0.2',
            'author' => 'Post'
        ];
    }
}
