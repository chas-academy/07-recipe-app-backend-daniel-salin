<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeList extends Model
{

    protected $casts = [
        'title' => 'string',
         'recipes' => 'object',
         'user_id' => 'integer'
    ];
    protected $fillable = [
        'title',
         'recipes',
         'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
