<?php

namespace App\Http\Controllers;

use App\survey;
use App\User;
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

        $surveys = Survey::all();
                   
        return redirect()->route('home')
               ->with('message', 'Thank you for taking this Survey '. $id .'');
               
    }

    public function showall($id)
    {
        
        $user_id = auth::id();

        $users = User::all();
        // dd($users);
       
        // dd($id);
    
        $surveys = Survey::where([

                   ['id', '=', $id],

            ])->with('question','answers')->get();
        
        return view('admin.answer.showall', compact('surveys'));
                           
    }
}
