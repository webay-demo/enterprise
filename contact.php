<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://ranabartenders.in/enterprise">
    <title>SK Enterprise</title>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "url": "http://ranabartenders.in",
          "name": "Rana Bartenders",
          "sameAs": 
              ["http://www.facebook.com/",
              "http://www.instagram.com/"]
        }
    </script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e488496d2b.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <link rel="stylesheet" ref="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="icon" href="resources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/callback.css">
    <link rel="stylesheet" href="assets/css/media-query.css">
    
    <meta property="og:type" content="homepage" />
    <meta property="og:image" content="https://ranabartenders.in/resources/images/dmitriy-frantsev-rjSnhPy3bxI-unsplash.jpg">
    <meta property="og:title" content="Rana Bartenders - Outstanding Bartenders in Chandigarh">
    <meta property="og:url" content="https://ranabartenders.in/enterprise">
    <meta property="og:description" content="Rana Bartenders offers exceptional custom bar catering service for special events all over Chandigarh. Russian, Molecular, Cocktail, Mocktail, etc.">
    <meta name="description" content="Rana Bartenders offers exceptional custom bar catering service for special events all over Chandigarh. Russian, Molecular, Cocktail, Mocktail, etc.">
    <meta name="keywords" content="Rana Bartenders, Rana Bartenders Chandigarh, Rana Bartenders Mohali, Bartenders, Best Bartenders, Bartenders in Chandigarh, Bartending Services in Chandigarh, Best Bartenders in Chandigarh, Bartenders in Mohali,
     Bartending Services in Mohali, Best Bartenders in Mohali, Mohali, Chandigarh, Mohali Bartenders, Chandigarh Bartenders, Russian Bartenders, Russian Bartenders in Chandigarh,
      Russian Bartenders in Mohali, Russian Bartending Service in Chandigarh, Russian Bartending Service in Mohali, Molecular Bar in Chandigarh, Molecular Bar in Mohali, Best Bartenders in India">
</head>
<body>

    <header>
        <div class="nav">
            <div class="row-width">
                <div class="logo"><span>S.K. Enterprise</span></div>
                <nav>
                    <ul>
                    <li><a href="https://www.skent.co.in" class="active">Home</a></li>
                        <li><a href="https://www.skent.co.in#services">What we Do?</a></li>
                        <li><a href="https://www.skent.co.in#about">About Us</a></li>
                        <li><a href="https://www.skent.co.in#projects">Our Projects</a></li>
                        <li><a href="https://www.skent.co.in#locations">Locations</a></li>
                        <li><a href="https://www.skent.co.in#contact">Contact Us</a></li>
                    </ul>
                </nav>
                <a href="mailto:sksingh1380@gmail.com" class="phone email-head"><i class="fa fa-envelope"></i> sksingh1380@gmail.com</a>
                <a href="tel:+919038145510" class="phone phone-head"><i class="fa fa-phone"></i> 903-814-5510</a>
            </div>
        </div>
    </header>

    <section class="callback">
        <?php if(isset($_GET['msg'])){ ?>
        <div class="row-width">
            <?php if($_GET['msg']=="success"){ ?>
            <div class="alert alert-success alert-dismissible fade show callback-alert" role="alert">
                <strong>Thank you for messaging us!</strong> We&rsquo;ll contact you soon.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } ?>
            <?php if($_GET['msg']=="error"){ ?>
            <div class="alert alert-danger alert-dismissible fade show callback-alert" role="alert">
                <strong>Something went wrong!</strong> Please try again.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
        <form action="php/get-callback.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Name" class="name-input" name="name" required>
                </div>
                <div class="col-md-6">
                    <input type="number" placeholder="Phone" class="phone-input" name="phone" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="email" placeholder="Email" class="email-input" name="email" required>
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="City" class="city-input" name="city" required>
                </div>
            </div>
            <textarea name="" id="" placeholder="Message" class="message-input" name="message" required></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>


    <footer class="footer" id="contact">
        <div class="row-width">
            <p class="footer-text silver-pc">Andul, Howrah, West Bengal, India - 711117<br><a href="tel:+919038145510">903-814-5510</a> &nbsp; | &nbsp; <a href="mailto:sksingh1380@gmail.com">sksingh1380@gmail.com</a></p>
            <p class="footer-text silver-phone">Andul, Howrah, West Bengal, India - 711117<br><a href="tel:+919038145510">903-814-5510</a><br><a href="mailto:sksingh1380@gmail.com">sksingh1380@gmail.com</a></p>
            <a href="contact.php" class="whatsapp-cta">Get Callback</a>
            <div class="social-links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
            <p class="footer-last">Copyright &copy; 2021, S.K. Enterprise &nbsp;<i class="fa fa-circle"></i>&nbsp; Designed by <a href="https://www.webaysolutions.com"><strong>Webay Solutions</strong></a>.</p>
        </div>
    </footer>

</body>
</html>