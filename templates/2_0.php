<section id="project_start" class="project__roomcount" > 
  <div class="container">
    <div class="row">
      <div class="col-6"><h1 class="project_start_heading">Seinäeditori <!-- / < ? = $post["project_type"]; ? >  --><br> Kohde <?= $post["title"]; ?></h1></div>
      <div class="col-6">
        <table>
          <tr>
            <td>Yhteensä työtunteja:</td>
            <td id="hours__estimate"></td>
          </tr>
        </table></div>
    </div>
  </div>
  <div class="container rappus">
    <div class="per50 floatleft coderdy rappu-1" id="A" style="opacity: 1;">
        <div class="tablepreview">
            
            
            <h2>RAPPU A </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $a_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
              
                  $a_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'a_rooms'");
                  $a_da = mysqli_fetch_all($a_data);
                  $a_data = $a_da[0][3];

                  $a_da_ = explode("},{", $a_data);
                  


                  if (strlen($a_data) < 2) {
                      echo "<style>#A {display:none}</style>";
                  } 
                  
                  foreach ($a_da_ as $a_key) {

                    $da_child = explode(',', $a_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                    
                    $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                    $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                    $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                    $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                    $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                    $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));
                    
                    $classname = str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))));
                    echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8')))) ."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                
              }

              $a_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'a_rooms_nowork'");
                  $a_da_nowork = mysqli_fetch_all($a_data_nowork);
                  $a_data_nowork = $a_da_nowork[0][3];

                  $a_da_nowork_ = explode("},{", $a_data_nowork);

                

                  foreach ($a_da_nowork_ as $a_key_nowork) {

                    $da_child = explode(",", $a_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                
              }


              // $a_pr_rap = $da[0][3];
              // if ($a_pr_rap == 1 || $a_pr_rap == 0 ) {
              //     $a_colc = "auto";
              // } elseif ($a_pr_rap == 2) {
              //     $a_colc = "auto auto";
              // } elseif ($a_pr_rap == 3) {
              //     $a_colc = "auto auto auto";
              // } elseif ($a_pr_rap == 4) {
              //     $a_colc = "auto auto auto auto";
              // } elseif ($a_pr_rap == 5) {
              //     $a_colc = "auto auto auto auto auto";
              // } elseif ($a_pr_rap == 6) {
              //     $a_colc = "auto auto auto auto auto auto";
              // } elseif ($a_pr_rap == 7) {
              //     $a_colc = "auto auto auto auto auto auto auto";
              // } elseif ($a_pr_rap == 8) {
              //     $a_colc = "auto auto auto auto auto auto auto auto";
              // } elseif ($a_pr_rap == 9) {
              //     $a_colc = "auto auto auto auto auto auto auto auto auto";
              // } elseif ($a_pr_rap == 10) {
              //     $a_colc = "auto auto auto auto auto auto auto auto auto auto";
              // } elseif ($a_pr_rap == 11) {
              //     $a_colc = "auto auto auto auto auto auto auto auto auto auto auto";
              // }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
    <div class="per50 floatleft coderdy rappu-2" id="B" style="opacity: 1;">
        <div class="tablepreview">
            <h2>RAPPU B </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $b_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
                  $b_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'b_rooms'");
                  $b_da = mysqli_fetch_all($b_data);
                  $b_data = $b_da[0][3];
                  if (strlen($b_data) <= 2){
                      echo "<style>#B {display:none}</style>";
                  } 

                  $b_db_ = explode("},{", $b_data);


                  foreach ($b_db_ as $b_key) {
                    $db_child = explode(",", $b_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $db_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $db_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $db_child[2]))))));
                    
                      $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))))));
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
            
              }

              $b_datb_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'b_rooms_nowork'");
                  $b_db_nowork = mysqli_fetch_all($b_datb_nowork);
                  $b_datb_nowork = $b_db_nowork[0][3];

                  $b_db_nowork_ = explode("},{", $b_datb_nowork);


                  foreach ($b_db_nowork_ as $b_key_nowork) {
                    $db_child = explode(",", $b_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $db_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $db_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $db_child[2]))))));
                      echo "<div data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);'>".$key0."</div>";
                
              }



              // $b_pr_rap = $da[0][3];
              // if ($b_pr_rap == 1 || $b_pr_rap == 0 ) {
              //     $b_colc = "auto";
              // } elseif ($b_pr_rap == 2) {
              //     $b_colc = "auto auto";
              // } elseif ($b_pr_rap == 3) {
              //     $b_colc = "auto auto auto";
              // } elseif ($b_pr_rap == 4) {
              //     $b_colc = "auto auto auto auto";
              // } elseif ($b_pr_rap == 5) {
              //     $b_colc = "auto auto auto auto auto";
              // } elseif ($b_pr_rap == 6) {
              //     $b_colc = "auto auto auto auto auto auto";
              // } elseif ($b_pr_rap == 7) {
              //     $b_colc = "auto auto auto auto auto auto auto";
              // } elseif ($b_pr_rap == 8) {
              //     $b_colc = "auto auto auto auto auto auto auto auto";
              // } elseif ($b_pr_rap == 9) {
              //     $b_colc = "auto auto auto auto auto auto auto auto auto";
              // } elseif ($b_pr_rap == 10) {
              //     $b_colc = "auto auto auto auto auto auto auto auto auto auto";
              // } elseif ($b_pr_rap == 11) {
              //     $b_colc = "auto auto auto auto auto auto auto auto auto auto auto";
              // }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
    <div class="per50 floatleft coderdy rappu-3" id="C" style="opacity: 1;">
        <div class="tablepreview">
            
            
            <h2>RAPPU C </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $c_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
                  $c_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'c_rooms'");
                  $c_da = mysqli_fetch_all($c_data);
                  $c_data = $c_da[0][3];

                  $c_da_ = explode("},{", $c_data);

                  if (strlen($c_data) <= 2){
                      echo "<style>#C {display:none}</style>";
                  } 


                  foreach ($c_da_ as $c_key) {
                    $da_child = explode(",", $c_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                    
                      $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))))));
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    
              }

              $c_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'c_rooms_nowork'");
                  $c_da_nowork = mysqli_fetch_all($c_data_nowork);
                  $c_data_nowork = $c_da_nowork[0][3];

                  $c_da_nowork_ = explode("},{", $c_data_nowork);


                  foreach ($c_da_nowork_ as $c_key_nowork) {
                    $da_child = explode(",", $c_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      echo "<div data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);'>".$key0."</div>";
                
              }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
    <div class="per50 floatleft coderdy rappu-4" id="D" style="opacity: 1;">
        <div class="tablepreview">
            
            
            <h2>RAPPU D </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $d_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
                  $d_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'd_rooms'");
                  $d_da = mysqli_fetch_all($d_data);
                  $d_data = $d_da[0][3];

                  $d_da_ = explode("},{", $d_data);

                  if (strlen($d_data) <= 2){
                      echo "<style>#D {display:none}</style>";
                  } 


                  foreach ($d_da_ as $d_key) {
                    $da_child = explode(",", $d_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                    
                      $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))))));
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    
              }

              $d_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'd_rooms_nowork'");
                  $d_da_nowork = mysqli_fetch_all($d_data_nowork);
                  $d_data_nowork = $d_da_nowork[0][3];

                  $d_da_nowork_ = explode("},{", $d_data_nowork);


                  foreach ($d_da_nowork_ as $d_key_nowork) {
                    $da_child = explode(",", $d_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      echo "<div data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);'>".$key0."</div>";
                
              }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
    <div class="per50 floatleft coderdy rappu-5" id="E" style="opacity: 1;">
        <div class="tablepreview">
            
            
            <h2>RAPPU E </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $e_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
                  $e_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'e_rooms'");
                  $e_da = mysqli_fetch_all($e_data);
                  $e_data = $e_da[0][3];

                  if (strlen($e_data) <= 2){
                      echo "<style>#E {display:none}</style>";
                  } 

                  $e_da_ = explode("},{", $e_data);


                  foreach ($e_da_ as $e_key) {
                    $da_child = explode(",", $e_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                    
                      $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))))));
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    
              }

              $e_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'e_rooms_nowork'");
                  $e_da_nowork = mysqli_fetch_all($e_data_nowork);
                  $e_data_nowork = $e_da_nowork[0][3];

                  $e_da_nowork_ = explode("},{", $e_data_nowork);


                  foreach ($e_da_nowork_ as $e_key_nowork) {
                    $da_child = explode(",", $e_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      echo "<div data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);'>".$key0."</div>";
                
              }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
    <div class="per50 floatleft coderdy rappu-6" id="F" style="opacity: 1;">
        <div class="tablepreview">
            
            
            <h2>RAPPU F </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $f_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
                  $f_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'f_rooms'");
                  $f_da = mysqli_fetch_all($f_data);
                  $f_data = $f_da[0][3];

                  if (strlen($f_data) <= 2){
                      echo "<style>#F {display:none}</style>";
                  } 

                  $f_da_ = explode("},{", $f_data);


                  foreach ($f_da_ as $f_key) {
                    $da_child = explode(",", $f_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))))));
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".str_replace(' <br>','',str_replace('<br> ','',str_replace(' ','', str_replace('<br>','', mb_convert_encoding($classname,'HTML-ENTITIES','utf-8')))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    
              }

              $f_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'f_rooms_nowork'");
                  $f_da_nowork = mysqli_fetch_all($f_data_nowork);
                  $f_data_nowork = $f_da_nowork[0][3];

                  $f_da_nowork_ = explode("},{", $f_data_nowork);


                  foreach ($f_da_nowork_ as $f_key_nowork) {
                    $da_child = explode(",", $f_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      echo "<div data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);'>".$key0."</div>";
                
              }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
    <div class="per50 floatleft coderdy rappu-7" id="G" style="opacity: 1;">
        <div class="tablepreview">
            
            
            <h2>RAPPU G </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $g_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
                  $g_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'g_rooms'");
                  $g_da = mysqli_fetch_all($g_data);
                  $g_data = $g_da[0][3];

                  if (strlen($g_data) <= 2){
                      echo "<style>#G {display:none}</style>";
                  } 

                  $g_da_ = explode("},{", $g_data);


                  foreach ($g_da_ as $g_key) {
                    $da_child = explode(",", $g_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))))));
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    
              }

              $g_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'g_rooms_nowork'");
                  $g_da_nowork = mysqli_fetch_all($g_data_nowork);
                  $g_data_nowork = $g_da_nowork[0][3];

                  $g_da_nowork_ = explode("},{", $g_data_nowork);


                  foreach ($g_da_nowork_ as $g_key_nowork) {
                    $da_child = explode(",", $g_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      echo "<div data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);'>".$key0."</div>";
                
              }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
    <div class="per50 floatleft coderdy rappu-8" id="H" style="opacity: 1;">
        <div class="tablepreview">
            
            
            <h2>RAPPU H </h2>
            
            <div class="project__building"> <!-- grid-template-columns: < ?php echo $h_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ol reversed>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ol>
              </div>
              <?php 
                  $h_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'h_rooms'");
                  $h_da = mysqli_fetch_all($h_data);
                  $h_data = $h_da[0][3];

                  $h_da_ = explode("},{", $h_data);

                  if (strlen($h_data) <= 2){
                      echo "<style>#H {display:none}</style>";
                  } 


                  foreach ($h_da_ as $h_key) {
                    $da_child = explode(",", $h_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))))));
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    
              }

              $h_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'h_rooms_nowork'");
                  $h_da_nowork = mysqli_fetch_all($h_data_nowork);
                  $h_data_nowork = $h_da_nowork[0][3];

                  $h_da_nowork_ = explode("},{", $h_data_nowork);


                  foreach ($h_da_nowork_ as $h_key_nowork) {
                    $da_child = explode(",", $h_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      echo "<div data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*80);margin-left:calc(".$key2 . "px*80);'>".$key0."</div>";
                
              }
            ?>
              <section class="project__building_grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </section>
            </div>
            
            <!-- end of sizer -->    
        </div>
    </div>
  </div>
  <div class="container colormeanings">
    <div class="row">
        <div class="c_meaning c_meaning_1"><i>EI TYÖTÄ</i></div>
        <div class="c_meaning c_meaning_2"><i>ALOITTAMATTA </i></div>
        <div class="c_meaning c_meaning_3"><i>MITTAUS KESKEN</i></div>
        <div class="c_meaning c_meaning_4"><i>MATERIAALIT TILATTU</i></div>
        <div class="c_meaning c_meaning_4-5"><i>MATERIAALIT TYÖMAALLA</i></div>
        <div class="c_meaning c_meaning_5"><i>ASENNETTU</i></div>
        <div class="c_meaning c_meaning_6"><i>HYVÄKSYTTÄVÄ</i></div>
        <div class="c_meaning c_meaning_7"><i>VALMIS</i></div>
        <div class="c_meaning c_meaning_8"><i>ONGELMA</i></div>
        <div class="c_meaning c_meaning_9"><i>KRIITTINEN ONGELMA</i></div>
    </div>
    <?php

    if(strtolower($_GET["user"]) == "tyonjohto") {
      echo'
      <div class="row">
        <h3>Kommentit</h3>
        <div class="cr_meaning cr_meaning_1">
          <div class="form-group">
              <input type="radio" checked name="commentroles" id="cr_meaning_1" onclick="initializebuilding_comments(`all`);">
              <label for="cr_meaning_1">Kaikki</label>
          </div>
        </div>
      </div>
      <fieldset class="commentroles">
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_1-1">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_1-1" onclick="initializebuilding_comments(`ark`);">
              <label for="cr_meaning_1-1"><img src="img/comroles/cup.png"/>ARK</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_1-2">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_1-2" onclick="initializebuilding_comments(`rak`);">
              <label for="cr_meaning_1-2"><img src="img/comroles/cup.png"/>RAK</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_1-3">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_1-3" onclick="initializebuilding_comments(`pu`);">
              <label for="cr_meaning_1-3"><img src="img/comroles/cup.png"/>PU</label>
          </div>
        </div>
      </div>   
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_1-4">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_1-4" onclick="initializebuilding_comments(`myynti`);">
              <label for="cr_meaning_1-4"><img src="img/comroles/myynti.png"/>Myynti</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_1-5">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_1-5" onclick="initializebuilding_comments(`suunnittelu`);">
              <label for="cr_meaning_1-5"><img src="img/comroles/suunnittelu.png"/>Suunnittelu</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_1-6">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_1-6" onclick="initializebuilding_comments(`westface`);">
              <label for="cr_meaning_1-6"><img src="img/comroles/wf.png" style="width: 23px;"/>Westface</label>
          </div>
        </div>
      </div>   
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_2-0">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_2-0" onclick="initializebuilding_comments(`all_raktyo`);">
              <label for="cr_meaning_2-0"><img src="img/comroles/work.png"/>Rakennustyöt</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_2">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_2" onclick="initializebuilding_comments(`rakennustyö`);">
              <label for="cr_meaning_2"><img src="img/comroles/work.png"/>Raktyö1</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_3">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_3" onclick="initializebuilding_comments(`rakennustyö2`);">
              <label for="cr_meaning_3"><img src="img/comroles/work.png"/>Raktyö2</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_4">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_4" onclick="initializebuilding_comments(`rakennustyö3`);">
              <label for="cr_meaning_4"><img src="img/comroles/work.png"/>Raktyö3</label>
          </div>
        </div>
      </div>
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_5">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_5" onclick="initializebuilding_comments(`Sähkö`);">
              <label for="cr_meaning_5"><img src="img/comroles/light.png"/>Sähkö</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_5-1">
          <div class="form-group">
            <input type="radio" name="commentroles" id="cr_meaning_5-1" onclick="initializebuilding_comments(`Sähkös`);">
            <label for="cr_meaning_5-1"><img src="img/comroles/light.png"/>Sähkös</label>
          </div>
        </div>
      </div>
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_6">
          <div class="form-group">
            <input type="radio" name="commentroles" id="cr_meaning_6" onclick="initializebuilding_comments(`ilmastointi`);">
            <label for="cr_meaning_6"><img src="img/comroles/ventilation.png"/>IV</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_12">
          <div class="form-group">
            <input type="radio" name="commentroles" id="cr_meaning_12" onclick="initializebuilding_comments(`Ivsun`);">
            <label for="cr_meaning_12"><img src="img/comroles/ventilation.png"/> IVs</label>
          </div>
        </div>
      </div>
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_7">
          <div class="form-group">
            <input type="radio" name="commentroles" id="cr_meaning_7" onclick="initializebuilding_comments(`Vesi`);">
            <label for="cr_meaning_7"><img src="img/comroles/water.png"/>Vesi</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_7-1">
          <div class="form-group">
            <input type="radio" name="commentroles" id="cr_meaning_7-1" onclick="initializebuilding_comments(`Vesis`);">
            <label for="cr_meaning_7-1"><img src="img/comroles/water.png"/>Vesis</label>
          </div>
        </div>
      </div>
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_8">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_8" onclick="initializebuilding_comments(`Lukkomies`);">
              <label for="cr_meaning_8"><img src="img/comroles/lock.png"/>Lukko</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_9">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_9" onclick="initializebuilding_comments(`siivous`);">
              <label for="cr_meaning_9"><img src="img/comroles/siivous.png"/>Siivous</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_10">
          <div class="form-group">
            <input type="radio" name="commentroles" id="cr_meaning_10" onclick="initializebuilding_comments(`purku`);">
            <label for="cr_meaning_10"><img src="img/comroles/purku.png"/>Purku</label>
          </div>
        </div>
      </div>
      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_14-1">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_14-1" onclick="initializebuilding_comments(`muu`);">
              <label for="cr_meaning_14-1">Muuta</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_14-2">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_14-2" onclick="initializebuilding_comments(`muu`);">
              <label for="cr_meaning_14-2">Muuta</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_14-3">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_14-3" onclick="initializebuilding_comments(`muu`);">
              <label for="cr_meaning_14-3">Muuta</label>
          </div>
        </div>
      </div>

      <div class="commentroles__column">
        <div class="cr_meaning cr_meaning_15-1">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_15-1" onclick="initializebuilding_comments(`muu`);">
              <label for="cr_meaning_15-1">Muuta2</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_15-2">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_15-2" onclick="initializebuilding_comments(`muu`);">
              <label for="cr_meaning_15-2">Muuta2</label>
          </div>
        </div>
        <div class="cr_meaning cr_meaning_15-3">
            <div class="form-group">
              <input type="radio" name="commentroles" id="cr_meaning_15-3" onclick="initializebuilding_comments(`muu`);">
              <label for="cr_meaning_15-3">Muuta2</label>
          </div>
        </div>
      </div>
        
        
       
      </fieldset>
      <h3>Tilatut tuotteet</h3>
      <div class="row">
          <a target="_blank" class="o_meaning o_meaning_1" href="/tilauskirja/#stark">STARK</a>
          <a target="_blank" class="o_meaning o_meaning_2" href="/tilauskirja/#westface">WESTFACE</a>
          <a target="_blank" class="o_meaning o_meaning_3" href="/tilauskirja/#p20varasto">P20 VARASTO</a>
          <a target="_blank" class="o_meaning o_meaning_4" href="/tilauskirja/#p20kkrs">P20 K-KRS</a>
          <a target="_blank" class="o_meaning o_meaning_5" href="/tilauskirja/#peltineloset">PELTINELOSET</a>
          <a target="_blank" class="o_meaning o_meaning_6" href="/tilauskirja/#kannatuspalvelu">KANNATUSPALVELU</a>
          <a target="_blank" class="o_meaning o_meaning_7" href="/tilauskirja/#toimisto">TOIMISTO</a>
          <a target="_blank" class="o_meaning o_meaning_8" href="/tilauskirja/#muu">MUU</a>
      </div>
      <div class="form-group">
          <input type="radio" id="or_main" onclick="sec_open();">
          <label for="or_main" id="or_main_label">Laskuta kaikki ostot</label>

          <div class="laskuta__ostot">
            <h3>Laskuta ostot ajanjaksolta</h4>
            <fieldset class="row">
              <div class="col-6">
                <h4>Aloitus</h4>
                <input type="date">
              </div>
              <div class="col-6">
                <h4>Loppu</h4>
                <input type="date">
              </div>
            </fieldset>
            <div class="drawarea__controls_btn btn ready_btn" onclick="sec_open();">Laskuta</div>
            
          </div>
      </div>';
    } 
    ?>
  </div>
</section>
<form id="rooms" class="form__butsection" style="border-bottom: 0px solid #000;" action="vendor/updateproject.php" method="post">

  
    <input type='hidden' id='project_rooms_data' value='"ARAK-13": {[mp:{name:"Mittapiste";bottom:"500";left:"500";count:"1";}__{name:"Mittapiste";bottom:"500";left:"500";count:"1";}]__[aukot:{name:"Ovi ";type:"ovi";bottom:"5";left:"500";top:"2100";right:"1500";count:"1";from:"Jyri";to:"Jari";comment:"Tämä toimii?"}__{name:"Ikkuna";type:"ikkuna";bottom:"500";left:"1500";top:"1500";right:"2500";count:"1";from:"Jyri";to:"Jari";comment:"Tämä toimii?"}]__[lv:{name:"Läpivienti ";sade:"125";bottom:"5";left:"500";count:"1";from:"Jyri";to:"Jari";comment:"Tämä Läpivienti toimii?"}__{name:"Läpivienti ";sade:"125";bottom:"2000";left:"5000";count:"1";from:"Jyri";to:"Jari";comment:"Tämä Läpivienti toimii?"}]__[saumat:{name:"Sauma ";type:"pysty";bottom:"0";left:"500";cord:"500";count:"1";}__{name:"Sauma ";type:"vaaka";bottom:"500";left:"0";cord:"500";count:"1";}]__[levyt:{name:"ARAK-14_C_B2";type:"pysty";bottom:"0";left:"500";width:"";height:"";title:"2990|1065|1080|3005";no:"3";tyostot_x:"6.5|115|230|345|460|589.9";tyostot_y:"6.5|100|206.5"}]__[rangat:]__[listat:]},'>

    <input type="project_rooms_settings" id="project_rooms_settings" value='"ARAK-13": {[saumat:{suunta:"pysty";x_type:"oik";y_type:"ala";x_saumoitus:"yli";y_saumoitus:"aukkojenmukaan";leveys:"1250";pituus:"3000"}]__[levyt:]__[kiinnikkeet:{yr:"32.5";ar:"32.5";or:"32.5";vr:"36.5";k_vali_x:"600";k_vali_y:"600";type_x:"tas";type_y:"tas-pariton"}]__[rangat:]__[listat:]}' hidden>


    

    <?php 
      //$walls_contents = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'walls_content'");
      $k_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'k_saved'");
      $a_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'a_saved'");
      $b_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'b_saved'");
      $c_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'c_saved'");
      $d_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'd_saved'");
      $l_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'l_saved'");

      //$walls_cont = mysqli_fetch_all($walls_contents);
      $k_da = mysqli_fetch_all($k_s);
      $a_da = mysqli_fetch_all($a_s);
      $b_da = mysqli_fetch_all($b_s);
      $c_da = mysqli_fetch_all($c_s);
      $d_da = mysqli_fetch_all($d_s);
      $k_da = mysqli_fetch_all($l_s);
      
      //$walls_content = $walls_cont[0][3];
      $k_val = $k_da[0][3];
      $a_val = $a_da[0][3];
      $b_val = $b_da[0][3];
      $c_val = $c_da[0][3];
      $d_val = $d_da[0][3];
      $l_val = $l_da[0][3];
    ?>
    

    <input type="hidden" value="<?php echo $k_val ?>" name="k_saved" class="k_saved">
    <input type="hidden" value="<?php echo $a_val ?>" name="a_saved" class="a_saved">
    <input type="hidden" value="<?php echo $b_val ?>" name="b_saved" class="b_saved">
    <input type="hidden" value="<?php echo $c_val ?>" name="c_saved" class="c_saved">
    <input type="hidden" value="<?php echo $d_val ?>" name="d_saved" class="d_saved">
    <input type="hidden" value="<?php echo $l_val ?>" name="l_saved" class="l_saved">

    <input type="hidden" value="drawscreen_section_zero" name="step" class="step">
    <input type="hidden" value="" name="wall" class="wall">
    <input type="hidden" value="" name="walls" class="walls">
    <!--<input type="hidden" value="<?php echo $walls_content ?>" name="w_content" class="walls_content">-->
    <input type="hidden" value="" name="id" class="id">
    <input type="hidden" value="" name="room" class="room">
    <input type="hidden" value="" name="settings" class="settings">
    <input type="hidden" value="" name="a_asetukset" class="a_asetukset">
    <input type="hidden" value="" name="mittapisteet" class="mittapisteet">
    <input type="hidden" value="" name="aukot" class="aukot">
    <input type="hidden" value="" name="lapiviennit" class="lapiviennit">
    <input type="hidden" value="" name="saumat" class="saumat_data">
    <input type="hidden" value="" name="saumat" class="saumat_dataforback">
    <input type="hidden" value="" name="levyt" class="levyt_data">
    <input type="hidden" value="" name="rangat" class="rangat">
    <input type="hidden" value="" name="listat" class="listat">
    <input type="hidden" value="" name="room_status" class="room_status">
    <input type="hidden" value="" name="kokonaisalue" class="kokonaisalue">
    <input type="hidden" value="" name="levytettava_alue" class="levytettava_alue">
    <input type="hidden" value="" name="poisjaava_alue" class="poisjaava_alue">
    <input type="hidden" value="" name="keskusmittapiste_cord" class="keskusmittapiste_cord">
    <input type="hidden" value="" name="reklamaatiot" class="reklamaatiot">
   <div class="container">
    <div class="row">
      <h2><input maxlength="10" type="hidden" placeholder="Tilan nimi tähän" value="" name="wall_name" class="lineinput" id="roomname" oninput="open__change_btn();"></h2>
      <h2><input maxlength="10" type="text" placeholder="Tilanimen 1 rivi" value="" name="wall_name" class="lineinput" id="roomname_1" oninput="open__change_btn();"></h2>
      <h2><input maxlength="10" type="text" placeholder="Tilanimen 2 rivi" value="" name="wall_name" class="lineinput" id="roomname_2" oninput="open__change_btn();"></h2>
      <h2><input maxlength="10" type="text" placeholder="Tilanimen 3 rivi" value="" name="wall_name" class="lineinput" id="roomname_3" oninput="open__change_btn();"></h2>

    </div>
    <div class="row">
      <div class="col-6">
        <div class="change__roomname_btn" style="opacity: 0;" onclick="change__roomname();">
          Vaihda tilan nimi
        </div>
      </div>
      <div class="col-6">
        <div class="prev_btn" onclick='$("#step_drawscreen").val("project_start");refresh__drawcontrols();degradate_url(1);'>Edellinen</div>
      </div>
    </div>
    

   <div class="row house__intro">
      
    <div class="col-6 col-with-table">  

    <?php 

    $available_users = '';
      if(strtolower($_GET["user"]) == "tyonjohto") {
        $role = $_GET['user'];

        $_userslist = mysqli_query($db, "SELECT `username` FROM `users`");
        $userslist = mysqli_fetch_all($_userslist);
        

        $ul="";
        
        foreach ($userslist as $usern) {
          $ul.='<option value="'.ucfirst($usern[0]).'">'.ucfirst($usern[0]).'</option>';
        }
        echo '
          <div class="row">
           <h2>Jätä kommentti</h2>
           <hr style="margin-top: 50px;">
            <section class="commentbox commentbox__new">
              <div class="row">
                <div class="col-6">  
                  <h2><input type="text" value="" class="lineinput kommentti__name" placeholder="Mikä murehduttaa?" onchange="window.scrollTo(0, 150);"></h2>
                  
                </div>
                <div class="col-3">  
                  <h6>Deadline:</h6>
                  <input name="deadline_time" class="comment__deadline" type="date" min="' .  date("Y-m-d") . '" value="'.date("Y-m-t", strtotime(date("Y-m-d"))).'" onchange="document.querySelector(`#newcomment__vko`).value= new Date(this.value).getWeek();" id="newcomment__deadline">
                </div>
                <div class="col-3">  
                    <h6>Arvio työtunneista</h6>
                    <input name="time_estimate" class="time_estimate" type="number" pattern="\d*"/ value="0" style="max-width: 70px;" id="newcomment__estimatehours" min="0">h
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                 <div class="form-group">
                      <h6>Lisää tiedostot:</h6>
                      <input type="file" class="comment__files newcomment__files" name="comment__files[]" id="newcomment__files" multiple>
                      <div class="comment__preview_files newcomment__previewfiles"></div>
                  </div>
                  <h6>Keneltä</h6>
                  <input name="kommentti_comment_from" class="kommentti_comment_from" type="text" value="' . $role . '">
                    
                    
                </div>
                <div class="col-6">
                    <h6>Tehdään viikolla</h6>
                    <input name="vko_estimate" class="vko_estimate" type="number" pattern="\d*"/ value="1" min="1" max="52" style="max-width: 70px;" id="newcomment__vko">
                    <div class="row elevated_spaces">
                      <div class="col-6">
                        <h6>Kenelle</h6>
                        <select name="kommentti_comment_to" class="kommentti_comment_to kommentti_comment_newto" multiple>'.$ul.'</select>
                      </div>
                    
                    </div>
                </div>
              </div>
              <div class="commentbox__text">
                <h4>Sisältö</h4>
                <textarea name="kommentti_comment" class="kommentti_comment" cols="30" rows="10"></textarea>
                <div class="row pohjakierros">
                  <input id="is_thecomment_critical" type="checkbox" value="Critical">
                  <label for="is_thecomment_critical">Onko kriittinen?</label>
                </div>
              </div>
              <div class="commentbox_btn drawarea__controls_btn btn commentreadyready_btn sendcommentfiles"  onclick="comment__create_new();">Lähetä</div>
            </section>
          </div>';
      } 
      ?>  
           <div class="row">
            <h3>Seinän nimen taustaväri</h3>
              <div class="c_meaning c_meaning_1"><i>EI TYÖTÄ</i></div>
              <div class="c_meaning c_meaning_2"><i>ALOITTAMATTA </i></div>
              <div class="c_meaning c_meaning_3"><i>MITTAUS KESKEN</i></div>
              <div class="c_meaning c_meaning_4"><i>MATERIAALIT TILATTU</i></div>
              <div class="c_meaning c_meaning_4-5"><i>MATERIAALIT TYÖMAALLA</i></div>
              <div class="c_meaning c_meaning_5"><i>ASENNETTU</i></div>
              <div class="c_meaning c_meaning_6"><i>HYVÄKSYTTÄVÄ</i></div>
              <div class="c_meaning c_meaning_7"><i>VALMIS</i></div>
              <div class="c_meaning c_meaning_8"><i>ONGELMA</i></div>
              <div class="c_meaning c_meaning_9"><i>KRIITTINEN ONGELMA</i></div>
          </div>
          
          <div id="house" class="house">

          <?php 
            // project_type
            $id = $post['id'];

            $bosts = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`=$id");
            $bosts = mysqli_fetch_all($bosts);
            foreach ($bosts as $p) {

              if($p[4] == 'after_measure_comment') {
                
                echo '<div class="house__wall house__wall_one house__wall_a" style="width: 340px; height: 240px;">
                    <div class="house__wall_status house__wall_status_a" data-room="A" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä A</div>
                    <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200" name="wall_one_a_h" id="wall_one_a_h" onchange="change_a();">
                    <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000" name="wall_one_a_w" id="wall_one_a_w" onchange="change_a();">
                    <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarja">1</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="a"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
                <div class="house__wall house__wall_two house__wall_b" style="width: 240px; height: 240px;">
                  <div class="house__wall_status house__wall_status_b" data-room="B" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä B</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200" name="wall_one_b_h" id="wall_one_b_h" onchange="change_b();">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width_2" value="2200" name="wall_one_b_w" id="wall_one_b_w" onchange="change_b();">
                  <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarjb">2</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="b"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
                <div class="house__wall house__wall_three house__wall_c" style="width: 340px; height: 240px;">
                  <div class="house__wall_status house__wall_status_c" data-room="C" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä C</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200"  name="wall_one_c_h" id="wall_one_c_h" onchange="change_c();">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_c_w" id="wall_one_c_w" onchange="change_c();">
                  <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarjc">3</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="c"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
                <div class="house__wall house__wall_four house__wall_d" style="width: 240px; height: 240px;">
                  <div class="house__wall_status house__wall_status_d" data-room="D" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä D</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200" name="wall_one_d_h" id="wall_one_d_h" onchange="change_d();">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width_2" value="2200" name="wall_one_d_w" id="wall_one_d_w" onchange="change_d();">
                  <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarjd">4</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="d"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
                <div class="house__wall house__wall_roof house__wall_k" style="width: 340px; height: 240px;">
                  <div class="house__wall_status house__wall_status_k" data-room="K" onclick="input_step = `drawscreen_section_one`;submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);refresh__drawcontrols();">KATTO</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200"  name="wall_one_roof_h" id="wall_one_roof_h" onchange="change_roof();">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_roof_w" id="wall_one_roof_w" onchange="change_roof();">
                
                  <div class="house__wallspecial">
                    <div class="house__wall_asjarj asjarjk">5</div>
                    <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="k"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                  </div>
                </div>
                <div class="house__wall house__wall_floor house__wall_l" style="width: 340px; height: 240px;">
                  <div class="house__wall_status house__wall_status_l" data-room="L" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">LATTIA</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200"  name="wall_one_floor_h" id="wall_one_floor_h" onchange="change_floor();">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_floor_w" id="wall_one_floor_w" onchange="change_floor();">
                  <div class="house__wallspecial">
                    <div class="house__wall_asjarj asjarjl">6</div>
                    <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="l"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                  </div>
                </div>';
              }
                
            }
          
          ?>
              
        </div>
      </div>
      <div class="col-6">
        <?php
          if(strtolower($_GET["role"]) == "kommentointi") {}
          else {
            echo '
        <div id="types" class="house__types">
          <h2>Parveketyypit</h2>
          <div class="house__types_row row">'; ?>
            <?php 
              $alphabet = range('A', 'Z');            
              $p_data = mysqli_query($db, "SELECT * FROM `pohjat`");
              $p_da = mysqli_fetch_all($p_data);
              $p_data = $p_da;
              $key_name = -1;
              foreach ($p_data as $p_key) {
                  $i_a = $p_key[1];
                  $i_b = $p_key[2];
                  $i_c = $p_key[3];
                  $i_d = $p_key[4];
                  $i_k = $p_key[5];
                  $i_l = $p_key[6];

                  $key_name += 1;

                  echo "<div onclick='initialize__housetempla(this,1);' data-aroom='" . strtolower($i_a) . "' data-broom='" . strtolower($i_b) . "' data-croom='" . strtolower($i_c) . "' data-droom='" . strtolower($i_d) . "' data-kroom='" . strtolower($i_k) . "' data-lroom='" . strtolower($i_l) . "' class='house__types_type'>" . $alphabet[$key_name] . "</div>";
              }
              
            

            echo '
          </div>
          <div class="house__types_button" onclick="initialize__housetempla(this,2);">
            Tallenna tämä asunto pohjaksi
          </div>
        </div>';
        echo '
        <div class="col-table">
           <h2>Seinien asennusjärjestys</h2>
           <table>
             <tr>
                <td><input type="number" pattern="\d*"/ data-room="asjarj-1" maxlength="1" name="wall_one_asjarj asjarj" id="wall_order_a" data-tochange="a" onchange="rooms__change_asjarj(this); " value="1" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="a" name="wall_one_a" id="wall_one_a" value="SEINÄ A" data-tochange="a" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_a_desc" id="wall_desc_a" data-tochange="a" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" pattern="\d*"/ data-room="asjarj-2" maxlength="1" name="wall_two_asjarj asjarj" id="wall_order_b" data-tochange="b" onchange="rooms__change_asjarj(this); "value="2" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="b" name="wall_one_b" id="wall_one_b" value="SEINÄ B" data-tochange="b"  class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_b_desc" id="wall_desc_b" data-tochange="a" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" pattern="\d*"/ data-room="asjarj-3" maxlength="1" name="wall_three_asjarj asjarj" id="wall_order_c" data-tochange="c" onchange="rooms__change_asjarj(this); "value="3" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="c" name="wall_one_c" id="wall_one_c" value="SEINÄ C" data-tochange="c" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_c_desc" id="wall_desc_c" data-tochange="a" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" pattern="\d*"/ data-room="asjarj-4" maxlength="1" name="wall_four_asjarj asjarj" id="wall_order_d" data-tochange="d" onchange="rooms__change_asjarj(this); "value="4" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="d" name="wall_one_d" id="wall_one_d" value="SEINÄ D"  data-tochange="d" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_d_desc" id="wall_desc_d" data-tochange="a" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" pattern="\d*"/ data-room="asjarj-5" maxlength="1" name="wall_five_asjarj asjarj" id="wall_order_roof" data-tochange="k" onchange="rooms__change_asjarj(this); "value="5" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="roof" name="wall_one_roof" id="wall_one_roof" value="KATTO" data-tochange="r" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_roof_desc" id="wall_desc_roof" data-tochange="a" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" pattern="\d*"/ data-room="asjarj-6" maxlength="1" name="wall_six_asjarj asjarj" id="wall_order_floor" data-tochange="l" onchange="rooms__change_asjarj(this); "value="6" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="floor" name="wall_one_floor" id="wall_one_floor" value="LATTIA" data-tochange="l" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_floor_desc" id="wall_desc_floor" data-tochange="a" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
           </table>
           <!--<div class="kumoa" onclick="kumoa();">Kumoa</div>-->
        </div> ';
      }
        ?>

        <div id="house__intro_commenting">
          <h3>Kommentit</h3>
          <div class="house__intro_comments">
              <?php 
                $id = $post['id'];
                $role = $_GET['user'];
                if(strtolower($_GET["user"]) == "tyonjohto") {
                  $bosts = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`=$id AND `ending_time`='' AND `answer_to`=''");
                  $bosts = mysqli_fetch_all($bosts);
                }
                else {
                  $bosts = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`=$id AND `comment_to` LIKE '%$role%' AND  `ending_time`='' AND `answer_to`=''");
                  $bosts = mysqli_fetch_all($bosts);
                }
                  

                  foreach ($bosts as $p) {
                    $_p = explode("https://", $p[6]);
                    $_z = "";
                    foreach ($_p as $v) {
                      if(strlen($v) >= 7 ) {
                        $_z .= "<li><a href=https://" . $v . " target=`_blank`> <img style='max-width: 200px' src=https://" . $v . " /></a></li>";
                      }
                    }
                    if(strtolower($_GET["user"]) == "tyonjohto") {
                      $aloitus_btn ='';
                    }
                    else {
                      $aloitus_btn ='';
                    }

                    if(strtolower($p[8]) == "sahko") {
                      $photo = '<img src="/img/comroles/light.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "sahkos") {
                      $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "rakennustyo") {
                      $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "rakennustyo3") {
                      $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "rakennustyo2") {
                      $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "ilmastointi") {
                      $photo = '<img src="/img/comroles/ventilation.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "putki_ivs") {
                      $photo = '<img src="/img/comroles/ventilation.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "vesi") {
                      $photo = '<img src="/img/comroles/water.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "vesis") {
                      $photo = '<img src="/img/comroles/water.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "siivous") {
                      $photo = '<img src="/img/comroles/siivous.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "purku") {
                      $photo = '<img src="/img/comroles/purku.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "westface") {
                      $photo = '<img src="/img/comroles/wf.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "myynti") {
                      $photo = '<img src="/img/comroles/myynti.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "lukkomies") {
                      $photo = '<img src="/img/comroles/lock.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "suunnittelu") {
                      $photo = '<img src="/img/comroles/suunnittelu.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "arak") {
                      $photo = '<img src="/img/comroles/cup.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "rak") {
                      $photo = '<img src="/img/comroles/cup.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else if(strtolower($p[8]) == "pu") {
                      $photo = '<img src="/img/comroles/cup.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    else {
                      $photo = '<img src="/img/comroles/others.png" style="width:24px; height: 21px;margin-top: -8px;">';
                    }
                    $comment_id = $p[0];
                    $classname = str_replace('a','o',str_replace('Ã','a',str_replace('Ã','a',str_replace('ã','a',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($p[2])))))))))))))));                  
                    if(strtolower($_GET["user"]) == "tyonjohto") {
                      $start_btn = '<div class="modal_close_btn drawarea__controls_btn_ aloitus_nappula" onclick="copy_comment(this);">Kopioi</div>';
                    }
                    else {
                      if(strtolower($p[16]) == "aloitettu") {
                        $start_btn = '<div class="modal_close_btn drawarea__controls_btn_ aloitus_nappula" onclick="changestatus(this,`'.$comment_id.'`);">Keskeytä</div>';
                        $border_colour_status = "yellow";
                      }
                      else if(strtolower($p[16]) == "aloittamatta") {
                        $start_btn = '<div class="modal_close_btn drawarea__controls_btn_ aloitus_nappula" onclick="changestatus(this,`'.$comment_id.'`);">Aloita</div>';
                        $border_colour_status = "black";
                      }
                      else {
                        $start_btn = '<div class="modal_close_btn drawarea__controls_btn_ aloitus_nappula" onclick="changestatus(this,`'.$comment_id.'`);">Aloita</div>';
                        $border_colour_status = "red";
                      }
                    }
                    if(strtolower($p[16]) == "aloitettu") {
                      $border_colour_status = "yellow";
                    }
                    else if(strtolower($p[16]) == "aloittamatta") {
                      $border_colour_status = "black";
                    }
                    else {
                      $border_colour_status = "red";
                    }

                    

                    $_userslist = mysqli_query($db, "SELECT `username` FROM `users`");
                    $userslist = mysqli_fetch_all($_userslist);
                    

                    $ticket_options="";

                    if(strpos($p[8], '|') !== false) {
                      $chosen_users=str_replace('|', ' ja ', $p[8]);
                    }
                    else {
                      $chosen_users = "";
                    }
                    
                    
                    
                  
                    
                    foreach ($userslist as $usern) {
                      if($usern[0] == $p[8]) {
                        $ticket_options.='<option value="'.ucfirst($usern[0]).'" selected>'.ucfirst($usern[0]).'</option>';
                      }
                      else {
                        $ticket_options.='<option value="'.ucfirst($usern[0]).'">'.ucfirst($usern[0]).'</option>';
                      }
                    }
                    $is_the_critical_checked = '';

                    if($p[9] == 'no_critical') {
                      $is_the_critical_checked = '';
                    }
                    else if($p[9] == 'critical') {
                      $is_the_critical_checked = 'checked';
                    }

                    if(strtolower($_GET["user"]) == "tyonjohto") {
                      $criticality_option = '
                    <div class="row" style="margin-top: 16px;width: 100%;">
                      <div class="col-6"><h4>Onko kriitinen?</h4></div>
                      <div class="col-6"><input class="commentbox__criticality" type="checkbox" value="Critical" '.$is_the_critical_checked.' min="0" onchange="change_task_criticality(`'.$p[0].'`,this);"/></div>
                    </div>';
                    }
                    else {
                      $criticality_option ='';
                    }

                    $cur_usr = strtolower($_GET["user"]);
                    $_curusr = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$cur_usr';");
                    $curusr = mysqli_fetch_all($_curusr);

                    if($curusr[0][4] == 1) {
                      // <h4>Poista kuittaamatta</h4>
                      $usr_option = '
                        <div class="row" style="margin-top: 16px;width: 100%;">
                          <div class="col-6"></div>
                          <div class="col-6"><div class="modal_close_btn drawarea__controls_btn sulkemis_nappula" onclick="comment__deletekuittaamatta(this);" name="' . $p[0] . '">Poista kuittaamatta</div></div>
                        </div>';
                    }
                    else {
                      $usr_option ='';
                    }

                    

                    

                    
                    echo '<section class="commentbox ' . $p[0] . ' ' . $p[9] . '" data-room="' . strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($p[2],'HTML-ENTITIES','utf-8')))) . '" data-name="' . $p[0] . '">
                      <div class="row commentbox__row">'.$photo.'
                        <span class="comment__status" style="border-color: '.$border_colour_status.'">' . $p[16] . '</span>
                        <input class="commentbox__name" oninput="change_task_texts(`'. $p[0] .'`)" value="'. $p[3] .'">
                        <span class="comment_deadline" style="margin-top: -8px;">' . $p[13] . '</span>
                        <div onclick="this.parentElement.parentElement.classList.toggle(`open`);" style="margin-top: -8px;">Avaa/sulje</div>
                      </div>
                      
                      <div class="row commentbox__secondrow">
                        <div class="col-6">
                          <h4>Tiedostot:</h4>
                          <ul class="commentbox__tiedostot">' . $_z . '</ul>
                        </div>
                        <div class="col-6">
                            <h4>Sisältö:</h4>
                            <textarea class="commentbox__content" oninput="change_task_texts(`'. $p[0] .'`);" value="'. $p[5] . '">'. $p[5] . '</textarea>
                        </div>
                       
                      </div>
                      <div class="commentbox__text row">
                        <div class="col-6">
                            <h4>Keneltä:</h4>
                            <span class="commentbox__from">' . $p[7] . '</span>
                        </div>
                        <div class="col-6">
                            <h4>Kenelle:</h4>
                            <select onchange="change_task_assignation(`'. $p[0] .'`);" multiple class="commentbox__to change_task_assignation '.$p[0].'">' . $ticket_options .  '</select> <br>
                            <i class="commentbox__users">'.$chosen_users.'</i>
                        </div>
                      </div>
                      <div class="row commentbox__btns">
                        <div><div class="modal_close_btn drawarea__controls_btn sulkemis_nappula" onclick="this.parentElement.parentElement.parentElement.classList.toggle(`open`);">Sulje</div></div>
                        <div><div class="modal_close_btn drawarea__controls_btn_ vastaus_nappula" onclick="comment__help(this,`mode1`);" name="' . $p[0] . '">Pyydä apua</div></div>
                        <div><div class="modal_close_btn drawarea__controls_btn_ vastaus_nappula" onclick="comment__help(this,`mode2`);" name="' . $p[0] . '">Tilaa materiaalit</div></div>
                        <div>'.$start_btn.'</div>
                        <div><div class="modal_close_btn drawarea__controls_btn kuittaus_nappula" name="' . $p[0] . '" onclick="comment__kuittaus(this);">Kuittaan tehdyksi</div></div>
                      </div>
                      <div class="row time__stamps" style="margin-top: 16px;width: 100%;">
                        <div class="col-3"><h4>Työtunnit, arvio:</h4><input class="commentbox__hours" type="number" pattern="\d*"/ value="'.$p[15].'" min="0" onchange="change_task_hours(this,`'.$p[0].'`);"/></div>
                        <div class="col-3"><h4>Työnjohdon määräaika:</h4><i class="commentbox__deadline">'.$p[17].'</i></div>
                        <div class="col-3"><h4>Sinun arviosi valmistumiselle:</h4><input class="commentbox__tja" type="date" value="'.$p[18].'" oninput="change_task_tta(this,`'.$p[0].'`);"/></div>
                        <div class="col-3"><h4>Deadline:</h4><i class="commentbox__deadline">'.$p[13].'</i></div>
                      </div>'.$criticality_option.$usr_option.'  
                      
                      <section class="commentbox commentbox__help" data-name="' . $p[0] . '">
                        <h2><input type="text" value="Vastaus: " class="lineinput kommentti__name"></h2>
                        <div class="row">
                          <div class="col-6">  
                            <div class="form-group">
                                <h6>Lisää tiedostot:</h6>
                                <input type="file" class="comment__files" name="comment__files[]" multiple>
                                <div class="comment__preview_files ' . $p[0] . '_previewfiles"></div>
                            </div>
                            <h6>Keneltä</h6>
                            <input name="kommentti_comment_from" class="kommentti_comment_from" type="text" value="' . $role . '">
                          </div>
                          
                          <div class="col-6">
                              <h6>Deadline:</h6>
                              <input name="deadline_time" class="comment__deadline" type="date" min="' .  date("Y-m-d") . '">

                              <h6 class="commentbox__help_who">Kenelle</h6>
                              
                              <select name="kommentti_comment_to" class="kommentti_comment_to commentbox__help_options"></select>
                          </div>
                          <div class="col-6 commentbox__help_order">
                              <h6>Mitä tilataan:</h6>
                              <input name="order_what" class="comment__deadline order_what" type="text" value="">
                          </div>
                          <div class="col-6 commentbox__help_order_2">
                              <h6>Kappalemäärä:</h6>
                              <input name="order_count" class="comment__deadline order_count" type="number" pattern="\d*"/ value="0" min="0">
                          </div>
                          <div class="col-6 commentbox__help_order_3">
                              <h6>Hinta €:</h6>
                              <input name="order_price" class="comment__deadline order_price" type="number" pattern="\d*"/ value="0" min="0">
                          </div>
                          <div class="col-6 commentbox__help_order_4">
                            <h6>Noutaja:</h6>
                            <input name="order_to" class="comment__deadline order_to" type="text">
                          </div>
                          <div class="col-6 commentbox__help_order_5 row">
                            <div class="col-4">
                              <h6>Pituus (mm):</h6>
                              <input name="order_measures" class="comment__deadline order_measures order_measures_1" type="number" pattern="\d*"/ value="0" min="0">
                            </div>
                            <div class="col-4">
                              <h6>Leveys (mm):</h6>
                              <input name="order_measures" class="comment__deadline order_measures order_measures_2" type="number" pattern="\d*"/ value="0" min="0">
                            </div>
                            <div class="col-4">
                              <h6>Syvyys (mm):</h6>
                              <input name="order_measures" class="comment__deadline order_measures order_measures_3" type="number" pattern="\d*"/ value="0" min="0">
                            </div>
                          </div>
                        </div>
                        <div class="commentbox__text">
                          <h4>Sisältö</h4>
                          <textarea name="kommentti_comment" class="kommentti_comment" cols="30" rows="10"></textarea>
                        </div>
                        <div class="commentbox_btn drawarea__controls_btn btn ready_btn" onclick="comment__create_simpler(`' . $p[0] . '`,this);" name="' . $p[0] . '">Lähetä</div>

                      </section>';
                    
                  
                    $bosts2 = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`=$id AND `ending_time`='' AND `answer_to`='$comment_id'");
                    $bosts2 = mysqli_fetch_all($bosts2);

                    

                    foreach ($bosts2 as $p2) {
                      $_p2 = explode("https://", $p2[6]);
                      $_z2 = "";
                      foreach ($_p2 as $v2) {
                        if(strlen($v2) >= 7 ) {
                          $_z2 .= "<li><a href=https://" . $v2 . " target=`_blank`> <img style='max-width: 200px' src=https://" . $v2 . " /></a></li>";
                        }
                      }
                      echo '<section class="commentbox commentbox__helpticket ' . $p[0] . ' ' . $p[9] . '" data-room="' . $p[2] . '" data-name="' . $p[0] . '">
                              <h2 class="commentbox__name">' . $p2[3] .'</h2>
                              <div class="row">
                                  <div class="col-3">
                                    <h4>Tiedostot:</h4>
                                    <ul class="commentbox__tiedostot">' . $_z2 .'</ul>
                                  </div>
                                  <div class="col-3">
                                      <h4>Keneltä:</h4>
                                      <span class="commentbox__from">' . $p2[7] .'</span>
                                  </div>
                                  <div class="col-3">
                                      <h4>Kenelle:</h4>
                                      <span class="commentbox__to">' . $p2[8] .'</span>
                                  </div>
                                  <div class="col-3">
                                      <h4>Aihe:</h4>
                                      <span class="commentbox__aihe">' . $p2[12] .'</span>
                                  </div>
                                  <div class="col-3">
                                      <h4>Deadline:</h4>
                                      <span class="commentbox__deadline">' . $p2[13] .'</span>
                                  </div>
                              </div>
                              <div class="commentbox__text">
                                  <h4>Sisältö:</h4>
                                  <p class="commentbox__content">' . $p2[5] .'</p>
                              </div>
                            </section>';
                    }    
                    echo '</section>';
                }
              ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      </div>
  </div>
  <div class="modal-container">
    <div class="modal-background">
      <div class="modal">
        <div class="modal_close_btn">
          <b><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></b></div>
          <div class="modal_close_btn drawarea__controls_btn btn ready_btn">Valmis</div>
        
      </div>
    </div>
   </div>
   

