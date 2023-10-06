<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
    @include('../classes/brand.php');
?>
<?php
    @include('../classes/type.php');
?>
<?php
    @include('../classes/product.php');
?>

<?php 
    $pd = new product();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $insert_product = $pd->insert_product($_POST,$_FILES);
    }   
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm bài viết</h2>
        <div class="block">
        <?php 
                if(isset($insert_product)){
                    echo $insert_product;
                }
                ?>               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tiêu đề</label>
                    </td>
                    <td>
                        <input type="text" name = "BV_TIEUDE" placeholder="Nhập tiêu đề " class="medium" />
                    </td>
                </tr>
				<!-- <tr>
                    <td>
                        <label>Loại món ăn</label>
                    </td>
                    <td>
                        <select id="select" name="LMA_MA">
                            <option>Chọn mã loại</option>
                            
                        </select>
                    </td>
                </tr> -->
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Nội dung bài viết</label>
                    </td>
                    <td>
                        <textarea name="BV_NOIDUNG" class="tinymce"></textarea>
                    </td>
                </tr>
				<!-- <tr>
                    <td>
                        <label>Giá gốc</label>
                    </td>
                    <td>
                        <input type="text" name="MA_GIA" placeholder="Nhập giá món" class="medium" />
                    </td>
                </tr>
             -->
                <tr>
                    <td>
                        <label>Hình ảnh món ăn</label>
                    </td>
                    <td>
                        <input type="file" name="BV_HINHANH"/>
                    </td>
                </tr>
				
                <!-- <tr>
                    <td>
                        <label>Màu sản phẩm</label>
                    </td>
                    <td>
                        <input type="text" name="SP_MAU" placeholder="Nhập màu sản phẩm" class="medium" />
                    </td>
                </tr> -->

				<tr>
                    <td>
                        <label>Tình trạng món ăn</label>
                    </td>
                    <td>
                        <select id="select" name="MA_TINHTRANG">
                            <option>Chọn trạng thái</option>
                            <option value="0">Upload </option>
                            <option value="1">Nháp</option>
                        </select>
                    </td>
                </tr>
                
                <!-- <tr>
                    <td>
                        <label>Tình trạng sản phẩm</label>
                    </td>
                    <td>
                        <select id="select" name="SP_TINHTRANG">
                            <option>Chọn tình trạng</option>
                            <option value="0">Còn hàng</option>
                            <option value="1">Hết hàng</option>
                        </select>
                    </td>
                </tr> -->

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


