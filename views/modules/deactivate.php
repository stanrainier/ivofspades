<!DOCTYPE html>
<html>
<?php
include "template.php";
?>

<head>  
  <script src="../js/deact.js">

  </script>

</head>
<body>
  <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Deactivate Boarder</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Deactivate Boarder</li>
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
                <h3 class="mb-0">Deactivate Boarder</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form method="post">
                  <input type="text" id="deactDate" name="deactDate" hidden> </input>
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Boarder </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" type="text" id="boarder" name="boarder" autocomplete="none">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> ID </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" type="text" id="id" name="id" readonly>
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
                          <input class="form-check-input-inline " type="checkbox" name="bisactive" id="bisactive" value="1" checked >
                        </div>  
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="col-sm-16 form-group">
                          <label>Boarder ID</label>
                          <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Boarder ID" type="text"id="boarderid" name="boarderid" value="<?php echo $boarderid;?>" readonly>
                          </div>
                      </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Date Registered </label>
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
                          <input class="form-control" placeholder="Year Level" type="text" id="byear" name="byear" autocomplete="off" value="<?php echo $syear;?> " readonly>
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
                          <input class="form-control" placeholder="Your name" type="text" id="bname" name="bname" autocomplete="off" value="<?php echo $bname;?>" readonly>
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
                          <input class="form-control" placeholder="Email address" type="email" id="bemail" name="bemail" autocomplete="off" value="<?php echo $bemail;?>" readonly>
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
                          <input class="form-control" placeholder="Home Address" type="text" id="baddress" name="baddress" autocomplete="off" value="<?php echo $baddress;?>" readonly>
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
                          <input class="form-control" placeholder="Mobile or Telephone Number" type="text" id="bcontactnum" name="bcontactnum" autocomplete="off" maxlength="26" value="<?php echo $bcontactnum;?>" readonly>
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
                          <input class="form-control" placeholder="Birth Date" type="date" id="bbirthdate" name="bbirthdate" autocomplete="off" value="<?php echo $bbirthdate;?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label> Age </label>
                        <div class="input-group input-group-merge">
                          <input class="form-control" placeholder="Age" type="text" id="bage" name="bage" autocomplete="off" maxlength="2" value="<?php echo $bage;?>" readonly>
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
                          <input class="form-control" placeholder="Gender" type="text" id="bgender" name="bgender" autocomplete="off" value="<?php echo $bgender;?>" readonly>
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
                          <input class="form-control" placeholder="Civil Status" type="text" id="bstatus" name="bstatus" autocomplete="off" value="<?php echo $bstatus;?>" readonly>
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
                          <input class="form-control" placeholder="University" id="buniversity" name="buniversity" autocomplete="off" value="<?php echo $buniversity;?>" readonly>
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
                          <input class="form-control" placeholder="Emergency Contact Full Name" type="text" id="bemergencyname" name="bemergencyname" autocomplete="off" value="<?php echo $bemergencyname;?>" readonly>
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
                          <input class="form-control" placeholder="Emergency Contact Number" type="text" id="bemergencynum" name="bemergencynum" autocomplete="off" maxlength="26" value="<?php echo $bemergencynum;?>" readonly>
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
                          <input class="form-control" placeholder="Relationship to Emergency Contact" type="text" id="bemergencyrel" name="bemergencyrel" autocomplete="off" value="<?php echo $bemergencyrel;?>" readonly>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                 <div class="col-lg-16 col-15 text-right">
                  <button class="btn btn-primary btn-lg btn btn-success" type="submit" name="save">Save</button>
                  <button class="btn btn-secondary btn-lg btn btn-danger" id="newBtn" onclick="clearForm()" >Clear</button>
                </div>
                </div>
                <?php
                require_once "../../controllers/boarders.controller.php";
                  $addboarder = new ControllerBoarder();
                  $addboarder -> ctrEditBoarder();
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
  <!-- modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" id="close">&times;</span>
            <div class="card-body">
                <input class="form-control" placeholder="Search" type="search" id="searchBoarder">
                <div class="table-responsive" style="height: 500px;">
                    <table id="modalTableEdit" class="table table-hover table-bordered table-striped datatable-small-font clickable-tr ">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Boarder ID</th>
                      <th>Registration Date</th>
                      <th>Deactivation Date</th>
                      <th>Account Status</th>
                      <th>Year Level</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Birthday</th>
                      <th>University</th>
                      <th>Contact Number</th>
                      <th>Email Address</th>
                      <th>Status</th>
                      <th>Emergency Contact</th>
                      <th>Emergency Contact Number</th>
                      <th>Relationship to Emergency Contact </th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                   require_once "../../controllers/boarders.controller.php";
                    $boarders = (new ControllerBoarder)->ctrShowBoarders();
                    foreach ($boarders as $key => $value) {
                      if($value["bisactive"] == "1"){
                        $active = "Active";
                      }else{
                        $active = "Inactive";
                      }
                      echo '<tr>
                                <td>'.$value["id"].'</td>
                                <td>'.$value["boarderid"].'</td>
                                <td>'.$value["sdate"].'</td>
                                <td>'.$value["deactivationDate"].'</td>
                                <td>'.$active.'</td>
                                <td>'.$value["syear"].'</td>
                                <td>'.$value["bname"].'</td>
                                <td>'.$value["baddress"].'</td>
                                <td>'.$value["bage"].'</td>  
                                <td>'.$value["bgender"].'</td>
                                <td>'.$value["bbirthdate"].'</td>
                                <td>'.$value["buniversity"].'</td>
                                <td>'.$value["bcontact"].'</td>
                                <td>'.$value["bemail"].'</td>  
                                <td>'.$value["bstatus"].'</td>
                                <td>'.$value["bemergencyname"].'</td>
                                <td>'.$value["bemergencynum"].'</td>
                                <td>'.$value["bemergencyrel"].'</td>
                            </tr>';
                      }
                  ?>
                </tbody>
              </table>
                </div>

            </div>
        </div>
      </div>
    </div>
</body>
</html>