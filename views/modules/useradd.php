<?php
  $userid = (new ControllerUsers)->ctrGetUserid();
?>

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">USER INFORMATION</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <div class="row">
                   <div class="col-sm-2 form-group">
                     <label for="newUserid">User ID</label>
                     <input type="text" class="form-control" id="newUserid" name="newUserid" value="<?php echo $userid ?>" disabled>
                   </div>
                    <div class="col-sm-5 form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter username" name="newUsername" autocomplete="nope" required>
                    </div>
                    <div class="col-sm-5 form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="newPassword" autocomplete="nope" required>
                    </div>
                  </div>
            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                  <div class="float-sm-right">
                   <button type="submit" class="btn btn-primary btn-round px-5"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>

                   <button type="button" class="btn btn-info btn-round px-5" onClick="location.href='users'"><i class="fa fa-list"></i>&nbsp;&nbsp;Listing</button>
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>

        <?php
          $createUser = new ControllerUsers();
          $createUser -> ctrCreateUser();
        ?>
      </div>
    </div><!--End Row-->

  <div class="overlay toggle-menu"></div>
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->
