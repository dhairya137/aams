<?php



require 'authenticate.php';
$count = array();
$total = 0;
$flag = 0;



$qry = "SELECT enrollment FROM student ORDER BY enrollment;";
$ans = mysqli_query($conn,$qry);
$s1=0;

while(($row=mysqli_fetch_assoc($ans))){
	$data1[] = $row;
	$s1++;
}
echo "<pre>";



/*var_dump($data1);
echo $data1[0]['enrollment'];
echo "<br>".$s1;*/



$qry = "SELECT * FROM attendance order by enrollment,subject_name;";
$ans = mysqli_query($conn,$qry);
$c=0;
while(($row=mysqli_fetch_assoc($ans))){
	$data[]=$row;
	$c++;
}
echo "<pre>";
/*var_dump($data);
echo $data[0]['enrollment'];
echo "<br>".$c;*/
$j=0;



for($i=0;$i<=($c-1);$i++)
{
	if($data1[$j]['enrollment'] != $data[$i]['enrollment'])
	{
		$pre = (float)$flag*100/$total;
		$total=$flag=0;
		$count[$data1[$j]['enrollment']] = $pre;
		$j++;

		//$count[$data1[$j]['enrollment']];
	}
	if($data[$i]['subject_name'] == "DWPD"){
		//echo "<br>".$data[$i]['attend_id'];
		$total++;
		if($data[$i]['attend'] == 1){
			$flag++;
		}
	}
}



$pre = (float)$flag*100/$total;
$count[$data1[$j]['enrollment']] = $pre;



print_r(json_encode($count));

/*
var_dump($count);*/
/*echo "<br>".$total;
echo "<br>".$flag;*/




?>

//186230307001=4 c=4//DWPD
c--{
	attend=1;
}{

}
