 <!DOCTYPE html>
 <html>

 <head>
     <title>Lap trinh web 2</title>
     <link rel="stylesheet" href="../css/1988206.css">

 </head>

 <body>


     <div class="main">

         <!-- vung c -->

         <div class="rightcol px10">

             <?php
                require_once('Data4_1988206.php');
                ?>
             <h2>Danh sách sinh viên chưa tốt nghiệp</h2>
             <table>
                 <tr>
                     <th>MSSV</th>
                     <th>Họ tên</th>
                     <th>Điểm trung bình</th>
                     <th>Link avatar</th>
                 </tr>

                 <?php
                    foreach ($DSSV_1988206 as $value) {
                    ?>
                     <?php if ($value->diemtb < 5) { ?>
                         <tr>
                             <td> <?php echo ($value->mssv); ?></td>
                             <td> <?php echo ($value->hoten); ?></td>
                             <td> <?php echo ($value->diemtb); ?></td>
                             <td> <?php echo ($value->urlavatar); ?></td>
                         </tr>
                     <?php } ?>

                 <?php


                    }

                    ?>
             </table>

         </div>

     </div>

 </body>

 </html>