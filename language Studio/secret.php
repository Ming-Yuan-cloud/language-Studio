<?php
require_once ("dbConnect.php");
//設定cookie
if (isset($_COOKIE["userName"])){
    $sUserName = $_COOKIE["userName"];
}else{
    echo'<script>'.'alert("請先登入")'.'</script>';
}
//檢測資料庫是否有對應的username和Chinese課程和English課程的sql
$sql = "select `m_Chinese`,`m_English` from members where m_UserName = '$sUserName'";
$result = mysqli_query($link, $sql) or die;//執行sql 
$rows = mysqli_fetch_row($result);//返回一個字串 0或1
$Purchase_Chinese=$rows[0];
$Purchase_English=$rows[1];

if($Purchase_Chinese == "0" && $Purchase_English =="0"){
    $Purchase_Chinese=0;
    $Purchase_English=0;
    // echo"不可以看中文、不可以看英文";
}elseif($rows[0] == "1" && $rows[1] =="0"){
    // echo"可以看中文、不可以看英文";
    $Purchase_Chinese=1;
    $Purchase_English=0;
}elseif($rows[0] == "0" && $rows[1] =="1"){
    // echo"不可以看中文、可以看英文";
    $Purchase_Chinese=0;
    $Purchase_English=1;
}elseif($rows[0] == "1" && $rows[1] =="1"){
    // echo"可以看中文、可以看英文";
    $Purchase_Chinese=1;
    $Purchase_English=1;
}

// if(isset($_POST["btnOK1"])&&$Purchase_Chinese=1){
//     echo '<script language="javascript">'.'alert("OK")'.'</script>';
// }
// 從資料庫讀取是否已購買課程

//檢測資料庫是否有對應的username和English課程的sql
// $sql2 = "select `m_English`  from members where m_UserName = '$sUserName'";
// $result2 = mysqli_query($link, $sql2) or die;//執行sql 
// $rows2 = mysqli_fetch_assoc($result2 );//返回一個數值
// var_dump($rows2);
// if($rows["m_English"] = "0"){
//     echo"不可以觀看英文";
// }else{
//     echo"可以觀看英文";
// }


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/myCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet">
    <script src="../_js/bootstrap.min.js"></script>
    <script src="../_js/jquery.min.js"></script>
    <script src="../_js/popper.min.js"></script>
    <!-- 影片燈箱 -->
    <script src="jquery.js"></script>
    <script src="../js/venobox/venobox.min.js"></script>
</head>

<form id="form1" name="form1" method="post" action="login.php">
<!-- 10.導覽列 -->
<?php   
    require_once("navbar.php");
    ?>
<body class="backgroud">

    <div class="container_login ">
        <div class="d-flex  justify-content-center h-100">
        <!-- 中文     -->
        <div class="card ">
              <div class="card-header text-center ">
              <span class="border border-secondary p-2 rounded">中文課程</span>
                  <?php if($Purchase_Chinese==0) {
                      echo("尚未購買，點選下方影片試閱");
                      } else{
                          echo('<a class="venobox" href="../video/Chinese-member.mp4" alt="ss">購買已解鎖，點選連結看完整視頻</a> ');}
                     ?>
                </span> 
              </div>
              <div class="card-body text-center secret_course">
              <video width="100%" height="100%" controls ><source src= "../Video/Chinese-introduction.mp4" type="video/mp4"></video></div>
            </div>
            
            <!-- 英文 -->
            <div class="card">
              <div class="card-header text-center ">
              <span class="border border-secondary p-2 rounded">英文課程</span>
                  <?php if($Purchase_English==0) {
                      echo("尚未購買，點選下方影片試閱");
                      } else{
                          echo('<a class="venobox" href="../video/English-member.mp4" alt="ss">購買已解鎖，點選連結看完整視頻</a> ');}
                     ?>
                </span> 
               
              </div>
              <div class="card-body text-center secret_course">
              <video width="100%" height="100%" controls ><source src= "../Video/English-introduction.mp4" type="video/mp4"></video></div>
        </div>
        </div>
    </div>
    </form>
    <!-- <a class="venobox" href="../video/Chinese-member.mp4"><img src="Chinese-member.mp4" alt="image alt" /></a>
     <video width="100%" controls autoplay>
    <source src="../video/Chinese-member.mp4" type="video/mp4"></video></a></li> -->
    <!-- <a class="venobox" href="../video/Chinese-member.mp4" alt="ss">連結</a>     -->
</body>

</html>

