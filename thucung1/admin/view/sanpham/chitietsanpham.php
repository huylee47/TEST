<?php
if(is_array($motsanpham)){
  extract($motsanpham);
}

?>
<label for="" class="form-label"> <h1>Chi tiết sản phẩm</h1></label>
<form method="POST" action="index.php?act=listsanpham" enctype="multipart/form-data">
<div class="mb-3">
    <label for="" class="form-label">ID sản phẩm</label>
    <input type="text" class="form-control" value="<?= $motsanpham['id_sanpham'] ?>" disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tên danh mục</label>
    <input type="text" class="form-control" name="id_dm" value="<?= $ten_danhmuc ?>" disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="tensp" value="<?= $motsanpham['ten_sanpham'] ?>" disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Giá thành</label>
    <input type="text" class="form-control" name="gia" value="<?= $motsanpham['gia'] ?> " disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ảnh</label>
    <img width="100" height="100" src="/test/thucung1/upload/<?php echo $motsanpham['img'] ?>" alt="">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Ghi Chú</label>
    <input type="text" class="form-control" name="ghichu" value="<?= $motsanpham['ghichu'] ?> " disabled>
  </div>
<?php

?>
 <div class="mb-3">
    <label for="" class="form-label">Số Lượng</label>
    <input type="text" class="form-control" name="soluong" value="<?= $motsanpham['so_luong'] ?> " disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nhà sản xuất</label>
    <input type="text" class="form-control" name="NSX" value="<?= $motsanpham['nha_san_xuat'] ?> " disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Xuất xứ</label>
    <input type="text" class="form-control" name="xuatxu" value="<?= $motsanpham['xuatxu'] ?> " disabled>
  </div>
  <input type="hidden" name="id" value="<?= $motsanpham['so_luong'] ?>">
  <input type="hidden" name="id" value="<?= $motsanpham['nha_san_xuat'] ?>">
  <input type="hidden" name="id" value="<?= $motsanpham['xuatxu'] ?>"> 

  <input type="hidden" name="id" value="<?= $motsanpham['id_sanpham'] ?>">
  <input type="hidden" name="id" value="<?= $motsanpham['ten_sanpham'] ?>">
  <input type="hidden" name="id" value="<?= $motsanpham['gia'] ?>">
  <input type="hidden" name="id" value="<?= $motsanpham['img'] ?>">
  <input type="hidden" name="id" value="<?= $motsanpham['ghichu'] ?>">


  <button type="submit" class="btn btn-primary" name="">Danh sách sản phẩm</button>
</form>