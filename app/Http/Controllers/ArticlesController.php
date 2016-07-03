<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
	public function __construct()
	{
//		$this->middleware('auth');
//		$this->middleware('auth', ['only' => 'create']);
		$this->middleware('auth', ['except' => 'index']);
	}

	public function index()
	{
//		return auth::user()->name;
		$articles = Article::latest('published_at')->published()->get();
		return view ('articles.index', compact('articles'));
	}

//	after change routeserviceprovider
//	public function show($id)
	public function show(Article $article)
	{
//		dd($id);
//		$article = Article::findOrFail($id);
		return view('articles.show', compact('article'));
	}

	public function create()
	{
//		if (Auth::guest())
//		{
//			return redirect('articles');
//		}

		return view('articles.create');
	}

	public function store(ArticleRequest $request)
	{
//		Auth::user()->article()->save(new Article($request->all()));
//		Article::create($request->all());
//		return redirect('articles');

		$article = new Article($request->all());
		Auth::user()->articles()->save($article);
		return redirect('articles');
	}

	public function edit(Article $article)
	{
//		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	public function update(Article $article, ArticleRequest $request)
	{
//		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('articles');
	}

}
