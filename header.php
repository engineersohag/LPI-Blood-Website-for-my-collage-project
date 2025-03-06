
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home | LPI-Blood Bank</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="blood-donation.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="loading()">


   <!-- =============== add-page-Preloader ============== -->

   <div id="loading">
       
   </div>
    
    <div class="container-xxl bg-white p-0 index">

        <!-- ================= Navigation Bar =================== -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center" id="bottom-icon">
                        <h1 class="m-0 text-primary text-uppercase" style="font-size: 25px;">LPI Blood Bank
                            <span style="font-size: 9px;" class="d-block">Lakshmipur Polytechnic Institute</span>
                        </h1>
                        <!-- <img src="img/logo.png" alt=".." class="img-fluid" style="width: 130px; height: 75px;"> -->
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">

                            <div class="h-100 d-inline-flex align-items-center py-2 me-2">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <a href="www.gmail.com" class="text-secondary mb-0">connectwithsohag@gmail.com</a>
                            </div>

                            <div class="h-100 d-inline-flex align-items-center py-2 me-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+88017-5096-5595</p>
                            </div>

                        </div>

                        <!-- social icon -->
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a href="https://www.facebook.com/groups/669389887932317" target="_blank" class="me-3">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="me-3">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="www.youtube.com" target="_blank" class="me-3">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/sohag-hosen-9535b4245/" target="_blank" class="me-3">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#" class="me-3">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a id="google_element"></a>
                            </div>
                        </div>

                    </div>

                    <nav class="navbar-expand-lg navbar bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">LPI Blood</h1>
                        </a>
                        <!-- button for responsive device -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navs">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- menu-items -->
                        <div class="collapse navbar-collapse justify-content-between" id="navs">
                            <div class="navbar-nav me-auto py-0 text-uppercase">
                                <a href="index.php" class="nav-link nav-item active">Home</a>
                                <div class="dropdown nav-item">
                                <a class="nav-link dropdown-toggle" id="dropdown" data-bs-toggle="dropdown">Donar List</a>
                                    <div class="dropdown-menu rounded-0 m-0" >
                                        <a href="group-search.php?group=A+" class="dropdown-item">A+ (A positive)</a>
                                        <a href="group-search.php?group=A-" class="dropdown-item">A- (A negative)</a>
                                        <a href="group-search.php?group=B+" class="dropdown-item">B+ (B positive)</a>
                                        <a href="group-search.php?group=B-" class="dropdown-item">B- (B negative)</a>
                                        <a href="group-search.php?group=O+" class="dropdown-item">O+ (O positive)</a>
                                        <a href="group-search.php?group=O-" class="dropdown-item">O- (O negative)</a>
                                        <a href="group-search.php?group=AB+" class="dropdown-item">AB+ (AB positive)</a>
                                        <a href="group-search.php?group=AB-" class="dropdown-item">AB- (AB negative)</a>
                                    </div>
                                </div>

                                <a href="rules.php" class="nav-link nav-item">Rules</a>
                                <a href="blog.php" class="nav-link nav-item">Blogs</a>

                                <a href="about.php" class="nav-link nav-item ">About</a>
                                <a href="contact.php" class="nav-link nav-item">Contact</a>
                                <a href="login.php" class="nav-link nav-item">Login</a>
                            </div>

                            <!-- button -->
                            <a href="blood-search.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">
                                Search For Blood <i class="fa fa-arrow-right ms-3"></i>
                            </a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

