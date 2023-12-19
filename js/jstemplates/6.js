let ltcontainer = document.querySelector("#levytyosto_container");
let levy = document.querySelectorAll(".levy");

// Function to start the work on green lines based on the provided specification
function aloita_tyosto_kiinnikkeet(specification_launch) {
   // Select all elements with class "levy"
  let levyt = document.querySelectorAll(".levy");

  // Initialize event variable
  evt = 0;

  s_ar = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
  s_yr = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
  s_vr = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
  s_or = parseFloat(document.querySelector("#settings__levy_or_arvo").value);
  // Code commented out for clarity (possible part of future development)

  // Checkboxes for green lines
  if (document.querySelector("#kiinniketys__pkiinnike_one").checked === true) {
    evt = 1;
    levyt.forEach(element => tyosta(element, evt));
  }
  if (document.querySelector("#kiinniketys__pkiinnike_two").checked === true) {
    evt = 2;
    levyt.forEach(element => tyosta(element, evt));
  }
  if (document.querySelector("#kiinniketys__pkiinnike_three").checked === true) {
    evt = 3;
    levyt.forEach(element => tyosta(element, evt));
  }
  if (document.querySelector("#kiinniketys__pkiinnike_four").checked === true) {
    evt = 4;
    levyt.forEach(element => tyosta(element, evt));
  }
  pysty_event = evt;
  if (document.querySelector("#kiinniketys__vkiinnike_one").checked === true) {
    evt = 5;
    levyt.forEach(element => tyosta(element, evt));
  }
  if (document.querySelector("#kiinniketys__vkiinnike_two").checked === true) {
    evt = 6;
    levyt.forEach(element => tyosta(element, evt));
  }
  if (document.querySelector("#kiinniketys__vkiinnike_three").checked === true) {
    evt = 7;
    levyt.forEach(element => tyosta(element, evt));
  }
  if (document.querySelector("#kiinniketys__vkiinnike_four").checked === true) {
    evt = 8;
    levyt.forEach(element => tyosta(element, evt));
  }
  vaaka_event = evt;

  if(document.querySelector(".db_saumatable")) {
    document.querySelector(".db_saumatable").remove();
  }
  else {
      
  }
  db_saumatable = document.createElement("div");
  db_saumatable.classList = "db_saumatable";
  s_pset = "S=<b class='saumaset_vm'>" +document.querySelector(".saumapysty__tbody td:nth-child(2) > input").value + "</b>";
  s_vset = "S=<b class='saumaset_hm'>" +document.querySelector(".saumavaaka__tbody td:nth-child(2) > input").value + "</b>";
  db_saumatable.innerHTML = `
      <div class="vertical_module">${s_pset}</div>
      <div class="horizontal_module">${s_vset}</div>
      <div class="valiranka_module">V=<b class="valirankaset">Väliranka</b></div>
      <div class="reika_module">R=<b class="reikaset">Reikä</b></div>  
  `;
  document.querySelector(".drawarea__bottom").appendChild(db_saumatable);

}

// Function to perform work on a given "levy" element based on the specified event "evt"
function tyosta(levy, evt) {
  // Initialize variables
  levy_c_x = 0;
  levy_c_y = 0;
  console.log("tyosta(levy, evt) ");
  var left_cord = 0,
    bottom_cord = 0;
    // Create or select elements for vertical and horizontal work on the "levy"
  if (levy.querySelector(".levy_tyostot_y")) {
    var levy_tyostot_y = levy.querySelector(".levy_tyostot_y");
  }
  else {
    var levy_tyostot_y = document.createElement("div");
    levy_tyostot_y.classList.add("levy_tyostot_y");
    levy.append(levy_tyostot_y);
  }
  if (levy.querySelector(".levy_tyostot_x")) {
    var levy_tyostot_x = levy.querySelector(".levy_tyostot_x");
  }
  else {
    var levy_tyostot_x = document.createElement("div");
    levy_tyostot_x.classList.add("levy_tyostot_x");
    levy.append(levy_tyostot_x);
  }

  // Select various elements and values needed for calculations
  k_one = document.querySelector("#kiinniketys__kiinnike_one");
  k_two = document.querySelector("#kiinniketys__kiinnike_two");
  k_three = document.querySelector("#kiinniketys__kiinnike_three");
  k_four = document.querySelector("#kiinniketys__kiinnike_four");
  k_five = document.querySelector("#kiinniketys__kiinnike_five");
  k_six = document.querySelector("#kiinniketys__kiinnike_six");
  levy_meta = (levy.title).split(",")
  l_d = 8;
  k_main_levy = levy.title;
  k_min_h = parseFloat(document.querySelector("#p_two").value);
  k_min_w = parseFloat(document.querySelector("#v_two").value);
  k_main_levy_ = k_main_levy.split(",");

  //PYSTYKIINNIKKEET
  if (evt === 1 || evt === 2 || evt === 3 || evt === 4) {
    // Remove existing vertical work elements
    let tyosto_levy = levy.querySelectorAll(".tyostot__tyosto_pysty");
    for (var i = tyosto_levy.length - 1; i >= 0; i--) {
      tyosto_levy[i].remove()
    }

    // Get height of the "levy" and relevant values
    height_levy = parseFloat(levy.title.split(",")[0]);
    l_i = document.querySelector("#p_target").value;
    p_left = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
    p_right = parseFloat(document.querySelector("#settings__levy_or_arvo").value);
    p_h_ = (height_levy - (p_left + p_right));
    p_kaava1 = p_h_ / l_i;

    // Handle cases where the height is less than the minimum required
    if (p_h_ < k_min_h) {
      p_h = -1;
      p_kaava1 = 0;
      p_c_kaava1 = Math.ceil(p_kaava1);
      p_t_kaava1 = 1 + Math.trunc(p_kaava1);
    }
    else {
      p_h = p_h_;
      p_c_kaava1 = Math.ceil(p_kaava1);
      p_t_kaava1 = 1 + Math.trunc(p_kaava1);
    }

    // Create vertical green lines based on the event and minimum height conditions
    if (evt === 1 && k_min_h < parseFloat(k_main_levy_[0]) || evt === 2 && k_min_h < parseFloat(k_main_levy_[0])) {
      for (var j = 1; j < p_c_kaava1; j++) {
        if (evt === 1) {
          var x = document.createElement("div");
          var x_cord = document.createElement("input");
          x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
          x_cord.classList.add("x_cord_mki");
          x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
          x.classList.add("tyostot__tyosto");
          x.classList.add("tyostot__tyosto_pysty");

          // Position the green lines based on the event    
          left_cord = ((parseFloat(l_i) * j) / 5) + "px";
          x.style.right = left_cord;
          x.style.height = "100%";
          x.style.width = parseFloat(8 / 5) + "px";
          x.style.position = "absolute";
          
          // Append elements to the DOM
          levy_tyostot_x.prepend(x);
          levy.append(levy_tyostot_x);

          // Create input element for the fastener coordinates
          x_cord.type = "text";
          x_cord.classList.add("x_cord");
          x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
          cord = parseFloat((parseFloat(l_i) * (j))) - parseFloat((parseFloat(l_i) * (j - 1)));
          x_cord.value = cord.toFixed(0);
          x_cord.dataset.from = x_cord.value;
          x_cord.style.right = cord / 10;
          x_cord.style.float = "right";
          x_cord.classList.add("standard_kcord");

          // Append input element to the fastener
          x.prepend(x_cord);

          // Create delete button for the fastener
          var x_del = document.createElement("div");
          x_del.classList.add("x_del");
          x_del.setAttribute("onclick", "tyosto__del(this);");
          x.prepend(x_del);


        }
        else if (evt === 2) {
          // Create a new div element for the vertical fastener
          var x = document.createElement("div");
          // Calculate the left position based on the iteration (j)
          right_cord = ((parseFloat(l_i) * j) / 5) - 1 + "px";
          // Set the left position style
          x.style.left = right_cord;
          // Add classes to the div for styling
          x.classList.add("tyostot__tyosto");
          x.classList.add("tyostot__tyosto_pysty");
          x.style.height = "100%";
          x.style.width = parseFloat(8 / 5) + "px";
          x.style.position = "absolute";

          // Prepend the vertical fastener element to the container (levy_tyostot_x)
          levy_tyostot_x.prepend(x);
          // Append the container to the main element (levy)
          levy.append(levy_tyostot_x);

          // Calculate the cord (coordinate) value
          cord = parseFloat((parseFloat(l_i) * (j))) - parseFloat((parseFloat(l_i) * (j - 1)));

          // Create a new input element for the coordinate
          var x_cord = document.createElement("input");
          x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
          x_cord.classList.add("x_cord_mki");
          x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
          x_cord.type = "text";
          x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
          x_cord.classList.add("x_cord");
          x_cord.value = cord.toFixed(0);
          x_cord.dataset.from = x_cord.value;
          x_cord.style.float = "right";
          // x_cord.style.left = cord/10;

          // Prepend the input element to the vertical fastener
          x.prepend(x_cord);

          // Create a delete button element for the vertical fastener
          var x_del = document.createElement("div");
          x_del.classList.add("x_del");
          x_del.setAttribute("onclick", "tyosto__del(this);");
          x.prepend(x_del);
        }
      }
    }
    if (evt === 3 && k_min_h < parseFloat(k_main_levy_[0]) || evt === 4 && k_min_h < parseFloat(k_main_levy_[0])) {
      // Calculate the approximate distance between vertical green lines
      lahinmodmitta = p_h / 25;

      // Determine the number of areas (segments) for vertical green lines
      areas = Math.ceil(p_c_kaava1);

      // Calculate the number of green lines in each area
      modcount = Math.floor(lahinmodmitta / areas);

      // Calculate the optimal distance between green lines
      l_i = parseFloat(modcount * 25);

      // Calculate the total number of green lines needed
      p_t_kaava1 = Math.floor(p_h / l_i);

      // Adjust calculations if the event is 4 and the total number of green lines is not even
      if (evt === 4) {
        if (!isEven(p_t_kaava1)) {
          // Increase the total number of green lines and recalculate
          p_c_kaava1 += 1;
          areas = Math.ceil(p_c_kaava1);
          modcount = Math.floor(lahinmodmitta / areas);
          l_i = parseFloat(modcount * 25);
          p_t_kaava1 = Math.floor(p_h / l_i);
        }
      }
      for (var j = 0; j < p_t_kaava1; j++) {
        if (j !== 0) {
          var x = document.createElement("div");
          // Calculate the left position of the vertical work element
          tas_vord = (j * l_i) / 5 - 1 + "px";
          x.style.left = tas_vord;

          // Set the styles and classes for the new element
          x.classList.add("tyostot__tyosto");
          x.classList.add("tyostot__tyosto_pysty");
          x.style.height = "100%";
          x.style.width = parseFloat(8 / 5) + "px";
          x.style.position = "absolute";

          // Append the new element to the container (levy_tyostot_x)
          levy_tyostot_x.prepend(x);

          // Create an input element for the coordinate value
          var x_cord = document.createElement("input");
          x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
          x_cord.classList.add("x_cord_mki");
          x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
          x_cord.type = "text";

          // Calculate and set the coordinate value for the input
          cord = (j * l_i) - (j - 1) * (parseFloat(l_i));
          x_cord.value = cord.toFixed(0);
          x_cord.dataset.from = x_cord.value;
          x_cord.style.float = "right";
          x_cord.setAttribute("onclick", "clearcord(this,'tyo');");

          // Append the coordinate input to the new element
          x.prepend(x_cord);

          // Create a delete button element and append it to the new element
          var x_del = document.createElement("div");
          x_del.classList.add("x_del");
          x_del.setAttribute("onclick", "tyosto__del(this);");
          x.prepend(x_del);
        }
      }
    }
    // Adjust the right side
    t_last_right(levy, levy_tyostot_x, evt);
    // Adjust the left side
    t_last_left(levy, levy_tyostot_x, evt);
  }
  //VAAKAKIINNIKKEET
  if (evt === 5 || evt === 6 || evt === 7 || evt === 8) {
    // Select all existing horizontal work elements within the 'levy' element and remove them
    let tyosto_levy = levy.querySelectorAll(".tyostot__tyosto_vaaka");
    for (var i = tyosto_levy.length - 1; i >= 0; i--) {
      tyosto_levy[i].remove();
    }

    // Get input values and calculate parameters for creating new horizontal work elements
    // based on the specified target, upper and lower bounds, and width of the 'levy'.
    l_i = document.querySelector("#v_target").value;  // Target value for the horizontal work elements
    v_u = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);  // Upper bound value
    v_b = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);  // Lower bound value
    width_levy = parseFloat(document.querySelector("#k_settings__levy_levysizeh").value);  // Width of the 'levy'
    v_w_ = (width_levy - (v_u + v_b));  // Calculating available width for horizontal work elements
    v_kaava1 = v_w_ / l_i;  // Calculating the formula for positioning horizontal work elements

    // Check if the available width is less than the minimum required width (k_min_w)
    if (v_w_ < k_min_w) {
      v_w = -1;  // Set a flag indicating insufficient width
      p_kaava1 = 0;  // Reset parameter
      v_c_kaava1 = 0;  // Reset parameter
      v_t_kaava1 = 0;  // Reset parameter
    } else {
      // Set parameters for creating horizontal work elements when there is sufficient width
      v_w = v_w_;
      v_c_kaava1 = parseFloat(1 + Math.ceil(v_kaava1));  // Calculate the ceiling value for count
      v_t_kaava1 = parseFloat(1 + Math.trunc(v_kaava1));  // Calculate the truncated value for count
    }
    // l_i = 
    if (evt === 5 && k_min_w < parseFloat(k_main_levy_[1]) || evt === 6 && k_min_w < parseFloat(k_main_levy_[1])) {
      for (var g = 1; g < v_t_kaava1; g++) {
        if (evt === 5) {
          var x = document.createElement("div");
          bottom_cord = (parseFloat(l_i) * g) / 5 - 1 + "px";
          x.style.bottom = bottom_cord;
          x.classList.add("tyostot__tyosto");
          x.classList.add("tyostot__tyosto_vaaka");
          x.style.width = "100%";
          x.style.height = parseFloat(8 / 5) + "px";
          x.style.position = "absolute";
          levy_tyostot_y.prepend(x);
          var x_cord = document.createElement("input");
          x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
          x_cord.classList.add("x_cord_mki");
          x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
          x_cord.type = "text";
          cord = parseFloat((parseFloat(l_i) * (g))) - parseFloat((parseFloat(l_i) * (g - 1)));
          x_cord.value = cord.toFixed(0);
          x_cord.dataset.from = x_cord.value;
          x_cord.style.top = "-15px";
          x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
          x.prepend(x_cord);
          var x_del = document.createElement("div");
          x_del.classList.add("x_del");
          x_del.setAttribute("onclick", "tyosto__del(this);");
          x.prepend(x_del);
          levy.append(levy_tyostot_y);
        }
        else if (evt === 6) {
          var x = document.createElement("div");
          top_cord = (parseFloat(l_i) * g) / 5 - 1 + "px";
          x.style.top = top_cord;
          x.classList.add("tyostot__tyosto");
          x.classList.add("tyostot__tyosto_vaaka");
          x.style.width = "100%";
          x.style.height = parseFloat(8 / 5) + "px";
          x.style.position = "absolute";
          levy_tyostot_y.prepend(x);
          var x_cord = document.createElement("input");
          x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
          x_cord.classList.add("x_cord_mki");
          x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
          x_cord.type = "text";
          cord = parseFloat((parseFloat(l_i) * (g))) - parseFloat((parseFloat(l_i) * (g - 1)));
          x_cord.value = cord.toFixed(0);
          x_cord.dataset.from = x_cord.value;
          x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
          // x_cord.style.top = "-15px";
          x.prepend(x_cord);
          var x_del = document.createElement("div");
          x_del.classList.add("x_del");
          x_del.setAttribute("onclick", "tyosto__del(this);");
          x.prepend(x_del);
          levy.append(levy_tyostot_y);
        }
      }
    }
    // if (evt === 8) {
    //   if (isEven(v_t_kaava1)) {}
    //   else {
    //     v_t_kaava1 += 1;

    //   }
    // }
    if (evt === 7 && k_min_w < parseFloat(k_main_levy_[1]) || evt === 8 && k_min_w < parseFloat(k_main_levy_[1])) {


      if (evt === 8) {
        if (isEven(v_t_kaava1)) {
          lahinmodmitta = (v_w / 25);
          areas = Math.ceil(v_c_kaava1);

          modcount = Math.floor((lahinmodmitta) / areas);
          l_i = parseFloat(modcount * 25);
          v_t_kaava1 = Math.floor(v_w / l_i);
        }
        else {
          v_c_kaava1 += 1;

          areas = Math.ceil(v_c_kaava1);
          lahinmodmitta = (v_w / 25);
          modcount = Math.floor((lahinmodmitta) / areas);
          l_i = parseFloat(modcount * 25);
          v_t_kaava1 = Math.floor(v_w / l_i);
        }
      }
      for (var g = 1; g < v_t_kaava1; g++) {
        if (g !== 0) {
          var x = document.createElement("div");
          tas_vord = (g * l_i) / 5 - 1 + "px";
          x.style.bottom = tas_vord;
          x.classList.add("tyostot__tyosto");
          x.classList.add("tyostot__tyosto_vaaka");
          x.style.width = "100%";
          x.style.height = parseFloat(8 / 5) + "px";
          x.style.position = "absolute";
          levy_tyostot_y.appendChild(x);
          var x_cord = document.createElement("input");
          x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
          x_cord.classList.add("x_cord_mki");
          x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
          x_cord.type = "text";
          x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
          cord = (g * l_i) - ((g - 1) * l_i);
          x_cord.value = cord.toFixed(0);
          x_cord.dataset.from = x_cord.value;
          // x_cord.style.bottom = "19px";
          x.prepend(x_cord);
          var x_del = document.createElement("div");
          x_del.classList.add("x_del");
          x_del.setAttribute("onclick", "tyosto__del(this);");
          x.prepend(x_del);
        }
      }
    }
    t_last_top(levy, levy_tyostot_y, evt);
    t_last_bottom(levy, levy_tyostot_y, evt);
  }
  // levy.setAttribute("data-levy_x",(parseFloat(levy_c_x-levy_c_y)));
  // levy.setAttribute("data-levy_y",(parseFloat(levy_c_y)));
  l_meta = {};

  give__tyosto_cord(levy);


  removeduplicatecords__adjustcords();


  
}

