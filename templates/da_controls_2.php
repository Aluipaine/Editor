<!-- Wall page right column for AUKOT section on the mittaus role -->


<div class="drawarea__controls drawarea__controls_two">
   <h1>Aukot</h1>
   <div class="drawarea__controls_elementstwo drawarea__things">
   </div>
   <div class="drawarea__controls_btns">
      <div class="aukko_settingsbtn" onclick="settings__modal_open(this);" data-asmodal_mode="aukkoas">
         Aukon ylitys asetuksia
      </div>
      <div class="drawarea__controls_btn" onclick="settings__aukko();change__newdiv_cord();document.querySelector('#type__door').click(); document.querySelector('#aukko_comment_from').value = user;settings__modal_open(this);change__aukko_sizecord();" data-asmodal_mode="uusiaukko">
         Lisää uusi aukko
      </div>

      <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div>
      <div onclick="move_origo(this);" class="drawarea__controls_origoset">Origo oikealle</div>
      <div class="kumoa" onclick="submitprogress('','back','','aukot');kumoa();">Kumoa</div>
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>