<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\survey;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $surveys = Survey::get();
        $surveys = Survey::has('question')->get();
        return view('admin.dashboard', compact('surveys') );
    }

    public function results(survey $survey)
    {
        $survey->load('user.questions.answers');
        
        return view('admin.results.show', compact('survey') );
    }
}
