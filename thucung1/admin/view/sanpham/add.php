<form method="POST" action="index.php?act=themsanpham" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="" class="form-label">Danh Mục</label>
   <select name="id_dm" >
    <?php
    foreach($listdanhmuc as $item){
    ?>
    <option value="<?php echo $item['id_danhmuc']?>"><?php echo $item['ten_danhmuc'] ?></option>
    <?php }?>
   </select>
  </div>  
  <div class="mb-3">
    <label for="" class="form-label">Màu sắc</label>
   <select name="id_dm" >
    <?php
    foreach($listmausac as $item){
    ?>
    <option value="<?php echo $item['id_mausac']?>"><?php echo $item['ten_mausac'] ?></option>
    <?php }?>
   </select>
  </div>  
  <div class="mb-3">
    <label for="" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="tensp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Giá thành</label>
    <input type="text" class="form-control" name="gia">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ảnh</label>
    <input required type="file" accept="image/*" class="form-control" name="hinhanh">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ghi Chú</label>
    <input type="text" class="form-control" name="ghichu">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Số Lượng</label>
    <input type="text" class="form-control" name="soluong"  >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nhà sản xuất</label>
    <input type="text" class="form-control" name="NSX" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Xuất xứ</label>
    <input type="text" class="form-control" name="xuatxu" >
  </div>
  <button type="submit" class="btn btn-primary" name="themsanpham">Thêm</button>
</form>