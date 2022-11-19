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
     <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                              <li><a class="dropdown-item text-dark " href="food-dog.php">CHÓ</a></li>
                              <li><a class="dropdown-item text-dark" href="food-cat.php">MÈO</a></li>
                              <li><a class="dropdown-item text-dark" href="food-dog.php">ĐỒ ĂN CHO CHÓ</a></li>
                              <li><a class="dropdown-item text-dark" href="food-cat.php">ĐỒ ĂN CHO MÈO</a></li>
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
                <!-- <div class="menu-2 me-3">
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
                          
                                Modal body 
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
                </div> -->
            </nav>
              
        </div>
        <!-- --------------------------------body--------------------------------- -->
        <div class="main d-flex justify-content-center">
             
             <div class="main-right">
               <div class="list-customer">
                 <div class="container p-3 ms-5">
                   <h4 class="text-dark text-center">DANH SÁCH || <a href="admin.html">Quay lại</a></h4>
                   <br>
                   <form action="" enctype="multipart/form-data" method="post" class="form-info text-dark me-5">
                     <table>
                         <tr>
                             <td><label for="id" class="">ID</label></td>
                             <td><input type="text" name="txtId" id="id" ></td>
                         </tr>
                         <tr>
                             <td><label for="ten">Tên thú nuôi</label</td>
                             <td><input type="text" name="txtTen" id="ten" ></td>
                         </tr>
                         <tr>
                             <td><label for="tenloai">Tên chủng loại</label></td>
                             <td> 
                                     <select name="txtTenchungloai" id="maloai">
                                     <?php include('control.php');
                                     $get_data=new data();
                                     $loai=$get_data->get_chungloai($maloai);
                                     foreach($loai as $se){
                                     ?>
                                     <option value="<?php echo $se['Machungloai'] ?>"><?php echo $se['Tenchungloai'] ?></option>
 
                                                   <?php }?>
                          </select>  
                             </td>
                         </tr>
                         <tr>
                             <td><label for="kichthuoc">Kích Thước</label></td>
                             <td>
                                 <select name="txtKichthuoc" id="">
                                     <option value="">---Chọn---</option>
                                     <option value="Nhỏ">Nhỏ</option>
                                     <option value="Trung Bình">Trung bình</option>
                                     <option value="Lớn">Lớn</option>
                                 </select>
                             </td>
                         </tr>
                         <tr>
                             <td><label for="long">Kiểu lông</label></td>
                             <td>
                                 <select name="txtKieulong" id="long">
                                     <option value="">---Chọn---</option>
                                     <option value="Ngắn">Ngắn</option>
                                     <option value="Dài">Dài</option>
                                     <option value="Xoăn">Xoăn</option>
                                 </select>
                             </td>
                         </tr>
                         <tr>
                             <td><label for="phobien">Độ phổ biến</label></td>
                             <td>
                                 <select name="txtPhobien" id="">
                                     <option value="">---Chọn---</option>
                                     <option value="Cao">Cao</option>
                                     <option value="Trung bình">Trung bình</option>
                                     <option value="Thấp">Thấp</option>
                                 </select>
                             </td>
                         </tr>
                         <tr>
                             <td><label for="mucdich">Mục đích nuôi</label></td>
                             <td>
                                 <select name="txtMucdich" id="">
                                     <option value="">---Chọn---</option>
                                     <option value="Làm cảnh, bầu bạn">Làm cảnh & bầu bạn</option>
                                     <option value="Canh gác, bảo vệ">Canh gác, bảo vệ</option>
                                 </select>
                             </td>
                         </tr>
                         <tr>
                             <td><label for="mota">Mô tả</label></td>
                             <td><textarea name="txtMota" id="" cols="57.5" rows="5"></textarea></td>
                         </tr>
                         <tr>
                             <td><label for="gia">Giá</label></td>
                             <td><input type="text" name="txtDongia" id="gia" ></td>
                         </tr>
                         
                             
                         <tr>
                             <td><label for="anh1">Ảnh 1</label></td>
                             <td><input type="file" name="txtFile1" id="anh1" ></td>
                         </tr>
                         <tr>
                             <td><label for="anh2">Ảnh 2</label></td>
                             <td><input type="file" name="txtFile2" id="anh2" ></td>
                         </tr>
                         <tr>
                             <td colspan="2" >
                                 <input type="submit" name="btnThem" class=" sd text-right" value="Gửi">
                             </td>
                         </tr>
                         
                         
                     </table>
                   </form>
                   <?php
                  if(isset($_POST["btnThem"])){
                      $check_id=$get_data->check_idcho($_POST["txtId"]);
                      if($check_id>0){
                          echo"<script> alert('ID đã tồn tại, vui lòng kiểm tra lại')</script>";	
                      }
                      else{
                       //VALUES ('$id_dv', '$Tenthucung', '$Maloai', '$Machungloai', '$Kieulong', '$Mucdichnuoi', '$Kichthuoc', '$Dongia', '$Mucdophobien', '$Thongtinthem', '$Anh1', '$Anh2')";
                       move_uploaded_file($_FILES['txtFile1']['tmp_name'],"img/". $_FILES['txtFile1']['name']);
                       move_uploaded_file($_FILES['txtFile2']['tmp_name'],"img/". $_FILES['txtFile2']['name']);
                       $insert=$get_data->insert_cho($_POST['txtId'],$_POST['txtTen'],$maloai,$_POST['txtTenchungloai'],$_POST['txtKieulong'],$_POST['txtMucdich'],$_POST['txtKichthuoc'],$_POST['txtDongia'],$_POST['txtPhobien'],$_POST['txtMota'],$_FILES['txtFile1']['name'],$_FILES['txtFile2']['name']);
                   
                       if($insert){
                         ?> <script>
                         location.href = 'admin.php';
                       </script>
                       <?php
                   
                       }
                       else
                       echo"<script> alert('Không thành công')</script>";
                   
                               }
 
                             }
                         
                         ?>
                   ?>
 
                 </div>
                 
               </div>
             </div>
           </div>
        <!-- -------------------------------------footer-------------------------- -->
        <div id="footer">
            <div class=" ft text-center">
                 <p>Sản phẩm của Phuong&Linh PDU - Hotline hỗ trợ : 0123456789</p>
            </div>
        </div>
    </div>
</body>
</html>