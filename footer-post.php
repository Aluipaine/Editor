<!-- MAIN FOOTER FILE. CONFIGURING JS SCRIPTS, MODALS AND PRELOADER -->

<div class="recl-container del_from_comments" id="reclamation__popup">
   <div class="modal-background">
      <div class="modal">
         <section>
            <h2>Reklamaatiot ja huomiot</h2>
         </section>
         <section>
            <h4>Huomiot</h4>
            <fieldset>
               <input id="m__a_sahko" name="mitta__huomiot" type="checkbox" value="Sähkö">
               <label for="m__a_sahko">Sähkö</label>
               <input id="m__a_putki" name="mitta__huomiot" type="checkbox" value="Putki">
               <label for="m__a_putki">Putki</label>
               <input id="m__a_tornado" name="mitta__huomiot" type="checkbox" value="Tornado">
               <label for="m__a_tornado">Tornado</label>
            </fieldset>
         </section>
         <section class="comment__section">
            <h4>Lähetä kommentti</h4>
            <textarea name="mittapiste_comment" id="mittapiste_comment" cols="30" rows="10" style="resize: none;"></textarea>
            <div class="row">
               <div class="col-6">
                  <h6>Keneltä</h6>
                  <input name="mittapiste_comment_from" id="mittapiste_comment_from" type="text" value="<?php echo $_GET['user']; ?>">
               </div>
               <div class="col-6">
                  <h6>Kenelle</h6>
                  <input name="mittapiste_comment_to" id="mittapiste_comment_to" type="text">
               </div>
            </div>
         </section>
         <!--  <section class="comment__section">
           <h4>Reklamoitavaa:</h4>
           <textarea name="mittapiste_comment" id="mittapiste_comment" cols="30" rows="10" style="resize: none;"></textarea>
        </section> -->
         <div class="form-group"><input type="checkbox" id="comment__importance"><label for="comment__importance">Onko kriittinen?</label></div>
         <div class="modal_close_btn drawarea__controls_btn" id="" onclick="addproblemstatus(this);">Valmis</div>
      </div>
   </div>
</div>
<?php
$usr = $_GET["user"];

$usr_role = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr'; ");
$usr_role = mysqli_fetch_all($usr_role);

$usr_role = $usr_role[3];

if (isset($usr_role) && $usr_role == 'mittaus') {
} else {
   echo '<script>document.querySelector(".del_from_comments").remove();</script>';
}
?>

<div class="out rankalista_as asetustaulu as-container">
  <div class="modal-background">
    <div class="modal">
        <div class="modal_close_btn" onclick="this.parentElement.parentElement.parentElement.classList.remove('two');this.parentElement.parentElement.parentElement.classList.add('out');"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"/></svg></div>
          <table class="s_rangat">
            <tbody class="ranka__tbody_one l2a_table_pysty ">			
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

          <table class="s_rangat">
            <tbody class="ranka__tbody_six l2a_table_pysty">			
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

          <table class="s_rangat">
            <tbody class="ranka__tbody_four l2a_table_vaaka">			
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

          <table class="s_rangat">
            <tbody class="ranka__tbody_eight l2a_table_vaaka">			
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

          <table class="s_rangat">
            <tbody class="ranka__tbody_two l2b_table_pysty">			
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

          <table class="s_rangat">
            <tbody class="ranka__tbody_three l2b_table_pysty">			
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

          <table class="s_rangat">
            <tbody class="ranka__tbody_five l2b_table_vaaka">			
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

          <table class="s_rangat">
            <tbody class="ranka__tbody_seven l2b_table_vaaka">			
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

          <h4>
            L2A Listojen asetukset
          </h4>
          <table class="s_listat">
            <tbody class="l2a_table listapysty__tbody tabs__target_table">			
              <tr class="headingrow">
                <td>ON/OFF</td>
                <td>Tyyppi</td>
                <td>Suunta</td>
                <td>Lisää / -poista mitasta</td>
                <td>Vähennä mistä</td>
                <td>Listan nimi</td>
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

          <h4>
            L2B Listojen asetukset
          </h4>
          <table class="s_listat">
            <tbody class="l2b_table listavaaka__tbody tabs__target_table">			
              <tr class="headingrow">
                <td>ON/OFF</td>
                <td>Tyyppi</td>
                <td>Suunta</td>
                <td>Lisää / -poista mitasta</td>
                <td>Vähennä mistä</td>
                <td>Listan nimi</td>
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
    </div>
  </div>
</div>



  <!-- canvas -->
<script defer src='/js/p5.min.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.1/xlsx.full.min.js"></script>





