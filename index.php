 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>蝦毀?原來你在這!</title>
    <link rel="icon" href="img/1.jpg">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>


<body>
<?php require_once ("Database.php"); ?>  <!-- 連線資料庫 -->



    <input type="checkbox" name="" id="menu">
    <div class="header">
        <label class="logo">
            <a href="index.php" style="text-decoration: none;color: black;"><img src="img/1.png" width="50px" height="50px">&nbsp;蝦毀?原來你在這!
            </a>
            <label for="menu" class="btn"  > 
                    <span>選單</span>






                </label>
          </label>

        
        <!--<label for="menu" class="btn"> 
                    <span>選單</span>
                </label>-->
        <nav>
            <a href="index.php"><b>首頁</b></a>
            <a href="Introduction.php"><b>基本介紹</b></a>
            <a href="Display.php"><b>即時顯示數據</b></a>
            <a href="ch.php"><b>資料庫</b></a>
            <a href="123.php"><b>蝦子動態</b></a>
        </nav>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpeg" class="d-block w-100"   width="50px" height="850px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>蝦蝦</h5>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/2.jpeg" class="d-block w-100"  width="50px" height="850px"alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>蝦子</h5>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" width="50px" height="850px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>草蝦</h5>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

 
    <!-- <div class="bg">
        <img src="img/1.jpg">
        <img src="img/2.jpeg">
        <img src="img/3.png">
    </div>  -->

    <div class="card-group">
        <div class="card">
          <img src="img/4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">實際圖攝</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">蝦子</h5>
            <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">蝦子動態</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
      </div>
    
      <div class="card-group">
        <div class="card">
          <img src="img/4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">實際圖攝</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">蝦子</h5>
            <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">蝦子動態</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
      </div>


      
      
    <div class="footer">
        <div class="footer__slogan">蝦毀?<span>原來你在這!</span></div>
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
                    <a href="123.php">
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

        
        

</div></body>

</html>