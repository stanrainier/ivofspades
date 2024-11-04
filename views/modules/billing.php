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
              <h6 class="h2 text-white d-inline-block mb-0">Billing </h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Billing</li>
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
                <h3 class="mb-0">Billing</h3>
              </div>
              <!-- Card body -->
                <div class="card-body">
                <form id="myForm" action="printBill.php" method="post" target="_blank">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label> Billing Date </label>
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
                            <label> Billing Time </label>
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
                                    <input class="form-control" type="text" id="boarder" name="boarder" onclick="openModal()" autocomplete="off" required>
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
                                    <input class="form-control" type="text" id="electricitybill" name="electricitybill" required >
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
                                    <input class="form-control" type="text" id="additional" name="additional">
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
                      <div class="col-lg-16 col-15 text-right">
                        <button class="btn btn-primary btn-lg btn btn-success" type="submit" name="save">Submit Bill Form</button>
                        <button class="btn btn-secondary btn-lg btn btn-danger" id="newBtn" onclick="clearForm()" >Clear</button>
                      </div>
                    </div>
                    </div>
                    </div>
                  </div>   

                <div>
                <!-- <button class="btn btn-secondary btn-lg btn btn-info" type="submit" name="print">Print</button> -->
              </form>

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
  <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close" id="close">&times;</span>
        <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="table-responsive" style="height: 500px;">
                <table id="modalTable" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr ">
                <thead>
                    <tr>
                      <th>Boarder ID</th>
                      <th>Registration Date</th>
                      <th>Status</th>
                      <th>Name</th>
                      <th>University</th>
                      <th>Contact Number</th>
                      <th>Email Address</th>
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
                      </tr>';
                   require "../../controllers/boarders.controller.php";
                    $boarders = (new ControllerBoarder)->ctrShowBoarders();
                    foreach ($boarders as $key => $value) {
                      if($value["bisactive"] == "1"){
                        $active = "Active";
                      }else{
                        $active = "Inactive";
                      }
                      echo '<tr>
                              <td>'.$value["boarderid"].'</td>
                              <td>'.$value["sdate"].'</td>
                              <td>'.$active.'</td>
                              <td>'.$value["bname"].'</td>
                              <td>'.$value["buniversity"].'</td>
                              <td>'.$value["bcontact"].'</td>
                              <td>'.$value["bemail"].'</td>  
                            </tr>';
                      }
                  ?>
                </tbody>
              </table>
            </div>
      </div>
    </div>
</body>
<script src="../js/billing.js"></script>
<script>
    // Function to handle form submission
    function submitFormInNewTab() {
      document.getElementById("myForm").submit();
    }

    // Event listener for form submission
    document.getElementById("myForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission
      submitFormInNewTab(); // Call the submitFormInNewTab function to trigger form submission in a new tab
    });
  </script>
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

</script>

</html>

