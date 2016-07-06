<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests\ArticleRequest;

use App\Tag;
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

//		$tags = \App\Tag::all();
//		$tags = \App\Tag::lists('name');

		$tags = Tag::lists('name', 'id');
		return view('articles.create', compact('tags'));
	}

	public function store(ArticleRequest $request)
	{
//		Auth::user()->article()->save(new Article($request->all()));
//		Article::create($request->all());
//		return redirect('articles');

//		$article = new Article($request->all());
//		Auth::user()->articles()->save($article);
//		return redirect('articles');

//		Auth::user()->articles()->create($request->all());
//		\Session::flash('flash_message', 'Your article has been created!');

//		Auth::user()->articles()->create($request->all());
//		Session()->flash('flash_message', 'Your article has been created!');
//		Session()->flash('flash_message_important', true);
//		return redirect('articles');

//		Auth::user()->articles()->create($request->all());
//		return redirect('articles')->with([
//			'flash_message'=>'Your article has been created!',
//			'flash_message_important'=>true]);

//		Auth::user()->articles()->create($request->all());
////		flash('Your article has been created!')->important();
////		flash('Your article has been created!');
////		flash()->success('Your article has been created!');
//		flash()->overlay('Your article has been successfully created!', 'Good Job');
//		return redirect('articles');

//		dd($request->input('tags'));
//
//		Auth::user()->articles()->create($request->all());
//		$tags = $request->input('tags');
////		$articles->tags()->attach([1,2,3,4]);
//		flash()->overlay('Your article has been successfully created!', 'Good Job');
//		return redirect('articles');

		$article = Auth::user()->articles()->create($request->all());

//		$tagIds = $request->input('tags');
//		$article->tags()->attach($tagIds);

		$article->tags()->attach($request->input('tag_list'));

		flash()->overlay('Your article has been successfully created!', 'Good Job');
		return redirect('articles');

//		flash('You are now logged in');
//		return redirect('articles')->('flash_message');

	}

	public function edit(Article $article)
	{
//		$article = Article::findOrFail($id);

		$tags = Tag::lists('name', 'id');
		return view('articles.edit', compact('article', 'tags'));
	}

	public function update(ArticleRequest $request, Article $article)
	{
//		$article = Article::findOrFail($id);

//		$article->tags()->attach($request->input('tag_list'));
//		$article->tags()->detach($request->input('tag_list'));
		$article->tags()->sync($request->input('tag_list'));
		$article->update($request->all());
		return redirect('articles');
	}

}
