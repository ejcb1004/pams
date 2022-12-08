$('.usersTable').DataTable({
  "ajax": "ajax/users.ajax.php",
  "deferRender": true,
  "retrieve": true,
  "processing": true,
});

$(".usersTable").on("click", "tbody .btnEditUser", function(){
  var idUser = $(this).attr("idUser");
  window.location = "index.php?route=useredit&idUser="+idUser;
})

$(".usersTable").on("click", "tbody .btnDeleteUser", function(){
	var idUser = $(this).attr("idUser");
	swal({
        title: 'Do you want to delete this user?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancel',
        confirmButtonText: 'Yes'
      }).then(function(result){
        if (result.value) {
            window.location = "index.php?route=users&idUser="+idUser;
        }
  })
})

// $(".btnPrintUser").click(function(){
//   var category = $(".filterUser").val();
//   $.get(
//     "userpdf", {category: category},
//     function( data, status ) {
//       window.open("extensions/tcpdf/pdf/userpdf.php?category="+category, "_blank");
//     }
//   )
// })
