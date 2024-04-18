<?php
if(is_array($mottintuc)){
  extract($mottintuc);
}
?>
<label for="" class="form-label"> <h1>Sửa tin tức</h1></label>
<form method="POST" action="index.php?act=suatintuc" enctype="multipart/form-data">
<div class="mb-3">
    <label for="" class="form-label">ID tin tức</label>
    <input type="text" class="form-control" value="<?= $mottintuc['id_tintuc'] ?>" disable>
  </div>
  <input type="hidden" name="id" value="<?=$mottintuc['id_tintuc'] ?>">
  <div class="mb-3">
    <label for="" class="form-label">Tiêu đề</label>
    <input type="text" class="form-control" name="noidung" value="<?= $mottintuc['tieude'] ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nội dung</label>
    <input type="text" class="form-control" name="noidung" value="<?= $mottintuc['noidung'] ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ảnh</label>
    <input required type="file" accept="image/*" class="form-control" name="hinhanh">
  </div>
  <button type="submit" class="btn btn-primary" name="suatintuc">Sửa</button>
</form>