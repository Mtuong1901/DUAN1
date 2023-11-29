<?php
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item):
        ?>
        <tr>
            <td data-th="Tên sản phẩm"><?=$item['TenSanPham']?></td>
            <td data-th="Sản phẩm">
                        <img
                            src="../content/img/<?=$item['HinhAnh']?>"
                            alt="Sản phẩm 1" class="img-responsive" width="100">
            </td>
            <td data-th="Kích thước">Size L</td>
            <td data-th="Màu sắc">Màu xanh</td>
            <td data-th="Giá"><?=$item['GiaKhuyenMai']?> đ</td>
            <td data-th="Số lượng">
                <div class="amount-product-buy d-flex justify-content-center">
                    <a href="?mod=cart&act=decrease&id=<?=$item['MaSanPham'] ?>" class="minus-product bg-dark bg-opacity-25  px-2">
                        <i class="bi bi-dash fw-bolder text-dark fs-5"></i>
                    </a>
                    <div class="amount-product fs-5  px-2 border border-1"><?=$item['SL']?></div>
                    <a href="?mod=cart&act=increase&id=<?=$item['MaSanPham'] ?>" class="add-plus bg-dark bg-opacity-25 px-2">
                        <i class="bi bi-plus-lg fw-bolder text-dark fs-5"></i>
                    </a>
                </div>
            </td>
            <td data-th="Thành tiền"></td>
            <td class="actions" data-th="">
                <a href="?mod=cart&act=delete&id=<?=$item['MaSanPham'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i>
                </a>
            </td>
        </tr>
        <?php
    endforeach;
} else {
    echo "Giỏ hàng không tồn tại hoặc là một giá trị không hợp lệ.";
}
?>
