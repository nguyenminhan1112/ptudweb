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
   
        if(isset($_REQUEST["btnSubmit"])){
            $ten=$_REQUEST["txtTenSP"];
            $gia=$_REQUEST["txtGiaSP"];
            $mota=$_REQUEST["txtMota"];
            $cty=$_REQUEST["cboCty"];
            $file=$_FILES["ffile"]["tmp_name"];
            $type=$_FILES["ffile"]["type"];
            $name=$_FILES["ffile"]["name"];
            $size=$_FILES["ffile"]["size"];
            
            $p=new ControllerProd();
            $kq=$p->AddProduct($ten,$gia,$mota,$cty,$file,$name,$type,$size);
            if($kq==1){
                echo "<script>alert('Thêm dữ liệu thành công')</script>";
                echo'<script> window.location = "quanly.php?aProd"; </script>';
                exit();
            }
          
            else if($kq==-1){
                echo "<script>alert('Không thể upload ảnh')</script>";

            }
            else if($kq==0){
                
                echo "<script>alert('Không thể insert')</script>";
                // echo $name."<br>";
                // echo $ten."<br>";
                // echo $mota."<br>";
                // echo $cty."<br>";
                // echo $gia;

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
    
        
        
    ob_end_flush()
    ?>
    <h2 align='center'>THÊM SẢN PHẨM</h2>
    <form action="#" method="post" enctype="multipart/form-data" style='line-height: 40px;'>
        <table style="margin: auto; text-align: left;">
            <tr >
                <td class="txttd">Tên sản phẩm</td>
                <td><input type="text" name="txtTenSP" id="" required></td>
            </tr>

            <tr>
                <td class="txttd">Giá sản phẩm</td>
                <td>
                    <input type="text"  name="txtGiaSP" id="" required>
                </td>
            </tr>

            <tr>
                <td class="txttd">Hình ảnh</td>
                <td><input type="file" name="ffile" id=""required></td>

            </tr>
            <tr>

                <td class="txttd">Mô tả</td>
                <td><textarea row="5" cols="22" name="txtMota"></textarea></td>
            </tr>
            <tr>
                <td class="txttd">Công ty cung cấp</td>
                <td>
                    <select name="cboCty" id="">
                        <?php
                            include_once("Controller/cCompany.php");
                            $comp=new ControlerCompany();
                            $table=$comp->getAllCompany();
                            if(mysql_num_rows($table)){
                                while($rows=mysql_fetch_assoc($table)){
                                    echo "<option value='".$rows["CompID"]."'>".$rows["CompName"]."</option>";
                                }
                            }
                        
                        ?>

                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Thêm sản phẩm" name="btnSubmit">
                    <input type="reset" value="Nhập lại" >
                </td>
            </tr>
        </table>
    </form>
   
</body>
</html>