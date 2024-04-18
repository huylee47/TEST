<?php
if(is_array($motsanpham)){
  extract($motsanpham);
}
?>
<label for="" class="form-label"> <h1>Sửa sản phẩm</h1></label>
<form method="POST" action="index.php?act=suasanpham" enctype="multipart/form-data">
<div class="mb-3">
    <label for="" class="form-label">ID sản phẩm</label>
    <input type="text" class="form-control" value="<?= $motsanpham['id_sanpham'] ?>" disabled>
  </div>
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
   <select name="mausac" >
    <?php
    foreach($listmausac as $item){
    ?>
    <option value="<?php echo $item['id_mausac']?>"><?php echo $item['ten_mausac'] ?></option>
    <?php }?>
   </select>
  </div>  
  <div class="mb-3">
    <label for="" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="tensp" value="<?= $motsanpham['ten_sanpham'] ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Giá thành</label>
    <input type="text" class="form-control" name="gia" value="<?= $motsanpham['gia'] ?> " >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ảnh</label>
    <input required type="file" accept="image/*" class="form-control" name="hinhanh"  >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ghi Chú</label>
    <input type="text" class="form-control" name="ghichu" value="<?= $motsanpham['ghichu'] ?> ">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Số Lượng</label>
    <input type="text" class="form-control" name="soluong" value="<?= $motsanpham['so_luong'] ?> " >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nhà sản xuất</label>
    <input type="text" class="form-control" name="NSX"  value="<?= $motsanpham['nha_san_xuat'] ?> ">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Xuất xứ</label>
    <input type="text" class="form-control" name="xuatxu" value="<?= $motsanpham['xuatxu'] ?> " >
  </div>
  <input type="hidden" name="id" value="<?= $motsanpham['id_sanpham'] ?>">
  <button type="submit" class="btn btn-primary" name="suasanpham">Thêm</button>
</form>