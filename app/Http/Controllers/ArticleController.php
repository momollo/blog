<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'body' => 'required',
        ]);
        Article::create($request->only(['title', 'body']));
        return redirect()->route('articles.index') ->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    // On récupère l'article correspondant à l'ID
    $article = Article::findOrFail($id);

    // On envoie la variable $article à la vue
    return view('articles.show', compact('article'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
    return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    // ✅ On récupère l'article à mettre à jour
    $article = Article::findOrFail($id);

    // ✅ On valide les champs
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
    ]);

    // ✅ On met à jour l'article
    $article->update($validated);

    // ✅ On redirige vers la page show de cet article
    return redirect()->route('articles.show', $article->id)
                     ->with('success', 'Article mis à jour avec succès !');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    // ✅ On récupère l'article
    $article = Article::findOrFail($id);

    // ✅ On le supprime
    $article->delete();

    // ✅ On redirige vers la liste des articles avec un message de succès
    return redirect()->route('articles.index')
                     ->with('success', 'Article supprimé avec succès !');
}
}
