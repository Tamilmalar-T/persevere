<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Persevere Medica</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Persevere Medica" name="description" />
    <meta content="Pharmaceutical Manufacturer" name="keywords" />
    <meta content="EAZYSOFT" name="author" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            margin: 0;
            padding: 0;
        }

        /* HEADER */
        header {
            background: #313380;
            padding: 15px 0;
        }

        .logo img {
            width: 180px;
        }

        .mainmenu {
            display: flex;
            justify-content: center;
            gap: 30px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .mainmenu li a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        .mainmenu li a:hover {
            color: #f9c648;
        }

        /* PAGE TITLE */
        .page-banner {
            background: linear-gradient(180deg, #313480d7, #313380);
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .page-banner h1 {
            font-size: 40px;
            font-weight: bold;
        }

        /* PRODUCT SECTION */
        .prod-page {
            padding: 50px 0;
        }

        /* LEFT MENU */
        .left-menu {
            background: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .menu-title {
            font-size: 24px;
            font-weight: 700;
            color: #313380;
            margin-bottom: 20px;
        }

        .product-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .product-list li {
            margin-bottom: 12px;
        }

        .product-list li a {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            background: #f7f8fc;
            color: #313380;
            padding: 14px 16px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            transition: 0.3s;
            border-left: 4px solid transparent;
        }

        .product-list li a i {
            color: #f9c648;
            font-size: 16px;
        }

        .product-list li a:hover {
            background: #313380;
            color: #fff;
            transform: translateX(5px);
            border-left: 4px solid #f9c648;
        }

        .product-list li a.active {
            background: #313380;
            color: #fff;
            border-left: 4px solid #f9c648;
        }

        /* PRODUCT CONTENT */
        .product-content {
            background: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        /* PRODUCT CARD */
        .product-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            text-align: center;
            padding: 15px;
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .product-card img {
            width: 100%;
            height: 220px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .product-card h5 {
            font-size: 16px;
            font-weight: 700;
            color: #313380;
            margin: 0;
        }

        /* FOOTER */
        footer {
            background: #313380;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        /* MOBILE */
        @media(max-width:767px) {

            .mainmenu {
                flex-wrap: wrap;
                gap: 15px;
            }

            .product-card img {
                height: 150px;
            }

            .product-card h5 {
                font-size: 14px;
            }

            .prod-page {
                padding: 20px 0;
            }

            .left-menu {
                margin-bottom: 20px;
            }

            .page-banner h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-3 text-center text-md-start">
                    <a href="#" class="logo">
                        <img src="images/PersevereLogo.png" alt="Logo">
                    </a>
                </div>

                <div class="col-md-9">
                    <ul class="mainmenu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Reach Us</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </header>

   
    

    <!-- PRODUCT SECTION -->
<section class="prod-page">

    <div class="container-fluid px-lg-5">

        <div class="row">

            <!-- LEFT CATEGORY MENU -->
            <div class="col-lg-3 col-md-2">

                <div class="left-menu">

                    <h4 class="menu-title">Categories</h4>

                    <ul class="product-list">

                        <li>
                            <a href="#" class="category-link active" data-category="diabetology">
                                <i class="fa fa-heartbeat"></i>
                                Diabetology
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category-link" data-category="cardiology">
                                <i class="fa fa-heart"></i>
                                Cardiology
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category-link" data-category="orthopedics">
                                <i class="fa fa-bone"></i>
                                Orthopedics
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category-link" data-category="neurology">
                                <i class="fa fa-brain"></i>
                                Neurology
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category-link" data-category="dermatology">
                                <i class="fa fa-allergies"></i>
                                Dermatology
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category-link" data-category="gynaecology">
                                <i class="fa fa-female"></i>
                                Gynaecology
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category-link" data-category="pulmonology">
                                <i class="fa fa-lungs"></i>
                                Pulmonology
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category-link" data-category="endocrinology">
                                <i class="fa fa-stethoscope"></i>
                                Endocrinology
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <!-- RIGHT PRODUCT AREA -->
            <div class="col-lg-9 col-md-8">

                <div class="product-content">

                    <!-- IFRAME FOR PRODUCT DETAILS -->
                    <iframe name="productFrame" id="productIframe" class="d-none" style="width:100%; height:850px; border:none; border-radius:10px; background:#fff;"></iframe>

                    <!-- DIABETOLOGY -->
                    <div class="category-products" id="diabetology">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="01_pershel500.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/pershel500.jfif">
                                        <h5>PERSHEL 500</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="05_persride-m2.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/Persride.jfif">
                                        <h5>Persride M2</h5>
                                    </div>
                                </a>
                            </div>


                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="07_perclazide-sr30.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/Perclazide-sr-30.jfif">
                                        <h5>Perclazide SR 30</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="08_perclazide-sr60.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/Perclazide-sr.jfif">
                                        <h5>Perclazide SR 60</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- CARDIOLOGY -->
                    <div class="category-products d-none" id="cardiology">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="06_lormandch.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/lormand-ch.jfif">
                                        <h5>Larmand CH</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="13_amlovere-h.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/amlovere-h.jfif">
                                        <h5>Amloverse H</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="11_esovere-40.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/espvere-40.jfif">
                                        <h5>Esovere 40</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="14_beniper-4.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/beniper_4.jpeg">
                                        <h5>BENIPER 4</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- ORTHOPEDICS -->
                    <div class="category-products d-none" id="orthopedics">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="01_pershel500.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/pershel500.jfif">
                                        <h5>Pershel 500</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="10_pershel_d3.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/pershel-d3.jfif">
                                        <h5>Pershel D3</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- NEUROLOGY -->
                    <div class="category-products d-none" id="neurology">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="09_duloxalin_7520.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/duloxalin.jfif">
                                        <h5>Duloxaline 75/20</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="03_percobapg.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/percoba-pg.jfif">
                                        <h5>Percoba PG</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- DERMATOLOGY -->
                    <div class="category-products d-none" id="dermatology">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="15_perblast-m.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/perblast-m.jfif">
                                        <h5>Perplast M</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="#" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/products/perplast20.jpg">
                                        <h5>Perplase 20</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- GYNAECOLOGY -->
                    <div class="category-products d-none" id="gynaecology">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="02_percoba.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/Percoba.jfif">
                                        <h5>Percoba - 1</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="01_pershel500.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/pershel500.jfif">
                                        <h5>Pershel 500</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="10_pershel_d3.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/pershel-d3.jfif">
                                        <h5>Pershel D3</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- PULMONOLOGY -->
                    <div class="category-products d-none" id="pulmonology">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="15_perblast-m.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/perblast-m.jfif">
                                        <h5>Perblast M</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="#" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/products/perblast20.jpg">
                                        <h5>Perblast 20</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                    <!-- ENDOCRINOLOGY -->
                    <div class="category-products d-none" id="endocrinology">

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="04_persride-m1.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/Persride.jfif">
                                        <h5>Persride M1</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="#" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/products/persride32.jpg">
                                        <h5>Persride 32</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="10_pershel_d3.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/pershel-d3.jfif">
                                        <h5>Pershel D3</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="11_esovere-40.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/espvere-40.jfif">
                                        <h5>Esovere 40</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="07_perclazide-sr30.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/Perclazide-sr-30.jfif">
                                        <h5>Perclazide 30</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-4">
                                <a href="08_perclazide-sr60.php" style="text-decoration:none; color:inherit;">
                                    <div class="product-card">
                                        <img src="images/product/Perclazide-sr.jfif">
                                        <h5>Perclazide 60</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
    <!-- FOOTER -->
    <footer>
        © 2026 Persevere Medica. All Rights Reserved.
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.category-link').click(function (e) {

                e.preventDefault();

                $('.category-link').removeClass('active');
                $(this).addClass('active');

                let category = $(this).data('category');

                $('.category-products').addClass('d-none');
                $('#productIframe').addClass('d-none');

                $('#' + category).removeClass('d-none');

            });

            $('.category-products a').click(function (e) {
                let url = $(this).attr('href');
                if (url && url !== '#') {
                    e.preventDefault();
                    $('.category-products').addClass('d-none');
                    $('#productIframe').attr('src', url).removeClass('d-none');
                }
            });

        });
    </script>

</body>

</html>
