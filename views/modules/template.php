 <?php
include "../../models/session.php";
?>
 <html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php  echo "IV OF SPADES"; ?></title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/icon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="../assets/vendor/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="../assets/vendor/quill/dist/quill.core.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.1.0" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/vendor/sweetalert2/dist/sweetalert2.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../js/session.js"></script>
  <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 9999; /* Increase the z-index value */
        padding-top: 150px; /* Increase the padding-top value */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: white;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

</head>
<body>
  
<?php
// ACCESS PRIVILEGE
if($_SESSION["username"] == "admin"){
include "navbar.php";
}else{
include "navbar-user.php";
}
 

error_reporting(0);
ini_set('display_errors', 0);
?>


</body>

<!-- Avoid submission when refreshing page -->
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- <script>
var sessionID = Date.now().toString() + Math.random().toString();

// Set a counter variable to track the number of active tabs
if (!localStorage.tabCounter) {
  localStorage.tabCounter = 1;
} else {
  localStorage.tabCounter++;
}

// Check if the user has exceeded the maximum number of allowed tabs
var maxTabs = 2;
if (localStorage.tabCounter > maxTabs) {
  // Redirect the user to an error page or display an error message
  window.location.href = 'error.html';
  alert("User is Logged in!")
}

// Store the session ID in localStorage
localStorage.sessionID = sessionID;

// Listen for the 'storage' event to detect when a tab is closed
window.addEventListener('storage', function(e) {
  if (e.key === 'tabCounter') {
    localStorage.tabCounter--;
  }
});
  
</script> -->

<!-- // shortcuts  -->

<script>
  //prevent default function keys
  document.addEventListener('keydown', function(event) {
  if (event.keyCode >= 112 && event.keyCode <= 122 && event.keyCode !== 116) { // F1 to F11, except F5
    event.preventDefault(); // prevent default behavior
  }
  });
  // logout
  document.addEventListener("keydown", function(event) {
  if (event.ctrlKey && event.key === "Backspace") {
    event.preventDefault(); // Prevents the default behavior of navigating back in the browser
    window.location.href = "logout.php"; // Redirects the user to logout.php
  }

  //boarderlist
    document.addEventListener('keydown', function(event) {
    if (event.keyCode === 118) { // F7 key
      window.location.href = 'boarderlist.php';
    }
  });
  document.addEventListener('keydown', function(event) {
    if (event.keyCode === 117) { // F6 key
      window.location.href = 'addboarder.php';
    }
  });
  
  //focus on input fields
  document.addEventListener('keydown', function(event) {
  if (event.key === '/') {
    event.preventDefault(); // prevent default '/' behavior
    document.getElementById('searchBoarder').focus(); // focus on the input field
  }
});
});

  //clearForm 
   document.addEventListener('keydown', function(event) {
    if (event.key === "F4") {
      document.getElementById("newBtn").click();
    }
  });
   //new
   document.addEventListener('keydown', function(event) {
  if (event.key === 'F2') {
    event.preventDefault();
    $(".btn-info").click();
  }
});

</script>


 <!-- lockscreen -->
<script>
    // Lockscreen inactivity timer
var lockscreenTimer;
var lockscreenTimeout = 300000; // In milliseconds (5 minutes)
// var lockscreenTimeout = 5000; // In milliseconds (5 Seconds)

function startLockscreenTimer() {
  lockscreenTimer = setTimeout(function() {
    // Redirect the user to the lockscreen page or perform other lockscreen actions
    window.location.href = 'lockscreen.php';
  }, lockscreenTimeout);
}

function resetLockscreenTimer() {
  clearTimeout(lockscreenTimer);
  startLockscreenTimer();
}

// Start the lockscreen timer on page load
startLockscreenTimer();

// Reset the lockscreen timer on user activity
document.addEventListener('click', resetLockscreenTimer);
document.addEventListener('mousemove', resetLockscreenTimer);
document.addEventListener('keydown', resetLockscreenTimer);
</script>
    <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/select2/dist/js/select2.min.js"></script>
  <script src="../assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="../assets/vendor/nouislider/distribute/nouislider.min.js"></script>
  <script src="../assets/vendor/quill/dist/quill.min.js"></script>
  <script src="../assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="../assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.1.0"></script>
  <script src="../js/boarder/addboarder.js"></script>

  </html>
 