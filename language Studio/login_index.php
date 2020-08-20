<?php
require_once ("dbConnect.php");
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "db_SchoolMember";
// echo'ok';
//連線資料庫
$link = mysqli_connect($serverName, $userName, $password);
mysqli_select_db($link, $databaseName);

$sql = "select `cID`, `cClass`, `cTitle`, `cImage` from class ";
$result = mysqli_query($link, $sql) or die;

if (isset($_COOKIE["userName"])){
    $sUserName = $_COOKIE["userName"];
}else{
    $sUserName = "Guest";
    
}
// 動態分頁
$data_nums = mysqli_num_rows($result); //統計筆數
$per = 6; //每頁數量
$pages = ceil($data_nums/$per);

if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
    $page=1; //則在此設定起始頁數
} else {
    $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
}

$start = ($page-1)*$per; //每一頁開始的資料序號
$result = mysqli_query($link,$sql.' LIMIT '.$start.', '.$per) or die("Error");

// 是否有權限觀看

//檢測資料庫是否有對應的username和Chinese課程和English課程的sql
$sqll = "select `m_Chinese`,`m_English` from members where m_UserName = '$sUserName'";
$rr = mysqli_query($link, $sqll) or die;//執行sql 
$rows = mysqli_fetch_row($rr);//返回一個字串 0或1
// $Purchase_Chinese=$rows[0];
// $Purchase_English=$rows[1];
// var_dump($rr);

// if($Purchase_Chinese == "0" && $Purchase_English =="0"){
//     $Purchase_Chinese=0;
//     $Purchase_English=0;
//     // echo"不可以看中文、不可以看英文";
// }elseif($rows[0] == "1" && $rows[1] =="0"){
//     // echo"可以看中文、不可以看英文";
//     $Purchase_Chinese=1;
//     $Purchase_English=0;
// }elseif($rows[0] == "0" && $rows[1] =="1"){
//     // echo"不可以看中文、可以看英文";
//     $Purchase_Chinese=0;
//     $Purchase_English=1;
// }elseif($rows[0] == "1" && $rows[1] =="1"){
//     // echo"可以看中文、可以看英文";
//     $Purchase_Chinese=1;
//     $Purchase_English=1;
// }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/myCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet">
    <script src="../_js/bootstrap.min.js"></script>
    <script src="../_js/jquery.min.js"></script>
    <script src="../_js/popper.min.js"></script>

</head>

 <body class="backgroud">
    <!-- 10.導覽列 -->
<?php   
    require_once("navbar.php");
    ?>

<div class="Sidebar ml-5">
<h3 class="mt-5">會員系統首頁</h3>
<p class="text-secondary">
<?php echo"Welcome!".$sUserName ?>
</p>
<form id="form1" name="form1" method="post" action="login.php">
                    <div class="">
                           <?php if ($sUserName == "Guest"):?>
                           <td><a href="login.php">登入</a> 
                           <?php else: ?>
                           <td><a href="login.php?logout=1">登出</a> 
                           <?php endif; ?>
                           | <a href="secret.php">我的課程</a></td>
                               </div>
                    </div>
</form>
</div>
<div class="Content" >
    <h3 >目前線上課程</h3>
    <!-- 篩選紐 -->
    <button type="button" class="btn btn-secondary">全選</button>
    <button type="button" class="btn btn-outline-secondary">藝術</button>
    <button type="button" class="btn btn-outline-secondary">英文</button>
    <!-- 課程卡 row1-->
    
    <div class="row">
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
     <div class="col-5">
     <div class="card mt-2 ml-5 d-flex " style="width: 300px; height: 300px">
     <img class="Class-content-img" src="../img/class/<?= $row['cImage']?>" alt="Card image cap">
    <h5 class=""><?= $row['cTitle']?></h5> 
    <button class="btn btn-outline-primary">
    
    <?php if($rows['m_Chinese']==0) {
      echo('<a class="venobox" href="../video/Chinese-introduction.mp4" alt="ss">尚未購買，點選影片試閱</a>');} 
      
      else{
          echo('<a class="venobox" href="../video/Chinese-member.mp4" alt="ss">購買已解鎖，點選連結看完整視頻</a>');
        }
     ?>
   
    
    </button>
    
  </div>
   </div>
    <?php endwhile ?>
    </div>
<!-- 換頁按鈕 -->


<!-- 分頁頁碼 -->
<p class="mt-5">
<?php 
echo '共 '.$data_nums.' 筆-在第 '.$page.' 頁-共 '.$pages.' 頁';
?>
</p>

<?php
   
    for( $i=1 ; $i<=$pages ; $i++ ) {
        ?>
 <button type="button" class="btn btn-outline-secondary ">      
 <?php  
echo "<a href=?page=".$i.">".$i."</a> ";
        }
 ?>
</button>


<!-- 清除浮動 -->
<div style='clear:both;'></div>


</body>