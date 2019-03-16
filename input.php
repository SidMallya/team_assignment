<html>

<head>
<title>Enter member and team names (Optional)</title>

</head>

<body style="font-family:Times;color:#000000" bgcolor="#C0C0C0">

<?php
	$m = $_POST['m'];
	$t = $_POST['t'];
	
	if (is_numeric($m) && is_numeric($t))
		$numeric = 1;
	else {
		echo "<p>Both entries must be numeric</p>";
		$numeric = 0;
	}
	
	if ($numeric) {
		if ($m > $t)
			$members_greater = 1;
		else {
			echo "<p>The number of members should be greater than the number of teams</p>";
			$members_greater = 0;
		}
		if ($m > 1 && $t > 1)
			$greater_than_1 = 1;
		else {
			echo "<p>The number of members and the number of teams must be greater than 1</p>";
			$greater_than_1 = 0;
		}
		if ($m <= 1000 && $t <= 1000)
			$lesser_than_1000 = 1;
		else {
			echo "<p>The number of members and the number of teams must be lesser than 1000</p>";
			$lesser_than_1000 = 0;
		}		
	}
	
	if ($numeric && $members_greater && $greater_than_1 && $lesser_than_1000) {

		
		echo '<form action="calculate.php" method="post">'.'<br/>';
		
		echo '<b>Enter member names (Optional):</b>';
		echo '<br/>';
		echo '<br/>';
		echo '<table>';
		for($i=1;$i<=$m;$i++) { 
			echo '<tr>';
			echo '<td>';
			echo '<b>Member '.$i.'</b>';
			echo '<td>';
			echo '<td></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>Name:    </td>';
			echo '<td><input type="text" name="member'.$i.'" size="10"/></td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '<input type="hidden" name="m" value="'.$m.'" />';	
	
		echo '<br/>';
		
		echo '<b>Enter team names (Optional):</b>';
		echo '<br/>';
		echo '<br/>';
		echo '<table>';
		for($i=1;$i<=$t;$i++) { 
			echo '<tr>';
			echo '<td>';
			echo '<b>Team '.$i.'</b>';
			echo '<td>';
			echo '<td></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>Name:    </td>';
			echo '<td><input type="text" name="team'.$i.'" size="10"/></td>';
			echo '</tr>';
		}
		echo '</table>';		
		echo '<input type="hidden" name="t" value="'.$t.'" />';
		
		echo '<input type="submit" value="Submit" />'.'<br/>';
		echo '</form>';	
	}
	else {
		echo "<a href=index.php>Back</a><br/>";
	}

?>

</body>

</html>
