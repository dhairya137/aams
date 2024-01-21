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
                    <li class="active">B Division Timetable</li>
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
            <option value="04:30 pm">04:30 pm</option>
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
                <option value="223">223</option>
                <option value="224">224</option>
                <option value="225">225</option>
        </select>
        <br>
        <label>Subject</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="subject" id="select" class="form1">
            <?php foreach ($subject1 as $value) { ?>
                <option value="{{$value->subject_name}}">{{$value->subject_name}}</option>
            <?php  } ?>
            
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
            <?php foreach ($faculty as $value) { ?>
                <option value="{{$value->faculty_name}}">{{$value->faculty_name}}</option>
            <?php  } ?>
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
                if($starting == 1){ ?>

                       <?php if($value->type_lect == 'lab'){ ?>
                                <th scope="row">{{date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->start_time)+60*60)}}
                                    <br>{{date('H:i',strtotime($value->start_time)+60*60)." to ".date('H:i',strtotime($value->end_time))}}</th>
                            <?php }else{ ?>
                                <th scope="row">{{date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->end_time))}}</th>
                            <?php } ?>
                        <?php if($day < $value->day_timetable){
                            for($i=$day; $i<$value->day_timetable; $i++) { ?>
                            <td></td>
                        <?php } }?>
                        <td>{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                            <?php if($value->batch_table != '0'){ echo $value->batch_table;}  ?>
                      
                <?php $prev = $value->start_time;
                      $day = $value->day_timetable;
                    $starting = 0; 
                }elseif($prev == $value->start_time && $day ==$value->day_timetable ){
                    ?><br>
                    {{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"."-".$value->batch_table}}
                   <?php   
                }else{ 
                    if($prev == $value->start_time){ 
                       if($day < $value->day_timetable){
                            for($i=$day+1; $i<$value->day_timetable; $i++) { ?>
                            <td></td> 
                        <?php } }?>
                        <?php if($value->type_lect == 'lab'){ ?>
                            <td scope="row" rowspan="2">{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.") ".$value->batch_table}}
                           
                        <?php }else{ ?>
                            <td>{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}}
                            <?php if($value->batch_table != '0'){ echo $value->batch_table;}  ?>
                        <?php } ?>
                <?php   $prev = $value->start_time;
                        $day = $value->day_timetable;
                        
                    } else { $day = 1; ?>
                        </tr>
                        <tr style="width: 100% height: 100%">
                            <?php if($value->type_lect == 'lab'){ ?>
                                <th scope="row">{{date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->start_time)+60*60)}}
                                    <br>{{date('H:i',strtotime($value->start_time)+60*60)." to ".date('H:i',strtotime($value->end_time))}}</th>
                            <?php }else{ ?>
                                <th scope="row">{{date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->end_time))}}</th>
                            <?php } ?>
                        <?php if($day < $value->day_timetable){
                                for($i=$day; $i<$value->day_timetable; $i++) { ?>
                            <td></td>
                        <?php } }?>
                            <td>{{$value->subject_name."-".$value->faculty_name."(".$value->room_lectlab_no.")"}} 
                            <?php if($value->batch_table != '0'){ echo $value->batch_table;}  ?>
                            <?php $prev = $value->start_time;
                            $day = $value->day_timetable;

                        } 
                } 
            } ?>
            
            
        <!--
            <tr>
                <th scope="row">10:00 to 11:00 am</th>
                <td>MCAD-MMC</td>
                <td>AJAVA-VNC</td>
                <td rowspan="2"> AJAVA-A1-VNC <br> AJAVA-A2-KAM <br> NAM-A3-KBP <br> MCAD-A4-MMC </td>
                <td rowspan="2"> NMA-A1-DHW <br> MCAD-A2-SGK <br> PPUD-A4-SBP </td>
                <td rowspan="2"> PPUD-A1-SBP <br> NAM-A2-KBP <br> MCAD-A3-MMC <br> PPUD-A4-KPP </td>
            </tr>
            <tr>
                <th scope="row">11:00 to 12:00 am</th>
                <td>AJAVA-VNC</td>
                <td>MCAD-MMC</td>
            </tr>
            <tr>
                <th scope="row">12:00 to 12:30 pm</th>
                <td colspan="5" style="text-align: center; letter-spacing: 100px;"><b>BREAK</b></td>
            </tr>
            <tr>
                <th scope="row">12:30 to 01:30 pm</th>
                <td rowspan="2">AJAVA-A1-PJS <br> AJAVA-A4-VNC </td>
                <td rowspan="2"> MCAD-A1_MMC <br> AJAVA-A2-VNC <br> PPUD-A3-KPP <br> NMA-A4-KBP</td>
                <td rowspan="2"> NMA-A1-VNC <br> MCAD-A2-MMC <br> PPUD-A3-SBP <br> AJAVA-A4-PJS </td>
                <td rowspan="2"> NMA-A3-PJS <br> MCAD-A4-SGK <br> PPUD-A2-SBP </td>
                <td rowspan="2"> MCAD-A3-MMC <br> NMA-A4-KPP <br> MCAD-A1-SGK </td>
            </tr>
            <tr>
                <th scope="row">01:30 to 02:30 pm</th>
            </tr>
            <tr>
                <th scope="row">02:30 to 03:30 pm</th>
                <td></td>
                <td rowspan="2"> PPUD-A2-KPP <br> AJAVA-A3-PJS </td>
                <td></td>
                <td rowspan="2"> PPUD-A1-KPP <br> NMA-A2-KBP <br> AJAVA-A3-VNC <br>  </td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">03:30 to 04:30 pm</th>
                <td></td>
                <td></td>
                <td></td>
            </tr> -->
        </tbody>
    </table>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <center><button class="btn">Submit</button></center>
                            </div>
            </form>
    </div>
<!--Content Ends Here-->
@endsection