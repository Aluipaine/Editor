<div class="drawarea__controls drawarea__controls_three">
   <h2>Läpiviennit</h2>
   <div class="drawarea__controls_elementsthree drawarea__things">
   </div>
   <div class="drawarea__controls_btns">
      <div class="drawarea__controls_btn m_btn" onclick="settings__mitta();change__newdiv_cord();">Uusi reikä</div>
      <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div>
      <div onclick="move_origo(this);" class="drawarea__controls_origoset">Origo oikealle</div>
      <div class="kumoa" onclick="submitprogress('','back','','lv');">Kumoa</div>
      <?php include("./templates/house_nav.php");  ?>
   </div>
</div>
