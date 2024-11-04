<!DOCTYPE html>
<html>
<?php
include "template.php";
?>
<head>
  <script src="../js/addboarder.js"></script>
</head>
<body>
  <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Register New Boarder</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Register Boarder</li>
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
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Boarder Information</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form method="post">
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Date </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" type="text" id="bdate" name="bdate" readonly>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Year </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Year Level" type="text" id="byear" name="byear" autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Full Name</label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Your name" type="text" id="bname" name="bname" required autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Email</label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Email address" type="email" id="bemail" name="bemail" autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Address</label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Home Address" type="text" id="baddress" name="baddress" autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label> Contact Number</label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Mobile or Telephone Number" type="text" id="bcontactnum" name="bcontactnum" autocomplete="off" maxlength="26">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Date of Birth </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Birth Date" type="date" id="bbirthdate" name="bbirthdate" autocomplete="off">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Age </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Age" type="text" id="bage" name="bage" autocomplete="off" maxlength="2">
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
                        <label> Gender </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Gender" type="text" id="bgender" name="bgender" autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Civil Status </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Civil Status" type="text" id="bstatus" name="bstatus" autocomplete="off">
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
                        <label> University</label>
                        <div class="input-group select-group-merge">
                          <input class="form-control" placeholder="University" id="buniversity" name="buniversity" autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-university"></i></span>
                          </div>
                        </div>
                      </div>
                  </div> 
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Emergency Contact Name </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Emergency Contact Full Name" type="text" id="bemergencyname" name="bemergencyname" autocomplete="off">
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
                        <label> Emergency Contact Number </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Emergency Contact Number" type="text" id="bemergencynum" name="bemergencynum" autocomplete="off" maxlength="26">
                          <div class="input-group-append" >
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                        </div>  
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Emergency Contact Relationship </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Relationship to Emergency Contact" type="text" id="bemergencyrel" name="bemergencyrel" autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-16">
                        <div class="form-check-input col-md-6">
                          <label> Active </label>
                          <input class="form-check-input-inline " type="checkbox" name="bisactive" id="bisactive" value="1" checked>
                        </div>  
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-sm-16 form-group">
                          <label>Boarder ID</label>
                          <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Boarder ID" type="text"id="boarderid" name="boarderid" value="" readonly>
                          </div>
                      </div>
                  </div>
                </div>
                 <div class="col-lg-16 col-15 text-right">
                  <button class="btn btn-primary btn-lg btn btn-success" type="submit" name="save">Save</button>
                  <button class="btn btn-primary btn-lg btn btn-info" type="button" id="newProd" >New</button>
                  <button class="btn btn-secondary btn-lg btn btn-danger" id="newBtn" onclick="clearForm()" >Clear</button>
                </div>
                </div>
                <?php
                require_once "../../controllers/boarders.controller.php";
                  $addboarder = new ControllerBoarder();
                  $addboarder -> addBoarder();
                ?>
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
</body>
<script>
 $(".btn-info").click(function(){
      $("bname").focus();
      swal.fire({
          title: 'Do you want create new client details?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Yes',
          cancelButtonText: 'Cancel!',
          confirmButtonClass: 'btn btn-outline-success',
          cancelButtonClass: 'btn btn-outline-danger',
          allowOutsideClick: false,
          buttonsStyling: false
      }).then(function(result) {
          if(result.value) {
            clearForm();
          }
     });
   }); 

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
});
</script>
</html>