function t_last_top(levy, tyosto, evt) {
  var interval = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
  console.log("t_last_top(levy, tyosto, evt) fired");
  var x = document.createElement("div");
  x.classList.add("tyostot__tyosto");
  x.classList.add("tyostot__tyosto_vaaka");
  x.classList.add("viim__tyosto_vaaka");
  x.classList.add("no_siirto");
  x.style.width = "100%";
  x.style.height = parseFloat(8 / 5) + "px";
  x.style.position = "absolute";
  x.style.bottom = (parseFloat(levy_meta[1] - interval)) / 5 + "px";
  tyosto.prepend(x);
  if (evt === 5 || evt === 7 || evt === 8) {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
    x_cord.classList.add("x_cord_mki");
    x_cord.classList.add("temp_input_last");
    x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_cord.type = "text";
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    v_u = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
    v_b = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
    v_w = (levy_meta[1] - (v_u + v_b));
    var i_ = 0;
    let gg = levy.querySelectorAll(".levy_tyostot_y > div > input");
    for (var g = 0; g < gg.length; g++) {
      i_ += parseFloat(gg[g].value);
    }
    // x_cord.style.bottom = (v_w - i_)/10+"px";
    x_cord.value = (v_w - i_);
    x_cord.dataset.from = x_cord.value;
    x.prepend(x_cord);
    var x_last_cord = document.createElement("input");
    x_last_cord.type = "text";
    x_last_cord.classList.add("x_cord");

    x_last_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_last_cord.classList.add("y_cord_border");
    x_last_cord_cord = parseFloat(levy_meta[1]) - parseFloat(x.style.bottom) * 5;
    x_last_cord.value = v_u;
    x.prepend(x_last_cord);
  }
  else {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
    // x_cord.setAttribute("onchange", "alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')");
    x_cord.classList.add("x_cord_mki");
    //x_cord.classList.add("temp_input_last");
    x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_cord.type = "text";
    x_cord.classList.add("x_cord");
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    x_cord.classList.add("y_cord_border");
    cord = parseFloat(x.style.bottom) * 5;
    x_cord.value = v_u;
    x_cord.dataset.from = x_cord.value;
    x.prepend(x_cord);
  }
}

function t_last_right(levy, tyosto, evt) {
  console.log("t_last_right(levy, tyosto, evt) fired");
  var interval = parseFloat(document.querySelector("#settings__levy_or_arvo").value);
  p_left = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
  p_right = parseFloat(document.querySelector("#settings__levy_or_arvo").value);
  p_h = (levy_meta[0] - (p_left + p_right));
  var x = document.createElement("div");
  x.classList.add("tyostot__tyosto");
  x.classList.add("tyostot__tyosto_pysty");
  x.classList.add("viim__tyosto_pysty");
  x.classList.add("no_siirto");
  x.style.height = "100%";
  x.style.width = parseFloat(8 / 5) + "px";
  x.style.position = "absolute";
  x.style.left = ((parseFloat(8 / 5) * (-5)) + parseFloat(levy_meta[0] - interval)) / 5 + "px";
  tyosto.prepend(x);
  if (evt === 2 || evt === 1 || evt === 3 || evt === 4) {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')");
    x_cord.classList.add("temp_input_last");
    x_cord.classList.add("x_cord_mki");
    x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_cord.type = "text";
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    var i_ = 0;
    let jj = levy.querySelectorAll(".levy_tyostot_x > div > input");
    for (var j = 0; j < jj.length; j++) {
      i_ += parseFloat(jj[j].value);
    }
    cord = (parseFloat(p_h - i_));
    x_cord.value = cord.toFixed(0);
    x_cord.dataset.from = x_cord.value;
    if (evt === 1) {
      // x_cord.style.right = cord/10 + "px";
    }
    else if (evt === 2 || evt === 3 || evt === 4) {
      // x_cord.style.left = cord/10 + "px";
      x_cord.style.float = "right";
    }
    x.prepend(x_cord);
    var x_last_cord = document.createElement("input");
    x_last_cord.type = "text";
    x_last_cord.classList.add("x_cord");
    x_last_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_last_cord.classList.add("x_cord_border");
    x_last_cord_cord = parseFloat(levy_meta[0]) - parseFloat(x.style.left) * 5;
    x_last_cord.value = p_right;
    // x_last_cord.style.background = "black";
    x.prepend(x_last_cord);
  }
  else {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')");
    //x_cord.classList.add("temp_input_last");
    x_cord.classList.add("x_cord_mki");
    x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_cord.type = "text";
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    x_cord.classList.add("x_cord");
    x_cord.classList.add("x_cord_border");
    cord = parseFloat(x.style.left) * 5;
    x_cord.value = p_right;
    x_cord.dataset.from = x_cord.value;
    x.prepend(x_cord);
  }
}

function t_last_left(levy, tyosto, evt) {
  console.log(" t_last_left(levy, tyosto, evt) fired");
  var interval = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
  var x = document.createElement("div");
  x.classList.add("tyostot__tyosto");
  x.classList.add("tyostot__tyosto_pysty");
  x.classList.add("alku__tyosto_pysty");
  x.classList.add("no_siirto");
  x.style.height = "100%";
  x.style.width = parseFloat(8 / 5) + "px";
  x.style.position = "absolute";
  x.style.left = parseFloat(interval) / 5 + "px";
  tyosto.prepend(x);
  if (evt === 1) {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
    x_cord.classList.add("x_cord_mki");
    x_cord.classList.add("temp_input_last");
    x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_cord.type = "text";
    var i_ = 0;
    let jj = levy.querySelectorAll(".levy_tyostot_x > div > input");
    for (var j = 0; j < jj.length; j++) {
      i_ += parseFloat(jj[j].value);
    }
    cord = (parseFloat(p_h - i_));
    x_cord.value = cord.toFixed(2);
    x_cord.dataset.from = x_cord.value;
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    if (evt === 1) {
      // x_cord.style.right = cord/10 + "px";
    }
    x.prepend(x_cord);
    // var x_last_cord = document.createElement("input");
    // x_last_cord.type = "text";
    // x_last_cord.classList.add("x_cord");
    // x_last_cord.classList.add("event_"+String.fromCharCode(64+evt).toLowerCase());
    // x_last_cord.classList.add("x_cord_border");
    // x_last_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    // x_last_cord_cord = parseFloat(levy_meta[0]) - parseFloat(x.style.left) * 5;
    // x_last_cord.value = p_left;
    // x.prepend(x_last_cord);
  }
  else {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')");
    x_cord.classList.add("x_cord_mki");
    //x_cord.classList.add("temp_input_last");
    x_cord.type = "text";
    x_cord.classList.add("x_cord");
    x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_cord.classList.add("x_cord_border");
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    cord = parseFloat(x.style.left) * 5;
    x_cord.value = p_left;
    x_cord.dataset.from = x_cord.value;
    x.prepend(x_cord);
  }
}

function t_last_bottom(levy, tyosto, evt) {
  console.log("t_last_bottom(levy, tyosto, evt) ");
  var interval = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
  var x = document.createElement("div");
  x.classList.add("tyostot__tyosto");
  x.classList.add("tyostot__tyosto_vaaka");
  x.classList.add("alku__tyosto_vaaka");
  x.classList.add("no_siirto");
  x.style.width = "100%";
  x.style.height = parseFloat(8 / 5) + "px";
  x.style.position = "absolute";
  x.style.bottom = (parseFloat(interval) / 5 + "px");
  tyosto.prepend(x);
  if (evt === 6) {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "change__tyostocord(this,1," + evt + ");");
    x_cord.classList.add("x_cord_mki");
    //x_cord.classList.add("temp_input_last");
    x_cord.type = "text";
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    var i_ = 0;
    let gg = levy.querySelectorAll(".levy_tyostot_y > div > input");
    for (var g = 0; g < gg.length; g++) {
      i_ += parseFloat(gg[g].value);
    }
    v_u = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
    v_b = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
    v_w = (levy_meta[1] - (v_u + v_b));
    // x_cord.style.top = "-15px";
    x_cord.type = "text";
    x_cord.value = (v_w - i_);
    x_cord.dataset.from = x_cord.value;
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    x.prepend(x_cord);
    var x_last_cord = document.createElement("input");
    x_last_cord.type = "text";
    x_last_cord.classList.add("x_cord");
    x_last_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_last_cord.classList.add("y_cord_border");
    x_last_cord_cord = v_b;
    x_last_cord.value = x_last_cord_cord.toFixed(2);
    x.prepend(x_last_cord);
  }
  else {
    var x_cord = document.createElement("input");
    x_cord.setAttribute("onchange", "alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')");
    //x_cord.classList.add("temp_input_last");
    x_cord.classList.add("x_cord_mki");
    x_cord.type = "text";
    x_cord.classList.add("x_cord");
    x_cord.classList.add("event_" + String.fromCharCode(64 + evt).toLowerCase());
    x_cord.classList.add("y_cord_border");
    cord = parseFloat(x.style.bottom) * 5;
    x_cord.value = v_b;
    x_cord.setAttribute("onclick", "clearcord(this,'tyo');");
    x_cord.dataset.from = x_cord.value;
    x.prepend(x_cord);
  }
  // var x_cord = document.createElement("input");
  // x_cord.value = (interval);
  // x.prepend(x_cord);
}

function kiinnikkeet__siirto() {
  console.log("kiinnikkeet__siirto() fired");
  let levytys = document.querySelectorAll('.levyt .levy');
  levytys_array = [];
  for (var i = 0; i < levytys.length; i++) {
    t_hlevy = parseFloat(levytys[i].style.height) * 5;
    t_wlevy = parseFloat(levytys[i].style.width) * 5;
    t_blevy = parseFloat(levytys[i].style.bottom) * 5;
    t_llevy = parseFloat(levytys[i].style.left) * 5;

    levy_title = t_hlevy + "," + t_wlevy + "," + t_blevy + "," + t_llevy;

    // levytys[i].setAttribute("title", levy_title);

    titteli = levytys[i].title.split(",");
    title = titteli[0] + "," + titteli[1];
    levytys_array.push("" + title + "");


  }
  levy_siirto = levytys_array.filter((element, index) => {
    return levytys_array.indexOf(element) === index;
  });
  levy_siirto.sort(function (a, b) {
    return b.replace(",", "") - a.replace(",", "");
  });
  if (document.querySelector(".levy_type")) {
    l_t = document.querySelectorAll(".levy_type");
    for (var i = l_t.length - 1; i >= 0; i--) {
      l_t[i].remove();
    }
  }
  levytypes_target = document.querySelector(".levy_types");
  br = 0
  for (var i = levy_siirto.length - 1; i >= 0; i--) {
    n_m = "'" + levy_siirto[i].replace(",", "x") + "'";
    l = document.createElement("div");
    l.classList.add("levy_type");
    l.setAttribute("onclick", "change__klevy(" + (n_m) + ");");
    l.innerHTML = String(n_m);
    levytypes_target.prepend(l);
    var addclass = 'selected';
    var $cols = $('.levy_type').click(function (e) {
      $cols.removeClass(addclass);
      $(this).addClass(addclass);
    });
  }
  if (document.querySelectorAll(".levy_type")[0]) {
    document.querySelectorAll(".levy_type")[0].click();
  }
  else if (document.querySelector(".levy_type.selected")) {
    document.querySelector(".levy_type.selected").click();
  }

  setTimeout(function () {
    reorganise__newtyosto();
  }, 100);



}

