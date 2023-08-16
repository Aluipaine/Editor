<?php
// Initialize the session
session_start();

include('vendor/config.php');

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// project__settings_system
// Aukko-asetukset 
// Aukkojen tyypit, Nimi,Vasen reunaranka, Vasenreuna lista,Oikeareuna ranka, Oikeareuna lista, alareuna ranka,Alareuna lista, Yläreuna ranka, Yläreuna lista
// Pistorasia,Valorasia,Sähkörasia,Viemäri 32,Viemäri50,Viemäri 75, Viemäri 100, IV100,IV 160,IV200, IV 250, IV315,Neliö 100x100,Neliö 100x100,Neliö 500x500
// Salli materiaalit
// Lisää uusi materiaali
?>

 <?php include('./header.php') ?>
 <style>
    main {
      display: none;
    }
 </style>
<section id="welcome">
    <h1>Pääkäyttäjän asetukset</h1>
    <div class="welcome__btns">
        <a href="reset-password.php" class="btn btn-warning">Nollaa salasana</a>
        <a href="logout.php" class="btn btn-danger ml-3">Kirjaudu ulos</a>
    </div>
</section>
<form action="vendor/settings__update.php"  method="post">
<section class="s__settings">
  <div class="container">
    <section id="system">
      <h2>Projektin järjestelmä: Valitse ne, jotka voi tulla projekteihin:</h2>
        <fieldset class="c-form-row">
          <?php 
            $s_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 's_settings'");
            $s_da = mysqli_fetch_all($s_data);
            $s_data = $s_da[0][3];

            $s_da_ = explode("},{", $s_data);
            $_s = explode("],[", $s_da_[0]);


            $s_ = str_replace("]" , "",$_s);
            $s = str_replace("[" , "",$s_);

           ?>
           <input type="text" id="-systems" value='<?php echo($s[0]); ?>' hidden>
           <!-- <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems"> -->


           <input type="checkbox" id="marko_one" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Classic vaaka'}" value="">
           <label for="marko_one" name="-systems">Classic vaaka</label>
           <input type="checkbox" id="marko_two" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Classic pysty'}" value="">
           <label for="marko_two" name="-systems">Classic pysty </label>
           <input type="checkbox" id="marko_three" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Beta'}" value="">
           <label for="marko_three" name="-systems">Beta</label>
           <input type="checkbox" id="marko_four" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Alpha vaaka'}" value="">
           <label for="marko_four" name="-systems">Alpha vaaka</label>
           <input type="checkbox" id="marko_five" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Alpha pysty'}" value="">
           <label for="marko_five" name="-systems">Alpha pysty</label>
           <input type="checkbox" id="marko_six" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Delta'}" value="">
           <label for="marko_six" name="-systems">Delta </label>
        </fieldset>
    </section>
    <section id="hole_set">
      <h2>Aukko-asetukset </h2>
      <div class="hole_settings">
        <?php 
            $am_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_mallityypit'");
            $am_da = mysqli_fetch_all($am_data);

            $am = $am_da[0][3];
            

            $_am = explode(",", $am);
            foreach ($_am as $z) {
              $am_1 = str_replace("{" , "", str_replace("}" , "", $z));
              $am_2 = str_replace("[" , "", str_replace("]" , "",$am_1));
              $am_3 = str_replace('"','', $am_2);

              echo '<div class="hole_setting">'.$am_3.'</div>';
            }

            echo '<div class="hole_setting" onclick="s_newmalli();">Uusi malli</div>';
       ?>
      </div>  
        <?php 
            $am_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_mallit'");
            $am_da = mysqli_fetch_all($am_data);

            $am = $am_da[0][3];
            

            $_am = explode("+", $am);
            
            

            foreach ($_am as $a_z) {
                $am_1 = str_replace("{" , "", str_replace("}" , "",$a_z));
                $am_2 = str_replace("[" , "", str_replace("]" , "",$am_1));
                $am_3 = str_replace('"','', $am_2);

                $a_array = explode("__", $am_3);

                echo '<table class="table" id=""><td>Aukkojen tyypit</td><td>Nimi</td><td>Ranka Vasenreuna aukko +/-</td><td>Ranka Oikeareuna aukko +/-</td> <td>Ranka Alareuna aukko +/-</td> <td>Ranka Yläreuna aukko +/-</td> <td>Vasenreuna lista +/-</td> <td>Oikeareuna lista +/-</td><td>Alareuna lista +/-</td> <td>Yläreuna lista +/-</td><td>+/- jotain</td><td>+/- jotain</td><td>+/- jotain</td><td>+/- jotain</td>';
                foreach ($a_array as $a) {
                   
                  echo "<tr>";
                  $za_array = explode(",", $a);
                  $count = 0;
                  foreach ($za_array as $z) {
                    $count+=1;
                    echo "<td>"."<input type='text' name='_s_aukko_1' value='".$z."' class='lineinput'>"."</td>";
                    if($count == 14) {
                      echo "</tr>";
                      echo "<tr>";
                      $count = 0;
                    }
                   
                  }

                  echo "</tr>";
                }
                echo '</table>';
                
           
            }

         ?>

      </div>
      
      <!-- <table>
        <tr>
          <td>Aukkojen tyypit</td>
          <td>Nimi</td>
          <td>Ranka Vasenreuna aukko +/-</td>
          <td>Ranka Oikeareuna aukko +/-</td> 
          <td>Ranka Alareuna aukko +/-</td> 
          <td>Ranka Yläreuna aukko +/-</td> 
          <td>Vasenreuna lista +/-</td> 
          <td>Oikeareuna lista +/-</td>
          <td>Alareuna lista +/-</td> 
          <td>Yläreuna lista +/-</td> 

          <td>+/- jotain</td>
          <td>+/- jotain</td>
          <td>+/- jotain</td>
          <td>+/- jotain</td>
        </tr>
        <tr>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_1" value="" class="lineinput"></td>
        </tr>
       <tr>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_2" value="" class="lineinput"></td>
        </tr>
        <tr>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_3" value="" class="lineinput"></td>
        </tr>
        <tr>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_4" value="" class="lineinput"></td>
        </tr>
        <tr>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_5" value="" class="lineinput"></td>
        </tr>
        <tr>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_6" value="" class="lineinput"></td>
        </tr>
        <tr>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_7" value="" class="lineinput"></td>
        </tr>
        <tr>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
          <td><input type="text" name="_s_aukko_8" value="" class="lineinput"></td>
        </tr>
      </table> -->
