<?php

namespace App\Http\Controllers\v1;

use App\Pet;
use App\Atendimento;
use App\Http\Resources\v1\AtendimentoResource;
use App\Http\Resources\v1\AtendimentoResourceCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{

    /**
     * @return AtendimentoResourceCollection
     */
    public function index(): AtendimentoResourceCollection
    {
        return new AtendimentoResourceCollection(Atendimento::paginate());
    }

    /**
     * @param Atendimento $atendimento
     * @return AtendimentoResource
     */
    public function show(Atendimento $atendimento): AtendimentoResource
    {
        return new AtendimentoResource($atendimento);
    }

    /**
     * @param Request $request
     * @return AtendimentoResource
     */
    public function store(Request $request): AtendimentoResource
    {
        $request->validate([
            'data' => 'required|date|size:10',
            'descricao' => 'nullable|string',
            'pet_id' => 'required|numeric',
        ]);
        $atendimento = Atendimento::create($request->all());
        return new AtendimentoResource($atendimento);
    }

    /**
     * @param Request $request
     * @return AtendimentoResource
     */
    public function update(Atendimento $atendimento, Request $request): AtendimentoResource
    {
        $request->validate([
            'data' => 'nullable|date|size:10',
            'descricao' => 'nullable|string',
            'pet_id' => 'nullable|numeric',
        ]);
        $atendimento->update($request->all());
        return new AtendimentoResource($atendimento);
    }

    /**
     * @param Atendimento $atendimento
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Atendimento $atendimento)
    {
        $atendimento->delete();
        return response()->json();
    }

    /**
     * @param Pet $pet
     * @return AtendimentoResourceCollection
     */
    public function queryByPetId(Pet $pet): AtendimentoResourceCollection
    {
        $atendimentos = Atendimento::where('pet_id',$pet->id)->paginate();
        return new AtendimentoResourceCollection($atendimentos);
    }
}