function change__klevy(info) {
  console.log("change__klevy(info) fired");
  info_cord = String(info).replace("'", "").split("x");
  if (document.querySelector("#drawscreen_section_tyostot .visible")) {
    levy = document.querySelector("#drawscreen_section_tyostot .visible");
  }
  else {
    levy = document.createElement("div");
    levy.classList.add("visible");
    levy.classList.add("levy");
    if (document.querySelector("#settings__sauma_pysty").checked) {
      levy.classList.add("dir_y");
    }
    else if (document.querySelector("#settings__sauma_vaaka").checked) {
      levy.classList.add("dir_x");
    }
    if (document.querySelector(".levy_vis")) {
      if (document.querySelector(".levy_vis").innerHTML.length < 10) {
        document.querySelector(".levy_vis").prepend(levy);
      }
    }
    horizontalinputs_left = document.createElement("section");
    horizontalinputs_right = document.createElement("section");
    horizontalinputs_up = document.createElement("section");
    horizontalinputs_down = document.createElement("section");
    horizontalinputs_left.classList.add("horizontalinputs");
    horizontalinputs_right.classList.add("horizontalinputs");
    horizontalinputs_up.classList.add("verticalinputs");
    horizontalinputs_down.classList.add("verticalinputs");
    horizontalinputs_left.classList.add("horizontalinputs-left");
    horizontalinputs_right.classList.add("horizontalinputs-right");
    horizontalinputs_up.classList.add("verticalinputs-up");
    horizontalinputs_down.classList.add("verticalinputs-down");
    horizontalinputs_left
    horizontalinputs_right
    horizontalinputs_up.style.marginLeft = "30px";
    horizontalinputs_up.style.float = "right";
    horizontalinputs_up.style.top = "top:-30px;";
    horizontalinputs_down.style.marginLeft = "30px";
    


    s_ar = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
    s_yr = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
    s_vr = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
    s_or = parseFloat(document.querySelector("#settings__levy_or_arvo").value);

    horizontalinputs_left.innerHTML =
      `<div style="margin-top: 50px;" class="tyosto_measure"><input type="text" name="_levymod" value="${s_vr}" min="20" max="80" class="lineinput drawarea__mm levy_input" id="k_vrlevy" onchange="change__levykiinnike();"><label for="">VR LEVY</label></div>`;
    horizontalinputs_right.innerHTML =
      `<div style="margin-top: 50px;" class="tyosto_measure"><input type="text" name="_levymod" value="${s_or}" min="20" max="80" class="lineinput drawarea__mm levy_input" id="k_orlevy" onchange="change__levykiinnike();"><label for="">OR LEVY</label></div>`;
    horizontalinputs_up.innerHTML =
      `<div style="" class="tyosto_measure"><input type="text" name="_levymod" value="${s_yr}" min="20" max="80" class="lineinput drawarea__mm levy_input" id="k_yrlevy" onchange="change__levykiinnike();"><label for="">YR LEVY</label></div>`;
    horizontalinputs_down.innerHTML =
      `<div style="" class="tyosto_measure"><input type="text" name="_levymod" value="${s_ar}" min="20" max="80" class="lineinput drawarea__mm levy_input" id="k_arlevy" onchange="change__levykiinnike();"><label for="">AR LEVY</label></div>`;
    levy.append(horizontalinputs_left);
    levy.append(horizontalinputs_right);
    levy.append(horizontalinputs_up);
    levy.append(horizontalinputs_down);
  }
  var verticalinputs_up = document.querySelector(".verticalinputs-up");
  var verticalinputs_down = document.querySelector(".verticalinputs-down");
  levy.style.width = (parseFloat(info_cord[0]) / 5) + "px";
  levy.style.height = (parseFloat(info_cord[1]) / 5) + "px";
  levy.classList.add("levy");
  levy.style.width = (info_cord[0] / 5) + "px";
  verticalinputs_up.style.left = (info_cord[0] / 5) + "px";
  verticalinputs_down.style.left = (info_cord[0] / 5) + "px";
  verticalinputs_down.style.top = (info_cord[1] / 5) + "px";
  levy.title = info_cord[0] + "," + info_cord[1];
  document.querySelector("#k_settings__levy_levysizew").value = parseFloat(info_cord[0]);
  document.querySelector("#k_settings__levy_levysizeh").value = parseFloat(info_cord[1]);
  aloita_tyosto_kiinnikkeet();

  l_container = document.querySelector(".ladonta_container");
  levy_visualisation = l_container.querySelector(".levy");
  countdown__kiinnikkeet(levy_visualisation);
}
//////////////////////////////////// Esikatselusta
function change__tyostocord(input, secondsetting, evt) {
  console.log("change__tyostocord(input, secondsetting) fired");
  oldvalue = input.dataset.from;
  
  try { c_kiinnikkeet = canvas.querySelectorAll(".tyostot__tyosto"); } catch { let c_kiinnikkeet = undefined;console.log("canvas not set"); }
  k_x = [];
  k_y = [];

  console.log("evt:  " + evt);


  tochange_array_x = [];
  tochange_array_y = [];
  if (c_kiinnikkeet != undefined) {
    for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
      k_x.push(c_kiinnikkeet[i].getBoundingClientRect().left);
      k_y.push(c_kiinnikkeet[i].getBoundingClientRect().bottom);
    }
  }

  // Identify elems
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
  // End identify elems


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
  barent = input.parentElement;
  grandbarent = barent.parentElement;
  elements = grandbarent.querySelectorAll(".tyostot__tyosto");
  currentIndex = Array.from(elements).indexOf(barent);
  newvalue = parseFloat(input.value.replaceAll(",","."));
  erotus = oldvalue - newvalue;

  if (secondsetting === 1) {
    new_cord = (parseFloat(old_cord) - (parseFloat(erotus) / 5)) + "px";
    if (thistyosto.classList.contains("tyostot__tyosto_pysty")) {
      thistyosto.style.left = new_cord;
      input.dataset.from = parseFloat(input.value.replaceAll(",","."));
      if (thistyosto.parentElement.parentElement.classList.contains("visible") != true) {
        thistyosto.querySelector(".secondcord").value = parseFloat(thistyosto.parentElement.parentElement.style.left) * 5 + parseFloat(thistyosto.style.left) * 5;
      }

      if (thistyosto.querySelector(".thirdcord")) {
        thistyosto.querySelector(".thirdcord").innerHTML = "<b>V</b><br>" + parseFloat(thistyosto.style.left) * 5;
      }

      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        if (thisinput_l === c_kiinnikkeet[i].getBoundingClientRect().left) {
          c_kiinnikkeet[i].style.left = new_cord;
          console.log(c_kiinnikkeet[i]);
          if (c_kiinnikkeet[i].querySelector("input")) {
            c_kiinnikkeet[i].querySelector("input").value = newvalue;
          }
          if (c_kiinnikkeet[i].querySelector("input.secondcord")) {
            c_kiinnikkeet[i].querySelector("input.secondcord").value = parseFloat(c_kiinnikkeet[i].parentElement.parentElement.style.left) * 5 + parseFloat(c_kiinnikkeet[i].style.left) * 5;
          }
          if (c_kiinnikkeet[i].querySelector(".thirdcord")) {
            c_kiinnikkeet[i].querySelector(".thirdcord").innerHTML = "<b>V</b><br>" + parseFloat(c_kiinnikkeet[i].style.left) * 5;
          }
        }
      }
      if (thistyosto.parentElement.parentElement.classList.contains("visible") != true) {
        thistyosto.querySelector(".secondcord").value = parseFloat(thistyosto.parentElement.parentElement.style.left) * 5 + parseFloat(thistyosto.style.left) * 5;
      }
    }
    else if (thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
      thistyosto.style.bottom = new_cord;
      input.dataset.from = parseFloat(input.value.replaceAll(",","."));
      if (thistyosto.querySelector(".secondcord")) {
        thistyosto.querySelector(".secondcord").value = parseFloat(thistyosto.style.bottom) * 5;
      }

      if (thistyosto.querySelector(".thirdcord")) {
        thistyosto.querySelector(".thirdcord").innerHTML = "<b>V</b><br>" + parseFloat(thistyosto.style.bottom) * 5;
      }

      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        if (thisinput_b === c_kiinnikkeet[i].getBoundingClientRect().bottom) {
          c_kiinnikkeet[i].style.bottom = new_cord;
          if (c_kiinnikkeet[i].querySelector("input")) {
            c_kiinnikkeet[i].querySelector("input").value = newvalue;
          }

          if (c_kiinnikkeet[i].querySelector("input.secondcord")) {
            console.log(parseFloat(c_kiinnikkeet[i].parentElement.parentElement.style.bottom) * 5);
            console.log(parseFloat(c_kiinnikkeet[i].style.bottom) * 5);
            c_kiinnikkeet[i].querySelector("input.secondcord").value = parseFloat(c_kiinnikkeet[i].parentElement.parentElement.style.bottom) * 5 + parseFloat(c_kiinnikkeet[i].style.bottom) * 5;
          }

          if (c_kiinnikkeet[i].querySelector(".thirdcord")) {
            c_kiinnikkeet[i].querySelector(".thirdcord").innerHTML = "<b>V</b><br>" + parseFloat(c_kiinnikkeet[i].style.bottom) * 5;
          }
        }
      }
    }
    boxHeight = parseFloat(document.querySelector('#box-wrapper > main').offsetHeight);
    boxWidth = parseFloat(document.querySelector('#box-wrapper > main').offsetWidth);
    if (thistyosto.classList.contains("tyostot__tyosto_pysty")) {
      if (grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex + 1]) {
        n_elem = grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex + 1];
        if (n_elem.classList.contains("alku__tyosto_pysty") || n_elem.classList.contains("viim__tyosto_vaaka")) {
          n_input = n_elem.querySelectorAll("input")[1];
        }
        else {
          n_input = n_elem.querySelectorAll("input")[0];
        }
        // n_elem.querySelector(".secondcord").value = parseFloat(n_elem.parentElement.parentElement.style.left)*5 + parseFloat(n_elem.style.left) * 5;
        // n_input.value = parseFloat(n_elem.querySelector(".secondcord").value) - parseFloat(thistyosto.querySelector(".secondcord").value);
        // n_input.dataset.from = n_input.value;
      }
    }
    else if (thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
      if (grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex - 1]) {
        n_elem = grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex - 1];
        if (n_elem.classList.contains("alku__tyosto_pysty") || n_elem.classList.contains("viim__tyosto_vaaka")) {
          n_input = n_elem.querySelectorAll("input")[1];
        }
        else {
          n_input = n_elem.querySelectorAll("input")[0];
        }
        n_input.value = parseFloat(n_input.dataset.from) + parseFloat(erotus);
        if (n_elem.querySelector(".secondcord")) {
          n_elem.querySelector(".secondcord").value = parseFloat(n_elem.style.bottom) * 5;
        }

        // n_elem.querySelector(".secondcord").value = parseFloat(n_elem.style.bottom) * 5;
        // n_input.value = parseFloat(n_elem.querySelector(".secondcord").value) - parseFloat(thistyosto.querySelector(".secondcord").value);
        // n_input.dataset.from = n_input.value;
      }
    }
    // n_input.dataset.from = parseFloat(n_input.value);
  }
  else if (secondsetting === 2) {
    new_cord = (parseFloat(old_cord) - (parseFloat(erotus))) + "px";
    mki_input_val = parseFloat(thistyosto.querySelector(".x_cord_mki").value);
    if (thistyosto.classList.contains("tyostot__tyosto_pysty")) {
      thistyosto.style.left = parseFloat(input.value.replaceAll(",",".")) / 5 + "px";
      input.dataset.from = parseFloat(input.value.replaceAll(",","."));
      mki_input_val = parseFloat(thistyosto.querySelector(".x_cord_mki").value);
      thistyosto.querySelector(".x_cord_mki").dataset.from = mki_input_val - erotus;
      thistyosto.querySelector(".x_cord_mki").value = mki_input_val - erotus;
      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        if (thisinput_l === c_kiinnikkeet[i].getBoundingClientRect().left) {
          c_kiinnikkeet[i].style.left = parseFloat(input.value.replaceAll(",",".")) / 5 + "px";
          if (c_kiinnikkeet[i].querySelector("input")) {
            c_kiinnikkeet[i].querySelector("input").value = newvalue;
          }
          if (c_kiinnikkeet[i].parentElement.querySelector("input.x_cord_mki")) {
            c_kiinnikkeet[i].parentElement.querySelector("input.x_cord_mki").value = parseFloat(c_kiinnikkeet[i].style.left) * 5;
          }
        }
      }
    }
    else if (thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
      thistyosto.style.bottom = parseFloat(input.value.replaceAll(",",".")) / 5 + "px";
      input.dataset.from = parseFloat(input.value.replaceAll(",","."));
      realval = mki_input_val - erotus;
      console.log("realval " + realval);
      console.log("mki_input_val " + mki_input_val);
      console.log("erotus " + erotus);
      thistyosto.querySelector(".x_cord_mki").dataset.from = parseFloat(realval);
      thistyosto.querySelector(".x_cord_mki").value = parseFloat(realval);
      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        if (thisinput_b === c_kiinnikkeet[i].getBoundingClientRect().bottom) {
          c_kiinnikkeet[i].style.bottom = parseFloat(input.value.replaceAll(",",".")) / 5 + "px";
          if (c_kiinnikkeet[i].querySelector("input")) {
            c_kiinnikkeet[i].querySelector("input").value = newvalue;
          }
          if (c_kiinnikkeet[i].parentElement.querySelector("input.x_cord_mki")) {
            c_kiinnikkeet[i].parentElement.querySelector("input.x_cord_mki").value = parseFloat(c_kiinnikkeet[i].style.bottom) / 5;
          }
        }
      }
    }
    boxHeight = parseFloat(document.querySelector('#box-wrapper > main').offsetHeight);
    boxWidth = parseFloat(document.querySelector('#box-wrapper > main').offsetWidth);
    if (thistyosto.classList.contains("tyostot__tyosto_pysty")) {
      if (grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex - 1]) {
        n_elem = grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex - 1];
        if (n_elem.classList.contains("alku__tyosto_pysty") || n_elem.classList.contains("viim__tyosto_vaaka")) {
          n_input = n_elem.querySelectorAll("input")[1];
        }
        else {
          n_input = n_elem.querySelectorAll("input")[0];
        }


        // n_elem.querySelector(".secondcord").value = parseFloat(n_elem.style.left) * 5;
        // n_input.value = parseFloat(n_elem.querySelector(".secondcord").value) - parseFloat(thistyosto.querySelector(".secondcord").value);
        // n_input.dataset.from = n_input.value;
      }
    }
    else if (thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
      if (grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex - 1]) {
        n_elem = grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex - 1];
        if (n_elem.classList.contains("alku__tyosto_pysty") || n_elem.classList.contains("viim__tyosto_vaaka")) {
          n_input = n_elem.querySelectorAll("input")[1];
        }
        else {
          n_input = n_elem.querySelectorAll("input")[0];
        }
        // n_elem.querySelector(".secondcord").value = parseFloat(n_elem.style.bottom) * 5;
        // n_input.value = parseFloat(n_elem.querySelector(".secondcord").value) - parseFloat(thistyosto.querySelector(".secondcord").value);
        // n_input.dataset.from = n_input.value;
      }
    }


    // n_input.dataset.from = parseFloat(n_input.value);
  }
  kaikki_mod = 0;

  if (parseFloat(evt) == 1 || parseFloat(evt) == 2 || parseFloat(evt) == 3 || parseFloat(evt) == 4) {

    // if(parseFloat(evt) == 2 || parseFloat(evt) == 3 || parseFloat(evt) == 4) {
    console.log("EVT TRY!! 2");
    n_elem = grandbarent.querySelectorAll('.tyostot__tyosto')[currentIndex - 1];

    if (n_elem.classList.contains("alku__tyosto_pysty") || n_elem.classList.contains("viim__tyosto_pysty") || n_elem.classList.contains("viim__tyosto_vaaka")) {
      n_input = n_elem.querySelectorAll("input")[1];
    }
    else {
      n_input = n_elem.querySelectorAll("input")[0];
    }
    // }
    levy_mitta = parseFloat(grandbarent.parentElement.title.split(",")[0]);
    mitat = grandbarent.querySelectorAll('input');

    for (var i = mitat.length - 1; i >= 0; i--) {
      if (mitat[i].classList.contains("secondcord")) {

      }
      else {
        kaikki_mod += parseFloat(mitat[i].value);
      }
    }
    // kaikki_mod-
    n_input_old = parseFloat(n_input.dataset.from);
    erotus_laskenta = kaikki_mod - n_input_old;
    n_input.value = levy_mitta - erotus_laskenta;
    n_input.dataset.from = n_input.value;

  }

  if (parseFloat(evt) == 5 || parseFloat(evt) == 6 || parseFloat(evt) == 7 || parseFloat(evt) == 8) {
    console.log(n_input);
    levy_mitta = parseFloat(grandbarent.parentElement.title.split(",")[1]);
    mitat = grandbarent.querySelectorAll('input');

    for (var i = mitat.length - 1; i >= 0; i--) {
      if (mitat[i].classList.contains("secondcord")) {

      }
      else {
        if (mitat[i] === n_input) {

        }
        else {
          kaikki_mod += parseFloat(mitat[i].value);
        }

      }
    }

    // n_input_old = parseFloat(n_input.dataset.from);
    // erotus_laskenta = kaikki_mod-n_input_old;
    n_input.value = levy_mitta - kaikki_mod;
    n_input.dataset.from = n_input.value;

  }

  // if(parseFloat(evt) == 2) {
  //    console.log(n_input);
  //   levy_mitta = parseFloat(grandbarent.parentElement.style.width) * 5;
  // }

  // if(parseFloat(evt) == 3) {
  //    console.log(n_input);
  //   levy_mitta = parseFloat(grandbarent.parentElement.style.width) * 5;
  // }

  // if(parseFloat(evt) == 4) {
  //    console.log(n_input);
  //   levy_mitta = parseFloat(grandbarent.parentElement.style.width) * 5;
  // }

  // if(parseFloat(evt) == 5) {
  //    console.log(n_input);
  // }

  // if(parseFloat(evt) == 6) {
  //    console.log(n_input);
  // }

  // if(parseFloat(evt) == 7) {
  //    console.log(n_input);
  // }

  // if(parseFloat(evt) == 8) {
  //    console.log(n_input);
  // }
}

