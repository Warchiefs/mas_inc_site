<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Article;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$posts = BlogPost::all();
	    $articles = Article::all();
	    $users = User::all();

        return view('index', compact(['posts', 'articles', 'users']));
    }

	/**
	 * Запись в блоге
	 *
	 * @param $post_id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function post($post_slug)
    {
    	$post = BlogPost::where('slug', $post_slug)->first();

    	return view('blog_single', compact(['post']));
    }
}
