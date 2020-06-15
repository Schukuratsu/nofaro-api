<?php

namespace App\Http\Controllers\v1;

use App\Pet;
use App\Http\Resources\v1\PetResource;
use App\Http\Resources\v1\PetResourceCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetController extends Controller
{

    /**
     * @return PetResourceCollection
     */
    public function index(): PetResourceCollection
    {
        return new PetResourceCollection(Pet::paginate());
    }

    /**
     * @param Pet $pet
     * @return PetResource
     */
    public function show(Pet $pet): PetResource
    {
        return new PetResource($pet);
    }

    /**
     * @param Request $request
     * @return PetResource
     */
    public function store(Request $request): PetResource
    {
        $request->validate([
            'nome' => 'required',
            'especie' => 'required',
        ]);
        $pet = Pet::create($request->all());
        return new PetResource($pet);
    }

    /**
     * @param Request $request
     * @return PetResource
     */
    public function update(Pet $pet, Request $request): PetResource
    {
        $pet->update($request->all());

        return new PetResource($pet);
    }

    /**
     * @param Pet $pet
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return response()->json();
    }

    /**
     * @param String $partialName
     * @return PetResourceCollection
     */
    public function queryByPartialName($partialName){
        $pets = Pet::where('nome','like','%' . $partialName . '%')->paginate();
        return new PetResourceCollection($pets);
    }
}
