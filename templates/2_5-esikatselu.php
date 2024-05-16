<!-- KUOSIT section on the mittaus role -->

<form class="step_screen drawscreen_section form__butsection" action="/updateproject.php" enctype='multipart/form-data' id="drawscreen_section_esikatselu">
     <!--  <input type="hidden" value="drawscreen_section_tyostot" name="step" class="step">
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

      <section class="nav" style="position:relative;">
         <nav>
            <ul>
               <li><div onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();updatearea();">Ristivalikkoon</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one');refresh__drawcontrols();updatearea();" class="nav__comleted">Origo</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two');refresh__drawcontrols();updatearea();" class="nav__comleted">Aukot</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three');refresh__drawcontrols();updatearea();" class="nav__comleted">Läpiviennit</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();" class="nav__comleted">Saumat</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();" class="nav__comleted">Kiinnikkeet</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();" class="nav__comleted">Kuosit</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea(); siirto_muualle();" class="nav__comleted">Seinät</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();" class="nav_current">Levyt</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea();">Rangat</div></li>
               <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea();">Listat</div></li>
               <li><div onclick="$('#step_drawscreen').val('project_start');refresh__drawcontrols();updatearea();">Päävalikkoon</div></li>
            </ul>
       </nav>
    </section>
    <section class="excel">
      <h3>Levyexcel</h3>
      
      <div class="greenbtn levyexcel__btn" onclick="create__levy_excel(false);">Generoi Levyexcel</div>
     <!-- Set for input default center coords  -->
      <table class="levy_excel">
        <tr class="headingrow">
          <td>Part number</td>
          <td>Materialcode</td>
          <td>Leveys (X)</td>
          <td>Pituus (Y)</td>
          <td>Quantity</td>
          <td>Nimi 1</td>
          <td>X1</td>
          <td>X2</td>
          <td>X3</td>
          <td>X4</td>
          <td>X5</td>
          <td>X6</td>
          <td>X7</td>
          <td>X8</td>
          <td>X9</td>
          <td>X10</td>
          <td>Y1</td>
          <td>Y2</td>
          <td>Y3</td>
          <td>Y5</td>
          <td>Y4</td>
          <td>Y6</td>
          <td>Y7</td>
          <td>Y8</td>
          <td>Y9</td>
          <td>Y10</td>
          <td>Palletgroup</td>
          <td>Diameter</td>
          <td>Prioriteetti</td>
          <td>X</td>
          <td>Y</td>
          <td>X</td>
          <td>Y</td>
          <td>PR1_X</td>
          <td>PR1_Y</td>
          <td>PR1_DX</td>
          <td>PR1_DY</td>
          <td>PR2_X</td>
          <td>PR2_Y</td>
          <td>PR1_DX</td>
          <td>PR2_DY</td>
          <td>PR3_X</td>
          <td>PR3_Y</td>
          <td>PR3_DX</td>
          <td>PR3_DY</td>
          <td>PR4_X</td>
          <td>PR4_Y</td>
          <td>PR4_DX</td>
          <td>PR4_DY</td>
          <td>PF1_X</td>
          <td>PF1_Y</td>
          <td>PF1_DX</td>
          <td>PF1_DY</td>
          <td>PF2_X</td>
          <td>PF2_Y</td>
          <td>PF2_DX</td>
          <td>PF2_DY</td>
          <td>CH 0=OFF 1= ON</td>
          <td>Y Vasen</td>
          <td>Y oikea</td>
          <td>Y Vasen</td>
          <td>Y oikea</td>
          <td>X ala</td>
          <td>x ylä</td>
          <td>X ala</td>
          <td>X ylä</td>
          <td>VH1_X</td>
          <td>VH1_Y</td>
          <td>VH1_L</td>
          <td>VH1_KPL</td>
          <td>VH1_K</td>
          <td>Asiakas</td>
          <td>Tarra</td>
          <td>Nimi 2</td>
          <td>Asennus</td>
          <td>Työstöt</td>
          <td>MPR</td>
          <td>Type (drawing)</td>
          <td>Thickness</td>
          <td>Structure</td>
          <td>Plus</td>
          <td>AR Edge 1</td>
          <td>YR Edge 1</td>
          <td>VR Edge 1</td>
          <td>OR Edge 1</td>
          <td>AR Edge 2</td>
          <td>YR Edge 2</td>
          <td>VR Edge 2</td>
          <td>OR Edge 2</td>
          <td>AR Trim</td>
          <td>YR Trim</td>
          <td>VR Trim</td>
          <td>OR Trim</td>
          <td>Yhdistä Xx-XX</td>
          <td>Yhdistä Yx-YX</td>

         
          
          
         
          
          
          
          
          <!-- todel:
         
          <td></td>
          <td>X KPL</td>
          <td>Y KPL</td>
          <td>Yhteensä</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>          
          <td></td>
          <td></td>
          <td></td>
          <td></td> -->
          
        </tr>

      </table>
      <div class="row">
          <div class="get_excel get_excel_btn get_levy_btn" onclick="generating_excel();create__excelgenerationtimestamp(this);" data-generatingtype="levyt">Lataa Excel</div>
          <div class="get_screenshot" onclick="takeshot(0);">Tallenna havainnekuva</div>

      </div>
      <div id="levyt__havainnekuva" class="havainnekuva"></div>
      
    </section>
</form>