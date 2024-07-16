/**
 * Function to perform listoitus operation on the canvas element.
 * This function creates and manipulates elements based on the canvas content.
 * @returns None
 */
listoitettu = false;

function listoitus() {
  console.log("AUKKORANGAT TULEE SELVITTÄÄ ENNEN LISTOITUKSEN KULKUA.")
  rangat_grandrow = canvas.querySelector(".rangat__grandrow");
  if (canvas.querySelector(".listat__grandrow")) {
    canvas.querySelector(".listat__grandrow").remove();
  }
  aukot = canvas.querySelectorAll(".aukko");
  lapiviennit = canvas.querySelectorAll(".lapivienti");
  levyt = canvas.querySelectorAll(".levy");

  listat__grandrow = document.createElement("div");
  listat__grandrow.classList.add("listat__grandrow");
  canvas.prepend(listat__grandrow);
  listat__grandrow.innerHTML = rangat_grandrow.innerHTML;
  listoitettu = false;

  canvas.querySelector(".rangat__grandrow").style.opacity = 0;
  ikkunaListaExcel = document.querySelector(".ikkunalista_excel");
  ListaExcel = document.querySelector(".lista_as_excel tbody");
  first_excel = document.querySelector(" table.ikkunalista_excel > tbody > tr");
  second_excel = document.querySelector(" table.lista_excel > tbody > tr");

  listat__grandrow = canvas.querySelector(".listat__grandrow");
  listat = listat__grandrow.querySelectorAll(".listat__grandrow > div");
  for (var i = 0; i < listat.length; i++) {
    if(listat[i].querySelector('.ranka_type')) {
      listat[i].querySelector('.ranka_type').classList = ["lista_type"];
    }

    if(listat[i].querySelector('.ranka_cord:not(.ranka_type)')) {
      listat[i].querySelector('.ranka_cord:not(.ranka_type)').classList = ["lista_cord"];
    }

    if(listat[i].querySelector('.ranka_secondcord')) {
      listat[i].querySelector('.ranka_secondcord').classList = ["lista_secondcord"];
    }
    listat[i].style.boxShadow = "unset";
    listat[i].style.background = "dimgray";
    listat[i].classList.add("lista");
    listat[i].dataset.listan_koodin_alku = "EPDM";
  }


  s_listaonsettings = document.querySelectorAll(".rankalista_as .s_listat input:checked");
  listat_sarray = [];
  s_listaonsettings.forEach(s => {
    if(listat_sarray.includes(s.parentElement.parentElement.parentElement) === false) {
      listat_sarray.push(s.parentElement.parentElement.parentElement);
    }
  });


  listat_sarray.forEach(s => {
    trs = s.querySelectorAll("tr:not(.headingrow)");
    if(s.classList.contains("l2a_table")) {
      layer ="l2a";
    }

    else if(s.classList.contains("l2b_table")) {
      layer ="l2b";
    }

    for (let a = 0; a < trs.length; a++) {
      settingvalue = trs[a].querySelector("td:nth-child(2) input");

      setval = settingvalue.value.toLowerCase().replaceAll(" ","");

      if(setval == "alueenalareuna") {
        tomod = canvas.querySelectorAll(".listat__grandrow > .alkuranka_vaaka");
      }
      if(setval == "alueenyläreuna") {
        tomod = canvas.querySelectorAll(".listat__grandrow > .viimranka_vaaka");
        console.log("tomod");
        console.log(tomod);
      }
      if(setval == "alueenvasenreuna") {
        tomod = canvas.querySelectorAll(".listat__grandrow > .alkuranka_pysty");
      }
      if(setval == "alueenoikeareuna") {
        tomod = canvas.querySelectorAll(".listat__grandrow > .viimranka_pysty");
      }


      for (let b = 0; b < tomod.length; b++) {
        tomod[b].classList.add(layer);
        tomod[b].classList.remove("ranka");
        tomod[b].classList.add("lista");

        Object.keys(tomod[b].dataset).forEach(dataKey => {
          delete tomod[b].dataset[dataKey];
        });

        tomod[b].dataset.name	= trs[a].querySelector("td:nth-child(2) input").value;
        tomod[b].dataset.suunta	= trs[a].querySelector("td:nth-child(3) input").value;
        if(tomod[b].classList.contains("ranka_pysty")) {
          // tomod[b].classList.add("lista_pysty");
          tomod[b].dataset.pituus = (parseFloat(tomod[b].offsetHeight)*5) + parseFloat(trs[a].querySelector("td:nth-child(4) input").value);

        }
        else if(tomod[b].classList.contains("ranka_vaaka")) {
          // tomod[b].classList.add("lista_vaaka");
          tomod[b].dataset.pituus = (parseFloat(tomod[b].offsetWidth)*5) + parseFloat(trs[a].querySelector("td:nth-child(4) input").value);
        }
        tomod[b].dataset.listaname	= trs[a].querySelector("td:nth-child(6) input").value;
        tomod[b].dataset.tilauskoodi	= trs[a].querySelector("td:nth-child(7) input").value;
        tomod[b].dataset.materiaali	= trs[a].querySelector("td:nth-child(8) input").value;
        tomod[b].dataset.paksuus	= trs[a].querySelector("td:nth-child(9) input").value;
        tomod[b].dataset.laatu	= trs[a].querySelector("td:nth-child(10) input").value;
        tomod[b].dataset.varinimi	= trs[a].querySelector("td:nth-child(11) input").value;
        tomod[b].dataset.ncs_code	= trs[a].querySelector("td:nth-child(12) input").value;
      }
      if(setval == "levynlistaor") {
        for (let b = 0; b < levyt.length; b++) {
          or_distance = parseFloat(levyt[b].offsetWidth) + parseFloat(levyt[b].style.left);
          if(or_distance != parseFloat(canvas.offsetWidth) && levyt[b].dataset.orlista.replaceAll(" ").toLowerCase() === trs[a].querySelector("td:nth-child(6) input").value.replaceAll(" ").toLowerCase()) {
            create_lista('pysty',or_distance,levyt[b],trs[a]);
          }
        }
      }
      if(setval === "levynlistayr") {
        for (let b = 0; b < levyt.length; b++) {
          yr_distance = parseFloat(levyt[b].offsetHeight) + parseFloat(levyt[b].style.bottom);
          if(yr_distance != parseFloat(canvas.offsetHeight) && levyt[b].dataset.yrlista.replaceAll(" ").toLowerCase() === trs[a].querySelector("td:nth-child(6) input").value.replaceAll(" ").toLowerCase()) {
            create_lista('vaaka',yr_distance,levyt[b],trs[a]);
          }
        }
      }
    }
  });
  for (let c = 0; c < aukot.length; c++) {
    or_distance = parseFloat(aukot[c].style.left) + parseFloat(aukot[c].style.width);
    vr_distance = parseFloat(aukot[c].style.left);
    yr_distance = parseFloat(aukot[c].style.bottom) + parseFloat(aukot[c].style.height);
    ar_distance = parseFloat(aukot[c].style.bottom);

    or_distance_text = parseFloat(aukot[c].querySelector(".aukko_rcord").innerText)/5;
    vr_distance_text = parseFloat(aukot[c].querySelector(".aukko_lcord").innerText)/5;
    yr_distance_text = parseFloat(aukot[c].querySelector(".aukko_tcord").innerText)/5;
    ar_distance_text = parseFloat(aukot[c].querySelector(".aukko_bcord").innerText)/5;

    if(or_distance <= parseFloat(canvas.offsetWidth)) {
      create_lista('pysty',or_distance,aukot[c]);
      lista.dataset.name	= aukot[c].dataset.l2a_or_lista;
      lista.dataset.listaname	= aukot[c].dataset.l2a_or_lista;
      lista.dataset.realcord	= or_distance_text;
      lista.classList.remove("levy_lista");
      lista.classList.add("aukko_lista");
    }
    if(vr_distance > 0) {
      create_lista('pysty',vr_distance,aukot[c]);
      lista.dataset.name	= aukot[c].dataset.l2a_vr_lista;
      lista.dataset.listaname	= aukot[c].dataset.l2a_vr_lista;
      lista.dataset.realcord	= vr_distance_text;
      lista.classList.remove("levy_lista");
      lista.classList.add("aukko_lista");
    }
    if(yr_distance <= parseFloat(canvas.offsetHeight)) {
      create_lista('vaaka',yr_distance,aukot[c]);
      lista.dataset.name	= aukot[c].dataset.l2a_yr_lista;
      lista.dataset.listaname	= aukot[c].dataset.l2a_yr_lista;
      lista.dataset.realcord	= yr_distance_text;
      lista.classList.remove("levy_lista");
      lista.classList.add("aukko_lista");
    }
    if(ar_distance > 0) {
      create_lista('vaaka',ar_distance,aukot[c]);
      lista.dataset.name	= aukot[c].dataset.l2a_ar_lista;
      lista.dataset.listaname	= aukot[c].dataset.l2a_ar_lista;
      lista.dataset.realcord	= ar_distance_text;
      lista.classList.remove("levy_lista");
      lista.classList.add("aukko_lista");
    }
  }

  for (let c = 0; c < lapiviennit.length; c++) {

    if(getComputedStyle(lapiviennit[c]).getPropertyValue("border-radius") === "50%") {
      lapiviennit[c].dataset.listapituus = Math.PI * parseFloat(lapiviennit[c].innerText);
    }
    else if(parseFloat(getComputedStyle(lapiviennit[c]).getPropertyValue("border-radius")) === 0) {
      lapiviennit[c].dataset.listapituus = 4 * parseFloat(lapiviennit[c].innerText);
    }
    lapiviennit[c].style.border = "3px solid lightgray";
  }

  //TEMPORARY
  listatohide = canvas.querySelectorAll(".listat__grandrow > .ranka");
  listatohide.forEach(lista => {
    lista.remove();
  });


  if (listoitettu === false) {
    listat_remove_duplicates();
    create__lista__tuoexcel();
  }
  else {
    console.log("Jo listoitettu");
  }
}

