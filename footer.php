<!-- canvas -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.min.js'></script>
<!-- <script  src="js/script.js"></script>
<script>
function updatew() {
  let STEP = 50;
  var h = (parseFloat(document.querySelector("#drawarea_h").value) / 10);
  var w = (parseFloat(document.querySelector("#drawarea_w").value) / 10);


    createCanvas(w, h);
    background(255);
    drawGrid();
    noLoop();
}
</script> -->




<!-- Marko new row btn function -->
<script>

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
</script>


<script>

  function refresh__drawcontrols() {
      setTimeout(function() {
          var drawscreen_section_zero = document.getElementById("drawscreen_section_zero");
          var drawscreen_section_one = document.getElementById("drawscreen_section_one");
          var drawscreen_section_two = document.querySelector('#drawscreen_section_two');
          var drawscreen_section_three = document.querySelector('#drawscreen_section_three');

          var drawscreen_section_four = document.querySelector('#drawscreen_section_four');
          var drawscreen_section_five = document.querySelector('#drawscreen_section_five');
          var drawscreen_section_six = document.querySelector('#drawscreen_section_six');
          var drawscreen_section_seven = document.querySelector('#drawscreen_section_seven');

          var drawscreen_section_eight = document.querySelector('#drawscreen_section_eight');
          var da__controls = document.getElementsByClassName("drawarea__controls");
          var da__topitems = document.getElementsByClassName("drawarea__top_itemtwo");
          var da__topitems_eight = document.getElementsByClassName("drawarea__top_itemeight");
          var boxes = document.getElementsByClassName("box");

          var canvas = document.querySelector("#box-wrapper > main");


          if (window.location.href.indexOf("drawscreen_section_zero") != -1) {
              document.querySelector(".drawarea__section").style.display = 'none';
              document.querySelector("#box-wrapper").style.display = 'none';

                var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() {};
              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { };
                

              for (var i = 0; i < da__controls.length; i++) {
                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }

              document.querySelector(".drawarea__controls_zero").style.display = 'block';
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }


              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.remove("m_btn");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.remove("disabled");
              document.querySelector(".drawarea__top").classList.remove("disabled");

              // Edit Sauma's for 2.6-2.7
              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '3';
                  saumas[i].classList.remove('deformed');
                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';

              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }
          }

          if (window.location.href.indexOf("drawscreen_section_one") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';
               var drawarea__left = document.querySelector(".drawarea__left");
                drawarea__left.onclick = function() {};
                

              for (var i = 0; i < da__controls.length; i++) {
                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "block";
              }


              document.querySelector(".drawarea__controls_one").style.display = 'block';

              document.querySelector("#box_upper__bottom-mid").style.display = 'block';
              document.querySelector("#box_lower__top-mid").style.display = 'block';
              document.querySelector("#box_right__left-mid").style.display = 'block';
              document.querySelector("#box_left__right-mid").style.display = 'block';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }


              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.remove("m_btn");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.remove("disabled");
              document.querySelector(".drawarea__top").classList.remove("disabled");

              // Edit Sauma's for 2.6-2.7
              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '3';
                  saumas[i].classList.remove('deformed');
                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';
              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }

              // 2.1 Cord
              var height = document.querySelector('.drawarea_h').value;
              var width = document.querySelector('.drawarea_w').value;
              var c_up = parseFloat(document.querySelector("#box_upper").style.height) - "44";
              var c_low = parseFloat(document.querySelector("#box_lower").style.height) - "44";
              var c_left = parseFloat(document.querySelector("#box_left").style.width) - "44";
              var c_right = parseFloat(document.querySelector("#box_right").style.width) - "44";

             c_width = parseFloat(width) - (parseFloat(c_left) * 10) - (parseFloat(c_right) * 10);
            

             c_height = parseFloat(height) - (parseFloat(c_up) * 10) - (parseFloat(c_low) * 10);
             document.querySelector('.drawarea_w').value = c_width;
              document.querySelector('.drawarea_h').value = c_height;
             // canvas.style.width = c_width + "px";
             // canvas.style.height = c_height + "px";

             // console.log(c_width + "i" + c_height);
            
             
          }

          if (window.location.href.indexOf("drawscreen_section_two") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';
                var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() {};
              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { };
                

              for (var i = 0; i < da__controls.length; i++) {
                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }


              document.querySelector(".drawarea__controls_two").style.display = 'block';

              // Drawarea limit
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "flex";
              }

              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.add("m_btn");
              document.querySelector(".drawarea__top").classList.remove("drawarea__top-reijat");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.remove("disabled");
              document.querySelector(".drawarea__top").classList.remove("disabled");

              // Edit Sauma's for 2.6-2.7
              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '3';
                  saumas[i].classList.remove('deformed');
                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';
              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }

              // 2.1 Cord
              var c_up = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__upper_upperdecor.box__decor > span").innerText;
              var c_low = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__lower_lowerdecor.box__decor > span").innerText;
              var c_left = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__left_leftdecor.box__decor > span").innerText;
              var c_right = document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__right_rightdecor.box__decor > span").innerText;

             
          }

          if (window.location.href.indexOf("drawscreen_section_three") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';

               var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() {};
              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { };
                

              for (var i = 0; i < da__controls.length; i++) {

                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }
              document.querySelector(".drawarea__controls_three").style.display = 'block';

              // Drawarea limit
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }


              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.add("m_btn");
              document.querySelector(".drawarea__top").classList.add("drawarea__top-reijat");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.remove("disabled");
              document.querySelector(".drawarea__top").classList.remove("disabled");

              // Edit Sauma's for 2.6-2.7
              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '3';
                  saumas[i].classList.remove('deformed');
                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';
              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }
          }

          if (window.location.href.indexOf("drawscreen_section_four") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';
              
              var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() { luo__sauma_hdrag() };

              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { luo__sauma_vdrag() };


                



              for (var i = 0; i < da__controls.length; i++) {
                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }

              document.querySelector(".drawarea__controls_four").style.display = 'block';

              // Drawarea limit
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }


              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.remove("m_btn");

              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.add("disabled");
              document.querySelector(".drawarea__top").classList.add("disabled");
              document.querySelector(".drawarea__right").classList.remove("m_btn");
              document.querySelector(".drawarea__top").classList.remove("m_btn");

              // Edit Sauma's for 2.6-2.7
              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '3';
                  saumas[i].classList.remove('deformed');
                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';
              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }
          }

          if (window.location.href.indexOf("drawscreen_section_five") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';
                var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() {};
              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { };
                

              for (var i = 0; i < da__controls.length; i++) {

                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }
              document.querySelector(".drawarea__controls_five").style.display = 'block';

              // Drawarea limit
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }

              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.remove("m_btn");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.add("disabled");
              document.querySelector(".drawarea__top").classList.add("disabled");
              document.querySelector(".drawarea__right").classList.remove("m_btn");
              document.querySelector(".drawarea__top").classList.remove("m_btn");

              // Edit Sauma's for 2.6-2.7
              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '3';
                  saumas[i].classList.remove('deformed');
                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';
              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }
          }

          if (window.location.href.indexOf("drawscreen_section_six") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';

                var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() {};
              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { };
                
              for (var i = 0; i < da__controls.length; i++) {

                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }
              document.querySelector(".drawarea__controls_six").style.display = 'block';

              // Drawarea limit
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }

              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.remove("m_btn");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.add("disabled");
              document.querySelector(".drawarea__top").classList.add("disabled");
              document.querySelector(".drawarea__right").classList.remove("m_btn");
              document.querySelector(".drawarea__top").classList.remove("m_btn");


              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '5';
                  saumas[i].classList.add('deformed');

                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';
              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }
              
          }

          if (window.location.href.indexOf("drawscreen_section_seven") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';

                var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() {};
              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { };
                
              for (var i = 0; i < da__controls.length; i++) {

                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }
              document.querySelector(".drawarea__controls_seven").style.display = 'block';
              // Drawarea limit
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }

              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.remove("m_btn");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.add("disabled");
              document.querySelector(".drawarea__top").classList.add("disabled");
              document.querySelector(".drawarea__right").classList.remove("m_btn");
              document.querySelector(".drawarea__top").classList.remove("m_btn");

              var saumas = document.querySelectorAll(".sauma");
              if(saumas) {
                for (var i=0;i<saumas.length;i+=1){
                  saumas[i].style.zIndex = '5';
                  saumas[i].classList.add('deformed');

                }
              }

             // Edit aukkos for 2.7 
             var aukkos = document.querySelectorAll(".aukko");
              if(aukkos) {
                for (var i=0;i<aukkos.length;i+=1){
                  aukkos[i].classList.add('deformed');

                }
              }

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
              document.querySelector(".drawarea__right").innerHTML = '<span>Reklamaatiot ja huomiot</span>';

              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "none";
              }
            

          }



          if (window.location.href.indexOf("drawscreen_section_eight") != -1) {
              document.querySelector(".drawarea__section").style.display = 'flex';
              document.querySelector("#box-wrapper").style.display = 'block';

                var drawarea__left = document.querySelector(".drawarea__left");
              drawarea__left.onclick = function() {};
              var drawarea__bottom = document.querySelector(".drawarea__bottom");
              drawarea__bottom.onclick = function() { };
                



              for (var i = 0; i < da__controls.length; i++) {

                  da__controls[i].style.display = "none";
              }

              // Enable/disable levytysalue controls
              for (var i = 0; i < boxes.length; i++) {
                  boxes[i].style.display = "none";
              }

               document.querySelector(".drawarea__controls_eight").style.display = 'none';

              // Drawarea limit
              document.querySelector("#box_upper__bottom-mid").style.display = 'none';
              document.querySelector("#box_lower__top-mid").style.display = 'none';
              document.querySelector("#box_right__left-mid").style.display = 'none';
              document.querySelector("#box_left__right-mid").style.display = 'none';

              // Aukot for s 2.2
              for (var i = 0; i < da__topitems.length; i++) {
                  da__topitems[i].style.display = "none";
              }

              // Enable popup for Aukot and Reijät 2.2-2.3
              document.querySelector(".drawarea__top").classList.remove("m_btn");


              // Disable drawarea controls for 2.4-2.7
              document.querySelector(".drawarea__right").classList.remove("disabled");
              document.querySelector(".drawarea__top").classList.remove("disabled");
              document.querySelector(".drawarea__right").classList.add("reclamation_btn");
              document.querySelector(".drawarea__top").classList.remove("m_btn");

              // Reklamation things for 2.8
              document.querySelector("#box-wrapper").classList.add("drawarea__eight");

              document.querySelector(".drawarea__right").innerHTML = '<span class="reklamation__foreight">Sanalliset reklamaatiot ja huomiot</span>';

              for (var i = 0; i < da__topitems_eight.length; i++) {
                  da__topitems_eight[i].style.display = "block";
              }




          }

          // Modal button
          var m_btn = document.getElementsByClassName("m_btn");
          var m_c = document.getElementsByClassName("modal-container");
            document.querySelectorAll('.m_btn').forEach(item => {
              item.addEventListener('click', event => {
                if(item.classList.contains('m_btn')) {
                  for (var i = 0; i < m_c.length; i++) {
                      m_c[i].classList.add("two");
                      m_c[i].classList.remove("out");
                      document.querySelector("body").classList.add("modal-active")
                  }
                }
                  
              })
            });
            document.querySelectorAll('.modal_close_btn').forEach(item => {
                item.addEventListener('click', event => {

                    for (var i = 0; i < m_c.length; i++) {
                        m_c[i].classList.remove("two");
                        m_c[i].classList.add("out");
                        document.querySelector("body").classList.remove("modal-active")
                    }
                })
            });


            // function drawarea__left__sauma() {
            //   alert ("Hello World!");
            // }


             
          
      
      }, 300);
  }
  var addFunctionOnWindowLoad = function(callback) {
      if (window.addEventListener) {
          window.addEventListener('load', callback, false);
      } else {
          window.attachEvent('onload', callback);
      }
  }

  addFunctionOnWindowLoad(refresh__drawcontrols);
    
