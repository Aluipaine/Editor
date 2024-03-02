<!-- Wall page right column for LEVYT section on the mittaus role -->

<div class="drawarea__controls drawarea__controls_esikatselu">
   <h2>Levytys <span id="esikatselu__saumoitussuunta"></span></h2>
<!--    <div class="drawarea__controls_settingsbtn drawarea__controls_btn m_btn">
      Levyjen asetukset
   </div> -->
   <!-- <div  class="drawarea__controls_btn drawarea__controls_settingsbtn" >Ylä- ja alakiinnikkeet</div>
   <div  class="drawarea__controls_btn drawarea__controls_settingsbtn" >Välikiinnikkeet</div> -->
    <div class="aukko_settingsbtn" onclick="settings__modal_open(this);" data-asmodal_mode="rankalista_as">
     Lista- ja ranka-asetuksia
  </div>
   <div class="drawarea__controls_btn" onclick="$('#step_drawscreen').val('drawscreen_section_six');refresh__drawcontrols();updatearea(); ">
     Siirry rankoihin
   </div>
   <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div>
   
   <?php include("./templates/house_nav.php");  ?>

</div>
