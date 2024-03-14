/**
 * Takes a screenshot of all walls by capturing the content of a specified div element,
 * converting it to an image, and saving it as a PDF file.
 * @returns None
 */
function takeshotAllwalls() {
  let div = document.querySelector("#copiedcanvases");
  img_name = "Havainnekuva_seinät";
  html2canvas(div).then(function(canvas3) {
    const imageData = canvas3.toDataURL('image/png');
    const screenshotImage = new Image();
    screenshotImage.src = imageData;
    var pdf = new jsPDF({
      orientation: 'landscape',
      title: 'Havainnekuva_seinät',
    });
    imgProps = pdf.getImageProperties(imageData);
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
    pdf.addImage(imageData, 'PNG', 3, 3, pdfWidth, pdfHeight, null, null, 0);
    pdf.save(img_name + '.pdf');
  });
}

/**
 * Executes the fixeight function to adjust the width of copied canvases and remove elements
 * that exceed certain height limits.
 * @returns None
 */
function fixeight() {
  console.log("fixeight executed");
  c_c = document.querySelector("#copiedcanvases");
  copiedcanvas = c_c.querySelectorAll(".canvas");
  for (var i = 0; i < copiedcanvas.length; i++) {
    // item = copiedcanvas[i];
    if ((copiedcanvas[i].style.width) == "100%" || parseFloat(copiedcanvas[i].style.width) == 100) {
      copiedcanvas[i].style.width = parseFloat(copiedcanvas[i].dataset.width) + 50 + "px";
      console.log("Fixeight fired");
    }
  }
  _levy = c_c.querySelectorAll(".levy");
  for (var z = _levy.length - 1; z >= 0; z--) {
    input_cord_btm = _levy[z].querySelectorAll(".tyostot__tyosto_vaaka");
    for (var i = input_cord_btm.length - 1; i >= 0; i--) {
      if (parseFloat(input_cord_btm[i].style.bottom) > parseFloat(_levy[z].style.height)) {
        input_cord_btm[i].remove();
      }
    }
  }
}

/**
 * Function to handle navigation based on the selected levels in the UI.
 * @param {arg} arg - The argument passed to the function.
 * @returns None
 */
function eight__navigation(arg) {
  eight = document.querySelector("#copiedcanvases");
  e_levyt = eight.querySelectorAll(".levy");
  e_rangat = eight.querySelectorAll(".rangat__grandrow");
  e_listat__grandrow = eight.querySelectorAll(".listat__grandrow");
  if (document.querySelector("#eight__lvl_zero").checked) {
    for (var i = e_levyt.length - 1; i >= 0; i--) {
      e_levyt[i].classList.remove("levy_disabled");
    }
  }
  else {
    for (var i = e_levyt.length - 1; i >= 0; i--) {
      e_levyt[i].classList.add("levy_disabled");
    }
  }
  if (document.querySelector("#eight__lvl_one").checked) {
    for (var i = e_levyt.length - 1; i >= 0; i--) {
      e_kin = e_levyt[i].querySelectorAll(".tyostot__tyosto");
      for (var v = e_kin.length - 1; v >= 0; v--) {
        e_kin[v].style.opacity = 1;
      }
    }
  }
  else {
    for (var i = e_levyt.length - 1; i >= 0; i--) {
      e_kin = e_levyt[i].querySelectorAll(".tyostot__tyosto");
      for (var v = e_kin.length - 1; v >= 0; v--) {
        e_kin[v].style.opacity = 0;
      }
    }
  }
  if (document.querySelector("#eight__lvl_two").checked) {
    for (var i = e_rangat.length - 1; i >= 0; i--) {
      e_rangat[i].style.opacity = 1;
    }
  }
  else {
    for (var i = e_rangat.length - 1; i >= 0; i--) {
      e_rangat[i].style.opacity = 0;
    }
  }
  if (document.querySelector("#eight__lvl_three").checked) {
    for (var i = e_listat__grandrow.length - 1; i >= 0; i--) {
      e_listat__grandrow[i].style.opacity = 1;
    }
  }
  else {
    for (var i = e_listat__grandrow.length - 1; i >= 0; i--) {
      e_listat__grandrow[i].style.opacity = 0;
    }
  }
  // if(document.querySelector("#eight__lvl_four").checked) {
  // }
  // else {
  // }
  // if(document.querySelector("#eight__lvl_five").checked) {
  // }
  // else {
  // }
}

realcount = 0;

/**
 * Moves room data to a different location based on the current room and its status.
 * @returns None
 */
