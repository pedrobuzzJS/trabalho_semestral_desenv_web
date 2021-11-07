<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Dotenv\Repository\RepositoryInterface;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pais $pais)
    {
        $pais = Pais::findOrFail( $request->id );
        $pais->sigla = $request->sigla;
        $pais->nome = $request->nome;

        if( $pais->update() ){
            return response()->json([
                "message" => "registro alterado comm sucesso"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::findOrFail( $id );
        if( $pais->delete() ){
            return response()->json([
                "message" => "registro deletedo com sucesso"
            ]);
        }
    }

    public function createPais(Request $request) {

        $pais = new Pais();
        $pais->sigla = $request->sigla;
        $pais->nome = $request->nome;

        if ($pais->save()) {
            return response()->json([
                "message" => "pais criado com sucessoss"
            ], 201);

        } else {
            return response()->json([
                "message" => "erros ao inserir"
            ]);
        }

    }

    public function getAllPais() {
        $pais = Pais::get()->toJson(JSON_PRETTY_PRINT);
        return response($pais, 200);
    }

    public function getPaisById($id) {
        $pais = Pais::findOrFail($id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($pais, 200);
    }
}
