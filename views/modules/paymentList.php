<!DOCTYPE html>
<html>
<?php
include "template.php";
?>
<script src="../js/paymentList.js"></script>

<body>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">List of Payment Transactions</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List of Payments</li>
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
                <h3 class="mb-0">Payment Transactions</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="text-right m-2">
                  <button class="btn btn-primary" id="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                </div>
                <div class="table-responsive" style="height: 500px;">
                <div>
                  <table id="myTable" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr clientlist">
                    <thead>
                      <tr>
                        <th>Payment ID</th>
                        <th>Billing ID</th>
                        <th>Payment Date</th>
                        <th>Time of Payment</th>
                        <th>Boarder Name</th>
                        <th>Electricity Bill</th>
                        <th>Water Bill</th>
                        <th>Rent Bill</th>
                        <th>Additional Charges</th>
                        <th>Total Bill</th>
                        <th>Remaining Balance</th>
                        <th>Cash Paid | Tendered</th>
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
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      require "../../controllers/payment.controller.php";
                      $payments = (new ControllerPayment)->ctrShowPayments();
                      foreach ($payments as $key => $value) {
                        echo '<tr>
                                <td>'.$value["payment_id"].'</td>
                                <td>'.$value["billing_id"].'</td>
                                <td>'.$value["paymentDate"].'</td>
                                <td>'.$value["paymentTime"].'</td>
                                <td>'.$value["boarder_name"].'</td>
                                <td>'.$value["electricity_bill"].'</td>  
                                <td>'.$value["water_bill"].'</td>
                                <td>'.$value["rent_bill"].'</td>
                                <td>'.$value["additional_bill"].'</td>
                                <td>'.$value["totalBill"].'</td>
                                <td>'.$value["balance"].'</td>  
                                <td>'.$value["cashTendered"].'</td>
                              </tr>';
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <form action="printBoarders.php">
                <button class="btn btn-primary m-4">Print to PDF</button>
              </form>
              <form method ="post" id="invoice">
                <input id="boarder_billed" name="selected" type="text"  required hidden> </input>
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
      </div>
    </div>
</body>
<div id="myModalInvoice" class="modal">
      <div class="modal-content">
        <span class="close" id="close">&times;</span>
        <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="table-responsive" style="height: 500px;">
               <table id="modalTableInvoice" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr ">
                <thead>
                    <tr>
                      <th>Payment ID</th>
                      <th>Billing ID</th>
                      <th>Payment Date</th>
                      <th>Payment Time</th>
                      <th>Boarder</th>
                      <th>Electricity Bill</th>
                      <th>Water Bill</th>
                      <th>Rent Bill</th>
                      <th>Additional Fee</th>
                      <th>Total Bill</th>
                      <th>Balance</th>
                      <th>Cash Tendered</th>
                    </tr>
                </thead>
                <tbody>
              <form id="form" action="printPaymentLists.php" method="POST" target="_blank">
                  <?php
                   require_once "../../controllers/payment.controller.php";
                   $bill = (new ControllerPayment)->ctrShowBoarderPayments();
                   $finalTotal = 0; // Initialize the total variable
                   $iterator = 0;
                   foreach ($bill as $key => $value) {
                     echo '<tr>
                             <td>'.$value["payment_id"].'</td>
                             <td>'.$value["billing_id"].'</td>
                             <td>'.$value["paymentDate"].'</td>
                             <td>'.$value["paymentTime"].'</td>
                             <td>'.$value["boarder_name"].'</td>
                             <td>'.$value["electricity_bill"].'</td>
                             <td>'.$value["water_bill"].'</td>
                             <td>'.$value["rent_bill"].'</td>
                             <td>'.$value["additional_bill"].'</td>
                             <td>'.$value["totalBill"].'</td>  
                             <td>'.$value["balance"].'</td>  
                             <td>'.$value["cashTendered"].'</td>  
                           </tr>';
                     $iterator++;
                   
                     $finalTotalBill += $value["totalBill"]; // Calculate the total by adding each total bill to the variable
                     $finalTotal += $value["balance"]; // Calculate the total by adding each total bill to the variable
                     $finalTendered += $value["cashTendered"]; // Calculate the total by adding each total bill to the variable
                   }
                   
                   echo '<tr>
                           <td>'. "".'</td>
                           <td>'. "".'</td>
                           <td>'. "".'</td>
                           <td>'. "".'</td>
                           <td style="font-weight: bold;">'. "".'</td>
                           <td style="font-weight: bold;">'. "".'</td>
                           <td style="font-weight: bold;">'. "".'</td>  
                           <td style="font-weight: bold;">'. "".'</td>  
                           <td style="font-weight: bold;">'."Total".'</td>  
                           <td style="font-weight: bold; color: red;">'.$finalTotalBill.'</td>  
                           <td style="font-weight: bold; color: red;">'.$finalTotal.'</td>  
                           <td style="font-weight: bold; color: red;">'.$finalTendered.'</td>  
                         </tr>';


                         echo '<input type="hidden" id="selected" name="selected" value="'.$value["boarder_name"].'">';
                  ?>
                </tbody>
              </table>
          <button class="btn btn-primary m-4">Print to PDF</button>
        </form>
            </div>
      </div>
    </div> 

</html>

<script>
  $(document).ready(function() {
  $(document).on("click", "#back", function() {
    location.reload();
  });
});

</script>