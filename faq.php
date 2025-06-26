<?php
$pageTitle = " Quanteq Solutions FAQs";
$pageDescription = "Discover expert insights, tips, and trends in business strategies, technology, finance, and more on the Quanteq Solutions blog.";
$pageKeywords = "Quanteq Solutions, FAQs, our team, mission, vision";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/fevicon-quntam.png">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap">
    <!-- CSS Files -->
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
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Can Quanteq Solutions handle international projects?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we have the expertise and resources to manage projects on a global scale, ensuring compliance and effectiveness across regions."
      }
    },
    {
      "@type": "Question",
      "name": "What are the benefits of outsourcing to Quanteq Solutions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Outsourcing with us offers cost efficiency, expert solutions, and the ability to focus on your core business functions."
      }
    },
    {
      "@type": "Question",
      "name": "How does Quanteq Solutions handle data security and privacy?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We adhere to strict security protocols and privacy policies to protect your data and ensure confidentiality."
      }
    },
    {
      "@type": "Question",
      "name": "What makes Quanteq Solutions different from other BPO service providers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We prioritize collaboration, transparency, and a tailored approach to meet your unique business challenges and goals."
      }
    },
    {
      "@type": "Question",
      "name": "How does Quanteq Solutions ensure quality customer support?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer 24/7 personalized assistance with fast, friendly solutions, ensuring seamless experiences and efficient issue resolution."
      }
    },
    {
      "@type": "Question",
      "name": "What industries does Quanteq Solutions serve?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We serve a variety of industries, providing tailored solutions to meet specific business needs across sectors."
      }
    },
    {
      "@type": "Question",
      "name": "Can Quanteq Solutions help with digital marketing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer comprehensive digital marketing services including SEO, PPC, social media, and content marketing to boost your online presence and growth."
      }
    },
    {
      "@type": "Question",
      "name": "What is the process for working with Quanteq Solutions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our process begins with a thorough assessment of your operational needs, followed by developing customized solutions, proactive monitoring, and continuous support."
      }
    },
    {
      "@type": "Question",
      "name": "What technologies does Quanteq Solutions use?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We leverage the latest tools and platforms in telecommunications, accounting software, and data-driven digital marketing strategies to enhance efficiency and performance."
      }
    },
    {
      "@type": "Question",
      "name": "How can I stay updated with Quanteq Solutions' latest insights and updates?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Visit our blog for valuable information on industry trends, updates, and strategic business insights.For more detailed information, visit [Quanteq Solutions](https://quanteqsolutions.com/)."
      }
    }
  ]
}
</script>

    
    <style>
        /* Base styles for navigation */
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
        }

        .mobile-nav .has-submenu > a::after {
            content: '\25BC'; /* Down arrow */
            float: right;
            margin-left: 10px;
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

             ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #fffff;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #299894;

}
.single-cta{
  border: 1px solid;
  border-radius: 50px;
  background:#299894 ;
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
  margin-bottom: 5px;


}
.single-cta:hover{
  background:#d1bf6c ;
}
.single-cta i {
  color: #000;
  font-size: 30px;
  float: left;
  margin-top: 8px;

}
.cta-text {
  padding-left: 0px;
  display: inline-block;

}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #fff;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #000;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #000;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #000;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #299894;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 100%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #d1bf6c;
}
.footer-widget ul li a {
  color: #299894;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #f5f5f5;
  border: 1px solid #2E2E2E;
  color: #000;

}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #299894;
    padding: 13px 20px;
    border: 1px solid #000;
    top: 0;
}
.subscribe-form button i {
  color: #000;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #01605c;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #fff;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #d1bf6c;
}
.footer-menu li a {
  font-size: 14px;
  color: #fff;
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
                                        <a href="https://www.instagram.com/quanteq.solutions" style="font-size:22px; padding-right: 10px;"><i class="ion-logo-instagram"></i><span class="sr-only">Instagram</span></a>
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
        <!-- <div class="additional-links"> -->
            <a href="blogs">Blogs</a>
            <a href="contact-us">Contact Us</a>
        <!-- </div> -->
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
                    <li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="our-services" class="nav-link">Our Services</a>
                        <ul class="submenu">
                            <li class="nav-item"><a href="service/business-communications">Business Communications</a></li>
                            <li class="nav-item"><a href="service/accounting-and-finance">Accounting & Finance</a></li>
                            <li class="nav-item"><a href="service/customer-support">Customer Support</a></li>
                            <li class="nav-item"><a href="service/digital-marketing">Digital Marketing</a></li>
                            <li class="nav-item"><a href="service/legal-and-compliance-support">Legal & Compliance Support</a></li>
                            <li class="nav-item"><a href="service/sales-and-telecommunications">Sales & Telecommunications</a></li>
                            <li class="nav-item"><a href="service/lead-generation">Lead Generation</a></li>
                            <li class="nav-item"><a href="service/website-development">Website Development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="blogs" class="nav-link">Blogs</a></li>
                    <li class="nav-item"><a href="contact-us" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>


<!--  -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">FAQs</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>FAQs<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<style type="text/css">

			#faq{
				background-color: #F5F5F5;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
/*  margin: 50px 0;*/
			}
			.wrappers {
  width: 60%;
}



