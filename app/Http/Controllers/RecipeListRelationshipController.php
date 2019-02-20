<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

// use App\Http\Resources\UserResourceIdentifier;

class RecipeListRelationshipController extends Controller
{
    public function user($id)
    {
        $list = User::findOrFail($id);
        return new UserResource($list);
    }
}
