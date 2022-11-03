<?php
$sanpham_lst = array();
$sp1 = array("giay1","Giày Thể Thao Nike Wmns Air Jordan 1 Low Gym Red Black DC0774-016 Màu Đỏ Đen Size 38","5.950.000");
$sp2 = array("giay2","Giày Thể Thao Adidas EQ21 Run Cold.Rdy H00494 Màu Xám Size 40","1.950.000");
$sp3 = array("giay3","Giày Sneaker MLB Big Ball Chunky Lite SD New York Yankees Shoes 3ASHC3S1N-50CGS Màu Trắng Xám Size 260","2.460.000");
$sp4 = array("giay4","Giày Thể Thao MLB Chunky Liner Boston Red Sox 3ASXCA12N-43BGS Màu Nâu Be Size 230","3.350.000");
$sp5 = array("giay5","Giày Thể Thao Adidas UltraBoost 22 Cold.RDY 'Black Solar Yellow' GX8028 Màu Đen Size 42.5","3.550.000");
$sp6 = array("giay6","Giày Thể Thao Adidas ULTRA4D Hurricanes Q46439 Màu Cam - Xanh Size 42.5","4.200.000");
$sp7 = array("giay7","Giày Thể Thao Adidas ULTRA4D Sun Devils FY3960 Màu Vàng Đỏ Size 41","4.200.000");
$sp8 = array("giay8","Giày Thể Thao Adidas Forum Luxe Low Shoes GX2158 Phối Màu Size 40","3.550.000");
$sp9 = array("giay9","Giày Sneakers Lacoste L004 0722 Màu Xanh Trắng Size 43","3.250.000");
$sp10 = array("giay10","Giày Thể Thao Lacoste Chaymon 0120 Màu Trắng Size 42","2.850.000");

array_push($sanpham_lst,$sp1);
array_push($sanpham_lst,$sp2);
array_push($sanpham_lst,$sp3);
array_push($sanpham_lst,$sp4);
array_push($sanpham_lst,$sp5);
array_push($sanpham_lst,$sp6);
array_push($sanpham_lst,$sp7);
array_push($sanpham_lst,$sp8);
array_push($sanpham_lst,$sp9);
array_push($sanpham_lst,$sp10);


$dssanpham = "";
foreach ($sanpham_lst as $key => $value) {
    # code...
    $dssanpham .= 
    "<div class='col-lg-3'>
    <div class='card mb-5'>
        <div class='card-header p-0'>                                   
            <div class='blog-media'>
                <img src='assets/imgs/$value[0].jpg' alt='' class='w-100'>
               
            </div>  
        </div>
        <div class='card-body px-0'>
            <h6 class='card-title mb-2 text-truncate2' >$value[1]</h6>    
            <h5 style='color: #ff0000' class='text-truncate'>$value[2] đ</h5>
            <div class='card-footer p-0'>
            <a href='#' class='btn btn-outline-dark btn-sm'>Xem chi tiết</a>
        </div>  
        </div>
    </div>
    </div>";

}





?>