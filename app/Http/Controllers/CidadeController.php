<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cidade.index');
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
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        $cidade = Cidade::findOrFail( $request->id );
        $cidade->estado_id = $request->estado_id;
        $cidade->sigla = $request->sigla;
        $cidade->nome = $request->nome;

        if( $cidade->update() ){
            return response()->json([
                "message" => "registro alterado comm sucesso"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cidade = Cidade::findOrFail( $id );
        if( $cidade->delete() ){
            return response()->json([
                "message" => "registro deletedo com sucesso"
            ]);
        }
    }

    public function createCidade(Request $request) {

        $cidade = new Cidade();
        $cidade->estado_id = $request->estado_id;
        $cidade->sigla = $request->sigla;
        $cidade->nome = $request->nome;

        if ($cidade->save()) {
            return response()->json([
                "message" => "cidade criado com sucessoss"
            ], 201);

        } else {
            return response()->json([
                "message" => "erros ao inserir"
            ]);
        }

    }

    public function getAllCidade() {
        $cidade = Cidade::get()->toJson(JSON_PRETTY_PRINT);
        return response($cidade, 200);
    }
}
