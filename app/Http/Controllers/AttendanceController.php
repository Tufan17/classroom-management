
<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

use Carbon\Carbon;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons=Course::all();
        
        return view('attendance.home', compact('lessons'));
    }
    public function lesson(Request $request,$id)
    {
        $lesson=Course::where("id",$id)->first();
   
       if(count($request->all())==0){

        $day = 1;
        $months = array(
            'Ocak',
            'Şubat',
            'Mart',
            'Nisan',
            'Mayıs',
            'Haziran',
            'Temmuz',
            'Ağustos',
            'Eylül',
            'Ekim',
            'Kasım',
            'Aralık'
        );
        $year = 2022;
        $all_users= Attendance::where("course_id",$id)->where("day",$day)->get();
        $users=[];
        foreach($all_users as $user){
            $value=User::where("id",$user->user_id)->first();
            array_push($users,$value);
        }

     }else{
        $day = $request->day;
        $months =$months = array(
        $request->month,
            'Ocak',
            'Şubat',
            'Mart',
            'Nisan',
            'Mayıs',
            'Haziran',
            'Temmuz',
            'Ağustos',
            'Eylül',
            'Ekim',
            'Kasım',
            'Aralık'
        ); 
        $year =$request->year;
        $all_users= Attendance::where("course_id",$id)->where("day",$day)->where("month",$request->month)->where("year",$request->year)->get();
        $users=[];
        foreach($all_users as $user){
            $value=User::where("id",$user->user_id)->first();
            array_push($users,$value);
        }
        }

        return view('attendance.lesson', compact('lesson','users','day','months','year'));
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
        try{

            Attendance::create([
                "user_id"=>$request->user_id,
                "course_id"=>$request->course_id,
                "day"=>$request->day,
                "month"=>$request->month,
                "year"=>$request->year,
            ]);
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    public function lessonAttendance(){
        return Course::all();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
