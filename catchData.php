<?php
    require_once ('database.php');
    $response = mysqli_query($connect,"SELECT * FROM final order by updatetime desc limit 10");
    //$number = 10;
     //$total = mysqli_num_rows($response);
     //$pages = ceil($total/$number);

    $aaray = array();
    while ($fetch = mysqli_fetch_array($response)) {
        $temp[] = $fetch['temp'];
        $trans[]= $fetch['vol'];
        $ntu[]= $fetch['ntu'];
        $time[] = $fetch['updatetime'];

        $temps = array_reverse($temp);
        $transs = array_reverse($trans);
        $ntus = array_reverse($ntu);
        $times = array_reverse($time);
    }
    $tempss = json_encode($temps);
    $transss = json_encode($transs);
    $ntuss = json_encode($ntus);
    $timess = json_encode($times);
    


    mysqli_close($connect);

    
?>