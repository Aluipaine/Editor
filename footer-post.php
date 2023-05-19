
  <div class="recl-container" id="reclamation__popup">
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
   <div class="aukko_container">
      <div class="modal-background">
      <div class="modal">
         <div class="modal_close_btn" onclick="open_aukko_settings(false)"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
         <div class="row">
            <div class="greenbtn">Listan värit</div>
            <div class="greenbtn">Rangan laadut</div>
            <div class="greenbtn">VR Ranka</div>
            <div class="greenbtn">OR Ranka</div>
            <div class="greenbtn">YR Ranka</div>
            <div class="greenbtn">AR Ranka</div>
            <div class="greenbtn">Aukon smyykin paksuus (rakenteen paksuus)</div>
            <!-- ranka+levyt+epdm -->
         </div>
         <h2>Aukko-asetukset</h2>
         <table class="myinfo group-0">
            <tr>
               <td>Aukon tyyppi</td>
               <td>Vasen </td>
               <td>Vasen</td>
               <td>Oikea</td>
               <td>Oikea<td>
               <td>Ylä +</td>
               <td>Ylä -</td>
               <td>Ala +</td>
               <td>Ala -<td>

               <td>VR Listan nimi</td>
               <td>VR Listan väri</td> 
               <td>VR Rangan nimi</td> 
               <td>VR Rangan laatu</td>

               <td>OR Listan nimi</td>
               <td>OR Listan väri</td> 
               <td>OR Rangan nimi</td> 
               <td>OR Rangan laatu</td> 

               <td>YR Listan nimi</td>
               <td>YR Listan väri</td> 
               <td>YR Rangan nimi</td> 
               <td>YR Rangan laatu</td> 

               <td>AR Listan nimi</td>
               <td>AR Listan väri</td> 
               <td>AR Rangan nimi</td> 
               <td>AR Rangan laatu</td> 


            </tr>
         </table>
         <table class="myinfo group-1">
            <tr class="ikkuna_info">
               <td><input type="text" name="" value="Ikkuna" class="lineinput"></td>
               <td><input type="text" name="" value="+38" class="lineinput"></td>
               <td><input type="text" name="" value="+63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-62" class="lineinput"></td>
               <td><input type="text" name="" value="-1" class="lineinput"></td>
               <td><input type="text" name="" value="-25" class="lineinput"></td>


               <td><input type="text" name="" value="Ikkunalista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="Ikkunaranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="Ikkunalista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="Ikkunaranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="Ikkunalista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="Ikkunaranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="Ikkunalista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="Ikkunaranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>

            </tr>
            <tr class="ovi_info">
               <td><input type="text" name="" value="ovi" class="lineinput"></td>
               <td><input type="text" name="" value="+38" class="lineinput"></td>
               <td><input type="text" name="" value="+63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-62" class="lineinput"></td>
               <td><input type="text" name="" value="-1" class="lineinput"></td>
               <td><input type="text" name="" value="-25" class="lineinput"></td>


               <td><input type="text" name="" value="ovilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="oviranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ovilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="oviranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ovilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="oviranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ovilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="oviranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>


            </tr>
            <tr class="ilmastointi_info">
              <td><input type="text" name="" value="ilmastointi" class="lineinput"></td>
               <td><input type="text" name="" value="+38" class="lineinput"></td>
               <td><input type="text" name="" value="+63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-62" class="lineinput"></td>
               <td><input type="text" name="" value="-1" class="lineinput"></td>
               <td><input type="text" name="" value="-25" class="lineinput"></td>


               <td><input type="text" name="" value="ilmastointilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ilmastointiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ilmastointilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ilmastointiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ilmastointilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ilmastointiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ilmastointilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="ilmastointiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               

            </tr>
            <tr class="pilari_info">
                <td><input type="text" name="" value="pilari" class="lineinput"></td>
               <td><input type="text" name="" value="+38" class="lineinput"></td>
               <td><input type="text" name="" value="+63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-62" class="lineinput"></td>
               <td><input type="text" name="" value="-1" class="lineinput"></td>
               <td><input type="text" name="" value="-25" class="lineinput"></td>


               <td><input type="text" name="" value="pilarilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="pilariranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="pilarilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="pilariranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="pilarilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="pilariranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="pilarilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="pilariranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
              
            </tr>
            <tr class="alue_erikoisranka_info bottom-border palkki_info">
               <td><input type="text" name="" value="palkki" class="lineinput"></td>
               <td><input type="text" name="" value="+38" class="lineinput"></td>
               <td><input type="text" name="" value="+63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-63" class="lineinput"></td>
               <td><input type="text" name="" value="-38" class="lineinput"></td>
               <td><input type="text" name="" value="-62" class="lineinput"></td>
               <td><input type="text" name="" value="-1" class="lineinput"></td>
               <td><input type="text" name="" value="-25" class="lineinput"></td>


               <td><input type="text" name="" value="palkkilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="palkkiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="palkkilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="palkkiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="palkkilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="palkkiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="palkkilista" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               <td><input type="text" name="" value="palkkiranka" class="lineinput"></td>
               <td><input type="text" name="" value="-" class="lineinput"></td>
               
            </tr>
         </table>

        <div class="modal_close_btn drawarea__controls_btn" onclick="open_aukko_settings(false)">Tallenna</div>
      </div>
      </div>
   </div>
   <!-- <div class="aukko_container">
      <div class="modal-background">
      <div class="modal">
         <div class="modal_close_btn" onclick="open_aukko_settings(false)"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path></svg></div>
         <h2>Lista- ja ranka-asetuksia</h2>
         <div class="drawarea__controls_btn m_btn" style="background: #FEB700;font-size: 14px;width: 100%;border-radius: 1px;display: flex;align-items: center;justify-content: center;color: #fff;cursor: pointer;padding: 19px 0;border: unset;">järjestelmä standard</div>
         <table class="myinfo group-0">
            <tr>
               <td>Reuna</td>
               <td>Ranka nimi</td>
               <td>Ranka, muutokset mod. mitasta (mm)</td>
               <td>Pituus 1</td>
               <td>Pituus 2</td>
               <td>Pituus 3</td>
               <td>Leveys</td>
               <td>Korkeus</td>
               <td>Lisää 1</td>
               <td>Lisää 2</td>
               <td>Listan nimi</td>
               <td>Listan väli</td>
               <td>Väri</td>
               <td>Muu</td>
            </tr>
            <tr class="levy_rangat_info levyar_rangat_info">
               <td><input type="text" name="" value="Levy, AR" class="lineinput"></td>
               <td><input type="text" name="" value="S25" class="lineinput"></td>
               <td><input type="text" name="" value="6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="" value="2400" class="lineinput"></td>
               <td><input type="text" name="" value="3000" class="lineinput"></td>
               <td><input type="text" name="" value="3600" class="lineinput"></td>
               <td><input type="text" name="" value="66mm" class="lineinput"></td>
               <td><input type="text" name="" value="28mm" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="SL251" class="lineinput"></td>
               <td><input type="text" name="" value="6mm" class="lineinput"></td>
               <td><select name=""><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               
            </tr>
            <tr class="levy_rangat_info levyyr_rangat_info">
               <td><input type="text" name="" value="Levy, YR" class="lineinput"></td>
               <td><input type="text" name="" value="S24" class="lineinput"></td> 
               <td><input type="text" name="" value="-6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="" value="2400" class="lineinput"></td>
               <td><input type="text" name="" value="3000" class="lineinput"></td>
               <td><input type="text" name="" value="3600" class="lineinput"></td>
               
               <td><input type="text" name="" value="66mm" class="lineinput"></td>
               <td><input type="text" name="" value="28mm" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="SL251" class="lineinput"></td>
               <td><input type="text" name="" value="6mm" class="lineinput"></td>
               <td><select name=""><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
            <tr class="levy_rangat_info levyvr_rangat_info">
               <td><input type="text" name="" value="Levy, VR" class="lineinput"></td>
               <td><input type="text" name="" value="S13" class="lineinput"></td>
               <td><input type="text" name="" value="6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="" value="2400" class="lineinput"></td>
               <td><input type="text" name="" value="3000" class="lineinput"></td>
               <td><input type="text" name="" value="3600" class="lineinput"></td>
               
               <td><input type="text" name="" value="66mm" class="lineinput"></td>
               <td><input type="text" name="" value="28mm" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="SL251" class="lineinput"></td>
               <td><input type="text" name="" value="-6mm" class="lineinput"></td>
               <td><select name=""><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
            <tr class="bottom-border levy_rangat_info levyor_rangat_info">
               <td><input type="text" name="" value="Levy, OR" class="lineinput"></td>
               <td><input type="text" name="" value="S14" class="lineinput"></td>
               <td><input type="text" name="" value="-6" class="lineinput" placeholder="Modmitasta"></td>
               <td><input type="text" name="" value="2400" class="lineinput"></td>
               <td><input type="text" name="" value="3000" class="lineinput"></td>
               <td><input type="text" name="" value="3600" class="lineinput"></td>
               
               <td><input type="text" name="" value="66mm" class="lineinput"></td>
               <td><input type="text" name="" value="28mm" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="SL251" class="lineinput"></td>
               <td><input type="text" name="" value="-6mm" class="lineinput"></td>
               <td><select name=""><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
         </table>
         <table class="myinfo group-1">
            <tr class="ikkuna_rangat_info ikkunaar_rangat_info">
               <td><input type="text" name="" value="Ikkuna, AR" class="lineinput"></td>
               <td><input type="text" name="" value="S27" class="lineinput"></td>
               <td><input type="text" name="" value="-6" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><select name=""><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
            <tr class="ikkuna_rangat_info ikkunayr_rangat_info">
               <td><input type="text" name="" value="Ikkuna, YR" class="lineinput"></td>
               <td><input type="text" name="" value="S20" class="lineinput"></td>
               <td><input type="text" name="" value="6" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><select name=""><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
            <tr class="ikkuna_rangat_info ikkunavr_rangat_info">
               <td><input type="text" name="" value="Ikkuna, VR" class="lineinput"></td>
               <td><input type="text" name="" value="S23" class="lineinput"></td>
               <td><input type="text" name="" value="-6" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><select name=""><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
            <tr class="bottom-border ikkuna_rangat_info ikkunaor_rangat_info">
               <td><input type="text" name="" value="Ikkuna, OR" class="lineinput"></td>
               <td><input type="text" name="" value="S23" class="lineinput"></td>
               <td><input type="text" name="" value="6" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><select name=""><option value="Oranssi">Oranssi</option><option value="Sininen">Sininen</option><option value="Vihreä">Vihreä</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
         </table>
         <table class="myinfo group-2">
            <tr class="alue_rangat_info alue_erikoisranka_info">
               <td><input type="text" name="" value="Erikoisranka" class="lineinput"></td>
               <td><input type="text" name="" value="S29" class="lineinput"></td>
               <td><input type="text" name="" value="15" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><select name=""><option value="Liila">Liila</option><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
            <tr class="alue_rangat_info alue_saumaranka_info">
               <td><input type="text" name="" value="Saumaranka" class="lineinput"></td>
               <td><input type="text" name="" value="S29" class="lineinput"></td>
               <td><input type="text" name="" value="15" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="EP20" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><select name=""><option value="Punainen">Punainen</option><option value="Vihreä">Vihreä</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
            <tr class="alue_rangat_info alue_valiranka_info">
               <td><input type="text" name="" value="Väliranka" class="lineinput"></td>
               <td><input type="text" name="" value="S23" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><input type="text" name="" value="EP21" class="lineinput"></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
               <td><select name=""><option value="Vihreä">Vihreä</option><option value="Liila">Liila</option><option value="Oranssi">Oranssi</option><option value="Keltainen">Keltainen</option></select></td>
               <td><input type="text" name="" value="?" class="lineinput"></td>
            </tr>
         </table>
        <div class="modal_close_btn drawarea__controls_btn" onclick="open_aukko_settings(false)">Tallenna</div>
        <span>Huomiot: 1. "Aukkopuu", mihin? 2. Rankojen paksuudet, pituudet, leveydet? 3. Lisää 1 ja Lisää 2, mitä meinaa? 4. Muu- mitä toimintoja tuosta seuraa? 5. Saumarangat erikseen?</span>
      </div>
      </div>
   </div> -->
   

