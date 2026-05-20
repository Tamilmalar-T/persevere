<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <title>Demo Company</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Demo Company" name="description" />
  <meta content="" name="keywords" />
  <meta content="" name="author" />

  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

  <!-- CSS Files
    ================================================== -->
  <!--Custom css-->
  <link href="css/mystyle.css" rel="stylesheet" type="text/css" />

  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

  <!--Predefined css-->
  <link href="css/jpreloader.css" rel="stylesheet" type="text/css" />
  <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link id="bootstrap-grid" href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
  <link id="bootstrap-reboot" href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
  <link href="css/animate.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
  <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
  <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />

  <!-- color scheme -->
  <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
  <link href="css/coloring.css" rel="stylesheet" type="text/css" />

  <!-- RS5.0 Stylesheet -->
  <link rel="stylesheet" href="revolution/css/settings.css" type="text/css" />
  <link rel="stylesheet" href="revolution/css/layers.css" type="text/css" />
  <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css" />

  <style>
    .post-text h4 a {
      color: #ffffff;
      font-size: 20px;
    }

    .pre-nxt-btn {
      display: flex;
      align-items: center;
      align-self: center;
    }

    /*div#pills-tabContent {*/
    /*    border: 1px solid #cdcdcd;*/
    /*    border-radius: 10px;*/
    /*    padding: 0px;*/
    /*}*/
    .tab-container {
      display: flex;
      overflow: hidden;
      scroll-behavior: smooth;
      justify-content: flex-start;
    }

    .tab {
      flex: 0 0 auto;
      padding: 0px 13px;
      background-color: #F2994A;
      border: 1px solid #77777721;
      transition: background-color 0.3s ease;
      cursor: pointer;
      font-size: 14px;
      margin-left: 10px;
      color: #ffff;
    }

    .tab.active {
      background-color: #313380;
      color: #ffff;
    }

    .tab-content {
      display: none;
      /* padding: 20px; */
    }

    .tab-content.active {
      display: block;
    }

    .tab-content-container {
      display: flex;
      justify-content: flex-start;
    }

    @media screen and (max-width: 480px) {
      /* .tab-content-container {
                display: flex;
                align-items: flex-start;
                justify-content: flex-start;
                margin-right: 40px; 
            } */

      .tab {
        padding: 0px 13px;
        font-size: 14px;
      }
    }

    @media screen and (max-width: 768px) {
      .tab-container {
        /* flex-direction: column; */
        overflow-x: hidden;
      }

      .tab-container {
        justify-content: flex-start;
        /* margin-top: -40px; */
      }
    }

    @media screen and (min-width: 481px) and (max-width: 768px) {
      .tab {
        padding: 0px 13px;
      }

      .tab-container {
        justify-content: flex-start;
      }
    }

    /* @media screen and (max-width: 1200px) {
      .tab-content-container {
        justify-content: flex-end !important;
      }
    } */
  </style>
</head>

