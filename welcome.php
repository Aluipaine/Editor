<?php
// MAIN WELCOME PAGE FOR COMMENTING AND MEASURING ROLE (MITTAUS AND KOMMENTOINTI)
// Initialize the session
session_start();
require_once "vendor/config.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



if(htmlspecialchars($_SESSION["username"]) === "marko" || htmlspecialchars($_SESSION["username"]) === "Marko") {
  header("location: welcome-marko.php");
  exit;
}


$posts = mysqli_query($db, "SELECT * FROM `projects` WHERE `id` IN (SELECT `project_id` FROM `addedusers` WHERE `username`=\"" . $_SESSION["username"] . "\");");
$posts = mysqli_fetch_all($posts);


$usr = $_SESSION["username"];

$usr_role = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr'; ");
$usr_role = mysqli_fetch_all($usr_role);

$usr_role = $usr_role[3];

// $username = $_SESSION["username"];
// $username_role_ = mysqli_query($db, "SELECT * FROM `users` WHERE `username` LIKE '$username'");
// $username_role = mysqli_fetch_assoc($username_role_);

$_SESSION["role"] = $usr_role;



?>
 <?php include('./header.php') ?>
<section id="welcome">
    <h1>Hei <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Nyt puuhaillaan.</h1>
    <div class="welcome__btns">
        <a href="reset-password.php" class="btn btn-warning">Nollaa salasana</a>
        <a href="logout.php" class="btn btn-danger ml-3">Kirjaudu ulos</a>
    </div>
</section>

<section id="projects__list" class="projects__list">

    <div class="container">

      <div class="row">
        <div class="col-6"><h2 class="h1">Nykyiset projektit:</h2></div>
        <div class="col-6"><a class="ready_btn" href="./new-project.php">Uusi projekti</a></div>

      </div>

      <section id="projects">

        <table>

          <tr>

            <td>Projektit</td>

            <td>Nimi</td>

            <?php
            
              if(htmlspecialchars($_SESSION["role"]) === "mittaus" || htmlspecialchars($_SESSION["role"]) === "admin") {
                echo "<td>Mittamies</td>";
              }
              else {
                echo "<td>Avoimet tiketit sinulle:</td>";
              }
            ?>
            

            <td>Projektin pääsy:</td>

          </tr>
          <?php
          foreach ($posts as $post) {
            ?>
            
            <tr>
                <td><?= $post[2] ?></td>
                <td><?= $post[1] ?></td>
                <td>
                <?php
                if(htmlspecialchars($_SESSION["role"]) === "mittaus" || htmlspecialchars($_SESSION["role"]) === "admin") {
                  echo $post[5];
                }
                else {
                  $sql = "SELECT * FROM `comments` WHERE `projectid`=" . $post[0] . " && `comment_to`='" .  strtolower($_SESSION["username"]) . "' ";

                  if ($result = mysqli_query($db, $sql)) {
                      // Return the number of rows in result set
                      $rowcount = mysqli_num_rows( $result );
                      // Display result
                      printf("%d", $rowcount . "kpl");
                   }
                }
               
                 ?>
                 </td>
                <td><a href="post.php?id=<?= $post[0] . '&user=' . htmlspecialchars($_SESSION["username"]) ?>">Jatka projektiin</a></td>
              </tr>
            <?php
        }


        ?>
          

        </table>

      </section>

    </div>
</section>
    
</body>

</html>

