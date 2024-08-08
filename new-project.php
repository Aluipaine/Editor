<?php
include('vendor/config.php');
// THIS IS THE MAIN PAGE FOR CREATING THE PROJECT IN THE EDITOR
include('header.php');

?>

<style>
   main {
      display: none;
   }

   ul {
      display: flex;
      flex-direction: row;
      /* justify-content: center; */
      overflow-x: scroll;
      width: 100%
   }

   ul li {
      display: flex;
      align-items: center;
      width: 200px;
      background: #fafafa;
      padding: 10px 24px;
      border-radius: 30px;

      margin: 0 10px;
   }
</style>
<form action="vendor/create.php" method="post" id="new_project__form">

   <section id="new_project">
         <div class="form-subgroup main">
            <label>Projektin nimi: </label>
            <input type="text" name="project_name" class="form-control project_name_slugfrom" value="" required oninput="slugify__prname();">
         </div>
         <div class="form-subgroup main">
            <label for="project_name_slugto">Projektin linkki: </label>
            <div class="row project__linkrow">
               <b>https://editori.westface.fi/</b><input type="text" name="project_slug" class="form-control project_name_slugto" id="project_name_slugto" value="">
            </div>
         </div>
       <fieldset class="tiedot_textareas">
           <div class="form-group">
               <div class="form-subgroup">
                <label for="project_type">Tyyppi:</label>
                <select name="project_type" id="project_type" value="Huone/seinä">
                  <option value="Huone/seinä">Huone/seinä</option>
                  <option value="Julkisivu">Julkisivu</option>
                </select>
               </div>
               <div class="form-subgroup">
                   <label for="tiedot_projektista">Tiedot projektista</label>
                   <textarea rows="4" type="text" id="tiedot_projektista" name="tiedot_projektista" class="form-control"></textarea>
               </div>
               <div class="form-subgroup">
                   <label for="tiedot_huoneista">Tiedot huoneista</label>
                   <textarea rows="4" type="text" id="tiedot_huoneista" name="tiedot_huoneista" class="form-control"></textarea>
               </div>
               <div class="form-subgroup">
                   <label for="tiedot_tekijasta">Tiedot tekijästä</label>
                   <textarea rows="4" type="text" id="tiedot_tekijasta" name="tiedot_tekijasta" class="form-control"></textarea>
               </div>
           </div>
       </fieldset>
         <fieldset>
            <?php
               $options = "";
               $users = mysqli_query($db, "SELECT * FROM `users`");
               $users = mysqli_fetch_all($users);
                  foreach ($users as $p) {
                     // give_numbers(this,`'.$p[6].'`,`'.$p[7].'`,`'.$p[8].'`);
                     $options.='<option value="'.$p[1].'">'.$p[1].'</option>';
                  }
                  foreach ($users as $p) {
                     // give_numbers(this,`'.$p[6].'`,`'.$p[7].'`,`'.$p[8].'`);
                     echo '<input type="hidden" value="'.$p[1].'|'.$p[6].'|'.$p[7].'|'.$p[3].'|'.$p[4].'|'.$p[5].'" class="'.str_replace(" ","___",strtolower($p[1])).'_userselection">';
                  }

               $name = '';
               for ($x = 1; $x <= 11; $x++) {
                  if($x == 1) {
                     $name = 'Pääurakoitsija';
                  }
                  else if($x == 2) {
                     $name = 'Asiakas';
                  }
                  else if($x == 3) {
                     $name = 'Myyjä';
                  }
                  else if($x == 4) {
                     $name = 'Asentaja';
                  }
                  else if($x == 5) {
                     $name = 'Mittamies';
                  }
                  else if($x == 6) {
                     $name = 'Sähköurakoitsija';
                  }
                  else if($x == 7) {
                     $name = 'LVI-urakoitsija';
                  }
                  else if($x == 8) {
                     $name = 'Lasitusfirma';
                  }
                  else if($x == 9) {
                     $name = 'Palokatko';
                  }
                  else if($x == 10) {
                     $name = 'Arkkitehti';
                  }
                  else if($x == 11) {
                     $name = 'Rakennesuunnittelija';
                  }

                  echo '<div class="form-group">
                     <div class="form-subgroup">
                        <label>'.$name.': </label>
                        <input type="text" list="prc_'.$x.'_list" name="prc_'.$x.'" class="form-control" value="" required  onchange="give_numbers(this.value,'.$x.');">
                     </div>
                     <div class="form-subgroup"><label>'.$name.' puh: </label>
                     <input type="text" list="" name="prc_'.$x.'_puh" class="form-control prc_'.$x.'_puh" value="" required></div>
                     <div class="form-subgroup"><label>'.$name.' email: </label>
                     <input type="text" list="" name="prc_'.$x.'_email" class="form-control prc_'.$x.'_email" value="" required></div>
                     <div class="form-subgroup">
                        <label for="prc_'.$x.'_role">Rooli: </label>
                        <select name="prc_'.$x.'_role" id="prc_'.$x.'_role">
                           <option value="saaja" class="saaja">Viestien saaja</option>
                           <option value="katsoja" class="katsoja">Katsoja</option>
                           <option value="kommentointi" class="kommentointi">Kommentointi</option>
                           <option value="mittaus"  class="mittaus">Mittamies</option>
                        </select>
                     </div>
                     <div class="form-subgroup">
                        <h5>Saako katsoa kaikki projektin tiedot?</h5>
                        <div class="row-reversed">
                           <label for="prc_'.$x.'_permission">Kyllä</label>
                           <input name="prc_'.$x.'_permission" type="checkbox" id="prc_'.$x.'_permission" class="standard_checkbox" value="1">
                        </div>
                        <h5>Poista näkymässä projektilla</h5>
                        <div class="row-reversed">
                           <label for="prc_'.$x.'_hiding">Kyllä</label>
                           <input name="prc_'.$x.'_hiding" type="checkbox" id="prc_'.$x.'_hiding" class="standard_checkbox" value="1">
                        </div>
                     </div>
                  </div>';

                  echo '<datalist id="prc_'.$x.'_list">
                     '.$options.'
                  </datalist>';
               }
            ?>


            <div class="button f_contactadding_btn" onclick="creation_henkilolisays();">
               Lisää uusi henkilö projektiin
            </div>

            <input type="text" list="" name="a_rooms" id="a_rooms" style="display:none;">
            <input type="text" list="" name="b_rooms" id="b_rooms" style="display:none;">
            <input type="text" list="" name="c_rooms" id="c_rooms" style="display:none;">
            <input type="text" list="" name="d_rooms" id="d_rooms" style="display:none;">
            <input type="text" list="" name="e_rooms" id="e_rooms" style="display:none;">
            <input type="text" list="" name="f_rooms" id="f_rooms" style="display:none;">
            <input type="text" list="" name="g_rooms" id="g_rooms" style="display:none;">
            <input type="text" list="" name="h_rooms" id="h_rooms" style="display:none;">


            <input type="text" list="" name="a_rooms_nowork" id="a_rooms_nowork" style="display:none;">
            <input type="text" list="" name="b_rooms_nowork" id="b_rooms_nowork" style="display:none;">
            <input type="text" list="" name="c_rooms_nowork" id="c_rooms_nowork" style="display:none;">
            <input type="text" list="" name="d_rooms_nowork" id="d_rooms_nowork" style="display:none;">
            <input type="text" list="" name="e_rooms_nowork" id="e_rooms_nowork" style="display:none;">
            <input type="text" list="" name="f_rooms_nowork" id="f_rooms_nowork" style="display:none;">
            <input type="text" list="" name="g_rooms_nowork" id="g_rooms_nowork" style="display:none;">
            <input type="text" list="" name="h_rooms_nowork" id="h_rooms_nowork" style="display:none;">

         </fieldset>
         <div onclick='$("#new_project").hide();$("#new_project").slideUp(200);$("#roomconfig_first").slideDown(200);$("#roomconfig_first").show();' class="next_btn btn ready_btn">Jatka eteenpäin</div>
      </div>
   </section>

   <section id="roomconfig_first">
      <h1>Lataa projektin Suunnitelmat</h1>
      <div class="first__container container">
         <?php
            for ($x = 1; $x <= 6; $x++) {
               if($x == 1) {
               $projectsetting__fileheader = "Kaupalliset asiakirjat";
               }
               elseif($x == 2) {
               $projectsetting__fileheader = "Työmaan asiakirjat";
               }
               elseif($x == 3) {
               $projectsetting__fileheader = "Arkkitehtisuunnitelmat";
               }
               elseif($x == 4) {
               $projectsetting__fileheader = "Rakennesuunnitelmat";
               }
               elseif($x == 5) {
               $projectsetting__fileheader = "Omat suunnitelmat";
               }
               elseif($x == 6) {
               $projectsetting__fileheader = "Muut asiakirjat";
               }

               $x_ = str_replace("6", "six", str_replace("5", "five", str_replace("4", "four", str_replace("3", "three", str_replace("2", "two", str_replace("1", "one", $x))))));

               echo '<div class="form-group">
               <h4>'.$projectsetting__fileheader.'</h4>
               <input type="file" accept="application/pdf" class="project__settings_uploadinput" id="files-'.$x_.'" name="files-'.$x_.'[]" multiple>
               <div id="preview-'.$x_.'" class="'.$x_.'_previewfiles">'.$files.'</div>
               <input type="hidden" name="'. strtolower(str_replace("ö","o",str_replace("ä","a",str_replace(" ","_",str_replace("?","",$projectsetting__fileheader))))).'" id="'.$x_.'_previewfiles_value">
               <input name="'.$x_.'" type="button" id="uploadsubmit-'.$x_.'" class="project__creation_uploadsend" value="Lähetä '.strtolower(mb_convert_encoding($projectsetting__fileheader,'HTML-ENTITIES','utf-8')).'">
               </div>';
            }
         ?>

      </div>
      <div class="row">
            <div class="col-6">
               <div class="prev_btn" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#new_project').slideDown(200);$('#new_project').show();">Edellinen</div>
            </div>
            <div class="col-6">
               <div class="next_btn btn ready_btn" onclick='$("#roomconfig_first").hide();$("#roomconfig_first").slideUp(200);$("#roomconfig_second").slideDown(200);$("#roomconfig_second").show();' class="next_btn btn ready_btn">Seuraava</div>
            </div>
      </div>
   </section>

   <section id="roomconfig_second" class="container">
      <h2>Valitse Presetti projektille:</h2>

      <div class="row start_set">

         <input type="hidden" id="adminpreset__current_type" name="adminpreset__current_type">
         <fieldset class="adminpreset_settings">
            <?php
            $s_data = mysqli_query($db, "SELECT * FROM `settings__templates`");
            $s_da = mysqli_fetch_all($s_data);
            $s_data = $s_da;

            foreach ($s_data as $key => $s) {
               echo '
                  <input name="admin__presets" type="radio" class="tmpbtn" value="'.$s[1].'" id="template-button-'.$s[1].'" data-letterid="'. $s[0] .'">
                  <label onclick="preset_id=' . $s[0] .';document.querySelector(`#adminpreset__current_type`).value = (`'.$s[1].'`);" for="template-button-'.$s[1].'" data-letterid="'. $s[0] .'">'.$s[1].'</label>';
            }
            ?>
         </fieldset>
      </div>
      <div class="row">
          <div class="col-6"><div class="prev_btn" onclick="$('#roomconfig_second').hide();$('#roomconfig_second').slideUp(200);$('#roomconfig_first').slideDown(200);$('#roomconfig_first').show();">Edellinen</div></div>
          <div class="col-6">
            <div onclick='$("#roomconfig_second").hide();$("#roomconfig_second").slideUp(200);$("#roomconfig_third").slideDown(200);$("#roomconfig_third").show();' class="next_btn btn ready_btn">Seuraava</div>
            <button class="finalization_btn ready_btn">Aloita projekti</button>
          </div>
      </div>
   </section>

    <?php
        $customer_contacts = $db->query("SELECT * FROM `customer_contacts` GROUP BY `email`");
        if ($customer_contacts && $customer_contacts->num_rows) {
            $customer_contacts = $customer_contacts->fetch_all(MYSQLI_ASSOC);
            $customer_contacts = array_map(function ($val) {
                $val["phone"] = $val["tel"];
                return $val;
            }, $customer_contacts);
        }
        else {
            $customer_contacts = [];
        }
    ?>
    <script>
        let customer_contacts_list = <?= json_encode($customer_contacts, JSON_UNESCAPED_UNICODE) ?>;
    </script>
    <datalist id="customer_contacts_list">
        <?php foreach ($customer_contacts as $contact): ?>
        <option value="<?= $contact["name"] ?>"><?= $contact["name"] ?></option>
        <?php endforeach; ?>
    </datalist>

   <section id="roomconfig_third" class="project__roomcount">
      <h1>Kerrosten, rappujen, ja huoneiden valinta </h1>
      <div class="rappus">
          <div class="per50 floatleft coderdy rappu-1" id="A_" style="opacity: 1;">
              <div class="showsizer tablepreview">
                  <div class="roomconfig_second_prefixes roomconfig__titlerow">
                     <h5>R1 <br> <input type="text" maxlength="15" list="" id="a_val" name="a_prefix" value="ARAK-"></h5>
                     <h5>R1 nro
                        <br>
                        <input type="number" onchange="z=parseFloat(this.value);" maxlength="15" list="" id="a_nextnum" name="a_nextnum" value="1" class="prefixnum" onclick="change__byhands(this)"  data-alt="a_nextnum_2|a_nextnum_3" oninput="change__toggling(this,1)">
                        <br> TAI R1 kirjain <br>
                        <input type="text" onchange="z_alphabet=this.value.charCodeAt(0) - 64;"  maxlength="15" list="" id="a_nextnum_2" name="a_nextnum_2" value="" data-alt="a_nextnum|a_nextnum_3" class="prefixnum closed" oninput="change__toggling(this,2)">
                        <br>TAI R1 custom <br>
                        <input type="text" maxlength="15" list="" id="a_nextnum_3" name="a_nextnum_3" value="" data-alt="a_nextnum_2|a_nextnum" class="prefixnum closed" oninput="change__toggling(this,3)"></h5>
                     <h5>R2 <br> <input type="text" maxlength="15" list="" id="a_nextnum_second" name="a_prefix" value=""></h5>
                     <h5>
                        R2 nro<br>
                        <input type="number" maxlength="15" list="" onchange="z=parseFloat(this.value);" id="a_nextnum_second_1" name="a_nextnum_second_1" value="" class="prefixnum" data-alt="a_nextnum_second_2|a_nextnum_second_3" oninput="change__toggling(this,1)">
                        <br>TAI R2 kirjain<br>
                        <input type="text" maxlength="15" list="" onchange="z_alphabet=this.value.charCodeAt(0) - 64;" id="a_nextnum_second_2" name="a_nextnum_second_2" value="" class="prefixnum" data-alt="a_nextnum_second_1|a_nextnum_second_3" oninput="change__toggling(this,2)">
                        <br>TAI R2 custom <br>
                        <input type="text" maxlength="15" list="" id="a_nextnum_second_3" name="a_nextnum_second_3" value="" data-alt="a_nextnum_second_1|a_nextnum_second_2" class="prefixnum" oninput="change__toggling(this,3)">

                     </h5>
                     <h5>R3 <br> <input type="text" maxlength="15" list="" id="a_nextnum_third" name="a_nextnum_third" value="" class="prefixnum prefixnum_second"></h5>
                     <h5>
                        R3 nro<br>
                        <input type="number" maxlength="15" onchange="z=parseFloat(this.value);" list="" id="a_nextnum_third_1" name="a_nextnum_third_1" value="" class="prefixnum" data-alt="a_nextnum_third_2|a_nextnum_third_3" oninput="change__toggling(this,1)">
                        <br>TAI R3 kirjain<br>
                        <input type="text" maxlength="15" onchange="z_alphabet=this.value.charCodeAt(0) - 64;" list="" id="a_nextnum_third_2" name="a_nextnum_third_2" value="" class="prefixnum" data-alt="a_nextnum_third_1|a_nextnum_third_3" oninput="change__toggling(this,2)">
                        <br>TAI R3 custom <br>
                        <input type="text" maxlength="15" list="" id="a_nextnum_third_3" name="a_nextnum_third_3" value="" data-alt="a_nextnum_third_1|a_nextnum_third_2" class="prefixnum" oninput="change__toggling(this,3)">
                     </h5>
                     <div class="greenbtn newproject__addinglvl" onclick="add_new_lvl(this);">Lisää uusi kerros</div>
                      <div class="customer_contacts">
                          <div class="contact">
                              <label>
                                  <span>Nimi</span>
                                  <input type="text" list="customer_contacts_list" class="customer_name">
                              </label>
                              <label>
                                  <span>Puh</span>
                                  <input type="tel" class="customer_phone">
                              </label>
                              <label>
                                  <span>Email</span>
                                  <input type="email" class="customer_email">
                              </label>
                              <label>
                                  <span>Tyyppi</span>
                                  <select class="customer_type">
                                      <option value="asukas">Asukas</option>
                                      <option value="osakas">Osakas</option>
                                      <option value="omistaja">Omistaja</option>
                                  </select>
                              </label>
                          </div>
                          <button class="add_contact greenbtn">Uusi kontaktirivi</button>
                      </div>
                  </div>
                  <div class="table_size_chooser sizer">
                      <div class="SizeChooser">
                        <table class="table">
                           <tbody>
                              <?php
                                 for ($i=1; $i >= 1; $i--) {
                                    echo '<tr data-no="'.$i.'">';
                                    $i_ = $i;
                                    for ($a=1; $a < 21; $a++) {
                                       if($a == 1) {
                                          echo '<td class="noindex"><label>'.$i_.'</label></td>';
                                       }
                                       echo '<td ><input type="checkbox" name="room_name"><label></label></td>';
                                    }
                                    echo "</tr>";
                                 }
                              ?>
                           </tbody>
                        </table>
                        <table class="table_downstairs table">
                           <tbody>
                              <?php
                                 for ($i=1; $i >= 0; $i--) {
                                    $i_="";
                                    $_i = $i-1;
                                    if($i == 1) {
                                       $i_ = "K?";
                                       echo '<tr class="K" data-no="K"><td class="noindex" onclick="open_k(this);"><label>'.$i_.'</label></td>';
                                    }
                                    else if($i == 0) {
                                       $i_ = "AK?";
                                       echo '<tr class="AK" data-no="AK"><td class="noindex" onclick="open_ak(this);"><label>'.$i_.'</label></td>';
                                    }


                                    for ($a=1; $a < 21; $a++) {

                                       echo '<td class="hidden"><input type="checkbox" name="room_name" style="display: none;"><label></label></td>';
                                    }
                                    echo "</tr>";
                                 }
                              ?>
                           </tbody>
                        </table>
                      </div>

                  </div>
                  <!-- <div class="topbar">
                      <span class="colcount">
                      <b>0</b>
                      <span></span>
                      </span> Asuntoa rapussa
                      <span class="rowcount">
                      <b>0</b>
                      <span></span>
                      </span> kerroksessa
                      <input type="hidden" placeholder="Huoneistojen määrä rapussa?" id="room_qty" name="rooms_per_rappu" value="">
                      <div class="clear"></div>
                  </div> -->
                  <!-- end of sizer -->
              </div>
              <div class="rappu-1_btn plus_btn" onclick="plusone_room(1);" value="1">
                  +
              </div>
          </div>
          <div class="per50 floatleft coderdy rappu-2" id="B_"></div>
          <div class="per50 floatleft coderdy rappu-3" id="C_"></div>
          <div class="per50 floatleft coderdy rappu-4" id="D_"></div>
          <div class="per50 floatleft coderdy rappu-5" id="E_"></div>
          <div class="per50 floatleft coderdy rappu-6" id="F_"></div>
          <div class="per50 floatleft coderdy rappu-7" id="G_"></div>
          <div class="per50 floatleft coderdy rappu-8" id="H_"></div>
          <div class="clear"></div>
      </div>
      <div id="tabledisplay" class="per100" style="display: none;">
          <div class="container">
              <div class="table-responsive">
              </div>
          </div>
      </div>
      <div class="form-group pohjakierros">
          <label for="pohjakierros">"Ei työtä"-merkkaus käyttöön</label><input type="checkbox" id="pohjakierros" onclick="pohjakierros_function();">
      </div>
      <div class="rappu_more" onclick="plusone_rappu();">
          Lisää rappu
      </div>

      <input type="hidden" name="a_pr_rap" class="pr_rap a_pr_rap" value="">
      <input type="hidden" name="a_pr_krs" class="pr_krs a_pr_krs" value="">
      <input type="hidden" name="b_pr_rap" class="pr_rap b_pr_rap" value="">
      <input type="hidden" name="b_pr_krs" class="pr_krs b_pr_krs" value="">
      <input type="hidden" name="c_pr_rap" class="pr_rap c_pr_rap" value="">
      <input type="hidden" name="c_pr_krs" class="pr_krs c_pr_krs" value="">
      <input type="hidden" name="d_pr_rap" class="pr_rap d_pr_rap" value="">
      <input type="hidden" name="d_pr_krs" class="pr_krs d_pr_krs" value="">
      <input type="hidden" name="e_pr_rap" class="pr_rap e_pr_rap" value="">
      <input type="hidden" name="e_pr_krs" class="pr_krs e_pr_krs" value="">
      <input type="hidden" name="f_pr_rap" class="pr_rap f_pr_rap" value="">
      <input type="hidden" name="f_pr_krs" class="pr_krs f_pr_krs" value="">
      <div class="row">
          <div class="col-6"><div class="prev_btn" onclick="$('#roomconfig_third').hide();$('#roomconfig_third').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();">Edellinen</div></div>
          <div class="col-6">
              <div class="col-6"><button class="finalization_btn ready_btn">Aloita projekti</button></div>
          </div>
      </div>
   </section>

   <section id="roomconfig_fourth">
      <div class="row">
          <div class="col-6"><div class="prev_btn" onclick="$('#roomconfig_fourth').hide();$('#roomconfig_fourth').slideUp(200);$('#roomconfig_third').slideDown(200);$('#roomconfig_third').show();">Edellinen</div></div>
          <div class="col-6">
            <div onclick='$("#roomconfig_fourth").hide();$("#roomconfig_fourth").slideUp(200);$("#roomconfig_fifth").slideDown(200);$("#roomconfig_fifth").show();' class="next_btn btn ready_btn">Seuraava</div>
          </div>
      </div>
   </section>

   <section id="roomconfig_fifth">
      <div class="row">
         <div class="col-6"><div class="prev_btn"  onclick="$('#roomconfig_fifth').hide();$('#roomconfig_fifth').slideUp(200);$('#roomconfig_fourth').slideDown(200);$('#roomconfig_fourth').show();">Edellinen</div></div>
         <div class="col-6">
            <button class="ready_btn">Aloita projekti</button>
         </div>
      </div>
   </section>


