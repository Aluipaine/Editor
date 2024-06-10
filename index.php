<?php 

// THIS FILE REDIRECTS USER TO THE WELCOME OR LOGIN PAGE
session_start();
 
require "vendor/config.php";
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$trimmed_url = basename(parse_url($url, PHP_URL_PATH));

$urls = mysqli_query($db, "SELECT * FROM `rewritelib`");
$urls = mysqli_fetch_all($urls);   
$redirection = false;
foreach ($urls as $p) { 
    if($trimmed_url === $p[0]) {
        $redirection =true;
        header("location: http://$_SERVER[HTTP_HOST]" . $p[1]);
        
    }
}

if($redirection === false) {
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ 
        if(isset($_SESSION["role"]) && $_SESSION["role"] == 'admin'){
            header("location: welcome-marko.php");
        } else {
            $username_role_ = mysqli_query($db, "SELECT * FROM `users` WHERE `username` LIKE '$username'");
            $username_role = mysqli_fetch_assoc($username_role_);
            
            $_SESSION["role"] = $username_role['role'];
            header("location: welcome.php");
        }
        exit;
    }
    else {
        header("location: login.php");
    }
}
// Include config file


// // Define variables and initialize with empty values
// $username = $password = "";
// $username_err = $password_err = $login_err = "";
 
// // Processing form data when form is submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     // Check if username is empty
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter username.";
//     } else{
//         $username = trim($_POST["username"]);
//     }
    
//     // Check if password is empty
//     if(empty(trim($_POST["password"]))){
//         $password_err = "Please enter your password.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
//     // Validate credentials
//     if(empty($username_err) && empty($password_err)){
//         // Prepare a select statement
//         $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
//         if($stmt = mysqli_prepare($db, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
//             // Set parameters
//             $param_username = $username;
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 // Store result
//                 mysqli_stmt_store_result($stmt);
                
//                 // Check if username exists, if yes then verify password
//                 if(mysqli_stmt_num_rows($stmt) == 1){                    
//                     // Bind result variables
//                     mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
//                     if(mysqli_stmt_fetch($stmt)){
//                         if(password_verify($password, $hashed_password)){
//                             // Password is correct, so start a new session
//                             session_start();
                            
//                             // Store data in session variables
//                             $_SESSION["loggedin"] = true;
//                             $_SESSION["id"] = $id;
//                             $_SESSION["username"] = $username;                            
                            
//                             if(isset($_SESSION["username"]) && $_SESSION["username"] == 'Marko'){
//                                     header("location: welcome-" . $_SESSION['username'] . ".php");
//                                 } else {
//                                     header("location: welcome.php");
//                                 }
//                         } else{
//                             // Password is not valid, display a generic error message
//                             $login_err = "Invalid username or password.";
//                         }
//                     }
//                 } else{
//                     // Username doesn't exist, display a generic error message
//                     $login_err = "Invalid username or password.";
//                 }
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }

//             // Close statement
//             mysqli_stmt_close($stmt);
//         }
//     }
    
//     // Close connection
//     mysqli_close($db);
// }
?>
<!-- 
<!DOCTYPE html>

<html lang="fi" >

<head>

  <meta charset="UTF-8">

  <title>WF työmaaeditori</title>

  <link rel="stylesheet" href="/css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="user-scalable=yes">
  <link rel="apple-touch-icon" sizes="180x180" href="/css/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/css/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/css/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/css/favicon-16x16.png">
  <link rel="icon" type="image/x-icon" href="/css/favicon.ico">

<style>
    main {
      display: none;
    }
 </style>
</head>

<body>

<section id="login__form">

    <h1>Tervetuloa levyeditoriin!</h1>

      <div class="container">

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>"  placeholder="Tunnus">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"  placeholder="Salasana">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Kirjaudu sisään">
            </div>
            <!-- <p>Eikö tiliä löydy? <a href="register.php">Rekisteröidy</a>.</p> -->
        </form>
      </div>
</section> -->

<?php 

include('./footer.php') ?>