<?php
    include_once("Model/mProduct.php");
    class ControllerProd{
        function getAllProduct(){
            $p=new modelProduct();
            $tblProd=$p->SelectAllProduct();
            return $tblProd;
        }

        function getAllProductByComp($comp){
            $p=new modelProduct();
            $tblProd=$p->SelectAllProductbyComp($comp);
            return $tblProd;
        }

        function getProdByID($prodid){
            $p=new modelProduct();
            $tblProd=$p->SelectAllProductbyID($prodid);
            return $tblProd;
        }

        function getSearchbyName($search){
            $p=new modelProduct();;
            $result=$p->SearchProdbyName($search);
            return $result;
        }
        function getSearchbyName1($search,$minprice){
            $p=new modelProduct();
            $result=$p->SearchProdbyName1($search,$minprice);
            return $result;
        }

        // function getSearchbyPrice($minprice,$maxprice){
        //     $p=new modelProduct();
        //     $result=$p->SearchProdbyPrice($minprice,$maxprice);
        //     return $result;
        // }

        function getPriceSearch($price){
            $p=new modelProduct();
            $result=$p->SearchProdbyPricemin100($price);
            return $result;
        }
        function AddProduct($ten,$gia,$mota,$cty,$file,$tenanh,$loaianh,$sizeanh){
            if($loaianh=="image/jpeg" || $loaianh=="image/png"){
                if($sizeanh <=2*1024*1024){
                    if(move_uploaded_file($file,"./image/".$tenanh)){
                        $p=new modelProduct();
                        $insert=$p->InsertProduct($ten,$gia,$tenanh,$mota,$cty);
                        if($insert==true){
                            return 1;
                        }
                        else{
                            
                            return 0;
                        }
                    }
                    else{
                        return -1;
                    }
                }
                else{
                    return -2;
                }
            }
            else{
                return -3;
            }
        }

        function DelProd($masp){
            $p=new modelProduct();
            $result=$p->DeleteProd($masp);
            return $result;
        }

 

        function UpdateProds($prodid,$ten,$gia,$mota,$cty,$file,$tenanh,$loaianh,$sizeanh){
            if($loaianh=="image/jpeg" || $loaianh=="image/png"){
                if($sizeanh <=2*1024*1024){
                    if(move_uploaded_file($file,"./image/".$tenanh)){
                        $p=new modelProduct();
                        $insert=$p->UpdateProd($prodid,$ten,$gia,$tenanh,$mota,$cty);
                        if($insert==true){
                            return 1;
                        }
                        else{
                            
                            return 0;
                        }
                    }
                    else{
                        return -1;
                    }
                }
                else{
                    return -2;
                }
            }
            else{
                return -3;
            }
        }
// View Product

        // function getViewProduct(){
        //     $p=new modelProduct();
        //     $viewProd=$p->ViewProdDesc();
        //     return $viewProd;
        // }

        // Create New
        // function getCreatNewProduct(){
        //     $p=new modelProduct();
        //     $createProd=$p->CreateNew();
        //     return $createProd;
        // }

        
    }

?>