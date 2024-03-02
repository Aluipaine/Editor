<!-- Wall page right column for SAUMAT section on the mittaus role -->

<div class="drawarea__controls drawarea__controls_four">
   <h2>Pystysaumat</h2>
   <ol class="drawarea__controls_four-pysty drawarea__controls_fouritems" reversed>
   </ol>
   <h2>Vaakasaumat</h2>
   <ol class="drawarea__controls_four-vaaka drawarea__controls_fouritems" reversed>
   </ol>
   <div class="drawarea__controls_btns">
      <div class="drawarea__controls_settingsbtn" onclick="settings__modal_open(this);" data-asmodal_mode="sauma_as">
         Saumojen asetukset
      </div>
      <div class="kumoa" onclick="submitprogress('', 'back', '', 'sau');kumoa();">Kumoa</div>      
      <!-- <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div> -->
      <!-- <div class="drawarea__controls_btn" onclick="siirto_ladonta();" style="background: darkgreen;">
         Saumoita muut seinät
      </div> -->
      <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();submitprogress('', 'adding', '', 'sau');submitprogress('', 'adding', '', 'lev');">
         Levytä
      </div>
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>