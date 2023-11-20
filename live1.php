<?php 
    include('./lib/handle.php'); 
?>
<?php
	if(isset($_GET['confirmid'])){
     	$id = $_GET['confirmid'];
     	$time = $_GET['time'];
     	$price = $_GET['price'];
     	$shifted_confirm = $cartClass->shiftedConfirm($id,$time,$price);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIVESTREAM</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/payment.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="./assets/js/productDetails.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .thanhlive{
            margin-left: 300px;
        }
    </style>
</head>
<body>
    <div class="main">
        <?php
            include('./inc/header.php'); 
        ?>
        <!--div lon-->
        <div class="app__container">
            <div class="grid wide">
                <div class="row sm-gutter app__header">
                    <span class="title-direct"><a href="https://ngoctanh.name.vn">LIVESTREAM TRỰC TIẾP </a></span>
                    <span class="title-page"> / ĐANG TRỰC TIẾP </span>
                </div>

                <!-- Nut live1 -->
                
                <!--div nhung livestream-->
                <div class="thanhlive">
                <iframe width="700" height="500" src="https://www.youtube.com/embed/MsPT0KNMYEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                </div>
                <!--kt div livstream-->
                
        </div>
        <!--kt div lon-->
        <?php include('./inc/footer.php'); ?>
    </div>
</body>
</html>