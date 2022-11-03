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
                        $bai = "Bài 05";
                        printf("%s", $bai); ?>
                    </div>
                    <div>
                        <?php echo "Ngày giờ hiện tại: " . date("Y/m/d") ?>
                    </div>
                    <div>Kết quả bài tâp tuần</div>
                    <b>Thông tin sinh viên</b>
                    <ul>
                        <li>Họ Tên: Đỗ Tiến Biên</li>
                        <li>MSSV: 1988206</li>

                    </ul>
                    <table>
                        <tr>
                        <th>STT</th>
                        <th>Nội dung</th>
                        <th>Mức độ hoàn thành</th>
                        <th>DeadLine</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <ul>
                                    <li>Tạo CSDL quản lý sinh viên đơn giản.</li>
                                    <li>Nhập dữ liệu cho cơ sở dữ liệu</li>
                                </ul>


                            </td>
                            <td>100%</td>
                            <td>Đúng deadline</td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                                <ul>
                                    <li>Tạo CSDL quản lý sinh viên mở rộng.</li>
                                    <li>Nhập dữ liệu cho cơ sở dữ liệu</li>
                                </ul>


                            </td>
                            <td>100%</td>
                            <td>Đúng deadline</td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                Truy vấn dữ liệu


                            </td>
                            <td>100%</td>
                            <td>Đúng deadline</td>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                Cập nhật lại hosting

                            </td>
                            <td>100%</td>
                            <td>Đúng deadline</td>

                        </tr>
                    </table>
                     <hr />
                    <div>
                        <h3>Kết quả chụp màn hình bài làm</h3>
                        <div>
                            <h4>Yêu cầu 1</h4>
                            <div>
                                <img src="" alt="">
                            </div>
                        </div>
                        <div>
                            <h4>Yêu cầu 2</h4>
                        </div>
                        <div>
                            <h4>Yêu cầu 3</h4>
                        </div>
                       

                    </div>


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