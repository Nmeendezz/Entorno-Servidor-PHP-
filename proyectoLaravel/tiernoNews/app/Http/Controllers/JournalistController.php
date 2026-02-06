<?php

namespace App\Http\Controllers;

use App\Models\Journalist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JournalistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $journalists = Journalist::all();
        $saludo = "sete";

        return view('journalist.index', compact("journalists"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('journalist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Log::channel('stderr')->debug("Variable request: ", [$request->name, $request->password]);
        $j = new Journalist($request->all());
        Log::channel('stderr')->debug("Variable request: ", [$j->email]);

        //Antes de guardar en la BD: validaciones
        $request->validate([
            "name" => "min:4|required",
            "password" => "min:4|confirmed|required",
            "email" => "unique:journalists,email|required"
        ]);

        //Con la siguiente orden se guarda en la BD:
        $j->save();
        //Para crear el index, tengo que buscar todos los periodistas en la BD
        $journalists = Journalist::all();
        //return view('journalist.index', compact("journalists"));
        return redirect()->route("journalist");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // 1. busco en la bd a ese periodista 
        $journalist = Journalist::find($id);

        //2. devuelvo una vista con la información del periodista
        //todo comprobación errores si no existe el journalist
        return view('journalist.show', compact("journalist"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //1. busco el periodista en la bd:
        $journalist = Journalist::find($id);
        //todo comprobación errores si no existe

        //2. devuelvo la vista con el formulario de edición
        return view('journalist.edit', compact("journalist"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //Voy a actualizar todo menos la contraseña
        // 1. busco en la bd el journalist con ese id
        $journalist = Journalist::find($id);

        //2. actualizo los campos correspondientes
        $journalist->name = $request->name; //$request->name aquí está lo rellenado en el input name
        $journalist->surname = $request->surname;
        $journalist->email = $request->email;

        Log::channel('stderr')->info("A ver los datos que me llegan del request:");
        Log::channel('stderr')->info($request->email);
        Log::channel('stderr')->info($request->surname);
        Log::channel('stderr')->info($request->name);

        //3. hago el update
        $journalist->update();

        //4. devuelvo al show
        //Lo voy a buscar PERO SOLO PARA COMPROBAR que se ha actualizado
        //$journalist = Journalist::find($id);
        return view('journalist.show', compact("journalist"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //1. busco el journalist que voy a eliminar
        $j = Journalist::find($id);
        if (!$j) {
            $message = "El periodista no existe";
        } else {
            //2. eliminamos
            Journalist::destroy($id);
            $message = "Periodista " . $j->name . " eliminado";
        }
        //3. devolvemos al index con un mensaje
        //$journalists = Journalist::all();
        //return view('journalist.index', compact('journalists'))->with('deleted', $message);
        return redirect()->route('journalist')->with('deleted', $message);
    }
    public function sayName($name)
    {
        //return "soy $name, vengo de JournalistController";
        //1. Buscar todos los journalists de la BBDD
        $journalists = Journalist::all();
        return $journalists;


        //2. devolver la vista que los contenga
    }
}
