<?php include 'header.php';
if (isset($_SESSION['user_data'])) {
   $userID = $_SESSION['user_data']['0'];
}

// -- User Show
$sql = "SELECT * FROM user";
$query = mysqli_query($con, $sql);
$rows = mysqli_num_rows($query);
?>

   <!-- Begin Page Content -->
   <div class="container-fluid" id="adminPage">
      <!-- Page Heading -->
      <h5 class="mb-2 text-gray-800">Users List</h5>
      <!-- DataTales Example -->
      <div class="card shadow">
         <div class="card-header py-3 d-flex justify-content-between">
            <div>
               <a href="user_add.php">
                  <h6 class="font-weight-bold text-primary mt-2">Add New</h6>
               </a>
            </div>
            <div>
               <form class="navbar-search">
                  <div class="input-group">
                     <input type="text" class="form-control bg-white border-0 small" placeholder="Search for...">
                     <div class="input-group-append">
                        <button class="btn btn-primary" type="button"> <i class="fa fa-search"></i> </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>Sr.No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                     </tr>
                  </thead>
                  <tbody">
                     <?php 
                        if ($rows){
                           $count = 1;
                           while ($result = mysqli_fetch_assoc($query)) {
                              ?>
                              <tr>
                                 <td><?= $count++?></td>
                                 <td style="text-align: center !important;"><?= ucfirst($result['username'])?></td>
                                 <td><?=$result['user_email'] ?></td>
                                 <td><?php 
                                    $role = $result['user_role'];
                                    if ($role == 0){
                                       echo "Admin";
                                    }else{
                                       echo "Co-Admin";
                                    }
                                 ?></td>
                                 <td>
                                    <form method="POST" onsubmit=" return confirm('Are you sure you want to delete?')">
                                       <input type="hidden" name="uderID" value="<?= $result['user_id'] ?>">
                                       <input type="submit" name="deleteUser" value="Delete" class="btn btn-sm btn-danger">
                                    </form>
                                 </td>
                              </tr>
                              <?php
                           }
                        }else{
                           ?>
                           <tr><td class="text-center">No Record Found!</td></tr>
                           <?php
                        }
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</div>

<?php include 'footer.php';
if (isset($_POST['deleteUser'])) {
   $id = $_POST['uderID'];
   $delete = "DELETE FROM user WHERE user_id = '$id'";
   $run = mysqli_query($con, $delete);
   if ($run){
      $msg = ['😊 User has been deleted successfully.', 'alert-success'];
      $_SESSION['msg'] = $msg;
      header("location:index.php");
   }else{
      $msg = ["⚠ Failed, Pleace try again!", 'alert-danger'];
      $_SESSION['msg'] = $msg;
      header("location:index.php");
   }
}
?>