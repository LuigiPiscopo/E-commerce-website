<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('welcome', compact('articles'));
    }


    public function searchArticles(Request $request)
{
    $query = $request->input('query');

    $articles = Article::search($query)
        ->where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->paginate(12);

    return view('article.index', compact('articles', 'query'));
}

    public function setLanguage($lang)
    {
        session()->put('locale',$lang);
        return redirect()->back();
    }

}