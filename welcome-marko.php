<?php
// Initialize the session
session_start();

include('vendor/config.php');

// Check if the user is logged in, if not then redirect him to login page


if(!isset($_SESSION["role"]) || $_SESSION["role"] != 'admin'){
  header("location: login.php");
  exit;
}
?>

<?php include('./header.php') ?>
<style>
  main {
    display: none;
  }

  hr {
    margin: 60px 0 20px 0;
  }
</style>
<section id="welcome">
  <h1>Pääkäyttäjän asetukset</h1>
  <div class="welcome__btns">
    <a href="reset-password.php" class="btn btn-warning">Nollaa salasana</a>
    <a href="logout.php" class="btn btn-danger ml-3">Kirjaudu ulos</a>
  </div>

  <div class="row">
    <input type="hidden" id="adminpreset__current_type">
    <fieldset class="adminpreset_settings">
      <?php
        $s_data = mysqli_query($db, "SELECT * FROM `settings__templates`");
        $s_da = mysqli_fetch_all($s_data);
        $s_data = $s_da;        
        
        foreach ($s_data as $key => $s) {
          echo '
            <input name="admin__presets" type="radio" class="tmpbtn" value="'.$s[1].'" id="template-button-'.$s[1].'" data-letterid="'. $s[0] .'">
            <label onclick="preset_id=' . $s[0] .';s_change_malli(`' . $s[1] . '`,`' . $s[0] .'`);" for="template-button-'.$s[1].'" data-letterid="'. $s[0] .'">'.$s[1].'</label>';
        }

        

      ?>
    </fieldset>
    <div class="admin_setting" onclick="s_newmalli();">Uusi as. presetti</div>
  </div>
  

</section>

<hr>

