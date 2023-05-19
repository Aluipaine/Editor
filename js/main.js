// Universal
current_room = null;

$("#rooms").hide();
$("#drawscreen_section_zero").hide();
$("#drawscreen_section_one").hide();
$("#drawscreen_section_two").hide();
$("#drawscreen_section_three").hide();
$("#drawscreen_section_four").hide();
$("#drawscreen_section_five").hide();
$("#drawscreen_section_six").hide();
$("#drawscreen_section_seven").hide();
$("#drawscreen_section_eight").hide();
$("#drawscreen_section_tyostot").hide();
$("#drawscreen_section_esikatselu").hide();
$('.drawarea__controls_zero').hide();
$('.drawarea__controls_one').hide();
$('.drawarea__controls_two').hide();
$('.drawarea__controls_three').hide();
$('.drawarea__controls_four').hide();
$('.drawarea__controls_five').hide();
$('.drawarea__controls_six').hide();
$('.drawarea__controls_seven').hide();
$('.drawarea__controls_eight').hide();
$('.drawscreen_controls_esikatselu').hide();
$('.drawarea__navigation').hide();
// $("#drawscreen_section_four").show();
// $('.drawarea__controls_four').show();
// $("#drawscreen_section_four").slideDown(200);
// // document.querySelector("#drawarea_h").value = "3650";
// // document.querySelector("#drawarea_w").value = "9975";
// // setTimeout(changesize(),3000);


