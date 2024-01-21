<?php
 
    require 'authenticate.php';
 
    //$username= '186230307011';
    //$username= $_GET['username'];
    //$name = $_GET['k'];
    $qry = "SELECT * FROM meeting WHERE date_meet >= CURDATE() order by meet_id DESC";
    $ans = mysqli_query($conn,$qry);
 
    while(($row=mysqli_fetch_assoc($ans))){
        $data[] = $row;
     }
     header('Content-Type: application/json');
     echo json_encode($data);
 

?>