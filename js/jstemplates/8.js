function rangat__navigation(arg) {
  levyt = canvas.querySelectorAll(".levy");
  listat__grandrow = canvas.querySelector(".listat__grandrow");
  rangat_vaaka = canvas.querySelectorAll(".tyostot__tyosto_vaaka");
  rangat_pysty = canvas.querySelectorAll(".tyostot__tyosto_pysty");
  if (document.querySelector("#rangoitus__lvl_one").checked) {
    for (var i = 0; i < levyt.length; i++) {
      levyt[i].classList.remove("six_hidden");
    }
    if (listat__grandrow) {
      listat__grandrow.classList.remove("six_hidden");
    }
  }
  else {
    for (var i = 0; i < levyt.length; i++) {
      levyt[i].classList.add("six_hidden");
    }
    if (listat__grandrow) {
      listat__grandrow.classList.add("six_hidden");
    }
  }
  if (document.querySelector("#rangoitus__lvl_two").checked) {
    for (var i = 0; i < rangat_pysty.length; i++) {
      rangat_pysty[i].classList.remove("six_hidden");
    }
  }
  else {
    for (var i = 0; i < rangat_pysty.length; i++) {
      rangat_pysty[i].classList.add("six_hidden");
    }
  }
  if (document.querySelector("#rangoitus__lvl_three").checked) {}
  else {}
  if (document.querySelector("#rangoitus__lvl_four").checked) {
    for (var i = 0; i < rangat_vaaka.length; i++) {
      rangat_vaaka[i].classList.remove("six_hidden");
    }
  }
  else {
    for (var i = 0; i < rangat_vaaka.length; i++) {
      rangat_vaaka[i].classList.add("six_hidden");
    }
  }
}

