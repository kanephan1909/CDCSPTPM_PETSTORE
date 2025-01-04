
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop - Kane</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('frontend/img/logo.jpg')); ?>"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bsgrid.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.min.css')); ?>" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

</head>
<body>
    <div class="header">

        <div class="navbar">
            <div class="navbar__left">
                <a href="<?php echo e(URL::to('/')); ?>" class="navbar__logo">
                    <img src="<?php echo e(asset('frontend/img/logov2.jpg')); ?>" alt="">
                </a>

                <div class="navbar__menu">
                    <i id="bars" class="fa fa-bars" aria-hidden="true"></i>
                    <ul>
                        <li><a href="<?php echo e(URL::to('/')); ?>">Trang chủ</a></li>
                        <li><a href="http://127.0.0.1:8000/viewAll">Sản Phẩm</a></li>
                        <li>
                            <a href="<?php echo e(URL::to('/services')); ?>">Dịch vụ</a>
                        </li>
                        <li>
                            <a href="<?php echo e(URL::to('/donhang')); ?>">Đơn hàng</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="navbar__center">
                <form action="<?php echo e(route('search')); ?>" method="GET" class="navbar__search">
                    <input type="text" value="" placeholder="Nhập để tìm kiếm..." name="tukhoa" class="search" required>
                    <i class="fa fa-search" id="searchBtn"></i>
                </form>
            </div>

            <div class="navbar__right">

                <?php if(Auth::check()): ?>
                <!-- Hiển thị nút logout -->

                <span class="mr-2"><?php echo e(Auth::user()->hoten); ?></span>

                <div class="logout">
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button style="border: none;" type="submit"><i class="fas fa-sign-out-alt text-primary"></i></button>
                    </form>
                </div>
                <?php else: ?>
                    <!-- Hiển thị nút login -->
                    <div class="login">
                        <a href="<?php echo e(URL::to('login')); ?>"><i class="fa fa-user"></i> </a>
                    </div>
                <?php endif; ?>

                <a href="<?php echo e(route('cart')); ?>" class="navbar__shoppingCart">
                    <img src="<?php echo e(asset('frontend/img/shopping-cart.svg')); ?>" style="width: 24px;" alt="">

                    <?php if(session('cart')): ?>
                        <span><?php echo e(count((array) session('cart'))); ?></span>
                    <?php else: ?>
                        <span>0</span>

                    <?php endif; ?>
                </a>
            </div>
        </div>

    </div>

    <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <div class="go-to-top"><i class="fas fa-chevron-up"></i></div>

    <footer class="footer">
        <div class="footer__container">
            <!-- Giới thiệu -->
            <div class="footer__info">
                <div class="footer__info-content">
                    <h3>Giới thiệu</h3>
                    <p>Chúng tôi cung cấp dịch vụ quản lý, mua bán thú cưng chất lượng cao với sứ mệnh kết nối yêu thương giữa con người và thú cưng.</p>
                </div>

                <!-- Liên hệ -->
                <div class="footer__info-content">
                    <h3>Liên hệ</h3>
                    <ul>
                        <li><strong>Địa chỉ:</strong> Quận Tân Bình, TP.HCM</li>
                        <li><strong>Email:</strong> <a href="mailto:chube@gmail.com">pkhang962@gmail.com</a></li>
                        <li><strong>Số điện thoại:</strong> <a href="tel:09997676">0833233446</a></li>
                    </ul>
                </div>

                <!-- Fanpage -->
                <div class="footer__info-content">
                    <h3>Địa Chỉ</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.3652029854575!2d106.69204877578613!3d10.859802889294048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529c17978287d%3A0xec48f5a17b7d5741!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBOZ3V54buFbiBU4bqldCBUaMOgbmggLSBDxqEgc-G7nyBxdeG6rW4gMTI!5e0!3m2!1svi!2s!4v1735810667648!5m2!1svi!2s" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>

            <!-- Mạng xã hội -->
            <div class="footer__social">
                <h3>Kết nối với chúng tôi</h3>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>

            <!-- Menu liên kết -->
            <div class="footer__links">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="#">Dịch vụ</a></li>
                    <li><a href="#">Thú cưng</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>

            <!-- Copyright -->
            <div class="footer__copyright">
                <p>© 2024 All rights reserved. Designed by <strong>KanePhan</strong>.</p>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        //Slider using Slick
        $(document).ready(function () {
            $('.post-wrapper').slick({
                slidesToScroll: 1,
                autoplay: true,
                arrow: true,
                dots: true,
                autoplaySpeed: 5000,
                prevArrow: $('.prev'),
                nextArrow: $('.next'),
                appendDots: $(".dot"),
            });
        });

        // Slick mutiple carousel
        $('.post-wrapper2').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: $('.prev2'),
            nextArrow: $('.next2'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <script src="<?php echo e(asset('frontend/script/script.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\Users\pkhan\OneDrive\Desktop\CDCS_2200008424_PhanLamNhatKhang\shopthucung_laravel\shopthucung_laravel\resources\views/layout.blade.php ENDPATH**/ ?>