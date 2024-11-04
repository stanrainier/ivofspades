<?php

session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: addboarder.php");
    exit;

}

// if(isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"] === true){
//     die("Account is being used");
// } 
// Include config file
require_once "config.php";
// Include CAPTCHA
require_once "captcha.php";

// Initialize the session
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
$validation = '';

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
 
    // Validate credentials
    if(empty($username_err) && empty($password_err) && $_POST['number'] == $number){
     //&& !empty($validation)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            
                            session_start();

                            // Store data in session variables
                            // $_SESSION["is_logged_in"] = true;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["password"] = $password;
                            $_SESSION['authenticated'] === true;
                            if($_SESSION["username"] == "admin"){
                                header("location: addboarder.php");
                                }else{
                            header("location: boarderlist.php");
                                }
                            // Redirect user to welcome page
                            // Password is correct, so start a new session
                            
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    
    // Close connection
    $mysqli->close();
}

?>

<!-- && isset($_POST["Login"]) -->