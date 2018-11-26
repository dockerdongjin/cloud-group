<!DOCTYPE html>
<html lang="ko">
<head>
</head>
<body>
<h1>Hello PHP</h1>
<table>
<?php
	$conn = mysqli_connect(
	  'db',
	  'cloud',
	  'password',
	  'cloud');
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result)) {
		echo '<tr>';
		for ($i = 0;$i < count($row);$i++) {
			echo '<td>'.$row[$i].'</td>';
		}
		echo '</tr>';
	}
?>
</table>
</body>
</html>