function refresh__drawcontrols() {
  $("#rooms").hide();
  $("#drawscreen_section_zero").hide();
  $("#drawscreen_section_one").hide();
  $("#drawscreen_section_two").hide();
  $("#drawscreen_section_three").hide();
  $("#drawscreen_section_four").hide();
  $("#drawscreen_section_five").hide();
  $("#drawscreen_section_six").hide();
  $("#drawscreen_section_seven").hide();
  $("#drawscreen_section_eight").hide();
  $("#drawscreen_section_tyostot").hide();
  $("#drawscreen_section_esikatselu").hide();
  $('.drawarea__controls_zero').hide();
  $('.drawarea__controls_one').hide();
  $('.drawarea__controls_two').hide();
  $('.drawarea__controls_three').hide();
  $('.drawarea__controls_four').hide();
  $('.drawarea__controls_five').hide();
  $('.drawarea__controls_six').hide();
  $('.drawarea__controls_seven').hide();
  $('.drawarea__controls_eight').hide();
  // $('.drawscreen_section_tyostot').hide();
  $('.drawarea__controls_esikatselu').hide();
  $("#rooms").slideUp(200);
  $("#drawscreen_section_zero").slideUp(200);
  $("#drawscreen_section_one").slideUp(200);
  $("#drawscreen_section_two").slideUp(200);
  $("#drawscreen_section_three").slideUp(200);
  $("#drawscreen_section_four").slideUp(200);
  $("#drawscreen_section_five").slideUp(200);
  $("#drawscreen_section_six").slideUp(200);
  $("#drawscreen_section_seven").slideUp(200);
  $("#drawscreen_section_eight").slideUp(200);
  // $("#drawscreen_section_four").show();
  // $('.drawarea__controls_four').show();
  // $("#drawscreen_section_four").slideDown(200);
  k_saved_input = document.querySelector(".k_saved").value;
  a_saved_input = document.querySelector(".a_saved").value;
  b_saved_input = document.querySelector(".b_saved").value;
  c_saved_input = document.querySelector(".c_saved").value;
  d_saved_input = document.querySelector(".d_saved").value;
  l_saved_input = document.querySelector(".l_saved").value;



  
  if (k_saved_input.length > 5) {
    k_wall = document.querySelectorAll(".house__wall_status_r");
    for (var w = 0; w < k_wall.length; w++) {
      k_wall[w].classList.add("tomeasure");
    }
  }
  if (a_saved_input.length > 5) {
    a_wall = document.querySelectorAll(".house__wall_status_a");
    for (var w = 0; w < a_wall.length; w++) {
      a_wall[w].classList.add("tomeasure");
    }
  }
  if (b_saved_input.length > 5) {
    b_wall = document.querySelectorAll(".house__wall_status_b");
    for (var w = 0; w < b_wall.length; w++) {
      b_wall[w].classList.add("tomeasure");
    }
  }
  if (c_saved_input.length > 5) {
    c_wall = document.querySelectorAll(".house__wall_status_c");
    for (var w = 0; w < c_wall.length; w++) {
      c_wall[w].classList.add("tomeasure");
    }
  }
  if (d_saved_input.length > 5) {
    d_wall = document.querySelectorAll(".house__wall_status_d");
    for (var w = 0; w < d_wall.length; w++) {
      d_wall[w].classList.add("tomeasure");
    }
  }
  if (l_saved_input.length > 5) {
    l_wall = document.querySelectorAll(".house__wall_status_l");
    for (var w = 0; w < l_wall.length; w++) {
      l_wall[w].classList.add("tomeasure");
    }
  }
  setTimeout(function() {
    input_step = document.querySelector('#step_drawscreen').value;
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
    var drawarea__top_circle = document.getElementsByClassName("drawarea__top_circle");
    // var drawarea__top_item = document.getElementsByClassName("")
    var canvas = document.querySelector("#box-wrapper > main");
    drawarea = document.querySelector("#box-wrapper");
    if (input_step == 'project_start') {
      $("#project_start").slideDown(200);
      $("#project_start").show();
      $('.drawarea__section').hide();
    }

    // submitprogress('', 'save');
    if (input_step == 'rooms') {
      $('.drawarea__section').hide();
      if (document.querySelector(".saumat__grandrow")) {
        document.querySelector(".saumat__grandrow").style.opacity = 0;
      }
      if (document.querySelector(".listat__grandrow")) {
        document.querySelector(".listat__grandrow").remove();
      }
      if (canvas.querySelector("div.tyostot__grandrow")) {
        document.querySelector("div.tyostot__grandrow").remove();
      }
      if (document.querySelector("div.levyt")) {
        document.querySelector("div.levyt").remove();
      }
      aukot = canvas.querySelectorAll(".aukko");
      for (var i = 0; i < aukot.length; i++) {
        aukot[i].remove();
      }
      mpt = canvas.querySelectorAll(".mp");
      for (var i = 0; i < mpt.length; i++) {
        mpt[i].remove();
      }
      lapiviennit = canvas.querySelectorAll(".lv");
      for (var i = 0; i < lapiviennit.length; i++) {
        lapiviennit[i].remove();
      }
      $("#rooms").show();
      $("#rooms").slideDown(200);
    }
    if (input_step == 'drawscreen_section_zero') {
      input_step = 'drawscreen_section_one';
      // var drawarea__left = document.querySelector(".drawarea__left");
      // drawarea__left.onclick = function() {};
      // var drawarea__bottom = document.querySelector(".drawarea__bottom");
      // drawarea__bottom.onclick = function() { };
      // for (var i = 0; i < da__controls.length; i++) {
      //     da__controls[i].style.display = "none";
      // }
      // // Enable/disable levytysalue controls
      // for (var i = 0; i < boxes.length; i++) {
      //     boxes[i].style.display = "none";
      // }
      // // document.querySelector(".drawarea__controls_zero").style.display = 'block';
      // document.querySelector("#box_upper__bottom-mid").style.display = 'none';
      // document.querySelector("#box_lower__top-mid").style.display = 'none';
      // document.querySelector("#box_right__left-mid").style.display = 'none';
      // document.querySelector("#box_left__right-mid").style.display = 'none';
      // // Aukot for s 2.2
      // for (var i = 0; i < da__topitems.length; i++) {
      //     da__topitems[i].style.display = "none";
      // }
      // // Enable popup for Aukot and Reijät 2.2-2.3
      // document.querySelector(".drawarea__top").classList.remove("m_btn");
      // //Enable reclamation for 2.1-2.3
      // document.querySelector(".drawarea__right").classList.remove("recl_btn");
      // // Enable controls
      // document.querySelector(".drawarea__bottom_container").style.display = 'none';
      // document.querySelector(".box__upper_upperdecor").style.display = 'none';
      // document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // // Disable drawarea controls for 2.4-2.7
      // document.querySelector(".drawarea__right").classList.remove("disabled");
      // document.querySelector(".drawarea__top").classList.remove("disabled");
      // document.querySelector(".sauma__downctrl_container").classList.remove("disabled");
      // document.querySelector(".sauma__rightctrl_container").classList.remove("disabled");
      // // Edit Sauma's for 2.6-2.7
      // var saumas = document.querySelectorAll(".sauma");
      // var sauma__vertical_ctrl = document.querySelectorAll(".sauma__vertical_ctrl");
      // if (document.querySelector(".newrow_vertical")) {document.querySelector(".newrow_vertical").remove();}
      // if (document.querySelector(".newrow_horizontal")) {document.querySelector(".newrow_horizontal").remove();}
      // if (saumas) {
      //   for (var i=0;i<saumas.length;i+=1){
      //     saumas[i].remove();
      //   }
      // }
      // if (sauma__vertical_ctrl) {
      //   for (var i=0;i<sauma__vertical_ctrl.length;i+=1){
      //     sauma__vertical_ctrl[i].remove();
      //   }
      // }
      // // Reklamation things for 2.8
      // document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      // document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
      // for (var i = 0; i < da__topitems_eight.length; i++) {
      //     da__topitems_eight[i].style.display = "none";
      // }
      //  if(document.querySelector(".saumat__grandrow")) {
      //    document.querySelector(".saumat__grandrow").style.opacity = 0;
      //   }
    }
    if (input_step == 'drawscreen_section_one') {
      $('.drawarea__section').show();
      $("#drawscreen_section_one").show();
      $('.drawarea__controls_one').show();
      $("#drawscreen_section_one").slideDown(200);
      $('.drawarea__section').css('display', 'flex');
      $('.levy__section').css('display', 'none');
      document.querySelector("#box-wrapper > main").style.display = "block";
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
      if (document.querySelector(".saumat__grandrow")) {
        document.querySelector(".saumat__grandrow").style.opacity = 0;
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
      for (var i = 0; i < drawarea__top_circle.length; i++) {
        drawarea__top_circle[i].style.display = "none";
      }

      

      // Enable popup for Aukot and Reijät 2.2-2.3
      document.querySelector(".drawarea__top").classList.remove("m_btn");
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.add("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'flex';
      document.querySelector(".box__upper_upperdecor").style.display = 'block';
      document.querySelector(".box__lower_lowerdecor").style.display = 'block';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.remove("disabled");
      document.querySelector(".drawarea__top").classList.remove("disabled");
      document.querySelector(".sauma__downctrl_container").classList.add("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.add("disabled");
      // Edit Sauma's for 2.6-2.7
      var saumas = document.querySelectorAll(".sauma");
      var sauma__vertical_ctrl = document.querySelectorAll(".sauma__vertical_ctrl");
      if (document.querySelector(".newrow_vertical")) {
        document.querySelector(".newrow_vertical").remove();
      }
      if (document.querySelector(".newrow_horizontal")) {
        document.querySelector(".newrow_horizontal").remove();
      }
      if (saumas) {
        for (var i = 0; i < saumas.length; i += 1) {
          saumas[i].remove();
        }
      }
      if (sauma__vertical_ctrl) {
        for (var i = 0; i < sauma__vertical_ctrl.length; i += 1) {
          sauma__vertical_ctrl[i].remove();
        }
      }
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "none";
      }
      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "block";
        }
      }

      walls_content=document.querySelector(".house__wall_status_l").innerText + ","+document.querySelector(".house__wall_status_a").innerText + ","+document.querySelector(".house__wall_status_b").innerText + ","+document.querySelector(".house__wall_status_c").innerText + ","+document.querySelector(".house__wall_status_d").innerText + ","+document.querySelector(".house__wall_status_r").innerText;
      document.querySelector(".walls_content").value = walls_content;

    }
    else {
       let array__ofinputsy = [];
       let array__ofinputsx = [];

       array__ofinputsy.push(document.querySelector("#cord_up"));
       array__ofinputsx.push(document.querySelector("#cord_left"));
       array__ofinputsx.push(document.querySelector("#aukotcord_left"));
       array__ofinputsx.push(document.querySelector("#aukotcord_right"));
       array__ofinputsy.push(document.querySelector("#aukotcord_low"));
       array__ofinputsy.push(document.querySelector("#aukotcord_up"));
       array__ofinputsy.push(document.querySelector("#lvcord_low"));
       array__ofinputsx.push(document.querySelector("#lvcord_left"));


        const i_height = document.querySelector('#box_h').value;
        const i_width = document.querySelector('#box_w').value;


       for (var i = 0; i < array__ofinputsx.length; i++) {
         array__ofinputsx[i].dataset.maximum = parseFloat(i_width);
       }

       for (var i = 0; i < array__ofinputsy.length; i++) {
         array__ofinputsy[i].dataset.maximum = parseFloat(i_height);
       }
    }
    if (input_step == 'drawscreen_section_two') {
      $('.drawarea__section').show();
      $("#drawscreen_section_two").show();
      $('.drawarea__controls_two').show();
      $("#drawscreen_section_two").slideDown(200);
      $('.drawarea__section').css('display', 'flex');
      $('.levy__section').css('display', 'none');
      document.querySelector("#box-wrapper > main").style.display = "block";
      document.querySelector(".drawarea__section").style.display = 'flex';
      document.querySelector("#box-wrapper").style.display = 'block';
      var drawarea__left = document.querySelector(".drawarea__left");
      drawarea__left.onclick = function() {};
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      drawarea__bottom.onclick = function() {};
      for (var i = 0; i < da__controls.length; i++) {
        da__controls[i].style.display = "none";
      }
      // Enable/disable levytysalue controls
      for (var i = 0; i < boxes.length; i++) {
        boxes[i].style.display = "none";
      }
      if (document.querySelector(".saumat__grandrow")) {
        document.querySelector(".saumat__grandrow").style.opacity = 0;
      }
      document.querySelector(".drawarea__top").removeAttribute("onclick");
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
      document.querySelector(".drawarea__top").classList.remove("drawarea__top-lapiviennit");
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.add("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'none';
      document.querySelector(".box__upper_upperdecor").style.display = 'none';
      document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.remove("disabled");
      document.querySelector(".drawarea__top").classList.remove("disabled");
      document.querySelector(".sauma__downctrl_container").classList.add("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.add("disabled");
      // Edit Sauma's for 2.6-2.7
      var saumas = document.querySelectorAll(".sauma");
      var sauma__vertical_ctrl = document.querySelectorAll(".sauma__vertical_ctrl");
      if (document.querySelector(".newrow_vertical")) {
        document.querySelector(".newrow_vertical").remove();
      }
      if (document.querySelector(".newrow_horizontal")) {
        document.querySelector(".newrow_horizontal").remove();
      }
      if (saumas) {
        for (var i = 0; i < saumas.length; i += 1) {
          saumas[i].style.zIndex = '3';
          saumas[i].classList.remove('deformed');
        }
      }
      if (sauma__vertical_ctrl) {
        for (var i = 0; i < sauma__vertical_ctrl.length; i += 1) {
          sauma__vertical_ctrl[i].remove();
        }
      }
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "none";
      }
      for (var i = 0; i < drawarea__top_circle.length; i++) {
        drawarea__top_circle[i].style.display = "none";
      }
      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "block";
        }
      }
    }
    if (input_step == 'drawscreen_section_three') {
      $('.drawarea__section').show();
      $("#drawscreen_section_three").show();
      $('.drawarea__controls_three').show();
      $("#drawscreen_section_three").slideDown(200);
      $('.drawarea__section').css('display', 'flex');
      $('.levy__section').css('display', 'none');
      document.querySelector("#box-wrapper > main").style.display = "block";
      document.querySelector(".drawarea__section").style.display = 'flex';
      document.querySelector("#box-wrapper").style.display = 'block';
      var drawarea__left = document.querySelector(".drawarea__left");
      drawarea__left.onclick = function() {};
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      drawarea__bottom.onclick = function() {};
      if (document.querySelector(".saumat__grandrow")) {
        document.querySelector(".saumat__grandrow").style.opacity = 0;
      }
      for (var i = 0; i < da__controls.length; i++) {
        da__controls[i].style.display = "none";
      }
      // Enable/disable levytysalue controls
      for (var i = 0; i < boxes.length; i++) {
        boxes[i].style.display = "none";
      }
      for (var i = 0; i < drawarea__top_circle.length; i++) {
        drawarea__top_circle[i].style.display = "flex";
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
      document.querySelector(".drawarea__top").classList.add("drawarea__top-lapiviennit");
      document.querySelector(".drawarea__top").classList.add("drawarea__top-lapiviennit");
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.add("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'none';
      document.querySelector(".box__upper_upperdecor").style.display = 'none';
      document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.remove("disabled");
      document.querySelector(".drawarea__top").classList.remove("disabled");
      document.querySelector(".sauma__downctrl_container").classList.add("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.add("disabled");
      // Edit Sauma's for 2.6-2.7
      var saumas = document.querySelectorAll(".sauma");
      var sauma__vertical_ctrl = document.querySelectorAll(".sauma__vertical_ctrl");
      if (document.querySelector(".newrow_vertical")) {
        document.querySelector(".newrow_vertical").remove();
      }
      if (document.querySelector(".newrow_horizontal")) {
        document.querySelector(".newrow_horizontal").remove();
      }
      if (saumas) {
        for (var i = 0; i < saumas.length; i += 1) {
          saumas[i].style.zIndex = '3';
          saumas[i].classList.remove('deformed');
        }
      }
      if (sauma__vertical_ctrl) {
        for (var i = 0; i < sauma__vertical_ctrl.length; i += 1) {
          sauma__vertical_ctrl[i].remove();
        }
      }
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "none";
      }
      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "block";
        }
      }
    }
    if (input_step == 'drawscreen_section_four') {
      $('.drawarea__section').show();
      $("#drawscreen_section_four").show();
      $('.drawarea__controls_four').show();
      $("#drawscreen_section_four").slideDown(200);
      $('.drawarea__section').css('display', 'flex');
      $('.levy__section').css('display', 'none');
      document.querySelector("#box-wrapper > main").style.display = "block";
      document.querySelector(".drawarea__section").style.display = 'flex';
      document.querySelector("#box-wrapper").style.display = 'block';
      var drawarea__left = document.querySelector(".drawarea__left");
      drawarea__left.onclick = function() {
        luo__sauma_vdrag()
      };
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      drawarea__bottom.onclick = function() {
        luo__sauma_hdrag()
      };
      if (document.querySelector(".saumat__grandrow")) {
        document.querySelector(".saumat__grandrow").style.opacity = 1;
      }
      if (document.querySelector(".levy") || document.querySelector(".levyt") || document.querySelector(".levysarake")) {
        let levy = document.querySelectorAll(".levy");
        for (var i = 0; i < levy.length; i += 1) {
          // levy[i].style.background = "transparent";
          levy[i].classList.add("levy_transparent");
        }
        let closer = document.querySelectorAll(".closer");
        for (var i = 0; i < closer.length; i += 1) {
          closer[i].style.zIndex = 4;
          closer[i].style.opacity = 1;
        }


        // let verticalrow_saumat = document.querySelectorAll(".verticalrow_saumat");
        // for (var i=0;i<verticalrow_saumat.length;i+=1){
        //   verticalrow_saumat[i].style.position = "absolute";
        // }
        // let horizontalrow_saumat = document.querySelectorAll(".horizontalrow_saumat");
        // for (var i=0;i<horizontalrow_saumat.length;i+=1){
        //   horizontalrow_saumat[i].style.position = "absolute";
        // }
      }
      // for (var i = 0; i < drawarea__top_circle.length; i++) {
      //     drawarea__top_circle[i].style.display = "none";
      // }
      document.querySelector(".drawarea__control.drawarea__top").style.zIndex = '-2';
      document.querySelector(".drawarea__control.drawarea__right").style.zIndex = '-2';
      document.querySelector(".drawarea__control.drawarea__top").classList.remove("disabled");
      document.querySelector(".drawarea__control.drawarea__right").classList.remove("disabled");
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
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.remove("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'flex';
      document.querySelector(".box__upper_upperdecor").style.display = 'none';
      document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.add("disabled");
      document.querySelector(".drawarea__top").classList.add("disabled");
      document.querySelector(".drawarea__right").classList.remove("m_btn");
      document.querySelector(".drawarea__top").classList.remove("m_btn");
      document.querySelector(".sauma__downctrl_container").classList.remove("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.remove("disabled");
      // Edit Sauma's for 2.6-2.7
      var saumas = document.querySelectorAll(".sauma");
      if (saumas) {
        for (var i = 0; i < saumas.length; i += 1) {
          saumas[i].style.zIndex = '3';
          saumas[i].classList.remove('deformed');
        }
      }
      var drawarea__top_item = document.querySelectorAll(".drawarea__top_item");
      if (drawarea__top_item) {
        for (var i = 0; i < drawarea__top_item.length; i += 1) {
          drawarea__top_item[i].style.display = 'none';
        }
      }
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      document.querySelector(".drawarea__right > span").innerHTML = '';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "none";
      }
      document.querySelector(".drawarea__bottom").style.marginBottom = "-70px";
      document.querySelector(".drawarea__left").style.marginLeft = "-70px";
      navs = document.querySelectorAll(".nav");
      for (var i = 0; i < navs.length; i++) {
        navs[i].style.top = "40px";
      }
      // luo drag
      function luo__sauma_vdrag() {
        s_v += 1;
        alert("Pystysauma luotu");
        var sauma__interval_horis_vontal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
        var nhs_vrtl = document.querySelector(".newrow_vertical");
        var sauma__interval_vertical;
        if (document.getElementById("settings__sauma_pysty").checked) {
          sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
        }
        if (document.getElementById("settings__sauma_vaaka").checked) {
          sauma__interval_vertical = document.querySelector("#settings__sauma_interval_y").value;
        }
        const widthBox = document.querySelector('#box_w').value;
        const w = document.querySelector('#box_w').value;
        const between_sauma = sauma__interval_vertical / widthBox;
        const canvasWidth = document.querySelector('#box-wrapper > main').offsetWidth;
        const sauma = document.createElement("div");
        const sauma__control = document.createElement("input");
        const sauma__control_down = document.createElement("b");
        const sauma__controls = document.createElement("div");
        const sauma__controls_del = document.createElement("div");
        const sauma__controls_type = document.createElement("input");
        const newDiv__comment = document.createElement("li");
        const newDiv__comment_del = document.createElement("i");
        const newrow_horis_vontal = document.createElement("div");
        let id = "sauma" + Math.random().toString(16).slice(2).toLowerCase();
        sauma.classList.add("sauma");
        sauma.classList.add("luo__sauma_vertical");
        sauma.classList.add("sauma__vertical");
        sauma__control.classList.add("sauma__vertical_ctrl");
        sauma__control.classList.add("sauma__control");
        sauma__control.classList.add("sauma__vertical_ctrl-lefted");
        sauma__controls_type.classList.add("lineinput");
        sauma__control_down.classList.add("sauma__vertical_ctrldown");
        newDiv__comment_del.classList.add("newDiv__comment_del");
        sauma__controls.classList.add("sauma__controls");
        sauma__controls_del.classList.add("sauma__controls_del");
        newrow_horis_vontal.classList.add("newrow_vertical");
        sauma__control_down.classList.add("sauma__control_down");
        newDiv__comment_del.classList.add("newDiv__comment_del");
        sauma__control_down.classList.add(id);
        sauma__control.classList.add(id);
        newDiv__comment.classList.add(id);
        sauma.classList.add(id);
        newDiv__comment.classList.add(id);
        sauma__controls.classList.add(id);
        sauma__controls_del.classList.add(id);
        sauma__controls_type.classList.add(id);
        sauma.innerHTML = "";
        sauma__control.value = "300";
        sauma__controls.innerHTML = "";
        newDiv__comment.innerHTML = "Sauma";
        newDiv__comment_del.innerHTML =
          "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
        sauma__control_down.innerHTML = "0";
        newDiv__comment.innerHTML = "Sauma";
        newDiv__comment_del.innerHTML = "";
        sauma__controls_type.value = "ST1";
        sauma__controls_type.type = "text";
        newDiv__comment.setAttribute("name", id);
        newDiv__comment_del.setAttribute("onclick",
          "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
        newDiv__comment_del.setAttribute("name", id);
        sauma__control.setAttribute("name", id);
        sauma__controls.setAttribute("name", id);
        sauma__controls_del.setAttribute("name", id);
        sauma.dataset.no = s_v;
        sauma__controls_type.setAttribute("name", id);
        sauma.setAttribute("id", id);
        sauma.setAttribute("name", id);
        sauma__control_down.setAttribute("name", id);
        sauma__controls_del.setAttribute("onclick", "sauma__del(this);");
        sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
        sauma__control.setAttribute("onclick", "clearcord(this,'sau');");
        // sauma__control.setAttribute("onclick", "document.querySelector("+id+").remove();this.parentElement.style.opacity = '0';");
        sauma.setAttribute("onclick", "");
        sauma.style.position = 'absolute';
        document.querySelector(".drawarea__controls_four-pysty").prepend(newDiv__comment);
        if (document.querySelector(".verticalrow_saumat")) {
          document.querySelector(".verticalrow_saumat").prepend(sauma);
        }
        else {
          alert("luo saumoitus ensin");
        }
        sauma.style.left = "60px";
        calculateamounts();
        saumasize__checkup();
      }

      function luo__sauma_hdrag() {
        alert("Vaakasauma luotu");
        s_h += 1;
        var sauma__interval_horizontal;
        if (document.getElementById("settings__sauma_pysty").checked) {
          sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
        }
        else if (document.getElementById("settings__sauma_vaaka").checked) {
          sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_x").value;
        }
        const heightBox = document.querySelector('#box_h').value;
        const boxHeight = document.querySelector('#box-wrapper > main').offsetHeight;
        const sauma = document.createElement("div");
        const sauma__control = document.createElement("input");
        const sauma__control_down = document.createElement("b");
        const sauma__controls_type = document.createElement("input");
        const sauma__controls_del = document.createElement("div");
        const newDiv__comment = document.createElement("li");
        const newDiv__comment_del = document.createElement("i");
        const newrow_horis_vontal = document.createElement("div");
        const sauma__controls = document.createElement("div");
        var h = document.querySelector('#box_h').value;
        var w = document.querySelector('#box_w').value;
        let id = "v_sauma" + Math.random().toString(16).slice(2).toLowerCase();
        var nvrtcl = document.querySelector(".newrow_horizontal");
        newrow_horis_vontal.classList.add(id);
        newDiv__comment_del.classList.add("newDiv__comment_del");
        sauma__controls_del.classList.add("sauma__controls_del");
        sauma.classList.add("sauma__horizontal");
        sauma.classList.add("luo__sauma_horizontal");
        sauma.classList.add("sauma");
        sauma__control.classList.add("sauma__horizontal_ctrl");
        sauma__control_down.classList.add("sauma__horizontal_ctrldown");
        sauma__control_down.classList.add("sauma__control_down");
        sauma__control_down.classList.add("luo__sauma_horizontal");
        sauma__controls_type.classList.add("lineinput");
        sauma__controls_type.classList.add("sauma__controls_type");
        sauma__control_down.classList.add("sauma__horizontal_ctrldown");
        sauma__controls.classList.add("sauma__controls");
        sauma__controls.classList.add(id);
        sauma__controls.innerHTML = "";
        sauma.classList.add(id);
        sauma__control.classList.add(id);
        sauma__control_down.classList.add(id);
        sauma__controls_type.classList.add(id);
        sauma__controls_del.classList.add(id);
        newDiv__comment.classList.add(id);
        newDiv__comment_del.classList.add(id);
        sauma__controls_type.setAttribute("name", id);
        newDiv__comment_del.setAttribute("name", id);
        sauma__controls_del.setAttribute("name", id);
        sauma__control_down.setAttribute("name", id);
        sauma.setAttribute("name", id);
        sauma__controls.setAttribute("name", id);
        newDiv__comment.innerHTML = "Sauma";
        newDiv__comment_del.innerHTML =
          "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
        newDiv__comment.appendChild(newDiv__comment_del);
        newDiv__comment.innerHTML = "Sauma ";
        sauma.dataset.no = s_h;
        sauma__control.value = "300";
        sauma__controls_del.setAttribute("onclick", "sauma__del(this);");
        sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
        sauma__control.setAttribute("onclick", "clearcord(this,'sau');");
        sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));
        // if (document.querySelector("#settings__saumahanta-yla").checked || document.getElementById("settings__saumahanta-vaakatasoitus")
          // .checked || vaakahanta_alas === true) {
          sauma.style.bottom = "60px";
        // }
        // else {
        //   sauma.style.top = "60px";
        // }
        if (document.querySelector(".horizontalrow_saumat")) {
          document.querySelector(".horizontalrow_saumat").prepend(sauma);
        }
        else {
          alert("luo saumoitus ensin");
        }
        sauma.append(sauma__controls);
        sauma.dataset.from = 300;
        calculateamounts();
        
      }


      var tyostot = document.querySelectorAll(".tyostot__tyosto");
      if (tyostot) {
        for (var i = 0; i < tyostot.length; i += 1) {
          tyostot[i].style.display = 'none';
          // tyostot[i].classList.remove('deformed');
        }
      }

      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "block";
        }
      }

      let closer = document.querySelectorAll(".closer");
      for (var i = 0; i < closer.length; i += 1) {
        closer[i].style.zIndex = 1;
        closer[i].style.opacity = 1;
      }
    }
    else {
      let closer = document.querySelectorAll(".closer");
      for (var i = 0; i < closer.length; i += 1) {
        closer[i].style.zIndex = -1;
        closer[i].style.opacity = 0;
      }

      var drawarea__left = document.querySelector(".drawarea__left");
      drawarea__left.onclick = function() {};
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      drawarea__bottom.onclick = function() {};
    }
    if (input_step == 'drawscreen_section_five') {
      $('.drawarea__section').show();
      for (var i = 0; i < da__controls.length; i++) {
        da__controls[i].style.display = "none";
      }
      $("#drawscreen_section_five").show();
      $('.drawarea__controls_five').show();
      $("#drawscreen_section_five").slideDown(200);
      $('.drawarea__section').css('display', 'flex');
      $('.drawarea__controls_five').css('display', 'block');
      $('.levy__section').css('display', 'none');
      document.querySelector("#box-wrapper > main").style.display = "block";
      document.querySelector(".drawarea__section").style.display = 'flex';
      document.querySelector("#box-wrapper").style.display = 'block';
      var drawarea__left = document.querySelector(".drawarea__left");
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      if (document.querySelector(".sauma")) {}
      else {
        alert("Saumoitathan ennen levyjen asennusta.");
        $('#step_drawscreen').val('drawscreen_section_four');
        refresh__drawcontrols();
        updatearea();
        return;
      }
      document.querySelector(".drawarea__control.drawarea__top").style.zIndex = '2';
      document.querySelector(".drawarea__control.drawarea__right").style.zIndex = '2';
      for (var i = 0; i < drawarea__top_circle.length; i++) {
        drawarea__top_circle[i].style.display = "none";
      }
      // Enable/disable levytysalue controls
      for (var i = 0; i < boxes.length; i++) {
        boxes[i].style.display = "none";
      }
      // Drawarea limit
      document.querySelector("#box_upper__bottom-mid").style.display = 'none';
      document.querySelector("#box_lower__top-mid").style.display = 'none';
      document.querySelector("#box_right__left-mid").style.display = 'none';
      document.querySelector("#box_left__right-mid").style.display = 'none';
      // Aukot for s 2.2
      for (var i = 0; i < da__topitems.length; i++) {
        da__topitems[i].style.display = "none";
      }
      let levy = document.querySelectorAll(".levy");
      for (var i = 0; i < levy.length; i += 1) {
        levy[i].classList.remove("levy_transparent");
      }

      let combined__levy = canvas.querySelectorAll(".combined__levy");
      for (var i = 0; i < combined__levy.length; i += 1) {
        combined__levy[i].classList.remove("combined__levy");
      }
      // Enable popup for Aukot and Reijät 2.2-2.3
      document.querySelector(".drawarea__top").classList.remove("m_btn");
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.remove("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'none';
      document.querySelector(".box__upper_upperdecor").style.display = 'none';
      document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.add("disabled");
      document.querySelector(".drawarea__top").classList.add("disabled");
      document.querySelector(".drawarea__right").classList.remove("m_btn");
      document.querySelector(".drawarea__top").classList.remove("m_btn");
      document.querySelector(".sauma__downctrl_container").classList.remove("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.remove("disabled");
      // Edit Sauma's for 2.6-2.7
      var saumas = document.querySelectorAll(".sauma");
      if (saumas) {
        for (var i = 0; i < saumas.length; i += 1) {
          saumas[i].style.zIndex = '3';
          saumas[i].classList.remove('deformed');
        }
      }
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "none";
      }
      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "block";
        }
      }

      var tyostot = document.querySelectorAll(".tyostot__tyosto");
      if (tyostot) {
        for (var i = 0; i < tyostot.length; i += 1) {
          tyostot[i].style.display = 'block';
          // tyostot[i].classList.remove('deformed');
        }
      }
    }
    else {
      // if(canvas.querySelector(".closer")) {
      //    closers = canvas.querySelectorAll(".closer");
      //    for (var i = closers.length - 1; i >= 0; i--) {
      //       closers[i].style.opacity = 0;
      //       closers[i].style.zIndex = -1;
      //    }
      // }
    }
    if (input_step == 'drawscreen_section_tyostot') {
      $('.drawarea__section').show();
      // $('.box-wrapper').css('display', 'none');
      // $('.levy__section').css('display', 'flex');
      $('.drawarea__section').css('display', 'flex');
      $('#drawscreen_section_tyostot').show();
      $('.drawarea__controls_tyostot').show();


      kiinnikkeet__siirto();


      let tyostot = document.querySelectorAll(".levy_input");
      for (var i = 0; i < tyostot.length; i++) {
        var tyosto_id = tyostot[i].getAttribute("id");
        if (tyosto_id == 'k_yrmod' || tyosto_id == 'k_yrlevy') {
          tyostot[i].parentElement.style.marginTop = parseFloat(tyostot[i].value) / 5 + "px";
        }
        else if (tyosto_id == 'k_armod' || tyosto_id == 'k_arlevy') {
          tyostot[i].parentElement.style.marginTop = parseFloat((-1) * parseFloat(tyostot[i].value) / 5) + "px";
        }
        else if (tyosto_id == 'k_ormod' || tyosto_id == 'k_orlevy') {
          tyostot[i].parentElement.style.marginLeft = parseFloat((-1) * parseFloat(tyostot[i].value) / 5) + "px";
        }
        else if (tyosto_id == 'k_vrmod' || tyosto_id == 'k_vrlevy') {
          tyostot[i].parentElement.style.marginLeft = parseFloat(tyostot[i].value) / 5 + "px";
        }
      }
      let sauma__controllers = document.querySelectorAll(".sauma__controls");
      for (var i = sauma__controllers.length - 1; i >= 0; i--) {
        sauma__controllers[i].style.opacity = "1";
        sauma__controllers[i].style.cursor = "not-allowed";
      }

      let levy = document.querySelectorAll(".levy");
      for (var i = 0; i < levy.length; i += 1) {
        levy[i].classList.remove("levy_transparent");
      }
      kp_one = document.querySelector("#kiinniketys__pkiinnike_one");
      kp_two = document.querySelector("#kiinniketys__pkiinnike_two");
      kp_three = document.querySelector("#kiinniketys__pkiinnike_three");
      kp_four = document.querySelector("#kiinniketys__pkiinnike_four");
      kv_one = document.querySelector("#kiinniketys__vkiinnike_one");
      kv_two = document.querySelector("#kiinniketys__vkiinnike_two");
      kv_three = document.querySelector("#kiinniketys__vkiinnike_three");
      kv_four = document.querySelector("#kiinniketys__vkiinnike_four");

      lt_kp_one = document.querySelector("#lt-kiinniketys__pkiinnike_one");
      lt_kp_two = document.querySelector("#lt-kiinniketys__pkiinnike_two");
      lt_kp_three = document.querySelector("#lt-kiinniketys__pkiinnike_three");
      lt_kp_four = document.querySelector("#lt-kiinniketys__pkiinnike_four");
      lt_kv_one = document.querySelector("#lt-kiinniketys__vkiinnike_one");
      lt_kv_two = document.querySelector("#lt-kiinniketys__vkiinnike_two");
      lt_kv_three = document.querySelector("#lt-kiinniketys__vkiinnike_three");
      lt_kv_four = document.querySelector("#lt-kiinniketys__vkiinnike_four");

      function tyostanaytto(evt) {
        d_levyt = document.querySelectorAll(".levyt > .levy");
        for (var i = d_levyt.length - 1; i >= 0; i--) {
          tyosta(d_levyt[i], evt);
        }
        tyostot__tyosto_input = document.querySelectorAll(".tyostot__tyosto > input");
        for (var i = tyostot__tyosto_input.length - 1; i >= 0; i--) {
          // tyostot__tyosto_input[i].remove();
          // tyostot__tyosto_input[i].setAttribute("onchange", "change__tyostocord(this,1);");
          tyostot__tyosto_input[i].classList.add("x_cord_mki");
          tyostot__tyosto_input[i].setAttribute("onclick", "clearcord(this,'tyo');");
        }
        elements = document.querySelectorAll('.tyostot__tyosto');
        // Create a new array to hold the elements sorted by their offset left position
        const sortedElements = [];
        // Loop through the array of HTML elements and add them to the sortedElements array
        for (let i = 0; i < elements.length; i++) {
          const element = elements[i];
          sortedElements.push(element);
        }
        // Sort the array of HTML elements by their offset left position
        sortedElements.sort((a, b) => a.offsetLeft - b.offsetLeft);
      }
      kp_one.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kp_two.checked = false;
        kp_three.checked = false;
        kp_four.checked = false;
        evt = 1;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      kp_two.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kp_one.checked = false;
        kp_three.checked = false;
        kp_four.checked = false;
        evt = 2;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);
        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      kp_three.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kp_one.checked = false;
        kp_two.checked = false;
        kp_four.checked = false;
        evt = 3;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      kp_four.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kp_one.checked = false;
        kp_two.checked = false;
        kp_three.checked = false;
        evt = 4;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      kv_one.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kv_two.checked = false;
        kv_three.checked = false;
        kv_four.checked = false;
        evt = 5;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      kv_two.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kv_one.checked = false;
        kv_three.checked = false;
        kv_four.checked = false;
        evt = 6;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      kv_three.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kv_one.checked = false;
        kv_two.checked = false;
        kv_four.checked = false;
        evt = 7;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      kv_four.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        kv_one.checked = false;
        kv_two.checked = false;
        kv_three.checked = false;
        evt = 8;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });



      lt_kp_one.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kp_two.checked = false;
        lt_kp_three.checked = false;
        lt_kp_four.checked = false;
        evt = 1;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      lt_kp_two.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kp_one.checked = false;
        lt_kp_three.checked = false;
        lt_kp_four.checked = false;
        evt = 2;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      lt_kp_three.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kp_one.checked = false;
        lt_kp_two.checked = false;
        lt_kp_four.checked = false;
        evt = 3;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      lt_kp_four.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kp_one.checked = false;
        lt_kp_two.checked = false;
        lt_kp_three.checked = false;
        evt = 4;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      lt_kv_one.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kv_two.checked = false;
        lt_kv_three.checked = false;
        lt_kv_four.checked = false;
        evt = 5;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      lt_kv_two.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kv_one.checked = false;
        lt_kv_three.checked = false;
        lt_kv_four.checked = false;
        evt = 6;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      lt_kv_three.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kv_one.checked = false;
        lt_kv_two.checked = false;
        lt_kv_four.checked = false;
        evt = 7;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });
      lt_kv_four.addEventListener("click", function() {
        let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
        lt_kv_one.checked = false;
        lt_kv_two.checked = false;
        lt_kv_three.checked = false;
        evt = 8;
        for (var i = levyt.length - 1; i >= 0; i--) {
          if (levyt[i].classList.contains("visible") || evt != null) {
            tyosta(levyt[i], evt);
          }
        }
        // tyostanaytto(evt);

        l_container = document.querySelector(".ladonta_container");
        levy_visualisation = l_container.querySelector(".levy"); 
        countdown__kiinnikkeet(levy_visualisation);
      });

      if (canvas.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = canvas.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "none";
        }
      }
      if (canvas.querySelector(".closer")) {
        closers = canvas.querySelectorAll(".closer");
        for (var i = closers.length - 1; i >= 0; i--) {
          closers[i].style.opacity = 0;
          closers[i].style.zIndex = -1;
        }
      }

      let five_levy_closers = canvas.querySelectorAll(".closer");
      for (var i = five_levy_closers.length - 1; i >= 0; i--) {
        five_levy_closers[i].remove();
      }
      let k_levys = canvas.querySelectorAll(".levy");
      
      tyostot__tyosto_pysty = canvas.querySelectorAll(".levy_tyostot_x > div");
      tyostot__tyosto_vaaka = canvas.querySelectorAll(".levy_tyostot_y > div");
      for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
        tyostot__tyosto_pysty[i].style.opacity = 1;
      }
      for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
        tyostot__tyosto_vaaka[i].style.opacity = 1;
      }

      sauma__controls = canvas.querySelectorAll(".sauma__controls");

      for (var i = 0; i < sauma__controls.length; i++) {
        sauma__controls[i].style.opacity = 0;
        sauma__controls[i].style.zIndex = "-1";
        sauma__controls[i].style.display = "none";
      }

      // if(document.querySelector("#box-wrapper > div.drawarea__control.drawarea__right.disabled")) {
      //   document.querySelector("#box-wrapper > div.drawarea__control.drawarea__top.disabled").style.border = "unset";
      //   document.querySelector("#box-wrapper > div.drawarea__control.drawarea__right.disabled").style.border = "unset";
      // }


      for (var i = k_levys.length - 1; i >= 0; i--) {
        fixkiinnikkeet(k_levys[i]);
      }
      

    }
    else {
      sauma__controls = canvas.querySelectorAll(".sauma__controls");

      for (var i = 0; i < sauma__controls.length; i++) {
        sauma__controls[i].style.opacity = 1;
        sauma__controls[i].style.zIndex = 1;
        sauma__controls[i].style.display = "block";
      }

      if(document.querySelector("#box-wrapper > div.drawarea__control.drawarea__right.disabled")) {
        document.querySelector("#box-wrapper > div.drawarea__control.drawarea__right.disabled").style.borderLeft = "1px solid black";
        document.querySelector("#box-wrapper > div.drawarea__control.drawarea__top.disabled").style.borderBottom = "1px solid black";
      }
    }
    if (input_step == 'drawscreen_section_esikatselu') {
      $('.drawarea__section').show();
      for (var i = 0; i < da__controls.length; i++) {
        da__controls[i].style.display = "none";
      }
      sauma__controls = canvas.querySelectorAll(".sauma__controls");

      for (var i = 0; i < sauma__controls.length; i++) {
        sauma__controls[i].style.opacity = 0;
      }
      $("#drawscreen_section_esikatselu").show();
      $('.drawarea__controls_esikatselu').show();
      $('.drawarea__navigation').show();
      $("#drawscreen_section_esikatselu").slideDown(200);
      $('.drawarea__section').css('display', 'flex');
      $('.levy__section').css('display', 'none');
      document.querySelector("#box-wrapper > main").style.display = "block";
      document.querySelector(".drawarea__section").style.display = 'flex';
      document.querySelector("#box-wrapper").style.display = 'block';
      var drawarea__left = document.querySelector(".drawarea__left");
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      if (document.getElementById("settings__sauma_vaaka").checked) {
        document.getElementById("esikatselu__saumoitussuunta").innerHTML = "vaakaan";
      }
      else if (document.getElementById("settings__sauma_pysty").checked) {
        document.getElementById("esikatselu__saumoitussuunta").innerHTML = "pystyyn";
      }
      document.querySelector(".drawarea__control.drawarea__top").style.zIndex = '2';
      document.querySelector(".drawarea__control.drawarea__right").style.zIndex = '2';
      for (var i = 0; i < drawarea__top_circle.length; i++) {
        drawarea__top_circle[i].style.display = "none";
      }
      // Enable/disable levytysalue controls
      for (var i = 0; i < boxes.length; i++) {
        boxes[i].style.display = "none";
      }
      let sauma__controllers = document.querySelectorAll(".sauma__controls");
      for (var i = sauma__controllers.length - 1; i >= 0; i--) {
        sauma__controllers[i].style.opacity = "0.3";
        sauma__controllers[i].style.cursor = "not-allowed";
      }
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
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.remove("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'none';
      document.querySelector(".box__upper_upperdecor").style.display = 'none';
      document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.add("disabled");
      document.querySelector(".drawarea__top").classList.add("disabled");
      document.querySelector(".drawarea__right").classList.remove("m_btn");
      document.querySelector(".drawarea__top").classList.remove("m_btn");
      document.querySelector(".sauma__downctrl_container").classList.remove("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.remove("disabled");
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "none";
      }
      let five_levy_closers = canvas.querySelectorAll(".closer");
      for (var i = five_levy_closers.length - 1; i >= 0; i--) {
        five_levy_closers[i].remove();
      }
      let k_levys = canvas.querySelectorAll(".levy");
      for (var i = k_levys.length - 1; i >= 0; i--) {
        fixkiinnikkeet(k_levys[i]);
        countdown__kiinnikkeet(k_levys[i]);
      }
      tyostot__tyosto_pysty = canvas.querySelectorAll(".levy_tyostot_x > div");
      tyostot__tyosto_vaaka = canvas.querySelectorAll(".levy_tyostot_y > div");
      for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
        tyostot__tyosto_pysty[i].style.opacity = 1;
      }
      for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
        tyostot__tyosto_vaaka[i].style.opacity = 1;
      }
      if (canvas.querySelector(".closer")) {
        closers = canvas.querySelectorAll(".closer");
        for (var i = closers.length - 1; i >= 0; i--) {
          closers[i].style.opacity = 0;
          closers[i].style.zIndex = -1;
        }
      }

      sauma__controls = canvas.querySelectorAll(".sauma__controls");

      for (var i = 0; i < sauma__controls.length; i++) {
        sauma__controls[i].style.opacity = 0;
      }


      // draggable measure
      function k_drag(element) {
        let pos1 = 0,
          pos2 = 0,
          pos3 = 0,
          pos4 = 0;
        element.touchstart = dragMouseDown;

        function dragMouseDown(e) {
          e = e || window.event;
          e.preventDefault();
          pos3 = e.clientX;
          pos4 = e.clientY;
          document.touchend = closeDragElement;
          document.touchmove = elementDrag;
        }

        function k_elementDrag(e) {
          e = e || window.event;
          e.preventDefault();
          pos1 = pos3 - e.clientX;
          pos2 = pos4 - e.clientY;
          pos3 = e.clientX;
          pos4 = e.clientY;
          element.style.top = (element.offsetTop - pos2) + "px";
          element.style.left = (element.offsetLeft - pos1) + "px";
        }

        function k_closeDragElement() {
          document.touchend = null;
          document.touchmove = null;
        }
      }
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
      document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "none";
      }
      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "none";
        }
      }
    }
    else {

    }
    if (input_step == 'drawscreen_section_six') {
      $('.drawarea__section').show();
      $("#drawscreen_section_six").show();
      $('.drawarea__controls_six').show();
      $("#drawscreen_section_six").slideDown(200);
      $('.drawarea__section').css('display', 'flex');
      $('.levy__section').css('display', 'none');
      document.querySelector("#box-wrapper > main").style.display = "block";
      if (canvas.querySelector("div.tyostot__grandrow")) {
        canvas.querySelector("div.tyostot__grandrow").style.opacity = 1;
      }
      document.querySelector(".drawarea__section").style.display = 'flex';
      document.querySelector("#box-wrapper").style.display = 'block';
      var drawarea__left = document.querySelector(".drawarea__left");
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      document.querySelector(".drawarea__control.drawarea__top").style.zIndex = '2';
      document.querySelector(".drawarea__control.drawarea__right").style.zIndex = '2';
      drawarea__left.style.zIndex = "-1";
      drawarea__bottom.style.zIndex = "-1";
      for (var i = 0; i < da__controls.length; i++) {
        da__controls[i].style.display = "none";
      }
      for (var i = 0; i < drawarea__top_circle.length; i++) {
        drawarea__top_circle[i].style.display = "none";
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
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.remove("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'none';
      document.querySelector(".box__upper_upperdecor").style.display = 'none';
      document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.add("disabled");
      document.querySelector(".drawarea__top").classList.add("disabled");
      document.querySelector(".drawarea__right").classList.remove("m_btn");
      document.querySelector(".drawarea__top").classList.remove("m_btn");
      document.querySelector(".sauma__downctrl_container").classList.remove("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.remove("disabled");
      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "none";
        }
      }
      if (canvas.querySelector(".closer")) {
        closers = canvas.querySelectorAll(".closer");
        for (var i = closers.length - 1; i >= 0; i--) {
          closers[i].style.opacity = 0;
          closers[i].style.zIndex = -1;
        }
      }
      rangoita();
    }
    else {
      if (canvas.querySelector("div.tyostot__grandrow")) {
        canvas.querySelector("div.tyostot__grandrow").style.opacity = 0;
      }
    }
    if (input_step == 'drawscreen_section_seven') {
      if (canvas.querySelector("div.tyostot__grandrow")) {
        $('.drawarea__section').show();
        $("#drawscreen_section_seven").show();
        $('.drawarea__controls_seven').show();
        $("#drawscreen_section_seven").slideDown(200);
        $('.drawarea__section').css('display', 'flex');
        $('.levy__section').css('display', 'none');
        document.querySelector("#box-wrapper > main").style.display = "block";
        document.querySelector(".drawarea__section").style.display = 'flex';
        document.querySelector("#box-wrapper").style.display = 'block';
        var drawarea__left = document.querySelector(".drawarea__left");
        drawarea__left.onclick = function() {};
        var drawarea__bottom = document.querySelector(".drawarea__bottom");
        drawarea__bottom.onclick = function() {};
        document.querySelector(".drawarea__control.drawarea__top").style.zIndex = '2';
        document.querySelector(".drawarea__control.drawarea__right").style.zIndex = '2';
        for (var i = 0; i < da__controls.length; i++) {
          da__controls[i].style.display = "none";
        }
        for (var i = 0; i < drawarea__top_circle.length; i++) {
          drawarea__top_circle[i].style.display = "none";
        }
        if (document.querySelector("div.listat__grandrow")) {
          canvas.querySelector("div.listat__grandrow").style.opacity = 1;
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
        //Enable reclamation for 2.1-2.3
        document.querySelector(".drawarea__right").classList.remove("recl_btn");
        // Enable controls
        document.querySelector(".drawarea__bottom_container").style.display = 'none';
        document.querySelector(".box__upper_upperdecor").style.display = 'none';
        document.querySelector(".box__lower_lowerdecor").style.display = 'none';
        // Disable drawarea controls for 2.4-2.7
        document.querySelector(".drawarea__right").classList.add("disabled");
        document.querySelector(".drawarea__top").classList.add("disabled");
        document.querySelector(".drawarea__right").classList.remove("m_btn");
        document.querySelector(".drawarea__top").classList.remove("m_btn");
        document.querySelector(".sauma__downctrl_container").classList.remove("disabled");
        document.querySelector(".sauma__rightctrl_container").classList.remove("disabled");
        var saumas = document.querySelectorAll(".sauma");
        if (saumas) {
          for (var i = 0; i < saumas.length; i += 1) {
            saumas[i].style.zIndex = '2';
            saumas[i].classList.add('deformed');
          }
        }
        // Edit aukkos for 2.7 
        var aukkos = document.querySelectorAll(".aukko");
        if (aukkos) {
          for (var i = 0; i < aukkos.length; i += 1) {
            aukkos[i].classList.add('deformed');
          }
        }
        // Reklamation things for 2.8
        document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
        document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
        for (var i = 0; i < da__topitems_eight.length; i++) {
          da__topitems_eight[i].style.display = "none";
        }
        if (document.querySelector(".sauma__controls_del")) {
          let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
          for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
            sauma__controls_dels[i].style.display = "none";
          }
        }
        tyostot_grandrow = canvas.querySelector(".tyostot__grandrow");
        if (document.querySelector(".listat__grandrow")) {
          document.querySelector(".listat__grandrow").remove();
        }
        if (canvas.querySelector(".closer")) {
          closers = canvas.querySelectorAll(".closer");
          for (var i = closers.length - 1; i >= 0; i--) {
            closers[i].style.opacity = 0;
            closers[i].style.zIndex = -1;
          }
        }


        listat__grandrow = document.createElement("div");
        listat__grandrow.classList.add("listat__grandrow");
        canvas.prepend(listat__grandrow);
        listat__grandrow.innerHTML = tyostot_grandrow.innerHTML;
        listoitettu = false;
        listoitus();
      }
      else {
        $('#step_drawscreen').val('drawscreen_section_six');
        refresh__drawcontrols();
        updatearea();
        alert("Aseta rangat ennen listoja");
      }
    }
    else {
      if (document.querySelector(".listat__grandrow")) {
        // canvas.querySelector("div.listat__grandrow").style.opacity = 0;
      }
    }
    if (input_step == 'drawscreen_section_eight') {
      if (document.querySelector(".levy_tyostot_x") && document.querySelector(".levy_tyostot_y")) {}
      else {
        alert("Asetathan Levyt ja kiinnikkeet ennen seiniä.");
        $('#step_drawscreen').val('drawscreen_section_five');
        refresh__drawcontrols();
        updatearea();
        return;
      }
      $('.drawarea__section').show();
      $("#drawscreen_section_eight").show();
      $('.drawarea__controls_eight').show();
      $("#drawscreen_section_eight").slideDown(200);
      $('.levy__section').css('display', 'block');
      document.querySelector("#box-wrapper > main").style.display = "none";
      document.querySelector(".drawarea__section").style.display = 'flex';
      document.querySelector("#box-wrapper").style.display = 'block';
      var drawarea__left = document.querySelector(".drawarea__left");
      drawarea__left.onclick = function() {};
      var drawarea__bottom = document.querySelector(".drawarea__bottom");
      drawarea__bottom.onclick = function() {};
      for (var i = 0; i < da__controls.length; i++) {
        da__controls[i].style.display = "none";
      }
      for (var i = 0; i < drawarea__top_circle.length; i++) {
        drawarea__top_circle[i].style.display = "none";
      }
      // Enable/disable levytysalue controls
      for (var i = 0; i < boxes.length; i++) {
        boxes[i].style.display = "none";
      }
      // document.querySelector(".drawarea__controls_eight").style.display = 'none';
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
      //Enable reclamation for 2.1-2.3
      document.querySelector(".drawarea__right").classList.remove("recl_btn");
      // Enable controls
      document.querySelector(".drawarea__bottom_container").style.display = 'none';
      document.querySelector(".box__upper_upperdecor").style.display = 'none';
      document.querySelector(".box__lower_lowerdecor").style.display = 'none';
      // Disable drawarea controls for 2.4-2.7
      document.querySelector(".drawarea__right").classList.remove("disabled");
      document.querySelector(".drawarea__top").classList.remove("disabled");
      document.querySelector(".drawarea__right").classList.add("reclamation_btn");
      document.querySelector(".drawarea__top").classList.remove("m_btn");
      document.querySelector(".sauma__downctrl_container").classList.add("disabled");
      document.querySelector(".sauma__rightctrl_container").classList.add("disabled");
      // Reklamation things for 2.8
      document.querySelector("#box-wrapper").classList.add("drawarea__eight");
      // document.querySelector(".drawarea__right > span").innerHTML = 'Sanalliset reklamaatiot ja huomiot';
      for (var i = 0; i < da__topitems_eight.length; i++) {
        da__topitems_eight[i].style.display = "block";
      }
      if (document.querySelector(".sauma__controls_del")) {
        let sauma__controls_dels = document.querySelectorAll(".sauma__controls_del");
        for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
          sauma__controls_dels[i].style.display = "none";
        }
      }
      if (canvas.querySelector(".closer")) {
        closers = canvas.querySelectorAll(".closer");
        for (var i = closers.length - 1; i >= 0; i--) {
          closers[i].style.opacity = 0;
          closers[i].style.zIndex = -1;
        }
      }
      document.querySelector(".drawarea__top").style.display = "none";
      document.querySelector(".drawarea__right").style.display = "none";
      document.querySelector(".drawarea__bottom").style.display = "none";
      document.querySelector(".drawarea__left").style.display = "none";
      document.getElementById("copiedcanvases").style.display = "flex";
      // siirto_muualle();
      fixeight();

      canvas3 = document.getElementById("canvas3");
      lineinbuts = canvas3.querySelectorAll(".lineinput");

      for (var a = 0; a < lineinbuts.length; a++) {
        lineinbuts[a].style.display = "none";
      }



    }
    else {
      document.querySelector(".drawarea__top").style.display = "flex";
      document.querySelector(".drawarea__right").style.display = "flex";
      document.querySelector(".drawarea__bottom").style.display = "block";
      document.querySelector(".drawarea__left").style.display = "block";
      document.getElementById("copiedcanvases").style.display = "none";
      // if(document.querySelector(".secondcanvas")) {
      //    secondcanvas = document.querySelectorAll(".secondcanvas");
      //    for (var i = secondcanvas.length - 1; i >= 0; i--) {
      //       secondcanvas[i].remove();
      //    }
      // }
      // document.getElementById("copiedcanvases").style.display = "none";

      canvas3 = document.getElementById("canvas3");
      lineinbuts = canvas3.querySelectorAll(".lineinput");

      for (var a = 0; a < lineinbuts.length; a++) {
        lineinbuts[a].style.display = "block";
      }


    }

    da_b = document.querySelector(".drawarea__bottom");
   da_l = document.querySelector(".drawarea__left");

   changeheights();

   if(da_b.querySelector(".end_measure")) {
    b_end_measure.innerHTML = parseFloat(document.querySelector("#box_w").value)+10;
   }
   else {
    b_start_measure = document.createElement("b");
    b_start_measure.innerHTML = "0";
    b_end_measure = document.createElement("b");
    b_end_measure.innerHTML = parseFloat(document.querySelector("#box_w").value)+10;
    b_end_measure.style.right = -10 + "px";

    b_start_measure.classList.add("start_measure");
    b_end_measure.classList.add("end_measure");
    b_start_measure.classList.add("aukko__cord");
    b_end_measure.classList.add("aukko__cord");

    da_b.appendChild(b_start_measure);
    da_b.appendChild(b_end_measure);
   }

   if(da_l.querySelector(".end_measure")) {
    end_measure.innerHTML = parseFloat(document.querySelector("#box_h").value)+10;
   }
   else {
    start_measure = document.createElement("b");
    start_measure.innerHTML = "0";
    end_measure = document.createElement("b");
    end_measure.innerHTML = parseFloat(document.querySelector("#box_h").value)+10;
    end_measure.style.top = -10 + "px";

    start_measure.classList.add("start_measure");
    end_measure.classList.add("end_measure");
    start_measure.classList.add("aukko__cord");
    end_measure.classList.add("aukko__cord");

    da_l.appendChild(start_measure);
    da_l.appendChild(end_measure);
   }

    // Modal button
    var m_btn = document.getElementsByClassName("m_btn");
    var m_c = document.getElementsByClassName("modal-container");
    document.querySelectorAll('.m_btn').forEach(item => {
      item.addEventListener('click', event => {
        if (item.classList.contains('m_btn')) {
          for (var i = 0; i < m_c.length; i++) {
            m_c[i].classList.add("two");
            m_c[i].classList.remove("out");
            document.querySelector("body").classList.add("modal-active")
          }
        }
      });
    });
    document.querySelectorAll('.modal_close_btn').forEach(item => {
      item.addEventListener('click', event => {
        for (var i = 0; i < m_c.length; i++) {
          m_c[i].classList.remove("two");
          m_c[i].classList.add("out");
          document.querySelector("body").classList.remove("modal-active")
        }
      });
    });
    // Modal button
    var recl_btn = document.getElementsByClassName("recl_btn");
    var reclamation__popup = document.querySelector("#reclamation__popup");
    document.querySelectorAll('.recl_btn').forEach(recl_modal => {
      recl_modal.addEventListener('click', event => {
        if (recl_modal.classList.contains('recl_btn')) {
          reclamation__popup.classList.add("two");
          reclamation__popup.classList.remove("out");
          document.querySelector("body").classList.add("modal-active");
        }
      });
    });
    document.querySelectorAll('.modal_close_btn').forEach(recl_modal => {
      recl_modal.addEventListener('click', event => {
        reclamation__popup.classList.remove("two");
        reclamation__popup.classList.add("out");
        document.querySelector("body").classList.remove("modal-active");
      });
    });
    // function drawarea__left__sauma() {
    //   alert ("Hello World!");
    // }
  }, 300);
  if (current_room !== null) {
    submitprogress('', 'save');
  }
}
var addFunctionOnWindowLoad = function(callback) {
  if (window.addEventListener) {
    window.addEventListener('load', callback, false);
  }
  else {
    window.attachEvent('onload', callback);
  }
}
addFunctionOnWindowLoad(refresh__drawcontrols);