function tallenna_kiinnikepaikat(levy) {
  console.log("tallenna_kiinnikepaikat(levy) fired");
  kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");
  l_meta = levy.querySelector(".l_meta");
  l_meta.value = "";
  l_meta_x = [];
  l_meta_y = [];
  kiinnike_inputy = [];
  kiinnike_inputx = [];
  for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
    if (kiinnikkeet[i]) {
      if (kiinnikkeet[i].classList.contains("tyostot__tyosto_vaaka")) {
        kiinnike_inputy.push(kiinnikkeet[i]);
      }
      if (kiinnikkeet[i].classList.contains("tyostot__tyosto_pysty")) {
        kiinnike_inputx.push(kiinnikkeet[i]);
      }
    }
  }
  for (var y = kiinnike_inputy.length - 1; y >= 0; y--) {
    k_input = kiinnike_inputy[y].querySelectorAll("input");
    for (var k = k_input.length - 1; k >= 0; k--) {
      l_meta_y.push(k_input[k].value);
    }
  }
  for (var x = kiinnike_inputx.length - 1; x >= 0; x--) {
    k_input = kiinnike_inputx[x].querySelectorAll("input");
    for (var k = k_input.length - 1; k >= 0; k--) {
      l_meta_x.push(k_input[k].value);
    }
  }
  l_meta.value = ("{" + l_meta_x + "}," + "{" + l_meta_y + "}");
  console.log("l_meta_x: " + l_meta_x);
  console.log("l_meta_y: " + l_meta_y);
}

function give__tyosto_cord(levy) {
  console.log("give__tyosto_cord(levy) fired");
  levy_tyostot_x = levy.querySelectorAll(".levy_tyostot_x");
  levy_tyostot_y = levy.querySelectorAll(".levy_tyostot_y");
  for (var i = levy_tyostot_x.length - 1; i >= 0; i--) {
    tyostot = levy_tyostot_x[i].querySelectorAll(".tyostot__tyosto");
    tyosto_array = [];
    for (var j = tyostot.length - 1; j >= 0; j--) {
      tyosto_array.push(tyostot[j]);
      tyostot[j].remove();
    }
    for (var j = tyosto_array.length - 1; j >= 0; j--) {
      l_w = parseFloat(levy.title.split(",")[0]) / 5; // TEMP?
      l_h = parseFloat(levy.title.split(",")[1]) / 5; // TEMP?
      if (tyosto_array[j].querySelector("input")) {
        items = tyosto_array[j].querySelectorAll("input");
        for (var a = items.length - 1; a >= 0; a--) {
          items[a].value = "";
        }
      }
      if (parseFloat(tyosto_array[j].style.left) > 1) {
        console.log("left detected");
      }
      else if (tyosto_array[j].classList.contains("viim__tyosto_pysty")) {
        right_limit = parseFloat(document.querySelector("#settings__levy_or_arvo").value);
        tyosto_array[j].style.left = l_w - ((right_limit/5)-1) + "px";
        
        console.log("tyosto_array[j].style.left" + tyosto_array[j].style.left);
        tyosto_array[j].value = right_limit;
      }
      else if (tyosto_array[j].classList.contains("alku__tyosto_pysty")) {
        left_limit = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
        tyosto_array[j].style.left = ((left_limit/5)-1) + "px";
        console.log("tyosto_array[j].style.left" + tyosto_array[j].style.left);
        tyosto_array[j].value = left_limit;
      }
      else if (parseFloat(tyosto_array[j].style.right) > 1) {
        if (tyosto_array[j].classList.contains("alku__tyosto_pysty") || tyosto_array[j].classList.contains("viim__tyosto_pysty")) {

        }
        else {
          l_w_operating = l_w - 13;
          rcord = parseFloat(tyosto_array[j].style.right);
          realshicord_l = ((-1) * (rcord - l_w_operating)) - 1;
          console.log("l_w: " + l_w);
          console.log("rcord: " + rcord);
          console.log("realshicord_l: " + realshicord_l);
          tyosto_array[j].style.left = realshicord_l + "px";
          // tyosto_array[j].querySelector("input").value =  realshicord_l *5;
          // tyosto_array[j].style.background = "black";
          tyosto_array[j].style.right = "unset";
          console.log("right detected");
        }
      }
      else if (parseFloat(tyosto_array[j].style.top) > 1) {
        if (tyosto_array[j].classList.contains("alku__tyosto_vaaka") || tyosto_array[j].classList.contains("viim__tyosto_vaaka")) {

        }
        else {
          l_h_operating = l_h - 13;
          tcord = parseFloat(tyosto_array[j].style.top);
          realshicord_h = ((-1) * (tcord - l_h_operating)) - 1;
          console.log("l_h: " + l_h);
          console.log("tcord: " + tcord);
          console.log("realshicord_h: " + realshicord_h);
          tyosto_array[j].style.bottom = realshicord_h + "px";

          tyosto_array[j].style.top = "unset";
        }

        // l_h = parseFloat(levy.style.height);
        // hcord = parseFloat(tyosto_array[j].style.top);
        // realshicord_h = l_h - hcord;
        // tyosto_array[j].style.bottom = realshicord_h + "px";
        // tyosto_array[j].style.top = "unset";
        // console.log("top detected");
      }
    }
    sortedtyosto_array = Array.from(tyosto_array).sort((a, b) => {
      const leftA = parseInt(a.style.left);
      const leftB = parseInt(b.style.left);
      return leftA - leftB;
    });
    for (var j = 0; j < sortedtyosto_array.length; j++) {
      levy_tyostot_x[i].prepend(sortedtyosto_array[j]);
    }
  }
  for (var i = levy_tyostot_y.length - 1; i >= 0; i--) {
    tyosto = levy_tyostot_y[i].querySelectorAll(".tyostot__tyosto");
    tyosto_array = [];
    for (var j = tyosto.length - 1; j >= 0; j--) {
      tyosto_array.push(tyosto[j]);
      tyosto[j].remove();
    }
    for (var j = tyosto_array.length - 1; j >= 0; j--) {
      if (parseFloat(tyosto_array[j].style.left) > 1) {
        console.log("left detected");
      }
      else if (parseFloat(tyosto_array[j].style.right) > 1) {
        l_w = parseFloat(levy.style.width);
        rcord = parseFloat(tyosto_array[j].style.right);
        realshicord_l = l_w - rcord;
        tyosto_array[j].style.left = realshicord_l + "px";
        tyosto_array[j].style.right = "unset";
        // tyosto_array[j].style.background = "black";
        console.log("right detected");
      }
      else if (parseFloat(tyosto_array[j].style.top) > 1) {
        l_h = parseFloat(levy.style.height);
        hcord = parseFloat(tyosto_array[j].style.top);
        realshicord_h = l_h - hcord;
        tyosto_array[j].style.bottom = realshicord_h + "px";
        tyosto_array[j].style.top = "unset";
        console.log("top detected");
      }
    }
    sortedtyosto_array = Array.from(tyosto_array).sort((a, b) => {
      const bottomA = parseInt(a.style.bottom);
      const bottomB = parseInt(b.style.bottom);
      return bottomA - bottomB;
    });
    for (var j = 0; j < sortedtyosto_array.length; j++) {
      levy_tyostot_y[i].prepend(sortedtyosto_array[j]);
    }
  }
  title = levy.title;
  k_min_h = parseFloat(document.querySelector("#p_two").value);
  k_min_w = parseFloat(document.querySelector("#v_two").value);
  kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");
  t_ = title.split(",");
  for (var i = 0; i < kiinnikkeet.length; i++) {
    if (parseFloat(kiinnikkeet[i].style.bottom) > parseFloat(kiinnikkeet[i].parentElement.parentElement.style.height) - 5) {
      kiinnikkeet[i].remove();
    }
  }
  kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");
  if (parseFloat(t_[0]) < k_min_h) {
    console.log("IJJJ: " + parseFloat(t_[0]) + " DD " + k_min_h);
    for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
      if (kiinnikkeet[i].classList.contains("no_siirto") !== true && kiinnikkeet[i].classList.contains("tyostot__tyosto_pysty") === true) {
        kiinnikkeet[i].remove();
        console.log("OK");
      }
      else {
        console.log("OK");
        // kiinnikkeet[i].remove();
      }
    }
  }
  if (parseFloat(t_[1]) < k_min_w) {
    console.log("IJJJ: " + parseFloat(t_[1]) + " DD " + k_min_w);
    for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
      if (kiinnikkeet[i].classList.contains("no_siirto") !== true && kiinnikkeet[i].classList.contains("tyostot__tyosto_vaaka") === true) {
        kiinnikkeet[i].remove();
        console.log("OK");
      }
      else {
        console.log("OK");
        // kiinnikkeet[i].remove();
      }
    }
  }
  levy_width = t_[0] / 5;
  levy_height = t_[1] / 5;
  kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");
  for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
    if (kiinnikkeet[i].parentElement) { }
    if (kiinnikkeet[i].parentElement.querySelector(".tyostot__tyosto_vaaka")) {
      kiinnike_input_y = kiinnikkeet[i].parentElement.querySelectorAll(".tyostot__tyosto_vaaka");
      console.log("Y " + kiinnike_input_y.innerHTML);
      for (var y = kiinnike_input_y.length - 1; y >= 0; y--) {
        k_input = kiinnike_input_y[y].querySelectorAll("input");
        for (var k = k_input.length - 1; k >= 0; k--) {
          // console.log("k_input: " + k_input[k].value);
          if (parseFloat(k_input[k].value) < 0) {
            oldvalue = k_input[k].value;
            newvalue = parseFloat(document.querySelector("#p_target").value) + parseFloat(oldvalue);
            k_input[k].value = newvalue;
          }
        }
        console.log("k_input: " + k_input);
        // if(parseFloat(k_input)<0) {
        //   alert(k_input);
        //   // parseFloat(document.querySelector("#p_target"))-parseFloat(k_input);
        //   // k_input.remove();
        // }
      }
    }
    if (kiinnikkeet[i].parentElement.querySelector(".tyostot__tyosto_pysty")) {
      kiinnike_input_x = kiinnikkeet[i].parentElement.querySelectorAll(".tyostot__tyosto_pysty");
      for (var x = kiinnike_input_x.length - 1; x >= 0; x--) {
        k_input = kiinnike_input_x[x].querySelectorAll("input");
        for (var k = k_input.length - 1; k >= 0; k--) {
          // console.log("k_input: " + k_input[k].value);
          if (parseFloat(k_input[k].value) < 0) {
            oldvalue = k_input[k].value;
            newvalue = parseFloat(document.querySelector("#v_target").value) + parseFloat(oldvalue);
            k_input[k].value = newvalue;
          }
        }
      }
    }
    if (parseFloat(kiinnikkeet[i].style.left) > levy_width) {
      kiinnikkeet[i].parentElement.remove();
    }
    if (parseFloat(kiinnikkeet[i].style.bottom) > levy_height) {
      kiinnikkeet[i].parentElement.remove();
    }

    

    
    boxHeight = parseFloat(document.querySelector('#box-wrapper > main').offsetHeight);
    boxWidth = parseFloat(document.querySelector('#box-wrapper > main').offsetWidth);
    leftend = parseFloat(document.querySelector(".drawarea__right").getBoundingClientRect().left) - 55;
    bottomend = 999; // old
    p_bottomend = 999;
    t_input = canvas.querySelectorAll(".tyostot__tyosto");
    for (var i = t_input.length - 1; i >= 0; i--) {
      if (t_input[i].querySelector("input")) {
        input = t_input[i].querySelector("input");

        input__left = parseFloat(input.getBoundingClientRect().left);
        input__bottom = parseFloat(input.getBoundingClientRect().top);
        p_input__left = parseFloat(input.parentElement.getBoundingClientRect().left);
        p_input__bottom = parseFloat(input.parentElement.getBoundingClientRect().top);


        if (p_input__bottom < p_bottomend || p_input__left > leftend && input__bottom < bottomend || input__left > leftend) {
          input.parentElement.classList.add("levy_blessedcord");
        }
        else {
          input.remove();
        }
      }
    }
    levy_tyostot_y = levy.querySelector(".levy_tyostot_y");
    if (levy_tyostot_y.querySelectorAll("div").length == 2 || levy_tyostot_y.querySelector("input")) {
      i_s = levy_tyostot_y.querySelectorAll("input");
      console.log(i_s);
      for (var j = i_s.length - 1; j >= 0; j--) {
        if (parseFloat(i_s[j].value) < 0) {
          i_s[j].value = parseFloat(levy_tyostot_y.parentElement.title.split(",")[1]) - (s_ar + s_yr);
        }
      }
    }
  }

  
  tyostot__tyosto_vaaka = canvas.querySelectorAll(".tyostot__tyosto_vaaka");
  for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
    if (tyostot__tyosto_vaaka[i].querySelector(".secondcord")) { }
    else {
      if (tyostot__tyosto_vaaka[i].querySelector("input")) {
        // levy_tyostot_y[i].querySelectorAll("input");
        secondcord = document.createElement("input");
        secondcord.type = "text";
        secondcord.classList.add("secondcord");
        secondcord.setAttribute("onclick", "clearcord(this,'tyo');");
        // secondcord.setAttribute("onchange", "change__tyostocord(this,2)");
        secondcord.value = parseFloat(tyostot__tyosto_vaaka[i].style.bottom) * 5;
        secondcord.dataset.from = parseFloat(tyostot__tyosto_vaaka[i].style.bottom) * 5;
        tyostot__tyosto_vaaka[i].append(secondcord);
      }
    }
    if (tyostot__tyosto_vaaka[i].querySelector("input")) {
      if (tyostot__tyosto_vaaka[i].classList.contains("viim__tyosto_vaaka") || tyostot__tyosto_vaaka[i].classList.contains("alku__tyosto_vaaka")) {

      }
      else if (parseFloat(tyostot__tyosto_vaaka[i].querySelector("input").value) < 100) {
        tyostot__tyosto_vaaka[i].remove();
        // alert("Alle 100mm Työstö poistettu piirtoalueelta");
      }
    }

  }
  tyostot__tyosto_pysty = canvas.querySelectorAll(".tyostot__tyosto_pysty");
  for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
    if (tyostot__tyosto_pysty[i].querySelector(".secondcord")) { }
    else {
      if (tyostot__tyosto_pysty[i].querySelector("input")) {
        secondcord = document.createElement("input");
        secondcord.type = "text";
        secondcord.classList.add("secondcord");
        secondcord.setAttribute("onclick", "clearcord(this,'tyo');");
        // secondcord.setAttribute("onchange", "change__tyostocord(this,2)");
        secondcord.value = parseFloat(tyostot__tyosto_pysty[i].style.left) * 5;
        secondcord.dataset.from = parseFloat(tyostot__tyosto_pysty[i].style.left) * 5;
        tyostot__tyosto_pysty[i].append(secondcord);
      }
    }
    // if (tyostot__tyosto_pysty[i].querySelector("input")) {
    //   if (tyostot__tyosto_pysty[i].classList.contains("viim__tyosto_pysty") || tyostot__tyosto_pysty[i].classList.contains("alku__tyosto_pysty")) {

    //   }
    //   else if (parseFloat(tyostot__tyosto_pysty[i].querySelector("input").value) < 100) {
    //     tyostot__tyosto_pysty[i].remove();
    //     alert("Alle 100mm Työstö poistettu piirtoalueelta");
    //   }
    // }


  }
  // item = levy;
  // countdown__kiinnikkeet(item);

  t3 = canvas.querySelectorAll(".secondcord");
  for (var s = t3.length - 1; s >= 0; s--) {
    if (t3[s].parentElement.classList.contains("tyostot__tyosto_pysty")) {
      t3[s].style.top = 30 + ((parseFloat(drawarea.style.height))) + "px";
      t3[s].style.position = "absolute";
    }
    if (t3[s].parentElement.classList.contains("tyostot__tyosto_vaaka")) {
      // t3[s].style.left = 10 + (-0.9) * ((parseFloat(drawarea.style.width))) + "px";
      t3[s].style.right = 30 + ((parseFloat(drawarea.style.width))) + "px";
      t3[s].style.position = "absolute";
    }
  }
}

