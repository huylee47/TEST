<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách liên hệ</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID liên hệ</th>
                            <th>Tên</th>
                            <th>SĐT</th>
                            <th >Gmail</th>
                            <th>Nội dung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listlienheAll as $item) {
                        ?>
                            <tr>
                                <td><?= $item['id_lienhe'] ?></td>
                                <td><?= $item['ten'] ?></td>
                                <td><?= $item['sdt'] ?></td>
                                <td><?= $item['gmail'] ?></td>
                                <td><?= $item['noidung'] ?></td>

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