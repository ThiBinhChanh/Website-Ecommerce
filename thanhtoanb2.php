<?php 
    include('./lib/handle.php'); 
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
    <link rel="stylesheet" href="./assets/css/payment.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="./assets/js/productDetails.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
   .tanh_code{
    height: 650px;
   }
  .tai_khoan{
    color: red;
  }
  .nut_moi{
    min-width: 50px;
    height: 50px;
    text-decoration: none;
    border: none;
    font-size: 1.5rem;
    padding: 0 12px;
    outline: none;
    cursor: pointer;
    color: var(--text-color);
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 2px;
    line-height: 1.6rem;
    color: var(--white-color);
    background-color: var(--primary-color);
    margin-left: 170px;
  }
  
</style>

</head>
<body>
    <div class="main">
        <?php include('./inc/header.php'); ?>
        <div class="app__container">
            <div class="grid wide">
                <div class="row sm-gutter app__header">
                    <span class="title-direct"><a href="index.html">Thanh toán</a></span>
                    <span class="title-page"> / Chọn phương thức thanh toán</span>
                </div>
                <div class="progress__payment mt-32">
                    <div class="progress__step">
                        <div class="progress__step-number progress__step-number--active">1</div>
                        <div class="progress__step-name">
                            Phương thức thanh toán
                        </div>
                        <div class="progress__bar"></div>
                    </div>
                    <div class="progress__step">
                        <div class="progress__step-number progress__step-number--active">2</div>
                        <div class="progress__step-name">
                            Thông tin đơn hàng
                        </div>
                        <div class="progress__bar"></div>
                    </div>
                    <div class="progress__step">
                        <div class="progress__step-number">3</div>
                        <div class="progress__step-name">
                            Hoàn thành
                        </div>
                    </div>
                </div>

                <div class="choose__table mt-32">
                    <ul class="choose__list">
                        <li class="choose__title">
                        <img src="./assets/img/Thanh_toan.jpg" class="tanh_code">
                          <br>
                            <h1>Ngân hàng MBBANK</h1>
                            <h1 class="tai_khoan"><u>Số tài khoản:</u><strong>  9704229259688682</strong> </h1>
                            <h1>CHI NHÁNH ĐIỆN BIÊN PHỦ</h1>
                            <!-- <img src="./assets/img/Thanh_toan.jpg"> -->


                        </li>
                                        <div>
                                              
                                        <a href="thanhtoanb3.php" class="nut_moi">  Tiếp tục</a>
                                        </div>
                    </ul>
                    <div id="paypal-button-container">

                    </div>
                </div>
                
            </div>
        </div>
        <?php include('./inc/footer.php'); ?>
    </div>
</body>
</html>