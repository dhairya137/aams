<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class logController extends Controller
{
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
       //$this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

public function temp(Request $r){

			

			/*$eno=$_GET['email'];
			$pass=$_GET['password'];
*/
		
			$eno=$r->email;
			$pass=$r->password;
			$q="SELECT * FROM  admin where email_admin like '$eno' AND admin_pwd like '$pass'";
			$sql=DB::select($q);
			//$sql=DB::table('admin')->where('email_admin',$eno and 'admin_pwd',$pass)->select();
			//$row=mysqli_num_rows($result);
			if(isset($sql [0]->admin_id)){
			    //print_r($sql [0]->admin_id);
			    session_start();

			    $_SESSION['id'] =$sql [0]->admin_id; 
				return redirect("/index");
				
			}
			else
			{
				return redirect("/login");
			}
		}
	}
?>

