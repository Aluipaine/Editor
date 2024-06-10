/**
 * This script initializes various DOM elements by selecting them using querySelector.
 * It also defines a function to generate a random string of 16 characters using a given set of characters.
 * The selected elements include inputs, canvas elements, and various other elements related to a levy system.
 * @returns None
 */
let levy_name_input = document.querySelector(".levymodal__levyname");

let levy_sizes_w_input = document.querySelector(".drawarea_w");
let levy_sizes_h_input = document.querySelector(".drawarea_h");
let levy_count_input = document.querySelector(".drawarea_count");

let canvas = document.querySelector(".levytyosto__maincol");
let levy_canvas = document.querySelector(".levy_canvas");
let levy_tyostot_x = document.querySelector(".levy_tyostot_x");
let levy_tyostot_y = document.querySelector(".levy_tyostot_y");
let levy_name = document.querySelector(".levy_name");
let levy_size = document.querySelector(".levy_size");
let levy_count = document.querySelector(".levy_count > b");

let tyosto_pysty = document.querySelector(".viim__tyosto_pysty");
let tyosto_vaaka = document.querySelector(".viim__tyosto_vaaka");

let levyn_ruuvit = document.querySelectorAll(".levyn_ruuvit");
let levyn_x_del = document.querySelectorAll(".x_del");
let levyn_temp_input = document.querySelectorAll(".temp_input");
let levyn_lv_list = document.querySelectorAll(".lv");

let levyn_lv = document.querySelector(".levyn_lv");
// let lvfrom_1 = document.querySelector("#lvfrom__checkpoint_1");
// let lvfrom_2 = document.querySelector("#lvfrom__checkpoint_2");
let lvcord_low = document.querySelector("#lvcord_low");
let lvcord_left = document.querySelector("#lvcord_left");

let add_tyosto_modal = document.querySelector(".add-tyosto-modal");
let add_lv_modal = document.querySelector(".add-lv-modal");

function generateRandomString() {
    const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let randomString = '';

    for (let i = 0; i < 16; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        randomString += characters[randomIndex];
    }

    return randomString;
}

/**
 * Adds event listeners to input elements to update corresponding elements on the page.
 * Updates the innerHTML of levy_name based on the value of levy_name_input.
 * Updates the width of levy_canvas based on the value of levy_sizes_w_input divided by 5.
 * Updates the innerHTML of levy_size to display the values of levy_sizes_w_input and levy_sizes_h_input.
 * Updates the left style of tyosto_pysty based on the value of levy_sizes_w_input.
 */
levy_name_input.addEventListener("input", () => {
    levy_name.innerHTML = levy_name_input.value;
});

levy_sizes_w_input.addEventListener("input", () => {
    let value = levy_sizes_w_input.value / 5;

    levy_canvas.style.width = value + "px";
    levy_size.innerHTML =
        levy_sizes_w_input.value + "x" + levy_sizes_h_input.value + "mm";

    tyosto_pysty.style.left = value - 6.5 + "px";
});

/**
 * Adds an event listener to the levy_sizes_h_input element that updates the height of the levy_canvas,
 * the text content of levy_size, and the bottom position of tyosto_vaaka based on the input value.
 * @param {Event} input - The input event triggering the function.
 * @returns None
 */
levy_sizes_h_input.addEventListener("input", () => {
    let value = levy_sizes_h_input.value / 5;

    levy_canvas.style.height = value + "px";
    levy_size.innerHTML =
        levy_sizes_w_input.value + "x" + levy_sizes_h_input.value + "mm";

    tyosto_vaaka.style.bottom = value - 6.5 + "px";
});

/**
 * Adds an event listener to the levy_count_input element that updates the innerHTML
 * of the levy_count element whenever the input value changes.
 * @param None
 * @returns None
 */
levy_count_input.addEventListener("input", () => {
    levy_count.innerHTML = levy_count_input.value;
});

/**
 * Changes the background color of the levy_canvas element to the background color of the provided object.
 * @param {Object} obj - The object containing the new background color.
 * @returns None
 */
function levy_color_change(obj) {
    levy_canvas.style.backgroundColor =
        obj.style.backgroundColor;
}