<!--       <div onclick="s__createnewrow_holes();" class="btn ready_btn">Uusi rivi</div> -->    
    </section>
    <section id="morehole_set">
      
      <h2>Reikä asetukset </h2>
      <div class="morehole__setup">
          <div class="morehole__setup">
          <div class="more__settings">
          R. AS 
        </div>
        <table>
          <tr>
            <td>Reikien tyypit</td>
            <td>Nimi</td>
            <td>Reikä pyöreä r</td>
            <td>Näytä editorissa</td>
            <td>Laske kitit</td>
            <td>Jotain tänne</td>
            <td>Jotain tänne</td>
            <td>Jotain tänne</td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_1" value="R1" class="lineinput"></td>
            <td><input type="text" name="_s_reika_1" value="Pistorasia" class="lineinput"></td>
            <td><input type="text" name="_s_reika_1" value="30" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_1" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__one_one"><label for="morehole__one_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="morehole__one_two" value="" class="lineinput" id="morehole__one_two"><label for="morehole__one_two"></label></td>
            <td><input type="text" name="_s_reika_1" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_1" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_1" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_2" value="R2" class="lineinput"></td>
            <td><input type="text" name="_s_reika_2" value="Valorasia" class="lineinput"></td>
            <td><input type="text" name="_s_reika_2" value="50" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_2" value=""  onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__two_one"><label for="morehole__two_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="morehole__two_two" value="" class="lineinput" id="morehole__two_two"><label for="morehole__two_two"></label></td>
            <td><input type="text" name="_s_reika_2" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_2" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_2" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_3" value="R3" class="lineinput"></td>
            <td><input type="text" name="_s_reika_3" value="Sähkörasia" class="lineinput"></td>
            <td><input type="text" name="_s_reika_3" value="30" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_3" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__three_one"><label for="morehole__three_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="morehole__three_two" value="" class="lineinput" id="morehole__three_two"><label for="morehole__three_two"></label></td>
            <td><input type="text" name="_s_reika_3" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_3" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_3" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_4" value="R4" class="lineinput"></td>
            <td><input type="text" name="_s_reika_4" value="Viemäri 32" class="lineinput"></td>
            <td><input type="text" name="_s_reika_4" value="20" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_4" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__four_one"><label for="morehole__four_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="morehole__four_two" value="" class="lineinput" id="morehole__four_two"><label for="morehole__four_two"></label></td>
            <td><input type="text" name="_s_reika_4" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_4" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_4" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_5" value="R5" class="lineinput"></td>
            <td><input type="text" name="_s_reika_5" value="Viemäri50" class="lineinput"></td>
            <td><input type="text" name="_s_reika_5" value="60" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_5" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__five_one"><label for="morehole__five_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="s__moreholeparameter" value="" class="lineinput" id="morehole__five_two"><label for="morehole__five_two"></label></td>
            <td><input type="text" name="_s_reika_5" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_5" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_5" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_6" value="R6" class="lineinput"></td>
            <td><input type="text" name="_s_reika_6" value="Viemäri 75" class="lineinput"></td>
            <td><input type="text" name="_s_reika_6" value="45" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_6" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__six_one"><label for="morehole__six_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_6" value="" class="lineinput" id="morehole__six_two"><label for="morehole__six_two"></label></td>
            <td><input type="text" name="_s_reika_6" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_6" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_6" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_7" value="R7" class="lineinput"></td>
            <td><input type="text" name="_s_reika_7" value="Viemäri 100" class="lineinput"></td>
            <td><input type="text" name="_s_reika_7" value="55" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_7" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__seven_one"><label for="morehole__seven_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_7" value="" class="lineinput" id="morehole__seven_two"><label for="morehole__seven_two"></label></td>
            <td><input type="text" name="_s_reika_7" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_7" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_7" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_8" value="R8" class="lineinput"></td>
            <td><input type="text" name="_s_reika_8" value="IV100" class="lineinput"></td>
            <td><input type="text" name="_s_reika_8" value="55" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_8" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__eight_one"><label for="morehole__eight_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_8" value="" class="lineinput" id="morehole__eight_two"><label for="morehole__eight_two"></label></td>
            <td><input type="text" name="_s_reika_8" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_8" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_8" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_9" value="R9" class="lineinput"></td>
            <td><input type="text" name="_s_reika_9" value="IV 160" class="lineinput"></td>
            <td><input type="text" name="_s_reika_9" value="" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_9" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__nine_one"><label for="morehole__nine_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_9" value="" class="lineinput" id="morehole__nine_two"><label for="morehole__nine_two"></label></td>
            <td><input type="text" name="_s_reika_9" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_9" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_9" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_10" value="R10" class="lineinput"></td>
            <td><input type="text" name="_s_reika_10" value="IV200" class="lineinput"></td>
            <td><input type="text" name="_s_reika_10" value="85" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_10" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__ten_one"><label for="morehole__ten_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_10" value="" class="lineinput" id="morehole__ten_two"><label for="morehole__ten_two"></label></td>
            <td><input type="text" name="_s_reika_10" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_10" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_10" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_11" value="R11" class="lineinput"></td>
            <td><input type="text" name="_s_reika_11" value="IV 250" class="lineinput"></td>
            <td><input type="text" name="_s_reika_11" value="105" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_11" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__eleven_one"><label for="morehole__eleven_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_11" value="" class="lineinput" id="morehole__eleven_two"><label for="morehole__eleven_two"></label></td>
            <td><input type="text" name="_s_reika_11" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_11" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_11" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_12" value="R12" class="lineinput"></td>
            <td><input type="text" name="_s_reika_12" value="IV315" class="lineinput"></td>
            <td><input type="text" name="_s_reika_12" value="130" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_12" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__twelve_one"><label for="morehole__twelve_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_12" value="" class="lineinput" id="morehole__twelve_two"><label for="morehole__twelve_two"></label></td>
            <td><input type="text" name="_s_reika_12" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_12" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_12" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_13" value="R13" class="lineinput"></td>
            <td><input type="text" name="_s_reika_13" value="Neliö 100x100" class="lineinput"></td>
            <td><input type="text" name="_s_reika_13" value="165" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_13" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__thirteen_one"><label for="morehole__thirteen_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_13" value="" class="lineinput" id="morehole__thirteen_two"><label for="morehole__thirteen_two"></label></td>
            <td><input type="text" name="_s_reika_13" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_13" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_13" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_14" value="R14" class="lineinput"></td>
            <td><input type="text" name="_s_reika_14" value="Neliö 100x100" class="lineinput"></td>
            <td><input type="text" name="_s_reika_14" value="" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_14" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__fourteen_one"><label for="morehole__fourteen_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_14" value="" class="lineinput" id="morehole__fourteen_two"><label for="morehole__fourteen_two"></label></td>
            <td><input type="text" name="_s_reika_14" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_14" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_14" value="" class="lineinput"></td>
          </tr>
          <tr>
            <td><input type="text" name="_s_reika_15" value="R15" class="lineinput"></td>
            <td><input type="text" name="_s_reika_15" value="Neliö 500x500" class="lineinput"></td>
            <td><input type="text" name="_s_reika_15" value="" class="lineinput"></td>
            <td><input type="checkbox" name="_s_reika_15" value=""   onfocusin="this.value = 'showoneditor'" class="lineinput" id="morehole__fiveteen_one"><label for="morehole__fiveteen_one"></label></td>
            <td><input type="checkbox"  onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_15" value="" class="lineinput" id="morehole__fiveteen_two"><label for="morehole__fiveteen_two"></label></td>
            <td><input type="text" name="_s_reika_15" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_15" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_15" value="" class="lineinput"></td>
          </tr>
        </table>
      </div>
      
      </div>
