function luo__levy(h, w, dex, col, b, l) {
  dex += 1;
  var ind;
  title_index = h + "," + w + "," + b + "," + l;
  roomname = document.querySelector(".room").value;
  wallname = document.querySelector(".wall").value;
  if (roomname == "") {
    roomname = "Seinän levy";
  }
  r = wallname.replace("SEINÄ ", "").replace("1. ", "").replace("2. ", "").replace("3. ", "").replace("4. ", "").replace("5. ", "").replace("6. ", "").replace(
    "KATTO ", "").replace("LATTIA ", "");
  var levy__interval_horizontal = parseFloat(h) / 5 + 1;
  var levy__interval_vertical = parseFloat(w) / 5 + 1;
  var levy = document.createElement("div");
  var levy_h = document.createElement("div");
  var levy_w = document.createElement("div");
  var levy_name = document.createElement("div");
  levy.classList.add("levy");
  levy_h.classList.add("levy_h");
  levy_w.classList.add("levy_w");
  levy_name.classList.add("levy_name");
  if (document.getElementById("settings__sauma_pysty").checked) {
    levy.classList.add("dir_y");
  }
  else if (document.getElementById("settings__sauma_vaaka").checked) {
    levy.classList.add("dir_x");
  }
  ind = String.fromCharCode(65 + col);
  levy_h.innerHTML = h
  levy_w.innerHTML = w;
  levy_name.innerHTML = r + "_" + ind + dex;
  levy.innerHTML = "<b> <div class='levy_name'> " + levy_name.innerHTML + "</div><i>" + h + "x" + w + "mm</i></b>";
  levy.setAttribute("title", title_index);
  levy.style.height = (parseFloat(levy__interval_vertical)) + 'px';
  // levy.style.width = (parseFloat(levy__interval_horizontal)) + 'px';
  levy.style.width = (parseFloat(levy__interval_horizontal)) + 'px';
  levy_h.style.display = "none";
  levy_w.style.display = "none";
  levy.appendChild(levy_h);
  levy.appendChild(levy_w);
  levy.style.position = "absolute";
  levy.style.bottom = (parseFloat(b) / 5) + "px";
  if (document.getElementById("settings__saumahanta-oik").checked || document.getElementById("settings__saumahanta-tasoitus").checked || document
    .getElementById("settings__saumahanta-vas").checked && document.querySelector("#saumoitus__sauma_two").checked || pystyhanta_oikealle === true) {
    levy.style.left = (parseFloat(l) / 5) + "px";
  }
  else if (document.getElementById("settings__saumahanta-vas").checked && document.querySelector("#saumoitus__sauma_one").checked) {
    levy.style.right = (parseFloat(l) / 5) + "px";
  }
  else {
    levy.style.right = (parseFloat(l) / 5) + "px";
  }
  // levy.appendChild(levy_name);
  var l_meta = document.createElement("input");
  l_meta.type = "hidden";
  l_meta.classList = "l_meta";
  levy.appendChild(l_meta);
  return levy;
  levy_array.append(levy);

}

