<!-- Main section for commentator on the mittaus role (DEPRECATED) -->

<form class="step_screen drawscreen_section form__butsection" id="drawscreen_section_one" 
 action="/updateproject.php" enctype='multipart/form-data'>

   </div>
   
   <section class="excel">
      <input type="num" id="origo_x" step="1" value="<?= $post['room_one_a-w'] / 2 ?>" oninput="changeCoords(['inpW', '#origo_x'], '#drawarea__origo_central', null, '.drawarea .canvas', [<?= $post['room_one_a-w'] ?>, <?= $post['room_one_a-h'] ?>])">
      <input type="num" id="origo_y" step="1" value="<?= $post['room_one_a-h'] / 2 ?>" oninput="changeCoords(['inpH', '#origo_y'], '#drawarea__origo_central', null, '.drawarea .canvas', [<?= $post['room_one_a-w'] ?>, <?= $post['room_one_a-h'] ?>])">
   </section>
   <div class="modal-container recl-container " id="reclamation__popup">
    <div class="modal-background">
      <div class="modal">
         <div class="modal_close_btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>
         <input name="comment__answer_to" id="comment__answer_to" type="hidden" value="">
         <h2><input type="text" value="Kommentti " class="lineinput" id="kommentti__name"></h2>
         <section class="kommentti__etaisyydet">
           <h4>Etäisyys (mm)</h4>
           <fieldset>
               <input id="dist_origo" name="kommentti__distance" type="radio" onfocus="give__comment_cord();">
               <label for="dist_origo">Origosta</label>
               <input id="dist_side" name="kommentti__distance" type="radio" onfocus="null__comment_cord();">
               <label for="dist_side">Omat mitat</label>
           </fieldset>
        </section>
        <section class="row cord">
            <div class="col-6" style="display: flex;flex-direction: column;">
               <div class="cord__item">
                  <label for="cord_up">Ylös</label>
                  <input id="cord_up" name="" type="tel" class="lineinput" oninput="change__newdiv_cord_comment();" onchange="commentcord__check(this);">
               </div>
               <div class="cord__item" style="display: none;">
                  <label for="cord_low">Alas</label>
                  <input id="cord_low" name="" type="tel" class="lineinput" oninput="change__newdiv_cord_comment();" onchange="commentcord__check(this);">
               </div>
               
               <div class="cord__item" style="display: none;">
                  <label for="cord_r"></label>
                  <input id="cord_r" name="" type="tel" class="lineinput" oninput="change__newdiv_cord_comment();" onchange="commentcord__check(this);">
               </div>
            </div>
           <div class="col-6">
            <div class="cord__item">
                  <label for="cord_left">Oikealle</label>
                  <input id="cord_left" name="" type="tel" class="lineinput" oninput="change__newdiv_cord_comment();" onchange="commentcord__check(this);">
               </div>

              <div id="setting__canvas_mitta" class="setting__canvas">
                 
              </div>
           </div>
        </section>
        <section class="comment__section">
            <h4 class="comment__aihe">Anna aihe</h4>
            <fieldset class="comment__aihe">
                <input id="_radio" name="mitta__huomiot" type="radio" value="Ei aihetta" checked>
                <label for="_radio">Ei aihetta</label>
                <input id="a_radio" name="mitta__huomiot" type="radio" value="Sähkö">
                <label for="a_radio">Sähkö</label>
                <input id="b_radio" name="mitta__huomiot" type="radio" value="Putki">
                <label for="b_radio">Putki</label>
                <input id="c_radio" name="mitta__huomiot" type="radio" value="EPDM Repsottaa">
                <label for="c_radio">EPDM Repsottaa</label>
                <input id="d_radio" name="mitta__huomiot" type="radio" value="Levyssä ongelmaa">
                <label for="d_radio">Levyssä ongelmaa</label>
                <input id="e_radio" name="mitta__huomiot" type="radio" value="Ilmastointi">
                <label for="e_radio">Ilmastointi</label>
            </fieldset>
            <h4>Lähetä työ</h4>
            <textarea name="kommentti_comment" id="kommentti_comment" cols="30" rows="10" style="resize: none;"></textarea>
            <div class="row">
                <div class="col-3">  
                    <div class="form-group">
                        <h6>Lisää tiedostot:</h6>
                        <input type="file" id="comment__files" name="comment__files[]" multiple>
                        <div id='comment__preview_files' class="preview_files"></div>
                        <input type="button" id="kommentti__filesubmit" value='Lähetä tiedostot'>
                    </div>
                </div>
                <div class="col-3">
                    <h6>Keneltä</h6>
                    <input name="kommentti_comment_from" id="kommentti_comment_from" type="text" value="<?php echo $_GET['user']; ?>" >
                </div>
                <div class="col-3">
                <h6>Kenelle</h6>
                    <select name="kommentti_comment_to" id="kommentti_comment_to">
                    <?php 
                        // require_once "vendor/config.php";

                        $posts = mysqli_query($db, "SELECT * FROM `addedusers` WHERE `project_id`= " . $_GET['id'] . "; ");
                        
                        $posts = mysqli_fetch_all($posts);
                        // print_r( $posts);
                        foreach ($posts as $user) {
                            echo "<option value=" . $user[2] . ">" . $user[2] ."</option>";
                        }
                    ?>
                    </select>
                    <!-- <input name="aukko_comment_to" id="aukko_comment_to" type="text"> -->
                </div>
                <div class="col-3">
                    <h6>Deadline:</h6>
                    <input name="deadline_time" id="comment__deadline" type="date" min="<?php echo date("Y-m-d") ?>"></input>
                </div>
            </div>
        </section>
        <section class="commentbox">
            <h2 class="commentbox__name"></h2>
            <div class="row">
                <div class="col-3">
                  <h4>Tiedostot:</h4>
                  <span class="commentbox__tiedostot">-</span>
                </div>
                <div class="col-3">
                    <h4>Keneltä:</h4>
                    <span class="commentbox__from">-</span>
                    
                </div>
                <div class="col-3">
                    <h4>Kenelle:</h4>
                    <span class="commentbox__to">-</span>
                    
                </div>
                <div class="col-3">
                    <h4>Prioriteetti:</h4>
                    <span class="commentbox__priority">-</span>
                </div>
                <div class="col-3">
                    <h4>Aihe:</h4>
                    <span class="commentbox__aihe">-</span>
                </div>
                <div class="col-3">
                    <h4>Deadline:</h4>
                    <span class="commentbox__deadline">-</span>
                </div>
            </div>
            <div class="commentbox__text">
                <h4>Sisältö:</h4>
                <p class="commentbox__content"></p>
            </div>
            <div class="row center">
                <div class="col-4"><div class="modal_close_btn drawarea__controls_btn sulkemis_nappula">Sulje</div></div>
                <div class="col-4"><div class="modal_close_btn drawarea__controls_btn kuittaus_nappula" onclick="comment__kuittaus(this.getAttribute('name'));addproblemstatus(this);">Kuittaan tehdyksi</div></div>
                <div class="col-4"><div class="drawarea__controls_btn_ vastaus_nappula m_btn" onclick="document.querySelector('body').classList.remove('commentmodal_active');document.getElementById('cord_up').value = 5;document.getElementById('cord_left').value = 5;document.querySelector('#dist_origo').click();">Vastaus työhön</div></div>
            </div>
            <div id="commentbox__answers" style="margin-top: 50px;">
             <h6>Vastaukset:</h6>
            </div>
        </section>
        <div class="modal_close_btn drawarea__controls_btn kommentti_nappula" onclick="comment__create();addproblemstatus(this);">Valmis</div>
      </div>
    </div>
  </div>
</form>
<script src="js/jstemplates/commenting.js"></script>