</form>

<input type="text" hidden id="step_drawscreen" value="">
<input type="text" hidden id="skipping_apartment" value="<?php echo $_GET['apartment']?>">
<input type="text" hidden id="skipping_room" value="<?php echo $_GET['room']?>">
<input type="text" hidden id="skipping_step" value="<?php echo $_GET['step']?>">

 <div class="question-container recl-container out" id="question__popup">
    <div class="modal-background">
      <div class="modal">
        <section class="comment__section">
           <h2>Levytetäänkö muutkin seinät?</h2>
            <div class="modal_close_btn modal-no" onclick="document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeWalls_all();">Ei</div>
            <div class="modal_close_btn modal-yes" onclick="document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeWalls_all();">Kyllä</div>
        </section>
      </div>
    </div>
  </div>

<div class="first_popup cus-container">
  <div class="modal-background">
    <div class="modal">
      <div class="modal_close_btn" onclick="document.querySelector('.first_popup').classList.add('out');document.querySelector('.first_popup').classList.remove('two');">
      <b><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></b></div>
      <h4>Projektin asetukset:</h4>
      <section style="border-bottom: 1px solid lightgray">
        <div class="row">
          <div class="col-6"><h6>Hankkeen nimi</h6></div>
          <div class="col-6"><input type="text" value="<?= $post["title"]; ?>" class="project__settings_name" oninput="projectname__change(this);"></div>
        </div>
      </section>
      <section style="border-bottom: 1px solid lightgray">
        <div class="row">
          <div class="col-6"><h6>Hankkeen aloitus</h6></div>
          <?php 
          
            $id = $post['id'];

            $pr__type = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$id';");
            $pr__type = mysqli_fetch_all($pr__type)[0];

            if($pr__type[4] == '') {
              echo '<div class="col-6"><div class="project__settings_coolbtn" onclick="start__measuring(this);">Aloita mittaaminen</div></div>';
            }
            else {
              echo '<div class="col-6"><div class="project__settings_coolbtn yellow" onclick="start__measuring(this);">Päätä mittus</div></div>';
            }
          ?>
        </div>
      </section>
      <section style="border-bottom: 1px solid lightgray">
        <div class="row">
          <div class="col-6"><h6>Henkilöiden lisäys</h6></div>
          <div class="col-6"><div class="button project__settings_contactadding" onclick="settings_henkilolisays(this);">Lisää uusi henkilö projektiin</div></div>
          <fieldset id="settings__henkilolisays_inputs">

          </fieldset>
        </div>
      </section>
      <section class="first__container">
          <h6>Hankkeen suunnitelmat</h6>
          <div class="row">
            <?php
              for ($x = 1; $x <= 6; $x++) {
                if($x == 1) {
                  $projectsetting__fileheader = "Kaupalliset asiakirjat";
                }
                elseif($x == 2) {
                  $projectsetting__fileheader = "Työmaan asiakirjat";
                }
                elseif($x == 3) {
                  $projectsetting__fileheader = "Arkkitehtisuunnitelmat";
                }
                elseif($x == 4) {
                  $projectsetting__fileheader = "Rakennesuunnitelmat";
                }
                elseif($x == 5) {
                  $projectsetting__fileheader = "Omat suunnitelmat";
                }
                elseif($x == 6) {
                  $projectsetting__fileheader = "Muut asiakirjat";
                }

                $meta_queryselector = strtolower(str_replace("ö","o",str_replace("ä","a",str_replace(" ","_",str_replace("?","",$projectsetting__fileheader)))));
                $id = $post['id'];

                $files_ = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`='$id' AND `meta_key`='$meta_queryselector';");
                $files = mysqli_fetch_all($files_)[0][3];
                $x_ = str_replace("6", "six", str_replace("5", "five", str_replace("4", "four", str_replace("3", "three", str_replace("2", "two", str_replace("1", "one", $x))))));
                echo '<div class="form-group">
                  <h4>'.$projectsetting__fileheader.'</h4>
                  <input type="file" accept="application/pdf" class="project__settings_uploadinput" id="files-'.$x_.'" name="files-'.$x_.'[]" multiple>
                  <div id="preview-'.$x_.'" class="'.$x_.'_previewfiles">'.$files.'</div>
                  <input name="'.$x_.'" type="button" id="uploadsubmit-'.$x_.'" class="project__settings_uploadsend" value="Lähetä '.$projectsetting__fileheader.'">
                </div>';
              }
            ?>

          </div>
      </section>
      
      <div class="modal_close_btn drawarea__controls_btn btn ready_btn" onclick="document.querySelector('.first_popup').classList.add('out');document.querySelector('.first_popup').classList.remove('two');" style="text-align: center; width: 100%;">Valmis</div>
    </div>
  </div>
</div>
<div class="second_popup cus-container">
  <div class="modal-background">
    <div class="modal">
      <div class="modal_close_btn" onclick="document.querySelector('.second_popup').classList.add('out');document.querySelector('.second_popup').classList.remove('two');">
        <b><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></b></div>
        <h4>Merkkaa laskuttavaksi:</h4>
        <div class="table_overflow">
          <?php
            $id = $post['id'];
            echo '<br><hr><br><section id="'.strtolower(str_replace('ö','a',str_replace('ä','a',str_replace('-','',str_replace(' ','',$shop[0]))))).'"><h3 style="text-transform:uppercase;" onclick="this.parentElement.querySelector(`table`).classList.toggle(`hidden`);">'.$shop[0].'</h3><br>';
            $_shoppinglist = mysqli_query($db, "SELECT * FROM `shoppinglist` WHERE `projectid`='$id' AND `laskutettu`='EI' ");
            $shoppinglist = mysqli_fetch_all($_shoppinglist);
            echo '<table class="hidden">
                <tr class="firstrow">
                    <td style="border: 1px solid lightgray;"><b>Merkkaa tänne</b></td>
                    <td style="border: 1px solid lightgray;">Projekti</td>
                    <td style="border: 1px solid lightgray;">Huone</td>
                    <td style="border: 1px solid lightgray;">Mitä</td>
                    <td style="border: 1px solid lightgray;">KPL</td>
                    <td style="border: 1px solid lightgray;">Kauppa</td>
                    <td style="border: 1px solid lightgray;">Käyttötarkoitus</td>
                    <td style="border: 1px solid lightgray;">Tilaus pvm</td> 
                    <td style="border: 1px solid lightgray;">Status</td> 
                    <td style="border: 1px solid lightgray;">Deadline</td> 
                    <td style="border: 1px solid lightgray;">Kuvat</td> 
                    <td style="border: 1px solid lightgray;">Hinta</td> 
                    <td style="border: 1px solid lightgray;">Pituus</td> 
                    <td style="border: 1px solid lightgray;">Keneltä</td> 
                    <td style="border: 1px solid lightgray;">Noutaja</td> 
                    <td style="border: 1px solid lightgray;">Onko laskutettu?</td> 
                </tr>';
            foreach ($shoppinglist as $sl) {
                echo '<tr class="'.$sl[0].'"><td onclick="send_laskutus(this);"  style="border: 1px solid lightgray;padding: 1px 2px;"></td>';
                
                foreach ($sl as $s) {
                    if($s == $sl[2]) {
                        $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$s' ");
                        $_pr_name = mysqli_fetch_all($pr_name_);
                        $pr_name = $_pr_name[0][1];
                        echo '<td style="border: 1px solid lightgray;padding: 1px 2px;">'.$pr_name.'</td>';
                    }
                    else if($s == $sl[1]) {
                    
                      
                    }
                    else if($s == $sl[0]) {

                    }
                    else if($s == $sl[12]) {
                      echo '<td class="pricetopay" style="border: 1px solid lightgray;padding: 1px 2px;">'.$s.'</td>';

                    }
                    else if($s == $sl[9]) {
                        
                        echo '<td style="border: 1px solid lightgray;padding: 1px 2px;"><button onclick="changestatus('.$sl.',this)">'.ucfirst($s).'</button></td>';
                    }
                    else if($s == $sl[11]) {
                        
                        echo '<td style="border: 1px solid lightgray;padding: 1px 2px;"><a href="'.$s.'" target=`_blank`><img style="max-width: 200px" src="'.$s.'"/></a></td>';
                    }
                    else if($s == $sl[10]) {
                        $pr_name_ = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`='$s' ");
                        $_pr_name = mysqli_fetch_all($pr_name_);
                        $pr_name = $_pr_name[0][1];
                        echo '<td style="border: 1px solid lightgray;padding: 1px 2px;">'.$pr_name.'</td>';
                    }
                    else {
                        echo '<td style="border: 1px solid lightgray;padding: 1px 2px;">'.ucfirst($s).'</td>';

                    }
                }
                echo '</tr>';
            }
            echo '</table></section><br>';

          ?> 
        </div>
        <section class="laskutusrivit">
          <div class="laskutusrivit_stark">
            <h6></h6>
            <table id="laskutusrivit_stark">
            
            </table>
          </div>
          <div class="laskutusrivit_westface">
            <h6></h6>
            <table id="laskutusrivit_westface">
            
            </table>
          </div>
          <div class="laskutusrivit_p20varasto">
            <h6></h6>
            <table id="laskutusrivit_p20varasto">
            
            </table>
          </div>
          <div class="laskutusrivit_p20k-krs">
            <h6></h6>
            <table id="laskutusrivit_p20k-krs">
            
            </table>
          </div>
          <div class="laskutusrivit_peltineloset">
            <h6></h6>
            <table id="laskutusrivit_peltineloset">
            
            </table>
          </div>
          <div class="laskutusrivit_kannatuspalvelu">
            <h6></h6>
            <table id="laskutusrivit_kannatuspalvelu">
            
            </table>
          </div>
          <div class="laskutusrivit_toimisto">
            <h6></h6>
            <table id="laskutusrivit_toimisto">
            
            </table>
          </div>
        </section>
        <div class="laskutusrivit_summa">Yhteensä: <b></b></div>
        <div class="modal_close_btn drawarea__controls_btn btn ready_btn" onclick="send_laskutus_data();document.querySelector('.second_popup').classList.add('out');document.querySelector('.second_popup').classList.remove('two');" style="padding-bottom: 30px; text-align: center; width: 100%;">Valmis</div>
      
    </div>
  </div>
