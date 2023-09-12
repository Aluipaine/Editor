<?php

$settings_fetched = mysqli_query($db, "SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'settings'");
$settings_aukot = mysqli_fetch_all($settings_fetched);


$settings_array = explode(",", $settings_aukot[0][0]);
?>

<input type="hidden" value="<?php echo implode(" ", $settings_aukot[0]); ?>" name="aukko_settings" id="aukko_settings" class="aukko_settings">
<div class="recl-container del_from_comments" id="reclamation__popup">
   <div class="modal-background">
      <div class="modal">
         <section>
            <h2>Reklamaatiot ja huomiot</h2>
         </section>
         <section>
            <h4>Huomiot</h4>
            <fieldset>
               <input id="m__a_sahko" name="mitta__huomiot" type="checkbox" value="Sähkö">
               <label for="m__a_sahko">Sähkö</label>
               <input id="m__a_putki" name="mitta__huomiot" type="checkbox" value="Putki">
               <label for="m__a_putki">Putki</label>
               <input id="m__a_tornado" name="mitta__huomiot" type="checkbox" value="Tornado">
               <label for="m__a_tornado">Tornado</label>
            </fieldset>
         </section>
         <section class="comment__section">
            <h4>Lähetä kommentti</h4>
            <textarea name="mittapiste_comment" id="mittapiste_comment" cols="30" rows="10" style="resize: none;"></textarea>
            <div class="row">
               <div class="col-6">
                  <h6>Keneltä</h6>
                  <input name="mittapiste_comment_from" id="mittapiste_comment_from" type="text" value="<?php echo $_GET['user']; ?>">
               </div>
               <div class="col-6">
                  <h6>Kenelle</h6>
                  <input name="mittapiste_comment_to" id="mittapiste_comment_to" type="text">
               </div>
            </div>
         </section>
         <!--  <section class="comment__section">
           <h4>Reklamoitavaa:</h4>
           <textarea name="mittapiste_comment" id="mittapiste_comment" cols="30" rows="10" style="resize: none;"></textarea>
        </section> -->
         <div class="form-group"><input type="checkbox" id="comment__importance"><label for="comment__importance">Onko kriittinen?</label></div>
         <div class="modal_close_btn drawarea__controls_btn" id="" onclick="addproblemstatus(this);">Valmis</div>
      </div>
   </div>
</div>
<?php
if (isset($_GET["role"]) && $_GET["role"] == 'mittaus') {
} else {
   echo '<script>document.querySelector(".del_from_comments").remove();</script>';
}
?>

