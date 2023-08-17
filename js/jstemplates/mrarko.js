/**
 * Creates a new row for the 'hole_set' table with 10 columns of input fields.
 * Each input field has the same name and class ('marko__holeparameter' and 'lineinput' respectively)
 */

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

  
  document.querySelector("#s_settings").value = JSON.stringify(data);

  document.getElementsByName('material_array').forEach(element => materials.push(element.value));

  document.querySelector("#s_materials").value = JSON.stringify(materials);

}
function s__createnewrow_holes() {
  var newrow = document.createElement("tr");
                  
  newrow.innerHTML='<td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td><td><input type="text" name="s__holeparameter" value="" class="lineinput"></td>';

  document.querySelector("#hole_set > table").append(newrow);
}

function s_newmalli() {
  console.log("malli");
}

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
 * Creates a new row for the 'morehole_set' table with 5 columns of input fields and checkboxes.
 * Each input field and checkbox has the same name and class ('marko__moreholeparameter' and 'lineinput' respectively)
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