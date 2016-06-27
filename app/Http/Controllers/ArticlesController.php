<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
	public function index()
	{
		// return 'get all articles';
		// $articles = \App\Article::all();
		$articles = Article::all();
		return $articles;

		// return view ('articles.index')->with('articles', $articles);
		// return view ('articles.index', compact('articles'));

	}
}
