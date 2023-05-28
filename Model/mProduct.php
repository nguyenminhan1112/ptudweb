<?php
    include_once("ketnoi.php");
    class modelProduct{
        function SelectAllProduct(){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="SELECT * FROM product";
                $tblProd=mysql_query($string);
                $p->dongketnoi($conn);
                return $tblProd;
            }
            else{
                return false;
            }

        }

        function SelectAllProductbyComp($comp){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="SELECT * FROM product WHERE CompID=".$comp;
                $tblProd=mysql_query($string);
                $p->dongketnoi($conn);
                return $tblProd;
            }
            else{
                return false;
            }

        }

        function SelectAllProductbyID($prodid){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="SELECT * FROM product WHERE ProdID=".$prodid;
                $tblProd=mysql_query($string);
                $p->dongketnoi($conn);
                return $tblProd;
            }
            else{
                return false;
            }

        }
        // Tim theo ten
         
        // function SearchProdbyName($search){
        //     $conn=null;
        //     $p=new clsketnoi();
        //     if($p->ketnoi($conn)){
        //         $string="SELECT * FROM product WHERE ProdName LIKE '%$search%' ";
        //         $result=mysql_query($string);
        //         $p->dongketnoi($conn);
        //         return $result;
        //     }
        //     else{
        //         return false;
        //     }
        // }
        function SearchProdbyName1($search,$minprice){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="SELECT * FROM product WHERE ProdName LIKE '%$search%' $minprice";
                $result=mysql_query($string);
                $p->dongketnoi($conn);
                return $result;
            }
            else{
                return false;
            }
        }
        // Tim the gia

        // function SearchProdbyPrice($minprice,$maxprice){
        //     $conn=null;
        //     $p=new clsketnoi();
        //     if($p->ketnoi($conn)){
        //         $string="SELECT * FROM product where ProdPrice BETWEEN ".$minprice." AND ".$maxprice."";
        //         $result=mysql_query($string);
        //         $p->dongketnoi($conn);
        //         return $result;
        //     }
        //     else{
        //         return false;
        //     }
        // }


            // Tim theo gia

        // function SearchProdbyPricemin100($minprice){
        //     $conn=null;
        //     $p=new clsketnoi();
        //     if($p->ketnoi($conn)){
        //         $string="SELECT * FROM product ".$minprice."";
        //         $result=mysql_query($string);
        //         $p->dongketnoi($conn);
        //         return $result;
        //     }
        //     else{
        //         return false;
        //     }
        // }


        function InsertProduct($ten,$gia,$hinh,$mota,$cty){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="INSERT INTO product (ProdID,ProdName,ProdPrice,ProdImage,ProdDesription,CompID) VALUES (null,'$ten','$gia','$hinh','$mota','$cty')";
                $kq=mysql_query($string);
                $p->dongketnoi($conn);                
                return $kq;
            }
            else{
                return false;
            }
        }

        function DeleteProd($masp){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="DELETE FROM product where ProdID=".$masp;
                $result=mysql_query($string);
                $p->dongketnoi($conn);
                return $result;
            }
            else{
                return false;
            }
            
        }

        function UpdateProd($prodid,$tensp,$giasp,$anhsp,$motasp,$cty){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="UPDATE product set ProdName='$tensp',ProdPrice='$giasp',ProdImage='$anhsp',ProdDesription='$motasp',CompID=$cty where ProdID=$prodid";
                $result=mysql_query($string);
                $p->dongketnoi($conn);
                return $result;
            }
            else{
                return false;
            }
        }

        // View Product Desc
        // function ViewProdDesc(){
        //     $conn=null;
        //     $p=new clsketnoi();
        //     if($p->ketnoi($conn)){
        //         $string="SELECT * FROM product ORDER BY views DESC";
        //         $result=mysql_query($string);
        //         $p->dongketnoi($conn);
        //         return $result;
        //     }
        //     else{
        //         return false; 
        //     }
        // }

        // Create New
        // function CreateNew(){
        //     $conn=null;
        //     $p=new clsketnoi();
        //     if($p->ketnoi($conn)){
        //         $string="SELECT * FROM product ORDER BY created_at DESC";
        //         $result=mysql_query($string);
        //         $p->dongketnoi($conn);
        //         return $result;
        //     }
        //     else{
        //         return false; 
        //     }
        // }
    }
?>