function rangoita() {
  h = parseFloat(document.querySelector("#box_h").value);
  w = parseFloat(document.querySelector("#box_w").value);
  tyostot__tyosto_pysty = canvas.querySelectorAll(".levy_tyostot_x > div");
  tyostot__tyosto_vaaka = canvas.querySelectorAll(".levy_tyostot_y > div");
  verticalrow_saumat = canvas.querySelectorAll(".sauma__vertical_ctrldown");
  horizontalrow_saumat = canvas.querySelectorAll(".sauma__horizontal_ctrldown");
  td_p = [];
  td_v = [];
  first_excel = document.querySelector("#drawscreen_section_six > section.ranka_excel > table > tbody > tr");
  tds = first_excel.querySelectorAll("td");
  for (var i = 0; i < tds.length; i++) {
    if (tds[i].classList.contains("cool") !== true) {
      tds[i].remove();
    }
  }
  for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
    if (tyostot__tyosto_pysty[i].querySelector("input.x_cord")) {
      if (tyostot__tyosto_pysty[i].classList.contains("no_siirto") !== true) {
        d_c = tyostot__tyosto_pysty[i].querySelector("input.x_cord").value;
        lc = parseFloat(tyostot__tyosto_pysty[i].parentElement.parentElement.style.left) + parseFloat(tyostot__tyosto_pysty[i].style.left);
        t_p_array = lc + "," + parseFloat(d_c) + "," + tyostot__tyosto_pysty[i].innerHTML;
        td_p.push(t_p_array);
      }
    }
    else {}
  }
  for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
    if (tyostot__tyosto_vaaka[i].classList.contains("no_siirto") !== true) {
      bc = parseFloat(tyostot__tyosto_vaaka[i].parentElement.parentElement.style.bottom) + parseFloat(tyostot__tyosto_vaaka[i].style.bottom);
      t_v_array = bc + "," + parseFloat(bc) + "," + tyostot__tyosto_vaaka[i].innerHTML;
      td_v.push(t_v_array);
    }
  }
  td_p.sort(function(a, b) {
    if (a.split(",")[0] > b.split(",")[0]) return 1;
    if (a.split(",")[0] < b.split(",")[0]) return -1;
    return 0;
  });
  td_v.sort(function(a, b) {
    if (a.split(",")[0] > b.split(",")[0]) return 1;
    if (a.split(",")[0] < b.split(",")[0]) return -1;
    return 0;
  });

  function removeDupleTyosto(arr) {
    return arr.filter((item, index) => arr.indexOf(item) === index);
  }
  t_p = removeDupleTyosto(td_p);
  t_v = removeDupleTyosto(td_v);
  for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
    tyostot__tyosto_pysty[i].style.opacity = 0;
  }
  for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
    tyostot__tyosto_vaaka[i].style.opacity = 0;
  }
  var tyostot;
  if (document.querySelector(".tyostot__grandrow")) {
    tyostot = document.querySelector(".tyostot__grandrow");
  }
  else {
    tyostot = document.createElement("div");
    tyostot.classList.add("tyostot__grandrow");
    canvas.prepend(tyostot);
  }
  pv = 0;
  vs_array_summ = 0;
  hs_array_summ = 0;
  alkuranka_pysty = document.createElement("div");
  alkuranka_pysty.classList.add("tyostot__tyosto");
  alkuranka_pysty.classList.add("tyostot__tyosto_pysty");
  alkuranka_pysty.classList.add("alkuranka_pysty");
  alkuranka_pysty.classList.add("erikoisranka");
  alkuranka_pysty.dataset.name = "erikoisranka";
  alkuranka_pysty.style.left = "0" + "px";
  tyostot.prepend(alkuranka_pysty);
  alkuranka_vaaka = document.createElement("div");
  alkuranka_vaaka.classList.add("tyostot__tyosto");
  alkuranka_vaaka.classList.add("tyostot__tyosto_vaaka");
  alkuranka_vaaka.classList.add("alkuranka_vaaka");
  alkuranka_vaaka.classList.add("erikoisranka");
  alkuranka_vaaka.dataset.name = "erikoisranka";
  alkuranka_vaaka.style.bottom = "0" + "px";
  tyostot.prepend(alkuranka_vaaka);
  soma = canvas.querySelectorAll(".sauma");
  for (var i = soma.length - 1; i >= 0; i--) {
    soma[i].classList.add("deformed");
    saumaranka = soma[i].cloneNode(true);
    saumaranka.innerHTML = "";
    soma[i].classList.add("non-existent");
    if (parseFloat(soma[i].style.left) == w / 5 || parseFloat(soma[i].style.bottom) == h / 5) {
      soma[i].classList.add("non-existent");
      continue
    }
    saumaranka.style.zIndex = 9;
    if (soma[i].classList.contains("sauma__vertical") === true) {
      soma_left = parseFloat(soma[i].style.left);
      saumaranka.style.left = (soma_left) + "px";
      saumaranka.classList.add("tyostot__tyosto");
      saumaranka.classList.add("tyostot__tyosto_pysty");
      saumaranka.classList.add("saumaranka");
      saumaranka.dataset.name = "saumaranka";
    }
    if (soma[i].classList.contains("sauma__horizontal") === true) {
      soma_bottom = parseFloat(soma[i].style.bottom);
      saumaranka.style.bottom = (soma_bottom) + "px";
      saumaranka.classList.add("tyostot__tyosto");
      saumaranka.classList.add("tyostot__tyosto_vaaka");
      saumaranka.classList.add("saumaranka");
      saumaranka.dataset.name = "saumaranka";
    }
    tyostot.append(saumaranka);
  }
  vs_array_down = [];
  hs_array_down = [];
  for (var i = 0; i < verticalrow_saumat.length; i++) {
    vs_array_down.push(parseFloat(verticalrow_saumat[i].innerText));
  }
  for (var i = 0; i < horizontalrow_saumat.length; i++) {
    hs_array_down.push(parseFloat(horizontalrow_saumat[i].innerText));
  }
  // vs_array_down
  // hs_array_down
  // for (var i = t_p.length - 1; i >= 0; i--) {
  //   Things[i]
  // }
  for (var i = t_p.length - 1; i >= 0; i--) {
    tyosto = document.createElement("div");
    tyosto.classList.add("tyostot__tyosto");
    tyosto.classList.add("valiranka");
    tyosto.dataset.name = "väliranka";
    tyosto.classList.add("tyostot__tyosto_pysty");
    tyosto.style.left = roundToNearest25(parseFloat(t_p[i].split(",")[0])) + "px";
    // tyosto.innerHTML = parseFloat(t_p[i].split(",")[0])-parseFloat(canvas.getBoundingClientRect().left);
    tyostot.append(tyosto);
  }
  for (var i = t_v.length - 1; i >= 0; i--) {
    tyosto = document.createElement("div");
    tyosto.classList.add("tyostot__tyosto");
    tyosto.classList.add("valiranka");
    tyosto.dataset.name = "väliranka";
    tyosto.classList.add("tyostot__tyosto_vaaka");
    tyosto.style.bottom = roundToNearest25(parseFloat(t_v[i].split(",")[0])) + "px";
    // tyosto.innerHTML = parseFloat(t_p[i].split(",")[0])-parseFloat(canvas.getBoundingClientRect().left);
    tyostot.append(tyosto);
  }
  aukot = canvas.querySelectorAll(".aukko");
  for (var i = 0; i < aukot.length; i++) {
    if (aukot[i].classList.contains("ikkuna")) {
      irv = document.createElement("div");
      iro = document.createElement("div");
      ira = document.createElement("div");
      iry = document.createElement("div");
      irv.classList.add("tyostot__tyosto");
      irv.classList.add("tyostot__tyosto_pysty");
      irv.classList.add("ikkunaranka");
      irv.classList.add("ikkunaranka_irv");
      irv.dataset.name = "ikkunaranka_irv";
      iro.classList.add("tyostot__tyosto");
      iro.classList.add("tyostot__tyosto_pysty");
      iro.classList.add("ikkunaranka");
      iro.classList.add("ikkunaranka_iro");
      iro.dataset.name = "ikkunaranka_iro";
      ira.classList.add("tyostot__tyosto");
      ira.classList.add("tyostot__tyosto_vaaka");
      ira.classList.add("ikkunaranka");
      ira.classList.add("ikkunaranka_ira");
      ira.dataset.name = "ikkunaranka_ira";
      iry.classList.add("tyostot__tyosto");
      iry.classList.add("tyostot__tyosto_vaaka");
      iry.classList.add("ikkunaranka");
      iry.classList.add("ikkunaranka_iry");
      iry.dataset.name = "ikkunaranka_iry";
      a_leftcord = roundToNearest25(parseFloat(aukot[i].style.left));
      a_rightcord = roundToNearest25(parseFloat(aukot[i].style.width) + parseFloat(aukot[i].style.left));
      a_bottomcord = roundToNearest25(parseFloat(aukot[i].style.bottom));
      a_topcord = roundToNearest25(parseFloat(aukot[i].style.height) + parseFloat(aukot[i].style.bottom));
      irv.style.left = a_leftcord + "px";
      iro.style.left = a_rightcord + "px";
      ira.style.bottom = a_bottomcord + "px";
      iry.style.bottom = a_topcord + "px";
      tyostot.append(irv);
      tyostot.append(iro);
      tyostot.append(ira);
      tyostot.append(iry);
    }
  }
  viimranka_pysty = document.createElement("div");
  viimranka_pysty.classList.add("tyostot__tyosto");
  viimranka_pysty.classList.add("tyostot__tyosto_pysty");
  viimranka_pysty.classList.add("viimranka_pysty");
  viimranka_pysty.classList.add("erikoisranka");
  viimranka_pysty.dataset.name = "erikoisranka";
  viimranka_pysty.style.left = roundToNearest25(w - 2.5) / 5 + "px";
  tyostot.append(viimranka_pysty);
  viimranka_vaaka = document.createElement("div");
  viimranka_vaaka.classList.add("tyostot__tyosto");
  viimranka_vaaka.classList.add("tyostot__tyosto_vaaka");
  viimranka_vaaka.classList.add("viimranka_vaaka");
  viimranka_vaaka.classList.add("erikoisranka");
  viimranka_vaaka.dataset.name = "erikoisranka";
  viimranka_vaaka.style.bottom = roundToNearest25(h - 2.5) / 5 + "px";
  tyostot.append(viimranka_vaaka);
  document.querySelector(".saumat__grandrow").style.opacity = 0;
  trow = tyostot;
  fixrangat();
  rangat__setcord();
  create__rankaexcel();
}

