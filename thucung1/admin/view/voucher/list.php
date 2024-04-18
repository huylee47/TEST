<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Voucher</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách voucher</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên voucher</th>
              <th>Mã áp dụng</th>
              <th>Giá giảm</th>
              <th>Ngày bắt đầu</th>
              <th>Ngày kết thúc</th>
              <th style="text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listvoucher as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_voucher'] ?></td>
                <td><?= $item['ten_voucher'] ?></td>
                <td><?= $item['ma_voucher'] ?></td>
                <td><?= $item['giagiam'] ?>%</td>
                <td><?= $item['ngaybatdau'] ?></td>
                <td><?= $item['ngayketthuc'] ?></td>
                <td><center><a class="btn btn-primary" href="index.php?act=suavoucher&id=<?= $item['id_voucher'] ?>">Sửa</a>
                 <a class="btn btn-primary" href="index.php?act=xoavoucher&id=<?= $item['id_voucher'] ?>">Xóa</a></center></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-primary" href="index.php?act=themvoucher">Thêm mới</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->