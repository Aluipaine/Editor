/**
 * Creates a new row for the 'hole_set' table with 10 columns of input fields.
 * Each input field has the same name and class ('marko__holeparameter' and 'lineinput' respectively)
 */

/**
 * Synchronizes data from various form elements on the page and stores it in hidden input fields.
 * This function populates arrays and variables with data from form elements and then stores
 * this data in hidden input fields for later use.
 */
const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

function s_synchronize() {
  if (document.querySelectorAll('.material__customcol_item')[0].length < 3) {
    document.querySelectorAll('.material__customcol_item')[0].remove();
  }
  
  let systems = [];

  document.getElementsByName('systems').forEach(element => systems.push(element.value));

  let s_aukko_1 = [];
  let s_aukko_2 = [];
  let s_aukko_3 = [];
  let s_aukko_4 = [];
  let s_aukko_5 = [];
  let s_aukko_6 = [];
  let s_aukko_7 = [];
  let s_aukko_8 = [];

  document.getElementsByName('_s_aukko_1').forEach(element => s_aukko_1.push(element.value));
  document.getElementsByName('_s_aukko_2').forEach(element => s_aukko_2.push(element.value));
  document.getElementsByName('_s_aukko_3').forEach(element => s_aukko_3.push(element.value));
  document.getElementsByName('_s_aukko_4').forEach(element => s_aukko_4.push(element.value));
  document.getElementsByName('_s_aukko_5').forEach(element => s_aukko_5.push(element.value));
  document.getElementsByName('_s_aukko_6').forEach(element => s_aukko_6.push(element.value));
  document.getElementsByName('_s_aukko_7').forEach(element => s_aukko_7.push(element.value));
  document.getElementsByName('_s_aukko_8').forEach(element => s_aukko_8.push(element.value));

  let s_reika_1 = [];
  let s_reika_2 = [];
  let s_reika_3 = [];
  let s_reika_4 = [];
  let s_reika_5 = [];
  let s_reika_6 = [];
  let s_reika_7 = [];
  let s_reika_8 = [];
  let s_reika_9 = [];
  let s_reika_10 = [];
  let s_reika_11 = [];
  let s_reika_12 = [];
  let s_reika_13 = [];
  let s_reika_14 = [];
  let s_reika_15 = [];

  document.getElementsByName('_s_reika_1').forEach(element => s_reika_1.push(element.value));
  document.getElementsByName('_s_reika_2').forEach(element => s_reika_2.push(element.value));
  document.getElementsByName('_s_reika_3').forEach(element => s_reika_3.push(element.value));
  document.getElementsByName('_s_reika_4').forEach(element => s_reika_4.push(element.value));
  document.getElementsByName('_s_reika_5').forEach(element => s_reika_5.push(element.value));
  document.getElementsByName('_s_reika_6').forEach(element => s_reika_6.push(element.value));
  document.getElementsByName('_s_reika_7').forEach(element => s_reika_7.push(element.value));
  document.getElementsByName('_s_reika_8').forEach(element => s_reika_8.push(element.value));
  document.getElementsByName('_s_reika_9').forEach(element => s_reika_9.push(element.value));
  document.getElementsByName('_s_reika_10').forEach(element => s_reika_10.push(element.value));
  document.getElementsByName('_s_reika_11').forEach(element => s_reika_11.push(element.value));
  document.getElementsByName('_s_reika_12').forEach(element => s_reika_12.push(element.value));
  document.getElementsByName('_s_reika_13').forEach(element => s_reika_13.push(element.value));
  document.getElementsByName('_s_reika_14').forEach(element => s_reika_14.push(element.value));
  document.getElementsByName('_s_reika_15').forEach(element => s_reika_15.push(element.value));

  let sauma__suunta = "";
  let sauma__xtype = "";
  let sauma__ytype = "";
  let sauma__saumoitus_x = "";
  let sauma__saumoitus_y = "";

  document.getElementsByName('sauma__suunta').forEach(element => element.checked ? sauma__suunta = element.value : "");
  document.getElementsByName('sauma__xtype').forEach(element => element.checked ? sauma__xtype = element.value : "");
  document.getElementsByName('sauma__ytype').forEach(element => element.checked ? sauma__ytype = element.value : "");
  document.getElementsByName('sauma__saumoitus_x').forEach(element => element.checked ? sauma__saumoitus_x = element.value : "");
  document.getElementsByName('sauma__saumoitus_y').forEach(element => element.checked ? sauma__saumoitus_y = element.value : "");

  let data = [];
  let materials = [];

  data.push(systems);

  data.push(s_aukko_1);
  data.push(s_aukko_2);
  data.push(s_aukko_3);
  data.push(s_aukko_4);
  data.push(s_aukko_5);
  data.push(s_aukko_6);
  data.push(s_aukko_7);
  data.push(s_aukko_8);

  data.push(s_reika_1);
  data.push(s_reika_2);
  data.push(s_reika_3);
  data.push(s_reika_4);
  data.push(s_reika_5);
  data.push(s_reika_6);
  data.push(s_reika_7);
  data.push(s_reika_8);
  data.push(s_reika_9);
  data.push(s_reika_10);
  data.push(s_reika_11);
  data.push(s_reika_12);
  data.push(s_reika_13);
  data.push(s_reika_14);
  data.push(s_reika_15);

  data.push(sauma__suunta);
  data.push(sauma__xtype);
  data.push(sauma__ytype);
  data.push(sauma__saumoitus_x);
  data.push(sauma__saumoitus_y);

  
  document.querySelector("#s_settings").value = JSON.stringify(data);

  document.getElementsByName('material_array').forEach(element => materials.push(element.value));

  document.querySelector("#s_materials").value = JSON.stringify(materials);

  // Aukko asetukset

  let aukko_mallit = [];

  let aukko_mallityypit = [];

  let aukko_template = "";
  
  for(let i = 0; i < 26; i++) {
    let aukko_mallit_arr = [];
    
    document.getElementsByName('_s_aukko_' + letters[i]).forEach((element) => {
      aukko_mallit_arr.push(element.value);
    });

    aukko_mallit.push(aukko_mallit_arr);
  }
  
  document.getElementsByName("template-button").forEach(element => aukko_mallityypit.push(element.value));

  document.getElementsByName("template-button").forEach(element => element.checked ? aukko_template = element.value : "");

  document.querySelector("#aukko_mallit").value = JSON.stringify(aukko_mallit);

  document.querySelector("#aukko_mallityypit").value = JSON.stringify(aukko_mallityypit);

  document.querySelector("#aukko_template").value = aukko_template;

}
/**
 * Creates a new row in a table with input fields for hole parameters.
 * @returns None
 */
