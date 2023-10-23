
<head>
    <title>ĐĂNG NHẬP</title>


    <link href="login.css" rel="stylesheet" type="text/css" media="all" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
    <!--header start here-->
    <?php
  require_once("../connect.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
    
        if (checkLogin($conn, $user, $pass)) {
            $_SESSION["user"] = $user;
            header('Location: ../index.php');
        } else {
            echo "Sai username/pass";
        }
    }
    function checkLogin($conn, $user, $pass) {
        $sql = "SELECT kh_password FROM khachhang WHERE kh_username = '".$user."'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["kh_password"] == $pass) {
                return true;  // Đăng nhập thành công
            } else {
                return false; // Sai mật khẩu
            }
        } else {
            return false; // Sai tài khoản
        }
    }
    ?>
   
    <div class="header">
       
        <div class="header-main">
            <br><br>
            <h3>ĐĂNG NHẬP</h3><br><br>
            <div class="header-bottom">
                <div class="header-right w3agile">
                    <div class="header-left-bottom agileinfo">
                        <form action="login.php" method="post">
                            <p>Username:</p>
                            <input type="text" id="user" name="user" placeholder="Nhập tên đăng nhập tại đây " />
                            <p>Password:</p>
                            <input type="password" id="pass" name="pass" placeholder="Nhập mật khẩu tại đây" />
                            <div class="col-md-12">      
                                <button type="submit"  class="btn btn-primary py-3 px-5"  name="login">Đăng nhập</button>
                            </div>
                            <p>Bạn chưa có tài khoản? <a href="dangky.php">Đăng ký tại đây</a></p>
                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>
    </div>
   
</body>

