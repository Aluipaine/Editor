<!-- KIINNIKKEET section on the mittaus role -->

<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_tyostot">

<section class="tyosto__navigation">
  <section class="nav" style="position:relative;">
     <nav>
        <ul>
          <li><div onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();updatearea();">Ristivalikkoon</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one');refresh__drawcontrols();updatearea();" class="nav__comleted">Origo</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two');refresh__drawcontrols();updatearea();" class="nav__comleted">Aukot</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three');refresh__drawcontrols();updatearea();" class="nav__comleted">Läpiviennit</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();" class="nav__comleted">Saumat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();" class="nav_current">Kiinnikkeet</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();" class="">Kuosit</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea(); siirto_muualle();">Seinät</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();">Levyt</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();">Rangat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();">Listat</div></li>
          <li><div onclick="$('#step_drawscreen').val('project_start');refresh__drawcontrols();updatearea();">Päävalikkoon</div></li>
        </ul>
     </nav>
  </section>
</section>

<div class="ladonta_container">
  <div class="modal-background kin_as">
      <div class="modal">
         <div class="modal_close_btn" onclick="open_ladonta_settings(false)"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
          <div class="row">
              <div class="col-12" style="position: relative;">
                  <h1>Levyn Kiinnitykset <br>
              </div>
          </div>
         <div class="row">
            <div class="col-12" style="position: relative;">
                <!--<div class="trow">
                    <h5>Tämän projektin levyt:</h5>
                    <div class="levy_types">

                    </div>
                </div>-->
               <section>
                 <section class="levy_presets">
                     <div class="levy_preset" data-action="set_levy_preset" data-vertical="600" data-horizontal="600">
                         P_K600 / V_K600
                     </div>
                     <div class="levy_preset" data-action="set_levy_preset" data-vertical="400" data-horizontal="600">
                         P_K400 / V_K600
                     </div>
                     <div class="levy_preset" data-action="set_levy_preset" data-vertical="400" data-horizontal="400">
                         P_K400 / V_K400
                     </div>
                 </section>

                   <section>

                       <h3>Reuna asetukset:</h3>
                       <div class="row poraukset" style="height: 200px">
                           <div class="col-2 trow">
                               <h4>arvo</h4>
                               <h4>min</h4>
                               <h4>max</h4>
                           </div>
                           <div class="col-8 row poraukset"  style="height: 200px">
                               <div class="col-6 trow ">
                                   <div class="row">
                                       <div class="col-6"><h4>Yläreunasta</h4></div>
                                       <div class="col-6"><h4>Alareunasta:</h4></div>
                                   </div>
                                   <div class="row">
                                       <div class="col-6">
                                           <input type="number" id="settings__levy_yr_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80">
                                       </div>
                                       <div class="col-6">
                                           <input type="number" id="settings__levy_ar_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80">
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-6">
                                           <input type="number" id="settings__levy_yr_min" placeholder="Poraus etäisyys min" min="25" value="25">
                                       </div>
                                       <div class="col-6">
                                           <input type="number" id="settings__levy_ar_min" placeholder="Poraus etäisyys min" min="25" value="25">
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-6">
                                           <input type="number" id="settings__levy_yr_max" placeholder="Poraus etäisyys max" min="25" value="80">
                                       </div>
                                       <div class="col-6">
                                           <input type="number" id="settings__levy_ar_max" placeholder="Poraus etäisyys max" min="25" value="80">
                                       </div>
                                   </div>
                               </div>
                               <div class="col-6 trow">
                                   <div class="row">
                                       <div class="col-6"><h4>Sivusta vas:</h4></div>
                                       <div class="col-6"><h4>Sivusta oik:</h4></div>
                                   </div>
                                   <div class="row">
                                       <div class="col-6"><input type="number" id="settings__levy_vr_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80"></div>
                                       <div class="col-6"><input type="number" id="settings__levy_or_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80"></div>
                                   </div>
                                   <div class="row">
                                       <div class="col-6"><input type="number" id="settings__levy_vr_min" placeholder="Poraus etäisyys min" min="25" value="25"> </div>
                                       <div class="col-6"><input type="number" id="settings__levy_or_min" placeholder="Poraus etäisyys min" min="25" value="25"> </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-6"><input type="number" id="settings__levy_vr_max" placeholder="Poraus etäisyys max" min="25" value="80"> </div>
                                       <div class="col-6"><input type="number" id="settings__levy_or_max" placeholder="Poraus etäisyys max" min="25" value="80"></div>
                                   </div>
                               </div>
                           </div>
                       </div>


                   </section>
                 <section class="levy_settings">
                   <!-- <h2>Levyasetukset</h2> -->
                   <div class="row">
                     <div class="col-6">
                       <h2>Pituus</h2>
                     </div>
                     <div class="col-6">
                       <h2>Leveys</h2>
                     </div>
                   </div>
                   <section class="trow">
                      <!--<h4>Levyjen mitat</h4>-->
                      <fieldset style="display: none">
                        <div class="modal__row">
                         <label for="settings__levy_levysizeh"></label>
                        <input type="text" id="k_settings__levy_levysizeh" placeholder="Tavoiteltu levyn pituus" value="">
                         <label for="settings__levy_levysizew"></label>
                         <input type="text" id="k_settings__levy_levysizew" placeholder="Tavoiteltu levyn leveys" value="">
                       </div>
                      </fieldset>
                      <div class="row">
                        <div class="col-6">
                          <h4 data-role="modal_kiinnikkeet_pysty">Pysty Kiinnikelinjat</h4>
                          <fieldset>
                            <div class="trow leveyssuunnan">
                             <div class="modal__row_kvali">
                               <label for="p_target">K-väli, Tavoite </label>
                               <input type="number" id="p_target" placeholder="Tavoiteltu levyn pituus" min="570" value="600">
                             </div>
                             <div class="modal__row_kvali">
                               <label for="p_two">2 reikää max väl</label>
                               <input type="number" id="p_two" onchange="aloita_tyosto_kiinnikkeet();" placeholder="Tavoiteltu levyn leveys" min="570" value="775">
                             </div>
                             <div class="modal__row_kvali">
                               <label for="p_three">3 reikää max väl</label>
                               <input type="number" id="p_three" onchange="aloita_tyosto_kiinnikkeet();" placeholder="Tavoiteltu levyn leveys" min="580" value="1300" placeholder="580-3050">
                             </div>
                           </div>
                          </fieldset>
                        </div>
                        <div class="col-6">
                          <h4 data-role="modal_kiinnikkeet_vaaka">Vaaka Kiinnikelinjat </h4>
                          <fieldset>
                            <div class="trow pituussuunnan">
                             <div class="modal__row_kvali">
                               <label for="v_target">K-väli, Yleinen </label>
                               <input type="number" id="v_target" placeholder="Tavoiteltu levyn pituus" min="450" value="600">
                             </div>
                             <div class="modal__row_kvali">
                               <label for="v_two">2 reikää max väl</label>
                               <input type="number" id="v_two" onchange="aloita_tyosto_kiinnikkeet();" placeholder="Tavoiteltu levyn leveys" value="775">
                             </div>
                             <div class="modal__row_kvali">
                               <label for="v_three">3 reikää max väl</label>
                               <input type="number" id="v_three" onchange="aloita_tyosto_kiinnikkeet();" placeholder="Tavoiteltu levyn leveys" value="1300">
                             </div>
                           </div>
                          </fieldset>
                        </div>

                      </div>


                   </section>

                   <section>
                      
                       <fieldset class="kiinniketys">
                         <div class="row">
                           <fieldset class="col-6 trow">
                             <input type="radio" id="kiinniketys__pkiinnike_one" name="levy_porautus_vertical" value="Häntä vasen">
                             <label for="kiinniketys__pkiinnike_one">Häntä vasen</label>
                             <input type="radio" id="kiinniketys__pkiinnike_two" name="levy_porautus_vertical" value="Häntä oikea" checked>
                             <label for="kiinniketys__pkiinnike_two">Häntä oikea</label>
                             <input style="display: none;" type="radio" id="kiinniketys__pkiinnike_three__" name="levy_porautus_vertical" value="Tasamalli">
                             <label style="display: none;" for="kiinniketys__pkiinnike_three__" onclick="tyosto_func(3)">Tasamalli pysty</label>

                             <input type="radio" id="kiinniketys__pkiinnike_three" name="levy_porautus_vertical" value="Tasamalli">
                             <label for="kiinniketys__pkiinnike_three">Tasamalli vaaka</label>
                             <input style="display: none;" type="radio" id="kiinniketys__pkiinnike_four" name="levy_porautus_vertical" value="Pariton tasa">
                             <label style="display: none;" for="kiinniketys__pkiinnike_four">Pariton tasa pysty (epävakaa)</label>
                           </fieldset>
                           <fieldset class="col-6 trow">
                            <input type="radio" id="kiinniketys__vkiinnike_one" name="levy_porautus_horizontal" value="Häntä ylä" checked>
                             <label for="kiinniketys__vkiinnike_one">Häntä ylä</label>
                             <input type="radio" id="kiinniketys__vkiinnike_two" name="levy_porautus_horizontal" value="Häntä ala">
                             <label for="kiinniketys__vkiinnike_two">Häntä ala</label>
                             <input style="display: none;" type="radio" id="kiinniketys__vkiinnike_three__" name="levy_porautus_horizontal" value="Tasamalli">
                             <label style="display: none;" for="kiinniketys__vkiinnike_three__" onclick="tyosto_func(7)">Tasamalli vaaka</label>
                             <input type="radio" id="kiinniketys__vkiinnike_three" name="levy_porautus_horizontal" value="Tasamalli">
                             <label for="kiinniketys__vkiinnike_three">Tasamalli pysty</label>
                             <input style="display:none;" type="radio" id="kiinniketys__vkiinnike_four" name="levy_porautus_horizontal" value="Pariton tasa">
                             <label style="display:none;" for="kiinniketys__vkiinnike_four">Pariton tasa vaaka (epävakaa)</label>
                           </fieldset>
                         </div>
                         
                         


                         
                       </fieldset>
                   </section>
                  
                   

                   <section>

                     <!-- <h4>Ruuvien etäisyydet</h4>
                     <table>
                       <tr>
                         <td>MOD</td>
                         <td><input type="text" name="mod_interval" value="37.5" class="lineinput drawarea__mm mod_interval"></td>
                         <td><input type="text" name="mod_interval" value="37.5" class="lineinput drawarea__mm mod_interval"></td>
                       </tr> -->
                       <?php 
                         // $i = intdiv($v[1]/37); 
                         // $mainnum = intdiv($v[1], 37.5); 

                         // function is_decimal( $val ) {
                         //     return is_numeric( $val ) && floor( $val ) != $val;
                         // }

                         // echo $mainnum . "kpl 37,5mm väliä";

                         // $lenght = strlen( $v[1] );
                         // $lastnumbs = $v[1][$lenght-2] . $v[1][$lenght-1];
                         // $half = intdiv($v[1], 2);
                         // $half_2 = $half;
                         // $half_2 +=25;

                         // echo "<tr>";
                         // if($lastnumbs == 75 || $lastnumbs == 25) {
                         //   echo "<td>".$v[1]."</td>"."<td>" .$half . "</td>". "<td>" . $half . "</td>";
                         // }
                         // if($lastnumbs == 50 || $lastnumbs == 00) {
                         //   echo "<td>".$v[1]."</td>"."<td>" . $half_2 . "</td>" . "<td>" . $half . "</td>";
                         // }
                         // echo "</tr>";

                        
                         // $bb = 0.5; 

                        
                       ?>
                     <!-- </table> -->
                     <!-- <div class="drawarea__controls_btn drawarea__controls_btn_" onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_esikatselu');" style="margin-top: auto;">Esikatsele muutokset</div> -->
                     
                   </section>
                  
                 </section>
               </section>

               
            </div>
          </div>
        <div class="modal_close_btn ladonta_savesetbtn drawarea__controls_btn" onclick="open_ladonta_settings(false);reorganise__newtyosto();">Tallenna</div>
        <div class="modal_close_btn drawarea__controls_btn ladonta_allsetbtn hidden drawarea__controls_btn greenbtn" onclick="open_ladonta_settings(false);reorganise__newtyosto();$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea(); siirto_muualle();" style="background: darkgreen;text-align: center;">Siirrä mitat muille seinille</div>

      </div>
  </div>
