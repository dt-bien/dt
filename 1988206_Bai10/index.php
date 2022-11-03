<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post">
        <label for="">San phan</label>
        <input type="text" >
        <button>Submit</button>
    </form>
    <?php 
    session_start();
    if (isset( $_SESSION["sp"] )) {
        echo ( $_SESSION["sp"] );
    }
    
    ?>
</body>
</html>