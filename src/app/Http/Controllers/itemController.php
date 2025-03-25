<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
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

        $item = Item::create($request->all());

        return response()->json($item);
    }

    public function index()
    {
        $items = Item::all();

        return response()->json($items);
    }

}

