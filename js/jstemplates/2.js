if(document.querySelector('#drawscreen_section_two')) {
  user = document.querySelector("#current_user").value;
  document.querySelector("#aukko_comment_from").value = user;
}

// DEPRECATED 04.12.23
// function open_aukko_settings(e) {
//   if (e === true) {
//     document.querySelector(".aukko_container").classList.add("two");
//   }
//   else if (e === false) {
//     document.querySelector(".aukko_container").classList.remove("two");
//   }

//   tds = document.querySelectorAll(".aukko_container .group-0 td");

//   for (var i = 0; i < tds.length; i++) {
//     if(tds[i].innerHTML.replaceAll(" ","").length <= 3) {
//        tds[i].remove();
//     }
//   }
// }

var a = 0;
var b = 0;
var c = 0;
var d = 0;
var e = 0;

function change__aukko_sizecord() {
  const height = document.querySelector('#box_h').value;
  const width = document.querySelector('#box_w').value;
  if (document.querySelector("#type__door").checked) {
    // document.getElementById("hole__height").value = 2000;
    // document.getElementById("hole__width").value = 1000;
    document.querySelector("#aukko__name").value = "Ovi ";


  }
  cur_aukko_type = "";
  if (document.querySelector("#type__door").checked) {
    cur_aukko_type = "ovi";
    document.querySelector("#aukko__name").value = "Ovi ";
  }

  if (document.querySelector("#type__window").checked) {
    cur_aukko_type = "ikkuna";
    document.querySelector("#aukko__name").value = "Ikkuna ";
  }
  
  if (document.querySelector("#type__palkki").checked) {
    document.querySelector("#aukko__name").value = "Palkki ";
    cur_aukko_type = "palkki";
  }
  if (document.querySelector("#type__collar").checked) {
    document.querySelector("#aukko__name").value = "Pilari ";
    cur_aukko_type = "pilari";
  }
  if (document.querySelector("#type__ventilation").checked) {
    cur_aukko_type = "ilmastointi";
    document.querySelector("#aukko__name").value = "Ilmastointi ";
  }

  ylitys_selector = document.querySelector("#aukko__name").value.toLowerCase().replaceAll(" ","");
  all_types = document.querySelectorAll("."+ylitys_selector+"__asetusheading");

  aukko_ylitys = document.querySelector(".aukko_ylitys");
  aukko_ylitys.innerHTML ="";

  for (let a = 0; a < all_types.length; a++) {
    aukko_ylitys.innerHTML += `
      <input type="radio" name="aukko_ylitysas" value="${all_types[a].querySelector("b").innerText}" id="aukkotype_array_`+a+`">
      <label for="aukkotype_array_`+a+`">${all_types[a].querySelector("b").innerText}</label>
    `;
  }


  
  document.querySelectorAll(".aukko_ylitys input")[0].checked = true;


  // document.getElementById("settings__aukko").style.height = (document.getElementById("hole__height").value / height * 100) + '%';
  // document.getElementById("settings__aukko").style.width = (document.getElementById("hole__width").value / width * 100) + '%';
  // change__aukko_size();
}
ovi_count = 0;
ikkuna_count = 0;
palkki_count = 0;
pilari_count = 0;
ilmastointi_count = 0;

function aukko_count_function(aukko, count) {
  if (aukko.classList.contains("ovi")) {
    ovi_count += count;
    aukko.dataset.no = parseFloat(ovi_count);
  }
  else if (aukko.classList.contains("ikkuna")) {
    ikkuna_count += count;
    aukko.dataset.no = parseFloat(ikkuna_count);
  }
  else if (aukko.classList.contains("palkki")) {
    palkki_count += count;
    aukko.dataset.no = parseFloat(palkki_count);
  }
  else if (aukko.classList.contains("pilari")) {
    pilari_count += count;
    aukko.dataset.no = parseFloat(pilari_count);
  }
  else if (aukko.classList.contains("tuuletus")) {
    ilmastointi_count += count;
    aukko.dataset.no = parseFloat(ilmastointi_count);
  }
}

