<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\QuestionBank;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $questionBank = QuestionBank::find($id)->first();
        $questions=Question::where("questionbank_id",$id)->get();
        // return $questions;
        return view('questionbank.show-question',compact('questions','questionBank'));
    }
    
    public function storequestion(Request $request)
    {
        //  return $request->correct;
        Question::create([
            "subject_id"=>$request->subject,
            "questionbank_id"=>$request->questionbank_id,
            "title"=>$request->title,
            "correct"=>$request->correct,
            "A"=>$request->A,
            "B"=>$request->B,
            "C"=>$request->C,
            "D"=>$request->D,
        ]);
       
        return redirect()->route("questionbankaddquestion",$id);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
