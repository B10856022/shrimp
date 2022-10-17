<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include('database.php');  //這是引入剛剛寫完，用來連線的.php
?>
<!DOCTYPE html>
<html lang="en">
<title>(網頁名稱)</title>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<?php 
 $results_per_page  =  10 ; 
	


 $query_ = "SELECT * FROM final  "; //搜尋 *(全部欄位) ，從 表staff
 //mysqli_query << PHP 有很多種...指令(?) ，這是其中一個，我現在還都是學到甚麼用什麼，沒辦法自己看手冊，然後實驗+學習使用。 
 $result_= mysqli_query($connect,$query_); //$con <<此變數來自引入的 database.php

 



$number_of_result = mysqli_num_rows($result_);  
printf( $number_of_result);

$number_of_page = ceil ($number_of_result / $results_per_page);  


if (!isset ($_GET['page']) ) {  
    $page =  1 ;  
} else {  
    $page  = $_GET['page'];  
}  
$page_first_result = ($page-1) * $results_per_page;  


$query = "SELECT * FROM final order by updatetime   desc ".$page_first_result.','. $results_per_page;
$result= mysqli_query($connect,$query);

//while($row = mysqli_num_rows($result)) {  
  //  echo $row['id'] . ' ' . $row['temp'] . '</br>';  
//}  
  //  for($page = 1; $page<= $number_of_page; $page++) {  
    //echo '<a href = "ch.php?page=' . $page . '">' . $page . ' </a>';  
//}  







//$qu="SELECT * FROM final order by updatetime  desc ".$page_first.','.$per_page;
//$co = mysqli_query($conn, $qu);  

?>
<div class="container">

	<table class="table table-sm table-bordered"style="text-align:center;">
		<thead style="text-align:center;">
			<tr style="text-align:center;">
                <tr > 最新資料</tr>
				<th>ID</th>
				<th>溫度</th>
				<th>電壓</th>
                <th>NTU</th>
			</tr>
		</thead>

		<tbody>
			<!-- 大括號的上、下半部分 分別用 PHP 拆開 ，這樣中間就可以純用HTML語法-->
			<?php
				if(mysqli_num_rows($result) > 0)
				{
                    
                   
                   
                    
					foreach($result as $row)
					{
                        
			?>
							<tr>
								<!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                                
								<td><?php echo $row['id']; ?></td> 
								<td><?php echo $row['temp']; ?></td> 
								<td><?php echo $row['vol']; ?></td>
                                <td><?php echo $row['ntu']; ?></td>
                                <td><?php $iut= 0; 
                                        
                                            
                                            ?></td>
                                

							</tr>
			<?php
             ;


				   }
                   
				}
                
			?>
            </tbody>
            
        
</body>

</div>


    
</body>
</html>