function s__createnewrow_holes() {
  var newrow = document.createElement("tr");
                  
  newrow.innerHTML='<td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td>';

  document.querySelector("#hole_set > table").append(newrow);
}

/**
 * Changes the display style of tables based on the given letter.
 * @param {string} letter - The letter used to identify the table to display.
 * @returns None
 */
function s_change_malli(letter) {
  document.querySelectorAll(".aukko-table").forEach((table) =>{
    if(table.id == "aukko-table-" + letter) {
      table.style.display = "flex";
    } else {
      table.style.display = "none";
    }
  });
}

/**
 * Creates a new template button based on the number of existing buttons.
 * If the number of buttons exceeds 26, an alert is shown.
 * @returns None
 */
function s_newmalli() {
  let buttons = document.getElementsByName("template-button").length;
  let letter = letters[buttons];
  if(letter != undefined) {
    document.querySelector("#hole_settings_objects").innerHTML += `
    <input type="radio" name="template-button" id="template-button-${letter}">
    <label onclick="s_change_malli('${letter}');" style="padding: 10px 15px;outline: 1px solid black;border-radius: 5px;margin: 0 5px;cursor: pointer;" for="template-button-${letter}">${letter}</label>`;
    
    document.querySelector(`#template-button-${letter}`).click();
    s_change_malli(letter);
  } else {
    alert("Et voi luoda enempää kuin 26 mallia!")
  }
}

/**
 * Creates a new row in a table with specific input fields and checkboxes.
 * The new row is appended to the table with the id "morehole_set".
 * @returns None
 */
function s__createnewrow_morehole() {
  var newrow = document.createElement("tr");
                  
  newrow.innerHTML='<td><input type="text" name="s__moreholeparameter" value="" class="lineinput"></td><td><input type="text" name="s__moreholeparameter" value="" class="lineinput"></td><td><input type="text" name="s__moreholeparameter" value="" class="lineinput"></td><td><input type="checkbox" name="s__moreholeparameter" value="" class="lineinput"></td><td><input type="checkbox" name="s__moreholeparameter" value="" class="lineinput"></td>';

  document.querySelector("#morehole_set > table").append(newrow);
}

