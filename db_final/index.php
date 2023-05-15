<html>
<head>
	<title>學生資料庫管理系統</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style>
	table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	}
	th, td {
	padding: 5px;
	text-align: left;    
	}
</style>
<body>
	
	<h1 align="center">學生資料庫管理系統</h1>
	<p align="center"><a href="create.html">新增資料</a><p>
	<table style="width:50%" align="center">
		<tr><th>id</th><th>Name</th><th>stdid</th><th colspan="2">Action</th></tr>

		<!-- hint: 用這段php code 讀取資料庫的資料-->

		<?php
			include "conn.php";
			
			// set up char set
			if (!$conn->set_charset("utf8")) {
				printf("Error loading character set utf8: %s\n", $conn->error);
				exit();
			}
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 			
			
			// ******** update your personal settings ******** 
			$sql = "SELECT * FROM student_takala";	// set up your sql query
			
			$result = $conn->query($sql);	// Send SQL Query

			if ($result->num_rows > 0) {	
				while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
					printf(
						"<tr>
							<td>%d</td>
							<td>%s</td>
							<td>%d</td>
							<td><a href=\"update.php?id=%d&StuName=%s&StuNum=%d&passwd=%s&gender=%d\">修改</td>
							<td><a href=\"delete.php?id=%d\">刪除</td>
						</tr>"
						, $row["id"], $row["StuName"], $row["StuNum"], $row["id"], $row["StuName"], $row["StuNum"], $row["passwd"], $row["gender"], $row["id"]
					);
				}
			} else {
				echo "0 results";
			}
		
		?>
		
	</table>
	
</body>
	
</html>


				
		