<!--       <div class="btn ready_btn" onclick="s__createnewrow_morehole();">Uusi rivi</div>
 -->    
  </section>
  <section>
    <div class="row">
      <div class="col-6">
        <h4>Saumoitus</h4>
        <fieldset style="flex-direction: column;display: flex;">
          <input type="radio" id="saumoitus_one" name="zero__saumoitus" value="Levytys aukkojen yli">
          <label for="saumoitus_one">Levytys aukkojen yli</label>
          <input type="radio" id="saumoitus_two" name="zero__saumoitus" value="Pystysaumat aukkojen mukaan">
          <label for="saumoitus_two">Pystysaumat aukkojen mukaan </label>
          <input type="radio" id="saumoitus_three" name="zero__saumoitus" value="Vaakasaumat aukkojen mukaan">
          <label for="saumoitus_three">Vaakasaumat aukkojen mukaan</label>
        </fieldset>
      </div>
      <div class="col-6">
        <h4>Rakennekuva</h4>
        <img src="/img/rakennekuva.jpg" style="width: 100%;">
      </div>
    </div>
  </section>
  <section id="materials">
     <h2>Salli materiaalit</h2>
     <fieldset class="material__customcol" id="">
      <?php 
          $s_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 's_materials'");
          $s_da = mysqli_fetch_all($s_data);
          $s_data = $s_da[0][3];

          $s_da_ = explode("],[", $s_data);
          $_s = explode('}","{', $s_da_[0]);


          // $s_ = str_replace("]" , "",$_s);
          // $s = str_replace("[" , "",$s_);

          // print_r($s);

          // print_r($_s);
          foreach ($_s as $sy) {

            // echo $sy;
            $sy_1 = str_replace("{" , "", str_replace("}" , "",$sy));
            $sy_2 =str_replace("[" , "", str_replace("]" , "",$sy_1));
            $sy_3 = str_replace('"','', $sy_2);
            $sys = explode(",", $sy_3);

            // print_r($sys);
           echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="'.$sys[0].'"><label style="color: white; background: '.$sys[7].';">'.$sys[0].'</label><input type="hidden" name="material_bg" value="'.$sys[7].'"><input type="hidden" name="material_colour" value="'.$sys[7].'"><input type="hidden" name="material_array" value="{'.$sys[0].','.$sys[1].','.$sys[2].','.$sys[3].','.$sys[4].','.$sys[5].','.$sys[6].','.$sys[7].'}"></div>';
            // print_r($s);

            // $sys = explode(",",$s[0]);
            //    if(strlen($sy)>=3) {
            //       // echo '<div class="material__customcol_item"><input type="checkbox" name="system_type" value="Classic" checked><label style="background: #E2E2E2;">' . str_replace('"','', $sy) . '</label></div>';

            //       echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="Exterior Green" id="exterior green"><label for="exterior green" style="color: rgb(255, 255, 255); background: rgb(110, 135, 85);">FO Malibu E. Green</label><input type="hidden" name="material_bg" value="rgb(255, 255, 255)"><input type="hidden" name="material_colour" value="rgb(110, 135, 85)"><input type="hidden" name="material_array" value="Exterior Green,Exterior Green,FO/B_s2_d0,1250,600,8,Standard,#6E8755"></div>';
            //    }
          }
          
          

       ?>
        <!-- <div class="material__customcol_item"><input type="checkbox" name="material_type" value="Exterior Green" id="exterior green"><label for="exterior green" style="color: rgb(255, 255, 255); background: rgb(110, 135, 85);">FO Malibu E. Green</label><input type="hidden" name="material_bg" value="rgb(255, 255, 255)"><input type="hidden" name="material_colour" value="rgb(110, 135, 85)"><input type="hidden" name="material_array" value="Exterior Green,Exterior Green,FO/B_s2_d0,1250,600,8,Standard,#6E8755"></div> -->
     </fieldset>
     <div class="row">
        <div class="col-6">
           <h3>Lisää uusi materiaali</h3>
           <i style="margin: 20px 0 12px 0;display: block;">Pyydän välttämään materiaalin nimien toistumista.</i> <br>
           <label for="new_material">Materiaalin nimi:</label>
           <input type="text" placeholder="Materiaalin nimi*" id="new_material" > <br>
           <label for="new_materialcode">Materiaalin koodi:</label>
           <input type="text" placeholder="Materiaalin koodi*" id="new_materialcode" > <br>
           <label for="new_materialcode">Levyn leveys mm:</label>
           <input type="text" placeholder="Levyn leveys mm*" id="new_materiallevys" > <br>
           <label for="new_materialcode">Levyn pituus mm:</label>
           <input type="text" placeholder="Levyn pituus mm*" id="new_materialpituus" > <br>
           <label for="new_materialcode">Thickness mm:</label>
           <input type="text" placeholder="Thickness mm*" id="new_materialthickness" > <br>
           <label for="new_materialcode">Structure:</label>
           <input type="text" placeholder="Structure*" id="new_materialstructure" > <br>
           <fieldset class="c-form-row">
              <input type="radio" id="new_material_color_one" name="new_material_color" value="Musta">
              <label for="new_material_color_one">Musta</label>
              <input type="radio" id="new_material_color_two" name="new_material_color" value="Valkoinen">
              <label for="new_material_color_two">Valkoinen </label>
              <div onclick="s__newmaterial();" class="ready_btn btn">Lisää uusi materiaali</div>
        </div>
        <div class="col-6">
        <div id="app" class="form-horizontal">
        <h2>Valitse väri</h2>
        <colorpicker :color="defaultColor" v-model="defaultColor" placeholder="Valitse väri" />
        </div>
        </div>
     </div>
     </fieldset>
  </section>
  <input type="text" hidden name="s_settings" id="s_settings">
  <input type="text" hidden name="s_materials" id="s_materials">
  <button class="ready_btn finish_btn" type="submit" onclick="s_synchronize();">Valmis</button>
</form>
<!-- </div> -->
<!-- </section> -->
<script>
  function i_synchronize() {
    var _systems = document.querySelector("#-systems").value;
    var systems_ = document.getElementsByName('-systems');
    _s = _systems.split(",");

    for (var i = _s.length - 1; i >= 0; i--) {
      // console.log("S D: " + _s[i].replace('"','').toLowerCase().replace('"',''));
      for (var j = systems_.length - 1; j >= 0; j--) {
        if((_s[i].replace('"','').toLowerCase().replace('"','')) == (systems_[j].innerText).toLowerCase().replace('"','')) {
          // document.getElementById(systems_[j].htmlFor).click();
          systems_[j].click();

        }
        // console.log("S J: " + (systems_[j].innerText).toLowerCase().replace('"',''));
      }
      
    }
  }
  window.addEventListener("load", (event) => {
    i_synchronize();
  });
</script>
 <?php include('./footer.php') ?>
