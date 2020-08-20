<!DOCTYPE html>
<html lang="en">

<head>
    
    
   

   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- mycss -->
  <link rel="stylesheet" href="../_css/myCSS.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- 燈箱 -->
  <script src="../_js/bootstrap.min.js"></script>
    <script src="../_js/jquery.min.js"></script>
    <script src="../_js/popper.min.js"></script>
</head>

<body>  
    <!-- 10.導覽列 -->
    <?php   
    require_once("navbar.php");
    ?>
    <div class="wrapper">
    <!-- 20.輪播牆 -->
<div id="carouselExampleIndicators" class="carousel slide carousel-container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block carousel-img" src="../img/輪播牆圖片1.jpg" alt="First slide">
      <div class="carousel-caption">
          <h3>目前課程</h3>
           <p>We have the best class!</p>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block carousel-img" src="../img/輪播牆圖片2.jpg" alt="Second slide">
      <div class="carousel-caption">
          <h3>教室環境</h3>
          <p>We have the best class!</p>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block carousel-img" src="../img/輪播牆圖片3.jpg" alt="Third slide">
      <div class="carousel-caption">
           <h3>Learning language brings you around the world!</h3>
            <p>We love the Big Apple!</p>
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- 30.課程介紹卡片 -->

        <div class="card-container class-container" >

            <div class="side-title  text-center">
                <h3 class="text-center side-title-letter">課程介紹</h3>
                <p class="text-center pt-2 side-title-letter">PRODUCTS</p>
                <div class="btn-group btn-group-justified pb-1" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-secondary ">More</button>
                    </div>
                    
                </div>
                
                <div class="table d-flex justify-content-around mt-1"><a href=""></a>
                <section class="section ml-5"><img src="../img/課程介紹1.jpg" class="sec-img" >
                <h2 class="pt-1">中高級英語課程</h2>
                <p class="pt-1">母語教師授課
                  ⊙開課日期 <br>
06/23（二）15:00-17:00 <br>
06/23（二）19:00-21:00 <br>
06/28（日）15:00-17:00 <br>
06/28（日）19:00-21:00 <br>　　
</p>  
  </section>
  <section class="section"><img src="../img/課程介紹2.jpg"  class="sec-img">
   <h2 class="pt-1">越南語課程</h2>
   <p class="pt-1">母語教師授課
⊙開課日期 <br>
初級越南語發音班（一）： <br>
06/26（五）15:00-17:00 <br>
06/27（六）10:00-12:00 <br>
初級越南語會話班（一）： <br>
06/26（五）19:00-21:00 <br>
06/27（六）13:00-15:00 <br>
</p></section>
  <section class="section mr-5"><img src="../img/課程介紹3.jpg"  class="sec-img">
   <h2 class="pt-1">韓語課程</h2>
   <p class="pt-1">母語教師授課
⊙開課日期 <br>
韓語會話入門班（一）： <br>
06/25（四）15:00-17:00 <br>
06/25（四）19:00-21:00 <br>
06/28（日）10:00-12:00 <br>
06/28（日）13:00-15:00 <br>
       </section>
</div>
               
            <!-- 40.最新消息 -->
            <div class="card-container class-container mb-5" >

<div class="side-title  text-center">
    <h3 class="text-center side-title-letter">最新消息</h3>
    <p class="text-center pt-2 side-title-letter">NEWS</p>
    <div class="btn-group btn-group-justified pb-1" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary ">More</button>
        </div>
        
    </div>
    <div class="table d-flex justify-content-around mt-1">  
    <section class="section ml-5"><img src="../img/課程介紹4.jpg" class="sec-img" >
    <h2 class="pt-1">中文課程介紹</h2>
    <p class="pt-1">⊙開課日期 <br>
       高中創意溝通寫作班　06/23（二）19:00-21:00 <br>
       高中閱讀思辨寫作班　06/27（日）19:00-21:00 <br>
       報名截止日：06/22（一）</p>
</section>
<section class="section"><img src="../img/課程介紹5.jpg"  class="sec-img">
<h2 class="pt-1">初級英文課程</h2>
<p class="pt-1">⊙開課日期 <br>
初級英語會話班（一）： <br>
06/23（二） 10:00-12:00 <br>
06/24（三） 15:00-17:00 <br>
06/26（五） 10:00-12:00 <br>　

初級英語檢定班（一）： <br>
06/24（三） 19:00-21:00 <br>
06/26（五） 13:00-15:00 <br>
06/27（六） 15:00-17:00</p></section>
<section class="section mr-5"><img src="../img/課程介紹1.jpg"  class="sec-img">
<h2 class="pt-1">jQuery實戰教學</h2>
<p class="pt-1">⊙開課日期 <br>
高中創意溝通寫作班 <br>　06/23（二）19:00-21:00 <br>
高中閱讀思辨寫作班 <br>　06/27（日）19:00-21:00 <br>

</section>
</div>
 
       
   </div>
	  </div>
    
                </div>
                <!-- 50.Footer -->
                <div class="footer-container mt-2">
                    <div class=" ">
                        <div class="footer-information ml-5 mt-2">
                         <div class=" mt-2">     
                            <p class=""> E-mail : milly51710@gmail.com</p>
                            <p class="">地址：台北市羅斯福路二段140號3樓之5 (捷運古亭站1號出口30公尺、全家便利商店樓上、哈佛新廈)</p>
                        </div>
                    </div>
                        
                    </div>
                    <article>
		
                    <div class="float-right mt-1">
                        <p>Copyright © 眾聲喧嘩 All Rights Reserved.
                            隱私權政策 網頁設計 : MY </p>
                    </div>
                </div>

            </div>
        </div>

</body>

</html>