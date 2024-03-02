<!-- Wall page commenting settings right column (deprecated) -->
<div class="drawarea__controls da_controls_commenting">
   <!-- <h1>Kommentit</h1> -->
   <div class="drawarea__controls_elementsone drawarea__things">
      
   </div>
   <div class="drawarea__controls_btns">
      <!-- <div class="drawarea__controls_btn m_btn" onclick="document.querySelector('body').classList.remove('commentmodal_active');document.getElementById('cord_up').value = 5;document.getElementById('cord_left').value = 5;document.querySelector('#dist_origo').click();document.querySelector('#comment__answer_to').value = '';">
       UUSI KOMMENTTI
      </div> -->
   </div>
   <?php include("./templates/house_nav.php");  ?>
   <section class="nav">
      <nav>
         <ul style="max-width: unset;">
            <li style="background: unset;border: unset;width: 100%;"><div onclick="$('#step_drawscreen').val('rooms');refresh__drawcontrols();updatearea();degradate_url(1);" style="background: red;margin: 10px auto;display: block;text-align: center;">Ristivalikkoon</div></li>
            <!-- <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one');" class="nav_current">Kommentointi</div></li> -->
         </ul>
      </nav>
   </section> 

</div>

