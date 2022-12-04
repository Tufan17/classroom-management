<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams=Exam::all();

        return view('exam.exam',compact("exams"));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('exam.exam-add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Exam::create([
            "name"=>$request->name,
            "status"=>"loading",
            ]);
        return redirect()->route("exam");
    }

    public function deleteexam($id){
        Exam::find($id)->delete();
        return redirect()->route("exam");
        
    }

    public function addquestion($id){
        $exam=Exam::where("id",$id)->first();
        // return $exam;
        $questions=Question::all();
        return view("exam.question-add",compact("exam","questions"));
        
    }

    public function published($id){
        // return $id;
        Exam::find($id)->update(["status"=>"published"]);
        return redirect()->route("exam");
    }
    public function finished($id){
        // return $id;
        Exam::find($id)->update(["status"=>"finished"]);
        return redirect()->route("exam");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
