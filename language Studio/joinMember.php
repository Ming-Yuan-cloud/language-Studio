<?php

require_once ("dbConnect.php");

// if(isset($_POST["btnOK"])) {
//     header("Location:login.php");
//     exit();
// }

// if(isset($_POST["OKbtn"])) {
//     $sql = <<<sqlCommand
//     insert into member set
//     m_UserName = '{$_POST["userName"]}',
//     m_passwd = '{$_POST["passWordtxt"]}',
//     m_Email = '{$_POST["Email"]}'
// sqlCommand;
//     mysqli_query($link,$sql);
//     var_dump($sql);
//     echo"ok";
//     // header("Location:login.php");
//     // exit();
// }

$txtUserName = $_POST["txtUserName"];
$txtPassword = $_POST["txtPassword"];
$Email = $_POST["Email"];


$query_insert ="insert into members (`m_UserName`,`m_passwd`,`m_Email`) values ('$txtUserName', '$txtPassword', '$Email')";
   
if(isset($_POST["btnOK"])){
//    echo"ok";

mysqli_query($link,$query_insert) ; 
$query_insert; 
//    header("Location:login.php");
//    exit();
}else{
    echo '<script type="text/javascript" >ERROR</script >';
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
<?php   
    require_once("navbar.php");
    ?>
<form id="form1" name="form1" method="post" action="">
<body class="backgroud">
    <div class="container_login ">
        <div class="d-flex  justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>新增會員</h3>
                    <div class="d-flex justify-content-end social-icon">
                    </div>
                    <div class="card-body">
					
                        <form id="form1" name="form1" method="post" action="login.php">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">帳號</span>
                                </div>
                                <input name="txtUserName"  id="txtUserName" type="text" class="form-control" placeholder="Username"  >
           
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >密碼</span>
                                </div>
                                <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password" type="passwd"  >
							</div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">信箱</span>
                                </div>
                                <input name="Email" id="Email" class="form-control" placeholder="abc@abc"  type="Email"  >
							</div>
							
                           
                           
                        </form>
                    </div> <div class="form-group">
                                <input type="submit"  name="btnOK" id="btnOK" class="btn float-right"></input>
                            </div>
                </div>
                
			</div>

        </div>
    </div>
    </form>
</body>

</html>