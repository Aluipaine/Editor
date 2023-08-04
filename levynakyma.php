<?php

require "vendor/config.php";
include('./header.php');

?>
<section class="container" id="levysivu">
    <div id="levytyosto_container">
        <div class="row">
            <div class="col-12" style="position: relative;">
                <h1 style="margin:0 auto;text-align: center;">LEVYTILAUS <input type="text" class="levymodal__levyname" value="Tyyppi A">
                    <br>
                    <div class="row levy_sizes" style="justify-content: center;"><span>Koko (leveys x korkeus) </span>
                        <input type="number" value="1240" class="drawarea_h" id="drawarea_h" onchange="changesize(this.value+'|y');" max="3650"><span> x </span>
                        <input type="number" value="2190" class="drawarea_w" id="drawarea_w" onchange="changesize(this.value+'|x');" max="9975"><span> mm,</span> <br>
                        <input type="number" value="1" max="9975"><span> kpl.</span>
                    </div>
                </h1>
            </div>
            <div class="col-6 levytyosto__maincol">
                <div class="visible levy_vis lt_levy_vis dir_y" style="height: 438px; width: 248px; background-color: rgb(241, 241, 241);" title="1240,2190,5,1255" data-levy="1">
                <b>
                    <div class="levy_name"> TYYPPI A</div>
                    <i>1240x2190mm</i>
                </b>
                <div class="levy_h" style="display: none;">1240</div>
                <div class="levy_w" style="display: none;">2190</div>
                <div class="levy_tyostot_x">
                    <div class="tyostot__tyosto tyostot__tyosto_pysty viim__tyosto_pysty no_siirto levy_blessedcord" style="height: 100%; width: 1.6px; position: absolute; left: 239.9px; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                        <input class="temp_input" onchange="change__tyostocord(this,1,1);" onclick="clearcord(this,'tyo');" data-from="32.5" style="display: none;">
                        <input class="temp_input temp_input_last" onchange="alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')" onclick="clearcord(this,'tyo');" data-from="600" style="display: none;">
                    </div>
                        <div class="tyostot__tyosto tyostot__tyosto_pysty levy_blessedcord" style="right: unset; height: 100%; width: 1.6px; position: absolute; left: 121.5px; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                    <input class="temp_input" onchange="change__tyostocord(this,1,1);" onclick="clearcord(this,'tyo');" data-from="575" style="display: none;">
                    </div>
                    <div class="tyostot__tyosto tyostot__tyosto_pysty alku__tyosto_pysty no_siirto levy_blessedcord" style="height: 100%; width: 1.6px; position: absolute; left: 6.5px; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                        <input class="temp_input" onchange="change__tyostocord(this,1,1);" onclick="clearcord(this,'tyo');" data-from="32.5" style="display: none;">
                    </div>
                </div>
                <div class="levy_tyostot_y">
                    <div class="tyostot__tyosto tyostot__tyosto_vaaka viim__tyosto_vaaka no_siirto" style="width: 100%; height: 1.6px; position: absolute; bottom: 431.5px; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                        <input class="temp_input" onchange="change__tyostocord(this,1,5);" onclick="clearcord(this,'tyo');" data-from="32.5" style="display: none;">
                        <input class="temp_input temp_input_last" onchange="alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')" onclick="clearcord(this,'tyo');" data-from="325" style="display: none;">
                    </div>
                    <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: 366.5px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                        <input class="temp_input" onchange="change__tyostocord(this,1,5);" onclick="clearcord(this,'tyo');" data-from="600" style="display: none;">
                    </div>
                    <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: 246.5px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                        <input class="temp_input" onchange="change__tyostocord(this,1,5);" onclick="clearcord(this,'tyo');" data-from="600" style="display: none;">
                    </div>
                    <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: 126.5px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                        <input class="temp_input" onchange="change__tyostocord(this,1,5);" onclick="clearcord(this,'tyo');" data-from="600" style="display: none;">
                    </div>
                    <div class="tyostot__tyosto tyostot__tyosto_vaaka alku__tyosto_vaaka no_siirto" style="width: 100%; height: 1.6px; position: absolute; bottom: 6.5px; opacity: 1; display: block;">
                        <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                        <input class="temp_input" onchange="change__tyostocord(this,1,5);" onclick="clearcord(this,'tyo');" data-from="32.5" style="display: none;">
                    </div>
                </div>
                </div>
                <span class="levy__count">x <b>1</b>  kpl</span>
            </div>
            <div class="col-6 levytyosto__maincol">
                <div class="form-group">
                <h5>Väri:</h5>
                <fieldset class="form-subgroup">
                    <input type="radio" name="levyn_vari" id="levy_vari_0" style="display: none;">
                    <label for="levy_vari_0" style="background: rgba(241, 241, 241,1);" class="levy__label" onclick="levy__interaction(1,this);">Oletus</label>
                    <input type="radio" name="levyn_vari" id="levy_vari_1" style="display: none;">
                    <label for="levy_vari_1" style="background: rgba(107, 78, 56,1);" class="wt levy__label" onclick="levy__interaction(1,this);">Ahogany Red</label>
                    <input type="radio" name="levyn_vari" id="levy_vari_2" style="display: none;">
                    <label for="levy_vari_2" style="background: rgba(246, 91, 52, 1);" class="wt levy__label" onclick="levy__interaction(1,this);">Exterior Red</label>
                    <input type="radio" name="levyn_vari" id="levy_vari_3" style="display: none;">
                    <label for="levy_vari_3" style="background: rgba(173, 241, 38,1);" class="wt levy__label" onclick="levy__interaction(1,this);">Lime Green</label>
                </fieldset>
                <h5>Ruuvilinjat</h5>
                <fieldset class="form-subgroup">
                    <!--
                    <input type="checkbox" name="levyn_ruuvit" id="levy_ruuvit_0" style="display: none;">
                    <label for="levy_ruuvit_0" style="background: #3ece3b;" class="wt levy__label" onclick="levy__interaction(2,this);" data-type="del">LISÄÄ RUUVILINJOJA</label>
                    -->
                    <input type="checkbox" name="levyn_ruuvit" id="levy_ruuvit_1" style="display: none;">
                    <label for="levy_ruuvit_1" style="background: #F65B34;" class="wt levy__label" onclick="levy__interaction(2,this);" data-type="del">POISTA RUUVILINJOJA</label>
                    <input type="checkbox" name="levyn_ruuvit" id="levy_ruuvit_2" style="display: none;">
                    <label for="levy_ruuvit_2" style="background: #F6CB34;" class="wt levy__label" onclick="levy__interaction(2,this);" data-type="mod">MUOKKAA RUUVILINJOJA</label>
                </fieldset>
                <h5>Mitat</h5>
                <fieldset class="form-subgroup">
                    <input type="checkbox" name="levyn_mitat" id="levyn_mitat_1" style="display: none;">
                    <label for="levyn_mitat_1" style="background: #F6CB34;" class="wt levy__label" onclick="levy__interaction(3,this);">MUOKKAA LEVYMITTOJA</label>
                </fieldset>
                <h5>Läpiviennit</h5>
                <fieldset class="form-subgroup">
                    <input type="checkbox" name="levyn_lv" id="levyn_lv_1" style="display: none;">
                    <label for="levyn_lv_1" style="background: rgba(241, 241, 241,1);" class="levy__label" onclick="levy__interaction(3,this);">ASETA LÄPIVIENTEJÄ</label>
                </fieldset>

                <h5>Excel</h5>
                <button class="greenbtn">Vie Excel-tiedostoon</button>
            </div>
        </div>
    </div>
</section>

<script src="/js/jquery.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/jstemplates/4.js"></script>
<script src="/js/jstemplates/5.js"></script>
<script src="/js/jstemplates/6.js"></script>
<script src="/js/jstemplates/8.js"></script>
<script>find__that_levy(0);</script>

</body>
</html>