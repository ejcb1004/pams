<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Raleway|Lato" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Lato">
    <link rel="stylesheet" href="views/assets/css/aeza.css">

    <?php
      include "modules/title.php";
    ?>

    <!-- Favicon -->
    <link rel="icon" href="views/assets/images/pams.png" type="image/x-icon">

    <!-- Custom styles for this template -->
    <link href="views/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- from Dadi's template -->
    <link href="views/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet"/>
    <!-- <link href="views/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="views/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <link href="views/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="views/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
    <link href="views/assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="views/assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
    <link href="views/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
    <!-- <link href="views/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" /> -->
    <!-- <link href="views/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/> -->

    <script src="views/assets/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="views/js/autologout.js"></script>
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script> -->
</head>

<body id="page-top">

      <?php
       echo '<div id="wrapper">';
        include "modules/sidebar.php";
        echo '<div id="content-wrapper" class="d-flex flex-column">';
          echo '<div id="content">';
            include "modules/header.php";
            echo '<div class="container-fluid">';
               if ( isset($_GET["route"]) ) {
                   if ($_GET["route"] == 'home' ||
                       $_GET["route"] == 'pets' ||
                       $_GET["route"] == 'petadd' ||
                       $_GET["route"] == 'petedit' ||
                       $_GET["route"] == 'users' ||
                       $_GET["route"] == 'useradd' ||
                       $_GET["route"] == 'useredit' ||
                       $_GET["route"] == 'logout'
                       // $_GET["route"] == 'testview'
                   ) include "modules/".$_GET["route"].".php";

                   else include "modules/404.php";
               }
               else include "modules/home.php";
            echo '</div>';
          echo '</div>';
          include "modules/footer.php";
        echo '</div>';
       echo '</div>';
     ?>

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <!-- <script src="views/assets/js/jquery.min.js"></script> -->
     <script src="views/assets/js/popper.min.js"></script>
     <script src="views/assets/js/bootstrap.min.js"></script>
     <script src="views/assets/js/sidebar-menu.js"></script>
     <script src="views/assets/js/app-script.js"></script>
     <!-- <script src="views/assets/js/jquery.loading-indicator.js"></script> -->

     <script src="views/assets/js/myownjs.js"></script>
     <!-- <script src="views/assets/plugins/apexcharts/apexcharts.js"></script> -->
     <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <!-- <script src="views/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
     <script src="views/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script> -->
     <script src="https://kit.fontawesome.com/6f0e40320a.js" crossorigin="anonymous"></script>
     <script src="views/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
     <script src="views/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
     <script src="views/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
     <script src="views/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
     <script src="views/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
     <!-- <script src="views/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script> -->
     <!-- <script src="views/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script> -->
     <!-- <script src="views/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script> -->


     <!-- <script src="views/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->

     <!-- <script src="views/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script> -->
     <!-- <script src="views/assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script> -->
     <!-- <script src="views/assets/plugins/bootstrap-switch/bootstrap-switch.min.js"></script> -->

     <!-- <script src="views/assets/plugins/Chart.js/Chart.min.js"></script> -->
     <!-- <script src="views/assets/plugins/Chart.js/Chart.extension.js"></script> -->
     <script src="views/assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>
     <!-- <script src="views/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script> -->

     <script src="views/assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
     <script src="views/assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>

     <!-- <script src="views/assets/plugins/jquery-knob/excanvas.js"></script> -->
     <!-- <script src="views/assets/plugins/jquery-knob/jquery.knob.js"></script> -->
     <!-- <script src="views/assets/plugins/number/jquery.number.js"></script> -->

     <script src="views/assets/plugins/select2/js/select2.min.js"></script>
     <script src="views/assets/plugins/simplebar/js/simplebar.js"></script>
     <!-- <script src="views/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script> -->
     <!-- <script src="views/assets/plugins/switchery/js/switchery.min.js"></script> -->
     <!-- <script src="views/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script> -->
     <!-- <script src="views/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script> -->

     <script src="views/js/pets.js"></script>
     <script src="views/js/users.js"></script>
     <!-- <script src="views/js/script.numeric_key_binding.js"></script> -->
     <!-- <script src="views/js/autologout.js"></script> -->

     <!-- <script>
         $(function() {
             $(".knob").knob();
         });
     </script> -->

     <!-- <script>
       $('#default-datepicker').datepicker({
         todayHighlight: true
       });
       $('#autoclose-datepicker').datepicker({
         autoclose: true,
         todayHighlight: true
       });

       $('#inline-datepicker').datepicker({
          todayHighlight: true
       });

       $('#daterange-picker .input-daterange').datepicker({
        });
     </script>

     <script>
         $(document).ready(function() {
             $('.single-select').select2();
             $('.multiple-select').select2();

             $('#my_multi_select1').multiSelect();
             $('#my_multi_select2').multiSelect({
                 selectableOptgroup: true
             });

             $('#my_multi_select3').multiSelect({
                 selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                 selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                 afterInit: function (ms) {
                     var that = this,
                         $selectableSearch = that.$selectableUl.prev(),
                         $selectionSearch = that.$selectionUl.prev(),
                         selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                         selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                     that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                         .on('keydown', function (e) {
                             if (e.which === 40) {
                                 that.$selectableUl.focus();
                                 return false;
                             }
                         });

                     that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                         .on('keydown', function (e) {
                             if (e.which == 40) {
                                 that.$selectionUl.focus();
                                 return false;
                             }
                         });
                 },
                 afterSelect: function () {
                     this.qs1.cache();
                     this.qs2.cache();
                 },
                 afterDeselect: function () {
                     this.qs1.cache();
                     this.qs2.cache();
                 }
             });

          $('.custom-header').multiSelect({
               selectableHeader: "<div class='custom-header'>Selectable items</div>",
               selectionHeader: "<div class='custom-header'>Selection items</div>",
               selectableFooter: "<div class='custom-header'>Selectable footer</div>",
               selectionFooter: "<div class='custom-header'>Selection footer</div>"
             });

           });
     </script>

     < Switchery Js -->
     <!-- <script>
       var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
       $('.js-switch').each(function() {
             new Switchery($(this)[0], $(this).data());
        });
     </script> -->

     <!--Bootstrap Switch Buttons-->
     <!-- <script>
       $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
       var radioswitch = function() {
           var bt = function() {
               $(".radio-switch").on("switch-change", function() {
                   $(".radio-switch").bootstrapSwitch("toggleRadioState")
               }), $(".radio-switch").on("switch-change", function() {
                   $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
               }), $(".radio-switch").on("switch-change", function() {
                   $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
               })
           };
           return {
               init: function() {
                   bt()
               }
           }
       }();
       $(document).ready(function() {
           radioswitch.init()
       });
     </script>  -->

   <!--   Activating this JS file will result to:
       1. Go to top button visible only on home.php
       2. header remain transparent when scrolling page upward - except home.php -->

     <!-- <script src='views/assets/plugins/fullcalendar/js/moment.min.js'></script>
     <script src='views/assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
     <script src="views/assets/plugins/fullcalendar/js/calendaring.js"></script> -->
     <!-- <script src="views/js/calendaring.js"></script>   -->
     <!-- <script src="views/assets/js/dashboard-home.js"></script>
     <script src="views/assets/js/data-widgets.js"></script> -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="views/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="views/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="views/assets/vendor/chart.js/Chart.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="views/assets/js/demo/chart-area-demo.js"></script>
    <script src="views/assets/js/demo/chart-pie-demo.js"></script> -->

</body>

</html>
