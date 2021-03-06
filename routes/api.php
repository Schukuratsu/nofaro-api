<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {

    Route::apiResource('/pet', 'v1\PetController')->only(['show', 'store', 'update', 'destroy']);

    Route::apiResource('/pets', 'v1\PetController')->only('index');

    Route::get('/procurar-por-pet/{partialName}', 'v1\PetController@queryByPartialName');

    Route::apiResource('/atendimento', 'v1\AtendimentoController')->only(['show', 'store', 'update', 'destroy']);

    Route::apiResource('/atendimentos', 'v1\AtendimentoController')->only('index');

    Route::get('/atendimentos-do-pet/{pet}', 'v1\AtendimentoController@queryByPetId');
});
