<?php

namespace App\Http\Controllers;

use App\survey;
use App\answer;
use App\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index()
    {
        $surveys = survey::all();//hello 
        // dd($answer);
        return view('admin.results.index', compact('surveys'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function results(question $question, $id)
    {
        dd($id);
    }

    public function show($id)
    {
        
        $user_id = auth::id();
       
    
        $surveys = Survey::where([

                   ['id', '=', $user_id],
                   

            ])->with('question','answers')->get();

      
        return view('admin.answer.show', compact('surveys', 'answers'))
                   ->with('message', 'Thank you for time, Here are your answers');
    }

    public function showall($id)
    {
        
        $user_id = auth::id();
       
    
        $surveys = Survey::where([

                   ['id', '=', $id],

            ])->with('question','answers')->get();

        // $surveys = survey::where('id', $id)->with('answers')->count();

        // dd($surveys);
        // dd($surveys);
        // if($surveys->answers->contains('answers'))
      
        return view('admin.answer.showall', compact('surveys', 'answers'))
                   ->with('message', 'Thank you for time, Here are your answers');
    }

}