</form>

 <div class="question-container recl-container out" id="question__popup">
    <div class="modal-background">
      <div class="modal">
        <section class="comment__section">
           <h2>Levytetäänkö muutkin seinät?</h2>
            <div class="modal_close_btn modal-no" onclick="document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');">Ei</div>
            <div class="modal_close_btn modal-yes" onclick="document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');">Kyllä</div>
        </section>
      </div>
    </div>
  </div>

<div class="table_size_chooser sizer" id="hiddentocopy" style="display:none;">
   <div class="SizeChooser">
      <table class="table">
         <tbody>
               <?php
               for ($i=1; $i >= 1; $i--) {
                  echo '<tr data-no="'.$i.'">';
                  $i_ = $i;
                  for ($a=1; $a < 21; $a++) {
                     if($a == 1) {
                        echo '<td class="noindex"><label>'.$i_.'</label></td>';
                     }
                     echo '<td ><input type="checkbox" name="room_name"><label></label></td>';
                  }
                  echo "</tr>";
               }
               ?>
         </tbody>
      </table>
      <table class="table_downstairs table">
         <tbody>
            <?php
               for ($i=1; $i >= 0; $i--) {
                  $i_="";
                  $_i = $i-1;
                  if($i == 1) {
                     $i_ = "K?";
                     echo '<tr class="K" data-no="K"><td class="noindex" onclick="open_k(this);"><label>'.$i_.'</label></td>';
                  }
                  else if($i == 0) {
                     $i_ = "AK?";
                     echo '<tr class="AK" data-no="AK"><td class="noindex" onclick="open_ak(this);"><label>'.$i_.'</label></td>';
                  }


                  for ($a=1; $a < 21; $a++) {

                     echo '<td class="hidden"><input type="checkbox" name="room_name" style="display: none;"><label></label></td>';
                  }
                  echo "</tr>";
               }
            ?>
         </tbody>
      </table>
   </div>
