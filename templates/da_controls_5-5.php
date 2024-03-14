<!-- Wall page right column for KUOSIT section on the mittaus role -->

<div class="drawarea__controls drawarea__controls_tyostot">
   <h2>Kiinnikkeet</h2>
   <div class="drawarea__controls_elementsthree drawarea__things">
   </div>
   <fieldset class="drawarea__things_kinthings">
      <input type="radio" name="kin_toggle" id="kin_toggle_1" checked>
      <label for="kin_toggle_1" onclick="toggle__kinnikkeet_specs(1);">
         Näytä kiinnikekoordinaatit
      </label>
      <input type="radio" name="kin_toggle" id="kin_toggle_2">
      <label for="kin_toggle_2" onclick="toggle__kinnikkeet_specs(2);">
         Näytä raksit
      </label>
   </fieldset>
   <div class="drawarea__controls_settingsbtn drawarea__controls_btn" onclick="open_ladonta_settings(true);settings__modal_open(this);" data-asmodal_mode="kin_as">
      Kiinnikkeiden asetukset
   </div>
   <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();">
      Korjaa yksittäisiä levyjä
   </div>
   <div class="drawarea__controls_btn greenbtn" onclick="$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea(); siirto_muualle();" style="background: darkgreen;text-align: center;">Siirrä mitat muille seinille</div>
   <?php include("./templates/house_nav.php");  ?>
</div>

