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

                <div>
                    <div>
                        <?php
                        $bai = "Bài 08";
                        printf("%s", $bai); ?>
                    </div>
                    <div>
                        <?php echo "Ngày giờ hiện tại: " . date("Y/m/d") ?>
                    </div>
                    <div>Kết quả bài tâp tuần</div>
                    <?php 
                     include_once("dbinfo.php");
                     $sql = "select * from Sanpham ";
                        $data = db_select($sql);
                       
                        $title = "Danh sách sản phẩm";

                      
                    ?>
                    <a href="addproduct.php">Thêm sản phẩm</a>
                    <h3>Danh sách sản phẩm</h3>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá bán</th>
                            <th>Hình</th>
                        </tr>
                        <?php
                       
                        foreach ($data as $key => $value) {
                                ?>
                                 <tr>
                                    <td> <?php echo ($value["Id"]); ?></td>
                                    <td> <?php echo ($value["TenSp"]);?></td>
                                    <td> <?php echo ($value["Giaban"]);?></td>
                                    <td style="max-width: 150px;"> <img style="padding: 10px;max-width: -webkit-fill-available;"  src="<?php echo ($value["Hinh"]); ?>" alt=""/></td>
                                    
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