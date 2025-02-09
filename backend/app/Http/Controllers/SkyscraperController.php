<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkyscraperRequest;
use App\Http\Requests\UpdateSkyscraperRequest;
use App\Http\Resources\SkyscraperResource;
use App\Models\Skyscraper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;


class SkyscraperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
        $skyscrapers = Skyscraper::with("city")->get();
        return SkyscraperResource::collection($skyscrapers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkyscraperRequest $request)
    {
        $data = $request->validated();
        $skyscraper = Skyscraper::create($data);
        return new SkyscraperResource($skyscraper);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id):JsonResource
    {
        $skyscraper = Skyscraper::findOrFail($id);
        return new SkyscraperResource($skyscraper->load("city"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkyscraperRequest $request, Skyscraper $skyscraper)
    {
        $data = $request->validated();
        $skyscraper -> update($data);
        return new SkyscraperResource($skyscraper -> load("city"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id):Response
    {
        $skyscraper = Skyscraper::findOrFail($id);
        if($skyscraper ->delete())
        {
            return response()->noContent();
        }
        else {
            abort(500);
        }

        
    }
}
