<?php

$menu_top = "<nav class='navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top'>
<div class='container'>
    <button class='navbar-toggler ml-auto' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav'>                     
            <li class='nav-item '.$active == 'trangchu' ? 'active' :''. '>
                <a class='nav-link ' href='index.php?page=trangchu'>Trang chủ</a>
            </li>
            <li class='nav-item '.$active == 'sanpham' ? 'active' :'' . '>
                <a class='nav-link' href='index.php?page=sanpham'>Sản phẩm</a>
            </li>
        </ul>
        
    </div>
</div>
</nav>'";
?>
