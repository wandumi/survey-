<?php

namespace App\Http\Controllers;

use App\answer;
use App\question;
use App\survey;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = answer::all();
        $surveys = survey::has('answers')->get();
        
        // dd($surveys);
        
        return view('admin.answer.index', compact('answers','surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($id);

        $user_id = Auth::id();
        
        $survey_id = $request->survey_id;
        // dd($survey_id);

        $question_id = $request->question_id;
        $answer_id = $request->answer;
        
        $answer = answer::where([
            
                    ['user_id', '=', $user_id], 
                    ['survey_id', '=', $survey_id],

                ])->exists();
        
        // dd($answer);

        if($answer){
            
            return redirect()->route('home')
                   ->with('errors', 'Sorry, You have already taken survey number '. $survey_id .' ...');

        } else {
            

            // dd($answer);
            for ($i=0; $i < count($question_id)  ; $i++) { 
                # code...
                // dd( );
                $answer = new answer;
                $answer->user_id = $user_id;
                $answer->survey_id = $survey_id;
                $answer->question_id = $question_id[$i];
                $answer->answers = $answer_id[$i];
                $answer->save();

            }
            

            // foreach($request->input('answer') as $key => $value)
            // {
            //     // dd($value);
            //     $answer = new answer;
            //     $answer->user_id = $user_id;
            //     $answer->question_id = $key;
            //     $answer->answers = $value;
            //     $answer->save();

            //     // $answer->survey()->sync($request->survey);

            // }

            return redirect()->action('ResultController@show', [$survey_id] )
                            ->with('message','Thank You, Your answers have been saved,');
            
        }
    
        
    }


    /**
     * Display the specified resource.
     *
     * @param   int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        

        return view('admin.answer.showall', compact('answers'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
