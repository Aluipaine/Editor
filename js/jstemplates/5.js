/**
 * Creates a levy element based on the provided parameters and appends it to the levy_array.
 * @param {number} h - The height of the levy.
 * @param {number} w - The width of the levy.
 * @param {number} dex - The dex value.
 * @param {number} col - The col value.
 * @param {number} b - The bpttom value.
 * @param {number} l - The left value.
 * @returns {HTMLElement} The created levy element.
 */


function luo__levy(h, w, dex, col, b, l) {
  dex += 1;
  title_index = h + "," + w + "," + b + "," + l;
  var levy__interval_horizontal = parseFloat(h) / 5 + 1;
  var levy__interval_vertical = parseFloat(w) / 5 + 1;
  var levy = document.createElement("div");
  var levy_h = document.createElement("div");
  var levy_w = document.createElement("div");
  var levy_name = document.createElement("div");
  levy_kp = document.createElement("div");
  levy_kp.classList.add("levy_kp");
  levy_kp.innerHTML = "KP";

  levy.classList.add("levy");
  levy_h.classList.add("levy_h");
  levy_w.classList.add("levy_w");
  levy_name.classList.add("levy_name");
  if (document.getElementById("settings__sauma_pysty").checked) {
    levy.classList.add("dir_y");
    levy_w.innerHTML = h
    levy_h.innerHTML = w;
  }
  else if (document.getElementById("settings__sauma_vaaka").checked) {
    levy.classList.add("dir_x");
    levy_w.innerHTML = h
    levy_h.innerHTML = w;
  }
  ind = String.fromCharCode(65 + col);
  real_pos_value = col+1;

  roomname = document.querySelector("#roomname_1").value.replaceAll(" ","");

  if (roomname == "") {
    roomname = "Seinän levy";
  }
  rname = current_room.toUpperCase().replace("SEINÄ ", "").replace("1. ", "").replace("2. ", "").replace("3. ", "").replace("4. ", "").replace("5. ", "").replace("6. ", "").replace(
    "KATTO ", "").replace("LATTIA ", "");
  r = ind+real_pos_value+" <i>" + h + "X" + w + "</i>"+"<br>"+current_apartment.toUpperCase()+" parveke Seinä " +rname+"<br>"+lift_spot+" "+current_floor+"krs";

  levy_name.innerHTML = r;
  levy.innerHTML = "<b> <div class='levy_name'> " + levy_name.innerHTML + "</div></b>";
  levy.setAttribute("title", title_index);
  levy.style.height = (parseFloat(levy__interval_vertical)) + 'px';
  // levy.style.width = (parseFloat(levy__interval_horizontal)) + 'px';
  levy.style.width = (parseFloat(levy__interval_horizontal)) + 'px';
  // levy_h.style.display = "none";
  // levy_w.style.display = "none";
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

  if(parseFloat(levy.style.width)*5 < 300) {
    levy.classList.add("levytext_inverted");
  }

  if(levy_bg != null) {
    levy.style.backgroundImage = "url('/uploads/"+levy_bg+"')";
    levy.dataset.sku = levy_sku;
    levy.dataset.thickness = levy_thickness;
    levy.dataset.structure = levy_structure;
    levy.dataset.orlista = orlista;
    levy.dataset.yrlista = yrlista;
  }
  // levy.appendChild(levy_name);
  var l_meta = document.createElement("input");
  l_meta.type = "hidden";
  l_meta.classList = "l_meta";
  levy.appendChild(l_meta);
  levy.appendChild(levy_kp);
  return levy;
  levy_array.append(levy);

}

/**
 * Function to perform levyta operation with the given priority.
 * @param {string} priority - The priority of the operation.
 * @returns None
 */
