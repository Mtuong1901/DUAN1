<div class="container vh-100 ">
  <h2 class="text-center">Cập nhật thông tin</h2>
  <form method="post" action="" enctype="multipart/form-data" class="form p-3">
  <div class="row d-flex justify-content-center align-items-center ">
    <div class="col-md-5 ">
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Họ tên</label>
                  <input name="name" type="text" class="form-control" value="<?=$user['HoTen']?>"/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Email</label>
                  <input name="email" type="text" class="form-control" value="<?=$user['Email']?>" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Địa chỉ</label>
                  <input name="address" type="text" class="form-control" value="<?=$user['DiaChi']?>" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Số điện thoại</label>
                  <input name="phone" type="text" class="form-control" value="<?=$user['SDT']?>"/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Ảnh đại diện</label>
                  <input name="image" type="file" class="form-control" />
            </div>
            <div class="text-center fs-1">
          <input name="edit_submit" type="submit" class="btn btn-danger btn-lg" value="Cập nhật">
            </div>
    </div>
    <div class="col-md-5">
        <img src="../content/img/<?=$user['Anh']?>"
                  class="img-fluid" alt="Sample image">
    </div> 
  </div>
  </form>
</div>