function getElementIndex(element) {
  return Array.from(element.parentNode.children).indexOf(element);
}

function tyosto__del(item) {

  if(item.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains("modal")) {
    thistyosto = item.parentElement;
    thistyosto.remove();
  }

  console.log(" tyosto__del(item) fired");
  try {
    c_kiinnikkeet = canvas.querySelectorAll(".tyostot__tyosto");
    thistyosto = item.parentElement;

    current_delete_tyosto = getElementIndex(thistyosto);
    deleted_tyosto_value = parseFloat(item.parentElement.querySelector("input:not(.secondcord):not(temp_input_last)").value);

    console.log("current_delete_tyosto: "+current_delete_tyosto);
    if (thistyosto.classList.contains("tyostot__tyosto_pysty")) {
      thisinput_l = parseFloat(thistyosto.getBoundingClientRect().left);
      console.log("thisinput_l: " + thisinput_l);
      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        console.log("c_kiinnikkeet " + parseFloat(c_kiinnikkeet[i].getBoundingClientRect().left));
        if (Math.round(thisinput_l) == Math.round(parseFloat(c_kiinnikkeet[i].getBoundingClientRect().left))) {
          c_kiinnikkeet[i].remove();
        }
      }

      tomodify_cord = document.querySelectorAll(".tyostot__tyosto_pysty")[current_delete_tyosto-1];
      get__that_cordinput = identify__sameline(tomodify_cord,"x");
    }
    else if (thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
      thisinput_b = parseFloat(thistyosto.getBoundingClientRect().bottom);
      console.log("thisinput_b: " + thisinput_b);
      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        console.log("c_kiinnikkeet Btm" + parseFloat(c_kiinnikkeet[i].getBoundingClientRect().bottom));
        if (Math.trunc(thisinput_b) == Math.trunc(parseFloat(c_kiinnikkeet[i].getBoundingClientRect().bottom))) {
          c_kiinnikkeet[i].remove();
        }
      }
      tomodify_cord = document.querySelectorAll(".tyostot__tyosto_vaaka")[current_delete_tyosto-1];
      get__that_cordinput = identify__sameline(tomodify_cord,"y");
    }
    get__that_cordinput.forEach(g => {
      if(g.querySelector("input:not(.secondcord)")) {
        tomod_input = g.querySelector("input:not(.secondcord)");
        tomod_inputcur_value = parseFloat(tomod_input.value);
        tomod_input.value = deleted_tyosto_value + tomod_inputcur_value;
        tomod_input.dataset.from = deleted_tyosto_value + tomod_inputcur_value;
      }
    });
  } catch {
    console.log("canvas is not set");
  }

  t_levys = canvas.querySelectorAll(".levy");

  for (var i = t_levys.length - 1; i >= 0; i--) {
    countdown__kiinnikkeet(t_levys[i]);
  }
}
if (document.querySelector("#drawscreen_section_five .levy")) {
  // document.querySelector("#drawscreen_section_five .visible").classList.remove("levy");
}


function change__levykiinnike(argument) {
  console.log("change__levykiinnike(argument) fired");
  let tyostot = document.querySelectorAll(".levy_input");
  for (var i = 0; i < tyostot.length; i++) {
    var tyosto_id = tyostot[i].getAttribute("id");
    if (tyosto_id == 'k_yrmod' || tyosto_id == 'k_yrlevy') {
      tyostot[i].parentElement.style.marginTop = -(8 / 5) + parseFloat(tyostot[i].value) / 5 + "px";
      document.querySelector("#settings__levy_yr_arvo").value = document.querySelector("#k_yrlevy").value;
    }
    else if (tyosto_id == 'k_armod' || tyosto_id == 'k_arlevy') {
      tyostot[i].parentElement.style.marginTop = -(8 / 5) + parseFloat((-1) * parseFloat(tyostot[i].value) / 5) + "px";
      document.querySelector("#settings__levy_ar_arvo").value = document.querySelector("#k_arlevy").value;
    }
    else if (tyosto_id == 'k_ormod' || tyosto_id == 'k_orlevy') {
      tyostot[i].parentElement.style.marginLeft = -(8 / 5) + parseFloat((-1) * parseFloat(tyostot[i].value) / 5) + "px";
      document.querySelector("#settings__levy_or_arvo").value = document.querySelector("#k_orlevy").value;
    }
    else if (tyosto_id == 'k_vrmod' || tyosto_id == 'k_vrlevy') {
      tyostot[i].parentElement.style.marginLeft = -(8 / 5) + parseFloat(tyostot[i].value) / 5 + "px";
      document.querySelector("#settings__levy_or_arvo").value = document.querySelector("#k_vrlevy").value;
    }
  }
}

function reorganise__newtyosto() {
  console.log("reorganise__newtyosto() fired");
  t1 = canvas.querySelectorAll(".x_cord");
  // for (var i = t1.length - 1; i >= 0; i--) {
  //   t1[i].remove();
  // }
  t2 = canvas.querySelectorAll(".x_cord_mki");
  // for (var i = t2.length - 1; i >= 0; i--) {
  //   t2[i].remove();
  // }

  t3 = canvas.querySelectorAll(".secondcord");
  // for (var i = t3.length - 1; i >= 0; i--) {
  //   t3[i].style.opacity = 0;
  // }

  t4 = canvas.querySelectorAll(".x_del");
  // for (var i = t4.length - 1; i >= 0; i--) {
  //   t4[i].remove();
  // }

  setTimeout(() => {
    console.log("Delayed for 1 second.");
    // k_levys = canvas.querySelectorAll(".levy");
    for (var i = k_levys.length - 1; i >= 0; i--) {
      give__tyosto_cord(k_levys[i]);
      countdown__kiinnikkeet(k_levys[i]);
    }
  }, 100);





  c_levy = canvas.querySelectorAll(".levy");
  len = c_levy.length;
  lenx = 0;
  leny = 0;
  levy_array_pysty = [];
  levy_array_vaaka = [];

  for (let i = 0; i < c_levy.length; i++) {
    c_lev_y = c_levy[i].querySelectorAll(".levy_tyostot_x > div");
    c_lev_x = c_levy[i].querySelectorAll(".levy_tyostot_y > div");

    for (var c = c_lev_x.length - 1; c >= 0; c--) {
      if (parseFloat(c_lev_x[c].style.bottom) > 1) {
        xord = parseFloat(c_lev_x[c].style.bottom) + parseFloat(c_lev_x[c].parentElement.parentElement.style.bottom);
        levy_array_pysty.push(xord);
      }
      else if (parseFloat(c_lev_x[c].style.top) > 1) {
        bottomshi = parseFloat(c_lev_y[c].parentElement.parentElement.style.height) - parseFloat(c_lev_y[c].style.top);
        xord = parseFloat(bottomshi) + parseFloat(c_lev_y[c].parentElement.parentElement.style.bottom);
        levy_array_vaaka.push(xord);
      }

    }
    for (var c = c_lev_y.length - 1; c >= 0; c--) {
      if (parseFloat(c_lev_y[c].style.left) > 1) {
        xord = parseFloat(c_lev_y[c].style.left) + parseFloat(c_lev_y[c].parentElement.parentElement.style.left);
        levy_array_vaaka.push(xord);
      }
      else if (parseFloat(c_lev_y[c].style.right) > 1) {
        leftshi = parseFloat(c_lev_y[c].parentElement.parentElement.style.width) - parseFloat(c_lev_y[c].style.right);
        xord = parseFloat(leftshi) + parseFloat(c_lev_y[c].parentElement.parentElement.style.left);
        levy_array_vaaka.push(xord);
      }


    }
    // levy_array_pysty.push(parseFloat(c_levy[i].querySelector(".levy_tyostot_y .tyostot__tyosto").getBoundingClientRect().bottom));
    // levy_array_vaaka.push(parseFloat(c_levy[i].querySelector(".levy_tyostot_x .tyostot__tyosto").getBoundingClientRect().left));

    lenx += c_lev_x.length;
    leny += c_lev_y.length;
  }

  d_l = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left");
  d_b = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom");
  d_t = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__top");
  d_r = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__right");

  d_l_tyosto = d_l.querySelectorAll(".aukko__cord");
  d_b_tyosto = d_b.querySelectorAll(".aukko__cord");
  d_t_tyosto = d_t.querySelectorAll(".aukko__cord");
  d_r_tyosto = d_r.querySelectorAll(".aukko__cord");

  for (var i = d_l_tyosto.length - 1; i >= 0; i--) {
    d_l_tyosto[i].remove();
  }

  for (var i = d_b_tyosto.length - 1; i >= 0; i--) {
    d_b_tyosto[i].remove();
  }
  for (var i = d_t_tyosto.length - 1; i >= 0; i--) {
    d_t_tyosto[i].remove();
  }
  for (var i = d_r_tyosto.length - 1; i >= 0; i--) {
    d_r_tyosto[i].remove();
  }
  uniq = [...new Set(levy_array_pysty)];
  uniq_v = [...new Set(levy_array_vaaka)];

  uniqv_array = Array.from(uniq_v).sort((a, b) => {
    const leftA = parseInt(a);
    const leftB = parseInt(b);
    return leftA - leftB;
  });

  uniq_array = Array.from(uniq).sort((a, b) => {
    const leftA = parseInt(a);
    const leftB = parseInt(b);
    return leftA - leftB;
  });

  for (var i = 0; i < uniqv_array.length; i++) {
    luku = parseFloat(uniqv_array[i]);
    luku_ = (luku * 5);

    if (uniqv_array[i] === "NaN") {

    }
    else {
      // t_luku = document.createElement("input");
      // t_luku.classList.add("aukko__cord");
      // t_luku.classList.add("lineinput");
      // t_luku.classList.add("aukko__cord_small");
      // t_luku.value = luku_;
      // t_luku.setAttribute("onclick", "clearcord(this,'tyo');");
      // if(isEven(i)) {
      //   t_luku.classList.add("aukko__cord_lower");
      // }

      // t_luku.style.left = (-10 + (parseFloat(luku_)/5)) + "px";
      // d_b.prepend(t_luku);


    }

  }

  for (var i = 0; i < uniq_array.length; i++) {
    luku = parseFloat(uniq_array[i]);
    luku_ = (luku * 5);

    if (uniqv_array[i] === "NaN") {

    }
    else {

      t_luku = document.createElement("input");
      t_luku.classList.add("aukko__cord");
      t_luku.classList.add("lineinput");
      t_luku.classList.add("aukko__cord_small");
      if (isEven(i)) {
        t_luku.classList.add("aukko__cord_lower");
      }
      t_luku.value = luku_;
      t_luku.setAttribute("onclick", "clearcord(this,'tyo');");

      t_luku.style.bottom = (-4 + (parseFloat(luku_) / 5)) + "px";
      // d_l.prepend(t_luku);
    }
  }


  sauma__controls = canvas.querySelectorAll(".sauma__controls");

  for (var i = 0; i < sauma__controls.length; i++) {
    sauma__controls[i].style.opacity = 0;
    sauma__controls[i].style.zIndex = "-1";
    sauma__controls[i].style.display = "none";
  }



  

  //20/04 secondcord fix

  p_s = document.querySelectorAll(".tyostot__tyosto_pysty .secondcord");
  for (var i = 0; i < p_s.length; i++) {
    z_cord = parseFloat(p_s[i].parentElement.parentElement.parentElement.style.left);
    y_cord = parseFloat(p_s[i].parentElement.style.left);
    p_s[i].value = (z_cord + y_cord) * 5;
  }
  v_s = document.querySelectorAll(".tyostot__tyosto_vaaka .secondcord");
  for (var i = 0; i < v_s.length; i++) {
    z_cord = parseFloat(v_s[i].parentElement.parentElement.parentElement.style.bottom);
    y_cord = parseFloat(v_s[i].parentElement.style.bottom);
    v_s[i].value = (z_cord + y_cord) * 5;
  }



  k_levys = canvas.querySelectorAll(".levy");

  for (var i = 0; i < k_levys.length; i++) {

    // The item (or items) to press and hold on
    let item = k_levys[i].querySelector("b");

    let timerID;
    let counter = 0;

    let pressHoldEvent = new CustomEvent("pressHold");

    // Increase or decreae value to adjust how long
    // one should keep pressing down before the pressHold
    // event fires
    let pressHoldDuration = 1;

    // Listening for the mouse and touch events    
    // item.addEventListener("mousedown", pressingDown, false);
    // item.addEventListener("mouseup", notPressingDown, false);
    // item.addEventListener("mouseleave", notPressingDown, false);

    // item.addEventListener("touchstart", pressingDown, false);
    // item.addEventListener("touchend", notPressingDown, false);

    // Listening for our custom pressHold event
    item.addEventListener("touchstart", open_levy, true);
    item.addEventListener("click", open_levy, true);

    // function pressingDown(e) {
    //   // Start the timer
    //   requestAnimationFrame(timer);

    //   e.preventDefault();

    //   console.log("Pressing!");
    // }

    // function notPressingDown(e) {
    //   // Stop the timer
    //   cancelAnimationFrame(timerID);
    //   counter = 0;

    //   console.log("Not pressing!");
    // }

    // function timer() {
    //   console.log("Timer tick!");

    //   if (counter < pressHoldDuration) {
    //     timerID = requestAnimationFrame(timer);
    //     counter++;
    //   } else {
    //     item.dispatchEvent(pressHoldEvent);
    //   }
    // }

    function open_levy(e) {
      if (input_step !== "drawscreen_section_five") {
        return;
      }
      console.log("open_levy event fired!");

      pressed__levy = item;
      open_ltladonta_settings(true, pressed__levy);

      realinputs = pressed__levy.parentElement.querySelectorAll("input");
      for (var c = realinputs.length - 1; c >= 0; c--) {
        if (realinputs[c].classList.contains('temp_input') === true) {
          realinputs[c].remove();
        }
        else {
          realinputs[c].style.display = "none";
        }
      }

      document.querySelector(".levymodal__levyname").innerHTML = pressed__levy.innerText;
      reset__ltlevy_cords(pressed__levy.parentElement);

    }

  }

  removeduplicatecords__adjustcords();
}

