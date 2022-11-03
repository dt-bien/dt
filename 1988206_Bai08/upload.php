<?php


include_once("dbinfo.php");

?>

<a href="./">Về trang chủ</a>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $tensp = $_POST['tensp'];
    $giaban = $_POST['giaban'];
   
    $target_dir = "ProductPhotos";
    $image_name=basename($_FILES["hinhsp"]["name"]);
    $url_image = "$target_dir/$image_name";

    if (!isset($_POST["tensp"]) || !isset($_POST["giaban"]) || !$image_name ) {
        echo ("Nhập chưa đủ thông tin");
        exit();
    }

   $sql = "INSERT INTO `Sanpham` (`Id`, `TenSp`, `Giaban`, `Hinh`) VALUES (NULL, '$tensp', '$giaban', '$url_image')" ;


    $rel =  db_insert($sql);
  
 
    $filetype=  strtolower(pathinfo($image_name,PATHINFO_EXTENSION));
    $uploadstatus = 1;

    if (isset($_POST["submit"])) {
        $check = $_FILES['hinhsp']['tmp_name'];
        if ($check != false) {

        } else {
            $uploadstatus = 0;
        }
    }
    if (!file_exists($target_file)) {
        if ($filetype == 'jpg' || $filetype == 'png' || $filetype == 'jpeg' || $filetype == 'gif') {
            if (move_uploaded_file($_FILES['hinhsp']['tmp_name'] , "$target_dir/$image_name")) {
                echo ("<div> Thêm sản phẩm thành công </div>");
            } else {
                echo ("<div> Thêm sản phẩm không thành ông </div>");
            }
        }
    }

   
    

}  else {

    echo "<div> Phương thức không hỗ trợ </div>";
}
?>