<?php

namespace App\Http\Controllers;

use App\RecipeList;
use App\Http\Resources\RecipeListResource;
use App\Http\Resources\RecipeListsResource;
use Illuminate\Http\Request;

class RecipeListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipeLists = RecipeList::paginate(5);
        return RecipeListResource::collection($recipeLists);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $recipeList = RecipeList::create($request->all());
        return new RecipeListResource($recipeList);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipeList = RecipeList::findOrFail($id);
        return new RecipeListResource($recipeList);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecipeList  $recipeList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecipeList $recipeList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecipeList  $recipeList
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeList $recipeList)
    {
        //
    }
}