// Radio-like checkboxes
/**
 * Adds event listeners to each element in the levyn_ruuvit array to handle click events.
 * Depending on the clicked element, certain actions are taken such as toggling checkboxes,
 * adding/removing classes, and displaying/hiding elements.
 * @param None
 * @returns None
 */
levyn_ruuvit.forEach((ruuvit) => {
    ruuvit.addEventListener("click", () => {
        levyn_ruuvit.forEach((levyn) => {
            if (ruuvit != levyn) {
                levyn.checked = false;
            }
        });

        // Add button
        if (levyn_ruuvit[0].checked) {
            add_tyosto_modal.classList.remove("out");
            add_tyosto_modal.classList.add("two");

            levyn_lv_list.forEach((lv) => {
                lv.style.display = "none";
            });

            levyn_ruuvit[0].checked = false;
        }

        // Remove button
        if (levyn_ruuvit[1].checked) {
            levyn_x_del.forEach((x_del) => {
                x_del.style.display = "block";
            });
        } else {
            levyn_x_del.forEach((x_del) => {
                x_del.style.display = "none";
            });
        }

        // Edit button
        if (levyn_ruuvit[2].checked) {
            levyn_temp_input.forEach((temp_input) => {
                temp_input.style.display = "block";
            });
        } else {
            levyn_temp_input.forEach((temp_input) => {
                temp_input.style.display = "none";
            });
        }
    });
});

/**
 * Adds event listener to the element with class "submit_add_tyosto_modal" to handle click events.
 * Retrieves input values, calculates coordinates and type based on user input, and dynamically
 * generates HTML elements to display the corresponding visual representation.
 * @returns None
 */
document.querySelector(".submit_add_tyosto_modal").addEventListener("click", () => {
    let value = document.querySelector("#ruulit_cord").value;
    let cord = value / 5;
    let type = document.querySelector("#ruulit_vaaka").checked ? 1 : document.querySelector("#ruulit_pysty") ? 2 : 0;
    if (cord != "" && type > 0) {
        if (type == 1) {
            // horizontal --
            levy_tyostot_y.innerHTML += `
            <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: ${cord}px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                <input class="temp_input" type="number" onchange="change__tyostocord(this, 1);" value="${value}" style="display: none;">
            </div>
            `;
        } else {
            // vertical |
            levy_tyostot_x.innerHTML += `
            <div class="tyostot__tyosto tyostot__tyosto_pysty levy_blessedcord" style="right: unset; height: 100%; width: 1.6px; position: absolute; left: ${cord}px; opacity: 1; display: block;">
                <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                <input class="temp_input" type="number" onchange="change__tyostocord(this, 2);" value="${value}" style="display: none;">
            </div>
            `;
        }

        levyn_x_del = document.querySelectorAll(".x_del");
        levyn_temp_input = document.querySelectorAll(".temp_input");

        levyn_lv_list.forEach((lv) => {
            lv.style.display = "flex";
        });

        add_tyosto_modal.classList.add("out");
        add_tyosto_modal.classList.remove("two");
    }
});

/**
 * Adds a click event listener to the element with the class "add_tyosto_modal_close_btn".
 * When clicked, it adds the "out" class and removes the "two" class from the add_tyosto_modal element.
 * It also sets the display style of elements in the levyn_lv_list to "flex".
 * @returns None
 */
document.querySelector(".add_tyosto_modal_close_btn").addEventListener("click", () => {
    add_tyosto_modal.classList.add("out");
    add_tyosto_modal.classList.remove("two");

    levyn_lv_list.forEach((lv) => {
        lv.style.display = "flex";
    });
});

function tyosto__del(obj) {
    obj.parentElement.remove();
}

/**
 * Changes the position of an element based on the value of an object and a specified type.
 * @param {object} obj - The object containing the value to calculate the new position.
 * @param {number} type - The type of position change (1 for bottom, any other value for left).
 * @returns None
 */
function change__tyostocord(obj, type) {
    let cord = obj.value / 5;

    if (type == 1) {
        // horizontal --
        obj.parentElement.style.bottom = cord + "px";
    } else {
        // vertical |
        obj.parentElement.style.left = cord + "px";
    }
}

/**
 * Event listener for the click event on the levyn_lv element. 
 * Removes the "out" class and adds the "two" class to the add_lv_modal element.
 * Hides all elements in the levyn_lv_list by setting their display to "none".
 * Unchecks the levyn_lv checkbox.
 */
