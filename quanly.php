<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">

                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-items">
                            Vào cửa hàng trên ứng dụng NMA-Shop
                        </li>
                        <li class="header__navbar-items">
                            <span class="header__navbar-connect--no-pointer">Kết nối</span>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-brands fa-facebook"></i>
                            </a>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-items">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-regular fa-bell"></i>
                                Thông báo
                            </a>
                        </li>
                        <li class="header__navbar-items">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-question"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <li class="header__navbar-items header-navbar-user">
                            <img src="https://scontent.fsgn5-12.fna.fbcdn.net/v/t39.30808-1/278663205_1024863731794263_4049396740862319113_n.jpg?stp=cp0_dst-jpg_p60x60&_nc_cat=103&ccb=1-7&_nc_sid=7206a8&_nc_ohc=QjvdF1GD8QcAX_Rr01W&_nc_ht=scontent.fsgn5-12.fna&oh=00_AfB_m3Mh5PGiEj-9GrEsbgzaWdT9fTp5L6eEHo6mkDDgMg&oe=637C365E" alt="" class="header-navbar-user-img">
                            <span class="header-navbar-user-name">Nguyễn Minh Ân</span>
                            
                        </li>
                    </ul>
                </nav>

                <div class="header__with-search--ql_ql">
                    <div class="header__logo">
                        <a  href="index.php" class="header__logo-link">
                           <img class="header__logo-img" src="assets/image/logoshopnma.png" alt="ShopNMA"> 
                        </a>
                    </div>

                    <div class="header__menu">
                        <ul class="header__menu-list">
                            <!-- <li class="header__menu-items">
                                <a href="index.php  " style="text-decoration: none;" class="header__menu-items-link">Trang chủ</a>
                            </li> -->
                            <li class="header__menu-items">
                                <a href="quanly.php" style="text-decoration: none;" class="header__menu-items-link">Quản lý</a>
                            </li>
                            <li class="header__menu-items">
                            <a href="index.php" style="text-decoration: none;" class="header__menu-items-link">Sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__search">
                        <!-- <div class="header__search--input-wrap"> -->


                        <form  method="get" autocomplete="off" class="header__search--input-wrap">




                                    <input type="text" class="header__search--input" name="txtSearch" placeholder="Nhập tìm kiếm sản phẩm">

                                
                                    <select name="price"   class="header__search--input">
                                        <option value="" selected>-- Giá tiền --</option>
                                        <option value="11" >Dưới 100M</option>
                                        <option value="1" >100M - 200M</option>
                                        <option value="2" >200M - 300M</option>
                                        <option value="3" >300M - 400M</option>
                                        <option value="33" >400M - 500M</option>
                                        <option value="4" >500M - 600M</option>
                                        <option value="5" >600M - 700M</option>
                                        <option value="6" >700M - 800M</option>
                                        <option value="7" >800M - 1 tỷ</option>
                                        <!-- <option value="8" >1 tỷ - 3 triệu</option>
                                        <option value="9" >Trên 3 triệu</option> -->
                                    </select>
                               
                                    <!-- <input type="submit" class="header__search-btn"  name="btnPrice" value="Tìm  giá" > </a> -->
                                    
                               

                                <!-- </form>
                            <form action="" method="get" class="header__search--input-wrap"> -->
                                
                                
                                <!-- <div class="header__search-btn"> -->
                                    
                                <input type="submit" class="header__search-btn"  name="search" value="Tìm" > </a>
                                <!-- </div> -->
                                
                                <!-- <button class="header__search-btn">

                                     <input type="submit" class="header__search-btn-icon"  name="submit" value="Tìm" >  
                               </button> -->

                            </form>
                            
                            
                

                          

                            <!-- <div class="header__search-btn">
                               
                            </div> -->
                            

                        <!-- </div> -->
                       
                        
                    </div>
                  
            </div>
        </header>
        <!-- <div class="banner">

        </div> -->
        <div class="app_container">
            <div class="grid wide">
                <div class="row sm-gutters app__content">
                    <div class="col l-2 m-0 c-0">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fa-solid fa-list-ul"></i>
                                Danh mục
                            </h3>
                        <div class="category__heading">
                            
                              
                              <a href="quanly.php?aComp" style="text-decoration: none;font-size:1rem; color:black" >Quản lý Công ty</a><br>
                              <a href="quanly.php?aProd" style="text-decoration: none;font-size:1rem;color:black">Quản lý sản phẩm</a>
                                  
                        </div>
                        
                            
                        </nav>
                    </div>

                    <div class="col l-10 m-12 c-12">
                        <!-- <div class="home-filter hide-on-mobile-tablet">
                                <span class="home-filter__label">Sắp xếp theo</span>
                                <button class="home-filter__btn btn">Phổ biến</button>
                                <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                                <button class="home-filter__btn btn">Bán chạy</button>
                        </div> -->

                        <div class="home-product">
                            <!-- <div class="row sm-gutters"> -->
                                <!-- <div class="col l-2-4 m-4 c-6"> -->
                                <!-- <a href="#" class="home-product-items"> -->
                                    <?php
                                        
                                        if(isset($_REQUEST["AddProd"])){
                                            include_once("View/vAddProd.php");
                                        }
                                        else if(isset($_REQUEST["aComp"])){
                                            include_once("View/vCompany.php");
                                            $p=new ViewComp();
                                            $aComp=$p->adminCompany();
                                        }
                                        else if(isset($_REQUEST["aProd"])){
                                            include_once("View/vProduct.php");
                                            $p=new ViewProduct();
                                            $aProd=$p->adminProduct();
                                        }
                                        else if(isset($_REQUEST["delete"])){
                                            include_once("View/aDeleteProd.php");
                                            
                                        }
                                        else if(isset($_REQUEST["update"])){
                                            
                                            include_once("View/vUpdateProd.php");
                                            if(isset($_REQUEST["btnupdate"])){
                                                include_once("xulysua.php");
                                            }
                                        }
                                       
                                       
                                        
                                        else{
                                            echo "<p style='font-size: 20px;height: 100px;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;color:red;height:300px'>TRANG DÀNH CHO ADMIN</p>";
                                        }
                                    ?>
                                <!-- </a> -->
                                <!-- </div> -->
                          
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="grid wide footer__content">
                <div class="row">
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer_heading">Chăm sóc khách hàng</h3>
                        <ul class="footer__list">
                            <li class="footer-items">
                                <a href="" class="footer-items-link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-items">  
                                <a href="" class="footer-items-link">NMA-Shop</a>
                            </li>
                            <li class="footer-items">      
                                <a href="" class="footer-items-link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer_heading">Giới thiệu</h3>
                        <ul class="footer__list">
                            <li class="footer-items">
                                <a href="" class="footer-items-link">Giới thiệu</a>
                            </li>
                            <li class="footer-items">     
                                <a href="" class="footer-items-link">Tuyển dụng</a>
                            </li>
                                <li class="footer-items">       
                                <a href="" class="footer-items-link">Điều khoản</a>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer_heading">Danh mục</h3>
                        <ul class="footer__list">
                            <li class="footer-items">
                                <a href="" class="footer-items-link">VINFAT</a>
                            </li>
                            <li class="footer-items">     
                                <a href="" class="footer-items-link">AUDI</a>
                            </li>
                                <li class="footer-items">       
                                <a href="" class="footer-items-link">BMW</a>
                            </li>
                        </ul>
                       
                    </div>
                    <div class="col l-2-4 m-4 c-6">
                        <h3 class="footer_heading">Theo dõi</h3>
                        <ul class="footer__list">
                            <li class="footer-items">
                                <a href="" class="footer-items-link">
                                    <i class="footer-items_icon fa-brands fa-facebook"></i>
                                    Facebook</a>
                                </li>
                                <li class="footer-items">         
                                <a href="" class="footer-items-link">
                                    <i class="footer-items_icon fa-brands fa-instagram"></i>
                                    Instagram</a>
                                </li>
                                <li class="footer-items">     
                                <a href="" class="footer-items-link">
                                    <i class="footer-items_icon fa-brands fa-linkedin-in"></i>
                                    Linkedin</a>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="col l-2-4 m-4 c-12">
                        <h3 class="footer_heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="image/qr_code.png" alt="Download QR" class="footer__download-qr">
                            <div class="footer__download-app">
                                <a href="" class="footer__download-app-link">
                                    <img src="image/google_play.png" alt="google Play" class="footer__download-app-img">

                                </a>
                                <a href="" class="footer__download-app-link">
                                    <img src="image/app_store.png" alt="App Store" class="footer__download-app-img">

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
             
            </div>
            <div class="footer__bottom">
                <div class="grid wide">
                    <p class="footer__text">
                        © 2019 - Bản quyền thuộc về Công ty TNHH NMA
                    </p>
                </div>
                
            </div>
        </footer>
    </div>
  
</body>
</html>