function submitprogress(b, moddingtype, id, type, array) {
  setTimeout(function() {
    var input_step = $('#step_drawscreen').val();
    $('.id').each(function(i, obj) {
      value = $("#project__building_id").text();
      $(obj).val(value);
      var _id = value;
    });
    var _id = value;
    $('.wall').each(function(i, obj) {
      value = $(b).text();
      $(obj).val(value);
      var _wall = value;
    });
    var _wall = value;
    $('.room').each(function(i, obj) {
      value = $('#roomname').val();
      $(obj).val(value);
      var _room = value;
    });
    var _room = value;
    $('.step').each(function(i, obj) {
      value = "drawscreen_section_zero";
      $(obj).val(value);
      var _step = value;
    });
    var _step = value;
    $('.settings').each(function(i, obj) {
      value = "{}";
      $(obj).val(value);
      var _settings = value;
    });
    var _settings = value;
    $('.kokonaisalue').each(function(i, obj) {
      h = $(this).parent().find('input.wall_height').val();
      w = $(this).parent().find('input.wall_width').val();
      value = h + " " + w;
      $(obj).val(value);
      var _kokonaisalue = value;
    });
    value = h + "|" + w;
    var _kokonaisalue = value;
    $('.levytettava_alue').each(function(i, obj) {
      h = $('.drawarea__h_cord').text();
      w = $('.drawarea__w_cord').text();
      value = h + " " + w;
      $(obj).val(value);
    });
    var _levytettava_alue = value;
    $('.poisjaava_alue').each(function(i, obj) {
      u = $('.box__upper_mm').text();
      r = $('.box__right_mm').text();
      _u = $('.box__lower_mm').text();
      _r = $('.box__left_mm').text();
      value = u + "," + r + "," + _u + "," + _r;
      $(obj).val(value);
    });
    var _poisjaava_alue = value;
    $('.keskusmittapiste_cord').each(function(i, obj) {
      l = $("#drawarea__origo_central").css("left");
      t = $("#drawarea__origo_central").css("bottom");
      value = l + "," + t;
      $(obj).val(value);
    });
    var _keskusmittapiste_cord = value;
    const x = [];
    $('.reklamaatiot').each(function(i, obj) {
      if ($("#mitta__huomiot")) {
        if ($('#m__a_sahko').is(':checked')) {
          x.push("sahko,");
        }
        else if ($('#m__a_putki').is(':checked')) {
          x.push("putki,");
        }
        else if ($('#m__a_tornado').is(':checked')) {
          x.push("jotain,");
        }
        else if ($('#comment__importance').is(':checked')) {
          x.push("tarkea");
        }
        x.push($('#mitta__huomiot').val());
        x.push($('#mittapiste_comment').val());
        x.push($('#mittapiste_comment_from').val());
        x.push($('#mittapiste_comment_to').val());
        $(obj).val(x);
      }
    });
    var _reklamaatiot = x;
    var _listat = value;
  }, 1000);
  if (moddingtype === "adding") {
    prevdata = array;
    if (type === "mp") {
      mps = document.querySelector("input.mittapisteet");
      mps.value += array;
    }
    if (type === "aukot") {
      aukkos = document.querySelector("input.aukot");
      aukkos.value += array;
    }
    if (type === "lv") {
      lapiviennit = document.querySelector("input.lapiviennit");
      lapiviennit.value += array;
    }
     if (type === "sau") {
      array = [];
      saumat_data = document.querySelector("input.saumat_data");


      if(saumat_data.value.length > 2) {
        document.querySelector("input.saumat_dataforback").value = saumat_data.value;
      }
      saumat_data.value = "";
      v_s = document.querySelectorAll('.verticalrow_saumat > div');
      h_s = document.querySelectorAll('.horizontalrow_saumat > div');
      for (var i = 0; i < v_s.length; i++) {
        vs_name = parseFloat(v_s[i].dataset.no);
        vs_type = "pysty";
        vs_b = 0;
        vs_left = parseFloat(v_s[i].style.left);
        vs_cord = v_s[i].querySelector(".sauma__vertical_ctrl").value;
        array += vs_name + "|" + vs_type + "|" + vs_b + "|" + vs_left + "|" + vs_cord + "|" + vs_name + "__";
      }
      for (var i = 0; i < h_s.length; i++) {
        vs_name = h_s[i].dataset.no;
        vs_type = "vaaka";
        vs_b = parseFloat(h_s[i].style.bottom);
        vs_left = 0;
        vs_cord = h_s[i].querySelector(".sauma__horizontal_ctrl").value;
        array += vs_name + "|" + vs_type + "|" + vs_b + "|" + vs_left + "|" + vs_cord + "|" + vs_name + "__";
      }
      saumat_data = document.querySelector("input.saumat_data");
      saumat_data.value = array;
      realval = saumat_data.value;
      saumat_data.value =  realval.replace(",","__");


      prevdata = document.querySelector("input.saumat_dataforback").value;
    }
    if (type === "lev") {
      levy_array = [];
      levyt_data = document.querySelector("input.levyt_data");
      levyt_data.value = "";
      levy_item = canvas.querySelectorAll('.levy');
      for (var i = 0; i < levy_item.length; i++) {

        l_name = levy_item[i].querySelector(".levy_name").innerHTML;
        if(levy_item[i].classList.contains("dir_y")) {
          l_type = "pysty";
        }
        else if(levy_item[i].classList.contains("dir_x")) {
          l_type = "vaaka";
        }
        l_title = levy_item[i].title;

        l_b =  parseFloat(levy_item[i].style.bottom)*5;
        l_l =  parseFloat(levy_item[i].style.left)*5;
        l_w =  parseFloat(levy_item[i].style.width)*5;
        l_h =  parseFloat(levy_item[i].style.height)*5;
        
        l_title =  parseFloat(l_h)+"--"+parseFloat(l_w) +"--"+parseFloat(l_b)+"--"+ parseFloat(l_l);

        l_no = levy_item[i].dataset.levy;

        l_tyostot_y = "";
        l_tyostot_x = "";

        
        levy_array += l_name+"|"+l_type+"|"+l_b+"|"+l_l+"|"+l_h+"|"+l_w+"|"+l_title+"|"+l_no+"|"+l_tyostot_y+"|"+l_tyostot_x+"|";
      }
      levyt_data = document.querySelector("input.levyt_data");
      levyt_data.value = levy_array;
      realval = levyt_data.value;
      levyt_data.value =  realval.replace("_"," ");
      prevdata = levyt_data.value;
    }
    if (type === "rangat") {
      rangat = document.querySelector("input.rangat");
      rangat.value += array;
    }
    if (type === "listat") {
      listat = document.querySelector("input.listat");
      listat.value += array;
    }
  }
  if (moddingtype === "cancel") {
    if (type === "mp") {
      cur_mp = document.querySelector('#' + id);
      cur_mp.remove();
      names = document.getElementsByName(id);
      for (var i = 0; i < names.length; i++) {
        names[i].remove();
      }
      inpu = document.querySelector(".mittapisteet");
      val = inpu.value;
      pdata = array.replace('"', '');
      inpu.value = val.replace(pdata, "");
      mp_previous_vord = pdata.split("|")[1] + "|" + pdata.split("|")[2];
    }
    if (type === 'aukot') {
      inpu = document.querySelector(".aukot");
      val = inpu.value;
      pdata = array.replace('"', '');
      inpu.value = val.replace(pdata, "");

      names = document.getElementsByName(id);
      for (var i = 0; i < names.length; i++) {
        names[i].remove();
      }
    }
    if (type === 'lv') {
      inpu = document.querySelector(".lapiviennit");
      val = inpu.value;
      pdata = array.replace('"', '');
      inpu.value = val.replace(pdata, "");

      names = document.getElementsByName(id);
      for (var i = 0; i < names.length; i++) {
        names[i].remove();
      }
    }
  }
  if (moddingtype === "back") {
    // if(array) {
    //    prevdata = array;
    // }
    if (prevdata !== null) {
      if (type === "mp") {
        inpu = document.querySelector(".mittapisteet");
        val = inpu.value;
        if (val.includes(prevdata)) {
          obj = prevdata.split("|")[4].replace("__", "").toLowerCase();
          if (document.querySelector('#' + obj) && document.querySelector('#' + obj).dataset.prevcord) {
            document.querySelector('#' + obj).style.bottom = parseFloat(document.querySelector('#' + obj).dataset.prevcord.split("|")[1]) / 5 +
            "px";
            document.querySelector('#' + obj).style.left = parseFloat(document.querySelector('#' + obj).dataset.prevcord.split("|")[2]) / 5 + "px";
          }
          else {
            if (document.querySelector('#' + obj)) {
              document.querySelector('#' + obj).remove();
              mittapiste_count -= 1;
            }
            if (document.getElementsByName(obj)) {
              names = document.getElementsByName(obj);
              for (var i = 0; i < names.length; i++) {
                names[i].remove();
              }
            }
            pdata = prevdata.replace('"', '');
            inpu.value = val.replace(pdata, "");
          }
        }
      }
      if (type === "aukot") {
        inpu = document.querySelector(".aukot");
        val = inpu.value;
        if (val.includes(prevdata)) {
          pdata = prevdata.replace('"', '');
          inpu.value = val.replace(pdata, "");
          og_id = pdata.split("|")[4].replace('__', '').toLowerCase();
          aukko = canvas.querySelector("#" + og_id);
          if (document.querySelector('#' + og_id) && document.querySelector('#' + og_id).dataset.prevcord) {
            aukko.style.bottom = parseFloat(aukko.dataset.prevcord.split("|")[1]) / 5 + "px";
            aukko.style.left = parseFloat(aukko.dataset.prevcord.split("|")[2]) / 5 + "px";
            aukko.style.width = parseFloat(aukko.dataset.prevcord.split("|")[3]) / 5 + "px";
            aukko.style.height = parseFloat(aukko.dataset.prevcord.split("|")[4]) / 5 + "px";
            document.querySelector('#' + og_id + ' > .newDiv__height').innerHTML = parseFloat(aukko.style.height)*5;
            document.querySelector('#' + og_id + ' > .aukko_inner_lcord').style.bottom = -30 + parseFloat(aukko.style.height) + "px";
            document.querySelector('#' + og_id + ' > .newDiv__width').innerHTML = parseFloat(aukko.style.width)*5;
            document.querySelector('#' + og_id + ' > .aukko_inner_rcord').style.bottom = -30 + parseFloat(aukko.style.height) + "px";
            document.querySelector('#' + og_id + ' > .aukko_inner_rcord').style.left = -30 + parseFloat(aukko.style.width) + "px";
            document.querySelector('#' + og_id + ' > .newDiv__y').innerHTML = "Y: " + (parseFloat(aukko.dataset.prevcord.split("|")[1]) +
              parseFloat(aukko.dataset.prevcord.split("|")[4]));
            document.querySelector('#' + og_id + ' > .newDiv__x').innerHTML = "X: " + (parseFloat(aukko.style.left) + parseFloat(aukko.style
              .width));
          }
          else {
            aukko_del(aukko, "");
          }
        }
      }
      if (type === "lv") {
        inpu = document.querySelector(".lapiviennit");
        val = inpu.value;
        if (val.includes(prevdata)) {
          pdata = prevdata.replace('"', '');
          inpu.value = val.replace(pdata, "");
          obj = prevdata.split("|")[4].replace("__", "");
          if (document.querySelector('#' + obj) && document.querySelector('#' + obj).dataset.prevcord) {
            document.querySelector('#' + obj).style.bottom = parseFloat(document.querySelector('#' + obj).dataset.prevcord.split("|")[1]) / 5 +
            "px";
            document.querySelector('#' + obj).style.left = parseFloat(document.querySelector('#' + obj).dataset.prevcord.split("|")[2]) / 5 + "px";

            real_lv = document.querySelector('#' + obj);

            real_lv.querySelector(".lv_lcord").innerHTML = parseFloat(document.querySelector('#' + obj).style.bottom)*5;
            real_lv.querySelector(".lv_bcord").innerHTML = parseFloat(document.querySelector('#' + obj).style.left)*5;

          }
          else {
            if (document.querySelector('#' + obj)) {
              document.querySelector('#' + obj).remove();
              lapivienti_count -= 1;
            }
            if (document.getElementsByName(obj)) {
              names = document.getElementsByName(obj);
              for (var i = 0; i < names.length; i++) {
                names[i].remove();
              }
            }
          }
        }
      }
    }
    if (type === "sau") {
        ir_sau_ = document.querySelector(".saumat_dataforback").value;
        somat = canvas.querySelectorAll(".sauma");

        for (var i = 0; i < somat.length; i++) {
          somat[i].remove();
        }
        document.querySelector(".drawarea__controls_four-pysty").innerHTML = "";
        document.querySelector(".drawarea__controls_four-vaaka").innerHTML = "";

        ir_sau = ir_sau_.split("__");
        //SAUMAT 
        if(ir_sau.length > 1) {
          for (var i = ir_sau.length - 1; i >= 0; i--) {
         
            sau_data = ir_sau[i].split("|");
            if(sau_data.length >1) {
              sau_name = sau_data[0];
              sau_type = sau_data[1];
              sau_b = sau_data[2];
              sau_left = sau_data[3];
              sau_cord = sau_data[4];
              sau_name = sau_data[5];
              luo__sauma_restore(sau_name, sau_type, sau_b, sau_left, sau_cord, sau_name);
              if (sau_type == 'pysty') {}
              if (sau_type == 'vaaka') {}
            }
            
          }
          alkusaumat();
          calculateamounts();
          sauma__verticals = canvas.querySelectorAll(".sauma__vertical");
          sauma__horizontals = canvas.querySelectorAll(".sauma__horizontal");
          if (canvas.querySelector(".sauma__vertical")) {
            for (var i = 0; i < sauma__verticals.length; i++) {
              if (sauma__verticals[i].querySelector(".sauma__controls_del")) {
                sauma__verticals[i].querySelector(".sauma__controls_del").innerHTML = i + 1;
                sauma__verticals[i].dataset.no = i + 1;
              }
            }
            s_v = i + 1;
          }
          if (canvas.querySelector(".sauma__horizontal")) {
            for (var i = 0; i < sauma__horizontals.length; i++) {
              if (sauma__horizontals[i].querySelector(".sauma__controls_del")) {
                sauma__horizontals[i].querySelector(".sauma__controls_del").innerHTML = String.fromCharCode(65 + parseFloat(i + 1));
                sauma__horizontals[i].dataset.no = String.fromCharCode(65 + parseFloat(i + 1));
              }
            }
            s_h = i + 1;
          }

          dels = canvas.querySelectorAll(".sauma__controls_del");
      
          for (var i = dels.length - 1; i >= 0; i--) {
            sauma = dels[i].parentElement.parentElement;
            if(dels[i].querySelector(".delmeasure")) {
              delmeasure = dels[i].querySelector(".delmeasure");
              if(sauma.classList.contains("sauma__vertical")) {
                delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.left)*5);
              }
              else if(sauma.classList.contains("sauma__horizontal")) {
                delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.bottom)*5);
              }
            }
            else {
              
              delmeasure = document.createElement("div");
              delmeasure.classList.add("delmeasure");
              if(sauma.classList.contains("sauma__vertical")) {
                delmeasure.classList.add("delmeasure_vertical");
                delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.left)*5);
              }
              else if(sauma.classList.contains("sauma__horizontal")) {
                delmeasure.classList.add("delmeasure_horizontal");
                delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.bottom)*5);
              }

              dels[i].appendChild(delmeasure);
            }
          }



          saumasize__checkup();

          // sauma_h = canvas.querySelectorAll(".sauma__horizontal");
          // sauma_v = canvas.querySelectorAll(".sauma__vertical");
          // sauma_h.forEach(function(j) {
          //   j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
          //     resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
          //   });
          //   j.addEventListener('touchmove', (e) => {
          //     resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
          //   });
          // });

          // sauma_v.forEach(function(j) {
          //   j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
          //       resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
          //   });
          //   j.addEventListener('touchmove', (e) => {
          //     resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
          //   });
          // });

          setTimeout(function() {levyta();console.log("LEVYTÄ FIRED")}, 1000);

          calculateamounts();
        }
      }
    prevdata = null;
  }
  if (moddingtype === "save") {
    setTimeout(function() {
      $('.id').each(function(i, obj) {
        value = $("#project__building_id").text();
        $(obj).val(value);
        var _id = value;
      });
      var _id = value;
      saving_array = [];
      saving_id = $('.id').val();
      saving_origo = parseFloat(document.querySelector("#drawarea__origo_central").style.left) + "|" + parseFloat(document.querySelector(
        "#drawarea__origo_central").style.bottom);
      _saving_walls = $('.walls_content').val();
      _a_asetukset = $('.a_asetukset').val();
      saving_mps = $('.mittapisteet').val();
      saving_aus = $('.aukot').val();
      saving_lv = $('.lapiviennit').val();
      saving_sau = $('.saumat_data').val();
      saving_lev = $('.levyt_data').val();
      saving_w = $('#box_w').val();
      saving_h = $('#box_h').val();
      saving_cord = saving_h + "|" + saving_w;
      saving_array.push(saving_id);
      saving_array.push(saving_origo);
      saving_array.push(saving_cord);
      saving_array.push(saving_mps);
      saving_array.push(saving_aus);
      saving_array.push(saving_lv);
      saving_array.push(saving_sau);
      saving_array.push(saving_lev);
      //current_room = 'C';  TEMPORARY FOR TESTING
      $('.' + current_room.toLowerCase() + "_saved").val(saving_array);
      _saving_k = $(".k_saved").val();
      _saving_a = $(".a_saved").val();
      _saving_b = $(".b_saved").val();
      _saving_c = $(".c_saved").val();
      _saving_d = $(".d_saved").val();
      _saving_l = $(".l_saved").val();
      // _saving_walls = $(".walls_content").val();

      saving_k = _saving_k.replace('"', '').replace("'", "");
      saving_a = _saving_a.replace('"', '').replace("'", "");
      saving_b = _saving_b.replace('"', '').replace("'", "");
      saving_c = _saving_c.replace('"', '').replace("'", "");
      saving_d = _saving_d.replace('"', '').replace("'", "");
      saving_l = _saving_l.replace('"', '').replace("'", "");
      s_walls = _saving_walls.replace('"', '').replace("'", "");
      a_asetukset = _a_asetukset.replace('"', '').replace("'", "");
      console.log("_saving_walls" + s_walls);
      formData = {
        id: _id.replace('"', '').replace("'", ""),
        k_saved: _saving_k.replace('"', '').replace("'", ""),
        a_saved: _saving_a.replace('"', '').replace("'", ""),
        b_saved: _saving_b.replace('"', '').replace("'", ""),
        c_saved: _saving_c.replace('"', '').replace("'", ""),
        d_saved: _saving_d.replace('"', '').replace("'", ""),
        l_saved: _saving_l.replace('"', '').replace("'", ""),
        w_content: s_walls.replace('"', '').replace("'", ""),
        aukko_settings: a_asetukset.replace('"', '').replace("'", ""),
        // lapiviennit: _lapiviennit,
        // saumat: _saumat,
        // levyt: _levyt,
        // rangat: _rangat,
        // listat: _listat,
        // kokonaisalue: _kokonaisalue,
        // levytettava_alue: _levytettava_alue,
        // poisjaava_alue: _poisjaava_alue,
        // keskusmittapiste_cord: _keskusmittapiste_cord,
        // reklamaatiot: _reklamaatiot,
      };

      $.ajax({
        type: "POST",
        url: "/updateproject.php",
        data: formData,
        error: function(jqxhr, status, exception) {
          alert('Tietokantavirhe, soita numeroon +358449782028');
        }
      }).done(function(data) {
        // alert('Seinä ' + current_room + ' tallennettu');
        // console.log("saved Data: " + data);
      });
    }, 500);
  }
}