/**
 * Creates a list element based on the given parameters.
 * @param {string} type - The type of the list element (either "pysty" or "vaaka").
 * @param {number} distance - The distance of the list element.
 * @param {HTMLElement} levymitta - The element representing the dimensions of the list.
 * @param {HTMLElement} settingsarray - The array of settings for the list element.
 * @returns None
 */
function create_lista(type,distance,levymitta,settingsarray) {
  listat_row = canvas.querySelector(".listat__grandrow");
  lista = document.createElement("div");
  lista.classList.add("lista");
  lista.classList.add("levy_lista");

  if(type === "pysty") {
    lista.style.left = distance + "px";
    lista.style.width = "1px";
    if(levymitta) {
      if(levymitta.classList.contains("aukko")) {
        // or_distance = parseFloat(levymitta.querySelector(".aukko_rcord").innerText)/5;
        // vr_distance = parseFloat(levymitta.querySelector(".aukko_lcord").innerText)/5;
        // yr_distance = parseFloat(levymitta.querySelector(".aukko_tcord").innerText)/5;
        // ar_distance = parseFloat(levymitta.querySelector(".aukko_bcord").innerText)/5;

        lista.style.height = yr_distance-ar_distance + "px";
        lista.style.bottom = ar_distance+1+ "px";
      }
      else {
        lista.style.height = levymitta.style.height;
        lista.style.bottom = levymitta.style.bottom;
      }

    }
    try {
          lista.dataset.pituus = (parseFloat(levymitta.offsetHeight)*5) - parseFloat(trs[a].querySelector("td:nth-child(4) input").value);

    } catch (error) {
      lista.dataset.pituus = (parseFloat(levymitta.offsetHeight)*5) - 10;

      console.log(error);
    }
  }
  else if(type === "vaaka") {
    lista.style.bottom = distance + "px";
    lista.style.height = "1px";
    if(levymitta) {
      if(levymitta.classList.contains("aukko")) {
        // or_distance = parseFloat(levymitta.querySelector(".aukko_rcord").innerText)/5;
        // vr_distance = parseFloat(levymitta.querySelector(".aukko_lcord").innerText)/5;
        // yr_distance = parseFloat(levymitta.querySelector(".aukko_tcord").innerText)/5;
        // ar_distance = parseFloat(levymitta.querySelector(".aukko_bcord").innerText)/5;
        lista.style.width = or_distance - vr_distance + "px";
        lista.style.left = vr_distance+1+ "px";
      }
      else {
        lista.style.width = levymitta.style.width;
        lista.style.left = levymitta.style.left;
      }

    }
    try {
      lista.dataset.pituus = (parseFloat(levymitta.offsetWidth)*5) - parseFloat(trs[a].querySelector("td:nth-child(4) input").value);
    } catch (error) {
      lista.dataset.pituus = (parseFloat(levymitta.offsetWidth)*5) - 10;

      console.log(error);
    }
  }
  else {
    return
  }

  if(settingsarray) {
    lista.dataset.name	= settingsarray.querySelector("td:nth-child(2) input").value;
    lista.dataset.suunta	= settingsarray.querySelector("td:nth-child(3) input").value;
    lista.dataset.listaname	= settingsarray.querySelector("td:nth-child(6) input").value;
    lista.dataset.tilauskoodi	= settingsarray.querySelector("td:nth-child(7) input").value;
    lista.dataset.materiaali	= settingsarray.querySelector("td:nth-child(8) input").value;
    lista.dataset.paksuus	= settingsarray.querySelector("td:nth-child(9) input").value;
    lista.dataset.laatu	= settingsarray.querySelector("td:nth-child(10) input").value;
    lista.dataset.varinimi	= settingsarray.querySelector("td:nth-child(11) input").value;
    lista.dataset.ncs_code	= settingsarray.querySelector("td:nth-child(12) input").value;
  }


  console.log("create_lista fired");
  lista.classList.add("lista_"+type);
  listat_row.append(lista);
}
/**
 * Removes duplicate elements from the canvas based on their position and dimensions.
 * @returns None
 */
