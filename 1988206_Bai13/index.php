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
                        $bai = "Bài 13";
                        printf("%s", $bai); ?>
                    </div>
                    <div>
                        <?php echo "Ngày giờ hiện tại: " . date("Y/m/d") ?>
                    </div>
                    <div>Kết quả bài tâp tuần</div>
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