<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th class="col-2" scope="col">#</th>
      <th class="col-3" scope="col">ID</th>
      <th class="col-7" scope="col">Tên danh mục</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($listDanhMuc as $key => $item) {
    ?>
      <tr>
        <th><?= ++$key ?></th>
        <td><?= $item['id'] ?></td>
        <td><?= $item['tendanhmuc'] ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php?chucnang=themdanhmuc"> Thêm mới </a>