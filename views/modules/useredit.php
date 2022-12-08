<?php
  $idUser = $_GET['idUser'];

  $user = (new Connection)->connect()->query("SELECT * FROM authentication WHERE id = $idUser")->fetch(PDO::FETCH_ASSOC);

  $userid = $user['userid'];
  $username = $user['username'];
?>

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">UPDATE USER</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <div class="row">
                    <input type="hidden" id="idUser" name="idUser" value="<?php echo $idUser;?>">

                    <div class="col-sm-2 form-group">
                        <label for="editUserid">User ID</label>
                        <input type="text" class="form-control" id="editUserid" name="editUserid" value="<?php echo $userid;?>" readonly style="font-size: 0.9em;">
                    </div>
                    <div class="col-sm-5 form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter username" name="editUsername" autocomplete="nope" value="<?php echo $username;?>" required>
                    </div>
                    <div class="col-sm-5 form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="editPassword" autocomplete="nope" value="" required>
                    </div>
                 </div>
            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                  <div class="float-sm-right">
                   <button type="submit" class="btn btn-primary btn-round px-5"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                   <button type="button" class="btn btn-info btn-round px-5" onClick="location.href='users'"><i class="fa fa-list"></i>&nbsp;&nbsp;Listing</button>
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>
        <?php
          $editUser = new ControllerUsers();
          $editUser -> ctrEditUser();
        ?>
      </div>
    </div><!--End Row-->

  <div class="overlay toggle-menu"></div>
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->