function listat_remove_duplicates() {
  pystyt = canvas.querySelectorAll(".listat__grandrow > .lista_pysty");
  vaat = canvas.querySelectorAll(".listat__grandrow > .lista_vaaka");

  // DEL LEVY LISTA WHICH HITS CANVAS BORDER LISTA
  paatelistat = canvas.querySelectorAll(".listat__grandrow > .erikoisranka");
  aukko_listat = canvas.querySelectorAll(".listat__grandrow > .aukko_lista");
  paatelistat.forEach(paate => {
    if(paate.classList.contains("ranka_pysty")) {
      pystyt.forEach(pysty => {
        if(parseFloat(pysty.style.left) === parseFloat(paate.style.left) ||
        parseFloat(pysty.style.left)+1 === parseFloat(paate.style.left) ||
        parseFloat(pysty.style.left)-1 === parseFloat(paate.style.left)) {
          pysty.remove();
        }
      });
      paate.classList.add("lista_pysty");
      paate.style.height = parseFloat(paate.dataset.pituus)/5 + "px";


    }
    if(paate.classList.contains("ranka_vaaka")) {
      vaat.forEach(vaaka => {
        if(parseFloat(vaaka.style.bottom) === parseFloat(paate.style.bottom) ||
        parseFloat(vaaka.style.bottom)-1 === parseFloat(paate.style.bottom) ||
        parseFloat(vaaka.style.bottom)+1 === parseFloat(paate.style.bottom)) {
          vaaka.remove();
        }
      });

      paate.classList.add("lista_vaaka");
      paate.style.width = parseFloat(paate.dataset.pituus)/5 + "px";
    }
  });

  // DEL LEVY LISTA WHICH HITS AUKKO BORDER LISTA
  // RE-IDENTIFICATION OF ELEMENTS FOR THE NEXT ITERATION
  pystyt = canvas.querySelectorAll(".listat__grandrow > .lista_pysty:not(.aukko_lista):not(.erikoisranka)");
  vaat = canvas.querySelectorAll(".listat__grandrow > .lista_vaaka:not(.aukko_lista):not(.erikoisranka)");
  aukko_listat.forEach(a_l => {
    if(a_l.classList.contains("lista_pysty")) {
      pystyt.forEach(pysty => {
        if(parseFloat(a_l.style.left) === parseFloat(pysty.style.left) ||
        parseFloat(a_l.style.left)+1 === parseFloat(pysty.style.left) ||
        parseFloat(a_l.style.left)-1 === parseFloat(pysty.style.left)) {
          l_start = parseFloat(pysty.style.bottom);
          l_end = l_start + pysty.offsetHeight;
          a_start = parseFloat(a_l.style.bottom);
          a_end = a_start + parseFloat(a_l.style.height);



          // if(l_end>a_end && a_start>l_start) // AUKKO LISTA ISON LISTAN SISÄLLÄ - SPLITTAA?
          if(l_start>a_start && l_end<a_end ||
            l_start>a_start && l_start<a_end ||
            l_start<a_start && l_end>a_end)  {
              if(parseFloat(a_l.style.bottom) === parseFloat(pysty.style.height)) {

              }
              else {
                pysty.remove();
                console.log("to DEL vvv");
                console.log("l_start" + l_start);
                console.log("l_end" + l_end);
                console.log("a_start" + a_start);
                console.log("a_end" + a_end);
                console.log(pysty);
              }

          }
        }
      });
    }
    if(a_l.classList.contains("lista_vaaka")) {
      vaat.forEach(vaaka => {
        if(parseFloat(a_l.style.bottom) === parseFloat(vaaka.style.bottom) ||
        parseFloat(a_l.style.bottom)+1 === parseFloat(vaaka.style.bottom) ||
        parseFloat(a_l.style.bottom)-1 === parseFloat(vaaka.style.bottom)) {
          l_start = parseFloat(vaaka.style.left);
          l_end = l_start + vaaka.offsetWidth;
          a_start = parseFloat(a_l.style.left);
          a_end = a_start + parseFloat(a_l.style.width);
          // if(l_end>a_end && a_start>l_start) // AUKKO LISTA ISON LISTAN SISÄLLÄ - SPLITTAA?



          if(l_start>a_start && l_end<a_end ||
            l_start>a_start && l_start<a_end ||
            l_start<a_start && l_end>a_end)  {
              if(parseFloat(a_l.style.left) === parseFloat(vaaka.style.width)) {

              }
              else {
                vaaka.remove();
                console.log("to DEL vvv");
                console.log("l_start" + l_start);
                console.log("l_end" + l_end);
                console.log("a_start" + a_start);
                console.log("a_end" + a_end);
                console.log(vaaka);
              }
          }
        }
      });
    }
  });

  // Delete intersecting parts
  let aukko_pystyt = canvas.querySelectorAll(".listat__grandrow > .aukko_lista.lista_pysty");
  let aukko_vaat = canvas.querySelectorAll(".listat__grandrow > .aukko_lista.lista_vaaka");
  for (let i = 0; i < aukko_pystyt.length - 1; i++) {
    if (aukko_pystyt[i].style.height == "0px")
      continue;

    let a_min = parseFloat(aukko_pystyt[i].style.bottom);
    let a_max = a_min + parseFloat(aukko_pystyt[i].style.height);

    for (let j = i + 1; j < aukko_pystyt.length; j++) {
      if (aukko_pystyt[i].style.left != aukko_pystyt[j].style.left
      ||  aukko_pystyt[j].style.height == "0px")
        continue;

      let b_min = parseFloat(aukko_pystyt[j].style.bottom);
      let b_max = b_min + parseFloat(aukko_pystyt[j].style.height);

      if (Math.min(a_max, b_max) <= Math.max(a_min, b_min))
        continue;

      aukko_pystyt[i].style.bottom = `${Math.min(a_min, b_min)}px`;
      aukko_pystyt[i].style.height = `${Math.abs(a_min - b_min)}px`;
      aukko_pystyt[j].style.bottom = `${Math.min(a_max, b_max)}px`;
      aukko_pystyt[j].style.height = `${Math.abs(a_max - b_max)}px`;

      if (aukko_pystyt[j].style.height == "0px") {
        aukko_pystyt[j].remove();
      }
      if (aukko_pystyt[i].style.height == "0px") {
        aukko_pystyt[i].remove();
        break;
      }
    }
  }
  for (let i = 0; i < aukko_vaat.length - 1; i++) {
    if (aukko_vaat[i].style.width == "0px")
      continue;

    let a_min = parseFloat(aukko_vaat[i].style.left);
    let a_max = a_min + parseFloat(aukko_vaat[i].style.width);

    for (let j = i + 1; j < aukko_vaat.length; j++) {
      if (aukko_vaat[i].style.bottom != aukko_vaat[j].style.bottom
      ||  aukko_vaat[j].style.width == "0px")
        continue;

      let b_min = parseFloat(aukko_vaat[j].style.left);
      let b_max = b_min + parseFloat(aukko_vaat[j].style.width);

      if (Math.min(a_max, b_max) <= Math.max(a_min, b_min))
        continue;

      aukko_vaat[i].style.left = `${Math.min(a_min, b_min)}px`;
      aukko_vaat[i].style.width = `${Math.abs(a_min - b_min)}px`;
      aukko_vaat[j].style.left = `${Math.min(a_max, b_max)}px`;
      aukko_vaat[j].style.width = `${Math.abs(a_max - b_max)}px`;

      if (aukko_vaat[j].style.width == "0px") {
        aukko_vaat[j].remove();
      }
      if (aukko_vaat[i].style.width == "0px") {
        aukko_vaat[i].remove();
        break;
      }
    }
  }
}

