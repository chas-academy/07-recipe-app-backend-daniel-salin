<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeList extends Model
{

    protected $fillable = [
        'title', 'recipes', 'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
