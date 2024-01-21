@extends('Index.dashboard')


@section('content')

<!-- Content Starts Here-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">C Division Lab Timetable</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <form action="/timetableaction" method="POST">   
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="content mt-3">
        <label>Day</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="day" id="select" class="form1">
        
            <option value="1">Monday</option>
            <option value="2">Tuesday</option>
            <option value="3">Wednesday</option>
            <option value="4">Thursday</option>
            <option value="5">Friday</option>
        </select>
    
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From Time</label>
        &nbsp;&nbsp;&nbsp;
        <select name="fromtime" id="select" class="form1">

            <option value="08:00 am">08:00 am</option>
            <option value="09:00 am">09:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:30 pm">12:30 pm</option>
            <option value="01:30 pm">01:30 pm</option>
            <option value="02:30 pm">02:30 pm</option>
            <option value="03:30 pm">03:30 pm</option>
        </select>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Time</label>
        &nbsp;
        <select name="totime" id="select" class="form1">
           
            <option value="09:00 am">09:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="01:30 pm">01:30 pm</option>
            <option value="02:30 pm">02:30 pm</option>
            <option value="03:30 pm">03:30 pm</option>
            <option value="03:30 pm">03:30 pm</option>
        </select>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label>Room No</label>&nbsp;&nbsp;&nbsp;&nbsp;
         <select name="roomno" id="select" class="form1">   
                <option value="215">215</option>
                <option value="216">216</option>
                <option value="217">217</option>
                <option value="218">218</option>
                <option value="219">219</option>
                <option value="220">220</option>
                <option value="221">221</option>
                <option value="222">222</option>
        </select>
        <br>
        <label>Subject</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="subject" id="select" class="form1">
            <option value="AJava">AJAVA</option>
            <option value="NMA">NMA</option>
            <option value="MCAD">MCAD</option>
            <option value="PPUD">PPUD</option>
        </select>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divsion</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="division" id="select" class="form1">
            <option value="0">select</option> 
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;Batch</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="batch" id="select" class="form1">
            <option value="0">select</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>

            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="B4">B4</option>

            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="C3">C3</option>
            <option value="C4">C4</option>
        </select>
    
      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty</label>
        &nbsp;&nbsp;
        <select name="faculty" id="select" class="form1">   
            <option value="VNC">VNC</option>
            <option value="PJS">PJS</option>
            <option value="MMC">MMC</option>
            <option value="SBP">SBP</option>
            <option value="KBP">KBP</option>
            <option value="KPP">KPP</option>
            <option value="SGK">SGK</option>
            <option value="MPM">MPM</option>
            <option value="DHW">DHW</option>
            <option value="HSM">HSM</option>
            <option value="MVP">MVP</option>
        </select>          
