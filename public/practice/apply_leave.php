<?php
    
    require 'authenticate.php';
    
    /*$enrollment = 123;
    $facultyName = "qwe";
    $reason = "Maternity Leave";
    $fromDate = "12-2-2020";
    $toDate = "14-2-2020";
    $details = "example";*/

    $enrollment = (int)$_POST['username'];
    $facultyName = $_POST['fname'];
    $reason = $_POST['reason'];
    $fromDate = $_POST['from'];
    $toDate = $_POST['to'];
    $details = $_POST['desc'];
    
    $qry = "INSERT INTO stdleave(lenrollment, leave_faculty,reason,leave_desc,leave_start_date,leave_end_date) VALUES 
    ('$enrollment','$facultyName','$reason','$details',STR_TO_DATE('$fromDate', '%d-%m-%Y'),STR_TO_DATE('$toDate', '%d-%m-%Y'));";
    
    if(mysqli_query($conn,$qry)){
        echo "Insert Success";
    }
    else{
        echo "Insert Failed";
    }
    
?>