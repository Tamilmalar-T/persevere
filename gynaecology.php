<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>Persevere Medica - Gynaecology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- CSS Files -->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />

    <style>
        .category-header {
            background: #313380;
            color: #fff;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .back-btn {
            margin-bottom: 20px;
            display: inline-block;
            color: #313380;
            font-weight: bold;
            text-transform: uppercase;
        }

        .product-view h6 {
            text-transform: uppercase;
            font-weight: bold;
        }

        .product-img img {
            height: 190px !important;
            object-fit: contain;
        }
    </style>
</head>

<body class="hide-rtl">
    <div id="wrapper">
        <!-- Header -->
        <?php include('header.php'); ?>

        <!-- Content -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section class="category-header">
                <div class="container">
                    <h2 style="color: #fff; text-transform: uppercase;">Gynaecology</h2>
                </div>
            </section>

            <section class="pb-5">
                <div class="container">
                    <a href="product.php" class="back-btn"><i class="fa fa-arrow-left"></i> BACK TO PRODUCTS</a>

                    <div class="row">
                        <!--Product 1: PERCOBA-->
                        <div class="col-lg-2 col-md-4 col-6 product-view pt20">
                            <div class="product-disp">
                                <div class="product-img">
                                    <a href="Products/percoba.php"><img src="images/product/Percoba.jfif"
                                            class="img-fluid" /></a>
                                </div>
                                <a href="Products/percoba.php">
                                    <h6 class="text-center text">PERCOBA<span style="font-size: 14px;"></span></h6>
                                    <p class="text-center text"></p>
                                </a>
                            </div>
                        </div>

                        <!--Product 2: PERSHEL 500-->
                        <div class="col-lg-2 col-md-4 col-6 product-view pt20">
                            <div class="product-disp">
                                <div class="product-img">
                                    <a href="Products/pershel500.php"><img src="images/product/pershel500.jfif"
                                            class="img-fluid" /></a>
                                </div>
                                <a href="Products/pershel500.php">
                                    <h6 class="text-center text">PERSHEL 500<span style="font-size: 14px;"></span></h6>
                                    <p class="text-center text"></p>
                                </a>
                            </div>
                        </div>

                        <!--Product 3: PERSHEL D3-->
                        <div class="col-lg-2 col-md-4 col-6 product-view pt20">
                            <div class="product-disp">
                                <div class="product-img">
                                    <a href="Products/pershel_d3.php"><img src="images/product/pershel-d3.jfif"
                                            class="img-fluid" /></a>
                                </div>
                                <a href="Products/pershel_d3.php">
                                    <h6 class="text-center text">PERSHEL D3<span style="font-size: 14px;"></span></h6>
                                    <p class="text-center text"></p>
                                </a>
                            </div>
                        </div>

                        <!--Product 4: PERSRIDE M1-->
                        <div class="col-lg-2 col-md-4 col-6 product-view pt20">
                            <div class="product-disp">
                                <div class="product-img">
                                    <a href="Products/Persride_m1.php"><img
                                            style="margin-top:35px;padding-right:10px;height:140px"
                                            src="images/product/Persride.jfif" class="img-fluid" /></a>
                                </div>
                                <a href="Products/Persride_m1.php">
                                    <h6 class="text-center text"> PERSRIDE M1<span style="font-size: 14px;"></span>
                                        <span class="avail-size"></span></h6>
                                    <p class="text-center text"></p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <?php include('footer.php'); ?>
    </div>

    <!-- JS Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/designesia.js"></script>
</body>

</html>