<?php
include "conn.php";

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET['id'];

if (isset($id)) {
    $delete_sql = "DELETE FROM student_takala WHERE id=$id";

	if ($conn->query($delete_sql) === TRUE) {
        echo "刪除成功!<br><a href='index.php'>返回主頁</a>";
    }else{
        echo "刪除失敗! <a href='index.php'>返回主頁</a>";
	}

}else{
	echo "資料不完全 <a href='index.php'>返回主頁</a>";
}
				
?>