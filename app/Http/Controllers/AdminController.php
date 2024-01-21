<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

session_start();

class AdminController extends Controller
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
	public function admin_data()
	{
		if($_SESSION['id'] != NULL)
		{
			$id= $_SESSION['id'];
			$q="SELECT * FROM  admin where admin_id like '$id'";
			$sql=DB::select($q);
			$q1="SELECT * from admin where admin_id != '$id'";
			$sql1=DB::select($q1);
			return view("Admin.admin_profile",compact('sql'),compact('sql1'));
			

		}
		else
		{
			return view('Index.login');
		}
	}

	public function add_adminaction(Request $req)
	{
		$id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $pwd = $req->password;
        $file = $req->file('profile_admin');
       

        $filename = $req->profile;
        $imagename =time().".". $file->getClientOriginalExtension();
        $file->move(public_path('practice'),$imagename);

       

        $values = array(
        				'admin_id' => $id,
                        'admin_name' => $name,
                        'admin_profile' => $imagename, 
                        'admin_pwd' => $pwd,                      
                        'contact_admin' => $phn,
                        'email_admin' => $emailid
                        );

        $ch = DB::table('admin')->insert($values);
        if($ch) 
          return redirect("/Admin_profile");
        else
           echo "Went Wronng";
	}

    public function modify_admin($id){

        $data = DB::table('Admin')->where('admin_id',$id)->first();

        return view("Admin.modify_admin",compact('data'));
    }

    public function modifyadminaction(Request $req){
        
		$id = $req->id;
        $name = $req->name;
        $emailid = $req->email;
        $phn = $req->phone;
        $pwd = $req->password;
        $file = $req->file('profile');
       
        if(isset($file))
        {

            $filename = $req->profile;
            $imagename =time().".". $file->getClientOriginalExtension();
            $file->move(public_path('practice'),$imagename);
            
           $values = array(
                            'admin_id' => $id,
                            'admin_name' => $name,
                            'admin_profile' => $imagename, 
                            'admin_pwd' => $pwd,                      
                            'contact_admin' => $phn,
                            'email_admin' => $emailid
                            );
           
        }
        else
        {
            $values = array(
            				'admin_name' => $name, 
                            'admin_pwd' => $pwd,                      
                            'contact_admin' => $phn,
                            'email_admin' => $emailid
                            );

        }

        $ch = DB::table('admin')->where('admin_id',$id)->update($values);
        if($ch) 
          return redirect("/Admin_profile");
        else
           echo "Went Wronng";

    }



	public function remove_admin($id)
	{
		 $ch = DB::table('admin')->where('admin_id',$id)->delete();
        if($ch) 
            return redirect("/Admin_profile");
	}



	public function logout()
	{
		session_destroy();
		return redirect("/login");
	}
}
?>