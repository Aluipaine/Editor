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
            <input type="text" name="project_name" class="form-control" value="" required>   
         </div>    
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

                  $unique_id = 0;
                  foreach ($sys as $sy) {
                     if(strlen($sy)>=3) {
                        echo '<div class="material__customcol_item"><input id="selected-systems-' . $unique_id . '" type="checkbox" name="system_type" class="valitut_järjestelmät" value="' . str_replace('"','', $sy) . '" checked><label for="selected-systems-' . $unique_id . '" style="background: #E2E2E2;">' . str_replace('"','', $sy) . '</label></div>';
                     }
                     $unique_id++;
                  }

                ?>

               <script>
                  let valitut_järjestelmät = document.querySelectorAll('.valitut_järjestelmät');

                  valitut_järjestelmät.forEach(radio => {
                  radio.addEventListener('click', function() {
                     valitut_järjestelmät.forEach(marko => {
                        if (radio != marko) {
                           marko.checked = false;
                        }
                     });
                  });
                  });
               </script>
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
          $unique_id = 0;
          foreach ($_s as $sy) {

            // echo $sy;
            $sy_1 = str_replace("{" , "", str_replace("}" , "",$sy));
            $sy_2 =str_replace("[" , "", str_replace("]" , "",$sy_1));
            $sy_3 = str_replace('"','', $sy_2);
            $sys = explode(",", $sy_3);

            // print_r($sys);
           echo '<div class="material__customcol_item"><input id="custom-color-' . $unique_id . '" type="checkbox" name="material_type" value="'.$sys[0].'"><label for="custom-color-' . $unique_id . '" style="color: white; background: '.$sys[7].';">'.$sys[0].'</label><input type="hidden" name="material_bg" value="'.$sys[7].'"><input type="hidden" name="material_colour" value="'.$sys[7].'"><input type="hidden" name="material_array" value="'.$sys[0].','.$sys[1].','.$sys[2].','.$sys[3].','.$sys[4].','.$sys[5].','.$sys[6].','.$sys[7].'"></div>';
            // print_r($s);

            // $sys = explode(",",$s[0]);
            //    if(strlen($sy)>=3) {
            //       // echo '<div class="material__customcol_item"><input type="checkbox" name="system_type" value="Classic" checked><label style="background: #E2E2E2;">' . str_replace('"','', $sy) . '</label></div>';

            //       echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="Exterior Green" id="exterior green"><label for="exterior green" style="color: rgb(255, 255, 255); background: rgb(110, 135, 85);">FO Malibu E. Green</label><input type="hidden" name="material_bg" value="rgb(255, 255, 255)"><input type="hidden" name="material_colour" value="rgb(110, 135, 85)"><input type="hidden" name="material_array" value="Exterior Green,Exterior Green,FO/B_s2_d0,1250,600,8,Standard,#6E8755"></div>';
            //    }

            $unique_id++;
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
      <div class="rappus">
          <div class="per50 floatleft coderdy rappu-1" id="A_" style="opacity: 1;" maxlength="5">
              <div class="showsizer tablepreview">
                  <div class="roomconfig_second_prefixes">
                     <h2><input type="text" maxlength="7" list="" id="a_val" name="a_prefix" value="ARAK-"></h2>
                     <h2><input type="text" maxlength="5" list="" id="a_nextnum" name="a_nextnum" value="1" class="prefixnum" onclick="change__byhands(this)"></h2>
                     <h5><input type="text" maxlength="10" list="" id="a_nextnum_second" name="a_nextnum_second" value="" class="prefixnum prefixnum_second"></h5>
                     <h5><input type="text" maxlength="10" list="" id="a_nextnum_third" name="a_nextnum_third" value="" class="prefixnum prefixnum_second"></h5>
                     <div class="greenbtn newproject__addinglvl" onclick="add_new_lvl(this);">Lisää uusi kerros</div>
                  </div>
                  
                  <div class="table_size_chooser sizer">
                      <div class="SizeChooser">
                          <table class="table">
                              <tbody>
                                  <?php
                                    for ($i=1; $i >= -1; $i--) { 
                                       if($i == 0) {
                                          echo '<tr class="K" onclick="open_k();">';
                                          $i_ = "K?";
                                       }
                                       else if($i == -1) {
                                          echo '<tr class="AK" onclick="open_ak();">';
                                          $i_ = "AK?";
                                       }
                                       else {
                                          echo "<tr>";
                                          $i_ = $i;
                                       }
                                       
                                       
                                       for ($a=1; $a < 30; $a++) { 
                                          if($a == 1) {
                                             echo '<td class="noindex"><label>'.$i_.'</label></td>';
                                          }
                                          echo '<td><input type="checkbox" name="room_name"><label></label></td>';
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
               <?php
                  for ($i=1; $i >= -1; $i--) { 
                     if($i == 0) {
                        echo '<tr class="K" onclick="open_k();">';
                        $i_ = "K?";
                     }
                     else if($i == -1) {
                        echo '<tr class="AK" onclick="open_ak();">';
                        $i_ = "AK?";
                     }
                     else {
                        echo "<tr>";
                        $i_ = $i;
                     }


                     for ($a=1; $a < 30; $a++) { 
                        if($a == 1) {
                           echo '<td class="noindex"><label>'.$i_.'</label></td>';
                        }
                        echo '<td><input type="checkbox" name="room_name"><label></label></td>';
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
      i1.setAttribute("maxlength", 7);


      var i2 = document.createElement('input');
      // el.classList = "prefixnum";
      i2.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum");
      i2.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum");
      i2.classList.add("prefixnum");
      i2.setAttribute("maxlength", 5);
      i2.value = "1";

      var i3 = document.createElement('input');
      // el.classList = "prefixnum";
      i3.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_second");
      i3.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_second");
      i3.setAttribute("maxlength", 10);
      i3.value = "";

      var i4 = document.createElement('input');
      // el.classList = "prefixnum";
      i4.setAttribute("id",plusone_rappu_O.toLowerCase()+"nextnum_third");
      i4.setAttribute("name",plusone_rappu_O.toLowerCase()+"nextnum_third");
      i4.setAttribute("maxlength", 10);
      i4.value = "";


      var i5 = document.createElement('div');
      i5.classList.add("newproject__addinglvl");
      i5.classList.add("greenbtn");
      i5.setAttribute("onclick",'add_new_lvl(this);');
      i5.innerHTML = "Lisää uusi kerros";

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
      roomgconfig_h2_2.appendChild(i3);
      roomgconfig_h2_2.appendChild(i4);
      roomconfig_second_prefixes.appendChild(i5);



            
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
               <input type="text" list="" placeholder="Tilan nimi tähän" value="Tila" name="room_name" class="lineinput">
            </h1>
            <div class="col-table">
               <h2>Seinien asennusjärjestys</h2>
               <table>
               <tr>
                  <td><input type="text" list="" data-room="asjarj-1" maxlength="1" name="room_one_asjarj" value="1" class="lineinput inputname" required/></td>
                  <td><input type="text" list="" data-room="a" name="room_one_a" value="SEINÄ A" class="lineinput inputname" required></td>
                  <td><input type="text" list="" name="room_one_a_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" list="" data-room="asjarj-2" maxlength="1" name="room_two_asjarj" value="2" class="lineinput inputname" required/></td>
                  <td><input type="text" list="" data-room="b" name="room_one_b" value="SEINÄ B" class="lineinput inputname" required></td>
                  <td><input type="text" list="" name="room_one_b_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" list="" data-room="asjarj-3" maxlength="1" name="room_three_asjarj" value="3" class="lineinput inputname" required/></td>
                  <td><input type="text" list="" data-room="c" name="room_one_c" value="SEINÄ C" class="lineinput inputname" required></td>
                  <td><input type="text" list="" name="room_one_c_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" list="" data-room="asjarj-4" maxlength="1" name="room_four_asjarj" value="4" class="lineinput inputname" required/></td>
                  <td><input type="text" list="" data-room="d" name="room_one_d" value="SEINÄ D" class="lineinput inputname" required></td>
                  <td><input type="text" list="" name="room_one_d_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" list="" data-room="asjarj-5" maxlength="1" name="room_five_asjarj" value="5" class="lineinput inputname" required/></td>
                  <td><input type="text" list="" data-room="roof" name="room_one_roof" value="KATTO" class="lineinput inputname" required></td>
                  <td><input type="text" list="" name="room_one_roof_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
               </tr>
               <tr>
                  <td><input type="text" list="" data-room="asjarj-6" maxlength="1" name="room_six_asjarj" value="6" class="lineinput inputname" required/></td>
                  <td><input type="text" list="" data-room="floor" name="room_one_floor" value="LATTIA" class="lineinput inputname" required></td>
                  <td><input type="text" list="" name="room_one_floor_desc" value="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
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
      <input type="hidden" name="project_type" id="project_type" value="" required> -->