<div class="card-body">
    <table class="table table-bordered" style="width:100% height:100%">
        <thead>
            <tr>
                <th scope="col">Timings</th>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
                <th scope="col">Friday</th>
            </tr>
            
            
            
        </thead>           
        <tbody>
            
            <tr>
            <?php $starting = 1;
                    $day = 1;
            foreach ($table as $value) {


                if($starting == 1){ 
                        $end=(int)$value->end_time - 1;
                        ?>
                        <th scope="row">{{$value->start_time." to ".$value->end_time}}</th>
                        
                        <?php if($day < $value->day_timetable){
                            for($i=$day; $i<($value->day_timetable-1); $i++) { ?>
                            <td></td>
                        <?php } }
                        $end= (double)$value->end_time;
                        $end= $end - 2;
                        if($value->start_time == $end)
                        {
                            ?>
                            <td rowspan="2">{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")-".$value->batch_table}}<br>
                            <?php 
                        }else{
                            ?>
                            <td rowspan="2">{{ $value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                                    <br>
                        
                    <?php 
                    
                        }
                    

                    $prev = $value->start_time;
                    $day = $value->day_timetable;
                    $starting = 0; 
                    
                }elseif($prev == $value->start_time && $day ==$value->day_timetable ){
                    ?>
                    {{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"."-".$value->batch_table}}
                   <?php

                }else{ 
                    if($prev == $value->start_time){ 
                       if($day < $value->day_timetable){
                            for($i=$day+1; $i<$value->day_timetable; $i++) { ?>
                            <td></td> 
                        <?php } }
                        $end= (double)$value->end_time;
                        $end= $end - 2;
                        if($value->start_time == $end)
                        {
                            ?>
                            <td rowspan="2">{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")-".$value->batch_table}}<br>
                            <?php 
                            }else{
                        ?>
                                <td rowspan="2">{{ $value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                                    <br>
                        
                    <?php 
                    }
                   $prev = $value->start_time;
                        $day = $value->day_timetable;
                        
                    } else { $day = 1; ?>
                        </tr>
                        <tr style="width: 100% height: 100%">
                        </tr>
                            <th scope="row" rowspan="2">{{$value->start_time." to ".$value->end_time}}</th>
                        <?php if($day < $value->day_timetable){
                                for($i=$day; $i<$value->day_timetable; $i++) { ?>
                            <td></td>
                        <?php } }$end= (double)$value->end_time;
                        $end= $end - 2;
                        if($value->start_time == $end)
                        {
                            ?>
                            <td rowspan="2">{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")-".$value->batch_table}}<br>
                            <?php 
                        }else{
                        ?>
                                <td rowspan="2">{{ $value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                                    <br>
                        
                    <?php 
                        }       
                            $prev = $value->start_time;
                            $day = $value->day_timetable;

                    } 
                } 
            } ?>
            
       
        </tbody>
    </table>
                                <br><center>
                                <button class="btn">Submit</button></center></form>
                               
                            </div>
            
    </div>
<!--Content Ends Here-->
@endsection




<not to be used>
    <?php $starting = 1;
                    $day = 1;
            foreach ($table as $value) {


                if($starting == 1){ ?>

                        <th scope="row">{{date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->end_time))}}</th>
                        <?php if($day < $value->day_timetable){
                            for($i=$day; $i<$value->day_timetable; $i++) { ?>
                            <td></td>
                        <?php } }
                        $end= (double)$value->end_time;
                        $end= $end - 2;
                        if($value->start_time == $end)
                        {
                            ?>
                            <td rowspan="2">{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")-".$value->batch_table}}<br>
                            <?php 
                        }else{
                            ?>
                            <td>{{ $value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                                    <br>
                        
                    <?php 
                    
                        }
                    

                    $prev = $value->start_time;
                    $day = $value->day_timetable;
                    $starting = 0; 
                    
                }elseif($prev == $value->start_time && $day ==$value->day_timetable ){
                    ?>
                    {{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"."-".$value->batch_table}}
                   <?php

                }else{ 
                    if($prev == $value->start_time){ 
                       if($day < $value->day_timetable){
                            for($i=$day+1; $i<$value->day_timetable; $i++) { ?>
                            <td></td> 
                        <?php } }
                        $end= (double)$value->end_time;
                        $end= $end - 2;
                        if($value->start_time == $end)
                        {
                            ?>
                            <td rowspan="2">{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")-".$value->batch_table}}<br>
                            <?php 
                            }else{
                        ?>
                                <td>{{ $value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                                    <br>
                        
                    <?php 
                    }
                   $prev = $value->start_time;
                        $day = $value->day_timetable;
                        
                    } else { $day = 1; ?>
                        </tr>
                        <tr style="width: 100% height: 100%">
                            <th scope="row">{{date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->end_time))}}</th>
                        <?php if($day < $value->day_timetable){
                                for($i=$day; $i<$value->day_timetable; $i++) { ?>
                            <td></td>
                        <?php } }$end= (double)$value->end_time;
                        $end= $end - 2;
                        if($value->start_time == $end)
                        {
                            ?>
                            <td rowspan="2">{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")-".$value->batch_table}}<br>
                            <?php 
                        }else{
                        ?>
                                <td>{{ $value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                                    <br>
                        
                    <?php 
                        }       
                            $prev = $value->start_time;
                            $day = $value->day_timetable;

                    } 
                } 
            } ?>