<?php
$actitive = "cart";
@include('header.php');
?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/br.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
	 <div class="container">
			  <div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Tên sản phẩm</th>
						        <th>Giá</th>
						        <th>Số lượng</th>
						        <th>Tổng tiền</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Gỏi cuốn </h3>
						        	<p>*Note: thêm nước chấm, không để hành</p>
						        </td>
						        
						        <td class="price">6.000vnd</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">6.000vnd</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Bún đậu mắm tôm 3 Phải</h3>
						        	<p>*Note: Thêm rau, nước chấm mắm chua.</p>
						        </td>
						        
						        <td class="price">65.000vnd</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">65.000vnds</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
		</div>

			
    	<div class="row justify-content-end">
				<!-- mã giảm giá -->
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    			<div class="cart-total mb-3">
    					<h3>Mã giảm giá</h3>
    					<p>Nhập mã giảm giá</p>
  				<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Mã giảm giá</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    			</div>
    		 	</div>
			
		<!--hết mã giảm giá -->

		<div class="col-lg-4 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
		<div class="cart-total mb-3">
          	<!-- <div class="col-md-6 order-md-last d-flex"> -->
            <form onsubmit="showMessageBox()" action="#" class="bg-white p-5 contact-form">
                    <h5 style=" text-align: center;">Thông tin đặt hàng</h5>
              <div class="form-group">
                <input id="name" type="text" class="form-control" placeholder="Họ và tên" required>
              </div>
              <div class="form-group">
                <input id="email" type="text" class="form-control" placeholder=" Email" required>
              </div>
              <div class="form-group">
                <input id="sdt" type="text" class="form-control" placeholder="Số điện thoại" required>
              </div>
              <div class="form-group">
                <textarea id="address" name=""  cols="30" rows="7" class="form-control" placeholder="Địa chỉ" required></textarea>
              </div>
              <div class="form-group">
                <!-- <input type="submit" value="Đăng kí" class="btn btn-primary py-3 px-5"> -->
                <button onsubmit="showMessageBox()" class="btn btn-primary py-3 px-5" type="submit" name="btnDatHang">Thanh toán</button>
    				<!-- <p><a href="checkout.php" class="btn btn-primary py-3 px-4">Thanh toán</a></p> -->
            			<script>
						    function showMessageBox() {
    						var message = "Đơn hàng hoàn tất thành công!";
    						alert(message);
                document.getElementById('name').value = '';
                document.getElementById('email').value = '';
                document.getElementById('sdt').value = '';
                var textarea = document.getElementById("address");
                    textarea.value = "";
                console.log(document.getElementById('address'));
							}
					    </script>
				</div>
            </form>
		 </div>
		</div>

		<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Giỏ hàng </h3>
    					<p class="d-flex">
    						<span>Tổng tiền</span>
    						<span>71.000vnd</span>
    					</p>
    					<p class="d-flex">
    						<span>Phí vận chuyển</span>
    						<span>25.000vnd</span>
    					</p>
    					<p class="d-flex">
    						<span>Mã giảm giá</span>
    						<span>-5.000vnd</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Tổng</span>
    						<span>66.000vnd</span>
    					</p>
						
    				</div>
				</div>
		</div>
          
          


    			<!-- <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Thông tin vận chuyển</h3>
    					<p>Nhập thông tin vận chuyển</p>
  				<form onsubmit="showMessageBox()" action="#" class="info">
	              <div class="form-group">
					  <input id ="name" type="text" class="form-control text-left px-3" placeholder="Họ tên khách hàng" required>
	              </div>
				  <div class="form-group">
	                <input id="email" type="text" class="form-control text-left px-3" placeholder="Gmail" required>
	              </div>
	              <div class="form-group">
	            
	                <input id="sdt" type="text" class="form-control text-left px-3" placeholder="Số điện thoại" required>
	              </div>
	              <div class="form-group">
	              
	                <input id="address" type="text" class="form-control text-left px-3" placeholder="Địa chỉ" required>
	              </div>
				  <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="3">
                                <label class="custom-control-label" for="httt-3">Ship COD</label>
                            </div>
                        </div>
	            </form>
    				</div>
					
    				 <p><a href="checkout.php" class="btn btn-primary py-3 px-4">Lưu</a></p> -->
					<!-- <script>
					function showMessageBox() {
    					alert("Đây là một thông báo từ JavaScript!");
							}
					</script> -->

					<!-- <script>alert('Đã lưu thông tin');</script> -->
					  
    			<!-- </div>  -->
    			
					<!-- <button onsubmit="showMessageBox()" class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt hàng</button>
    				
					<script>
						function showMessageBox() {
    						var message = "Hoàn tất đơn hàng";
    						alert(message);
               				document.getElementById('email').value = '';
                			document.getElementById('sdt').value = '';
							var textarea = document.getElementById("address");
                   			textarea.value = "";
                			console.log(document.getElementById('address'));
							}

					</script> -->
    			
    		<!-- </div> -->
		</div>
	</section>
			

	<?php
   @include('footer.php');
    ?>
  

  <!-- loader -->
  

  <!-- <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</php> -->