levyn_lv.addEventListener("click", () => {
    add_lv_modal.classList.remove("out");
    add_lv_modal.classList.add("two");

    levyn_lv_list.forEach((lv) => {
        lv.style.display = "none";
    });

    levyn_lv.checked = false;
});


/**
 * Adds a click event listener to the element with the class "add_lv_modal_close_btn".
 * When clicked, it adds the "out" class and removes the "two" class from the add_lv_modal element.
 * It also sets the display style of elements in the levyn_lv_list to "flex".
 * @returns None
 */
document.querySelector(".add_lv_modal_close_btn").addEventListener("click", () => {
    add_lv_modal.classList.add("out");
    add_lv_modal.classList.remove("two");

    levyn_lv_list.forEach((lv) => {
        lv.style.display = "flex";
    });
});

/**
 * Adds a click event listener to the element with the ID "lapiviennit__sade_muucord_input".
 * When the element is clicked, it sets the checked property of the element with the ID "lapiviennit__sade_muucord" to true.
 * @returns None
 */
document.querySelector("#lapiviennit__sade_muucord_input").addEventListener("click", () => {
    document.querySelector("#lapiviennit__sade_muucord").checked = true;
});

// function lv_from_change() {
//     // if(lvfrom_1.checked) {
//     //     lvcord_low.value = 5;
//     //     lvcord_left.value = 5;
//     // } else if (lvfrom_2.checked) {
//     //     lvcord_low.value = 0;
//     //     lvcord_left.value = 0;
//     // }
// }

// function change__newdiv_cord() {
//     const newDiv = document.getElementById("settings__lv");
//     newDiv.style.bottom = eval(document.getElementById("lvcord_low").value / 5) + 'px';
//     newDiv.style.left = eval(document.getElementById("lvcord_left").value / 5) + "px";
    
//   }

  
/**
 * Adds an event listener to the submit button with class "submit_add_lv_modal".
 * Generates a random string for an ID and retrieves values from various form elements.
 * Calculates radius, from, distance, ylos, oikealle, and comment based on form inputs.
 * If the name is not empty, dynamically adds HTML content to the "levy_canvas" element.
 * Updates the display of elements with class "lv" and manages the visibility of the modal.
 * @returns None
 */
document.querySelector(".submit_add_lv_modal").addEventListener("click", () => {
    let id = generateRandomString();

    let name = document.querySelector("#lv__name").value;
    
    let radius =
        document.querySelector("#lapiviennit__sade_first").checked ? 25 :
        document.querySelector("#lapiviennit__sade_second").checked ? 50 :
        document.querySelector("#lapiviennit__sade_third").checked ? 75 :
        document.querySelector("#lapiviennit__sade_fourth").checked ? 100 :
        document.querySelector("#lapiviennit__sade_fifth").checked ? 125 :
        document.querySelector("#lapiviennit__sade_muucord").checked ?
        document.querySelector("#lapiviennit__sade_muucord_input").value : 0;

    let radius_px = radius / 5;
    
    let from =
        document.querySelector("#from__side_lapivienti").checked ? 2 : 0;

    let distance = 0;

    let ylos = eval(document.getElementById("lvcord_low").value / 5) + 'px';

    let oikealle = eval(document.getElementById("lvcord_left").value / 5) + "px";

    let comment = document.querySelector("#lv_comment").value;

    if (name != "" ) {
        levy_canvas.innerHTML += `
        <span onclick="this.classList.toggle('comment__visible')" style="bottom: ${ylos}; left: ${oikealle}; margin-bottom: -11px; margin-left: -11px; height: ${radius_px}px; width: ${radius_px}px;" class="lapivienti lv lapivienti__customsize" id="${id}" data-no="1">
           <i> ${radius} </i>
            <div class="comment__container">
                <p>${comment}</p><!--<strong class="comment__from">Jyri</strong><strong class="comment__to">Jari</strong>-->
            </div>
        </span>`;

        levyn_lv_list = document.querySelectorAll(".lv");

        add_lv_modal.classList.add("out");
        add_lv_modal.classList.remove("two");
    
        levyn_lv_list.forEach((lv) => {
            lv.style.display = "flex";
        });
    }
});


