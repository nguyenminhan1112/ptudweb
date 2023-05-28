<?php
    include_once("Controller/cProduct.php");
    $p=new ControllerProd();
    $kq=$p->DelProd($_REQUEST["delete"]);
    if($kq){
        echo "<script>alert('Xóa dữ liệu thành công')</script>";
        echo '<script> window.location = "quanly.php?aProd"; </script>';
    }

?>