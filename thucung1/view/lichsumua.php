<!-- Begin Page Content -->
<div class="container">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách hoá đơn</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID hóa đơn</th>
              <th>Địa chỉ</th>
              <th>Ngày mua</th>
              <th>Phương thức thanh toán</th>
              <th>Tổng tiền</th>
              <th>Trạng thái</th>
              <th>Chi tiết đơn hàng</th>

            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($danhsachhoadon as $item) {
            ?> 
              <tr>
              <td><?= $item['id_hoadon'] ?></td>
                <td><?= $item['diachi'] ?></td>
                <td><?= $item['ngaytao'] ?></td>
                <td><?= $item['phuongthuc_thanhtoan'] ==1 ? "Chuyển khoản" : "Tiền mặt"  ?></td>
                <td><?= $item['tong_tien'] ?></td>
                <td><?= $item['tinhtrang'] ==  1 ? "Mới đặt" : ($item['tinhtrang'] ==  2 ? "Đang xử lý" : ($item['tinhtrang'] ==  3 ? "Đang giao" : ($item['tinhtrang'] ==  4 ? "Đã giao" : "Đã hủy"))); ?></td>
                <td><a class="btn btn-primary" href="index.php?act=chitietdonhang&id=<?= $item['id_hoadon'] ?>">Xem chi tiết</a></td>
              </tr>
            <?php
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->