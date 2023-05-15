<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>學生資料庫管理系統</title>
</head>

<body>
<h1 align="center">修改學生資料</h1>
	<form action="doupdate.php" method="post">	
	  <table width="500" border="1" bgcolor="#cccccc" align="center">

	  	<!-- TODO 
		1. 在 index.php 對某筆資料按下`修改`後，會把該筆資料的內容帶入到 `update.php` 表格上
		2. 新增 `ID` 欄位，且屬性為 `唯讀`
		3. 帶入資料時，在`性別`欄位，若該筆資料為男性，則會自動選擇男性選項，否則為女性

		hint : 在index.php對某筆資料按下`修改`後，會把該筆資料的 `id`帶到 `update.php`，
			用該 id 去資料庫做搜尋，再把搜尋到的資料填入到html表單中。
		
		-->
		<?php
			$id = $_GET['id'];
			echo "<tr>
				<th>ID</th>
				<td bgcolor=\"#FFFFFF\"><input type=\"text\" name=\"id\" value=\"$id\" readonly=\"readonly\" style=\"border-style:none\" /></td>
			</tr>";	

			$StuName = $_GET['StuName'];
			echo "<tr>
				<th>姓名</th>
				<td bgcolor=\"#FFFFFF\"><input type=\"text\" name=\"StuName\" value=\"$StuName\" /></td>
			</tr>";
			
			$StuNum = $_GET['StuNum'];
			echo "<tr>
				<th>學號</th>
				<td bgcolor=\"#FFFFFF\"><input type=\"text\" name=\"StuNum\" value=\"$StuNum\" /></td>
			</tr>";
			
			$passwd = $_GET['passwd'];
			echo "<tr>
				<th>密碼</th>
				<td bgcolor=\"#FFFFFF\"><input type=\"text\" name=\"passwd\" value=\"$passwd\" /></td>
			</tr>";
		
			$gender = $_GET['gender'];
			if($gender == 0) {
				echo"
					<tr>
						<th>性別</th>
						<td bgcolor='#FFFFFF'><input  type='radio' name='gender' value='0' checked>男 </input> <input type='radio' name='gender' value='1'>女 </input>
					<tr>";
			}
			else {
				echo"
					<tr>
						<th>性別</th>
						<td bgcolor='#FFFFFF'><input  type='radio' name='gender' value='0'>男 </input> <input type='radio' name='gender' value='1' checked>女 </input>
					<tr>";
			}
			
		?>
		<tr>
		  <th colspan="2"><input type="submit" value="更新"/></th>
		</tr>


	  </table>
	</form>
</body>
</html>