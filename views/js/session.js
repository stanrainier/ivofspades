window.addEventListener("beforeunload", function (event) {
  // Redirect the user to the logout script
  window.location.href = "logout.php";
});