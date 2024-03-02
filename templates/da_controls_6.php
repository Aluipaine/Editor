<!-- Wall page right column for RANGAT section on the mittaus role -->

<div class="drawarea__controls drawarea__controls_six">
   <h2>Rangat</h2>
   <p>Voit hallita ja säätää rankoja asetuksista</p>
   <div class="drawarea__controls_btns taso__btns">
      <fieldset>
         <input type="checkbox" id="rangoitus__lvl_one" class="taso_btn drawarea__controls_btn taso__btns_one" onclick="rangat__navigation(1);"><label for="rangoitus__lvl_one" class="taso__btns_one taso_btn">L1 Levyt ja Listat</label>
         <input type="checkbox" checked id="rangoitus__lvl_two" class="taso_btn drawarea__controls_btn taso__btns_two" onclick="rangat__navigation(2)"><label for="rangoitus__lvl_two" class="taso__btns_two taso_btn">L2A Levyn kiinnitysranka</label>
         <input type="checkbox" checked id="rangoitus__lvl_three" class="taso_btn drawarea__controls_btn taso__btns_three" onclick="rangat__navigation(3)"><label for="rangoitus__lvl_three" class="taso__btns_three taso_btn">L2B Rankojen sovite</label>
         <!-- <input type="checkbox" checked id="rangoitus__lvl_four" class="taso_btn drawarea__controls_btn taso__btns_four" onclick="rangat__navigation(4)"><label for="rangoitus__lvl_four" class="taso__btns_four taso_btn">L2c Rankojen sovite</label> -->
      </fieldset>
      <div class="aukko_settingsbtn" onclick="settings__modal_open(this);" data-asmodal_mode="rankalista_as">
     Lista- ja ranka-asetuksia
      </div>
      <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('drawscreen_section_seven');refresh__drawcontrols();updatearea(); ">
        Siirry listoihin
      </div>
      <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div>
      <div onclick="move_origo(this);" class="drawarea__controls_origoset">Origo oikealle</div>
      <!-- <div class="kumoa" onclick="console.log('/troll');kumoa();">Kumoa</div> -->
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>