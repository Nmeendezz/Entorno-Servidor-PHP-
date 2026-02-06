<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Log;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $a = new Article($request->all());
        Log::channel('stderr')->debug("Variable request: ", [$a->title]);

        //Antes de guardar en la BD: validaciones
        $request->validate([
            "title" => "min:4|required",
            "content" => "min:4|required",
            "readers" => "required"
        ]);

        //Con la siguiente orden se guarda en la BD:
        $a->save();
        //Para crear el index, tengo que buscar todos los periodistas en la BD
        $articles = Article::all();
        //return view('journalist.index', compact("journalists"));
        return redirect()->route("article");
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
