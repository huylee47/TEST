<form method="POST" action="index.php?act=themtintuc" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="" class="form-label">Tin tức</label>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tiêu đề</label>
    <input type="text" class="form-control" name="tieude">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nội dung</label>
    <input type="text" class="form-control" name="noidung">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ảnh</label>
    <input required type="file" accept="image/*" class="form-control" name="hinhanh">
  </div>
  <input type="hidden" name="id_nguoitao" value="<?= $_SESSION['user']['id_taikhoan'] ?>">
  <button type="submit" class="btn btn-primary" name="themtintuc">Thêm</button>
</form>