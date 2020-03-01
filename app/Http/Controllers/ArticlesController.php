<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleFormRequest;

class ArticlesController extends Controller
{
    //
    public function index() {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article);
    }

    public function create()
    {
        # code...
        return view('articles.create');
    }

    public function store(ArticleFormRequest $request)
    {
        # code...
        $title = $request->input('title');
        $content = $request->input('content');

        Article::create([
            'title'     =>  $title,
            'content'   =>  $content
        ]);

        return redirect()->route('article.index');
    }

    public function edit($id)
    {
        # code...
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    
    public function update($id, ArticleFormRequest $request)
    {
        # code...
        // $article = Article::find($id);
        //Method 1:
        // Article::whereId($id)->update([
        //     'title'     => $request->input('title'),
        //     'content'   => $request->input('content')
        // ]);
        //Method 2:
        $article = Article::find($id);
        $article->update([
            'title'     => $request->input('title'),
            'content'   => $request->input('content')
        ]);
        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        # code...
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('article.index');
    }
}
