listoitettu = false;
if(document.querySelector(".lista_excel")) {
  old_listat_excel = document.querySelector(".lista_excel").innerHTML;
}

if(document.querySelector(".ikkunalista_excel")) {
  old_ikkunalista_excel = document.querySelector(".ikkunalista_excel").innerHTML;
}
function listoitus() {
  lista_excel = document.querySelector(".lista_excel");
  lista_excel.innerHTML = old_listat_excel;
  ikkunalista_excel = document.querySelector(".ikkunalista_excel");
  ikkunalista_excel.innerHTML = old_ikkunalista_excel;
  tyostot_grandrow.style.opacity = 0;
  listat__grandrow = document.querySelector(".listat__grandrow");

  
  listat = listat__grandrow.querySelectorAll("div");
  for (var i = 0; i < listat.length; i++) {
    listat[i].style.boxShadow = "unset";
    listat[i].style.background = "dimgray";
    listat[i].classList.add("lista");
    listat[i].innerHTML = "";
  }
  ikkunaListaExcel = document.querySelector(".ikkunalista_excel");
  ListaExcel = document.querySelector(".lista_excel");
  first_excel = document.querySelector(" table.ikkunalista_excel > tbody > tr");
  second_excel = document.querySelector(" table.lista_excel > tbody > tr");

  if (listoitettu === false) {
    make_aslista_excel();
  }
  else {
    console.log("Jo listoitettu");
  }
}










// function make_aslista_excel() {
//   summ_epdm = 0;
//   listat_data = [];
//   ikkuna_array = [];
//   ikkunalistat_data = [];
//   listat = listat__grandrow.querySelectorAll("div");
//   for (var i = 0; i < listat.length; i++) {
//     const row = document.createElement('tr');
//     var h1 = document.createElement('td');
//     var h2 = document.createElement('td');
//     var h3 = document.createElement('td');
//     var h4 = document.createElement('td');
//     var h5 = document.createElement('td');
//     h1.innerHTML = "EP20";
//     h2.innerHTML = "EPDM-Lista";
//     listat[i].style.opacity = 1;
//     if (listat[i].classList.contains("ranka_pysty")) {
//       h3.innerHTML = h;
//       etaisyys = parseFloat(listat[i].style.left) * 5;
//       h5.innerHTML = etaisyys + " mm vasemmalle Seinässä " + wallname;
//     }
//     else if (listat[i].classList.contains("ranka_vaaka")) {
//       h3.innerHTML = w;
//       etaisyys = parseFloat(listat[i].style.bottom) * 5;
//       h5.innerHTML = etaisyys + " mm ylös Seinässä " + wallname;
//     }
//     summ_epdm += parseFloat(h3.innerHTML);
//     h4.innerHTML = "1";
//     listat_data.push({
//       "Tyyppi": h1.textContent,
//       "Nimi": h2.textContent,
//       "Pituus (mm)": h3.textContent,
//       "KPL": h4.textContent,
//       "Asennus": h5.textContent
//     }, );
//     row.append(h1);
//     row.append(h2);
//     row.append(h3);
//     row.append(h4);
//     row.append(h5);
//     ListaExcel.append(row);
//   }
//   document.querySelector('.get_lista_excel').addEventListener('click', () => {
//     filename = 'Tila ESIMERKKI - Listat.xlsx';
//     var ws = XLSX.utils.json_to_sheet(listat_data);
//     var wb = XLSX.utils.book_new();
//     XLSX.utils.book_append_sheet(wb, ws, "Listat");
//     XLSX.writeFile(wb, filename);
//   });
//   ikkunat = document.querySelectorAll(".ikkuna");
//   aukot = document.querySelectorAll(".aukko");
//   levyt = document.querySelectorAll(".levyt");
//   if (ikkunat.length > 0) {
//     for (var i = ikkunat.length - 1; i >= 0; i--) {
//       //TYPE,NAME,PITUUS,ASENNUS
//       i_vas = parseFloat(ikkunat[i].style.height) + "," + i + "," + "" + "," + "" + "," + "VASEN ";
//       i_oik = parseFloat(ikkunat[i].style.height) + "," + i + "," + "" + "," + "" + "," + "OIKEA ";
//       i_btm = parseFloat(ikkunat[i].style.width) + 1 + "," + i + "," + "" + "," + "" + "," + "ALA";
//       i_top = parseFloat(ikkunat[i].style.width) + 1 + "," + i + "," + "" + "," + "" + "," + "YLÄ";
//       ikkuna_array.push(i_vas);
//       ikkuna_array.push(i_oik);
//       ikkuna_array.push(i_btm);
//       ikkuna_array.push(i_top);
//     }
//     for (var i = ikkuna_array.length - 1; i >= 0; i--) {
//       const row = document.createElement('tr');
//       var h1 = document.createElement('td');
//       var h2 = document.createElement('td');
//       var h3 = document.createElement('td');
//       var h4 = document.createElement('td');
//       var h5 = document.createElement('td');
//       i_ar = ikkuna_array[i].split(",");
//       h1.innerHTML = "SL251";
//       h2.innerHTML = "Lista";
//       h3.innerHTML = i_ar[0] * 5;
//       summ_epdm += i_ar[0] * 5;
//       h4.innerHTML = "1";
//       h5.innerHTML = "Ikkunan #" + i_ar[1] + ", " + i_ar[4] + "REUNA";
//       row.append(h1);
//       row.append(h2);
//       row.append(h3);
//       row.append(h4);
//       row.append(h5);
//       ikkunaListaExcel.append(row);
//       ikkunalistat_data.push({
//         "Tyyppi": h1.textContent,
//         "Nimi": h2.textContent,
//         "Pituus (mm)": h3.textContent,
//         "KPL": h4.textContent,
//         "Asennus": h5.textContent
//       }, );
//     }
//   }
//   listoitettu = true;
//   document.querySelector('.get_ikkunalista_excel').addEventListener('click', () => {
//     filename = 'Tila ESIMERKKI - Ikkunalistat.xlsx';
//     var ws = XLSX.utils.json_to_sheet(ikkunalistat_data);
//     var wb = XLSX.utils.book_new();
//     XLSX.utils.book_append_sheet(wb, ws, "ikkunalistat");
//     XLSX.writeFile(wb, filename);
//   });
//   document.querySelector(".listat_excel").prepend("Tähän seinään menee noin " + summ_epdm + "mm EPDM-kumia");
// }