function reset__ltlevy_cords(levy) {
    vis_levy = document.querySelector("#drawscreen_section_five > div#levytyosto_container.two div.visible.levy_vis.lt_levy_vis");
    realinputs = vis_levy.querySelectorAll("input");
    tyostot_oikeat = [];
    for (var c = realinputs.length - 1; c >= 0; c--) {
      realinputs[c].remove();
    }
    pystyt = vis_levy.querySelector(".levy_tyostot_x");
    vaat = vis_levy.querySelector(".levy_tyostot_y");
    pystyt_tyostot = pystyt.querySelectorAll(".tyostot__tyosto");
    vaat_tyostot = vaat.querySelectorAll(".tyostot__tyosto");
    pysty_tsumm = 0;
    vaaka_tsumm = 0;
    for (var i = pystyt_tyostot.length - 1; i >= 0; i--) {
      temp_input = document.createElement("input");
      temp_input.classList.add("temp_input");
      temp_input.setAttribute("onchange", "change__tyostocord(this,1," + pysty_event + ");");
      temp_input.setAttribute("onclick", "clearcord(this,'tyo');");
      pystyt_tyostot[i].appendChild(temp_input);

      real_cord = parseFloat(pystyt_tyostot[i].style.left) * 5 - pysty_tsumm;
      //console.log("real_cord " + real_cord);
      if (pystyt_tyostot[i].classList.contains("alku__tyosto_pysty")) {
        pystyt_tyostot[i].querySelector("input").value = parseFloat(pystyt_tyostot[i].style.left) * 5;
        pystyt_tyostot[i].querySelector("input").dataset.from = parseFloat(pystyt_tyostot[i].style.left) * 5;
      }
      else if (pystyt_tyostot[i].classList.contains("viim__tyosto_pysty") !== true) {
        real_cord = parseFloat(pystyt_tyostot[i].style.left) * 5 - pysty_tsumm;
        pystyt_tyostot[i].querySelectorAll("input")[0].value = real_cord;
        pystyt_tyostot[i].querySelectorAll("input")[0].dataset.from = real_cord;
      }
      else {
        real_cord = parseFloat(levy.title.split(",")[0]) - s_vr;
        last_cord = real_cord - pysty_tsumm;
        pystyt_tyostot[i].querySelectorAll("input")[0].value = s_vr;
        pystyt_tyostot[i].querySelectorAll("input")[0].dataset.from = s_vr;
        pystyt_tyostot[i].querySelectorAll("input")[0].value = s_vr;
        pystyt_tyostot[i].querySelectorAll("input")[0].dataset.from = s_vr;

        temp_input_last = document.createElement("input");
        temp_input_last.classList.add("temp_input");
        temp_input_last.classList.add("temp_input_last");
        temp_input_last.setAttribute("onchange", "alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')");
        temp_input_last.setAttribute("onclick", "clearcord(this,'tyo');");
        pystyt_tyostot[i].appendChild(temp_input_last);


        temp_input_last.value = last_cord;
        temp_input_last.dataset.from = last_cord;
      }
      if (pystyt_tyostot[i].querySelector(".thirdcord")) {
        pystyt_tyostot[i].querySelector(".thirdcord").innerHTML = parseFloat(pystyt_tyostot[i].style.left) * 5;
        pystyt_tyostot[i].querySelector(".thirdcord").dataset.from = parseFloat(pystyt_tyostot[i].style.left) * 5;
        pystyt_tyostot[i].querySelector(".thirdcord").style.display = "block";
      }
      else {
        thirdcord = document.createElement("div");
        thirdcord.style.display = "block";
        thirdcord.classList.add("thirdcord");
        thirdcord.setAttribute("onclick", "clearcord(this,'tyo');");
        thirdcord.innerHTML = parseFloat(pystyt_tyostot[i].style.left) * 5;
        thirdcord.dataset.from = parseFloat(pystyt_tyostot[i].style.left) * 5;
        pystyt_tyostot[i].append(thirdcord);
        
      }
      pysty_tsumm += real_cord;

    }
    for (var i = vaat_tyostot.length - 1; i >= 0; i--) {
      temp_input = document.createElement("input");
      temp_input.classList.add("temp_input");
      temp_input.setAttribute("onchange", "change__tyostocord(this,1," + vaaka_event + ");");
      temp_input.setAttribute("onclick", "clearcord(this,'tyo');");
      vaat_tyostot[i].appendChild(temp_input);
      real_cord_vaaka = parseFloat(vaat_tyostot[i].style.bottom) * 5 - vaaka_tsumm;
      //console.log("real_cord " + real_cord);
      if (vaat_tyostot[i].classList.contains("alku__tyosto_vaaka")) {
        vaat_tyostot[i].querySelector("input").value = parseFloat(vaat_tyostot[i].style.bottom) * 5;
        vaat_tyostot[i].querySelector("input").dataset.from = parseFloat(vaat_tyostot[i].style.bottom) * 5;
      }
      else if (vaat_tyostot[i].classList.contains("viim__tyosto_vaaka") !== true) {
        real_cord_vaaka = parseFloat(vaat_tyostot[i].style.bottom) * 5 - vaaka_tsumm;
        vaat_tyostot[i].querySelectorAll("input")[0].value = real_cord_vaaka;
        vaat_tyostot[i].querySelectorAll("input")[0].dataset.from = real_cord_vaaka;
      }
      else {
        real_cord_vaaka = parseFloat(levy.title.split(",")[1]) - s_ar;
        last_cord_vaaka = real_cord_vaaka - vaaka_tsumm;
        vaat_tyostot[i].querySelectorAll("input")[0].value = s_ar;
        vaat_tyostot[i].querySelectorAll("input")[0].dataset.from = s_ar;

        temp_input_last = document.createElement("input");
        temp_input_last.classList.add("temp_input");
        temp_input_last.classList.add("temp_input_last");
        temp_input_last.setAttribute("onchange", "alert('Häntä- ja äärikiinnikekoordinaatit ovat kovakoodattuja . Kokeile muokata toista levyn koordinaattia')");
        temp_input_last.setAttribute("onclick", "clearcord(this,'tyo');");
        vaat_tyostot[i].appendChild(temp_input_last);


        temp_input_last.value = last_cord_vaaka;
        temp_input_last.dataset.from = last_cord_vaaka;
      }
      if (vaat_tyostot[i].querySelector(".thirdcord")) {
        vaat_tyostot[i].querySelector(".thirdcord").innerHTML = parseFloat(vaat_tyostot[i].style.bottom) * 5;
        vaat_tyostot[i].querySelector(".thirdcord").dataset.from = parseFloat(vaat_tyostot[i].style.bottom) * 5;
        vaat_tyostot[i].querySelector(".thirdcord").style.display = "block";
      }
      else {
        thirdcord = document.createElement("div");
        thirdcord.classList.add("thirdcord");
        thirdcord.style.display = "block";
        thirdcord.setAttribute("onclick", "clearcord(this,'tyo');");
        // secondcord.setAttribute("onchange", "change__tyostocord(this,2)");
        thirdcord.innerHTML = parseFloat(vaat_tyostot[i].style.bottom) * 5;
        thirdcord.dataset.from = parseFloat(vaat_tyostot[i].style.bottom) * 5;
        vaat_tyostot[i].append(thirdcord);
      }

     
      vaaka_tsumm += real_cord_vaaka;
    }

    realinputs = levy.querySelectorAll("input");
}

function open_ltladonta_settings(e, levy) {

  console.log("open_ltladonta_settings(" + e + "," + levy + ") ");
  ltcontainer = document.querySelector("#levytyosto_container");

  if (e === true) {
    reverse_w = 0;
    reverse_h = 0;
    addedside_w = 0;
    addedside_h = 0;
    ltcontainer.classList.add("two");
    l_title = levy.parentElement.title.split(",");

    levy_ = document.querySelector("div.levytyosto_container.two div.visible.levy_vis.lt_levy_vis");

    levy_.innerHTML = levy.parentElement.innerHTML;
    ltcontainer.querySelector(".lt_levy_vis").style.height = parseFloat(levy.parentElement.style.height) + "px";
    ltcontainer.querySelector(".lt_levy_vis").style.width = parseFloat(levy.parentElement.style.width) + "px";


    ltcontainer.querySelector(".levytyosto__maincol_y").style.height = parseFloat(levy.parentElement.style.height) + "px";
    ltcontainer.querySelector(".levytyosto__maincol_x").style.width = parseFloat(levy.parentElement.style.width) + "px";
    ltcontainer.querySelector(".levytyosto__maincol_x").style.marginTop = parseFloat(levy.parentElement.style.height) + 40 + "px";

    ltcontainer.querySelector(".lt_levy_vis").title = levy.parentElement.title;

    if (document.querySelector(".dir_y")) {
      levy_.classList.remove("dir_x");
      levy_.classList.add("dir_y");
    }

    else if (document.querySelector(".dir_x")) {
      levy_.classList.remove("dir_y");
      levy_.classList.add("dir_x");
    }

    levy_.dataset.levy = levy.parentElement.dataset.levy;


    setTimeout(() => {
      realinputs = ltcontainer.parentElement.querySelectorAll("input");

      for (var c = realinputs.length - 1; c >= 0; c--) {
        if (realinputs[c].classList.contains('temp_input') !== true) {
          realinputs[c].style.display = "none";
        }
        else {
          realinputs[c].style.display = "none";
        }

        thirdcord = ltcontainer.parentElement.querySelectorAll(".thirdcord");
        
        for (var c = thirdcord.length - 1; c >= 0; c--) {
          thirdcord[c].style.display = "none";
        }
      }
      document.querySelectorAll(".levy__label")[0].click();

    }, 650);

    old_w = parseFloat(levy_.style.width);
    old_h = parseFloat(levy_.style.height);



  }
  else if (e === false) {
    levy_ = document.querySelector("div#levytyosto_container.two div.visible.levy_vis.lt_levy_vis");

    ltcontainer = document.querySelector("#levytyosto_container");
    ltcontainer.classList.remove("two");
    number = levy_.dataset.levy;


    



    reorganise__newtyosto_levy(pressed__levy);

    give__tyosto_cord(pressed__levy.parentElement);
    countdown__kiinnikkeet(pressed__levy.parentElement);

    pressed__levy = null;
    document.querySelector("#levyn_mitat_1").checked = false;
    document.querySelector("#levy_ruuvit_1").checked = false;
    document.querySelector("#levy_ruuvit_2").checked = false;

    x_cords = canvas.querySelectorAll(".x_cord");
    for (let i = 0; i < x_cords.length; i++) {
      x_cords[i].style.display = 'none';
    }

    temp_inputs = canvas.querySelectorAll(".temp_input");
    for (let i = 0; i < temp_inputs.length; i++) {
      temp_inputs[i].style.display = 'none';
    }

    thirdcords = canvas.querySelectorAll(".thirdcord");
    for (let i = 0; i < thirdcords.length; i++) {
      thirdcords[i].style.display = 'none';
    }

    x_cord_mkis = canvas.querySelectorAll(".x_cord_mki");
    for (let i = 0; i < x_cord_mkis.length; i++) {
      x_cord_mkis[i].style.display = 'none';
    }

    x_dels = canvas.querySelectorAll(".x_del");
    for (let i = 0; i < x_dels.length; i++) {
      x_dels[i].style.display = 'none';
    }

    

    if (document.querySelector("#levy__adding_3")) {
      for (let d = 0; d < 3; d++) {
        addingval = document.querySelector("#levy__adding_") + d;
        addingval.value = 0;
        document.querySelector("#levy_vari_" + d).checked = false;
        document.querySelector("#c").checked = false;
        document.querySelector("#levy_ruuvit_1").checked = false;
        document.querySelector("#levy_ruuvit_2").checked = false;

        levy__interaction(3, document.querySelector("#levyn_mitat_1 + label"));
        levy__interaction(2, document.querySelector("#levy_ruuvit_1 + label"));
        levy__interaction(2, document.querySelector("#levy_ruuvit_2 + label"));
        levy_example.style.border = "unset";
        

      }

    }
    levys = canvas.querySelectorAll(".levy");
    for (var i = 0; i < levys.length; i++) {
      if (levys[i].dataset.levy == number) {
        levys[i].style.backgroundImage = levy_.style.backgroundImage;
         levys[i].dataset.sku = levy_.dataset.sku; 
         levys[i].dataset.thickness = levy_.dataset.thickness; 
         levys[i].dataset.structure = levy_.dataset.structure; 
      }
    }
  }

  function reorganise__newtyosto_levy(levy__to_reorgaise) {
    levy__to_reorgaise.parentElement.querySelector(".levy_tyostot_y").innerHTML = ltcontainer.querySelector(".levy_tyostot_y").innerHTML;
    levy__to_reorgaise.parentElement.querySelector(".levy_tyostot_x").innerHTML = ltcontainer.querySelector(".levy_tyostot_x").innerHTML;
  }
}
function reset_bordercords() {
  pysty_alkutyostot = ltcontainer.querySelectorAll(".alku__tyosto_pysty");
  pysty_viimtyostot = ltcontainer.querySelectorAll(".viim__tyosto_pysty");
  vaaka_alkutyostot = ltcontainer.querySelectorAll(".alku__tyosto_vaaka");
  vaaka_viimtyostot = ltcontainer.querySelectorAll(".viim__tyosto_vaaka");
  for (let a = 0; a < pysty_alkutyostot.length; a++) {
    pysty_alkutyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(e => {
      e.classList.add("hidden");
    });
  }
  for (let a = 0; a < pysty_viimtyostot.length; a++) {
    pysty_viimtyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(e => {
      e.classList.add("hidden");
    });
  }

  for (let a = 0; a < vaaka_alkutyostot.length; a++) {
    vaaka_alkutyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(e => {
      e.classList.add("hidden");
    });
  }
  for (let a = 0; a < vaaka_viimtyostot.length; a++) {
    vaaka_viimtyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(e => {
      e.classList.add("hidden");
    });
  }
}
function countdown__kiinnikkeet(levy) {
  console.log("15-07 LEVY:::" + levy);
  if (levy) {
    if (levy.querySelector(".levy_blessedcord") || levy.classList.contains('visible')) {
      pystyt = levy.querySelector(".levy_tyostot_x");
      vaat = levy.querySelector(".levy_tyostot_y");
      pystyt_tyostot = pystyt.querySelectorAll(".tyostot__tyosto");
      vaat_tyostot = vaat.querySelectorAll(".tyostot__tyosto");
      pysty_tsumm = 0;
      vaaka_tsumm = 0;

      for (var i = pystyt_tyostot.length - 1; i >= 0; i--) {
        if (pystyt_tyostot[i].querySelector("input")) {
          real_cord = parseFloat(pystyt_tyostot[i].style.left) * 5 - pysty_tsumm;
          //console.log("real_cord " + real_cord);
          if (pystyt_tyostot[i].classList.contains("alku__tyosto_pysty")) {
            pystyt_tyostot[i].querySelector("input").value = parseFloat(pystyt_tyostot[i].style.left) * 5;
            pystyt_tyostot[i].querySelector("input").dataset.from = parseFloat(pystyt_tyostot[i].style.left) * 5;
          }
          else if (pystyt_tyostot[i].classList.contains("viim__tyosto_pysty") !== true) {
            real_cord = parseFloat(pystyt_tyostot[i].style.left) * 5 - pysty_tsumm;
            pystyt_tyostot[i].querySelectorAll("input")[0].value = real_cord;
            pystyt_tyostot[i].querySelectorAll("input")[0].dataset.from = real_cord;
          }
          else {
            real_cord = parseFloat(levy.title.split(",")[0]) - parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
            last_cord = real_cord - pysty_tsumm;
            pystyt_tyostot[i].querySelectorAll("input")[0].value = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
            pystyt_tyostot[i].querySelectorAll("input")[0].dataset.from = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
            if(pystyt_tyostot[i].querySelectorAll("input")[1]) {
              pystyt_tyostot[i].querySelectorAll("input")[1].value = last_cord;
              pystyt_tyostot[i].querySelectorAll("input")[1].dataset.from = last_cord;
            }
          }
          if (pystyt_tyostot[i].querySelector("input.secondcord")) {
            pystyt_tyostot[i].querySelector("input.secondcord").value = parseFloat(pystyt_tyostot[i].style.left) * 5 + parseFloat(pystyt_tyostot[i].parentElement.parentElement.style.left) * 5;
            pystyt_tyostot[i].querySelector("input.secondcord").dataset.from = parseFloat(pystyt_tyostot[i].style.left) * 5 + parseFloat(pystyt_tyostot[i].parentElement.parentElement.style.left) * 5;
          }
          pysty_tsumm += real_cord;
        }
      }
      for (var i = vaat_tyostot.length - 1; i >= 0; i--) {
        if (vaat_tyostot[i].querySelector("input")) {
          real_cord_vaaka = parseFloat(vaat_tyostot[i].style.bottom) * 5 - vaaka_tsumm;
          //console.log("real_cord " + real_cord);
          if (vaat_tyostot[i].classList.contains("alku__tyosto_vaaka")) {
            vaat_tyostot[i].querySelector("input").value = parseFloat(vaat_tyostot[i].style.bottom) * 5;
            vaat_tyostot[i].querySelector("input").dataset.from = parseFloat(vaat_tyostot[i].style.bottom) * 5;
          }
          else if (vaat_tyostot[i].classList.contains("viim__tyosto_vaaka") !== true) {
            real_cord_vaaka = parseFloat(vaat_tyostot[i].style.bottom) * 5 - vaaka_tsumm;
            vaat_tyostot[i].querySelectorAll("input")[0].value = real_cord_vaaka;
            vaat_tyostot[i].querySelectorAll("input")[0].dataset.from = real_cord_vaaka;
          }
          else {
            real_cord_vaaka = parseFloat(levy.title.split(",")[1]) - parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
            last_cord_vaaka = real_cord_vaaka - vaaka_tsumm;
            vaat_tyostot[i].querySelectorAll("input")[0].value = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
            vaat_tyostot[i].querySelectorAll("input")[0].dataset.from = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
            if (vaat_tyostot[i].querySelectorAll("input")[1]) {
              vaat_tyostot[i].querySelectorAll("input")[1].value = last_cord_vaaka;
              vaat_tyostot[i].querySelectorAll("input")[1].dataset.from = last_cord_vaaka;
            }

          }
          if (vaat_tyostot[i].querySelector("input.secondcord")) {
            vaat_tyostot[i].querySelector("input.secondcord").value = parseFloat(vaat_tyostot[i].style.bottom) * 5 + parseFloat(vaat_tyostot[i].parentElement.parentElement.style.bottom) * 5;
            vaat_tyostot[i].querySelector("input.secondcord").dataset.from = parseFloat(vaat_tyostot[i].style.bottom) * 5 + parseFloat(vaat_tyostot[i].parentElement.parentElement.style.bottom) * 5;
          }

          vaaka_tsumm += real_cord_vaaka;
        }
      }
    }
    reset_bordercords();
  }
}


