<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/*
*
* Details the relationships between users and recipe lists in the API response
*
*/ 

class RecipeListRelationshipResource extends JsonResource
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
        'user' => [
            'links' => [
                'self' => route('lists.relationships.user', ['list' => $this->id]),
                'related' => route('lists.user', ['list' => $this->id]),
            ]
            ], 
            'data' => new UserIdentifierResource($this->user)
        ];
    }

    // Specifies that only the url-link to the resource itself will be display in the response

    public function with($request) 
    {
        return [
            'links' => [
                'self' => route('lists.index')
            ]
            ];
    }
}
