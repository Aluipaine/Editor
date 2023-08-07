<div class="drawarea__controls drawarea__controls_one">
   <h1>Levytettävä alue</h1>
   <div class="row" style="justify-content: center;">
      <input type="number" value="<?= $post["room_one_a-h"]; ?>" class="drawarea_h" id="drawarea_h" onchange="changesize(this.value+'|y');" max="3650"><span> x </span>
      <input type="number" value="<?= $post["room_one_a-w"]; ?>" class="drawarea_w" id="drawarea_w" onchange="changesize(this.value+'|x');" max="9975"><span> mm</span>
   </div>
   <h2>Mittapisteet</h2>
   <div class="drawarea__controls_elementsone drawarea__things">
      
   </div>
   <div class="drawarea__controls_btns">
      <div class="drawarea__controls_btn m_btn" onclick="settings__mitta();change__newdiv_cord();document.querySelector('#dist_origo').click();">
       Lisää uusi mittapiste
      </div>
   </div>
   <div class="form-group st_question"><input type="checkbox" name="stjarj" id="stjarj" checked><label for="stjarj">Standard?</label></div>
   <div onclick="move_origo(this);" class="drawarea__controls_origoset">Origo oikealle</div>
   <div class="kumoa" onclick="submitprogress('','back','','mp');kumoa();">Kumoa</div>
   <?php include("./templates/house_nav.php");  ?>
   

</div>