function aukko_del(aukko, count) {
  console.log("AUKKO_DEL CALLED");
  if(aukko) {
    obj = aukko.getAttribute("id");
  }
  else {
    return
  }
  names = document.getElementsByName(obj);
  for (var i = 0; i < names.length; i++) {
    names[i].remove();
  }

  if(document.getElementsByName(obj)[0]) {
    barent = document.getElementsByName(obj)[0];
    barent.remove();
  }
  
  aukko.remove();
  ovi_count = 0;
  ikkuna_count = 0;
  palkki_count = 0;
  pilari_count = 0;
  ilmastointi_count = 0;
  if (aukko.classList.contains("ovi")) {
    // ovi_count-=1;
    if (canvas.querySelector(".ovi")) {
      ovet = canvas.querySelectorAll(".ovi");
      for (var i = 0; i < ovet.length; i++) {
        ovet[i].dataset.no = i + 1;
        count_ = ovet[i].dataset.no;
        obj = ovet[i].getAttribute("id");
        barent = document.getElementsByName(obj)[0];
        barent.querySelector(".aukko_count").innerHTML = parseFloat(ovet[i].dataset.no);
      }
    }
  }
  else if (aukko.classList.contains("ikkuna")) {
    // ikkuna_count-=1;
    if (canvas.querySelector(".ikkuna")) {
      ikkunat = canvas.querySelectorAll(".ikkuna");
      for (var i = 0; i < ikkunat.length; i++) {
        ikkunat[i].dataset.no = i + 1;
        count_ = ikkunat[i].dataset.no;
        obj = ikkunat[i].getAttribute("id");
        barent = document.getElementsByName(obj)[0];
        barent.querySelector(".aukko_count").innerHTML = parseFloat(ikkunat[i].dataset.no);
      }
    }
  }
  else if (aukko.classList.contains("palkki")) {
    // palkki_count-=1;
    if (canvas.querySelector(".palkki")) {
      palkkit = canvas.querySelectorAll(".palkki");
      for (var i = 0; i < palkkit.length; i++) {
        palkkit[i].dataset.no = i + 1;
        count_ = palkkit[i].dataset.no;
        obj = palkkit[i].getAttribute("id");
        barent = document.getElementsByName(obj)[0];
        barent.querySelector(".aukko_count").innerHTML = parseFloat(palkkit[i].dataset.no);
      }
    }
  }
  else if (aukko.classList.contains("pilari")) {
    // pilari_count-=1;
    if (canvas.querySelector(".pilari")) {
      pilarit = canvas.querySelectorAll(".pilari");
      for (var i = 0; i < pilarit.length; i++) {
        pilarit[i].dataset.no = i + 1;
        count_ = pilarit[i].dataset.no;
        obj = pilarit[i].getAttribute("id");
        barent = document.getElementsByName(obj)[0];
        barent.querySelector(".aukko_count").innerHTML = parseFloat(pilarit[i].dataset.no);
      }
    }
  }
  else if (aukko.classList.contains("tuuletus")) {
    // ilmastointi_count-=1;
    if (canvas.querySelector(".tuuletus")) {
      tuuletus = canvas.querySelectorAll(".tuuletus");
      for (var i = 0; i < tuuletus.length; i++) {
        tuuletus[i].dataset.no = i + 1;
        count_ = tuuletus[i].dataset.no;
        obj = tuuletus[i].getAttribute("id");
        barent = document.getElementsByName(obj)[0];
        barent.querySelector(".aukko_count").innerHTML = parseFloat(ikkunat[i].dataset.no);
      }
    }
  }
  if (document.querySelector(".ovi") === false) {
    ovi_count = 0;
  }
  else if (document.querySelector(".ikkuna") === false) {
    ikkuna_count = 0;
  }
  else if (document.querySelector(".palkki") === false) {
    palkki_count = 0;
  }
  else if (document.querySelector(".pilari") === false) {
    pilari_count = 0;
  }
  else if (document.querySelector(".tuuletus") === false) {
    tuuletus_vount = 0;
  }
}

