<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Thêm kho ảnh
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm ảnh</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" class="form" action="index.php?act=themkhoanh" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="" class="form-label">Thêm ảnh</label>
            <input type="file" required class="form-control" multiple accept="image/*" name="hinhanh[]">
          </div>
          <input type="hidden" name="id" value="<?= $idSp ?>">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="themkhoanh">Thêm</button>
      </div>
    </form>
    </div>
  </div>
</div>
  <div class="card-columns">
     <?php
  foreach ($listanh as $anh){
  ?>
  <div class="card">
    <img width="150px" height="300px" src="/PRO1014/Techboys/upload/<?php echo $anh['ten_anh']?>" class="card-img-top" >
    <a class="btn btn-primary btn-lg btn-block" href="index.php?act=xoakhoanh&id=<?= $anh['id_anh'] ?>">Xóa</a>
  </div>
  <?php }?>
</div>
  