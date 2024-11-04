// input fields

var boarderInput = document.getElementById("boarder");
var electricityInput = document.getElementById("electricitybill");
var additionalInput = document.getElementById("additional");

electricityInput.addEventListener("input", function() {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

additionalInput.addEventListener("input", function() {
    this.value = this.value.replace(/[^0-9]/g, '');
  });



// --------------------

// Sweetalert

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
    var modal = document.getElementById("PaymentModal");
        var input = document.getElementById("billingID");
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
var modal = document.getElementById("PaymentModal");

// Get the input field
var input = document.getElementById("billingID");

// Get the table element
var table = document.getElementById("paymentTable");

// Get all rows of the table
var rows = table.getElementsByTagName("tr");

var billID = document.getElementById("billingID");
var boarderName = document.getElementById("boarder");
var electricity = document.getElementById("electricitybill");
var water = document.getElementById("waterbill");
var rent = document.getElementById("rentbill");
var charge = document.getElementById("additional");
var total = document.getElementById("totalBill");

// Loop through all rows
for (var i = 0; i < rows.length; i++) {
  // Add a click event listener to each row
  rows[i].addEventListener("dblclick", function() {
    var cellBillID = this.cells[0].innerHTML;
    var cellboarderName = this.cells[1].innerHTML;
    var cellelectricity = this.cells[4].innerHTML;
    var cellwater = this.cells[5].innerHTML;
    var cellrent = this.cells[6].innerHTML;
    var cellcharge = this.cells[7].innerHTML;
    var celltotal = this.cells[8].innerHTML;
      
    // Set the value of the input field to the value of the fourth cell of the clicked row
    billID.value = cellBillID;
    boarderName.value = cellboarderName;
    electricity.value = cellelectricity;
    water.value = cellwater;
    rent.value = cellrent;
    charge.value = cellcharge;
    total.value = celltotal;
    // Hide the modal
    modal.style.display = "none";
  });
}

// billing
$(document).ready(function() {
    // Get the input fields
    var total = $("#totalBill");
    var cashTendered = $("#cashTendered");
  
    // Add a change event listener to the cashTendered input
    cashTendered.on("change", function() {
      // Calculate the balance
      var balance = parseFloat(total.val() || 0) - parseFloat(cashTendered.val() || 0);
  
      // Set the value of the balance input field
      if (balance < 0) {
        balance = 0; // Set the balance to zero if it's negative
      }
      $("#balance").val(balance.toFixed(2));
    });
  });
  
  


