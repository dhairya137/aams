@extends('Index.dashboard')


@section('content')
<!--Content Starts here-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Student</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Student table</li>
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
                                <strong class="title">Student Table</strong>
                                
                            </div>
                            <div class="card-body">
                                <table id="student_details" class="table table-striped table-bordered">
                                    <thead>
                                        <tr id="first">
                                            <th>Enrollment</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Semester</th>
                                            <th>Division</th>
                                            <th>Batch</th>
                                            <th>E-mail</th>
                                            <th>Profile Image</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                    foreach ($std as $value) {
                                            ?>
                                             <tr>
                                                <td><?php echo $value->enrollment ?> </td>
                                                <td><?php echo $value->std_name ?> </td>
                                                <td><?php echo $value->contact_std ?> </td>
                                                <td><?php echo $value->semester ?> </td>
                                                <td><?php echo $value->div_std ?> </td>
                                                <td><?php echo $value->batch_std ?></td>
                                                <td><?php echo $value->email_std ?> </td>
                                                <td><?php echo $value->std_profile ?> </td>
                                                <td><?php echo $value->std_pwd ?> </td>
                                                <td> 
                                                    <a href="/modify_student/<?php echo $value->enrollment?>">Modify</a>
                                            </tr>

                                        <?php } ?>

                                        </tbody>
                                </table>
                                <center><a href="{{ url('/add_student') }}"><button class="btn">Add Student</button></a><button id="details">Student</button></center>
                                <div id="hello"></div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
<!--Content Ends Here!!-->
@endsection
