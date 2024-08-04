<!-- AUKOT section on the mittaus role -->
<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_two">
   </div>
   <!--  <input type="hidden" value="drawscreen_section_two" name="step" class="step">
      <input type="hidden" value="" name="wall" class="wall">
      <input type="hidden" value="" name="id" class="id">
      <input type="hidden" value="" name="room" class="room">
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
   <h4>Huomio! Aukkoja voi olla yhdessä seinässä max 10.</h4>
   <section class="nav">
      <nav>
         <ul>
         <li><div onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();updatearea();">Ristivalikkoon</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one');refresh__drawcontrols();updatearea();" class="nav__comleted">Origo</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two');refresh__drawcontrols();updatearea();" class="nav_current">Aukot</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three');refresh__drawcontrols();updatearea();">Läpiviennit</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();">Saumat</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();">Kiinnikkeet</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();">Kuosit</div></li>
         
         <li><div onclick="alert('Onnistuu kiinnikkeet-kohdasta');">Seinät</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();">Levyt</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();">Rangat</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();">Listat</div></li>
         <li><div onclick="$('#step_drawscreen').val('project_start');refresh__drawcontrols();updatearea();">Päävalikkoon</div></li>
            <!-- <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_three');">Seuraava</div></li> -->
         </ul>
      </nav>
   </section>
   <div class="modal-container asetustaulu uusiaukko">
      <div class="modal-background">
         <div class="modal">
            <div class="modal_close_btn" onclick="modding=false;tomode_object=null;">
               <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path>
               </svg>
            </div>
            <div class="col-6">
               <section>
                  <fieldset class="aukko__types" style="background: #18ab00;">
                     <input name="aukko__types" type="radio" id="type__door" onchange="change__aukko_sizecord();">
                     <label for="type__door">Ovi</label>
                     <input name="aukko__types" type="radio" id="type__window" onchange="change__aukko_sizecord();">
                     <label for="type__window">Ikkuna</label>
                     <input name="aukko__types" type="radio" id="type__palkki" onchange="change__aukko_sizecord();">
                     <label for="type__palkki">Palkki</label>
                     <input name="aukko__types" type="radio" id="type__collar" onchange="change__aukko_sizecord();">
                     <label for="type__collar">Pilari</label>
                     <input name="aukko__types" type="radio" id="type__ventilation" onchange="change__aukko_sizecord();">
                     <label for="type__ventilation">Ilmastointi</label>
                  </fieldset>
               </section>
            </div>
            <div class="row">
               <div class="col-6">
                  <h2 style="margin-top: 10px;"><input type="text" value="Aukko" class="lineinput" id="aukko__name" style="width: 91%;max-width: unset;margin-right: auto;display: inline-block;margin-top: 10px;"></h2>
               </div>
               <div class="col-6">
                  <fieldset class="aukko__asiat"> 
                     <input name="aukko__distances" type="radio" id="from__origo_aukko" onfocus="give__origo_cord();changedimensions_aukko();">
                     <label for="from__origo_aukko">MOD Origosta</label>
                     <input name="aukko__distances" type="radio" id="from__checkpoint_1" onfocus="get_from_custom_mp(1);changedimensions_aukko();">
                     <label for="from__checkpoint_1">Mittapisteestä 1</label>
                     <input name="aukko__distances" type="radio" id="from__checkpoint_2" onfocus="get_from_custom_mp(2);changedimensions_aukko();">
                     <label for="from__checkpoint_2">Mittapisteestä 2</label>
                     <input name="aukko__distances" type="radio" id="from__side_aukko" onfocus="null__origo_cord();changedimensions_aukko();">
                     <label for="from__side_aukko">Omat mitat</label>
                  </fieldset>
               </div>
            </div>
            <section style="padding: 0;">
               <section class="row cord" style="padding: 0;">
                  <div class="col-6" style="display: flex;flex-direction: row;width: 50%;">
                     <div class="cord__item">
                        <label for="aukotcord_left">Vasen reuna</label>
                        <input id="aukotcord_left" name="" type="tel" class="lineinput" onchange="changedimensions_aukko();cord__check(this);" oninput="changedimensions_aukko();" onclick="changedimensions_aukko();" onfocus="changedimensions_aukko();" onfocusout="changedimensions_aukko();" step="1">
                     </div>
                     <div class="cord__item">
                        <label for="aukotcord_right">Oikea reuna</label>
                        <input id="aukotcord_right" name="" type="tel" class="lineinput" onchange="changedimensions_aukko();cord__check(this);" oninput="changedimensions_aukko();" onclick="changedimensions_aukko();" onfocus="changedimensions_aukko();" onfocusout="changedimensions_aukko();" step="1">
                     </div>
                     <div class="cord__item">
                        <label for="aukotcord_low">Alareuna</label>
                        <input id="aukotcord_low" name="" type="tel" class="lineinput" onchange="changedimensions_aukko();cord__check(this);" oninput="changedimensions_aukko();" onclick="changedimensions_aukko();" onfocus="changedimensions_aukko();" onfocusout="changedimensions_aukko();" min="-200" step="1">
                     </div>
                     <div class="cord__item">
                        <label for="aukotcord_up">Yläreuna</label>
                        <input id="aukotcord_up" name="" type="tel" class="lineinput" onchange="changedimensions_aukko();cord__check(this);" oninput="changedimensions_aukko();" onclick="changedimensions_aukko();" onfocus="changedimensions_aukko();" onfocusout="changedimensions_aukko();" step="1">
                     </div>
                  </div>
                  <div class="col-6 widths" style="display: flex;">
                     <div class="cord__item" style="margin-left: auto;">
                        <label for="hole__width">Leveys</label>
                        <input id="hole__width" name="" type="number" class="lineinput" onchange="changedimensions_aukko();" oninput="changedimensions_aukko();" onclick="changedimensions_aukko();">
                     </div>
                     <div class="cord__item">
                        <label for="hole__height">Korkeus</label>
                        <input id="hole__height" name="" type="number" class="lineinput" onchange="changedimensions_aukko();" oninput="changedimensions_aukko();" onclick="changedimensions_aukko();">
                     </div>
                     <div id="setting__canvas_aukot" class="setting__canvas" style="height: 480px; width: 680px;">
                        <div class="drawarea__origo" id="drawarea__origo_central"></div>
                        <!--<main class="canvas" style="width: 100%;">-->
                        <span class="settings__aukko" id="settings__aukko"></span>
                     </div>
                  </div>
               </section>
            </section>
            <section class="comment__section">
               <div class="row">
                  <div class="col-6">
                     <h4>Ylitysasetukset</h4>                  
                  </div>
                  
                  <div class="col-6">
                     <fieldset class="aukko_ylitys"></fieldset>
                    
                     <!-- <input name="aukko_comment_to" id="aukko_comment_to" type="text"> -->
                  </div>
               </div>
            </section>
            <section class="comment__section">
               <h4>Lähetä kommentti</h4>
               <textarea name="aukko_comment" id="aukko_comment" cols="30" rows="10" style="resize: none;"></textarea>
               <div class="row">
                  <div class="col-6">
                     <h6>Keneltä</h6>
                     <input name="aukko_comment_from" id="aukko_comment_from" type="text" value="" >
                  </div>
                  <div class="col-6">
                     <h6>Kenelle</h6>
                     <select name="aukko_comment_to" id="aukko_comment_to">
                        <option value="Jari">Jari</option>
                        <option value="Henkka">Henkka</option>
                        <option value="Marko">Marko</option>
                     </select>
                     <!-- <input name="aukko_comment_to" id="aukko_comment_to" type="text"> -->
                  </div>
               </div>
            </section>
            <div class="modal_close_btn drawarea__controls_btn" onclick="mitta__create_mitta()">Lisää aukko</div>
            <i>Huomioithan, että aukot eivät saa olla päällekkäin.</i>
         </div>
      </div>
   </div>

   <div class="aukko_container out aukkoas asetustaulu">
      <div class="modal-background">
         <div class="modal">
            <div class="modal_close_btn" onclick="this.parentElement.parentElement.parentElement.classList.remove('two');this.parentElement.parentElement.parentElement.classList.add('out');"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>
            <section id="hole_set">
               
            </section>
         </div>
      </div>
   </div>
</form>