<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tài Khoản</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách tài khoản admin</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTableadmin" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tài khoản</th>
              <th>Tên tài khoản</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Trạng thái tài khoản</th>
            </tr>
          </thead>
          <tbody>
            <?php
          foreach ($listaccountadmin as $key => $item) {
            ?>
              <tr>
                <input type="hidden" name="quyen">
                <td><?= $item['id_taikhoan'] ?></td>
                <td><?= $item['user'] ?></td>
                <td><?= $item['ten'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['SDT'] ?></td>
                <td ><?= ($item['quyen'] == 1)  ? "Admin" : (($item['quyen'] == 0) ? "User" : "Bị Khoá" )?></td>
                <!-- `(a ? b : c) ? d : e` -->
              </tr>
            <?php } ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách tài khoản người dùng</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tài khoản</th>
              <th>Tên tài khoản</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Trạng thái tài khoản</th>
              <th style="text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
          foreach ($listaccount as $key => $item) {
            ?>
              <tr>
                <input type="hidden" name="quyen">
                <td><?= $item['id_taikhoan'] ?></td>
                <td><?= $item['user'] ?></td>
                <td><?= $item['ten'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['SDT'] ?></td>
                <td ><?= ($item['quyen'] == 1)  ? "Admin" : (($item['quyen'] == 0) ? "User" : "Bị Khoá" )?></td>
                <!-- `(a ? b : c) ? d : e` -->
                <td> <a class="btn btn-primary" href="index.php?act=khoataikhoan&id=<?= $item['id_taikhoan'] ?>">Khoá </a>
              <a class="btn btn-primary" href="index.php?act=mokhoataikhoan&id=<?= $item['id_taikhoan'] ?>">Mở </a></td>
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