function fixrangat() {
  rangat = canvas.querySelectorAll(".tyostot__grandrow > .tyostot__tyosto");
  // Delete double ranka X, Y after
  leftCoordinates = [];
  bottomCoordinates = [];
  for (var i = rangat.length - 1; i >= 0; i--) {
    if (rangat[i].classList.contains("tyostot__tyosto_pysty") === true) {
      left = parseFloat(rangat[i].style.left);
      if (leftCoordinates.includes(left)) {
        console.log(rangat[i]);
        rangat[i].remove();
      }
      else {
        leftCoordinates.push(left);
        continue
      }
    }
    else if (rangat[i].classList.contains("tyostot__tyosto_vaaka") === true) {
      bottom = parseFloat(rangat[i].style.bottom);
      if (bottomCoordinates.includes(bottom)) {
        console.log(rangat[i]);
        rangat[i].remove();
      }
      else {
        bottomCoordinates.push(bottom);
        continue
      }
    }
  }
  // Delete complete!
  // Now, arrange left from smallest to largest left, then bottom from smallest to largest bototm
  rangat = canvas.querySelectorAll(".tyostot__grandrow > .tyostot__tyosto");
  rangat_pysty = canvas.querySelectorAll(".tyostot__grandrow > .tyostot__tyosto_pysty");
  rangat_vaaka = canvas.querySelectorAll(".tyostot__grandrow > .tyostot__tyosto_vaaka");
  for (var i = rangat.length - 1; i >= 0; i--) {
    rangat[i].remove();
  }
  sortedrangat_pysty = Array.from(rangat_pysty).sort((a, b) => {
    const leftA = parseInt(a.style.left);
    const leftB = parseInt(b.style.left);
    return leftA - leftB;
  });
  sortedrangat_vaaka = Array.from(rangat_vaaka).sort((a, b) => {
    const bottomA = parseInt(a.style.bottom);
    const bottomB = parseInt(b.style.bottom);
    return bottomA - bottomB;
  });
  tyostot = document.querySelector(".tyostot__grandrow");
  for (var i = 0; i < sortedrangat_pysty.length; i++) {
    tyostot.append(sortedrangat_pysty[i]);
  }
  for (var i = 0; i < sortedrangat_vaaka.length; i++) {
    tyostot.append(sortedrangat_vaaka[i]);
  }
}

function rangat__setcord() {
  // <input type="text" data-from="425" onchange="change__tyostocord(this,1);" style="float: right;">
  rangat = canvas.querySelectorAll(".tyostot__grandrow > div");
  r_bottomsumm = 0;
  r_leftsumm = 0;
  for (var i = 0; i < rangat.length; i++) {
    // if (rangat[i].classList.contains("erikoisranka") !== true) {
    if (rangat[i].classList.contains("tyostot__tyosto_pysty") === true) {
      left = parseFloat(rangat[i].style.left);
      r_cur_left = left - r_leftsumm;
      r_cur_leftinput = r_cur_left * 5;
      if (rangat[i].classList.contains("erikoisranka") === true) {
        rangat[i].innerHTML = '<input type="text" style="float: right;width:20px;height:20px;margin-right:-1px;margin-top:-28px;" value="S32">';
      }
      else if (rangat[i].classList.contains("erikoisranka") !== true) {
        rangat[i].innerHTML = '<input type="text" style="float: right;width:20px;height:20px;margin-right:-10px;margin-top:-10px;" value="S32">';
      }
      // rangat[i].innerHTML = '<input type="text" data-from="'+r_cur_leftinput+'" onchange="change__rankacord(this);" style="float: right;" value="'+r_cur_leftinput+'">';
      r_leftsumm += r_cur_left;
    }
    else if (rangat[i].classList.contains("tyostot__tyosto_vaaka") === true) {
      bottom = parseFloat(rangat[i].style.bottom);
      r_cur_bottom = bottom - r_bottomsumm;
      r_cur_bottominput = r_cur_bottom * 5;
      if (rangat[i].classList.contains("erikoisranka") === true) {
        rangat[i].innerHTML = '<input type="text" style="float: right;width:20px;height:20px;margin-right:-28px;margin-top:-17px;" value="S31">';
      }
      else if (rangat[i].classList.contains("erikoisranka") !== true) {
        rangat[i].innerHTML = '<input type="text" style="float: right;width:20px;height:20px;margin-right:-10px;margin-top:-10px;" value="S31">';
      }
      // rangat[i].innerHTML = '<input type="text" data-from="'+r_cur_bottominput+'" onchange="change__rankacord(this);" style="float: right;" value="'+r_cur_bottominput+'">';
      r_bottomsumm += r_cur_bottom;
    }
    // } 
  }
}

