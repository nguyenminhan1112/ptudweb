<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ob_start();
    include_once("Controller/cProduct.php");

    if(isset($_REQUEST["btnupdate"])){
        $ten=$_REQUEST["txtTenSP"];
        $gia=$_REQUEST["txtGiaSP"];
        $mota=$_REQUEST["txtMota"];
        $cty=$_REQUEST["cboCty"];
        $prodid=$_REQUEST["update"];
        $file=$_FILES["ffile"]["tmp_name"];
        $type=$_FILES["ffile"]["type"];
        $name=$_FILES["ffile"]["name"];
        $size=$_FILES["ffile"]["size"];
        
        $p=new ControllerProd();
        $kq=$p->UpdateProds($prodid,$ten,$gia,$mota,$cty,$file,$name,$type,$size);
        if($kq==1){
            echo "<script>alert('Cập nhật dữ liệu thành công')</script>";
            echo '<script> window.location = "quanly.php?aProd"; </script>';
            exit();
        }
      
        else if($kq==-1){
            echo "<script>alert('Không thể upload ảnh')</script>";

        }
        else if($kq==0){
            
            echo "<script>alert('Không thể cập nhật')</script>";
            echo '<script> window.location = "quanly.php?update"; </script>';
            exit();
          
            
            
           

        }
        else if($kq==-2){
            echo "<script>alert('Size >2MB')</script>";

        }
        else if($kq==-3){
            echo "<script>alert('Không đúng định dạng')</script>";
            
        }
        else{
            echo "<script>alert('Lỗi rồi đó')</script>";

        }
}
        
        
    ?>
   
</body>
</html>