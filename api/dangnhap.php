<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bài môn Cloud Computer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/44a18804aa.js" crossorigin="anonymous"></script>	 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	<script src="js/darkmode.js" defer></script>
    <script src="js/dangnhap.js" defer></script>
	<link rel="stylesheet" href="css/dangnhap.css" defer>
</head>

<body>
    <?php
        include "ketnoi.php";
        session_start();
        if(isset($_SESSION['mySession']))
        {
            header("location: http://localhost/181A020029/index.php");
        }

        if (isset($_POST['dangnhap']))
        {
            $username = $_POST['tendangnhap'];
            $password = $_POST['passdangnhap'];

            $sql = "SELECT Email, DienThoai, pass 
                    FROM khachhang
                    WHERE (Email    = '$username' 
                       OR DienThoai = '$username')
                      AND pass      = '$password'";
            $result = mysqli_query( $conn , $sql );

            if (mysqli_num_rows($result) == 1)
            {
                $_SESSION['mySession'] = $username;
                header("location: http://localhost/181A020029/index.php");
            }
            else
            {
                echo '<script>alert("Sai thông tin đăng nhập")</script>';
            }
        }

        if (isset($_POST['dangky']))
        {
            $maildk = $_POST['tendangky'];
            $passdk = $_POST['passdangky'];

            $sql = "SELECT Email, pass 
                    FROM khachhang
                    WHERE Email = '$maildk'";
            $result = mysqli_query( $conn , $sql );

            if (mysqli_num_rows($result) == 1)
            {
                echo '<script>alert("Địa chỉ mail đã tồn tại trên hệ thống")</script>';
            }
            else
            {
                $sql = "INSERT INTO khachhang (Email, pass)
                        VALUES ('$maildk', '$passdk')";
                mysqli_query( $conn , $sql );
                echo '<script>alert("Tạo tài khoản thành công ^^")</script>';
            }
        }
    ?>

    <div class="benngoai">
        <div class="khúctrên">
            <a href="/181A020029/index.php" class="logo"> 
                <img src="img/31.png">
            </a>
            
            <div class="DarkMode">
                <a class="☀️ đang ✔️"><span class="material-icons">brightness_7</span></a>
                <a class="🌙 đang"><span class="material-icons">brightness_4</span></a>
            </div>
        </div>

        <div class="khung">
            <form action="dangnhap.php" method="post">
                <div class="bentrong dangnhap">
                    <h3>Đăng nhập vào tài khoản của bạn</h3>
                    <div class="chỗnhập">
                        <p>Email hoặc số điện thoại</p>
                        <div class="box">
                            <input class="chữ" type="text" name="tendangnhap">
                        </div>
                        <div class="pass">
                            <p>Mật khẩu</p>
                            <a href="#" class="linkdangky">Chưa có tài khoản?</a>
                        </div>
                        <div class="box">
                            <input class="chữ" type="password" name="passdangnhap">
                        </div>
                    </div>
                    <div class="nhớ">
                        <input type="checkbox" checked><span class="material-icons-round">done</span><p>Duy trì đăng nhập</p>
                    </div>
                    <button type="submit" name="dangnhap">Tiếp theo</button>
                </div>
            </form>
            <form action="dangnhap.php" method="post">
                <div class="bentrong dangky">
                    <h3>Đăng ký một tài khoản mới</h3>
                    <div class="chỗnhập">
                        <p>Email của bạn</p>
                        <div class="box">
                            <input class="chữ" type="email" name="tendangky">
                        </div>
                        <div class="pass">
                            <p>Mật khẩu</p>
                            <a href="#" class="linkdangnhap">Đã có tài khoản?</a>
                        </div>
                        <div class="box">
                            <input class="chữ" type="password" name="passdangky">
                        </div>
                    </div>
                    <div class="nhớ">
                        <input type="checkbox" checked><span class="material-icons-round">done</span><p>Chúc may mắn</p>
                    </div>
                    <button type="submit" name="dangky">Tiếp theo</button>
                </div>
            </form>
        </div>    
    </div>

    <div class="footer">
        <div class="f2">
            <img src="/181A020029/img/37.png" id="img37">
        </div>
    </div>
</body>
</html>