<div class="aukko_container">
   <div class="modal-background">
      <div class="modal">
         <div class="modal_close_btn" onclick="open_aukko_settings(false)"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path>
            </svg></div>
         <div class="row" style="opacity: 0.1;display: none;">
            <div class="greenbtn">Listan värit</div>
            <div class="greenbtn">Rangan laadut</div>
            <div class="greenbtn">VR Ranka</div>
            <div class="greenbtn">OR Ranka</div>
            <div class="greenbtn">YR Ranka</div>
            <div class="greenbtn">AR Ranka</div>
            <div class="greenbtn">Aukon smyykin paksuus (rakenteen paksuus)</div>
            <!-- ranka+levyt+epdm -->
         </div>
         <h2>Aukko-asetukset</h2>
         <?php
         // It's some modified version of the code from welcome-marko.php, but if u need u can just copy it from welcome-marko.php, if you modify it. It will works anyway.
         // P.S. I'm not responsible for any damage. This action can make new vulnerabilities in this full of vulnerabilities project. Thanks to previous developer for this!
         $am_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_mallit'");
         $am_template = mysqli_query($db, "SELECT `meta_value` FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 'aukko_template'")->fetch_assoc()["meta_value"];
         $am_da = mysqli_fetch_all($am_data);

         $_am = json_decode($am_da[0][3]);
         $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
         $letter = 0;
         foreach ($_am as $am_1) {
            if ($letters[$letter] == $am_template) {
               echo '<table class="table aukko-table" id="aukko-table-' . $letters[$letter] . '"><tr><td>Aukkojen tyypit</td><td>Vasen max</td><td>Vasen min</td> <td>Oikea max</td> <td>Oikea min</td> <td>Ylä max</td> <td>Ylä min</td><td>Ala max</td> <td>Ala min</td><td>+/- jotain</td><td>+/- jotain</td><td>+/- jotain</td><td>+/- jotain</td></tr>';
               $count_rows = 0;

             
               foreach ($am_1 as $am_2) {

                  $count++;

                  echo "<td>" . "<input type='text' name='_s_aukko_" . $letters[$letter] . "' value='" . $am_2 . "' class='lineinput'>" . "</td>";
                  if ($count == 13) {
                     echo "</tr>";
                     // echo "<tr>";
                     $count_rows+=1;
                     if($count_rows == 1) {
                        echo "<tr class='ikkuna_info'>";
                     }
                     elseif($count_rows == 2) {
                        echo "<tr class='ovi_info'>";
                     } 
                     elseif($count_rows == 3) {
                        echo "<tr class='ilmastointi_info'>";
                     }
                     elseif($count_rows == 4) {
                        echo "<tr class='pilari_info'>";
                     }
                     elseif($count_rows == 5) {
                        echo "<tr class='alue_erikoisranka_info bottom-border palkki_info'>";
                     }
                     else {
                        echo "<tr class=" . $count_rows .">";
                     }
                     $count = 0;
                  }
               }
               echo "</tr>";
               echo '</table>';
            }

            $letter++;
         }

         ?>

         <!-- <table class="myinfo group-0">
            <tr>
               <td>Aukon tyyppi</td>
               <td>Vasen max</td>
               <td>Vasen min</td>
               <td>Oikea max</td>
               <td>Oikea min<td>
               <td>Ylä max</td>
               <td>Ylä min</td>
               <td>Ala max</td>
               <td>Ala min<td>

               <td style="opacity: 0.1;display: none;">VR Listan nimi</td>
               <td style="opacity: 0.1;display: none;">VR Listan väri</td> 
               <td style="opacity: 0.1;display: none;">VR Rangan nimi</td> 
               <td style="opacity: 0.1;display: none;">VR Rangan laatu</td>

               <td style="opacity: 0.1;display: none;">OR Listan nimi</td>
               <td style="opacity: 0.1;display: none;">OR Listan väri</td> 
               <td style="opacity: 0.1;display: none;">OR Rangan nimi</td> 
               <td style="opacity: 0.1;display: none;">OR Rangan laatu</td> 

               <td style="opacity: 0.1;display: none;">YR Listan nimi</td>
               <td style="opacity: 0.1;display: none;">YR Listan väri</td> 
               <td style="opacity: 0.1;display: none;">YR Rangan nimi</td> 
               <td style="opacity: 0.1;display: none;">YR Rangan laatu</td> 

               <td style="opacity: 0.1;display: none;">AR Listan nimi</td>
               <td style="opacity: 0.1;display: none;">AR Listan väri</td> 
               <td style="opacity: 0.1;display: none;">AR Rangan nimi</td> 
               <td style="opacity: 0.1;display: none;">AR Rangan laatu</td> 


            </tr>
         </table>
         <table class="myinfo group-1">
            <tr class="ikkuna_info">

               <td><input type="text" name="aukko_setting" value="Ikkuna" class="lineinput"></td>
               
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[0]) > 2 ? $settings_array[0] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[1]) > 2 ? $settings_array[1] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[2]) > 2 ? $settings_array[2] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[3]) > 2 ? $settings_array[3] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[4]) > 2 ? $settings_array[4] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[5]) > 2 ? $settings_array[5] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[6]) > 2 ? $settings_array[6] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[7]) > 2 ? $settings_array[7] : '-25'); ?>" class="aukko__toindex lineinput"></td>


               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunalista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunaranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunalista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunaranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunalista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunaranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunalista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="Ikkunaranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>

            </tr>
            <tr class="ovi_info">
               <td><input type="text" name="aukko_setting" value="Ovi" class="lineinput"></td>

               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[8]) > 2 ? $settings_array[8] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[9]) > 2 ? $settings_array[9] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[10]) > 2 ? $settings_array[10] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[11]) > 2 ? $settings_array[11] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[12]) > 2 ? $settings_array[12] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[13]) > 2 ? $settings_array[13] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[14]) > 2 ? $settings_array[14] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[15]) > 2 ? $settings_array[15] : '-25'); ?>" class="aukko__toindex lineinput"></td>


               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ovilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="oviranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ovilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="oviranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ovilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="oviranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ovilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="oviranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>


            </tr>
            <tr class="ilmastointi_info">
               <td><input type="text" name="aukko_setting" value="Ilmastointi" class="lineinput"></td>

               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[16]) > 2 ? $settings_array[16] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[17]) > 2 ? $settings_array[17] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[18]) > 2 ? $settings_array[18] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[19]) > 2 ? $settings_array[19] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[20]) > 2 ? $settings_array[20] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[21]) > 2 ? $settings_array[21] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[22]) > 2 ? $settings_array[22] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[23]) > 2 ? $settings_array[23] : '-25'); ?>" class="aukko__toindex lineinput"></td>


               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="ilmastointiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               

            </tr>
            <tr class="pilari_info">
               <td><input type="text" name="aukko_setting" value="Pilari" class="lineinput"></td>

               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[24]) > 2 ? $settings_array[24] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[25]) > 2 ? $settings_array[25] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[26]) > 2 ? $settings_array[26] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[27]) > 2 ? $settings_array[27] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[28]) > 2 ? $settings_array[28] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[29]) > 2 ? $settings_array[29] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[30]) > 2 ? $settings_array[30] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[31]) > 2 ? $settings_array[31] : '-25'); ?>" class="aukko__toindex lineinput"></td>


               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilarilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilariranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilarilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilariranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilarilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilariranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilarilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="pilariranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
              
            </tr>
            <tr class="alue_erikoisranka_info bottom-border palkki_info">
               <td><input type="text" name="aukko_setting" value="Palkki" class="lineinput"></td>

               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[32]) > 2 ? $settings_array[32] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[33]) > 2 ? $settings_array[33] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[34]) > 2 ? $settings_array[34] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[35]) > 2 ? $settings_array[35] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[36]) > 2 ? $settings_array[36] : '+25'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[37]) > 2 ? $settings_array[37] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[38]) > 2 ? $settings_array[38] : '0'); ?>" class="aukko__toindex lineinput"></td>
               <td><input type="text" name="aukko_setting" value="<?php echo (strlen($settings_array[39]) > 2 ? $settings_array[39] : '-25'); ?>" class="aukko__toindex lineinput"></td>


               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkilista" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="palkkiranka" class="lineinput"></td>
               <td style="opacity: 0.1;display: none;"><input type="text" name="aukko_setting" value="-" class="lineinput"></td>
               
            </tr>
         </table> -->

         <div class="modal_close_btn drawarea__controls_btn" onclick="open_aukko_settings(false);submitprogress('','save','','','','aukkotallennus')">Tallenna</div>
      </div>
   </div>
