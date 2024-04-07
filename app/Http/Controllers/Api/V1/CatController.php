<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreCatRequest;
use App\Http\Requests\UpdateCatRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\CatResource;
use App\Models\Cat;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CatResource::collection(Cat::all());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCatRequest $request)
    {
        $cat = Cat::create($request->validated());

        return CatResource::make($cat);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        return CatResource::make($cat);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatRequest $request, Cat $cat)
    {
        $cat->update($request->validated());

        return CatResource::make($cat);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        $cat->delete();

        return response()->noContent();
    }
}