</div>

<div class="third_popup cus-container">
  <div class="modal-background">
    <div class="modal">
      <div class="modal_close_btn" onclick="document.querySelector('.third_popup').classList.add('out');document.querySelector('.third_popup').classList.remove('two');">
        <b><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></b></div>
        <section>
          <h4>Valitse projektin henkilöt:</h4>
          <fieldset>
              <?php
              $users = mysqli_query($db, "SELECT * FROM `users`");
              $users = mysqli_fetch_all($users);
                  foreach ($users as $p) { 
                    echo '<input type="radio" value=' . '"' . $p[1] . '"' . 'name="user" id='. '"' . $p[1] . '"' . 'class="popup_user"/>';
                    echo '<label for=' . '"' . $p[1] . '"' . ' class="popup_user_label">'. '' . $p[1] . '' . '</label>';
                }
              ?>

                

            
          </fieldset>
            
        </section>
        <div class="modal_close_btn drawarea__controls_btn btn ready_btn" onclick="document.querySelector('.third_popup').classList.add('out');document.querySelector('.third_popup').classList.remove('two');" style="padding-bottom: 30px; text-align: center; width: 100%;">Valmis</div>
      
    </div>
  </div>
</div>

<div class="fourth_popup cus-container">
  <div class="modal-background">
    <div class="modal">
      <section class="commentasking__section">
          <h3>Pidäthän meidät ajan tasalla:</h3>
          <div class="row">
            <div class="col-4">
              <h6>Paljon tunteja jäljellä?</h6>
              <input type="number" pattern="\d*"/ id="commentasking__lefthours" min="0" onchange="change_task_specs();">
            </div>
            <div class="col-4">
                <h6>Päivämäärä milloin jatkuu?</h6>
                <input type="date" id="commentasking__pvm" value="<?php echo date("Y-m-d"); ?>" onchange="change_task_specs();">
            </div>
            <div class="col-4">
                <h6>Valmiusaste 0-100</h6>
                <input type="range" step="10" min="0" max="100" id="commentasking__readiness" onchange="change_task_specs();">
                <i id="commentasking__readiness_value"></i>
            </div>
          </div>
          <div class="modal_close_btn modal-yes" onclick="fourth_tallennus();">Tallenna</div>
          <div class="modal_close_btn modal-no" onclick="document.querySelector('.fourth_popup').classList.add('out');document.querySelector('.fourth_popup').classList.remove('two');">Sulje</div>

        </section>
    </div>
  </div>
