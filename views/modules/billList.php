<!DOCTYPE html>
<html>
<?php
include "template.php";

?>
<body>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Billing List</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List of Billings</li>
                </ol>
              </nav>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="col-lg-30">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card" style="background-color:#add3e9">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Billing List</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="text-right m-2">
                  <button class="btn btn-primary" id="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                </div>
                <div class="table-responsive" style="height: 500px;">
                <table id="BillingTable" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr ">
                <thead>
                    <tr>
                      <th>Billing ID</th>
                      <th>Boarder Name</th>
                      <th>Billing Date</th>
                      <th>Billing Time</th>
                      <th>Electricity</th>
                      <th>Water</th>
                      <th>Rent</th>
                      <th>Additional Charge</th>
                      <th>Total</th>
                    </tr>
                    <tr id="filterRow">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                </thead>
                <tbody>
                  <?php
                   require_once "../../controllers/billing.controller.php";
                    $bills = (new ControllerBilling)->ctrShowBills();
                    foreach ($bills as $key => $val) {
                      echo '<tr>
                              <td>'. $val["bill_id"].'</td>
                              <td>'. $val["boarder_billed"].'</td>
                              <td>'. $val["billDate"].'</td>
                              <td >'. $val["billTime"].'</td>
                              <td style="font-weight: bold;">'. $val["electricityBill"].'</td>
                              <td style="font-weight: bold;">'. $val["waterBill"].'</td>
                              <td style="font-weight: bold;">'. $val["rentBill"].'</td>  
                              <td style="font-weight: bold;">'. $val["additionalBill"].'</td>  
                              <td style="font-weight: bold; color: red;">'.$val["totalBill"].'</td>  
                            </tr>';
                      }

                  ?>
                </tbody>
              </table>
            </div>
            </div>
            <form method ="post" id="invoice">
                <input id="boarder_billed" name="boarder_billed" type="text"  required hidden> </input>
                <button type="submit" id="submitBtn" hidden>submit</button>
                </form>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2022 <span>IV OF SPADES</span>
            </div>
          </div>
        </div>
      </footer>
    </div> <!-- here -->
  </div>

  <!-- modal  -->
  <div id="myModalInvoice" class="modal">
      <div class="modal-content">
        <span class="close" id="close">&times;</span>
        <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="table-responsive" style="height: 500px;">
               <table id="modalTableInvoice" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr ">
                <thead>
                    <tr>
                      <th>Bill ID</th>
                      <th>Boarder</th>
                      <th>Billing Date</th>
                      <th>Billing Time</th>
                      <th>Electricity Bill</th>
                      <th>Water Bill</th>
                      <th>Rent Bill</th>
                      <th>Additional Fee</th>
                      <th>Total </th>
                    </tr>
                </thead>
                <tbody>
              <form id="form" action="invoicePrint.php" method="POST" target="_blank">
                  <?php
                   require_once "../../controllers/billingInvoice.controller.php";
                   $bill = (new ControllerBillingInvoice)->ctrShowBoarderBill();
                   $finalTotal = 0; // Initialize the total variable
                   $iterator = 0;
                   foreach ($bill as $key => $value) {
                     echo '<tr>
                             <td>'.$value["bill_id"].'</td>
                             <td>'.$value["boarder_billed"].'</td>
                             <td>'.$value["billDate"].'</td>
                             <td>'.$value["billTime"].'</td>
                             <td>'.$value["electricityBill"].'</td>
                             <td>'.$value["waterBill"].'</td>
                             <td>'.$value["rentBill"].'</td>
                             <td>'.$value["additionalBill"].'</td>
                             <td>'.$value["totalBill"].'</td>  
                           </tr>';
                     $iterator++;
                   
                     $finalTotal += $value["totalBill"]; // Calculate the total by adding each total bill to the variable
                   }
                   
                   echo '<tr>
                           <td>'. "".'</td>
                           <td>'. "".'</td>
                           <td>'. "".'</td>
                           <td>'. "".'</td>
                           <td style="font-weight: bold;">'. "".'</td>
                           <td style="font-weight: bold;">'. "".'</td>
                           <td style="font-weight: bold;">'. "".'</td>  
                           <td style="font-weight: bold;">'."Total".'</td>  
                           <td style="font-weight: bold; color: red;">'.$finalTotal.'</td>  
                         </tr>';


                         echo '<input type="hidden" id="boarder_billed" name="boarder_billed" value="'.$value["boarder_billed"].'">';

                  ?>
                </tbody>
              </table>
          <button class="btn btn-primary m-4" type="submit">Print to PDF</button>
        </form>
            </div>
      </div>
    </div>                   

</body>


</html>
<script>

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
  $(document).on("click", "#back", function() {
    location.reload();
  });
});

</script>
<script src="../js/invoice.js"></script>