</div>
<!-- <div class="aukko_container">
      <div class="modal-background">
      <div class="modal">
         <div class="modal_close_btn" onclick="open_aukko_settings(false)"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
         <h2>Lista- ja ranka-asetuksia</h2>
         <div class="drawarea__controls_btn m_btn" style="background: #FEB700;font-size: 14px;width: 100%;border-radius: 1px;display: flex;align-items: center;justify-content: center;color: #fff;cursor: pointer;padding: 19px 0;border: unset;">järjestelmä standard</div>
         <table class="myinfo group-0">
            <tr>
               <td>Reuna</td>
               <td>Ranka nimi</td>
               <td>Ranka, muutokset mod. mitasta (mm)</td>
               <td>Pituus 1</td>
               <td>Pituus 2</td>
               <td>Pituus 3</td>
               <td>Leveys</td>
               <td>Korkeus</td>
               <td>Lisää 1</td>
               <td>Lisää 2</td>
               <td>Listan nimi</td>
               <td>Listan väli</td>
               <td>Väri</td>
               <td>Muu</td>
            </tr>
            <tr class="levy_rangat_info levyar_rangat_info">
               <td><input type="text" name="aukko_setting" value="Levy, AR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S25" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="aukko_setting" value="2400" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3000" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3600" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="66mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="28mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="SL251" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="6mm" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               
            </tr>
            <tr class="levy_rangat_info levyyr_rangat_info">
               <td><input type="text" name="aukko_setting" value="Levy, YR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S24" class="lineinput"></td> 
               <td><input type="text" name="aukko_setting" value="-6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="aukko_setting" value="2400" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3000" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3600" class="lineinput"></td>
               
               <td><input type="text" name="aukko_setting" value="66mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="28mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="SL251" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="6mm" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
            <tr class="levy_rangat_info levyvr_rangat_info">
               <td><input type="text" name="aukko_setting" value="Levy, VR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S13" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="aukko_setting" value="2400" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3000" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3600" class="lineinput"></td>
               
               <td><input type="text" name="aukko_setting" value="66mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="28mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="SL251" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="-6mm" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
            <tr class="bottom-border levy_rangat_info levyor_rangat_info">
               <td><input type="text" name="aukko_setting" value="Levy, OR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S14" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="-6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="aukko_setting" value="2400" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3000" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="3600" class="lineinput"></td>
               
               <td><input type="text" name="aukko_setting" value="66mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="28mm" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="SL251" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="-6mm" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
         </table>
         <table class="myinfo group-1">
            <tr class="ikkuna_rangat_info ikkunaar_rangat_info">
               <td><input type="text" name="aukko_setting" value="Ikkuna, AR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S27" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="-6" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
            <tr class="ikkuna_rangat_info ikkunayr_rangat_info">
               <td><input type="text" name="aukko_setting" value="Ikkuna, YR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S20" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="6" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
            <tr class="ikkuna_rangat_info ikkunavr_rangat_info">
               <td><input type="text" name="aukko_setting" value="Ikkuna, VR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S23" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="-6" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
            <tr class="bottom-border ikkuna_rangat_info ikkunaor_rangat_info">
               <td><input type="text" name="aukko_setting" value="Ikkuna, OR" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S23" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="6" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
         </table>
         <table class="myinfo group-2">
            <tr class="alue_rangat_info alue_erikoisranka_info">
               <td><input type="text" name="aukko_setting" value="Erikoisranka" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S29" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="15" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Liila">Liila</option><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
            <tr class="alue_rangat_info alue_saumaranka_info">
               <td><input type="text" name="aukko_setting" value="Saumaranka" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S29" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="15" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="EP20" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Punainen">Punainen</option><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
            <tr class="alue_rangat_info alue_valiranka_info">
               <td><input type="text" name="aukko_setting" value="Väliranka" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="S23" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="EP21" class="lineinput"></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
               <td><select name="aukko_setting"><option value="Vihreä">Vihreä</option><option value="Liila">Liila</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="aukko_setting" value="?" class="lineinput"></td>
            </tr>
         </table>
        <div class="modal_close_btn drawarea__controls_btn" onclick="open_aukko_settings(false)">Tallenna</div>
        <span>Huomiot: 1. "Aukkopuu", mihin? 2. Rankojen paksuudet, pituudet, leveydet? 3. Lisää 1 ja Lisää 2, mitä meinaa? 4. Muu- mitä toimintoja tuosta seuraa? 5. Saumarangat erikseen?</span>
      </div>
      </div>
   </div> -->


