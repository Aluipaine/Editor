listoitettu = false;
old_listat_excel = document.querySelector(".lista_excel").innerHTML;
old_ikkunalista_excel = document.querySelector(".ikkunalista_excel").innerHTML;

function listoitus() {
  lista_excel = document.querySelector(".lista_excel");
  lista_excel.innerHTML = old_listat_excel;
  ikkunalista_excel = document.querySelector(".ikkunalista_excel");
  ikkunalista_excel.innerHTML = old_ikkunalista_excel;
  tyostot_grandrow.style.opacity = 0;
  listat__grandrow = document.querySelector(".listat__grandrow");
  valirangat = listat__grandrow.querySelectorAll(".valiranka");
  for (var i = 0; i < valirangat.length; i++) {
    valirangat[i].remove();
  }
  erikoisranka = listat__grandrow.querySelectorAll(".erikoisranka");
  for (var i = 0; i < erikoisranka.length; i++) {
    erikoisranka[i].remove();
  }
  saumaranka = listat__grandrow.querySelectorAll(".saumaranka");
  for (var i = 0; i < saumaranka.length; i++) {
    saumaranka[i].style.zIndex = 8;
  }
  listat = listat__grandrow.querySelectorAll("div");
  for (var i = 0; i < listat.length; i++) {
    // listat[i].className = 'tyostot__tyosto';
    listat[i].querySelector("*").remove();
    listat[i].style.boxShadow = "unset";
    listat[i].style.background = "dimgray";
  }
  ikkunaListaExcel = document.querySelector(".ikkunalista_excel");
  ListaExcel = document.querySelector(".lista_excel");
  first_excel = document.querySelector(" table.ikkunalista_excel > tbody > tr");
  tds = first_excel.querySelectorAll("td");
  for (var i = 0; i < tds.length; i++) {
    if (tds[i].classList.contains("cool") !== true) {
      tds[i].remove();
    }
  }
  second_excel = document.querySelector(" table.lista_excel > tbody > tr");
  tds = second_excel.querySelectorAll("td");
  for (var i = 0; i < tds.length; i++) {
    if (tds[i].classList.contains("cool") !== true) {
      tds[i].remove();
    }
  }
  if (listoitettu === false) {
    listoita();
  }
  else {
    console.log("Jo listoitettu");
  }
}

function listoita() {
  summ_epdm = 0;
  listat_data = [];
  ikkuna_array = [];
  ikkunalistat_data = [];
  listat = listat__grandrow.querySelectorAll("div");
  for (var i = 0; i < listat.length; i++) {
    const row = document.createElement('tr');
    var h1 = document.createElement('td');
    var h2 = document.createElement('td');
    var h3 = document.createElement('td');
    var h4 = document.createElement('td');
    var h5 = document.createElement('td');
    h1.innerHTML = "EP20";
    h2.innerHTML = "EPDM-Lista";
    if (listat[i].classList.contains("tyostot__tyosto_pysty")) {
      h3.innerHTML = h;
      etaisyys = parseFloat(listat[i].style.left) * 5;
      h5.innerHTML = etaisyys + " mm vasemmalle Seinässä " + wallname;
    }
    else if (listat[i].classList.contains("tyostot__tyosto_vaaka")) {
      h3.innerHTML = w;
      etaisyys = parseFloat(listat[i].style.bottom) * 5;
      h5.innerHTML = etaisyys + " mm ylös Seinässä " + wallname;
    }
    summ_epdm += parseFloat(h3.innerHTML);
    h4.innerHTML = "1";
    listat_data.push({
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
    ListaExcel.append(row);
  }
  document.querySelector('.get_lista_excel').addEventListener('click', () => {
    filename = 'Tila ESIMERKKI - Listat.xlsx';
    var ws = XLSX.utils.json_to_sheet(listat_data);
    var wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Listat");
    XLSX.writeFile(wb, filename);
  });
  ikkunat = document.querySelectorAll(".ikkuna");
  aukot = document.querySelectorAll(".aukko");
  levyt = document.querySelectorAll(".levyt");
  if (ikkunat.length > 0) {
    for (var i = ikkunat.length - 1; i >= 0; i--) {
      //TYPE,NAME,PITUUS,ASENNUS
      i_vas = parseFloat(ikkunat[i].style.height) + "," + i + "," + "" + "," + "" + "," + "VASEN ";
      i_oik = parseFloat(ikkunat[i].style.height) + "," + i + "," + "" + "," + "" + "," + "OIKEA ";
      i_btm = parseFloat(ikkunat[i].style.width) + 1 + "," + i + "," + "" + "," + "" + "," + "ALA";
      i_top = parseFloat(ikkunat[i].style.width) + 1 + "," + i + "," + "" + "," + "" + "," + "YLÄ";
      ikkuna_array.push(i_vas);
      ikkuna_array.push(i_oik);
      ikkuna_array.push(i_btm);
      ikkuna_array.push(i_top);
    }
    for (var i = ikkuna_array.length - 1; i >= 0; i--) {
      const row = document.createElement('tr');
      var h1 = document.createElement('td');
      var h2 = document.createElement('td');
      var h3 = document.createElement('td');
      var h4 = document.createElement('td');
      var h5 = document.createElement('td');
      i_ar = ikkuna_array[i].split(",");
      h1.innerHTML = "SL251";
      h2.innerHTML = "Lista";
      h3.innerHTML = i_ar[0] * 5;
      summ_epdm += i_ar[0] * 5;
      h4.innerHTML = "1";
      h5.innerHTML = "Ikkunan #" + i_ar[1] + ", " + i_ar[4] + "REUNA";
      row.append(h1);
      row.append(h2);
      row.append(h3);
      row.append(h4);
      row.append(h5);
      ikkunaListaExcel.append(row);
      ikkunalistat_data.push({
        "Tyyppi": h1.textContent,
        "Nimi": h2.textContent,
        "Pituus (mm)": h3.textContent,
        "KPL": h4.textContent,
        "Asennus": h5.textContent
      }, );
    }
  }
  listoitettu = true;
  document.querySelector('.get_ikkunalista_excel').addEventListener('click', () => {
    filename = 'Tila ESIMERKKI - Ikkunalistat.xlsx';
    var ws = XLSX.utils.json_to_sheet(ikkunalistat_data);
    var wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "ikkunalistat");
    XLSX.writeFile(wb, filename);
  });
  document.querySelector(".listat_excel").prepend("Tähän seinään menee noin " + summ_epdm + "mm EPDM-kumia");
}