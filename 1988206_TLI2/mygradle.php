<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>JoeBLog | Free Bootstrap 4.3.x template</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JoeBLog main styles -->
    <link rel="stylesheet" href="assets/css/joeblog.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page First Navigation -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.svg" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo ($active == 'home' ? 'active' : '');  ?>">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item <?php echo ($active == 'mygradle' ? 'active' : '');  ?>">
                        <a class="nav-link" href="index.php?page=mygradle">My gradle</a>
                    </li>

                </ul>
              
            </div>
        </div>
    </nav>
    <!-- End Of Page Second Navigation -->


    <!-- end of page header -->

    <div class="container">

        <div class="page-container">
            <div class="page-content">
                <?php
                $danhsach = array();


                $danhsach_ten = array(
                    "Th??i N??? B??nh An",
                    "Tr???n Th??? M??? An",
                    "B??i Th??? Nguy??n Anh",
                    "?????ng Th??? Loan Anh",
                    "L?? Thanh V??n Anh",
                    "Nguy???n Th??? T?? Anh",
                    "Tr???n Th??? H???ng Anh",
                    "Nguy???n Th??? Thanh B??nh",
                    "D????ng Ho??ng L??m Ch??u",
                    "Nguy???n Th??? Minh Ch??u",
                );
                foreach ($danhsach_ten as $key => $ten) {
                    $rand_point = rand(0, 100)/10;
                    $ten_diem = array($ten, $rand_point);
                    array_push ($danhsach, $ten_diem);
                }

                ?>
                <table class="table">
                    <tr>
                        <th scope="col">T??n</th>
                        <th scope="col">??i???m</th>
                    </tr>
                    <?php 
                        foreach ($danhsach as $key => $value) {
                            # code...
                            ?>
                            <tr>
                                <td><?php  echo ($value[0]) ?></td>
                                <td><?php  echo ($value[1]) ?></td>
                            </tr>
                            <?php
                        }

                    ?>
                   
                </table>

            </div>

            <!-- Sidebar -->

        </div>
    </div>


    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- JoeBLog js -->
    <script src="assets/js/joeblog.js"></script>

</body>

</html>