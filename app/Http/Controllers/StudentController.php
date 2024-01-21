<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class StudentController extends Controller
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


    //Add Students

    public function addStudent(Request $req){

        $enrollment = $req->Enrollment;
        $name = $req->std_name;
        $emailid = $req->e_mail;
        $phn = $req->phone;
        $sem = $req->semester;
        $div = $req->division;
        $batch = $req->batch;
        $pwd = $req->password;
        $file = $req->file('profile');
       

        $filename = $req->profile;
        $imagename =time().".". $file->getClientOriginalExtension();
        $file->move(public_path('practice'),$imagename);

        $values = array('enrollment' => $enrollment,
                        'std_name' => $name, 
                        'std_pwd' => $pwd,
                        'contact_std' => $phn,
                        'semester' => $sem,
                        'div_std' => $div,
                        'batch_std' => $batch,
                        'std_profile' => $imagename,
                        'email_std' => $emailid
                        );

        $ch = DB::table('student')->insert($values);
        if($ch) 
            return redirect("/student");
        else
            return redirect("/add_student");


    }

    //List of Students

    public function liststudent()
    {
        $sql = "SELECT * FROM student order by enrollment";
        $std = DB::select($sql);
        $data='';
        
       
        // foreach ($std as $value) {
        //     $data .= '<tr>
        //                                     <td>'. $value->enrollment.' </td>
        //                                     <td>'.$value->std_name .' </td>
        //                                     <td>'.$value->contact_std.' </td>
        //                                     <td>'.$value->semester.'</td>
        //                                     <td>'.$value->div_std.' </td>
        //                                     <td>'.$value->batch_std.' </td>
        //                                     <td>'.$value->email_std.' </td>
        //                                     <td>'.$value->std_profile.'</td>
        //                                     <td>'.$value->std_pwd.'</td>
        //                                     <td>
        //                                       <a href="/modify_student/'.$value->enrollment.'">Modify</a>/<a onclick="return confirm(/"Are you sure you want to delete this student?/");/" href="/remove_student/'.$value->enrollment.'">Remove</a>
        //                                     </td>
        //                                 </tr>';
        // }
       /* $data= '<table>
            <tr>
                <th>ID</th>
                <th>name</th>
            </tr>
            <tr>
                <td>1</td>
                <td>sahil</td>
            </tr>
        </table>';*/
        // echo json_encode($data);
        /*echo "$data";
        exit;*/
        return view("Student.student",compact('std'));
    }

    //Remove Student

    public function removeStudent($enroll)
    {
        
        $ch = DB::table('student')->where('enrollment',$enroll)->delete();
        if($ch) 
            return redirect("/student");
        else
            echo "error";
    }

    //Fetch detail of Student for Modify them

    public function modifyStudent($enroll){

        $data = DB::table('student')->where('enrollment',$enroll)->first();

        return view("Student.modify_student",compact('data'));
    }
    
    // Using get Method
    
    /*public function modifyStudent(Request $req){

        $enroll = $req->modify;

        //echo $enroll;
        $data = DB::table('student')->where('enrollment',$enroll)->first();

        return view("Student.modify_student",compact('data'));
    }*/

    //Modify operation

    public function modifyStudentaction(Request $req){

        $enrollment = $req->Enrollment;
        $name = $req->std_name;
        $emailid = $req->e_mail;
        $phn = $req->phone;
        $sem = $req->semester;
        $div = $req->division;
        $batch = $req->batch;
        $pwd = $req->password;
        $file = $req->file('profile');
       
        if(isset($file))
        {
            $file = $req->file('profile');
            $filename = $req->profile;
            $imagename =time().".". $file->getClientOriginalExtension();
            $file->move(public_path('practice'),$imagename);

            $values = array('enrollment' => $enrollment,
                        'std_name' => $name, 
                        'std_pwd' => $pwd,
                        'contact_std' => $phn,
                        'semester' => $sem,
                        'div_std' => $div,
                        'batch_std' => $batch,
                        'std_profile' => $imagename,
                        'email_std' => $emailid
                        );
        }
        else{
        $values = array(
                        'std_name' => $name, 
                        'std_pwd' => $pwd,
                        'contact_std' => $phn,
                        'semester' => $sem,
                        'div_std' => $div,
                        'batch_std' => $batch,
                        'email_std' => $emailid
                        );
        }
        $ch = DB::table('student')->where('enrollment',$enrollment)->update($values);
        if($ch) 
          echo "Modified";
        else
           echo "Went Wronng";
       
        return redirect("/student");
    } 




}