/**
 * Creates an Excel sheet based on the content of the canvas.
 * @param {boolean} now - If true, generates the Excel file immediately; if false, sets up a click event listener to generate the Excel file.
 * @returns None
 */
function create__levy_excel(now) {
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
    levy_excel = document.querySelector(".levy_excel");
    if(levy_excel != null)
      levy_excel.innerHTML = old_levy_excel;
  
    let  items = canvas.querySelectorAll(".levy");
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
      try {
        h3.innerHTML = document.querySelector("#drawarea_w").value;
        h4.innerHTML = document.querySelector("#drawarea_h").value;
    } catch(e) {
      console.log("TRY-CATCH ERROR:", e);
    }
      h5.innerHTML = '';
      h6.innerHTML = '';
      //t_a = tyostot.split("},{");
      //console.log("tyostot " + tyostot);
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
      h7.innerHTML = parseFloat(document.querySelector("input.drawarea_count").value);
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
      try {
      row.append(h1)
      row.append(h2)
      row.append(h3)
      row.append(h4)
      row.append(h5)
      row.append(h6)
      row.append(h7)
      row.append(h8)
      row.append(h9)
      row.append(h10)
      row.append(h11)
      row.append(h12)
      row.append(h13)
      row.append(h14)
      row.append(h15)
      row.append(h16)
      row.append(h17)
      row.append(h18)
      row.append(h19)
      row.append(h20)
      row.append(h21)
      row.append(h22)
      row.append(h23)
      row.append(h24)
      row.append(h25)
      row.append(h26)
      row.append(h27)
      row.append(h28)
      row.append(h29)
      row.append(h30)
      row.append(h31)
      row.append(h32)
      row.append(h33)
      row.append(h34)
      row.append(h35)
      row.append(h36)
      row.append(h37)
      row.append(h38)
      row.append(h39)
      row.append(h40)
      row.append(h41)
      row.append(h42)
      row.append(h43)
      row.append(h44)
      row.append(h45)
      row.append(h46)
      row.append(h47)
      row.append(h48)
      row.append(h49)
      row.append(h50)
      row.append(h51)
      row.append(h52)
      row.append(h53)
      row.append(h54)
      row.append(h55)
      row.append(h56)
      row.append(h57)
      row.append(h58)
      row.append(h59)
      row.append(h60)
      row.append(h61)
      row.append(h62)
      row.append(h63)
      row.append(h64)
      row.append(h65)
      row.append(h66)
      row.append(h67)
      row.append(h68)
      row.append(h69)
      row.append(h70)
      row.append(h71)
      row.append(h72)
      row.append(h73)
      row.append(h74)
      row.append(h75)
      row.append(h76)
      row.append(h77)
      row.append(h78)
      row.append(h79)
      row.append(h80)
      row.append(h81)
      row.append(h82)
      row.append(h83)
      row.append(h84)
      row.append(h85)
      row.append(h86)
      row.append(h87)
      row.append(h88)
      row.append(h89)
      row.append(h90)
      row.append(h91)
      row.append(h92)
      row.append(h93)
      row.append(h94)
      row.append(h95)
      row.append(h96)
      row.append(h97)
      row.append(h98)
      row.append(h99)
      row.append(h100)
      row.append(h101)
      row.append(h102)
      row.append(h103)
      row.append(h104)
      row.append(h105)
      row.append(h106)
      row.append(h107)
      row.append(h108)
      tableExcel.append(row);
      } catch(e) {
        console.log("TRY-CATCH ERROR:", e);
      }
      indexes++;
    });
  
    if(now) {
  
      console.log("Starting EXEL generating... (NOW)");
      console.log("Levy Excel Array:", levyexcel_array);
  
      filename = 'Levy '+document.querySelector("h1 > input").value+' .xlsx';
      var ws = XLSX.utils.json_to_sheet(levyexcel_array);
      var wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, "Levy");
      XLSX.writeFile(wb, filename);
  
    } else {
  
      console.log("Starting EXEL generating...");
      console.log("Levy Excel Array:", levyexcel_array);
  
      document.querySelector('.get_levy_btn').addEventListener('click', () => {
        filename = 'Levy '+document.querySelector("h1 > input").value+'.xlsx';
        var ws = XLSX.utils.json_to_sheet(levyexcel_array);
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "Levy");
        XLSX.writeFile(wb, filename);
      });
  
    }
  }