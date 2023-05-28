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
    // ob_start();
    //     include_once("Controller/cProduct.php");
   
    //     if(isset($_REQUEST["btnupdate"])){
    //         $ten=$_REQUEST["txtTenSP"];
    //         $gia=$_REQUEST["txtGiaSP"];
    //         $mota=$_REQUEST["txtMota"];
    //         $cty=$_REQUEST["cboCTy"];
    //         $prodid=$_REQUEST["update"];
    //         $file=$_FILES["ffile"]["tmp_name"];
    //         $type=$_FILES["ffile"]["type"];
    //         $name=$_FILES["ffile"]["name"];
    //         $size=$_FILES["ffile"]["size"];
            
    //         $p=new ControllerProd();
    //         $kq=$p->UpdateProds($prodid,$ten,$gia,$mota,$cty,$file,$name,$type,$size);
    //         if($kq==1){
    //             echo "<script>alert('Cập nhật dữ liệu thành công')</script>";
    //             echo header("Location: index.php");
    //             exit();
    //         }
          
    //         else if($kq==-1){
    //             echo "<script>alert('Không thể upload ảnh')</script>";

    //         }
    //         else if($kq==0){
                
    //             echo "<script>alert('Không thể cập nhật')</script>";
    //             echo $name."<br>";
    //             echo $ten."<br>";
    //             echo $mota."<br>";
    //             echo $cty."<br>";
    //             echo $gia."<br>";
    //             echo $prodid;

    //         }
    //         else if($kq==-2){
    //             echo "<script>alert('Size >2MB')</script>";

    //         }
    //         else if($kq==-3){
    //             echo "<script>alert('Không đúng định dạng')</script>";
                
    //         }
    //         else{
    //             echo "<script>alert('Lỗi rồi đó')</script>";

    //         }
    // }
    
        
        
    // ob_end_flush();
    ?>
    <?php
        include_once("Controller/cProduct.php");
        $p=new ControllerProd();
        $masp=$_REQUEST["update"];
        $tblProd=$p->getProdByID($masp);
        if($tblProd){
            if(mysql_num_rows($tblProd)>0){
                echo '<h2 style="height: 50px;align-items: center;display: flex;justify-content: center; font-size: 2.2rem;">Cập nhật sản phẩm</h2>';
                while($rows=mysql_fetch_assoc($tblProd)){
                   echo' <form action="#" method="post" enctype="multipart/form-data" style="line-height: 40px;">';
                    echo'<table style="margin: auto; text-align: left;">';
                    echo'<tr >
                            <td class="txttd">Tên sản phẩm</td>
                            <td><input type="text" name="txtTenSP" value="'.$rows["ProdName"].'" id="" required></td>
                        </tr>';
    
                echo'<tr>
                    <td class="txttd">Giá sản phẩm</td>
                    <td>
                        <input type="text" value="'.$rows["ProdPrice"].'" name="txtGiaSP" id="" required>
                    </td>
                </tr>';
    
                echo'<tr>
                    <td class="txttd">Hình ảnh</td>
                    <td><input type="file" value="".image/""'.$rows["ProdImage"].'" name="ffile" id=""required></td>
    
                </tr>';
                echo'<tr>
    
                    <td class="txttd">Mô tả</td>
                    <td><textarea row="5" cols="22" value="'.$rows["ProdDesription"].'"name="txtMota"></textarea></td>
                </tr>';
                echo'<tr>
                    <td class="txttd">Công ty cung cấp</td>
                    
                    <td><input type="text" value="'.$rows["CompID"].'" name="cboCty" id=""required></td>
                    
                </tr>';
    
                echo'<tr>
                    <td>
                        <input type="submit" value="Cập nhật sản phẩm" name="btnupdate">
                        
                    </td>
                </tr>';
            echo'</table>';
        echo'</form>';
                }
            }
        }
        
        
    ?>
    
   
</body>
</html>