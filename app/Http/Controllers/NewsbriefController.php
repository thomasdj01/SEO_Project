<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class NewsbriefController extends Controller
{
    public function index(Request $request)
    {
        return view("Rollercoaster.newsbrief");
    }
    public function show(Article $Article)
    {
        return view('Articles.Article1',compact('Article'));
    }
    public function show2(Article $Article)
    {
        return view('Articles.Article0',compact('Article'));
    }
}
