<?php
$actitive = "update";
@include('header.php');
?>

<div class="container">
    <h2>Đăng bài mới</h2>
    <form action="submit_post.php" method="POST">
      <label for="image">Chọn ảnh :</label>
      <input type="file" id="image" name="image" accept="image/*" required>
      <button type="submit">Upload ảnh</button>
      <label for="title">Tiêu đề:</label>
      <input type="text" id="title" name="title" required>
      <label for="content">Nội dung:</label>
      <textarea id="content" name="content" rows="4" required></textarea>
      <button type="submit">Đăng bài</button>
    </form>
  </div>


  <?php
   @include('footer.php');
   ?>