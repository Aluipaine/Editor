<!-- LÄPIVIENNIT section on the mittaus role -->

<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_three">

   </div>
   <p>Anna läpiviennin keskusta MOD ORIGOSTA <br>
   EXCELissä näkyy yksi luku (halkaisia) X kun reikä on pyöreä , X ja Y kun reikä on neliskanttinen
   </p>

    <section class="nav">
      <nav>
        <ul>
         <li><div onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();updatearea();">Ristivalikkoon</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one');refresh__drawcontrols();updatearea();" class="nav__comleted">Origo</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two');refresh__drawcontrols();updatearea();" class="nav__comleted">Aukot</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three');refresh__drawcontrols();updatearea();" class="nav_current">Läpiviennit</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();">Saumat</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();">Kiinnikkeet</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();">Kuosit</div></li>
         
         <li><div onclick="alert('Onnistuu kiinnikkeet-kohdasta');">Seinät</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();">Levyt</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();">Rangat</div></li>
         <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();">Listat</div></li>
         <li><div onclick="$('#step_drawscreen').val('project_start');refresh__drawcontrols();updatearea();">Päävalikkoon</div></li>
          <!-- <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_four');">Seuraava</div></li> -->

        
        </ul>
      </nav>
    </section>

    <div class="as-container out lvas asetustaulu">
      <div class="modal-background">
         <div class="modal">
            <div class="modal_close_btn" onclick="this.parentElement.parentElement.parentElement.classList.remove('two');this.parentElement.parentElement.parentElement.classList.add('out');"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>
            <h2>Reijitys</h2>
            <h6>Tee yli 10000mm2 reijät Framenä. </h6>
            <table>
               <tbody class="reikaframe__tbody">						
               <tr class="headingrow">
                  <td>Sarakkeet</td>
                  <td>Dustiksi?</td>
               </tr>

               </tbody>
            </table>
            <h2>Reikä asetukset </h2>
            <table>
               <tbody class="lapiviennit__tbody">
               <tr class="headingrow">
                  <td>ON/OFF</td>
                  <td>Reikätyyppi</td>
                  <td>Nimi</td>
                  <td>Reikä X</td>
                  <td>Reikä Y</td>
                  <td>Ensisijaisesti Dustiksi</td>
                  <td>L2A Lista</td>
                  <td>L2A LISTAN PITUUS +	</td>
                  <td>L2A LISTAN LAATU</td>
                  <td>L2B Lista</td>
                  <td>L2B LISTAN PITUUS +	</td>
                  <td>L2B LISTAN LAATU</td>
               </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</form>

