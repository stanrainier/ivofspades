

function clearForm(){
  $("input[name='bname']").val('');
   $("input[name='baddress']").val('');
   $("input[name='bage']").val('');
   $("input[name='bgender']").val('');
   $("input[name='bbirthdate']").val('');
   $("input[name='buniversity']").val('');
   $("input[name='bcontact']").val('');
   $("input[name='bemail']").val('');
   $("input[name='bstatus']").val('');
   $("input[name='bemergencyname']").val('');
   $("input[name='bemergencynum']").val('');
   $("input[name='bemergencyrel']").val('');
        Swal.fire({
                 title: "Cleared!",
                 icon: "success",
                 confirmButtonText: "Proceed",
                 confirmButtonClass: "btn btn-outline-success",
                 allowOutsideClick: false,
                 buttonsStyling: false,
               })
      } 

const currentDate = new Date();

// Format the date to YYYY-MM-DD
const formattedDate = currentDate.toISOString().slice(0, 10);

// Get the input field element
const dateInput = document.getElementById("date-input");

// Set the value of the input field to the formatted date
dateInput.value = formattedDate;

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

});

