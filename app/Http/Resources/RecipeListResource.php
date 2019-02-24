<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\RecipeList;

class RecipeListResource extends JsonResource
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
            'type' => 'lists',
            'id' => $this->id,
            'attributes' => [
                'title' => $this->title,
                'recipes' => $this->recipes
            ],
            'relationships' => new RecipeListRelationshipResource($this),
            'links' => [
                'self' => route('lists.show', ['list' => $this->id, 'user' => $this->user])
            ]
        ];
    }
}
