<?php
    //資料庫連結

$link=mysqli_connect("localhost","root","0000","1011voltag");
$sql = "SELECT * FROM final ORDER BY id "; //修改成你要的 SQL 語法
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_execute($stmt);

/* store the result in an internal buffer */
mysqli_stmt_store_result($stmt);

printf("Number of rows: %d.\n", mysqli_stmt_num_rows($stmt));

     
    
?>
  