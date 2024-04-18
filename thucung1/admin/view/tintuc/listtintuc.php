<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tin tức</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Tin tức</th>
              <th>Tiêu đề</th>
              <th>Nội dung</th>
              <th>Ảnh</th>
              <th>Ngày tạo</th>
              <th>Id người tạo</th>
              <th style="text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listTinTucAll as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_tintuc'] ?></td>
                <td><?= $item['tieude'] ?></td>
                <td><?= $item['noidung'] ?></td>
                <td><img width="50" height="50" src="/test/thucung1/upload/<?php echo $item['img']?>"></img></td>
                <td><?= $item['ngaytao'] ?></td>
                <td><?= $item['id_nguoitao']?></td>
                <td><center><a class="btn btn-primary" href="index.php?act=suatintuc&id=<?= $item['id_tintuc'] ?>">Sửa</a>
                <a class="btn btn-primary" href="index.php?act=xoatintuc&id=<?= $item['id_tintuc'] ?>">Xóa</a></center></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-primary" href="index.php?act=themtintuc">Thêm tin tức</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->