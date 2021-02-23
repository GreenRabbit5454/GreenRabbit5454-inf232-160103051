<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class MainController extends Controller
{
    public function home()
    {
        return view( 'home');
    }
    public function about(){
        return view( 'about');
    }
    public function article(){
        $article = new Articles();
        return view('article',['article'=> $article->all()]);
    }
    public function articles_check(Request $request){


        $review = new articles();
        $review->email = $request->input('email');
        $review->surname = $request->input('surname');
        $review->name = $request->input('name');
        $review->message = $request->input('message');

       $review->save();

        return redirect()->route('article');
    }
}