function siirto_muualle(mode) {
  (async () => {
      document.querySelector(".preloader").classList.add("active");
      await sleep(1000);
      canvas_a = document.querySelector(".canvas_a");
      canvas_b = document.querySelector(".canvas_b");
      canvas_c = document.querySelector(".canvas_c");
      canvas_d = document.querySelector(".canvas_d");

      canvas_a.style.height = parseFloat(document.querySelector("#wall_one_a_h").value) / 5 + "px";
      canvas_a.style.width = parseFloat(document.querySelector("#wall_one_a_w").value) / 5 + "px";
      canvas_b.style.height = parseFloat(document.querySelector("#wall_one_b_h").value) / 5 + "px";
      canvas_b.style.width = parseFloat(document.querySelector("#wall_one_b_w").value) / 5 + "px";
      canvas_c.style.height = parseFloat(document.querySelector("#wall_one_c_h").value) / 5 + "px";
      canvas_c.style.width = parseFloat(document.querySelector("#wall_one_c_w").value) / 5 + "px";
      canvas_d.style.height = parseFloat(document.querySelector("#wall_one_d_h").value) / 5 + "px";
      canvas_d.style.width = parseFloat(document.querySelector("#wall_one_d_w").value) / 5 + "px";
      
      

      formData = {
        pr_id: document.querySelector("#current_project_id").value,
        room: current_apartment,
        wall: current_room,
    },
    $.ajax({
        type: "POST",
        url: "../vendor/get-savedprogressroom.php",
        data: formData,
        error: function (jqxhr, status, exception) {
          console.log('Tietokantavirhe, soita numeroon +358449782028');
        }
    }).done(function (success) {
      successful = success.split("],[");
      if(successful[0].length > 3) {
        successful.forEach(s_unprocessed => {
            s = s_unprocessed.replaceAll('"','').replaceAll("]","").replaceAll("[","").split(",");
            content = s[4];
            timestamp = s[5];
            if(sau_ok < timestamp && content.split("~~")[0] === "sau") {
              sauma_content = content;
            }
            else if(tyostot_ok < timestamp && content.split("~~")[0] === "tyostot") {
              tyosto_content = content;
            }
        });
      }
    });
    await sleep(500);

    room_array = ["a","b","c","d"];
    canvas__original = canvas;
    room__original = current_room;
    room_array.forEach(room => {
      if(room !== room__original) {
        current_project_id = parseFloat(document.querySelector("#current_project_id").value);
        current_room = room;
        formData = {
          projectid: parseFloat(current_project_id),
          apartment: current_apartment,
          wall: room,
          function: sauma_content,
          timestamp: Date.now()
          };
          
        document.querySelector("#box_w").value = parseFloat(document.querySelector("#wall_one_"+room+"_w").value);
        document.querySelector("#box_h").value = parseFloat(document.querySelector("#wall_one_"+room+"_h").value);

        canvas = document.querySelector(".canvas_"+room);
        saumoita();
        
        $.ajax({
            type: "POST",
            url: "/vendor/addsaving.php",
            data: formData,
            error: function (jqxhr, status, exception) {
                console.log('Tietokantavirhe, soita numeroon +358449782028');
            }
        }).done(function (data) {
            console.log("Saving made on array: " + sauma_content.toString());
            console.log(data);
        });
        if(mode === "saumat") {
          
        }
        else {
          kiinnikkeet__siirto();
          kiinnike_default_initialization();
        }

      }
      else {
        document.querySelector(".canvas_"+room).innerHTML = canvas__original.innerHTML;
      }
      console.log(room);
    });
    await sleep(2500);
    

    document.querySelector("#box_w").value = parseFloat(document.querySelector("#wall_one_"+current_room+"_w").value);
    document.querySelector("#box_h").value = parseFloat(document.querySelector("#wall_one_"+current_room+"_h").value);

    room_array.forEach(room => {

      canvas = document.querySelector(".canvas_"+room);

      canvas.querySelectorAll(".levy").forEach(levy => {
        countdown__kiinnikkeet(levy)
      });
    });
    await sleep(2500);


    room_array.forEach(room => {
      canvas = document.querySelector(".canvas_"+room);
      rangoita();
    });
    await sleep(1500);

    room_array.forEach(room => {
      canvas = document.querySelector(".canvas_"+room);
      listoitus();
    });
    await sleep(500);
    document.querySelector(".preloader").classList.remove("active");
    alert("Valmis!"); 


  })();
   
}


/**
 * This function performs a partial transfer of elements to another location based on certain conditions.
 * It checks for specific elements in the document and manipulates their styles and properties accordingly.
 * @returns None
 */
function osittainen_siirto_muualle() {
  siirto_muualle('partial');
}


/**
 * Creates an Excel file from the walls in the canvas.
 * This function extracts data from the HTML elements representing the walls and their properties,
 * and generates an Excel file with the extracted data.
 * @returns None
 */
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