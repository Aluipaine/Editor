user = document.querySelector("#mittapiste_comment_from").value;
document.querySelector("#aukko_comment_from").value = user;

function open_aukko_settings(e) {
  if (e === true) {
    document.querySelector(".aukko_container").classList.add("two");
  }
  else if (e === false) {
    document.querySelector(".aukko_container").classList.remove("two");
  }

  tds = document.querySelectorAll(".aukko_container .group-0 td");

  for (var i = 0; i < tds.length; i++) {
    if(tds[i].innerHTML.replaceAll(" ","").length <= 3) {
       tds[i].remove();
    }
  }
}
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
  if (document.querySelector("#type__window").checked) {
    // document.getElementById("hole__height").value = 1000;
    // document.getElementById("hole__width").value = 2000;
    document.querySelector("#aukko__name").value = "Ikkuna ";
  }
  if (document.querySelector("#type__palkki").checked) {
    // document.getElementById("hole__height").value = 100;
    // document.getElementById("hole__width").value = 1000;
    document.querySelector("#aukko__name").value = "Palkki ";
  }
  if (document.querySelector("#type__collar").checked) {
    // document.getElementById("hole__height").value = 1000;
    // document.getElementById("hole__width").value = 100;
    document.querySelector("#aukko__name").value = "Pilari ";
  }
  if (document.querySelector("#type__ventilation").checked) {
    // document.getElementById("hole__height").value = 200;
    // document.getElementById("hole__width").value = 200;
    document.querySelector("#aukko__name").value = "Ilmastointi ";
  }
  // document.getElementById("settings__aukko").style.height = (document.getElementById("hole__height").value / height * 100) + '%';
  // document.getElementById("settings__aukko").style.width = (document.getElementById("hole__width").value / width * 100) + '%';
  // change__aukko_size();
}
ovi_count = 0;
ikkuna_count = 0;
palkki_count = 0;
pilari_count = 0;
ilmastointi_count = 0;

function aukko_count(aukko, count) {
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

function ylitys__array() {
  ikkuna_a = document.querySelectorAll(".ikkuna_info input");
  ovi_a = document.querySelectorAll(".ovi_info input");
  ilmastointi_a = document.querySelectorAll(".ilmastointi_info input");
  pilari_a = document.querySelectorAll(".pilari_info input");
  erikois_a = document.querySelectorAll(".alue_erikoisranka_info input");

  ikkuna_array = [];
  ovi_array = [];
  ilmastointi_array = [];
  pilari_array = [];
  erikois_array = [];
  all_array = [];

  for (var i = 0; i < ikkuna_a.length; i++) {
    all_array.push(ikkuna_a[i].value);
    ikkuna_array.push(ikkuna_a[i].value);
  }

  for (var i = 0; i < ovi_a.length; i++) {
    all_array.push(ovi_a[i].value);
    ovi_array.push(ovi_a[i].value);
  }

  for (var i = 0; i < ilmastointi_a.length; i++) {
    all_array.push(ilmastointi_a[i].value);
    ilmastointi_array.push(ilmastointi_a[i].value);
  }

  for (var i = 0; i < pilari_a.length; i++) {
    all_array.push(pilari_a[i].value);
    pilari_array.push(pilari_a[i].value);
  }

  for (var i = 0; i < erikois_a.length; i++) {
    all_array.push(erikois_a[i].value);
    erikois_array.push(erikois_a[i].value);
  }


  aukko = canvas.querySelectorAll(".aukko");
  for (var i = 0; i < aukko.length; i++) {
    if (aukko[i].classList.contains("ovi"))  {
      left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(ovi_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(ovi_array[3]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ovi_array[7]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(ovi_array[6]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);

    }
    else if (aukko[i].classList.contains("ikkuna")) {
      left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(ikkuna_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(ikkuna_array[3]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ikkuna_array[7]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(ikkuna_array[6]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
    else if (aukko[i].classList.contains("palkki")) {
       left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(erikois_array_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(erikois_array_array[3]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(erikois_array_array[7]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(erikois_array_array[6]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
    else if (aukko[i].classList.contains("pilari"))  {
       left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(pilari_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(pilari_array[3]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(pilari_array[7]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(pilari_array[6]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
    else if (aukko[i].classList.contains("tuuletus")) {
      left_side = parseFloat(aukko[i].querySelector(".aukko_lcord").dataset.from)-10;
      left_plus = parseFloat(ilmastointi_array[1]);
      real_left_side = roundToNearest25(left_side+left_plus);

      right_side = parseFloat(aukko[i].querySelector(".aukko_rcord").dataset.from)-10;
      right_plus = parseFloat(ilmastointi_array[3]);
      real_right_side = roundToNearest25(right_side+right_plus);

      bottom_side = parseFloat(aukko[i].querySelector(".aukko_bcord").dataset.from)-10;
      bottom_plus = parseFloat(ilmastointi_array[7]);
      real_bottom_side = roundToNearest25(bottom_side+bottom_plus);

      top_side = parseFloat(aukko[i].querySelector(".aukko_tcord").dataset.from)-10;
      top_plus = parseFloat(ilmastointi_array[6]);
      real_top_side = roundToNearest25(top_side+top_plus);


      aukko[i].querySelector(".aukko_lcord").innerHTML = parseFloat(real_left_side);
      aukko[i].querySelector(".aukko_rcord").innerHTML = parseFloat(real_right_side);
      aukko[i].querySelector(".aukko_bcord").innerHTML = parseFloat(real_bottom_side);
      aukko[i].querySelector(".aukko_tcord").innerHTML = parseFloat(real_top_side);
    }
  }


 
  document.querySelector(".a_asetukset").value = all_array;
  

}