<section id="project_start" class="project__roomcount" > 
    <div class="container">
    <div class="row">
      <div class="col-6"><h1 class="project_start_heading">Seinäeditori <!-- / < ? = $post["project_type"]; ? >  --><br> Kohde <?= $post["title"]; ?></h1></div>
      <div class="col-6"><h3>Alkuasetukset:</h3><br>
        <table>
          <tr>
            <td>Järjestelmä:</td>
            <td>Standard</td>
          </tr>
          <tr>
            <td>Käytössä olevat materiaalit:</td>
            <td>Formica Vivix Malibu </td>
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
                        $da_child = explode(",", $a_key);
                        $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                        $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                        $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                        $aroom = str_replace('a_room:','',str_replace('~',',',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3]))))));
                          $broom = str_replace('b_room:','',str_replace('~',',',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4]))))));
                            $croom = str_replace('c_room:','',str_replace('~',',',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5]))))));
                              $droom = str_replace('d_room:','',str_replace('~',',',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6]))))));
                                $kroom = str_replace('k_room:','',str_replace('~',',',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7]))))));
                                  $lroom = str_replace('l_room:','',str_replace('~',',',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8]))))));

                          echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                   
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
                          echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                   
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
                          echo "<div onclick='apartment = this;initalize_cross(this);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div onclick='apartment = this;initalize_cross(this);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div onclick='apartment = this;initalize_cross(this);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div onclick='apartment = this;initalize_cross(this);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div onclick='apartment = this;initalize_cross(this);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div onclick='apartment = this;initalize_cross(this);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div onclick='apartment = this;initalize_cross(this);' data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='project__building_room ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                          echo "<div data-room='".strtolower($key0)."' data-y='".$key1."' data-x='".$key2."' class='nowork ".strtolower(str_replace('Tila ','',$key0))."' style='margin-top: calc(" . $key1 . "px*60);margin-left:calc(".$key2 . "px*60);'>".$key0."</div>";
                   
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
                  </section>
                </div>
                
                <!-- end of sizer -->    
            </div>
        </div>
        
        <!-- end of sizer -->    
    </div>
    <div class="container colormeanings">
      <div class="row">
          <div class="c_meaning c_meaning_1"><i>EI TYÖTÄ</i></div>
          <div class="c_meaning c_meaning_2"><i>TEKEMÄTTÄ</i></div>
          <div class="c_meaning c_meaning_3"><i>MITTAUS ALOITETTU</i></div>
          <div class="c_meaning c_meaning_4"><i>SAUMAT MITATTU</i></div>
          <div class="c_meaning c_meaning_5"><i>RANGAT MITATTU</i></div>
          <div class="c_meaning c_meaning_6"><i>MITATTU</i></div>
          <div class="c_meaning c_meaning_7"><i>VALMIS</i></div>
          <div class="c_meaning c_meaning_8"><i>VIRHE/ONGELMA</i></div>
          <div class="c_meaning c_meaning_9"><i>KRIITTINEN VIRHE/ONGELMA</i></div>
      </div>
    </div>
