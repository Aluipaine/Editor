<?php

require "../vendor/config.php";
include('../header.php');

?>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
        /* Firefox */
    }

    .lv {
        position: absolute;
        bottom: 0;
        overflow: visible;
        outline: 1px solid #1a1a1a;
        box-sizing: border-box;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        z-index: 4;
        cursor: move;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        -khtml-user-drag: element;
        -webkit-user-drag: element;

        background: #fff;
        margin-left: -7.5px;
        margin-bottom: -7.5px;

        font-size: 50%;
        align-items: center;
        display: flex;
        z-index: 11;
        justify-content: center;
    }

    .lv:before, .lv:after {
        position: absolute;
        content: "";
        display: block;
        z-index: 5;
        background: #1a1a1a;
        width: 50%;
        height: 50%;
    }

    .lv i {
        background: rgba(255,255,255,.9);
        z-index: 9999;
        padding: 2px 3px;
    }


    .lv:before {
        top: 0;
        left: 0;

        border-top-right-radius: 0;
        border-top-left-radius: 100%;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .lv:after {
        bottom: 0;
        right: 0;

        border-top-right-radius: 0;
        border-top-left-radius: 0;
        border-bottom-right-radius: 100%;
        border-bottom-left-radius: 0;
    }
</style>

<section class="container" id="levysivu">
    <div id="levytyosto_container">
        <div class="row">
            <div class="col-12" style="position: relative;">
                <h1 style="margin:0 auto;text-align: center;">LEVYTILAUS <input type="text" class="levymodal__levyname" value="Tyyppi A">
                    <br>
                    <div class="row levy_sizes" style="justify-content: center;"><span>Koko (leveys x korkeus) </span>
                        <input type="number" value="1240" class="drawarea_w" id="drawarea_h" onchange="/*changesize(this.value+'|y');*/" max="3650"><span> x </span>
                        <input type="number" value="2190" class="drawarea_h" id="drawarea_w" onchange="/*changesize(this.value+'|x');*/" max="9975"><span> mm,</span> <br>
                        <input type="number" value="1" class="drawarea_count" min="1"><span> kpl.</span>
                    </div>
                </h1>
            </div>
            <div class="col-6 levytyosto__maincol">
                <div class="visible levy_vis lt_levy_vis levy dir_y levy_canvas" style="height: 438px; width: 248px; background-color: rgb(241, 241, 241);" title="1240,2190,5,1255" data-levy="1">
                    <b>
                        <div class="levy_name">TYYPPI A</div>
                        <i class="levy_size">1240x2190mm</i>
                    </b>
                    <div class="levy_w" style="display: none;">1240</div>
                    <div class="levy_h" style="display: none;">2190</div>
                    <div class="levy_tyostot_x">
                        <div class="tyostot__tyosto tyostot__tyosto_pysty viim__tyosto_pysty no_siirto levy_blessedcord" style="height: 100%; width: 1.6px; position: absolute; left: 239.9px; opacity: 1; display: block;"></div>
                        <div class="tyostot__tyosto tyostot__tyosto_pysty levy_blessedcord" style="right: unset; height: 100%; width: 1.6px; position: absolute; left: 124px; opacity: 1; display: block;">
                            <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                            <input class="temp_input" type="number" onchange="change__tyostocord(this, 2);" value="620" style="display: none;">
                        </div>
                        <div class="tyostot__tyosto tyostot__tyosto_pysty alku__tyosto_pysty no_siirto levy_blessedcord" style="height: 100%; width: 1.6px; position: absolute; left: 6.5px; opacity: 1; display: block;"></div>
                    </div>
                    <div class="levy_tyostot_y">
                        <div class="tyostot__tyosto tyostot__tyosto_vaaka viim__tyosto_vaaka no_siirto" style="width: 100%; height: 1.6px; position: absolute; bottom: 431.5px; opacity: 1; display: block;"></div>
                        <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: 328.5px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                            <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                            <input class="temp_input" type="number" onchange="change__tyostocord(this, 1);" value="1642.5" style="display: none;">
                        </div>
                        <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: 219.0px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                            <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                            <input class="temp_input" type="number" onchange="change__tyostocord(this, 1);" value="1095.0" style="display: none;">
                        </div>
                        <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: 109.5px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                            <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                            <input class="temp_input" type="number" onchange="change__tyostocord(this, 1);" value="547.5" style="display: none;">
                        </div>
                        <div class="tyostot__tyosto tyostot__tyosto_vaaka alku__tyosto_vaaka no_siirto" style="width: 100%; height: 1.6px; position: absolute; bottom: 6.5px; opacity: 1; display: block;"></div>
                    </div>
                </div>
                <span class="levy_count">x <b>1</b> kpl</span>
            </div>
            <div class="col-6 levytyosto__maincol">
                <div class="form-group">
                    <h5>Väri:</h5>
                    <fieldset class="form-subgroup">
                        <input type="radio" name="levyn_vari" id="levy_vari_0" style="display: none;" checked>
                        <label for="levy_vari_0" style="background-color: rgba(241, 241, 241,1);" class="levy__label" onclick="/*levy__interaction(1,this);*/levy_color_change(this);" value="Oletus">Oletus</label>
                        <?php
                        $s_data = mysqli_query($db, "SELECT * FROM `projectmeta` WHERE `id` = '100' AND `meta_key` = 's_materials'");
                        $s_da = mysqli_fetch_all($s_data);
                        $s_data = $s_da[0][3];

                        $s_da_ = explode("],[", $s_data);
                        $_s = explode('}","{', $s_da_[0]);


                        // $s_ = str_replace("]" , "",$_s);
                        // $s = str_replace("[" , "",$s_);

                        // print_r($s);

                        // print_r($_s);
                        $vari_id = 1;
                        foreach ($_s as $sy) {

                            // echo $sy;
                            $sy_1 = str_replace("{", "", str_replace("}", "", $sy));
                            $sy_2 = str_replace("[", "", str_replace("]", "", $sy_1));
                            $sy_3 = str_replace('"', '', $sy_2);
                            $sys = explode(",", $sy_3);

                            // print_r($sys);
                            //echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="' . $sys[0] . '"><label style="color: white; background: ' . $sys[7] . ';">' . $sys[0] . '</label><input type="hidden" name="material_bg" value="' . $sys[7] . '"><input type="hidden" name="material_colour" value="' . $sys[7] . '"><input type="hidden" name="material_array" value="{' . $sys[0] . ',' . $sys[1] . ',' . $sys[2] . ',' . $sys[3] . ',' . $sys[4] . ',' . $sys[5] . ',' . $sys[6] . ',' . $sys[7] . '}"></div>';
                            echo '<input type="radio" id="levy_vari_' . $vari_id . '" name="levyn_vari" style="display: none;"><label for="levy_vari_' . $vari_id . '" style="background-color: ' . $sys[7] . ';" class="wt levy__label" onclick="/*levy__interaction(1,this);*/levy_color_change(this);" value="' . $sys[0] . '">' . $sys[0] . '</label>';
                            $vari_id++;
                            // print_r($s);

                            // $sys = explode(",",$s[0]);
                            //    if(strlen($sy)>=3) {
                            //       // echo '<div class="material__customcol_item"><input type="checkbox" name="system_type" value="Classic" checked><label style="background: #E2E2E2;">' . str_replace('"','', $sy) . '</label></div>';

                            //       echo '<div class="material__customcol_item"><input type="checkbox" name="material_type" value="Exterior Green" id="exterior green"><label for="exterior green" style="color: rgb(255, 255, 255); background: rgb(110, 135, 85);">FO Malibu E. Green</label><input type="hidden" name="material_bg" value="rgb(255, 255, 255)"><input type="hidden" name="material_colour" value="rgb(110, 135, 85)"><input type="hidden" name="material_array" value="Exterior Green,Exterior Green,FO/B_s2_d0,1250,600,8,Standard,#6E8755"></div>';
                            //    }
                        }



                        ?>
                    </fieldset>
                    <h5>Ruuvilinjat</h5>
                    <fieldset class="form-subgroup">
                        <input type="checkbox" name="levyn_ruuvit" class="levyn_ruuvit" id="levy_ruuvit_0" style="display: none;">
                        <label for="levy_ruuvit_0" style="background: #3ece3b;" class="wt levy__label" onclick="/*levy__interaction(2,this);*/" data-type="add">LISÄÄ RUUVILINJOJA</label>
                        <input type="checkbox" name="levyn_ruuvit" class="levyn_ruuvit" id="levy_ruuvit_1" style="display: none;">
                        <label for="levy_ruuvit_1" style="background: #F65B34;" class="wt levy__label" onclick="/*levy__interaction(2,this);*/" data-type="del">POISTA RUUVILINJOJA</label>
                        <input type="checkbox" name="levyn_ruuvit" class="levyn_ruuvit" id="levy_ruuvit_2" style="display: none;">
                        <label for="levy_ruuvit_2" style="background: #F6CB34;" class="wt levy__label" onclick="/*levy__interaction(2,this);*/" data-type="mod">MUOKKAA RUUVILINJOJA</label>
                    </fieldset>
                    <!--
                <h5>Mitat</h5>
                <fieldset class="form-subgroup">
                    <input type="checkbox" name="levyn_mitat" id="levyn_mitat_1" style="display: none;">
                    <label for="levyn_mitat_1" style="background: #F6CB34;" class="wt levy__label" onclick="levy__interaction(3,this);">MUOKKAA LEVYMITTOJA</label>
                </fieldset>
                -->
                    <h5>Läpiviennit</h5>
                    <fieldset class="form-subgroup">
                        <input type="checkbox" name="levyn_lv" id="levyn_lv_1" style="display: none;" class="levyn_lv">
                        <label for="levyn_lv_1" style="background: rgba(241, 241, 241,1);" class="levy__label" onclick="/*levy__interaction(3,this);*/">ASETA LÄPIVIENTEJÄ</label>
                    </fieldset>

                    <h5>Excel</h5>
                    <button class="greenbtn" onclick="create__levy_excel(true);">Vie Excel-tiedostoon</button>
                </div>
            </div>
        </div>
        <div class="modal-container add-tyosto-modal out">
            <div class="modal-background">
                <div class="modal">
                    <div class="modal_close_btn add_tyosto_modal_close_btn"><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path>
                        </svg>
                    </div>
                    <h2>
                        Lisää Ruuvilinjoja
                    </h2>
                    <section>
                        <h4>Tyyppi</h4>
                        <fieldset>
                            <input id="ruulit_vaaka" name="ruulit_line_type" type="radio" onfocus="/*give__origo_cord();*/">
                            <label for="ruulit_vaaka">Vaaka</label>
                            <input id="ruulit_pysty" name="ruulit_line_type" type="radio" onfocus="/*null__origo_cord();*/">
                            <label for="ruulit_pysty">Pysty</label>
                        </fieldset>
                    </section>
                    <section class="row cord">
                        <div class="col-6" style="display: flex;flex-direction: column;">
                            <div class="cord__item">
                                <label for="ruulit_cord">Sijainti (vaaka/pysty viivatyypistä riippuen)</label>
                                <input id="ruulit_cord" type="number" class="lineinput" oninput="/*change__newdiv_cord();*/" onchange="/*cord__check(this);*/" min="0">
                            </div>
                        </div>
                    </section>

                    <div class="modal_close_btn drawarea__controls_btn submit_add_tyosto_modal" onclick="/*mitta__create_mitta();*/">Valmis</div>
                </div>
            </div>
        </div>
        <div class="modal-container add-lv-modal out">
            <div class="modal-background">
                <div class="modal">
                    <div class="modal_close_btn add_lv_modal_close_btn">
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 1.87367L17.9857 0.0703049L10 7.21983L2.01429 0.0703049L0 1.87367L7.98572 9.0232L0 16.1727L2.01429 17.9761L10 10.8266L17.9857 17.9761L20 16.1727L12.0143 9.0232L20 1.87367Z" fill="#444444"></path>
                        </svg>
                    </div>
                    <section class="row">
                        <div class="col-6">
                            <h2><input type="text" value="Läpivienti" class="lineinput" id="lv__name"></h2>
                        </div>
                        <div class="col-6">
                            <fieldset class="modal__lvtypes">
                                <input name="lv__sade" type="radio" id="lapiviennit__sade_first" onchange="/*change__lapivienti_sizecord(this);*/" value="25">
                                <label for="lapiviennit__sade_first">25</label>
                                <input name="lv__sade" type="radio" id="lapiviennit__sade_second" onchange="/*change__lapivienti_sizecord(this);*/" value="50">
                                <label for="lapiviennit__sade_second">50</label>
                                <input name="lv__sade" type="radio" id="lapiviennit__sade_third" onchange="/*change__lapivienti_sizecord(this);*/" value="75">
                                <label for="lapiviennit__sade_third">75</label>
                                <input name="lv__sade" type="radio" id="lapiviennit__sade_fourth" onchange="/*change__lapivienti_sizecord(this);*/" value="100">
                                <label for="lapiviennit__sade_fourth">100</label>
                                <input name="lv__sade" type="radio" id="lapiviennit__sade_fifth" onchange="/*change__lapivienti_sizecord(this);*/" value="125">
                                <label for="lapiviennit__sade_fifth">125</label>

                                <input name="lv__sade" type="radio" id="lapiviennit__sade_muucord" onchange="/*change__lapivienti_sizecord(this);*/">
                                <label for="lapiviennit__sade_muucord" style="margin: 0; margin-top: 5px;">
                                    <input style="width: 100%; height: 100%;" type="number" placeholder="arvo..." id="lapiviennit__sade_muucord_input" min="25">
                                </label>
                            </fieldset>
                        </div>
                    </section>

                    <section>
                        <h4>Lisään läpiviennin</h4>
                        <fieldset>
                            <input name="lv_from" type="radio" id="from__side_lapivienti" onfocus="/*null__origo_cord();*/" checked>
                            <label for="from__side_lapivienti">Omat mitat</label>
                        </fieldset>
                        <section class="row cord">
                            <div class="col-6" style="display: flex;flex-direction: column;">
                                <div class="lvcord__item cord__item">
                                    <label for="lvcord_low">Ylös</label>
                                    <input id="lvcord_low" name="" type="tel" class="lineinput" data-maximum="2200">
                                </div>

                                <div class="lvcord__item cord__item" style="display: none;">
                                    <label for="lvcord_r">Oikealle</label>
                                    <input id="lvcord_r" name="" type="tel" class="lineinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="lvcord__item cord__item">
                                    <label for="lvcord_left">Oikealle</label>
                                    <input id="lvcord_left" name="" type="tel" class="lineinput" data-maximum="4000">
                                </div>
                            </div>
                        </section>
                    </section>

                    <section class="comment__section">
                        <h4>Lähetä kommentti</h4>
                        <textarea name="lv_comment" id="lv_comment" cols="30" rows="10" style="resize: none;"></textarea>
                        <!-- <div class="row">
                            <div class="col-6">
                                <h6>Keneltä</h6>
                                <input name="lv_comment_from" id="lv_comment_from" type="text" value="Jyri">
                            </div>
                            <div class="col-6">
                                <h6>Kenelle</h6>
                                <select name="lv_comment_to" id="lv_comment_to">
                                    <option value="Jari">Jari</option>
                                    <option value="Henkka">Henkka</option>
                                    <option value="Marko">Marko</option>
                                </select>
                            </div>
                        </div> -->
                    </section>
                    <div class="modal_close_btn submit_add_lv_modal drawarea__controls_btn" onclick="/*mitta__create_mitta()*/">Lisää läpivienti</div>
                </div>
            </div>
        </div>
</section>

<!-- Функционал из других скриптов (не используется) -->
<!-- <script src="/js/jquery.min.js"></script> -->
<!-- <script src="/js/main.js"></script> -->
<!-- <script src="/js/jstemplates/4.js"></script> -->
<!-- <script src="/js/jstemplates/5.js"></script> -->
<!-- <script src="/js/jstemplates/6.js"></script> -->
<!-- <script src="/js/jstemplates/8.js"></script> -->
<!-- <script>find__that_levy(0);</script> -->

<!-- Новый функционал переписанный с каким-никаким рефакторингом -->
<script src="../js/levynakyma.js"></script>

<!-- Сторонние скрипты для экспорта в Excel -->
<script src="../js/jstemplates/7.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.1/xlsx.full.min.js"></script>
<script>
    function tallenna_kiinnikepaikat(levy) {
        // This is need to remove error in "7.js" script.
        console.log("tallenna_kiinnikepaikat(levy) EMULATION FIRED");
    //     try {
    //     console.log("tallenna_kiinnikepaikat(levy) fired");
    //     kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");
    //     l_meta = levy.querySelector(".l_meta");
    //     l_meta.value = "";
    //     l_meta_x = [];
    //     l_meta_y = [];
    //     kiinnike_inputy = [];
    //     kiinnike_inputx = [];
    //     for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
    //         if (kiinnikkeet[i]) {
    //             if (kiinnikkeet[i].classList.contains("tyostot__tyosto_vaaka")) {
    //                 kiinnike_inputy.push(kiinnikkeet[i]);
    //             }
    //             if (kiinnikkeet[i].classList.contains("tyostot__tyosto_pysty")) {
    //                 kiinnike_inputx.push(kiinnikkeet[i]);
    //             }
    //         }
    //     }
    //     for (var y = kiinnike_inputy.length - 1; y >= 0; y--) {
    //         k_input = kiinnike_inputy[y].querySelectorAll("input");
    //         for (var k = k_input.length - 1; k >= 0; k--) {
    //             l_meta_y.push(k_input[k].value);
    //         }
    //     }
    //     for (var x = kiinnike_inputx.length - 1; x >= 0; x--) {
    //         k_input = kiinnike_inputx[x].querySelectorAll("input");
    //         for (var k = k_input.length - 1; k >= 0; k--) {
    //             l_meta_x.push(k_input[k].value);
    //         }
    //     }
    //     l_meta.value = ("{" + l_meta_x + "}," + "{" + l_meta_y + "}");
    //     console.log("l_meta_x: " + l_meta_x);
    //     console.log("l_meta_y: " + l_meta_y);
    // } catch(e) {
    //     console.log("TRY-CATCH ERROR: " + e);
    // }
    }
</script>

</body>

</html>