<?php namespace App\Http\Composers;


use App\Article;
use Illuminate\Contracts\View\View;

/**
 * Created by PhpStorm.
 * User: AGUS
 * Date: 7/6/2016
 * Time: 7:01 PM
 */
class NavigationComposer
{
//    public function __construct(ArticlesRepository $articles)
//    {
//
//    }

    public function compose(View $view)
    {
        $view->with('latest', Article::latest()->first());
//
//        $view->with('latest', Article::with()->join()->where()->first());

//        $view->with('latest', $this->articles->ofSomeType());
    }

}