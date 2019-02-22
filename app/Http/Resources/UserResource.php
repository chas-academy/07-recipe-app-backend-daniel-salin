<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\RecipeList;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $lists = RecipeList::where('user_id', $this->id)->get()
        ->map(function ($list) {
            return [
                'id' => $list->id,
                'title' => $list->title,
                'recipes' => unserialize($list->recipes)];
        });        


        
      
        return [
            'type' => 'users',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
                'lists' => $lists
            ],
            'links' => [
                'self' => route('lists.user', ['list' => $this->id, 'user' => $this->user])
            ]
        ];
    }
}
