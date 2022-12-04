<?php

namespace App\Http\Controllers;

use App\Models\ExamResult;
use App\Models\Exam;
use App\Models\User;


use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result($id)
    {
    //      return $id;

        $exam=Exam::find($id)->first();
        $examresults= ExamResult::where("exam_id", $id)->orderBy("success","DESC")->get();
        $results=[];
        $i=0;
        foreach($examresults as $exam){
            $i++;
            $user=User::find($exam->user_id)->first();
            array_push($results,[
                "name"=>$user->name,
                "success"=>$exam->success,
                "sequence"=>$i,
            ]);
        }
        // return $results;
        return view("exam.result", compact("results","exam"));

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
        ExamResult::create([
            "user_id"=>$request->user_id,
            "exam_id"=>$request->exam_id,
            "questions"=>$request->questions,
            "correct"=>$request->correct,
            "wrong"=>$request->wrong,
            "success"=>$request->success
        ]);
        return ExamResult::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function show(ExamResult $examResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamResult $examResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamResult $examResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamResult $examResult)
    {
        //
    }
}
