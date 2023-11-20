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
                        <div class="progress__step-number">2</div>
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
                            <h1>Chọn phương thức thanh toán</h1>
                        </li>
                        <li class="option">
                            <!-- <a href="./vnpay_php/vnpay_php/index.php" class="option__link"> -->
                            <!-- <a href="/host/vnpay_php/vnpay_php/index.php" class="option__link"> -->
                            <a href="./vnpay_php/index.php" class="option__link">

                                <img src="./assets/img/vnn.jpg" class="option__img" alt="">
                                <div class="option__name">
                                    Thanh toán online
                                </div>
                            </a>
                        </li>

                        <li class="option">
                            <!-- <a href="./vnpay_php/vnpay_php/index.php" class="option__link"> -->
                            <!-- <a href="/host/vnpay_php/vnpay_php/index.php" class="option__link"> -->
                            <a href="./thanhtoanb2.php" class="option__link">

                                <img src="./assets/img/qr.jpg" class="option__img" alt="">
                                <div class="option__name">
                                    Thanh toán mã QR
                                </div>
                            </a>
                        </li>

                        <li class="option">
                            <a href="billDetail.php" class="option__link">
                                <img src="./assets/img/paycash.jpg" class="option__img" alt="">
                                <div class="option__name">
                                    Thanh toán khi nhận hàng
                                </div>
                            </a>
                            
                        </li>
                        <li class="option">


                            <!-- TICH HOP PAYPAL -->


                        <div id="paypal-button-container">

                        </div>

                        <script src="https://www.paypal.com/sdk/js?client-id=AWsjxcOJ8-b9Y4rFvCMf_9_93JgHLfk4s1N12Dwa3UsViOIJUUstpy27pgRE9mQUJ_4c_i1U5iAtKSXm&currency=USD"></script>
                        <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '0.1'// Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);


                //THAY ĐỔI CỔNG LOCALHOST

            window.location.replace('http://localhost/6-11/vnnpay.php');  //THAY 
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>

                     <!-- tich hop paypal end -->

                     
                            <!-- <a href="paypal.php" class="option__link">
                                
                                <div class="option__name">
                                    Thanh toán QT
                                </div>
                            </a> -->
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
        <?php include('./inc/footer.php'); ?>
    </div>
</body>
</html>