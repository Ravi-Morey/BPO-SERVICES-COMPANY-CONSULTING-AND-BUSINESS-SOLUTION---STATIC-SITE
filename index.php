<?php
$pageTitle = "Contact Quanteq Solutions Pvt Ltd - Your Reliable Business Partner";
$pageDescription = "Quanteq Solutions: Redefining BPO with personalized consumer care and business solutions to suit your needs.";
$pageKeywords = "business, quanteq solutions, customer, marketing";

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
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What services does Quanteq Solutions offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Quanteq Solutions offers business communications, customer support, accounting & finance, digital marketing, legal & compliance support, and sales & telecommunications services."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose Quanteq Solutions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Quanteq Solutions stands out due to its expertise, customized solutions, innovative technology, customer-centric approach, proven track record, and data-driven methodologies."
      }
    },
    {
      "@type": "Question",
      "name": "How can I contact Quanteq Solutions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact Quanteq Solutions by Email at info@quanteqsolutions.com or visit their website for more information."
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
                        <img src="images/left-side-logo-quntam.png" alt="logo quanteq solutions" style="width:200px;">
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
                    <li class="nav-item"><a href="our-services" class="nav-link">Our-Services</a>
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

	<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate">
          	<span class="subheading">Welcome To Quanteq Solution</span>
            <h1 class="mb-1">AT QUANTEQ SOLUTIONS WE DO THINGS DIFFERENTLY</h1>
            <p class="mb-4" style="font-size: 16px; font-weight: bold;">QUANTEQ SOLUTONS IS A LEADING BPO SERVICES COMPANY CONSULTING AND BUSINESS SOLUTIONS GROUP</p>
            <p><a href="our-services" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Todays Talent, Tommorow Success</span>
            <h2 class="mb-1" style="font-size:60px; color:aliceblue; line-height:1.2; font-weight:900;">We Help to Grow Your Business</h2>
            <p class="mb-4" style="font-size: 16px; font-weight: bold;">QUANTEQ SOLUTONS IS A LEADING BPO SERVICES COMPANY CONSULTING AND BUSINESS SOLUTIONS GROUP</p>
            <p><a href="our-services" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>



		<section class="ftco-section">
			<div class="container wrap-about ftco-animate">
					<span class="subheading" style="color: skyblue; font-weight: bold;"> WHO WE ARE?</span>
				<h2 class="mb-2" >Quanteq Solutions: Empowering Businesses with Expert Consulting and Tailored Business Solutions for Sustainable Growth</h2>
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate mt-2">
							<div class="img " style="background-image: url(images/about.jpg); border"></div>
							<!-- <div class="text">
								<h3>Read Our Success Story for Inspiration</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
								<p><a href="#" class="btn btn-primary py-3 px-4">Contact us</a></p>
							</div> -->
						</div>
					</div>
					<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
          
						<div class="text">
								
								<p>We are Quanteq Solutions, a dedicated provider of comprehensive business solutions tailored to empower organizations across industries. With a deep commitment to excellence and innovation, we specialize in delivering strategic consulting, cutting-edge technology solutions, and reliable operational support. Our team of seasoned professionals combines industry expertise with a client-centric approach, ensuring that every solution is meticulously crafted to meet your unique challenges and goals.</p>
								<p>At <b>Quanteq Solutions</b>, we prioritize collaboration and transparency, working closely with you to understand your business intricacies and develop actionable strategies for sustainable growth. Whether you seek to streamline processes, enhance customer engagement, or optimize resource allocation, we are here to drive measurable results and foster long-term success. Businesses have trust in our proven track record and unwavering dedication to transform challenges into opportunities, guiding your organization towards resilience and profitability in today's dynamic marketplace.
</p>

								<p><a href="about-us.php" class="btn btn-primary py-3 px-4">About us </a></p>
							</div>
						<!-- <div class="row mt-5">
							<div class="col-lg-6">
								<div class="services active text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
									<div class="text media-body">
										<h3>Organization</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
									<div class="text media-body">
										<h3>Risk Analysis</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
									<div class="text media-body">
										<h3>Marketing Strategy</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
									<div class="text media-body">
										<h3>Capital Market</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>

		<section class="ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="wrapper">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="705">0</strong>
		                <span>Projects Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="105">0</strong>
		                <span>Satisfied Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="11">0</strong>
		                <span>Awards Received</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="3">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-0 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h3 class="mb-4" style="font-weight:700; font-size: 30px;">Our Services</h3>
            <p>Unlock your business's full potential with our comprehensive suite of services tailored to meet your needs. From seamless business communications and responsive customer support to precise accounting and finance management, dynamic digital marketing strategies, meticulous legal and compliance support, and effective <b>sales and telecommunications</b> solutions. Whether you're looking to streamline operations, enhance customer satisfaction, or drive growth, our expert team is dedicated to delivering results. Partner with us to navigate challenges, capitalize on opportunities, and achieve sustainable success in today's competitive landscape.</p>
            <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Read more</a></p> -->
          </div>
        </div>
				<div class="row no-gutters">
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
							<div class="text media-body">
								<h3>Business Communications</h3>
								<p>Elevate your company's interactions with our expert Business Communications Service, offering streamlined, professional solutions for seamless and effective internal and external communication.</p>
								<p><a href="service/business-communications.php" class="btn btn-primary py-3 px-4">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
							<div class="text media-body">
								<h3>Customer Support</h3>
								<p>Quanteq Solutions is providing 24/7 personalized assistance with fast, friendly solutions. We ensure seamless experiences, resolving issues efficiently to exceed customer expectations.</p>
								<p><a href="service/customer-support.php" class="btn btn-primary py-3 px-4">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-insurance"></span></div>
							<div class="text media-body">
								<h3>Accounting & Finance</h3>
								<p>Acquire expert accounting and finance services, ensuring precise bookkeeping, financial analysis, and strategic planning for optimized business growth and compliance.</p>
								<p><a href="service/accounting-and-finance.php" class="btn btn-primary py-3 px-4">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left  text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span></div>
							<div class="text media-body">
								<h3>Digital Marketing</h3>
								<p>Maximize your online presence with our comprehensive digital marketing services: SEO, PPC, social media, and content marketing tailored to boost your business growth.</p>
								<p><a href="service/digital-marketing.php" class="btn btn-primary py-3 px-4">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center  ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span></div>
							<div class="text media-body">
								<h3>Legal & Compliance Support</h3>
								<p>Expert legal and compliance support, ensuring your business adheres to regulations, mitigates risks, and maintains ethical standards across all operations and jurisdictions.
</p>
								<p><a href="service/legal-and-compliance-support.php" class="btn btn-primary py-3 px-4">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center  ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
							<div class="text media-body">
								<h3>Sales & Telecommunications</h3>
								<p>Quanteq Solutions is offering seamless connectivity, innovative solutions, and tailored support to enhance your sales and business communications to drive growth.</p>
								<p><a href="service/sales-and-telecommunications.php" class="btn btn-primary py-3 px-4">Read more</a></p>
							</div>
						</div>
					</div>
          <div class="col-lg-4 d-flex">
                        <div class="services-2 text-center  ftco-animate">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-database"></span></div>
                            <div class="text media-body mt-2">
                                <h3>Lead Generation</h3>
                                <p>In the fast-paced, ever-evolving landscape of modern business, identifying and connecting with potential customers is crucial for sustained growth.</p>
                                <p><a href="service/lead-generation.php" class="btn btn-primary py-3 px-4">Read more</a></p>
                            </div>
                        </div>
                    </div>
          <div class="col-lg-4 d-flex">
                        <div class="services-2 text-center noborder-bottom ftco-animate">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="icon-laptop  "></span></div>
                            <div class="text media-body mt-2">
                                <h3>Website Development</h3>
                                <p>QuanteqSolutions delivers world-class web development services, tailored to boost traffic and enhance your business's online visibility.</p>
                                <p><a href="service/web-development.php" class="btn btn-primary py-3 px-4">Read more</a></p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>

		
		<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 bg-light">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="images/howtowork.png" alt="how to work">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11 heading-section ftco-animate" >
            <h3 class="mb-4 " style="font-weight:700;">How We Work</h3>
            <p class=" text-secondary mb-4">At Quanteq Solutions, we approach every client partnership with a commitment to understanding your unique challenges and goals. Our process begins with a thorough assessment, analyzing your current operational needs. Leveraging our expertise across industries, we develop customized solutions that align with your business objectives, optimizing efficiency, enhancing scalability, and driving measurable results. Our proactive monitoring and support ensure continuous improvement and peace of mind. Trusted across industries, we deliver excellence and foster long-term success for your organization.</p>
            <!-- <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p> -->
            <!-- <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Versatile Brand</h2>
                    <p class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Digital Agency</h2>
                    <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		
		<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 bg-light">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-7 heading-section ftco-animate">
        <h3 class="mb-4 " style="font-weight:700;">OUR TEAM</h3>
        <h4> We do things differently at Quanteq Solutions.</h4>
            <p class=" text-secondary mb-4">We think and behave differently, we look and sound different, and that’s because we know savvy businesses want alternatives to traditional suppliers. Being different also makes it easier for us to help our clients navigate the constant changes happening around them. We’re not different for the sake of being different – we’re different because it’s the key to achieving great customer experience. </p>
      </div>
      <div class="col-12 col-lg-6 col-xl-5">
        <div class="row justify-content-xl-center">
          <div class="col-12  col-xl-11 " >
          	<img class="img-fluid rounded" loading="lazy" src="images/team.png" alt="team quanteq solutions">
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

		


 <section class="ftco-section ftco-no-pt-2">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<!-- <span class="subheading">Services</span> -->
            <h3 class="mb-4" style="font-weight:700; font-size: 30px;">Why Choose Us?</h3>
            <p>Choosing the right partner for your business needs is crucial for sustained success. Our company offers a comprehensive suite of services designed to help you excel in every aspect of your operations. With a commitment to excellence, innovation, and customer satisfaction, we stand out as the premier choice for businesses seeking to enhance their Sales & Telecommunications, Customer Support, Accounting & Finance, and Digital Marketing efforts. Here’s why you should choose us:</p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span> Expertise Across Multiple Domains</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span> Customized Solutions</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> Innovative Technology</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span> Customer-Centric Approach</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span> Proven Track Record</a>
						  </li>
						  <li class="nav-item text-left active">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span> Data-Driven Approach</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class=" project1 img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/multiple-domain.png); "></div>
						  	<h3><a href="#">Expertise Across Multiple Domains</a></h3>
						  	<p>We bring together a team of seasoned professionals with deep expertise in <b><a href="https://quanteqsolutions.com/service/sales-and-telecommunications">sales, telecommunications</a></b>, <a href="https://quanteqsolutions.com/service/customer-support">customer support</a>, <a href="https://quanteqsolutions.com/service/accounting-and-finance ">accounting, finance</a>, and <a href="https://quanteqsolutions.com/service/digital-marketing">digital marketing</a>. Our multidisciplinary approach ensures that we address your unique needs holistically, driving synergy across all facets of your business.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="project1 img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/customisation.jpg); "></div>
						  	<h3><a href="#">Customized Solutions</a></h3>
						  	<p>We understand that every business is different. Our solutions are tailored to fit your specific requirements, ensuring that you receive the most effective and efficient service possible. We take the time to understand your goals, challenges, and market environment to provide bespoke strategies that deliver results.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="project1 img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/innovation.jpg); "></div>
						  	<h3><a href="#"> Innovative Technology</a></h3>
						  	<p>Staying ahead in today’s competitive market requires leveraging the latest technology. Our services are powered by cutting-edge tools and platforms that enhance efficiency, accuracy, and performance. From advanced telecommunications systems to robust accounting software and data-driven digital marketing strategies, we equip your business with the best technological solutions.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="project1 img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/customer-support.jpg); "></div>
						  	<h3><a href="#">Customer-Centric Approach</a></h3>
						  	<p>Our clients are at the heart of everything we do. We pride ourselves on delivering exceptional customer service and building long-lasting relationships. Our dedicated support teams are always available to assist you, ensuring seamless communication and prompt resolution of any issues.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="project1 img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/track-record.png);"></div>
						  	<h3><a href="#">Proven Track Record</a></h3>
						  	<p>With a portfolio of successful projects and satisfied clients, we have a proven track record of delivering tangible results. Our expertise in driving sales growth, optimizing financial performance, enhancing customer satisfaction, and boosting online presence speaks for itself.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="project1 img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/data-driven-approach.png); "></div>
						  	<h3><a href="#">Data-Driven Approach</a></h3>
						  	<p>Our decisions are based on thorough research and data analysis. We continuously monitor the performance of our campaigns, making data-driven adjustments to optimize results. This ensures maximum efficiency and effectiveness of your marketing budget.</p>

<p>With years of experience in the all above said industries, our team of experts brings a wealth of knowledge and proven strategies to the table. We stay ahead of the latest trends and technologies to provide cutting-edge solutions for your business.</p><p>
We believe in transparency and keep you informed every step of the way. With regular reports and detailed insights, you can track the progress of your company and understand the impact of our efforts on your business.</p>
						  </div>
						</div>
					</div>
				</div>
    	</div>
    </section>

 <section class=" testimony-section ">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h4 class="mb-4" style="font-weight:700; font-size: 30px;">Our Clients Says</h4>
            <p>Our clients thrive in a supportive environment. A seamless flow of services and solutions ensures their success and satisfaction.</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Quanteq Solutions transformed our digital marketing with deep expertise, strategic approach, improved SEO, and engaging content. Highly recommended!</p>
                    <p class="name">James Cooper</p>
                    <!-- <span class="position">Father</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center" >
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Our partnership with Quanteq Solutions has elevated our brand visibility and customer engagement. Professional, innovative, and responsive!
</p>
                    <p class="name">Emily Jackson</p>
                    <!-- <span class="position">Businesswoman</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Selecting Quanteq Solutions was among our top business decisions. Their digital marketing expertise expanded our audience, boosting sales.</p>
                    <p class="name">Oliver Smith</p>
                    <br/>
                    <!-- <span class="position">Businesswoman</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>We're deeply grateful for the exceptional work of Quanteq Solutions. Their creative strategies keep us ahead, delivering remarkable results. Highly recommended!
</p>
                    <p class="name">Ava Thompson
</p>
                    <!-- <span class="position">Businesswoman</span> -->
                  </div>
                </div>
              </div>
              
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h4 class="mb-4" style="font-weight:700; font-size: 30px;"><span>Recent</span> Blogs</h4>
            <p>Stay informed with our latest insights and updates. Our blog provides valuable information to help you stay ahead in the industry.</p>
          </div>
        </div>
				<div class="row">

                    <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry" data-page="1">
              <a href="blog/ai-in-content-marketing-transforming-the-future-of-digital-strategy" class="block-20 d-flex align-items-end" style="background-image: url('images/blog QS.jpg');">
                <div class="meta-date text-center p-2">
                  <span class="day">29</span>
                  <span class="mos">Oct</span>
                  <span class="yr">2024</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="blog/ai-in-content-marketing-transforming-the-future-of-digital-strategy">AI in Content Marketing: Transforming the Future of Digital Strategy
</a></h3>
                <p>The rise of artificial intelligence (AI) is rapidly changing how businesses approach content marketing. By integrating AI..</p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="blog/ai-in-content-marketing-transforming-the-future-of-digital-strategy" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                </div>
              </div>
            </div>
          </div>

        <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog/telecommunication-technologies-quanteq-solutions-role-in-advancing-connectivity" class="block-20 d-flex align-items-end" style="background-image: url('images/telicommunication-technology.jpeg');">
                <div class="meta-date text-center p-2">
                  <span class="day">10</span>
                  <span class="mos">Oct</span>
                  <span class="yr">2024</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="blog/telecommunication-technologies-quanteq-solutions-role-in-advancing-connectivity">Telecommunication Technologies: QuanteqSolutions Role in Advancing Connectivity
</a></h3>
                <p>In an age where the world is more connected than ever before, telecommunication technologies have become the foundation of global.</p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="blog/telecommunication-technologies-quanteq-solutions-role-in-advancing-connectivity" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                </div>
              </div>
            </div>
          </div>

         <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog/the-role-of-ai-in-enhancing-quanteq-solutions-removalist-services-within-melbourne" class="block-20 d-flex align-items-end" style="background-image: url('images/role-ai.jpeg');">
                                <div class="meta-date text-center p-2">
                  <span class="day">27</span>
                  <span class="mos">Sep</span>
                  <span class="yr">2024</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="blog/the-role-of-ai-in-enhancing-quanteq-solutions-removalist-services-within-melbourne">The Role of AI in Enhancing QuanteqSolutions Removalist Services within Melbourne</a></h3>
                <p>Whether it's optimizing routes, managing inventory, or enhancing customer service, AI provides cutting-edge solutions </p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="blog/the-role-of-ai-in-enhancing-quanteq-solutions-removalist-services-within-melbourne" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                   
                </div>
              </div>
            </div>
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

		<section class="ftco-section" id="faq" style="padding:2em 0;">

		<div class="row justify-content-center mb-0 pb-0">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h5 class="mb-4" style="font-weight: 700; font-size: 30px; width:-webkit-fill-available;">Frequently Asked Questions</h5>
            <!-- <p>Stay informed with our latest insights and updates. Our blog provides valuable information to help you stay ahead in the industry.</p> -->
          </div>
        </div>

<div class="wrappers">
  
  <div class="containers">
    <div class="question">
      What services does Quanteq Solutions offer?
    </div>
    <div class="answercont">
      <div class="answer">
        Quanteq Solutions offers <a href="https://quanteqsolutions.com/service/business-communications">business communications</a>, <a href="https://quanteqsolutions.com/service/customer-support">customer support</a>, <a href="https://quanteqsolutions.com/service/accounting-and-finance">accounting & finance</a>, <a href="https://quanteqsolutions.com/service/digital-marketing">digital marketing</a>,<a href="https://quanteqsolutions.com/service/legal-and-compliance-support"> legal & compliance support</a>, and <a href="https://quanteqsolutions.com/service/sales-and-telecommunications">sales & telecommunications</a> services.<br><br>

<!-- <a href="https://blog.codepen.io/documentation/features/email-verification/#how-do-i-verify-my-email-2">How to Verify Email Docs</a> -->
      </div>
    </div>
  </div>
  
    <div class="containers">
    <div class="question">
      Why choose Quanteq Solutions?
    </div>
    <div class="answercont">
      <div class="answer">
        Quanteq Solutions stands out due to its expertise, customized solutions, innovative technology, customer-centric approach, proven track record, and data-driven methodologies.<br><br>

<!-- <a href="https://blog.codepen.io/documentation/features/turn-off-javascript-in-previews/">How to Disable JavaScript Docs</a> -->
      </div>
    </div>
  </div>
  
      <div class="containers">
    <div class="question">
       How can I contact Quanteq Solutions?
    </div>
    <div class="answercont">
      <div class="answer">
        You can contact Quanteq Solutions by Email at <a href="mailto:hr@quanteqsolutions.com">hr@quanteqsolutions.com</a> or visit their website for more information.<br><br>

<!-- <a href="https://blog.codepen.io/documentation/faq/how-do-i-contact-the-creator-of-a-pen/">How to Contact Creator of a Pen Docs</a> -->
      </div>
    </div>
  </div>
  <div class=" noborder-left text-center ftco-animate">
  <p><a href="faq" class="btn btn-primary py-3 px-4">See Our FAQs</a></p>
</div>
 
  <!-- <div class="containers">
    <div class="question">
      What version of [library] does CodePen use?
    </div>
    <div class="answercont">
      <div class="answer">
        We have our current list of library versions <a href="https://codepen.io/versions">here</a>
   
      </div>
    </div>
  </div> -->
  
  <!-- <div class="containers">
    <div class="question">
      What are forks?
    </div>
    <div class="answercont">
      <div class="answer">
        A fork is a complete copy of a Pen or Project that you can save to your own account and modify. Your forked copy comes with everything the original author wrote, including all of the code and any dependencies.<br><br>

<a href="https://blog.codepen.io/documentation/features/forks/">Learn More About Forks</a>
      </div>
    </div>
  </div> -->
  

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
		

    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h5 class="mb-4" style="font-weight:700; font-size: 30px; color:white;">
            WE ARE HIRING!
            <p style="font-size:15px!important;">If you want to be part of our team, Share your Expression of Interest</p>
            <p style="font-size:15px!important;">hr@quanteqsolutions.com</p></h5>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="career.php" class="btn btn-white py-3 px-4">Apply Now</a></p>
          </div>
        </div>	
    	</div>
    </section>

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
