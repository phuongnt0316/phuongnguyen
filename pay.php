<!DOCTYPE html>
<?php
session_start();
include("control.php");
$get_data=new data();
if(!empty($_SESSION["email"])&&!empty($_SESSION["pass"])){
  $getdata=$get_data->login_user($_SESSION["email"],$_SESSION["pass"]);
  foreach($getdata as $sel){
      $id_kh=$sel["id_kh"];
      $_SESSION["hoten"]=$sel["Hoten"];
      $hoten=$sel["Hoten"];
      $email=$sel["Email"];
      $diachi=$sel["Diachi"];
      $sdt=$sel["Sodienthoai"];
  }

}
else {?> <script>

location.href = 'login.php';
</script>
<?php }?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/cart.css">
    <title>Document</title>
</head>
<style>
  .pay-right .pay-right-main input{
    background: var(--main-color-3);
    padding: 10px;
    width: 150px;
    border: none;
    color: var(--color-3);
}
.pay-right .pay-right-main input:hover{
    background: var(--main-color-3hover);
}
.add-address{
    background: var(--main-color-1);
    padding:15px 10px;
    width: 150px;
    height:20px;
    text-decoration:none;
    border: none;
    color: var(--color-3);
    margin-top:20px;
}
.add-address:hover{
  color:azure;
  background:#25928c;
}
</style>
<body>
    <div class="content">
        <div id="header">
            <nav class=" container-fluid p-2 navbar-expand-sm navbar-dark bg-dark d-flex align-items-center justify-content-between">
                <div class="ms-3">
                  <a class="navbar-brand" href="index1.php">
                    <img src="images/logo.png" alt="">
                  </a>
                </div>
                <div class=" menu-1">
                    <div class="collapse navbar-collapse" id="mynavbar">
                      <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="intro.php">GI???I THI???U</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="dog.php">CH?? C???NH</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cat.php">M??O C???NH</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="food.php" role="button" data-bs-toggle="dropdown">????? ??N</a>
                            <ul class="dropdown-menu mt-3 p-2 fade">
                              <li><a class="dropdown-item text-dark " href="food-dog.php">????? ??n cho ch??</a></li>
                              <li><a class="dropdown-item text-dark" href="food-cat.php">????? ??n cho m??o</a></li>
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pk.php">PH??? KI???N</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">LI??N H???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">BLOG</a>
                        </li>
                      </ul>
                    </div>
                </div>
                <div class="menu-2 me-3">
                     <ul class="navbar-nav me-auto menu-22">
                        <li ><a  href="#"><i class="fa fa-search" ></i></a>
                            <ul class="search">
                                <li>
                                <form action="search.php" method="post">
                                        <input type="search" name="txtsearch" placeholder="T??m ki???m ....">
                                        <input type="submit" name="sub_serch" value="Search">
                                    </form> 
                                </li>
                            </ul>
                        </li>
                        <li class="lii"><button  type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-user-circle-o text-white" ></i>
                        </button>
                        <?php if(empty ($_SESSION["email"])){?>
                        <div class="modal mt-5 p-5 account fade" id="myModal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title text-dark">????ng Nh???p || <span><a href="register.php"  class="text-info">????ng k??</a></span></h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                          
                                <!-- Modal body -->
                                <div class="modal-body">
                                  <form action="" method="post">
                                    <div class="mb-3 mt-3 text-dark">
                                        <label for="email" class="mb-1"><b>T??n ????ng nh???p</b></label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter username" name="email">
                                      </div>
                                      <div class="mb-3 text-dark">
                                        <label for="pwd" class="mb-1"><b>M???t kh???u</b></label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                      </div>
                                    <div class="text-dark">
                                        <input type="submit" class="btn me-3 mb-3 p-2" value="????ng Nh???p">
                                        <input type="checkbox" class="form-check-input mt-2" name="" id=""> <span>Ghi nh??? ????ng nh???p</span>
                                    </div>
                                    <div class="mb-3">
                                        <a href="forgetpass.php" class="text-dark ">Qu??n m???t kh???u</a>
                                    </div>
                                  </form>
                                  <?php
    if(isset($_POST["sub_dangnhap"])){
      if(empty($_POST["txtemail"])||empty($_POST["txtpass"]))
      {
      echo("<script>alert('Kh??ng ???????c ????? tr???ng');</script>");
      }
  else
  {
    $login=$get_data->login($_POST["txtemail"],$_POST["txtpass"]);
    if ($login==1)
    {
        $_SESSION["email"]=$_POST["txtemail"];
        $_SESSION["pass"]=$_POST["txtpass"];//khoi tao session co ten la user
        $get=$get_data->login_user($_POST["txtemail"],$_POST["txtpass"]);
        foreach($get as $se){
            $lv=$se["quyen"];
            $_SESSION["quyen"]=$se["quyen"];
            $_SESSION["hoten"]=$se["Hoten"];
        }
            //header("location:admin_login.php");}
            
        if($lv==0)
        {?>
         <script>

            location.href = 'index1.php';
            </script>
        <?php
        //	header("location:user_login.php");
        }
        else{?>
          <script>
            //alert("lv".$lv);
          location.href = 'admin.php';
          </script>
      <?php
      }
        //echo("<script>alert('login thanh cong!!!');</script>");
    }
  
    else
    echo("<script>alert('login that bai!!!');</script>");   
    
  }
  
}

?>	
                                </div>
                          
                              </div>
                            </div>                                                       
                        </li>
                        <?php } 
                            else{
                            
                            ?>
                            <li><?php echo $_SESSION["hoten"]?></li>
                            <li><a href="logout.php" class="text-white">????ng xu???t</a></li> 
                            <?php }?>
                        <li><a  href="cart.php"><i class="fa fa-shopping-cart" ></i></a></li>
                    </ul>
                </div>
            </nav>
              
        </div>
        <!-- --------------------------------body--------------------------------- -->
        <div id="body">
          <div class="container-fluid">
            <div class="row text-dark p-3 pay">
              <div class="col-md-7 pay-left p-5">
                <form action="" method="post">
                <h5 class="mb-3">CH???N ?????A CH??? GIAO H??NG</h5>
                  <table class="table mb-3">
                    <tr>
                      <th>Ch???n ?????a ch???</th>
                      <th>H??? t??n</th>
                      <th>S??? ??i???n tho???i</th>
                      <th>?????a ch???</th>
                    </tr>
                    <?php 
                    $get_address=$get_data->get_diachigiaohang($id_kh);
                    foreach($get_address as $d){
                    ?>
                    <tr>
                    <td><input type="radio" class="form-check-input" name="txtdiachi" value="<?php echo $d["Hoten"]."-".$d["Sodienthoai"]."-".$d["Diachi_giaohang"]?>"></td>
                    <td><?php echo $d["Hoten"]?></td>
                    <td><?php echo $d["Sodienthoai"]?></td>
                    <td><?php echo $d["Diachi_giaohang"]?></td>
                    </tr>
                    <?php } ?>
                  </table>
                  <a href="user_address.php" class="add-address mt-3">Th??m ?????a ch??? giao h??ng kh??c</a>
                  
                
              </div>
              <div class="col-md-5 pay-right p-5">
                <div class="pay-right-main p-4">
                  <h5>????N H??NG C???A B???N</h5>
                  
                    <table class="table">
                      <tr>
                        <td><b>S???N PH???M</b></td>
                        <td><b>TH??NH TI???N</b></td>
                      </tr>
                      <?php 
                      $get_cart=$get_data->get_cart($id_kh);
                      foreach($get_cart as $p){
                       ?>
                      <tr>
                        <td><?php echo $p["Tenthucung"]." * ".$p["Soluong"] ?> <span class="soluong"></span></td>
                        <td><b><?php echo $p["Tong"]?> </b></td>
                      </tr>
                      <?php } 
                      $Sum=$get_data->sumcart($id_kh);
                      foreach($Sum as $s){
                        $sum_cart=$s["Tong"];
                      }
                      ?>
                      <tr>
                        <td><b>Giao h??ng</b></td>
                        <td><b>Mi???n ph?? giao h??ng</b></td>
                      </tr>
                      <tr>
                        <td><b>T???ng thanh to??n</b></td>
                        <td><b><?php echo $sum_cart; ?></b></td>
                      </tr>
                    </table>
                    <p>Khi nh???n h??ng qu?? kh??ch vui l??ng ki???m tra k??? ????n h??ng tr?????c khi nh???n ????? ?????m b???o tr??nh c??c v???n ????? sai s??t v?? kh??ng ph??t sinh th??m ph?? d???ch v??? kh??c <br> <b>Xin tr??n th??nh c???m ??n s??? ???ng h??? c???a qu?? kh??ch!</b></p>
                    <input type="submit" class="mt-3" value="Thanh to??n" name="sub_pay">
                  
                </div>
                
              </div>
              </form>
                  <?php if(isset($_POST["sub_pay"])){
                    
                    $diachi=$_POST["txtdiachi"];
                    $rs=$get_data->insert_donhang($id_kh,$diachi,$sum_cart);
                    $insert=$get_data->insert_ctdonhang($rs,$id_kh);
                    $get_cart=$get_data->get_cart($id_kh);
                    foreach($get_cart as $insert){
                      if($insert["Maloai"]=="CHO"){
                       $update=$get_data->mua_cho($insert["id_sp"]); 
                      }
                      else{
                        if($insert["Maloai"]=="MEO"){
                          $update=$get_data->mua_meo($insert["id_sp"]); 
                        }
                        else{
                          $update=$get_data->mua_sanpham($insert["Soluong"],$insert["id_sp"]);
                        }
                      }
                    }
                    $delete=$get_data->delete_giohang($id_kh);
                    
                    if($delete){?>
                             <script>
                            
                             location.href = 'user_donhang.php';
                             </script>
                    <?php

                    }
                    else ?>
                    <script>
                    //alert('Li??n h??? hotline!');
                    </script>
                    <?php
                  } ?>
            </div>
          </div>
        </div>

        <!-- -------------------------------------footer-------------------------- -->
        <div id="footer">
            <div class="container-fluid ft">
                <div class="row">
                    <div class="col-sm-3 left">
                        <h2>??I???U H?????NG</h2>
                        <ul class="list-unstyled">
                            <li><a  href="">Trang ch???</a></li>
                            <li><a  href="">V??? ch??ng t??i</a></li>
                            <li><a  href="">S???n ph???m</a></li>
                            <li><a  href="">??i???m tin h???u ??ch</a></li>
                            <li><a  href="">Li??n h???</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 center align-center">
                    <div class="logo-1 text-center mb-3 text-white">
                            <img src="images/logo.png" alt="">
                            <p class="mt-3">N??i g???i g???m ni???m tin v??? v??? ?????p th?? c??ng</p>
                        </div>
                        <div class="text-center">
                            <form action="" method="get">
                                <input type="email" name="" id="" placeholder="Enter your mail">
                                <input type="submit" value="G???i">
                            </form>
                        </div>
                       
                    </div>
                    <div class="col-sm-3 right ">
                        <h2>Th??ng tin li??n h???</h2>
                        <ul class="list-unstyled">
                            <li><a  href=""><i class="fa icon fa-map-marker"></i>  ?????i h???c Ph????ng ????ng<br> s??? 4 Ng?? Ch??a H??ng K?? ??? Minh Khai <br> Hai B?? Tr??ng ??? H?? N???i</a></li>
                            <li><a  href=""><i class="fa icon fa-volume-control-phone" ></i> 02436241394 ho???c 0936738889</a></li>
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