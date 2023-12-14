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
        return view('Rollercoaster.news',compact('Article'));
    }

}
