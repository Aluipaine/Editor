
<section class="step_screen drawscreen_section form__butsection" id="drawscreen_section_six">

    <!-- <input type="hidden" value="drawscreen_section_six" name="step" class="step">
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

         <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('rooms');">Ristivalikkoon</div></li>
           <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_one');" class="nav__comleted">Origo</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_two');" class="nav__comleted">Aukot</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_three');" class="nav__comleted">Läpiviennit</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_four');" class="nav__comleted">Saumat</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_five');" class="nav__comleted">Ladonta</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_tyostot');" class="nav__comleted">Kiinnikkeet</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_eight');osittainen_siirto_muualle();" class="nav__comleted">Seinät</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_esikatselu');" class="nav__comleted">Levyt</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_six');" class="nav_current">Rangat</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_seven');">Listat</div></li>
          <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('project_start');">Päävalikkoon</div></li>
        </ul> 
      </nav>
    </section>
    <section class="ranka_excel">
     <!-- Set for input default center coords  -->
     <h3>Ranka excel:</h3>
      <table>
        <tr>
          <td class="cool">Tyyppi</td>
          <td class="cool">Nimi</td>
          <td class="cool">Pituus (mm)</td>
          <td class="cool">KPL</td>
          <td class="cool">Asennus<td>
        </tr>
      </table>

       <div class="row">
        <div class="get_ranka_excel get_excel_btn">Lataa ranka excel</div>
        <div class="get_screenshot" onclick="takeshot(1);">Tallenna havainnekuva</div>
      </div>

      <div id="rangat__havainnekuva" class="havainnekuva"></div>

    </section>

  <div class="modal-container">
   <div class="modal-background">
     <div class="modal">
        <div class="modal_close_btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>
        <h2>Ranka-asetukset</h2>
        <section>
          <h4>Suunta</h4>
          <fieldset>
            <label for="settings__sauma_levysizeh">Tavoiteltu levyn pituus</label>
              <input type="number" id="settings__sauma_levysizeh" placeholder="Tavoiteltu levyn pituus" min="0">
              <label for="settings__sauma_levysizew">Tavoiteltu levyn leveys</label>
              <input type="number" id="settings__sauma_levysizew" placeholder="Tavoiteltu levyn leveys" min="0">
          </fieldset>
        </section>
       <div class="modal_close_btn drawarea__controls_btn" onclick="">Rangoita</div>
     </div>
   </div>
  </div>


</section>


