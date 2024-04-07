<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatResource;
use App\Models\Cat;
use Illuminate\Http\Request;

class CompleteCatController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Cat $cat)
    {
        $cat->is_completed = $request->is_completed;
        $cat->save();

        return CatResource::make($cat);
    }
}