function s__newmaterial() {

  if (document.querySelector("#new_material").value == "") {
    alert("Materiaalin nimi on pakollinen!");
  }
  else {
    var new_material = document.querySelector("#new_material").value;
    var new_materialcode = document.querySelector("#new_materialcode").value;
    var new_materiallevys = document.querySelector("#new_materiallevys").value;
    var new_materialpituus = document.querySelector("#new_materialpituus").value;
    var new_materialthickness = document.querySelector("#new_materialthickness").value;
    var new_materialstructure = document.querySelector("#new_materialstructure").value;

    var material = document.createElement("div");
    var material__checkbox = document.createElement("input");
    var material__checkbox_label = document.createElement("label");

    var material__checkbox_hiddenbg = document.createElement("input");
    var material__checkbox_hiddencol = document.createElement("input");
    var array_ = document.createElement("input");
    name = document.querySelector("#new_material").value;

    material__checkbox_label.innerHTML = name;
    var mn = document.querySelector("#new_material").value;
    if (document.querySelector("#new_material_color_one").checked) {
      material__checkbox_label.style.color = '#000';
    }
    else {
      material__checkbox_label.style.color = '#fff';
    }
    array = "{"+name+","+new_material+","+new_materialcode+","+new_materiallevys+","+new_materialpituus+","+new_materialthickness+","+new_materialstructure+","+ document.querySelector("#app > div > input").value+"}";

    material__checkbox.type = "checkbox";
    material__checkbox.name = "material_type";
    material__checkbox.value = document.querySelector("#new_material").value;

    material__checkbox_label.style.background = document.querySelector("#app > div > input").value;



    material.classList.add("material__customcol_item");
    material__checkbox.setAttribute("id", mn.toLowerCase());
    material__checkbox_label.setAttribute("for", mn.toLowerCase());

    material__checkbox_hiddenbg.type = "hidden";
    material__checkbox_hiddencol.type = "hidden";
    array_.type = "hidden";

    material__checkbox_hiddenbg.name = "material_bg";
    material__checkbox_hiddencol.name = "material_colour";
    array_.name = "material_array";

    array_.value = array;
    material__checkbox_hiddenbg.value = material__checkbox_label.style.color;
    material__checkbox_hiddencol.value = material__checkbox_label.style.background;

    material.appendChild(material__checkbox );
    material.appendChild(material__checkbox_label );
    material.appendChild(material__checkbox_hiddenbg );
    material.appendChild(material__checkbox_hiddencol );
    material.appendChild(array_ );

    document.querySelector("#materials > fieldset").append(material);
  }
} 

/**
 * Creates a new row in a table with input fields for "marko__holeparameter".
 * The row is appended to the table with id "hole_set".
 * @returns None
 */
function marko__createnewrow_holes() {
  const newrow = document.createElement("tr");
  newrow.innerHTML = `
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
  `;
  document.querySelector("#hole_set > table").append(newrow);
}

/**
 * Creates a new row in a table with input fields and checkboxes.
 * Inserts the new row into the table with id "morehole_set".
 * @returns None
 */
function marko__createnewrow_morehole() {
  const newrow = document.createElement("tr");
  newrow.innerHTML = `
    <td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="checkbox" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="checkbox" name="marko__moreholeparameter" value="" class="lineinput"></td>
  `;
  document.querySelector("#morehole_set > table").append(newrow);
}

/**
 * Adds a click event listener to each tab button to handle tab navigation.
 * @param {NodeList} tabs_btns - The NodeList of tab buttons.
 * @param {NodeList} tabs_targets - The NodeList of tab targets.
 * @returns None
 */
tabs_btns = document.querySelectorAll(".tabs__btn");
tabs_targets = document.querySelectorAll(".tabs__target");

for (let i = 0; i < tabs_btns.length; i++) {
  tabs_btns[i].addEventListener("click", (e) => {
    navigation__btns(tabs_btns[i]);
  });
}
/**
 * Function to handle navigation button clicks and update the active state of tabs.
 * @param {Element} elem - The element that was clicked (navigation button).
 * @returns None
 */
function navigation__btns(elem) {
  elemcount = 0;
  for (let i = tabs_btns.length-1; i > -1; i--) {
    tabs_btns[i].classList.remove('active');
    if(tabs_btns[i].innerText == elem.innerText) {
      elemcount = i;
    }
  }
  for (let i = 0; i < tabs_targets.length; i++) {
    tabs_targets[i].classList.remove('active');
    
  }
  elem.classList.add("active");
  tabs_targets[elemcount].classList.add("active");

  tabs_targets[elemcount].querySelector(".tabs__target_title").innerHTML = elem.innerText.toUpperCase() + " <- suluissa saaja(t)";
  

}

