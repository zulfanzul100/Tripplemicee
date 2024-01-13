<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tripplemice</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url();?>asset/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url();?>asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/login.css" rel="stylesheet">
</head>

<body>



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="<?php echo site_url('home')?>" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-dark"><i class="fas fa-car fs-1 text-primary me-3"></i>Tripplemice</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <?php echo anchor('home','Home','class="nav-link"');?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rental</a>
                    <div class="dropdown-menu m-0">
                        <?php echo anchor('categories','Categories','class="dropdown-item"');?>
                        <?php echo anchor('product','Product','class="dropdown-item"');?>
                        <?php echo anchor('booking','Booking Page','class="dropdown-item"');?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact Us</a>
                    <div class="dropdown-menu m-0">
                        <?php echo anchor('contact','Message','class="dropdown-item"');?>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">View Cart</a>
                    <div class="dropdown-menu m-0">
                        <?php echo anchor('cart','Check Out','class="dropdown-item"');?>
                    </div>
                </div>
                
                <?php echo anchor('login','Login','class="nav-item nav-link nav-contact bg-dark text-white px-5 ms-lg-5"');?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <?php echo $konten;?>
<!-- Footer Start -->
<div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Perum Puri Savira Sunrejo, Kota Batu, Jawa Timur</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>tripplemicetrans@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+62 898 3474 546</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="<?php echo site_url('home')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="<?php echo site_url('categories')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Categories</a>
                        <a class="text-body mb-2" href="<?php echo site_url('product')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Product</a>
                        <a class="text-body mb-2" href="<?php echo site_url('booking')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Booking Page</a>
                        <a class="text-body mb-2" href="<?php echo site_url('message')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Message</a>
                        <a class="text-body" href="<?php echo site_url('cart')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Check Out</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Popular Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="<?php echo site_url('home')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="<?php echo site_url('product')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Product</a>
                        <a class="text-body mb-2" href="<?php echo site_url('booking')?>"><i class="bi bi-arrow-right text-primary me-2"></i>Booking Page</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Newsletter</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Your Email">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">Terms & Conditions</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Privacy Policy</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Customer Support</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Payments</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Help</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">FAQs</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">Tripplemice</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>asset/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();?>asset/js/main.js"></script>
</body>

</html>