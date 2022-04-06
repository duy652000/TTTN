<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <?php include "header.php" ?>
    <!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="./assets/images/banner/banner04.jpg">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">Venus</h3>
                    <div class="tags">
                        <a href="#0">City Walk</a>
                        <a href="#0">English - 2D</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>trở về
                    </a>
                </div>
                <div class="item date-item">
                    <h4 class="date">Thanh Toán</h4>

                </div>
                <div style="padding-left: 100px;" class="item">
                    <h5 class="title"></h5>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <h5 class="title">Đã là thành viên Boleto?</h5>
                            <p>Đăng nhập để kiếm điểm và đặt chỗ dễ dàng hơn!</p>
                        </div>
                        <a href="/sign-in" class="sign-in-area">
                           <span>đăng nhập</span>
                        </a>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">chia sẽ thông tin liên hệ của bạn </h5>
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" placeholder="tên họ">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder=" Mail">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="số điện thoại ">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Tiếp tục" class="custom-button">
                            </div>
                        </form>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">mã giảm giá </h5>
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" placeholder="hãy nhập mã của bạn">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Verify" class="custom-button">
                            </div>
                        </form>
                    </div>
                    <div class="checkout-widget checkout-card mb-0">
                        <h5 class="title">phương thức thanh toán </h5>
                        <ul class="payment-option">
                            <li class="active">
                                <a href="#0">
                                    <img src="assets/images/payment/card.png" alt="payment">
                                    <span>Credit Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <img src="assets/images/payment/card.png" alt="payment">
                                    <span>Debit Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <img src="assets/images/payment/paypal.png" alt="payment">
                                    <span>paypal</span>
                                </a>
                            </li>
                        </ul>
                        <h6 class="subtitle">chi tiết thẻ của bạn </h6>
                        <form class="payment-card-form">
                            <div class="form-group w-100">
                                <label for="card1">số thẻ</label>
                                <input type="text" id="card1">
                                <div class="right-icon">
                                    <i class="flaticon-lock"></i>
                                </div>
                            </div>
                            <div class="form-group w-100">
                                <label for="card2"> tên chủ sở hữu</label>
                                <input type="text" id="card2">
                            </div>
                            <div class="form-group">
                                <label for="card3">ngày tạo</label>
                                <input type="text" id="card3" placeholder="MM/YY">
                            </div>
                            <div class="form-group">
                                <label for="card4">ngày hết hạn</label>
                                <input type="text" id="card4" placeholder="CVV">
                            </div>
                            <div class="form-group check-group">
                                <input id="card5" type="checkbox" checked="">
                                <label for="card5">
                                    <span class="title">QuickPay</span>
                                    <span class="info">Lưu thông tin thẻ này vào tài khoản Boleto của tôi và thực hiện thanh toán nhanh hơn.</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="custom-button" value=" thanh toán">
                            </div>
                        </form>
                        <p class="notice">
                        Bằng cách nhấp vào "Thanh toán", <a href="#0"> bạn đồng ý với các điều khoản và điều kiện</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">hóa đơn</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">Venus</h6>
                                <span class="info">English-2d</span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>City Walk</span><span>02</span></h6>
                                <div class="info"><span>10 SEP TUE, 11:00 PM</span> <span>Tickets</span></div>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>Giá vé</span><span>$150</span></h6>
                            </li>
                        </ul>
                        <ul class="side-shape">
                            <li>
                                <h6 class="subtitle"><span>combos</span><span>$57</span></h6>
                                <span class="info"><span>2 Nachos Combo</span></span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>Thức ăn</span></h6>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="info"><span>price</span><span>$207</span></span>
                                <span class="info"><span>vat</span><span>$15</span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>tổng tiền</span><span>$222</span></h6>
                        <a href="#0" class="custom-button back-button">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="newslater-section padding-bottom">
            <div class="container">
                <div class="newslater-container bg_img" data-background="./assets/images/newslater/newslater-bg01.jpg">
                    <div class="newslater-wrapper">
                        <h5 class="cate">subscribe to Boleto </h5>
                        <h3 class="title">to get exclusive benifits</h3>
                        <form class="newslater-form">
                            <input type="text" placeholder="Your Email Address">
                            <button type="submit">subscribe</button>
                        </form>
                        <p>We respect your privacy, so we never share your info</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-top">
                <div class="logo">
                    <a href="index-1.html">
                        <img src="assets/images/footer/footer-logo.png" alt="footer">
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
           <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left">
                        <p>Copyright © 2020.All Rights Reserved By <a href="#0">Boleto </a></p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>


</body></html>
