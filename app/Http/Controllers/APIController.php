<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Receita;
use App\User;

use Response;

class APIController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function list_recipes(Request $request) {
        $receitas = Receita::orderBy('created_at', 'asc')->get();

        $responseJson = ['recipes' => $receitas];
        return Response::json($responseJson, 200);
    }

    public function get_recipe(Request $request, $id) {
        $receita = Receita::findOrFail($id);
        $etapas = $receita->etapas()->get();

        $responseJson = [
            "stages" => [],
        ];

        foreach($etapas as $i => $etapa)
        {
            $responseJson{"stages"}[$i]{"name"} = $etapa->nome;
            $responseJson{"stages"}[$i]{"ingredients"} = [];
            $responseJson{"stages"}[$i]{"prepare"} = [];

            $ingredientes = $etapa->ingredientes()->get();
            foreach($ingredientes as $j => $ingrediente)
            {
                $responseJson{"stages"}[$i]{"ingredients"}[] = $ingrediente->descricao;
            }

            $passos = $etapa->passos()->get();
            foreach($passos as $j => $passo)
            {
                $responseJson{"stages"}[$i]{"prepare"}[] = $passo->instrucao;
            }
        }

        return Response::json($responseJson, 200);
    }

    public function include_ingredient(Request $request) {
        $usuario = $request->user();

        switch(Input::get('ingredient_name'))
        {
            case 'carne':
                $usuario->aceita_carne = true;
                break;
            case 'carne':
                $usuario->aceita_carne = true;
                break;
            case 'carne':
                $usuario->aceita_carne = true;
                break;
            case 'carne':
                $usuario->aceita_carne = true;
                break;
            default:
                return Response::json('Ingrediente inválido', 400);
        }

        $usuario->save();
        return Response::json('OK', 200);
    }

    public function exclude_ingredient(Request $request) {
        $usuario = $request->user();

        switch(Input::get('ingredient_name'))
        {
            case 'carne':
                $usuario->aceita_carne = false;
                break;
            case 'gluten':
                $usuario->aceita_gluten = false;
                break;
            case 'leite':
                $usuario->aceita_leite = false;
                break;
            case 'ovo':
                $usuario->aceita_ovo = false;
                break;
            default:
                return Response::json('Ingrediente inválido', 400);
        }

        $usuario->save();
        return Response::json('OK', 200);
    }

    public function ingredient_options(Request $request) {
        $usuario = $request->user();

        $responseJson = [
            'carne' => $usuario->aceita_carne,
            'gluten' => $usuario->aceita_gluten,
            'leite' => $usuario->aceita_leite,
            'ovo' => $usuario->aceita_ovo,
        ] ;

        return Response::json($responseJson, 200);
    }
}
