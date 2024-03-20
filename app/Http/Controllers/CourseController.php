<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Question;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $active =$request->active ?intval($request->active) : 1;
        $count = Course::count();
        $page = ceil($count / 10);
        $active = $active > $page ? intval($page) : $active;
        $offset = ($active - 1) * 10;
        $courses = Course::skip($offset)->take(10)->get();
        return view('lesson.lesson',compact("courses","page","active"));
    }
    public function add()
    {
        $courses=Course::all();

        return view('lesson.added_lesson',compact("courses"));

    }

    public function addlesson(Request $request){
        $request->validate([
            "course" => "required|max:255"
        ]);
        Course::create([
            "name"=>$request->course,
        ]);
        //compact("");
        return redirect()->route("lesson");

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
    public function lessons(){
        return Course::all();
    }

    public function subjects($id){
        return Subject::where("course_id",$id)->get();
    }
    public function question($id){
        return Question::where("subject_id",$id)->get();
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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $course=Course::where("id", $id)->first();
        $course->delete();
        return redirect()->route("lesson");


    }
}
