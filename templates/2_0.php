<!-- MAIN STARTING section FOR THE EDITOR -->
<section class="popup__statuses">
  <div class="row">
    <div class="col-6">
      <h3 style="text-align: right;">5. Paina tästä -></h3>
    </div>
    <div class="col-6">
      <div class="p_meaning_end btn">TALLENNA JA SULJE</div>
    </div>
  </div>


</section>
<?php
  $statuses_text = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'statuses__text'");
  $s_text = mysqli_fetch_all($statuses_text);
  $statuses_text = $s_text[0][3];
  $remove_overflowY = false;

  $st_slplit = explode("~~" ,$statuses_text);
?>
<section id="project_start" class="project__roomcount" >
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="project_start_heading">Kohde <?= $post["title"]; ?></h1>
        <button class="show_project_files_btn">Tiedostopankki</button>
      </div>
      <div class="col-6">
        <table>
          <tr>
            <td>Yhteensä työtunteja:</td>
            <td id="hours__estimate"></td>
          </tr>
          <tr>

          </tr>
        </table>
        <div class="project__start_elaborate" onclick="open__workelab();">Kuittaa &amp; Kommentoi</div>
        <div class="open_modal yellowbtn get_project_modal col-6" onclick="settings__modal_open(this);toggle__projectexcel(0,document.querySelector(`.projektilista_btn:nth-child(1)`));" data-asmodal_mode="projektiexcel">Avaa tilaustaulu</div>
          <button class="toggle_customer_modal">Lähetä sähköpostia asukkaille</button>

      </div>
    </div>
  </div>

  <div class="container elab__statuses">
    <div class="row t_users">
      <h3>1. Kuittaamassa:</h3>
      <ul>
        <?php
          $prid = $_GET["id"];
          $users = mysqli_query($db, "SELECT * FROM `addedusers` WHERE `project_id`='$prid';");

          $users = mysqli_fetch_all($users);
          $usr_array = array();
          foreach ($users as $p) {
            $hours = mysqli_query($db, "SELECT `h_remaining` FROM `comments` WHERE `comment_to`='$p[1]'");
            $hours = mysqli_fetch_all($hours);

            $usr_summarum = 0;
            foreach ($hours as $h) {
              $usr_summarum+=$h[0];
            }
            $usr_array+= array($p[1] => $usr_summarum);
            // array_push($usr_array, $p[1]=>$usr_summarum);
          }
          // print_r($usr_array);
          arsort($usr_array);

          foreach($usr_array as $x => $x_value) {
            // echo "Key=" . $x . ", Value=" . $x_value;
            // echo "<br>";
            if(strtolower($x) == "sahko") {
              $photo = '<img src="/img/comroles/light.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "sahkos") {
              $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "rakennustyo") {
              $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "rakennustyo3") {
              $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "rakennustyo2") {
              $photo = '<img src="/img/comroles/work.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "ilmastointi") {
              $photo = '<img src="/img/comroles/ventilation.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "putki_ivs") {
              $photo = '<img src="/img/comroles/ventilation.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "vesi") {
              $photo = '<img src="/img/comroles/water.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "vesis") {
              $photo = '<img src="/img/comroles/water.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "siivous") {
              $photo = '<img src="/img/comroles/siivous.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "purku") {
              $photo = '<img src="/img/comroles/purku.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "westface") {
              $photo = '<img src="/img/comroles/wf.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "myynti") {
              $photo = '<img src="/img/comroles/myynti.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "lukkomies") {
              $photo = '<img src="/img/comroles/lock.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "suunnittelu") {
              $photo = '<img src="/img/comroles/suunnittelu.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "arak") {
              $photo = '<img src="/img/comroles/cup.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "rak") {
              $photo = '<img src="/img/comroles/cup.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else if(strtolower($x) == "pu") {
              $photo = '<img src="/img/comroles/cup.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            else {
              $photo = '<img src="/img/comroles/others.png" style="width:24px; height: 21px;margin-top: -8px;">';
            }
            if($x != "tyonjohto123") {
              echo '<li onclick="toggle__pusers(this);enable__elabelems();" class="p_li">'. $photo.$x.'</li>';
            }
          }

        ?>
      </ul>
    </div>
    <div class="t_elabday elab__status_hidden">
      <h3>2. Minä päivänä tehty?</h3>
      <div class="row">
        <?php
          echo '<b class="status__report_b"><input name="deadline_time" class="status__report_from" type="date" value="'.date("Y-m-d").'"></b>';
        ?>
      </div>
    </div>
    <div class="t_elabstatus elab__status_hidden">
      <h3>3. Paina pitkään haluttua statusta:</h3>
      <div class="row">
        <div class="col-2 popup__statuses_a">
          <div class="c_meaning p_meaning c_meaning_2" data-action="undone"><i data-action="undone" class="p_meaning"><?= $st_slplit[0]; ?> </i></div>
          <div class="c_meaning p_meaning c_meaning_1" data-action="nowork"><i data-action="nowork" class="p_meaning"><?= $st_slplit[1]; ?></i></div>
          <div class="c_meaning p_meaning c_meaning_8 problemo" data-action="problemo"><i data-action="problemo" class="p_meaning problemo"><?= $st_slplit[2]; ?></i></div>
          <div class="c_meaning p_meaning c_meaning_9 grande_problemo" data-action="grande_problemo"><i data-action="grande_problemo" class="p_meaning grande_problemo"><?= $st_slplit[3]; ?></i></div>

        </div>
        <div class="col-2 popup__statuses_f">
          <div class="c_meaning p_meaning" data-action="l5_a"><i data-action="l5_a" class="p_meaning"><?= $st_slplit[4]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l5_b"><i data-action="l5_b" class="p_meaning"><?= $st_slplit[5]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l5_c"><i data-action="l5_c" class="p_meaning"><?= $st_slplit[6]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l5_d"><i data-action="l5_d" class="p_meaning"><?= $st_slplit[7]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l5_e"><i data-action="l5_e" class="p_meaning"><?= $st_slplit[8]; ?></i></div>
        </div>
        <div class="col-2 popup__statuses_b">
          <div class="c_meaning p_meaning" data-action="l4_a"><i data-action="l4_a" class="p_meaning"><?= $st_slplit[9]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l4_b"><i data-action="l4_b" class="p_meaning"><?= $st_slplit[10]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l4_c"><i data-action="l4_c" class="p_meaning"><?= $st_slplit[11]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l4_d"><i data-action="l4_d" class="p_meaning"><?= $st_slplit[12]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l4_e"><i data-action="l4_e" class="p_meaning"><?= $st_slplit[13]; ?></i></div>
        </div>
        <div class="col-2 popup__statuses_c">
          <div class="c_meaning p_meaning" data-action="l3_a"><i data-action="l3_a" class="p_meaning"><?= $st_slplit[14]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l3_b"><i data-action="l3_b" class="p_meaning"><?= $st_slplit[15]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l3_c"><i data-action="l3_c" class="p_meaning"><?= $st_slplit[16]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l3_d"><i data-action="l3_d" class="p_meaning"><?= $st_slplit[17]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l3_e"><i data-action="l3_e" class="p_meaning"><?= $st_slplit[18]; ?></i></div>
        </div>
        <div class="col-2 popup__statuses_d">
          <div class="c_meaning p_meaning" data-action="l2_a"><i data-action="l2_a" class="p_meaning"><?= $st_slplit[19]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l2_b"><i data-action="l2_b" class="p_meaning"><?= $st_slplit[20]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l2_c"><i data-action="l2_c" class="p_meaning"><?= $st_slplit[21]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l2_d"><i data-action="l2_d" class="p_meaning"><?= $st_slplit[22]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l2_e"><i data-action="l2_e" class="p_meaning"><?= $st_slplit[23]; ?></i></div>
        </div>
        <div class="col-2 popup__statuses_e">
          <div class="c_meaning p_meaning" data-action="l1_a"><i data-action="l1_a" class="p_meaning"><?= $st_slplit[24]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l1_b"><i data-action="l1_b" class="p_meaning"><?= $st_slplit[25]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l1_c"><i data-action="l1_c" class="p_meaning"><?= $st_slplit[26]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l1_d"><i data-action="l1_d" class="p_meaning"><?= $st_slplit[27]; ?></i></div>
          <div class="c_meaning p_meaning" data-action="l1_e"><i data-action="l1_e" class="p_meaning"><?= $st_slplit[28]; ?></i></div>
        </div>
      </div>
    </div>

    <div class="status__elab_problem elab__status_hidden ">
      <?php

      $available_users = '';

      if(strtolower($_GET["user"]) == "tyonjohto") {

        $role = $_GET['user'];
        $_id = $_GET['id'];

        $_userslist = mysqli_query($db, "SELECT `username` FROM `addedusers` WHERE `project_id`=$id");
        $userslist = mysqli_fetch_all($_userslist);


        $ul="";

        foreach ($userslist as $usern) {
          $ul.='<option value="'.ucfirst($usern[0]).'">'.ucfirst($usern[0]).'</option>';
        }

        $ddate = date("Y-m-d");
        $date = new DateTime($ddate);
        $week = $date->format("W");
        $weekcount = $week;
        $cur_week = $week;


        echo '
          <div class="row">
            <h2 style="width: 100%;">Jätä työ</h2>
            <hr style="margin-top: 50px;">
            <section class="commentbox commentbox__new commentbox__newfirst">
              <div class="row">
                <div class="col-6">
                  <h2><input type="text" value="" class="lineinput kommentti__name" placeholder="Mikä murehduttaa?" onchange="window.scrollTo(0, 150);"></h2>

                </div>
                <div class="col-3">
                  <h6>Deadline:</h6>
                  <input name="deadline_time" class="comment__deadline newcomment__deadline" type="date" min="' .  date("Y-m-d") . '" value="'.date("Y-m-t", strtotime(date("Y-m-d"))).'" onchange="this.parentElement.parentElement.parentElement.querySelector(`.newcomment__vko`).value= new Date(this.value).getWeek();">
                </div>
                <div class="col-3">
                    <h6>Arvio työtunneista</h6>
                    <input name="time_estimate" class="time_estimate newcomment__estimatehours" type="number" pattern="\d*"/ value="0" style="max-width: 70px;" min="0">h
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                      <h6>Lisää tiedostot:</h6>
                      <input type="file" class="comment__files newcomment__files newcomment__files_input" name="comment__files[]" multiple>
                      <div class="comment__preview_files newcomment__previewfiles"></div>
                  </div>
                  <h6>Keneltä</h6>
                  <input name="kommentti_comment_from" class="kommentti_comment_from" type="text" value="' . $role . '">


                </div>
                <div class="col-6">
                    <h6>Tehdään viikolla</h6>
                    <input name="vko_estimate" class="vko_estimate newcomment__vko" type="number" pattern="\d*"/ value="'.$cur_week.'" min="1" max="52" style="max-width: 70px;">
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
                  <input id="is_thecomment_critical2" class="is_thecomment_critical" type="checkbox" value="Critical">
                  <label for="is_thecomment_critical2">Onko kriittinen?</label>
                </div>
              </div>
            </section>
          </div>';
        }
      ?>


    </div>
    <h3 class="status__elab_noproblem elab__status_hidden">4. Valitse kohde/kohteet:</h3>


  </div>
  <div class="container rappus">
    <div class="per50 floatleft coderdy rappu-1" id="A" style="opacity: 1;">
        <div class="tablepreview">

            <?php
              $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'a_rooms_title'");
              $rooms_t = mysqli_fetch_all($roomtitle);
              $roomtitle = $rooms_t[0][3];
            $entrance = "a";
            $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
            if ($np_sql_result && $np_sql_result->num_rows) {
                $np = json_decode($np_sql_result->fetch_row()[0], true);
            }
            else {
                $np = [];
            }
            ?>
            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $a_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php

                  $a_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'a_rooms_nowork'");
                  $a_da_nowork = mysqli_fetch_all($a_data_nowork);
                  $a_data_nowork = $a_da_nowork[0][3];

                  $a_da_nowork_ = explode("},{", $a_data_nowork);

                  foreach ($a_da_nowork_ as $a_key_nowork) {

                    $da_child = explode(",", $a_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      if($key1 == "K") {
                        echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                        $remove_overflowY = true;
                      }
                      else if($key1 == "AK") {
                        echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                        $remove_overflowY = true;
                      }
                      else {
                        $tila__bottomcord = intval($key1) -1;
                        echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      }

                  }

                  $a_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'a_rooms'");
                  $a_da = mysqli_fetch_all($a_data);
                  $a_data = $a_da[0][3];

                  $a_da_ = explode("},{", $a_data);



                  if (strlen($a_data) < 3) {
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

                    $classname = str_replace('</b>','',str_replace('<b>','',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                    if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                      $additionalclass = explode("~",$aroom)[1];
                    }
                    if($key1 == "K") {
                       $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else if($key1 == "AK") {
                       $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else {
                      $tila__bottomcord = intval($key1) -1;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                      $floornum = 50 - intval($tila__bottomcord);

                      echo '<script>if(document.querySelector("#A ul > li:nth-child('.$floornum.')")) {document.querySelector("#A ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                      echo '<script>if(document.querySelector("#A ul > li:nth-child('.$floornum.')")) {document.querySelector("#A ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                    }

                  }



            ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
          for ($i=1; $i <= 50; $i++) {
              echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
          }
          ?>
        </article>
    </div>
    <div class="per50 floatleft coderdy rappu-2" id="B" style="opacity: 1;">
        <?php
          $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'b_rooms_title'");
          $rooms_t = mysqli_fetch_all($roomtitle);
          $roomtitle = $rooms_t[0][3];
        $entrance = "b";
        $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
        if ($np_sql_result && $np_sql_result->num_rows) {
            $np = json_decode($np_sql_result->fetch_row()[0], true);
        }
        else {
            $np = [];
        }
        ?>
        <div class="tablepreview">
            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $b_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php
                  $b_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'b_rooms_nowork'");
                  $b_da_nowork = mysqli_fetch_all($b_data_nowork);
                  $b_data_nowork = $b_da_nowork[0][3];

                  $b_da_nowork_ = explode("},{", $b_data_nowork);
                  foreach ($b_da_nowork_ as $b_key_nowork) {



                    $da_child = explode(",", $b_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                    if($key1 == "K") {
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      $remove_overflowY = true;
                    }
                    else if($key1 == "AK") {
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      $remove_overflowY = true;
                    }
                    else {
                      $tila__bottomcord = intval($key1) -1;
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                    }


                  }

                  $b_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'b_rooms'");
                  $b_da = mysqli_fetch_all($b_data);
                  $b_data = $b_da[0][3];

                  $b_da_ = explode("},{", $b_data);



                  if (strlen($b_data) < 3) {
                      echo "<style>#B {display:none}</style>";
                  }

                  foreach ($b_da_ as $b_key) {
                    $da_child = explode(',', $b_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $tila__bottomcord = intval($key1) -1;
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                    $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                    $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                    $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                    $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                    $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                    $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));

                    $classname = str_replace('</b>','',str_replace('<b>','',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                    if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                      $additionalclass = explode("~",$aroom)[1];
                    }

                    if($key1 == "K") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else if($key1 == "AK") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else {
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                      $floornum = 50 - intval($tila__bottomcord);

                      echo '<script>if(document.querySelector("#B ul > li:nth-child('.$floornum.')")) {document.querySelector("#B ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                      echo '<script>if(document.querySelector("#B ul > li:nth-child('.$floornum.')")) {document.querySelector("#B ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                    }
                  }
            ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
        for ($i=1; $i <= 50; $i++) {
            echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
        }
        ?>
        </article>
    </div>
    <div class="per50 floatleft coderdy rappu-3" id="C" style="opacity: 1;">
        <?php
          $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'c_rooms_title'");
          $rooms_t = mysqli_fetch_all($roomtitle);
          $roomtitle = $rooms_t[0][3];
        $entrance = "c";
        $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
        if ($np_sql_result && $np_sql_result->num_rows) {
            $np = json_decode($np_sql_result->fetch_row()[0], true);
        }
        else {
            $np = [];
        }
        ?>
        <div class="tablepreview">


            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $c_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php
                  $c_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'c_rooms_nowork'");
                  $c_da_nowork = mysqli_fetch_all($c_data_nowork);
                  $c_data_nowork = $c_da_nowork[0][3];

                  $c_da_nowork_ = explode("},{", $c_data_nowork);
                  foreach ($c_da_nowork_ as $c_key_nowork) {

                    $da_child = explode(",", $c_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));

                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                    if($key1 == "K") {
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      $remove_overflowY = true;
                    }
                    else if($key1 == "AK") {
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      $remove_overflowY = true;
                    }
                    else {
                      $tila__bottomcord = intval($key1) -1;
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                    }

                  }

                  $c_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'c_rooms'");
                  $c_da = mysqli_fetch_all($c_data);
                  $c_data = $c_da[0][3];

                  $c_da_ = explode("},{", $c_data);



                  if (strlen($c_data) < 3) {
                      echo "<style>#C {display:none}</style>";

                  }
                  foreach ($c_da_ as $c_key) {
                    $da_child = explode(',', $c_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $tila__bottomcord = intval($key1) -1;
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                    $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                    $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                    $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                    $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                    $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                    $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));

                    $classname = str_replace('</b>','',str_replace('<b>','',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                    if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                      $additionalclass = explode("~",$aroom)[1];
                    }

                    if($key1 == "K") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else if($key1 == "AK") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else {
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                      $floornum = 50 - intval($tila__bottomcord);

                      echo '<script>if(document.querySelector("#C ul > li:nth-child('.$floornum.')")) {document.querySelector("#C ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                      echo '<script>if(document.querySelector("#C ul > li:nth-child('.$floornum.')")) {document.querySelector("#C ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                    }
                  }


            ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
        for ($i=1; $i <= 50; $i++) {
            echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
        }
        ?>
        </article>
    </div>
    <div class="per50 floatleft coderdy rappu-4" id="D" style="opacity: 1;">
       <?php
          $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'd_rooms_title'");
          $rooms_t = mysqli_fetch_all($roomtitle);
          $roomtitle = $rooms_t[0][3];
       $entrance = "d";
       $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
       if ($np_sql_result && $np_sql_result->num_rows) {
           $np = json_decode($np_sql_result->fetch_row()[0], true);
       }
       else {
           $np = [];
       }
        ?>
        <div class="tablepreview">


            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $d_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php
                $d_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'd_rooms_nowork'");
                $d_da_nowork = mysqli_fetch_all($d_data_nowork);
                $d_data_nowork = $d_da_nowork[0][3];

                $d_da_nowork_ = explode("},{", $d_data_nowork);
                foreach ($d_da_nowork_ as $d_key_nowork) {
                  $da_child = explode(",", $d_key_nowork);
                  $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                  $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));

                  $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                  if($key1 == "K") {
                    echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                    $remove_overflowY = true;
                  }
                  else if($key1 == "AK") {
                    echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                    $remove_overflowY = true;
                  }
                  else {
                    $tila__bottomcord = intval($key1) -1;
                    echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                  }
                }

                $d_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'd_rooms'");
                $d_da = mysqli_fetch_all($d_data);
                $d_data = $d_da[0][3];

                $d_da_ = explode("},{", $d_data);



                if (strlen($d_data) < 3) {
                    echo "<style>#D {display:none}</style>";
                }

                foreach ($d_da_ as $d_key) {
                  $da_child = explode(',', $d_key);
                  $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                  $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                  $tila__bottomcord = intval($key1) -1;
                  $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                  $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                  $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                  $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                  $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                  $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                  $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));

                  $classname = str_replace('</b>','',str_replace('<b>','',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                  if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                    $additionalclass = explode("~",$aroom)[1];
                  }
                  if($key1 == "K") {
                    $remove_overflowY = true;
                    echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                  }
                  else if($key1 == "AK") {
                    $remove_overflowY = true;
                    echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                  }
                  else {
                    echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    $floornum = 50 - intval($tila__bottomcord);
                    echo '<script>if(document.querySelector("#D ul > li:nth-child('.$floornum.')")) {document.querySelector("#D ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                    echo '<script>if(document.querySelector("#D ul > li:nth-child('.$floornum.')")) {document.querySelector("#D ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                  }
                }

            ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
        for ($i=1; $i <= 50; $i++) {
            echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
        }
        ?>
        </article>
    </div>
    <div class="per50 floatleft coderdy rappu-5" id="E" style="opacity: 1;">
        <?php
          $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'e_rooms_title'");
          $rooms_t = mysqli_fetch_all($roomtitle);
          $roomtitle = $rooms_t[0][3];
        $entrance = "e";
        $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
        if ($np_sql_result && $np_sql_result->num_rows) {
            $np = json_decode($np_sql_result->fetch_row()[0], true);
        }
        else {
            $np = [];
        }
        ?>
        <div class="tablepreview">
            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $e_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php
                  $e_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'e_rooms_nowork'");
                  $e_da_nowork = mysqli_fetch_all($e_data_nowork);
                  $e_data_nowork = $e_da_nowork[0][3];

                  $e_da_nowork_ = explode("},{", $e_data_nowork);
                  foreach ($e_da_nowork_ as $e_key_nowork) {
                    $da_child = explode(",", $e_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));

                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                    if($key1 == "K") {
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      $remove_overflowY = true;
                    }
                    else if($key1 == "AK") {
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      $remove_overflowY = true;
                    }
                    else {
                      $tila__bottomcord = intval($key1) -1;
                      echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                    }

                  }

                  $e_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'e_rooms'");
                  $e_da = mysqli_fetch_all($e_data);
                  $e_data = $e_da[0][3];

                  $e_da_ = explode("},{", $e_data);



                  if (strlen($e_data) < 3) {
                      echo "<style>#E {display:none}</style>";
                  }

                  foreach ($e_da_ as $e_key) {
                    $da_child = explode(',', $e_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $tila__bottomcord = intval($key1) -1;
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                    $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                    $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                    $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                    $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                    $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                    $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));

                    $classname = str_replace('</b>','',str_replace('<b>','',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                    if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                      $additionalclass = explode("~",$aroom)[1];
                    }

                    if($key1 == "K") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else if($key1 == "AK") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else {
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                      $floornum = 50 - intval($tila__bottomcord);

                      echo '<script>if(document.querySelector("#E ul > li:nth-child('.$floornum.')")) {document.querySelector("#E ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                      echo '<script>if(document.querySelector("#E ul > li:nth-child('.$floornum.')")) {document.querySelector("#E ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                    }
                  }
            ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
        for ($i=1; $i <= 50; $i++) {
            echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
        }
        ?>
        </article>
    </div>
    <div class="per50 floatleft coderdy rappu-6" id="F" style="opacity: 1;">
        <?php
          $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'f_rooms_title'");
          $rooms_t = mysqli_fetch_all($roomtitle);
          $roomtitle = $rooms_t[0][3];
        $entrance = "f";
        $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
        if ($np_sql_result && $np_sql_result->num_rows) {
            $np = json_decode($np_sql_result->fetch_row()[0], true);
        }
        else {
            $np = [];
        }
        ?>
        <div class="tablepreview">
            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $f_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php

              $f_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'f_rooms_nowork'");
              $f_da_nowork = mysqli_fetch_all($f_data_nowork);
              $f_data_nowork = $f_da_nowork[0][3];

              $f_da_nowork_ = explode("},{", $f_data_nowork);
              foreach ($f_da_nowork_ as $f_key_nowork) {

                $da_child = explode(",", $f_key_nowork);
                $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));

                $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                if($key1 == "K") {
                  echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                  $remove_overflowY = true;
                }
                else if($key1 == "AK") {
                  echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                  $remove_overflowY = true;
                }
                else {
                  $tila__bottomcord = intval($key1) -1;
                  echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                }

              }

              $f_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'f_rooms'");
              $f_da = mysqli_fetch_all($f_data);
              $f_data = $f_da[0][3];

              $f_da_ = explode("},{", $f_data);



              if (strlen($f_data) < 3) {
                  echo "<style>#F {display:none}</style>";
              }

              foreach ($f_da_ as $f_key) {
                $da_child = explode(',', $f_key);
                $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                $tila__bottomcord = intval($key1) -1;
                $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));

                $classname = str_replace('</b>', '', str_replace('<b> ', '',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                  $additionalclass = explode("~",$aroom)[1];
                }

                if($key1 == "K") {
                  $remove_overflowY = true;
                  echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                }
                else if($key1 == "AK") {
                  $remove_overflowY = true;
                  echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) . "' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                }
                else {
                  echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                  $floornum = 50 - intval($tila__bottomcord);

                  echo '<script>if(document.querySelector("#F ul > li:nth-child('.$floornum.')")) {document.querySelector("#F ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                  echo '<script>if(document.querySelector("#F ul > li:nth-child('.$floornum.')")) {document.querySelector("#F ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                }
              }

              ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
        for ($i=1; $i <= 50; $i++) {
            echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
        }
        ?>

        </article>
    </div>
    <div class="per50 floatleft coderdy rappu-7" id="G" style="opacity: 1;">
        <?php
          $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'g_rooms_title'");
          $rooms_t = mysqli_fetch_all($roomtitle);
          $roomtitle = $rooms_t[0][3];
        $entrance = "g";
        $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
        if ($np_sql_result && $np_sql_result->num_rows) {
            $np = json_decode($np_sql_result->fetch_row()[0], true);
        }
        else {
            $np = [];
        }
        ?>
        <div class="tablepreview">
            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $g_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php
                  $g_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'g_rooms_nowork'");
                  $g_da_nowork = mysqli_fetch_all($g_data_nowork);
                  $g_data_nowork = $g_da_nowork[0][3];

                  $g_da_nowork_ = explode("},{", $g_data_nowork);
                  foreach ($g_da_nowork_ as $g_key_nowork) {

                    $da_child = explode(",", $g_key_nowork);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));

                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                      if($key1 == "K") {
                        echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                        $remove_overflowY = true;
                      }
                      else if($key1 == "AK") {
                        echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                        $remove_overflowY = true;
                      }
                      else {
                        $tila__bottomcord = intval($key1) -1;
                        echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                      }
                  }

                  $g_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'g_rooms'");
                  $g_da = mysqli_fetch_all($g_data);
                  $g_data = $g_da[0][3];

                  $g_da_ = explode("},{", $g_data);



                  if (strlen($g_data) < 3) {
                      echo "<style>#G {display:none}</style>";
                  }

                  foreach ($g_da_ as $g_key) {
                    $da_child = explode(',', $g_key);
                    $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                    $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                    $tila__bottomcord = intval($key1) -1;
                    $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                    $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                    $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                    $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                    $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                    $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                    $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));

                    $classname = str_replace('</b>', '', str_replace('<b> ', '',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                    if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                      $additionalclass = explode("~",$aroom)[1];
                    }
                    if($key1 == "K") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else if($key1 == "AK") {
                      $remove_overflowY = true;
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) . "' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    }
                    else {
                      echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                      $floornum = 50 - intval($tila__bottomcord);

                      echo '<script>if(document.querySelector("#G ul > li:nth-child('.$floornum.')")) {document.querySelector("#G ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                      echo '<script>if(document.querySelector("#G ul > li:nth-child('.$floornum.')")) {document.querySelector("#G ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                    }
                  }
            ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
        for ($i=1; $i <= 50; $i++) {
            echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
        }
        ?>
        </article>
    </div>
    <div class="per50 floatleft coderdy rappu-8" id="H" style="opacity: 1;">
        <?php
          $roomtitle = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'h_rooms_title'");
          $rooms_t = mysqli_fetch_all($roomtitle);
          $roomtitle = $rooms_t[0][3];
        $entrance = "h";
        $np_sql_result = $db->query("SELECT `meta_value` FROM `projectmeta` WHERE `id`=$id AND `meta_key` = '{$entrance}_np_text'");
        if ($np_sql_result && $np_sql_result->num_rows) {
            $np = json_decode($np_sql_result->fetch_row()[0], true);
        }
        else {
            $np = [];
        }
        ?>
        <div class="tablepreview">
            <h2><input type="text" value="<?= $roomtitle ?>"  onchange="send__value(this.value, `<?= $rooms_t[0][2] ?>`);" class="lineinput"> </h2>

            <div class="project__building"> <!-- grid-template-columns: < ?php echo $h_colc ?>; -->
              <div class="project__buildingcoordinates">
                <ul>
                  <?php
                    for ($i=50; $i >= 1; $i--) {
                      echo "<li class='floor__".$i."'>" . $i . "</li>";
                    }
                  ?>
                </ul>
              </div>
              <?php
                $h_data_nowork = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'h_rooms_nowork'");
                $h_da_nowork = mysqli_fetch_all($h_data_nowork);
                $h_data_nowork = $h_da_nowork[0][3];
                $h_da_nowork_ = explode("},{", $h_data_nowork);
                foreach ($h_da_nowork_ as $h_key_nowork) {

                  $da_child = explode(",", $h_key_nowork);
                  $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                  $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));

                  $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));
                  if($key1 == "K") {
                    echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                    $remove_overflowY = true;
                  }
                  else if($key1 == "AK") {
                    echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                    $remove_overflowY = true;
                  }
                  else {
                    $tila__bottomcord = intval($key1) -1;
                    echo "<div class=' ".strtolower(str_replace('Tila ','',$key0))."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".strtolower(str_replace('<br>','',str_replace(' ','',mb_convert_encoding($key0,'HTML-ENTITIES','utf-8'))))."' data-y='".$key1."' data-x='".$key2."'>".$key0."</div>";
                  }

                }

                $h_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`=$id AND `meta_key` = 'h_rooms'");
                $h_da = mysqli_fetch_all($h_data);
                $h_data = $h_da[0][3];

                $h_da_ = explode("},{", $h_data);



                if (strlen($h_data) < 3) {
                    echo "<style>#H {display:none}</style>";
                }

                foreach ($h_da_ as $h_key) {
                  $da_child = explode(',', $h_key);
                  $key0 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[0]))))));
                  $key1 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[1]))))));
                  $tila__bottomcord = intval($key1) -1;
                  $key2 = str_replace('positionY:','',str_replace('positionX:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[2]))))));

                  $aroom = str_replace('a_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[3])))));
                  $broom = str_replace('b_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[4])))));
                  $croom = str_replace('c_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[5])))));
                  $droom = str_replace('d_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[6])))));
                  $kroom = str_replace('k_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[7])))));
                  $lroom = str_replace('l_room:','',str_replace('name:','', str_replace('}]', '', str_replace('[{', '',str_replace('"', '', $da_child[8])))));

                  $classname = str_replace('</b>', '', str_replace('<b> ', '',str_replace('<br>', '', str_replace('<br> ', '', str_replace(' <br>', '', str_replace(' <br> ','',str_replace('---','',str_replace('ã','o',str_replace('ä','a',str_replace('--','',str_replace('','',utf8_encode(strtolower($key0)))))))))))));

                  if(explode("~",$aroom)[1] === explode("~",$broom)[1] && explode("~",$croom)[1]  === explode("~",$kroom)[1]) {
                    $additionalclass = explode("~",$aroom)[1];
                  }
                  if($key1 == "K") {
                    $remove_overflowY = true;
                    echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-1px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='K' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                  }
                  else if($key1 == "AK") {
                    $remove_overflowY = true;
                    echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(-2px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) . "' data-y='AK' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                  }
                  else {
                    echo "<div onclick='apartment = this;initalize_cross(this);' class='project__building_room ". $additionalclass . " " .str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8')) ."' style='bottom: calc(" . $tila__bottomcord . "px*80);left:calc(".$key2 . "px*80);' data-room='".str_replace(['</b>','<b>','<br>',' '],'',mb_convert_encoding(mb_strtolower($key0),'HTML-ENTITIES','utf-8'))."' data-y='".$key1."' data-x='".$key2."' data-liftpoint='" . ($np[intval($key2)] ?? "NP$key2") . "' data-aroom='".strtolower($aroom)."' data-broom='".strtolower($broom)."' data-croom='".strtolower($croom)."' data-droom='".strtolower($droom)."' data-kroom='".strtolower($kroom)."' data-lroom='".strtolower($lroom)."'>".$key0."</div>";
                    $floornum = 50 - intval($tila__bottomcord);

                    echo '<script>if(document.querySelector("#H ul > li:nth-child('.$floornum.')")) {document.querySelector("#H ul > li:nth-child('.$floornum.')").style.display = "block";}</script>';
                    echo '<script>if(document.querySelector("#H ul > li:nth-child('.$floornum.')")) {document.querySelector("#H ul > li:nth-child('.$floornum.')").style.opacity = "1";}</script>';
                  }
                }
              ?>
              <section class="project__building_grid">
                <?php
                  for ($i=0; $i < 1500; $i++) {
                    echo "<div></div>";
                  }
                ?>
              </section>
            </div>

            <!-- end of sizer -->
        </div>
        <article class="project__building_liftingplaces" style="height: 80px;">
        <?php
        for ($i=1; $i <= 50; $i++) {
            echo "<li class='project__room_lifting__$i project__room_lifting ' style='left:calc($i*80px)'><input class='lineinput' oninput='change_np(this.value,this.dataset.forrow, \"$entrance\")' data-forrow='$i' value='" . ($np[$i] ?? "NP$i") . "'> </li>";
        }
        ?>
        </article>
    </div>

    <?php
    if(strtolower($_GET["user"]) == "tyonjohto") {
      echo '<div class="rappus__plusbtn" onclick="next_rabbu();">UUSI</div>';
    }
    ?>
  </div>
  <div>

  </div>

  <div class="container colormeanings">
    <div class="row colormeaningsimps">
      <div class="col-2 popup__statuses_a">
        <div class="c_meaning c_meaning_2" data-action="undone"><input oninput="change__stsplit(this)" data-action="undone" class="lineinput" value="<?= $st_slplit[0]; ?>" /></div>
        <div class="c_meaning c_meaning_1" data-action="nowork"><input oninput="change__stsplit(this)" data-action="nowork" class="lineinput" value="<?= $st_slplit[1]; ?>" /></div>
        <div class="c_meaning c_meaning_8" data-action="prob"><input oninput="change__stsplit(this)" data-action="prob"  class="lineinput" value="<?= $st_slplit[2]; ?>" /></div>
        <div class="c_meaning c_meaning_9" data-action="problem"><input oninput="change__stsplit(this)" data-action="problem" class="lineinput" value="<?= $st_slplit[3]; ?>" /></div>

      </div>
      <div class="col-2 popup__statuses_f">
        <div class="c_meaning" data-action="l5_a"><input oninput="change__stsplit(this)" data-action="l5_a" class="lineinput" value="<?= $st_slplit[4]; ?>" /></div>
        <div class="c_meaning" data-action="l5_b"><input oninput="change__stsplit(this)" data-action="l5_b" class="lineinput" value="<?= $st_slplit[5]; ?>" /></div>
        <div class="c_meaning" data-action="l5_c"><input oninput="change__stsplit(this)" data-action="l5_c" class="lineinput" value="<?= $st_slplit[6]; ?>" /></div>
        <div class="c_meaning" data-action="l5_d"><input oninput="change__stsplit(this)" data-action="l5_d" class="lineinput" value="<?= $st_slplit[7]; ?>" /></div>
        <div class="c_meaning" data-action="l5_e"><input oninput="change__stsplit(this)" data-action="l5_e" class="lineinput" value="<?= $st_slplit[8]; ?>" /></div>
      </div>
      <div class="col-2 popup__statuses_b">
        <div class="c_meaning" data-action="l4_a"><input oninput="change__stsplit(this)" data-action="l4_a" class="lineinput" value="<?= $st_slplit[9]; ?>" /></div>
        <div class="c_meaning" data-action="l4_b"><input oninput="change__stsplit(this)" data-action="l4_b" class="lineinput" value="<?= $st_slplit[10]; ?>" /></div>
        <div class="c_meaning" data-action="l4_c"><input oninput="change__stsplit(this)" data-action="l4_c" class="lineinput" value="<?= $st_slplit[11]; ?>" /></div>
        <div class="c_meaning" data-action="l4_d"><input oninput="change__stsplit(this)" data-action="l4_d" class="lineinput" value="<?= $st_slplit[12]; ?>" /></div>
        <div class="c_meaning" data-action="l4_e"><input oninput="change__stsplit(this)" data-action="l4_e" class="lineinput" value="<?= $st_slplit[13]; ?>" /></div>
      </div>
      <div class="col-2 popup__statuses_c">
        <div class="c_meaning" data-action="l3_a"><input oninput="change__stsplit(this)" data-action="l3_a" class="lineinput" value="<?= $st_slplit[14]; ?>" /></div>
        <div class="c_meaning" data-action="l3_b"><input oninput="change__stsplit(this)" data-action="l3_b" class="lineinput" value="<?= $st_slplit[15]; ?>" /></div>
        <div class="c_meaning" data-action="l3_c"><input oninput="change__stsplit(this)" data-action="l3_c" class="lineinput" value="<?= $st_slplit[16]; ?>" /></div>
        <div class="c_meaning" data-action="l3_d"><input oninput="change__stsplit(this)" data-action="l3_d" class="lineinput" value="<?= $st_slplit[17]; ?>" /></div>
        <div class="c_meaning" data-action="l3_e"><input oninput="change__stsplit(this)" data-action="l3_e" class="lineinput" value="<?= $st_slplit[18]; ?>" /></div>
      </div>
      <div class="col-2 popup__statuses_d">
        <div class="c_meaning" data-action="l2_a"><input oninput="change__stsplit(this)" data-action="l2_a" class="lineinput" value="<?= $st_slplit[19]; ?>" /></div>
        <div class="c_meaning" data-action="l2_b"><input oninput="change__stsplit(this)" data-action="l2_b" class="lineinput" value="<?= $st_slplit[20]; ?>" /></div>
        <div class="c_meaning" data-action="l2_c"><input oninput="change__stsplit(this)" data-action="l2_c" class="lineinput" value="<?= $st_slplit[21]; ?>" /></div>
        <div class="c_meaning" data-action="l2_d"><input oninput="change__stsplit(this)" data-action="l2_d" class="lineinput" value="<?= $st_slplit[22]; ?>" /></div>
        <div class="c_meaning" data-action="l2_e"><input oninput="change__stsplit(this)" data-action="l2_e" class="lineinput" value="<?= $st_slplit[23]; ?>" /></div>
      </div>
      <div class="col-2 popup__statuses_e">
        <div class="c_meaning" data-action="l1_a"><input oninput="change__stsplit(this)" data-action="l1_a" class="lineinput" value="<?= $st_slplit[24]; ?>" /></div>
        <div class="c_meaning" data-action="l1_b"><input oninput="change__stsplit(this)" data-action="l1_b" class="lineinput" value="<?= $st_slplit[25]; ?>" /></div>
        <div class="c_meaning" data-action="l1_c"><input oninput="change__stsplit(this)" data-action="l1_c" class="lineinput" value="<?= $st_slplit[26]; ?>" /></div>
        <div class="c_meaning" data-action="l1_d"><input oninput="change__stsplit(this)" data-action="l1_d" class="lineinput" value="<?= $st_slplit[27]; ?>" /></div>
        <div class="c_meaning" data-action="l1_e"><input oninput="change__stsplit(this)" data-action="l1_e" class="lineinput" value="<?= $st_slplit[28]; ?>" /></div>
      </div>

    </div>
    <?php




    if(strtolower($_GET["user"]) == "tyonjohto") {
      echo'

      <div class="row">
        <h3>Työt</h3>
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

    <div class="row house__parentrow nowrap">
      <?php
        if(strtolower($usr_role) !== "mittaus") {
          echo '<div class="col-6 row house__inputrow">';
        }
        else {
          echo '<div class="col-6 row house__inputrow nowrap">';
        }
      ?>
        <h2><input maxlength="200" type="hidden" placeholder="Tilan nimi tähän" value="" name="wall_name" class="lineinput" id="roomname" oninput="open__change_btn();"></h2>
        <h2><input maxlength="30" type="text" placeholder="Tilanimen 1 rivi" value="" name="wall_name" class="lineinput" id="roomname_1" oninput="open__change_btn();"></h2>
        <h2><input maxlength="30" type="text" placeholder="Tilanimen 2 rivi" value="" name="wall_name" class="lineinput" id="roomname_2" oninput="open__change_btn();"></h2>
        <h2><input maxlength="30" type="text" placeholder="Tilanimen 3 rivi" value="" name="wall_name" class="lineinput" id="roomname_3" oninput="open__change_btn();"></h2>
        <div class="change__roomname_btn" style="opacity: 0;" onclick="change__roomname();">
          Vaihda tilan nimi
        </div>
      <?php
      //  $available_users = '';

      //  if(strtolower($_GET["user"]) == "tyonjohto") {
      //    $role = $_GET['user'];
      //    $_id = $_GET['id'];

      //    $_userslist = mysqli_query($db, "SELECT `username` FROM `addedusers` WHERE `project_id`=$id");
      //    $userslist = mysqli_fetch_all($_userslist);


      //    $ul="";

      //    foreach ($userslist as $usern) {
      //      $ul.='<option value="'.ucfirst($usern[0]).'">'.ucfirst($usern[0]).'</option>';
      //    }

      //    $ddate = date("Y-m-d");
      //    $date = new DateTime($ddate);
      //    $week = $date->format("W");
      //    $weekcount = $week;
      //    $cur_week = $week;


      //    echo '
      //      <div class="row">
      //        <h2 style="width: 100%;">Jätä työ</h2>
      //        <hr style="margin-top: 50px;">
      //        <section class="commentbox commentbox__new commentbox__newfirst">
      //          <div class="row">
      //            <div class="col-6">
      //              <h2><input type="text" value="" class="lineinput kommentti__name" placeholder="Mikä murehduttaa?" onchange="window.scrollTo(0, 150);"></h2>

      //            </div>
      //            <div class="col-3">
      //              <h6>Deadline:</h6>
      //              <input name="deadline_time" class="comment__deadline newcomment__deadline" type="date" min="' .  date("Y-m-d") . '" value="'.date("Y-m-t", strtotime(date("Y-m-d"))).'" onchange="this.parentElement.parentElement.parentElement.querySelector(`.newcomment__vko`).value= new Date(this.value).getWeek();">
      //            </div>
      //            <div class="col-3">
      //                <h6>Arvio työtunneista</h6>
      //                <input name="time_estimate" class="time_estimate newcomment__estimatehours" type="number" pattern="\d*"/ value="0" style="max-width: 70px;" min="0">h
      //            </div>
      //          </div>
      //          <div class="row">
      //            <div class="col-6">
      //            <div class="form-group">
      //                  <h6>Lisää tiedostot:</h6>
      //                  <input type="file" class="comment__files newcomment__files newcomment__files_input" name="comment__files[]" multiple>
      //                  <div class="comment__preview_files newcomment__previewfiles"></div>
      //              </div>
      //              <h6>Keneltä</h6>
      //              <input name="kommentti_comment_from" class="kommentti_comment_from" type="text" value="' . $role . '">


      //            </div>
      //            <div class="col-6">
      //                <h6>Tehdään viikolla</h6>
      //                <input name="vko_estimate" class="vko_estimate newcomment__vko" type="number" pattern="\d*"/ value="'.$cur_week.'" min="1" max="52" style="max-width: 70px;">
      //                <div class="row elevated_spaces">
      //                  <div class="col-6">
      //                    <h6>Kenelle</h6>
      //                    <select name="kommentti_comment_to" class="kommentti_comment_to kommentti_comment_newto" multiple>'.$ul.'</select>
      //                  </div>

      //                </div>
      //            </div>
      //          </div>
      //          <div class="commentbox__text">
      //            <h4>Sisältö</h4>
      //            <textarea name="kommentti_comment" class="kommentti_comment" cols="30" rows="10"></textarea>
      //            <div class="row pohjakierros">
      //              <input id="is_thecomment_critical" class="is_thecomment_critical" type="checkbox" value="Critical">
      //              <label for="is_thecomment_critical">Onko kriittinen?</label>
      //            </div>
      //          </div>
      //        </section>
      //      </div>';
      //    }

      $available_users = '';

      if(strtolower($_GET["user"]) == "tyonjohto") {

        $role = $_GET['user'];

        $_userslist = mysqli_query($db, "SELECT `username` FROM `addedusers` WHERE `project_id`=$id");
        $userslist = mysqli_fetch_all($_userslist);


        $ul="";

        foreach ($userslist as $usern) {
          $ul.='<option value="'.ucfirst($usern[0]).'">'.ucfirst($usern[0]).'</option>';
        }
        echo '
          <div class="row">
            <h2 style="width: 100%;">Jätä työ</h2>
            <hr style="margin-top: 50px;">
            <section class="commentbox commentbox__new commentbox__newsecond">
              <div class="row">
                <div class="col-6">
                  <h2><input type="text" value="" class="lineinput kommentti__name" placeholder="Mikä murehduttaa?" onchange="window.scrollTo(0, 150);"></h2>

                </div>
                <div class="col-3">
                  <h6>Deadline:</h6>
                  <input name="deadline_time" class="comment__deadline newcomment__deadline" type="date" min="' .  date("Y-m-d") . '" value="'.date("Y-m-t", strtotime(date("Y-m-d"))).'" onchange="this.parentElement.parentElement.parentElement.querySelector(`.newcomment__vko`).value= new Date(this.value).getWeek();">
                </div>
                <div class="col-3">
                    <h6>Arvio työtunneista</h6>
                    <input name="time_estimate" class="time_estimate newcomment__estimatehours" type="number" pattern="\d*"/ value="0" style="max-width: 70px;" min="0">h
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                      <h6>Lisää tiedostot:</h6>

                      <input type="file" class="newcomment__files newcomment__files_input" name="comment__files[]" multiple onchange="preparefile(this)">
                      <div class="comment__preview_files newcomment__previewfiles_new"></div>
                  </div>
                  <h6>Keneltä</h6>
                  <input name="kommentti_comment_from" class="kommentti_comment_from" type="text" value="' . $role . '">


                </div>
                <div class="col-6">
                    <h6>Tehdään viikolla</h6>
                    <input name="vko_estimate" class="vko_estimate newcomment__vko" type="number" pattern="\d*"/ value="'.$cur_week.'" min="1" max="52" style="max-width: 70px;">
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
                  <input id="is_thecomment_critical" class="is_thecomment_critical" type="checkbox" value="Critical">
                  <label for="is_thecomment_critical">Onko kriittinen?</label>
                </div>
              </div>
              <div class="commentbox_btn drawarea__controls_btn btn commentreadyready_btn sendcommentfiles"  onclick="preparefiles_sendcomment(this);">Lähetä</div>
            </section>
          </div>';
        }


      ?>
      </div>

        <?php
          $usr = $_GET["user"];

          $usr_role = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr'; ");
          $usr_role_ = mysqli_fetch_all($usr_role)[0];

          $usr_role = $usr_role_[3];

          if(strtolower($usr_role) == "kommentointi") {
            echo ' <div class="col-6">';
          }
          else {
            echo ' <div class="col-3">';
            echo '<div id="types" class="house__types">
            <h2>Parveketyypit</h2>
            <div class="house__types_row row">';
              $p_data = mysqli_query($db, "SELECT * FROM `pohjat`");
              $p_da = mysqli_fetch_all($p_data);
              $p_data = $p_da;
              $key_name = -1;
              foreach ($p_data as $p_key) {
                  $template_name = $p_key[1];
                  $i_a = $p_key[2];
                  $i_b = $p_key[3];
                  $i_c = $p_key[4];
                  $i_d = $p_key[5];
                  $i_k = $p_key[6];
                  $i_l = $p_key[7];

                  $key_name += 1;

                  echo "<div onclick='initialize__housetempla(this,1);' data-presetid='".$p_key[0]."' data-aroom='" . strtolower($i_a) . "' data-broom='" . strtolower($i_b) . "' data-croom='" . strtolower($i_c) . "' data-droom='" . strtolower($i_d) . "' data-kroom='" . strtolower($i_k) . "' data-lroom='" . strtolower($i_l) . "' class='house__types_type'>" . $template_name . "</div>";
              }



            echo '
              </div>
              <div class="house__types_button" onclick="initialize__housetempla(this,2);">
                Tallenna tämä asunto pohjaksi
              </div>
            </div>';
          ?>
      </div>
      <div class="col-3">
        <div class="prev_btn" onclick='$("#step_drawscreen").val("project_start");refresh__drawcontrols();degradate_url(1);'>Edellinen</div>
      </div>
    </div>


   <div class="row house__intro">


    <?php

      // $available_users = '';

      // if(strtolower($_GET["user"]) == "tyonjohto") {

      //   $role = $_GET['user'];

      //   $_userslist = mysqli_query($db, "SELECT `username` FROM `addedusers` WHERE `project_id`=$id");
      //   $userslist = mysqli_fetch_all($_userslist);


      //   $ul="";

      //   foreach ($userslist as $usern) {
      //     $ul.='<option value="'.ucfirst($usern[0]).'">'.ucfirst($usern[0]).'</option>';
      //   }
      //   echo '
      //     <div class="row">
      //       <h2 style="width: 100%;">Jätä työ</h2>
      //       <hr style="margin-top: 50px;">
      //       <section class="commentbox commentbox__new commentbox__newsecond">
      //         <div class="row">
      //           <div class="col-6">
      //             <h2><input type="text" value="" class="lineinput kommentti__name" placeholder="Mikä murehduttaa?" onchange="window.scrollTo(0, 150);"></h2>

      //           </div>
      //           <div class="col-3">
      //             <h6>Deadline:</h6>
      //             <input name="deadline_time" class="comment__deadline newcomment__deadline" type="date" min="' .  date("Y-m-d") . '" value="'.date("Y-m-t", strtotime(date("Y-m-d"))).'" onchange="this.parentElement.parentElement.parentElement.querySelector(`.newcomment__vko`).value= new Date(this.value).getWeek();">
      //           </div>
      //           <div class="col-3">
      //               <h6>Arvio työtunneista</h6>
      //               <input name="time_estimate" class="time_estimate newcomment__estimatehours" type="number" pattern="\d*"/ value="0" style="max-width: 70px;" min="0">h
      //           </div>
      //         </div>
      //         <div class="row">
      //           <div class="col-6">
      //           <div class="form-group">
      //                 <h6>Lisää tiedostot:</h6>
      //                 <input type="file" class="comment__files newcomment__files newcomment__files_input" name="comment__files[]" multiple>
      //                 <div class="comment__preview_files newcomment__previewfiles"></div>
      //             </div>
      //             <h6>Keneltä</h6>
      //             <input name="kommentti_comment_from" class="kommentti_comment_from" type="text" value="' . $role . '">


      //           </div>
      //           <div class="col-6">
      //               <h6>Tehdään viikolla</h6>
      //               <input name="vko_estimate" class="vko_estimate newcomment__vko" type="number" pattern="\d*"/ value="'.$cur_week.'" min="1" max="52" style="max-width: 70px;">
      //               <div class="row elevated_spaces">
      //                 <div class="col-6">
      //                   <h6>Kenelle</h6>
      //                   <select name="kommentti_comment_to" class="kommentti_comment_to kommentti_comment_newto" multiple>'.$ul.'</select>
      //                 </div>

      //               </div>
      //           </div>
      //         </div>
      //         <div class="commentbox__text">
      //           <h4>Sisältö</h4>
      //           <textarea name="kommentti_comment" class="kommentti_comment" cols="30" rows="10"></textarea>
      //           <div class="row pohjakierros">
      //             <input id="is_thecomment_critical" class="is_thecomment_critical" type="checkbox" value="Critical">
      //             <label for="is_thecomment_critical">Onko kriittinen?</label>
      //           </div>
      //         </div>
      //         <div class="commentbox_btn drawarea__controls_btn btn commentreadyready_btn sendcommentfiles"  onclick="comment__create_new(this.parentElement.parentElement);">Lähetä</div>
      //       </section>
      //     </div>';
      //   }
      ?>
      </div>
      <div class="col-6">
        <?php
          }
        ?>




        <div id="house__intro_commenting">
          <div class="house__intro_comments">

              <?php
                $id = $post['id'];
                $role = $_GET['user'];
                if(strtolower($usr_role) == "kommentointi") {
                  echo '<div class="prev_btn" onclick="$(&quot;#step_drawscreen&quot;).val(&quot;project_start&quot;);refresh__drawcontrols();degradate_url(1);">Edellinen</div>';

                  if(strtolower($_GET["user"]) == "tyonjohto") {
                    $bosts = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`=$id AND `ending_time`='' AND `answer_to`=''");
                    $bosts = mysqli_fetch_all($bosts);
                    echo '<h3>Työt</h3>';
                  }
                  else {
                    $bosts = mysqli_query($db, "SELECT * FROM `comments` WHERE `projectid`=$id AND `comment_to` LIKE '%$role%' AND  `ending_time`='' AND `answer_to`=''");
                    $bosts = mysqli_fetch_all($bosts);
                    echo '<h3>Työt</h3>';

                  }
                  $usr = $_GET["user"];
                  $usr_role = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr'; ");
                  $usr_role = mysqli_fetch_all($usr_role)[0];
                  $usr_role = $usr_role[3];
                    foreach ($bosts as $p) {
                      $_p = explode("https://", $p[6]);
                      $_z = "";
                      foreach ($_p as $v) {
                        if(strlen($v) >= 7 ) {
                          $_z .= "<li><a href=https://" . $v . " target=`_blank`> <img style='max-width: 200px' src='https://" . $v . "' /></a></li>";
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



                      $_userslist = mysqli_query($db, "SELECT `username` FROM `addedusers` WHERE `project_id`=$id ");
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
                            $_z2 .= "<li><a href=https://" . $v2 . " target=`_blank`> <img style='max-width: 200px' src='https://" . $v2 . "' /></a></li>";
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
                }
              ?>
          </div>
        </div>
      </div>
    </div>
    <dialog class="dialog" id="add_customer_dialog">
        <div class="dialog_container">
            <div class="form">
                <button class="close_dialog" id="close_add_customer_dialog">x</button>
                <label>
                    <span>Nimi</span>
                    <input type="text" class="customer_name">
                </label>
                <label>
                    <span>Puh</span>
                    <input type="tel" class="customer_phone">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" class="customer_email">
                </label>
                <label>
                    <span>Tyyppi</span>
                    <select class="customer_type">
                        <option value="asukas">Asukas</option>
                        <option value="osakas">Osakas</option>
                        <option value="omistaja">Omistaja</option>
                    </select>
                </label>
                <button id="add_new_customer_contact" class="add_new_customer_contact_button">Lisää uusi kontakti</button>
            </div>
        </div>
    </dialog>
    <article class="row wide-container nowrap">
    <?php
       $id = $post['id'];
       $role = $_GET['user'];
       if(strtolower($usr_role) !== "mittaus") {
        echo '<aside class="col-6">';
       }
       else {
        echo '<aside class="col-4">';
       }

      ?>

      <?php

     ?>
        <div class="row">
        <?php
            $tiedot_projektista = $db->query("SELECT * FROM `projectmeta` WHERE `id`= $id AND `meta_key` = 'tiedot_projektista'");
            if ($tiedot_projektista && $tiedot_projektista->num_rows) {
                $tiedot_projektista = $tiedot_projektista->fetch_assoc()["meta_value"];
            }
            else {
                $tiedot_projektista = "Ei ole";
            }
            $tiedot_huoneista = $db->query("SELECT * FROM `projectmeta` WHERE `id`= $id AND `meta_key` = 'tiedot_huoneista'");
            if ($tiedot_huoneista && $tiedot_huoneista->num_rows) {
                $tiedot_huoneista = $tiedot_huoneista->fetch_assoc()["meta_value"];
            }
            else {
                $tiedot_huoneista = "Ei ole";
            }
            $tiedot_tekijasta = $db->query("SELECT * FROM `projectmeta` WHERE `id`= $id AND `meta_key` = 'tiedot_tekijasta'");
            if ($tiedot_tekijasta && $tiedot_tekijasta->num_rows) {
                $tiedot_tekijasta = $tiedot_tekijasta->fetch_assoc()["meta_value"];
            }
            else {
                $tiedot_tekijasta = "Ei ole";
            }
        ?>
          <div class="col-with-table">
              <p><strong>Yhteystiedot </strong></p>
              <div class="customer_contacts">

              </div><br>
              <button id="show_add_new_customer_contact" class="add_new_customer_contact_button">Lisää uusi kontakti</button>
              <br><br>
          <b>Tiedot projektista </b> <br>
          <i><?= $tiedot_projektista ?></i> <br> <br>
          <b>Tiedot huoneesta </b> <br>
          <i><?= $tiedot_huoneista ?></i> <br> <br>
          <b>Tiedot tekijästä</b> <br>
          <i><?= $tiedot_tekijasta ?></i> <br> <br>
          <button type="button" class="show_project_files_btn">Asunnon tiedostopankki</button>
          <?php
       $id = $post['id'];
       $role = $_GET['user'];
       if(strtolower($usr_role) !== "mittaus") {
       }
       else {
        echo '<div class="col-table">
                <h2>Seinien asennusjärjestys</h2>
                <table>
                  <tr>
                      <td><input type="number" pattern="\d*"/ data-room="asjarj-1" maxlength="1" name="wall_one_asjarj asjarj" id="wall_order_a" data-tochange="a" onchange="rooms__change_asjarj(this); " value="1" class="lineinput inputname" required/></td>
                      <td><input type="text" data-room="a" name="wall_one_a" id="wall_one_a" value="SEINÄ A" data-tochange="a" class="lineinput inputname" required onchange="rooms__change_name(this);" oninput="rooms__change_name(this);"></td>
                      <td><input type="text" name="wall_one_a_desc" id="wall_desc_a" data-tochange="a" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
                  </tr>
                  <tr>
                      <td><input type="number" pattern="\d*"/ data-room="asjarj-2" maxlength="1" name="wall_two_asjarj asjarj" id="wall_order_b" data-tochange="b" onchange="rooms__change_asjarj(this); "value="2" class="lineinput inputname" required/></td>
                      <td><input type="text" data-room="b" name="wall_one_b" id="wall_one_b" value="SEINÄ B" data-tochange="b"  class="lineinput inputname" required onchange="rooms__change_name(this);" oninput="rooms__change_name(this);"></td>
                      <td><input type="text" name="wall_one_b_desc" id="wall_desc_b" data-tochange="b" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
                  </tr>
                  <tr>
                      <td><input type="number" pattern="\d*"/ data-room="asjarj-3" maxlength="1" name="wall_three_asjarj asjarj" id="wall_order_c" data-tochange="c" onchange="rooms__change_asjarj(this); "value="3" class="lineinput inputname" required/></td>
                      <td><input type="text" data-room="c" name="wall_one_c" id="wall_one_c" value="SEINÄ C" data-tochange="c" class="lineinput inputname" required onchange="rooms__change_name(this);" oninput="rooms__change_name(this);"></td>
                      <td><input type="text" name="wall_one_c_desc" id="wall_desc_c" data-tochange="c" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
                  </tr>
                  <tr>
                      <td><input type="number" pattern="\d*"/ data-room="asjarj-4" maxlength="1" name="wall_four_asjarj asjarj" id="wall_order_d" data-tochange="d" onchange="rooms__change_asjarj(this); "value="4" class="lineinput inputname" required/></td>
                      <td><input type="text" data-room="d" name="wall_one_d" id="wall_one_d" value="SEINÄ D"  data-tochange="d" class="lineinput inputname" required onchange="rooms__change_name(this);" oninput="rooms__change_name(this);"></td>
                      <td><input type="text" name="wall_one_d_desc" id="wall_desc_d" data-tochange="d" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
                  </tr>
                  <tr>
                      <td><input type="number" pattern="\d*"/ data-room="asjarj-5" maxlength="1" name="wall_five_asjarj asjarj" id="wall_order_roof" data-tochange="k" onchange="rooms__change_asjarj(this); "value="5" class="lineinput inputname" required/></td>
                      <td><input type="text" data-room="k" name="wall_one_roof" id="wall_one_roof" value="KATTO" data-tochange="k" class="lineinput inputname" required onchange="rooms__change_name(this);" oninput="rooms__change_name(this);"></td>
                      <td><input type="text" name="wall_one_roof_desc" id="wall_desc_k" data-tochange="k" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
                  </tr>
                  <tr>
                      <td><input type="number" pattern="\d*"/ data-room="asjarj-6" maxlength="1" name="wall_six_asjarj asjarj" id="wall_order_floor" data-tochange="l" onchange="rooms__change_asjarj(this); "value="6" class="lineinput inputname" required/></td>
                      <td><input type="text" data-room="l" name="wall_one_floor" id="wall_one_floor" value="LATTIA" data-tochange="l" class="lineinput inputname" required onchange="rooms__change_name(this);" oninput="rooms__change_name(this);"></td>
                      <td><input type="text" name="wall_one_floor_desc" id="wall_desc_l" data-tochange="l" onchange="rooms__change_description(this);" placeholder="Kuvausen voit kirjoittaa tähän..." class="lineinput"></td>
                  </tr>
                </table>
                <div class="row">
                  <div class="open_modal yellowbtn get_apartment_modal col-6" onclick="settings__modal_open(this);toggle__asexcel(0,document.querySelector(`.tilalista_btn:nth-child(1)`));" data-asmodal_mode="asuntoexcel">Avaa asunnon tilaustaulu</div>
                </div>
              </div>';
       }
       echo '</div>';
       if(strtolower($usr_role) !== "mittaus") {
      }
      else {
        echo '<div class="row">
          <h3>Seinän nimen taustaväri</h3>
          <div class="col-2 popup__statuses_a">
          <div class="c_meaning c_meaning_2" data-action="undone"><i data-action="undone">'. $st_slplit[0] .' </i></div>
          <div class="c_meaning c_meaning_1" data-action="nowork"><i data-action="nowork">'. $st_slplit[1] .' </i></div>
          <div class="c_meaning c_meaning_8" data-action="prob"><i data-action="prob" >'. $st_slplit[2] .' </i></div>
          <div class="c_meaning c_meaning_9" data-action="problem"><i data-action="problem">'. $st_slplit[3] .' </i></div>
        </div>
        <div class="col-2 popup__statuses_f">
          <div class="c_meaning" data-action="l5_a"><i data-action="l5_a">'. $st_slplit[4] .'</i></div>
          <div class="c_meaning" data-action="l5_b"><i data-action="l5_b">'. $st_slplit[5] .'</i></div>
          <div class="c_meaning" data-action="l5_c"><i data-action="l5_c">'. $st_slplit[6] .'</i></div>
          <div class="c_meaning" data-action="l5_d"><i data-action="l5_d">'. $st_slplit[7] .'</i></div>
          <div class="c_meaning" data-action="l5_e"><i data-action="l5_e">'. $st_slplit[8] .'</i></div>
        </div>
        <div class="col-2 popup__statuses_b">
          <div class="c_meaning" data-action="l4_a"><i data-action="l4_a">'. $st_slplit[9] .'</i></div>
          <div class="c_meaning" data-action="l4_b"><i data-action="l4_b">'. $st_slplit[10] .'</i></div>
          <div class="c_meaning" data-action="l4_c"><i data-action="l4_c">'. $st_slplit[11] .'</i></div>
          <div class="c_meaning" data-action="l4_d"><i data-action="l4_d">'. $st_slplit[12] .'</i></div>
          <div class="c_meaning" data-action="l4_e"><i data-action="l4_e">'. $st_slplit[13] .'</i></div>
        </div>
        <div class="col-2 popup__statuses_c">
          <div class="c_meaning" data-action="l3_a"><i data-action="l3_a">'. $st_slplit[14] .'</i></div>
          <div class="c_meaning" data-action="l3_b"><i data-action="l3_b">'. $st_slplit[15] .'</i></div>
          <div class="c_meaning" data-action="l3_c"><i data-action="l3_c">'. $st_slplit[16] .'</i></div>
          <div class="c_meaning" data-action="l3_d"><i data-action="l3_d">'. $st_slplit[17] .'</i></div>
          <div class="c_meaning" data-action="l3_e"><i data-action="l3_e">'. $st_slplit[18] .'</i></div>
        </div>
        <div class="col-2 popup__statuses_d">
          <div class="c_meaning" data-action="l2_a"><i data-action="l2_a">'. $st_slplit[19] .' </i></div>
          <div class="c_meaning" data-action="l2_b"><i data-action="l2_b">'. $st_slplit[20] .' </i></div>
          <div class="c_meaning" data-action="l2_c"><i data-action="l2_c">'. $st_slplit[21] .' </i></div>
          <div class="c_meaning" data-action="l2_d"><i data-action="l2_d">'. $st_slplit[22] .' </i></div>
          <div class="c_meaning" data-action="l2_e"><i data-action="l2_e">'. $st_slplit[23] .' </i></div>
        </div>
        <div class="col-2 popup__statuses_e">
          <div class="c_meaning" data-action="l1_a"><i data-action="l1_a">'. $st_slplit[24] .' </i></div>
          <div class="c_meaning" data-action="l1_b"><i data-action="l1_b">'. $st_slplit[25] .' </i></div>
          <div class="c_meaning" data-action="l1_c"><i data-action="l1_c">'. $st_slplit[26] .' </i></div>
          <div class="c_meaning" data-action="l1_d"><i data-action="l1_d">'. $st_slplit[27] .' </i></div>
          <div class="c_meaning" data-action="l1_e"><i data-action="l1_e">'. $st_slplit[28] .' </i></div>
        </div>';
        }

      ?>

      </aside>
      <?php
       $id = $post['id'];
       $role = $_GET['user'];
       if(strtolower($usr_role) !== "mittaus") {
        echo '<div id="house" class="house col-8" style="display: none;opacity:0;z-index:-1;position: absolute;">';
       }
       else {
        echo '<div id="house" class="house col-8">';
       }

      ?>


        <?php
          // project_type
          $id = $post['id'];

          $bosts = mysqli_query($db, "SELECT * FROM `projects` WHERE `id`=$id");
          $bosts = mysqli_fetch_all($bosts);
          foreach ($bosts as $p) {

            if($p[4] == 'after_measure_comment' || $p[4] == "Huone/seinä") {
              echo '
              <div class="row">
                <div class="house__wall house__wall_roof house__wall_k" style="width: 170px; height: 120px;">
                  <div class="house__wall_status house__wall_status_k" data-room="K" onclick="input_step = `drawscreen_section_one`;submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);refresh__drawcontrols();">KATTO</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_tochange_2 wall_height" value="3200"  name="wall_one_roof_h" id="wall_one_roof_h" onchange="change_roof(this);">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_roof_w" id="wall_one_roof_w" onchange="change_roof(this);">

                  <div class="house__wallspecial">
                    <div class="house__wall_asjarj asjarjk">5</div>
                    <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="k"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                  </div>
                </div>
              </div>';
              echo '
              <div class="row">
                <div class="house__wall house__wall_one house__wall_a" style="width: 170px; height: 120px;">
                    <div class="house__wall_status house__wall_status_a" data-room="A" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä A</div>
                    <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200" name="wall_one_a_h" id="wall_one_a_h" onchange="change_a(this);">
                    <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000" name="wall_one_a_w" id="wall_one_a_w" onchange="change_a(this);">
                    <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarja">1</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="a"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
                <div class="house__wall house__wall_two house__wall_b" style="width: 120px; height: 120px;">
                  <div class="house__wall_status house__wall_status_b" data-room="B" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä B</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200" name="wall_one_b_h" id="wall_one_b_h" onchange="change_b(this);">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width_2" value="2200" name="wall_one_b_w" id="wall_one_b_w" onchange="change_b(this);">
                  <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarjb">2</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="b"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
                <div class="house__wall house__wall_three house__wall_c" style="width: 170px; height: 120px;">
                  <div class="house__wall_status house__wall_status_c" data-room="C" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä C</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200"  name="wall_one_c_h" id="wall_one_c_h" onchange="change_c(this);">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_c_w" id="wall_one_c_w" onchange="change_c(this);">
                  <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarjc">3</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="c"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
                <div class="house__wall house__wall_four house__wall_d" style="width: 120px; height: 120px;">
                  <div class="house__wall_status house__wall_status_d" data-room="D" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">Seinä D</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_height" value="3200" name="wall_one_d_h" id="wall_one_d_h" onchange="change_d(this);">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width_2" value="2200" name="wall_one_d_w" id="wall_one_d_w" onchange="change_d(this);">
                  <div class="house__wallspecial">
                      <div class="house__wall_asjarj asjarjd">4</div>
                      <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="d"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                    </div>
                </div>
              </div>';
              echo '
              <div class="row">
                <div class="house__wall house__wall_floor house__wall_l" style="width: 170px; height: 120px;">
                  <div class="house__wall_status house__wall_status_l" data-room="L" onclick="input_step = `drawscreen_section_one`;refresh__drawcontrols();submitprogress(this);nav_betweenwalls(this);current_room=this.dataset.room;initializeroom(this);">LATTIA</div>
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_tochange_2 wall_height" value="3200"  name="wall_one_floor_h" id="wall_one_floor_h" onchange="change_floor(this);">
                  <input type="number" pattern="\d*"/ class="lineinput house__wall_param wall_width" value="6000"  name="wall_one_floor_w" id="wall_one_floor_w" onchange="change_floor(this);">
                  <div class="house__wallspecial">
                    <div class="house__wall_asjarj asjarjl">6</div>
                    <div class="house__wall_hide" onclick="hide__room(this);" data-tochange="l"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg></div>
                  </div>
                </div>
              </div>';
            }

          }

        ?>

        </div>

      </div>
    </article>
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
          <h2>Siirretäänkö toiminto muihin seiniin?</h2>
          <div class="modal_close_btn modal-no" onclick="document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeWalls_all();">Ei</div>
          <div class="modal_close_btn modal-yes" onclick="document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeWalls_all();">Kyllä</div>
      </section>
    </div>
  </div>
</div>
<?php
  if(strtolower($_GET["user"]) == "valinta") {
    $classvalinta = "two";
  }
  else {
    $classvalinta = "";
  }
  $prid = $_GET["id"];
  $options = "";
  $users = mysqli_query($db, "SELECT * FROM `addedusers` WHERE `project_id`='$prid';");
  $users = mysqli_fetch_all($users);
  $options.='<option value="-">-</option>';
  foreach ($users as $p) {
    $options.='<option value="'.$p[1].'">'.$p[1].'</option>';
  }

?>
<div class="zero_popup cus-container <?= $classvalinta; ?>">
  <div class="modal-background">
    <div class="modal">
      <div class="modal_close_btn hidden" onclick="zero_controls_close();">
      <b><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></b></div>
      <section style="border-bottom: 1px solid lightgray">
        <div class="row">
          <div class="col-6"><h6>Olen:</h6></div>
          <div class="col-6">
            <?php
              echo '<select id="usr__selection" onchange="zero_controls(this);">
              '.$options.'
                </select>';
            ?>
          </div>
        </div>
      </section>
      <div class="modal_close_btn drawarea__controls_btn btn hidden" onclick="zero_controls_close();" style="text-align: center; width: 100%;">Valmis</div>
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
            ""
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
    <div class="modal_close_btn" onclick="document.querySelector('.five_popup').classList.add('out');document.querySelector('.five_popup').classList.remove('two');">
      <b><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></b></div>
      <section class="commentasking__section">
        <h3>Muokkaa projektia:</h3>
        <div class="per50 floatleft rappu-1" id="A_" style="opacity: 1;" maxlength="5">
          <div class="tablepreviewz">
            <div class="roomconfig_second_prefixes roomconfig__titlerow">
              <h5>R1 <br> <input type="text" maxlength="15" list="" id="a_val" name="a_prefix" value="ARAK-"></h5>
              <h5>R1 nro
                <br>
                <input type="number" onchange="z=parseFloat(this.value);" maxlength="15" list="" id="a_nextnum" name="a_nextnum" value="1" class="prefixnum" onclick="change__byhands(this)"  data-alt="a_nextnum_2|a_nextnum_3" oninput="change__toggling(this,1)">
                <br> TAI R1 kirjain <br>
                <input type="text" onchange="z_alphabet=this.value.charCodeAt(0) - 64;"  maxlength="15" list="" id="a_nextnum_2" name="a_nextnum_2" value="" data-alt="a_nextnum|a_nextnum_3" class="prefixnum closed" oninput="change__toggling(this,2)">
                <br>TAI R1 custom <br>
                <input type="text" maxlength="15" list="" id="a_nextnum_3" name="a_nextnum_3" value="" data-alt="a_nextnum_2|a_nextnum" class="prefixnum closed" oninput="change__toggling(this,3)"></h5>
              <h5>R2 <br> <input type="text" maxlength="15" list="" id="a_nextnum_second" name="a_prefix" value=""></h5>
              <h5>
                R2 nro<br>
                <input type="number" maxlength="15" list="" onchange="z=parseFloat(this.value);" id="a_nextnum_second_1" name="a_nextnum_second_1" value="" class="prefixnum" data-alt="a_nextnum_second_2|a_nextnum_second_3" oninput="change__toggling(this,1)">
                <br>TAI R2 kirjain<br>
                <input type="text" maxlength="15" list="" onchange="z_alphabet=this.value.charCodeAt(0) - 64;" id="a_nextnum_second_2" name="a_nextnum_second_2" value="" class="prefixnum" data-alt="a_nextnum_second_1|a_nextnum_second_3" oninput="change__toggling(this,2)">
                <br>TAI R2 custom <br>
                <input type="text" maxlength="15" list="" id="a_nextnum_second_3" name="a_nextnum_second_3" value="" data-alt="a_nextnum_second_1|a_nextnum_second_2" class="prefixnum" oninput="change__toggling(this,3)">
              </h5>
              <h5>R3 <br> <input type="text" maxlength="15" list="" id="a_nextnum_third" name="a_nextnum_third" value="" class="prefixnum prefixnum_second"></h5>
              <h5>
                R3 nro<br>
                <input type="number" maxlength="15" onchange="z=parseFloat(this.value);" list="" id="a_nextnum_third_1" name="a_nextnum_third_1" value="" class="prefixnum" data-alt="a_nextnum_third_2|a_nextnum_third_3" oninput="change__toggling(this,1)">
                <br>TAI R3 kirjain<br>
                <input type="text" maxlength="15" onchange="z_alphabet=this.value.charCodeAt(0) - 64;" list="" id="a_nextnum_third_2" name="a_nextnum_third_2" value="" class="prefixnum" data-alt="a_nextnum_third_1|a_nextnum_third_3" oninput="change__toggling(this,2)">
                <br>TAI R3 custom <br>
                <input type="text" maxlength="15" list="" id="a_nextnum_third_3" name="a_nextnum_third_3" value="" data-alt="a_nextnum_third_1|a_nextnum_third_2" class="prefixnum" oninput="change__toggling(this,3)">
              </h5>
              <div class="greenbtn newproject__addinglvl" onclick="add_new_lvlproject(this);">Lisää uusi kerros</div>
            </div>
              <div class="table_size_chooser sizer">
                <div class="SizeChooser">
                  <table class="table">
                    <tbody>
                        <?php
                          for ($i=50; $i >= 1; $i--) {
                            // if($i == 0) {
                            //     echo '<tr  class="K" onclick="open_k();">';
                            //     $i_ = "K?";
                            // }
                            // else if($i == -1) {
                            //     echo '<tr  class="AK" onclick="open_ak();">';
                            //     $i_ = "AK?";
                            // }
                            // else {
                                echo "<tr style='display: none;' data-no='".$i."'>";
                                $i_ = $i;
                            // }


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
      <div class="row btnrow">
        <div class="rappu-1_btn yellowbtn" onclick="plusone_room(1);" value="1" style="display: none;">Lisää uusi rappu</div>
        <div class="modal_close_btn modal-yes" onclick="document.querySelector('.five_popup').classList.add('out');document.querySelector('.five_popup').classList.remove('two');send_new_aparts();">Tallenna</div>
        <div class="modal_close_btn modal-no" onclick="document.querySelector('.five_popup').classList.add('out');document.querySelector('.five_popup').classList.remove('two');">Sulje</div>
      </div>
    </div>
  </div>
</div>

<div class="modal-container asuntoexcel out">
  <div class="modal-background">
    <div class="modal" style="height: 90vh;">
        <div class="modal_close_btn" onclick="this.parentElement.parentElement.parentElement.classList.remove('two');this.parentElement.parentElement.parentElement.classList.add('out');"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
        <h2>Asunnon tilaustaulu</h2>
        <div class="tilalista__btns">
          <div onclick="toggle__asexcel(0,this);" class="tilalista_btn active">Tilaukset</div>
          <div onclick="toggle__asexcel(1,this);" class="tilalista_btn">Levyt</div>
          <div onclick="toggle__asexcel(2,this);" class="tilalista_btn">Rangat</div>
          <div onclick="toggle__asexcel(3,this);" class="tilalista_btn">Listat</div>
        </div>
        <table class="tilatilaus three_sheet_item">
          <tbody class="tilatilaus__tbody">
            <tr class="headingrow">
              <td>Huone</td>
              <td>Seinä A</td>
              <td>Seinä B</td>
              <td>Seinä C</td>
              <td>Seinä D</td>
              <td>Katto</td>
              <td>Lattia</td>
            </tr>
          </tbody>
        </table>
        <table class="tilalevyt three_sheet_item hidden">
          <tbody class="tilalevyt__tbody">
            <tr class="headingrow">
              <td>Type (drawing)</td>
              <td>Materialcode</td>
              <td>Leveys (X)</td>
              <td>Pituus (Y)</td>
              <td>Thickness</td>
              <td>Structure</td>
              <td>Quantity</td>
              <td>Plus</td>
              <td>Part number</td>
              <td>Nimi 1</td>
              <td>Nimi 2</td>
              <td>MPR</td>
              <td>Palletgroup</td>
              <td>Prioriteetti</td>
              <td>Asiakas</td>
              <td>Asennus</td>
              <td>Työstöt</td>
              <td></td>
              <td>X KPL</td>
              <td>Y KPL</td>
              <td>Yhteensä</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Tarra</td>
              <td>Diameter</td>
              <td>X1</td>
              <td>X2</td>
              <td>X3</td>
              <td>X4</td>
              <td>X5</td>
              <td>X6</td>
              <td>X7</td>
              <td>X8</td>
              <td>X9</td>
              <td>X10</td>
              <td>Y1</td>
              <td>Y2</td>
              <td>Y3</td>
              <td>Y5</td>
              <td>Y4</td>
              <td>Y6</td>
              <td>Y7</td>
              <td>Y8</td>
              <td>Y9</td>
              <td>Y10</td>
              <td>X</td>
              <td>Y</td>
              <td>X</td>
              <td>Y</td>
              <td>PR1_X</td>
              <td>PR1_Y</td>
              <td>PR1_DX</td>
              <td>PR1_DY</td>
              <td>PR2_X</td>
              <td>PR2_Y</td>
              <td>PR1_DX</td>
              <td>PR2_DY</td>
              <td>PR3_X</td>
              <td>PR3_Y</td>
              <td>PR3_DX</td>
              <td>PR3_DY</td>
              <td>PR4_X</td>
              <td>PR4_Y</td>
              <td>PR4_DX</td>
              <td>PR4_DY</td>
              <td>PF1_X</td>
              <td>PF1_Y</td>
              <td>PF1_DX</td>
              <td>PF1_DY</td>
              <td>PF2_X</td>
              <td>PF2_Y</td>
              <td>PF2_DX</td>
              <td>PF2_DY</td>
              <td>CH 0=OFF 1= ON</td>
              <td>Y Vasen</td>
              <td>Y oikea</td>
              <td>X ala</td>
              <td>x ylä</td>
              <td>X ala</td>
              <td>X ylä</td>
              <td>VH1_X</td>
              <td>VH1_Y</td>
              <td>VH1_L</td>
              <td>VH1_KPL</td>
              <td>VH1_K</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>AR Edge 1</td>
              <td>YR Edge 1</td>
              <td>VR Edge 1</td>
              <td>OR Edge 1</td>
              <td>AR Edge 2</td>
              <td>YR Edge 2</td>
              <td>VR Edge 2</td>
              <td>OR Edge 2</td>
              <td>AR Trim</td>
              <td>YR Trim</td>
              <td>VR Trim</td>
              <td>OR Trim</td>
              <td>Yhdistä Xx-XX</td>
              <td>Yhdistä Yx-YX</td>
            </tr>
          </tbody>
        </table>

        <table class="tilarangat three_sheet_item hidden">
          <tbody class="tilarangat__tbody">
            <tr class="headingrow">
              <td>Rivinumero</td>
              <td>Rangan tyyppi</td>
              <td>Tilauskoodi</td>
              <td>Pituus</td>
              <td>KPL</td>
              <td>MATERIAALI</td>
              <td>PAKSUUS</td>
              <td>LAATU</td>
              <td>Väri nimi</td>
              <td>NCS code</td>
              <td>Tilattu PVM</td>
              <td>STATUS</td>
              <td>Asiakas</td>
              <td>Projekti</td>
              <td>Osoite</td>
              <td>Palletgroup</td>
              <td>Asunto Nimi 1</td>
              <td>Nimi 2</td>
              <td>Työstöt </td>
              <td>Asennus</td>
            </tr>
          </tbody>
        </table>

        <table class="tilalistat three_sheet_item hidden">
          <tbody class="tilalistat__tbody">
            <tr class="headingrow">
              <td>Rivinumero</td>
              <td>Rangan tyyppi</td>
              <td>Tilauskoodi</td>
              <td>Pituus</td>
              <td>KPL</td>
              <td>MATERIAALI</td>
              <td>PAKSUUS</td>
              <td>LAATU</td>
              <td>Väri nimi</td>
              <td>NCS code</td>
              <td>Tilattu PVM</td>
              <td>STATUS</td>
              <td>Asiakas</td>
              <td>Projekti</td>
              <td>Osoite</td>
              <td>Palletgroup</td>
              <td>Asunto Nimi 1</td>
              <td>Nimi 2</td>
              <td>Työstöt </td>
              <td>Asennus</td>
            </tr>
          </tbody>
        </table>

        <div class="row excel_tilauksetrow">
          <div class="get_excel_btn get_apartment_excel col-6" onclick="lataa_seinaexcel();">Hyväksy rivit ja lataa asunnon Excel</div>
          <div class="get_excel_btn get_apartment_excel col-6 yellowbtn" onclick="lataa_seinaexcel('osittainen');">Hyväksy rivit ja lataa tilaamatta olevat tuotteet</div>
        </div>

    </div>
  </div>
</div>


<div class="modal-container projektiexcel out">
  <div class="modal-background">
    <div class="modal" style="height: 90vh;">
        <div class="modal_close_btn" onclick="this.parentElement.parentElement.parentElement.classList.remove('two');this.parentElement.parentElement.parentElement.classList.add('out');"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
        <h2>Projektin Tilaustaulu</h2>
        <div class="tilalista__btns">
          <div onclick="toggle__projectexcel(0,this);" class="projektilista_btn active">Tilaukset</div>
          <div onclick="toggle__projectexcel(1,this);" class="projektilista_btn">Levyt</div>
          <div onclick="toggle__projectexcel(2,this);" class="projektilista_btn">Rangat</div>
          <div onclick="toggle__projectexcel(3,this);" class="projektilista_btn">Listat</div>
        </div>

        <table class="projecttilaus prthree_sheet_item">
          <tbody class="projecttilaus__tbody">
            <tr class="headingrow">
              <td>Huone</td>
              <td>Seinä A</td>
              <td>Seinä B</td>
              <td>Seinä C</td>
              <td>Seinä D</td>
              <td>Katto</td>
              <td>Lattia</td>
            </tr>
          </tbody>
        </table>

        <table class="projectlevyt prthree_sheet_item">
          <tbody class="projectlevyt__tbody">
            <tr class="headingrow">
              <td>Part number</td>
              <td>Materialcode</td>
              <td>Leveys (X)</td>
              <td>Pituus (Y)</td>
              <td>Quantity</td>
              <td>Nimi 1</td>
              <td>X1</td>
              <td>X2</td>
              <td>X3</td>
              <td>X4</td>
              <td>X5</td>
              <td>X6</td>
              <td>X7</td>
              <td>X8</td>
              <td>X9</td>
              <td>X10</td>
              <td>Y1</td>
              <td>Y2</td>
              <td>Y3</td>
              <td>Y5</td>
              <td>Y4</td>
              <td>Y6</td>
              <td>Y7</td>
              <td>Y8</td>
              <td>Y9</td>
              <td>Y10</td>
              <td>Palletgroup</td>
              <td>Diameter</td>
              <td>Prioriteetti</td>
              <td>X</td>
              <td>Y</td>
              <td>X</td>
              <td>Y</td>
              <td>PR1_X</td>
              <td>PR1_Y</td>
              <td>PR1_DX</td>
              <td>PR1_DY</td>
              <td>PR2_X</td>
              <td>PR2_Y</td>
              <td>PR1_DX</td>
              <td>PR2_DY</td>
              <td>PR3_X</td>
              <td>PR3_Y</td>
              <td>PR3_DX</td>
              <td>PR3_DY</td>
              <td>PR4_X</td>
              <td>PR4_Y</td>
              <td>PR4_DX</td>
              <td>PR4_DY</td>
              <td>PF1_X</td>
              <td>PF1_Y</td>
              <td>PF1_DX</td>
              <td>PF1_DY</td>
              <td>PF2_X</td>
              <td>PF2_Y</td>
              <td>PF2_DX</td>
              <td>PF2_DY</td>
              <td>CH 0=OFF 1= ON</td>
              <td>Y Vasen</td>
              <td>Y oikea</td>
              <td>Y Vasen</td>
              <td>Y oikea</td>
              <td>X ala</td>
              <td>x ylä</td>
              <td>X ala</td>
              <td>X ylä</td>
              <td>VH1_X</td>
              <td>VH1_Y</td>
              <td>VH1_L</td>
              <td>VH1_KPL</td>
              <td>VH1_K</td>
              <td>Asiakas</td>
              <td>Tarra</td>
              <td>Nimi 2</td>
              <td>Asennus</td>
              <td>Työstöt</td>
              <td>MPR</td>
              <td>Type (drawing)</td>
              <td>Thickness</td>
              <td>Structure</td>
              <td>Plus</td>
              <td>AR Edge 1</td>
              <td>YR Edge 1</td>
              <td>VR Edge 1</td>
              <td>OR Edge 1</td>
              <td>AR Edge 2</td>
              <td>YR Edge 2</td>
              <td>VR Edge 2</td>
              <td>OR Edge 2</td>
              <td>AR Trim</td>
              <td>YR Trim</td>
              <td>VR Trim</td>
              <td>OR Trim</td>
              <td>Yhdistä Xx-XX</td>
              <td>Yhdistä Yx-YX</td>
            </tr>
          </tbody>
        </table>

        <table class="projectrangat prthree_sheet_item hidden">
          <tbody class="projectrangat__tbody">
            <tr class="headingrow">
              <td>Rivinumero</td>
              <td>Rangan tyyppi</td>
              <td>Tilauskoodi</td>
              <td>Pituus</td>
              <td>KPL</td>
              <td>MATERIAALI</td>
              <td>PAKSUUS</td>
              <td>LAATU</td>
              <td>Väri nimi</td>
              <td>NCS code</td>
              <td>Tilattu PVM</td>
              <td>STATUS</td>
              <td>Asiakas</td>
              <td>Projekti</td>
              <td>Osoite</td>
              <td>Palletgroup</td>
              <td>Asunto Nimi 1</td>
              <td>Nimi 2</td>
              <td>Työstöt </td>
              <td>Asennus</td>
            </tr>
          </tbody>
        </table>

        <table class="projectlistat prthree_sheet_item hidden">
          <tbody class="projectlistat__tbody">
            <tr class="headingrow">
              <td>Rivinumero</td>
              <td>Rangan tyyppi</td>
              <td>Tilauskoodi</td>
              <td>Pituus</td>
              <td>KPL</td>
              <td>MATERIAALI</td>
              <td>PAKSUUS</td>
              <td>LAATU</td>
              <td>Väri nimi</td>
              <td>NCS code</td>
              <td>Tilattu PVM</td>
              <td>STATUS</td>
              <td>Asiakas</td>
              <td>Projekti</td>
              <td>Osoite</td>
              <td>Palletgroup</td>
              <td>Asunto Nimi 1</td>
              <td>Nimi 2</td>
              <td>Työstöt </td>
              <td>Asennus</td>
            </tr>
          </tbody>
        </table>


        <div class="row excel_tilauksetrow">
          <div class="get_excel_btn get_projekti_excel col-6" onclick="lataa_projektiexcel();">Hyväksy rivit ja lataa Excel</div>
          <div class="get_excel_btn get_projekti_excel col-6 yellowbtn" onclick="lataa_projektiexcel('osittainen');">Hyväksy rivit ja lataa tilaamatta olevat</div>
        </div>

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

$usr = $_GET["user"];

$usr_role = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr'; ");
$usr_role = mysqli_fetch_all($usr_role)[0];

$usr_role = $usr_role[3];

if(strtolower($usr_role) == "kommentointi") {
  echo "<style>
  .house__intro .lineinput {
    pointer-events:none;
  }
  #types {
    display: none;
  }

  .house__parentrow {
    align-items: unset;
  }
  </style>";
}

if($remove_overflowY === true) {
  echo "<style>
    #project_start .rappus {
      overflow-y: visible;
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
<dialog class="dialog" id="project_files_dialog">
  <div class="dialog_container">
    <div class="form">
      <button class="close_dialog" id="close_project_files_dialog">x</button>
      <div class="project_files_empty">No files</div>
      <div class="preview_files"></div>
    </div>
  </div>
</dialog>
<dialog class="dialog" id="send_email_dialog">
    <div class="dialog_container">
        <div class="form">
            <button class="close_dialog" id="close_send_email_dialog">x</button>
            <div class="row dialog_firstrow">
              <h2>Presetit</h2>
              <div id="email_type_presets" class="presets">
                <?php
                  $presets = mysqli_query($db, "SELECT * from `message_types`")->fetch_all(MYSQLI_ASSOC);
                  foreach ($presets as $preset) {
                ?>
                <div class="toggling_preset" data-show="<?= $preset['id'] ?>"><img src="<?= $preset['svg_adress'] ?>"><?= $preset['name'] ?></div>
                <?php } ?>
              </div>

            </div>
            <div id="email_presets" class="presets">
                <?php
                  $presets = mysqli_query($db, "SELECT * from `message_templates`")->fetch_all(MYSQLI_ASSOC);
                  foreach ($presets as $preset) {
                ?>
                <div class="preset " data-status_of_link="<?= $preset['status_of_link'] ?>"  data-identifiction="<?= $preset['id'] ?>" data-type="<?= $preset['preset_type'] ?>" data-title="<?= $preset['subject'] ?>" data-message="<?= $preset['message'] ?>"><?= $preset['name'] ?></div>
                <?php } ?>
              </div>
            <div class="preset_is_ok">
              Presetin muokkaus valmis
            </div>
            <label class="row">
                <span><b>Aihe</b></span>
                <input type="text" class="title">
            </label>
            <label>
                <textarea class="message" rows="4"></textarea>
            </label>
            <div class="type_select">
                <div class="type" data-type="myyja">
                    <span>Myyjä</span>
                </div>
                <div class="type" data-type="tilaaja">
                    <span>Tilaaja</span>
                </div>
                <div class="type" data-type="hankkeen_johtaja">
                    <span>Hankkeen Johtaja</span>
                </div>
                <div class="type" data-type="asukas">
                    <span>Asukas</span>
                </div>
                <div class="type" data-type="osakas">
                    <span>Osakas</span>
                </div>
                <div class="type" data-type="omistaja">
                    <span>Omistaja</span>
                </div>
              </div>
              <div class="secondtype_select">
              <?php
                $prid = $_GET["id"];
                $users = mysqli_query($db, "SELECT * from `users` WHERE `role`='kommentointi'")->fetch_all(MYSQLI_ASSOC);
                $a_users = mysqli_query($db, "SELECT * from `addedusers` WHERE `project_id`='$prid'")->fetch_all(MYSQLI_ASSOC);
                foreach ($users as $u) {
                  foreach ($a_users as $a_u) {
                    if($u['username'] === $a_u['username'] && $u['username'] !== "tyonjohto") {

                      echo '
                        <div class="type" data-type="'.$u['email'].'" data-email="'.$u['email'].'">
                            <span>'.$u['username'].'</span>
                        </div>';
                        break;
                    }
                  }
                }
              ?>
            </div>
            <input type="file" class="comment__files" name="comment__files" multiple>
            <input type="hidden" class="preset_name">
            <div class="preview_files"></div>
            <div class="tables">
                <table class="project_contacts"></table>
                <table class="project_workers" style="display: none;">
                  <?php
                    $prid = $_GET["id"];
                    $users = mysqli_query($db, "SELECT * from `users` WHERE `role`='kommentointi'")->fetch_all(MYSQLI_ASSOC);
                    $a_users = mysqli_query($db, "SELECT * from `addedusers` WHERE `project_id`='$prid'")->fetch_all(MYSQLI_ASSOC);
                    foreach ($users as $u) {
                      foreach ($a_users as $a_u) {
                        if($u['username'] === $a_u['username'] && $u['username'] !== "tyonjohto") {

                          echo '
                            <tr>
                                <td>'.$u['username'].'</td>
                                <td>'.$u['phone'].'</td>
                                <td class="owner_type email">'.$u['email'].'</td>
                                <td>'.$u['role'].'</td>
                            </tr>';
                            break;
                        }
                      }
                    }
                  ?>
                </table>
                <h3>Asukkaat Yleinen</h3>
                <table class="without_phone"></table>
                <h3>Asukkaat Tiedot</h3>
                <table class="with_phone"></table>
                <h3>Omistajat</h3>
                <table class="owner"></table>
            </div>
            <div href="#" id="send_email" target="_blank" class="send_email_button">Tee luonnos</div>
        </div>
    </div>
</dialog>

<div id="send_email_popup">
    <button id="show_send_email_dialog">Lähetä sähköpostia asukkaille</button>
</div>
