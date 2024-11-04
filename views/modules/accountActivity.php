<!DOCTYPE html>
<html>
<?php
include "template.php";
include "../../models/session.php";
?>
<body>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">List of Boarders</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List of Boarders</li>
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
                <h3 class="mb-0">Boarder Information</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="text-right m-2">
                  <button class="btn btn-primary" id="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                </div>
                <div class="table-responsive" style="height: 500px;">
                <table id="myTable" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr clientlist">
                <thead>
                    <tr>
                      <th>Boarder ID</th>
                      <th>Account Status</th>
                      <th>Registration Date</th>
                      <th>Deactivation Date</th>
                      <th>Year Level</th>
                      <th>Name</th>
                      <th>University</th>
                      <th>Contact Number</th>
                      <th>Email Address</th>
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
                   require "../../controllers/boarders.controller.php";
                    $boarders = (new ControllerBoarder)->ctrShowBoarders();
                    foreach ($boarders as $key => $value) {
                      if($value["bisactive"] == "1"){
                        $status = "Active";
                        $deactDate = "";
                      }else{
                        $status = "Inactive";
                        $deactDate = $value["deactivationDate"];
                      }
                      echo '<tr>
                              <td>'.$value["boarderid"].'</td>
                              <td>'.$status.'</td>
                              <td>'.$value["sdate"].'</td>
                              <td>'.$deactDate.'</td>
                              <td>'.$value["syear"].'</td>
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
                   <form action="printBoarders.php">
              <button class="btn btn-primary m-4"> Print to PDF </button>
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
</body>

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
  $(document).on("click", ".btn-danger", function() {
    var value = $(this).closest("tr").find("td:eq(3)").text();
    var url = "editBoarder.php?boarder=" + encodeURIComponent(value);
    window.location.href = url;
  });
});

$(document).ready(function() {
  $(document).on("click", "#back", function() {
    location.reload();
  });
});

</script>

</html>