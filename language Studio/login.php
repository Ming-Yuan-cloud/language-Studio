<?php

require_once ("dbConnect.php");

$txtUserName = $_POST["txtUserName"];
$txtPassword = $_POST["txtPassword"];

$sql = "select * from members where m_UserName = '$txtUserName' and m_passwd='$txtPassword'";//檢測資料庫是否有對應的username和password的sql
$result = mysqli_query($link, $sql) or die;//執行sql 
$rows = mysqli_num_rows($result );//返回一個數值

if(isset($_POST["btnOK"])){
       
      if($rows==0 || $rows>1){
           echo '<script>'.'alert("使用者名稱或密碼錯誤")'.'</script>' ;
            } else{
         header("Location:login_index.php");  
         $sUserName = $_POST["txtUserName"];
	if (trim($sUserName) != "")
	{
		setcookie("userName", $sUserName);
		if (isset($_COOKIE["lastPage"]))
		  header(sprintf("Location: %s", $_COOKIE["lastPage"]));
		else
		   header("Location: login_index.php");
		exit();
	}
    }
}
// 登出
if (isset($_GET["logout"]))
{
	setcookie("userName", "Guest", time() - 3600);
	header("Location: index.php");
	exit();
}
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

<form id="form1" name="form1" method="post" action="login.php">
<body class="backgroud">
    <!-- 10.導覽列 -->
<?php   
    require_once("navbar.php");
    ?>
    <div class="container_login ">
        <div class="d-flex  justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>登入系統</h3>
                    <?php
           if($rows>1){echo "使用者名稱或密碼錯誤";}
             if($rows==0){echo "";}
            ?>
                    <div class="d-flex justify-content-end social-icon">
                    </div>
                    <div class="card-body">
					
                        <form id="form1" name="form1" method="post" action="">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">帳號</span>
                                </div>
                                <input name="txtUserName"  id="txtUserName" type="text" class="form-control" placeholder="Username" id="username" >
           
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">密碼</span>
                                </div>
                                <input name="txtPassword" id="txtPassword" class="form-control" placeholder="Password" type="password"  id="passwd"  >
							</div>
							
                            <!-- <div class="row align-items-center remember"  name="rememberme" type="checkbox" id="rememberme" value="true" checked>
                                <input type="checkbox">記住我</input>
                            </div>
                            <input name="btnReset" id="btnReset"  type="reset" value="重設" /> -->
                            <!-- <input name="btnHome" id="btnHome"  type="submit" value="回首頁" /> -->
                           <div class="mt-5"></div>
                            <div class="form-group">
                                <input type="submit" value="Login" name="btnOK" id="btnOK" class="btn float-right login_btn"></input>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
					<div class="d-flex justify-content-center links"><a href="joinMember.php">馬上申請會員</a></div>
                </div>
			</div>

        </div>
    </div>
    </form>
</body>

</html>




