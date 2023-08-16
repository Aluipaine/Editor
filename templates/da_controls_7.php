<div class="drawarea__controls drawarea__controls_seven">
   <h2>Listat</h2>
   <p>Voit hallita ja säätää listoja asetuksista</p>
   <div class="drawarea__controls_btns">
      <div class="aukko_settingsbtn" onclick="open_aukko_settings(true);">
         Lista- ja ranka-asetuksia
      </div>
      <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();">
         Ristivalikkoon
      </div>
      <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('drawscreen_section_eight');siirto_muualle();refresh__drawcontrols();" style="background: #147605;text-align: center;">Levytä loput seinät tämän seinän mukaan</div>
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>
