<?php
 
//fetch connection details from database.php file using require_once(); function
require_once ('database.php');
//check if it work!
echo $connection; //from database.php file






if (isset($_POST['fetch']))
    //mysql_query() performs a single query to the currently active database on the server that is associated with the specified link identifier
    {
    $response = mysqli_query($connect,"SELECT * FROM final order by updatetime desc limit 10");
    $number = 10;
    $total = mysqli_num_rows($response);

    $pages = ceil($total/$number);



  $tempss = json_encode($temps);
    $transss = json_encode($transs);
    $ntuss = json_encode($ntus);
    $timess = json_encode($times);
    







echo "<table border='2' align='center'>
<H2 align='center'>蝦小</h2>
<tr>共有$total 筆資料 </tr>
<tr>
<th>ID</th>
<th>溫度</th>
<th>電壓</th>
<th>時間</th>
</tr>";
    while ($fetch = mysqli_fetch_array($response))
    {
        echo "<tr>";
        // echo "<td>" . $fetch['id'] . "</td>";
         "<td>" . $tempss . "度</td>";
         "<td>" . $transss . "</td>";
        
         "<td>" . $timess . "</td>";
        echo "</tr>";
    }
    echo "</table>";




    mysqli_close($connect);
}


?>