function nav_betweenwalls(b) {
  setTimeout(function() {
    rooms_array = [];
    $('#house .house__wall').each(function(i, obj) {
      wall_name = $(this).find(".house__wall_status").data("room");
      wall_h = $(this).find('input.house__wall_param:nth-child(2)').val();
      wall_w = $(this).find('input.house__wall_param:nth-child(3)').val();
      wall_class = $(this).find('.house__wall_status').attr("class");
      rooms_array.push(wall_name + "|" + wall_h + "|" + wall_w + "|" + wall_class);
    });
    da_houses = document.querySelectorAll(".drawarea__house");
    for (var a = da_houses.length - 1; a >= 0; a--) {
      for (var i = 0; i < rooms_array.length; i++) {
        da_houses[a].querySelectorAll(".house__wall_status")[i].innerHTML = rooms_array[i].split("|")[0].replace("Seinä", "").replace("KATTO",
          "K").replace("LATTIA", "L").replace(" ", "");
        classes = rooms_array[i].split("|")[3].split(" ");
        for (var b = 0; b < classes.length; b++) {
          da_houses[a].querySelectorAll(".house__wall_status")[i].classList.add(classes[b]);
        }
        da_houses[a].querySelectorAll(".wall_height")[i].value = parseFloat(rooms_array[i].split("|")[1]);
        da_houses[a].querySelectorAll(".wall_width")[i].value = parseFloat(rooms_array[i].split("|")[2]);
      }
    }
    $('.walls').val(rooms_array);
  }, 1000);
}

