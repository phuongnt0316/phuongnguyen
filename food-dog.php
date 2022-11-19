<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/product.css">
    <title>Document</title>
</head>
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
                          <a class="nav-link" href="intro.php">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="dog.php">CHÓ CẢNH</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cat.php">MÈO CẢNH</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="food.php" role="button" data-bs-toggle="dropdown">ĐỒ ĂN</a>
                            <ul class="dropdown-menu mt-3 p-2 fade">
                              <li><a class="dropdown-item text-dark " href="food-dog.php">Đồ ăn cho chó</a></li>
                              <li><a class="dropdown-item text-dark" href="food-cat.php">Đồ ăn cho mèo</a></li>
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pk.php">PHỤ KIỆN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">LIÊN HỆ</a>
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
                                  <h4 class="modal-title text-dark">Đăng Nhập || <span><a href="register.php"  class="text-info">Đăng ký</a></span></h4>
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
                                        <a href="forgetpass.php" class="text-dark ">Quên mật khẩu</a>
                                    </div>
                                  </form>
                                </div>
                          
                              </div>
                            </div>
                        </li>
                        <li><a  href="cart.php"><i class="fa fa-shopping-cart" ></i></a></li>
                    </ul>
                </div>
            </nav>
              
        </div>
        <!-- --------------------------------body--------------------------------- -->
        <div id="body">
          <div class="first-select d-flex justify-content-between m-4">
            <div class="first-select1 text-dark">
                <a href="index.php">TRANG CHỦ</a> <span> || <b>ĐỒ ĂN || ĐỒ ĂN CHO CHÓ</b></span>
            </div>
            <div class="first-select1">
                <select name="chose" id="select">
                    <option value="Thứ tự mặc định">Thứ tự mặc định</option>
                    <option value="Thứ tự theo mức độ phổ biến">Thứ tự theo mức độ phổ biến</option>
                    <option value="Thứ tự theo điểm đánh giá sản phẩm">Thứ tự theo điểm đánh giá sản phẩm</option>
                    <option value="Thứ tự theo đánh giá: từ thấp đến cao">Thứ tự theo đánh giá: từ thấp đến cao</option>
                    <option value="Thứ tự theo đánh giá: từ cao đến thấp">Thứ tự theo đánh giá: từ cao đến thấp</option>
                </select>
            </div>
        </div>
          <div class="container-fluid">
            <div class="row ms-1 mt-2">
              <div class="col-sm-3">
                <div class="category">
                  <div class="first-category">
                      <p class="title-2 text-dark"><b>DANH MỤC SẢN PHẨM</b></p>
                      <div class="type p-2">
                          <div class="dm p-1"><a href="dog.php" >Chó cảnh</a></div>
                          
                          <div class="dm p-1"><a href="dog.php" >Mèo cảnh</a></div>
                          
                      </div>
                  </div>
                 
                  <div class="first-category text-dark mt-3 ">
                      <p class="title-2"><b>SẢN PHẨM</b></p>
                      <div class="type p-2">
                        <div class="type-of">
                            <div class="type-img">
                              <a href=""><img src="images/cat/cat-8.jpg" alt=""></a>
                            </div>
                            <div class="type-des">
                                <a href="">Chó alaska</a>
                                <p>200$</p>
                            </div>
                        </div>
                        <div class="type-of">
                              <div class="type-img">
                                  <a href=""><img src="images/cat/cat-1.jpg" alt=""></a>
                              </div>
                           <div class="type-des">
                               <a href="">Chó alaska</a>
                               <p>200$</p>
                           </div>
                          </div>
                          <div class="type-of">
                              <div class="type-img">
                                <a href=""><img src="images/cat/cat-2.jpg" alt=""></a>
                              </div>
                              <div class="type-des">
                                  <a href="">Thức ăn cho chó</a>
                                  <p>200$</p>
                              </div>
                          </div>
                          <div class="type-of">
                              <div class="type-img">
                                <a href=""><img src="images/cat/cat-8.jpg" alt=""></a>
                              </div>
                              <div class="type-des">
                                  <a href="">Mèo Anh - tai cụp</a>
                                  <p>200$</p>
                              </div>
                          </div>
                          <div class="type-of">
                              <div class="type-img">
                                <a href=""><img src="images/cat/cat-8.jpg" alt=""></a>
                              </div>
                              <div class="type-des">
                                  <a href="">Mèo ta</a>
                                  <p>200$</p>
                              </div>
                          </div>
                          
                      </div>
                  </div>
              </div>
              </div>
              <div class="col-sm-9">
                <div class="product container-fluid">
                  <div class="menu-product d-flex flex-wrap justify-content-around mt-3">
                    <div class="item-product text-center mb-5">
                      <div class="images-item">
                        <img src="images/food/f-5.jpg" alt="">
                      </div>
                      <div class="title-item">
                        <p class="item-kind">Chó cảnh <br></p>
                       <p class="item-name"><b>Chó Alasca trắng đen</b></p>
                      </div>
                      <div class="price-item mb-1">
                        <span class="price"><b>Gía: 5000000</b></span>
                      </div>
                    </div>
                    <div class="item-product text-center mb-5">
                      <div class="images-item">
                        <img src="images/food/f-6.jpg" alt="">
                      </div>
                      <div class="title-item">
                        <p class="item-kind">Chó cảnh <br></p>
                       <p class="item-name"><b>Chó Alasca trắng đen</b></p>
                      </div>
                      <div class="price-item mb-1">
                        <span class="price"><b>Gía: 5000000</b></span>
                      </div>
                    </div>
                    <div class="item-product text-center mb-5">
                      <div class="images-item">
                        <img src="images/food/f-7.jpg" alt="">
                      </div>
                      <div class="title-item">
                        <p class="item-kind">Chó cảnh <br></p>
                       <p class="item-name"><b>Chó Alasca trắng đen</b></p>
                      </div>
                      <div class="price-item mb-1">
                        <span class="price"><b>Gía: 5000000</b></span>
                      </div>
                    </div>
                    <div class="item-product text-center mb-5">
                      <div class="images-item">
                        <img src="images/food/f-8.jpg" alt="">
                      </div>
                      <div class="title-item">
                        <p class="item-kind">Chó cảnh <br></p>
                       <p class="item-name"><b>Chó Alasca trắng đen</b></p>
                      </div>
                      <div class="price-item mb-1">
                        <span class="price"><b>Gía: 5000000</b></span>
                      </div>
                    </div>
                    <div class="item-product text-center mb-5">
                      <div class="images-item">
                        <img src="images/food/f-9.jpg" alt="">
                      </div>
                      <div class="title-item">
                        <p class="item-kind">Chó cảnh <br></p>
                       <p class="item-name"><b>Chó Alasca trắng đen</b></p>
                      </div>
                      <div class="price-item mb-1">
                        <span class="price"><b>Gía: 5000000</b></span>
                      </div>
                    </div>
                    <div class="item-product text-center mb-5">
                      <div class="images-item">
                        <img src="images/food/f-10.jpg" alt="">
                      </div>
                      <div class="title-item">
                        <p class="item-kind">Chó cảnh <br></p>
                       <p class="item-name"><b>Chó Alasca trắng đen</b></p>
                      </div>
                      <div class="price-item mb-1">
                        <span class="price"><b>Gía: 5000000</b></span>
                      </div>
                    </div>
                    
                  </div>
                </div>
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
                      <div class="logo-1 text-center mb-3 text-white">
                        <img src="images/logo.png" alt="">
                        <p class="mt-3">Nơi gửi gắm niềm tin về vẻ đẹp thú cưng</p>
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