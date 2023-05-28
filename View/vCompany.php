<?php
    include_once("Controller/cCompany.php");
    class ViewComp{
        function face_Company(){
            $p=new ControlerCompany();
            $tblCompany=$p->getAllCompany();
            if($tblCompany){
                if(mysql_num_rows($tblCompany)>0){
                    while($rows=mysql_fetch_assoc($tblCompany)){
                        echo "<a class='aComp'style='text-decoration:none;color:blue; onmouseover='this.style.backgroundColor = 'white'; this.style.color = 'blue';' 
                        onmouseout='this.style.backgroundColor = 'blue'; this.style.color = 'white';' ' href='index.php?Comp=".$rows["CompID"]."'>".$rows["CompName"]."</a>"."<br>";
                       
                    }
                }
                else{
                    echo  "0 result";
                }
            }
            else{
                echo "Không có giá trị";
            }
        }

        function adminCompany(){
            $p=new ControlerCompany();
            $tblCompany=$p->getAllCompany();
            $this->adminshowCompany($tblCompany);
            
        }
        function adminshowCompany($tblComp){
            if($tblComp){
                if(mysql_num_rows($tblComp)>0){
                    echo "<h3 style='font-size: 21px;height: 50px;display: flex;justify-content: center;align-items: center;'>Quản lý Công ty</h3>";
                    echo "<table border='1' align='center' cellspacing='0'  width='815px'>";
                    echo "<tr style='height:50px' ><th>Mã công ty</th><th>Tên Công ty</th><th>Địa chỉ Công ty</th><th>Số điện thoại</th><th>Email</th></tr>";
                    while($rows=mysql_fetch_assoc($tblComp)){
                        echo "<tr style='height:50px;' align='center';><td>".$rows["CompID"]."</td><td>".$rows["CompName"]."</td><td>".$rows["CompAddress"]."</td><td>".$rows["CompPhone"]."</td><td>".$rows["Email"]."</td></tr>";

                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
            }
            else{
                echo "Không có giá trị";
            }
        }

      
    }
?>