</script>
<script>

    function changesize() {

      var height = document.querySelector('.drawarea_h').value;

      var width = document.querySelector('.drawarea_w').value;



      document.querySelector(".canvas").style.height = height/10 + "px";

      document.querySelector(".canvas").style.width = width/10 + "px";

      document.querySelector("#box_left").style.height = height/10 + "px";

      document.querySelector("#box_upper").style.width = width/10 + "px";

      document.querySelector("#box_right").style.height = height/10 + "px";

      document.querySelector("#box_lower").style.width = width/10 + "px";



      document.querySelector('.box-wrapper').style.height = height/10 + "px";

      document.querySelector('.box-wrapper').style.width = width/10 + "px";

      document.querySelector('.box-wrapper').style.minHeight = height/10 + "px";

      document.querySelector('.box-wrapper').style.minWidth = width/10 + "px";



      document.querySelector('#box_h').value = height;

      document.querySelector('#box_w').value = width;

    }



    

  </script>

<!--   Marko settings -->  
 <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
 <script src='https://unpkg.com/vue-color/dist/vue-color.min.js'></script>
 <script>
    var Chrome = VueColor.Chrome;
      Vue.component('colorpicker', {
        components: {
          'chrome-picker': Chrome,
        },
        template: `
      <div class="input-group color-picker" ref="colorpicker">
        <input type="text" class="form-control" v-model="colorValue" @focus="showPicker()" @input="updateFromInput" />
        <span class="input-group-addon color-picker-container">
          <span class="current-color" :style="'background-color: ' + colorValue" @click="togglePicker()"></span>
          <chrome-picker :value="colors" @input="updateFromPicker" v-if="displayPicker" />
        </span>
      </div>`,
        props: ['color'],
        data() {
          return {
            colors: {
              hex: '#000000',
            },
            colorValue: '',
            displayPicker: true,
          }
        },
        mounted() {
          this.setColor(this.color || '#000000');
        },
        methods: {
          setColor(color) {
            this.updateColors(color);
            this.colorValue = color;
          },
          updateColors(color) {
            if(color.slice(0, 1) == '#') {
              this.colors = {
                hex: color
              };
            }
            else if(color.slice(0, 4) == 'rgba') {
              var rgba = color.replace(/^rgba?\(|\s+|\)$/g,'').split(','),
                hex = '#' + ((1 << 24) + (parseInt(rgba[0]) << 16) + (parseInt(rgba[1]) << 8) + parseInt(rgba[2])).toString(16).slice(1);
              this.colors = {
                hex: hex,
                a: rgba[3],
              }
            }
          },
          showPicker() {
            document.addEventListener('click', this.documentClick);
            this.displayPicker = true;
          },
          hidePicker() {
            document.removeEventListener('click', this.documentClick);
            this.displayPicker = false;
          },
          togglePicker() {
            this.displayPicker ? this.hidePicker() : this.showPicker();
          },
          updateFromInput() {
            this.updateColors(this.colorValue);
          },
          updateFromPicker(color) {
            this.colors = color;
            if(color.rgba.a == 1) {
              this.colorValue = color.hex;
            }
            else {
              this.colorValue = 'rgba(' + color.rgba.r + ', ' + color.rgba.g + ', ' + color.rgba.b + ', ' + color.rgba.a + ')';
            }
          },
          documentClick(e) {
            var el = this.$refs.colorpicker,
              target = e.target;
            if(el !== target && !el.contains(target)) {
              this.hidePicker()
            }
          }
        },
        watch: {
          colorValue(val) {
            if(val) {
              this.updateColors(val);
              this.$emit('input', val);
              //document.body.style.background = val;
            }
          }
        },
      });
      new Vue({
        el: '#app',
        data: {
          defaultColor: '#FF0000'
        }
      });
  </script>

  <script src='js/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js'></script>

  <script>
    // $("#A .table").delegate('td', 'mouseover mouseleave click', function(e) {
    //       var cellindex = 0;
    //       if (e.type == 'click') {
    //           $(this).addClass("cell");
    //           var cells = $(this).parent().children("td");
    //           var tds = $('#A .table_size_chooser td').removeClass("SizeChooser-clicked")
    //           tds.find('input').val("");
    //           for (var i = 0; i < cells.length; i++) {
    //               if ($(cells[i]).hasClass("cell")) {
    //                   $(this).removeClass("cell");
    //                   cellindex = i;
    //                   break;
    //               }
    //           }
    //           $(this).parent().addClass("row");
    //           var rows = $(this).parent().parent().children("tr");
    //           z = 0;
    //           var O = "";
    //           for (var i = 0; i < rows.length; i++) {
    //               var tds = $(rows[i]).children("td");
    //               V = "";
    //               for (var j = 0; j <= cellindex; j++) {
    //                   //$(this).addClass("SizeChooser-clicked");
    //                   Z = i;
    //                   z += 1;
    //                   var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
    //                   $(this).find('input').val(rappu + z);
    //                   V += rappu + Z + ",";
                      
    //               }
    //               O += V;
    //               if ($(rows[i]).hasClass("row")) {
    //                   $(this).parent().removeClass("row");
    //                   break;
    //               }
    //           }
    //           $("#a_rooms").val(O);
    //       }
    //   });
    //   const acolCountElemB = document.querySelector('#A .colcount b');
    //   const arowCountElemB = document.querySelector('#A .rowcount b');
    //   const acolCountElemChanged = document.querySelector('#A .colcount span');
    //   const arowCountElemChanged = document.querySelector('#A .rowcount span');
    //   $('#A td').click(function() {
    //       var $this = $(this);
    //       var col = $this.index();
    //       var row = $this.closest('tr').index();
    //       acolCountElemB.innerHTML = col + 1;
    //       arowCountElemB.innerHTML = row + 1;
    //       if (document.querySelector(".a_pr_rap")) {
    //           document.querySelector(".a_pr_rap").value = document.querySelector("#A .colcount b").innerHTML;
    //           document.querySelector(".a_pr_krs").value = document.querySelector("#A .rowcount b").innerHTML;
    //       }
    //   });
    $("#A").delegate('td', 'mouseover mouseleave click', function(e) {
            var cellindex = 0;
            let rooms = "";

            if (e.type == 'click') {
              if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
                $(this).removeClass("nowork");
              }
              else if($('input#pohjakierros').is(':checked')) {
                console.log("Pohja checkattu");

                
                var cells = $(this).parent().children("td");
                var tds = $('#A .table_size_chooser td').removeClass("SizeChooser-clicked")
                // z += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(this).find('label').text().length > 1) {
                        $(this).removeClass("nowork");
                        $(this).find('label').text("");
                        cellindex = i;                      
                    }
                    else {
                      $(this).addClass("nowork");
                      $(this).find('label').val("");
                    }
                    
                  }
                    // var a_val = $('#a_val').val();
                    // var a_val_num = $('#a_nextnum').val();
                    // $(this).find('label').text(a_val+a_val_num);
                    // var a_rooms = $('#a_rooms');

              }
              else if($(this).hasClass("noindex")) {
                z-=0;
                $('#a_nextnum').val(z);
              }
              else if($(this).find('input').prop('checked') == false) {
                z-=1;
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#a_nextnum').val(z);
              }

              else {
                $(this).addClass("checked");
                var cells = $(this).parent().children("td");
                var tds = $('#A .table_size_chooser td').removeClass("SizeChooser-clicked")
                z = parseFloat($('#a_nextnum').val());
                z += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(cells[i]).hasClass("cell")) {
                        $(this).removeClass("cell");
                        cellindex = i;

                        break;
                        

                    }
                    var a_val = $('#a_val').val();
                    var a_val_num = $('#a_nextnum').val();
                    $(this).find('label').text(a_val+a_val_num);
                    var a_rooms = $('#a_rooms');

                }
                

                $(this).parent().addClass("row");
                var rows = $(this).parent().parent().children("tr");
                
                
                for (var i = 0; i < rows.length; i++) {
                    var tds = $(rows[i]).children("label");
                    V = "";
                    for (var j = 0; j <= cellindex; j++) {
                        //$(this).addClass("SizeChooser-clicked");
                        Z = i;
                        
                        var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                    }
                    if ($(rows[i]).hasClass("row")) {
                        $(this).parent().removeClass("row");
                        break;
                    }
                }
                V = $('#a_val').val()+parseFloat($('#a_nextnum').val());

                // console.log(V);

                posX = $(this).closest('tr').index();
                posY = $(this).index();

                // _O_.push({name: V, positionX: posX, positionY: posY});
                // console.log(_O_);
                // $("#a_rooms").val(JSON.stringify(_O_));
                $('#a_nextnum').val(z);
              }
               
            }
        });
      $("#B").delegate('td', 'mouseover mouseleave click', function(e) {
            var cellindex = 0;
            let rooms = "";
            console.log("reg B");
            if (e.type == 'click') {
              console.log("reg B");
              if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
                $(this).removeClass("nowork");
              }
              else if($('input#pohjakierros').is(':checked')) {
                console.log("Pohja checkattu");

                
                var cells = $(this).parent().children("td");
                var tds = $('#B .table_size_chooser td').removeClass("SizeChooser-clicked")
                // z += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(this).find('label').text().length > 1) {
                        $(this).removeClass("nowork");
                        $(this).find('label').text("");
                        cellindex = i;                      
                    }
                    else {
                      $(this).addClass("nowork");
                      $(this).find('label').val("");
                    }
                    
                  }
                    // var a_val = $('#b_val').val();
                    // var a_val_num = $('#b_nextnum').val();
                    // $(this).find('label').text(a_val+a_val_num);
                    // var a_rooms = $('#b_rooms');

              }
              else if($(this).hasClass("noindex")) {
                z-=0;
                $('#b_nextnum').val(z);
              }
              else if($(this).find('input').prop('checked') == false) {
                z-=1;
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#b_nextnum').val(z);
              }

              else {
                $(this).addClass("checked");
                var cells = $(this).parent().children("td");
                var tds = $('#B .table_size_chooser td').removeClass("SizeChooser-clicked")
                z = parseFloat($('#b_nextnum').val());
                z += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(cells[i]).hasClass("cell")) {
                        $(this).removeClass("cell");
                        cellindex = i;

                        break;
                        

                    }
                    var a_val = $('#b_val').val();
                    var a_val_num = $('#b_nextnum').val();
                    $(this).find('label').text(a_val+a_val_num);
                    var a_rooms = $('#b_rooms');

                }
                

                $(this).parent().addClass("row");
                var rows = $(this).parent().parent().children("tr");
                
                
                for (var i = 0; i < rows.length; i++) {
                    var tds = $(rows[i]).children("label");
                    V = "";
                    for (var j = 0; j <= cellindex; j++) {
                        //$(this).addClass("SizeChooser-clicked");
                        Z = i;
                        
                        var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                    }
                    if ($(rows[i]).hasClass("row")) {
                        $(this).parent().removeClass("row");
                        break;
                    }
                }
                V = $('#b_val').val()+parseFloat($('#b_nextnum').val());

                // console.log(V);

                posX = $(this).closest('tr').index();
                posY = $(this).index();

                // _O_.push({name: V, positionX: posX, positionY: posY});
                // console.log(_O_);
                // $("#b_rooms").val(JSON.stringify(_O_));
                $('#b_nextnum').val(z);
              }
               
            }
        });
      $("#C").delegate('td', 'mouseover mouseleave click', function(e) {
            var cellindex = 0;
            let rooms = "";

            if (e.type == 'click') {
              if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
                $(this).removeClass("nowork");
              }
              else if($('input#pohjakierros').is(':checked')) {
                console.log("Pohja checkattu");

                
                var cells = $(this).parent().children("td");
                var tds = $('#C .table_size_chooser td').removeClass("SizeChooser-clicked")
                // z += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(this).find('label').text().length > 1) {
                        $(this).removeClass("nowork");
                        $(this).find('label').text("");
                        cellindex = i;                      
                    }
                    else {
                      $(this).addClass("nowork");
                      $(this).find('label').val("");
                    }
                    
                  }
                    // var a_val = $('#c_val').val();
                    // var a_val_num = $('#c_nextnum').val();
                    // $(this).find('label').text(a_val+a_val_num);
                    // var a_rooms = $('#c_rooms');

              }
              else if($(this).hasClass("noindex")) {
                z-=0;
                $('#c_nextnum').val(z);
              }
              else if($(this).find('input').prop('checked') == false) {
                z-=1;
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#c_nextnum').val(z);
              }

              else {
                $(this).addClass("checked");
                var cells = $(this).parent().children("td");
                var tds = $('#C .table_size_chooser td').removeClass("SizeChooser-clicked")
                z = parseFloat($('#c_nextnum').val());
                z += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(cells[i]).hasClass("cell")) {
                        $(this).removeClass("cell");
                        cellindex = i;

                        break;
                        

                    }
                    var a_val = $('#c_val').val();
                    var a_val_num = $('#c_nextnum').val();
                    $(this).find('label').text(a_val+a_val_num);
                    var a_rooms = $('#c_rooms');

                }
                

                $(this).parent().addClass("row");
                var rows = $(this).parent().parent().children("tr");
                
                
                for (var i = 0; i < rows.length; i++) {
                    var tds = $(rows[i]).children("label");
                    V = "";
                    for (var j = 0; j <= cellindex; j++) {
                        //$(this).addClass("SizeChooser-clicked");
                        Z = i;
                        
                        var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                    }
                    if ($(rows[i]).hasClass("row")) {
                        $(this).parent().removeClass("row");
                        break;
                    }
                }
                V = $('#c_val').val()+parseFloat($('#c_nextnum').val());

                // console.log(V);

                posX = $(this).closest('tr').index();
                posY = $(this).index();

                // _O_.push({name: V, positionX: posX, positionY: posY});
                // console.log(_O_);
                // $("#c_rooms").val(JSON.stringify(_O_));
                $('#c_nextnum').val(z);
              }
               
            }
        });
      $("#D").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#D .table_size_chooser td').removeClass("SizeChooser-clicked")
              // z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#d_val').val();
                  // var a_val_num = $('#d_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#d_rooms');

            }
            else if($(this).hasClass("noindex")) {
              z-=0;
              $('#d_nextnum').val(z);
            }
            else if($(this).find('input').prop('checked') == false) {
              z-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#d_nextnum').val(z);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#D .table_size_chooser td').removeClass("SizeChooser-clicked")
              z = parseFloat($('#d_nextnum').val());
              z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#d_val').val();
                  var a_val_num = $('#d_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#d_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizeChooser-clicked");
                      Z = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#d_val').val()+parseFloat($('#d_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#d_rooms").val(JSON.stringify(_O_));
              $('#d_nextnum').val(z);
            }
             
          }
      });
      $("#E").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#E .table_size_chooser td').removeClass("SizeChooser-clicked")
              // z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#e_val').val();
                  // var a_val_num = $('#e_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#e_rooms');

            }
            else if($(this).hasClass("noindex")) {
              z-=0;
              $('#e_nextnum').val(z);
            }
            else if($(this).find('input').prop('checked') == false) {
              z-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#e_nextnum').val(z);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#E .table_size_chooser td').removeClass("SizeChooser-clicked")
              z = parseFloat($('#e_nextnum').val());
              z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#e_val').val();
                  var a_val_num = $('#e_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#e_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizeChooser-clicked");
                      Z = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#e_val').val()+parseFloat($('#e_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#e_rooms").val(JSON.stringify(_O_));
              $('#e_nextnum').val(z);
            }
             
          }
      });
      $("#F").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#F .table_size_chooser td').removeClass("SizeChooser-clicked")
              // z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#f_val').val();
                  // var a_val_num = $('#f_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#f_rooms');

            }
            else if($(this).hasClass("noindex")) {
              z-=0;
              $('#f_nextnum').val(z);
            }
            else if($(this).find('input').prop('checked') == false) {
              z-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#f_nextnum').val(z);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#F .table_size_chooser td').removeClass("SizeChooser-clicked")
              z = parseFloat($('#f_nextnum').val());
              z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#f_val').val();
                  var a_val_num = $('#f_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#f_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizeChooser-clicked");
                      Z = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#f_val').val()+parseFloat($('#f_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#f_rooms").val(JSON.stringify(_O_));
              $('#f_nextnum').val(z);
            }
             
          }
      });
      $("#G").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#G .table_size_chooser td').removeClass("SizeChooser-clicked")
              // z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#g_val').val();
                  // var a_val_num = $('#g_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#g_rooms');

            }
            else if($(this).hasClass("noindex")) {
              z-=0;
              $('#g_nextnum').val(z);
            }
            else if($(this).find('input').prop('checked') == false) {
              z-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#g_nextnum').val(z);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#G .table_size_chooser td').removeClass("SizeChooser-clicked")
              z = parseFloat($('#g_nextnum').val());
              z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#g_val').val();
                  var a_val_num = $('#g_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#g_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizeChooser-clicked");
                      Z = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#g_val').val()+parseFloat($('#g_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#g_rooms").val(JSON.stringify(_O_));
              $('#g_nextnum').val(z);
            }
             
          }
      });
      $("#H").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#H .table_size_chooser td').removeClass("SizeChooser-clicked")
              // z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#h_val').val();
                  // var a_val_num = $('#h_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#h_rooms');

            }
            else if($(this).hasClass("noindex")) {
              z-=0;
              $('#h_nextnum').val(z);
            }
            else if($(this).find('input').prop('checked') == false) {
              z-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#h_nextnum').val(z);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#H .table_size_chooser td').removeClass("SizeChooser-clicked")
              z = parseFloat($('#h_nextnum').val());
              z += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#h_val').val();
                  var a_val_num = $('#h_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#h_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizeChooser-clicked");
                      Z = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#h_val').val()+parseFloat($('#h_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#h_rooms").val(JSON.stringify(_O_));
              $('#h_nextnum').val(z);
            }
             
          }
      });

      $('.rappu_more').click(function() {
          $("#roomconfig_third").slideUp(250).delay(600).fadeIn(100);
          $("#sizertoggle").click(function() {
              $(".tablepreview").removeClass("showcaptioner").removeClass("showheaderer");
              $(".tablepreview").toggleClass('showsizer');
          });
          // toggle caption input
          $("#captiontoggle").click(function() {
              $(".tablepreview").removeClass("showsizer").removeClass("showheaderer");
              $(".tablepreview").toggleClass('showcaptioner');
          });
          $("#titletoggle").click(function() {
              $(".tablepreview").removeClass("showsizer").removeClass("showcaptioner");
              $(".tablepreview").toggleClass('showheaderer');
          });
          // on sizer td click, generate new table
          $(".tablepreview td").click(function() {
              $(".tablepreview").removeClass('showsizer');
              $('#tabledisplay .table-responsive').empty();
              row = $('.colcount').text();
              col = $('.rowcount').text();
              var rows = col; //here's your number of rows and columns
              var cols = row;
              var table = $('<table class="table table-bordered"><tbody>');
              for (var r = 0; r < rows; r++) {
                  var tr = $('<tr>');
                  for (var c = 0; c < cols; c++)
                      $('<td contenteditable="true"></td>').appendTo(tr);
                  tr.appendTo(table);
              }
              table.appendTo('#tabledisplay .table-responsive');
              gencode();
          });
      });
      // BEAUTIFY STRING
      function process(str) {
          var div = document.createElement('div');
          div.innerHTML = str.trim();
          return format(div, 0).innerHTML;
      }

    za = 1;
    zb = 1;
    zc = 1;
    zd = 1;
    ze = 1;
    zf = 1;
    zg = 1;
    zh = 1;
    const _O_ = [];

    $(".rappu_more").click(function() { 
      setTimeout(console.log("wait"), 1000);
      $("#A").delegate('td', 'mouseover mouseleave click', function(e) {
            var cellindex = 0;
            let rooms = "";

            if (e.type == 'click') {
              if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
                $(this).removeClass("nowork");
              }
              else if($('input#pohjakierros').is(':checked')) {
                console.log("Pohja checkattu");

                
                var cells = $(this).parent().children("td");
                var tds = $('#A .table_sizae_chooser td').removeClass("SizaeChooser-clicked")
                // za += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(this).find('label').text().length > 1) {
                        $(this).removeClass("nowork");
                        $(this).find('label').text("");
                        cellindex = i;                      
                    }
                    else {
                      $(this).addClass("nowork");
                      $(this).find('label').val("");
                    }
                    
                  }
                    // var a_val = $('#a_val').val();
                    // var a_val_num = $('#a_nextnum').val();
                    // $(this).find('label').text(a_val+a_val_num);
                    // var a_rooms = $('#a_rooms');

              }
              else if($(this).hasClass("noindex")) {
                za-=0;
                $('#a_nextnum').val(za);
              }
              else if($(this).find('input').prop('checked') == false) {
                za-=1;
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#a_nextnum').val(za);
              }

              else {
                $(this).addClass("checked");
                var cells = $(this).parent().children("td");
                var tds = $('#A .table_sizae_chooser td').removeClass("SizaeChooser-clicked")
                za = parseFloat($('#a_nextnum').val());
                za += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(cells[i]).hasClass("cell")) {
                        $(this).removeClass("cell");
                        cellindex = i;

                        break;
                        

                    }
                    var a_val = $('#a_val').val();
                    var a_val_num = $('#a_nextnum').val();
                    $(this).find('label').text(a_val+a_val_num);
                    var a_rooms = $('#a_rooms');

                }
                

                $(this).parent().addClass("row");
                var rows = $(this).parent().parent().children("tr");
                
                
                for (var i = 0; i < rows.length; i++) {
                    var tds = $(rows[i]).children("label");
                    V = "";
                    for (var j = 0; j <= cellindex; j++) {
                        //$(this).addClass("SizaeChooser-clicked");
                        ZA = i;
                        
                        var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                    }
                    if ($(rows[i]).hasClass("row")) {
                        $(this).parent().removeClass("row");
                        break;
                    }
                }
                V = parseFloat($('#a_val').val())+1;

                // console.log(V);

                posX = $(this).closest('tr').index();
                posY = $(this).index();

                // _O_.push({name: V, positionX: posX, positionY: posY});
                // console.log(_O_);
                // $("#a_rooms").val(JSON.stringify(_O_));
                $('#a_nextnum').val(za);
              }
               
            }
        });
      $("#B").delegate('td', 'mouseover mouseleave click', function(e) {
            var cellindex = 0;
            let rooms = "";
            if (e.type == 'click') {
              if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
                $(this).removeClass("nowork");
              }
              else if($('input#pohjakierros').is(':checked')) {
                console.log("Pohja checkattu");

                
                var cells = $(this).parent().children("td");
                var tds = $('#B .table_sizbe_chooser td').removeClass("SizbeChooser-clicked")
                // zb += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(this).find('label').text().length > 1) {
                        $(this).removeClass("nowork");
                        $(this).find('label').text("");
                        cellindex = i;                      
                    }
                    else {
                      $(this).addClass("nowork");
                      $(this).find('label').val("");
                    }
                    
                  }
                    // var a_val = $('#b_val').val();
                    // var a_val_num = $('#b_nextnum').val();
                    // $(this).find('label').text(a_val+a_val_num);
                    // var a_rooms = $('#b_rooms');

              }
              else if($(this).hasClass("noindex")) {
                zb-=0;
                $('#b_nextnum').val(zb);
              }
              else if($(this).find('input').prop('checked') == false) {
                zb-=1;
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#b_nextnum').val(zb);
              }

              else {
                $(this).addClass("checked");
                var cells = $(this).parent().children("td");
                var tds = $('#B .table_sizbe_chooser td').removeClass("SizbeChooser-clicked")
                zb = parseFloat($('#b_nextnum').val());
                zb += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(cells[i]).hasClass("cell")) {
                        $(this).removeClass("cell");
                        cellindex = i;

                        break;
                        

                    }
                    var a_val = $('#b_val').val();
                    var a_val_num = $('#b_nextnum').val();
                    $(this).find('label').text(a_val+a_val_num);
                    var a_rooms = $('#b_rooms');

                }
                

                $(this).parent().addClass("row");
                var rows = $(this).parent().parent().children("tr");
                
                
                for (var i = 0; i < rows.length; i++) {
                    var tds = $(rows[i]).children("label");
                    V = "";
                    for (var j = 0; j <= cellindex; j++) {
                        //$(this).addClass("SizbeChooser-clicked");
                        ZB = i;
                        
                        var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                    }
                    if ($(rows[i]).hasClass("row")) {
                        $(this).parent().removeClass("row");
                        break;
                    }
                }
                V = $('#b_val').val()+parseFloat($('#b_nextnum').val());

                // console.log(V);

                posX = $(this).closest('tr').index();
                posY = $(this).index();

                // _O_.push({name: V, positionX: posX, positionY: posY});
                // console.log(_O_);
                // $("#b_rooms").val(JSON.stringify(_O_));
                $('#b_nextnum').val(zb);
              }
               
            }
        });
      $("#C").delegate('td', 'mouseover mouseleave click', function(e) {
            var cellindex = 0;
            let rooms = "";

            if (e.type == 'click') {
              if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
                $(this).removeClass("nowork");
              }
              else if($('input#pohjakierros').is(':checked')) {
                console.log("Pohja checkattu");

                
                var cells = $(this).parent().children("td");
                var tds = $('#C .table_sizce_chooser td').removeClass("SizceChooser-clicked")
                // zc += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(this).find('label').text().length > 1) {
                        $(this).removeClass("nowork");
                        $(this).find('label').text("");
                        cellindex = i;                      
                    }
                    else {
                      $(this).addClass("nowork");
                      $(this).find('label').val("");
                    }
                    
                  }
                    // var a_val = $('#c_val').val();
                    // var a_val_num = $('#c_nextnum').val();
                    // $(this).find('label').text(a_val+a_val_num);
                    // var a_rooms = $('#c_rooms');

              }
              else if($(this).hasClass("noindex")) {
                zc-=0;
                $('#c_nextnum').val(zc);
              }
              else if($(this).find('input').prop('checked') == false) {
                zc-=1;
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#c_nextnum').val(zc);
              }

              else {
                $(this).addClass("checked");
                var cells = $(this).parent().children("td");
                var tds = $('#C .table_sizce_chooser td').removeClass("SizceChooser-clicked")
                zc = parseFloat($('#c_nextnum').val());
                zc += 1;
                //tds.find('label').text("");
                for (var i = 0; i < cells.length; i++) {
                    if ($(cells[i]).hasClass("cell")) {
                        $(this).removeClass("cell");
                        cellindex = i;

                        break;
                        

                    }
                    var a_val = $('#c_val').val();
                    var a_val_num = $('#c_nextnum').val();
                    $(this).find('label').text(a_val+a_val_num);
                    var a_rooms = $('#c_rooms');

                }
                

                $(this).parent().addClass("row");
                var rows = $(this).parent().parent().children("tr");
                
                
                for (var i = 0; i < rows.length; i++) {
                    var tds = $(rows[i]).children("label");
                    V = "";
                    for (var j = 0; j <= cellindex; j++) {
                        //$(this).addClass("SizceChooser-clicked");
                        ZC = i;
                        
                        var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                    }
                    if ($(rows[i]).hasClass("row")) {
                        $(this).parent().removeClass("row");
                        break;
                    }
                }
                V = $('#c_val').val()+parseFloat($('#c_nextnum').val());

                // console.log(V);

                posX = $(this).closest('tr').index();
                posY = $(this).index();

                // _O_.push({name: V, positionX: posX, positionY: posY});
                // console.log(_O_);
                // $("#c_rooms").val(JSON.stringify(_O_));
                $('#c_nextnum').val(zc);
              }
               
            }
        });
      $("#D").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#D .table_sizde_chooser td').removeClass("SizdeChooser-clicked")
              // zd += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#d_val').val();
                  // var a_val_num = $('#d_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#d_rooms');

            }
            else if($(this).hasClass("noindex")) {
              zd-=0;
              $('#d_nextnum').val(zd);
            }
            else if($(this).find('input').prop('checked') == false) {
              zd-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#d_nextnum').val(zd);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#D .table_sizde_chooser td').removeClass("SizdeChooser-clicked")
              zd = parseFloat($('#d_nextnum').val());
              zd += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#d_val').val();
                  var a_val_num = $('#d_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#d_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizdeChooser-clicked");
                      ZD = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#d_val').val()+parseFloat($('#d_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#d_rooms").val(JSON.stringify(_O_));
              $('#d_nextnum').val(zd);
            }
             
          }
      });
      $("#E").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#E .table_sizee_chooser td').removeClass("SizeeChooser-clicked")
              // ze += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#e_val').val();
                  // var a_val_num = $('#e_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#e_rooms');

            }
            else if($(this).hasClass("noindex")) {
              ze-=0;
              $('#e_nextnum').val(ze);
            }
            else if($(this).find('input').prop('checked') == false) {
              ze-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#e_nextnum').val(ze);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#E .table_sizee_chooser td').removeClass("SizeeChooser-clicked")
              ze = parseFloat($('#e_nextnum').val());
              ze += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#e_val').val();
                  var a_val_num = $('#e_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#e_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizeeChooser-clicked");
                      ZE = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#e_val').val()+parseFloat($('#e_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#e_rooms").val(JSON.stringify(_O_));
              $('#e_nextnum').val(ze);
            }
             
          }
      });
      $("#F").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#F .table_sizfe_chooser td').removeClass("SizfeChooser-clicked")
              // zf += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#f_val').val();
                  // var a_val_num = $('#f_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#f_rooms');

            }
            else if($(this).hasClass("noindex")) {
              zf-=0;
              $('#f_nextnum').val(zf);
            }
            else if($(this).find('input').prop('checked') == false) {
              zf-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#f_nextnum').val(zf);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#F .table_sizfe_chooser td').removeClass("SizfeChooser-clicked")
              zf = parseFloat($('#f_nextnum').val());
              zf += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#f_val').val();
                  var a_val_num = $('#f_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#f_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizfeChooser-clicked");
                      ZF = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#f_val').val()+parseFloat($('#f_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#f_rooms").val(JSON.stringify(_O_));
              $('#f_nextnum').val(zf);
            }
             
          }
      });
      $("#G").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#G .table_sizge_chooser td').removeClass("SizgeChooser-clicked")
              // zg += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#g_val').val();
                  // var a_val_num = $('#g_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#g_rooms');

            }
            else if($(this).hasClass("noindex")) {
              zg-=0;
              $('#g_nextnum').val(zg);
            }
            else if($(this).find('input').prop('checked') == false) {
              zg-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#g_nextnum').val(zg);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#G .table_sizge_chooser td').removeClass("SizgeChooser-clicked")
              zg = parseFloat($('#g_nextnum').val());
              zg += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#g_val').val();
                  var a_val_num = $('#g_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#g_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizgeChooser-clicked");
                      ZG = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#g_val').val()+parseFloat($('#g_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#g_rooms").val(JSON.stringify(_O_));
              $('#g_nextnum').val(zg);
            }
             
          }
      });
      $("#H").delegate('td', 'mouseover mouseleave click', function(e) {
          var cellindex = 0;
          let rooms = "";

          if (e.type == 'click') {
            if($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
            }
            else if($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");

              
              var cells = $(this).parent().children("td");
              var tds = $('#H .table_sizhe_chooser td').removeClass("SizheChooser-clicked")
              // zh += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;                      
                  }
                  else {
                    $(this).addClass("nowork");
                    $(this).find('label').val("");
                  }
                  
                }
                  // var a_val = $('#h_val').val();
                  // var a_val_num = $('#h_nextnum').val();
                  // $(this).find('label').text(a_val+a_val_num);
                  // var a_rooms = $('#h_rooms');

            }
            else if($(this).hasClass("noindex")) {
              zh-=0;
              $('#h_nextnum').val(zh);
            }
            else if($(this).find('input').prop('checked') == false) {
              zh-=1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#h_nextnum').val(zh);
            }

            else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#H .table_sizhe_chooser td').removeClass("SizheChooser-clicked")
              zh = parseFloat($('#h_nextnum').val());
              zh += 1;
              //tds.find('label').text("");
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;
                      

                  }
                  var a_val = $('#h_val').val();
                  var a_val_num = $('#h_nextnum').val();
                  $(this).find('label').text(a_val+a_val_num);
                  var a_rooms = $('#h_rooms');

              }
              

              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");
              
              
              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      //$(this).addClass("SizheChooser-clicked");
                      ZH = i;
                      
                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');                      
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#h_val').val()+parseFloat($('#h_nextnum').val());

              // console.log(V);

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              // _O_.push({name: V, positionX: posX, positionY: posY});
              // console.log(_O_);
              // $("#h_rooms").val(JSON.stringify(_O_));
              $('#h_nextnum').val(zh);
            }
             
          }
      });
    });
    
    
     

      function format(node, level) {
          var indentBefore = new Array(level++ + 1).join('  '),
              indentAfter = new Array(level - 1).join('  '),
              textNode;
          for (var i = 0; i < node.children.length; i++) {
              textNode = document.createTextNode('\n' + indentBefore);
              node.insertBefore(textNode, node.children[i]);
              format(node.children[i], level);
              if (node.lastElementChild == node.children[i]) {
                  textNode = document.createTextNode('\n' + indentAfter);
                  node.appendChild(textNode);
              }
          }
          return node;
      }
      // ON APPLYING CAPTION
      $('button#applycaption').click(function() {
          //remove caption input window
          $(".tablepreview").removeClass('showcaptioner');
          var caption = $('#captioner textarea').val();
          $("#tabledisplay table caption").remove();
          gencode();
      });
      // ON APPLYING CAPTION
      $('button#applyheaders').click(function() {
          //remove caption input window
          $(".tablepreview").removeClass('showheaderer');
          gencode();
      });
      $('#gencode').click(function() {
          gencode();
          $('#preparetext').text('Code Updated Above');
          $("body").addClass("codeupdated").delay(1500).queue(function() {
              $(this).removeClass("codeupdated").dequeue();
              $('#preparetext').text('Push edits to code');
          });
      });

      function gencode() {
          if ($('#rowheadercheck').is(':checked')) {
              // add th to first row
              $('#tabledisplay tr td:first-child').replaceWith(function(i, html) {
                  return '<th scope="row">click to edit</th>';
              });
          }
          if (!$('#rowheadercheck').is(':checked')) {
              //  alert('notcheck');
              // add th to first row
              $('#tabledisplay tr th:first-child').replaceWith(function(i, html) {
                  return '<td contenteditable="true">click to edit</td>';
              });
          }
          if ($('#colheadercheck').is(':checked')) {
              // add th to first row
              $('#tabledisplay tr:first-child').children('td').replaceWith(function(i, html) {
                  return '<th scope="col">click to edit</th>';
              });
          }
          var caption = $('#captioner textarea').val();
          $("#tabledisplay table caption").remove();
          $("th, td").removeAttr("contenteditable");
          // update code display
          var htmlString = $('#tabledisplay .container').html();
          $('#tablecode').text(process(htmlString));
          $("#tabledisplay th, #tabledisplay td").attr("contenteditable", "true");
      }
      var clipboard = new Clipboard('.btn');
      clipboard.on('success', function(e) {
          $("body").addClass("codecopied").delay(2500).queue(function() {
              $(this).removeClass("codecopied").dequeue();
          });
      });
      clipboard.on('error', function(e) {
          console.log(e);
      });
      $('.codecopiedalert').click(function() {
          $('body').removeClass("codecopied");
      });
      // THIS IS TO MAKE THE TABLE EDITABLE
      var $TABLE = $('#table');
      var $BTN = $('#export-btn');
      var $EXPORT = $('#export');
      $('.table-add').click(function() {
          var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
          $TABLE.find('table').append($clone);
      });
      $('.table-remove').click(function() {
          $(this).parents('tr').detach();
      });
      $('.table-up').click(function() {
          var $row = $(this).parents('tr');
          if ($row.index() === 1) return; // Don't go above the header
          $row.prev().before($row.get(0));
      });
      $('.table-down').click(function() {
          var $row = $(this).parents('tr');
          $row.next().after($row.get(0));
      });
      // A few jQuery helpers for exporting only
      jQuery.fn.pop = [].pop;
      jQuery.fn.shift = [].shift;
      $BTN.click(function() {
          var $rows = $TABLE.find('tr:not(:hidden)');
          var headers = [];
          var data = [];
          // Get the headers (add special header logic here)
          $($rows.shift()).find('th:not(:empty)').each(function() {
              headers.push($(this).text().toLowerCase());
          });
          // Turn all existing rows into a loopable array
          $rows.each(function() {
              var $td = $(this).find('td');
              var h = {};
              // Use the headers from earlier to name our hash keys
              headers.forEach(function(header, i) {
                  h[header] = $td.eq(i).text();
              });
              data.push(h);
          });
          // Output the result
          $EXPORT.text(JSON.stringify(data));
      });
  </script>
  <script>
    $("#new_project").show();
    $("#roomconfig_first").hide();
    $("#roomconfig_second").hide();
    $("#roomconfig_third").hide();
    $("#roomconfig_fourth").hide();
    $("#roomconfig_fifth").hide();

    $("#roomconfig_first").slideUp(200);
    $("#roomconfig_second").slideUp(200);
    $("#roomconfig_third").slideUp(200);
    $("#roomconfig_fourth").slideUp(200);
    $("#roomconfig_fifth").slideUp(200);

      // $("#new_project").hide();
    // new_project
    // roomconfig_first
    // roomconfig_second
  </script>
  <script>
    $(document).ready(function(){
       $('#submit-1').click(function(){
          var form_data = new FormData();
          // Read selected files
          var totalfiles = document.getElementById('files-1').files.length;
          for (var index = 0; index < totalfiles; index++) {
             form_data.push("files-1[]", document.getElementById('files-1').files[index]);
             // $('#preview').append('<div>OKe</div>');
          }
          // AJAX request
          $.ajax({
            url: 'ajaxupload.php', 
            type: 'post',
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
              for(var index = 0; index < response.length; index++) {
                // var src = response[index];
                $('#preview-1').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/'+response[index]+'">Avaa</a>');
                $('#preview-1').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="1_asiakirja-commentary" id="1_asiakirja-commentary-'+index+'">');
              }
            }
          });
       });
       $('#submit-2').click(function(){
          var form_data = new FormData();
          // Read selected files
          var totalfiles = document.getElementById('files-2').files.length;
          for (var index = 0; index < totalfiles; index++) {
             form_data.push("files-2[]", document.getElementById('files-2').files[index]);
             // $('#preview').append('<div>OKe</div>');
          }
          // AJAX request
          $.ajax({
            url: 'ajaxupload.php', 
            type: 'post',
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
              for(var index = 0; index < response.length; index++) {
                // var src = response[index];
                $('#preview-2').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/'+response[index]+'">Avaa</a>');
                $('#preview-2').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="2_asiakirja-commentary" id="2_asiakirja-commentary-'+index+'">');
              }
            }
          });
       });
       $('#submit-3').click(function(){
          var form_data = new FormData();
          // Read selected files
          var totalfiles = document.getElementById('files-3').files.length;
          for (var index = 0; index < totalfiles; index++) {
             form_data.push("files-3[]", document.getElementById('files-3').files[index]);
             // $('#preview').append('<div>OKe</div>');
          }
          // AJAX request
          $.ajax({
            url: 'ajaxupload.php', 
            type: 'post',
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
              for(var index = 0; index < response.length; index++) {
                // var src = response[index];
                $('#preview-3').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/'+response[index]+'">Avaa</a>');
                $('#preview-3').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="3_asiakirja-commentary" id="3_asiakirja-commentary-'+index+'">');
              }
            }
          });
       });
       $('#submit-4').click(function(){
          var form_data = new FormData();
          // Read selected files
          var totalfiles = document.getElementById('files-4').files.length;
          for (var index = 0; index < totalfiles; index++) {
             form_data.push("files-4[]", document.getElementById('files-4').files[index]);
             // $('#preview').append('<div>OKe</div>');
          }
          // AJAX request
          $.ajax({
            url: 'ajaxupload.php', 
            type: 'post',
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
              for(var index = 0; index < response.length; index++) {
                // var src = response[index];
                $('#preview-4').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/'+response[index]+'">Avaa</a>');
                $('#preview-4').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="4_asiakirja-commentary" id="4_asiakirja-commentary-'+index+'">');
              }
            }
          });
       });
       $('#submit-5').click(function(){
          var form_data = new FormData();
          // Read selected files
          var totalfiles = document.getElementById('files-5').files.length;
          for (var index = 0; index < totalfiles; index++) {
             form_data.push("files-5[]", document.getElementById('files-5').files[index]);
             // $('#preview').append('<div>OKe</div>');
          }
          // AJAX request
          $.ajax({
            url: 'ajaxupload.php', 
            type: 'post',
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
              for(var index = 0; index < response.length; index++) {
                // var src = response[index];
                $('#preview-5').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/'+response[index]+'">Avaa</a>');
                $('#preview-5').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="5_asiakirja-commentary" id="5_asiakirja-commentary-'+index+'">');
              }
            }
          });
       });
       $('#submit-6').click(function(){
          var form_data = new FormData();
          // Read selected files
          var totalfiles = document.getElementById('files-6').files.length;
          for (var index = 0; index < totalfiles; index++) {
             form_data.push("files-6[]", document.getElementById('files-6').files[index]);
             // $('#preview').append('<div>OKe</div>');
          }
          // AJAX request
          $.ajax({
            url: 'ajaxupload.php', 
            type: 'post',
            data: form_data,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
              for(var index = 0; index < response.length; index++) {
                // var src = response[index];
                $('#preview-6').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/'+response[index]+'">Avaa</a>');
                $('#preview-6').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="6_asiakirja-commentary" id="6_asiakirja-commentary-'+index+'">');
              }
            }
          });
       });
     });  
  </script>

  <script>
    $('.finalization_btn').click(function(e) {

      const a_array = [];
      const a_ = [];
      const b_array = [];
      const b_ = [];
      const c_array = [];
      const c_ = [];
      const d_array = [];
      const d_ = [];
      const e_array = [];
      const e_ = [];
      const f_array = [];
      const f_ = [];
      const g_array = [];
      const g_ = [];
      const h_array = [];
      const h_ = [];



      $( "#A .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();
        
        if(nam.length > 2) {
          a_array.push({name: nam, positionX: posX, positionY: posY});
          $("#a_rooms").val(JSON.stringify(a_array));
        }

      });

      $( "#A .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "NOWORK";
          a_.push({name: nam, positionX: posX, positionY: posY});
          $("#a_rooms_nowork").val(JSON.stringify(a_));
      });

      $( "#B .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();
        

        if(nam.length > 2) {
          b_array.push({name: nam, positionX: posX, positionY: posY});
          $("#b_rooms").val(JSON.stringify(b_array));
        }

      });

      $( "#B .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "";
          b_.push({name: nam, positionX: posX, positionY: posY});
          $("#b_rooms_nowork").val(JSON.stringify(b_));
      });

      $( "#C .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();
        

        if(nam.length > 2) {
          c_array.push({name: nam, positionX: posX, positionY: posY});
          $("#c_rooms").val(JSON.stringify(c_array));
        }

      });

      $( "#C .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "";
          c_.push({name: nam, positionX: posX, positionY: posY});
          $("#c_rooms_nowork").val(JSON.stringify(c_));
      });

      $( "#D .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();
        

        if(nam.length > 2) {
          d_array.push({name: nam, positionX: posX, positionY: posY});
          $("#d_rooms").val(JSON.stringify(d_array));
        }

      });

      $( "#D .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "";
          d_.push({name: nam, positionX: posX, positionY: posY});
          $("#d_rooms_nowork").val(JSON.stringify(d_));
      });

      $( "#E .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();

        if(nam.length > 2) {
          e_array.push({name: nam, positionX: posX, positionY: posY});
          $("#e_rooms").val(JSON.stringify(e_array));
        }

        
      });

      $( "#E .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "";
          e_.push({name: nam, positionX: posX, positionY: posY});
          $("#e_rooms_nowork").val(JSON.stringify(e_));
      });

      $( "#F .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();

        if(nam.length > 2) {
          f_array.push({name: nam, positionX: posX, positionY: posY});
          $("#f_rooms").val(JSON.stringify(f_array));
        }

      });

      $( "#F .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "";
          f_.push({name: nam, positionX: posX, positionY: posY});
          $("#f_rooms_nowork").val(JSON.stringify(f_));
      });

      $( "#G .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();
        if(nam.length > 2) {
          g_array.push({name: nam, positionX: posX, positionY: posY});
          $("#g_rooms").val(JSON.stringify(g_array));
        }

        
      });

      $( "#G .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "";
          g_.push({name: nam, positionX: posX, positionY: posY});
          $("#g_rooms_nowork").val(JSON.stringify(g_));
      });

      $( "#H .checked" ).each(function( index ) {
        posX = $(this).closest('tr').index();
        posY = $(this).index();
        nam = $( this ).find("label").text();

        if(nam.length > 2) {
          h_array.push({name: nam, positionX: posX, positionY: posY});
          $("#h_rooms").val(JSON.stringify(h_array));
        }
        
        
      });

      $( "#H .nowork" ).each(function( index ) {
          posX = $(this).closest('tr').index();
          posY = $(this).index();
          nam = "";
          h_.push({name: nam, positionX: posX, positionY: posY});
          $("#h_rooms_nowork").val(JSON.stringify(h_));
      });



      $('#new_project__form').submit();
    });
  </script>