</div>



<div id="levytyosto_container" class="levytyosto_container">
  <div class="modal-background">
    <div class="modal">
      <div class="modal_close_btn" onclick="open_ltladonta_settings(false)">
        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path>
        </svg>
      </div>
      <div class="row">
        <div class="col-12" style="position: relative;">
          <h1>Levyn Kiinnitykset <br>
            <span id="lt-levy_koko"></span>
          </h1>
          <div class="visible levy_vis lt_levy_vis" style="">
            <div class="horizontalinputs horizontalinputs-left">
              <!-- <div style="" class="tyosto_measure"><label for="" class="k_vrmod">VR MOD</label><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_vrmod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"></div> -->
              <!-- <div style="margin-top: 50px;" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_vrlevy" onchange="change__levykiinnike();"><label for="">VR LEVY</label></div> -->
            </div>
            <div class="horizontalinputs horizontalinputs-right">
              <!-- <div style="" class="tyosto_measure"><label for="" class="k_ormod">OR MOD</label><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_ormod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"></div> -->
              <!-- <div style="margin-top: 50px;" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_orlevy" onchange="change__levykiinnike();"><label for="">OR LEVY</label></div> -->
            </div>
            <div class="verticalinputs verticalinputs-up" style="left: margin-left:30px;float: right;top:-30px;">
              <!-- <div style="margin-top: 0%;" class="tyosto_measure"><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_yrmod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"><label for="">YR MOD</label></div> -->
              <!-- <div style="" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_yrlevy" onchange="change__levykiinnike();"><label for="">YR LEVY</label></div> -->
            </div>
            <div class="verticalinputs verticalinputs-down" style=" margin-left:30px;float: right;op: -33px;">
              <!-- <div class="tyosto_measure"><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_armod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"><label for="">AR MOD</label></div> -->
              <!-- <div style="" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_arlevy" onchange="change__levykiinnike();"><label for="">AR LEVY</label></div> -->
            </div>
          </div>
        </div>
        <div class="col-6" style="position: relative;display: none;">
          <div class="trow">
            <!--                <h5>Tämän projektin levyt:</h5><div class="levy_types"></div> -->
          </div>
          <h1 style="display: none;">Levyn parametrit, paksuus: <span id="lt-k_thickness">6</span>mm </h1>
          <!-- <input type="hidden" value="drawscreen_section_tyostot" name="step" class="step"><input type="hidden" value="" name="wall" class="wall"><input type="hidden" value="" name="room" class="room"><input type="hidden" value="" name="id" class="id"><input type="hidden" value="" name="settings" class="settings"><input type="hidden" value="" name="mittapisteet" class="mittapisteet"><input type="hidden" value="" name="aukot" class="aukot"><input type="hidden" value="" name="reijat" class="reijat"><input type="hidden" value="" name="saumat" class="saumat"><input type="hidden" value="" name="levyt" class="levyt"><input type="hidden" value="" name="rangat" class="rangat"><input type="hidden" value="" name="listat" class="listat"><input type="hidden" value="" name="kokonaisalue" class="kokonaisalue"><input type="hidden" value="" name="levytettava_alue" class="levytettava_alue"><input type="hidden" value="" name="poisjaava_alue" class="poisjaava_alue"><input type="hidden" value="" name="keskusmittapiste_cord" class="keskusmittapiste_cord"><input type="hidden" value="" name="reklamaatiot" class="reklamaatiot"> -->
          <section style="display: none;">
            <section class="levy_settings" style="display: none;">
              <!-- <h2>Levyasetukset</h2> -->
              <div class="row">
                <div class="col-6">
                  <h2>Pituus</h2>
                </div>
                <div class="col-6">
                  <h2>Leveys</h2>
                </div>
              </div>
              <section class="trow">
                <h4>Levyjen mitat</h4>
                <fieldset>
                  <div class="modal__row">
                    <!-- Levyn maksimipituus -->
                    <label for="settings__levy_levysizeh"></label>
                    <input type="text" id="lt-k_settings__levy_levysizeh" placeholder="Tavoiteltu levyn pituus" value="">
                    <!-- Levyn maksimileveys -->
                    <label for="settings__levy_levysizew"></label>
                    <input type="text" id="lt-k_settings__levy_levysizew" placeholder="Tavoiteltu levyn leveys" value="">
                  </div>
                </fieldset>
                <div class="row">
                  <div class="col-6">
                    <h4>Pysty Kiinnikelinjat</h4>
                    <fieldset>
                      <div class="trow leveyssuunnan">
                        <div class="modal__row_kvali">
                          <label for="v_target">K-väli, Tavoite </label>
                          <input type="number" id="lt-v_target" placeholder="Tavoiteltu levyn pituus" min="450" value="600">
                        </div>
                        <div class="modal__row_kvali">
                          <label for="v_two">2 reikää max väl</label>
                          <input type="number" id="lt-v_two" placeholder="Tavoiteltu levyn leveys" min="450" value="450">
                        </div>
                        <div class="modal__row_kvali">
                          <label for="v_three">3 reikää max väl</label>
                          <input type="number" id="lt-v_three" placeholder="Tavoiteltu levyn leveys" min="450" value="550">
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-6">
                    <h4>Vaaka Kiinnikelinjat</h4>
                    <fieldset>
                      <div class="trow">
                        <div class="modal__row_kvali">
                          <label for="p_target">K-väli, Tavoite </label>
                          <input type="number" id="lt-p_target" placeholder="Tavoiteltu levyn pituus" min="570" value="600">
                        </div>
                        <div class="modal__row_kvali">
                          <label for="p_two">2 reikää max väl</label>
                          <input type="number" id="lt-p_two" placeholder="Tavoiteltu levyn leveys" min="570" value="570" placeholder="0-570">
                        </div>
                        <div class="modal__row_kvali">
                          <label for="p_three">3 reikää max väl</label>
                          <input type="number" id="lt-p_three" placeholder="Tavoiteltu levyn leveys" min="580" value="580" placeholder="580-3050">
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </section>
              <section>
                <h3>Reuna asetukset:</h3>
                <div class="row poraukset" style="height: 200px">
                  <div class="col-2 trow">
                    <h4>arvo</h4>
                    <h4>min</h4>
                    <h4>max</h4>
                  </div>
                  <div class="col-8 row poraukset" style="height: 200px">
                    <div class="col-6 trow ">
                      <div class="row">
                        <div class="col-6">
                          <h4>Yläreunasta</h4>
                        </div>
                        <div class="col-6">
                          <h4>Alareunasta:</h4>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_yr_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80">
                        </div>
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_ar_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_yr_min" placeholder="Poraus etäisyys min" min="25" value="25">
                        </div>
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_ar_min" placeholder="Poraus etäisyys min" min="25" value="25">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_yr_max" placeholder="Poraus etäisyys max" min="25" value="80">
                        </div>
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_ar_max" placeholder="Poraus etäisyys max" min="25" value="80">
                        </div>
                      </div>
                    </div>
                    <div class="col-6 trow">
                      <div class="row">
                        <div class="col-6">
                          <h4>Sivusta vas:</h4>
                        </div>
                        <div class="col-6">
                          <h4>Sivusta oik:</h4>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_vr_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80">
                        </div>
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_or_arvo" placeholder="Poraus etäisyys arvo" min="25" max="80" value="32.5" min="20" max="80">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_vr_min" placeholder="Poraus etäisyys min" min="25" value="25">
                        </div>
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_or_min" placeholder="Poraus etäisyys min" min="25" value="25">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_vr_max" placeholder="Poraus etäisyys max" min="25" value="80">
                        </div>
                        <div class="col-6">
                          <input type="number" id="lt-settings__levy_or_max" placeholder="Poraus etäisyys max" min="25" value="80">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <fieldset class="kiinniketys">
                  <div class="col-6">
                    <div class="row">
                      <input type="checkbox" id="lt-kiinniketys__pkiinnike_one" name="lt-levy_porautus" value="Häntä vasen">
                      <label for="lt-kiinniketys__pkiinnike_one">Häntä vasen</label>
                      <input type="checkbox" id="lt-kiinniketys__pkiinnike_two" name="lt-levy_porautus" value="Häntä oikea">
                      <label for="lt-kiinniketys__pkiinnike_two">Häntä oikea</label>
                      <input type="checkbox" id="lt-kiinniketys__pkiinnike_three" name="lt-levy_porautus" value="Tasamalli">
                      <label for="lt-kiinniketys__pkiinnike_three">Tasamalli pysty </label>
                      <input type="checkbox" id="lt-kiinniketys__pkiinnike_four" name="lt-levy_porautus" value="Pariton tasa">
                      <label for="lt-kiinniketys__pkiinnike_four">Pariton tasa pysty</label>

                      
                    </div>
                    <div class="row">
                      <input type="checkbox" id="lt-kiinniketys__vkiinnike_one" name="lt-levy_porautus" value="Häntä ylä">
                      <label for="lt-kiinniketys__vkiinnike_one">Häntä ylä</label>
                      <input type="checkbox" id="lt-kiinniketys__vkiinnike_two" name="lt-levy_porautus" value="Häntä ala">
                      <label for="lt-kiinniketys__vkiinnike_two">Häntä ala</label>
                      <input type="checkbox" id="lt-kiinniketys__vkiinnike_three" name="lt-levy_porautus" value="Tasamalli">
                      <label for="lt-kiinniketys__vkiinnike_three">Tasamalli vaaka</label>
                      <input type="checkbox" id="lt-kiinniketys__vkiinnike_four" name="lt-levy_porautus" value="Pariton tasa">
                      <label for="lt-kiinniketys__vkiinnike_four">Pariton tasa vaaka</label>
                    </div>
                  </div>
                </fieldset>
              </section>
            </section>
          </section>
        </div>
      </div>
      <div class="modal_close_btn drawarea__controls_btn" onclick="open_ltladonta_settings(false);">Tallenna</div>
      <div class="modal_close_btn drawarea__controls_btn hidden drawarea__controls_btn greenbtn" onclick="open_ltladonta_settings(false);$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea(); siirto_muualle();" style="background: darkgreen;text-align: center;">Siirrä mitat muille seinille</div>

    </div>
  </div>
