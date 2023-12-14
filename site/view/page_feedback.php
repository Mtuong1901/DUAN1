
<div class="container mt-4">
    <!-- List feedback -->
    <hr>
    <h3 class="text-warning">KHÁCH HÀNG ĐÁNH GIÁ : </h3>
    <?php if(isset($_SESSION['user'])): ?>
    <form method="post" class='form text-center' action="">
        <textarea  class="text" cols="140" rows ="5" name="feedback"></textarea>
        <br>
        <input type="submit" class="btn btn-primary" value="Gửi đánh giá" name="feedback_submit">
    </form>
    <?php else : ?>
    <div class="text-center">
        <a href="?mod=user&act=login" class="btn btn-primary">Đăng nhập để bình luận</a>    
    </div>
    <?php endif; ?>
    <br>
    <?php foreach($feedback_list as $feedback): ?>
    <div>
        <div class="d-flex align-items-center">
            <img class="my-2 img-thumbnail" src="../content/img/<?=$feedback['Anh']?>" width='40' height="60">
            <span class="fs-4 mx-2"><?=$feedback['HoTen']?></span>
            <span class="ms-auto">Ngày bình luận: <?=$feedback['NgayBinhLuan']?></span>
            
        </div>
        <div class="alert alert-info fs-5 ms-5" role="alert">
            <?=$feedback['NoiDung']?>
        </div>
        <br>
        <br>
    </div>
    <?php endforeach; ?>
    
    
</div>