function initializeroom(room, menu) {
  ir_no = room.dataset.room;
  ir_value = document.querySelector("." + ir_no.toLowerCase() + "_saved").value;
  mode_room = ir_no.toLowerCase();

  // INITIALIZE CURRENT STATUS DA
  da_roomnav = document.querySelectorAll(".house__wall");
  for (var i = da_roomnav.length - 1; i >= 0; i--) {
    da_roomnav[i].classList.remove("current__housewall");
  }
  da_curnav = document.querySelectorAll(".tohide__room_" + mode_room);
  for (var i = da_curnav.length - 1; i >= 0; i--) {
    da_curnav[i].classList.add("current__housewall");
  }
  // START CLEARING
  mps = canvas.querySelectorAll(".mp");
  aukkos = canvas.querySelectorAll(".aukko");
  lvs = canvas.querySelectorAll(".lv");
  for (var i = 0; i < mps.length; i++) {
    mps[i].remove();
  }
  for (var i = 0; i < aukkos.length; i++) {
    aukkos[i].remove();
  }

  for (var i = 0; i < lvs.length; i++) {
    lvs[i].remove();
  }
  document.querySelector(".drawarea__controls_elementsone").innerHTML = "";
  document.querySelector(".drawarea__controls_elementstwo").innerHTML = "";
  lapivienti_count = 0;
  mittapiste_count = 0;
  mp_previous_vord = null;
  au_previous_vord = null;
  lv_previous_vord = null;
  document.querySelector(".drawarea__controls_origoset").innerHTML = "Origo oikealle";
  document.querySelector("#drawarea__origo_central").style.left = "1px";
  document.querySelector("#drawarea__origo_central").style.bottom = "1px";
  
  document.querySelector(".mittapisteet").value = "";
  document.querySelector(".aukot").value = "";
  document.querySelector(".lapiviennit").value = "";
  document.querySelector(".saumat_data").value = "";
  document.querySelector(".levyt_data").value = "";
  document.querySelector(".rangat").value = "";
  document.querySelector(".listat").value = "";


  if (canvas.querySelector(".saumat__grandrow")) {
    canvas.querySelector(".saumat__grandrow").remove();
  }
  if (canvas.querySelector(".levyt")) {
    canvas.querySelector(".levyt").remove();
  }
  if (canvas.querySelector(".tyostot__grandrow")) {
    canvas.querySelector(".tyostot__grandrow").remove();
  }
  if (canvas.querySelector(".listat__grandrow")) {
    canvas.querySelector(".listat__grandrow").remove();
  }
  // STOP CLEARING
  if (ir_value.length > 5) {
    ir_splitted = ir_value.split(",");
    ir_id = ir_splitted[0];
    ir_origo = ir_splitted[1];
    ir_origo_x = parseFloat(ir_splitted[1].split("|")[0]);
    ir_origo_y = parseFloat(ir_splitted[1].split("|")[1]);
    // Origo formatting DISABLED
    if(ir_origo_x == 1 && ir_origo_y == 1) {
       document.querySelector(".drawarea__controls_origoset").innerHTML = "Origo oikealle";
    }
    else if(ir_origo_x > 1 && ir_origo_y > 1) {
       document.querySelector(".drawarea__controls_origoset").innerHTML = "Origo vasemmalle";
    }
    else if(ir_origo_x > 1 && ir_origo_y == 1) {
       document.querySelector(".drawarea__controls_origoset").innerHTML = "Origo ylös";
    }
    else if(ir_origo_x == 1 && ir_origo_y > 1) {
       document.querySelector(".drawarea__controls_origoset").innerHTML = "Origo alas";
    }
    document.querySelector("#drawarea__origo_central").style.left = ir_origo_x + "px";
    document.querySelector("#drawarea__origo_central").style.bottom = ir_origo_y + "px";
    if(menu) {
    }
    if (room.parentElement.querySelector(".wall_height") && room.parentElement.querySelector(".wall_width")) {
      room_h = parseFloat(room.parentElement.querySelector(".wall_height").value);
      room_w = parseFloat(room.parentElement.querySelector(".wall_width").value);
      document.querySelector("#drawarea_h").value = parseFloat(room_h);
      document.querySelector("#drawarea_w").value = parseFloat(room_w);
      setTimeout(changesize(), 1000);
    }
    else {
      // Alue formaddig OKKKKKKK
      ir_alue = ir_splitted[2];
      ir_alue_x = ir_splitted[2].split("|")[1];
      ir_alue_y = ir_splitted[2].split("|")[0];
      document.querySelector("#drawarea_h").value = parseFloat(ir_alue_y);
      document.querySelector("#drawarea_w").value = parseFloat(ir_alue_x);
      setTimeout(changesize(), 1000);
    }
    ir_mps = ir_splitted[3].split("__");
    ir_aus = ir_splitted[4].split("__");
    ir_lv =  ir_splitted[5].split("__");
    ir_sau = ir_splitted[6].split("__");
    ir_lev = ir_splitted[7].split("__");
    ir_kin = ""; //ir_splitted[5].split("__");
    ir_ran = ""; //ir_splitted[5].split("__");
    ir_lis = ""; //ir_splitted[5].split("__");


    // LISTAT
    if(ir_lis.length > 1) {}

    // RANGAT
    else if(ir_ran.length > 1) {}

    // KIINNIKKEET
    else if(ir_kin.length > 1) {}

    // LEVYT
    else if(ir_lev.length > 1) {
      // MPs formatting
      for (var i = 0; i < ir_mps.length; i++) {
        if (ir_mps[i].length > 3) {
          ir_mps_name = ir_mps[i].split("|")[0];
          ir_mps_b = parseFloat(ir_mps[i].split("|")[1]);
          ir_mps_l = parseFloat(ir_mps[i].split("|")[2]);
          ir_mps_vount = parseFloat(ir_mps[i].split("|")[3]);
          ir_mps_id = ir_mps[i].split("|")[4];
          mitta__create_mitta("restoring", "mp", ir_mps_name, ir_mps_b, ir_mps_l, '', '', ir_mps_vount, ir_mps_id, mode_room);
        }
      }
      
      for (var i = 0; i < ir_aus.length; i++) {
        if (ir_aus[i].length > 3) {
          ir_aus_name = ir_aus[i].split("|")[0];
          ir_aus_b = parseFloat(ir_aus[i].split("|")[1]);
          ir_aus_l = parseFloat(ir_aus[i].split("|")[2]);
          ir_aus_h = parseFloat(ir_aus[i].split("|")[5]);
          ir_aus_w = parseFloat(ir_aus[i].split("|")[6]);
          ir_aus_vount = parseFloat(ir_aus[i].split("|")[3]);
          ir_aus_id = ir_aus[i].split("|")[4];
          ir_aus_classes = ir_aus[i].split("|")[7];

          ir_aus_comment = ir_aus[i].split("|")[8];
          ir_aus_cfrom = ir_aus[i].split("|")[9];
          ir_aus_cto = ir_aus[i].split("|")[10];
          mitta__create_mitta("restoring", "au", ir_aus_name, ir_aus_b, ir_aus_l, ir_aus_h, ir_aus_w, ir_aus_vount, ir_aus_id, ir_aus_classes,ir_aus_comment,ir_aus_cfrom,ir_aus_cto);
          // mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
          // Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
        }
      }

      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_three');
      
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_four');
      if (document.querySelector(".saumat__grandrow")) {
        saumat = document.querySelector(".saumat__grandrow");
      }
      else {
        saumat = document.createElement("div");
        saumat.classList.add("saumat__grandrow");
        canvas.appendChild(saumat);
      }
      if (saumat.querySelector(".horizontalrow_saumat")) {}
      else {
        newrow_horizontal = document.createElement("div");
        saumat.appendChild(newrow_horizontal);
        newrow_horizontal.classList.add("horizontalrow_saumat");
      }
      if (saumat.querySelector(".verticalrow_saumat")) {}
      else {
        newrow_vertical = document.createElement("div");
        saumat.appendChild(newrow_vertical);
        newrow_vertical.classList.add("verticalrow_saumat");
      }
      for (var i = ir_sau.length - 1; i >= 0; i--) {
        sau_data = ir_sau[i].split("|");

        sau_name = sau_data[0];
        sau_type = sau_data[1];
        sau_b = sau_data[2];
        sau_left = sau_data[3];
        sau_cord = sau_data[4];
        sau_name = sau_data[5];
        luo__sauma_restore(sau_name, sau_type, sau_b, sau_left, sau_cord, sau_name);
        if (sau_type == 'pysty') {}
        if (sau_type == 'vaaka') {}
      }
      alkusaumat();
      calculateamounts();
      sauma__verticals = canvas.querySelectorAll(".sauma__vertical");
      sauma__horizontals = canvas.querySelectorAll(".sauma__horizontal");
      if (canvas.querySelector(".sauma__vertical")) {
        for (var i = 0; i < sauma__verticals.length; i++) {
          if (sauma__verticals[i].querySelector(".sauma__controls_del")) {
            sauma__verticals[i].querySelector(".sauma__controls_del").innerHTML = i + 1;
            sauma__verticals[i].dataset.no = i + 1;
          }
        }
        s_v = i + 1;
      }
      if (canvas.querySelector(".sauma__horizontal")) {
        for (var i = 0; i < sauma__horizontals.length; i++) {
          if (sauma__horizontals[i].querySelector(".sauma__controls_del")) {
            sauma__horizontals[i].querySelector(".sauma__controls_del").innerHTML = String.fromCharCode(65 + parseFloat(i + 1));
            sauma__horizontals[i].dataset.no = String.fromCharCode(65 + parseFloat(i + 1));
          }
        }
        s_h = i + 1;
      }

      dels = canvas.querySelectorAll(".sauma__controls_del");
  
      for (var i = dels.length - 1; i >= 0; i--) {
        sauma = dels[i].parentElement.parentElement;
        if(dels[i].querySelector(".delmeasure")) {
          delmeasure = dels[i].querySelector(".delmeasure");
          if(sauma.classList.contains("sauma__vertical")) {
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.left)*5);
          }
          else if(sauma.classList.contains("sauma__horizontal")) {
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.bottom)*5);
          }
        }
        else {
          
          delmeasure = document.createElement("div");
          delmeasure.classList.add("delmeasure");
          if(sauma.classList.contains("sauma__vertical")) {
            delmeasure.classList.add("delmeasure_vertical");
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.left)*5);
          }
          else if(sauma.classList.contains("sauma__horizontal")) {
            delmeasure.classList.add("delmeasure_horizontal");
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.bottom)*5);
          }

          dels[i].appendChild(delmeasure);
        }
      }

      saumasize__checkup();

      saumat = canvas.querySelectorAll(".sauma");

      for (var i = saumat.length - 1; i >= 0; i--) {
        saumat[i].removeEventListener('touchmove', (e) => {});
        saumat[i].querySelector(".sauma__controls").removeEventListener('touchmove', (e) => {});
      }

      sauma_h = canvas.querySelectorAll(".sauma__horizontal");
      sauma_v = canvas.querySelectorAll(".sauma__vertical");
      sauma_h.forEach(function(j) {
        j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
          resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
        });
        j.addEventListener('touchmove', (e) => {
          resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
        });
      });

      sauma_v.forEach(function(j) {
        j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
            resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
        });
        j.addEventListener('touchmove', (e) => {
          resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
        });
      });




      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_five');

      // levy initialization

      setTimeout(function() {
        lev = ir_lev[0].split(" ");
        dex=0;
        if(canvas.querySelector(".levyt")) {
          levyt = canvas.querySelector(".levyt");
          levyt.innerHTML = "";
        }
        else {
           levyt = document.createElement("div");
          levyt.classList.add("levyt");
          canvas.append(levyt);
        }
       

        for (var i = 0; i < lev.length; i++) {
          if(lev[i].length > 10) {
            levyt.prepend(luo__levy_restore(lev[i].split("|")[0],lev[i].split("|")[1],parseFloat(lev[i].split("|")[2]),parseFloat(lev[i].split("|")[3]),lev[i].split("|")[4],lev[i].split("|")[5],lev[i].split("|")[6],lev[i].split("|")[7]));
          }
        }
        console.log("LEVYTÄ FIRED");
      }, 1000);

      


    }

   

    //SAUMAT 
    else if(ir_sau.length > 1) {
      // MPs formatting
      for (var i = 0; i < ir_mps.length; i++) {
        if (ir_mps[i].length > 3) {
          ir_mps_name = ir_mps[i].split("|")[0];
          ir_mps_b = parseFloat(ir_mps[i].split("|")[1]);
          ir_mps_l = parseFloat(ir_mps[i].split("|")[2]);
          ir_mps_vount = parseFloat(ir_mps[i].split("|")[3]);
          ir_mps_id = ir_mps[i].split("|")[4];
          mitta__create_mitta("restoring", "mp", ir_mps_name, ir_mps_b, ir_mps_l, '', '', ir_mps_vount, ir_mps_id, mode_room);
        }
      }
      
      for (var i = 0; i < ir_aus.length; i++) {
        if (ir_aus[i].length > 3) {
          ir_aus_name = ir_aus[i].split("|")[0];
          ir_aus_b = parseFloat(ir_aus[i].split("|")[1]);
          ir_aus_l = parseFloat(ir_aus[i].split("|")[2]);
          ir_aus_h = parseFloat(ir_aus[i].split("|")[5]);
          ir_aus_w = parseFloat(ir_aus[i].split("|")[6]);
          ir_aus_vount = parseFloat(ir_aus[i].split("|")[3]);
          ir_aus_id = ir_aus[i].split("|")[4];
          ir_aus_classes = ir_aus[i].split("|")[7];
          
          ir_aus_comment = ir_aus[i].split("|")[8];
          ir_aus_cfrom = ir_aus[i].split("|")[9];
          ir_aus_cto = ir_aus[i].split("|")[10];
          mitta__create_mitta("restoring", "au", ir_aus_name, ir_aus_b, ir_aus_l, ir_aus_h, ir_aus_w, ir_aus_vount, ir_aus_id, ir_aus_classes,ir_aus_comment,ir_aus_cfrom,ir_aus_cto);
          // mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
          // Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
        }
      }

      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_three');
      
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_four');
      if (document.querySelector(".saumat__grandrow")) {
        saumat = document.querySelector(".saumat__grandrow");
      }
      else {
        saumat = document.createElement("div");
        saumat.classList.add("saumat__grandrow");
        canvas.appendChild(saumat);
      }
      if (saumat.querySelector(".horizontalrow_saumat")) {}
      else {
        newrow_horizontal = document.createElement("div");
        saumat.appendChild(newrow_horizontal);
        newrow_horizontal.classList.add("horizontalrow_saumat");
      }
      if (saumat.querySelector(".verticalrow_saumat")) {}
      else {
        newrow_vertical = document.createElement("div");
        saumat.appendChild(newrow_vertical);
        newrow_vertical.classList.add("verticalrow_saumat");
      }
      for (var i = ir_sau.length - 1; i >= 0; i--) {
        sau_data = ir_sau[i].split("|");

        sau_name = sau_data[0];
        sau_type = sau_data[1];
        sau_b = sau_data[2];
        sau_left = sau_data[3];
        sau_cord = sau_data[4];
        sau_name = sau_data[5];
        luo__sauma_restore(sau_name, sau_type, sau_b, sau_left, sau_cord, sau_name);
        if (sau_type == 'pysty') {}
        if (sau_type == 'vaaka') {}
      }
      alkusaumat();
      calculateamounts();
      sauma__verticals = canvas.querySelectorAll(".sauma__vertical");
      sauma__horizontals = canvas.querySelectorAll(".sauma__horizontal");
      if (canvas.querySelector(".sauma__vertical")) {
        for (var i = 0; i < sauma__verticals.length; i++) {
          if (sauma__verticals[i].querySelector(".sauma__controls_del")) {
            sauma__verticals[i].querySelector(".sauma__controls_del").innerHTML = i + 1;
            sauma__verticals[i].dataset.no = i + 1;
          }
        }
        s_v = i + 1;
      }
      if (canvas.querySelector(".sauma__horizontal")) {
        for (var i = 0; i < sauma__horizontals.length; i++) {
          if (sauma__horizontals[i].querySelector(".sauma__controls_del")) {
            sauma__horizontals[i].querySelector(".sauma__controls_del").innerHTML = String.fromCharCode(65 + parseFloat(i + 1));
            sauma__horizontals[i].dataset.no = String.fromCharCode(65 + parseFloat(i + 1));
          }
        }
        s_h = i + 1;
      }

      dels = canvas.querySelectorAll(".sauma__controls_del");
  
      for (var i = dels.length - 1; i >= 0; i--) {
        sauma = dels[i].parentElement.parentElement;
        if(dels[i].querySelector(".delmeasure")) {
          delmeasure = dels[i].querySelector(".delmeasure");
          if(sauma.classList.contains("sauma__vertical")) {
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.left)*5);
          }
          else if(sauma.classList.contains("sauma__horizontal")) {
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.bottom)*5);
          }
        }
        else {
          
          delmeasure = document.createElement("div");
          delmeasure.classList.add("delmeasure");
          if(sauma.classList.contains("sauma__vertical")) {
            delmeasure.classList.add("delmeasure_vertical");
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.left)*5);
          }
          else if(sauma.classList.contains("sauma__horizontal")) {
            delmeasure.classList.add("delmeasure_horizontal");
            delmeasure.innerHTML = roundToNearest25(parseFloat(sauma.style.bottom)*5);
          }

          dels[i].appendChild(delmeasure);
        }
      }

      saumasize__checkup();

      saumat = canvas.querySelectorAll(".sauma");

      for (var i = saumat.length - 1; i >= 0; i--) {
        saumat[i].removeEventListener('touchmove', (e) => {});
        saumat[i].querySelector(".sauma__controls").removeEventListener('touchmove', (e) => {});
      }

      sauma_h = canvas.querySelectorAll(".sauma__horizontal");
      sauma_v = canvas.querySelectorAll(".sauma__vertical");
      sauma_h.forEach(function(j) {
        j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
          resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
        });
        j.addEventListener('touchmove', (e) => {
          resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
        });
      });

      sauma_v.forEach(function(j) {
        j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
            resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
        });
        j.addEventListener('touchmove', (e) => {
          resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
        });
      });

      setTimeout(function() {levyta();console.log("LEVYTÄ FIRED")}, 1000);
    }
    
    //LV
    else if(ir_lv.length > 1) {
      for (var i = 0; i < ir_mps.length; i++) {
        if (ir_mps[i].length > 5) {
          ir_mps_name = ir_mps[i].split("|")[0];
          ir_mps_b = parseFloat(ir_mps[i].split("|")[1]);
          ir_mps_l = parseFloat(ir_mps[i].split("|")[2]);
          ir_mps_vount = parseFloat(ir_mps[i].split("|")[3]);
          ir_mps_id = ir_mps[i].split("|")[4];


          mitta__create_mitta("restoring", "mp", ir_mps_name, ir_mps_b, ir_mps_l, '', '', ir_mps_vount, ir_mps_id, mode_room);
        }
      }
      
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_one');
      
      for (var i = 0; i < ir_aus.length; i++) {
        if (ir_aus[i].length > 3) {
          ir_aus_name = ir_aus[i].split("|")[0];
          ir_aus_b = parseFloat(ir_aus[i].split("|")[1]);
          ir_aus_l = parseFloat(ir_aus[i].split("|")[2]);
          ir_aus_h = parseFloat(ir_aus[i].split("|")[5]);
          ir_aus_w = parseFloat(ir_aus[i].split("|")[6]);
          ir_aus_vount = parseFloat(ir_aus[i].split("|")[3]);
          ir_aus_id = ir_aus[i].split("|")[4];
          ir_aus_classes = ir_aus[i].split("|")[7];
          
          ir_aus_comment = ir_aus[i].split("|")[8];
          ir_aus_cfrom = ir_aus[i].split("|")[9];
          ir_aus_cto = ir_aus[i].split("|")[10];
          mitta__create_mitta("restoring", "au", ir_aus_name, ir_aus_b, ir_aus_l, ir_aus_h, ir_aus_w, ir_aus_vount, ir_aus_id, ir_aus_classes,ir_aus_comment,ir_aus_cfrom,ir_aus_cto);
          // mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
          // Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
        }
      }

      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_two');

      for (var i = 0; i < ir_lv.length; i++) {
        if (ir_lv[i].length > 3) {
          ir_lvs_name = ir_lv[i].split("|")[0];
          ir_lvs_b = parseFloat(ir_lv[i].split("|")[1]);
          ir_lvs_l = parseFloat(ir_lv[i].split("|")[2]);
          ir_lvs_vount = parseFloat(ir_lv[i].split("|")[3]);
          ir_lvs_id = ir_lv[i].split("|")[4];
          ir_lvs_sade = parseFloat(ir_lv[i].split("|")[5]);

          ir_lv_comment = ir_lv[i].split("|")[6];
          ir_lv_cfrom = ir_lv[i].split("|")[7];
          ir_lv_cto = ir_lv[i].split("|")[8];
          mitta__create_mitta("restoring", "lv", ir_lvs_name, ir_lvs_b, ir_lvs_l, '', '', ir_lvs_vount, ir_lvs_id, ir_lvs_sade,ir_lv_comment,ir_lv_cfrom,ir_lv_cto);

        }
      }
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_three');
    }

    //AUKOT 
    else if(ir_aus.length > 1) {
      for (var i = 0; i < ir_mps.length; i++) {
        if (ir_mps[i].length > 5) {
          ir_mps_name = ir_mps[i].split("|")[0];
          ir_mps_b = parseFloat(ir_mps[i].split("|")[1]);
          ir_mps_l = parseFloat(ir_mps[i].split("|")[2]);
          ir_mps_vount = parseFloat(ir_mps[i].split("|")[3]);
          ir_mps_id = ir_mps[i].split("|")[4];
          mitta__create_mitta("restoring", "mp", ir_mps_name, ir_mps_b, ir_mps_l, '', '', ir_mps_vount, ir_mps_id, mode_room);
        }
      }
      
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_one');
      
      for (var i = 0; i < ir_aus.length; i++) {
        if (ir_aus[i].length > 3) {
          ir_aus_name = ir_aus[i].split("|")[0];
          ir_aus_b = parseFloat(ir_aus[i].split("|")[1]);
          ir_aus_l = parseFloat(ir_aus[i].split("|")[2]);
          ir_aus_h = parseFloat(ir_aus[i].split("|")[5]);
          ir_aus_w = parseFloat(ir_aus[i].split("|")[6]);
          ir_aus_vount = parseFloat(ir_aus[i].split("|")[3]);
          ir_aus_id = ir_aus[i].split("|")[4];
          ir_aus_classes = ir_aus[i].split("|")[7];


          ir_aus_comment = ir_aus[i].split("|")[8];
          ir_aus_cfrom = ir_aus[i].split("|")[9];
          ir_aus_cto = ir_aus[i].split("|")[10];
          mitta__create_mitta("restoring", "au", ir_aus_name, ir_aus_b, ir_aus_l, ir_aus_h, ir_aus_w, ir_aus_vount, ir_aus_id, ir_aus_classes,ir_aus_comment,ir_aus_cfrom,ir_aus_cto);
          // mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
          // Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
        }
      }

      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_two');
    }

    //MITTAPISTEET, OK
    else if(ir_mps.length > 1) {
      for (var i = 0; i < ir_mps.length; i++) {
        if (ir_mps[i].length > 5) {
          ir_mps_name = ir_mps[i].split("|")[0];
          ir_mps_b = parseFloat(ir_mps[i].split("|")[1]);
          ir_mps_l = parseFloat(ir_mps[i].split("|")[2]);
          ir_mps_vount = parseFloat(ir_mps[i].split("|")[3]);
          ir_mps_id = ir_mps[i].split("|")[4];
          mitta__create_mitta("restoring", "mp", ir_mps_name, ir_mps_b, ir_mps_l, '', '', ir_mps_vount, ir_mps_id, mode_room);
        }
      }
      
      refresh__drawcontrols();
      updatearea();
      $('#step_drawscreen').val('drawscreen_section_one');
    }
  }
  else {

  }
  counting__aukkos();

  ir_no = room.dataset.room;
  ir_value = document.querySelector("." + ir_no.toLowerCase() + "_saved").value;
  mode_room = ir_no.toLowerCase();


  calculateamounts();
}
// Function for changing element coords
// Parametrs:
// where - where is function called? Array in [where ("funcAXIS" or "inpAXIS (AXIS can be W - width or H - height, eg. inpW or funcH)" - input element), *if input* selector]. 
// elemSelector - a selector of element that needs to be changed
// coords - data in [x, y] (array!) !! WITH INPUT ONCHANGE USE null !!
// canvaSelector - selector of canva, where the element is
// size - array with size of wall ( [width, height] )
function changeCoords(where, elemSelector, coords, canvaSelector, size) {
  // This elem for changing its coords
  // Canva where elem is storing
  const canva = document.querySelector(canvaSelector);
  // Input
  let whereInput;
  let elemI;
  // Check, where's function called
  switch (where[0]) {
    // input with width
    case 'inpW':
      elemI = document.querySelector(elemSelector);
      whereInput = document.querySelector(where[1]);
      elemI.style.left = whereInput.value * 100 / size[0] + '%';
      break;
    case 'inpH':
      // Input with Height
      elemI = document.querySelector(elemSelector);
      whereInput = document.querySelector(where[1]);
      elemI.style.top = whereInput.value * 100 / size[1] + '%';
      break;
    case 'funcW':
      elemSelector.style.left = where[1].value * 100 / size[0] + '%';
      break;
    case 'funcH':
      elemSelector.style.bottom = where[1].value * 100 / size[1] + '%';
      break;
  }
}
// boxSelector - selector of element, where main element is being draggble, another "container"
// widthInputSelector - selector of input with original width in mm
// heightInputSelector - selector of input with original height in mm
// element - a main element that should be draggble
// inInputsFormat - 'elem' or 'selector' for next elem
// inWidthInputSelector - selector of input that controlls draggble element in x axis
// inHeightInputSelector - selector of input that controlls draggble element in y axis
function touchedElement(boxSelector, widthInputSelector, heightInputSelector, elementSelector, inInputsFormat, inWidthInputSelector, inHeightInputSelector) {
  // Touch Event for
  let element = elementSelector;
  if (inInputsFormat === 'selector') {
    element = document.querySelector(elementSelector);
    element.addEventListener('touchmove', (e) => {
      const canvaRight = document.querySelector(boxSelector);
      const widthInput = document.querySelector(widthInputSelector).value;
      const heightInput = document.querySelector(heightInputSelector).value;
      const inWidthInput = document.querySelector(inWidthInputSelector);
      const inHeightInput = document.querySelector(inHeightInputSelector);
      // Get resize between in parts
      const BETWEENSHAPES_X = widthInput / canvaRight.offsetWidth;
      const BETWEENSHAPES_Y = heightInput / canvaRight.offsetHeight;
      e.preventDefault();
      let resizeWidth = event.targetTouches[0].pageX - canvaRight.getBoundingClientRect().left;
      let resizeHeight = event.targetTouches[0].pageY - canvaRight.getBoundingClientRect().top;

      if (event.targetTouches[0].pageX > canvaRight.getBoundingClientRect().left && canvaRight.offsetWidth > resizeWidth) {
        inWidthInput.value = parseInt(BETWEENSHAPES_X * resizeWidth);
        changeCoords(['inpW', inWidthInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput]);
      }
      if (event.targetTouches[0].pageY > canvaRight.getBoundingClientRect().top && canvaRight.offsetHeight > resizeHeight) {
        inHeightInput.value = parseInt(BETWEENSHAPES_Y * resizeHeight);
        changeCoords(['inpH', inHeightInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput])
      }
    });
  }
  else if (inInputsFormat === 'elem') {
    elementSelector.addEventListener('touchmove', (e) => {
      const canvaRight = document.querySelector(boxSelector);
      const widthInput = document.querySelector(widthInputSelector).value;
      const heightInput = document.querySelector(heightInputSelector).value;
      // Get resize between in parts
      const BETWEENSHAPES_X = widthInput / canvaRight.offsetWidth;
      const BETWEENSHAPES_Y = heightInput / canvaRight.offsetHeight;
      e.preventDefault();
      let resizeWidth = event.targetTouches[0].pageX - canvaRight.getBoundingClientRect().left;
      let resizeHeight = event.targetTouches[0].pageY - canvaRight.getBoundingClientRect().top;
      if (event.targetTouches[0].pageX > canvaRight.getBoundingClientRect().left && canvaRight.offsetWidth > resizeWidth) {
        inWidthInputSelector.value = parseInt(BETWEENSHAPES_X * resizeWidth);
        changeCoords(['funcW', inWidthInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput]);
      }
      if (event.targetTouches[0].pageY > canvaRight.getBoundingClientRect().top && canvaRight.offsetHeight > resizeHeight) {
        inHeightInputSelector.value = parseInt(heightInput - BETWEENSHAPES_Y * resizeHeight);


        if (element.classList.contains('aukko')) {
          element.querySelector(".newDiv__y").innerHTML = "Y: " + (parseInt(heightInput - BETWEENSHAPES_Y * resizeHeight));
          element.querySelector(".newDiv__x").innerHTML = "X: " + (parseInt(BETWEENSHAPES_X * resizeWidth));
        }
        changeCoords(['funcH', inHeightInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput])
      }
    });
  }
}
// Change value of inputs in modals with coords of origo
// bottom_input - up input
// left_input - left input
function getElementCoords(bottom_input, left_input) {
  const SHAPE_H = document.querySelector("#box_h").value;
  const SHAPE_W = document.querySelector("#box_w").value;
  const origoBottom = document.querySelector(".setting__canvas #drawarea__origo_central").style.bottom.replace("px", "");
  const origoLeft = document.querySelector(".setting__canvas #drawarea__origo_central").style.left.replace("px", "");
  const cordsBottom = document.querySelector(bottom_input);
  const cordsLeft = document.querySelector(left_input);

  if (origoBottom && origoLeft) {
    cordsBottom.value = origoBottom * 5;
    cordsLeft.value = origoLeft * 5;
    change__newdiv_cord();
  }
  else {
    cordsBottom.value = 5;
    cordsLeft.value = 5;
    change__newdiv_cord();
  }
}
const origo = document.querySelector('#drawarea__origo_central');
const canvas = document.querySelector('#box-wrapper > main');
// touchedElement('.drawarea main', '#drawarea_w', '#drawarea_h', '#drawarea__origo_central', 'selector','#origo_x', '#origo_y')
function roundToNearest25(num) {
  return Math.round(num / 25) * 25;
}

