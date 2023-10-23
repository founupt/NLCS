
<?php
$actitive = "contact";
@include('header.php');

?>
   <!-- END nav -->
   <?php
		
		if (isset($_POST["dangky"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			    $KH_TEN = $_POST["KH_TEN"];
			    $KH_SDT = $_POST["KH_SDT"];
			    $KH_EMAIL = $_POST["KH_EMAIL"];
  			  $KH_USERNAME = $_POST["KH_USERNAME"];
  			  $KH_PASS = $_POST["KH_PASS"];
          $KH_DIACHI= $_POST["KH_DIACHI"];
			    

  			//Kiểm tra điều kiện bắt buộc đối với các field KHông được bỏ trống
			  if ($KH_USERNAME == "" || $KH_PASS == ""||$KH_DIACHI == "" || $KH_TEN == "" || $KH_SDT == ""|| $KH_EMAIL == "" ) {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
				//    if ($KH_PASSWORD !== $confirm_password) {
				// 	echo "Mật khẩu và xác nhận mật khẩu không trùng khớp";
				// }
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
          $sql = "SELECT KH_PASS FROM khachhang WHERE KH_USERNAME = '".$KH_USERNAME."'";
					$kt=mysqli_query($conn, $sql);
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO khachhang(
							KH_USERNAME,
							KH_PASS,
							KH_DIACHI,
              KH_TEN,
              KH_SDT,
							KH_EMAIL
						) VALUES (
							'$KH_USERNAME',
							'$KH_PASS',
							'$KH_DIACHI',
              '$KH_TEN',
              '$KH_SDT',
							'$KH_EMAIL'
						)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
                        if (mysqli_query($conn, $sql)) {
							              echo '<script>alert("chúc mừng bạn đăng ký thành công ");
                            alert("Đăng ký thành công! Vui lòng đăng nhập lại!");
                            location="login.php";</script>'; 
							
                            exit();
                        } else {
                            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        
					}
									    
					
			  }
	}
	?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/br.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>ĐĂNG KÍ</span></p>
            <h1 class="mb-0 bread">ĐĂNG KÍ THÀNH VIÊN</h1>
          </div>
        </div>
      </div>
    </div>
   
    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<!-- <div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div> -->
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form onsubmit="showMessageBox()" action="#" class="bg-white p-5 contact-form">
                    <h1 style=" text-align: center;">ĐĂNG KÍ</h1>
              <div class="form-group">
                <input id="name" name="KH_TEN" type="text" class="form-control" placeholder="Họ và tên" required>
              </div>
              <div class="form-group">
                <input id="email" name="KH_EMAIL" type="text" class="form-control" placeholder=" Email" required>
              </div>
              <div class="form-group">
                <input id="sdt" type="text" name="KH_SDT" class="form-control" placeholder="Số điện thoại" required>
              </div>
              <div class="form-group">
                <input id="username" type="text" name="KH_USERNAME" class="form-control" placeholder="Tên đăng nhập" required>
              </div>
              <div class="form-group">
                <input id="password" type="text" name="KH_PASS" class="form-control" placeholder="Mật khẩu" required>
              </div>
              <div class="form-group">
                <textarea id="address" name="KH_DIACHI"  cols="30" rows="7" class="form-control" placeholder="Địa chỉ" required></textarea>
              </div>
              <div class="form-group">
                <!-- <input type="submit" value="Đăng kí" class="btn btn-primary py-3 px-5"> -->
                <button onsubmit="showMessageBox()" class="btn btn-primary py-3 px-5" type="submit" name="btnDatHang">Đăng kí</button>
    				<!-- <p><a href="checkout.php" class="btn btn-primary py-3 px-4">Thanh toán</a></p> -->
          
            <script>
						    function showMessageBox() {
    						var message = "Đã đăng kí thành công!";
    						alert(message);
                document.getElementById('name').value = '';
                document.getElementById('email').value = '';
                document.getElementById('sdt').value = '';
                document.getElementById('username').value = '';
                document.getElementById('password').value = '';
                var textarea = document.getElementById("address");
                    textarea.value = "";
                console.log(document.getElementById('address'));
             
							}
              
					    </script>
            
              </div>
            </form>
          </div>

          
        </div>
        <!-- <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></p> -->
<!-- 
        <div class="col-md-9 d-flex">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.841518442039!2d105.76804037475408!3d10.029933690077037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1695122208256!5m2!1svi!2s" width="6300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>  -->
      </div>
    </section>

<?php
   @include('footer.php');
?>