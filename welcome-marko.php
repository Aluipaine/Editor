<?php
// Initialize the session
session_start();

include('vendor/config.php');

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
<?php
$s_settings_data = json_decode(mysqli_query($db, 'SELECT `meta_value` FROM `projectmeta` WHERE `id`=100 AND `meta_key`="s_settings"')->fetch_assoc()["meta_value"], true);
?>
<!-- <form action="vendor/settings__update.php" method="post"> -->
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


        $s_ = str_replace("]", "", $_s);
        $s = str_replace("[", "", $s_);

        ?>
        <input type="text" id="-systems" value='<?php echo ($s[0]); ?>' hidden>
        <!-- <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems">
           <input type="text" id="systems" value="" name="-systems"> -->


        <input type="checkbox" id="marko_one" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Classic vaaka'}" value="<?php echo $s_settings_data[0][0]; ?>" <?php echo $s_settings_data[0][0] != "" ? "checked=" : "" ?>>
        <label for="marko_one">Classic vaaka</label>
        <input type="checkbox" id="marko_two" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Classic pysty'}" value="<?php echo $s_settings_data[0][1]; ?>" <?php echo $s_settings_data[0][1] != "" ? "checked" : "" ?>>
        <label for="marko_two">Classic pysty</label>
        <input type="checkbox" id="marko_three" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Beta'}" value="<?php echo $s_settings_data[0][2]; ?>" <?php echo $s_settings_data[0][2] != "" ? "checked" : "" ?>>
        <label for="marko_three">Beta</label>
        <input type="checkbox" id="marko_four" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Alpha vaaka'}" value="<?php echo $s_settings_data[0][3]; ?>" <?php echo $s_settings_data[0][3] != "" ? "checked" : "" ?>>
        <label for="marko_four">Alpha vaaka</label>
        <input type="checkbox" id="marko_five" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Alpha pysty'}" value="<?php echo $s_settings_data[0][4]; ?>" <?php echo $s_settings_data[0][4] != "" ? "checked" : "" ?>>
        <label for="marko_five">Alpha pysty</label>
        <input type="checkbox" id="marko_six" name="systems" onclick="if(this.value !== ''){this.value=''} else {this.value = 'Delta'}" value="<?php echo $s_settings_data[0][5]; ?>" <?php echo $s_settings_data[0][5] != "" ? "checked" : "" ?>>
        <label for="marko_six">Delta </label>
      </fieldset>
    </section>
    <section id="hole_set">
      <h2>Aukko-asetukset</h2>
      <div class="hole_settings">
        <div id="hole_settings_objects">
          <?php
          $am_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_mallityypit'");
          $am_template = mysqli_query($db, "SELECT `meta_value` FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_template'")->fetch_assoc()["meta_value"];
          $am_da = mysqli_fetch_all($am_data);

          $am = $am_da[0][3];

          $_am = explode(",", $am);
          foreach ($_am as $z) {
            $am_1 = str_replace("{", "", str_replace("}", "", $z));
            $am_2 = str_replace("[", "", str_replace("]", "", $am_1));
            $am_3 = str_replace('"', '', $am_2);

            echo '<input type="radio" name="template-button" value="' . $am_3 . '" id="template-button-' . $am_3 . '" ' . ($am_3 == $am_template ? 'checked' : '') . '>' . '<label onclick="s_change_malli(\'' . $am_3 . '\');" style="padding: 10px 15px;outline: 1px solid black;border-radius: 5px;margin: 0 5px;cursor: pointer;" for="template-button-' . $am_3 . '">' . $am_3 . '</label>';
          }

          ?>
        </div>
        <div class="hole_setting" onclick="s_newmalli();">Uusi malli</div>
      </div>
      <?php
      $am_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_mallit'");
      $am_template = mysqli_query($db, "SELECT `meta_value` FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_template'")->fetch_assoc()["meta_value"];
      $am_da = mysqli_fetch_all($am_data);

      $_am = json_decode($am_da[0][3]);
      $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $letter = 0;

      foreach ($_am as $am_1) {
        echo '<table ' . ($letters[$letter] != $am_template ? 'style="display: none;"' : '') . ' class="table aukko-table" id="aukko-table-' . $letters[$letter] . '"><td>Aukkojen tyypit</td><td>Nimi</td><td>Ranka Vasenreuna aukko +/-</td><td>Ranka Oikeareuna aukko +/-</td> <td>Ranka Alareuna aukko +/-</td> <td>Ranka Yläreuna aukko +/-</td> <td>Vasenreuna lista +/-</td> <td>Oikeareuna lista +/-</td><td>Alareuna lista +/-</td> <td>Yläreuna lista +/-</td><td>+/- jotain</td><td>+/- jotain</td><td>+/- jotain</td><td>+/- jotain</td>';

        echo "<tr>";
        $count = 0;
        foreach ($am_1 as $am_2) {

          $count++;

          echo "<td>" . "<input type='text' name='_s_aukko_" . $letters[$letter] . "' value='" . $am_2 . "' class='lineinput'>" . "</td>";
          if ($count == 14) {
            echo "</tr>";
            echo "<tr>";
            $count = 0;
          }
        }
        echo "</tr>";
        echo '</table>';

        $letter++;
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
      <!-- <div class="more__settings">
          R. AS
        </div> -->
      <table>
        <tr>
          <td>Reikien tyypit</td>
          <td>Nimi</td>
          <td>Reikä pyöreä r</td>
          <td>Näytä editorissa</td>
          <!-- <td>Laske kitit</td>
            <td>Jotain tänne</td>
            <td>Jotain tänne</td>
            <td>Jotain tänne</td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_1" value="<?php echo $s_settings_data[9][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_1" value="<?php echo $s_settings_data[9][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_1" value="<?php echo $s_settings_data[9][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_1" value="<?php echo $s_settings_data[9][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__one_one" <?php echo $s_settings_data[9][3] != "" ? 'checked' : '' ?>><label for="morehole__one_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="morehole__zero_two" value="" class="lineinput" id="morehole__one_two"><label for="morehole__one_two"></label></td>
            <td><input type="text" name="_s_reika_1" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_1" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_1" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_2" value="<?php echo $s_settings_data[10][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_2" value="<?php echo $s_settings_data[10][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_2" value="<?php echo $s_settings_data[10][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_2" value="<?php echo $s_settings_data[10][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__one_one" <?php echo $s_settings_data[10][3] != "" ? 'checked' : '' ?>><label for="morehole__one_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="morehole__one_two" value="" class="lineinput" id="morehole__one_two"><label for="morehole__one_two"></label></td>
            <td><input type="text" name="_s_reika_2" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_2" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_2" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_3" value="<?php echo $s_settings_data[11][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_3" value="<?php echo $s_settings_data[11][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_3" value="<?php echo $s_settings_data[11][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_3" value="<?php echo $s_settings_data[11][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__two_one" <?php echo $s_settings_data[11][3] != "" ? 'checked' : '' ?>><label for="morehole__two_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="morehole__two_two" value="" class="lineinput" id="morehole__two_two"><label for="morehole__two_two"></label></td>
            <td><input type="text" name="_s_reika_3" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_3" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_3" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_4" value="<?php echo $s_settings_data[12][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_4" value="<?php echo $s_settings_data[12][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_4" value="<?php echo $s_settings_data[12][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_4" value="<?php echo $s_settings_data[12][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__three_one" <?php echo $s_settings_data[12][3] != "" ? 'checked' : '' ?>><label for="morehole__three_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="morehole__three_two" value="" class="lineinput" id="morehole__three_two"><label for="morehole__three_two"></label></td>
            <td><input type="text" name="_s_reika_4" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_4" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_4" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_5" value="<?php echo $s_settings_data[13][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_5" value="<?php echo $s_settings_data[13][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_5" value="<?php echo $s_settings_data[13][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_5" value="<?php echo $s_settings_data[13][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__four_one" <?php echo $s_settings_data[13][3] != "" ? 'checked' : '' ?>><label for="morehole__four_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="morehole__four_two" value="" class="lineinput" id="morehole__four_two"><label for="morehole__four_two"></label></td>
            <td><input type="text" name="_s_reika_5" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_5" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_5" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_6" value="<?php echo $s_settings_data[14][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_6" value="<?php echo $s_settings_data[14][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_6" value="<?php echo $s_settings_data[14][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_6" value="<?php echo $s_settings_data[14][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__five_one" <?php echo $s_settings_data[14][3] != "" ? 'checked' : '' ?>><label for="morehole__five_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="s__moreholeparameter" value="" class="lineinput" id="morehole__five_two"><label for="morehole__five_two"></label></td>
            <td><input type="text" name="_s_reika_6" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_6" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_6" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_7" value="<?php echo $s_settings_data[15][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_7" value="<?php echo $s_settings_data[15][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_7" value="<?php echo $s_settings_data[15][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_7" value="<?php echo $s_settings_data[15][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__six_one" <?php echo $s_settings_data[15][3] != "" ? 'checked' : '' ?>><label for="morehole__six_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_7" value="" class="lineinput" id="morehole__six_two"><label for="morehole__six_two"></label></td>
            <td><input type="text" name="_s_reika_7" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_7" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_7" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_8" value="<?php echo $s_settings_data[16][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_8" value="<?php echo $s_settings_data[16][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_8" value="<?php echo $s_settings_data[16][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_8" value="<?php echo $s_settings_data[16][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__seven_one" <?php echo $s_settings_data[16][3] != "" ? 'checked' : '' ?>><label for="morehole__seven_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_8" value="" class="lineinput" id="morehole__seven_two"><label for="morehole__seven_two"></label></td>
            <td><input type="text" name="_s_reika_8" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_8" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_8" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_9" value="<?php echo $s_settings_data[17][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_9" value="<?php echo $s_settings_data[17][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_9" value="<?php echo $s_settings_data[17][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_9" value="<?php echo $s_settings_data[17][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__eight_one" <?php echo $s_settings_data[17][3] != "" ? 'checked' : '' ?>><label for="morehole__eight_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_9" value="" class="lineinput" id="morehole__eight_two"><label for="morehole__eight_two"></label></td>
            <td><input type="text" name="_s_reika_9" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_9" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_9" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_10" value="<?php echo $s_settings_data[18][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_10" value="<?php echo $s_settings_data[18][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_10" value="<?php echo $s_settings_data[18][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_10" value="<?php echo $s_settings_data[18][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__nine_one" <?php echo $s_settings_data[18][3] != "" ? 'checked' : '' ?>><label for="morehole__nine_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_10" value="" class="lineinput" id="morehole__nine_two"><label for="morehole__nine_two"></label></td>
            <td><input type="text" name="_s_reika_10" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_10" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_10" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_11" value="<?php echo $s_settings_data[19][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_11" value="<?php echo $s_settings_data[19][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_11" value="<?php echo $s_settings_data[19][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_11" value="<?php echo $s_settings_data[19][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__ten_one" <?php echo $s_settings_data[19][3] != "" ? 'checked' : '' ?>><label for="morehole__ten_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_11" value="" class="lineinput" id="morehole__ten_two"><label for="morehole__ten_two"></label></td>
            <td><input type="text" name="_s_reika_11" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_11" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_11" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_12" value="<?php echo $s_settings_data[20][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_12" value="<?php echo $s_settings_data[20][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_12" value="<?php echo $s_settings_data[20][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_12" value="<?php echo $s_settings_data[20][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__eleven_one" <?php echo $s_settings_data[20][3] != "" ? 'checked' : '' ?>><label for="morehole__eleven_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_12" value="" class="lineinput" id="morehole__eleven_two"><label for="morehole__eleven_two"></label></td>
            <td><input type="text" name="_s_reika_12" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_12" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_12" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_13" value="<?php echo $s_settings_data[21][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_13" value="<?php echo $s_settings_data[21][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_13" value="<?php echo $s_settings_data[21][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_13" value="<?php echo $s_settings_data[21][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__twelve_one" <?php echo $s_settings_data[21][3] != "" ? 'checked' : '' ?>><label for="morehole__twelve_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_13" value="" class="lineinput" id="morehole__twelve_two"><label for="morehole__twelve_two"></label></td>
            <td><input type="text" name="_s_reika_13" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_13" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_13" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_14" value="<?php echo $s_settings_data[22][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_14" value="<?php echo $s_settings_data[22][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_14" value="<?php echo $s_settings_data[22][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_14" value="<?php echo $s_settings_data[22][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__thirteen_one" <?php echo $s_settings_data[22][3] != "" ? 'checked' : '' ?>><label for="morehole__thirteen_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_14" value="" class="lineinput" id="morehole__thirteen_two"><label for="morehole__thirteen_two"></label></td>
            <td><input type="text" name="_s_reika_14" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_14" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_14" value="" class="lineinput"></td> -->
        </tr>
        <tr>
          <td><input type="text" name="_s_reika_15" value="<?php echo $s_settings_data[23][0] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_15" value="<?php echo $s_settings_data[23][1] ?>" class="lineinput"></td>
          <td><input type="text" name="_s_reika_15" value="<?php echo $s_settings_data[23][2] ?>" class="lineinput"></td>
          <td><input type="checkbox" name="_s_reika_15" value="<?php echo $s_settings_data[23][3] != "" ? 'showoneeditor' : '' ?>" onclick="this.checked ? this.value = 'showoneeditor' : this.value = ''" class="lineinput" id="morehole__fourteen_one" <?php echo $s_settings_data[23][3] != "" ? 'checked' : '' ?>><label for="morehole__fourteen_one"></label></td>
          <!-- <td><input type="checkbox" onfocusin="this.value = 'kitti_showoneditor'" name="_s_reika_15" value="" class="lineinput" id="morehole__fourteen_two"><label for="morehole__fourteen_two"></label></td>
            <td><input type="text" name="_s_reika_15" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_15" value="" class="lineinput"></td>
            <td><input type="text" name="_s_reika_15" value="" class="lineinput"></td> -->
        </tr>
      </table>
    </div>

  </div>
  <!--       <div class="btn ready_btn" onclick="s__createnewrow_morehole();">Uusi rivi</div>
 -->
</section>
<h2 style="margin-top: 50px;">Sauma-asetukset</h2>
<section>
  <h4>Levytyksen suunta</h4>
  <section>
    <?php var_dump($s_settings_data[24]); ?>
    <fieldset>
      <input type="radio" id="settings__sauma_pysty" name="sauma__suunta" onclick="saumoitus__examplephoto()" value="0" <?php echo $s_settings_data[24] == "0" ? "checked" : "" ?>>
      <label for="settings__sauma_pysty">Levytys pystyyn</label>
      <input type="radio" id="settings__sauma_vaaka" name="sauma__suunta" onclick="saumoitus__examplephoto()" value="1" <?php echo $s_settings_data[24] == "1" ? "checked" : "" ?>>
      <label for="settings__sauma_vaaka">Levytys vaakaan</label>
    </fieldset>
  </section>
  <section>
    <h4>Saumoituksen tyyppi</h4>
    <fieldset>
      <input type="radio" id="settings__saumahanta-oik" name="sauma__xtype" onclick="saumoitus__examplephoto()" value="0" <?php echo $s_settings_data[25] == "0" ? "checked" : "" ?>>
      <label for="settings__saumahanta-oik">Vajaa levy oikealle</label>
      <input type="radio" id="settings__saumahanta-vas" name="sauma__xtype" onclick="saumoitus__examplephoto()" value="1" <?php echo $s_settings_data[25] == "1" ? "checked" : "" ?>>
      <label for="settings__saumahanta-vas">Vajaa levy vasemalle</label>
      <input type="radio" id="settings__saumahanta-tasoitus" name="sauma__xtype" onclick="saumoitus__examplephoto()" value="2" <?php echo $s_settings_data[25] == "2" ? "checked" : "" ?>>
      <label for="settings__saumahanta-tasoitus">Tasaleveys</label>
    </fieldset>
    <fieldset>
      <input type="radio" id="settings__saumahanta-yla" name="sauma__ytype" onclick="saumoitus__examplephoto()" value="0" <?php echo $s_settings_data[26] == "0" ? "checked" : "" ?>>
      <label for="settings__saumahanta-yla">Vajaa levy ylös</label>
      <input type="radio" id="settings__saumahanta-ala" name="sauma__ytype" onclick="saumoitus__examplephoto()" value="1" <?php echo $s_settings_data[26] == "1" ? "checked" : "" ?>>
      <label for="settings__saumahanta-ala">Vajaa levy alas</label>
      <input type="radio" id="settings__saumahanta-vaakatasoitus" name="sauma__ytype" onclick="saumoitus__examplephoto()" value="2" <?php echo $s_settings_data[26] == "2" ? "checked" : "" ?>>
      <label for="settings__saumahanta-vaakatasoitus">Tasakorkeus</label>
    </fieldset>
  </section>
  <section>
    <div class="row">
      <div class="col-6">
        <h4>Saumoitus</h4>
        <fieldset style="flex-direction: column;display: flex;" class="saumoitus__inputs">
          <input type="radio" id="saumoitus__sauma_one" name="sauma__saumoitus_x" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_two').checked = false;" value="0" <?php echo $s_settings_data[27] == "0" ? "checked" : "" ?>>
          <label for="saumoitus__sauma_one">Pystysaumat aukkojen yli</label>

          <input type="radio" id="saumoitus__sauma_two" name="sauma__saumoitus_x" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_one').checked = false;" value="1" <?php echo $s_settings_data[27] == "1" ? "checked" : "" ?>>
          <label for="saumoitus__sauma_two">Pystysaumat aukkojen mukaan </label>
        </fieldset>
        <fieldset style="flex-direction: column;display: flex;" class="saumoitus__inputs">
          <input type="radio" id="saumoitus__sauma_one_v" name="sauma__saumoitus_y" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_three').checked = false;" value="0" <?php echo $s_settings_data[28] == "0" ? "checked" : "" ?>>
          <label for="saumoitus__sauma_one_v">Vaakasaumat aukkojen yli</label>

          <input type="radio" id="saumoitus__sauma_three" name="sauma__saumoitus_y" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_one_v').checked = false;" value="1" <?php echo $s_settings_data[28] == "1" ? "checked" : "" ?>>
          <label for="saumoitus__sauma_three">Vaakasaumat aukkojen mukaan</label>
        </fieldset>



      </div>
      <div class="col-6">
        <h4>Rakennekuva</h4>
        <img src="/img/saumoitus/s1.jpg" id="sauma__saumoitus_photo" style="max-width: 100%;">
      </div>
    </div>
  </section>
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
      $sy_1 = str_replace("{", "", str_replace("}", "", $sy));
      $sy_2 = str_replace("[", "", str_replace("]", "", $sy_1));
      $sy_3 = str_replace('"', '', $sy_2);
      $sys = explode(",", $sy_3);

      // print_r($sys);
      echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="' . $sys[0] . '"><label style="color: white; background: ' . $sys[7] . ';">' . $sys[0] . '</label><input type="hidden" name="material_bg" value="' . $sys[7] . '"><input type="hidden" name="material_colour" value="' . $sys[7] . '"><input type="hidden" name="material_array" value="{' . $sys[0] . ',' . $sys[1] . ',' . $sys[2] . ',' . $sys[3] . ',' . $sys[4] . ',' . $sys[5] . ',' . $sys[6] . ',' . $sys[7] . '}"></div>';
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
      <input type="text" placeholder="Materiaalin nimi*" id="new_material"> <br>
      <label for="new_materialcode">Materiaalin koodi:</label>
      <input type="text" placeholder="Materiaalin koodi*" id="new_materialcode"> <br>
      <label for="new_materialcode">Levyn leveys mm:</label>
      <input type="text" placeholder="Levyn leveys mm*" id="new_materiallevys"> <br>
      <label for="new_materialcode">Levyn pituus mm:</label>
      <input type="text" placeholder="Levyn pituus mm*" id="new_materialpituus"> <br>
      <label for="new_materialcode">Thickness mm:</label>
      <input type="text" placeholder="Thickness mm*" id="new_materialthickness"> <br>
      <label for="new_materialcode">Structure:</label>
      <input type="text" placeholder="Structure*" id="new_materialstructure"> <br>
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
<form action="vendor/settings__update.php" method="post">
  <input type="text" hidden name="s_settings" id="s_settings">
  <input type="text" hidden name="s_materials" id="s_materials">
  <input type="text" hidden name="aukko_mallit" id="aukko_mallit">
  <input type="text" hidden name="aukko_mallityypit" id="aukko_mallityypit">
  <input type="text" hidden name="aukko_template" id="aukko_template">
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
        if ((_s[i].replace('"', '').toLowerCase().replace('"', '')) == (systems_[j].innerText).toLowerCase().replace('"', '')) {
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

  saumoitus__examplephoto();

  function saumoitus__examplephoto() {
    var examplephoto = document.getElementById("sauma__saumoitus_photo");
    if (document.getElementById("settings__sauma_pysty").checked) {
      examplephoto.src = "/img/saumoitus/s1.jpg";
    }
    if (document.getElementById("settings__sauma_vaaka").checked) {
      examplephoto.src = "/img/saumoitus/s1.jpg";
    }
    // other variables
    if (document.getElementById("settings__sauma_pysty").checked) {
      if (document.getElementById('settings__saumahanta-oik').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
          examplephoto.src = "/img/saumoitus/s1.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/s4.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked) {
          examplephoto.src = "/img/saumoitus/s2.jpg";
        } else if (document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/s3.jpg";
        }
      } else if (document.getElementById('settings__saumahanta-vas').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
          examplephoto.src = "/img/saumoitus/s1v.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/s4v.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked) {
          examplephoto.src = "/img/saumoitus/s2v.jpg";
        } else if (document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/s3v.jpg";
        }
      } else if (document.getElementById('settings__saumahanta-tasoitus').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
          examplephoto.src = "/img/saumoitus/s1t.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/s4t.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked) {
          examplephoto.src = "/img/saumoitus/s2t.jpg";
        } else if (document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/s3t.jpg";
        }
      }
    }
    if (document.getElementById("settings__sauma_vaaka").checked) {
      if (document.getElementById('settings__saumahanta-oik').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
          examplephoto.src = "/img/saumoitus/vs1.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/vs4.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked) {
          examplephoto.src = "/img/saumoitus/vs2.jpg";
        } else if (document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/vs3.jpg";
        }
      } else if (document.getElementById('settings__saumahanta-vas').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
          examplephoto.src = "/img/saumoitus/vs1v.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/vs4v.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked) {
          examplephoto.src = "/img/saumoitus/vs2v.jpg";
        } else if (document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/vs3v.jpg";
        }
      } else if (document.getElementById('settings__saumahanta-tasoitus').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
          examplephoto.src = "/img/saumoitus/vs1t.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/vs4t.jpg";
        } else if (document.getElementById("saumoitus__sauma_two").checked) {
          examplephoto.src = "/img/saumoitus/vs2t.jpg";
        } else if (document.getElementById("saumoitus__sauma_three").checked) {
          examplephoto.src = "/img/saumoitus/vs3t.jpg";
        }
      }
    }
  }
</script>
<?php include('./footer.php') ?>