function gridify() {
  setTimeout(() => {
    drawarea = document.querySelector("#box-wrapper");
    let item = drawarea.querySelectorAll(".grid-item");
    let row = drawarea.querySelectorAll(".grid-row");
    item.forEach(itemF);

    function itemF(item) {
      var h = drawarea.querySelector(".canvas").clientHeight;
      var w = drawarea.querySelector(".canvas").clientWidth;
      var w_ = document.querySelector("#drawarea_w").value;
      var h_ = document.querySelector("#drawarea_h").value;
      widthP = (500 / w_);
      item.style.width = w * widthP + 'px';
      item.style.height = w * widthP + 'px';
      // item.style.width = "100%";
    }
    row.forEach(itemF2);

    function itemF2(r) {
      var h = drawarea.querySelector(".canvas").clientHeight;
      var w = drawarea.querySelector(".canvas").clientWidth;
      var w_ = document.querySelector("#drawarea_w").value;
      var h_ = document.querySelector("#drawarea_h").value;
      widthP = (500 / w_);
      r.style.width = w * widthP + 'px';
    }

    document.querySelector(".kokonaisalue").value = document.querySelector("#drawarea_h").value + " " + document.querySelector("#drawarea_w").value;
  }, 1000);

  
}
window.onload = (event) => {
  gridify();

 


  
  document.querySelector("#rooms > input.c_saved")
};
$(document).ready(function() {
  $(window).keydown(function(event) {
    if (event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

});

function isEven(num) {
  return num % 2 === 0;
}

function removeDuplicates(arr) {
  return arr.filter((item, index) => arr.indexOf(item) === index);
}

function takeshot(arg) {
  let div = document.querySelector("body > section.row.drawarea__section > div.drawarea__section_container");
  if (arg === 0) {
    output = document.getElementById('levyt__havainnekuva');
    img_name = "Havainnekuva_Levyt"
  }
  else if (arg === 1) {
    output = document.getElementById('rangat__havainnekuva');
    img_name = "Havainnekuva_Rangat"
  }
  else if (arg === 2) {
    output = document.getElementById('listat__havainnekuva');
    img_name = "Havainnekuva_Listat"
  }
  // else if(arg === 3) {
  //    output = document.getElementById('ikkunalistat__havainnekuva');
  //    img_name = "Havainnekuva_Levyt"
  // }
  drawarea__controls = document.querySelectorAll(".drawarea__controls");
  for (var i = 0; i < drawarea__controls.length; i++) {
    drawarea__controls[i].style.opacity = 0;
  }
  // Use the html2canvas
  // function to take a screenshot
  // and append it
  // to the output div
  output.innerHTML = "";
  html2canvas(div).then(function(canvas2) {
    // output.appendChild(canvas2);
    const imageData = canvas2.toDataURL('image/png');
    const screenshotImage = new Image();
    screenshotImage.src = imageData;
    link = document.createElement('a');
    link.download = img_name;
    var pdf = new jsPDF({
      orientation: 'landscape',
    });
    imgProps = pdf.getImageProperties(imageData);
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
    pdf.addImage(imageData, 'PNG', 3, 3, pdfWidth, pdfHeight, null, null, 0);
    pdf.save(img_name + '.pdf');
    link.href = pdf.output('datauristring');
    link.appendChild(screenshotImage);
    output.appendChild(link);
  });
  for (var i = 0; i < drawarea__controls.length; i++) {
    drawarea__controls[i].style.opacity = 1;
  }
}

function prepend__reclamation() {
  var newDiv = document.createElement("span");
  var newDiv__comment = document.createElement("span");
  var newDiv__hidden_attention = document.createElement("input");
  var newDiv__hidden_attentioncommmets = document.createElement("input");
  newDiv__hidden_attention.type = "hidden";
  newDiv__hidden_attention.name = "attentions";
  newDiv__hidden_attentioncommmets.type = "hidden";
  newDiv__hidden_attentioncommmets.name = "commmets";
  newDiv.innerHTML = "";
  if (document.querySelector("#reclamation__item_first").checked) {
    newDiv.innerHTML = "<i>" + document.getElementById("reclamation__item_first").value + "</i>";
  }
  if (document.querySelector("#reclamation__item_second").checked) {
    newDiv.innerHTML = "<i>" + document.getElementById("reclamation__item_second").value + "</i>";
  }
  if (document.querySelector("#reclamation__item_third").checked) {
    newDiv.innerHTML = "<i>" + document.getElementById("reclamation__item_third").value + "</i>";
  }
  if (document.querySelector("#reclamation__item_fourth").checked) {
    newDiv.innerHTML = "<i>" + document.getElementById("reclamation__item_fourth").value + "</i>";
  }
  if (document.querySelector("#reclamation__item_fifth").checked) {
    newDiv.innerHTML = "<i>" + document.getElementById("reclamation__item_fifth").value + "</i>";
  }
  document.querySelector("#box-wrapper > main").prepend(newDiv);
  newDiv.style.top = "unset"; //(parseFloat(document.querySelector("#r-cord_up").value) / 10) + 'px';
  newDiv.style.right = "unset"; //( parseFloat(document.querySelector("#r-cord_r").value) / 10) + 'px';
  newDiv.style.bottom = (parseFloat(document.querySelector("#r-cord_low").value) / 10) + 'px';
  newDiv.style.left = (parseFloat(document.querySelector("#r-cord_left").value) / 10) + 'px';
  newDiv.addEventListener('mousedown', mouseDown, false);
  window.addEventListener('mouseup', mouseUp, false);

  function mouseUp() {
    window.removeEventListener('mousemove', divMove, true);
  }

  function mouseDown(e) {
    window.addEventListener('mousemove', divMove, true);
  }

  function divMove(e) {
    newDiv.style.position = 'absolute';
    var mousePressX = e.clientX;
    var mousePressY = e.clientY;
    var wDiff = e.clientX - mousePressX;
    var hDiff = e.clientY - mousePressY;
    newDiv.style.top = (e.clientY - (e.clientY / 2)) + 'px';
    newDiv.style.left = (e.clientX - (e.clientX / 1.5)) + 'px';
  }
  newDiv.classList.add("reclamation");
  if (document.querySelector("#reclamation_comment").value != '') {
    newDiv__hidden_attentioncommmets.value += document.querySelector("#reclamation_comment").value + '<br> Tältä: ' + document.querySelector(
      "#reclamation_comment_from").value + '<br> Tälle: ' + document.querySelector("#reclamation_comment_to").value;
    var comment__container = document.createElement("div");
    var comment__text = document.createElement("p");
    var comment__from = document.createElement("strong");
    var comment__to = document.createElement("strong");
    comment__text.innerHTML = document.querySelector("#reclamation_comment").value;
    comment__from.innerHTML = document.querySelector("#reclamation_comment_from").value;
    comment__to.innerHTML = document.querySelector("#reclamation_comment_to").value;
    comment__container.classList.add("comment__container");
    comment__from.classList.add("comment__from");
    comment__to.classList.add("comment__to");
    newDiv.appendChild(comment__container);
    comment__container.appendChild(comment__text);
    comment__container.appendChild(comment__from);
    comment__container.appendChild(comment__to);
  }
}

function addproblemstatus(e) {
  elid = e.getAttribute('id');
  el_ = elid.replace('--Tila ', '').toLowerCase();
  document.querySelector(".project__building_room." + el_).classList.add("prob");
  if (document.querySelector('#comment__importance').checked === true) {
    document.querySelector(".project__building_room." + el_).classList.add("critical");
  }
}
//Ultimate rule: all radiobuttons and checkboxes get focus on checked
var radios = document.querySelectorAll('input[type="radio"]');
radios.forEach(function(r) {
  r.addEventListener("click", function(e) {
    r.focus();
  }, {
    useCapture: true
  });
});
var checkedboxes = document.querySelectorAll('input[type="checkbox"]');
checkedboxes.forEach(function(ch) {
  ch.addEventListener("click", function(e) {
    ch.focus();
  }, {
    useCapture: true
  });
});

function delcanvases() {
  copiedcanvases = document.getElementById("copiedcanvases");

  todel = copiedcanvases.querySelectorAll(".canvas");
  for (var i = todel.length - 1; i >= 0; i--) {
    todel[i].remove();
  }
}