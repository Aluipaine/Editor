<?php 
include('vendor/config.php');

include('header.php');
?>

<style>
   main {
      display: none;
   }
</style>

<form action="vendor/create.php" method="post" id="new_project__form">
    <section id="new_project">
         <div class="form-subgroup main">
            <label>Projektin nimi: </label>
            <input type="text" name="project_name" class="form-control" value=" " required>   
         </div>    
         <fieldset>
            <div class="form-group">
               <div class="form-subgroup">
                  <label>Pääurakoitsija: </label>
                  <input type="text" name="prc_1" class="form-control" value=" " required>
               </div>
               <div class="form-subgroup"><label>Pääurakoitsija puh: </label>
               <input type="text" name="prc_1_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Pääurakoitsija email: </label>
               <input type="text" name="prc_1_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_1_role">Rooli: </label>
                  <select name="prc_1_role" id="prc_1_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option>
                     <option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_1_permission">Kyllä</label>
                     <input name="prc_1_permission" type="checkbox" id="prc_1_permission" class="standard_checkbox" value="1">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_1_hiding">Kyllä</label>
                     <input name="prc_1_hiding" type="checkbox" id="prc_1_hiding" class="standard_checkbox" value="1">
                  </div>
                  
               </div>  

            </div>
            <div class="form-group">
               <div class="form-subgroup"><label>Asiakas: </label>
               <input type="text" name="prc_2" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Asiakas puh: </label>
               <input type="text" name="prc_2_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Asiakas email: </label>
               <input type="text" name="prc_2_email" class="form-control" value=" " required> </div>
               <div class="form-subgroup">
                  <label for="prc_2_role">Rooli: </label>
                  <select name="role" id="prc_2_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_2_permission">Kyllä</label>
                     <input type="checkbox" id="prc_2_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_2_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_2_hiding" class="standard_checkbox">
                  </div>
                  
               </div> 
            </div>
            <div class="form-group">
               <div class="form-subgroup"><label>Myyjä: </label>
               <input type="text" name="prc_3" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Myyjä puh: </label>
               <input type="text" name="prc_3_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Myyjä email: </label>
               <input type="text" name="prc_3_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_3_role">Rooli: </label>
                  <select name="role" id="prc_3_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_3_permission">Kyllä</label>
                     <input type="checkbox" id="prc_3_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_3_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_3_hiding" class="standard_checkbox">
                  </div>
                  
               </div> 
               
                  
            </div>
            <div class="form-group">
               <div class="form-subgroup"><label>Asentaja: </label>
               <input type="text" name="prc_4" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Asentaja puh: </label>
               <input type="text" name="prc_4_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"> <label>Asentaja email: </label>
               <input type="text" name="prc_4_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_4_role">Rooli: </label>
                  <select name="role" id="prc_4_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_4_permission">Kyllä</label>
                     <input type="checkbox" id="prc_4_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_4_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_4_hiding" class="standard_checkbox">
                  </div>
                  
               </div>  
               
                 
            </div>

            <div class="form-group">
               <div class="form-subgroup"><label>Mittamies: </label>
               <input type="text" name="prc_5" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Mittamies puh: </label>
               <input type="text" name="prc_5_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Mittamies email: </label>
               <input type="text" name="prc_5_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_5_role">Rooli: </label>
                  <select name="role" id="prc_5_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_5_permission">Kyllä</label>
                     <input type="checkbox" id="prc_5_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_5_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_5_hiding" class="standard_checkbox">
                  </div>
                  
               </div>  
               
                  
            </div>
            <div class="form-group">
               <div class="form-subgroup"><label>Sähköurakoitsija: </label>
               <input type="text" name="prc_6" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Sähköurakoitsija puh: </label>
               <input type="text" name="prc_6_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Sähköurakoitsija email: </label>
               <input type="text" name="prc_6_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_6_role">Rooli: </label>
                  <select name="role" id="prc_6_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_6_permission">Kyllä</label>
                     <input type="checkbox" id="prc_6_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_6_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_6_hiding" class="standard_checkbox">
                  </div>
                  
               </div> 
               
                  
            </div>
            <div class="form-group">
               <div class="form-subgroup"><label>LVI-urakoitsija: </label>
               <input type="text" name="prc_7" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>LVI-urakoitsija puh: </label>
               <input type="text" name="prc_7_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>LVI-urakoitsija email: </label>
               <input type="text" name="prc_7_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_7_role">Rooli: </label>
                  <select name="role" id="prc_7_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_7_permission">Kyllä</label>
                     <input type="checkbox" id="prc_7_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_7_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_7_hiding" class="standard_checkbox">
                  </div>
                  
               </div>  
               
                  
            </div>
            <div class="form-group">
               <div class="form-subgroup"><label>Lasitusfirma: </label>
               <input type="text" name="prc_8" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Lasitusfirma puh: </label>
               <input type="text" name="prc_8_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Lasitusfirma email: </label>
               <input type="text" name="prc_8_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_8_role">Rooli: </label>
                  <select name="role" id="prc_8_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_8_permission">Kyllä</label>
                     <input type="checkbox" id="prc_8_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_8_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_8_hiding" class="standard_checkbox">
                  </div>
                  
               </div> 
            </div>

            <div class="form-group">
               <div class="form-subgroup"><label>Palokatko: </label>
               <input type="text" name="prc_9" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Palokatko puh: </label>
               <input type="text" name="prc_9_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Palokatko email: </label>
               <input type="text" name="prc_9_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_9_role">Rooli: </label>
                  <select name="role" id="prc_9_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_9_permission">Kyllä</label>
                     <input type="checkbox" id="prc_9_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_9_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_9_hiding" class="standard_checkbox">
                  </div>
                  
               </div> 
            </div>

            <div class="form-group">
               <div class="form-subgroup"><label>Arkkitehti: </label>
               <input type="text" name="prc_10" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Arkkitehti puh: </label>
               <input type="text" name="prc_10_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Arkkitehti email: </label>
               <input type="text" name="prc_10_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_10_role">Rooli: </label>
                  <select name="role" id="prc_10_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_10_permission">Kyllä</label>
                     <input type="checkbox" id="prc_10_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_10_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_10_hiding" class="standard_checkbox">
                  </div>
                  
               </div> 
            </div>

            <div class="form-group">
               <div class="form-subgroup"><label>Rakennesuunnittelija: </label>
               <input type="text" name="prc_11" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Rakennesuunnittelija puh: </label>
               <input type="text" name="prc_11_puh" class="form-control" value=" " required></div>
               <div class="form-subgroup"><label>Rakennesuunnittelija email: </label>
               <input type="text" name="prc_11_email" class="form-control" value=" " required></div>
               <div class="form-subgroup">
                  <label for="prc_11_role">Rooli: </label>
                  <select name="role" id="prc_11_role">
                     <option value="saaja">Viestien saaja</option>
                     <option value="katsoja">Katsoja</option>
                     <option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option>
                  </select>
               </div>
               <div class="form-subgroup">
                  <h5>Saako katsoa kaikki projektin tiedot?</h5>
                  <div class="row-reversed">
                     <label for="prc_11_permission">Kyllä</label>
                     <input type="checkbox" id="prc_11_permission" class="standard_checkbox">
                  </div>

                  <h5>Poista näkymässä projektilla</h5>
                  <div class="row-reversed">
                     <label for="prc_11_hiding">Kyllä</label>
                     <input type="checkbox" id="prc_11_hiding" class="standard_checkbox">
                  </div>
                  
               </div> 
            </div>

            <div class="button f_contactadding_btn" onclick="creation_henkilolisays();">
               Lisää uusi henkilö projektiin
            </div>

            <input type="text" name="a_rooms" id="a_rooms" style="display:none;">
            <input type="text" name="b_rooms" id="b_rooms" style="display:none;">
            <input type="text" name="c_rooms" id="c_rooms" style="display:none;">
            <input type="text" name="d_rooms" id="d_rooms" style="display:none;">
            <input type="text" name="e_rooms" id="e_rooms" style="display:none;">
            <input type="text" name="f_rooms" id="f_rooms" style="display:none;">
            <input type="text" name="g_rooms" id="g_rooms" style="display:none;">
            <input type="text" name="h_rooms" id="h_rooms" style="display:none;">


            <input type="text" name="a_rooms_nowork" id="a_rooms_nowork" style="display:none;">
            <input type="text" name="b_rooms_nowork" id="b_rooms_nowork" style="display:none;">
            <input type="text" name="c_rooms_nowork" id="c_rooms_nowork" style="display:none;">
            <input type="text" name="d_rooms_nowork" id="d_rooms_nowork" style="display:none;">
            <input type="text" name="e_rooms_nowork" id="e_rooms_nowork" style="display:none;">
            <input type="text" name="f_rooms_nowork" id="f_rooms_nowork" style="display:none;">
            <input type="text" name="g_rooms_nowork" id="g_rooms_nowork" style="display:none;">
            <input type="text" name="h_rooms_nowork" id="h_rooms_nowork" style="display:none;">
               
         </fieldset>
         <div onclick='$("#new_project").hide();$("#new_project").slideUp(200);$("#roomconfig_first").slideDown(200);$("#roomconfig_first").show();' class="next_btn btn ready_btn">Jatka eteenpäin</div>
      </div>     
    </section>  

   <section id="roomconfig_first">
      <h1>Lataa projektin Suunnitelmat</h1>
      <div class="first__container container">
            <div class="form-group">
               <h4>Kaupalliset asiakirjat</h4>
               <input type="file" accept="application/pdf" id='files-1' name="files-1[]" multiple>
               <div id='preview-1' class="preview_files"></div>
               <input type="button" id="submit-1" value='Lähetä kaupalliset asiakirjat'>
            </div>
            <div class="form-group">
               <h4>Työmaan asiakirjat</h4>
               <input type="file" accept="application/pdf" id='files-2' name="files-2[]" multiple>
               <div id='preview-2' class="preview_files"></div>
               <input type="button" id="submit-2" value='Lähetä Työmaan asiakirjat'>
            </div>
            <div class="form-group">
               <h4>Arkkitehtisuunnitelmat</h4>
               <input type="file" accept="application/pdf" id='files-3' name="files-3[]" multiple>
               <div id='preview-3' class="preview_files"></div>
               <input type="button" id="submit-3" value='Lähetä Arkkitehtisuunnitelmat'>
            </div>
            <div class="form-group">
               <h4>Rakennesuunnitelmat</h4>
               <input type="file" accept="application/pdf" id='files-4' name="files-4[]" multiple>
               <div id='preview-4' class="preview_files"></div>
               <input type="button" id="submit-4" value='Lähetä Rakennesuunnitelmat'>
            </div>
            <div class="form-group">
               <h4>Omat suunnitelmat</h4>
               <input type="file" accept="application/pdf" id='files-5' name="files-5[]" multiple>
               <div id='preview-5' class="preview_files"></div>
               <input type="button" id="submit-5" value='Lähetä Omat suunnitelmat'>
            </div>
            <div class="form-group">
               <h4>Muut asiakirjat?</h4>
               <input type="file" accept="application/pdf" id='files-6' name="files-6[]" multiple>
               <div id='preview-6' class="preview_files"></div>
               <input type="button" id="submit-6" value='Lähetä muut asiakirjat'>
            </div>
      </div>
      <div class="row">
            <div class="col-6">
               <a class="prev_btn" href="#roomconfig_first" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#new_project').slideDown(200);$('#new_project').show();">Edellinen</a>
            </div>
            <div class="col-6">
               <a class="next_btn btn ready_btn" href="#roomconfig_second" onclick='$("#roomconfig_first").hide();$("#roomconfig_first").slideUp(200);$("#roomconfig_second").slideDown(200);$("#roomconfig_second").show();' class="next_btn btn ready_btn">Seuraava</a>
            </div>
      </div>
   </section>

   <section id="roomconfig_second" class="container">  
      <h2>Alkuasetukset (jo valittu, ei tarvitse valita mtn)</h2>
      <div class="row start_set">
         <div class="col-6 row">
            <h3 style="width: 100%;">Valitut järjestelmät:</h3>

            <?php 

                  $s_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 's_settings'");
                  $s_da = mysqli_fetch_all($s_data);
                  $s_data = $s_da[0][3];

                  $s_da_ = explode("},{", $s_data);
                  $_s = explode("],[", $s_da_[0]);


                  $s_ = str_replace("]" , "",$_s);
                  $s = str_replace("[" , "",$s_);
                  
                  // echo($s[0]);

             ?>
             <div class="form-group">
               <?php 

                  $sys = explode(",",$s[0]);

                  foreach ($sys as $sy) {
                     if(strlen($sy)>=3) {
                        echo '<div class="material__customcol_item"><input type="checkbox" name="system_type" value="Classic" checked><label style="background: #E2E2E2;">' . str_replace('"','', $sy) . '</label></div>';
                     }
                  }

                ?>
               <div class="material__customcol_item">

                  
               <!--  <input type="checkbox" id="system_one" name="system_type" value="Classic" checked>
                <label for="system_one" style="background: #E2E2E2;">Classic</label> -->
              </div>
            </div>
         </div>
         <div class="col-6 row">
            <h3 style="width: 100%;">Materiaalit:</h3>
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
           echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="'.$sys[0].'"><label style="color: white; background: '.$sys[7].';">'.$sys[0].'</label><input type="hidden" name="material_bg" value="'.$sys[7].'"><input type="hidden" name="material_colour" value="'.$sys[7].'"><input type="hidden" name="material_array" value="'.$sys[0].','.$sys[1].','.$sys[2].','.$sys[3].','.$sys[4].','.$sys[5].','.$sys[6].','.$sys[7].'"></div>';
            // print_r($s);

            // $sys = explode(",",$s[0]);
            //    if(strlen($sy)>=3) {
            //       // echo '<div class="material__customcol_item"><input type="checkbox" name="system_type" value="Classic" checked><label style="background: #E2E2E2;">' . str_replace('"','', $sy) . '</label></div>';

            //       echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="Exterior Green" id="exterior green"><label for="exterior green" style="color: rgb(255, 255, 255); background: rgb(110, 135, 85);">FO Malibu E. Green</label><input type="hidden" name="material_bg" value="rgb(255, 255, 255)"><input type="hidden" name="material_colour" value="rgb(110, 135, 85)"><input type="hidden" name="material_array" value="Exterior Green,Exterior Green,FO/B_s2_d0,1250,600,8,Standard,#6E8755"></div>';
            //    }
          }
          
          

       ?>
          
         </div>
      </div>
      <div class="row">
          <div class="col-6"><a class="prev_btn" href="#roomconfig_second" onclick="$('#roomconfig_second').hide();$('#roomconfig_second').slideUp(200);$('#roomconfig_first').slideDown(200);$('#roomconfig_first').show();">Edellinen</a></div>
          <div class="col-6">
            <div onclick='$("#roomconfig_second").hide();$("#roomconfig_second").slideUp(200);$("#roomconfig_third").slideDown(200);$("#roomconfig_third").show();' class="next_btn btn ready_btn">Seuraava</div>
          </div>
      </div>
   </section> 
   

   <section id="roomconfig_third" class="project__roomcount">
      <h1>Kerrosten, rappujen, ja huoneiden valinta </h1>
      <div class="container rappus">
          <div class="per50 floatleft coderdy rappu-1" id="A" style="opacity: 1;" maxlength="5">
              <div class="showsizer tablepreview">
                  <div class="roomconfig_second_prefixes">
                     <h2><input type="text" id="a_val" name="a_prefix" value="ARAK-"></h2>
                     <h2><input type="text" id="a_nextnum" name="a_nextnum" value="1" class="prefixnum"></h2>
                  </div>
                  
                  <div class="table_size_chooser sizer">
                      <div class="SizeChooser">
                          <table class="table">
                              <tbody>
                                  <tr>
                                      <td class="noindex"><label>10</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>9</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>8</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>7</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>6</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>5</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>4</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>3</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>2</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                                  </tr>
                                  <tr>
                                      <td class="noindex"><label>1</label></td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                                  </tr>
                                  <tr class="AK">
                                      <td class="noindex"><label onclick="open_ak();">AK?</label></td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                  </tr>
                                  <tr class="K">
                                      <td class="noindex"><label onclick="open_k();">K?</label></td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                      <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                                  </tr>
                              </tbody>
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
          <div class="col-6"><a class="prev_btn" href="#roomconfig_second" onclick="$('#roomconfig_third').hide();$('#roomconfig_third').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();">Edellinen</a></div>
          <div class="col-6">
              <div class="col-6"><butto class="finalization_btn ready_btn">Aloita projekti</button></div>
          </div>
      </div>
   </section>

   <section id="roomconfig_fourth">
      <div class="row">
          <div class="col-6"><a class="prev_btn" href="#roomconfig_fourth" onclick="$('#roomconfig_fourth').hide();$('#roomconfig_fourth').slideUp(200);$('#roomconfig_third').slideDown(200);$('#roomconfig_third').show();">Edellinen</a></div>
          <div class="col-6">
            <div onclick='$("#roomconfig_fourth").hide();$("#roomconfig_fourth").slideUp(200);$("#roomconfig_fifth").slideDown(200);$("#roomconfig_fifth").show();' class="next_btn btn ready_btn">Seuraava</div>
          </div>
      </div>
   </section>

   <section id="roomconfig_fifth">
      <div class="row">
         <div class="col-6"><a class="prev_btn" href="#roomconfig_fifth" onclick="$('#roomconfig_fifth').hide();$('#roomconfig_fifth').slideUp(200);$('#roomconfig_fourth').slideDown(200);$('#roomconfig_fourth').show();">Edellinen</a></div>
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
                <tr>
                    <td class="noindex"><label>10</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>9</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>8</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>7</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>6</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>5</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>4</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>3</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>2</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>

                </tr>
                <tr>
                    <td class="noindex"><label>1</label></td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                    <td class=""><input type="checkbox" name="room_name"><label></label> </td>
                </tr>
                <tr class="AK">
                    <td class="noindex"><label onclick="open_ak();">AK?</label></td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                </tr>
                <tr class="K">
                    <td class="noindex"><label onclick="open_k();">K?</label></td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                    <td class="hidden"><input type="checkbox" name="room_name"><label></label> </td>
                </tr>
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
         plusone_rappu_Z = "A";
      } 
      else if(plusone_rappu_z==2) {
         plusone_rappu_Z = "B";
      }

      else if(plusone_rappu_z==3) {
         plusone_rappu_Z = "C";
      }

      else if(plusone_rappu_z==4) {
         plusone_rappu_Z = "D";
      }

      else if(plusone_rappu_z==5) {
         plusone_rappu_Z = "E";
      }

      else if(plusone_rappu_z==6) {
         plusone_rappu_Z = "F";
      }

      else if(plusone_rappu_z==7) {
         plusone_rappu_Z = "G";
      }

      else if(plusone_rappu_z==8) {
         plusone_rappu_Z = "H";
      }

      else if(plusone_rappu_z==9) {
         alert("Maksimissaan rappuja voi olla vain 8.");
         return;
      }

      var rappus = document.querySelector(".rappus");
      

      plusone_rappu_o=plusone_rappu_z+1;
      if(plusone_rappu_o==1) {
         plusone_rappu_O = "A";
      } 
      else if(plusone_rappu_o==2) {
         plusone_rappu_O = "B";
      }

      else if(plusone_rappu_o==3) {
         plusone_rappu_O = "C";
      }

      else if(plusone_rappu_o==4) {
         plusone_rappu_O = "D";
      }

      else if(plusone_rappu_o==5) {
         plusone_rappu_O = "E";
      }

      else if(plusone_rappu_o==6) {
         plusone_rappu_O = "F";
      }

      else if(plusone_rappu_o==7) {
         plusone_rappu_O = "G";
      }

      else if(plusone_rappu_o==8) {
         plusone_rappu_O = "H";
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

      i1.setAttribute("id",plusone_rappu_O.toLowerCase()+"_val");
      i1.setAttribute("name",plusone_rappu_O.toLowerCase()+"_prefix");


      var i2 = document.createElement('input');
      // el.classList = "prefixnum";
      i2.setAttribute("id",plusone_rappu_O.toLowerCase()+"_nextnum");
      i2.setAttribute("name",plusone_rappu_O.toLowerCase()+"_nextnum");
      i2.value = "1";




     

      

      


      const grandparent = document.createElement("div");
      grandparent.classList = ("per50 floatleft coderdy rappu-2");
      grandparent.setAttribute('id', plusone_rappu_O);


      const parent = document.createElement("div");
      parent.classList = ("showsizer tablepreview");


      const roomconfig_second_prefixes = document.createElement("div");
      roomconfig_second_prefixes.classList = ("roomconfig_second_prefixes");


      const roomgconfig_h2_1 = document.createElement("h2");
      // roomgconfig_h2_1.innerHTML = i1;

      const roomgconfig_h2_2 = document.createElement("h2");
      // roomgconfig_h2_1.innerHTML = i2;

      let clonedMenu = document.querySelector("#hiddentocopy").cloneNode(true);
      clonedMenu.style.display = "block";
      clonedMenu.setAttribute("id","");

      rappus.appendChild(grandparent);
      grandparent.appendChild(parent);
      parent.appendChild(roomconfig_second_prefixes);
      parent.appendChild(clonedMenu);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_1);
      roomconfig_second_prefixes.appendChild(roomgconfig_h2_2);
      roomgconfig_h2_1.appendChild(i1);
      roomgconfig_h2_2.appendChild(i2);



            
   }

   function pohjakierros_function() {
      
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
<script>
   function open_ak() {
      let _AK_shits_ = document.querySelectorAll(".AK > td");
      _AK_shits_.forEach(myFunction);

      function myFunction(item) {
        item.classList.remove("hidden");
        item.classList.add("nowork");
      }

   }
   function open_k() {
      let _K_shits_ = document.querySelectorAll(".K > td");
      _K_shits_.forEach(myFunction);

      function myFunction(item) {
        item.classList.remove("hidden");
        item.classList.add("nowork");
      }
   }
</script>
<?php include('footer.php') ?>


    <!-- <section id="roomconfig_third" class="project__roomcount" style="display: none;">
            <div class="container">
              <h1>Anna huoneistojen määrä rapussa/krs</h1>   
              <input type="number" placeholder="Huoneistojen määrä rapussa?" id="room_qty" name="rooms_per_rappu">
            <div class="row">
               <div class="col-6"><a class="prev_btn" href="#roomconfig_second" onclick="document.querySelector('#roomconfig_third').style.display = 'none';document.querySelector('#roomconfig_second').style.display = 'block';">Edellinen</a></div>
               <div class="col-6"><a class="ready_btn" href="#rooms" onclick="document.querySelector('#roomconfig_third').style.display = 'none';document.querySelector('#rooms').style.display = 'block';create_rooms();">Siirry eteenpäin</a></div>
            </div>
    </section> -->
    <!-- <section id="roomconfig_fourth" class="project__room project__roomselect" style="display: none;">
        <h1>Valitse sinua kiinnostava huone </h1>
          <section id="project__room" class="project__roomselect"> 
              <h3 style="margin-bottom: 40px;text-align: center;">Tulossa seuraava</h3>
          </section>
          <div class="row">
               <div class="col-6"><a class="prev_btn" href="#roomconfig_third" onclick="document.querySelector('#roomconfig_fourth').style.display = 'none';document.querySelector('#roomconfig_third').style.display = 'block';">Edellinen</a></div>
               <div class="col-6"><a class="ready_btn" href="#rooms" onclick="document.querySelector('#roomconfig_fourth').style.display = 'none';document.querySelector('#rooms').style.display = 'block';">Siirry huoneen konfigurointiin</a></div>
          </div>
    </section> -->
    <!-- <section id="rooms" style="display: none;border-bottom: 0px solid #000;">
       <div class="container">
        <div class="row house__intro">
          <div class="col-6 col-with-table">
            <h1>
               <input type="text" placeholder="Tilan nimi tähän" value="Tila" name="room_name" class="lineinput">
            </h1>
            <div class="col-table">
               <h2>Seinien asennusjärjestys</h2>
               <table>
               <tr>
                  <td><input type="text" data-room="asjarj-1" maxlength="1" name="room_one_asjarj" value="1" class="lineinput inputname" required/></td>
                  <td><input type="text" data-room="a" name="room_one_a" value="SEINÄ A" class="lineinput inputname" required></td>
                  <td><input type="text" name="room_one_a_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" data-room="asjarj-2" maxlength="1" name="room_two_asjarj" value="2" class="lineinput inputname" required/></td>
                  <td><input type="text" data-room="b" name="room_one_b" value="SEINÄ B" class="lineinput inputname" required></td>
                  <td><input type="text" name="room_one_b_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" data-room="asjarj-3" maxlength="1" name="room_three_asjarj" value="3" class="lineinput inputname" required/></td>
                  <td><input type="text" data-room="c" name="room_one_c" value="SEINÄ C" class="lineinput inputname" required></td>
                  <td><input type="text" name="room_one_c_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" data-room="asjarj-4" maxlength="1" name="room_four_asjarj" value="4" class="lineinput inputname" required/></td>
                  <td><input type="text" data-room="d" name="room_one_d" value="SEINÄ D" class="lineinput inputname" required></td>
                  <td><input type="text" name="room_one_d_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" data-room="asjarj-5" maxlength="1" name="room_five_asjarj" value="5" class="lineinput inputname" required/></td>
                  <td><input type="text" data-room="roof" name="room_one_roof" value="KATTO" class="lineinput inputname" required></td>
                  <td><input type="text" name="room_one_roof_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" data-room="asjarj-6" maxlength="1" name="room_six_asjarj" value="6" class="lineinput inputname" required/></td>
                  <td><input type="text" data-room="floor" name="room_one_floor" value="LATTIA" class="lineinput inputname" required></td>
                  <td><input type="text" name="room_one_floor_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               </table>
            </div>
          </div>
          <div class="col-6">
            <div id="house" class="house">
               <div class="row">
                  <div class="house__wall house__wall_roof" style="width: 340px; height: 240px;right: calc(240px + 12px);margin-left: auto;">
                   <div class="house__wall_status" data-room="roof" onclick="document.querySelector('#rooms').style.display = 'none';document.querySelector('#step_configuration').style.display = 'block';">KATTO</div>
                   <input type="number" class="lineinput house__wall_param wall_height" value="2400"  name="room_one_roof_h" id="room_one_roof_h" onchange="change_roof();">
                   <input type="number" class="lineinput house__wall_param wall_width" value="3400"  name="room_one_roof_w" id="room_one_roof_w" onchange="change_roof();">
                  </div>
               </div>
               <div class="row">
                  <div class="house__wall house__wall_one" style="width: 340px; height: 240px;">
                     <div class="house__wall_status" data-room="a" href="#step_configuration" onclick="document.querySelector('#rooms').style.display = 'none';document.querySelector('#step_configuration').style.display = 'block';">Seinä A</div>
                     <input type="number" class="lineinput house__wall_param wall_height" value="2400" name="room_one_a_h" id="room_one_a_h" onchange="change_a();">
                     <input type="number" class="lineinput house__wall_param wall_width" value="3400" name="room_one_a_w" id="room_one_a_w" onchange="change_a();">
                  </div>
                  <div class="house__wall house__wall_two" style="width: 240px; height: 240px;">
                   <div class="house__wall_status" data-room="b" href="#step_configuration" onclick="document.querySelector('#rooms').style.display = 'none';document.querySelector('#step_configuration').style.display = 'block';">Seinä B</div>
                   <input type="number" class="lineinput house__wall_param wall_height" value="2400" name="room_one_b_h" id="room_one_b_h" onchange="change_b();">
                   <input type="number" class="lineinput house__wall_param wall_width_2" value="2400" name="room_one_b_w" id="room_one_b_w" onchange="change_b();">
                  </div>
                  <div class="house__wall house__wall_three" style="width: 340px; height: 240px;">
                   <div class="house__wall_status" data-room="c" onclick="document.querySelector('#rooms').style.display = 'none';document.querySelector('#step_configuration').style.display = 'block';">Seinä C</div>
                   <input type="number" class="lineinput house__wall_param wall_height" value="2400"  name="room_one_c_h" id="room_one_c_h" onchange="change_c();">
                   <input type="number" class="lineinput house__wall_param wall_width" value="3400"  name="room_one_c_w" id="room_one_c_w" onchange="change_c();">
                  </div>
                  <div class="house__wall house__wall_four" style="width: 240px; height: 240px;">
                   <div class="house__wall_status" data-room="d" href="#step_configuration" onclick="document.querySelector('#rooms').style.display = 'none';document.querySelector('#step_configuration').style.display = 'block';">Seinä D</div>
                   <input type="number" class="lineinput house__wall_param wall_height" value="2400" name="room_one_d_h" id="room_one_d_h" onchange="change_d();">
                   <input type="number" class="lineinput house__wall_param wall_width_2" value="2400" name="room_one_d_w" id="room_one_d_w" onchange="change_d();">
                  </div>
               </div>
               <div class="row">
                     <div class="house__wall house__wall_floor" style="width: 340px; height: 240px;right: calc(240px + 12px);margin-left: auto;">
                      <div class="house__wall_status" data-room="floor" onclick="document.querySelector('#rooms').style.display = 'none';document.querySelector('#step_configuration').style.display = 'block';">LATTIA</div>
                      <input type="number" class="lineinput house__wall_param wall_height" value="2400"  name="room_one_floor_h" id="room_one_floor_h" onchange="change_floor();">
                      <input type="number" class="lineinput house__wall_param wall_width" value="3400"  name="room_one_floor_w" id="room_one_floor_w" onchange="change_floor();">
                    </div>
               </div>
            </div>
          </div>
        </div>
        <div class="row">
               <div class="col-6"><a class="prev_btn" href="#roomconfig_second" onclick="document.querySelector('#rooms').style.display = 'none';document.querySelector('#roomconfig_second').style.display = 'block';">Edellinen</a></div>
               <div class="col-6"><button type="submit" class="ready_btn">Aloita projekti</button></div>
          </div>
      </div>
    </section> -->




    <!-- TYPES <div class="container">
         <h1>Uusi projekti: Valitse tyyppi</h1>
            <section id="project_types">
               <div class="row">
                  <a href="#roomconfig_second" class="product__types_type" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();document.getElementById('project_type').value = 'Huone/seinä';">
                     <h2>Huone/seinä</h2>
                  </a>
                  <a href="#roomconfig_second" class="product__types_type" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();document.getElementById('project_type').value = 'Levytilaus';">
                     <h2>Levytilaus</h2>
                  </a>
                  <a href="#roomconfig_second" class="product__types_type" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();document.getElementById('project_type').value = 'Rivitalo';">
                     <h2>Rivitalo</h2>
                  </a>
                  <a href="#roomconfig_second" class="product__types_type" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();document.getElementById('project_type').value = 'Julkisivu';">
                      <h2>Julkisivu</h2>
                    </a>
                    <a href="#roomconfig_second" class="product__types_type" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();document.getElementById('project_type').value = 'Tehosteet';">
                      <h2>Tehosteet</h2>
                    </a>
                    <a href="#roomconfig_second" class="product__types_type" onclick="$('#roomconfig_first').hide();$('#roomconfig_first').slideUp(200);$('#roomconfig_second').slideDown(200);$('#roomconfig_second').show();document.getElementById('project_type').value = 'Muu';">
                      <h2>Muu</h2>
                    </a>
                  </div>
                </section>
      </div>
      <input type="hidden" name="project_type" id="project_type" value=" " required> -->