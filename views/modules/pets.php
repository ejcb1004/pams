<div class="clearfix"></div>

<div class="content-wrapper">
   <div class="container-fluid">
     <div class="row pt-2 pb-2">
        <div class="col-sm-12">
          <h4 class="page-title">Pet List</h4>
        </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">

            <div class="card-header float-sm-right">
              <button type="button" class="btn btn-primary btn-round waves-effect waves-light m-1 float-right" onClick="location.href='petadd'"><i class="fa fa-plus"></i><span>&nbsp;ADD PET</span></button>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="display table table-bordered table-hover table-striped petsTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Is Adopted</th>
                        <th>Foster Name</th>
                        <th>Species</th>
                        <th>Breed</th>
                        <th>Sex</th>
                        <th>Date Acquired</th>
                        <th>Is Reserved</th>
                        <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      $pets = (new ControllerPets)->ctrShowPets();
                      $checkbox = '';
                      foreach ($pets as $key => $value) {
                        $adp_bit = $value["isadopted"];
                        if ($adp_bit == 1) $adp_check = '<input type="checkbox" checked="checked" onclick="return false" />';
                        else $adp_check = '<input type="checkbox" onclick="return false" />';
                        $res_bit = $value["isreserved"];
                        if ($res_bit == 1) $res_check = '<input type="checkbox" checked="checked" onclick="return false" />';
                        else $res_check = '<input type="checkbox" onclick="return false" />';
                        $sex_bit = $value["sex"];
                        if ($sex_bit == 0) $sex_value = "Male";
                        else $sex_value = "Female";
                        echo '<tr>
                                <td>'.$adp_check.'</td>
                                <td>'.$value["pname"].'</td>
                                <td>'.$value["species"].'</td>
                                <td>'.$value["breed"].'</td>
                                <td>'.$sex_value.'</td>
                                <td>'.$value["acqdate"].'</td>
                                <td>'.$res_check.'</td>
                                <td>
                                  <div class="btn-group group-round m-1">
                                    <button class="btn btn-sm btn-light waves-effect waves-light btnEditPet" idPet="'.$value["id"].'"><i class="fa fa-pen"></i></button>
                                    <button class="btn btn-sm btn-danger waves-effect waves-light btnDeletePet" idPet="'.$value["id"].'"><i class="fa fa-trash"></i></button>
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
  $deletePet = new ControllerPets();
  $deletePet -> ctrDeletePet();
?>