<!-- canvas -->
<script src='/js/p5.min.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.1/xlsx.full.min.js"></script>





<script src='/js/jquery.min.js'></script>
<script src='/js/clipboard.min.js'></script>
<!-- Marko new row btn function -->


<!-- MARKO -->
<script src="/js/jstemplates/mrarko.js"></script>


<!-- 2_1 -->
<script src="/js/roller.js"></script>
<script src="/js/roller_1.js"></script>
<script src="/js/roller_2.js"></script>
<script src="/js/roller_3.js"></script>



<!-- MAIN JS FUNCTIONS -->
<script src="/js/main.js"> </script>

<!-- JS FUNCTIONS FOR PROJECT AND ROOMS -->
<script src="/js/jstemplates/creation.js"></script>


<script src="/js/jstemplates/0.js"></script>


<!-- JS FUNCTIONS 1.  -->
<script src="/js/jstemplates/1.js"></script>

<!-- JS FUNCTIONS 2.  -->
<script src="/js/jstemplates/2.js"></script>

<!-- JS FUNCTIONS 3.  -->
<script src="/js/jstemplates/3.js"></script>

<!-- JS FUNCTIONS 4.  -->
<script src="/js/jstemplates/4.js"></script>

<!-- JS FUNCTIONS 5.  -->
<script src="/js/jstemplates/5.js"></script>

