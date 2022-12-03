<?php

namespace App\Http\Controllers;

use App\Models\ExamQuestions;
use App\Models\Exam;
use App\Models\Question;

use Illuminate\Http\Request;

class ExamQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $exam=Exam::find($id)->first();
        $questions_id=ExamQuestions::where("exam_id",$id)->pluck("question_id");
        $questions=[];
        foreach($questions_id as $id){
          $question=Question::find($id)->first();
          array_push($questions,$question);
        }
        //  return $questions;        
        return view("exam.show-questions",compact("questions","exam"));
    }
    public function delete($id){
        $question=ExamQuestions::where("question_id",$id)->first();
        $exam_id=$question->exam_id;
        $question->delete();
        return redirect()->route("showexam",$exam_id);
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
        // return $request;    
        ExamQuestions::create([
            "exam_id" => $request->exam_id,
            "question_id" => $request->question_id,
        ]);
        return redirect()->route("showexam",$request->exam_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamQuestions  $examQuestions
     * @return \Illuminate\Http\Response
     */
    public function show(ExamQuestions $examQuestions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamQuestions  $examQuestions
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamQuestions $examQuestions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamQuestions  $examQuestions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamQuestions $examQuestions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamQuestions  $examQuestions
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamQuestions $examQuestions)
    {
        //
    }
}
