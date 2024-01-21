<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FacultyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //Faculty Section Starts


     public function modifyFaculty($id){

        $data = DB::table('faculty')->where('faculty_id',$id)->first();

        return view("Faculty.modify_faculty",compact('data'));
    }
    /*public function modifyFaculty(Request $req){

        $id = $req->modify;

        //echo $enroll;
        $data = DB::table('faculty')->where('faculty_id',$id)->first();

        return view("Faculty.modify_faculty",compact('data'));
    }
*/
    public function modifyFacultyaction(Request $req){
        
        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $sub = $req->sub;
        $pwd = $req->password;
        $rol = $req->role;
        $file = $req->file('profile_faculty');
       
        if(isset($file))
        {
            $filename = $req->profile;
            $imagename =time().".". $file->getClientOriginalExtension();
            $file->move(public_path('practice'),$imagename);


            $values = array('faculty_id' => $id,
                            'faculty_name' => $name, 
                            'faculty_pwd' => $pwd,
                            'subject_name' => $sub,
                            'contact_faculty' => $phn,
                            'faculty_profile' => $imagename,
                            'email_faculty' => $emailid,
                            'role' => $rol
                            );
        }else{

            $values = array(
                            'faculty_name' => $name, 
                            'faculty_pwd' => $pwd,
                            'subject_name' => $sub,
                            'contact_faculty' => $phn,
                            'email_faculty' => $emailid,
                            'role' => $rol
                            );
        }

        $ch = DB::table('faculty')->where('faculty_id',$id)->update($values);
        if($ch) 
          return redirect("/faculty");
        else
           echo "Went Wronng";

    }

    public function listfaculty()
    {
        $sql = "SELECT * FROM faculty order by faculty_id";
        $fac = DB::select($sql);

        return view("Faculty.faculty",compact('fac'));
    }

    public function addfaculty(Request $req){

        $id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $sub = $req->sub;
        $pwd = $req->password;
        $rol = $req->role;
        $file = $req->file('profile_faculty');
       

        $filename = $req->profile;
        $imagename =time().".". $file->getClientOriginalExtension();
        $file->move(public_path('practice'),$imagename);


        $values = array('faculty_id' => $id,
                        'faculty_name' => $name, 
                        'faculty_pwd' => $pwd,
                        'subject_name' => $sub,
                        'contact_faculty' => $phn,
                        'faculty_profile' => $imagename,
                        'email_faculty' => $emailid,
                        'role' => $rol
                        );

        $ch = DB::table('faculty')->insert($values);
        if($ch) 
            return redirect("/faculty");
        else
            return redirect("/add_faculty");
    }

    public function removefaculty($id)
    {

        $ch = DB::table('faculty')->where('faculty_id',$id)->delete();
        if($ch) 
            return redirect("/faculty");
        else
            echo "error";
    }


    




}   