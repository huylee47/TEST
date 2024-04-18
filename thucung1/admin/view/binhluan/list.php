<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Bình Luận</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID bình luận</th>
              <th>ID sản phẩm</th>
              <th>ID Tài Khoản</th>
              <th>Nội dung</th>
              <th>Trạng Thái</th>
              <th  style="text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listbinhluan as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_binhluan'] ?></td>
                <td><?= get_ten_sanpham_by_id($item['id_sanpham']);?></td>
                <td><?= $item['id_taikhoan'] ?></td>
                <td><?= $item['noidung'] ?></td>
                <td><?=  $item['trangthai'] == 1  ? "Hiện"  : "Ẩn" ?></td>
                <td><center><a class="btn btn-primary" href="index.php?act=hienbinhluan&id=<?= $item['id_binhluan'] ?>">Hiện</a>
                <a class="btn btn-primary" href="index.php?act=anbinhluan&id=<?= $item['id_binhluan'] ?>">Ẩn</a>
                 <a class="btn btn-primary" href="index.php?act=xoabinhluan&id=<?= $item['id_binhluan'] ?>">Xóa</a></center></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->