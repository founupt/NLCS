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
    @include_once('../helpers/format.php');
?>
<?php
	$pd = new product();
	if (isset($_GET['productid'])) {
        $id = $_GET['productid'];
		$delete_pro = $pd -> delete_product($id);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách bài đăng</h2>
        <div class="block">  
			<?php
			if(isset($delete_pro)){
				echo $delete_pro;
			}
			?>
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Mã bài đăng</th>
					<th>Tiêu đề</th>
					<th>Nội dung bài review</th>
					<th>Hình ảnh bài viết</th>
					<!-- <th>Mã thương hiệu sản phẩm</th>
					<th>Mô tả sản phẩm</th>  -->
					<!-- <th>Màu sản phẩm</th> -->
					<th>Trạng thái món ăn</th>
					<!-- <th>Tình trạng sản phẩm</th> -->
					<th>Chỉnh sửa sản phẩm</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$pdlist = $pd -> show_product();
				if($pdlist){
					$i = 0;
					while($result = $pdlist ->fetch_assoc()){
						$i++;
			?>
				<tr class="odd gradeX">
					<td><?php echo $i?></td>
					<td><?php echo $result['BV_TIEUDE']?></td>
					<td><?php echo $result['BV_MOTA']?></td>
                    <td><?php echo $result['BV_NOIDUNG']?></td>
					<td><img src="../images/<?php echo $result['BV_HINHANH']?>" width="80px"></td>
					<td><?php 
						if($result['BV_TINHTRANG'] == 0){
							echo 'Duyệt';
						}else{
							echo 'Không duyệt';
						}
					?></td>
					<td><a href="productedit.php?productid=<?php echo $result['BV_MA'] ?>">Edit</a> || 
					<a onclick =  "return confirm ('Bạn có chắc muốn xóa không???')" href="?productid=<?php echo $result['MA_MA'] ?>">Delete</a></td>
				</tr>
			<?php
				}
			}
			?>
			</tbody>
		</table>

       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
