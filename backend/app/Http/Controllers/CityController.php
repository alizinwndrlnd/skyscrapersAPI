<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $cities = City::all();
        return CityResource::collection($cities);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request)
    {
        $data = $request->validated();
        $city = City::create($data);
        return new CityResource($city);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $city = City::findOrFail($id);
        return new CityResource($city);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        $data = $request->validated();
        $city->update($data);
        return new CityResource($city->load("skyscraper"));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id):Response
    {
        $city=City::findOrFail($id);
        if($city ->delete())
        {
            return response()->noContent();
        }
        else {
            abort(500);
        }
    }
}
