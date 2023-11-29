<div class="container vh-100 ">
  <h2 class="text-center">ĐĂNG KÝ</h2>
  <form method="post" action="" enctype="multipart/form-data" class="form p-3">
  <div class="row d-flex justify-content-center align-items-center ">
    <div class="col-md-5 ">
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Họ tên</label>
                  <input name="name" type="text" class="form-control" required />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Email</label>
                  <input name="email" type="email" class="form-control" required />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Mật khẩu</label>
                  <input name="pass" type="password" class="form-control" required/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Nhập lại mật khẩu</label>
                  <input name="repass" type="password" class="form-control" required/>
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Địa chỉ</label>
                  <input name="address" type="text" class="form-control" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Số điện thoại</label>
                  <input name="phone" type="text" class="form-control" />
            </div>
            <div class="form-outline">
                  <label class="form-label mt-3 mb-1" >Ảnh đại diện</label>
                  <input name="image" type="file" class="form-control" />
            </div>
            <?php if(isset($data)):?>
                <div class="alert alert-warning" role="alert">
                    <?=$data;?>
                </div>
                <?php endif; unset($data);?>
            <div class="text-center fs-1">
          <input name="register_submit" type="submit" class="btn btn-danger btn-lg" value="Đăng ký">
            </div>
    </div>
    <div class="col-md-5">
        <img src="https://img.freepik.com/free-photo/full-length-portrait-happy-excited-girl-bright-colorful-clothes-holding-shopping-bags-while-standing-showing-peace-gesture-isolated_231208-5946.jpg"
                  class="img-fluid" alt="Sample image">
    </div> 
  </div>
  </form>
</div>
