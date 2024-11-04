function clearForm(){
    $("input[name='electricitybill']").val('');
     $("input[name='boarder']").val('');
     $("input[name='additional']").val('');
   
          Swal.fire({
                   title: "Cleared!",
                   icon: "success",
                   confirmButtonText: "Proceed",
                   confirmButtonClass: "btn btn-outline-success",
                   allowOutsideClick: false,
                   buttonsStyling: false,
                 })
        } 
$(document).ready(function() {
  const currentDate = new Date();
  const formattedDate = currentDate.toISOString().slice(0, 10);
  const $dateInput = $("#deactDate");

  if ($dateInput.length) {
    console.log("Input field found:", $dateInput);
    $dateInput.val(formattedDate);
    console.log("Input field value set to:", formattedDate);
  } else {
    console.error("Input field not found!");
  }
  setInterval(function() {
    const currentTime = new Date();
    const formattedTime = currentTime.toLocaleTimeString();
    $("#billtime").val(formattedTime);
  }, 1000);
});
      
   
   $(document).ready(function() {
     $('input[type="bemail"]').on('input', function() {
       var email = $(this).val();
       var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       $(this)[0].setCustomValidity(regex.test(email) ? '' : 'Please enter a valid email address');
     });
     var numsonly = document.getElementById("bcontactnum");
   var age = document.getElementById("bage");
   var emergencycontactnum = document.getElementById("bemergencynum");
   
   
   numsonly.addEventListener("input", function() {
    this.value = this.value.replace(/[^0-9\s]/g, '');
    this.value = this.value.replace(/\s+/g, ' | ');
   });
   
   age.addEventListener("input", function() {
     this.value = this.value.replace(/[^0-9]/g, '');
   });
   
   emergencycontactnum.addEventListener("input", function() {
    this.value = this.value.replace(/[^0-9\s]/g, '');
    this.value = this.value.replace(/\s+/g, ' | ');
   });
   
   // =================================================
   
   var bname = document.getElementById("bname");
   var civilstatus = document.getElementById("bstatus");
   var gender = document.getElementById("bgender");
   var econtact = document.getElementById("bemergencyname");
   var erel = document.getElementById("bemergencyrel");
   
   bname.addEventListener("input", function() {
     this.value = this.value.replace(/[^a-zA-Z ]/g, '');
   });
   
   civilstatus.addEventListener("input", function() {
     this.value = this.value.replace(/[^a-zA-Z]/g, '');
   });
   
   gender.addEventListener("input", function() {
     this.value = this.value.replace(/[^a-zA-Z]/g, '');
   });
   
   econtact.addEventListener("input", function() {
     this.value = this.value.replace(/[^a-zA-Z ]/g, '');
   });
   
   erel.addEventListener("input", function() {
     this.value = this.value.replace(/[^a-zA-Z]/g, '');
   });
   

// modal
var modal = document.getElementById("editModal");
var input = document.getElementById("boarder");
// var close = document.getElementById("close");

function openModal() {
  modal.style.display = "block";
}

function closeModal() {
  modal.style.display = "none";
}

input.addEventListener("focus", openModal);
// button.addEventListener("click", closeModal);

$(document).ready(function() {
$("#close").click(function() {
modal.style.display = "none";
});
});      


// modal search
var searchInput = $('#searchBoarder');


searchInput.on('keyup', function() {
var searchTerm = $(this).val().toLowerCase();

$('table tr').each(function() {

if ($(this).text().toLowerCase().indexOf(searchTerm) === -1) {

$(this).hide();
} else {
$(this).show();
}
});
});


// Get the modal
var modal = document.getElementById("editModal");

// Get the input field
var id = document.getElementById("id");
var date = document.getElementById("bdate");
var year = document.getElementById("byear");
var fullname = document.getElementById("bname");
var email = document.getElementById("bemail");
var address = document.getElementById("baddress");
var contactnum = document.getElementById("bcontactnum");
var bday = document.getElementById("bbirthdate");
var age = document.getElementById("bage");
var gender = document.getElementById("bgender");
var status = document.getElementById("bstatus");
var university = document.getElementById("buniversity");
var econtact = document.getElementById("bemergencyname");
var econtactnum = document.getElementById("bemergencynum");
var econtactrel = document.getElementById("bemergencyrel");
var boarderID = document.getElementById("boarderid");

// Get the table element
var table = document.getElementById("modalTableEdit");

// Get all rows of the table
var rows = table.getElementsByTagName("tr");

// Loop through all rows
for (var i = 0; i < rows.length; i++) {
  // Add a click event listener to each row
  rows[i].addEventListener("dblclick", function() {
    // Get the value of the first cell of the clicked row
    var vid = this.cells[0].innerHTML;
    var boarderid = this.cells[1].innerHTML;
    var registrationdate = this.cells[2].innerHTML;
    var yearlevel = this.cells[3].innerHTML;
    var vfullname = this.cells[4].innerHTML;
    var vaddress = this.cells[5].innerHTML;
    var vage = this.cells[6].innerHTML;
    var vgender = this.cells[7].innerHTML;
    var birthday = this.cells[8].innerHTML;
    var vuniversity = this.cells[9].innerHTML;
    var contactnumber = this.cells[10].innerHTML;
    var emailaddress = this.cells[11].innerHTML;
    var vstatus = this.cells[12].innerHTML;
    var emergencycontactname = this.cells[13].innerHTML;
    var emergencycontactnum = this.cells[14].innerHTML;
    var emergencycontactnumrel = this.cells[15].innerHTML;
      
    // Set the value of the input field to the value of the first cell of the clicked row
    id.value = vid;
    boarderID.value = boarderid;
     date.value = registrationdate;
     year.value = yearlevel;
     fullname.value = vfullname;
     email.value = emailaddress;
     address.value = vaddress;
     contactnum.value = contactnumber;
     bday.value = birthday;
     age.value = vage;
     gender.value = vgender;
     status.value = vstatus;
     university.value = vuniversity;
     econtact.value = emergencycontactname;
     econtactnum.value = emergencycontactnum;
     econtactrel.value = emergencycontactnumrel;
     boarderID.value = boarderid;
    // Hide the modal
    modal.style.display = "none";
  });
}



   });
   $(document).ready(function() {
  var boarderValue = getUrlParameter("boarder");
  $("#boarder").val(boarderValue);
});

function getUrlParameter(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
  var results = regex.exec(location.search);
  return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

//    $(".clientlist").on("click", "tbody .btnEditClient", function(){
//     var idClient = $(this).attr("idClient");
//     window.location = "index.php?route=clientedit&idClient="+idClient;
//   });  


