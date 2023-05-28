<?php
    class clsketnoi{
        function ketnoi(&$conn){
            $conn=mysql_connect("localhost","admin_nma","18112003");
            mysql_set_charset("utf8");
            if($conn){
                return mysql_select_db("shopxehoi");

            }
            else{
                return false;
            }
        }

        function dongketnoi($conn){
            mysql_close($conn);
        }
    }


?>