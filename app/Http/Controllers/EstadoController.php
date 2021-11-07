<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        $estado = Estado::findOrFail( $request->id );
        $estado->pais_id = $request->pais_id;
        $estado->sigla = $request->sigla;
        $estado->nome = $request->nome;

        if( $estado->update() ){
            return response()->json([
                "message" => "registro alterado comm sucesso"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado = Estado::findOrFail( $id );
        if( $estado->delete() ){
            return response()->json([
                "message" => "registro deletedo com sucesso"
            ]);
        }
    }

    public function createEstado(Request $request)
    {
        $estado = new Estado();
        $estado->pais_id = $request->pais_id;
        $estado->sigla = $request->sigla;
        $estado->nome = $request->nome;

        if ($estado->save()) {
            return response()->json([
                "message" => "estado criado com sucessoss"
            ], 201);

        } else {
            return response()->json([
                "message" => "erros ao inserir"
            ]);
        }
    }

    public function getAllEstado() {
        $estado = Estado::get()->toJson(JSON_PRETTY_PRINT);
        return response($estado, 200);
    }
}
