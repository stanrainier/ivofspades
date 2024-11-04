$(document).ready(function() {
    // Get the search input element by its ID
    var searchInput = $('#searchBoarder');
  
    // Attach a keyup event listener to the search input
    searchInput.on('keyup', function() {
      // Get the search term entered by the user
      var searchTerm = $(this).val().toLowerCase();
  
      // Loop through each row of the table
      $('table tr').each(function() {
        // Check if the row contains the search term
        if ($(this).text().toLowerCase().indexOf(searchTerm) === -1) {
          // Hide the row if it doesn't match the search term
          $(this).hide();
        } else {
          // Show the row if it matches the search term
          $(this).show();
        }
      });
    });
  });


  $(document).ready(function() {
  var modal = $("#myModalInvoice")[0];
  var input = $("#boarder_billed");
  var table = $("#BillingTable");
  var submit = $("#submitBtn");
  var test = $("#searchBoarder");
 

  function openModal() {
    $(modal).css("display", "flex");
  }

  function closeModal() {
    $(modal).css("display", "none");
  }

  table.on("dblclick", "tr", function() {
    var $row = $(this);
    var value = $row.find("td:nth-child(2)").text().toString();
    $(input).val(value);
    console.log(value);
    // closeModal();
    $(input).focus();
    submitForm(value);
    $(submit).click(); 
  });

  function submitForm(selectedValue) {
    console.log("Submitting form...");

    $.ajax({
      url: "billingInvoice.controller.php",
      type: "POST",
      data: { boarder: selectedValue }, // Use selectedValue as the value for the boarder parameter
      success: function(response) {
        console.log("AJAX request successful!");
        //   console.log("Response:", response);
      },
      error: function(xhr, status, error) {
        console.log("AJAX request failed!");
        console.log("Error:", error);
      }
    });
  }
// document.addEventListener('DOMContentLoaded', function() {

//     });
    $(test).on("focus", openModal);
    $("#close").click(function() {
      modal.style.display = "none";
    });
});




  
//   $(document).ready(function() {
//     $("#modalTableInvoice").on("click", "tr", function() {
//       var value = $(this).find("td:nth-child(2)").text();
//       $(input).val(value);
//       console.log(value);
//       closeModal();
//       $(input).focus();
//       submitForm();
//     });
//   });
  