<?php include 'header.php' ?>


        <!-- ===================== Header Section =================== -->
        <div class="about search">
            <div class="wrap">
                <h4>Home > <span>Search a Blood Donar</span></h4>
            </div>
        </div>

        <!-- ================== About Section ================== -->
        <div class="container-xxl pt-5 pb-2" id="about">
            <div class="container">
                <h5 class="section-title text-start text-primary text-uppercase">
                    Search for blood donars
                </h5>
                <marquee class="mb-4 bg-primary" behavior="scroll">
                    <h4 class="p-2 text-white">Find your nearest blood donar by filling the form below. For any requirement call: 01750965595 or Mail to <a href="">connectwithsohag@gmail.com</a>. Thank You!</h4>
                </marquee>
            </div>
        </div>

       <!-- ++++++++++ contact form +++++++ -->

       <section class="contact-us pb-3">
            <div class="container">
                <div class="row wow fadeInUp">
                    <form action="#" method="POST">
                        <div class="mx-auto position-relative" style="max-width: 90%;">
                            <input type="text" class="form-control w-100 py-3 px-3" name="search" placeholder="O+, John, Lakshmipur, john@gmail.com">
                            <button class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2" name="submit" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="py-3 text-center">
                <h1>Search Result For Related Blood Group</h1>
            </div>
        </div>
        <?php 
            include 'config.php';
            if(isset($_POST['submit'])){
                $search = $_POST['search'];
                if(!isset($search) || trim($search) == '')
                {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger alert-dismissible fade show" style="max-width: 90%; margin:auto;" role="alert">
                            Please fill the input field!!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <?php 
                }else{
                    $sql = "select * from donars where blood_group like '%$search%' or firstName like '%$search%' or address like '%$search%' or email like '%$search%' or mobile like '%$search%'";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0){
                    
                        ?>
                            <section class="search-box mt-4">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body d-flex justify-content-between align-items-center">
                                                    <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead class="bg-primary text-white">
                                                         <tr>
                                                            <th>Name</th>
                                                            <th>Blood Group</th>
                                                            <th>Mobile Number</th>
                                                            <th>Address</th>
                                                            <th>Last Donation Date</th>
                                                            <th colspan="2">Photo</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                        <?php while($row = $result->fetch_assoc() ){ ?>
                                                          <tr>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?= $row["firstName"]." ".$row["lastName"]; ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?php echo $row["blood_group"]; ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?php echo $row["mobile"]; ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?= $row['address'] ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?=date('d-M-Y', strtotime($row["last_donate_date"])) ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;">
                                                                  <img src="admin/upload/<?php echo $row["img"]; ?>" alt="Photo is Not Found!" style="width:100px;">
                                                              </td>
                                                          </tr>
                                                          <?php } ?>
                                                      </tbody>
                                                    </table>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php
                    } else {
                        ?>
                        <div class="container">
                            <div class="alert alert-warning alert-dismissible fade show" style="max-width: 90%; margin:auto;" role="alert">
                                No Data Found. Try With New Keyword!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        <?php 
                    }
                }
            }

        ?>

<?php include 'footer.php' ?>