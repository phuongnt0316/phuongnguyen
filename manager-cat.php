<!DOCTYPE html>
<?php
ob_start();
session_start();
if(empty($_SESSION["email"])){
  header('location:login.php');
}
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
            <nav class=" container-fluid p-2 navbar-expand-sm navbar-dark bg-dark d-flex align-items-center justify-content-around">
                <div class="ms-3">
                  <a class="navbar-brand" href="index1.php">
                    <img src="images/logo.png" alt="">
                  </a>
                </div>
                <div class=" menu-1">
                    <div class="collapse navbar-collapse" id="mynavbar">
                      <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="admin.php">KHÁCH HÀNG</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">SẢN PHẨM</a>
                            <ul class="dropdown-menu mt-3 p-2 fade">
                              <li><a class="dropdown-item text-dark " href="manager-dog.php">CHÓ</a></li>
                              <li><a class="dropdown-item text-dark" href="manager-cat.php">MÈO</a></li>
                              <li><a class="dropdown-item text-dark" href="manager-food-dog.php">ĐỒ ĂN CHO CHÓ</a></li>
                              <li><a class="dropdown-item text-dark" href="manafer-food-cat.php">ĐỒ ĂN CHO MÈO</a></li>
                              <li><a class="dropdown-item text-dark" href="pk.php">PHỤ KIỆN</a></li>
                              
                            </ul>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">KHO HÀNG</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">HÓA ĐƠN</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">DOANH THU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">QUẢNG CÁO</a>
                        </li>
                        
                      </ul>
                    </div>
                </div>
            </nav>
              
        </div>
        <!-- --------------------------------body--------------------------------- -->
          <div class="main d-flex">
            <div class="menu-left p-2">
              <h5 class="">Quản lý bán hàng</h5>
              <ul>
                
              </ul>
            </div>
            <div class="main-right">
              <div class="list-customer">
                <div class="container p-3">
                  <h4 class="text-dark text-center">DANH SÁCH SẢN PHẨM - MÈO CẢNH || <a href="add-pet.php">Thêm Thú cưng</a></h4>
                  <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm khách hàng">
                  <br>
                  <table class="table table-bordered table-striped .table-responsive">
                    <thead class="table-dark">
                      
                      
                      <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên thú cưng</th>
                        <th>Loại</th>
                        <th>Chủng loại</th>
                        <th>Đơn giá</th>
                        <th>Kiểu lông</th>
                        <th>Màu sắc</th>
                        <th>Mức độ rụng lông</th>
                        <th>Mức độ phôt biến</th>
                        <th>Vẻ ngoài</th>
                        <th>Thông tin</th>
                        <th>Anhr1</th>
                        <th>Ảnh 2</th>
                        <th>Trạng thái</th>
                        <th colspan="3">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                    <?php
                      include("control.php");
                      $get_data=new data();
                      $get=$get_data->get_allcat();
                      foreach($get as $se){
                      ?>
                      <tr>
                        <td>dddd<?php echo $se["id_dv"] ?></td>
                        <td><?php echo $se["Tenthucung"] ?></td>                      
                        <td><?php $loai=$get_data->get_tenchungloai($se["Machungloai"]);foreach ($loai as $lo){echo $lo["Tenchungloai"];}?></td>
                        <td><?php echo $se["Maloai"] ?></td>
                        <td><?php echo $se["Dongia"] ?></td>
                        <td><?php echo $se["Kieulong"] ?></td>
                        <td><?php echo $se["Mausac"] ?></td>
                        <td><?php echo $se["Mucdorunglong"] ?></td>
                        <td><?php echo $se["Mucdophobien"] ?></td>
                        <td><?php echo $se["Vengoai"] ?></td>
                        <td><?php echo $se["Thongtinthem"] ?></td>
                        <td><img src="img/<?php echo $se['Anh1'] ?>" alt="" width="50px"></td>
                        <td><img src="img/<?php echo $se['Anh2'] ?>" alt="" width="50px"></td>
                        <td><?php echo $se["Trangthai"] ?></td>
                        <td><a href="updatecat.php?id=<?php echo $se["id_dv"] ?>">Sửa</a></td>
                        <td><a href="#">Xóa</a></td>
                      </tr>
                      <?php } ?>
                      
                    </tbody>
                  </table>
                </div>
                
                <script>
                $(document).ready(function(){
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>
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