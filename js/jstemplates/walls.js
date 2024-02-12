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

function siirto_muualle() {
  sleep = ms => new Promise(resolve => setTimeout(resolve, ms));
  horizontals_original = canvas.querySelectorAll(".horizontalrow_saumat > div");
  rooms_vaaka = [];
  room_summ = 0;

  oneroom = document.querySelector("div.house__wall.house__wall_one");
  tworoom = document.querySelector("div.house__wall.house__wall_two");
  threeroom = document.querySelector("div.house__wall.house__wall_three");
  fourroom = document.querySelector("div.house__wall.house__wall_four");

  oneroom_h = parseFloat(oneroom.querySelector(".wall_height").value);
  tworoom_h = parseFloat(tworoom.querySelector(".wall_height").value);
  threeroom_h = parseFloat(threeroom.querySelector(".wall_height").value);
  fourroom_h = parseFloat(fourroom.querySelector(".wall_height").value);

  oneroom_w = parseFloat(oneroom.querySelector(".wall_width").value);
  tworoom_w = parseFloat(tworoom.querySelector(".wall_width_2").value);
  threeroom_w = parseFloat(threeroom.querySelector(".wall_width").value);
  fourroom_w = parseFloat(fourroom.querySelector(".wall_width_2").value);

  oneroom_name = oneroom.querySelector(".house__wall_status").innerText;
  tworoom_name = tworoom.querySelector(".house__wall_status").innerText;
  threeroom_name = threeroom.querySelector(".house__wall_status").innerText;
  fourroom_name = fourroom.querySelector(".house__wall_status").innerText;

  one = oneroom_h + "|" + oneroom_w + "|" + oneroom_name;
  two = tworoom_h + "|" + tworoom_w + "|" + tworoom_name;
  three = threeroom_h + "|" + threeroom_w + "|" + threeroom_name;
  four = fourroom_h + "|" + fourroom_w + "|" + fourroom_name;

  copiedcanvases = [];


  if(current_room.toLowerCase() == 'a' || oneroom.querySelector(".house__wall_status").classList.contains('hidden') || oneroom.querySelector(".house__wall_status").classList.contains('measured') || oneroom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  } else {
    rooms_vaaka.push(one);
  } 

  if(current_room.toLowerCase() == 'b' || tworoom.querySelector(".house__wall_status").classList.contains('hidden') || tworoom.querySelector(".house__wall_status").classList.contains('measured') || tworoom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  }
  else {
    rooms_vaaka.push(two);
  }

  if(current_room.toLowerCase() == 'c' || threeroom.querySelector(".house__wall_status").classList.contains('hidden') || threeroom.querySelector(".house__wall_status").classList.contains('measured') || threeroom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  }
  else {
    rooms_vaaka.push(three);
  }

  if(current_room.toLowerCase() == 'd' || fourroom.querySelector(".house__wall_status").classList.contains('hidden') || fourroom.querySelector(".house__wall_status").classList.contains('measured') || fourroom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  }
  else {
    rooms_vaaka.push(four);
  }

  
  body = document.body;
  body.classList.add("bg");
  for (var z = 0; z < rooms_vaaka.length; z++) {
    if(rooms_vaaka[z] == 'skip') {
      if(realcount == rooms_vaaka.length) {
        $('#step_drawscreen').val('drawscreen_section_eight');
        refresh__drawcontrols();
        break;
      }
      continue;
    }
    (async () => {
      room_h = parseFloat(drawarea_h.value);
      room_w = parseFloat(drawarea_h.value);

      secondcanvas = canvas.cloneNode(true);
      secondcanvas.style.height = room_h / 5 + "px";
      secondcanvas.dataset.height = room_h / 5 + "px";
      secondcanvas.style.width = room_w / 5 + "px";
      secondcanvas.dataset.width = room_w / 5 + "px";
      secondcanvas.style.display = "block";
      copiedcanvases.push(secondcanvas);

      document.querySelector(".wall").value = rooms_vaaka[z].split("|")[2];
      if (canvas.querySelector("div.levyt")) {
        canvas.querySelector("div.levyt").remove();
      }
      if (canvas.querySelector(".mp")) {
        todel = canvas.querySelectorAll(".mp");
        for (var i = 0; i < todel.length; i++) {
          todel[i].remove();
        }
      }
      if (canvas.querySelector(".lv")) {
        todel = canvas.querySelectorAll(".lv");
        for (var i = 0; i < todel.length; i++) {
          todel[i].remove();
        }
      }
      if (canvas.querySelector(".aukko")) {
        todel = canvas.querySelectorAll(".aukko");
        for (var i = 0; i < todel.length; i++) {
          todel[i].remove();
        }
      }
      if (canvas.querySelector("div.saumat__grandrow")) {
        canvas.querySelector("div.saumat__grandrow").remove();
      }
      if (canvas.querySelector("div.rangat__grandrow")) {
        canvas.querySelector("div.rangat__grandrow").remove();
      }
      if (canvas.querySelector("div.listat__grandrow")) {
        canvas.querySelector("div.listat__grandrow").remove();
      }
      if (canvas.querySelector("div.newrow_vertical")) {
        canvas.querySelector("div.newrow_vertical").remove();
      }
      await sleep(3000);
      $("#project_start").hide();
      console.log("z: " + z);
      realcount = Math.floor(parseFloat(z) + 1);
      console.log("z+1: " + realcount);
      document.querySelector("div.house.drawarea__house > div:nth-child(2) > div:nth-child(" + realcount + ") > div.house__wall_status").click();
      // updatearea();
      // changesize();
      await sleep(3000);
      console.log("Saumoitetaan");
      $('#step_drawscreen').val('drawscreen_section_four');
      refresh__drawcontrols();
      updatearea();
      
      saumoita();
      horizontals = canvas.querySelectorAll(".sauma__horizontal");
      for (var i = 0; i < horizontals.length; i++) {
        h_parent = horizontals[i].parentElement;
        horizontals[i].remove();
      }
      for (var i = 0; i < horizontals_original.length; i++) {
        h_parent.appendChild(horizontals_original[i]);
      }
      await sleep(3000);
      $('#step_drawscreen').val('drawscreen_section_five');
      refresh__drawcontrols();
      updatearea();

      console.log("Levytetty");
      await sleep(3000);
      $('#step_drawscreen').val('drawscreen_section_tyostot');

      open_ladonta_settings(true);
      await sleep(3000);
      console.log("Kiinnikelinja valinta I&II");
      open_ladonta_settings(false);
      reorganise__newtyosto();
      await sleep(3000);
      console.log("Työstetty");
      refresh__drawcontrols();
      updatearea();

      $('#step_drawscreen').val('drawscreen_section_esikatselu');
      await sleep(3000);
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_six');
      await sleep(3000);
      console.log("Menee rankoihin");
      refresh__drawcontrols();
      updatearea();
      await sleep(3000);
      $('#step_drawscreen').val('drawscreen_section_seven');
      console.log("Menee listoihin");
      await sleep(3000);
      secondcanvas = canvas.cloneNode(true);
      secondcanvas.style.height = room_h / 5 + "px";
      secondcanvas.dataset.height = room_h / 5 + "px";
      secondcanvas.style.width = room_w / 5 + "px";
      secondcanvas.dataset.width = room_w / 5 + "px";
      secondcanvas.style.display = "block";
      copiedcanvases.push(secondcanvas);
    
      for (var i = 0; i < copiedcanvases.length; i++) {
        // item = copiedcanvases[i];
        if (copiedcanvases[i].style.width == "100%") {
          copiedcanvases[i].style.width = parseFloat(copiedcanvases[i].dataset.width) + 50;
        }

        document.querySelector("#copiedcanvases").appendChild(copiedcanvases[i]);
        fixeight();
      }
      document.querySelector("#copiedcanvases").style.display = "flex";
      document.querySelector("#box-wrapper > main").style.display = "none";
      document.querySelector("#copiedcanvases").style.overflowX = "scroll";
      fixeight();
      setTimeout(fixeight(), 100);
      await sleep(3000);
      _levy = c_c.querySelectorAll(".levy");
      for (var z = _levy.length - 1; z >= 0; z--) {
        input_cord_btm = _levy[z].querySelectorAll(".tyostot__tyosto_vaaka");
        for (var i = input_cord_btm.length - 1; i >= 0; i--) {
          if (parseFloat(input_cord_btm[i].style.bottom) > parseFloat(_levy[z].style.height)) {
            input_cord_btm[i].remove();
          }
        }
      }
      await sleep(3000);
      refresh__drawcontrols();
      $('#step_drawscreen').val('drawscreen_section_eight');
      await sleep(3000);
      // takeshotAllwalls();

      for (let a = 0; a < copiedcanvases.length; a++) {
        k_levys = copiedcanvases[a].querySelectorAll(".levy");
        for (var i = k_levys.length - 1; i >= 0; i--) {
          countdown__kiinnikkeet(k_levys[i]);
        }      
      }

      $('#step_drawscreen').val('drawscreen_section_eight');
      refresh__drawcontrols();
      body.classList.remove("bg");
      await sleep(3000);
      $('#step_drawscreen').val('drawscreen_section_eight');
      refresh__drawcontrols();
    })();
  }
}