</div>
<div class="five_popup cus-container">
  <div class="modal-background">
    <div class="modal">
      <section class="commentasking__section">
        <h3>Muokkaa projektia:</h3>
        <div class="per50 floatleft rappu-1" id="A_" style="opacity: 1;" maxlength="5">
          <div class="tablepreviewz">
              <div class="roomconfig_second_prefixes">
                <h2><input type="text" maxlength="10" list="" id="a_val" name="a_prefix" value="ARAK-"></h2>
                <h2><input type="text" maxlength="10" list="" id="a_nextnum" name="a_nextnum" value="1" class="prefixnum" onclick="change__byhands(this)"></h2>
                <h5><input type="text" maxlength="10" list="" id="a_nextnum_second" name="a_nextnum_second" value="" class="prefixnum prefixnum_second"></h5>
                <h5><input type="text" maxlength="10" list="" id="a_nextnum_third" name="a_nextnum_third" value="" class="prefixnum prefixnum_second"></h5>
              </div>
                
              <div class="table_size_chooser sizer">
                <div class="SizeChooser">
                  <table class="table">
                    <tbody>
                        <?php
                          for ($i=10; $i >= -1; $i--) { 
                            if($i == 0) {
                                echo '<tr class="K" onclick="open_k();">';
                                $i_ = "K?";
                            }
                            else if($i == -1) {
                                echo '<tr class="AK" onclick="open_ak();">';
                                $i_ = "AK?";
                            }
                            else {
                                echo "<tr>";
                                $i_ = $i;
                            }


                            for ($a=1; $a < 30; $a++) { 
                                if($a == 1) {
                                  echo '<td class="noindex"><label>'.$i_.'</label></td>';
                                }
                                echo '<td><input type="checkbox" name="room_name"><label></label></td>';
                            }
                            echo "</tr>";
                          }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="form-group pohjakierros">
                <label for="pohjakierros">"Ei työtä"-merkkaus käyttöön</label><input type="checkbox" id="pohjakierros" onclick="pohjakierros_function();">
              </div>
          </div>
        </div>
      </section>
      <div class="modal_close_btn modal-yes" onclick="document.querySelector('.five_popup').classList.add('out');document.querySelector('.five_popup').classList.remove('two');send_new_aparts();">Tallenna</div>
      <div class="modal_close_btn modal-no" onclick="document.querySelector('.five_popup').classList.add('out');document.querySelector('.five_popup').classList.remove('two');">Sulje</div>
    </div>
  </div>
