<div class="drawarea__controls drawarea__controls_two">
   <h1>Aukot</h1>
   <div class="drawarea__controls_elementstwo drawarea__things">
   </div>
   <div class="drawarea__controls_btns">
      <div class="aukko_settingsbtn" onclick="open_aukko_settings(true);">
         Aukon ylitys asetuksia
      </div>
      <div class="drawarea__controls_btn m_btn" onclick="settings__aukko();change__newdiv_cord();document.querySelector('#type__door').click(); document.querySelector('#aukko_comment_from').value = user">
         Lisää uusi aukko
      </div>

      <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div>
      <div onclick="move_origo(this);" class="drawarea__controls_origoset">Origo oikealle</div>
      <div class="kumoa" onclick="submitprogress('','back','','aukot');">Kumoa</div>
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>