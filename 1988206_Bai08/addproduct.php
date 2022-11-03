<!DOCTYPE html>
<html>

<head>
    <title>Lap trinh web 2</title>
    <link rel="stylesheet" href="../css/1988206.css">

</head>

<body>
<div class="">
    <fieldset class="formstyle">    
    <form action="upload.php" method="post" enctype="multipart/form-data" class="">
        <label for="tensp">Tên sản phẩm</label><br />
        <input type="text" name="tensp" id="tensp"/>  <br />
        <label for="giaban">Giá bán sản phẩm</label><br />
        <input type="number" name="giaban" id="giaban"> <br />
        <input type="file" name="hinhsp" id="hinhsp"/> <br />
        <input type="submit" value="Thêm sản phẩm" name="submit"/>
    </form>


    </fieldset>

</div>


</body>

</html>
