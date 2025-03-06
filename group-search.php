<?php include 'header.php' ?>


        <!-- ===================== Header Section =================== -->
        <div class="about search">
            <div class="wrap">
                <h4>Home > <span>Blood Group <?php echo urlencode($_GET['group']); ?></span></h4>
            </div>
        </div>
        <div class="container">
            <div class="py-3 text-center">
                <h1>Donner For <span style="color:#FD2037;"><?php echo urlencode($_GET['group']); ?></span></h1>
            </div>
        </div>
        <?php 
            include 'config.php';
            $group = urlencode($_GET['group']);
            if(isset($group)){
                $query = sprintf("SELECT * FROM donars WHERE blood_group='".$group."'");
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0){
                    
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
                                                            <th>Mobile</th>
                                                            <th>Address</th>
                                                            <th>Last Donation Date</th>
                                                            <th colspan="2">Photo</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                        <?php foreach($query_run as $row){ ?>
                                                          <tr class="">
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?= $row["firstName"]." ".$row["lastName"]; ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?php echo $row["blood_group"]; ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?php echo $row["mobile"]; ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?= $row['address'] ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;"><?=date('d-M-Y', strtotime($row["last_donate_date"])) ?></td>
                                                              <td style="height: 50px !important; vertical-align: middle !important;">
                                                                  <img src="admin/upload/<?php echo $row["img"]; ?>" alt="" style="width:100px;">
                                                              </td>
                                                          </tr>
                                                          <?php  } ?>
                                                      </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php 
                }else{
                    ?>
                        <div class="container">
                            <div class="alert alert-info alert-dismissible fade show" style="max-width: 90%; margin:auto;" role="alert">
                                We Can't Find Any Donner For This Group!! Try Again Later
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php 
                }
            }

        ?>

<?php include 'footer.php' ?>