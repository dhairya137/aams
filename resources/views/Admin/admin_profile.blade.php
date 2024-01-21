@extends('Index.dashboard')


@section('content')
<!--Content Starts here-->



        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin profile</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Admin profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                

                                
        <section class="card">
            <div class="twt-feed blue-bg">
                <div class="corner-ribon black-ribon">
                    
                </div>
               

                <div class="media">
                 <div class="media-body">
                    <a href="/modify_admin/<?php echo $sql [0]->admin_id?>">
                        <h2 class="text-white display-6">Name: {{$sql[0]->admin_name}}</h2>
                        <p class="text-light">ID: {{$sql[0]->admin_id}}</p>
                        <p class="text-light">Email: {{$sql[0]->email_admin}}</p>

<?php
            $folder='practice';
              if(is_dir($folder))
              {
                if($open =opendir($folder))
                {
                  while(($file=readdir($open)) != false)
                  {
                    if($file == $sql[0]->admin_profile)
                    {
                        
                        $img = (string)$sql[0]->admin_profile;
                        ?>
                        <img src="{{url('practice/'.$img)}}" height="150px" width="150px" style="border-radius: 50%;">
                        <?php
                    }
                  }
                }
              }

            ?>
                    </a>
                    </div>
                </div>
            </div>
        </section>

<center><h2>Other admin</h2></center>
               <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="title">Admin Table</strong>
                                
                            </div>
                            <div class="card-body">
                                <table id="admin_details_table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Admin_id</th>
                                            <th>Admin_name</th>
                                            <th>Profile Image</th>
                                            <th>Admin_pwd</th>
                                            <th>Contact_admin</th>
                                            <th>Email_admin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                                foreach ($sql1 as $value) {
                                        ?>
                                         <tr>
                                            <td><?php echo $value->admin_id ?> </td>
                                            <td><?php echo $value->admin_name ?> </td>
                                            <td><?php echo $value->admin_profile ?> </td>
                                            <td><?php echo $value->admin_pwd ?> </td>
                                            <td><?php echo $value->contact_admin ?> </td>
                                            <td><?php echo $value->email_admin ?> </td>
                                            <td>
                                            <a onclick="return confirm('Are you sure you want to delete this Admin?');" href="/remove_admin/<?php echo $value->admin_id?>">Remove</a>
                                            </td>
                                        </tr>





                                    <?php } ?>
                                        
                                    </tbody>
                                </table>
                                <center><a href="{{ url('/add_admin') }}"><button class="btn">Add Admin</button></a></center>    
                            </div>
                        </div>
                    </div>





                                
                           </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection