<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedoresRequest;
use App\Models\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function store(FornecedoresRequest $request){
        $fornecedores = Fornecedores::create([
            'Nome' => $request->Nome,
            'Contato' => $request->Contato,
            'CPF' => $request->CPF,
            'Email' => $request->Email,
            'InscriçãoMunicipal' => $request->InscriçãoMunicipal,
            'País' => $request->País,
            'CNPJ' => $request->CNPJ,
            'Bairro' => $request->Bairro,
            'Código' => $request->Código,
            'Cidade' => $request->Cidade,
            'WebSite' => $request->WebSite,
        ]);
        return response()->json([
            "sucess" => true,
            "message" => "Registered User",
            "data"=> $fornecedores
        ], 200);
    }

    public function pesquisarPorId($id){

    
    return Fornecedores::find($id);
}
}
