<?php
    include_once("Controller/cProduct.php");
    class ViewProduct{
        function face_Product(){
            $p=new ControllerProd();
            if(isset($_REQUEST["Comp"])){
                $cty=$_REQUEST["Comp"];
                $tblProduct=$p->getAllProductByComp($cty);
            }
            else{
                $tblProduct=$p->getAllProduct();
            }
            $this->showtableProd($tblProduct);
        }

        function face_Search(){
            $p=new ControllerProd();
            if(isset($_REQUEST["submit"])){
                if(isset($_REQUEST["txtSearch"])&&!empty($_REQUEST["txtSearch"])){
                    $search=$_REQUEST["txtSearch"];
                    $resultSearch=$p->getSearchbyName($search);
                }
                else{
                    $resultSearch=$p->getAllProduct();
                }
                $this->showtableProd($resultSearch);
            }
        }

        function face_SearchbyPrice(){
            $p=new ControllerProd();
            if(isset($_REQUEST["btnsubmitPrice"])){
                if(isset($_REQUEST["min_price"])&&isset($_REQUEST["max_price"])&&!empty($_REQUEST["min_price"])&&!empty($_REQUEST["max_price"])){
                    $minprice=$_REQUEST["min_price"];
                    $maxprice=$_REQUEST["max_price"];
                    $resultSearchbyPrice=$p->getSearchbyPrice($minprice,$maxprice);
                }
                else{
                    $resultSearchbyPrice=$p->getAllProduct();
                }
                $this->showtableProd($resultSearchbyPrice);
            }
        }
        function face_SearchPricemin200(){
            $p=new ControllerProd();
            if(isset($_REQUEST["search"])){
                if(isset($_REQUEST["price"])||isset($_REQUEST["txtSearch"])&&!empty($_REQUEST["txtSearch"])){
                    $price = $_REQUEST['price'];
                    $search=$_REQUEST['txtSearch'];
                    // Tạo điều kiện WHERE dựa trên giá trị của $price
                        if ($price == "11") {
                        $condition = " AND ProdPrice < 100";
                        } elseif ($price == "1") {
                            $condition = " AND ProdPrice >= 100 AND ProdPrice <= 200";
                        } elseif ($price == "2") {
                            $condition = "AND ProdPrice >= 200 AND ProdPrice <= 300";
                        } elseif ($price == "3") {
                            $condition = " AND ProdPrice >= 300 AND ProdPrice <= 400";
                        } elseif ($price == "33") {
                            $condition = " AND ProdPrice >= 400 AND ProdPrice <= 500";
                        } elseif ($price == "4") {
                            $condition = " AND ProdPrice >= 500 AND ProdPrice <= 600";
                        } elseif ($price == "5") {
                            $condition = " AND ProdPrice >= 600 AND ProdPrice <= 700";
                        } elseif ($price == "6") {
                            $condition = " AND ProdPrice >= 700 AND ProdPrice <= 800";
                        } elseif ($price == "7") {
                            $condition = " AND ProdPrice >= 800 AND ProdPrice <= 1000";
                        } elseif ($price == "8") {
                            $condition = " AND ProdPrice >= 1000 AND ProdPrice <= 3000";
                        } elseif ($price == "9") {
                            $condition = " AND ProdPrice > 3000";
                        } else {
                        $condition = "";
                        }
                    
                  } 
                  else {
                    $condition = "";
                  }
                  $resultSearchbyPricemin100=$p->getSearchbyName1($search,$condition);
                 
                  
                  
                }
                else{
                    $resultSearchbyPricemin100=$p->getAllProduct();
                }
                
                $this->showtableProd($resultSearchbyPricemin100);
            }

                       // Timf the gia
            // function face_SearchPricemin100(){
            //     $p=new ControllerProd();
            //     if(isset($_REQUEST["btnPrice"])){
            //         if(isset($_REQUEST["price"])){
            //             $price = $_REQUEST['price'];
            //             $search=$_REQUEST['txtSearch'];
            //             // Tạo điều kiện WHERE dựa trên giá trị của $price
            //                 if ($price == "11") {
            //                 $condition = "WHERE ProdPrice < 100";
            //                 } elseif ($price == "1") {
            //                 $condition = "WHERE ProdPrice >= 100 AND ProdPrice <= 200";
            //                 } elseif ($price == "2") {
            //                 $condition = "WHERE ProdPrice >= 200 AND ProdPrice <= 300";
            //                 } elseif ($price == "3") {
            //                 $condition = "WHERE ProdPrice >= 300 AND ProdPrice <= 400";
            //                 } elseif ($price == "33") {
            //                 $condition = "WHERE ProdPrice >= 400 AND ProdPrice <= 500";
            //                 } elseif ($price == "4") {
            //                 $condition = "WHERE ProdPrice >= 500 AND ProdPrice <= 600";
            //                 } elseif ($price == "5") {
            //                 $condition = "WHERE ProdPrice >= 600 AND ProdPrice <= 700";
            //                 } elseif ($price == "6") {
            //                 $condition = "WHERE ProdPrice >= 700 AND ProdPrice <= 800";
            //                 } elseif ($price == "7") {
            //                 $condition = "WHERE ProdPrice >= 800 AND ProdPrice <= 1000";
            //                 } elseif ($price == "8") {
            //                 $condition = "WHERE ProdPrice >= 1000 AND ProdPrice <= 3000";
            //                 } elseif ($price == "9") {
            //                 $condition = "WHERE ProdPrice > 3000";
            //                 } else {
            //                 $condition = "";
            //                 }
                        
            //           } 
            //           else {
            //             $condition = "";
            //           }
            //           $resultSearchbyPricemin100=$p->getPriceSearch($condition);
                     
                      
                      
            //         }
            //         else{
            //             $resultSearchbyPricemin100=$p->getAllProduct();
            //         }
            //         $this->showtableProd($resultSearchbyPricemin100);
            //     }
            
        
        function showtableProd($tblProduct){
            if($tblProduct){
                if(mysql_num_rows($tblProduct)>0){
                    $dem=0;
                    echo "<table style='width:100%;'>";
                    while($rows=mysql_fetch_assoc($tblProduct)){
                        if($dem==0){
                            echo "<tr >";
                        }
                        echo "<td style='width:25% ';height:100px;>";
                        echo "<image height=100px src='image/".$rows["ProdImage"]."'>";
                        echo "<br>".'<p style="color:blue">Tên sản phẩm:<span style="color:black">'.$rows["ProdName"].'</span></p>'."<br>";
                        echo '<p style="color:blue">Giá:<span style="color:black">'.$rows["ProdPrice"].' triệu</span></p>';
                        echo "</td>";

                        $dem++;
                        if($dem%5==0){
                            echo "</tr>";
                            $dem=0;
                        }
                    }
                    echo "</table>";
                }
                else{
                    echo "<div align='center' style='font-size:30px;color:blue;display:flex;align-items:center;justify-content: center;'><p>Không có sản phẩm</p></div>";
                }
            }
            else{
                echo "<p align='center' style='font-size:30px;color:blue;'>Không có giá trị</p>";
            }
            
        }

        function adminProduct(){
            $p=new ControllerProd();
            $tblProduct=$p->getAllProduct();
            $this->adminshowProd($tblProduct);
        }
        function adminshowProd($tblProduct){
            if($tblProduct){
                if(mysql_num_rows($tblProduct)>0){
                    echo "<h3 style='font-size: 21px;height: 50px;display: flex;justify-content: center;align-items: center;'>Quản lý sản phẩm</h3>";
                    echo "<a href='quanly.php?AddProd' style='text-decoration: none; text-decoration: none;display: flex;justify-content: center;font-size:1.2rem;color:red;'>Thêm sản phẩm</a>";
                    echo "<table border='1' align='center' cellspacing='0' cellpadding='0' width='815px'>";
                    echo "<tr><th>Mã sản phẩm</th><th>Tên sản phẩm</th><th>Giá sản phẩm</th><th>Ảnh sản phẩm</th><th>Mô tả sản phẩm</th>
                    <th>Mã Công ty</th><th>Tác vụ</th></tr>";
                    while($rows=mysql_fetch_assoc($tblProduct)){
                        echo "<tr align='center'>";
                        echo "<td>".$rows["ProdID"]."</td>";
                        echo "<td>" . $rows["ProdName"] . "</td>";
                        echo "<td>" . $rows["ProdPrice"] ." triệu" ."</td>";
                        echo "<td><img width = '50px' src='image/". $rows["ProdImage"] ."'> </td>";
                        echo "<td>".$rows["ProdDesription"]."</td>";
                        echo "<td>".$rows["CompID"]."</td>";
                        echo '<td style="width:100px ">';
                        // <form method="post" action="admin.php?update" style="width: 100px;">
                        //          <button name = "update" value = ' . $rows['ProdID'] . '>Chỉnh sửa</button></form>';
                        
                        echo '<a href="quanly.php?update='.$rows["ProdID"].'"style=" text-decoration: none; color:red; " >Chỉnh sửa</a><br>';
                        echo '<a href="quanly.php?delete='.$rows["ProdID"].'" onclick="return confirm(\'Bạn có chắc muốn xóa?\')" style=" text-decoration: none;color:blue" >Xóa</a>';
                        // echo '<form method="post" action="xulyxoa.php" style="width: 100px; margin:10px">" 
                        //           <button onclick="return confirm(\""."Are you sure you want to delete this item?"."\") name = "delete" value = '.$rows['ProdID'].' ">Xóa</button>
                        //     </form>
                        echo '</td>';
                        echo "";
                        echo "</tr>";
                    }
                    echo "<table>";
                }
                else{
                    echo "0 result";
                }
            }
            else{
                echo "Không có giá trị";
            }
            
        }

        // function ViewProduct(){
        //     $p=new ControllerProd();
        //     $view=$p->getViewProduct();
        //     $this->face_Product($view);
        // }

        // function CreateProduct(){
        //     $p=new ControllerProd();
        //     $create=$p->getCreatNewProduct();
        //     $this->face_Product($create);
        // }
    }

?>