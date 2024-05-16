<!-- Wall page right column for LÄPIVIENNIT section on the mittaus role -->


<div class="drawarea__controls drawarea__controls_three">
   <h2>Läpiviennit</h2>
   <div class="drawarea__controls_elementsthree drawarea__things">
   </div>
   <div class="drawarea__controls_btns">
      <div class="drawarea__controls_btn drawarea__controls_settingsbtn" onclick="settings__modal_open(this);" data-asmodal_mode="lvas">
         Läpivienti as
      </div>
      <div class="drawarea__controls_btn drawarea__controls_btnthree" onclick="settings__mitta();change__newdiv_cord();settings__modal_open(this);" data-asmodal_mode="lv_modal">Uusi reikä</div>
      <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div>
      <div onclick="move_origo(this);" class="drawarea__controls_origoset">Origo oikealle</div>
      <div class="kumoa" onclick="submitprogress('','back','','lv');kumoa();">Kumoa</div>
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>
