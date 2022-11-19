<?php
$connect = mysqli_connect('localhost', 'root', '', 'petshop');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
//câu truy vấn
$sql = "INSERT INTO donhang(id_kh,Diachi_giaohang,Tongtien,Trangthai)
VALUES (2,'Hai duong',123,'CHOXUATHANG')";
//kiểm tra
if (mysqli_query($connect, $sql))
    //Thông báo nếu thành công
    echo 'Thêm thành công. ID=' . mysqli_insert_id($connect);
else
    //Hiện thông báo khi không thành công
    echo 'Không thành công. Lỗi' . mysqli_error($connect);
//ngắt kết nối
mysqli_close($connect);
?>