<!-- JS FUNCTIONS 6.  -->
<script src="/js/jstemplates/6.js"></script>

<!-- JS FUNCTIONS 7.  -->
<script src="/js/jstemplates/7.js"></script>

<!-- JS FUNCTIONS 8.  -->
<script src="/js/jstemplates/8.js"></script>

<!-- JS FUNCTIONS 9.  -->
<script src="/js/jstemplates/9.js"></script>

<!-- JS FUNCTIONS Walls.  -->
<script src="/js/jstemplates/walls.js"></script>

<?php
if (isset($_GET["role"]) && $_GET["role"] == 'mittaus') {
} else {
   echo '<script src="/js/jstemplates/commenting__file.js"></script>';
}

?>


<!-- Technical piece of code for Development -->
<script>
   // $('#step_drawscreen').val('drawscreen_section_four');

   // $("#project_start").hide();
   // refresh__drawcontrols();updatearea();

   // document.querySelector("#drawarea_h").value = "3200";
   // document.querySelector("#drawarea_w").value = "6000";

   // setTimeout(changesize(),100);


   // setTimeout(document.querySelector("body > section.row.drawarea__section > div.drawarea__section_container > div.drawarea__controls.drawarea__controls_five > div:nth-child(3)").click(),100);



   // setTimeout(drawarea.querySelector("#drawscreen_section_tyostot > div > div:nth-child(2) > section:nth-child(20) > section > section:nth-child(4) > fieldset > div > div:nth-child(1) > label:nth-child(6)").click(),500);
   // setTimeout( drawarea.querySelector("#drawscreen_section_tyostot > div > div:nth-child(2) > section:nth-child(20) > section > section:nth-child(4) > fieldset > div > div:nth-child(2) > label:nth-child(6)").click(),500);
   // setTimeout(() => {
   //   document.querySelector("#kiinniketys__pkiinnike_three").click();
   // }, "1000");

   // setTimeout(() => {
   //   document.querySelector("#kiinniketys__vkiinnike_three").click();
   // }, "1000");

   // function jumptothelast() {
   //      rangoita();$('#step_drawscreen').val('drawscreen_section_seven');

   //   }

   // setTimeout(() => {
   //   drawarea.querySelector("#drawscreen_section_tyostot > div > div:nth-child(2) > section:nth-child(20) > section > section:nth-child(5) > div").click();
   // }, "1000");

   // setTimeout(() => {
   //   refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_esikatselu');

   //   // jumptothelast();
   // }, 1000);


   // document.querySelector("#copiedcanvases")
</script>