</div>
<script>
   rappu=0
   var rooms_per_rap = 3;
   function plusone_room(e) {
      rooms_per_rap+=1;
      rappu=e;
      console.log(rappu);

      // var classes = e.parentElement.classList;
      let elems = document.querySelectorAll(".rappu-"+rappu+ " tr > td:nth-child("+rooms_per_rap+")");

      elems.forEach(myFunction);

      function myFunction(item) {
        item.style.display = 'block'
      }

   }

    function NullTheInputs(item) {
         item.parentElement.classList ="";
         item.value = "";
      }
   var plusone_rappu_o=1;
   var plusone_rappu_z=0;
   function plusone_rappu() {
      plusone_rappu_z+=1;
      if(plusone_rappu_z==1) {
         plusone_rappu_Z = "A_";
      }
      else if(plusone_rappu_z==2) {
         plusone_rappu_Z = "B_";
      }

      else if(plusone_rappu_z==3) {
         plusone_rappu_Z = "C_";
      }

      else if(plusone_rappu_z==4) {
         plusone_rappu_Z = "D_";
      }

      else if(plusone_rappu_z==5) {
         plusone_rappu_Z = "E_";
      }

      else if(plusone_rappu_z==6) {
         plusone_rappu_Z = "F_";
      }

      else if(plusone_rappu_z==7) {
         plusone_rappu_Z = "G_";
      }

      else if(plusone_rappu_z==8) {
         plusone_rappu_Z = "H_";
      }

      else if(plusone_rappu_z==9) {
         alert("Maksimissaan rappuja voi olla vain 8.");
         return;
      }

      var rappus = document.querySelector(".rappus");


      plusone_rappu_o=plusone_rappu_z+1;
      if(plusone_rappu_o==1) {
         plusone_rappu_O = "A_";
      }
      else if(plusone_rappu_o==2) {
         plusone_rappu_O = "B_";
      }

      else if(plusone_rappu_o==3) {
         plusone_rappu_O = "C_";
      }

      else if(plusone_rappu_o==4) {
         plusone_rappu_O = "D_";
      }

      else if(plusone_rappu_o==5) {
         plusone_rappu_O = "E_";
      }

      else if(plusone_rappu_o==6) {
         plusone_rappu_O = "F_";
      }

      else if(plusone_rappu_o==7) {
         plusone_rappu_O = "G_";
      }

      else if(plusone_rappu_o==8) {
         plusone_rappu_O = "H_";
      }
      else if(plusone_rappu_o==9) {
         alert("Maksimissaan rappuja voi olla vain 8.");
         return;
      }

      console.log(plusone_rappu_o);
      console.log(plusone_rappu_O);
      // var el = document.createElement('div');
      // el.innerHTML = "+";
      // el.classList = "rappu-"+(plusone_rappu_z+1)+"_btn plus_btn";
      // el.value = (plusone_rappu_Z+1);
      // el.setAttribute("onclick","plusone_room("+(plusone_rappu_Z)+")");





      setTimeout(console.log("ok"), 1000);
      oke='#'+plusone_rappu_O;

      let inuts=document.querySelectorAll(oke + " h2 input");

      inuts.forEach(removeElems);

      function removeElems(item) {
        item.remove();
      }


      var i1 = document.createElement('input');
      i1.value = plusone_rappu_O+"RAK-";

      i1.setAttribute("id",plusone_rappu_O.toLowerCase()+"val");
      i1.setAttribute("name",plusone_rappu_O.toLowerCase()+"prefix");
      i1.setAttribute("maxlength", 10);


      var i2 = document.createElement('input');
      // el.classList = "prefixnum";
      i2.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum");
      i2.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum");
      i2.setAttribute("onchange","z" + plusone_rappu_O.toLowerCase()+"alphabet=this.value.charCodeAt(0) - 64;");
      i2.classList.add("prefixnum");
      i2.setAttribute("maxlength", 10);
      i2.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum_2" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_3";
      i2.setAttribute("oninput", "change__toggling(this,1)");
      i2.setAttribute("value",1);
      i2.setAttribute("type","number");
      i2.setAttribute("min",0);


      var i2_additional = document.createElement('input');
      var i2_additional2 = document.createElement('input');
      // el.classList = "prefixnum";

      i2_additional.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_2");
      i2_additional.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_2");
      i2_additional.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_2");
      i2_additional.classList.add("prefixnum");
      i2_additional.classList.add("closed");
      i2_additional.setAttribute("maxlength", 10);
      i2_additional.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_3";
      i2_additional.setAttribute("oninput", "change__toggling(this,2)");
      i2_additional.value = "";

      i2_additional2.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_3");
      i2_additional2.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_3");
      i2_additional2.classList.add("prefixnum");
      i2_additional2.classList.add("closed");
      i2_additional2.setAttribute("maxlength", 10);
      i2_additional2.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_2";
      i2_additional2.setAttribute("oninput", "change__toggling(this,3)");
      i2_additional2.value = "";

      var i3 = document.createElement('input');
      // el.classList = "prefixnum";
      i3.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_second");
      i3.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_second");
      i3.setAttribute("maxlength", 10);
      i3.value = "";

      var i3_additional = document.createElement('input');
      var i3_additional2 = document.createElement('input');
      var i3_additional3 = document.createElement('input');

      i3_additional.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_second_1");
      i3_additional.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_second_1");
      i3_additional.setAttribute("onchange","z" + plusone_rappu_O.toLowerCase().replace("_","")+"=parseFloat(this.value);");
      i3_additional.classList.add("prefixnum");
      // i3_additional.classList.add("");
      i3_additional.setAttribute("maxlength", 10);
      i3_additional.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum_second_3" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_second_2";
      i3_additional.setAttribute("oninput", "change__toggling(this,1)");
      i3_additional.value = "";
      // el.classList = "prefixnum";

      i3_additional2.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_second_2");
      i3_additional2.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_second_2");
      i3_additional2.setAttribute("onchange","z" + plusone_rappu_O.toLowerCase()+"alphabet=this.value.charCodeAt(0) - 64;");
      i3_additional2.classList.add("prefixnum");
      // i3_additional2.classList.add("");
      i3_additional2.setAttribute("maxlength", 10);
      i3_additional2.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum_second_1" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_second_3";
      i3_additional2.setAttribute("oninput", "change__toggling(this,2)");
      i3_additional2.value = "";

      i3_additional3.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_second_3");
      i3_additional3.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_second_3");
      i3_additional3.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_second_3");

      i3_additional3.classList.add("prefixnum");
      // i3_additional3.classList.add("");
      i3_additional3.setAttribute("maxlength", 10);
      i3_additional3.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum_second_1" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_second_2";
      i3_additional3.setAttribute("oninput", "change__toggling(this,3)");
      i3_additional3.value = "";

      var i4 = document.createElement('input');
      // el.classList = "prefixnum";
      i4.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_third");
      i4.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_third");
      i4.setAttribute("maxlength", 10);
      i4.value = "";

      var i4_additional = document.createElement('input');
      var i4_additional2 = document.createElement('input');
      var i4_additional3 = document.createElement('input');

      i4_additional.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_third_1");
      i4_additional.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_third_1");
      i4_additional.setAttribute("onchange","z" + plusone_rappu_O.toLowerCase().replace("_","")+"=parseFloat(this.value);");
      i4_additional.classList.add("prefixnum");
      // i4_additional.classList.add("");
      i4_additional.setAttribute("maxlength", 10);
      i4_additional.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum_third_3" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_third_2";
      i4_additional.setAttribute("oninput", "change__toggling(this,1)");
      i4_additional.value = "";

      i4_additional2.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_third_2");
      i4_additional2.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_third_2");
      i4_additional2.setAttribute("onchange","z" + plusone_rappu_O.toLowerCase()+"alphabet=this.value.charCodeAt(0) - 64;");
      i4_additional2.classList.add("prefixnum");
      // i4_additional2.classList.add("");
      i4_additional2.setAttribute("maxlength", 10);
      i4_additional2.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum_third_1" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_third_3";
      i4_additional2.setAttribute("oninput", "change__toggling(this,2)");
      i4_additional2.value = "";

      i4_additional3.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_third_3");
      i4_additional3.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_third_3");
      i4_additional3.classList.add("prefixnum");
      // i4_additional3.classList.add("");
      i4_additional3.setAttribute("maxlength", 10);
      i4_additional3.dataset.alt = plusone_rappu_O.toLowerCase()+"nextnum_third_1" + "|" + plusone_rappu_O.toLowerCase()+"nextnum_third_2";
      i4_additional3.setAttribute("oninput", "change__toggling(this,3)");
      i4_additional3.value = "";


      var i5 = document.createElement('div');
      i5.classList.add("newproject__addinglvl");
      i5.classList.add("greenbtn");
      i5.setAttribute("onclick",'add_new_lvl(this);');
      i5.innerHTML = "Lisää uusi kerros";

      const grandparent = document.querySelector("#"+plusone_rappu_O);
      // grandparent.classList = ("per50 floatleft coderdy rappu-2");
      // grandparent.setAttribute('id', plusone_rappu_O);

      const parent = document.createElement("div");
      parent.classList = ("showsizer tablepreview");

      const roomconfig_second_prefixes = document.createElement("div");
      roomconfig_second_prefixes.classList.add("roomconfig_second_prefixes");
      roomconfig_second_prefixes.classList.add("roomconfig__titlerow");

      const roomgconfig_h2_1 = document.createElement("h5");
      const roomgconfig_h2_2 = document.createElement("h5");
      const roomgconfig_h2_3 = document.createElement("h5");
      const roomgconfig_h2_3_a = document.createElement("h5");
      const roomgconfig_h2_4 = document.createElement("h5");
      const roomgconfig_h2_4_a = document.createElement("h5");

      roomgconfig_h2_1.innerHTML = "R1 <br>";
      roomgconfig_h2_2.innerHTML = "R1 nro <br>";
      roomgconfig_h2_3.innerHTML = "R2 <br>";
      roomgconfig_h2_4.innerHTML = "R3 <br>";

      let clonedMenu = document.querySelector("#hiddentocopy").cloneNode(true);
      clonedMenu.style.display = "block";
      clonedMenu.setAttribute("id","");

      rappus.appendChild(grandparent);
      grandparent.appendChild(parent);
      parent.appendChild(roomconfig_second_prefixes);
      parent.appendChild(clonedMenu);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_1);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_1);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_2);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_3);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_3_a);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_4);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_4_a);
      roomgconfig_h2_1.appendChild(i1);
      roomgconfig_h2_2.appendChild(i2);

      roomgconfig_h2_2.innerHTML += "<br>TAI R1 kirjain <br>";
      roomgconfig_h2_2.appendChild(i2_additional);
      roomgconfig_h2_2.innerHTML += "<br>TAI R1 custom <br>";
      roomgconfig_h2_2.appendChild(i2_additional2);

      roomgconfig_h2_3.appendChild(i3);
      roomgconfig_h2_3_a.innerHTML += "R2 nro <br>";
      roomgconfig_h2_3_a.appendChild(i3_additional);
      roomgconfig_h2_3_a.innerHTML += "<br>TAI R2 kirjain <br>";
      roomgconfig_h2_3_a.appendChild(i3_additional2);
      roomgconfig_h2_3_a.innerHTML += "<br>TAI R2 custom <br>";
      roomgconfig_h2_3_a.appendChild(i3_additional3);
      roomgconfig_h2_4.appendChild(i4);

      roomgconfig_h2_4_a.innerHTML += "R3 nro <br>";
      roomgconfig_h2_4_a.appendChild(i4_additional);
      roomgconfig_h2_4_a.innerHTML += "<br>TAI R3 kirjain <br>";
      roomgconfig_h2_4_a.appendChild(i4_additional2);
      roomgconfig_h2_4_a.innerHTML += "<br>TAI R3 custom <br>";
      roomgconfig_h2_4_a.appendChild(i4_additional3);
      roomconfig_second_prefixes.appendChild(i5);

       let customer_contact = document.querySelector(".customer_contacts").cloneNode(true);
       customer_contact.querySelectorAll(".contact:not(:first-child)").forEach(v => v.remove());
       customer_contact.querySelectorAll("input").forEach(v => {
           v.value = "";
       });
       customer_contact.querySelectorAll("select").forEach(v => {
           v.selectedIndex = 0;
       });
       roomconfig_second_prefixes.append(customer_contact);

   }