function change__rankacord(input) {
  const oldvalue = input.dataset.from;
  let c_kiinnikkeet = canvas.querySelectorAll(".tyostot__tyosto");
  k_x = [];
  k_y = [];
  tochange_array_x = [];
  tochange_array_y = [];
  for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
    k_x.push(c_kiinnikkeet[i].getBoundingClientRect().left);
    k_y.push(c_kiinnikkeet[i].getBoundingClientRect().bottom);
  }
  if ((input.parentElement.parentElement).classList.contains("levy")) {
    thislevy = input.parentElement;
  }
  else if ((input.parentElement.parentElement.parentElement).classList.contains("levy")) {
    thislevy = input.parentElement.parentElement;
  }
  if ((input.parentElement).classList.contains("tyostot__tyosto")) {
    thistyosto = input.parentElement;
  }
  else if ((input.parentElement.parentElement).classList.contains("tyostot__tyosto")) {
    thistyosto = input.parentElement.parentElement;
  }
  k_x_array = removeDuplicates(k_x);
  k_y_array = removeDuplicates(k_y);
  thisinput_l = input.parentElement.getBoundingClientRect().left;
  thisinput_b = input.parentElement.getBoundingClientRect().bottom;
  tochange_array_x.push(thisinput_l);
  tochange_array_y.push(thisinput_b);
  for (var i = k_x_array.length - 1; i >= 0; i--) {
    if (thisinput_l === k_x_array[i]) {
      tochange_array_x.push(k_x_array[i]);
    }
  }
  for (var i = k_y_array.length - 1; i >= 0; i--) {
    if (thisinput_b === k_y_array[i]) {
      tochange_array_y.push(k_y_array[i]);
    }
  }
  x = removeDuplicates(tochange_array_x);
  y = removeDuplicates(tochange_array_y);
  if (thistyosto.classList.contains("tyostot__tyosto_pysty")) {
    old_cord = parseFloat(thistyosto.style.left);
  }
  else if (thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
    old_cord = parseFloat(thistyosto.style.bottom);
  }
  newvalue = parseFloat(input.value);
  erotus = oldvalue - newvalue;
  new_cord = (parseFloat(old_cord) - (parseFloat(erotus) / 5)) + "px";
  if (thistyosto.classList.contains("tyostot__tyosto_pysty")) {
    thistyosto.style.left = new_cord;
    input.dataset.from = parseFloat(new_cord) * 5;
    input.value = parseFloat(new_cord) * 5;
    for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
      if (thisinput_l === c_kiinnikkeet[i].getBoundingClientRect().left) {
        c_kiinnikkeet[i].style.left = new_cord;
        c_kiinnikkeet[i].querySelector("input").value = newvalue;
      }
    }
  }
  else if (thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
    thistyosto.style.bottom = new_cord;
    for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
      if (thisinput_b === c_kiinnikkeet[i].getBoundingClientRect().bottom) {
        c_kiinnikkeet[i].style.bottom = new_cord;
        c_kiinnikkeet[i].querySelector("input").value = newvalue;
      }
    }
  }
  // console.log("XXX: " + x);
  // console.log("YYY: " + y);
}
erikoisranka_no = 0;
valiranka_no = 0;
saumaranka_no = 0;
old_rangat_excel = document.querySelector(".ranka_excel").innerHTML;

function create__rankaexcel() {
  tyostot = canvas.querySelectorAll(".tyostot__grandrow > div");
  h = parseFloat(document.querySelector("#box_h").value);
  w = parseFloat(document.querySelector("#box_w").value);
  rangat_data = [];
  ranka_excel = document.querySelector(".ranka_excel");
  ranka_excel.innerHTML = old_rangat_excel;
  for (var i = 0; i < tyostot.length; i++) {
    tableExcel = document.querySelector(".ranka_excel table");
    const row = document.createElement('tr');
    var h1 = document.createElement('td');
    var h2 = document.createElement('td');
    var h3 = document.createElement('td');
    var h4 = document.createElement('td');
    var h5 = document.createElement('td');
    h = parseFloat(document.querySelector("#box_h").value);
    w = parseFloat(document.querySelector("#box_w").value);
    roomname = document.querySelector(".room").value;
    wallname = document.querySelector(".wall").value;
    if (roomname == "") {
      roomname = "Seinän levy";
    }
    r = wallname.replace("SEINÄ ", "").replace("1. ", "").replace("2. ", "").replace("3. ", "").replace("4. ", "").replace("5. ", "").replace("6. ", "")
      .replace("KATTO ", "").replace("LATTIA ", "");
    if (tyostot[i].querySelector("input")) {
      h1.innerHTML = tyostot[i].querySelector("input").value;
    }
    else {
      h1.innerHTML = "-"
    }
    if (tyostot[i].classList.contains("erikoisranka")) {
      erikoisranka_no += 1;
      h2.innerHTML = tyostot[i].dataset.name + " #" + erikoisranka_no;
    }
    else if (tyostot[i].classList.contains("valiranka")) {
      valiranka_no += 1;
      h2.innerHTML = tyostot[i].dataset.name + " #" + valiranka_no;
    }
    else if (tyostot[i].classList.contains("saumaranka")) {
      saumaranka_no += 1;
      h2.innerHTML = tyostot[i].dataset.name + " #" + saumaranka_no;
    }
    else if (tyostot[i].classList.contains("ikkunaranka")) {
      h2.innerHTML = tyostot[i].dataset.name;
    }
    else {}
    if (tyostot[i].classList.contains("tyostot__tyosto_pysty")) {
      h3.innerHTML = h - 10;
      etaisyys = parseFloat(tyostot[i].style.left) * 5;
      h5.innerHTML = etaisyys + " mm vasemmalle Seinässä " + wallname;
    }
    else if (tyostot[i].classList.contains("tyostot__tyosto_vaaka")) {
      h3.innerHTML = w - 10;
      etaisyys = parseFloat(tyostot[i].style.bottom) * 5;
      h5.innerHTML = etaisyys + " mm ylös Seinässä " + wallname;
    }
    h4.innerHTML = "1";
    rangat_data.push({
      "Tyyppi": h1.textContent,
      "Nimi": h2.textContent,
      "Pituus (mm)": h3.textContent,
      "KPL": h4.textContent,
      "Asennus": h5.textContent
    }, );
    row.append(h1);
    row.append(h2);
    row.append(h3);
    row.append(h4);
    row.append(h5);
    tableExcel.append(row);
  }
  document.querySelector('.get_ranka_excel').addEventListener('click', () => {
    filename = 'Tila ESIMERKKI - Rangat.xlsx';
    var ws = XLSX.utils.json_to_sheet(rangat_data);
    var wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Rangat");
    XLSX.writeFile(wb, filename);
  });
}

