<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Default Title'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Default description'; ?>">
    <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'default, keywords'; ?>">
    <meta name="author-name" content="Ravi More">
    <meta name="google-site-verification" content="Ff9O90NnBeLxRbQORCikGVToXCQ61JatzoqkmONG6fk" />
    <meta property="og:description" content="Quanteq Solutions is a leading provider of comprehensive business solutions, specializing in strategic consulting, technology solutions, and operational support.">
    <meta property="og:url" content="https://quanteqsolutions.com">
    <meta property="og:image" content="https://quanteqsolutions.com/path/to/image.jpg">
    <meta property="og:type" content="website">

    <link rel="canonical" href="https://quanteqsolutions.com/">
    <link rel="shortcut icon" type="image/x-icon" href="images/fevicon-quntam.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    

    <style type="text/css">
   //* Base styles for navigation */
        .nav-item {
            position: relative;
            display: inline-block;
        }

        .nav-link {
            text-decoration: none;
            padding: 10px 15px;
            color: #333;
        }

        .nav-link .arrow-down {
            margin-left: 5px;
            border: solid #333;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 3px;
            transform: rotate(45deg);
            transition: transform 0.3s;
        }

        /* Submenu styles */
        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            list-style: none;
            padding: 0;
            margin: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            margin-left: 45%;
            
        }

        .submenu li {
            width: 300px;
        }

        .submenu li a {
            display: block;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
        }

        .submenu li a:hover {
            background: #49aaa3;
            color: #fff;
        }

        /* Hover effect to show submenu */
        .nav-item:hover .submenu {
            display: block;
        }

        /* Rotate arrow on hover */
        .nav-item:hover .arrow-down {
            transform: rotate(-135deg);
        }

        /* Mobile header styles */
        .mobile-header {
            display: none;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #fff;
        }

        .mobile-header .logo img {
            max-width: 200px;
        }

        .mobile-header .menu-toggle {
            font-size: 30px;
            color: #000;
            cursor: pointer;
        }

        .mobile-nav {
            display: none;
            background-color: #fff;
            position: absolute;
            top: 80px;
            right: 0;
            width: 100%;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            z-index: 1;
        }

        .mobile-nav a {
            color: #000;
            text-decoration: none;
            display: block;
            padding: 10px 0;
        }

        .mobile-nav .submenu {
            display: none;
            padding-left: 20px;
            width: 100%;
            margin-left:0;
        }

        .mobile-nav .has-submenu > a::after {
            content: '\25BC'; /* Down arrow */
            float: right;
            margin-left: 10px;
        }
        .mobile-header .menu-toggle.close {
    content: '\2715'; /* Unicode for the close (✖) icon */
}

        .mobile-nav .has-submenu.open > a::after {
            content: '\25B2'; /* Up arrow */
        }

        .mobile-nav .has-submenu.open .submenu {
            display: block;
        }

        /* Media queries for responsive design */
        @media (max-width: 992px) {
            .desktop-header {
                display: none;
            }
            .mobile-header {
                display: flex;
            }
        }

        /* Centering the desktop navigation menu items */
        .navbar-nav {
            margin: 0 auto;
        }

        /* Making the navigation menu sticky */
        .ftco-navbar-light {
            position: sticky;
            top: 0;
            z-index: 1000;
        }
    </style>

</head>
<body>

