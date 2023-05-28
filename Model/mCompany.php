<?php
    include_once("ketnoi.php");
    class modelCompany{
        function selectAllCompany(){
            $conn=null;
            $p=new clsketnoi();
            if($p->ketnoi($conn)){
                $string="SELECT * FROM company";
                $tblComp=mysql_query($string);
                $p->dongketnoi($conn);
                return $tblComp;
            }
            else{
                return false;
            }
        }
    }
?>