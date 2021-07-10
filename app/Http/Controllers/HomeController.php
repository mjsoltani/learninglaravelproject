<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Mail\TestMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $articles = Article::orderBy('id' , 'desc')->get();
        return view('index', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