<section id="selection">
  <div class="container">
    <div class="row">
      <div class="tabs">
        <ul>
         
          <li class="tabs__btn active"  onclick="indentnavigation__btns(tabs_btns_indent[0]);">Mittaeditorin asetukset</li>
          <li class="tabs__btn">Projektit</li>
          <li class="tabs__btn">Käyttäjät</li>
          <li class="tabs__btn">Järjestelmät</li>
          <li class="tabs__btn" onclick="indentnavigation__btns(document.querySelector('#first_special_intent'));">Viestipohjat</li>
        </ul>
      </div>
    </div>
    <!-- <section class="tabs__target" data-id="0">
      <b style="color: red; font-weight: bold">PROJEKTI EDITORIN ASETUKSET EI SPECSATTU</b>
      <div class="row">
        <ul class="tabs__target_indentrow">
          <li class="tabs__btn_indent" data-toid="0_1">Perusasetukset</li>
          <li class="tabs__btn_indent" data-toid="0_2">Projektikohtaiset asetukset</li>
        </ul>
        <div class="tabs__target_indent" data-id="0_1">

        </div>
        <div class="tabs__target_indent" data-id="0_2">

        </div>
      </div>
    </section> -->
    <section class="tabs__target" data-id="1">
      <div class="row">
        <ul class="tabs__target_indentrow">
          <li class="tabs__btn_indent active" data-toid="1_1">Levyt (Pintamateriaalit)</li>
          <li class="tabs__btn_indent" data-toid="1_2">Ladonta</li>
          <li class="tabs__btn_indent" data-toid="1_3">Saumat</li>
          <li class="tabs__btn_indent" data-toid="1_4">Rangat</li>
          <li class="tabs__btn_indent" data-toid="1_5">Listat</li>
          <li class="tabs__btn_indent" data-toid="1_6">Origo</li>
          <li class="tabs__btn_indent" data-toid="1_7">Aukot</li>
          <li class="tabs__btn_indent" data-toid="1_8">Läpiviennit</li>

          <!-- <li class="col-6 tabs__btn_indent active" data-toid="1_1">Origo</li>
          <li class="col-6 tabs__btn_indent" data-toid="1_2">Aukot</li>
          <li class="col-6 tabs__btn_indent" data-toid="1_3">Läpiviennit</li>
          <li class="col-6 tabs__btn_indent" data-toid="1_4">Saumat + Ladonta</li>
          <li class="col-6 tabs__btn_indent" data-toid="1_5">Rangat + Listat</li> -->
        </ul>
        <div class="tabs__target_indent tabs__target_table" data-id="1_1" id="materials">
          <table>
            <tbody class="materials__tbody">						
              <tr class="headingrow">
                <td>Käytössä</td>
                <td>Materiaalikoodi</td>
                <td>Pituus (Y)</td>
                <td>Leveys (X)</td>
                <td>Aihiopituus (Y)</td>
                <td>Aihioleveys (X)</td>
                <td>Paksuus</td>
                <td>Kuvio</td>
                <td>Kuva</td>
              </tr>
              <?php
              ?>
            </tbody>
          </table>

          <div class="start_btn" onclick="appendnewmaterial();">Lisää uusi materiaali</div>

        </div>
        <div class="tabs__target_indent" data-id="1_2">
          <section>
            <div class="row">
              <div class="col-6">
                <h4>Saumoitus</h4>
                <fieldset style="flex-direction: column;display: flex;" class="saumoitus__inputs">
                  <input type="radio" id="saumoitus__sauma_one" name="sauma__saumoitus_x" onclick="save_saumakulku();saumoitus__examplephoto();this.checked ? this.value = `1` : this.value = `0`;" onfocus="document.getElementById('saumoitus__sauma_two').checked = false;" value="0">
                  <label for="saumoitus__sauma_one">Pystysaumat aukkojen yli</label>

                  <input type="radio" id="saumoitus__sauma_two" name="sauma__saumoitus_x" onclick="save_saumakulku();saumoitus__examplephoto();this.checked ? this.value = `1` : this.value = `0`;" onfocus="document.getElementById('saumoitus__sauma_one').checked = false;" value="1">
                  <label for="saumoitus__sauma_two">Pystysaumat aukkojen mukaan </label>
                </fieldset>
                <fieldset style="flex-direction: column;display: flex;" class="saumoitus__inputs">
                  <input type="radio" id="saumoitus__sauma_one_v" name="sauma__saumoitus_y" onclick="save_saumakulku();saumoitus__examplephoto();this.checked ? this.value = `1` : this.value = `0`;" onfocus="document.getElementById('saumoitus__sauma_three').checked = false;" value="0" >
                  <label for="saumoitus__sauma_one_v">Vaakasaumat aukkojen yli</label>

                  <input type="radio" id="saumoitus__sauma_three" name="sauma__saumoitus_y" onclick="save_saumakulku();saumoitus__examplephoto();this.checked ? this.value = `1` : this.value = `0`;" onfocus="document.getElementById('saumoitus__sauma_one_v').checked = false;" value="1" >
                  <label for="saumoitus__sauma_three">Vaakasaumat aukkojen mukaan</label>
                </fieldset>
              </div>
              <div class="col-6">
                <h4>Rakennekuva</h4>
                <img src="/img/saumoitus/s1.jpg" id="sauma__saumoitus_photo" style="max-width: 100%;">
              </div>
            </div>
          </section>
          <section>
            <h4>Levytyksen suunta</h4>
            <fieldset>
              <input type="radio" name="s_saumasuunta" id="settings__sauma_pysty" onclick="saumoitus__examplephoto();save_saumasuunta(); this.checked ? this.value = `levytys_pystyyn` : this.value = ``;" value="<?= $levytys_pystyyn ?>" <?= $levytys_pystyyn_checked ?>>
              <label for="settings__sauma_pysty">Levytys pystyyn</label>
              <input type="radio" name="s_saumasuunta" id="settings__sauma_vaaka" onclick="saumoitus__examplephoto();save_saumasuunta(); this.checked ? this.value = `levytys_vaakaan` : this.value = ``;" value="<?= $levytys_vaakaan ?>" <?= $levytys_vaakaan_checked ?>>
              <label for="settings__sauma_vaaka">Levytys vaakaan</label>
            </fieldset>
          </section>
          <section>
            <h4>Levyn vajaus</h4>
            
            <fieldset>
              <input type="radio" id="settings__saumahanta-oik" name="sauma__xtype" onclick="saumoitus__examplephoto();save_saumatyyppi();" value="<?= $sauma__xtype ?>" <?= $x_oik ?>>
              <label for="settings__saumahanta-oik">Vajaa levy oikealle</label>
              <input type="radio" id="settings__saumahanta-vas" name="sauma__xtype" onclick="saumoitus__examplephoto();save_saumatyyppi();" value="<?= $sauma__xtype ?>" <?= $x_vas ?>>
              <label for="settings__saumahanta-vas">Vajaa levy vasemalle</label>
              <input type="radio" id="settings__saumahanta-tasoitus" name="sauma__xtype" onclick="saumoitus__examplephoto();save_saumatyyppi();" value="<?= $sauma__xtype ?>" <?= $x_tasoitus ?>>
              <label for="settings__saumahanta-tasoitus">Tasaleveys</label>
            </fieldset>
            <fieldset>
              <input type="radio" id="settings__saumahanta-yla" name="sauma__ytype" onclick="saumoitus__examplephoto();save_saumatyyppi();" value="<?= $sauma__ytype ?>" <?= $x_yla ?>>
              <label for="settings__saumahanta-yla">Vajaa levy ylös</label>
              <input type="radio" id="settings__saumahanta-ala" name="sauma__ytype" onclick="saumoitus__examplephoto();save_saumatyyppi();" value="<?= $sauma__ytype ?>" <?= $x_ala ?>>
              <label for="settings__saumahanta-ala">Vajaa levy alas</label>
              <input type="radio" id="settings__saumahanta-vaakatasoitus" name="sauma__ytype" onclick="saumoitus__examplephoto();save_saumatyyppi();" value="<?= $sauma__ytype ?>" <?= $x_vaakatasoitus ?>>
              <label for="settings__saumahanta-vaakatasoitus">Tasakorkeus</label>
            </fieldset>
          </section>
        </div>
        <div class="tabs__target_indent" data-id="1_3">
          <section>
            <h4>
              Pystysaumojen asetukset
            </h4>
            <table>
              <tbody class="saumapysty__tbody tabs__target_table">			
                <tr class="headingrow">
                  <td>ON/OFF</td>
                  <td>Nimi</td>
                  <td>Paksuus</td>
                  <td>Lista</td>
                  <td>Laatu</td>
                  
                </tr>
              </tbody>
            </table>
            <div class="start_btn" onclick="appendnewpystysaumasetting();">
              Lisää uusi rivi
            </div>
          </section>
          <section>
            <h4>
              Vaakasaumojen asetukset
            </h4>
            <table>
              <tbody class="saumavaaka__tbody tabs__target_table">			
                <tr class="headingrow">
                  <td>ON/OFF</td>
                  <td>Nimi</td>
                  <td>Paksuus</td>
                  <td>Materiaali</td>
                  <td>Laatu</td>                  
                </tr>
              </tbody>
            </table>
            <div class="start_btn" onclick="appendnewvaakasaumasetting();">
              Lisää uusi rivi
            </div>
          </section>
        </div>
        <div class="tabs__target_indent rankatable tabs__target_table" data-id="1_4">
          <i>Kaavat: %RLEV% = Rangan Leveys</i>
          <ul class="row">
            <li class="tabs__btn_subindent col-6" data-toid="1_4_1">l2A</li>
            <li class="tabs__btn_subindent col-6" data-toid="1_4_2">l2B</li>
          </ul>
          <div class="tabs__target_subindent" data-id="1_4_1">
            <table>
              <tbody class="ranka__tbody_one">			
                <tr class="headingrow">
                  <td>L2A Rangoitus pystyyn</td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>                  
                </tr>
              </tbody>
            </table>

            <table>
              <tbody class="ranka__tbody_six">			
                <tr class="headingrow">
                  <td>L2A Rangoitus pystyyn</td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>
                </tr>
               
               
              </tbody>
            </table>

            <table>
              <tbody class="ranka__tbody_four">			
                <tr class="headingrow">
                  <td>L2A Rangoitus vaakaan </td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>
                </tr>
                
                
              </tbody>
            </table>

            <table>
              <tbody class="ranka__tbody_eight">			
                <tr class="headingrow">
                  <td>L2A Rangoitus vaakaan</td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>
                </tr>
                
                
              </tbody>
            </table>
          </div>

          <div class="tabs__target_subindent" data-id="1_4_2">
            <table>
              <tbody class="ranka__tbody_two">			
                <tr class="headingrow">
                  <td>L2B Rangoitus pystyyn</td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>
                </tr>
                
                
              </tbody>
            </table>

            <table>
              <tbody class="ranka__tbody_three">			
                <tr class="headingrow">
                  <td>L2B Rangoitus pystyyn</td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>
                </tr>
               
               
              </tbody>
            </table>

            <table>
              <tbody class="ranka__tbody_five">			
                <tr class="headingrow">
                  <td>L2B Rangoitus vaakaan </td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>
                </tr>
                
                
              </tbody>
            </table>

            <table>
              <tbody class="ranka__tbody_seven">			
                <tr class="headingrow">
                  <td>L2B Rangoitus vaakaan</td>
                  <td>Tyyppi</td>
                  <td>Rangan koodin alku</td>
                  <td>Tilauskoodi </td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi </td>
                  <td>NCS code</td>
                  <td>Suunta </td>
                  <td>Lisää / -poista mitasta</td>
                  <td style="width: 150px;">Vähennä mistä</td>
                </tr>
              </tbody>
            </table>
          </div>

          <h2>
            Rankakirjasto
          </h2>
          <table>
            <tbody class="ranka__tbody">						
              <tr class="headingrow">
                <td>On/Off</td>
                <td style="width: 220px">Editorissa</td>
                <td>Rangan koodin alku</td>
                <td>Tilauskoodi</td>
                <td>Materiaali</td>
                <td>Laatu</td>
                <td>Väri nimi </td>
                <td>NCS code</td>
                <td>Rangan Tyyppi </td>
                <td>Kuuluu Sarjaan</td>
                <td>Leveys</td>
                <td>Korkeus</td>
                <td>Kuvalinkki</td>
                <td>Viivat</td>
                <td>Pituus 1</td>
                <td>Pituus 2</td>
                <td>Pituus 3</td>
                <td>Ehdotus pituudesta projektille</td>
              </tr>
            </tbody>
          </table>
          <div class="start_btn" onclick="appendnewrankasetting();">
            Lisää uusi rivi
          </div>
          <datalist id="ranka_list"></datalist>
        </div>
        
        <div class="tabs__target_indent" data-id="1_5">
          <section>
            <h4>
              L2A Rankalistat
            </h4>
            <table>
              <tbody class="listat2a__tbody tabs__target_table">			
                <tr class="headingrow">
                  <td>ON/OFF</td>
                  <td>Tyyppi</td>
                  <td>Suunta</td>
                  <td>Lisää / -poista mitasta</td>
                  <td>Vähennä mistä</td>
                  <td>Listan tyyppi</td>
                  <td>Tilauskoodi</td>
                  <td>Materiaali</td>
                  <td>Paksuus</td>
                  <td>Laatu</td>
                  <td>Väri nimi</td>
                  <td>NCS code</td>
                  <td>Valinta</td>
                </tr>
              </tbody>
            </table>
            <div class="start_btn" onclick="appendnewpystylistasetting();">
              Lisää uusi rivi
            </div>
          </section>
          <section>
            <h4>
              L2B Rankalistat
            </h4>
            <table>
              <tbody class="listat2b__tbody tabs__target_table">			
                <tr class="headingrow">
                  <td>ON/OFF</td>
                  <td>Nimi</td>
                  <td>VALINTA</td>
                  <td>Valintaväli</td>
                  <td>Suunta</td>
                </tr>
              </tbody>
            </table>
            <div class="start_btn" onclick="appendnewvaakalistasetting();">
              Lisää uusi rivi
            </div>
          </section>
          <section>
            <h4>
              Listataulu
            </h4>
            <table>
              <tbody class="listat__tbody tabs__target_table">			
                <tr class="headingrow">
                  <td>Pos NRO</td>
                  <td>NIMI</td>
                  <td>Listan tyyppi</td>
                  <td>Tilauskoodi</td>
                  <td>MATERIAALI</td>
                  <td>LAATU</td>
                  <td>Väri nimi</td>
                  <td>NCS code</td>
                  <td>RANGAN TYYPPI</td>
                  <td>KUULUU SARJAAN</td>
                  <td>LEVEYS</td>
                  <td>KORKEUS</td>
                  <td>KUVALINKKI</td>
                  <td>VIIVAT</td>
                  <td>PITUUS 1</td>
                  <td>PITUUS 2</td>
                  <td>PITUUS 3</td>
                  <td>EHDOTUS PITUUDESTA PROJEKTILLE</td>
                </tr>
              </tbody>
            </table>
            <div class="start_btn" onclick="appendnewlistasetting();">
              Lisää uusi rivi
            </div>
          </section>
        </div>
        <div class="tabs__target_indent tabs__target_table" data-id="1_6">
          <h2>Levytyksen reunat</h2>
          <i>Kaavat: %LSAU% = Sauman Leveys</i>

          <table>
            <tbody class="levytysreunat__tbody">
              <tr class="headingrow">
                <td>On/Off</td>
                
                <td style="width: 200px;">Selite</td>
                <td>Min</td>
                <td>Rangat</td>
                <td>Rangan pituus +</td>
                <td>Rangan laatu</td>
                <td>Listat</td>
                <td>Listan pituus +</td>
                <td>Listan laatu</td>
                
                <td>YR</td>
                <td>AR</td>
                <td>VR</td>
                <td>OR</td>

                <td>Suositeltavat <br> Saumarangat</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tabs__target_indent" data-id="1_7">
          <section id="hole_set">
            
           
            
          </section>
        </div>
        <div class="tabs__target_indent tabs__target_table" data-id="1_8"  id="morehole_set">
          <h2>Reijitys</h2>
          <h6>Tee yli 10000mm2 reijät Framenä. </h6>
          <table>
            <tbody class="reikaframe__tbody">						
              <tr class="headingrow">
                <td>Sarakkeet</td>
                <td>Dustiksi?</td>
              </tr>

            </tbody>
          </table>
          <h2>Reikä asetukset </h2>
          <table>
            <tbody class="lapiviennit__tbody">
              <tr class="headingrow">
                <td>ON/OFF</td>
                <td>Reikätyyppi</td>
                <td>Nimi</td>
                <td>Reikä X</td>
                <td>Reikä Y</td>
                <td>Ensisijaisesti Dustiksi</td>
              </tr>
            </tbody>
          </table>
          <div class="start_btn" onclick="appendnewlvitem();">
            Lisää uusi läpivienti
          </div>
        </div>
        
      </div>
    </section>
    <section class="tabs__target" data-id="2">        
      <a href="/new-project.php" class="start_btn"  target="_blank">Aloita uusi projekti</a>
      <div class="row">
        <table class="a_projectslist adminlist">
          <tbody>
            <tr class="headingrow">
              <td>Nimilinkki</td>
              <td>Lisätyt ihmiset</td>
              <td>Myyjä</td>
              <td>Valitse presetti</td>
            </tr>
            <?php
              $projects = mysqli_query($db, "SELECT * FROM `projects`");
              $projects = mysqli_fetch_all($projects);
              $prjct_array = $projects;

              
      
              
      

              

              foreach($prjct_array as $x => $x_value) {

                $count = 0;

                $s_data = mysqli_query($db, "SELECT * FROM `settings__templates`");
                $s_da = mysqli_fetch_all($s_data);
                $s_data = $s_da;      

                $preset_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id`='$x_value[0]' AND `meta_key`='s_settings'");
                $preset_da = mysqli_fetch_all($preset_data);


                $preset__options = "";

                foreach ($s_data as $key => $s) {
                  $count++;
  
                  if($preset_da[0][3] == $s[1]) {
                    $preset__options .= '<input name="admin__presets_'.$x_value[0].'" type="radio" class="tmpbtn" value="'.$s[1].'" id="projectpreset-button-'.$x_value[0].'_'.$count.'" checked>
                    <label onclick="s_change_preset(`' . $x_value[0] .'`,`'.$s[1].'`);" for="projectpreset-button-'.$x_value[0].'_'.$count.'">'.$s[1].'</label>';
                  }
                  else {
                    $preset__options .= '<input name="admin__presets_'.$x_value[0].'" type="radio" class="tmpbtn" value="'.$s[1].'" id="projectpreset-button-'.$x_value[0].'_'.$count.'">
                    <label onclick="s_change_preset(`' . $x_value[0] .'`,`'.$s[1].'`);" for="projectpreset-button-'.$x_value[0].'_'.$count.'">'.$s[1].'</label>';
                  }
                }
                
                $pr_name = $x_value[1];
                $added_users = mysqli_query($db, "SELECT * FROM `addedusers` WHERE `project_id`='$x_value[0]'");
                $added_users = mysqli_fetch_all($added_users);
                echo '<tr data-prid="'.$x_value[0].'">';
                $usrlist = "";
                $usrlist2 = "";
                $current__seller = "";
                foreach($added_users as $a => $aval) {
                  if(strlen($aval[1]) > 2) {
                    $usrlist .= "<li>" . $aval[1] ."<b onclick='admin__delete_addeduser(this);'>x</b></li>";
                    
                    if(strtolower($x_value[5]) == strtolower($aval[1])) {
                      $usrlist2 .= "<option selected>".$aval[1]."</option>";
                      $current__seller = $aval[1];
                    }
                    else {
                      $usrlist2 .= "<option>".$aval[1]."</option>";
                    }
                    $usrlist2 .= "<li>" . $aval[1] ."<b onclick='admin__delete_addeduser(this);'>x</b></li>";
                  }
                  
                }

                echo '<td><a href="/post.php?id='.$x_value[0].'&user=valinta" target="_blank">'.$x_value[1].'</a></td>';
                echo '<td><ul>'.$usrlist.'</ul></td>';
                echo '<td><select data-prid="'.$x_value[0].'" onchange="this.parentElement.querySelector(`input`).value = this.value;admin__changeprusr(this);">'.$usrlist2.'<input type="hidden" value="'.$current__seller.'" hidden></select></td>';
                echo '<td><fieldset>'.$preset__options.'</fieldset></td>';
                echo '</tr>';
              }    

              
            ?>
          </tbody>
          
        </table>
      </div>
    </section>
    <section class="tabs__target" data-id="3">
      <table class="a_userlist adminlist">
          <tbody class="tabs__target_table">
            <tr class="headingrow">
              <td>Käyttäjänimi</td>
              <td>Oletusrooli</td>
              <td>Saako nähdä tiedot?</td>
              <td>Näkyy kaikille</td>
              <td>Puh</td>
              <td style="width: 145px;">Email</td>
              <td>Yritys</td>
            </tr>
            <?php
              $users = mysqli_query($db, "SELECT * FROM `users` WHERE `role`!='admin' ");
              $users = mysqli_fetch_all($users);
              $usr_array = $users;
              $count=0;

              

              
              foreach($usr_array as $x => $x_value) {
                $count++;
                $roleselection_input = "<select onchange='this.parentElement.querySelector(`input`).value = this.value; admin__saveusers();'>";

                if($x_value[3] == 'mittaus') {
                  $roleselection_input .= "<option selected>Mittaus</option>";
                  $current_role = 'mittaus';
                }
                else {
                  $roleselection_input .= "<option>Mittaus</option>";
                }
                if($x_value[3] == 'kommentointi') {
                  $roleselection_input .= "<option selected>Kommentointi</option>";
                  $current_role = 'kommentointi';
                }
                else {
                  $roleselection_input .= "<option>Kommentointi</option>";
                }
                if($x_value[3] == 'saaja') {
                  $roleselection_input .= "<option selected>Saaja</option>";
                  $current_role = 'saaja';
                }
                else {
                  $roleselection_input .= "<option>Saaja</option>";
                }

                $roleselection_input .= "</select>";

                if($x_value[4] == '1') {
                  $checked = 'checked';
                }
                else {
                  $checked = '';
                }

                if($x_value[5] == '1') {
                  $checked2 = 'checked';
                }
                else {
                  $checked2 = '';
                }

                echo '<tr>';
                $pr_name = $x_value[1];
                
                echo '
                <td><input type="hidden" value="'.$x_value[0].'" hidden><input type="text" value="'.$x_value[1].'" class="lineinput" oninput="admin__saveusers();"></td> 
                <td>'.$roleselection_input.'<input type="hidden" value="'.$current_role.'" hidden></td>
                <td>
                  <input type="checkbox" name="admin_system" value="'.$x_value[4].'" onclick="this.checked ? this.value = `1` : this.value = ``;admin__saveusers();"  id="usrperm1_'.$count.'" '.$checked.'>
                  <label for="usrperm1_'.$count.'"></label>
                </td>
                <td>
                  <input type="checkbox" name="admin_system" value="'.$x_value[5].'" onclick="this.checked ? this.value = `1` : this.value = ``;admin__saveusers();"  id="usrperm2_'.$count.'" '.$checked2.'>
                  <label for="usrperm2_'.$count.'"></label>
                </td>
                <td>
                  <input type="text" value="'.$x_value[6].'" class="lineinput" oninput="admin__saveusers();">
                </td>
                <td>
                  <input type="text" value="'.$x_value[7].'" class="lineinput" oninput="admin__saveusers();">
                </td>
                <td>
                  <input type="text" value="'.$x_value[8].'" class="lineinput" oninput="admin__saveusers();">
                </td>';
                echo '</tr>';
              }    

              
            ?>
          </tbody>
          
        </table>
    </section>
    <section class="tabs__target tabs__target_table" data-id="4">
      <table>
        <tbody class="systems__tbody">
          <tr class="headingrow">
            <td>On/Off</td>
            <td>Levyjärjestelmä</td>
            <td>Type (drawing)</td>
            <td style="width: 250px;">Selite</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section  data-id="6" class="tabs__target" onclick="">
      <div class="container" >
        <h4>Viestipohjat</h4>

        <div class="row">
          <ul class="tabs__target_indentrow">
            
            <li class="tabs__btn_indent tabs__btn_viestit active" data-toid="6_1" id="first_special_intent">Projektin luonti (hankkeen osallistujat)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_2">Uuden käyttäjän luonti (Projektin luonti uusi käyttäjä)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_3">Lähetä kommenttien muokkaukset (t.johto)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_4">Lähetä laskutetut ostot (t.johto)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_5">"Poistettu kuittaamatta"-viesti (t.johto)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_6">Avoimet työt (t.tekijä)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_7">Kommentit työntekijöittäin-raportti (t.johto)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_8">Kommentit hankeittain-raportti (t.johto)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_9">Kommentin kuittaus (t.johto)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_10">Tilauksen lisäys (t.johto + saaja)</li>
            <li class="tabs__btn_indent tabs__btn_viestit" data-toid="6_11">Kommentin lisäys (t.johto)</li>
          </ul>          
          <section class="tabs__target_indent tabs__target_viestit active" data-id="6_1">
            <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='project_creation'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <i>*saajan sähköposti*</i> </label>
              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *HANKKEEN NIMI* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
            <div class="tabs__target_textarea">
            <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[0]; ?>"> <b> *nimi* </b>! <br>
            <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[1]; ?>"> <b> *myyjän nimi* </b> <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[2]; ?>"><br>
            <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[3]; ?>"> <b> *lista henkilöistä* </b> <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[4]; ?>"><br>
            <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[5]; ?>"> <b> *hankkeen nimi* </b> <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[6]; ?>"><br>
            <textarea cols="30" rows="10" value="<?= $m_messages[7]; ?>" oninput="this.innerHTML = this.value; save__messagesettings()"></textarea>
            </div>
            
          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='project_newuser'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_2">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <i>*saajan sähköposti*</i> </label>
              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *HANKKEEN NIMI* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
            <div class="tabs__target_textarea">
              <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[0]; ?>"> <b> *nimi* </b>! <input value="<?= $m_messages[1]; ?>"> <br>
              <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[2]; ?>"> <b> *nimi* </b> <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[3]; ?>"> <br>
              <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[4]; ?>"> <b> *salasana* </b><input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[5]; ?>">  <br>
              <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[6]; ?>"> <b> *puhelin* </b><input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[7]; ?>">  <br>
              <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[8]; ?>"> <b> *user rooli* </b> <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[9]; ?>"> <br>
              <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[10]; ?>"> <b> *luonti pvm* </b> <input type="text" oninput="save__messagesettings()"  value="<?= $m_messages[11]; ?>"> <br>
              <textarea cols="30" rows="10" value="<?= $m_messages[12]; ?>" oninput="this.innerHTML = this.value; save__messagesettings()"></textarea>
            </div>
          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='project_sendedits'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_3">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to" value="<?= $m_headers[1]; ?>"> </label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>

              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *PVM* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
            <textarea cols="30" rows="10" value="<?= $m_messages[0]; ?>" oninput="this.innerHTML = this.value; save__messagesettings()"></textarea>

          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='sent_purchases'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_4">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to" value="<?= $m_headers[1]; ?>"> </label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>

              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *hankken nimi* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
            <b>*Lista laskutettavista ostoista*</b>
          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='deleted_without_consent'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_5">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to"  value="<?= $m_headers[1]; ?>"></label><br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>
              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *hankkeen nimi* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
            <b>*poistetun kommentin specsit*</b>

          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='comments_toworkers'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_6">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <i>*saajan sähköposti*</i> </label>
              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *Tekijän nimi + PVM* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
            <i>(viesti, joka tulee ennen tikettilistaa jokaiselle tekijälle):</i>
            <textarea cols="30" rows="10" value="" oninput="this.innerHTML = this.value; save__messagesettings()"></textarea>
            <b>*Tikettitaulukko*</b>
          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='reppanareport'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_7">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to" value="<?= $m_headers[1]; ?>"> </label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>

              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *pvm* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='projectreport'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>

          <section class="tabs__target_indent tabs__target_viestit" data-id="6_8">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to" value="<?= $m_headers[1]; ?>"> </label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>

              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *pvm* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='comment_sending_to_tyonjohto'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>

          <section class="tabs__target_indent tabs__target_viestit" data-id="6_9">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to" value="<?= $m_headers[1]; ?>"> </label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>

              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *hankkeen nimi* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>
            <b>*Kuitatun kommentin specsit*</b>
          </section>

          
          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='tilauksen_lisays'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_10">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to" value="<?= $m_headers[1]; ?>"> </label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>
              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[0]; ?>"></label> *hankkeen nimi* <input type="text" oninput="save__messagesettings()"  value="<?= $m_subject[1]; ?>"></label> </h6>

          </section>

          <?php 
              $m_data = mysqli_query($db, "SELECT * FROM `mail_templates` WHERE `messagename`='kommentin_lisays'");
              $m_da = mysqli_fetch_all($m_data);
              $m_data = $m_da[0];

              $m_headers = explode("~~~~", $m_data[1]);
              $m_subject = explode("~~~~", $m_data[3]);
              $m_messages = explode("~~~~", $m_data[4]);


              // print_r($m_headers);
              // print_r($m_subject);
              // print_r($m_messages);
            ?>
          <section class="tabs__target_indent tabs__target_viestit" data-id="6_11">
            <h4 class="tabs__target_title"></h4>
            <div class="row tabs__target_receipents">
              <div class="col-6">
                <label>Keneltä: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who" value="<?= $m_headers[0]; ?>"></label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_who_name" value="<?= $m_headers[2]; ?>"></label> <br>
                <label>Sähköposti: <input type="password" class="tabs__target_who_pass" value="<?= $m_headers[3]; ?>"></label> <br>
                <i style="font-size: 11px">(mikä tahansa westface.fi-päätteinen sähköposti)</i>
              </div>
              <div class="col-6">
                <label>Kenelle: <input type="text" oninput="save__messagesettings()"  class="tabs__target_to" value="<?= $m_headers[1]; ?>"> </label> <br>
                <label>Nimi: <input type="text" oninput="save__messagesettings()"  class="tabs__target_toname" value="<?= $m_headers[4]; ?>"> </label> <br>

                <i style="font-size: 11px">+ kommentin saajan sähköposti</i>
              </div>
            </div>
            <h6 class="tabs__target_subject"><label>Aihe: <input type="text" oninput="save__messagesettings()"   value="<?= $m_subject[0]; ?>"></label> *hankkeen nimi* <input type="text" oninput="save__messagesettings()"   value="<?= $m_subject[1]; ?>"></label> </h6>

          </section>
          
            
      </div>
      
  
      </div>
    </section>
  </div>
</section>

<!-- <div class="btn" onclick="save__messagesettings();">Tallenna muutokset</div> -->
<script>
  tabs_btns = document.querySelectorAll(".tabs__btn");
  tabs_targets = document.querySelectorAll(".tabs__target");

  for (let i = 0; i < tabs_btns.length; i++) {
    tabs_btns[i].addEventListener("click", (e) => {
      navigation__btns(tabs_btns[i]);
    });
  }
  function navigation__btns(elem) {
    elemcount = 0;
    for (let i = tabs_btns.length-1; i > -1; i--) {
      tabs_btns[i].classList.remove('active');
      if(tabs_btns[i].innerText == elem.innerText) {
        elemcount = i;
      }
    }
    for (let i = 0; i < tabs_targets.length; i++) {
      tabs_targets[i].classList.remove('active');
      
    }
    elem.classList.add("active");
    tabs_targets[elemcount].classList.add("active");

    

  }


  function save__messagesettings() {
    let tabs_btns = document.querySelectorAll(".tabs__btn_viestit");
    let tabs_targets = document.querySelectorAll(".tabs__target_viestit");
    for (let i = 0; i < tabs_targets.length; i++) {
      message_array_="";
      if(tabs_targets[i].querySelector(".tabs__target_to")) {
        header_array_ = tabs_targets[i].querySelector(".tabs__target_who").value + "~~~~" + tabs_targets[i].querySelector(".tabs__target_to").value+ "~~~~";
      }
      else {
        header_array_ = tabs_targets[i].querySelector(".tabs__target_who").value + "~~~~"+ "~~~~";
      }

      header_array_ += tabs_targets[i].querySelector(".tabs__target_who_name").value + "~~~~";
      header_array_ += tabs_targets[i].querySelector(".tabs__target_who_pass").value + "~~~~";
      if(tabs_targets[i].querySelector(".tabs__target_toname")) {
        header_array_ += tabs_targets[i].querySelector(".tabs__target_toname").value;
      }
      
      
      if(tabs_targets[i].dataset.id == '6_1') {
        messagename_ = "project_creation";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[0].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[1].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[2].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[3].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[4].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[5].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[6].value + "~~~~";
        // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[7].value + "~~~~";
        // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[8].value + "~~~~";
        // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[9].value + "~~~~";
        // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[10].value + "~~~~";
      }
      else if(tabs_targets[i].dataset.id =='6_2') {
        messagename_ = "project_newuser";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[0].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[1].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[2].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[3].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[4].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[5].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[6].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[7].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[8].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[9].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[10].value + "~~~~";
        message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[11].value + "~~~~";

      }
      else if(tabs_targets[i].dataset.id =='6_3') {
        messagename_ = "project_sendedits";
        
      }
      else if(tabs_targets[i].dataset.id =='6_4') {
        messagename_ = "sent_purchases";
      }
      else if(tabs_targets[i].dataset.id =='6_5') {
        messagename_ = "deleted_without_consent";
      }
      else if(tabs_targets[i].dataset.id =='6_6') {
        messagename_ = "comments_toworkers";
      }
      else if(tabs_targets[i].dataset.id =='6_7') {
        messagename_ = "reppanareport";
      }
      else if(tabs_targets[i].dataset.id =='6_8') {
        messagename_ = "projectreport";
      }
      else if(tabs_targets[i].dataset.id =='6_9') {
        messagename_ = "comment_sending_to_tyonjohto";
      }
      else if(tabs_targets[i].dataset.id =='6_10') {
        messagename_ = "tilauksen_lisays";
      }
      else if(tabs_targets[i].dataset.id =='6_11') {
        messagename_ = "kommentin_lisays";
      }
      if(tabs_targets[i].querySelectorAll(".tabs__target_subject input").length == 2) {
        subject_array_ = tabs_targets[i].querySelectorAll(".tabs__target_subject input")[0].value + "~~~~" + tabs_targets[i].querySelectorAll(".tabs__target_subject input")[1].value;
      }
      else {
        subject_array_ = tabs_targets[i].querySelectorAll(".tabs__target_subject input")[0].value + "~~~~";
      }

      if(tabs_targets[i].querySelector("textarea")) {
        message_array_+=tabs_targets[i].querySelector("textarea").value;
      }

      formData = {
        header_array: header_array_,
        subject_array: subject_array_,
        messagename: messagename_,
        message_array: message_array_,
      };
      console.log(formData);
      $.ajax({
        type: "POST",
        url: "vendor/admin__mailedit.php",
        data: formData,
        error: function (jqxhr, status, exception) {
          alert('Tietokantavirhe, soita numeroon +358449782028');
        }
      }).done(function (data) {
        console.log("Piu piu pau pau");

      });

      
    }
    // alert("Tallennettu");
  }

  txt = document.querySelectorAll("textarea");
  for (let i = 0; i < txt.length; i++) {
    txt[i].innerHTML = txt[i].getAttribute("value");
    txt[i].value = txt[i].getAttribute("value");
    
  }


  tabs_btns_indent = document.querySelectorAll(".tabs__btn_indent");
  tabs_targets_indent = document.querySelectorAll(".tabs__target_indent");

  for (let i = 0; i < tabs_btns_indent.length; i++) {
    tabs_btns_indent[i].addEventListener("click", (e) => {
      indentnavigation__btns(tabs_btns_indent[i]);
    });
  }
  tabs_btns_subindent = document.querySelectorAll(".tabs__btn_subindent");
  tabs_targets_subindent = document.querySelectorAll(".tabs__target_subindent");

  for (let i = 0; i < tabs_btns_indent.length; i++) {
    tabs_btns_indent[i].addEventListener("click", (e) => {
      indentnavigation__btns(tabs_btns_indent[i]);
    });
  }
  for (let i = 0; i < tabs_btns_subindent.length; i++) {
    tabs_btns_subindent[i].addEventListener("click", (e) => {
      subindentnavigation__btns(tabs_btns_subindent[i]);
    });
  }
  function navigation__btns(elem) {
    elemcount = 0;
    for (let i = tabs_btns.length-1; i > -1; i--) {
      tabs_btns[i].classList.remove('active');
      if(tabs_btns[i].innerText == elem.innerText) {
        elemcount = i;
      }
    }
    for (let i = 0; i < tabs_targets.length; i++) {
      tabs_targets[i].classList.remove('active');
      
    }
    elem.classList.add("active");
    tabs_targets[elemcount].classList.add("active");

    

  }

  function indentnavigation__btns(elem) {
    elemcount = 0;
    for (let i = tabs_btns_indent.length-1; i > -1; i--) {
      tabs_btns_indent[i].classList.remove('active');
      if(tabs_btns_indent[i].dataset.toid == elem.dataset.id) {
        elemcount = i;
      }
    }
    for (let i = 0; i < tabs_targets_indent.length; i++) {
      tabs_targets_indent[i].classList.remove('active');
      
    }
    elem.classList.add("active");

    b = 0;
    tabs_targets_indent.forEach(element => {
      
      if(element.dataset.id == elem.dataset.toid) {
        elemcount = b;
      }
      b+=1;
    });
   
    tabs_targets_indent[elemcount].classList.add("active");

    

  }
  function subindentnavigation__btns(elem) {
    elemcount = 0;
    
    for (let i = tabs_btns_subindent.length-1; i > -1; i--) {
      tabs_btns_subindent[i].classList.remove('active');
      if(tabs_btns_subindent[i].dataset.toid == elem.dataset.id) {
        elemcount = i;
      }
    }
    for (let i = 0; i < tabs_targets_subindent.length; i++) {
      tabs_targets_subindent[i].classList.remove('active');
      
    }
    elem.classList.add("active");

    b = 0;
    tabs_targets_subindent.forEach(element => {
      
      if(element.dataset.id == elem.dataset.toid) {
        elemcount = b;
      }
      b+=1;
    });
   
    tabs_targets_subindent[elemcount].classList.add("active");

    

  }

  navigation__btns(tabs_btns[0]);
  indentnavigation__btns(tabs_btns_indent[0]);
  subindentnavigation__btns(tabs_btns_subindent[0]);

</script>
<script src="/js/admin.js"  defer></script>

<script>
</script>
<script src="js/jstemplates/mrarko.js"></script>

<?php include('./footer.php') ?>