navigation__btns(tabs_btns[0]);

/**
 * Saves the message settings based on the values provided in the tabs_targets array.
 * Iterates through each tab target, constructs the message data based on the tab's dataset id,
 * and sends an AJAX POST request to save the message settings.
 * @returns None
 */
function save__messagesettings() {

  for (let i = 0; i < tabs_targets.length; i++) {
    message_array_="";
    if(tabs_targets[i].querySelector(".tabs__target_to")) {
      header_array_ = tabs_targets[i].querySelector(".tabs__target_who").value + "~~~~" + tabs_targets[i].querySelector(".tabs__target_to").value+ "~~~~";
    }
    else {
      header_array_ = tabs_targets[i].querySelector(".tabs__target_who").value + "~~~~"+ "~~~~";
    }

    header_array_ += tabs_targets[i].querySelector(".tabs__target_who_name").value + "~~~~";
    header_array_ += tabs_targets[i].querySelector(".tabs__target_who_pass").value + "~~~~";
    if(tabs_targets[i].querySelector(".tabs__target_toname")) {
      header_array_ += tabs_targets[i].querySelector(".tabs__target_toname").value;
    }
    
    
    if(tabs_targets[i].dataset.id ==0) {
      messagename_ = "project_creation";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[0].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[1].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[2].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[3].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[4].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[5].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[6].value + "~~~~";
      // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[7].value + "~~~~";
      // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[8].value + "~~~~";
      // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[9].value + "~~~~";
      // message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[10].value + "~~~~";
    }
    else if(tabs_targets[i].dataset.id ==1) {
      messagename_ = "project_newuser";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[0].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[1].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[2].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[3].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[4].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[5].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[6].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[7].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[8].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[9].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[10].value + "~~~~";
      message_array_+= tabs_targets[i].querySelectorAll(".tabs__target_textarea input")[11].value + "~~~~";

    }
    else if(tabs_targets[i].dataset.id ==2) {
      messagename_ = "project_sendedits";
      
    }
    else if(tabs_targets[i].dataset.id ==3) {
      messagename_ = "sent_purchases";
    }
    else if(tabs_targets[i].dataset.id ==4) {
      messagename_ = "deleted_without_consent";
    }
    else if(tabs_targets[i].dataset.id ==5) {
      messagename_ = "comments_toworkers";
    }
    else if(tabs_targets[i].dataset.id ==6) {
      messagename_ = "reppanareport";
    }
    else if(tabs_targets[i].dataset.id ==7) {
      messagename_ = "projectreport";
    }
    else if(tabs_targets[i].dataset.id ==8) {
      messagename_ = "comment_sending_to_tyonjohto";
    }
    else if(tabs_targets[i].dataset.id ==9) {
      messagename_ = "tilauksen_lisays";
    }
    else if(tabs_targets[i].dataset.id ==10) {
      messagename_ = "kommentin_lisays";
    }
    if(tabs_targets[i].querySelectorAll(".tabs__target_subject input").length == 2) {
      subject_array_ = tabs_targets[i].querySelectorAll(".tabs__target_subject input")[0].value + "~~~~" + tabs_targets[i].querySelectorAll(".tabs__target_subject input")[1].value;
    }
    else {
      subject_array_ = tabs_targets[i].querySelectorAll(".tabs__target_subject input")[0].value + "~~~~";
    }

    if(tabs_targets[i].querySelector("textarea")) {
      message_array_+=tabs_targets[i].querySelector("textarea").value;
    }

    formData = {
      header_array: header_array_,
      subject_array: subject_array_,
      messagename: messagename_,
      message_array: message_array_,
    };
    console.log(formData);
    $.ajax({
      type: "POST",
      url: "vendor/admin__mailedit.php",
      data: formData,
      error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
      }
    }).done(function (data) {
      console.log("Piu piu pau pau");

    });

    
  }
  alert("Tallennettu");
}

/**
 * Updates the content of all textarea elements on the page to match their "value" attribute.
 * @param None
 * @returns None
 */
txt = document.querySelectorAll("textarea");
for (let i = 0; i < txt.length; i++) {
  txt[i].innerHTML = txt[i].getAttribute("value");
  txt[i].value = txt[i].getAttribute("value");
  
}