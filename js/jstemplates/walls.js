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
  e_rangat = eight.querySelectorAll(".tyostot__grandrow");
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

function siirto_muualle() {
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

  copiedcanvases = [];


  secondcanvas = canvas.cloneNode(true);
  secondcanvas.style.height = room_h / 5 + "px";
  secondcanvas.dataset.height = room_h / 5 + "px";
  secondcanvas.style.width = room_w / 5 + "px";
  secondcanvas.dataset.width = room_w / 5 + "px";
  secondcanvas.style.display = "block";
  copiedcanvases.push(secondcanvas);

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

  const sleep = ms => new Promise(resolve => setTimeout(resolve, ms));
  (async () => {
    for (var z = 0; z < rooms_vaaka.length; z++) {
      if(rooms_vaaka[z] == 'skip') {
        if(realcount == rooms_vaaka.length) {
          $('#step_drawscreen').val('drawscreen_section_eight');
          refresh__drawcontrols();
          break;
        }
        continue;
      }

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
      if (canvas.querySelector("div.tyostot__grandrow")) {
        canvas.querySelector("div.tyostot__grandrow").remove();
      }
      if (canvas.querySelector("div.listat__grandrow")) {
        canvas.querySelector("div.listat__grandrow").remove();
      }
      if (canvas.querySelector("div.newrow_vertical")) {
        canvas.querySelector("div.newrow_vertical").remove();
      }
      await sleep(1000);
      $("#project_start").hide();
      console.log("z: " + z);
      realcount = Math.floor(parseFloat(z) + 1);
      console.log("z+1: " + realcount);
      document.querySelector("div.house.drawarea__house > div:nth-child(2) > div:nth-child(" + realcount + ") > div.house__wall_status").click();
      // updatearea();
      // changesize();
      await sleep(1000);
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
      await sleep(1000);
      // levyta();
      submitprogress('', 'adding', '', 'sau');
      submitprogress('', 'save');
      await sleep(1000);
      $('#step_drawscreen').val('drawscreen_section_five');
      refresh__drawcontrols();
      updatearea();

      console.log("Levytetty");
      await sleep(1000);



      $('#step_drawscreen').val('drawscreen_section_tyostot');

      open_ladonta_settings(true);
      await sleep(1000);
      console.log("Kiinnikelinja valinta I&II");
      open_ladonta_settings(false);
      reorganise__newtyosto();
      await sleep(1000);
      console.log("Työstetty");
      refresh__drawcontrols();
      updatearea();

      $('#step_drawscreen').val('drawscreen_section_esikatselu');
      await sleep(1000);
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_six');
      await sleep(1000);
      console.log("Menee rankoihin");
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_seven');
      console.log("Menee listoihin");
      await sleep(1000);
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
      fixeight();
    }
    document.querySelector("#copiedcanvases").style.display = "flex";
    document.querySelector("#box-wrapper > main").style.display = "none";
    document.querySelector("#copiedcanvases").style.overflowX = "scroll";
    fixeight();
    setTimeout(fixeight(), 100);
    await sleep(1000);
    _levy = c_c.querySelectorAll(".levy");
    for (var z = _levy.length - 1; z >= 0; z--) {
      input_cord_btm = _levy[z].querySelectorAll(".tyostot__tyosto_vaaka");
      for (var i = input_cord_btm.length - 1; i >= 0; i--) {
        if (parseFloat(input_cord_btm[i].style.bottom) > parseFloat(_levy[z].style.height)) {
          input_cord_btm[i].remove();
        }
      }
    }
    await sleep(1000);
    refresh__drawcontrols();
    $('#step_drawscreen').val('drawscreen_section_eight');
    await sleep(1000);
    // takeshotAllwalls();

     k_levys = copiedcanvases.querySelectorAll(".levy");
      for (var i = k_levys.length - 1; i >= 0; i--) {
        countdown__kiinnikkeet(k_levys[i]);
      }
  })();
  // refresh__drawcontrols();$('#step_drawscreen').val('drawscreen_section_five');levyta();
  // console.log("Levytetty");
  // refresh__drawcontrols();$('#step_drawscreen').val('drawscreen_section_tyostot');
  // document.querySelector("#kiinniketys__pkiinnike_three").click();
  // document.querySelector("#kiinniketys__vkiinnike_three").click();
  // console.log("Kiinnikelinja valinta I&II");
  // console.log("Työstetty");
  // refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_esikatselu');
  // refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_six'); 
  // console.log("Menee rankoihin");
  // refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_seven'); listoita();
  // console.log("Menee listoihin
  $('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();
}


function osittainen_siirto_muualle() {
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
  const sleep = ms => new Promise(resolve => setTimeout(resolve, ms));
  (async () => {
    for (var z = 0; z < rooms_vaaka.length; z++) {
      realcount = Math.floor(parseFloat(z) + 1);
      console.log("z+1: " + realcount);
      if(rooms_vaaka[z] == 'skip') {
        if(realcount == rooms_vaaka.length) {
          $('#step_drawscreen').val('drawscreen_section_eight');
          refresh__drawcontrols();
          break;
        }
        continue;
      }
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
      if (canvas.querySelector("div.tyostot__grandrow")) {
        canvas.querySelector("div.tyostot__grandrow").remove();
      }
      if (canvas.querySelector("div.listat__grandrow")) {
        canvas.querySelector("div.listat__grandrow").remove();
      }
      if (canvas.querySelector("div.newrow_vertical")) {
        canvas.querySelector("div.newrow_vertical").remove();
      }
      await sleep(1000);
      $("#project_start").hide();
      console.log("z: " + z);
      
      document.querySelector("div.house.drawarea__house > div:nth-child(2) > div:nth-child(" + realcount + ") > div.house__wall_status").click();
      // updatearea();
      // changesize();
      await sleep(1000);
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
      submitprogress('', 'adding', '', 'sau');
      await sleep(1000);
      $('#step_drawscreen').val('drawscreen_section_five');
      refresh__drawcontrols();
      updatearea();

      console.log("Levytetty");
      await sleep(1000);
      refresh__drawcontrols();
      $('#step_drawscreen').val('drawscreen_section_tyostot');

      open_ladonta_settings(true);
      await sleep(1000);
      console.log("Kiinnikelinja valinta I&II");
      open_ladonta_settings(false);
      reorganise__newtyosto();
      await sleep(1000);
      console.log("Työstetty");
      refresh__drawcontrols();
      updatearea();

      await sleep(1000);
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
    await sleep(1000);
    _levy = c_c.querySelectorAll(".levy");
    for (var z = _levy.length - 1; z >= 0; z--) {
      input_cord_btm = _levy[z].querySelectorAll(".tyostot__tyosto_vaaka");
      for (var i = input_cord_btm.length - 1; i >= 0; i--) {
        if (parseFloat(input_cord_btm[i].style.bottom) > parseFloat(_levy[z].style.height)) {
          input_cord_btm[i].remove();
        }
      }
    }
    await sleep(1000);
    
    $('#step_drawscreen').val('drawscreen_section_eight');
    refresh__drawcontrols();
    await sleep(1000);
    // takeshotAllwalls();


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


     k_levys = copiedcanvases.querySelectorAll(".levy");
      for (var i = k_levys.length - 1; i >= 0; i--) {
        countdown__kiinnikkeet(k_levys[i]);
      }
    
  })();

    $('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();

  // refresh__drawcontrols();$('#step_drawscreen').val('drawscreen_section_five');levyta();
  // console.log("Levytetty");
  // refresh__drawcontrols();$('#step_drawscreen').val('drawscreen_section_tyostot');
  // document.querySelector("#kiinniketys__pkiinnike_three").click();
  // document.querySelector("#kiinniketys__vkiinnike_three").click();
  // console.log("Kiinnikelinja valinta I&II");
  // console.log("Työstetty");
  // refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_esikatselu');
  // refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_six'); 
  // console.log("Menee rankoihin");
  // refresh__drawcontrols();updatearea();$('#step_drawscreen').val('drawscreen_section_seven'); listoita();
  // console.log("Menee listoihin
  // $('#step_drawscreen').val('drawscreen_section_eight');refresh__drawcontrols();
}