function levy__interaction(stage, attr) {
  tyosto__container = document.querySelector("div#levytyosto_container");
  levy_example = tyosto__container.querySelector(".levy_vis");
  current__attribute = attr.getAttribute("for");

  document.querySelector("#levy_vaaka").checked = false;
  document.querySelector("#levy_pysty").checked = false;

  reset_bordercords();
  if (current__attribute === "levyn_mitat_1") {
    document.querySelector("#levy_ruuvit_1").checked = false;
    document.querySelector("#levy_ruuvit_2").checked = false;

    realinputs = ltcontainer.parentElement.querySelectorAll("input.temp_input");
    thirdcord = ltcontainer.parentElement.querySelectorAll(".thirdcord");
    del_divs = tyosto__container.querySelectorAll(".x_del");

    for (var c = realinputs.length - 1; c >= 0; c--) {
      realinputs[c].style.display = "none";
    }
    for (var c = thirdcord.length - 1; c >= 0; c--) {
      thirdcord[c].style.display = "none";
    }
    for (let d = 0; d < del_divs.length; d++) {
      del_divs[d].style.display = "none";
    }
  }
  else if (current__attribute === "levy_ruuvit_1") {
    document.querySelector("#levyn_mitat_1").checked = false;
    document.querySelector("#levy_ruuvit_2").checked = false;

    realinputs = ltcontainer.parentElement.querySelectorAll("input.temp_input");
    del_divs = tyosto__container.querySelectorAll(".x_del");
    thirdcord = ltcontainer.parentElement.querySelectorAll(".thirdcord");

    for (var c = realinputs.length - 1; c >= 0; c--) {
      realinputs[c].style.display = "none";
    }
    for (var c = thirdcord.length - 1; c >= 0; c--) {
      thirdcord[c].style.display = "none";
    }

    levyja = document.querySelectorAll(".levy__adding_arrow");
    for (let d = 0; d < levyja.length; d++) {
      levyja[d].remove();
    }
    // for (let d = 0; d < del_divs.length; d++) {
    //   del_divs[d].style.display = "none";
    // }
  }
  else if (current__attribute === "levy_ruuvit_2") {
    document.querySelector("#levyn_mitat_1").checked = false;
    document.querySelector("#levy_ruuvit_1").checked = false;


    realinputs = ltcontainer.parentElement.querySelectorAll("input.temp_input");
    thirdcord = ltcontainer.parentElement.querySelectorAll(".thirdcord");
    del_divs = tyosto__container.querySelectorAll(".x_del");

    // for (var c = realinputs.length - 1; c >= 0; c--) {
    //   realinputs[c].style.display = "none";
    // }
    for (let d = 0; d < del_divs.length; d++) {
      del_divs[d].style.display = "none";
    }


    for (let d = 0; d < thirdcord.length; d++) {
      thirdcord[d].style.display = "block";
    }
    

    levyja = document.querySelectorAll(".levy__adding_arrow");
    for (let d = 0; d < levyja.length; d++) {
      levyja[d].remove();
    }
  }
  if (stage == 1) {
    levy_example.style.backgroundImage = attr.style.backgroundImage;
    levy_example.dataset.sku = document.querySelector("#"+attr.getAttribute('for')).dataset.sku; 
    levy_example.dataset.thickness = document.querySelector("#"+attr.getAttribute('for')).dataset.thickness; 
    levy_example.dataset.structure = document.querySelector("#"+attr.getAttribute('for')).dataset.structure; 

  }
  if (stage == 2) {
    realinputs = ltcontainer.parentElement.querySelectorAll("input");
    del_divs = tyosto__container.querySelectorAll(".x_del");
    setTimeout(() => {
      if (document.querySelector("#levy_ruuvit_2").checked) {
        for (var c = realinputs.length - 1; c >= 0; c--) {
          realinputs[c].style.display = "block";
        }
      }
      else {
        for (var c = realinputs.length - 1; c >= 0; c--) {
          if (realinputs[c].classList.contains('temp_input') !== true) {

          }
          else if (realinputs[c].classList.contains('levy__adding_input') === true) { }
          else {
            realinputs[c].style.display = "none";
          }
        }
      }
      if (document.querySelector("#levy_ruuvit_1").checked) {
        for (let d = 0; d < del_divs.length; d++) {
          del_divs[d].style.display = "block";
        }
      }
      else {
        for (let d = 0; d < del_divs.length; d++) {
          del_divs[d].style.display = "none";
        }
      }
    }, 100);
  }
  if (stage == 3) {
    setTimeout(() => {
      if (document.querySelector("#levyn_mitat_1").checked) {
        if (levy_example.querySelector(".levy__adding_arrow")) {
          return
        }
        for (let d = 0; d < 4; d++) {
          levy__adding_arrow = document.createElement("div");
          levy__adding_arrow.classList.add("levy__adding_arrow");
          levy__adding_arrow.classList.add("levy__adding_arrow_" + d);
          levy.appendChild(levy__adding_arrow);

          levy__adding_label = document.createElement("label");
          levy__adding_label.classList.add("levy__adding_label");
          levy__adding_label.classList.add("levy__adding_label_" + d);
          levy__adding_label.setAttribute("onclick", "addtolevy(this," + d + ");");
          levy__adding_label.setAttribute("for", "levy__adding_" + d);


          levy__adding_input = document.createElement("input");
          levy__adding_input.classList.add("levy__adding_input");
          levy__adding_input.classList.add("lineinput");


          levy__adding_input.setAttribute("id", "levy__adding_" + d);
          levy__adding_input.setAttribute("type", "num");
          levy__adding_input.setAttribute("value", "0");

          levy__addedarea = document.createElement("div");
          levy__addedarea.classList.add("levy__addedarea");
          levy__addedarea.classList.add("levy__addedarea_" + d);

          levy__adding_arrow.appendChild(levy__adding_input);
          levy__adding_arrow.appendChild(levy__adding_label);
          levy_example.appendChild(levy__addedarea);
        }
      }
      else {
        levyja = document.querySelectorAll(".levy__adding_arrow");
        for (let d = 0; d < levyja.length; d++) {
          levyja[d].remove();
        }
      }
    }, 100);

  }

  give__tyosto_cord(vis_levy);
  countdown__kiinnikkeet(vis_levy);
}

function addtolevy(elem, identificator) {
  input_destination = parseFloat(document.querySelector("#" + elem.getAttribute("for")).value);
  // console.log(input_destination);
  // console.log("levy_example" + levy_example);
  adding_w = (input_destination / 5);
  new_w = (old_w + adding_w) + "px";


  adding_h = (input_destination / 5);
  new_h = (old_h + adding_h) + "px";

  if (identificator == 0) {
    levy_example.style.width = parseFloat(new_w) + reverse_w + "px";
    addedside_w = parseFloat(adding_w);
    levy_example.querySelector(".levy__addedarea_" + identificator).style.width = adding_w + "px";
  }
  if (identificator == 1) {
    levy_example.style.height = parseFloat(new_h) + reverse_h + "px";
    addedside_h = parseFloat(adding_h);
    levy_example.querySelector(".levy__addedarea_" + identificator).style.height = adding_h + "px";
  }
  if (identificator == 2) {
    levy_example.style.borderLeft = adding_w + "px solid ";
    levy_example.style.width = parseFloat(new_w) + addedside_w + "px";
    reverse_w = parseFloat(adding_w);
    // levy_example.style.paddingLeft = adding_w/2 + "px";
    levy_example.querySelector(".levy__addedarea_" + identificator).style.width = adding_w + "px";
    levy_example.querySelector(".levy__addedarea_" + identificator).style.marginLeft = ((-1) * adding_w) + "px";
  }
  if (identificator == 3) {
    levy_example.style.borderBottom = adding_h + "px solid ";
    levy_example.style.height = parseFloat(new_h) + addedside_h + "px";
    reverse_h = parseFloat(adding_h);
    // levy_example.style.paddingBottom = adding_h/2 + "px";
    levy_example.querySelector(".levy__addedarea_" + identificator).style.height = adding_h + "px";
    levy_example.querySelector(".levy__addedarea_" + identificator).style.marginBottom = ((-1) * adding_h) + "px";
  }
}