function osittainen_siirto_muualle() {
  if(document.querySelector("#copiedcanvases .canvas:nth-child(4)")) {
    document.querySelector("#copiedcanvases").style.display = "flex";
    document.querySelector("#box-wrapper > main").style.display = "none";
    return
  }
  horizontals_original = canvas.querySelectorAll(".horizontalrow_saumat > div");

  rooms_vaaka = [];
  room_summ = 0;

  oneroom = document.querySelector("div.house__wall.house__wall_one");
  tworoom = document.querySelector("div.house__wall.house__wall_two");
  threeroom = document.querySelector("div.house__wall.house__wall_three");
  fourroom = document.querySelector("div.house__wall.house__wall_four");

  oneroom_h = parseFloat(oneroom.querySelector(".wall_height").value);
  tworoom_h = parseFloat(tworoom.querySelector(".wall_height").value);
  threeroom_h = parseFloat(threeroom.querySelector(".wall_height").value);
  fourroom_h = parseFloat(fourroom.querySelector(".wall_height").value);
  oneroom_w = parseFloat(oneroom.querySelector(".wall_width").value);
  tworoom_w = parseFloat(tworoom.querySelector(".wall_width_2").value);
  threeroom_w = parseFloat(threeroom.querySelector(".wall_width").value);
  fourroom_w = parseFloat(fourroom.querySelector(".wall_width_2").value);
  oneroom_name = parseFloat(oneroom.querySelector(".house__wall_status").innerText);
  tworoom_name = parseFloat(tworoom.querySelector(".house__wall_status").innerText);
  threeroom_name = parseFloat(threeroom.querySelector(".house__wall_status").innerText);
  fourroom_name = parseFloat(fourroom.querySelector(".house__wall_status").innerText);

  one = oneroom_h + "|" + oneroom_w + "|" + oneroom_name;
  two = tworoom_h + "|" + tworoom_w + "|" + tworoom_name;
  three = threeroom_h + "|" + threeroom_w + "|" + threeroom_name;
  four = fourroom_h + "|" + fourroom_w + "|" + fourroom_name;


  if(oneroom.querySelector(".house__wall_status").classList.contains('hidden') || oneroom.querySelector(".house__wall_status").classList.contains('measured') || oneroom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  } else {
    rooms_vaaka.push(one);
  } 

  if(tworoom.querySelector(".house__wall_status").classList.contains('hidden') || tworoom.querySelector(".house__wall_status").classList.contains('measured') || tworoom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  }
  else {
    rooms_vaaka.push(two);
  }

  if(threeroom.querySelector(".house__wall_status").classList.contains('hidden') || threeroom.querySelector(".house__wall_status").classList.contains('measured') || threeroom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  }
  else {
    rooms_vaaka.push(three);
  }

  if(fourroom.querySelector(".house__wall_status").classList.contains('hidden') || fourroom.querySelector(".house__wall_status").classList.contains('measured') || fourroom.classList.contains('hidden') ) {
    rooms_vaaka.push('skip');
  }
  else {
    rooms_vaaka.push(four);
  }

  copiedcanvases = [];
  // secondcanvas = document.querySelector("#box-wrapper > main").cloneNode(true);
  // secondcanvas.dataset.height = 250+parseFloat(document.querySelector("#drawarea_h").value)/5 + "px";
  // secondcanvas.dataset.width = 50+parseFloat(document.querySelector("#box_w").value)/5 + "px";
  // secondcanvas.style.width = parseFloat(document.querySelector("#drawarea_w").value)/5 + "px";
  // secondcanvas.style.height = parseFloat(document.querySelector("#drawarea_h").value)/5 + "px";
  // secondcanvas.style.display ="block";
  // copiedcanvases.push(secondcanvas);

  skipping__room_ = current_room.replaceAll("a","0").replaceAll("b","1").replaceAll("c","2").replaceAll("d","3");
  skipping__room = parseFloat(skipping__room_);


  (async () => {
    for (var z = 0; z < rooms_vaaka.length; z++) {

      if(z == skipping__room) {
        return
      }
      body = document.body;
      body.classList.add("bg");
      realcount = Math.floor(parseFloat(z) + 1);
      console.log("z+1: " + realcount);
      
      room_h = parseFloat(rooms_vaaka[z].split("|")[0]);
      room_w = parseFloat(rooms_vaaka[z].split("|")[1]);
      document.querySelector(".wall").value = rooms_vaaka[z].split("|")[2];
      if (canvas.querySelector("div.levyt")) {
        canvas.querySelector("div.levyt").remove();
      }
      if (canvas.querySelector(".mp")) {
        todel = canvas.querySelectorAll(".mp");
        for (var i = 0; i < todel.length; i++) {
          todel[i].remove();
        }
      }
      if (canvas.querySelector(".lv")) {
        todel = canvas.querySelectorAll(".lv");
        for (var i = 0; i < todel.length; i++) {
          todel[i].remove();
        }
      }
      if (canvas.querySelector(".aukko")) {
        todel = canvas.querySelectorAll(".aukko");
        for (var i = 0; i < todel.length; i++) {
          todel[i].remove();
        }
      }
      if (canvas.querySelector("div.saumat__grandrow")) {
        canvas.querySelector("div.saumat__grandrow").remove();
      }
      if (canvas.querySelector("div.rangat__grandrow")) {
        canvas.querySelector("div.rangat__grandrow").remove();
      }
      if (canvas.querySelector("div.listat__grandrow")) {
        canvas.querySelector("div.listat__grandrow").remove();
      }
      if (canvas.querySelector("div.newrow_vertical")) {
        canvas.querySelector("div.newrow_vertical").remove();
      }
      await sleep(3000);
      $("#project_start").hide();
      console.log("z: " + z);
      
      document.querySelector("div.house.drawarea__house > div:nth-child(2) > div:nth-child(" + realcount + ") > div.house__wall_status").click();
      // updatearea();
      // changesize();
      await sleep(3000);
      console.log("Saumoitetaan");
      $('#step_drawscreen').val('drawscreen_section_four');
      refresh__drawcontrols();
      updatearea();
      
      saumoita();
      horizontals = canvas.querySelectorAll(".sauma__horizontal");
      for (var i = 0; i < horizontals.length; i++) {
        h_parent = horizontals[i].parentElement;
        horizontals[i].remove();
      }
      for (var i = 0; i < horizontals_original.length; i++) {
        h_parent.appendChild(horizontals_original[i]);
      }
      levyta();
      await sleep(3000);
      $('#step_drawscreen').val('drawscreen_section_five');
      refresh__drawcontrols();
      updatearea();

      console.log("Levytetty");
      await sleep(3000);
      refresh__drawcontrols();
      $('#step_drawscreen').val('drawscreen_section_tyostot');

      open_ladonta_settings(true);
      await sleep(3000);
      console.log("Kiinnikelinja valinta I&II");
      open_ladonta_settings(false);
      reorganise__newtyosto();
      await sleep(3000);
      console.log("Työstetty");
      refresh__drawcontrols();
      updatearea();

      await sleep(3000);
      secondcanvas = canvas.cloneNode(true);
      secondcanvas.style.height = room_h / 5 + "px";
      secondcanvas.dataset.height = room_h / 5 + "px";
      secondcanvas.style.width = room_w / 5 + "px";
      secondcanvas.dataset.width = room_w / 5 + "px";
      secondcanvas.style.display = "block";
      copiedcanvases.push(secondcanvas);
    }
    for (var i = 0; i < copiedcanvases.length; i++) {
      // item = copiedcanvases[i];
      if (copiedcanvases[i].style.width == "100%") {
        copiedcanvases[i].style.width = parseFloat(copiedcanvases[i].dataset.width) + 50;
      }
      // item.style.height = copiedcanvases[i].dataset.width;
      document.querySelector("#copiedcanvases").appendChild(copiedcanvases[i]);

      lineinbuts = copiedcanvases[i].querySelectorAll(".lineinput");

      for (var a = 0; a < lineinbuts.length; a++) {
        lineinbuts[a].remove();
      }
      fixeight();
    }
    document.querySelector("#copiedcanvases").style.display = "flex";
    document.querySelector("#box-wrapper > main").style.display = "none";
    // document.querySelector("#copiedcanvases").style.overflowX = "scroll";
    fixeight();
    setTimeout(fixeight(), 100);
    await sleep(3000);
    _levy = c_c.querySelectorAll(".levy");
    for (var z = _levy.length - 1; z >= 0; z--) {
      input_cord_btm = _levy[z].querySelectorAll(".tyostot__tyosto_vaaka");
      for (var i = input_cord_btm.length - 1; i >= 0; i--) {
        if (parseFloat(input_cord_btm[i].style.bottom) > parseFloat(_levy[z].style.height)) {
          input_cord_btm[i].remove();
        }
      }
    }
    await sleep(3000);
    
    

    copiedcanvases = document.querySelector("#copiedcanvases");
    ck_levys = copiedcanvases.querySelectorAll(".levy");

    for (var i = 0; i < ck_levys.length; i++) {
        // The item (or items) to press and hold on
        let item = ck_levys[i].querySelector("b");
        console.log(item);
        let timerID;
        let counter = 0;

        let pressHoldEvent = new CustomEvent("pressHold");

        // Increase or decreae value to adjust how long
        // one should keep pressing down before the pressHold
        // event fires
        let pressHoldDuration = 50;

        // Listening for the mouse and touch events    
        item.addEventListener("mousedown", c_pressingDown, false);
        item.addEventListener("mouseup", c_notPressingDown, false);
        item.addEventListener("mouseleave", c_notPressingDown, false);

        item.addEventListener("touchstart", c_pressingDown, false);
        item.addEventListener("touchend", c_notPressingDown, false);

        // Listening for our custom pressHold event
        item.addEventListener("pressHold", c_doSomething, false);

        function c_pressingDown(e) {
          // Start the timer
          requestAnimationFrame(c_timer);

          e.preventDefault();

          // console.log("Pressing!");
        }

        function c_notPressingDown(e) {
          // Stop the timer
          cancelAnimationFrame(timerID);
          counter = 0;

          // console.log("Not pressing!");
        }

        //
        // Runs at 60fps when you are pressing down
        //
        function c_timer() {
          // console.log("Timer tick!");

          if (counter < pressHoldDuration) {
            timerID = requestAnimationFrame(c_timer);
            counter++;
          } else {
            item.dispatchEvent(pressHoldEvent);
          }
        }

        function c_doSomething(e) {
          console.log("pressHold event fired!");
          pressed__levy = item;
          c_open_ltladonta_settings(true,item);
          // alert("TYÖSTÖNÄYTTÖ TÄHÄN")
        }

      }

      for (let a = 0; a < copiedcanvases.length; a++) {
        k_levys = copiedcanvases[a].querySelectorAll(".levy");
        for (var i = k_levys.length - 1; i >= 0; i--) {
          countdown__kiinnikkeet(k_levys[i]);
        }      
      }

    await sleep(1000);
    document.querySelector("#copiedcanvases").style.display = "flex";
    document.querySelector("#box-wrapper > main").style.display = "none";    
  })();

    
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