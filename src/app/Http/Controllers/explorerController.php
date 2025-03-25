<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class explorerController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required' | string,
            'idade' => 'required' | integer,
            'latitude' => 'required' | string,
            'longitude' => 'required' | string,
        ]);

        $explorer = Explorer::create($request->all());

        return response()->json($explorer);
    }

    public function updateLocation(Request $request, Explorer $explorer)
    {
        $request->validate([
            'latitude' => 'required' | string,
            'longitude' => 'required' | string,
        ]);

        $explorer->update([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return response()->json($explorer);
    }

}
