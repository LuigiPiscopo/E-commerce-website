<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check = Article::where('is_accepted', null)->first();

        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article){
        $message ="";
        if(app()->getLocale()=='en'){
            $message='Article accepted';
        }elseif(app()->getLocale()=='it'){
            $message ='Articolo accettato';
        }else{
            $message='Has aceptado el artículo';
        }
        $article->setAccepted(true);
        return redirect()
        ->back()
        ->with('message', $message);
    }

    public function reject(Article $article){
        $message ="";
        if(app()->getLocale()=='en'){
            $message='Article rejected';
        }elseif(app()->getLocale()=='it'){
            $message ="Hai rifiutato l'articolo";
        }else{
           $message='Artículo rechazado';
        }
        $article->setAccepted(false);
        return redirect()
        ->back()
        ->with('message', "Hai rifiutato l'articolo $article->title");

    }


    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message','Complimenti! Hai richiesto di diventare revisor');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email'=>$user->email]);
        return redirect()->back();
    }



    public function revisorForm()
{
    if (Auth::user()->is_revisor) {
        return redirect()->back()->with('message', 'Sei già un revisore!');
    }
    return view('revisor.form');
}
}