function counting__aukkos() {
  ovi_count = 0;
  ikkuna_count = 0;
  palkki_count = 0;
  pilari_count = 0;
  ilmastointi_count = 0;

  restored_aukkos = canvas.querySelectorAll(".aukko");

  for (var i = 0; i < restored_aukkos.length; i++) {
    console.log(restored_aukkos[i]);
    if (restored_aukkos[i].classList.contains("ovi")) {
      ovi_count+= 1;
    }
    else if (restored_aukkos[i].classList.contains("ikkuna")) {
     ikkuna_count+=1;
    }
    else if (restored_aukkos[i].classList.contains("palkki")) {
      palkki_count+=1;
    }
    else if (restored_aukkos[i].classList.contains("pilari")) {
      pilari_count+=1;
    }
    else if (restored_aukkos[i].classList.contains("tuuletus")) {
     ilmastointi_count+=1;
    }
  }
  
  // if (document.querySelector(".ovi") === false) {
  //   ovi_count = 0;
  // }
  // else if (document.querySelector(".ikkuna") === false) {
  //   ikkuna_count = 0;
  // }
  // else if (document.querySelector(".palkki") === false) {
  //   palkki_count = 0;
  // }
  // else if (document.querySelector(".pilari") === false) {
  //   pilari_count = 0;
  // }
  // else if (document.querySelector(".tuuletus") === false) {
  //   tuuletus_vount = 0;
  // }
}

// function change__aukko_size() {
//   const height = document.querySelector('#box_h').value;
//   const width = document.querySelector('#box_w').value;
//   document.getElementById("settings__aukko").style.height = (document.getElementById("hole__height").value / height * 100) + '%';
//   document.getElementById("settings__aukko").style.width = (document.getElementById("hole__width").value / width * 100) + '%';
// }
function change__lapivienti_sizecord(e) {
  const height = document.querySelector('#box_h').value;
  const width = document.querySelector('#box_w').value;
  if (document.querySelector("#lapiviennit__sade_first").checked) {
    document.querySelector("#lapiviennit__sade_muucord").value = e.value;
  }
  if (document.querySelector("#lapiviennit__sade_second").checked) {
    document.querySelector("#lapiviennit__sade_muucord").value = e.value;
  }
  if (document.querySelector("#lapiviennit__sade_third").checked) {
    document.querySelector("#lapiviennit__sade_muucord").value = e.value;
  }
  if (document.querySelector("#lapiviennit__sade_fourth").checked) {
    document.querySelector("#lapiviennit__sade_muucord").value = e.value;
  }
  if (document.querySelector("#lapiviennit__sade_fifth").checked) {
    document.querySelector("#lapiviennit__sade_muucord").value = e.value;
  }
  if (document.querySelector("#lapiviennit__sade_muucord").value != "") {
    document.querySelector("#lapiviennit__sade_muucord").value = e.value;
  }
}

