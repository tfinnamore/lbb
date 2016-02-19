<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    public function create()
    {
      return view('article.create');
    }
    public function store(Request $request, Article $article)
    {
      $article->title = $request->input('title');
      $article->body = $request->input('body');
      $article->save();
      return "Done";
    }

    public function index(Article $article)
    {
      $articles = $article->all();

      return view('article.index')->with('articles', $articles);
    }

    public function home(Article $article)
    {
      $articles = $article->select('title')->get();
      return view('home')->with('articles', $articles);
    }
}