function levyta(priority) {
  console.log("LEVYTA CALLED");
  fixmissing__saumoitus();
  levy_c = -1;
  levy_array = [];
  if (canvas.querySelector(".levy") || canvas.querySelector(".levyt") || canvas.querySelector(".levysarake")) {
    levyt = canvas.querySelectorAll(".levy");
    for (var i = 0; i < levyt.length; i += 1) {
      levyt[i].remove();
    }
    let levyrow = canvas.querySelectorAll(".levyt");
    for (var i = 0; i < levyrow.length; i += 1) {
      levyrow[i].remove();
    }
    let levysarake = canvas.querySelectorAll(".levysarake");
    for (var i = 0; i < levysarake.length; i += 1) {
      levysarake[i].remove();
    }

  }
  if(canvas.querySelector(".sauma__horizontal_ctrldown > div")) {
    vaakamitat = canvas.querySelectorAll(".sauma__horizontal_ctrldown > div");
  }
  else {
    vaakamitat = canvas.querySelectorAll(".sauma__horizontal_ctrldown");
  }
  
  let pystymitat = canvas.querySelectorAll(".sauma__vertical_ctrldown");
  var levyt = document.createElement("div");
  levyt.classList.add("levyt")
  // var canvas = document.querySelector("#box-wrapper > main");
  myDivs_horizontal = [],
    myDivs_vertical = [],
    i = 0, 2
  j = 0;
  levycount = parseFloat(vaakamitat.length * pystymitat.length);
  if (document.getElementById("settings__sauma_pysty").checked) {
    if (drawarea.querySelector("#drawscreen_section_tyostot .visible")) {
      drawarea.querySelector("#drawscreen_section_tyostot .visible").classList.add("dir_y");
    }
  }
  else if (document.getElementById("settings__sauma_vaaka").checked) {
    if (drawarea.querySelector("#drawscreen_section_tyostot .visible")) {
      drawarea.querySelector("#drawscreen_section_tyostot .visible").classList.add("dir_x");
    }
  }

  if (input_step == 'drawscreen_section_four' || priority=='important' || input_step == 'drawscreen_section_eight') {
    var prev_b = 0;
    var preh_l = 0;
    for (var i = 0; i < vaakamitat.length; i++) {
      var levysarake = document.createElement("div");
      levysarake.classList.add("levysarake");
      levysarake.setAttribute("title", "s" + i);
      prev_b += parseFloat(vaakamitat[i].innerHTML);
      b = prev_b - parseFloat(vaakamitat[i].innerHTML) + saumaset_hm * [i] + 5;
      preh_l = 0;
      //LEFT
      for (var j = 0; j < pystymitat.length; j++) {
        h = parseFloat(pystymitat[j].innerHTML);
        w = parseFloat(vaakamitat[i].innerHTML);
        preh_l += parseFloat(pystymitat[j].innerHTML);
        l = preh_l - parseFloat(pystymitat[j].innerHTML) + saumaset_vm * [j] + 5;
        levyt.append(luo__levy(h, w, i, j, b, l))
        // levy_array.push(luo__levy(h,w,i,j,b,l))
      }
      // levyt.append(levysarake);
    }
    canvas.append(levyt);

    let levy = document.querySelectorAll(".levy");
    for (var i = 0; i < levy.length; i += 1) {
      raksita(levy[i]);
    }
    if (canvas.querySelector(".levy") || canvas.querySelector(".levyt") || canvas.querySelector(".levysarake")) {
      let levy = document.querySelectorAll(".levy");
      for (var i = 0; i < levy.length; i += 1) {
        // levy[i].style.background = "transparent";
        if(input_step == 'drawscreen_section_four') {
          levy[i].classList.add("levy_transparent");
        }
        
      }
      let closer = document.querySelectorAll(".closer");
      for (var i = 0; i < closer.length; i += 1) {
        closer[i].style.zIndex = 4;
        closer[i].style.opacity = 1;
      }

    }
  }
    aukkojenallapoisto();
    
    levyt = canvas.querySelectorAll(".levy");
    for (var i = 0; i < levyt.length; i += 1) {
      if(canvas.querySelector(".levyt").offsetTop > levyt[i].offsetTop) { 
        levyt[i].remove();
      }
    }

    for (var i = 0; i < levyt.length; i += 1) {
      if(canvas.querySelector(".levyt").offsetRight > levyt[i].offsetRight) { 
        levyt[i].remove();
      }
    }

    for (var i = 0; i < levyt.length; i += 1) {
      if(canvas.querySelector(".levyt").offsetWidth < levyt[i].offsetLeft) { 
        levyt[i].remove();
      }
    }
}

/**
 * Removes elements with class "aukko" based on specific conditions related to their attributes.
 * @returns None
 */
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

/**
 * Opens or closes the Ladonta settings by adding or removing a CSS class.
 * @param {boolean} e - A boolean value indicating whether to open (true) or close (false) the Ladonta settings.
 * @returns None
 */
function open_ladonta_settings(e) {
  if (e === true) {
    document.querySelector(".ladonta_container").classList.add("two");
  }
  else if (e === false) {
    document.querySelector(".ladonta_container").classList.remove("two");
  }
}

/**
 * Function to perform a series of operations on a given element 'levy'.
 * @param {Element} levy - The element on which the operations are performed.
 * @returns None
 */
