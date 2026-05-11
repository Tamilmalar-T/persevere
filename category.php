<?php
$cat = isset($_GET['cat']) ? $_GET['cat'] : 'diabetology';

$category_names = [
    'diabetology' => 'Diabetology',
    'cardiology' => 'Cardiology',
    'orthopedics' => 'Orthopedics',
    'neurology' => 'Neurology',
    'dermotology' => 'Dermatology',
    'gynacology' => 'Gynaecology',
    'pulmonology' => 'Pulmonology',
    'endocrinology' => 'Endocrinology',
    'gastroenterology' => 'Gastroenterology'
];

$category_title = isset($category_names[$cat]) ? $category_names[$cat] : 'Products';

$products = [
    'diabetology' => [
        ['name' => 'Persride m1', 'link' => 'Products/Persride_m1.php', 'img' => 'images/product/Persride.jfif'],
        ['name' => 'Persride m2', 'link' => 'Products/Persride_m2.php', 'img' => 'images/product/Persride.jfif'],
        ['name' => 'PERSRIDE M 0.5', 'link' => 'Products/Persride_m05.php', 'img' => 'images/product/Persride.jfif'],
        ['name' => 'perclazide sr 30', 'link' => 'Products/Perclazide_sr30.php', 'img' => 'images/product/perclazide.jfif'],
        ['name' => 'perclazide sr 60', 'link' => 'Products/Perclazide_sr60.php', 'img' => 'images/product/perclazide.jfif'],
    ],
    'cardiology' => [
        ['name' => 'larmand ch', 'link' => 'Products/lormand_ch.php', 'img' => 'images/product/lormand_ch.jfif'],
        ['name' => 'amloverse h', 'link' => 'Products/amlovere-h.php', 'img' => 'images/product/amlovere-h.jfif'],
        ['name' => 'esovere 40', 'link' => 'Products/esovere_40.php', 'img' => 'images/product/esovere-40.jfif'],
        ['name' => 'BENIPER 4', 'link' => 'Products/beniper4.php', 'img' => 'images/product/beniper4.jfif'],
    ],
    'orthopedics' => [
        ['name' => 'pershel 500', 'link' => 'Products/pershel500.php', 'img' => 'images/product/pershel500.jfif'],
        ['name' => 'pershel d3', 'link' => 'Products/pershel_d3.php', 'img' => 'images/product/pershel-d3.jfif'],
    ],
    'neurology' => [
        ['name' => 'duloxaline 75/20', 'link' => 'Products/duloxalin_75.php', 'img' => 'images/product/duloxalin.jfif'],
        ['name' => 'percoba pg', 'link' => 'Products/percoba-pg.php', 'img' => 'images/product/percoba-pg.jfif'],
    ],
    'dermotology' => [
        ['name' => 'perplast m', 'link' => 'Products/perblast.php', 'img' => 'images/product/perblast-m.jfif'],
        ['name' => 'perplase 20', 'link' => 'Products/perplase20.php', 'img' => 'images/product/product-2.webp'],
    ],
    'gynacology' => [
        ['name' => 'PERCOBA', 'link' => 'Products/percoba.php', 'img' => 'images/product/Percoba.jfif'],
        ['name' => 'pershel 500', 'link' => 'Products/pershel500.php', 'img' => 'images/product/pershel500.jfif'],
        ['name' => 'pershel d3', 'link' => 'Products/pershel_d3.php', 'img' => 'images/product/pershel-d3.jfif'],
    ],
    'pulmonology' => [
        ['name' => 'perblast m', 'link' => 'Products/perblast.php', 'img' => 'images/product/perblast-m.jfif'],
        ['name' => 'perblast 20', 'link' => 'Products/perblast20.php', 'img' => 'images/product/product-2.webp'],
    ],
    'endocrinology' => [
        ['name' => 'persride m1', 'link' => 'Products/Persride_m1.php', 'img' => 'images/product/Persride.jfif'],
        ['name' => 'persride 32', 'link' => 'Products/persride32.php', 'img' => 'images/product/Persride.jfif'],
        ['name' => 'pershel d3', 'link' => 'Products/pershel_d3.php', 'img' => 'images/product/pershel-d3.jfif'],
        ['name' => 'esovere 40', 'link' => 'Products/esovere_40.php', 'img' => 'images/product/esovere-40.jfif'],
        ['name' => 'perclazide 30', 'link' => 'Products/Perclazide_sr30.php', 'img' => 'images/product/perclazide.jfif'],
        ['name' => 'perclazide 60', 'link' => 'Products/Perclazide_sr60.php', 'img' => 'images/product/perclazide.jfif'],
    ],
    'gastroenterology' => []
];

$display_products = isset($products[$cat]) ? $products[$cat] : [];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>Persevere Medica - <?php echo $category_title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    
    <!-- CSS Files -->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />

    <style>
        .category-header { background: #313380; color: #fff; padding: 40px 0; text-align: center; margin-bottom: 30px; }
        .back-btn { margin-bottom: 20px; display: inline-block; color: #313380; font-weight: bold; text-transform: uppercase; }
        .product-view h6 { text-transform: uppercase; font-weight: bold; }
        .product-img img { height: 190px !important; object-fit: contain; }
    </style>
</head>

<body class="hide-rtl">
    <div id="wrapper">
        <?php include('header.php'); ?>

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section class="category-header">
                <div class="container">
                    <h2 style="color: #fff; text-transform: uppercase;"><?php echo $category_title; ?></h2>
                </div>
            </section>

            <section class="pb-5">
                <div class="container">
                    <a href="product.php" class="back-btn"><i class="fa fa-arrow-left"></i> BACK TO CATEGORIES</a>
                    <div class="row">
                        <?php foreach ($display_products as $p): ?>
                            <div class="col-lg-2 col-md-4 col-6 product-view pt20">
                              <div class="product-disp">
                                <div class="product-img">
                                  <a href="<?php echo $p['link']; ?>"><img src="<?php echo $p['img']; ?>" class="img-fluid" onerror="this.src='images/product/product-2.webp'"/></a>
                                </div>
                                <a href="<?php echo $p['link']; ?>">
                                  <h6 class="text-center text"><?php echo $p['name']; ?><span style="font-size: 14px;"></span></h6>
                                  <p class="text-center text"></p>
                                </a>
                              </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
        <?php include('footer.php'); ?>
    </div>
</body>
</html>
