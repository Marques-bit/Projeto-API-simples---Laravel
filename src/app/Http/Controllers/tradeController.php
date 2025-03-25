<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tradeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required' | string,
            'valor' => 'required' | float,
            'latitude' => 'required' | string,
            'longitude' => 'required' | string,
            'explorer_id' => 'required' | integer,
        ]);


        $item1 = Item::find($request->item1);
        $item2 = Item::find($request->item2);

        if ($item1->valor != $item2->valor ){
            return response()->json(["error" => "A troca nao pode ser realizada, pois os itens tem valores diferentes!"], 400);
        }

        $donoAntigo = $item1->explorer_id;
        $item1->explorer_id = $item2->explorer_id;
        $item2->explorer_id = $donoAntigo;

        $item1->save();
        $item2->save();

        return response()->json("Troca realizada com sucesso!");
    }
}