function levyta() {
  fixmissing__saumoitus();
  levy_c = -1;
  levy_array = [];
  if (canvas.querySelector(".levy") || canvas.querySelector(".levyt") || canvas.querySelector(".levysarake")) {
    let levy = canvas.querySelectorAll(".levy");
    for (var i = 0; i < levy.length; i += 1) {
      levy[i].remove();
    }
    let levyrow = canvas.querySelectorAll(".levyt");
    for (var i = 0; i < levyrow.length; i += 1) {
      levyrow[i].remove();
    }
    let levysarake = canvas.querySelectorAll(".levysarake");
    for (var i = 0; i < levysarake.length; i += 1) {
      levysarake[i].remove();
    }
    // let verticalrow_saumat = document.querySelectorAll(".verticalrow_saumat");
    // for (var i=0;i<verticalrow_saumat.length;i+=1){
    //   verticalrow_saumat[i].style.position = "absolute";
    // }
    // let horizontalrow_saumat = document.querySelectorAll(".horizontalrow_saumat");
    // for (var i=0;i<horizontalrow_saumat.length;i+=1){
    //   horizontalrow_saumat[i].style.position = "absolute";
    // }
  }
  if(document.querySelector(".sauma__horizontal_ctrldown > div")) {
    vaakamitat = document.querySelectorAll(".sauma__horizontal_ctrldown > div");
  }
  else {
    vaakamitat = document.querySelectorAll(".sauma__horizontal_ctrldown");
  }
  
  let pystymitat = document.querySelectorAll(".sauma__vertical_ctrldown");
  var levyt = document.createElement("div");
  // var canvas = document.querySelector("#box-wrapper > main");
  myDivs_horizontal = [],
    myDivs_vertical = [],
    i = 0, 2
  j = 0;
  levycount = parseFloat(vaakamitat.length * pystymitat.length);
  if (document.getElementById("settings__sauma_pysty").checked) {
    document.querySelector("#settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;
    document.querySelector("#settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;
    document.querySelector("#k_settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;
    document.querySelector("#k_settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;
    if (drawarea.querySelector("#drawscreen_section_tyostot .visible")) {
      drawarea.querySelector("#drawscreen_section_tyostot .visible").classList.add("dir_y");
    }
  }
  else if (document.getElementById("settings__sauma_vaaka").checked) {
    document.querySelector("#settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;
    document.querySelector("#settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;
    document.querySelector("#k_settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;
    document.querySelector("#k_settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;
    if (drawarea.querySelector("#drawscreen_section_tyostot .visible")) {
      drawarea.querySelector("#drawscreen_section_tyostot .visible").classList.add("dir_x");
    }
  }
  levyt.classList.add("levyt");
  // if (document.getElementById("settings__saumahanta-vas").checked) {
  //   levyt.style.flexDirection = "row-reverse";
  // }
  if (input_step == 'drawscreen_section_four') {
    var prev_b = 0;
    var preh_l = 0;
    for (var i = 0; i < vaakamitat.length; i++) {
      var levysarake = document.createElement("div");
      levysarake.classList.add("levysarake");
      levysarake.setAttribute("title", "s" + i);
      prev_b += parseFloat(vaakamitat[i].innerHTML);
      b = prev_b - parseFloat(vaakamitat[i].innerHTML) + 10 * [i] + 5;
      preh_l = 0;
      //LEFT
      for (var j = 0; j < pystymitat.length; j++) {
        h = parseFloat(pystymitat[j].innerHTML);
        w = parseFloat(vaakamitat[i].innerHTML);
        preh_l += parseFloat(pystymitat[j].innerHTML);
        l = preh_l - parseFloat(pystymitat[j].innerHTML) + 10 * [j] + 5;
        levyt.append(luo__levy(h, w, i, j, b, l))
        // levy_array.push(luo__levy(h,w,i,j,b,l))
      }
      // levyt.append(levysarake);
    }
    canvas.append(levyt);
    // var saumat__grandrow = document.querySelector(".saumat__grandrow");
    // var verticalrow_saumat = document.querySelector(".verticalrow_saumat");
    // saumat__grandrow.style.position = "absolute";
    // verticalrow_saumat.style.top = "0";
    // saumat__grandrow.remove();
    let levy = document.querySelectorAll(".levy");
    for (var i = 0; i < levy.length; i += 1) {
      raksita(levy[i]);
    }
    if (document.querySelector(".levy") || document.querySelector(".levyt") || document.querySelector(".levysarake")) {
      let levy = document.querySelectorAll(".levy");
      for (var i = 0; i < levy.length; i += 1) {
        // levy[i].style.background = "transparent";
        levy[i].classList.add("levy_transparent");
      }
      let closer = document.querySelectorAll(".closer");
      for (var i = 0; i < closer.length; i += 1) {
        closer[i].style.zIndex = 4;
        closer[i].style.opacity = 1;
      }
      // let verticalrow_saumat = document.querySelectorAll(".verticalrow_saumat");
      // for (var i=0;i<verticalrow_saumat.length;i+=1){
      //   verticalrow_saumat[i].style.position = "absolute";
      // }
      // let horizontalrow_saumat = document.querySelectorAll(".horizontalrow_saumat");
      // for (var i=0;i<horizontalrow_saumat.length;i+=1){
      //   horizontalrow_saumat[i].style.position = "absolute";
      // }
    }
  }
    aukkojenallapoisto();
}

function poista__aukkoala() {
  aukkos = canvas.querySelectorAll(".aukko");
  levys = canvas.querySelectorAll(".levy");
  for (var i = aukkos.length - 1; i >= 0; i--) {
    a_title_ = aukkos[i].title;
    a_title = a_title_.split(",");
    aukko_h = parseFloat(aukkos[i].querySelector(".aukko_tcord").innerHTML) -  parseFloat(aukkos[i].querySelector(".aukko_bcord").innerHTML);
    aukko_w = parseFloat(aukkos[i].querySelector(".aukko_rcord").innerHTML)-parseFloat(aukkos[i].querySelector(".aukko_lcord").innerHTML);
    aukko_l = parseFloat(aukkos[i].querySelector(".aukko_lcord").innerHTML);
    aukko_b = parseFloat(aukkos[i].querySelector(".aukko_bcord").innerHTML);
    for (var l = levys.length - 1; l >= 0; l--) {
      l_title_ = levys[l].title;
      l_title = l_title_.split(",");
      levy_h = parseFloat(l_title[1]);
      levy_w = parseFloat(l_title[0]);
      levy_l = parseFloat(l_title[3]);
      levy_b = parseFloat(l_title[2]);
      //DELETE IF COMPLETELY SAME
      if (levy_h === aukko_h - 10) {
        // levys[l].style.background = "green";
        // console.log("aukko_h " + aukko_h + " levy_h: " + levy_h);
      }
      if (levy_w === (aukko_w - 10)) {
        // levys[l].style.background = "blue";
        // console.log("aukko_w " + aukko_w + " levy_w: " + levy_w);
      }
      if (levy_l - 5 === aukko_l) {
        // levys[l].style.background = "yellow";
        // console.log("aukko_l " + aukko_l + " levy_l: " + levy_l);
      }
      if (levy_b - 5 === aukko_b) {
        // levys[l].style.background = "purple";
        // console.log("aukko_b " + aukko_b + " levy_b: " + levy_b);
      }
      if (levy_h === aukko_h - 10 && levy_w === (aukko_w - 10) && levy_l - 5 === aukko_l && levy_b - 5 === aukko_b) {
        levys[l].remove();
      }
    }
  }
}

function open_ladonta_settings(e) {
  if (e === true) {
    document.querySelector(".ladonta_container").classList.add("two");
  }
  else if (e === false) {
    document.querySelector(".ladonta_container").classList.remove("two");
  }
}
function raksita(levy) {
  levy_c += 1;

  levys = canvas.querySelectorAll(".levy");
  for (var i = 0; i < levys.length; i++) {
    levys[i].dataset.levy = i;
  }

  var closer_1 = document.createElement("div");
  var closer_2 = document.createElement("div");
  var closer_3 = document.createElement("div");
  var closer_4 = document.createElement("div");
  closer_1.classList.add("closer");
  closer_2.classList.add("closer");
  closer_3.classList.add("closer");
  closer_4.classList.add("closer");
  closer_1.classList.add("closer_1");
  closer_2.classList.add("closer_2");
  closer_3.classList.add("closer_3");
  closer_4.classList.add("closer_4");
  closer_1.innerHTML = "X";

  closer_2.innerHTML = "X";

  closer_4.style.marginLeft = "0";
  closer_2.style.position = "absolute";
  closer_4.style.marginBottom = "auto";
  closer_4.style.marginTop = "auto";


  closer_3.style.marginLeft = "auto";
  closer_3.style.marginRight = "auto";

  closer_3.innerHTML = "X";
  closer_4.innerHTML = "X";
  closer_1.setAttribute("onclick", "");
  closer_2.setAttribute("onclick", "");
  closer_3.setAttribute("onclick", "closer_top(this.parentElement);");
  closer_4.setAttribute("onclick", "closer_left(this.parentElement);");
  levy.appendChild(closer_3);
  levy.appendChild(closer_4); 
  levy.setAttribute("data-levy", levy_c);
  canvas_btm = parseFloat(canvas.getBoundingClientRect().bottom) - 20;
  canvas_left = parseFloat(canvas.getBoundingClientRect().left) +10;

  if(canvas_btm<parseFloat(levy.getBoundingClientRect().bottom)) {
    levy.querySelector(".closer_3").remove();
  }
  if(canvas_left>parseFloat(levy.getBoundingClientRect().left)) {
    levy.querySelector(".closer_4").remove();
  }
  // if(levy.getBoundingClientRect().bottom)
}
function closer_left(me) {
  c = parseFloat(me.dataset.levy);
  me_width = parseFloat(me.style.width);

  zelector = c - 1;

  prev = document.querySelector('div[data-levy="'+zelector+'"]');
  prev_width = parseFloat(document.querySelector('div[data-levy="'+zelector+'"]').style.width);
  

  if(parseFloat(me.style.height) === parseFloat(prev.style.height)) {
    prev.style.width = parseFloat(me_width)+parseFloat(prev_width)+1+"px";
    hcord = (parseFloat(prev.style.height)*5)-5;
    wcord = (parseFloat(prev.style.width)*5)-5;
    prev.querySelector("i").innerHTML = hcord +"x"+wcord;
    prev.setAttribute("title", wcord +","+ hcord+","+parseFloat(prev.style.bottom)*5+","+parseFloat(prev.style.left)*5);

    prev.querySelector(".levy_h").innerHTML  = parseFloat(hcord);
    prev.querySelector(".levy_w").innerHTML  = parseFloat(wcord);
    me.remove();
  }

  if (document.getElementById("settings__sauma_pysty").checked) {
    v_i = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
    h_i = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
  }
  if (document.getElementById("settings__sauma_vaaka").checked) {
    v_i = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
    h_i = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
  }

  if (document.getElementById("settings__sauma_pysty").checked && parseFloat(prev.style.height)*5 > h_i || document.getElementById("settings__sauma_vaaka").checked && parseFloat(prev.style.height)*5 > h_i) {
    alert("VAROITUS: LEVY YLITTÄÄ MAKSIMIMITAT");
    prev.style.outline = "3px dashed red";
    prev.style.outlineOffset = "-4px";
  }
  if (document.getElementById("settings__sauma_pysty").checked && parseFloat(prev.style.width)*5 > v_i || document.getElementById("settings__sauma_vaaka").checked && parseFloat(prev.style.width)*5 > v_i) {
    alert("VAROITUS: LEVY YLITTÄÄ MAKSIMIMITAT");
    prev.style.outline = "3px dashed red";
    prev.style.outlineOffset = "-4px";
  }

  prev.classList.add("combined__levy");

   levys = canvas.querySelectorAll(".levy");
  for (var i = 0; i < levys.length; i++) {
    levys[i].dataset.levy = i;
  }
}
function closer_top(me) {
  console.log("BTM");
  me_btm = parseFloat(me.getBoundingClientRect().bottom);
  me_l = parseFloat(me.getBoundingClientRect().left);

  levyt_item = canvas.querySelectorAll(".levy");
  for (var i = levyt_item.length - 1; i >= 0; i--) {
    b_btm = parseFloat(levyt_item[i].getBoundingClientRect().top)+2;
    b_l = parseFloat(levyt_item[i].getBoundingClientRect().left);
    if(me_btm <= b_btm && me_l == b_l) {
      prev = levyt_item[i];
      break
    }
    
  }

  prev_height = parseFloat(prev.style.height);
  me_height = parseFloat(me.style.height);

  prev.style.height = parseFloat(me_height)+parseFloat(prev_height)+1+"px";
  hcord = (parseFloat(prev.style.height)*5)-5;
  wcord = (parseFloat(prev.style.width)*5)-5;
  prev.querySelector("i").innerHTML = hcord +"x"+wcord;
  prev.setAttribute("title", hcord +","+ wcord+","+parseFloat(prev.style.bottom)*5+","+parseFloat(prev.style.left)*5);
  me.remove();


  if (document.getElementById("settings__sauma_pysty").checked) {
    v_i = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
    h_i = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
  }
  if (document.getElementById("settings__sauma_vaaka").checked) {
    v_i = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
    h_i = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
  }

  if (document.getElementById("settings__sauma_pysty").checked && parseFloat(prev.style.height)*5 > h_i || document.getElementById("settings__sauma_vaaka").checked && parseFloat(prev.style.height)*5 > h_i) {
    alert("VAROITUS: LEVY YLITTÄÄ MAKSIMIMITAT");
    prev.style.outline = "3px dashed red";
    prev.style.outlineOffset = "-4px";
  }
  if (document.getElementById("settings__sauma_pysty").checked && parseFloat(prev.style.width)*5 > v_i || document.getElementById("settings__sauma_vaaka").checked && parseFloat(prev.style.width)*5 > v_i) {
    alert("VAROITUS: LEVY YLITTÄÄ MAKSIMIMITAT");
    prev.style.outline = "3px dashed red";
    prev.style.outlineOffset = "-4px";
  }

  prev.classList.add("combined__levy");


  levys = canvas.querySelectorAll(".levy");
  for (var i = 0; i < levys.length; i++) {
    levys[i].dataset.levy = i;
  }


}

// Restoring levy

function luo__levy_restore(mod_nam, mod_type, mod_b, mod_left, mod_height, mod_width, mod_title, mod_count) {
  dex += 1;
  var ind;
  occurence = "--"
  title_index = mod_title.replaceAll(occurence,",");
  
  var levy__interval_horizontal = parseFloat(mod_height) / 5;
  var levy__interval_vertical = parseFloat(mod_width) / 5 + 1;
  var levy = document.createElement("div");
  var levy_h = document.createElement("div");
  var levy_w = document.createElement("div");
  var levy_name = document.createElement("div");
  levy.classList.add("levy");
  levy_h.classList.add("levy_h");
  levy_w.classList.add("levy_w");
  levy_name.classList.add("levy_name");
  if (mod_type === "pysty") {
    levy.classList.add("dir_y");
  }
  else if (mod_type === "vaaka") {
    levy.classList.add("dir_x");
  }
  levy_h.innerHTML = mod_height
  levy_w.innerHTML = mod_width;
  levy_name.innerHTML = mod_nam;
  levy.innerHTML = "<b> <div class='levy_name'> " + mod_nam + "</div><i>" + mod_height + "x" + mod_width + "mm</i></b>";
  levy.setAttribute("title", title_index);
  levy.style.height = (parseFloat(mod_height))/5 + 'px';
  // levy.style.width = (parseFloat(levy__interval_horizontal)) + 'px';
  levy.style.width = (parseFloat(mod_width))/5 + 'px';
  levy_h.style.display = "none";
  levy_w.style.display = "none";
  levy.appendChild(levy_h);
  levy.appendChild(levy_w);
  levy.style.position = "absolute";
  levy.style.bottom = (parseFloat(mod_b) / 5) + "px";
  levy.style.left = (parseFloat(mod_left) / 5) + "px";
  var l_meta = document.createElement("input");
  l_meta.type = "hidden";
  l_meta.classList = "l_meta";
  levy.appendChild(l_meta);
  levy.dataset.levy = parseFloat(mod_count);
  return levy;
  levy_array.append(levy);

  dex = mod_nam.split("_")[1][1];
  col = mod_nam.split("_")[1][0];

}