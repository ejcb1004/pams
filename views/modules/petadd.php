<?php
  $petid = (new ControllerPets)->ctrGetPetid();
?>

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">PET INFORMATION</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <div class="row">
                      <div class="col-sm-8 form-group">
                          <label for="newPname">Foster Name</label>
                          <input type="text" class="form-control" id="newPname" placeholder="Enter foster name" name="newPname" autocomplete="nope" required>
                      </div>

                      <div class="col-sm-1 form-group">
                          <label>&nbsp;</label>
                          <div class="icheck-material-success">
                            <input type="checkbox" id="newIsadopted" name="newIsadopted" value="1"/>
                            <label for="newIsadopted">Is adopted</label>
                          </div>
                      </div>

                      <div class="col-sm-1 form-group">
                          <label>&nbsp;</label>
                          <div class="icheck-material-success">
                            <input type="checkbox" id="newIsreserved" name="newIsreserved" value="1"/>
                            <label for="newIsreserved">Is reserved</label>
                          </div>
                      </div>

                      <div class="col-sm-2 form-group">
                          <label for="newPetid">Pet ID</label>
                          <input type="text" class="form-control" id="newPetid" name="newPetid" value="<?php echo $petid ?>" disabled>
                      </div>
                  </div>

                 <div class="row">
                      <div class="col-sm-3 form-group">
                          <label for="newSpecies">Species</label>
                          <input type="text" class="form-control" id="newSpecies" placeholder="Enter species" name="newSpecies" autocomplete="nope">
                      </div>
                      <div class="col-sm-3 form-group">
                          <label for="newBreed">Breed</label>
                          <input type="text" class="form-control" id="newBreed" placeholder="Enter breed" name="newBreed" autocomplete="nope">
                      </div>
                      <div class="col-sm-3 form-group">
                        <label for="newSex">Sex</label>
                        <select class="form-control" id="newSex" name="newSex" required>
                          <option value="" selected hidden>Select a category</option>
                          <option value="0">Male</option>
                          <option value="1">Female</option>
                        </select>
                      </div>
                      <div class="col-sm-3 form-group">
                          <label for="newAcqdate">Date acquired</label>
                          <input type="text" class="form-control" id="newAcqdate" placeholder="yyyy-mm-dd" name="newAcqdate" autocomplete="nope">
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

                   <button type="button" class="btn btn-info btn-round px-5" onClick="location.href='pets'"><i class="fa fa-list"></i>&nbsp;&nbsp;Listing</button>
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>

        <?php
          $createPet = new ControllerPets();
          $createPet -> ctrCreatePet();
        ?>
      </div>
    </div><!--End Row-->

  <div class="overlay toggle-menu"></div>
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->
