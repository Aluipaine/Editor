
<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_four">
     </div>
    <!-- <input type="hidden" value="drawscreen_section_four" name="step" class="step">
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
           <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one');refresh__drawcontrols();updatearea();" class="nav__comleted">Origo</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two');refresh__drawcontrols();updatearea();" class="nav__comleted">Aukot</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three');refresh__drawcontrols();updatearea();" class="nav__comleted">Läpiviennit</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();" class="nav_current">Saumat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();">Kiinnikkeet</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();submitprogress('', 'adding', '', 'sau');">Korjailu</div></li>
          
          <li><div onclick="alert('Onnistuu kiinnikkeet-kohdasta');">Seinät</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();">Levyt</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();">Rangat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();">Listat</div></li>
          <li><div onclick="$('#step_drawscreen').val('project_start');refresh__drawcontrols();updatearea();">Päävalikkoon</div></li>
          <!-- <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_five');">Seuraava</div></li> -->
        </ul>

      </nav>

    </section>

  <div class="modal-container sauma_as">
   <div class="modal-background">
     <div class="modal">
        <div class="modal_close_btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>
        <h2>Sauma-asetukset</h2>
        <section>
          <?php
          $sy = json_decode(mysqli_query($db, 'SELECT `meta_value` FROM `settingsmeta` WHERE `id`=100 AND `meta_key`="s_settings"')->fetch_assoc()["meta_value"], true);
          ?>
          <h4>Levytyksen suunta</h4>
          <fieldset>
            <input type="radio" id="settings__sauma_pysty" name="sauma__suunta" onclick="saumoitus__examplephoto()" <?php echo $sy[24] == "0" ? "checked" : "" ?>>
            <label for="settings__sauma_pysty">Levytys pystyyn</label>
            <input type="radio" id="settings__sauma_vaaka" name="sauma__suunta" onclick="saumoitus__examplephoto()" <?php echo $sy[24] == "1" ? "checked" : "" ?>>
            <label for="settings__sauma_vaaka">Levytys vaakaan</label>
          </fieldset>
        </section>
        <section>
          <h4>Saumoituksen tyyppi</h4>
          <fieldset>
            <input type="radio" id="settings__saumahanta-oik" name="sauma__xtype" onclick="saumoitus__examplephoto()" <?php echo $sy[25] == "0" ? "checked" : "" ?>>
            <label for="settings__saumahanta-oik">Vajaa levy oikealle</label>
            <input type="radio" id="settings__saumahanta-vas" name="sauma__xtype" onclick="saumoitus__examplephoto()" <?php echo $sy[25] == "1" ? "checked" : "" ?>>
            <label for="settings__saumahanta-vas">Vajaa levy vasemalle</label>
            <input type="radio" id="settings__saumahanta-tasoitus" name="sauma__xtype" onclick="saumoitus__examplephoto()" <?php echo $sy[25] == "2" ? "checked" : "" ?>>
            <label for="settings__saumahanta-tasoitus">Tasaleveys</label>
          </fieldset>
          <fieldset>
            <input type="radio" id="settings__saumahanta-yla" name="sauma__ytype" onclick="saumoitus__examplephoto()" <?php echo $sy[26] == "0" ? "checked" : "" ?>>
            <label for="settings__saumahanta-yla">Vajaa levy ylös</label>
            <input type="radio" id="settings__saumahanta-ala" name="sauma__ytype" onclick="saumoitus__examplephoto()" <?php echo $sy[26] == "1" ? "checked" : "" ?>>
            <label for="settings__saumahanta-ala">Vajaa levy alas</label>
            <input type="radio" id="settings__saumahanta-vaakatasoitus" name="sauma__ytype" onclick="saumoitus__examplephoto()" <?php echo $sy[26] == "2" ? "checked" : "" ?>>
            <label for="settings__saumahanta-vaakatasoitus">Tasakorkeus</label>
          </fieldset>
        </section>
        <section>
          <div class="row">
            <div class="col-6">
              <h4>Saumoitus</h4>
              <fieldset style="flex-direction: column;display: flex;" class="saumoitus__inputs">
                <input type="radio" id="saumoitus__sauma_one" name="sauma__saumoitus_x" value="Pystysaumat aukkojen yli" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_two').checked = false;" <?php echo $sy[27] == "0" ? "checked" : "" ?>>
                <label for="saumoitus__sauma_one">Pystysaumat aukkojen yli</label>

                <input type="radio" id="saumoitus__sauma_two" name="sauma__saumoitus_x" value="Pystysaumat aukkojen mukaan" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_one').checked = false;" <?php echo $sy[27] == "1" ? "checked" : "" ?>>
                <label for="saumoitus__sauma_two">Pystysaumat aukkojen mukaan </label>
              </fieldset>
              <fieldset style="flex-direction: column;display: flex;" class="saumoitus__inputs">
                <input type="radio" id="saumoitus__sauma_one_v" name="sauma__saumoitus_y" value="Vaakasaumat aukkojen yli" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_three').checked = false;" <?php echo $sy[28] == "0" ? "checked" : "" ?>>
                <label for="saumoitus__sauma_one_v">Vaakasaumat aukkojen yli</label>

                <input type="radio" id="saumoitus__sauma_three" name="sauma__saumoitus_y" value="Vaakasaumat aukkojen mukaan" onclick="saumoitus__examplephoto();" onfocus="saumoitus__examplephoto();document.getElementById('saumoitus__sauma_one_v').checked = false;" <?php echo $sy[28] == "1" ? "checked" : "" ?>>
                <label for="saumoitus__sauma_three">Vaakasaumat aukkojen mukaan</label>
              </fieldset>
               
                
              
            </div>
            <div class="col-6">
              <h4>Rakennekuva</h4>
              <img src="/img/saumoitus/s1.jpg" id="sauma__saumoitus_photo" style="max-width: 100%;">
            </div>
          </div>
        </section>

        <section>
            <h4>Tavoitelu levyn koko (modulissa, mm) </h4>
            <fieldset id="sauma__presets">

            </fieldset>
            <fieldset class="row sauma__setting_row">
            <div class="col-6" style="flex-direction: column;">
              <label for="settings__sauma_intervalx">Leveys</label>
              <input type="number" id="settings__sauma_intervalx" min="0" placeholder="numero tähän.." onchange="document.querySelector('#settings__sauma_interval_x').value = this.value" value="1250">
              
              <label for="settings__sauma_intervaly">Pituus</label>
              <input type="number" id="settings__sauma_intervaly" min="0" placeholder="numero tähän.." onchange="document.querySelector('#settings__sauma_interval_y').value = this.value" value="3000">

              <input type="hidden" id="settings__sauma_interval_x" value="1260">
              <input type="hidden" id="settings__sauma_interval_y" value="3010">
            </div>
            <div class="col-6" style="flex-direction: column;">
              <label for="settings__sauma_aihiopituus">Aihioleveys</label>
              <input type="number" id="settings__sauma_aihiopituus" min="0">
              <label for="settings__sauma_aihioleveys">Aihiopituus</label>
              <input type="number" id="settings__sauma_aihioleveys" min="0">
            </div>
              
            </fieldset>
        </section>

        <section>
            <h4>
              Pystysaumojen asetukset
            </h4>
            <table>
              <tbody class="saumapysty__tbody tabs__target_table">			
                <tr class="headingrow">
                  <td>Nimi</td>
                  <td>Paksuus</td>
                  <td>Lista</td>
                  <td>Laatu</td>
                  
                </tr>
              </tbody>
            </table>

          </section>
          <section>
            <h4>
              Vaakasaumojen asetukset
            </h4>
            <table>
              <tbody class="saumavaaka__tbody tabs__target_table">			
                <tr class="headingrow">
                  <td>Nimi</td>
                  <td>Paksuus</td>
                  <td>Materiaali</td>
                  <td>Laatu</td>                  
                </tr>
              </tbody>
            </table>
          </section>


        <!-- <script>saumoitus__examplephoto();</script> -->
       <div class="modal_close_btn drawarea__controls_btn" onclick="saumoita();refresh__drawcontrols();updatearea();submitprogress('','adding','','sau');">Saumoita</div>
     </div>
   </div>
  </div>
</form>
