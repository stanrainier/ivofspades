<?php
session_start();

// Set the password
$password = $_SESSION["password"];
// Check if the user has already entered the correct password
unset($_SESSION['authenticated']);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered password
    $enteredPassword = $_POST['password'];

    // Check if the entered password is correct
    if ($enteredPassword === $password) {
        // Password is correct, set authenticated to true in the session and redirect to the main page
        $_SESSION['authenticated'] = true;
        header("Location: boarderlist.php");
        exit;
    } else {
        // Password is incorrect, display an error message
        $errorMessage = "Invalid password. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>INACTIVITY DETECTED</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1d1f27;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 300px;
            padding: 30px;
            border-radius: 10px;
            background-color: #32353e;
            text-align: center;
        }
        h1 {
            margin-bottom: 30px;
            color: #fff;
            letter-spacing: 2px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="password"] {
            width: 100%;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            border: none;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 30px;
            border-radius: 10px;
            border: none;
            outline: none;
            background-color: #2ecc71;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #27ae60;
        }
        .error {
            color: #e74c3c;
            margin-top: 30px;
        }
    </style>

<body>
    <div class="container">
        <h1>INACTIVITY DETECTED</h1>
        <form method="POST">
            <input type="password" name="password" placeholder="Enter your password" required><br>
            <input type="submit" value="Unlock">
        </form>
        <?php if (isset($errorMessage)): ?>
            <div class="error"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
