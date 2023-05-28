<?php
    include_once("Model/mCompany.php");
    class ControlerCompany{
        function getAllCompany(){
            $p=new modelCompany();
            $tbl=$p->selectAllCompany();
            return $tbl;
        }
    }
?>