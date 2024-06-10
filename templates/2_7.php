<!-- LISTAT section on the mittaus role -->

<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_seven">
    <section class="nav">
      <nav>
        <ul>
          <li><div onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();updatearea();">Ristivalikkoon</div></li>
           <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one');refresh__drawcontrols();updatearea();" class="nav__comleted">Origo</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two');refresh__drawcontrols();updatearea();" class="nav__comleted">Aukot</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three');refresh__drawcontrols();updatearea();" class="nav__comleted">Läpiviennit</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();" class="nav__comleted">Saumat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();" class="nav__comleted">Kiinnikkeet</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();" class="nav__comleted">Kuosit</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea();siirto_muualle();" class="nav__comleted">Seinät</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();" class="nav__comleted">Levyt</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();" class="nav__comleted">Rangat</div></li>
          <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();" class="nav_current">Listat</div></li>
          <li><div onclick="$('#step_drawscreen').val('project_start');refresh__drawcontrols();">Päävalikkoon</div></li>
        </ul>
      </nav>
    </section>
    <!-- <section style="top: 40px;" class="listat_excel">

      <h3>Lista Excel:</h3>
       <table class="lista_excel">
        <tr class="headingrow">
          <td>Tyyppi</td>
          <td>Nimi</td>
          <td>Pituus (mm)</td>
          <td>KPL<td>
          <td>Asennus<td>
        </tr>
      </table>

      <div class="row">
        <div class="get_excel_btn get_lista_excel">Lataa Listaexcel</div>
        <div class="get_screenshot" onclick="takeshot(2);">Tallenna havainnekuva</div>
      </div>
      <div id="listat__havainnekuva" class="havainnekuva"></div>

      <h3>Ikkunalista Excel:</h3>
      <table class="ikkunalista_excel">
        <tr class="headingrow">
          <td>Tyyppi</td>
          <td>Nimi</td>
          <td>Pituus (mm)</td>
          <td>KPL<td>
          <td>Asennus<td>
        </tr>
      </table>
      <div class="row">
        <div class="get_excel_btn get_ikkunalista_excel">Lataa Ikkunalistaexcel</div>
        //TOCOMMENT <div class="get_screenshot" onclick="takeshot(3);">Tallenna havainnekuva</div>
      </div>
      //TOCOMMENT<div id="ikkunalistat__havainnekuva" class="havainnekuva"></div>
      
    </section> -->

    <!-- <section class="lista_as_excel">
     <h3>Asennusohjeet:</h3>
      <table>
        <tr class="headingrow">
          <td>Tyyppi</td>
          <td>Nimi</td>
          <td>Pituus (mm)</td>
          <td>KPL</td>
          <td>Asennus<td>
        </tr>
      </table>

       <div class="row">
        <div class="get_lista_as_excel get_excel_btn" onclick="lataa_lista_as_excel();">Lataa rankojen asennusohjetaulu</div>
      </div>

    </section> -->
    <section class="lista_tuo_excel">
      <h3>Tuotanto Excel:</h3>
      <table>
        <tr class="headingrow">
          <td>Rivinumero</td>
          <td>Listan tyyppi</td>
          <td>Tilauskoodi</td>
          <td>Pituus</td>
          <td>KPL</td>
          <td>MATERIAALI</td>
          <td>PAKSUUS</td>
          <td>LAATU</td>
          <td>Väri nimi</td>
          <td>NCS code</td>
          <td>Tilattu PVM</td>
          <td>STATUS</td>
          <td>Asiakas</td>
          <td>Projekti</td>
          <td>Osoite</td>
          <td>Palletgroup</td>
          <td>Asunto Nimi 1</td>
          <td>Nimi 2</td>
          <td>Työstöt </td>
          <td>Asennus</td> 
        </tr>
      </table>
      <div class="row">
        <div class="get_lista_tuo_excel get_excel_btn" onclick="lataa_lista_tuo_excel();create__excelgenerationtimestamp(this);" data-generatingtype="listat">Lataa listatuotantoexcel</div>
        <div class="get_screenshot" onclick="takeshot(2);">Tallenna havainnekuva</div>
      </div>
      <div id="listat__havainnekuva" class="havainnekuva"></div>

    </section>
</form>


