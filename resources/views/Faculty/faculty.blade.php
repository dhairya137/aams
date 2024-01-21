@extends('Index.dashboard')


@section('content')
<!-- Content Starts Here-->
    <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Faculty</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Faculty table</li>
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
                                    <strong class="title">Faculty Table</strong>
                                    
                                </div>
                                <div class="card-body">
                                    <table id="faculty_details_table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Faculty ID</th>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Phone No.</th>
                                                <th>Subject Name</th>
                                                <th>Profile Image</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    foreach ($fac as $value) {
                                            ?>
                                             <tr>
                                                <td><?php echo $value->faculty_id ?> </td>
                                                <td><?php echo $value->faculty_name ?> </td>
                                                <td><?php echo $value->email_faculty ?> </td>
                                                <td><?php echo $value->contact_faculty ?> </td>
                                                <td><?php echo $value->subject_name ?> </td>
                                                <td><?php echo $value->faculty_profile ?></td>
                                                <td><?php echo $value->faculty_pwd ?> </td>
                                                <td><?php echo $value->role ?> </td>
                                                <td> 
                                                    <a href="/modify_faculty/<?php echo $value->faculty_id?>">Modify</a>
                                                  <!-- <form method="POST" action="/modify_faculty">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="modify" value="<?php //echo $value->faculty_id?>">
                                                    <button type="submit">Modify</button>
                                                     </form> -->
                                                      / 
                                                      <a  onclick="return confirm('Are you sure you want to delete this Faculty?');" href="/remove_faculty/<?php echo $value->faculty_id?>">Remove</a></td>
                                            </tr>

                                        <?php } ?>

                                        </tbody>
                                    </table>
                                    <center><a href="{{ url('/add_faculty') }}"><button class="btn">Add Faculty</button></a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<!--Content Ends Here-->
@endsection
