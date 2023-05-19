<div class="drawarea__controls drawarea__controls_tyostot">
   <h2>Kiinnikkeet</h2>
   <div class="drawarea__controls_elementsthree drawarea__things">
   </div>
   <div class="drawarea__controls_settingsbtn drawarea__controls_btn m_btn" onclick="open_ladonta_settings(true);">
      Kiinnikkeiden asetukset
   </div>
   <div class="drawarea__controls_btn" onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_esikatselu');">
     Esikatsele 
   </div>
   <div class="drawarea__controls_btn greenbtn" onclick="osittainen_siirto_muualle();" style="background: darkgreen;text-align: center;">Ladonna muut seinät</div>
   <?php include("./templates/house_nav.php");  ?>
</div>