<body class="hide-rtl">
  <div id="wrapper">
    <!-- header begin -->
    <!--Mobile-->
    <header class="transparent header-mob">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="de-flex sm-pt10">
              <div class="de-flex-col">
                <!-- logo begin -->
                <div id="logo">
                  <a href="index.php">
                    <img alt="" class="logo" width="70%" src="images/Demo-Logo.png" />
                    <img alt="" class="logo-2" width="50%" src="images/Demo-Logo.png" />
                  </a>
                </div>
                <!-- logo close -->
              </div>
              <div class="de-flex-col header-col-mid">
                <!-- mainmenu begin -->
                <ul id="mainmenu">
                  <li>
                    <a href="index.php">Home<span></span></a>
                  </li>
                  <li>
                    <a href="about.php">Company<span></span></a>
                  </li>
                  <li>
                    <a href="product.php">Products<span></span></a>
                  </li>
                  <li>
                    <a href="media.php">Media<span></span></a>
                  </li>
                  <li>
                    <a href="careers.php">Career<span></span></a>
                  </li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="de-flex-col">
                <!-- <div class="h-phone"><span>Need&nbsp;Help?</span><i class="fa fa-phone id-color-secondary"></i> 1 200 300 9000</div> -->
                <span id="menu-btn"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--Desktop-->
    <header id="nav-bar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="de-flex sm-pt10" style="justify-content: center">
              <div class="de-flex-col header-col-mid">
                <!-- mainmenu begin -->
                <ul id="mainmenu">
                  <li>
                    <a href="index.php">Home<span></span></a>
                  </li>
                  <li>
                    <a href="about.php">Company<span></span></a>
                  </li>
                  <li>
                    <a href="product.php">Products<span></span></a>
                  </li>
                </ul>
              </div>

              <div class="de-flex-col">
                <!-- logo begin -->
                <div id="logo" class="text-center">
                  <a href="index.php">
                    <img alt="" class="" width="50%" src="images/Demo-Logo.png" />
                    <!-- <img alt="" class="logo-2" width="50%" src="images/Demo-Logo.png" /> -->
                  </a>
                </div>
                <!-- logo close -->
              </div>

              <div class="de-flex-col header-col-mid">
                <ul id="mainmenu" style="padding-left: 0rem">
                  <li>
                    <a href="media.php">Media<span></span></a>
                  </li>
                  <li>
                    <a href="careers.php">Career<span></span></a>
                  </li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header close -->

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
      <div id="top"></div>

      <!-- section begin -->
      <section id="subheader" class="text-light" data-bgimage="linear-gradient(180deg, #313480b9, #313380)">
        <div class="center-y relative text-center">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <div class="spacer-single"></div>
                <h2 style="font-family: CircularStd-Book" class="page-heading">Our Products</h2>
                <!--<h3>Provides <span style="color:#f9c648">Excellence</span> in the<br>-->
                <!--Management of <span style="color:#f9c648">Pain & Critical</span> Care</h3>-->
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> -->
                <!--sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- section close -->

      <!--banner border begin-->
      <section data-bgcolor="#f9c648" class="pt10 pb10 bg-color-secondary"></section>
      <section class="py-0">
        <div class="container d-flex justify-content-center align-items-center position-relative">
          <div class="position-absolute" style="left: 15px;">
            <h4 class="mb-0"><a href="product.php" class="text-black"><i class="id-color arrow_left fa-lg" style="margin-right: 5px"></i> PRODUCTS</a></h4>
          </div>
          <!--Next and Previous Button-->
          <div class="pre-nxt-btn">
            <button type="button" class="btn btn-bg-color btn-sm">
              <a href="cis-atrarelief.php" style="color: #000"><i class="id-color arrow_left fa-lg"
                  style="margin-right: 5px"></i>Previous</a>
            </button>
            <p class="mx-3 mb-0">15/52</p>
            <button type="button" class="btn btn-bg-color btn-sm">
              <a href="neo-acrolate.php" style="color: #000">Next<i class="id-color arrow_right fa-lg"
                  style="margin-right: 5px"></i></a>
            </button>
          </div>
        </div>
      </section>
      <!--banner border close-->

      <!--Product Begin-->
      <section class="pt0 pb-5 btm-space">
        <div id="prd-detail" class="container-fluid" style="padding: 0px 0px 0px 70px">
          <div class="row no-gutters">
            <div class="col-lg-8 col-md-12 pt10">
              <div class="row">
                <!--Product display-->

                <!-- <span class="bredcrm"><a href="product.php"><i class="id-color arrow_left fa-lg"
                                            style="margin-right: 5px"></i>Acustigmine</a></span> -->

                <div class="col-lg-6 col-md-6 d-flex mob-prd" style="flex-direction: column; justify-content: center">
                  <div class="prod-detail-mob mt-4">
                    <h4 style="font-size: 26px; font-family: 'Montserrat-Black'" class="prd-big-head">
                      Acustigmine<sup>®</sup>  <span class="avail-size">(1ml/5ml)</span>
                    </h4>
                    <p style="font-size: 22px; font-family: 'Swiss721-cn-BT'">
                      Neostigmine Methylsulphate Injection I.P. 
                      <!--<span class="avail-size" style="font-size:16px">(0.5mg/ml & 2.5mg/5ml)</span>-->
                    </p>
                  </div>
                  <div class="tab-content-container">
                    <div class="tab-content" data-content-index="0">
                      <img src="images/product/29. Acustigmine.webp" width="370" height="auto" />
                    </div>
                    <div class="tab-content" data-content-index="1">
                      <img src="images/desktop/29.acustigmine.png" width="370" height="auto" />
                    </div>
                  </div>

                  <h6>Available As:</h6>
                  <div class="tab-container" id="tabContainer">
                    <div class="tab" data-tab-index="0">1ml Ampoule</div>
                    <div class="tab" data-tab-index="1">5ml Ampoule</div>
                  </div>
                </div>

                <!-- <div>
                      <div class="tab-content mb-5" id="pills-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="pills-home"
                          role="tabpanel"
                          aria-labelledby="pills-home-tab"
                        >
                          <img
                            src="images/product/27. Cisatracurium 5ml.webp"
                            width="370"
                            height="auto"
                          />
                        </div>
                        <div
                          class="tab-pane fade"
                          id="pills-profile"
                          role="tabpanel"
                          aria-labelledby="pills-profile-tab"
                        >
                          <img
                            src="images/product/28. Cisatracurium 10ml.webp"
                            width="370"
                            height="auto"
                          />
                        </div>
                      </div>

                      <h6>Available As:</h6>
                      <ul
                        class="nav nav-pills mt-1"
                        id="pills-tab"
                        role="tablist"
                      >
                        <li class="nav-item">
                          <a
                            class="avail-type active"
                            id="pills-home-tab"
                            data-toggle="pill"
                            href="#pills-home"
                            role="tab"
                            aria-controls="pills-home"
                            aria-selected="true"
                            >5ml Vial</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="avail-type"
                            id="pills-profile-tab"
                            data-toggle="pill"
                            href="#pills-profile"
                            role="tab"
                            aria-controls="pills-profile"
                            aria-selected="false"
                            >10ml Vial</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div> -->

                <div class="col-lg-6 col-md-6">
                  <div class="prod-detail-desk">
                    <h4 style="font-size: 26px; font-family: 'Montserrat-Black'">
                      Acustigmine<sup>®</sup> 
                      <span class="avail-size">(1ml/5ml)</span>
                    </h4>
                    <p style="font-size: 22px; font-family: 'Swiss721-cn-BT'">
                      Neostigmine Methylsulphate Injection I.P. 
                      <!--<span class="avail-size" style="font-size:16px">(0.5mg/ml & 2.5mg/5ml)</span>-->
                    </p>
                  </div>
                  <div class="ul-list">
                    <h6>Indications</h6>
                    <ul>
                      <li>Reversal of the effects of non-depolarizing neuromuscular blocking agents after surgery<sup style="font-size:8px;">1</sup></li>
                      <li>The drug of choice for reversal of neuromuscular blocking agents in the pediatrics<sup style="font-size:8px;">1</sup></li>
                      <li>Addition of neostigmine to caudal local anaesthetics was associated with improved postoperative analgesia<sup style="font-size:8px;">2</sup></li>
                    </ul>
                  </div>

                  <ul style="
                        list-style-type: none;
                        font-size: 14px;
                        padding-left: 0px;
                        margin-top: 30px;
                      ">
                    <li><img src="images/product/icons/Ampoule.png" class="img-fluid icon-prd">5 x 1ml Ampoule & 5 x 5ml
                                            Ampoule</li>
                    <li>
                      <img src="images/product/icons/Strength icon.gif" class="img-fluid icon-prd" />0.5mg/ml & 2.5mg/5ml
                    </li>
                    <li>
                        <img src="images/product/icons/IP BP USP.png" class="img-fluid icon-prd" />Pharmacopoeia - I.P.
                    </li>
        
                    <li>
                      <img src="images/product/icons/Direction of Use.gif" class="img-fluid icon-prd" />S.C. / I.M. / Slow I.V. Use
                    </li>
                  </ul>

                  <!--Next and Previous Button-->
                  <!-- <div class="pre-nxt-btn pt-3">
                                        <button type="button" class="btn btn-warning btn-sm">
                                            <a href="cis-atrarelief.php" style="color:#000;"><i class="id-color arrow_left fa-lg" style="margin-right: 5px"></i>Previous</a>
                                        </button>
                                        <p class="mx-3 mb-0">18/56</p>
                                        <button type="button" class="btn btn-warning btn-sm">
                                            <a href="neo-acrolate.php" style="color:#000;">Next<i class="id-color arrow_right fa-lg" style="margin-right: 5px"></i></a>
                                        </button>
                                    </div> -->
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-12 video-resp">
              <div class="">
                <video autoplay muted loop width="100%" height="auto">
                  <source src="images/product/product video/Acustigmine.m4v" type="video/mp4" /> 
                </video>
              </div>
              <div class="ol-list">
                <ol style="list-style-type: decimal; font-size: 10px">
                  <li>
                    Neely GA, et al.Neostigmine. Aug 22 in StatPearls. Treasure Island Publishing; 2022 Jan
                  </li>
                  
                 
                  <li>
                    Habib AS, et.al. Use of Neostigmine. 2006;20(10):821-839
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Product end-->
    </div>
    <!-- content close -->

    <a href="#" id="back-to-top"></a>

    <section class="py-0">
      <div class="container d-flex justify-content-center align-items-center">
        <!--Next and Previous Button-->
        <div class="pre-nxt-btn">
          <button type="button" class="btn btn-bg-color btn-sm">
            <a href="cis-atrarelief.php" style="color: #000"><i class="id-color arrow_left fa-lg"
                style="margin-right: 5px"></i>Previous</a>
          </button>
          <p class="mx-3 mb-0">15/52</p>
          <button type="button" class="btn btn-bg-color btn-sm">
            <a href="neo-acrolate.php" style="color: #000">Next<i class="id-color arrow_right fa-lg"
                style="margin-right: 5px"></i></a>
          </button>
        </div>
      </div>
    </section>
    <section data-bgcolor="#f9c648" class="pt10 pb10 bg-color-secondary"></section>


    <!-- footer begin -->
    <?php
            include('footer.php');
        ?>
    <!-- footer close -->
  </div>

  <!-- Javascript Files
    ================================================== -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jpreLoader.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/easing.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/enquire.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.plugin.js"></script>
  <script src="js/typed.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/typed.js"></script>
  <script src="js/designesia.js"></script>
  <script src="js/header-scroll.js"></script>

  <!-- RS5.0 Core JS Files -->
  <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
  <!-- RS5.0 Extensions Files -->
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

  <script>
    jQuery(document).ready(function () {
      // revolution slider
      jQuery("#slider-revolution").revolution({
        sliderType: "standard",
        sliderLayout: "fullwidth",
        delay: 5000,
        navigation: {
          arrows: {
            enable: true,
          },
          bullets: {
            enable: true,
            hide_onmobile: false,
            style: "hermes",
            hide_onleave: true,
            direction: "horizontal",
            h_align: "center",
            v_align: "bottom",
            h_offset: 20,
            v_offset: 30,
            space: 5,
          },
        },
        parallax: {
          type: "mouse",
          origo: "slidercenter",
          speed: 2000,
          levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
        },
        responsiveLevels: [1920, 1380, 1240],
        gridwidth: [1200, 1200, 940],
        spinner: "off",
        gridheight: 700,
        disableProgressBar: "on",
      });
    });
  </script>

  <!-- Product Autoscroll -->

  <script>
    const tabContainer = document.getElementById("tabContainer");
    const tabs = document.querySelectorAll(".tab");
    const tabContents = document.querySelectorAll(".tab-content");
    let autoPlayInterval;

    function showTab(index) {
      tabs.forEach((tab) => tab.classList.remove("active"));
      tabContents.forEach((content) => content.classList.remove("active"));

      tabs[index].classList.add("active");
      tabContents[index].classList.add("active");

      const tabPosition = tabs[index].offsetLeft;
      tabContainer.scrollLeft = tabPosition;
    }

    function playNextTab() {
      let currentTabIndex = 0;

      function autoPlay() {
        showTab(currentTabIndex);
        currentTabIndex = (currentTabIndex + 1) % tabs.length;
      }

      autoPlayInterval = setInterval(autoPlay, 2000); // Delay of 1000ms (1 second)
    }

    function stopAutoPlay() {
      clearInterval(autoPlayInterval);
    }

    tabs.forEach((tab, index) => {
      tab.addEventListener("click", () => {
        showTab(index);
        stopAutoPlay();
      });

      tab.addEventListener("mouseover", () => {
        stopAutoPlay();
      });

      tab.addEventListener("mouseout", () => {
        playNextTab();
      });
    });

    tabContents.forEach((content) => {
      content.addEventListener("mouseover", () => {
        stopAutoPlay();
      });

      content.addEventListener("mouseout", () => {
        playNextTab();
      });
    });

    // Initial setup
    playNextTab(); // Start autoplay
  </script>

  <!--Thumnail product slider begin-->
  <script>
    var splide = new Splide("#main-slider", {
      pagination: false,
      arrow: false,
    });

    var thumbnails = document.getElementsByClassName("thumbnail");
    var current;

    for (var i = 0; i < thumbnails.length; i++) {
      initThumbnail(thumbnails[i], i);
    }

    function initThumbnail(thumbnail, index) {
      thumbnail.addEventListener("click", function () {
        splide.go(index);
      });
    }

    splide.on("mounted move", function () {
      var thumbnail = thumbnails[splide.index];

      if (thumbnail) {
        if (current) {
          current.classList.remove("is-active");
        }

        thumbnail.classList.add("is-active");
        current = thumbnail;
      }
    });

    splide.mount();
  </script>
  <!--Thumnail product slider end-->
</body>

</html>