<?php

namespace App\Http\Controllers;

use App\question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\survey;
use App\answer;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = question::paginate(5);
        
        // dd($questions);
       
        return view('admin.question.index', compact('questions') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = question::get();
        $surveys = survey::get();
        // dd($surveys);
        return view('admin.question.create', compact('questions', 'surveys') );
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Survey $survey)
    {
        // return $request->all();

        $this->validate($request, [
            'survey'         => 'required',
            'question'	     => 'required|unique:questions,question',
            'answer_one'	 => 'required',
            'answer_two'	 => 'required',
            'answer_three'   => 'required',
            'answer_four'	 => 'required',
            
        ]);

        $questions = new question;
        $questions->user_id = auth::user()->id;
        $questions->question = $request->question;
        $questions->answer_one = $request->answer_one;
        $questions->answer_two = $request->answer_two;
        $questions->answer_three = $request->answer_three;
        $questions->answer_four = $request->answer_four;
        
        $questions->save();

        $questions->survey()->sync($request->survey);

        
        return redirect()->route('questions.index')
               ->with('message','A new Question has been Added...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = answer::where('user_id', $id)->with('question')->get();
        
        return view('admin.answer.show', compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        $surveys = Survey::all();
        return view('admin.question.edit', compact('surveys','question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        
        $this->validate($request, [
            'survey'         => 'required',
            'question'	     => 'required|unique:questions,question',
            'answer_one'	 => 'required',
            'answer_two'	 => 'required',
            'answer_three'   => 'required',
            'answer_four'	 => 'required',
        ]);

        $questions = question::findOrFail($question);
        $questions->user_id = auth::user()->id;
        $questions->question = $request->question;
        $questions->answer_one = $request->answer_one;
        $questions->answer_two = $request->answer_two;
        $questions->answer_three = $request->answer_three;
        $questions->answer_four = $request->answer_four;
        
        $questions->save();

        $questions->survey()->sync($request->survey);

        
        return redirect()->route('questions.index')
               ->with('message','The Question been updated successfully...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        //
    }
}