function changedimensions_aukko(input) {
  document.querySelector("#hole__width").value = ((eval(document.getElementById("aukotcord_right").value) - (eval(document.getElementById(
    "aukotcord_left").value))));
  document.querySelector("#hole__height").value = ((eval(document.getElementById("aukotcord_up").value) - (eval(document.getElementById(
    "aukotcord_low").value))));
  // if(input) {
  //   if (input.value % 25 !== 0) {
  //     alert("Moduulimittaa, kiitos");
  //     // console.log(input);
  //     document.querySelector("#drawscreen_section_two > div > div > div > div.modal_close_btn.drawarea__controls_btn").style.opacity = 0;
  //   } else {
  //     // alert("Moduulimittaa, kiitos.");
  //     document.querySelector("#drawscreen_section_two > div > div > div > div.modal_close_btn.drawarea__controls_btn").style.opacity = 1;
  //   }
  // }
}
var erikois_array_array = [];
function ylitys__array() {

  ylitysas = document.querySelector(".aukko_ylitys input:checked").value;
  headings = document.querySelectorAll("#hole_set h4."+cur_aukko_type+"__asetusheading");
  
  all_tr_array = [];
  // SEARCH FOR CORRECT TYPE
  for (let a = 0; a < headings.length; a++) {
    h4 = headings[a];
    if(h4.querySelector("b").innerText == ylitysas) {
      table_trs = h4.parentElement.querySelectorAll("table")[a].querySelectorAll("tr:not(.headingrow)");
      for (let b = 0; b < table_trs.length; b++) {
        tr_array = [];
        input_array = table_trs[b].querySelectorAll("input");
        
        for (let c = 0; c < input_array.length; c++) {
          tr_array.push(input_array[c].value);
          
        }
        all_tr_array.push(tr_array);
      }
    }
  }
  vasen_array = [];
  oikea_array = [];
  yla_array = [];
  ala_array = [];

  for (let a = 0; a < all_tr_array.length; a++) {
    aukko_input = all_tr_array[a];
    aukko_array = [];
    for (let b = 0; b < aukko_input.length; b++) {
      aukko_array.push(aukko_input[b])
      if(aukko_input[0].toLowerCase().includes("vasen")) {
        vasen_array = aukko_array;
      }
      if(aukko_input[0].toLowerCase().includes("oikea")) {
        oikea_array = aukko_array;
      }
      if(aukko_input[0].toLowerCase().includes("ylä")) {
        yla_array = aukko_array;
      }
      if(aukko_input[0].toLowerCase().includes("ala")) {
        ala_array = aukko_array;
      }
    }
  }

  if(vasen_array.length < 2 || ala_array.length < 2 || yla_array.length < 2 || oikea_array.length < 2) {
    alert("VIRHE ASETUSTEN LUVUSSA");
    return;
  }

  aukko = canvas.querySelectorAll(".aukko");
  for (var i = 0; i < aukko.length; i++) {
    aukko[i].dataset.l2a_or_lista = oikea_array[9];
    aukko[i].dataset.l2a_or_listapituus = oikea_array[10];
    aukko[i].dataset.l2a_or_listalaatu = oikea_array[11];
    aukko[i].dataset.l2a_vr_lista = vasen_array[9];
    aukko[i].dataset.l2a_vr_listapituus = vasen_array[10];
    aukko[i].dataset.l2a_vr_listalaatu = vasen_array[11];
    aukko[i].dataset.l2a_yr_lista = yla_array[9];
    aukko[i].dataset.l2a_yr_listapituus = yla_array[10];
    aukko[i].dataset.l2a_yr_listalaatu = yla_array[11];
    aukko[i].dataset.l2a_ar_lista = ala_array[9];
    aukko[i].dataset.l2a_ar_listapituus = ala_array[10];
    aukko[i].dataset.l2a_ar_listalaatu = ala_array[11];


    aukko[i].dataset.l2b_or_lista = oikea_array[12];
    aukko[i].dataset.l2b_or_listapituus = oikea_array[13];
    aukko[i].dataset.l2b_or_listalaatu = oikea_array[14];
    aukko[i].dataset.l2b_vr_lista = vasen_array[12];
    aukko[i].dataset.l2b_vr_listapituus = vasen_array[13];
    aukko[i].dataset.l2b_vr_listalaatu = vasen_array[14];
    aukko[i].dataset.l2b_yr_lista = yla_array[12];
    aukko[i].dataset.l2b_yr_listapituus = yla_array[13];
    aukko[i].dataset.l2b_yr_listalaatu = yla_array[14];
    aukko[i].dataset.l2b_ar_lista = ala_array[12];
    aukko[i].dataset.l2b_ar_listapituus = ala_array[13];
    aukko[i].dataset.l2b_ar_listalaatu = ala_array[14];

    if (aukko[i].classList.contains("ovi"))  {
      left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(vasen_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(oikea_array[1]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ala_array[1]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(yla_array[1]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);

    }
    else if (aukko[i].classList.contains("ikkuna")) {
      left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(vasen_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(oikea_array[1]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ala_array[1]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(yla_array[1]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
    else if (aukko[i].classList.contains("palkki")) {
      left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(vasen_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(oikea_array[1]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ala_array[1]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(yla_array[1]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
    else if (aukko[i].classList.contains("pilari"))  {
       left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(vasen_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(oikea_array[1]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ala_array[1]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(yla_array[1]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
    else if (aukko[i].classList.contains("tuuletus")) {
      left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(vasen_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(oikea_array[1]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ala_array[1]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(yla_array[1]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
  }
  // document.querySelector(".a_asetukset").value = all_array;
}