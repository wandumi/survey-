<?php

namespace App\Http\Controllers;

use App\survey;
use App\answer;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SurveyController extends Controller
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
    public function index(Survey $survey)
    {
        
        $surveys = Survey::with('question')->get();
        // dd($surveys);
        return view('admin.dashboard', compact('surveys') );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.survey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $this->validate($request, [
            'title' => 'required|min:10|unique:surveys,title',
            'description' => 'required|min:10',
        ]);
 
        // survey::create($request->all($survey));
        $survey = new survey();
        $survey->user_id = auth::user()->id;
        $survey->title = request('title');
        $survey->description = request('description');
        $survey->save();

        return redirect()->route('survey.index')
               ->with('message','A new Survey  '.ucwords($survey->title).'  has been Added...');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(survey $survey)
    {
        
        $survey->load('question','user');
      
        return view('admin.survey.show', compact('survey'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(survey $survey)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, survey $survey)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(survey $survey)
    {
        $survey->delete();
        return redirect()->route('survey.index');
    }
}
