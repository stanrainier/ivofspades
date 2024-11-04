<?php 
session_start();
if(!isset($_SESSION["loggedin"])){
  
    $_SESSION['s_urlRedirectDir'] = $_SERVER['REQUEST_URI'];
    header("Location:index.php");
}else{

}
if(!isset($_SESSION["authenticated"])){
  
    $_SESSION['s_urlRedirectDir'] = $_SERVER['REQUEST_URI'];
    header("Location:lockscreen.php");
}else{

}

?>