<div class="modal-container lv_modal">
    <div class="modal-background">
        <div class="modal">
            <div class="modal_close_btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>

            <section class="row">
                <div class="col-6"><h2><input type="text" value="Läpivienti " class="lineinput" id="lv__name"></h2></div>
                <div class="col-6">
                    <fieldset class="modal__lvtypes">
                        <input name="lv__sade" type="radio" id="lapiviennit__sade_zero" onchange="change__lapivienti_sizecord(this);" value="6">
                        <label for="lapiviennit__sade_zero">6mm</label>

                        <input name="lv__sade" type="radio" id="lapiviennit__sade_first" onchange="change__lapivienti_sizecord(this);" value="25">
                        <label for="lapiviennit__sade_first">25</label>
                        <input name="lv__sade" type="radio" id="lapiviennit__sade_second" onchange="change__lapivienti_sizecord(this);" value="50">
                        <label for="lapiviennit__sade_second">50</label>
                        <input name="lv__sade" type="radio" id="lapiviennit__sade_third" onchange="change__lapivienti_sizecord(this);" value="75">
                        <label for="lapiviennit__sade_third">75</label>
                        <input name="lv__sade" type="radio" id="lapiviennit__sade_fourth" onchange="change__lapivienti_sizecord(this);" value="100">
                        <label for="lapiviennit__sade_fourth">100</label>
                        <input name="lv__sade" type="radio" id="lapiviennit__sade_fifth" onchange="change__lapivienti_sizecord(this);" value="125">
                        <label for="lapiviennit__sade_fifth">125</label>

                        <input type="text" placeholder="arvo..." id="lapiviennit__sade_muucord" value=""></fieldset>
                    <i>Mikäli haluat luoda neliön, käytä muotoa *korkeus*x*leveys*</i>
                </div>


            </section>

            <section>
                <h4>Lisään läpiviennin</h4>
                <fieldset>
                    <input name="lv_from" type="radio" onfocus="give__origo_cord();" id="from__origo_lapivienti">
                    <label for="from__origo_lapivienti">MOD Origosta</label>
                    <input name="lv__distances" type="radio" id="lvfrom__checkpoint_1" onfocus="get_from_custom_mp(1);">
                    <label for="lvfrom__checkpoint_1">Mittapisteestä 1</label>
                    <input name="lv__distances" type="radio" id="lvfrom__checkpoint_2" onfocus="get_from_custom_mp(2);">
                    <label for="lvfrom__checkpoint_2">Mittapisteestä 2</label>
                    <input name="lv_from" type="radio" id="from__side_lapivienti" onfocus="null__origo_cord();">
                    <label for="from__side_lapivienti">Omat mitat</label>
                </fieldset>
                <section class="row cord">
                    <div class="col-6 row" style="display: flex;flex-direction: column;">
                        <div class="lvcord__item cord__item">
                            <label for="lvcord_low" class="label_lv_cord_a">Ylös</label>
                            <input id="lvcord_low" name="" type="tel" class="lineinput" onchange="change__newdiv_cord();cord__check(this);">
                        </div>
                        <div class="lvcord__item cord__item">
                            <label for="lvcord_left" class="label_lv_cord_b">Oikealle</label>
                            <input id="lvcord_left" name="" type="tel" class="lineinput" onchange="change__newdiv_cord();cord__check(this);">
                        </div>

                        <div class="lvcord__item cord__item" style="display: none;">
                            <label for="lvcord_r">Oikealle</label>
                            <input id="lvcord_r" name="" type="tel" class="lineinput" onchange="change__newdiv_cord();cord__check(this);">
                        </div>
                    </div>
                    <div class="col-6">
                    <fieldset>
                        <input name="lvframing" type="radio" id="lvframing_dust" onfocus="" checked>
                        <label for="lvframing_dust">Dustiksi</label>
                        <input name="lvframing" type="radio" id="lvframing_frame" onfocus="">
                        <label for="lvframing_frame">Frameksi</label>
                    </fieldset>
                        <div id="setting__canvas_lapiviennit" class="setting__canvas">

                        </div>
                    </div>
                </section>
            </section>

            <section class="comment__section">
                <h4>Lähetä kommentti</h4>
                <textarea name="lv_comment" id="lv_comment" cols="30" rows="10" style="resize: none;"></textarea>
                <div class="row">
                    <div class="col-6">
                        <h6>Keneltä</h6>
                        <input name="lv_comment_from" id="lv_comment_from" type="text" value="<?php echo $_GET['user']; ?>">
                    </div>
                    <div class="col-6">
                        <h6>Kenelle</h6>
                        <select name="lv_comment_to" id="lv_comment_to">
                            <option value="Jari">Jari</option>
                            <option value="Henkka">Henkka</option>
                            <option value="Marko">Marko</option>
                        </select>
                    </div>
                </div>
            </section>
            <div class="modal_close_btn drawarea__controls_btn" onclick="mitta__create_mitta()">Lisää läpivienti</div>
        </div>
    </div>
</div>

<dialog id="lv_remove_confirm">
    <div class="content">
        <div class="center">
            <p>Et voi luoda läpivientiä aukon päälle</p>
            <button class="okay drawarea__controls_btn">Kyllä</button>
        </div>
    </div>
</dialog>