function c_open_ltladonta_settings(e, levy) {
  console.log("c_open_ltladonta_settings(e,levy) ");
  ltcontainer = document.querySelector(".all_container");
  if (e === true) {
    ltcontainer.classList.add("two");
    l_title = levy.parentElement.getAttribute("title").split(",");
    // ltcontainer.querySelector("#lt-k_settings__levy_levysizeh").value = parseFloat(l_title[1]);
    // ltcontainer.querySelector("#lt-k_settings__levy_levysizew").value = parseFloat(l_title[0]);
    ltcontainer.querySelector(".lt_levy_vis").style.height = parseFloat(l_title[1]) / 5 + "px";
    ltcontainer.querySelector(".lt_levy_vis").style.width = parseFloat(l_title[0]) / 5 + "px";
    ltcontainer.querySelector(".lt_levy_vis").title = levy.parentElement.getAttribute("title");
    cloning_levy = levy.parentElement.cloneNode(true);
    ltcontainer.querySelector(".lt_levy_vis").innerHTML = cloning_levy.innerHTML;
    // kiinniketys = document.querySelector(".kiinniketys");
    // kiinniketys.querySelector(".trow:nth-child(1) label").click()
    // kiinniketys.querySelector(".trow:nth-child(2) label").click();
    ltcontainer.querySelector("b").remove();
    allvals = ltcontainer.querySelectorAll("input");
    for (var a = allvals.length - 1; a >= 0; a--) {
      if (allvals[a].dataset.from) {
        allvals[a].value = parseFloat(allvals[a].dataset.from);
      }
    }
  }
  else if (e === false) {
    ltcontainer = document.querySelector(".all_container");
    ltcontainer.classList.remove("two");
    c_reorganise__newtyosto_levy(pressed__levy);
    pressed__levy = null;
  }
  // aloita_tyosto_kiinnikkeet();
  // reorganise__newtyosto();
}

function c_reorganise__newtyosto_levy(levy__to_reorgaise) {
  // ltcontainer = document.querySelector(".levytyosto_container");
  // console.log(ltcontainer);
  // console.log(levy__to_reorgaise.parentElement);
  // console.log(levy__to_reorgaise.parentElement.querySelector(".levy_tyostot_y").innerHTML);
  // console.log(ltcontainer.parentElement.querySelector(".levy_tyostot_x").innerHTML);
  levy__to_reorgaise.parentElement.querySelector(".levy_tyostot_y").innerHTML = ltcontainer.querySelector(".levy_tyostot_x").innerHTML;
  levy__to_reorgaise.parentElement.querySelector(".levy_tyostot_x").innerHTML = ltcontainer.querySelector(".levy_tyostot_y").innerHTML;
  // levyt=copiedcanvases.querySelectorAll(".levy");
  // for (var i = levyt.length - 1; i >= 0; i--) {
  //   fixkiinnikkeet(levyt[i]);
  // }
  // aloita_tyosto_kiinnikkeet();
  // reorganise__newtyosto();
}

