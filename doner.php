<?php 
session_start();
ob_start();
include 'header.php'; ?>


        <!-- ===================== Header Section =================== -->
        <div class="about donor">
            <div class="wrap">
                <h4>Home > <span>Become a Donar</span></h4>
            </div>
        </div>

        <!-- ================== About Section ================== -->
        <div class="container-xxl py-5" id="about">
            <div class="container">

                <h5 class="section-title text-start text-primary text-uppercase">
                            Become a Blood Donar
                </h5>
                <marquee class="mb-4 bg-primary" behavior="scroll">
                    <h4 class="p-2 text-white">Find your nearest blood donar by filling the form below. For any requirement call: 01750965595 or Mail to <a href="">connectwithsohag@gmail.com</a>. Thank You!</h4>
                </marquee>
            </div>
        </div>

       <!-- ++++++++++ contact form +++++++ -->

       <section class="contact-us py-5">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-12 col-lg-8">
                        <div class="card text-center">
                            <div class="card-body fadeInUp wow">
                                <p>
                                     <!-- --- Massage Show using php --- -->
                                  <?php 

                                     if (isset($_SESSION['msg'])) {
                                        $message = $_SESSION['msg']['0'];
                                        $bs_class = $_SESSION['msg']['1'];
                                        ?>

                                           <div class="alert mt-3 alert-dismissible <?= $bs_class ?>">
                                              <?= $message ?>
                                             <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                           </div>

                                        <?php
                                        unset($_SESSION['msg']);
                                     }

                                  ?>
                                </p>
                                <h3 class="h4">👇 Fill this form and become a blood warrior. 👇</h3>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12 col-md-6 mt-2">
                                            <input type="text" name="firstname" placeholder="First Name" class="form-control">
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <input type="text" name="lastname" placeholder="Last Name" class="form-control" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <input type="number" name="mobile" placeholder="Mobile Number" class="form-control" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <input type="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <input type="text" name="address" placeholder="Present Address" class="form-control" required>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <select name="bloodGroup" id="" class="form-select">
                                                <option value="" selected>Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <input type="text" name="weight" placeholder="Your weight" class="form-control">
                                        </div>
                                        <div class="col-12 col-md-6 mt-2">
                                            <input type="number" name="FriendNumber" placeholder="Enter your one friend number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <label for="date">Last <span>Blood Donation</span> Date :</label>
                                            <input type="date" name="lastDonateDate" class="form-control" id="date">
                                        </div>
                                        <div class="col-6 mt-4">
                                            <label for="upload-img">Upload your <span>Image</span> :</label>
                                            <input type="file" name="donar_img" class="form-control" id="upload-img">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <input type="submit" name="bcomeDonar" value="Submit" class="form-control d-grid bg-primary text-uppercase text-white">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 fadeInUp wow col-lg-4 ms-0 mt-lg-0 mt-3 address">
                        <div class="card" style="height: 391px;">
                            <h4 class="px-3 pt-4 text-center"><span>Donate</span> Blood, <span>Safe</span> Life</h4>
                            <div class="card-body">
                                <img src="img/my-donated.jpg" alt="..." style="width: 100%; height: 100%;" id="profile-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; 

include 'config.php';

if(isset($_POST['bcomeDonar'])){
    $fistName = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastname']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $bloodGroup = mysqli_real_escape_string($con, $_POST['bloodGroup']);
    $weight = mysqli_real_escape_string($con, $_POST['weight']);
    $fNum = mysqli_real_escape_string($con, $_POST['FriendNumber']);
    $lastDonateDate = mysqli_real_escape_string($con, $_POST['lastDonateDate']);

    // img adding 
    $file_name = $_FILES['donar_img']['name'];
    $tmp_name = $_FILES['donar_img']['tmp_name'];
    $size = $_FILES['donar_img']['size'];
    $image_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allow_type = ['jpg','png','jpeg'];
    $destination = "admin/upload/".$file_name;

    if (in_array($image_ext, $allow_type)){
        if ($size <= 2000000){
            move_uploaded_file($tmp_name, $destination);
            $sql = "INSERT INTO `donars`(`firstName`, `lastName`, `mobile`, `email`, `address`, `blood_group`, `weight`, `f_num`, `last_donate_date`,`img`) VALUES ('$fistName','$lastName','$mobile','$email','$address','$bloodGroup','$weight','$fNum','$lastDonateDate','$file_name')";
            $query = mysqli_query($con, $sql);
            if ($query) {
                $msg = ['😊 Your Ditals successfully Submitted.', 'alert-success'];
                $_SESSION['msg'] = $msg;
                header("location:doner.php");
            }else{
               $msg = ['⚠ Failed, Pleace try again!!😕', 'alert-danger'];
               $_SESSION['msg'] = $msg;
               header("location:doner.php");
            }
        }else{
            $msg = ['Image size should not be greater than 2MB', 'alert-danger'];
            $_SESSION['msg'] = $msg;
            header("location:doner.php");
        }
    }else{
        $msg = ['File type is not allowed (only jpg,png and jpeg)', 'alert-danger'];
        $_SESSION['msg'] = $msg;
        header("location:doner.php");
    }
}

?>