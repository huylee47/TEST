<?php
if (is_array($mothoadon)) {
  extract($mothoadon);
}
?>
<form method="post" action="index.php?act=suatinhtrang">
  <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input type="text" class="form-control" value="<?= $id_hoadon ?>" disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tình Trạng</label>
    <select name="tinhtrang" id="" >
      <option value="1" <?php if ($mothoadon['tinhtrang'] == 1) echo "selected" ?>>Mới đặt </option>
      <option value="2" <?php if ($mothoadon['tinhtrang'] == 2) echo "selected" ?>> Đang xử lý</option>
      <option value="3" <?php if ($mothoadon['tinhtrang'] == 3) echo "selected" ?>> Đang giao</option>
      <option value="4" <?php if ($mothoadon['tinhtrang'] == 4) echo "selected" ?>> Đã giao</option>
      <option value="5" <?php if ($mothoadon['tinhtrang'] == 5) echo "selected" ?>> Đã hủy</option>



    </select>
  </div>

  <input type="hidden" name="id" value="<?= $mothoadon['id_hoadon'] ?>">
  <button type="submit" class="btn btn-primary" name="capnhat">Cập nhật</button>
</form>