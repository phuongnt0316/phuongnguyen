<!DOCTYPE html>
<?php
ob_start(); 
session_start();
include("control.php");
$get_data=new data();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/manager.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    
</head>
<body>
    <div class="content">
        <div id="header">
            <nav class=" container-fluid p-2 navbar-expand-sm navbar-dark bg-dark d-flex align-items-center justify-content-between">
                <div class="ms-3">
                  <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="">
                  </a>
                </div>
                <div class=" menu-1">
                    <div class="collapse navbar-collapse" id="mynavbar">
                      <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="intro.html">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="dog.html">CHÓ CẢNH</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cat.html">MÈO CẢNH</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="food.html" role="button" data-bs-toggle="dropdown">THỨC ĂN</a>
                            <ul class="dropdown-menu mt-3 p-2 fade">
                              <li><a class="dropdown-item text-dark " href="food-dog.html">Đồ ăn cho chó</a></li>
                              <li><a class="dropdown-item text-dark" href="food-cat.html">Đồ ăn cho mèo</a></li>
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pk.html">PHỤ KIỆN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cat.html">LIÊN HỆ</a>
                        </li>
                        
                      </ul>
                    </div>
                </div>
                <div class="menu-2 me-3">
                     <ul class="navbar-nav me-auto menu-22">
                        <li ><a  href="#"><i class="fa fa-search" ></i></a>
                            <ul class="search">
                                <li>
                                    <form action="" method="get">
                                        <input type="search" name="txtsearch" placeholder="Tìm kiếm ....">
                                        <input type="submit" name="btm" value="Search">
                                    </form>
                                        
                                </li>
                            </ul>
                        </li>
                        <li class="lii"><button  type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-user-circle-o text-white" ></i>
                        </button>
                        <div class="modal mt-5 p-5 account fade" id="myModal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-dark">Đăng Nhập || <span><a href="register.html"  class="text-info">Đăng ký</a></span></h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                          
                                <!-- Modal body -->
                                <div class="modal-body">
                                  <form action="" method="post">
                                    <div class="mb-3 mt-3 text-dark">
                                        <label for="email" class="mb-1"><b>Tên đăng nhập</b></label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter username" name="email">
                                      </div>
                                      <div class="mb-3 text-dark">
                                        <label for="pwd" class="mb-1"><b>Mật khẩu</b></label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                      </div>
                                    <div class="text-dark">
                                        <input type="submit" class="btn me-3 mb-3 p-2" value="Đăng Nhập">
                                        <input type="checkbox" class="form-check-input mt-2" name="" id=""> <span>Ghi nhớ đăng nhập</span>
                                    </div>
                                    <div class="mb-3">
                                        <a href="forgetpass.html" class="text-dark ">Quên mật khẩu</a>
                                    </div>
                                  </form>
                                </div>
                          
                              </div>
                            </div>
                        </li>
                        <li><a  href="carts.html"><i class="fa fa-shopping-cart" ></i></a></li>
                    </ul>
                </div>
            </nav>
              
        </div>
        <!-- --------------------------------body--------------------------------- -->
          <div class="main d-flex">
            <div class="menu-left p-2">
              <h5 class="">Quản lý bán hàng</h5>
              <ul>
                <li>
                  <a href="admin.html" class="active">Khách hàng</a>
                </li>
                <li>
                  <a class=" text-white" data-bs-toggle="collapse" data-bs-target="#demo">Sản phẩm</a>
                    <ul id="demo" class="collapse">
                        <li><a href="manager-dog.html">Chó</a></li>
                        <li><a href="manager-cat.html">Mèo</a></li>
                        <li><a data-bs-toggle="collapse" data-bs-target="#demo1">Đồ ăn</a>
                          <ul id="demo1" class="collapse">
                            <li><a href="manager-food-dog.html">Cho chó</a></li>
                            <li><a href="manager-food-cat.html">Cho mèo</a></li>
                          </ul>
                        </li>
                        <li><a href="manager-pk.html">Phụ kiện</a></li>
                    </ul>
                </li>
                <li>
                  <a href="#">Kho hàng</a>
                </li>
                <li>
                  <a href="bill.html">Hóa đơn</a>
                </li>
                <li>
                  <a href="sales.html">Doanh thu</a>
                </li>
                <li>
                  <a href="blog.html">Blog</a>
                </li>
                <li>
                  <a href="pr.html">Quảng cáo</a>
                </li>
              </ul>
            </div>
            <div class="main-right">
              <div class="list-customer">
                <div class="container p-3">
                  <h4 class="text-dark text-center">SỬA KHÁCH KHÁCH HÀNG </h4>
                  <div id="body-contact">
            <img src="./images/bg-contact.jpg" alt="">
            <div class="container">
                <div class="row d-flex flex-wrap justify-content-center">
                    <div class="col-sm-8 p-4 mt-5 ct-right right-1" >
                        <h2 class="text-center mb-4">Mã khách hàng <?php  echo $_GET["edit"] ?></h2>
                        <form action="" method="post">
                        <?php
                        $select_user=$get_data->get_user($_GET["edit"]);
                        foreach($select_user as $se){
                            $email=$se['Email'];
                        ?>

                            <div class="d-flex flex-wrap justify-content-between info-1 mb-3 ">
                                <input type="text" class="me-3" name="txtHoten" id="" value="<?php echo $se['Hoten'] ?>">
                                <input type="email" name="txtEmail" id="" value="<?php echo $se['Email']?>">
                            </div>
                            <div class="d-flex flex-wrap justify-content-between info-1 mb-3">
                                <input type="text" name="txtSodienthoai" id="" value="<?php echo $se['Sodienthoai']?>">
                            </div>
                            <div class="d-flex flex-wrap justify-content-between info-1 mb-3">
                               <div class="info-1 ms-1 mt-2">
                                <input type="radio" name="txtGioitinh" id="" value="Nam" <?php if($se['Gioitinh']=="Nam") echo 'Checked';?>> Nam 
                                <input type="radio" name="txtGioitinh" id="" value="Nữ"  <?php if($se['Gioitinh']=="Nữ") echo 'Checked';?>> Nữ
                               </div>
                                <input type="date" name="txtNgaysinh" id="" value="<?php echo $se['Ngaysinh'] ?>">
                            </div>
                            <div class="info mb-4 d-flex">
                                <textarea name="txtDiachi" id="" cols="80" rows="5" ><?php echo $se['Diachi'] ?></textarea>
                            </div>
                            
                            <div class="send d-flex mb-3 justify-content-center">
                               <input type="submit" name="btnUpdate" class="" value="Sửa">
                            </div>
                            <?php } ?>
                        </form>
                        <?php
                        if(isset($_POST["btnUpdate"])){
                            echo $_POST["txtDiachi"];
                            
                            if($email!=$_POST["txtEmail"]){
                            $check_mail=$get_data->check_email($_POST["txtEmail"]);
                            if($check_mail>0){
                                echo"<script> alert('Email này đã đăng ký')</script>";	
                            }
                            else{
    
                                $date=date_format(date_create($_POST['txtNgaysinh']),"Y/m/d");
                                $update=$get_data->update_user($_GET['edit'],$_POST['txtHoten'],$_POST['txtEmail'],$_POST['txtDiachi'],$_POST['txtSodienthoai'],$_POST['txtGioitinh'],$date);
                                if($update){
                                    ?> <script>
                                location.href = 'admin.php';
                                </script>
                                <?php
                                }
                                
                                else
                                echo"<script> alert('Không thành công')</script>";
                                
                            }
                            }
                            }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------footer-------------------------- -->
        <div id="footer">
            <div class="container-fluid ft">
                <div class="row">
                    <div class="col-sm-3 left">
                        <h2>ĐIỀU HƯỚNG</h2>
                        <ul class="list-unstyled">
                            <li><a  href="">Trang chủ</a></li>
                            <li><a  href="">Về chúng tôi</a></li>
                            <li><a  href="">Sản phẩm</a></li>
                            <li><a  href="">Điểm tin hữu ích</a></li>
                            <li><a  href="">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 center align-center">
                        <div class="logo-1 text-center mb-5">
                            <img src="images/logo.png" alt="">
                        </div>
                        <div class="text-center">
                            <form action="" method="get">
                                <input type="email" name="" id="" placeholder="Enter your mail">
                                <input type="submit" value="Gửi">
                            </form>
                        </div>
                       
                    </div>
                    <div class="col-sm-3 right ">
                        <h2>Thông tin lên hệ</h2>
                        <ul class="list-unstyled">
                            <li><a  href=""><i class="fa icon fa-map-marker"></i>  Đại học Phương Đông<br> số 4 Ngõ Chùa Hưng Ký – Minh Khai <br> Hai Bà Trưng – Hà Nội</a></li>
                            <li><a  href=""><i class="fa icon fa-volume-control-phone" ></i> 02436241394 hoặc 0936738889</a></li>
                            <li><a  href=""><i class="fa icon fa-envelope-o" ></i> ict.dhphuongdong@gmail.com</a></li>
                            <li><a  href=""><i class="fa icon fa-facebook-square" ></i> facebook.com/cntt.phuongdong</a></li>
                            <li><a  href=""><i class="fa icon fa-globe" ></i> cntt.phuongdong.edu.vn
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>