
<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_five">

   <!--  <input type="hidden" value="drawscreen_section_five" name="step" class="step">
    <input type="hidden" value="" name="wall" class="wall">
    <input type="hidden" value="" name="room" class="room">
    <input type="hidden" value="" name="id" class="id">
    <input type="hidden" value="" name="settings" class="settings">
    <input type="hidden" value="" name="mittapisteet" class="mittapisteet">
    <input type="hidden" value="" name="aukot" class="aukot">
    <input type="hidden" value="" name="reijat" class="reijat">
    <input type="hidden" value="" name="saumat" class="saumat">
    <input type="hidden" value="" name="levyt" class="levyt">
    <input type="hidden" value="" name="rangat" class="rangat">
    <input type="hidden" value="" name="listat" class="listat">
    <input type="hidden" value="" name="kokonaisalue" class="kokonaisalue">
    <input type="hidden" value="" name="levytettava_alue" class="levytettava_alue">
    <input type="hidden" value="" name="poisjaava_alue" class="poisjaava_alue">
    <input type="hidden" value="" name="keskusmittapiste_cord" class="keskusmittapiste_cord">
    <input type="hidden" value="" name="reklamaatiot" class="reklamaatiot"> -->
    <section class="nav">
      <nav>
        <ul>
          <li><div onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();updatearea();">Ristivalikkoon</div></li>
           <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one'); refresh__drawcontrols();updatearea();" class="nav__comleted">Origo</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two'); refresh__drawcontrols();updatearea();" class="nav__comleted">Aukot</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three'); refresh__drawcontrols();updatearea();" class="nav__comleted">Läpiviennit</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four'); refresh__drawcontrols();updatearea();" class="nav__comleted">Saumat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();" class="nav__comleted">Kiinnikkeet</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five'); refresh__drawcontrols();updatearea();" class="nav_current">Ladonta</div></li>
          
          <li><div onclick="alert('Onnistuu kiinnikkeet-kohdasta');">Seinät</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();">Levyt</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();">Rangat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();">Listat</div></li>
          <li><div onclick="$('#step_drawscreen').val('project_start');refresh__drawcontrols();updatearea();">Päävalikkoon</div></li>
          <!-- <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_tyostot');">Seuraava</div></li> -->


        </ul>

      </nav>

    </section>

  <div class="modal-container">
   <div class="modal-background">
     <div class="modal">
        <div class="modal_close_btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>
        <h2>Levyasetukset</h2>
        <section>
          <h4>Levyjen mitat</h4>
          <fieldset>
            <label for="settings__levy_levysizeh">Levyn maksimipituus</label>
              <input type="number" id="settings__levy_levysizeh" placeholder="Tavoiteltu levyn pituus" min="0">
              <label for="settings__levy_levysizew">Levyn maksimileveys</label>
              <input type="number" id="settings__levy_levysizew" placeholder="Tavoiteltu levyn leveys" min="0">
          </fieldset>
        </section>
        <section>
          <h4>Poraukset</h4>
          <fieldset>
            <div class="modal__row">
              <input type="number" id="settings__levy_i" placeholder="Poraus etäisyys max" min="25" value="600">
              <label for="settings__levy_i">mm välein</label>

              <input type="number" id="settings__levy_diameter" placeholder="Poraus etäisyys max" min="0" max="25" value="8">
              <label for="settings__levy_diameter">Diameter</label>
            </div>
              
          </fieldset>
        </section>
        <!-- <section>
          <h4>Pocket Dustit</h4>
           <b>???????????????????????????????</b>
        </section> -->
        <section>
          <h4>Framet</h4>
          <fieldset>
            <div class="modal__row">
              <label for="settings__levyframe1_X">FRAME 1 X</label>
              <input type="number" id="settings__levyframe1_X" placeholder="FRAME 1 X" min="0">
              <label for="settings__levyframe1_Y">FRAME 1 Y</label>
              <input type="number" id="settings__levyframe1_Y" placeholder="FRAME 1 Y" min="0">

              <label for="settings__levyframe1_X_l">FRAME 1 X Lenght</label>
              <input type="number" id="settings__levyframe1_X_l" placeholder="FRAME 1 X Lenght" min="0">
              <label for="settings__levyframe1_Y_l">FRAME 1 Y Lenght</label>
              <input type="number" id="settings__levyframe1_Y_l" placeholder="FRAME 1 Y Lenght" min="0">
            </div>
          </fieldset>
          <fieldset>
            <div class="modal__row">
              <label for="settings__levyframe2_X">FRAME 2 X</label>
              <input type="number" id="settings__levyframe2_X" placeholder="FRAME 2 X" min="0">
              <label for="settings__levyframe2_Y">FRAME 2 Y</label>
              <input type="number" id="settings__levyframe2_Y" placeholder="FRAME 2 Y" min="0">

              <label for="settings__levyframe2_X_l">FRAME 2 X Lenght</label>
              <input type="number" id="settings__levyframe2_X_l" placeholder="FRAME 2 Lenght" min="0">
              <label for="settings__levyframe2_Y_l">FRAME 2 Y Lenght</label>
              <input type="number" id="settings__levyframe2_Y_l" placeholder="FRAME 2 Lenght" min="0">
            </div>
          </fieldset>
        </section>
        <section>
          <h4>Centre Hole</h4>
          <fieldset>
            <div class="modal__row">
              <input type="radio" id="ch_yes" name="ch" onclick="if(this.value !== ''){this.value=''} else {this.value = 'YES'}" value="">
              <label for="ch_yes" name="-ch">KYLLÄ</label>
            
              <input type="radio" id="ch_no" name="ch" onclick="if(this.value !== ''){this.value=''} else {this.value = 'NO'}" value="">
            <label for="ch_no" name="-ch">EI</label>
            </div>
            
          </fieldset>
        </section>
        <!-- <section>
          <h4>Thickness</h4>
           <fieldset>
            <label for="settings__sauma_levysizeh">Levyn maksimipituus</label>
              <input type="number" id="settings__sauma_levysizeh" placeholder="Tavoiteltu levyn pituus" min="0">
              <label for="settings__sauma_levysizew">Levyn maksimileveys</label>
              <input type="number" id="settings__sauma_levysizew" placeholder="Tavoiteltu levyn leveys" min="0">
          </fieldset> 
        </section> -->
        <section>
          <h4>Viistot</h4>
          <h6>X Suunta viisto</h6>
          <fieldset>
            
            <div class="modal__row">
              <label for="settings__x-vasen">X VASEN</label>
              <input type="number" id="settings__x-vasen" placeholder="X VASEN" min="0">
              <label for="settings__x-oikea">X OIKEA</label>
              <input type="number" id="settings__x-oikea" placeholder="X OIKEA" min="0">
            </div>
            <div class="modal__row">
              <label for="settings__x-vasen2">X VASEN 2</label>
              <input type="number" id="settings__x-vasen2" placeholder="X VASEN 2" min="0">
              <label for="settings__x-oikea2">X OIKEA 2</label>
              <input type="number" id="settings__x-oikea2" placeholder="X OIKEA 2" min="0">
            </div>
          </fieldset>
          <h6>Y Suunta viisto</h6>
          <fieldset>
            
            <div class="modal__row">
              <label for="settings__x-vasen">Y VASEN</label>
              <input type="number" id="settings__x-vasen" placeholder="Y VASEN" min="0">
              <label for="settings__x-oikea">Y OIKEA</label>
              <input type="number" id="settings__x-oikea" placeholder="Y OIKEA" min="0">
            </div>
            <div class="modal__row">
               <label for="settings__y-vasen">Y VASEN 2</label>
              <input type="number" id="settings__y-vasen" placeholder="Y VASEN 2" min="0">
              <label for="settings__y-oikea">Y OIKEA 2</label>
              <input type="number" id="settings__y-oikea" placeholder="Y OIKEA 2" min="0">
            </div>
          </fieldset>
          

        </section>
        <section>
          <h4>HengitysLäpiviennit</h4>
          <fieldset>
             <div class="modal__row">
              <label for="settings__hr">X</label>
              <input type="number" id="settings__hr" placeholder="X" min="0">
              <label for="settings__hr">Y</label>
              <input type="number" id="settings__hr" placeholder="Y" min="0">
            </div>
            <div class="modal__row">
               <label for="settings__hr">L</label>
              <input type="number" id="settings__hr" placeholder="L" min="0">
              <label for="settings__hr">K</label>
              <input type="number" id="settings__hr" placeholder="K" min="0">
            </div>
          </fieldset>
        </section>
        <section>
          <h4>Reunojen kasvatus</h4>
          <div class="modal__row">
              <label for="settings__rk">AR trim</label>
              <input type="number" id="settings__rk" placeholder="X" min="0">
              <label for="settings__rk">YR trim</label>
              <input type="number" id="settings__rk" placeholder="Y" min="0">
            </div>
            <div class="modal__row">
               <label for="settings__rk">VR trim</label>
              <input type="number" id="settings__rk" placeholder="L" min="0">
              <label for="settings__rk">OR trim</label>
              <input type="number" id="settings__rk" placeholder="K" min="0">
            </div>
          </fieldset>
        </section>
        <section>
          <h4>-Yhdistä Yx-YX</h4>
          <b>?????????????????????</b>
         

        </section>
        <section>
          <h4>Reunatyöstöt</h4>
            <div class="modal__row">
              <label for="settings__rt_ar">Board edge1 AR</label>
              <input type="number" id="settings__rt_ar" placeholder="L1" min="0">
              <label for="settings__rt_yr">Board edge1 YR</label>
              <input type="number" id="settings__rt_yr" placeholder="L2" min="0">
            </div>
            <div class="modal__row">
               <label for="settings__rt_vr">Board edge1 VR</label>
              <input type="number" id="settings__rt_vr" placeholder="L3" min="0">
              <label for="settings__rt_or">Board edge1 OR</label>
              <input type="number" id="settings__rt_or" placeholder="L4" min="0">
            </div>
             <div class="modal__row">
              <label for="settings__rt_ar">Board edge2 AR</label>
              <input type="number" id="settings__rt_ar" placeholder="L2" min="0">
              <label for="settings__rt_yr">Board edge2 YR</label>
              <input type="number" id="settings__rt_yr" placeholder="L2" min="0">
            </div>
            <div class="modal__row">
               <label for="settings__rt_vr">Board edge2 VR</label>
              <input type="number" id="settings__rt_vr" placeholder="L3" min="0">
              <label for="settings__rt_or">Board edge2 OR</label>
              <input type="number" id="settings__rt_or" placeholder="L4" min="0">
            </div>

          </fieldset>
        </section>
        <section>
          <h4>-Yhdistä Yx-YX</h4>
          
          <b>?????????????????????</b>
        </section>
       <div class="modal_close_btn drawarea__controls_btn" onclick="refresh__drawcontrols();updatearea();aloita_tyosto();">Kiinnikenäyttöön</div>
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
            <h1>Muokkaa Levyä <i class="levymodal__levyname"></i> <br>
              <span id="lt-levy_koko"></span>
            </h1>
          </div>
          <div class="col-6 levytyosto__maincol">
            <div class="visible levy_vis lt_levy_vis" style="">
              
            </div>
          </div>
          <div class="col-6 levytyosto__maincol">
            <div class="form-group">
              <h5>Väri:</h5>
              <fieldset class="form-subgroup">
                <input type="radio" name="levyn_vari" id="levy_vari_0"><label for="levy_vari_0" style="background: rgba(241, 241, 241,1);" class="levy__label" onclick="levy__interaction(1,this);">Oletus</label>
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
                $vari_id = 1;
                foreach ($_s as $sy) {

                  // echo $sy;
                  $sy_1 = str_replace("{", "", str_replace("}", "", $sy));
                  $sy_2 = str_replace("[", "", str_replace("]", "", $sy_1));
                  $sy_3 = str_replace('"', '', $sy_2);
                  $sys = explode(",", $sy_3);

                  // print_r($sys);
                  //echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="' . $sys[0] . '"><label style="color: white; background: ' . $sys[7] . ';">' . $sys[0] . '</label><input type="hidden" name="material_bg" value="' . $sys[7] . '"><input type="hidden" name="material_colour" value="' . $sys[7] . '"><input type="hidden" name="material_array" value="{' . $sys[0] . ',' . $sys[1] . ',' . $sys[2] . ',' . $sys[3] . ',' . $sys[4] . ',' . $sys[5] . ',' . $sys[6] . ',' . $sys[7] . '}"></div>';
                  //echo '<input type="radio" id="levy_vari_' . $vari_id . '" name="levyn_vari" style="display: none;"><label for="levy_vari_' . $vari_id++ . '" style="background-color: ' . $sys[7] . ';" class="wt levy__label" onclick="/*levy__interaction(1,this);*/levy_color_change(this);" value="' . $sys[0] . '">' . $sys[0] . '</label>';
                  echo '<input type="radio" name="levyn_vari" id="levy_vari_' . $vari_id . '"><label for="levy_vari_' . $vari_id . '" style="background: ' . $sys[7] . ';" class="wt levy__label" onclick="levy__interaction(1,this);">' . $sys[0] . '</label>';
                  $vari_id++;
                  // print_r($s);

                  // $sys = explode(",",$s[0]);
                  //    if(strlen($sy)>=3) {
                  //       // echo '<div class="material__customcol_item"><input type="checkbox" name="system_type" value="Classic" checked><label style="background: #E2E2E2;">' . str_replace('"','', $sy) . '</label></div>';

                  //       echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="Exterior Green" id="exterior green"><label for="exterior green" style="color: rgb(255, 255, 255); background: rgb(110, 135, 85);">FO Malibu E. Green</label><input type="hidden" name="material_bg" value="rgb(255, 255, 255)"><input type="hidden" name="material_colour" value="rgb(110, 135, 85)"><input type="hidden" name="material_array" value="Exterior Green,Exterior Green,FO/B_s2_d0,1250,600,8,Standard,#6E8755"></div>';
                  //    }
              }



              ?>
              </fieldset>
              <h5>Ruuvilinjat</h5>
              <div class="form-subgroup">
                <input type="checkbox" name="levyn_ruuvit" id="levy_ruuvit_1"><label for="levy_ruuvit_1" style="background: #F65B34" class="wt levy__label" onclick="levy__interaction(2,this);" data-type="del">POISTA RUUVILINJOJA</label>
                <input type="checkbox" name="levyn_ruuvit" id="levy_ruuvit_2"><label for="levy_ruuvit_2" style="background: #F6CB34" class="wt levy__label" onclick="levy__interaction(2,this);" data-type="mod">MUOKKAA RUUVILINJOJA</label>
              </div>
              <h5>Mitat</h5>
              <div class="form-subgroup">
                <input type="checkbox" name="levyn_mitat" id="levyn_mitat_1"><label for="levyn_mitat_1" style="background: #F6CB34" class="wt levy__label" onclick="levy__interaction(3,this);">MUOKKAA LEVYMITTOJA</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal_close_btn drawarea__controls_btn" onclick="open_ltladonta_settings(false);">Tallenna</div>
      </div>
    </div>
  </div>

</form>

