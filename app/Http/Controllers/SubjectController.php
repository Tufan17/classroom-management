<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Course;
use App\Models\Question;


use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $course=Course::where("id",$id)->with('subjects')->first();
        $subjects=$course->subjects;
        $coursesId=$id;
        return view('lesson.subject',compact('subjects','coursesId','course'));
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
        $request->validate([
            "subject"=>"required||max:255",
            "course_id"=>"required",
        ]);

        Subject::create([
            "name"=>$request->subject,
            "course_id"=>$request->course_id,
        ]);
        return redirect()->route("subject",$request->course_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function question($id)
    {
    //  return $id;
    $subject = Subject::where("id",$id)->with("questions")->first();


     return view("lesson.question",compact("subject"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject=Subject::where("id", $id)->first();
        $subject->delete();
        return redirect()->route("subject",$subject->course_id);
    }
}
