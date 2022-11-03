<!DOCTYPE html>
<html>

<head>
    <title>Lap trinh web 2</title>
    <link rel="stylesheet" href="../css/1988206.css">

</head>

<body>

    <div class="main">

        <!-- vung c -->
        <?php require_once(dirname(dirname(__FILE__)) . '/template/1988206_vungC.php'); ?>
        <div class="rightcol">
            <div class="topcontent vunga">

                <div style="padding-top: 10px;">
                    <div>
                        <?php
                        $bai = "Bài 06";
                        printf("%s", $bai); ?>
                    </div>
                    <div>
                        Thông tin sinh viên làm bài:
                        <ul>
                            <li>Họ tên: Đỗ Tiến Biên</li>
                            <li>MSSV: 1988206</li>
                        </ul>
                    </div>
                    <div>
                        <?php echo "Ngày giờ hiện tại: " . date("Y/m/d") ?>
                    </div>
                    <h3>Xem thống kê điểm môn học</h3>
                   
                    <?php 
                include_once("dbinfo.php");
                //$sql = "select TenMon,dkhoc.Diem from  `monhoc` inner join `dkhoc` on dkhoc.MaMH =  monhoc.MaMonHoc";
                $sql1 = "select dkhoc.MaMH ,TenMon , link, count(dkhoc.Diem) AS soluong from  `dkhoc`  inner join `monhoc` on dkhoc.MaMH =  monhoc.MaMonHoc 
                where dkhoc.Diem >=5 Group by TenMon order by TenMon";
                $sql2 = "select dkhoc.MaMH, TenMon, link, count(dkhoc.Diem) AS soluong from  `dkhoc`  inner join `monhoc` on dkhoc.MaMH =  monhoc.MaMonHoc 
                where dkhoc.Diem <5 Group by TenMon order by TenMon";
                $dulieu1 = db_select($sql1);
                $dulieu2 = db_select($sql2);
              
                 
               
                
            ?>
            <table>
                <tr>
                    <th>Tên môn</th>
                    <th>Số lượng sinh viên đậu</th>
                    <th>Chi tiết</th>
                    <th>Số lượng sinh viên rớt</th>
                    <th>Chi tiết</th>
                </tr>
                <?php

                foreach ($dulieu1 as $key => $value) {
                   
                ?> 
                <tr>
                    <td><?php echo ( $value["TenMon"] );?></td>
                   
                    <td><?php echo( $value["soluong"] ); ?></td>
                     <td><a href="<?php echo( $value["link"].'.php?v=dau&k='.urlencode($value["MaMH"] )); ?>">Xem</a> </td>
                    <td> <?php
                     foreach ($dulieu2 as $k2 => $v2) {
                        
                        if ($value['TenMon'] == $v2['TenMon']) {
                            echo ( $v2['soluong'] );
                        }

                    }
                     ?>
                     </td>
                     <td><a href="<?php echo( $value["link"].'.php?v=rot&k='.urlencode($value["MaMH"] )); ?>">Xem</a> </td>
                </tr>
                
                <?php
                
                }
                ?>

            </table>

                  
                 
                </div>

                <div class="avatar vungb">
                    <!-- vung b -->

                </div>

            </div>
            <!-- vungd -->
            <?php require_once((dirname(dirname(__FILE__)) . '/template/1988206_vungD.php')); ?>


        </div>

    </div>

</body>

</html>