<!-- canvas -->
<script src='/js/p5.min.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.1/xlsx.full.min.js"></script> 





<script src='/js/jquery.min.js'></script>
<script src='/js/clipboard.min.js'></script>
<!-- Marko new row btn function -->


<!-- MARKO -->
<script src="/js/jstemplates/mrarko.js"></script>


<!-- 2_1 -->
<script src="/js/roller.js"></script>
<script src="/js/roller_1.js"></script>
<script src="/js/roller_2.js"></script>
<script src="/js/roller_3.js"></script>



<!-- MAIN JS FUNCTIONS -->
<script src="/js/main.js"> </script>

<!-- JS FUNCTIONS FOR PROJECT AND ROOMS -->
<script src="/js/jstemplates/creation.js"></script>


<script src="/js/jstemplates/0.js"></script>


<!-- JS FUNCTIONS 1.  -->
<script src="/js/jstemplates/1.js"></script>

<!-- JS FUNCTIONS 2.  -->
<script src="/js/jstemplates/2.js"></script>

<!-- JS FUNCTIONS 3.  -->
<script src="/js/jstemplates/3.js"></script>

<!-- JS FUNCTIONS 4.  -->
<script src="/js/jstemplates/4.js"></script>

<!-- JS FUNCTIONS 5.  -->
<script src="/js/jstemplates/5.js"></script>

<!-- JS FUNCTIONS 6.  -->
<script src="/js/jstemplates/6.js"></script>

<!-- JS FUNCTIONS 7.  -->
<script src="/js/jstemplates/7.js"></script>

<!-- JS FUNCTIONS 8.  -->
<script src="/js/jstemplates/8.js"></script>

<!-- JS FUNCTIONS 9.  -->
<script src="/js/jstemplates/9.js"></script>

<!-- JS FUNCTIONS Walls.  -->
<script src="/js/jstemplates/walls.js"></script>

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
