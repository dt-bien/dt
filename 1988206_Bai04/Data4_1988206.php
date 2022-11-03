<?php
    class Sinhvien {
        public $mssv;
        public $hoten;
        public $diemtb;
        public $urlavatar;
        function __construct($mssv1 , $hoten1 , $diemtb1, $url1)
        {
            $this->mssv = $mssv1;
            $this->hoten = $hoten1;
            $this->diemtb = $diemtb1;
            $this->urlavatar = $url1;
        }
    }
   
    require_once('Lib_1988206.php');
    $DSSV_1988206 = generator();
   
?>