<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/1988206.css">
    <title>Document</title>
</head>
<body>

<div style="padding-left: 10px;">
        <div>
                <a href="/1988206_Bai06/index.php">Trở về</a>
        </div>

    <?php
    include_once("dbinfo.php");
    $sql_dau = "select dkhoc.MaSV , sinhvien.TenSV , dkhoc.Diem from  `dkhoc` inner join `sinhvien` on dkhoc.MaSV = sinhvien.MSSV where 
                dkhoc.MaMH = '{$_GET['k']}' and dkhoc.Diem >= 5 ";
    $sql_rot = "select dkhoc.MaSV , sinhvien.TenSV , dkhoc.Diem from  `dkhoc` inner join `sinhvien` on dkhoc.MaSV = sinhvien.MSSV where 
                dkhoc.MaMH = '{$_GET['k']}' and dkhoc.Diem < 5 ";
    $dulieu_dau = db_select($sql_dau);
    $dulieu_rot = db_select($sql_rot);
    $data = array();
    $title = "Danh sách sinh viên";
    if ($_GET['v']== 'dau') {
        $data= $dulieu_dau;
        $title= "Danh sách sinh viên đậu";
    }

    if ($_GET['v']== 'rot') {
        $data= $dulieu_rot;
        $title= "Danh sách sinh viên rớt";
    }
    //var_dump($data);
 
    
    ?>
    <h2><?php echo ($title); ?></h2>
     <table>
        <tr>
            <th>Mã sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Điểm trung bình</th>
        </tr>
        <?php
        foreach ($data as $key => $value)
        {
        ?>

        <tr>
            <td>
                <?php echo ($value["MaSV"]) ?>
            </td>
            <td>
                <?php echo ($value["TenSV"]) ?>
            </td>
            <td>
                <?php echo ($value["Diem"]) ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>


</div>

</body>
</html>