<script src='/js/jquery.min.js'></script>
<script defer src='/js/clipboard.min.js'></script>
<!-- Marko new row btn function -->

<!-- TABLE MOD. -->
<script defer src="js/jstemplates/creation.js"></script>

<!-- MARKO -->

<!-- <script defer src="/js/jstemplates/mrarko.js"></script> -->


<!-- 2_1 -->
<script defer src="/js/roller.js"></script>
<script defer src="/js/roller_1.js"></script>
<script defer src="/js/roller_2.js"></script>
<script defer src="/js/roller_3.js"></script>



<!-- MAIN JS FUNCTIONS -->
<script async src="/js/main.js"> </script>

<!-- JS FUNCTIONS FOR PROJECT AND ROOMS -->
<script defer src="/js/jstemplates/creation.js"></script>


<script defer src="/js/jstemplates/0.js"></script>


<!-- JS FUNCTIONS 1.  -->
<script defer src="/js/jstemplates/1.js"></script>

<!-- JS FUNCTIONS 2.  -->
<script defer src="/js/jstemplates/2.js"></script>

<!-- JS FUNCTIONS 3.  -->
<script defer src="/js/jstemplates/3.js"></script>

<!-- JS FUNCTIONS 4.  -->
<script defer src="/js/jstemplates/4.js"></script>

<!-- JS FUNCTIONS 5.  -->
<script defer src="/js/jstemplates/5.js"></script>

<!-- JS FUNCTIONS 6.  -->
<script defer src="/js/jstemplates/6.js"></script>

<!-- JS FUNCTIONS 7.  -->
<script defer src="/js/jstemplates/7.js"></script>

<!-- JS FUNCTIONS 8.  -->
<script defer src="/js/jstemplates/8.js"></script>

<!-- JS FUNCTIONS 9.  -->
<script defer src="/js/jstemplates/9.js"></script>

<!-- JS FUNCTIONS Walls.  -->
<script defer src="/js/jstemplates/walls.js"></script>

<script defer src="/js/jstemplates/saving.js"></script>

<?php

$usr = $_GET["user"];
$usr_role = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='$usr'; ");
$usr_role = mysqli_fetch_all($usr_role);
$usr_role = $usr_role[3];

if (isset($usr_role) && $usr_role == 'mittaus') {
} else {
   echo '<script defer src="/js/jstemplates/commenting__file.js"></script>';
}

?>


<!-- Technical piece of code for Development -->
<script>
   // $('#step_drawscreen').val('drawscreen_section_four');

   // $("#project_start").hide();
   // refresh__drawcontrols();updatearea();

   // document.querySelector("#drawarea_h").value = "3200";
   // document.querySelector("#drawarea_w").value = "6000";

   // setTimeout(changesize(),100);


   // setTimeout(document.querySelector("body > section.row.drawarea__section > div.drawarea__section_container > div.drawarea__controls.drawarea__controls_five > div:nth-child(3)").click(),100);



   // setTimeout(drawarea.querySelector("#drawscreen_section_tyostot > div > div:nth-child(2) > section:nth-child(20) > section > section:nth-child(4) > fieldset > div > div:nth-child(1) > label:nth-child(6)").click(),500);
   // setTimeout( drawarea.querySelector("#drawscreen_section_tyostot > div > div:nth-child(2) > section:nth-child(20) > section > section:nth-child(4) > fieldset > div > div:nth-child(2) > label:nth-child(6)").click(),500);
   // setTimeout(() => {
   //   document.querySelector("#kiinniketys__pkiinnike_three").click();
   // }, "1000");

   // setTimeout(() => {
   //   document.querySelector("#kiinniketys__vkiinnike_three").click();
   // }, "1000");

   // function jumptothelast() {
   //      rangoita();$('#step_drawscreen').val('drawscreen_section_seven');

   //   }

   // setTimeout(() => {
   //   drawarea.querySelector("#drawscreen_section_tyostot > div > div:nth-child(2) > section:nth-child(20) > section > section:nth-child(5) > div").click();
   // }, "1000");

   // setTimeout(() => {
   //   refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_esikatselu');

   //   // jumptothelast();
   // }, 1000);


   // document.querySelector("#copiedcanvases")
</script>

  
<!-- Yandex.Metrika counter -->
<script type="text/javascript" defer>
  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
  m[i].l=1*new Date();
  for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
  k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
  (window, document, "script", "https://mc.yandex.com/metrika/tag.js", "ym");

  ym(95954985, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
  });
</script>
<noscript><div><img src="https://mc.yandex.com/watch/95954985" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<script>
  $(document).ready(function(){
    setTimeout(() => {
      $(".preloader").removeClass( "active" );
    }, 2000);
  });

</script>