<?php 

// include('./header.php') ?>
<?php
// // Include config file
// require_once "vendor/config.php";
 
// // Define variables and initialize with empty values
// $username = $password = $confirm_password = "";
// $username_err = $password_err = $confirm_password_err = "";
 
// // Processing form data when form is submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     // Validate username
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Syötä käyttäjätunnus.";
//     } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
//         $username_err = "Käyttäjätunnus voi sisältää kirjaimia, numeroita ja alaviivoja.";
//     } else{
//         // Prepare a select statement
//         $sql = "SELECT id FROM users WHERE username = ?";
        
//         if($stmt = mysqli_prepare($db, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
//             // Set parameters
//             $param_username = trim($_POST["username"]);
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 /* store result */
//                 mysqli_stmt_store_result($stmt);
                
//                 if(mysqli_stmt_num_rows($stmt) == 1){
//                     $username_err = "Tämä käyttäjätunnus on varattu.";
//                 } else{
//                     $username = trim($_POST["username"]);
//                 }
//             } else{
//                 echo "Hupsista! Nyt on jotain pielessä. Ota yhteyttä koodariin.";
//             }

//             // Close statement
//             mysqli_stmt_close($stmt);
//         }
//     }
    
//     // Validate password
//     if(empty(trim($_POST["password"]))){
//         $password_err = "Keksi salasana";     
//     } elseif(strlen(trim($_POST["password"])) < 6){
//         $password_err = "Salasanan pitää sisältää vähintään 6 merkkiä.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
//     // Validate confirm password
//     if(empty(trim($_POST["confirm_password"]))){
//         $confirm_password_err = "Varmennatko vielä salasanan.";     
//     } else{
//         $confirm_password = trim($_POST["confirm_password"]);
//         if(empty($password_err) && ($password != $confirm_password)){
//             $confirm_password_err = "Salasanat eivät ole identtisiä.";
//         }
//     }
    
//     // Check input errors before inserting in database
//     if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
//         // Prepare an insert statement
//         $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
//         if($stmt = mysqli_prepare($db, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
//             // Set parameters
//             $param_username = $username;
//             $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 // Redirect to login page
//                 header("location: login.php");
//             } else{
//                 echo "Hupsista! Nyt on jotain pielessä. Ota yhteyttä koodariin.";
//             }

//             // Close statement
//             mysqli_stmt_close($stmt);
//         }
//     }
    
//     // Close connection
//     mysqli_close($db);
}
?>
<!-- <style>
    main {
      display: none;
    }
 </style>

<section id="login__form">

	<h1>Rekisteröidy maailman parhaimpaan levyeditoriin!</h1>

	  <div class="container">

	    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="Tunnus">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" placeholder="Salasana">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" placeholder="Salasana uudelleen">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Rekisteröidy">
                <input type="reset" class="btn btn-secondary ml-2" value="Nollaa">
            </div>
            <p>Onko tili jo pystyssä? <a href="login.php">Kirjaudu tästä</a>.</p>
        </form>
	  </div>
</section> -->

<?php 

// include('./footer.php') ?>