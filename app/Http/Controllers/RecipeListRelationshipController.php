<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class RecipeListRelationshipController extends Controller
{
    public function user($id)
    {
        $list = User::findOrFail($id);
        return new UserResource($list);
    }
}
