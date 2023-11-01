<?php
    @include('header.php');
    error_reporting(0);

    if (isset($_POST['submit'])) {
        $ac_username = $_POST['ac_username'];
        $ac_password =  $_POST['ac_password'];
    }
?>
<?php
$servername = "localhost"; // Thay bằng tên máy chủ CSDL của bạn
$username = "root"; // Thay bằng tên người dùng CSDL của bạn
$password = ""; // Thay bằng mật khẩu CSDL của bạn
$database = "food"; // Thay bằng tên CSDL của bạn

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Kết nối đến CSDL thất bại: " . mysqli_connect_error());
}
?>

<div class="hero-wrap hero-bread" style="background-image: url('images/br.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>ĐĂNG NHẬP</span></p>
            <h1 class="mb-0 bread"> KHÁCH HÀNG THÀNH VIÊN</h1>
          </div>
        </div>
      </div>
</div> 

<section class="ftco-section contact-section bg-light">
<div class="row block-9">
    <div class="col-md-6 order-md-last d-flex">
    <form action="index.php" method="post" class="bg-white p-5 contact-form">
    <h1 style=" text-align: center;">ĐĂNG NHẬP</h1>
            <div class="form-group">
                <input type="text" class="form-control" name="ac_username" value="<?php echo $ac_username; ?>" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="ac_password" value="<?php echo $ac_password; ?>" required>
            </div>
            <div class="form-group">
                <button name="submit" class="btn btn-primary py-3 px-5" type="submit" name="login" >Login</button>
            </div>
            <p class="login-register-text"><a href="forgot.php">Forgot your password?</a></p>
        </form>
    </div>
</div>

<?php
@include('footer.php');
?>