</div>

<?php 
$options = "";
$users = mysqli_query($db, "SELECT * FROM `users`");
$users = mysqli_fetch_all($users);
foreach ($users as $p) { 
  // give_numbers(this,`'.$p[6].'`,`'.$p[7].'`,`'.$p[8].'`);
  $options.='<option value="'.$p[1].'">'.$p[1].'</option>';
}
foreach ($users as $p) { 

  echo '<input type="hidden" value="'.$p[1].'|'.$p[6].'|'.$p[7].'|'.$p[3].'|'.$p[4].'|'.$p[5].'"  class="'.str_replace(" ","___",strtolower($p[1])).'_userselection">';
}

echo '<datalist id="prc_new_list">
'.$options.'
</datalist>';

if(strtolower($_GET["role"]) == "kommentointi") {
  echo "<style>
  .house__intro .lineinput {
    pointer-events:none;
  }
  #types {
    display: none;
  }
  </style>";
}
?>
<script>
  var slider = document.getElementById("commentasking__readiness");
  var output = document.getElementById("commentasking__readiness_value");
  output.innerHTML = slider.value + "%"; // Display the default slider value

  // Update the current slider value (each time you drag the slider handle)
  slider.oninput = function() {
    output.innerHTML = this.value + "%";
  }
</script>
<script>
    function showcross(e) {
        // e.classList.add("tomeasure");
        // document.querySelector("#rooms").style.display= "block";
        // document.querySelector("#project_start").style.display= "none";


    }
</script>
<script>
  function tp_open() {
    document.querySelector('.third_popup').classList.add("two");
    document.querySelector('.third_popup').classList.remove("out");
    
  }

  function sec_open() {
    document.querySelector('.second_popup').classList.add("two");
    document.querySelector('.second_popup').classList.remove("out");
    
  }
  function fourp_open(arg) {
    document.querySelector('.fourth_popup').classList.add("two");
    document.querySelector('.fourth_popup').classList.remove("out");

    document.querySelector(".commentasking__section").dataset.currentcomment = arg;
    
  }

  function fourth_tallennus() {
    document.querySelector('.fourth_popup').classList.add('out');
    document.querySelector('.fourth_popup').classList.remove('two');

    ticket.querySelector(".comment__status").innerHTML = "Keskeytetty";
    ticket.querySelector(".comment__status").style.borderColor = "red";
  }
</script>