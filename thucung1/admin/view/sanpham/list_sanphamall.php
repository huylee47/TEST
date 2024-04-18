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
              <th>ID Sản Phẩm</th>
              <th>ID Danh mục</th>
              <th>Tên sản phẩm</th>
              <th>Ảnh sản phẩm</th>
              <th>Màu sắc</th>
              <th>Giá</th>
              <th  style="text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listSanPhamAll as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_sanpham'] ?></td>
                <td><?= $item['id_danhmuc'] ?></td>
                <td><?= $item['ten_sanpham'] ?></td>
                <td><img width="40" height="40" src="/test/thucung1/upload/<?php echo $item['img']?>"></img></td>
                <td ><?= mausac_id($item['id_mausac'])  ?></td>
                <td><?= $item['gia'] ?></td>
                <td><center><a class="btn btn-primary" href="index.php?act=chitietsanpham&id=<?= $item['id_sanpham'] ?>">Chi tiết</a>
                <a class="btn btn-primary" href="index.php?act=suasanpham&id=<?= $item['id_sanpham'] ?>">Sửa</a>
                 <a class="btn btn-primary" href="index.php?act=xoasanpham&id=<?= $item['id_sanpham'] ?>">Xóa</a>
                 <a class="btn btn-primary" href="index.php?act=themkhoanh&id=<?= $item['id_sanpham'] ?>">Kho ảnh</a>
                 </center></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-primary" href="index.php?act=themsanpham">Thêm sản phẩm</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->