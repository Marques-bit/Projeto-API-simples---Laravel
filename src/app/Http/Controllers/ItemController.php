<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function item(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'price' => 'required|decimal:2',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'explorer_id' => 'required|integer',
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

