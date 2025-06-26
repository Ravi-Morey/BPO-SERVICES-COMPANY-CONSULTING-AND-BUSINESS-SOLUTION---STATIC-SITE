<?php
$pageTitle = "Contact Us | Quanteq Solutions Pvt Ltd";
$pageDescription = "Get in touch with Quanteq Solutions Pvt Ltd for customized business solutions in communications, finance, marketing, and more.";
$pageKeywords = "contact, quanteq, solutions";
include 'template/header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Address:</span> Gurgaon 122002, Haryana</p>
		          </div>
		          <div class="col-md-4 text-center border-height py-4">
		          	<div class="icon">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="#"></a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:hr@quanteqsolutions.com">hr@quanteqsolutions.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
    <div class="col-md-8 mb-md-5">
        <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
        <form id="contact-form" action="php/connect.php" method="post" class="bg-light p-5 contact-form">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="form-group">
                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
        </form>
        <div id="thank-you-message" class="text-center" style="display:none;">
            <h3>Thank you for your message. We will get back to you shortly.</h3>
        </div>
    </div>
</div>

<script>
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    var form = this;
    var submitButton = form.querySelector('input[type="submit"]');
    var thankYouMessage = document.getElementById('thank-you-message');

    // Show processing state
    submitButton.value = 'Processing...';
    submitButton.disabled = true;

    // Create FormData object
    var formData = new FormData(form);

    // Send form data via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Show thank you message
            thankYouMessage.style.display = 'block';

            // Reset the form
            form.reset();

            // Reset submit button
            submitButton.value = 'Send Message';
            submitButton.disabled = false;
        } else {
            // Handle error
            alert('An error occurred. Please try again.');
            submitButton.value = 'Send Message';
            submitButton.disabled = false;
        }
    };
    xhr.send(formData);
});
</script>

      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-md-12">
              
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14037.069807820719!2d77.03937290307168!3d28.411185662577772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d228f446b3881%3A0x9d798b7f0e65fcbc!2sSector%2049%2C%20Gurugram%2C%20Haryana%20122018!5e0!3m2!1sen!2sin!4v1717468443685!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
        </div>
    </div>
</section>



    
<?php include('template/footer.php');?>