<!-- Desktop Header -->
    <div class="desktop-header bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                        <img src="images/left-side-logo-quntam.png" alt="" style="width:200px;">
                    </a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-top"><span class="icon-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span class="py-md-1">hr@quanteqsolutions.com</span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-top"><span class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span class="py-md-1">Call Us: </span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-top"><span class="icon-volume-up"></span></div>
                            <div class="text">
                                <span>Social Media</span>
                                <span>
                                    <p class="social mb-1 py-md-1">
                                        <a href="https://www.facebook.com/profile.php?id=100085491521014" style="font-size:22px; padding-right: 10px;"><i class="ion-logo-facebook"></i><span class="sr-only">Facebook</span></a>
                                        <a href="https://www.instagram.com/quanteq.solutions/" style="font-size:22px; padding-right: 10px;"><i class="ion-logo-instagram"></i><span class="sr-only">Instagram</span></a>
                                    </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo">
            <a href="index.php">
                <img src="images/left-side-logo-quntam.png" alt="Logo">
            </a>
        </div>
        <div class="menu-toggle">&#9776;</div>
    </div>
    <div class="mobile-nav">
        <a href="index.php">Home</a>
        <a href="about-us">About Us</a>
        <div class="has-submenu">
            <a href="our-services">Our Services</a>
            <div class="submenu">
                <a href="service/business-communications">Business Communications</a>
                <a href="service/accounting-and-finance">Accounting & Finance</a>
                <a href="service/customer-support">Customer Support</a>
                <a href="service/digital-marketing">Digital Marketing</a>
                <a href="service/legal-and-compliance-support">Legal & Compliance Support</a>
                <a href="service/sales-and-telecommunications">Sales & Telecommunications</a>
                <a href="service/lead-generation">Lead Generation</a>
                <a href="service/website-development">Website Development</a>
            </div>
        </div>
        <!-- Placeholder for "Blogs" and "Contact Us" links -->
        <div class="additional-links">
            <a href="blogs">Blogs</a>
            <a href="contact-us">Contact Us</a>
        </div>
    </div>


          <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-in">
        <div class="container d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
          
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item "><a href="index.php" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>
                <!-- <li class="nav-item"><a href="project.php" class="nav-link">Projects</a></li> -->
                <li class="nav-item "><a href="our-services" class="nav-link ">Our-Services</a>
                <ul class="submenu" >
                    <li class="nav-item "><a href="service/business-communications" >Business Communications</a></li>
                    <li class="nav-item "><a href="service/accounting-and-finance" >Accounting & Finance</a></li>
                    <li class="nav-item "><a href="service/customer-support" >Customer Support</a></li>
                    <li class="nav-item "><a href="service/digital-marketing" >Digital Marketing</a></li>
                    <li class="nav-item "><a href="service/legal-and-compliance-support" >Legal & Compliance Support</a></li>
                    <li class="nav-item "><a href="service/sales-and-telecommunications">Sales & Telecommunications</a></li>
                    <li class="nav-item "><a href="service/lead-generation">Lead Generation</a></li>
                    <li class="nav-item "><a href="service/website-development">Website Development</a></li>
                    
                </ul>
                <!-- <ul class="submenu" >
                    <li ><a href="business-communications.php" >Business Communications</a></li>
                    <li ><a href="accounting-and-finance.php" >Accounting & Finance</a></li>
                    <li ><a href="customer-support.php" >Customer Support</a></li>
                    <li ><a href="digital-marketing.php" >Digital Marketing</a></li>
                    <li ><a href="legal-and-compliance-support.php" >Legal & Compliance Support</a></li>
                    <li ><a href="sales-and-telecommunications.php">Sales & Telecommunications</a></li>
                    
                </ul> -->
                </li>
                <li class="nav-item"><a href="blogs" class="nav-link">Blogs</a></li>
              <li class="nav-item"><a href="contact-us" class="nav-link">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->


    <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <script>
        $(document).ready(function() {
    // Toggle navbar collapse on button click
    $('.navbar-toggler').click(function() {
        $(this).toggleClass('open');
        $('#ftco-nav').toggleClass('show');
    });

    // Close the navbar when a link is clicked
    $('#ftco-nav .nav-link').click(function() {
        if ($(window).width() < 768) {
            $('.navbar-toggler').removeClass('open');
            $('#ftco-nav').removeClass('show');
        }
    });

    // Toggle mobile navigation
    $('.menu-toggle').click(function() {
        $('.mobile-nav').toggle();
        $(this).toggleClass('close'); // Toggle the close class for the menu icon
        if ($(this).hasClass('close')) {
            $(this).html('&#10005;'); // Close icon (✖)
        } else {
            $(this).html('&#9776;'); // Hamburger icon (☰)
        }
    });

    // Toggle submenu on mobile view
    $('.mobile-nav .has-submenu > a').click(function(e) {
        e.preventDefault();
        var submenu = $(this).siblings('.submenu');
        submenu.toggle();
        if (submenu.is(':visible')) {
            $('html, body').animate({
                scrollTop: submenu.offset().top
            }, 500);
        }
    });
});

    </script>
  </body>
</html> 
