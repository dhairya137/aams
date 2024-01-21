<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class TimetableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     /
    /public function __construct()
    {
       //$this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function feedTimetable(Request $req){

            $day = $req->day;
            $fromtime = $req->fromtime;
            $totime = $req->totime;
            $roomno = $req->roomno; 
            $subject = $req->subject;
            $division = $req->division;
            $batch = $req->batch;
            $faculty = $req->faculty;

            $fromtime = strtotime($fromtime);
            $totime = strtotime($totime);

            $fromtime = date('H:i:s',$fromtime);
            $totime = date('H:i:s',$totime);
            
            if($req->batch == '0'){
                $type = 'lect';
            }else{
                $type = 'lab';
            }
            


            $values = array('day_timetable' => $day,
                            'start_time' => $fromtime, 
                            'end_time' => $totime,
                            'type_lect' => $type,
                            'room_lectlab_no' => $roomno,
                            'subject_name' => $subject,
                            'faculty_name' => $faculty, 
                            'div_table' => $division,
                            'batch_table' => $batch
                            );

            $ch = DB::table('timetable')->insert($values);
            if($ch){ 
                if($division == 'A'){
                        return redirect("/A_division");
                }elseif ($division == 'B') {
                        return redirect("/B_division");
                }else{
                        return redirect("/C_division");
                }
            }
            else{
                echo "Something Went Wrong";
            }

    }
        
        //For A division

        public function listTimetable_a()
        {
           
           $sql = "SELECT distinct * from timetable where div_table='A' order by start_time,day_timetable";
           $sql1 = "SELECT subject_name from subject";
           $sql2 = "SELECT faculty_name from faculty";
           $table = DB::select($sql);
           $faculty = DB::select($sql2);
           $subject1 = DB::select($sql1);

        return view("Table.A_timetable",compact('table','subject1','faculty'));
        }
        
        //For B division

        public function listTimetable_b()
        {
           
           $sql = "SELECT distinct * from timetable where div_table='B' order by start_time,day_timetable,type_lect";
           $sql1 = "SELECT subject_name from subject";
           $sql2 = "SELECT faculty_name from faculty";
           $table = DB::select($sql);
           $faculty = DB::select($sql2);
           $subject1 = DB::select($sql1);

        return view("Table.B_timetable",compact('table','subject1','faculty'));
        }
        
        //For C division

        public function listTimetable_c()
        {
           
           $sql = "SELECT distinct * from timetable where div_table='C' order by start_time,day_timetable,type_lect";
           $sql1 = "SELECT subject_name from subject";
           $sql2 = "SELECT faculty_name from faculty";
           $table = DB::select($sql);
           $faculty = DB::select($sql2);
           $subject1 = DB::select($sql1);

        return view("Table.C_timetable",compact('table','subject1','faculty'));
        }

        public function listTimetable_lab_c()
        {
           
           $sql = "SELECT distinct * from timetable where div_table='C' and type_lect = 1  order by start_time,day_timetable";
            $table = DB::select($sql);

            return view("Table.C_lab",compact('table'));
        }
        
 }
?>