</section>
<form id="rooms" class="form__butsection" style="border-bottom: 0px solid #000;" action="vendor/updateproject.php" method="post">
    <input type='hidden' id='project_rooms_data' value='"ARAK-13": {[mp:{name:"Mittapiste";bottom:"500";left:"500";count:"1";}__{name:"Mittapiste";bottom:"500";left:"500";count:"1";}]__[aukot:{name:"Ovi ";type:"ovi";bottom:"5";left:"500";top:"2100";right:"1500";count:"1";from:"Jyri";to:"Jari";comment:"Tämä toimii?"}__{name:"Ikkuna";type:"ikkuna";bottom:"500";left:"1500";top:"1500";right:"2500";count:"1";from:"Jyri";to:"Jari";comment:"Tämä toimii?"}]__[lv:{name:"Läpivienti ";sade:"125";bottom:"5";left:"500";count:"1";from:"Jyri";to:"Jari";comment:"Tämä Läpivienti toimii?"}__{name:"Läpivienti ";sade:"125";bottom:"2000";left:"5000";count:"1";from:"Jyri";to:"Jari";comment:"Tämä Läpivienti toimii?"}]__[saumat:{name:"Sauma ";type:"pysty";bottom:"0";left:"500";cord:"500";count:"1";}__{name:"Sauma ";type:"vaaka";bottom:"500";left:"0";cord:"500";count:"1";}]__[levyt:{name:"ARAK-14_C_B2";type:"pysty";bottom:"0";left:"500";width:"";height:"";title:"2990|1065|1080|3005";no:"3";tyostot_x:"6.5|115|230|345|460|589.9";tyostot_y:"6.5|100|206.5"}]__[rangat:]__[listat:]},'>

    <input type="project_rooms_settings" id="project_rooms_settings" value='"ARAK-13": {[saumat:{suunta:"pysty";x_type:"oik";y_type:"ala";x_saumoitus:"yli";y_saumoitus:"aukkojenmukaan";leveys:"1250";pituus:"3000"}]__[levyt:]__[kiinnikkeet:{yr:"32.5";ar:"32.5";or:"32.5";vr:"36.5";k_vali_x:"600";k_vali_y:"600";type_x:"tas";type_y:"tas-pariton"}]__[rangat:]__[listat:]}' hidden>


    

    <?php 
      $walls_contents = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'walls_content'");
      $k_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'k_saved'");
      $a_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'a_saved'");
      $b_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'b_saved'");
      $c_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'c_saved'");
      $d_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'd_saved'");
      $l_s = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'l_saved'");

      $walls_cont = mysqli_fetch_all($walls_contents);
      $k_da = mysqli_fetch_all($k_s);
      $a_da = mysqli_fetch_all($a_s);
      $b_da = mysqli_fetch_all($b_s);
      $c_da = mysqli_fetch_all($c_s);
      $d_da = mysqli_fetch_all($d_s);
      $k_da = mysqli_fetch_all($l_s);
      
      $walls_content = $walls_cont[0][3];
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
    <input type="hidden" value="<?php echo $walls_content ?>" name="w_content" class="walls_content">
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
    <div class="row house__intro">
      <div class="col-6 col-with-table">
        <h1>
           <input type="text" placeholder="Tilan nimi tähän" value="Tila" name="wall_name" class="lineinput" id="roomname">
           <div class="row">
            <h3>(Seinän nimen taustaväri)</h3>
            <div class="c_meaning c_meaning_1"><i>EI TYÖTÄ</i></div>
            <div class="c_meaning c_meaning_2"><i>TEKEMÄTTÄ</i></div>
            <div class="c_meaning c_meaning_3"><i>MITTAUS ALOITETTU</i></div>
            <div class="c_meaning c_meaning_4"><i>SAUMAT MITATTU</i></div>
            <div class="c_meaning c_meaning_5"><i>RANGAT MITATTU</i></div>
            <div class="c_meaning c_meaning_6"><i>MITATTU</i></div>
            <div class="c_meaning c_meaning_7"><i>VALMIS</i></div>
            <div class="c_meaning c_meaning_8"><i>VIRHE/ONGELMA</i></div>
            <div class="c_meaning c_meaning_9"><i>KRIITTINEN VIRHE/ONGELMA</i></div>
          </div>
          <div class="zeroscreen_settings">
           <h2>1. Talon alkuasetukset <div class="f_btn o_btn" onclick="fp_open();">täältä</div></h2>

               <h2>2. Säädä alkuasetukset <div class="m_btn o_btn" >täältä</div></h2>

               <h2>3. Projektin yhteystiedot löydät <div class="t_btn o_btn" onclick="tp_open();">täältä</div></h2>
          </div>
        </h1>
        <div class="col-table">
           <h2>Seinien asennusjärjestys</h2>
           <table>
             <tr>
                <td><input type="number" data-room="asjarj-1" maxlength="1" name="wall_one_asjarj asjarj" data-tochange="a" onchange="rooms__change_asjarj(this); " value="1" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="a" name="wall_one_a" id="wall_one_a" value="SEINÄ A" data-tochange="a" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_a_desc" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" data-room="asjarj-2" maxlength="1" name="wall_two_asjarj asjarj" data-tochange="b" onchange="rooms__change_asjarj(this); "value="2" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="b" name="wall_one_b" id="wall_one_b" value="SEINÄ B" data-tochange="b"  class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_b_desc" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" data-room="asjarj-3" maxlength="1" name="wall_three_asjarj asjarj" data-tochange="c" onchange="rooms__change_asjarj(this); "value="3" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="c" name="wall_one_c" id="wall_one_c" value="SEINÄ C" data-tochange="c" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_c_desc" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" data-room="asjarj-4" maxlength="1" name="wall_four_asjarj asjarj" data-tochange="d" onchange="rooms__change_asjarj(this); "value="4" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="d" name="wall_one_d" id="wall_one_d" value="SEINÄ D"  data-tochange="d" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_d_desc" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" data-room="asjarj-5" maxlength="1" name="wall_five_asjarj asjarj" data-tochange="k" onchange="rooms__change_asjarj(this); "value="5" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="roof" name="wall_one_roof" id="wall_one_roof" value="KATTO" data-tochange="r" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_roof_desc" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
             <tr>
                <td><input type="number" data-room="asjarj-6" maxlength="1" name="wall_six_asjarj asjarj" data-tochange="l" onchange="rooms__change_asjarj(this); "value="6" class="lineinput inputname" required/></td>
                <td><input type="text" data-room="floor" name="wall_one_floor" id="wall_one_floor" value="LATTIA" data-tochange="l" class="lineinput inputname" required onchange="rooms__change_name(this);"></td>
                <td><input type="text" name="wall_one_floor_desc" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
             </tr>
           </table>
        </div>
      </div>
      <div class="col-6">
        
        <div id="types" class="house__types">
          <h2>Parveketyypit</h2>
          <div class="house__types_row row">
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
              
            ?>
          </div>
          <div class="house__types_button" onclick="initialize__housetempla(this,2);">
            Tallenna tämä asunto pohjaksi
          </div>
        </div>
        

        <div id="house" class="house">
            <div class="row">
                <div class="house__wall house__wall_roof house__wall_k" style="width: 340px; height: 240px;right: calc(240px);margin-left: auto;">
                <div class="house__wall_status house__wall_status_k" data-room="K" onclick="input_step = 'drawscreen_section_one';submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);refresh__drawcontrols();">KATTO</div>
                <input type="number" class="lineinput house__wall_param wall_height" value="3200"  name="wall_one_roof_h" id="wall_one_roof_h" onchange="change_roof();">
                <input type="number" class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_roof_w" id="wall_one_roof_w" onchange="change_roof();">

                <div class="house__wallspecial">
                  <div class="house__wall_asjarj asjarjk">5</div>
                  <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="k"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                </div>
                </div>
            </div>
           <div class="row">
              <div class="house__wall house__wall_one house__wall_a" style="width: 340px; height: 240px;">
                 <div class="house__wall_status house__wall_status_a" data-room="A" onclick='input_step = "drawscreen_section_one";refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);'>Seinä A</div>
                 <input type="number" class="lineinput house__wall_param wall_height" value="3200" name="wall_one_a_h" id="wall_one_a_h" onchange="change_a();">
                 <input type="number" class="lineinput house__wall_param wall_width" value="6000" name="wall_one_a_w" id="wall_one_a_w" onchange="change_a();">
                 <div class="house__wallspecial">
                   <div class="house__wall_asjarj asjarja">1</div>
                   <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="a"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                 </div>

              </div>
              <div class="house__wall house__wall_two house__wall_b" style="width: 240px; height: 240px;">
               <div class="house__wall_status house__wall_status_b" data-room="B" onclick='input_step = "drawscreen_section_one";refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);'>Seinä B</div>
               <input type="number" class="lineinput house__wall_param wall_height" value="3200" name="wall_one_b_h" id="wall_one_b_h" onchange="change_b();">
               <input type="number" class="lineinput house__wall_param wall_width_2" value="2200" name="wall_one_b_w" id="wall_one_b_w" onchange="change_b();">
               <div class="house__wallspecial">
                   <div class="house__wall_asjarj asjarjb">2</div>
                   <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="b"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                 </div>
              </div>
              <div class="house__wall house__wall_three house__wall_c" style="width: 340px; height: 240px;">
               <div class="house__wall_status house__wall_status_c" data-room="C" onclick='input_step = "drawscreen_section_one";refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);'>Seinä C</div>
               <input type="number" class="lineinput house__wall_param wall_height" value="3200"  name="wall_one_c_h" id="wall_one_c_h" onchange="change_c();">
               <input type="number" class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_c_w" id="wall_one_c_w" onchange="change_c();">
               <div class="house__wallspecial">
                   <div class="house__wall_asjarj asjarjc">3</div>
                   <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="c"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                 </div>
              </div>
              <div class="house__wall house__wall_four house__wall_d" style="width: 240px; height: 240px;">
               <div class="house__wall_status house__wall_status_d" data-room="D" onclick='input_step = "drawscreen_section_one";refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);'>Seinä D</div>
               <input type="number" class="lineinput house__wall_param wall_height" value="3200" name="wall_one_d_h" id="wall_one_d_h" onchange="change_d();">
               <input type="number" class="lineinput house__wall_param wall_width_2" value="2200" name="wall_one_d_w" id="wall_one_d_w" onchange="change_d();">
               <div class="house__wallspecial">
                   <div class="house__wall_asjarj asjarjd">4</div>
                   <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="d"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                 </div>
              </div>
           </div>
           <div class="row">
                 <div class="house__wall house__wall_floor house__wall_l" style="width: 340px; height: 240px;right: calc(240px);margin-left: auto;">
                  <div class="house__wall_status house__wall_status_l" data-room="L" onclick='input_step = "drawscreen_section_one";refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);'>LATTIA</div>
                  <input type="number" class="lineinput house__wall_param wall_height" value="3200"  name="wall_one_floor_h" id="wall_one_floor_h" onchange="change_floor();">
                  <input type="number" class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_floor_w" id="wall_one_floor_w" onchange="change_floor();">
                  <div class="house__wallspecial">
                   <div class="house__wall_asjarj asjarjl">6</div>
                   <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="l"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                 </div>
                </div>
           </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6"><div class="prev_btn"  onclick='$("#step_drawscreen").val("project_start");refresh__drawcontrols();degradate_url(1);'>Edellinen</div></div>

      </div>
  </div>
  <div class="modal-container">
    <div class="modal-background">
      <div class="modal">
        <div class="modal_close_btn">
          <b><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></b></div>

          <section style="margin-top: 50px;">
            <h2>Ladonta</h2>
            <h4>Levytyssuunta</h4>
            <fieldset>
              <input type="radio" id="ladonta_one" name="zero__ladonta" value="Levytys vaakaan">
              <label for="ladonta_one">Levytys vaakaan</label>
              <input type="radio" id="ladonta_two" name="zero__ladonta" value="Levytys pystyyn">
              <label for="ladonta_two">Levytys pystyyn</label>
            </fieldset>
          </section>
          <section>
            <div class="row">
              <div class="col-6">
                <h4>Saumoitus</h4>
                <fieldset style="flex-direction: column;display: flex;">
                  <input type="radio" id="saumoitus_one" name="zero__saumoitus" value="Levytys aukkojen yli">
                  <label for="saumoitus_one">Levytys aukkojen yli</label>
                  <input type="radio" id="saumoitus_two" name="zero__saumoitus" value="Pystysaumat aukkojen mukaan">
                  <label for="saumoitus_two">Pystysaumat aukkojen mukaan </label>
                  <input type="radio" id="saumoitus_three" name="zero__saumoitus" value="Vaakasaumat aukkojen mukaan">
                  <label for="saumoitus_three">Vaakasaumat aukkojen mukaan</label>
                </fieldset>
              </div>
              <div class="col-6">
                <h4>Rakennekuva</h4>
                <img src="/img/rakennekuva.jpg" style="width: 100%;">
              </div>
            </div>
          </section>
          <section>
            <h4>Ladonnan järjestelmä</h4>
            <fieldset>
              <input type="radio" id="ladonta_sys_one" value="Levytys vaakaan">
              <label for="ladonta_sys_one">Levytys vaakaan</label>
              <input type="radio" id="ladonta_sys_two" value="Levytys pystyyn">
              <label for="ladonta_sys_two">Levytys pystyyn</label>
            </fieldset>
          </section>
          <section>
            <h4>Materiaalit</h4>
             <fieldset class="c-form-row">
                 <input type="radio" id="new_material_color_one" name="new_material_color" value="Musta">
                 <label for="new_material_color_one">Malibu</label>
                 <input type="radio" id="new_material_color_two" name="new_material_color" value="Valkoinen">
                 <label for="new_material_color_two">Formica Vivix</label>
          </fieldset>
          </section>
          <section>
            <fieldset class="row">
              <div class="col-6">
                <label >Paksuus</label>
                <input type="text" name="" id="">
              </div>
              <div class="col-6">
                <label >Leveys</label>
                <input type="text" name="" id="">
              </div>
            </fieldset>
          </section>
          <section>
            <h4>Rangan suunta</h4>
              <fieldset>
                <input type="radio" id="zero__rankasuunta_pysty">
                <label for="zero__rankasuunta_pysty">Pysty</label>
                <input type="radio" id="zero__rankasuunta_vaaka">
                <label for="zero__rankasuunta_vaaka">Vaaka</label>
              </fieldset>
          </section>
          <section>
            <h4>Kiinnikkeiden linjojen alkupaikka</h4>
            <fieldset>
              <div class=""><input type="radio" id="zero__kiinnikelinja_upper">
              <label for="zero__kiinnikelinja_upper">Yläosa</label></div>
              <div class=""><input type="radio" id="zero__kiinnikelinja_right">
              <label for="zero__kiinnikelinja_right">Oikea</label></div>
              <div class=""><input type="radio" id="zero__kiinnikelinja_lower">
              <label for="zero__kiinnikelinja_lower">Alas</label></div>
             <div class=""> <input type="radio" id="zero__kiinnikelinja_left">
              <label for="zero__kiinnikelinja_left">Vasen</label></div>
            </fieldset>
          </section>
          <section>
            <h4>Kiinnikelinjan etäisyydet (mm)</h4>
              <fieldset style="margin-top: 10px;">
                <label for="zero__kiinnikelinjadist_upper">Yläosa</label>
                <input type="text" name="" id="zero__kiinnikelinjadist_upper">
                
                <label for="zero__kiinnikelinjadist_right">Oikea</label>
                <input type="text" name="" id="zero__kiinnikelinjadist_right">
                
                <label for="zero__kiinnikelinjadist_lower">Alas</label>
                <input type="text" name="" id="zero__kiinnikelinjadist_lower">
                
                <label for="zero__kiinnikelinjadist_left">Vasen</label>
                <input type="text" name="" id="zero__kiinnikelinjadist_left">
                
            </fieldset>
          </section>
          <section>
            <h4>Levytys</h4>
            <p>Levytyksen katkeaminen</p>
            <fieldset>
                <input type="radio" id="zero__levytyskatkeaminen_pysty" name="">
                <label for="zero__levytyskatkeaminen_pysty">Pystysaumat</label>
                <input type="radio" id="zero__levytyskatkeaminen_vaaka" name="">
                <label for="zero__levytyskatkeaminen_vaaka">Vaakasaumat</label>
                <input type="radio" id="zero__levytyskatkeaminen_aukot" name="">
                <label for="zero__levytyskatkeaminen_aukot">Aukkojen reunojen mukaan</label>
            </fieldset>
            <fieldset>
              <div class="row"><label for="plevytys__pituus_y">Pystylevytys pituus y-akselilla</label><input type="text" name="" id="plevytys__pituus_y"></div>
              <div class="row"><label for="plevytys__pituus_x">Pystylevytys pituus x-akselilla</label><input type="text" name="" id="plevytys__pituus_x"></div>
            </fieldset>
          </section>
          <!-- <section>
            <h4>Levytys suunta</h4>
            <fieldset>
                <input type="radio" id="zero__levytyssuunta_" name="">
                <label for="zero__levytyssuunta_">Pysty</label>
                <input type="radio" id="" name="">
                <label for="">Vaaka</label>
            </fieldset>
          </section> -->
          <section>
            <div class="row">
              <div class="col-6">
                <h4>Levykoko</h4>
                <div class="row"><input type="text" name="" id="levykoko_pituus"><label for="levykoko_pituus">Pituus</label></div>
                <div class="row"><input type="text" name="" id="levykoko_leveys"><label for="levykoko_leveys">Leveys</label></div>
                <h6>Käytä standard-järjestelmää:</h6>
                <div style="background: black">
                  STANDARD 3600x300-levyt, jne
                </div>
              </div>
              <div class="col-6">
                <h4>Rakennekuva</h4>
                <img src="/img/rakennekuva-levy.jpg" alt="">
              </div>
            </div>
          </section>
          <section>
            <h4>Levytyksen suunta</h4>
            <fieldset>
                <input type="radio" id="zero__levytyssuunta_upper" >
                <label for="zero__levytyssuunta_upper">Alkaa ylhäältä</label>
                <input type="radio" id="zero__levytyssuunta_right">
                <label for="zero__levytyssuunta_right">Alkaa oikealta</label>
                <input type="radio" id="zero__levytyssuunta_lower">
                <label for="zero__levytyssuunta_lower">Alkaa alhaalta</label>
                <input type="radio" id="zero__levytyssuunta_left">
                <label for="zero__levytyssuunta_left">Alkaa vasemmalta</label>
            </fieldset>
          </section>
          <section>
            <h4>Läpiviennit</h4>
            <fieldset>
                TULEE MARKO ASETUKSISTA
            </fieldset>
          </section>
          <section>
            <div class="row">
              <div class="col-6"><h4>Levyt</h4>
                <h6>Standard?</h6>
                <fieldset>
                  <input type="radio" id="st_joo" name="">
                  <label for="st_joo">Kyllä</label>
                  <input type="radio" id="st_ei" name="">
                  <label for="st_ei">Ei</label>
                </fieldset>
              </div>
              <div class="col-6"><h4>Järjestelmä</h4>
                <h6>Standard?</h6>
                <fieldset>
                  <input type="radio" id="st" name="">
                  <label for="st">Kyllä</label>
                  <input type="radio" id="ts" name="">
                  <label for="ts">Ei</label>
                </fieldset>
              </div>
            </div>
          </section>
          <section>
            <h4>Järjestelmä</h4>
            <fieldset>
              TULEE MARKO ASETUKSISTA
            </fieldset>
          </section>

          <section>
            <h4>Aukko-asetukset</h4>
            MARKO ASETUKSET
          </section>
          <section>
            <h4>Reikä asetukset</h4>
            MARKO ASETUKSET
          </section>
          <section>
            <h4>Levy perusasetukset</h4>
            LEVY ASETUKSET
          </section>
          <section>
            <h4>Rankatyypit</h4>
            RANGAT?
          </section>
          <section>
            <h4>Tyypin pituudet</h4>
          </section>
          <section>
            <h4>Pystyasennus</h4>
          </section>
          <section>
            <h4>Listat</h4>
          </section>
          <section>
            <h4>Rankojen sijoittelu</h4>
          </section>
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
          <h4>Talon alkuasetukset:</h4>
          <div class="table_overflow">
            <table>
                <?php
                $id = $post['id'];

                echo "<span id='project__building_id'>" . $id . "</span>";
                $bosts = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id");
                $bosts = mysqli_fetch_all($bosts);

                foreach ($bosts as $p) {
                    echo '<tr>'. '<td>' . $p[1] . '</td>' . '<td>' . $p[2] . '</td>' . '<td>' . $p[3] . '</td>' .'</tr>';
                  }
                ?>

                  

              
            </table>
          </div>
            
          <div class="modal_close_btn drawarea__controls_btn btn ready_btn" onclick="document.querySelector('.first_popup').classList.add('out');document.querySelector('.first_popup').classList.remove('two');" style="padding-bottom: 30px; text-align: center; width: 100%;">Valmis</div>
        
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
<script>
    function showcross(e) {
        // e.classList.add("tomeasure");
        // document.querySelector("#rooms").style.display= "block";
        // document.querySelector("#project_start").style.display= "none";


    }
</script>
<script>
  function fp_open() {
    document.querySelector('.first_popup').classList.add("two");
    document.querySelector('.first_popup').classList.remove("out");
    
  }
  function tp_open() {
    document.querySelector('.third_popup').classList.add("two");
    document.querySelector('.third_popup').classList.remove("out");
    
  }
</script>