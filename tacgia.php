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
    <title>Giỏ hàng</title>
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
</head>
<body>
    <div class="main">
        <?php
            include('./inc/header.php'); 
        ?>
        <div class="app__container">
            <div class="grid wide">
                <div class="row sm-gutter app__header">
                    <span class="title-direct"><a href="https://ngoctanh.name.vn">Thành viên đóng góp trang web</a></span>
                    <span class="title-page"> / Xây dựng web </span>
                </div>
                <div class="row sm-gutter mt-32">
                    <table class="products__list">
                        <tr class="cart__header">
                            <td class="cart__header-name">STT</td>
                            <td class="cart__header-name">Họ và tên</td>
                            <td class="cart__header-name">MSSV </td>
                            <td class="cart__header-name">Năm</td>
                            <td class="cart__header-name">Quản trị</td>
                        </tr>
                        <!-- thành viên 1 - PHAN NGỌC TÁNH-->
                        <tr class="cart__body product__infor">
                            <td class="product__img">
                              1
                            </td>
                            <td class="product__name">
                               Phan Ngọc Tánh
                            </td>
                            <td class="product__price">
                                46.01.104.163
                            </td>
                           
                            <td class="product__quatity">
                                2020-2024
                            </td>
                            <td class="product__quatity">
                                Admin
                            </td>
                            
                        </tr>
                        <!-- kết thúc thành viên 1 -->
                      

                         <!-- thành viên 2 LÊ ĐỨC THI -->
                         <tr class="cart__body product__infor">
                            <td class="product__img">
                              2
                            </td>
                            <td class="product__name">
                               Lê Đức Thi
                            </td>
                            <td class="product__price">
                                46.01.104.173
                            </td>
                           
                            <td class="product__quatity">
                                2020-2024
                            </td>
                            <td class="product__quatity">
                                Admin
                            </td>
                            
                        </tr>
                        <!-- kết thúc thành viên 2 LDT -->


                         <!-- thành viên 3 -->
                         <tr class="cart__body product__infor">
                            <td class="product__img">
                              3
                            </td>
                            <td class="product__name">
                               Lê Minh Triệu
                            </td>
                            <td class="product__price">
                                46.01.104.198
                            </td>
                           
                            <td class="product__quatity">
                                2020-2024
                            </td>
                            <td class="product__quatity">
                                Admin
                            </td>
                            
                        </tr>
                        <!-- kết thúc thành viên 3 -->



                    </table>
                </div>
            </div>
        </div>
        <?php include('./inc/footer.php'); ?>
    </div>
</body>
</html>