</div>


<div class="tyostot_keskitys">
  <div class="row">
    <div class="col-6"><h4>Haluatko keskittää työstöt?</h4></div>
    <div class="col-6">
      <div class="modal_close_btn" onclick="this.parentElement.parentElement.parentElement.classList.remove('two');this.parentElement.parentElement.parentElement.classList.add('out');"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
    </div>
    
  </div>
  <fieldset class="spontanous__kiinniketys">
    <input type="radio" id="kiinniketys__pkiinnike_three__" name="levy_porautus_vertical" value="Tasamalli">
    <label for="kiinniketys__pkiinnike_three__" onclick="tyosto_func(3)">Tasamalli pysty</label>
    <!-- <input type="radio" id="kiinniketys__pkiinnike_four__" name="levy_porautus_vertical" value="Pariton tasa">
    <label for="kiinniketys__pkiinnike_four__" onclick="tyosto_func(4)">Pariton tasa pysty</label> -->
    <input type="radio" id="kiinniketys__vkiinnike_three__" name="levy_porautus_horizontal" value="Tasamalli">
    <label for="kiinniketys__vkiinnike_three__" onclick="tyosto_func(7)">Tasamalli vaaka</label>
    <!-- <input type="radio" id="kiinniketys__vkiinnike_four__" name="levy_porautus_horizontal" value="Pariton tasa">
    <label for="kiinniketys__vkiinnike_four__" onclick="tyosto_func(8)">Pariton tasa vaaka</label> -->
  </fieldset>
  
</div>

</form>



<!-- OLD -->
<!-- <fieldset class="spontanous__kiinniketys">
    <input type="radio" id="kiinniketys__pkiinnike_three" name="levy_porautus_vertical" value="Tasamalli">
    <label for="kiinniketys__pkiinnike_three">Tasamalli pysty</label>
    <input type="radio" id="kiinniketys__pkiinnike_four" name="levy_porautus_vertical" value="Pariton tasa">
    <label for="kiinniketys__pkiinnike_four">Pariton tasa pysty</label>
    <input type="radio" id="kiinniketys__vkiinnike_three" name="levy_porautus_horizontal" value="Tasamalli">
    <label for="kiinniketys__vkiinnike_three">Tasamalli vaaka</label>
    <input type="radio" id="kiinniketys__vkiinnike_four" name="levy_porautus_horizontal" value="Pariton tasa">
    <label for="kiinniketys__vkiinnike_four">Pariton tasa vaaka</label>
  </fieldset> -->