// input fields
var boarderInput = document.getElementById("boarder");
var electricityInput = document.getElementById("electricitybill");
var additionalInput = document.getElementById("additional");

electricityInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9.]/g, '');
});

electricityInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9.]/g, '');
});



// Rest of the code...

// Sweetalert
function clearForm() {
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
  });
}
// -------------------------



 // date and time
$(document).ready(function() {
    const currentDate = new Date();
    const formattedDate = currentDate.toISOString().slice(0, 10);
    const $dateInput = $("#bdate");
  
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
  
  
// modal
    var modal = document.getElementById("myModal");
        var input = document.getElementById("boarder");
        // var close = document.getElementById("close");
  
        function openModal() {
          modal.style.display = "flex";
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
  


  // datatable
  
// Get the modal
var modal = document.getElementById("myModal");

// Get the input field
var input = document.getElementById("boarder");

// Get the table element
var table = document.getElementById("modalTable");

// Get all rows of the table
var rows = table.getElementsByTagName("tr");

// Loop through all rows
for (var i = 0; i < rows.length; i++) {
  // Add a click event listener to each row
  rows[i].addEventListener("dblclick", function() {
    // Get the value of the fourth cell of the clicked row
    var value = this.cells[3].innerHTML;
      
    // Set the value of the input field to the value of the fourth cell of the clicked row
    input.value = value;

    // Hide the modal
    modal.style.display = "none";
  });
}

// billing
$(document).ready(function() {
    // Get the input fields
    var electricitybillInput = $("#electricitybill");
    var additionalInput = $("#additional");
    var waterbillInput = $("#waterbill");
    var rentbillInput = $("#rentbill");
    
    // Add a change event listener to the electricitybill and additional inputs
    electricitybillInput.add(additionalInput).on("change", function() {
      // Calculate the total bill
      var totalBill = parseFloat(electricitybillInput.val() || 0) + parseFloat(additionalInput.val() || 0) + parseFloat(waterbillInput.val() || 0) + parseFloat(rentbillInput.val() || 0);
      
      // Set the value of the total bill input field
      $("#totalBill").val(totalBill.toFixed(2));
    });
  });
  


