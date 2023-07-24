
<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_seven">
   <!--  <input type="hidden" value="drawscreen_section_seven" name="step" class="step">
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
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();" class="nav__comleted">Saumat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();" class="nav__comleted">Kiinnikkeet</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();" class="nav__comleted">Ladonta</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea();siirto_muualle();" class="nav__comleted">Seinät</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();" class="nav__comleted">Levyt</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();" class="nav__comleted">Rangat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();" class="nav_current">Listat</div></li>
          <li><div onclick="$('#step_drawscreen').val('project_start');">Päävalikkoon</div></li>
        </ul>
      </nav>
    </section>
    <section style="top: 40px;" class="listat_excel">

      <h3>Lista Excel:</h3>
       <table class="lista_excel">
        <tr>
          <td class="cool">Tyyppi</td>
          <td class="cool">Nimi</td>
          <td class="cool">Pituus (mm)</td>
          <td class="cool">KPL<td>
          <td class="cool">Asennus<td>
        </tr>
      </table>

      <div class="row">
        <div class="get_excel_btn get_lista_excel">Lataa Listaexcel</div>
        <div class="get_screenshot" onclick="takeshot(2);">Tallenna havainnekuva</div>
      </div>
      <div id="listat__havainnekuva" class="havainnekuva"></div>

      <h3>Ikkunalista Excel:</h3>
      <table class="ikkunalista_excel">
        <tr>
          <td class="cool">Tyyppi</td>
          <td class="cool">Nimi</td>
          <td class="cool">Pituus (mm)</td>
          <td class="cool">KPL<td>
          <td class="cool">Asennus<td>
        </tr>
      </table>
      <div class="row">
        <div class="get_excel_btn get_ikkunalista_excel">Lataa Ikkunalistaexcel</div>
        <!-- <div class="get_screenshot" onclick="takeshot(3);">Tallenna havainnekuva</div> -->
      </div>
      <!-- <div id="ikkunalistat__havainnekuva" class="havainnekuva"></div> -->
      
    </section>
  

</form>