/**
 * Creates an Excel sheet based on the data extracted from the HTML elements.
 * @returns None
 */
function create__lista__tuoexcel() {
  listat = canvas.querySelectorAll(".listat__grandrow > div");
  h = parseFloat(document.querySelector("#box_h").value);
  w = parseFloat(document.querySelector("#box_w").value);
  listat_tuotanto_data = [];

  lista_tuo_excel = document.querySelector(".lista_tuo_excel");
  tableExcel = document.querySelector(".lista_tuo_excel tbody");
  tableExcel_trs = tableExcel.querySelectorAll("tr:not(.headingrow)");

  tableExcel_trs.forEach(tr => {
    tr.remove();
  });

  for (var i = 0; i < listat.length; i++) {
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
    var h18  = document.createElement('td');
    var h19  = document.createElement('td');
    var h20  = document.createElement('td');
    pituus = "-";
    current_date = new Date();

    if (listat[i].classList.contains("lista_pysty")) {
      pituus = parseFloat(listat[i].style.height)*5;
      etaisyys = parseFloat(listat[i].style.left)*5;
      h4.innerHTML = pituus;
      h20.innerHTML = etaisyys + " mm vasemmalle tilan " + current_tila + " seinässä " + current_room;
    }
    else if (listat[i].classList.contains("lista_vaaka")) {
      pituus = parseFloat(listat[i].style.width)*5;
      etaisyys = parseFloat(listat[i].style.bottom)*5;
      h4.innerHTML = pituus;
      h20.innerHTML = etaisyys + " mm ylös tilan " + current_tila + " seinässä " + current_room;
    }


    h1.innerHTML = i+1;
    h2.innerHTML = listat[i].dataset.listaname;
    h3.innerHTML = "---"; //lista taulusta

    h5.innerHTML = "1";
    h6.innerHTML = "---"; //lista taulusta

    h7.innerHTML = "---"; //lista taulusta
    h8.innerHTML = "---"; //lista taulusta
    h9.innerHTML = "---"; //lista taulusta
    h10.innerHTML = "---"; //lista taulusta
    h11.innerHTML = current_date.toLocaleDateString('fi-FI');
    h12.innerHTML = "Tilattu";
    h13.innerHTML = current_asiakas;
    h14.innerHTML = document.querySelector("h1").innerText;
    h15.innerHTML = "-";
    h16.innerHTML = "-";
    h17.innerHTML = current_tila;
    h18.innerHTML = current_room;
    h19.innerHTML = "";


    listat_tuotanto_data.push({
      "Rivinumero": h1.textContent,
      "Listan tyyppi": h2.textContent,
      "Tilauskoodi": h3.textContent,
      "Pituus": h4.textContent,
      "KPL": h5.textContent,
      "MATERIAALI": h6.textContent,
      "PAKSUUS": h7.textContent,
      "LAATU": h8.textContent,
      "Väri nimi": h9.textContent,
      "NCS code": h10.textContent,
      "Tilattu PVM": h11.textContent,
      "STATUS": h12.textContent,
      "Asiakas": h13.textContent,
      "Projekti": h14.textContent,
      "Osoite": h15.textContent,
      "Palletgroup": h16.textContent,
      "Asunto Nimi 1": h17.textContent,
      "Nimi 2": h18.textContent,
      "Työstöt": h19.textContent,
      "Asennus": h20.textContent
    }, );
  }

  listat_list = document.querySelector("#listat_list").value.split("||");


  // // rivitnro = ["Rivinumero","Rangan tyyppi","Tilauskoodi","Pituus","KPL","MATERIAALI","PAKSUUS","LAATU","Väri nimi","NCS code","Tilattu PVM","STATUS","Asiakas","Projekti","Osoite","Palletgroup","Asunto Nimi 1","Nimi 2","Työstöt","Asennus"];
  // listat_real_data = [];
  listat_real_names = [];
  listat_lenghts = [];
  listat_list.forEach(list => {
    l = list.split("~~");
    found="";
    found2="";
    listat_tuotanto_data.forEach(e => {
      if(l[0] === e["Listan tyyppi"]) {
        found+=e["Listan tyyppi"] + "->" + e["Pituus"] + "->" + e["Asennus"] + "~~";
        if(listat_lenghts.includes(parseFloat(e["Pituus"]))) {

        }
        else {
          listat_lenghts.push(parseFloat(e["Pituus"]));
        }
      }
    });
    if(found.length > 5) {
      listat_real_names.push(found);
    }

  });
  console.log(listat_real_names);

  real_listat = [];
  listat_real_names.forEach(e => {
    internal_array = e.split("~~");
    listat_lenghts.forEach(len2 => {
      asennukset="";
      kpl=0;
      internal_array.forEach(len_ => {
        len = parseFloat(len_.split("->")[1]);
        if(len == len2) {

          type = len_.split("->")[0];
          kpl+=1;
          asennukset += len_.split("->")[2];
        }
      });
      if(kpl>0) {
        real_listat.push({
          "Listan tyyppi": type,
          "Pituus": len2,
          "KPL": kpl,
          "Asennus": asennukset,
        });
      }
    });
  });

  let lv = canvas.querySelectorAll(".lv");
  lv.forEach(v => {
    real_listat.push({
      "Listan tyyppi": "LV",
      "Pituus": v.dataset.listapituus % 1? Math.ceil(v.dataset.listapituus): v.dataset.listapituus,
      "KPL": "",
      "Asennus": "",
    });
  })

  tableExcel = document.querySelector(".lista_tuo_excel tbody");
  tableExcel_trs = tableExcel.querySelectorAll("tr:not(.headingrow)");

  tableExcel_trs.forEach(tr => {
    tr.remove();
  });

  i=0;
  real_listat.forEach(e => {
    i+=1;
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
    var h18  = document.createElement('td');
    var h19  = document.createElement('td');
    var h20  = document.createElement('td');


    f_array = [];
    listat_list.forEach(list => {
      l = list.split("~~");

      if(l[0] === e["Listan tyyppi"]) {
        f_array= [({
          "Listan_SKU": l[1],
          "Tilauskoodi": l[2],
          "MATERIAALI": l[3],
          "PAKSUUS": l[10],
          "LAATU": l[4],
          "Väri nimi": l[5],
          "NCS code": l[6],
        })];
      }
    });
    if (e["Listan tyyppi"] === "LV") {
      found_array = {
        "Listan_SKU": "",
        "Tilauskoodi": "",
        "MATERIAALI": "",
        "PAKSUUS": "",
        "LAATU": "",
        "Väri nimi": "",
        "NCS code": "",
      };
    }
    else {
      found_array = f_array[0];
    }

    h1.innerHTML = i;
    h2.innerHTML = e["Listan tyyppi"];
    h3.innerHTML = found_array["Tilauskoodi"]; // Tilauskoodi
    h4.innerHTML = e["Pituus"];
    h5.innerHTML = e["KPL"];
    h6.innerHTML = found_array["MATERIAALI"]; // MATERIAALI
    h7.innerHTML = found_array["PAKSUUS"]; // PAKSUUS
    h8.innerHTML = found_array["LAATU"]; // LAATU
    h9.innerHTML = found_array["Väri nimi"]; // Väri nimi
    h10.innerHTML = found_array["NCS code"]; // NCS code

    h11.innerHTML = current_date.toLocaleDateString('fi-FI');
    h12.innerHTML = "Tilattu";
    h13.innerHTML = current_asiakas;
    h14.innerHTML = document.querySelector("h1").innerText;
    h15.innerHTML = "-";
    h16.innerHTML = "-";
    h17.innerHTML = current_tila;
    h18.innerHTML = current_room;
    h19.innerHTML = "";

    row.append(h1);
    row.append(h2);
    row.append(h3);
    row.append(h4);
    row.append(h5);
    row.append(h6);
    row.append(h7);
    row.append(h8);
    row.append(h9);
    row.append(h10);
    row.append(h11);
    row.append(h12);
    row.append(h13);
    row.append(h14);
    row.append(h15);
    row.append(h16);
    row.append(h17);
    row.append(h18);
    row.append(h19);
    row.append(h20);
    tableExcel.append(row);
  });
}




// function lataa_lista_as_excel() {
//   filename = current_tila +" seinä "+ current_room+' [Listat Asennusohje].xlsx';
//   var ws = XLSX.utils.json_to_sheet(listat_asennus_data);
//   var wb = XLSX.utils.book_new();
//   XLSX.utils.book_append_sheet(wb, ws, "Listat");
//   XLSX.writeFile(wb, filename);
// }

/**
 * Generates an Excel file containing a list of data and downloads it.
 * The filename is constructed based on the current_tila, current_room, and a fixed string.
 * The data is converted to a worksheet, added to a workbook, and then downloaded as an Excel file.
 * @returns None
 */
function lataa_lista_tuo_excel() {
  filename = current_tila +" seinä "+ current_room+' [Listat Tuotanto].xlsx';
  var ws = XLSX.utils.json_to_sheet(listat_real_data);
  var wb = XLSX.utils.book_new();
  XLSX.utils.book_append_sheet(wb, ws, "Listat");
  XLSX.writeFile(wb, filename);
}
