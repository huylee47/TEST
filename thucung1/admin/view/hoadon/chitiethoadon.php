<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID chi tiết hóa đơn</th>
              <th>ID sản phẩm</th>
              <th>ID hóa đơn</th>
              <th>Tên sản phẩm</th>
              <th>Hình ảnh</th>
              <th>giá</th>
              <th>Số lượng</th>

            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listchitiethoadon as $key => $item) {
              require_once "model/sanpham.php";


            ?>
              <tr>
                <td><?= $item['id_cthd'] ?></td>
                <td><?= $item['id_sanpham'] ?></td>
                <td><?= $item['id_hoadon'] ?></td>
                <td><?= get_ten_sanpham_by_id($item['id_sanpham']);?></td>
                <td><img width="50" height="50" src="/test/thucung1/upload/<?= get_anh_sanpham_by_id($item['id_sanpham']);?>"></img></td>
                <td><?= $item['gia'] ?></td>
                <td><?= $item['so_luong'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-primary" href="index.php?act=listhoadon">Hóa đơn</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->