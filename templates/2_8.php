<!-- Seinät section on the mittaus role -->

<div id="copiedcanvases" style="display: none;">
  <section class="nav rangatnav">
    <nav>
      <ul>
      <li><div onclick="refresh__drawcontrols();updatearea();$('#step_drawscreen').val('rooms');">Ristivalikkoon</div></li>


      <!--  <input type="checkbox" checked id="eight__lvl_four" class="taso_btn drawarea__controls_btn taso__btns_four" onclick="eight__navigation(4)">
      <label for="eight__lvl_four" class="taso__btns_four taso_btn">Näytä saumat</label> -->

      <!-- <input type="checkbox" checked id="eight__lvl_five" class="taso_btn drawarea__controls_btn taso__btns_five" onclick="eight__navigation(5)">
      <label for="eight__lvl_five" class="taso__btns_five taso_btn"></label> -->

      <li><div class="greenbtn" onclick="create__excel_fromallwalls();">Lataa Seinän Excel</div></li>
      <!-- remove Ota PDF-kuvakaappaus button -->
      <!-- <li><div class="yellowbtn" onclick="takeshotAllwalls();">Ota PDF-kuvakaappaus</div></li> -->
      <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five'); refresh__drawcontrols();updatearea(); delcanvases();" class="redbtn">Palaa Kuoseihin</div></li>
      </ul>
        <ul class="copiedcanvases__fixednav">
            <li><input type="checkbox" checked id="eight__lvl_zero" class="taso_btn drawarea__controls_btn taso__btns_one" onclick="eight__navigation(0);">
                <label for="eight__lvl_zero" class="taso__btns_one taso_btn">Näytä levyt</label></li>

            <li><input type="checkbox"  id="eight__lvl_one" class="taso_btn drawarea__controls_btn taso__btns_one" onclick="eight__navigation(1);">
                <label for="eight__lvl_one" class="taso__btns_one taso_btn">Näytä kiinnikkeet</label></li>

            <li><input type="checkbox"  id="eight__lvl_two" class="taso_btn drawarea__controls_btn taso__btns_two" onclick="eight__navigation(2)">
                <label for="eight__lvl_two" class="taso__btns_two taso_btn">Näytä Rangat</label></li>

            <li><input type="checkbox" checked id="eight__lvl_three" class="taso_btn drawarea__controls_btn taso__btns_three" onclick="eight__navigation(3)">
                <label for="eight__lvl_three" class="taso__btns_three taso_btn">Näytä listat</label></li>

            <li><input type="checkbox" checked id="eight__lvl_six" class="taso_btn drawarea__controls_btn taso__btns_three" onclick="eight__navigation()">
                <label for="eight__lvl_six" class="taso__btns_three taso_btn">Näytä gridi</label></li>
        </ul>
    </nav>
  </section>
    <section class="bottom_nav">
        <nav>
            <h4>Valikko</h4>
            <ul>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_one'); refresh__drawcontrols();updatearea(); delcanvases();" class="nav__comleted">Origo</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_two'); refresh__drawcontrols();updatearea(); delcanvases();" class="nav__comleted">Aukot</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_three'); refresh__drawcontrols();updatearea(); delcanvases();" class="nav__comleted">Läpiviennit</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_four'); refresh__drawcontrols();updatearea(); delcanvases();" class="nav__comleted">Saumat</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_tyostot'); refresh__drawcontrols();updatearea(); delcanvases();"class="nav__comleted" >Kiinnikkeet</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_five'); refresh__drawcontrols();updatearea(); delcanvases();"class="nav__comleted" >Kuosit</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_eight'); refresh__drawcontrols();updatearea(); delcanvases();" class="nav_current">Seinät</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_esikatselu'); refresh__drawcontrols();updatearea(); delcanvases();">Levyt</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_six'); refresh__drawcontrols();updatearea(); delcanvases();">Rangat</div></li>
                <li><div onclick="$('#step_drawscreen').val('drawscreen_section_seven'); refresh__drawcontrols();updatearea(); delcanvases();">Listat</div></li>
                <li><div onclick="$('#step_drawscreen').val('project_start'); refresh__drawcontrols();updatearea(); delcanvases();">Päävalikkoon</div></li>
                <!-- <li><div onclick="levyta();refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_five');">Seuraava</div></li> -->
            </ul>
        </nav>
    </section>
  <article class="canvas_a preview_canvas" style="width: 100%;" data-wallname="A">
    <table class="grid-container">
    <?php
    for ($i=0; $i < 40; $i++) { 
      echo '<tr class="grid-row" style="width: 100px;">';
      for ($j=0; $j < 40; $j++) { 
        echo '<td class="grid-item" style="width: 100px; height: 100px;"></td>';
      }
      echo '</tr>';
    }
    ?>
    </table>
  </article>
  <article class="canvas_b preview_canvas" style="width: 100%;" data-wallname="B">
    <table class="grid-container">
    <?php
    for ($i=0; $i < 40; $i++) { 
      echo '<tr class="grid-row" style="width: 100px;">';
      for ($j=0; $j < 40; $j++) { 
        echo '<td class="grid-item" style="width: 100px; height: 100px;"></td>';
      }
      echo '</tr>';
    }
    ?>
    </table>
  </article>
  <article class="canvas_c preview_canvas" style="width: 100%;" data-wallname="C">
    <table class="grid-container">
    <?php
    for ($i=0; $i < 40; $i++) { 
      echo '<tr class="grid-row" style="width: 100px;">';
      for ($j=0; $j < 40; $j++) { 
        echo '<td class="grid-item" style="width: 100px; height: 100px;"></td>';
      }
      echo '</tr>';
    }
    ?>
    </table>
  </article>
  <article class="canvas_d preview_canvas" style="width: 100%;" data-wallname="D">
    <table class="grid-container">
    <?php
    for ($i=0; $i < 40; $i++) { 
      echo '<tr class="grid-row" style="width: 100px;">';
      for ($j=0; $j < 40; $j++) { 
        echo '<td class="grid-item" style="width: 100px; height: 100px;"></td>';
      }
      echo '</tr>';
    }
    ?>
    </table>
  </article>
  
     


  <div class="all_container">
    <div class="modal-background">
        <div class="modal">
           <div class="modal_close_btn" onclick="c_open_ltladonta_settings(false)"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
           <div class="row">
              <div class="col-12" style="position: relative;">
                <h1>Levyn Kiinnitykset <br>
                 <span id="lt-levy_koko"></span></h1>
                 <div class="visible levy_vis lt_levy_vis" style="">
                     <div class="horizontalinputs horizontalinputs-left">
                        <!-- <div style="" class="tyosto_measure"><label for="" class="k_vrmod">VR MOD</label><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_vrmod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"></div> -->
                        <!-- <div style="margin-top: 50px;" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_vrlevy" onchange="change__levykiinnike();"><label for="">VR LEVY</label></div> -->
                     </div>

                     <div class="horizontalinputs horizontalinputs-right">
                        <!-- <div style="" class="tyosto_measure"><label for="" class="k_ormod">OR MOD</label><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_ormod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"></div> -->
                        <!-- <div style="margin-top: 50px;" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_orlevy" onchange="change__levykiinnike();"><label for="">OR LEVY</label></div> -->
                        
                     </div>

                     <div class="verticalinputs verticalinputs-up" style="left: margin-left:30px;float: right;top:-30px;">
                        <!-- <div style="margin-top: 0%;" class="tyosto_measure"><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_yrmod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"><label for="">YR MOD</label></div> -->
                        <!-- <div style="" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_yrlevy" onchange="change__levykiinnike();"><label for="">YR LEVY</label></div> -->
                     </div>

                     <div class="verticalinputs verticalinputs-down" style=" margin-left:30px;float: right;op: -33px;">
                       <!-- <div class="tyosto_measure"><input type="text" name="_levymod" value="37.5" class="lineinput drawarea__mm levy_input" id="lt-k_armod" onchange="change__levykiinnike();aloita_tyosto_kiinnikkeet();"><label for="">AR MOD</label></div> -->
                       <!-- <div style="" class="tyosto_measure"><input type="text" name="_levymod" value="32.5" min="20" max="80" class="lineinput drawarea__mm levy_input" id="lt-k_arlevy" onchange="change__levykiinnike();"><label for="">AR LEVY</label></div> -->
                     </div>
                 </div>
                <div class="modal_close_btn drawarea__controls_btn" onclick="c_open_ltladonta_settings(false);">Tallenna</div>
              </div>
                 
            </div>
          </div>
        
          
    </div>
  </div>
  <div class="greenbtn finalization_downloadbtn" onclick="create__excel_fromallwalls();">Hyväksy ja jatka</div>

</div>

