<!-- LEVYT section on the mittaus role -->

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
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five'); refresh__drawcontrols();updatearea();" class="nav_current">Kuosit</div></li>
          
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea(); siirto_muualle();">Seinät</div></li>
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
        </div>
        <div class="row korjaus_secondrow">
          <div class="col-6 levytyosto__maincol">
            <aside class="levytyosto__maincol_y levytyosto__maincol_btn" onclick="lt_addmitta('pysty');"><b>Lisää pystylinja</b></aside>
            <div class="levytyosto__maincol_x levytyosto__maincol_btn" onclick="lt_addmitta('vaaka');">Lisää vaakalinja</div>
            <div class="visible levy_vis lt_levy_vis" style=""></div>
          </div>
          <div class="col-4 levytyosto__maincol">
            <div class="form-group">
              <div class="form-subgroup">
                <input type="checkbox" name="show_borders" id="levy_pysty" onfocus="show__borders(this);"><label class="show_borders" for="levy_pysty" style="background: #f56765;" class="wt levy__label" >NÄYTÄ X10 & X10</label>
                <input type="checkbox" name="show_borders" id="levy_vaaka" onfocus="show__borders(this);"><label class="show_borders" for="levy_vaaka" style="background: #f56765" class="wt levy__label" >NÄYTÄ Y10 & Y10</label>
              </div>
            </div>
            <div class="form-group">
              <h5>Väri:</h5>
              <fieldset class="form-subgroup"  id="sauma__presets_2">
              </fieldset>
              <h5>Ruuvilinjat</h5>
              <div class="form-subgroup">
                <input type="radio" name="levyn_ruuvit" id="levy_ruuvit_0" style="display: none;"><label for="levy_ruuvit_0" style="background: #3ece3b;display: none;" class="wt levy__label" onclick="/*levy__interaction(2,this);*/" data-type="add">LISÄÄ RUUVILINJOJA</label>
                <input type="radio" name="levyn_ruuvit" id="levy_ruuvit_1"><label for="levy_ruuvit_1" style="background: #F65B34" class="wt levy__label" onclick="levy__interaction(2,this);" data-type="del">POISTA RUUVILINJOJA</label>
                <input type="radio" name="levyn_ruuvit" id="levy_ruuvit_2"><label for="levy_ruuvit_2" style="background: #F6CB34" class="wt levy__label" onclick="levy__interaction(2,this);" data-type="mod">MUOKKAA RUUVILINJOJA</label>
              </div>
              <h5>Läpiviennit</h5>
                <fieldset class="form-subgroup">
                    <input type="checkbox" name="levyn_lv" id="add_lv_modal" style="display: none;" class="levyn_lv">
                    <label for="add_lv_modal" style="background: rgba(241, 241, 241,1);" class="levy__label" onclick="settings__modal_open(this);close" data-asmodal_mode="lv_modal">ASETA LÄPIVIENTEJÄ</label>
                </fieldset>
              <h5 style="pointer-events:none;opacity:0;">Mitat</h5>
              <div class="form-subgroup" style="pointer-events:none;opacity:0;">
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