function create__lista__asexcel() {
  listat = canvas.querySelectorAll(".listat__grandrow > div");
  h = parseFloat(document.querySelector("#box_h").value);
  w = parseFloat(document.querySelector("#box_w").value);
  listat_asennus_data = [];

  lista_as_excel = document.querySelector(".lista_as_excel");
  tableExcel = document.querySelector(".lista_as_excel tbody");
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
       
    h1.innerHTML = listat[i].dataset.listan_koodin_alku;
    h2.innerHTML = listat[i].dataset.name + " " + listat[i].dataset.listan_koodin_alku;

    if (listat[i].classList.contains("lista_pysty")) {
      pituus = parseFloat(listat[i].style.height)*5 -10;
      etaisyys = parseFloat(listat[i].style.left)*5;
      h3.innerHTML = pituus;
      h5.innerHTML = etaisyys + " mm vasemmalle tilan " + current_tila + " seinässä " + current_room;
    }
    else if (listat[i].classList.contains("lista_vaaka")) {
      pituus = parseFloat(listat[i].style.width)*5 -10;
      etaisyys = parseFloat(listat[i].style.bottom)*5;
      h3.innerHTML = pituus;
      h5.innerHTML = etaisyys + " mm ylös tilan " + current_tila + " seinässä " + current_room;
    }
    h4.innerHTML = "1";
    listat_asennus_data.push({
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
  
}

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

    current_date = new Date();

       
    h1.innerHTML = i+1;
    h2.innerHTML = listat[i].dataset.listan_koodin_alku;
    h3.innerHTML = listat[i].dataset.tilauskoodi;
    h4.innerHTML = parseFloat(listat[i].querySelector(".lista_cord:not(.lista_type)").innerText);
    h5.innerHTML = "1";
    h6.innerHTML = listat[i].dataset.materiaali;

    h7.innerHTML = listat[i].dataset.paksuus;
    h8.innerHTML = listat[i].dataset.laatu;
    h9.innerHTML = listat[i].dataset.vari_nimi;
    h10.innerHTML = listat[i].dataset.ncs_code;
    h11.innerHTML = current_date.toLocaleDateString('fi-FI');
    h12.innerHTML = "Tilattu";
    h13.innerHTML = current_asiakas;
    h14.innerHTML = document.querySelector("h1").innerText;
    h15.innerHTML = "-";
    h16.innerHTML = "-";
    h17.innerHTML = current_tila;
    h18.innerHTML = current_room;
    h19.innerHTML = "";
    h20.innerHTML = "";

    listat_tuotanto_data.push({
      "Rivinumero": h1.textContent,
      "Rangan tyyppi": h2.textContent,
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
  }
}

function lataa_lista_as_excel() {
  filename = current_tila +" seinä "+ current_room+' [Listat Asennusohje].xlsx';
  var ws = XLSX.utils.json_to_sheet(listat_asennus_data);
  var wb = XLSX.utils.book_new();
  XLSX.utils.book_append_sheet(wb, ws, "Listat");
  XLSX.writeFile(wb, filename);
}

function lataa_lista_tuo_excel() {
  filename = current_tila +" seinä "+ current_room+' [Listat Asennusohje].xlsx';
  var ws = XLSX.utils.json_to_sheet(listat_tuotanto_data);
  var wb = XLSX.utils.book_new();
  XLSX.utils.book_append_sheet(wb, ws, "Listat");
  XLSX.writeFile(wb, filename);
}
