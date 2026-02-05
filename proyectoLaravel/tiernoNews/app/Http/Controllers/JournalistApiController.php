<?php

namespace App\Http\Controllers;

use App\Models\Journalist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JournalistApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $j = new Journalist($request->all());
        $j->save();
        return response()->json($j);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //1. busco el journalist con ese id
        $j = Journalist::find($id);

        if ($j != null) {
            // lo devuelvo en formato json
            return response()->json([
                "message" => "Journalist found",
                "data" => $j
            ]);
        } else {
            return response()->json([
                "message" => "Not found",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 1. busco en la bd el journalist con ese id
        $j = Journalist::find($id);

        //2. actualizo los campos correspondientes
        $j->name = $request->name; //$request->name aquí está lo rellenado en el input name
        $j->surname = $request->surname;
        $j->email = $request->email;
        $j->update();
        return response()->json([
            "message" => "Not found",
            "data" => null
        ], JsonResponse::HTTP_NOT_FOUND);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $j = Journalist::find($id);
        if(!$j){
            $j->delete();
            return response()->json([
                "message" => "Deleted",
                "data" => $j
            ]);
        } else {
            return response()->json([
                "message" => "Not found",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }
}
