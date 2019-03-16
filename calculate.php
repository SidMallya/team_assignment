<html>

<head>
<title>Team Assignment Result</title>

</head>

<body style="font-family:Times;color:#000000" bgcolor="#C0C0C0">

<?php 
// This is a program to randomly assign teams to members
// Author: Siddharth Mallya
// Date: February 19, 2012
	
	$m = $_POST['m'];
	
	for	($i=1;	$i<=$m;	$i++) {
	
		$member_i = 'member'.$i;
		$member[$i] = trim(preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["$member_i"]));
		
	}
	
	$t = $_POST['t'];
	
	for	($i=1;	$i<=$t;	$i++) {
	
		$team_i = 'team'.$i;
		$team[$i] = trim(preg_replace('/[^a-zA-Z0-9_ -]/s', '', $_POST["$team_i"]));
		
	}
	

	echo 'Total Members = '.$m.'<br/>';
	echo 'Total Teams = '.$t.'<br/>';
	echo '<br/>';
	echo '<b>Team assignment result:</b><br/>';
	echo '<br/>';
	
	

	for ($i = 1; $i <= $m; $i++) {
		$team_number = $i % $t + 1;
		$team_arr[$i] = $team_number;
	}

	shuffle($team_arr);
	
	$j = 1;
	
	foreach ($team_arr as $team_num) {
	
		if ($member[$j] == '') 
			echo "Member ".$j." = ";
		else
			echo $member[$j]." = ";
			
		if ($team[$team_num] == '')	
			echo "Team ".$team_num;
		else
			echo $team[$team_num];
		echo "<br/>";
		$j++;
	}	

	echo "<br/>";
	echo "<a href=index.php>Home</a><br/>";
?>

</body>

</html>

