<!-- Wall page right column for LISTAT section on the mittaus role -->

<div class="drawarea__controls drawarea__controls_seven">
   <h2>Listat</h2>
   <p>Voit hallita ja säätää listoja asetuksista</p>
   <div class="drawarea__controls_btns">
      <div class="aukko_settingsbtn" onclick="settings__modal_open(this);" data-asmodal_mode="rankalista_as">
         Lista- ja ranka-asetuksia
      </div>
      <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();">
         Ristivalikkoon
      </div>
      <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();updatearea();siirto_muualle();" style="background: #147605;text-align: center;">Levytä loput seinät tämän seinän mukaan</div>
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>