function removeduplicatecords__adjustcords() {
  setTimeout(() => {
    t3 = canvas.querySelectorAll(".secondcord");
    for (var s = t3.length - 1; s >= 0; s--) {
      levy = t3[s].parentElement.parentElement.parentElement;
      if (t3[s].parentElement.classList.contains("tyostot__tyosto_pysty")) {
        t3[s].style.top = 30 + ((parseFloat(drawarea.style.height) - levy.offsetTop)) + "px";
        t3[s].style.position = "absolute";
      }
      
      if (t3[s].parentElement.classList.contains("tyostot__tyosto_vaaka")) {
       
        t3[s].parentElement.querySelectorAll("input.secondcord").forEach(element => {
          element.style.left = -30 - parseFloat(levy.offsetLeft) + "px";
          element.style.position =  "absolute";
          console.log(t3[s]);
        }); 
      }

      if (t3[s].parentElement.classList.contains("tyostot__tyosto_pysty") && t3[s].parentElement.querySelector("input.x_cord_mki")) {
        t3[s].parentElement.querySelectorAll("input:not(.secondcord)").forEach(element => {
          element.style.top = ((parseFloat(levy.style.bottom)+parseFloat(levy.style.height))-parseFloat(drawarea.style.height)) + "px";
          element.style.position =  "absolute";
        }); 
      }

      if (t3[s].parentElement.classList.contains("tyostot__tyosto_vaaka") && t3[s].parentElement.querySelector("input.x_cord_mki")) {
        t3[s].parentElement.querySelectorAll("input:not(.secondcord)").forEach(element => {
          element.style.right = ((parseFloat(levy.offsetLeft)+parseFloat(levy.style.width))-parseFloat(drawarea.style.width)) + "px";
          element.style.position =  "absolute";
        });
      }

      
      
    }

    x_dels = canvas.querySelectorAll(".x_del");
    for (let i = 0; i < x_dels.length; i++) {
      x_dels[i].classList.add("hidden");
    }

    tyostot__tyosto_pysty_s = canvas.querySelectorAll(".tyostot__tyosto_pysty .secondcord");
    unique_array = [];
    for (let a = 0; a < tyostot__tyosto_pysty_s.length; a++) {
      if(unique_array.includes(tyostot__tyosto_pysty_s[a].value)) {
        tyostot__tyosto_pysty_s[a].remove();
      }
      else {
        unique_array.push(tyostot__tyosto_pysty_s[a].value);
      }
    }

    tyostot__tyosto_vaaka_s = canvas.querySelectorAll(".tyostot__tyosto_vaaka .secondcord");
    unique_array_ = [];
    for (let a = 0; a < tyostot__tyosto_vaaka_s.length; a++) {
      if(unique_array_.includes(tyostot__tyosto_vaaka_s[a].value)) {
        tyostot__tyosto_vaaka_s[a].remove();
      }
      else {
        unique_array_.push(tyostot__tyosto_vaaka_s[a].value);
      }
    }

    levyt = canvas.querySelectorAll(".levy");

    left_array = [];
    top_array = [];
    levyt.forEach(levy => {
      levy_leftset = levy.offsetLeft;
      levy_topset = levy.offsetTop;
      if(left_array.includes(levy_leftset)) {}
      else {
        left_array.push(levy_leftset)
      }
      if(top_array.includes(levy_topset)) {}
      else {
        top_array.push(levy_topset)
      }
    });

    left_array.forEach(left => {
      my_array = [];
      my_inputs = [];
      my_dels = [];
      for (let a = 0; a < levyt.length; a++) {
        levy2_leftset = levyt[a].offsetLeft;
        if(left === levy2_leftset) {
          my_array.push(levyt[a]);
        }
      }

      my_array.forEach(item => {
        inputs_in_levy = item.querySelectorAll(".tyostot__tyosto_pysty input:not(.secondcord)");
        dels_in_levy = item.querySelectorAll(".tyostot__tyosto_pysty .x_del");
        for (let a = 0; a < inputs_in_levy.length; a++) {
           if(my_inputs.includes(inputs_in_levy[a].getBoundingClientRect().left)) {
            inputs_in_levy[a].remove();
           }
           else {
            my_inputs.push(inputs_in_levy[a].getBoundingClientRect().left);
           }
        }
        for (let a = 0; a < dels_in_levy.length; a++) {
          if(my_dels.includes(dels_in_levy[a].getBoundingClientRect().left)) {
          //  dels_in_levy[a].remove();
            console.log(dels_in_levy[a].getBoundingClientRect().left);
          }
          else {
           my_dels.push(dels_in_levy[a].getBoundingClientRect().left);
          }
       }
      });

      
    });

    top_array.forEach(top => {
      my_array = [];
      my_inputs = [];
      my_dels = [];
      for (let a = 0; a < levyt.length; a++) {
        levy2_topset = levyt[a].offsetTop;
        if(top === levy2_topset) {
          my_array.push(levyt[a]);
        }
      }
    
      my_array.forEach(item => {
        inputs_in_levy = item.querySelectorAll(".tyostot__tyosto_vaaka input.x_cord_mki");
        dels_in_levy = item.querySelectorAll(".tyostot__tyosto_vaaka .x_del");
        for (let a = 0; a < inputs_in_levy.length; a++) {
          if(my_inputs.includes(inputs_in_levy[a].getBoundingClientRect().top)) {
            // inputs_in_levy[a].remove();

            console.log(inputs_in_levy[a].getBoundingClientRect().top);
          }
          else {
            my_inputs.push(inputs_in_levy[a].getBoundingClientRect().top);
          }
        }
        for (let a = 0; a < dels_in_levy.length; a++) {
          if(my_dels.includes(dels_in_levy[a].getBoundingClientRect().top)) {
          //  dels_in_levy[a].remove();
          }
          else {
           my_dels.push(dels_in_levy[a].getBoundingClientRect().top);
          }
        }
      });
    });

    x_cords = document.querySelectorAll(".tyostot__tyosto_pysty .x_cord_mki");
    y_cords = document.querySelectorAll(".tyostot__tyosto_vaaka .x_cord_mki");

    x_cords.forEach(x => {
      x.style.left = (-1) * parseFloat(x.value)/10 + "px";
      x.style.marginLeft = "unset";
    });

    y_cords.forEach(y => {
      y.style.bottom = (-1) * parseFloat(y.value)/10 + "px";
      y.style.top = "unset";
      y.style.marginBottom = "unset";
    });

    levyt.forEach(lev => {
      tyostox_for_add = lev.querySelectorAll(".tyostot__tyosto_pysty:not(.viim__tyosto_pysty):not(.alku__tyosto_pysty)");
      for (let a = 0; a < tyostox_for_add.length; a++) {
        if(tyostox_for_add[a].querySelector(".secondcord")) {
          scord = tyostox_for_add[a].querySelector(".secondcord");
          if(tyostox_for_add[a].querySelector(".thirdcord")) {
            tyostox_for_add[a].querySelector(".thirdcord").innerHTML = "<b>V</b><br>" + parseFloat(scord.parentElement.style.left)*5;
          }
          else {
            scord = tyostox_for_add[a].querySelector(".secondcord");
            x = document.createElement("div");
            x.classList = ["thirdcord"];
            x.style.top = parseFloat(scord.style.top) - 30 + "px";
            x.innerHTML = "<b>V</b><br>" +parseFloat(scord.parentElement.style.left)*5;
            tyostox_for_add[a].appendChild(x); 
          }
        }
        
      }



      tyostoy_for_add = lev.querySelectorAll(".tyostot__tyosto_vaaka:not(.viim__tyosto_vaaka):not(.alku__tyosto_vaaka)");
      for (let a = 0; a < tyostoy_for_add.length; a++) {
        if(tyostoy_for_add[a].querySelector(".secondcord")) {
          scord = tyostoy_for_add[a].querySelector(".secondcord");
          if(tyostoy_for_add[a].querySelector(".thirdcord")) {
            tyostoy_for_add[a].querySelector(".thirdcord").innerHTML = parseFloat(scord.parentElement.style.bottom)*5 + "<br><b>V</b>";
          }
          else {
            x = document.createElement("div");
            x.classList = ["thirdcord"];
            x.style.right = parseFloat(scord.style.right) - 20 + "px";
            x.style.left = parseFloat(scord.style.left) + 10 + "px";
            x.innerHTML =  parseFloat(scord.parentElement.style.bottom)*5 +"<br><b>V</b>";
            tyostoy_for_add[a].appendChild(x); 
          }
        }
      }

      alku_tyostot = lev.querySelectorAll(".alku__tyosto_pysty");
      for (let a = 0; a < alku_tyostot.length; a++) {
        if(alku_tyostot[a].querySelector(".secondcord")) {
          scord = alku_tyostot[a].querySelector(".secondcord");
          if(alku_tyostot[a].querySelector(".thirdcord")) {
            alku_tyostot[a].querySelector(".thirdcord").innerHTML = "<b>R</b>";
          }
          else {
            scord = alku_tyostot[a].querySelector(".secondcord");
            x = document.createElement("div");
            x.classList = ["thirdcord"];
            x.style.top = parseFloat(scord.style.top) - 30 + "px";
            x.innerHTML = "<b>R</b>";
            alku_tyostot[a].appendChild(x);
            console.log(alku_tyostot[a]); 
          }
        }
          
      }

      alku_tyosto = lev.querySelectorAll(".alku__tyosto_vaaka");
      for (let a = 0; a < alku_tyosto.length; a++) {
        if(alku_tyosto[a].querySelector(".secondcord")) {
          scord = alku_tyosto[a].querySelector(".secondcord");
          if(alku_tyosto[a].querySelector(".thirdcord")) {
            alku_tyosto[a].querySelector(".thirdcord").innerHTML = "<b>R</b>";
          }
          else {
            x = document.createElement("div");
            x.classList = ["thirdcord"];
            x.style.right = parseFloat(scord.style.right) - 20 + "px";
            x.style.left = parseFloat(scord.style.left) + 10 + "px";
            x.innerHTML = "<b>R</b>";
            alku_tyosto[a].appendChild(x); 
            console.log(alku_tyosto[a]);
          }
        }
      }

      viim_tyostot = lev.querySelectorAll(".viim__tyosto_pysty");
      viim_rc = parseFloat(document.querySelector("#settings__levy_or_arvo").value);
      viim_r = parseFloat(lev.querySelector(".levy b i").innerText.split("x")[0]) - viim_rc;
      
      for (let a = 0; a < viim_tyostot.length; a++) {
        if(viim_tyostot[a].querySelector(".secondcord")) {
          scord = viim_tyostot[a].querySelector(".secondcord");
          if(viim_tyostot[a].querySelector(".thirdcord")) {
            viim_tyostot[a].querySelector(".thirdcord").innerHTML = "<b>R</b><br><i>"+viim_r+"</i>";
          }
          else {
            scord = viim_tyostot[a].querySelector(".secondcord");
            x = document.createElement("div");
            x.classList = ["thirdcord"];
            x.style.top = parseFloat(scord.style.top) - 30 + "px";
            viim_tyostot[a].appendChild(x); 
          }
          console.log(viim_tyostot[a]);
        }
      }

      viim_tyosto = lev.querySelectorAll(".viim__tyosto_vaaka");
      viim_ac = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
      viim_a = parseFloat(lev.querySelector(".levy b i").innerText.split("x")[1]) - viim_ac;
      for (let a = 0; a < viim_tyosto.length; a++) {
        if(viim_tyosto[a].querySelector(".secondcord")) {
          scord = viim_tyosto[a].querySelector(".secondcord");
          if(viim_tyosto[a].querySelector(".thirdcord")) {
            viim_tyosto[a].querySelector(".thirdcord").innerHTML = "<i>"+viim_a+"</i><br><b>R</b>";
          }
          else {
            x = document.createElement("div");
            x.classList = ["thirdcord"];
            x.style.right = parseFloat(scord.style.right) - 20 + "px";
            x.style.left = parseFloat(scord.style.left) - 10 + "px";
            viim_tyosto[a].appendChild(x); 
            console.log(viim_tyosto[a]);
          }
        }
      }
    });
  }, 1500);
}

function identify__sameline(object,mode) {
  levyt = canvas.querySelectorAll(".levy");

  left_array = [];
  top_array = [];
  levyt.forEach(levy => {
    levy_leftset = levy.offsetLeft;
    levy_topset = levy.offsetTop;
    if(left_array.includes(levy_leftset)) {}
    else {
      left_array.push(levy_leftset)
    }
    if(top_array.includes(levy_topset)) {}
    else {
      top_array.push(levy_topset)
    }
  });

  levyt.forEach(lev => {

  });
  
  if(mode === 'x') {
    my_array_x = [];
    all_lines = [];
     my_dels = [];
    left_array.forEach(left => {
      for (let a = 0; a < levyt.length; a++) {
        levy2_leftset = object.parentElement.parentElement.offsetLeft;
        if(left === levy2_leftset) {
          my_array_x.push(levyt[a]);
        }
      }
      
      my_array_x.forEach(item => {
        tyostos_in_levy = item.querySelectorAll(".tyostot__tyosto_pysty");
        for (let a = 0; a < tyostos_in_levy.length; a++) {
          if(tyostos_in_levy[a].getBoundingClientRect().left === object.getBoundingClientRect().left) {
            all_lines.push(tyostos_in_levy[a]);
          }
        }
      });
    });
  }
  else if(mode === 'y') {
    my_array_y = [];
    all_lines = [];
    my_dels = [];
    top_array.forEach(top => {
      for (let a = 0; a < levyt.length; a++) {
        levy2_topset = object.parentElement.parentElement.offsetTop;
        if(top === levy2_topset) {
          my_array_y.push(levyt[a]);
        }
      }
      my_array_y.forEach(item => {
        tyostos_in_levy = item.querySelectorAll(".tyostot__tyosto_vaaka");
        for (let a = 0; a < tyostos_in_levy.length; a++) {
          if(tyostos_in_levy[a].getBoundingClientRect().bottom === object.getBoundingClientRect().bottom) {
            all_lines.push(tyostos_in_levy[a]);
          }
        }
      });
    });
  }

  return all_lines;
}



function toggle__kinnikkeet_specs(arg) {
  x_cords = canvas.querySelectorAll("input:not(.secondcord):not(.y_cord_border):not(.x_cord_border)");
  x_dels = canvas.querySelectorAll(".x_del");
  if(arg == 1) {
    
    for (let i = 0; i < x_cords.length; i++) {
      x_cords[i].style.display = 'block';
    }
    
    for (let i = 0; i < x_dels.length; i++) {
      x_dels[i].style.display = 'none';
    }
  }
  else if(arg == 2) {
    for (let i = 0; i < x_cords.length; i++) {
      x_cords[i].style.display = 'none';
    }
    x_dels = canvas.querySelectorAll(".x_del");
    for (let i = 0; i < x_dels.length; i++) {
      x_dels[i].style.display = 'block';
    }
  }
}


function lt_addmitta(mode) {
  p_levy = pressed__levy.parentElement;
  p_levytitle = p_levy.title.split(",");
  p_levytitle_h = p_levytitle[1];
  p_levytitle_w = p_levytitle[0];
  if(mode == 'vaaka') {
    ltnew_mitta_ = prompt('Anna mitta millimetreinä levyn alareunasta');
  }
  if(mode === 'pysty') {
    ltnew_mitta_ = prompt('Anna mitta millimetreinä levyn vasemmasta reunasta');
  }
  ltnew_mitta = parseFloat(ltnew_mitta_.replaceAll(/\D/g, ''));
  ltnew_mitta_px = ltnew_mitta / 5;
  if(mode == 'vaaka') {
    if(ltnew_mitta > parseFloat(p_levytitle_h)) {
      alert("Mitta ylittää levyn korkeuden. Yritä uudelleen.");
      return
    }
    
    a = document.createElement("div");
    a.style.bottom = ltnew_mitta_px + "px";
    a.classList = ["tyostot__tyosto tyostot__tyosto_vaaka levy_blessedcord"];
    
    a.innerHTML = `
      <div class="x_del hidden" onclick="tyosto__del(this);"></div>
      <input class="temp_input" onchange="change__tyostocord(this,1,${pysty_event});" onclick="clearcord(this,'tyo');" data-from="">
      <div class="thirdcord" onclick="clearcord(this,'tyo');" data-from="${ltnew_mitta}" style="display: none; display: block;">${ltnew_mitta}</div>
    `;
    
    tyostot = vis_levy.querySelectorAll(".levy_tyostot_y .tyostot__tyosto");
    tyostot_ = tyostot;
    for (let c = 0; c < tyostot_.length; c++) {
      tyostot_[c].remove();
    }

    oke = null;
    for (let b = 0; b < tyostot.length; b++) {
      if(parseFloat(tyostot[b].style.bottom) >= ltnew_mitta_px && oke == null) {
        vis_levy.querySelector(".levy_tyostot_y").appendChild(a);
        console.log(a);
        vis_levy.querySelector(".levy_tyostot_y").appendChild(tyostot[b]);
        oke = 1;
      } 
      else {
        vis_levy.querySelector(".levy_tyostot_y").appendChild(tyostot[b]);
      }
    }
    oke = null;
  }
  if(mode === 'pysty') {
    if(ltnew_mitta > parseFloat(p_levytitle_w)) {
      alert("Mitta ylittää levyn leveyden. Yritä uudelleen.");
      return
    }
    a = document.createElement("div");
    a.style.left = ltnew_mitta_px + "px";
    a.classList = ["tyostot__tyosto tyostot__tyosto_pysty levy_blessedcord"];
    thirdcord_kinet = parseFloat(p_levy.style.height) + "px";
    a.innerHTML = `
      <div class="x_del hidden" onclick="tyosto__del(this);"></div>
      <input class="temp_input" onchange="change__tyostocord(this,1,${vaaka_event});" onclick="clearcord(this,'tyo');" data-from="">
      <div class="thirdcord" onclick="clearcord(this,'tyo');" data-from="${ltnew_mitta}" style="top:${thirdcord_kinet};">${ltnew_mitta}</div>
    `;

    tyostot = vis_levy.querySelectorAll(".levy_tyostot_x .tyostot__tyosto");
    tyostot_ = tyostot;
    for (let c = 0; c < tyostot_.length; c++) {
      tyostot_[c].remove();
    }
    oke = null;
    for (let b = 0; b < tyostot.length; b++) {
      if(parseFloat(tyostot[b].style.left) >= ltnew_mitta_px && oke == null) {
        vis_levy.querySelector(".levy_tyostot_x").appendChild(a);
        vis_levy.querySelector(".levy_tyostot_x").appendChild(tyostot[b]);
        oke = 1;
      }       
      else {
        vis_levy.querySelector(".levy_tyostot_x").appendChild(tyostot[b]);
      }
    }
    oke = null;
  }

  give__tyosto_cord(vis_levy);
  countdown__kiinnikkeet(vis_levy);
  
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

function show__borders(e) {
  mode = e.getAttribute("id");
  pysty_alkutyostot = ltcontainer.querySelectorAll(".alku__tyosto_pysty");
  pysty_viimtyostot = ltcontainer.querySelectorAll(".viim__tyosto_pysty");
  vaaka_alkutyostot = ltcontainer.querySelectorAll(".alku__tyosto_vaaka");
  vaaka_viimtyostot = ltcontainer.querySelectorAll(".viim__tyosto_vaaka");
  
  if(e.checked !== true) {
    if(mode === "levy_pysty") {
      for (let a = 0; a < pysty_alkutyostot.length; a++) {
        pysty_alkutyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.remove("hidden");
        });
      }
      for (let a = 0; a < pysty_viimtyostot.length; a++) {
        pysty_viimtyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.remove("hidden");
        });
      }  
    }
    else if(mode === "levy_vaaka") {
      for (let a = 0; a < vaaka_alkutyostot.length; a++) {
        vaaka_alkutyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.remove("hidden");
        });
      }
      for (let a = 0; a < vaaka_viimtyostot.length; a++) {
        vaaka_viimtyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.remove("hidden");
        });
      }
    }
  }
  else if(e.checked === true) { 
    if(mode === "levy_pysty") {
      for (let a = 0; a < pysty_alkutyostot.length; a++) {
        pysty_alkutyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.add("hidden");
        });
      }
      for (let a = 0; a < pysty_viimtyostot.length; a++) {
        pysty_viimtyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.add("hidden");
        });
      }  
    }
    else if(mode === "levy_vaaka") {
      for (let a = 0; a < vaaka_alkutyostot.length; a++) {
        vaaka_alkutyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.add("hidden");
        });
      }
      for (let a = 0; a < vaaka_viimtyostot.length; a++) {
        vaaka_viimtyostot[a].querySelectorAll(".temp_input:not(.temp_input_last)").forEach(b => {
          b.classList.add("hidden");
        });
      }
    }
  }
}