<!DOCTYPE html>
<html>
  <head> 
  </head>

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
              <h6 class="h2 text-white d-inline-block mb-0">Payment </h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Payment</li>
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
                <h3 class="mb-0">Payment Page</h3>
              </div>
              <!-- Card body -->
                <div class="card-body">
                    <form method="POST" action="printReceipt.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Billing ID</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="billingID" name="billingID" >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Payment Date </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="bdate" name="bdate" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Payment Time </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="billtime" name="billtime" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Boarder </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="boarder" name="boarder" onclick="openModal()" autocomplete="off" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Electricity Bill</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="electricitybill" name="electricitybill" readonly >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Water Bill (Fixed) </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="waterbill" name="waterbill" value ="250" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Rent Fee (Fixed) </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="rentbill" name="rentbill" value ="1500" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Additional Fees </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="additional" name="additional" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Total </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="totalBill" name="totalBill" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Balance </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="balance" name="balance"  autocomplete="off" readonly >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Cash Tendered </label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="cashTendered" name="cashTendered" required autocomplete="off" >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>                        
                      <div class="col-lg-16 col-15 text-right">
                        <button class="btn btn-primary btn-lg btn btn-success" type="submit" name="save" onclick="updateBalanceController()">Submit Payment Form</button>
                        <button class="btn btn-secondary btn-lg btn btn-danger" id="newBtn" onclick="clearForm()" >Clear</button>


                      </div>
                    </div>
                    </div>
                    </div>
                  </div>   

                    </form>
                <div>
            </div>
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

<!-- modal -->
  <div id="PaymentModal" class="modal">
      <div class="modal-content">
        <span class="close" id="close">&times;</span>
        <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="table-responsive" style="height: 500px;">
                <table id="paymentTable" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr ">
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
                </thead>
                <tbody>
                  <?php
                  echo'
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
                      </tr>';
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
    </div>
</body>
<script src="../js/payment.js"></script>
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
    var table = $('#paymentTable').DataTable({
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
</script>

</html>