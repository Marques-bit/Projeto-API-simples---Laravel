<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'explorer_id1' => 'required|integer',
            'item1' => 'required|integer',
            'explorer_id2' => 'required|integer',
            'item2' => 'required|integer',
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
