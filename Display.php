<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no" http-equiv = "refresh" content="70">  
    
    <title>蝦毀?原來你在這!</title>
    
    <link rel="icon" href="img/1.png">
    <link rel="stylesheet" type="text/css" href="Display.css">
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
    setTimeout(function()
    {
   window.location.reload(); //刷新頁面 20秒
}, 20000);
    </script>
    
</head>


<body>

    <input type="checkbox" name="123" id="menu">
    
    <div class="header">
        <label class="logo">
            <a href="index.php" style="text-decoration: none;color: #2C3E50;"><img src="img/1.png" width="50px" height="50px">&nbsp;蝦毀?原來你在這!
            </a></label>

        
        <label for="menu" class="btn"> 
                    <span>選單</span>
                </label>
        <nav>
            <a href="index.php"><b>首頁</b></a>
            <a href="Introduction.php"><b>基本介紹</b></a>
            <a href="Display.php"><b>即時顯示數據</b></a>
            <a href="ch.php"><b>資料庫</b></a>
            <a href=""><b>蝦子動態</b></a>
        </nav>
    </div>




<div class="row"> 
<?php require_once("catchData.php");?>

    <div class = "card-group">
        <div class="card"> 
            <canvas id="temp" width="130" height="40%"></canvas>  
        </div> 
        <div class ="card">
            <canvas id="tempgauge" width="130" height="40%"></canvas>
        </div>
    </div>

    <div class = "card-group">
        <div class="card"> 
        <canvas id="trans電壓" width="130" height="40%" ></canvas>
            
        </div> 
        <div class ="card">
            123
        </div>
    </div>

    <div class = "card-group">
    
        <div class ="card">
            <canvas id="ntu" width="150" height="30%"></canvas>
        </div>

        <div class = "card">
            123
        </div> 
    </div>


</div>















    <div>
    <canvas id="canvas" width="900" height="800">
</canvas>
    <script>
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    ctx.fillStyle = 'green';
    ctx.fillRect(100, 100, 100, 100);
</script>
        <script>
            
            var ctx = document.getElementById('temp').getContext('2d');
            var temp_val = <?php echo $tempss; ?>;
            var time_val = <?php echo $timess; ?>;
            var temp = new Chart(ctx, {
                type: 'line',
                data: {
                    
                    labels: time_val,
                    datasets: [
                        {
                        borderColor: 'rgb(75, 192, 192)',
                        fill: false,
                        label: 'temp',
                        data: temp_val,
                        tension: 0.1
                        }
                    ]
                }
            }) 
            ;
        </script>
        <script>
            var ctx = document.getElementById('tempgauge').getContext('2d');
            var data = [40,70,100];
            var value = 76;
            var tempgauge = new Chart(ctx, {
                type: 'gauge',
                data: {
                    labels: ["Normal","Warning","Critical"],
                    datasets: [
                        {
                        data : data,
                        value :value,
                        label: "Current Appeal Risk",
                        minValue:0,
                        backgroundColor: ["green", "orange", "red"],
                        borderwidth:2
                        }
                    ]
                },
                options: {
    legend: {
      display: true,
      position: "bottom",
      labels: {
        generateLabels: {}
      }
    },
    responsive: true,
    title: {
      display: true,
      text: "Financial Risk"
    },
    layout: {
      padding: {
        bottom: 20
      }
    },
    needle: {
      radiusPercentage: 1,
      widthPercentage: 1,
      lengthPercentage: 60,
      color: "rgba(0, 0, 0, 1)"
    },
    valueLabel: {
      fontSize: 12,
      formatter: function (value, context) {
        // debugger;
        return value + "X";
        // return '< ' + Math.round(value);
      }
    },
    plugins: {
      datalabels: {
        display: "auto",
        formatter: function (value, context) {
          // debugger;
          return context.chart.data.labels[context.dataIndex];
          // return context.dataIndex===0?'Normal':context.dataIndex===1?'Warning':'Critical';
          // return '< ' + Math.round(value);
        },
        color: function (context) {
          return "white";
        },
        //color: 'rgba(255, 255, 255, 1.0)',
        // backgroundColor: 'rgba(0, 0, 0, 1.0)',
        // borderWidth: 0,
        // borderRadius: 5,
        font: function (context) {
          var innerRadius = Math.round(context.chart.innerRadius);
          console.log(innerRadius);
          var size = Math.round(innerRadius / 8);

          return {
            weight: "normal",
            size: size
          };
        }
        // font: {
        //   weight: 'normal',
        //   size:16
        // }
      }
    }
  }
};

export default function App() {
  useEffect(() => {
    // Chart.register(ChartDataLabels);
    var ctx = document.getElementById("myChart").getContext("2d");
    const myGauge = new Chart(ctx, config);
    myGauge.update();
    const val = setTimeout(() => console.log(myGauge.toBase64Image()), 800);
  }, []);

  return (
    <div className="App">
      {/* <h1>Hello CodeSandbox</h1>
      <h2>Start editing to see some magic happen!</h2> */}
      <canvas id="myChart"></canvas>
    </div>
  );
}



            }) 
            ;
        </script>


        <script>
            var ctx = document.getElementById('trans電壓').getContext('2d');
            var trans_val = <?php echo $transss; ?>;
            var time_val = <?php echo $timess; ?>;
            var trans = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: time_val,
                    datasets: [
                    {
                        
                        label: '電壓',
                        data: trans_val,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }
                    ]
            }
            });
        </script>
        <script>
            var ctx = document.getElementById('ntu').getContext('2d');
            var ntu_val = <?php echo $ntuss; ?>;
            var time_val = <?php echo $timess; ?>;
            var temp = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: time_val,
                    datasets: [
                        {
                        label: 'ntu',
                        data: ntu_val,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                        }
                    ]
                }
            });
        </script>

            
        
        <script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>   
        //window.location.reload();//加載用到的jQuery
        <script>
        $(function(){
        setInterval(temp,30);             //10以毫秒為單比特
        function temp(){
        $("#temp").append("fdsadfsa");
        }
        })
</script>






            

    </div>
    <div class="footer">
        <div class="footer__slogan">蝦毀?<span>原來你在這!</span></div>
        <div>
            
        </div>
        <div class="footer__menu">
            
            <ul>
                <li>
                    <a href="Introduction.php">
                        <span class="translate_tw">基本介紹</span>
                        <span class="translate_en">Basic Introduction</span>
                    </a>
                </li>
                <li>
                    <a href="Display.php">
                        <span class="translate_tw">即時顯示數據</span>
                        <span class="translate_en">Display Data Instantly</span>
                    </a>
                </li>
                <li>
                    <a href="ch.php">
                        <span class="translate_tw">資料庫</span>
                        <span class="translate_en">Database</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="translate_tw">蝦子動態</span>
                        <span class="translate_en">whiteleg Shrimp Dynamic</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="footer__contact">
            <p class="footer__email">指導教授 | 陳灯能教授</p>
            <p class="footer__email">小組隊長 | 林暐竣</p>
            <p class="footer__email">小組成員 | 吳冠儀 吳書婷</p>
            <br>
            <p class="footer__copyright"> Copyright © 蝦毀?原來你在這! ALL RIGHTS RESERVED.
            <a href="#" class="back-to-top"><img src="img/0.png" height="50" width="50"></a>
            <br>since 2022.
            </p>
        </div>
<script></script>
        
        

</div></body>

</html>