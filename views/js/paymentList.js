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

  // Create dropdown filters for each table header
  $('#filterRow th').each(function() {
    var columnIndex = $(this).index();
    var columnHeader = $(this).text();
    var uniqueOptions = [];

    // Iterate over each row and collect unique values for the current column
    $('table tr').each(function() {
      var cellValue = $(this).find('td:eq(' + columnIndex + ')').text();
      if (cellValue !== '' && $.inArray(cellValue, uniqueOptions) === -1) {
        uniqueOptions.push(cellValue);
      }
    });

    // Create the dropdown filter
    var selectFilter = $('<select class="form-control"><option value="">All</option></select>');
    $.each(uniqueOptions, function(_, option) {
      selectFilter.append($('<option></option>').val(option).text(option));
    });

    // Add change event listener to filter the table based on selected option
    selectFilter.on('change', function() {
      var selectedValue = $(this).val();

      // Show the filter row
      $('#filterRow').show();

      $('table tr').each(function() {
        var cellValue = $(this).find('td:eq(' + columnIndex + ')').text();
        if (selectedValue === '' || cellValue === selectedValue) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });

    // Append the dropdown filter to the table header
    $(this).html(selectFilter);
  });
});

$(document).ready(function() {
    var table = $('#myTable').DataTable({
      // Enable sorting on all columns
      columnDefs: [
        { targets: '_all', orderable: true }
      ]
    });

    $('#sortOrder').change(function() {
      var selectedOption = $(this).val();
      table.order([0, selectedOption]).draw();
    });
  });

  $(document).ready(function() {
    var modal = $("#myModalInvoice")[0];
    var input = $("#boarder_billed");
    var table = $("#myTable");
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
      var value = $row.find("td:nth-child(5)").text().toString();
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
        url: "payment.controller.php",
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

  // Create dropdown filters for each table header
  $('#filterRow th').each(function() {
    var columnIndex = $(this).index();
    var columnHeader = $(this).text();
    var uniqueOptions = [];

    // Iterate over each row and collect unique values for the current column
    $('table tr').each(function() {
      var cellValue = $(this).find('td:eq(' + columnIndex + ')').text();
      if (cellValue !== '' && $.inArray(cellValue, uniqueOptions) === -1) {
        uniqueOptions.push(cellValue);
      }
    });

    // Create the dropdown filter
    var selectFilter = $('<select class="form-control"><option value="">All</option></select>');
    $.each(uniqueOptions, function(_, option) {
      selectFilter.append($('<option></option>').val(option).text(option));
    });

    // Add change event listener to filter the table based on selected option
    selectFilter.on('change', function() {
      var selectedValue = $(this).val();

      // Show the filter row
      $('#filterRow').show();

      $('table tr').each(function() {
        var cellValue = $(this).find('td:eq(' + columnIndex + ')').text();
        if (selectedValue === '' || cellValue === selectedValue) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });

    // Append the dropdown filter to the table header
    $(this).html(selectFilter);
  });
});

