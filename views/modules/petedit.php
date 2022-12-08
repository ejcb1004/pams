<?php
  $idPet = $_GET['idPet'];

  $pet = (new Connection)->connect()->query("SELECT * FROM pets WHERE id = $idPet")->fetch(PDO::FETCH_ASSOC);

  $petid = $pet['petid'];
  $isadopted = $pet['isadopted'];
  $pname = $pet['pname'];
  $species = $pet['species'];
  $breed = $pet['breed'];
  $sex = $pet['sex'];
  $acqdate = $pet['acqdate'];
  $isreserved = $pet['isreserved'];
?>

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
   <div class="row pt-2 pb-2">
     <div class="col-sm-12">
  	    <h4 class="page-title">UPDATE CLIENT</h4>
     </div>
   </div>

    <div class="row">
      <div class="col-lg-12">
        <form role="form" method="POST" autocomplete="nope">
          <div class="card">
            <div class="card-body">
                 <div class="row">
                    <div class="col-sm-8 form-group">
                        <input type="hidden" id="idPet" name="idPet" value="<?php echo $idPet;?>">

                        <label for="editPname">Foster Name</label>
                        <input type="text" class="form-control" id="editPname" placeholder="Enter Pet Name" name="editPname" autocomplete="nope" value="<?php echo $pname;?>" required>
                    </div>

                    <div class="col-sm-1 form-group">
                        <label>&nbsp;</label>
                        <div class="icheck-material-success">
                          <input type="checkbox" id="editIsadopted" name="editIsadopted" value="0" <?php if ($isadopted == 1) echo 'checked'; ?>>
                          <label for="editIsadopted">Is adopted</label>
                        </div>
                    </div>

                    <div class="col-sm-1 form-group">
                        <label>&nbsp;</label>
                        <div class="icheck-material-success">
                          <input type="checkbox" id="editIsreserved" name="editIsreserved" value="0" <?php if ($isreserved == 1) echo 'checked'; ?>>
                          <label for="editIsreserved">Is reserved</label>
                        </div>
                    </div>

                    <div class="col-sm-2 form-group">
                        <label for="editPetid">Pet ID</label>
                        <input type="text" class="form-control" id="editPetid" name="editPetid" value="<?php echo $petid;?>" readonly style="font-size: 0.9em;">
                    </div>
                </div>

                 <div class="row">
                      <div class="col-sm-3 form-group">
                          <label for="editSpecies">Species</label>
                          <input type="text" class="form-control" id="editSpecies" placeholder="Enter species" name="editSpecies" autocomplete="nope" value="<?php echo $species;?>">
                      </div>
                      <div class="col-sm-3 form-group">
                          <label for="editBreed">Breed</label>
                          <input type="text" class="form-control" id="editBreed" placeholder="Enter breed" name="editBreed" autocomplete="nope" value="<?php echo $breed;?>">
                      </div>
                      <div class="col-sm-3 form-group">
                        <label for="editSex">Sex</label>
                        <select class="form-control" id="editSex" name="editSex" required>
                          <option value="<?php echo $sex;?>" selected hidden><?php if ($sex == 0) echo "Male"; else echo "Female"?></option>
                          <option value="0">Male</option>
                          <option value="1">Female</option>
                        </select>
                      </div>
                      <div class="col-sm-3 form-group">
                          <label for="editAcqdate">Date acquired</label>
                          <input type="text" class="form-control" id="editAcqdate" placeholder="yyyy-mm-dd" name="editAcqdate" autocomplete="nope" value="<?php echo $acqdate;?>">
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
                   <button type="button" class="btn btn-info btn-round px-5" onClick="location.href='pets'"><i class="fa fa-list"></i>&nbsp;&nbsp;Listing</button>
                  </div>
                </div>
              </div>
            </div>  <!-- footer -->

          </div>    <!-- card -->
        </form>
        <?php
          $editPet = new ControllerPets();
          $editPet -> ctrEditPet();
        ?>
      </div>
    </div><!--End Row-->

  <div class="overlay toggle-menu"></div>
  </div>    <!-- container-fluid -->
</div>      <!-- content-wrapper -->
