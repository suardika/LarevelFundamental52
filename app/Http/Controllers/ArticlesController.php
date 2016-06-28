<?php

namespace App\Http\Controllers;

use App\Article;

use Carbon\Carbon;

use Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
	public function index()
	{
		// return 'get all articles';
		// $articles = \App\Article::all();
//		$articles = Article::all();
//		return $articles;

//		$articles = Article::all();
//		// return view ('articles.index')->with('articles', $articles);
//		 return view ('articles.index', compact('articles'));

//		$articles = Article::order_by('published_at', 'desc')->get();
//		$articles = Article::latest('published_at')->get();
//		return view ('articles.index', compact('articles'));

//		$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
		$articles = Article::latest('published_at')->published()->get();
//		$articles = Article::latest('published_at')->unpublished()->get();
		return view ('articles.index', compact('articles'));

	}

	public function show($id)
	{
//		$article = Article::find($id);
//		dd($article);
//		return $article;

//		$article = Article::find($id);
//		if (is_null($article)) {
//			abort(404);
//		}
//		return view('articles.show', compact('article'));
		$article = Article::findOrFail($id);
//		dd($article->published_at);
//		dd($article->created_at);
//		dd($article->created_at->year);
//		dd($article->created_at->month);
//		dd($article->created_at->addDays(8));
//		dd($article->created_at->format('Y-m'));
//		dd($article->created_at->addDays(8)->diffForHumans());
//		dd($article->updated_at->addDays(8)->diffForHumans());
		dd($article->published_at);
		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store()
	{
//		$input = Request::all();
//		$input['published_at'] = Carbon::now();
//		Article::create($input);
//		return redirect('articles');

		Article::create(Request::all());
		return redirect('articles');
	}

}
