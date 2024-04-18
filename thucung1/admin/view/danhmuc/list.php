<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table display table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th colspan="1">ID</th>
              <th>Tên danh mục</th>
              <th>Chi tiết sản phẩm</th>
              <th style="text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listdanhmuc as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_danhmuc'] ?></td>
                <td><?= $item['ten_danhmuc'] ?></td>
                <td><a class="btn btn-primary" href="index.php?act=chitietdanhmuc&id=<?= $item['id_danhmuc'] ?>">Chi tiết</a></td>
                <td><center><a class="btn btn-primary" href="index.php?act=suadanhmuc&id=<?= $item['id_danhmuc'] ?>">Sửa</a>
                  <a class="btn btn-primary" href="index.php?act=xoadanhmuc&id=<?= $item['id_danhmuc'] ?>">Xóa</a>
                  </center>
                </td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Tên danh mục</th>
              <th>Chi tiết sản phẩm</th>
              <th style="text-align: center;">Chức năng</th>
            </tr>
          </tfoot>
        </table>
        <a class="btn btn-primary" href="index.php?act=themdanhmuc">Thêm mới</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->