<?php
function generator() {
    $arHo = ["Nguyễn","Lê","Văn","Đỗ","Phan","Phạm","Lý","Trần","Đinh"];
    $arTenLot1 = ["Thị","Văn","Bảo","Tú","Hoài","Thùy","Hương","Kiều","Trúc","Hạ"];
    $arTenLot2 = ["Bảo","Tú","Hoài","Thùy","Hương","Kiều","Trúc","Hạ","Nhật","Hồng","Lam"];
    $arTen = ["An","Bảo","Chương","Danh","Duy","Hưng","Hữu","Khang","Khánh","Khoa","Minh"];
    $DATA = [];
    $length = rand(20,100);
    for (  $i = 0 ;$i < $length ; $i++) 
    {
        $sv = new Sinhvien( rand(100000,1000000), $arHo[rand(0,count($arHo)-1)].' '.$arTenLot1[rand(0,count($arTenLot1)-1)].' '.
        $arTenLot2[rand(0,count($arTenLot2)-1)].' '.$arTen[rand(0,count($arTen)-1)] , rand(0,10).'.'.rand(0,9), "https://hinh/".rand(10,100) );
        array_push($DATA,$sv);
    }
    return $DATA;
}

?>