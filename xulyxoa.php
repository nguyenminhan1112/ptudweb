<?php
    include_once("Controller/cProduct.php");
    
    $p=new ControllerProd();
    $kq=$p->DelProd($_REQUEST["delete"]);
    if($kq){
        echo "<script>alert('Xoa du lieu thanh cong')</script>";
        echo header("refresh:0;url='quanly.php?aProd'");
    }

?>