</script>


<script>

    // Huone risti
    const inputsName = document.querySelectorAll('.inputname');
    const allLinksName = document.querySelectorAll('.house__wall_status');

    inputsName.forEach(item => {
      item.addEventListener('input', () => {
         const room = item.getAttribute('data-room');
         allLinksName.forEach(element => {
            if (element.getAttribute('data-room') === room) {
               element.innerHTML = item.value;
            }
         });
      });
    });

    function changeHeights(num) {
      const allHeights = document.querySelectorAll('.wall_height');

      allHeights.forEach(function (item) {
         item.value = num;
      });

      document.querySelector("#house > div:nth-child(1) > div").style.height = num/10 + "px";
      document.querySelector("#house > div:nth-child(3) > div").style.height = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.height = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.height = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.height = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.height = num/10 + "px";
    }


    function changeWidths(num) {
      const allWidths = document.querySelectorAll('.wall_width');

      allWidths.forEach(function (item) {
         item.value = num;
      });

      document.querySelector("#house > div:nth-child(1) > div").style.width = num/10 + "px";
      document.querySelector("#house > div:nth-child(3) > div").style.width = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = num/10 + "px";
      // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = num/10 + "px";
      // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num/10 + "px";
    }

    function changeWidths_2(num) {
      const allWidths = document.querySelectorAll('.wall_width_2');

      allWidths.forEach(function (item) {
         item.value = num;
      });

      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num/10 + "px";
    }

    function change_roof() {
      const roof_height = document.querySelector('#room_one_roof_h').value;
      const roof_width = document.querySelector('#room_one_roof_w').value;

      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");

      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(roof_height);
         changeWidths(roof_width);
      });



      document.querySelector("#house > div:nth-child(1) > div").style.width = roof_width/10 + "px";
    }

    function change_floor() {
      const floor_height = document.querySelector('#room_one_floor_h').value;
      const floor_width = document.querySelector('#room_one_floor_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(floor_height);
         changeWidths(floor_width);
      });



      document.querySelector("#house > div:nth-child(3) > div").style.width = floor_width/10 + "px";


    }

    function change_a() {
      const a_height = document.querySelector('#room_one_a_h').value;
      const a_width = document.querySelector('#room_one_a_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(a_height);
         changeWidths(a_width);
      });

      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = a_width/10 + "px";
    }

    function change_b() {
      const b_height = document.querySelector('#room_one_b_h').value;
      const b_width = document.querySelector('#room_one_b_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(b_height);
         changeWidths_2(b_width);
      });


      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = b_width/10 + "px";
    }

    function change_c() {
      const c_height = document.querySelector('#room_one_c_h').value;
      const c_width = document.querySelector('#room_one_c_w').value;

      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(c_height);
         changeWidths(c_width);
      });

      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = c_width/10 + "px";
    }

    function change_d() {
      const d_height = document.querySelector('#room_one_d_h').value;
      const d_width = document.querySelector('#room_one_d_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(d_height);
         changeWidths_2(d_width);
      });


      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = d_width/10 + "px";
    }
</script>

<?php include('footer.php') ?>
