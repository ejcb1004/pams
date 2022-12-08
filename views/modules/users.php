<div class="clearfix"></div>

<div class="content-wrapper">
   <div class="container-fluid">
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
          <h4 class="page-title">Users List</h4>
        </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">

            <div class="card-header float-sm-right">
              <button type="button" class="btn btn-primary btn-round waves-effect waves-light m-1 float-right" onClick="location.href='useradd'"><i class="fa fa-plus"></i><span>&nbsp;ADD USER</span></button>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="display table table-bordered table-hover table-striped usersTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $users = (new ControllerUsers)->ctrShowUsers();
                      foreach ($users as $key => $value) {
                        echo '<tr>
                                <td>'.$value["userid"].'</td>
                                <td>'.$value["username"].'</td>
                                <td>'.$value["password"].'</td>
                                <td>
                                  <div class="btn-group group-round m-1">
                                    <button class="btn btn-sm btn-light waves-effect waves-light btnEditUser" idUser="'.$value["id"].'"><i class="fa fa-pen"></i></button>
                                    <button class="btn btn-sm btn-danger waves-effect waves-light btnDeleteUser" idUser="'.$value["id"].'"><i class="fa fa-trash"></i></button>
                                  </div>
                                </td>
                              </tr>';
                        }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>    <!-- row -->

    <div class="overlay toggle-menu"></div>
  </div>        <!-- container-fluid -->
</div>          <!-- content-wrapper -->

<?php
  $deleteUser = new ControllerUsers();
  $deleteUser -> ctrDeleteUser();
?>