.containers {
  background-color: white;
  color: black;
  border-radius: 20px;
  box-shadow: 0 5px 10px 0 rgb(0,0,0,0.25);
  margin: 20px 0;
}

.question {
  font-size: 1.2rem;
  font-weight: 600;
  padding: 20px 80px 20px 20px;
  position: relative;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.question::after {
  content: "\002B";
  font-size: 2.2rem;
  position: absolute;
  right: 20px;
  transition: 0.2s;
}

.question.active::after {
  transform: rotate(45deg);
}

.answercont {
  max-height: 0;
  overflow: hidden;
  transition: 0.3s;
}

.answer {
  padding: 0 20px 20px;
  line-height: 1.5rem;
}

.question.active + .answercont {
}

@media screen and (max-width: 790px){
  html {
    font-size: 14px;
  }
  .wrappers {
  width: 80%;
}
}
		</style>

		<section class="ftco-section" id="faq">

			<div class="row justify-content-center mb-0 pb-0">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h5 class="mb-4" style="font-weight: 700; font-size: 30px; width:-webkit-fill-available;">Frequently Asked Questions</h5>
            <!-- <p>Stay informed with our latest insights and updates. Our blog provides valuable information to help you stay ahead in the industry.</p> -->
          </div>
        </div>

		

<div class="wrappers">
  
  <div class="containers">
    <div class="question">
      Can Quanteq Solutions handle international projects?
    </div>
    <div class="answercont">
      <div class="answer">
        Yes, we have the expertise and resources to manage projects on a global scale, ensuring compliance and effectiveness across regions.
<br><br>

<!-- <a href="https://blog.codepen.io/documentation/features/email-verification/#how-do-i-verify-my-email-2">How to Verify Email Docs</a> -->
      </div>
    </div>
  </div>
  
    <div class="containers">
    <div class="question">
       What are the benefits of outsourcing to Quanteq Solutions?
    </div>
    <div class="answercont">
      <div class="answer">
       Outsourcing with us offers cost efficiency, expert solutions, and the ability to focus on your core business functions.<br><br>

<!-- <a href="https://blog.codepen.io/documentation/features/turn-off-javascript-in-previews/">How to Disable JavaScript Docs</a> -->
      </div>
    </div>
  </div>
  
  <div class="containers">
    <div class="question">
       How does Quanteq Solutions handle data security and privacy?
    </div>
    <div class="answercont">
      <div class="answer">
        We adhere to strict security protocols and privacy policies to protect your data and ensure confidentiality.<br><br>
      </div>
    </div>
  </div>

  <div class="containers">
    <div class="question">
       What makes Quanteq Solutions different from other BPO service providers?
    </div>
    <div class="answercont">
      <div class="answer">
        We prioritize collaboration, transparency, and a tailored approach to meet your unique business challenges and goals.
<br><br>
      </div>
    </div>
  </div>

  <div class="containers">
    <div class="question">
      How does Quanteq Solutions ensure quality customer support?

    </div>
    <div class="answercont">
      <div class="answer">
       We offer 24/7 personalized assistance with fast, friendly solutions, ensuring seamless experiences and efficient issue resolution.
<br><br>
      </div>
    </div>
  </div>

  <div class="containers">
    <div class="question">
      What industries does Quanteq Solutions serve?
    </div>
    <div class="answercont">
      <div class="answer">
        We serve a variety of industries, providing tailored solutions to meet specific business needs across sectors.
<br><br>
      </div>
    </div>
  </div>

  <div class="containers">
    <div class="question">
       Can Quanteq Solutions help with digital marketing?
    </div>
    <div class="answercont">
      <div class="answer">
       Yes, we offer comprehensive digital marketing services including SEO, PPC, social media, and content marketing to boost your online presence and growth.
<br><br>
      </div>
    </div>
  </div>

  <div class="containers">
    <div class="question">
       What is the process for working with Quanteq Solutions?

    </div>
    <div class="answercont">
      <div class="answer">
        Our process begins with a thorough assessment of your operational needs, followed by developing customized solutions, proactive monitoring, and continuous support.<br><br>
      </div>
    </div>
  </div>
 
  <div class="containers">
    <div class="question">
      What technologies does Quanteq Solutions use?

    </div>
    <div class="answercont">
      <div class="answer">
        We leverage the latest tools and platforms in telecommunications, accounting software, and data-driven digital marketing strategies to enhance efficiency and performance.<br><br>
      </div>
    </div>
  </div>
  
   <div class="containers">
    <div class="question">
      How can I stay updated with Quanteq Solutions' latest insights and updates?

    </div>
    <div class="answercont">
      <div class="answer">
        Visit our blog for valuable information on industry trends, updates, and strategic business insights.For more detailed information, visit [Quanteq Solutions](https://quanteqsolutions.com/).<br><br>
      </div>
    </div>
  </div>

</section >
<!-- <script src="https://storage.ko-fi.com/cdn/scripts/overlay-widget.js"></script> -->
<script>
  // kofiWidgetOverlay.draw('mohamedghulam', {
  //   'type': 'floating-chat',
  //   'floating-chat.donateButton.text': 'Support me',
  //   'floating-chat.donateButton.background-color': '#323842',
  //   'floating-chat.donateButton.text-color': '#fff'
  // });

  let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if(active && active !== question ) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if(question.classList.contains("active")){
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})

</script>

 <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <!-- <i class="fas fa-map-marker-alt"></i> -->
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Gurgaon 122002, Haryana</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <!-- <i class="fas fa-phone"></i> -->
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span><br></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">

                            <!-- <i class="far fa-envelope-open"></i> -->
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>hr@quanteqsolutions.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.php"><img src="images/left-side-logo-quntam.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text" style="padding-right: 20%;">
                                <p>Trust Quanteq Solutions to be your dependable partner in delivering exceptional consumer care solutions. Let us help you achieve success with our high-quality, customized services.</p>
                            </div>
                            <div class="ftco-footer-widget mb-5" >
                              
                <h4 class="ftco-heading-2 mb-0" >Connect With Us</h4>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3" style="display:inline-flex;">
                <!-- <li class="ftco-animate"><a href="#" style="background: rgba(0, 0, 0, 0.1);"><span class="icon-twitter"></span></a></li> -->
                <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100085491521014" style="background: rgba(0, 0, 0, 0.1);"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/quanteq.solutions/" style="background: rgba(0, 0, 0, 0.1);"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
                            <!-- <div class="footer-social-icon">
                                <span>Follow us</span>

                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <style type="text/css"> </style>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                
                                <li><a href="about-us">About Us</a></li>
                                <!-- <li><a href="services/customer-support.php">Customer Support</a></li> -->
                                <li><a href="blogs">Blogs</a></li>
                                <!-- <li><a href="services/lead-generation.php">Lead Generation</a></li> -->
                                <li><a href="careers">Career</a></li>
                                <!-- <li><a href="services/digital-marketing.php">Digital Marketing</a></li> -->
                                
                                <li><a href="our-services">Our Services</a></li>
                                <!-- <li><a href="services/legal-and-compliance-support.php">Inquiry Handling</a></li> -->
                                <li><a href="faq">FAQs</a></li>
                                <!-- <li><a href="services/sales-and-telecommunications.php">TeleMarketing Services</a></li> -->
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                <form action="php/subscribe.php" method="post">
                    <input type="email" name="email" placeholder="Email Address" required>
                    <button type="submit" style="color:white; font-weight:bold;">Submit</button>
                </form>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Quanteq Solution || All Right Reserved </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <!-- <li><a href="#">Home</a></li> -->
                                <li><a href="terms-and-condition">Terms & Condition</a></li>
                                <li><a href="privacy-policy">Privacy Policy</a></li>
                                <!-- <li><a href="#"></a></li>
                                <li><a href="#">Contact</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  



   <!--  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul> -->
                    <!-- <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li> -->
                    <!-- <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@quanteqsolutions.com</span></a></li>
                  </ul>
                </div>
            </div>
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div> -->
          <!-- <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center"> -->

            <!-- <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>Quanteq Solution || All rights reserved  -->
  <!-- | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <!-- </p>
          </div>
        </div>
      </div>
    </footer> -->


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

            // Toggle submenu on mobile view
            $('#ftco-nav .nav-item > .nav-link').click(function(e) {
                if ($(window).width() < 768) {
                    var submenu = $(this).siblings('.submenu');
                    if (submenu.length > 0) {
                        e.preventDefault();
                        submenu.toggleClass('show');
                    }
                }
            });
        });

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


