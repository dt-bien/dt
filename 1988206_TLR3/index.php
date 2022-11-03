<?php

$page = "";
$active = "";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
switch ($page) {

    case '':
        # code...
        include('thongtinsv.php');
        include('menu.php');
        $thongtin = $thongtinsv;
        $menu = $menu_top;
        $html = file_get_contents('home.tpl');
        $html = str_replace('{{thongtinsv}}',$thongtin,$html);
        $html = str_replace('{{menu}}',$menu,$html);

        print ($html);
        break;
    case 'trangchu':
        # code...
        include('thongtinsv.php');
        include('menu.php');
        $thongtin = $thongtinsv;
        $menu = $menu_top;
        $html = file_get_contents('home.tpl');
        $html = str_replace('{{thongtinsv}}',$thongtin,$html);
        $html = str_replace('{{menu}}',$menu,$html);
        print ($html);

        break;
    
    case 'sanpham':
        # code...
        $active='sanpham';
        include('dssanpham.php');
        include('menu.php');
        $menu = $menu_top;
        $ds_sanpham = $dssanpham;
        $html = file_get_contents('sanpham.tpl');
        $html = str_replace('{{MENU}}',$menu, $html);
        $html = str_replace('{{DSSANPHAM}}',$ds_sanpham, $html);
                             
        print($html);
        
        break;
    
    default:
        # code...
        break;
}


?>