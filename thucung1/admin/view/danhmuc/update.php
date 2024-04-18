<?php
if(is_array($motdanhmuc)){
    extract($motdanhmuc);
}
?>
<form method="post" action="index.php?act=suadanhmuc">
<div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input type="text" class="form-control"  value="<?=$id_danhmuc?>" disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tên danh mục</label>
    <input type="text" class="form-control" id="" name="ten" value="<?=$ten_danhmuc?>">
  </div>
  <input type="hidden" name="id" value="<?= $motdanhmuc['id_danhmuc'] ?>">
  <button type="submit" class="btn btn-primary" name="capnhat">Cập nhật</button>
</form>