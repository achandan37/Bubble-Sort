<!-- <!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="main.css.php">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
</head>
<body> -->

<?php

function timetakes($callback){
$starttime = microtime(true);
$callback;
$endtime = microtime(true);
$totaltime=$endtime-$starttime;
return $totaltime;
}

$array= array();
for($i=0;$i<100;$i++){
	$randnum=rand(0,10000);
	array_push($array,"$randnum");
}

function sortarray($myarray){
	for($i=0;$i<count($myarray)-1;$i++){
		if($myarray[$i+1]<$myarray[$i]){
			$temp=$myarray[$i];
			$myarray[$i]=$myarray[$i+1];
			$myarray[$i+1]=$temp;
			$i=-1;
		}

	}
	return $myarray;
}
	
$time1= microtime(true);
echo '<pre>';
var_dump(sortarray($array));
$time2= microtime(true);
echo timetakes(sortarray($array));

// function sortarray(){
	// var array= [];
	// for(var i=0;i<100;i++){
	// 	var randnum=Math.random()*10000;
	// 	randnum=Math.round(randnum);
	// 	array.push(randnum);
	// 	}
// 	for(var m=0;m<array.length;m++)
// 		{var min=array[m];
// 		var max=array[array.length-1];
// 			for(var z=m+1;z<array.length;z++){
// 			if(array[z]<min)
// 				{min=array[z];
// 				var switchnum=array[z];
// 				var switchnum2=array[m];
// 				array[m]=switchnum;
// 				array[z]=switchnum2;
// 		 		}
// 		 	if(array[z]>max)
// 		 		{max=array[z];
// 		 		var switchnum3=array[z];
// 		 		var switchnum4=array[array.length-1];
// 		 		array[z]=switchnum4;
// 		 		array[array.length-1]=switchnum3;
// 		 		}
// 			}
// 		}
// 	console.log(array);
// }
?>
<!-- </body>
</html> -->