function raksita(levy) {
  console.log("RAKSITA CALLED");
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
/**
 * Moves the element to the left and combines it with the previous element if they have the same height.
 * @param {HTMLElement} me - The element to move and potentially combine with the previous element.
 * @returns None
 */
function closer_left(me) {
  c = parseFloat(me.dataset.levy);
  me_width = parseFloat(me.style.width);

  zelector = c - 1;

  prev = canvas.querySelector('div[data-levy="'+zelector+'"]');
  prev_width = parseFloat(canvas.querySelector('div[data-levy="'+zelector+'"]').style.width);
  

  if(parseFloat(me.style.height) === parseFloat(prev.style.height)) {
    prev.style.width = parseFloat(me_width)+parseFloat(prev_width)+1+"px";
    hcord = (parseFloat(prev.style.height)*5)-5;
    wcord = (parseFloat(prev.style.width)*5)-5;
    prev.querySelector("i").innerHTML = hcord +"x"+wcord;
    prev.querySelector(".levy_h").innerHTML = hcord;
    prev.querySelector(".levy_w").innerHTML = wcord;
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
/**
 * Function to handle the closer_top action on a given element.
 * @param {Element} me - The element to perform the action on.
 * @returns None
 */
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
  prev.querySelector(".levy_h").innerHTML = hcord;
  prev.querySelector(".levy_w").innerHTML = wcord;
  // prev.setAttribute("title", hcord +","+ wcord+","+parseFloat(prev.style.bottom)*5+","+parseFloat(prev.style.left)*5);
  me.remove();


  if (document.getElementById("settings__sauma_pysty").checked) {
    v_i = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
    h_i = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
    prev.setAttribute("title", wcord +","+ hcord+","+parseFloat(prev.style.bottom)*5+","+parseFloat(prev.style.left)*5);

  }
  if (document.getElementById("settings__sauma_vaaka").checked) {
    v_i = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
    h_i = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
    prev.setAttribute("title", hcord +","+ wcord+","+parseFloat(prev.style.bottom)*5+","+parseFloat(prev.style.left)*5);

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

/**
 * Creates and returns a DOM element representing a levy with the given parameters.
 * @param {string} mod_nam - The name of the levy.
 * @param {string} mod_type - The type of the levy (pysty or vaaka).
 * @param {number} mod_b - The bottom position of the levy.
 * @param {number} mod_left - The left position of the levy.
 * @param {number} mod_height - The height of the levy.
 * @param {number} mod_width - The width of the levy.
 * @param {string} mod_title - The title of the levy.
 * @param {number} mod_count - The count of the levy.
 * @returns {
 */
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
  // levy_h.style.display = "none";
  // levy_w.style.display = "none";
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

  remove_levy_under_aukkos();
}

/**
 * Creates options for each levy item and appends them to the draw area controls.
 * @returns None
 */
function create__ladontaoptions() {
  da_5 = document.querySelector(".drawarea__controls_fiveitems");
  da_5.innerHTML = "";
  levys = canvas.querySelectorAll(".levy");
  for (var i = 0; i < levys.length; i++) {
    
    
    levy__options = document.createElement("div");
    levy__options.innerHTML = levys[i].innerText;
    levy__options_settings = document.createElement("i");
    pressed__levy = levys[i].dataset.levy;
    levy__options_settings.setAttribute("onclick",
      "find__that_levy("+pressed__levy+");"
    );
    levy__options_settings.innerHTML =
      "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";

    levy__options_settings.classList.add("newDiv__comment_settings");
    levy__options.appendChild(levy__options_settings);
    da_5.prepend(levy__options);

  }

}
/**
 * Finds and interacts with a specific element with the given 'number' in the dataset.
 * @param {number} number - The number to search for in the dataset.
 * @returns None
 */
function find__that_levy(number) {
  levys = canvas.querySelectorAll(".levy");
  for (var i = 0; i < levys.length; i++) {
    if(levys[i].dataset.levy == number) {
        console.log("OK");
        levys[i].querySelector("b").click();
        break;
    }
  }
}


/**
 * Function to remove overlapping elements on a canvas by adjusting their positions and sizes.
 * @returns None
 */


// 11 MÄÄRITTÄÄ AUKKOJEN ALAISEN LEVYTTÄMÄTTÖMÄN ALUEEN, V/H
/**
 * This function is used to remove overlapping elements on a canvas by adjusting their positions and sizes.
 * It iterates through the elements with class "aukko" and "levy" to check for overlapping conditions and performs necessary adjustments.
 * @returns None
 */
function aukkojenallapoisto() {
  aukko = canvas.querySelectorAll(".aukko");

  aukko.forEach(a => {
      acord = a.getAttribute("title");
      a_l = parseFloat(a.querySelector(".aukko_lcord").innerHTML);
      a_r = parseFloat(a.querySelector(".aukko_rcord").innerHTML);
      a_b = parseFloat(a.querySelector(".aukko_bcord").innerHTML);
      a_t = parseFloat(a.querySelector(".aukko_tcord").innerHTML);

      levy = canvas.querySelectorAll(".levy");

      levy.forEach(l => {
          lcord = l.getAttribute("title");
          l_l = parseFloat(lcord.split(",")[3]);
          l_r = parseFloat(lcord.split(",")[3]) + parseFloat(lcord.split(",")[0]);
          l_b = parseFloat(lcord.split(",")[2]);
          l_t = parseFloat(lcord.split(",")[1]) + parseFloat(lcord.split(",")[2]);

          // SPLT IF MATCHES INSIDE Y     
          if (a_l <= l_l && a_r >= l_r && a_b >= l_b && a_t <= l_t) {
            console.log("SPLT IF MATCHES INSIDE Y");
            console.log(a);
            console.log(l);
              low_top = a_b - l_b;
              up_top = l_t - a_t;
              levyt = canvas.querySelector(".levyt");

              w = l_r - l_l;
              dex = "Yhdistettylevy";
              col_ += 1;
              levyt.append(luo__levy(w, low_top, dex, col_, l_b, l_l));
              levyt.append(luo__levy(w, up_top, dex, col_, a_t, l_l));

              l.remove();

          }

          // SPLT IF MATCHES INSIDE X
          if (a_l >= l_l && a_r <= l_r && a_b <= l_b && a_t >= l_t) {
            console.log("SPLT IF MATCHES INSIDE X");
            console.log(a);
            console.log(l);
              l_left = a_l - l_l;
              r_left = l_r - a_r;
              levyt = canvas.querySelector(".levyt");
              h = l_t - l_b;
              dex = "Yhdistettylevy";
              col_ += 1;
              levyt.append(luo__levy(l_left, h, dex, col_, l_b, l_l));
              levyt.append(luo__levy(r_left, h, dex, col_, l_b, a_r));

              l.remove();
          }

          // DEL IF MATCHES COMPLETELY
          if (a_l == l_l && a_r == l_r && a_b == l_b && a_t == l_t) {
            console.log(" DEL IF MATCHES COMPLETELY");
            console.log(a);
            console.log(l);
              l.remove();
          }


          // DEL IF INSIDE
          if (a_l <= l_l && a_r >= l_r && a_b <= l_b && a_t >= l_t) {
            console.log("DEL IF INSIDE");
            console.log(a);
            console.log(l);
              l.remove();
          }




          // REDUCE FROM LEFT OLD
          // if(a_l >= l_l && l_b <= a_t-10) {
          //   if(a_r <= l_r) {
          //     //console.log("LL: " + l_l + ", LR: " + l_r + ", LB: "+ l_b + ", LT: "+ l_t);
          //     //console.log("AL: " + a_l + ", AR: " + a_r + ", AB: "+ a_b + ", AT: "+ a_t);
          //     erotus = parseFloat(l_r)-parseFloat(l_l);
          //     inversed_erotus = parseFloat(a_r)-parseFloat(l_l);

          //     l.style.width = parseFloat(l.style.width) - inversed_erotus/5 + "px";
          //     l.style.left = parseFloat(l.style.left) + inversed_erotus/5 +"px";
          //   }
          // }

          // DEL FROM LEFT
          if (a_t >= l_t && a_l <= l_l && a_r <= l_r && a_b <= l_t && a_r >= l_l && a_b <= l_b + 15 || a_t >= l_t && a_l <= l_l + 15 && a_r <= l_r && a_b <= l_t && a_r >= l_l && a_b <= l_b + 15) {
            console.log("DEL FROM LEFT");
            console.log(a);
            console.log(l);  
            erotus = parseFloat(l_r) - parseFloat(a_r);
              // inversed_erotus = parseFloat(a_r)-parseFloat(l_l);


              l.style.width = erotus / 5 + "px";
              l.style.left = parseFloat(a_l / 5) + parseFloat((a_r - a_l) / 5) + "px";
          }

          // DEL FROM UP
          if (a_t >= l_t && a_l <= l_l && a_r >= l_r && a_b <= l_t || a_t >= l_t + 15 && a_l <= l_l && a_r >= l_r && a_b <= l_t) {
            console.log(" DEL FROM UP");
            console.log(a);
            console.log(l);  
            erotus = parseFloat(l_t) - parseFloat(a_b);
              l.style.height = parseFloat(l.style.height) - erotus / 5 + "px";
          }

          // DEL FROM BOTTOM
          // if (a_t <= l_t && a_l <= l_l + 5 && a_r >= l_r + 5 && a_t <= l_t && a_t >= l_b || a_t <= l_t && a_l <= l_l && a_r >= l_r && a_t <= l_t && a_t >= l_b || a_t <= l_t + 15 && a_l <= l_l && a_r >= l_r && a_t <= l_t && a_t >= l_b || a_t <= l_t && a_l <= l_l + 20 && a_r >= l_r + 20 && a_t <= l_t && a_t >= l_b) {
          //   console.log("DEL FROM BOTTOM");
          //   console.log(a);
          //   console.log(l);  
          //   erotus = parseFloat(l_t) - parseFloat(a_t);
          //   l.style.height = erotus / 5 + "px";
          //   l.style.bottom = parseFloat(a_b / 5) + parseFloat((a_t - a_b) / 5) + "px";
          // }


          // DEL HUKKA RIGHT
          if (a_b <= l_b + 15 && a_l >= l_l && a_r >= l_r && a_t >= l_t && a_l <= l_r || a_b <= l_b + 15 && a_l >= l_l && a_r >= l_r && a_t >= l_t && a_l <= l_r + 15) {
            erotus = parseFloat(l_r) - parseFloat(a_l);
            // inversed_erotus = parseFloat(a_r)-parseFloat(l_l);
            l.style.width = parseFloat(l.style.width) - erotus / 5 + "px";
          }


          // DEL SMOL
          if (parseFloat(l.style.height) < 2 || parseFloat(l.style.width) < 2) {
              l.remove();
          }


          // DEL IF INSIDE
          
          if (a_l <= l_l && a_r >= l_r && a_b <= l_b && a_t >= l_t) {
            console.log("DEL IF INSIDE");
            l.remove();
          }


          coolcord_w = parseFloat(l.style.width) * 5;
          coolcord_h = parseFloat(l.style.height) * 5;
          coolcord_b = parseFloat(l.style.bottom) * 5;
          coolcord_l = parseFloat(l.style.left) * 5;

          l.setAttribute("title", (parseFloat(coolcord_w) - 5) + "," + (parseFloat(coolcord_h) - 5) + "," + coolcord_b + "," + coolcord_l);
          l.querySelector("i").innerHTML = (parseFloat(coolcord_w) - 5) + "x" + (parseFloat(coolcord_h) - 5);


        });
    });
 

  setTimeout(() => {   
    split__half_panels();
    reorder_levy_names();
  }, 500);
}

function split__half_panels() {

  let levygrid = canvas.querySelector(".levyt");

  aukko.forEach(a => {
    a_l = parseFloat(a.querySelector(".aukko_lcord").innerHTML);
    a_r = parseFloat(a.querySelector(".aukko_rcord").innerHTML);
    a_b = parseFloat(a.querySelector(".aukko_bcord").innerHTML);
    a_t = parseFloat(a.querySelector(".aukko_tcord").innerHTML);
    levys = canvas.querySelectorAll(".levy");


    /*levys.forEach(l => {
      lcord = l.getAttribute("title");
      l_l = parseFloat(lcord.split(",")[3]);
      l_r = parseFloat(lcord.split(",")[3]) + parseFloat(lcord.split(",")[0]);
      l_b = parseFloat(lcord.split(",")[2]);
      l_t = parseFloat(lcord.split(",")[1]) + parseFloat(lcord.split(",")[2]);

      // 3PCS WHEN AUKKKO RIGHT SIDE HITS LEVY ON MIDDLE AND BOTTOM SIDE OF LEVY IS 0    
      if (a_b >= l_b && a_r >= l_l && a_l <= l_l && l_b == saumaset_hm/2 && (a_b+(saumaset_hm/2)) >= l_b && a_t <= l_t && l_r >= a_r) {
        console.log("AUKKKO RIGHT SIDE HITS LEVY ON MIDDLE AND BOTTOM SIDE OF LEVY IS 0");
        console.log(l);
        console.log(a);

        levy_division_point_y1 = a_b; // Aukko bottom side
        levy_division_point_y2 = a_t; // Aukko top side
        levy_division_point_x = a_r; // Right side

        a_levy_height = levy_division_point_y1;
        b_levy_height = levy_division_point_y2-levy_division_point_y1;
        c_levy_height = height-levy_division_point_y2;

        a_levy_width = l_r-l_l;
        b_levy_width = l_r-a_r;
        c_levy_width = l_r-l_l;

        dex = "___";
        col_ += 1;
        
        a_levy_bottom = l_b;
        b_levy_bottom = levy_division_point_y1;
        c_levy_bottom = levy_division_point_y2;

        a_levy_left = l_l;
        b_levy_left = (a_r-l_l)+l_l;
        c_levy_left = l_l;
        
        levygrid = canvas.querySelector(".levyt");
        levygrid.append(luo__levy(a_levy_width,a_levy_height, "OIK", col_, a_levy_bottom, a_levy_left));
        levygrid.append(luo__levy(b_levy_width,b_levy_height, "OIKKESK", col_, b_levy_bottom, b_levy_left));
        levygrid.append(luo__levy(c_levy_width,c_levy_height, "OIKYLÄ", col_, c_levy_bottom, c_levy_left));

        l.remove();
        return;
        

      }

      // 3PCS WHEN AUKKKO LEFT SIDE HITS LEVY ON MIDDLE AND BOTTOM SIDE OF LEVY IS 0    
      if (a_b >= l_b && a_l <= l_r && a_l <= l_r && l_b == saumaset_hm/2 && a_b >= l_b && a_t <= l_t && l_r <= a_r) {
        console.log("AUKKKO LEFT SIDE HITS LEVY ON MIDDLE AND BOTTOM SIDE OF LEVY IS 0 ");
        console.log(l);
        console.log(a);
        
        levy_division_point_y1 = a_b; // Aukko bottom side
        levy_division_point_y2 = a_t; // Aukko top side
        levy_division_point_x = a_l; // Left side

        a_levy_height = levy_division_point_y1;
        b_levy_height = levy_division_point_y2-levy_division_point_y1;
        c_levy_height = height-levy_division_point_y2;

        a_levy_width = l_r-l_l;
        b_levy_width = a_l-l_l;
        c_levy_width = l_r-l_l;

        dex = "___";
        col_ += 1;
        
        a_levy_bottom = l_b;
        b_levy_bottom = levy_division_point_y1;
        c_levy_bottom = levy_division_point_y2;

        a_levy_left = l_l;
        b_levy_left = l_l;
        c_levy_left = l_l;
        
        levygrid = canvas.querySelector(".levyt");
        levygrid.append(luo__levy(a_levy_width,a_levy_height, "VAS", col_, a_levy_bottom, a_levy_left));
        levygrid.append(luo__levy(b_levy_width,b_levy_height, "VASKESK", col_, b_levy_bottom, b_levy_left));
        levygrid.append(luo__levy(c_levy_width,c_levy_height, "VASYLÄ", col_, c_levy_bottom, c_levy_left));

        l.remove();
        

      }

      // 2PCS SPLT IF LEVY IS INSIDE AUKKKO LEFT SIDE AND BOTTOM SIDE OF AUKKO IS 0    
      if (a_b <= saumaset_hm && a_b == l_b+(saumaset_hm/2) && a_t <= l_t && l_r <= a_r 
      || a_b == 0 && a_b+(saumaset_hm/2) == l_b && a_t <= l_t && a_t >= l_b && a_l >= l_l && a_l <= l_r) {
        console.log("SPLT IF LEVY IS INSIDE AUKKKO LEFT SIDE AND BOTTOM SIDE OF AUKKO IS 0 ");
        console.log(l);
        console.log(a);
          levy_division_point_y = h - (h-a_t);
          levy_division_point_x = a_l; // Right side

          a_levy_height = levy_division_point_y;
          b_levy_height = height-a_t;

          a_levy_width = a_l-l_l;
          b_levy_width = l_r-l_l;

          

          dex = "___";
          col_ += 1;
          
          a_levy_bottom = l_b;
          b_levy_bottom = levy_division_point_y;

          a_levy_left = l_l;
          b_levy_left = l_l;
          
          levygrid = canvas.querySelector(".levyt");
          levygrid.append(luo__levy(a_levy_width,a_levy_height, "VAS", col_, l_b, a_levy_left));
          levygrid.append(luo__levy(b_levy_width,b_levy_height, "YLVAS", col_, a_t, b_levy_left));

          l.remove();
          return;
          

      }

      // 2PCS SPLT IF LEVY IS INSIDE AUKKKO RIGHT SIDE AND BOTTOM SIDE OF AUKKO IS 0    
      if (a_b <= saumaset_hm && a_b == l_b+(saumaset_hm/2) && a_t <= l_t+50 && l_l <= a_r+50 && l_l <= a_l
      || a_b == 0 && a_b+(saumaset_hm/2) == l_b && a_t <= l_t && l_l <= a_r && l_r >= a_r) {
        console.log("SPLT IF LEVY IS INSIDE AUKKKO RIGHT SIDE AND BOTTOM SIDE OF AUKKO IS 0   ");
        console.log(l);
        console.log(a);
        levy_division_point_y = h - (h-a_t);
        levy_division_point_x = a_r; // right side

        a_levy_height = levy_division_point_y;
        b_levy_height = height-a_t;

        a_levy_width = l_r-a_r;
        b_levy_width = l_r-l_l;


        dex = "___";
        col_ += 1;
        
        a_levy_bottom = l_b;
        b_levy_bottom = levy_division_point_y;

        a_levy_left = a_r;
        b_levy_left = l_l;
        
        levygrid = canvas.querySelector(".levyt");
        levygrid.append(luo__levy(a_levy_width,a_levy_height, "OIK", col_, l_b, a_levy_left));
        levygrid.append(luo__levy(b_levy_width,b_levy_height, "YLOIK", col_, a_t, b_levy_left));

        l.remove();
        

    }
    });*/

    levys.forEach(l => {
      lcord = l.getAttribute("title");
      l_l = parseFloat(lcord.split(",")[3]);
      l_r = parseFloat(lcord.split(",")[3]) + parseFloat(lcord.split(",")[0]);
      l_b = parseFloat(lcord.split(",")[2]);
      l_t = parseFloat(lcord.split(",")[1]) + parseFloat(lcord.split(",")[2]);

      let l_is_inside = a_l + saumaset_hm / 2 > l_l && a_l + saumaset_hm / 2 < l_r,
          l_is_equal = a_l + saumaset_hm / 2 === l_l,
          l_is_lower = a_l + saumaset_hm / 2 < l_l,
          t_is_inside = a_t - saumaset_vm / 2 < l_t && a_t - saumaset_vm / 2 > l_b,
          t_is_equal = a_t - saumaset_vm / 2 === l_t,
          t_is_higher = a_t - saumaset_vm / 2 > l_t,
          r_is_inside = a_r - saumaset_hm / 2 > l_l && a_r - saumaset_hm / 2 < l_r,
          r_is_equal = a_r - saumaset_hm / 2 === l_r,
          r_is_grater = a_r - saumaset_hm / 2 > l_r,
          b_is_inside = a_b + saumaset_vm / 2 > l_b && a_b < l_t || a_b <= 0 && l_b === saumaset_vm / 2,
          b_is_equal = a_b + saumaset_vm / 2 === l_b,
          b_is_lower = a_b + saumaset_vm / 2 < l_b;

      let levy_t_height = l_t - a_t,
          levy_t_width = l_r - l_l,
          levy_t_bottom = a_t,
          levy_t_left = l_l,

          levy_l_height = Math.min(a_t - a_b, l_t - l_b, a_t - l_b),
          levy_l_width = a_l - l_l,
          levy_l_bottom = Math.max(a_b, l_b),
          levy_l_left = l_l,

          levy_r_height = Math.min(a_t - a_b, l_t - l_b, a_t - l_b),
          levy_r_width = l_r - a_r,
          levy_r_bottom = Math.max(a_b, l_b),
          levy_r_left = a_r,

          levy_b_height = a_b - l_b,
          levy_b_width = l_r - l_l,
          levy_b_bottom = l_b,
          levy_b_left = l_l;

      let to_add = {
        top: false,
        left: false,
        bottom: false,
        right: false
      }
      if (l_is_inside && t_is_inside) {
        to_add.top = true;
        to_add.left = true;
      }
      if (l_is_inside && b_is_inside) {
        to_add.bottom = true;
        to_add.left = true;
      }
      if (r_is_inside && t_is_inside) {
        to_add.top = true;
        to_add.right = true;
      }
      if (r_is_inside && b_is_inside) {
        to_add.bottom = true;
        to_add.right = true;
      }
      if (t_is_higher && b_is_lower && l_is_inside) {
        to_add.left = true;
      }
      if (t_is_higher && b_is_lower && r_is_inside) {
        to_add.right = true;
      }
      if (l_is_lower && r_is_grater && t_is_inside) {
        to_add.top = true;
      }
      if (l_is_lower && r_is_grater && b_is_inside) {
        to_add.bottom = true;
      }
      if (l_is_equal && r_is_equal && (t_is_inside || b_is_inside)) {
        to_add.top = true;
        to_add.bottom = true;
      }

      if (to_add.top && levy_t_height > 0 || to_add.bottom && levy_b_height > 0
          || to_add.right && levy_r_width > 0 || to_add.left && levy_l_width > 0) {
        dex = "___";
        col_ += 1;
        l.remove();
      }
      if (to_add.top && levy_t_height > 0) {
        levygrid.append(luo__levy(levy_t_width, levy_t_height, "OIK", col_, levy_t_bottom, levy_t_left));
      }
      if (to_add.bottom && levy_b_height > 0) {
        levygrid.append(luo__levy(levy_b_width, levy_b_height, "OIKYLÄ", col_, levy_b_bottom, levy_b_left));
      }
      if (to_add.right && levy_r_width > 0) {
        levygrid.append(luo__levy(levy_r_width, levy_r_height, "OIKKESK", col_, levy_r_bottom, levy_r_left));
      }
      if (to_add.left && levy_l_width > 0) {
        levygrid.append(luo__levy(levy_l_width, levy_l_height, "OIKKESK", col_, levy_l_bottom, levy_l_left));
      }
    });
  });

  // DELETE IF LEVY (PANEL) IS UNDER TWO AUKKO ELEMENTS
  /*for (let a = 0; a < aukko.length; a++) {
    if(a < aukko.length-1) {
      a_l1 = parseFloat(aukko[a].querySelector(".aukko_lcord").innerHTML);
      a_l2 = parseFloat(aukko[a+1].querySelector(".aukko_lcord").innerHTML);
      a_r1 = parseFloat(aukko[a].querySelector(".aukko_rcord").innerHTML);
      a_r2 = parseFloat(aukko[a+1].querySelector(".aukko_rcord").innerHTML);
      a_b1 = parseFloat(aukko[a].querySelector(".aukko_bcord").innerHTML);
      a_b2 = parseFloat(aukko[a+1].querySelector(".aukko_bcord").innerHTML);
      a_t1 = parseFloat(aukko[a].querySelector(".aukko_tcord").innerHTML);
      a_t2 = parseFloat(aukko[a+1].querySelector(".aukko_tcord").innerHTML);

      levys = canvas.querySelectorAll(".levy");
      levys.forEach(l => {
        lcord = l.getAttribute("title");
        l_l = parseFloat(lcord.split(",")[3]);
        l_r = parseFloat(lcord.split(",")[3]) + parseFloat(lcord.split(",")[0]);
        l_b = parseFloat(lcord.split(",")[2]);
        l_t = parseFloat(lcord.split(",")[1]) + parseFloat(lcord.split(",")[2]);

        // UP CORD MATCHES
        if(a_t1 - a_t2 >= -50 && a_t1 - a_t2 <= 0 || a_t2 - a_t1 >= -50  && a_t2 - a_t1 <= 0) {
          console.log("UP CORD MATCHES");
          if(a_r1 - a_l2 >= -50 && a_l1 - a_r2 <= 0 || a_r2 - a_l1 >= -50  && a_r2 - a_l1 <= 0) {
            console.log("Detected aukko closure");
            // DEFINE THE MOST BOTTOM CORD
            if(a_b1 <= a_b2) {
              a_bottom_cord = a_b2;
            }
            else {
              a_bottom_cord = a_b1;
            }

            // DEFINE THE MOST TOP CORD
            if(a_t1 <= a_t2) {
              a_top_cord = a_t1;
            }
            else {
              a_top_cord = a_t2;
            }

            // DEFINE THE MOST LEFT CORD
            if(a_l1 <= a_l2) {
              a_left_cord = a_l1;
            }
            else {
              a_left_cord = a_l2;
            }

            // DEFINE THE MOST RIGHT CORD
            if(a_r1 >= a_r2) {
              a_right_cord = a_r1;
            }
            else {
              a_right_cord = a_r2;
            }

            // DEL IF MATCHES Inside
            if (a_left_cord <= l_l && a_right_cord >= l_r && a_bottom_cord <= l_b && a_top_cord >= l_t) {
              console.log("DELETE IF LEVY (PANEL) IS UNDER TWO AUKKO ELEMENTS");
              console.log(l);
                l.remove();
            }
          }
        }
        
      });
    }
  }*/

  for (let index_1 = 0; index_1 < aukko.length; index_1++) {
    let a_l1 = parseFloat(aukko[index_1].querySelector(".aukko_lcord").innerHTML),
        a_r1 = parseFloat(aukko[index_1].querySelector(".aukko_rcord").innerHTML),
        a_b1 = parseFloat(aukko[index_1].querySelector(".aukko_bcord").innerHTML),
        a_t1 = parseFloat(aukko[index_1].querySelector(".aukko_tcord").innerHTML);
    for (let index_2 = index_1 + 1; index_2 < aukko.length; index_2++) {
      let a_l2 = parseFloat(aukko[index_2].querySelector(".aukko_lcord").innerHTML),
          a_r2 = parseFloat(aukko[index_2].querySelector(".aukko_rcord").innerHTML),
          a_b2 = parseFloat(aukko[index_2].querySelector(".aukko_bcord").innerHTML),
          a_t2 = parseFloat(aukko[index_2].querySelector(".aukko_tcord").innerHTML);
      canvas.querySelectorAll(".levy").forEach(l => {
        let lcord = l.getAttribute("title").split`,`,
            l_l = parseFloat(lcord[3]),
            l_r = parseFloat(lcord[3]) + parseFloat(lcord[0]),
            l_b = parseFloat(lcord[2]),
            l_t = parseFloat(lcord[1]) + parseFloat(lcord[2]),
            l_w = l_r - l_l;
        if (l_w <= 50) {
          if (Math.abs(a_l2 - a_r1) <= 50 || Math.abs(a_r2 - a_l1) <= 50) {
            l.remove();
            if (l_t > a_t1) {
              dex = "___";
              col_ += 1;
              let l_h = l_t - a_t1;
              levygrid.append(luo__levy(l_w, l_h, "OIKKESK", col_, a_t1, l_l));
            }
          }
        }
      })
    }
  }
  remove_levy_under_aukkos();
}

function reorder_levy_names() {
  let levyts = [];
  if (document.querySelector("#copiedcanvases").style.display !== "none") {
    levyts = [...document.querySelectorAll(".preview_canvas .levyt")];
  }
  else {
    levyts = [canvas.querySelector(".levyt")];
  }
  for (let levyt of levyts) {
    if (!levyt.querySelector(".external_meta_area")) {
      let levys = [...levyt.querySelectorAll(".levy")];

      //Sort levys from left to right and from bottom to top
      levys = levys.sort((l1, l2) => {
        let lcord = l1.title.split`,`,
            l1_l = parseFloat(lcord[3]),
            l1_r = parseFloat(lcord[3]) + parseFloat(lcord[0]),
            l1_b = parseFloat(lcord[2]);

        lcord = l2.title.split`,`;
        let l2_l = parseFloat(lcord[3]),
            l2_r = parseFloat(lcord[3]) + parseFloat(lcord[0]),
            l2_b = parseFloat(lcord[2]);
        if (l1_l < l2_l) {
          return -1;
        }
        if (l1_l === l2_l && l1_r <= l2_r && l1_b < l2_b) {
          return -1
        }
        if (l1_r === l2_r && l1_l >= l2_l && l1_b < l2_b) {
          return 1
        }
      })

      let chunked_levys = [],
          chunk = [];
      for (let levy of levys) {
        let lcord = levy.title.split`,`,
            l1_l = parseFloat(lcord[3]),
            l1_r = parseFloat(lcord[3]) + parseFloat(lcord[0]);
        if (chunk.at(-1)) {
          lcord = chunk.at(-1).title.split`,`;
          let l2_l = parseFloat(lcord[3]),
              l2_r = parseFloat(lcord[3]) + parseFloat(lcord[0]);
          if (l1_l === l2_l) {
            chunk.push(levy)
          }
          else {
            chunked_levys.push(chunk);
            chunk = [levy]
          }
        }
        else {
          chunk = [levy]
        }
      }
      if (chunk.length) {
        chunked_levys.push(chunk);
      }
      let char = 65;
      for (let chunk of chunked_levys) {
        for (let index = 0; index < chunk.length; index++) {
          let levy = chunk[index];
          let levy_name = levy.querySelector(".levy_name").innerHTML.split` `;
          levy_name[1] = String.fromCharCode(char) + (index + 1);
          levy.querySelector(".levy_name").innerHTML = levy_name.join` `
        }
        char++;
      }
      put_levy_meta_in_external_area(levyt, levys);
    }
  }
}

function put_levy_meta_in_external_area(levyt, levys) {
  let metas = new Set();
  for (let levy of levys) {
    let meta = levy.querySelector(".levy_name").innerHTML;
    let info = meta.split`<br>`.slice(-2);
    metas.add(info.join(" "));
    levy.querySelector(".levy_name").innerHTML = meta.split`<br>`.slice(0, -2);
  }

  let external_area = document.createElement("div");
  external_area.innerText = [...metas].join("<br>");
  external_area.classList.add("external_meta_area");
  levyt.prepend(external_area);
}

function remove_levy_under_aukkos() {
  let all_levys = canvas.querySelectorAll(".levy"),
      all_aukkos = canvas.querySelectorAll(".aukko");
  for (let levy of all_levys) {
    let levy_coords = levy.getBoundingClientRect();
    for (let aukko of all_aukkos) {
      let aukko_coords = aukko.getBoundingClientRect();
      if (levy_coords.left + 10 >= aukko_coords.left && levy_coords.right - 10 <= aukko_coords.right
          && levy_coords.top + 10 >= aukko_coords.top && levy_coords.bottom - 10 <= aukko_coords.bottom
      ) {
        levy.remove();
      }
    }
  }
}