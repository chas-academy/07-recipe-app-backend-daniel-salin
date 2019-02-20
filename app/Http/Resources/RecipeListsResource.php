<?php

namespace App\Http\Resources;

use App\Http\Resources\RecipeListResource;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipeListsResource extends JsonResource
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
            'data' => RecipeListResource::collection($this->collection)
        ];
    }

    public function with($request) 
    {
        return [
            'links' => [
                'self' => route('lists.index')
            ]
            ];
    }
}