function create__excel_fromallwalls() {
  old_levy_excel = document.querySelector(".levy_excel").innerHTML;
  const saumas = document.querySelectorAll(".sauma");
  let horizontalBleam = 0;
  let verticalBleam = 0;
  levyt = canvas.querySelectorAll(".levy");
  for (var i = levyt.length - 1; i >= 0; i--) {
    tallenna_kiinnikepaikat(levyt[i]);
  }
  // PF1_X   PF1_Y PF1_DX   PF1_DY
  // Siirto muualle
  levyt = canvas.querySelectorAll(".levy");
  lv = document.querySelectorAll("#box-wrapper > main > .lv");
  for (var i = levyt.length - 1; i >= 0; i--) {
    if (levyt[i].querySelector(".lv")) {
      lvs_in_levy = levyt[i].querySelectorAll(".lv");
      for (var j = 0; j < lvs_in_levy.length; j++) {
        lvs_in_levy[j].remove();
      }
    }
  }
  levyt = canvas.querySelectorAll(".levy");
  for (var i = 0; i < levyt.length; i++) {
    lv = document.querySelectorAll("#box-wrapper > main > .lv");
    for (var j = lv.length - 1; j >= 0; j--) {
      if (document.querySelector("#box-wrapper > main > .lv")) {
        lv_b = parseFloat(lv[j].style.bottom);
        lv_l = parseFloat(lv[j].style.left);
        l_w = parseFloat(levyt[i].style.width);
        l_h = parseFloat(levyt[i].style.height);
        l_l = parseFloat(levyt[i].style.left);
        l_b = parseFloat(levyt[i].style.bottom);
        l_x_min = l_l;
        l_x_max = l_l + l_w;
        l_y_min = l_b;
        l_y_max = l_b + l_h;
        console.log("l_l" + l_l);
        console.log("l_b" + l_b);
        console.log("lv_b" + lv_b);
        console.log("lv_l" + lv_l);
        if (l_x_min < lv_l && l_x_max > lv_l) {
          console.log("TRUE I");
          if (l_y_min < lv_b && l_y_max > lv_b) {
            lv[j].style.opacity = 0;
            thislv = lv[j].cloneNode(true);
            thislv.style.opacity = 1;
            console.log("TRUE II")
            thislv.style.left = lv_l - l_l + "px";
            thislv.style.zIndex = 7;
            thislv.style.bottom = lv_b - l_b + "px";
            console.log("thislv " + thislv);
            levyt[i].appendChild(thislv);
            lv[j].remove();
          }
        }
      }
      else {
        continue
      }
    }
  }
  let copiedcanvases = document.querySelector("#copiedcanvases");
  let items = copiedcanvases.querySelectorAll(".levy");
  const tableExcel = document.querySelector('.excel table tbody');
  const equals = [];
  const levyexcel_array = [];
  let indexes = 1;
  items.forEach((item) => {
    const row = document.createElement('tr');
    var h1 = document.createElement('td');
    var h2 = document.createElement('td');
    var h3 = document.createElement('td');
    var h4 = document.createElement('td');
    var h5 = document.createElement('td');
    var h6 = document.createElement('td');
    var h7 = document.createElement('td');
    var h8 = document.createElement('td');
    var h9 = document.createElement('td');
    var h10 = document.createElement('td');
    var h11 = document.createElement('td');
    var h12 = document.createElement('td');
    var h13 = document.createElement('td');
    var h14 = document.createElement('td');
    var h15 = document.createElement('td');
    var h16 = document.createElement('td');
    var h17 = document.createElement('td');
    var h18 = document.createElement('td');
    var h19 = document.createElement('td');
    var h20 = document.createElement('td');
    var h21 = document.createElement('td');
    var h22 = document.createElement('td');
    var h23 = document.createElement('td');
    var h24 = document.createElement('td');
    var h25 = document.createElement('td');
    var h26 = document.createElement('td');
    var h27 = document.createElement('td');
    var h28 = document.createElement('td');
    var h29 = document.createElement('td');
    var h30 = document.createElement('td');
    var h31 = document.createElement('td');
    var h32 = document.createElement('td');
    var h33 = document.createElement('td');
    var h34 = document.createElement('td');
    var h35 = document.createElement('td');
    var h36 = document.createElement('td');
    var h37 = document.createElement('td');
    var h38 = document.createElement('td');
    var h39 = document.createElement('td');
    var h40 = document.createElement('td');
    var h41 = document.createElement('td');
    var h42 = document.createElement('td');
    var h43 = document.createElement('td');
    var h44 = document.createElement('td');
    var h45 = document.createElement('td');
    var h46 = document.createElement('td');
    var h47 = document.createElement('td');
    var h48 = document.createElement('td');
    var h49 = document.createElement('td');
    var h50 = document.createElement('td');
    var h51 = document.createElement('td');
    var h52 = document.createElement('td');
    var h53 = document.createElement('td');
    var h54 = document.createElement('td');
    var h55 = document.createElement('td');
    var h56 = document.createElement('td');
    var h57 = document.createElement('td');
    var h58 = document.createElement('td');
    var h59 = document.createElement('td');
    var h60 = document.createElement('td');
    var h61 = document.createElement('td');
    var h62 = document.createElement('td');
    var h63 = document.createElement('td');
    var h64 = document.createElement('td');
    var h65 = document.createElement('td');
    var h66 = document.createElement('td');
    var h67 = document.createElement('td');
    var h68 = document.createElement('td');
    var h69 = document.createElement('td');
    var h70 = document.createElement('td');
    var h71 = document.createElement('td');
    var h72 = document.createElement('td');
    var h73 = document.createElement('td');
    var h74 = document.createElement('td');
    var h75 = document.createElement('td');
    var h76 = document.createElement('td');
    var h77 = document.createElement('td');
    var h78 = document.createElement('td');
    var h79 = document.createElement('td');
    var h80 = document.createElement('td');
    var h81 = document.createElement('td');
    var h82 = document.createElement('td');
    var h83 = document.createElement('td');
    var h84 = document.createElement('td');
    var h85 = document.createElement('td');
    var h86 = document.createElement('td');
    var h87 = document.createElement('td');
    var h88 = document.createElement('td');
    var h89 = document.createElement('td');
    var h90 = document.createElement('td');
    var h91 = document.createElement('td');
    var h92 = document.createElement('td');
    var h93 = document.createElement('td');
    var h94 = document.createElement('td');
    var h95 = document.createElement('td');
    var h96 = document.createElement('td');
    var h97 = document.createElement('td');
    var h98 = document.createElement('td');
    var h99 = document.createElement('td');
    var h100 = document.createElement('td');
    var h101 = document.createElement('td');
    var h102 = document.createElement('td');
    var h103 = document.createElement('td');
    var h104 = document.createElement('td');
    var h105 = document.createElement('td');
    var h106 = document.createElement('td');
    var h107 = document.createElement('td');
    var h108 = document.createElement('td');
    h1.innerHTML = '';
    h2.innerHTML = '';
    if (document.querySelector("#settings__sauma_pysty").checked) {
      h3.innerHTML = item.querySelector(".levy_h").innerText;
      h4.innerHTML = item.querySelector(".levy_w").innerText;
    }
    else if (document.querySelector("#settings__sauma_vaaka").checked) {
      h3.innerHTML = item.querySelector(".levy_w").innerText;
      h4.innerHTML = item.querySelector(".levy_h").innerText;
    }
    h5.innerHTML = '';
    h6.innerHTML = '';
    //t_a = tyostot.split("},{");
    console.log("tyostot " + tyostot);
    let v_r = [];
    let r_r = [];
    var aggregate_val = [];
    let l_t_x = [];
    let l_t_y = [];
    y_kiinnikkeet = item.querySelectorAll(".tyostot__tyosto_vaaka");
    x_kiinnikkeet = item.querySelectorAll(".tyostot__tyosto_pysty");
    for (var i = x_kiinnikkeet.length - 1; i >= 0; i--) {
      l_t_x.push(parseFloat(x_kiinnikkeet[i].style.left) * 5);
    }
    for (var i = y_kiinnikkeet.length - 1; i >= 0; i--) {
      l_t_y.push(parseFloat(y_kiinnikkeet[i].style.bottom) * 5);
    }
    var h29_ = "",
      h30_ = "",
      h31_ = "",
      h32_ = "",
      h33_ = "",
      h34_ = "",
      h35_ = "",
      h36_ = "",
      h37_ = "",
      h38_ = "",
      h39_ = "",
      h40_ = "",
      h41_ = "",
      h42_ = "",
      h43_ = "",
      h44_ = "",
      h45_ = "",
      h46_ = "",
      h47_ = "",
      h48_ = "";
    let uniqueChars_x = l_t_x;
    let uniqueChars_y = l_t_y;
    // console.log(uniqueChars_x);
    // console.log(uniqueChars_y);
    if (uniqueChars_x[0]) {
      h29_ = uniqueChars_x[0];
    }
    if (uniqueChars_x[1]) {
      h30_ = uniqueChars_x[1];
    }
    if (uniqueChars_x[2]) {
      h31_ = uniqueChars_x[2];
    }
    if (uniqueChars_x[3]) {
      h32_ = uniqueChars_x[3];
    }
    if (uniqueChars_x[4]) {
      h33_ = uniqueChars_x[4];
    }
    if (uniqueChars_x[5]) {
      h34_ = uniqueChars_x[5];
    }
    if (uniqueChars_x[6]) {
      h35_ = uniqueChars_x[6];
    }
    if (uniqueChars_x[7]) {
      h36_ = uniqueChars_x[7];
    }
    if (uniqueChars_x[8]) {
      h37_ = uniqueChars_x[8];
    }
    if (uniqueChars_x[9]) {
      h38_ = uniqueChars_x[9];
    }
    if (uniqueChars_y[0]) {
      h39_ = parseFloat(uniqueChars_y[0]);
    }
    if (uniqueChars_y[1]) {
      h40_ = uniqueChars_y[1];
    }
    if (uniqueChars_y[2]) {
      h41_ = uniqueChars_y[2];
    }
    if (uniqueChars_y[3]) {
      h42_ = uniqueChars_y[3];
    }
    if (uniqueChars_y[4]) {
      h43_ = uniqueChars_y[4];
    }
    if (uniqueChars_y[5]) {
      h44_ = uniqueChars_y[5];
    }
    if (uniqueChars_y[6]) {
      h45_ = uniqueChars_y[6];
    }
    if (uniqueChars_y[7]) {
      h46_ = uniqueChars_y[7];
    }
    if (uniqueChars_y[8]) {
      h47_ = uniqueChars_y[8];
    }
    if (uniqueChars_y[9]) {
      h48_ = uniqueChars_y[9];
    }
    h7.innerHTML = '1';
    h8.innerHTML = ' ';
    h9.innerHTML = indexes;
    h10.innerHTML = item.querySelector(".levy_name").innerText;
    h11.innerHTML = indexes;
    h12.innerHTML = ' ';
    h13.innerHTML = '1';
    h14.innerHTML = '1';
    h15.innerHTML = 'PRIOR';
    h16.innerHTML = '-';
    h17.innerHTML = '-';
    h18.innerHTML = '-';
    h19.innerHTML = uniqueChars_x.length;
    h20.innerHTML = uniqueChars_y.length;
    h21.innerHTML = -1 + uniqueChars_x.length + uniqueChars_y.length;
    h22.innerHTML = '';
    h23.innerHTML = '';
    h24.innerHTML = '';
    h25.innerHTML = '';
    h26.innerHTML = '';
    h27.innerHTML = '';
    h28.innerHTML = '8'; // aggregate_val[0]
    h29.innerHTML = h29_;
    h30.innerHTML = h30_;
    h31.innerHTML = h31_;
    h32.innerHTML = h32_;
    h33.innerHTML = h33_;
    h34.innerHTML = h34_;
    h35.innerHTML = h35_;
    h36.innerHTML = h36_;
    h37.innerHTML = h37_;
    h38.innerHTML = h38_;
    h39.innerHTML = h39_;
    h40.innerHTML = h40_;
    h41.innerHTML = h41_;
    h42.innerHTML = h42_;
    h43.innerHTML = h43_;
    h44.innerHTML = h44_;
    h45.innerHTML = h45_;
    h46.innerHTML = h46_;
    h47.innerHTML = h47_;
    h48.innerHTML = h48_;
    h49.innerHTML = '';
    h50.innerHTML = '';
    h51.innerHTML = '';
    h52.innerHTML = '';
    h53.innerHTML = '';
    h54.innerHTML = '';
    h55.innerHTML = '';
    h56.innerHTML = '';
    h57.innerHTML = '';
    h58.innerHTML = '';
    h59.innerHTML = '';
    h60.innerHTML = '';
    h61.innerHTML = '';
    h62.innerHTML = '';
    h63.innerHTML = '';
    h64.innerHTML = '';
    h65.innerHTML = '';
    h66.innerHTML = '';
    h67.innerHTML = '';
    h68.innerHTML = '';
    h69.innerHTML = '';
    h70.innerHTML = '';
    h71.innerHTML = '';
    h72.innerHTML = '';
    h73.innerHTML = '';
    h74.innerHTML = '';
    h75.innerHTML = '';
    h76.innerHTML = '';
    inlevy_lvarray = [];
    inlevy_lvs = item.querySelectorAll(".lv");
    if (inlevy_lvs.length > 0) {
      for (var i = 0; i < inlevy_lvs.length; i++) {
        pf_x = parseFloat(inlevy_lvs[i].style.left) * 5;
        pf_y = parseFloat(inlevy_lvs[i].style.bottom) * 5;
        pf_dx = parseFloat(inlevy_lvs[i].style.width) * 5;
        pf_dy = parseFloat(inlevy_lvs[i].style.height) * 5;
        onelv = pf_x + "|" + pf_y + "|" + pf_dx + "|" + pf_dy;
        inlevy_lvarray.push(onelv);
        console.log("inlevy_lvarray " + inlevy_lvarray);
      }
    }
    if (inlevy_lvarray.length > 0) {
      h69.innerHTML = parseFloat(inlevy_lvarray[0].split("|")[0]);
      h70.innerHTML = parseFloat(inlevy_lvarray[0].split("|")[1]);
      h71.innerHTML = parseFloat(inlevy_lvarray[0].split("|")[2]);
      h72.innerHTML = parseFloat(inlevy_lvarray[0].split("|")[3]);
    }
    if (inlevy_lvarray.length > 1) {
      h73.innerHTML = parseFloat(inlevy_lvarray[1].split("|")[0]);
      h74.innerHTML = parseFloat(inlevy_lvarray[1].split("|")[1]);
      h75.innerHTML = parseFloat(inlevy_lvarray[1].split("|")[2]);
      h76.innerHTML = parseFloat(inlevy_lvarray[1].split("|")[3]);
    }
    h77.innerHTML = '';
    h78.innerHTML = '';
    h79.innerHTML = '';
    h80.innerHTML = '';
    h81.innerHTML = '';
    h82.innerHTML = '';
    h83.innerHTML = '';
    h84.innerHTML = '';
    h85.innerHTML = '';
    h86.innerHTML = '';
    h87.innerHTML = '';
    h88.innerHTML = '';
    h89.innerHTML = '';
    h90.innerHTML = '';
    h91.innerHTML = '';
    h92.innerHTML = '';
    h93.innerHTML = '';
    h94.innerHTML = '';
    h95.innerHTML = '';
    h96.innerHTML = '';
    h97.innerHTML = '';
    h98.innerHTML = '';
    h99.innerHTML = '';
    h100.innerHTML = '';
    h101.innerHTML = '';
    h102.innerHTML = '';
    h103.innerHTML = '';
    h104.innerHTML = '';
    h105.innerHTML = '';
    h106.innerHTML = '';
    h107.innerHTML = '';
    h108.innerHTML = '';
    levyexcel_array.push({
      'Type (drawing)': h1.textContent,
      'Materialcode': h2.textContent,
      'Pituus (X)': h3.textContent,
      'Leveys (Y)': h4.textContent,
      'Thickness': h5.textContent,
      'Structure': h6.textContent,
      'Quantity': h7.textContent,
      'Plus': h8.textContent,
      'Part number': h9.textContent,
      'Nimi 1': h10.textContent,
      'Nimi 2': h11.textContent,
      'MPR': h12.textContent,
      'Palletgroup': h13.textContent,
      'Prioriteetti': h14.textContent,
      'Asiakas': h15.textContent,
      'Asennus': h16.textContent,
      'Työstöt': h17.textContent,
      '': h18.textContent,
      'X KPL': h19.textContent,
      'Y KPL': h20.textContent,
      'Yhteensä': h21.textContent,
      '': h22.textContent,
      '': h23.textContent,
      '': h24.textContent,
      '': h25.textContent,
      '': h26.textContent,
      'Tarra': h27.textContent,
      'Diameter': h28.textContent,
      'X1': h29.textContent,
      'X2': h30.textContent,
      'X3': h31.textContent,
      'X4': h32.textContent,
      'X5': h33.textContent,
      'X6': h34.textContent,
      'X7': h35.textContent,
      'X8': h36.textContent,
      'X9': h37.textContent,
      'X10': h38.textContent,
      'Y1': h39.textContent,
      'Y2': h40.textContent,
      'Y3': h41.textContent,
      'Y4': h42.textContent,
      'Y4': h43.textContent,
      'Y6': h44.textContent,
      'Y7': h45.textContent,
      'Y8': h46.textContent,
      'Y9': h47.textContent,
      'Y10': h48.textContent,
      'X': h49.textContent,
      'Y': h50.textContent,
      'X': h51.textContent,
      'Y': h52.textContent,
      'PR1_X': h53.textContent,
      'PR1_Y': h54.textContent,
      'PR1_DX': h55.textContent,
      'PR1_DY': h56.textContent,
      'PR2_X': h57.textContent,
      'PR2_Y': h58.textContent,
      'PR1_DX': h59.textContent,
      'PR2_DY': h60.textContent,
      'PR3_X': h61.textContent,
      'PR3_Y': h62.textContent,
      'PR3_DX': h63.textContent,
      'PR3_DY': h64.textContent,
      'PR4_X': h65.textContent,
      'PR4_Y': h66.textContent,
      'PR4_DX': h67.textContent,
      'PR4_DY': h68.textContent,
      'PF1_X': h69.textContent,
      'PF1_Y': h70.textContent,
      'PF1_DX': h71.textContent,
      'PF1_DY': h72.textContent,
      'PF2_X': h73.textContent,
      'PF2_Y': h74.textContent,
      'PF2_DX': h75.textContent,
      'PF2_DY': h76.textContent,
      'CH 0=OFF 1= ON': h77.textContent,
      'Y Vasen': h78.textContent,
      'Y oikea': h79.textContent,
      'Y Vasen': h80.textContent,
      'Y oikea': h81.textContent,
      'X ala': h82.textContent,
      'x ylä': h83.textContent,
      'X ala': h84.textContent,
      'X ylä': h85.textContent,
      'VH1_X': h86.textContent,
      'VH1_Y': h87.textContent,
      'VH1_L': h88.textContent,
      'VH1_KPL': h89.textContent,
      'VH1_K': h90.textContent,
      '': h91.textContent,
      '': h92.textContent,
      '': h93.textContent,
      '': h94.textContent,
      'AR Edge 1': h95.textContent,
      'YR Edge 1': h96.textContent,
      'VR Edge 1': h97.textContent,
      'OR Edge 1': h98.textContent,
      'AR Edge 2': h99.textContent,
      'YR Edge 2': h100.textContent,
      'VR Edge 2': h101.textContent,
      'OR Edge 2': h102.textContent,
      'AR Trim': h103.textContent,
      'YR Trim': h104.textContent,
      'VR Trim': h105.textContent,
      'OR Trim': h106.textContent,
      'Yhdistä Xx-XX': h107.textContent,
      'Yhdistä Yx-YX': h108.textContent
    }, );
    indexes++;
  });
    filename = 'Tilan seinät - Levyt.xlsx';
    var ws = XLSX.utils.json_to_sheet(levyexcel_array);
    var wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Levyt");
    XLSX.writeFile(wb, filename);
}