<!DOCTYPE html>
<html>

<head>
    <title>Lap trinh web 2</title>
    <link rel="stylesheet" href="../css/1988206.css">

</head>

<body>
    

    <div class="main">

        <!-- vung c -->
        <?php require_once(dirname(dirname(__FILE__)).'/template/1988206_vungC.php');
            require_once('Data4_1988206.php');
            
        ?>
        <div class="rightcol">
            <div class="topcontent vunga">
                
                <div>
                    <div>
                       <h2> <?php
                        $bai = "BÀI 04";
                        printf("%s", $bai); ?>
                        </h2>
                    </div>
                    <div>
                        <p><?php echo "Ngày giờ hiện tại: " . date("Y/m/d") ?></p>  
                    </div>
                    <div>
                    <div>
                    <a href="/">My Host</a>
                    </div>

                    
                    <h3>Danh sách sinh viên</h3>
                    <table> 
                        <tr>
                            <th>MSSV</th>
                            <th>Họ tên</th>
                            <th>Điểm trung bình</th>
                            <th>Link avatar</th>
                        </tr>
                    
                    <?php
                        foreach ( $DSSV_1988206 as $value) {
                           ?>
                           <tr>
                               <td> <?php echo ($value->mssv); ?></td>
                               <td> <?php echo ($value->hoten); ?></td>
                               <td> <?php echo ($value->diemtb); ?></td>
                               <td> <?php echo ($value->urlavatar); ?></td>
                           </tr>
                           <?php

                            
                        }

                    ?>
                    </table>
                  
                        <div class="py10">
                         
                        <a href="/1988206_Bai04/ds_svchuatotnghiep_1988206.php">Danh sách sinh viên chưa tốt nghiệp</a>
                        </div>
                        <div class="py10">
                         
                        <a href="/1988206_Bai04/ds_svtotnghiep_1988206.php">Danh sách sinh viên tốt nghiệp</a>
                        </div>
                       


                    </div>
                </div>

                <div class="avatar vungb">
                    <!-- vung b -->

                </div>

            </div>
           

        </div>
         <!-- vungd -->


    </div>
    <?php require_once((dirname(dirname(__FILE__)) . '/template/1988206_vungD.php')); ?>


</body>

</html>