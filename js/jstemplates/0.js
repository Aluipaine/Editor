let currect_arak = undefined;

current_apartment = null;
function rooms__change_asjarj(order) {
  asj = order.dataset.tochange;
  mode_room = asj.toLowerCase();
  ir_value = document.querySelector(".asjarj" + mode_room.toLowerCase() + "").innerHTML = parseFloat(order.value);

  $.ajax({
    url: "/update-walls.php",
    type:"post",
    data: {
      project_id: document.querySelector("#current_project_id").value,
      username: document.querySelector("#current_user").value,
      arak: currect_arak,
      wall: mode_room,
      asjarj: ir_value
    },
    success: (answer) => {
      console.log(answer);
    }
  });
}


function rooms__change_name(order) {
  asj = order.dataset.tochange;
  mode_room = asj.toLowerCase();
  ir_value = document.querySelector(".house__wall_status_" + mode_room.toLowerCase() + "").innerHTML = order.value;
  $.ajax({
    url: "/update-walls.php",
    type:"post",
    data: {
      project_id: document.querySelector("#current_project_id").value,
      username: document.querySelector("#current_user").value,
      arak: currect_arak,
      wall: mode_room,
      name: ir_value
    },
    success: (answer) => {
      console.log(answer);
    }
  });
}

function rooms__change_description(order) {
  asj = order.dataset.tochange;
  mode_room = asj.toLowerCase();
  ir_value = order.value;
  $.ajax({
    url: "/update-walls.php",
    type:"post",
    data: {
      project_id: document.querySelector("#current_project_id").value,
      username: document.querySelector("#current_user").value,
      arak: currect_arak,
      wall: mode_room,
      description: ir_value
    },
    success: (answer) => {
      console.log(answer);
    }
  });
}

function hide__room(room) {
  thiswall = room.parentElement.parentElement;
  if (thiswall.classList.contains('hidden')) {
    thiswall.classList.remove('hidden');
    room.innerHTML =
      '<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg>';
    asj = room.dataset.tochange;
    mode_room = asj.toLowerCase();
    tohide__room = document.querySelectorAll(".tohide__room_" + mode_room);
    for (var i = tohide__room.length - 1; i >= 0; i--) {
      tohide__room[i].classList.remove("hidden");
    }

    $.ajax({
      url: "/update-walls.php",
      type:"post",
      data: {
        project_id: document.querySelector("#current_project_id").value,
        username: document.querySelector("#current_user").value,
        arak: currect_arak,
        wall: mode_room,
        hidden: 0
      },
      success: (answer) => {
        console.log(answer);
      }
    });
  }
  else {
    thiswall.classList.add('hidden');
    room.innerHTML =
      '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14px" height="14px" viewBox="0 0 14 14" version="1.1"><g id="surface1"><path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 13.933594 6.820312 C 12.898438 4.839844 10.105469 3.535156 7 3.535156 C 3.894531 3.535156 1.101562 4.839844 0.0664062 6.773438 C -0.0234375 6.910156 -0.0234375 7.046875 0.0664062 7.179688 C 1.101562 9.160156 3.894531 10.464844 7 10.464844 C 10.105469 10.464844 12.898438 9.160156 13.933594 7.226562 C 14.023438 7.089844 14.023438 6.953125 13.933594 6.820312 Z M 7 9.566406 C 4.34375 9.566406 1.957031 8.574219 1.011719 7 C 1.957031 5.425781 4.34375 4.433594 7 4.433594 C 9.65625 4.433594 12.042969 5.425781 12.988281 7 C 12.042969 8.53125 9.65625 9.566406 7 9.566406 Z M 7 9.566406 "/><path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 9.566406 3.894531 C 9.429688 3.667969 9.160156 3.625 8.9375 3.757812 C 8.710938 3.894531 8.664062 4.164062 8.800781 4.390625 C 9.070312 4.75 9.207031 5.199219 9.207031 5.648438 C 9.207031 6.863281 8.214844 7.855469 7 7.855469 C 5.785156 7.855469 4.792969 6.863281 4.792969 5.648438 C 4.792969 5.246094 4.929688 4.792969 5.15625 4.433594 C 5.289062 4.210938 5.246094 3.9375 5.019531 3.804688 C 4.792969 3.667969 4.523438 3.714844 4.390625 3.9375 C 4.027344 4.480469 3.847656 5.0625 3.847656 5.695312 C 3.847656 7.40625 5.246094 8.800781 6.953125 8.800781 C 8.710938 8.800781 10.105469 7.40625 10.105469 5.648438 C 10.105469 5.019531 9.925781 4.433594 9.566406 3.894531 Z M 9.566406 3.894531 "/></g></svg>';
    asj = room.dataset.tochange;
    mode_room = asj.toLowerCase();
    tohide__room = document.querySelectorAll(".tohide__room_" + mode_room);
    for (var i = tohide__room.length - 1; i >= 0; i--) {
      tohide__room[i].classList.add("hidden");
    }

    $.ajax({
      url: "/update-walls.php",
      type:"post",
      data: {
        project_id: document.querySelector("#current_project_id").value,
        username: document.querySelector("#current_user").value,
        arak: currect_arak,
        wall: mode_room,
        hidden: 1
      },
      success: (answer) => {
        console.log(answer);
      }
    });
  }
}
// Huone risti
const inputsName = document.querySelectorAll('.inputname');
const allLinksName = document.querySelectorAll('.house__wall_status');
inputsName.forEach(item => {
  item.addEventListener('input', () => {
    const room = item.getAttribute('data-room');
    allLinksName.forEach(element => {
      if (element.getAttribute('data-room') === room) {
        element.innerHTML = item.value;
      }
    });
  });
});

function changeHeights(num) {
  const allHeights = document.querySelectorAll('.wall_height');
  allHeights.forEach(function(item) {
    item.value = num;
  });
  document.querySelector("#house .house__wall_roof").style.height = num / 20 + "px";
  document.querySelector("#house .house__wall_floor").style.height = num / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.height = num / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.height = num / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.height = num / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.height = num / 20 + "px";
}

function changeWidths(num) {
  const allWidths = document.querySelectorAll('.wall_width');
  allWidths.forEach(function(item) {
    item.value = num;
  });
  document.querySelector("#house .house__wall_roof").style.width = num / 20 + "px";
  document.querySelector("#house .house__wall_floor").style.width = num / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = num / 20 + "px";
  // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num/10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = num / 20 + "px";
  // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num/10 + "px";


  f_ap = document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one"); 
  s_ap = document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two");
  document.querySelector("#house .house__wall_roof").style.left = (-35) + document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three.house__wall_c").offsetLeft + "px";
  document.querySelector("#house .house__wall_floor").style.left = (-35) + document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three.house__wall_c").offsetLeft + "px";
}

function changeWidths_2(num) {
  const allWidths = document.querySelectorAll('.wall_width_2');
  allWidths.forEach(function(item) {
    item.value = num;
  });
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num / 20 + "px";
}

function change_roof() {
  const roof_height = document.querySelector('#wall_one_roof_h').value;
  const roof_width = document.querySelector('#wall_one_roof_w').value;
  document.querySelector('.question-container').classList.add("two");
  document.querySelector('.question-container').classList.remove("out");
  document.querySelector('.modal-yes').addEventListener("click", function() {
    changeHeights(roof_height);
    changeWidths(roof_width);
  });
  document.querySelector("#house > div:nth-child(1) > div").style.width = roof_width / 20 + "px";
  document.querySelector("#house > div:nth-child(1) > div").style.height = roof_height / 20 + "px";
}

function change_floor() {
  const floor_height = document.querySelector('#wall_one_floor_h').value;
  const floor_width = document.querySelector('#wall_one_floor_w').value;
  document.querySelector('.question-container').classList.add("two");
  document.querySelector('.question-container').classList.remove("out");
  document.querySelector('.modal-yes').addEventListener("click", function() {
    changeHeights(floor_height);
    changeWidths(floor_width);
  });
  document.querySelector("#house > div:nth-child(3) > div").style.width = floor_width / 20 + "px";
  document.querySelector("#house > div:nth-child(3) > div").style.height = floor_height / 20 + "px";
}

function change_a() {
  const a_height = document.querySelector('#wall_one_a_h').value;
  const a_width = document.querySelector('#wall_one_a_w').value;
  document.querySelector('.question-container').classList.add("two");
  document.querySelector('.question-container').classList.remove("out");
  document.querySelector('.modal-yes').addEventListener("click", function() {
    changeHeights(a_height);
    changeWidths(a_width);
  });
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = a_width / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.height = a_height / 20 + "px";
}

function change_b() {
  const b_height = document.querySelector('#wall_one_b_h').value;
  const b_width = document.querySelector('#wall_one_b_w').value;
  document.querySelector('.question-container').classList.add("two");
  document.querySelector('.question-container').classList.remove("out");
  document.querySelector('.modal-yes').addEventListener("click", function() {
    changeHeights(b_height);
    changeWidths_2(b_width);
  });
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = b_width / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.height = b_height / 20 + "px";
}

function change_c() {
  const c_height = document.querySelector('#wall_one_c_h').value;
  const c_width = document.querySelector('#wall_one_c_w').value;
  document.querySelector('.question-container').classList.add("two");
  document.querySelector('.question-container').classList.remove("out");
  document.querySelector('.modal-yes').addEventListener("click", function() {
    changeHeights(c_height);
    changeWidths(c_width);
  });
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = c_width / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.height = c_height / 20 + "px";
}

function change_d() {
  const d_height = document.querySelector('#wall_one_d_h').value;
  const d_width = document.querySelector('#wall_one_d_w').value;
  document.querySelector('.question-container').classList.add("two");
  document.querySelector('.question-container').classList.remove("out");
  document.querySelector('.modal-yes').addEventListener("click", function() {
    changeHeights(d_height);
    changeWidths_2(d_width);
  });
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = d_width / 20 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.height = d_height / 20 + "px";
}


$('.project__building div.project__building_room').click(function() {
  $("#project_start").slideUp(200);
  refresh__drawcontrols();
 
  apartment_ = $(this);
 
  $('#step_drawscreen').val('rooms');

 
  // $(this).addClass("tomeasure");

  // initalize_cross();

  //OLD#######
  // $("#roomname").val("Tila " + $(this).text());
  // $("#wall_one_a").val("SEINÄ " + $(this).text() + "_A");
  // $("#wall_one_b").val("SEINÄ " + $(this).text() + "_B");
  // $("#wall_one_c").val("SEINÄ " + $(this).text() + "_C");
  // $("#wall_one_d").val("SEINÄ " + $(this).text() + "_D");
  // $("#wall_one_roof").val("KATTO " + $(this).text() + "_K");
  // $("#wall_one_floor").val("LATTIA " + $(this).text() + "_L");
  // $(".house__wall_one > div.house__wall_status").text("SEINÄ " + $(this).text() + "_A");
  // $(".house__wall_two > div.house__wall_status").text("SEINÄ " + $(this).text() + "_B");
  // $(".house__wall_three > div.house__wall_status").text("SEINÄ " + $(this).text() + "_C");
  // $(".house__wall_four > div.house__wall_status").text("SEINÄ " + $(this).text() + "_D");
  // $(".house__wall_roof > div.house__wall_status").text("KATTO " + $(this).text() + "_K");
  // $(".house__wall_floor > div.house__wall_status").text("LATTIA " + $(this).text() + "_L");



  //NEW#######
  $("#roomname").attr("data-oldname", $(this).html());
  $("#roomname").val("" + $(this).text());

  if($(this).html().split('<br>')[0]) {
    $("#roomname_1").val("" + $(this).html().split('<br>')[0]);
  }
  else {
    $("#roomname_1").val(" ");
  }

  if($(this).html().split('<br>')[1]) {
    $("#roomname_2").val("" + $(this).html().split('<br>')[1]);
  }
  else {
    $("#roomname_2").val(" ");
  }

  if($(this).html().split('<br>')[2]) {
    $("#roomname_3").val("" + $(this).html().split('<br>')[2]);
  }
  else {
    $("#roomname_3").val(" ");
  }


  // Sorry for replacing this, but projectmeta is unclear shit. I replaced with another shit (Look for `roomwalls` table in database).
  // var w = $(".walls_content").val().split(",");
  // //floor
  // if(w[0]) {
  //   $("#wall_one_floor").val(w[0]);
  //   $("div.house__wall_status_l").text(w[0]);
  // }
  // else {
  //   $("#wall_one_floor").val("LATTIA " + $(this).text() + "_L");
  // }
  // //a
  // if(w[1]) {
  //   $("#wall_one_a").val(w[1]);
  //   $("div.house__wall_status_a").text(w[1]);
  // }
  // else {
  //  $("#wall_one_a").val("SEINÄ " + $(this).text() + "_A");
  // }
  // //b
  // if(w[2]) {
  //   $("#wall_one_b").val(w[2]);
  //   $("div.house__wall_status_b").text(w[2]);
  // }
  // else {
  //    $("#wall_one_b").val("SEINÄ " + $(this).text() + "_B");
  // }
  // //c
  // if(w[3]) {
  //   $("#wall_one_c").val(w[3]);
  //   $("div.house__wall_status_c").text(w[3]);
  // }
  // else {
  //   $("#wall_one_c").val("SEINÄ " + $(this).text() + "_C");
  // }

  // //d
  // if(w[4]) {
  //   $("#wall_one_d").val(w[4]);
  //   $("div.house__wall_status_d").text(w[4]);
  // }
  // else {
  //   $("#wall_one_d").val("SEINÄ " + $(this).text() + "_D");
  // }
  // //d
  // if(w[5]) {
  //   $("#wall_one_roof").val(w[5]);
  //   $("div.house__wall_status_k").text(w[5]);
  // }
  // else {
  //   $("#wall_one_roof").val("KATTO " + $(this).text() + "_K");
  // }
  k_saved_input = apartment_.data('kroom');
  a_saved_input = apartment_.data('aroom');
  b_saved_input = apartment_.data('broom');
  c_saved_input = apartment_.data('croom');
  d_saved_input = apartment_.data('droom');
  l_saved_input = apartment_.data('lroom');

  if(a_saved_input.length > 10 && b_saved_input.length > 10 && c_saved_input.length > 10 && d_saved_input.length > 10 && k_saved_input.length > 10 && l_saved_input.length > 10) {
    k_wall = document.querySelectorAll(".house__wall_status_k");
        
      for (var w = 0; w < k_wall.length; w++) {
        k_wall[w].classList.add(k_saved_input.split("~")[1]);
      }
    
    
      a_wall = document.querySelectorAll(".house__wall_status_a");
      for (var w = 0; w < a_wall.length; w++) {
        a_wall[w].classList.add(a_saved_input.split("~")[1]);
      }
    
      b_wall = document.querySelectorAll(".house__wall_status_b");
      for (var w = 0; w < b_wall.length; w++) {
        b_wall[w].classList.add(b_saved_input.split("~")[1]);
      }
    
      c_wall = document.querySelectorAll(".house__wall_status_c");
      for (var w = 0; w < c_wall.length; w++) {
        c_wall[w].classList.add(c_saved_input.split("~")[1]);
      }
      
      d_wall = document.querySelectorAll(".house__wall_status_d");
      for (var w = 0; w < d_wall.length; w++) {
        d_wall[w].classList.add(d_saved_input.split("~")[1]);
      }
    
      l_wall = document.querySelectorAll(".house__wall_status_l");
      for (var w = 0; w < l_wall.length; w++) {
        l_wall[w].classList.add(l_saved_input.split("~")[1]);
      }
      initalize_cross(apartment_.text());
  }

});


$('#rooms div.house__wall_status').click(function() {
  $("#rooms").slideUp(200);
  $("#drawscreen_section_zero").show();
  $("#drawscreen_section_zero").slideDown(200);
  var tilaname = $("#roomname").val();
  
  $("#zero_tila").text(tilaname);
  var text = $(this).text();
  $("#zero_huone").text(text);
  // $(this).removeClass("undone");
  // $(this).addClass("tomeasure");
  $(this).parent().find('.wall_height').val();
  $(this).parent().find('.wall_width').val();
  $('#reclamation__popup .modal_close_btn').attr('id', '--' + tilaname);
  if ($(this).parent().find('.wall_width_2').val()) {
    $("#drawarea_w").val($(this).parent().find('.wall_width_2').val());
  }
  else {
    $("#drawarea_w").val($(this).parent().find('.wall_width').val());
  }
  $("#drawarea_h").val($(this).parent().find('.wall_height').val());
  changesize();

  if(document.querySelector("#open_comments")) {
  }
  else {
    walls_content=document.querySelector(".house__wall_status_l").innerText + ","+document.querySelector(".house__wall_status_a").innerText + ","+document.querySelector(".house__wall_status_b").innerText + ","+document.querySelector(".house__wall_status_c").innerText + ","+document.querySelector(".house__wall_status_d").innerText + ","+document.querySelector(".house__wall_status_k").innerText;
    try { document.querySelector(".walls_content").value = walls_content; } catch(e) { console.log("TRY-CATCH ERROR:", e ) }
  
    initalize_cross();
  }
 

});
var tableId = document.querySelector("#project__room > table");

function create_rooms() {
  var colc = document.querySelector("#colcount").innerHTML;
  var floc = document.querySelector("#rowcount").innerHTML;
  var wall_qty = document.querySelector("#wall_qty").value;
  var insert_cells = parseFloat(Math.round(colc) * Math.round(floc) * Math.round(wall_qty));
  var number = Number(insert_cells);
  for (i = 0; i < number; i++) {
    var j = 0; // First Cell
    var newTR = tableId.insertRow(i);
    var newTD1 = newTR.insertCell(j);
    newTD1.innerHTML = " Huone #" + i;
  };
};


// $( window ).on( "load", function() {
//   //NEW#######
//   w = $(".walls_content").val().split(",");
//   //floor
//   if(w[0]) {
//     $("#wall_one_floor").val(w[0]);
//     $("div.house__wall_status_l").text(w[0]);
//   }
//   //a
//   if(w[1]) {
//     $("#wall_one_a").val(w[1]);
//     $("div.house__wall_status_a").text(w[1]);
//   }
//   if(w[2]) {
//     $("#wall_one_b").val(w[2]);
//     $("div.house__wall_status_b").text(w[2]);
//   }
//   //c
//   if(w[3]) {
//     $("#wall_one_c").val(w[3]);
//     $("div.house__wall_status_c").text(w[3]);
//   }
//   //d
//   if(w[4]) {
//     $("#wall_one_d").val(w[4]);
//     $("div.house__wall_status_d").text(w[4]);
//   }
//   //w
//   if(w[5]) {
//     $("#wall_one_roof").val(w[5]);
//      $("div.house__wall_status_k").text(w[5]);
//   }
// } );


function initalize_cross(arg) {

  a_saved = apartment.dataset.aroom.replaceAll(",","~");
  b_saved = apartment.dataset.broom.replaceAll(",","~");
  c_saved = apartment.dataset.croom.replaceAll(",","~");
  d_saved = apartment.dataset.droom.replaceAll(",","~");
  k_saved = apartment.dataset.kroom.replaceAll(",","~");
  l_saved = apartment.dataset.lroom.replaceAll(",","~");

  // console.log(a_saved);
  // console.log(b_saved);
  // console.log(c_saved);
  // console.log(d_saved);
  // console.log(k_saved);
  // console.log(l_saved);

  console.log('initalize_cross fired');
  //document.querySelector('#step_drawscreen').value='rooms';

  commentboxes = document.querySelectorAll(".house__intro_comments > section");
  for (let i = 0; i < commentboxes.length; i++) {
    commentboxes[i].classList.add("comment__hidden");
  }
  if(document.querySelector("#open_comments")) {
    ir_coms = document.querySelector("#open_comments").value.split("~");
    console.log("ircoms" + ir_coms);
    
    for (let q = 0; q < ir_coms.length; q++) {
      if(ir_coms[q].length > 4) {
        console.log("ir_coms[q].length" + ir_coms[q].length);
        a_name = ir_coms[q].replaceAll("--Tila","").replaceAll(" <br> ","").replaceAll(" <br>","").replaceAll("<br> ","").replaceAll("<br","").replaceAll(" ","").toLowerCase().split(",")[2].split(">")[0].replaceAll(" ","");
        problem_apartment = document.querySelector("."+a_name.replaceAll(" ","").replaceAll("<br>","").replaceAll("/",""));

        if(apartment.classList.contains(problem_apartment)) {
          b_name = ir_coms[q].replaceAll("--Tila","").replaceAll(" <br> ","").replaceAll(" <br>","").replaceAll("<br> ","").replaceAll("<br","").replaceAll(" ","").toLowerCase().split(",")[2].split(">")[1].replaceAll(" ","");
          problem_room = document.querySelector("."+a_name.replaceAll(" ","").replaceAll("<br>","").replaceAll("/",""));

          // b_name = ir_coms[q].split(",")[2].split(">")[1].replaceAll(" ","").toLowerCase();
          // problem_room = document.querySelector(".house__wall_status_"+b_name.replaceAll("ä","a").replaceAll("ö","o").toLowerCase());
          
          // problem_room.classList.remove("prob");
          problem_room.classList.remove("undone");
          problem_room.classList.remove("tomeasure");
          problem_room.classList.remove("measured");

          // if(ir_coms[q].split(",")[9] == 'critical') {
          //   problem_apartment.classList.add("problem");
          // }
          // else {
          //   problem_apartment.classList.add("prob");
          // }

          console.log("OPEN_CROSS RECLAMATION FIRED WITH B-NAME: " + b_name);


         
        }
        commentboxes = document.querySelectorAll(".house__intro_comments > section");

        for (let i = 0; i < commentboxes.length; i++) {
          if(commentboxes[i].dataset.room.replaceAll(" <br> ","").replaceAll(" <br>","").replaceAll("<br> ","").replaceAll("<br","").replaceAll(" ","").replaceAll("<br","").replaceAll(" ","").toLowerCase().split(">")[0] == apartment.dataset.room.replaceAll(" <br> ","").replaceAll(" <br>","").replaceAll("<br> ","").replaceAll("<br","").replaceAll(" ","").toLowerCase()) {
            commentboxes[i].classList.remove("comment__hidden");
            console.log("comment__hidden removed?");
          }
          else {
            commentboxes[i].classList.add("comment__hidden");
            console.log("comment__hidden added?");

          }
          
        }
      }   
    }
  }

  if(arg && typeof arg === 'string' || arg instanceof String) {
    console.log("arg" + arg);
    currect_arak = current_apartment = String(arg).replaceAll(" ","").toLowerCase();
    if(window.location.href.indexOf('&apartment=' + current_apartment) === -1) {
      console.log("true");
      var refresh = window.location.href + '&apartment=' + current_apartment;    
      window.history.pushState({ path: refresh }, '', refresh);
    }
    else if(window.location.href.indexOf('&apartment=' + current_apartment) !== -1) {
      let paramString = window.location.href.split('?')[1];
      let queryString = new URLSearchParams(paramString);

      for (let pair of queryString.entries()) {
        console.log(pair[0] + ", " + pair[1]);
      }
    }
  }
  
  setTimeout(() => {
    // a_saved = document.querySelector("#rooms > input.a_saved").value;
    // b_saved = document.querySelector("#rooms > input.b_saved").value;
    // c_saved = document.querySelector("#rooms > input.c_saved").value;
    // d_saved = document.querySelector("#rooms > input.d_saved").value;
    // k_saved = document.querySelector("#rooms > input.k_saved").value;
    // l_saved = document.querySelector("#rooms > input.l_saved").value;
  if(document.querySelector("#house div.house__wall.house__wall_one")) {
    a_wall = document.querySelector("#house div.house__wall.house__wall_one");
    b_wall = document.querySelector("#house div.house__wall.house__wall_two");
    c_wall = document.querySelector("#house div.house__wall.house__wall_three");
    d_wall = document.querySelector("#house div.house__wall.house__wall_four");
    k_wall = document.querySelector("#house div.house__wall.house__wall_roof");
    l_wall = document.querySelector("#house div.house__wall.house__wall_floor");

    if(a_saved.length>10) {
      a_wall.querySelector(".wall_height").value = parseFloat(a_saved.split("~")[3].split("|")[0]);
      a_wall.querySelector(".wall_width").value = parseFloat(a_saved.split("~")[3].split("|")[1]);

      a_wall.querySelector(".house__wall_status").classList.remove('undone');
      a_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      a_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      a_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      a_wall.querySelector(".house__wall_status").classList.remove('measured');
      a_wall.querySelector(".house__wall_status").classList.remove('done');
      // a_wall.querySelector(".house__wall_status").classList.remove('prob');
      // a_wall.querySelector(".house__wall_status").classList.remove('problem');

      a_wall.querySelector(".house__wall_status").classList.add(a_saved.split("~")[1]);

      a_wall.style.height = parseFloat(a_wall.querySelector(".wall_height").value) / 20 + "px";
      a_wall.style.width = parseFloat(a_wall.querySelector(".wall_width").value) / 20 + "px";
    }
    else {
      a_wall.querySelector(".wall_height").value = 3200;
      a_wall.querySelector(".wall_width").value = 6000;

      a_wall.style.height = parseFloat(a_wall.querySelector(".wall_height").value) / 20 + "px";
      a_wall.style.width = parseFloat(a_wall.querySelector(".wall_width").value) / 20 + "px";
    }

    if(b_saved.length>10) {
      b_wall.querySelector(".wall_height").value = parseFloat(b_saved.split("~")[3].split("|")[0]);
      b_wall.querySelector(".wall_width_2").value = parseFloat(b_saved.split("~")[3].split("|")[1]);

      b_wall.querySelector(".house__wall_status").classList.remove('undone');
      b_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      b_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      b_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      b_wall.querySelector(".house__wall_status").classList.remove('measured');
      b_wall.querySelector(".house__wall_status").classList.remove('done');
      // b_wall.querySelector(".house__wall_status").classList.remove('prob');
      // b_wall.querySelector(".house__wall_status").classList.remove('problem');

      b_wall.querySelector(".house__wall_status").classList.add(b_saved.split("~")[1]);

      b_wall.style.height = parseFloat(b_wall.querySelector(".wall_height").value) / 20 + "px";
      b_wall.style.width = parseFloat(b_wall.querySelector(".wall_width_2").value) / 20 + "px";
    }
    else {
      b_wall.querySelector(".wall_height").value = 3200;
      b_wall.querySelector(".wall_width_2").value = 6000;

      b_wall.style.height = parseFloat(b_wall.querySelector(".wall_height").value) / 20 + "px";
      b_wall.style.width = parseFloat(b_wall.querySelector(".wall_width_2").value) / 20 + "px";
    }

    if(c_saved.length>10) {
      c_wall.querySelector(".wall_height").value = parseFloat(c_saved.split("~")[3].split("|")[0]);
      c_wall.querySelector(".wall_width").value = parseFloat(c_saved.split("~")[3].split("|")[1]);

      c_wall.querySelector(".house__wall_status").classList.remove('undone');
      c_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      c_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      c_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      c_wall.querySelector(".house__wall_status").classList.remove('measured');
      c_wall.querySelector(".house__wall_status").classList.remove('done');
      // c_wall.querySelector(".house__wall_status").classList.remove('prob');
      // c_wall.querySelector(".house__wall_status").classList.remove('problem');

      c_wall.querySelector(".house__wall_status").classList.add(c_saved.split("~")[1]);

      c_wall.style.height = parseFloat(c_wall.querySelector(".wall_height").value) / 20 + "px";
      c_wall.style.width = parseFloat(c_wall.querySelector(".wall_width").value) / 20 + "px";
    }
    else {
      c_wall.querySelector(".wall_height").value = 3200;
      c_wall.querySelector(".wall_width").value = 6000;

      c_wall.style.height = parseFloat(c_wall.querySelector(".wall_height").value) / 20 + "px";
      c_wall.style.width = parseFloat(c_wall.querySelector(".wall_width").value) / 20 + "px";
    }
    if(d_saved.length>10) {
      d_wall.querySelector(".wall_height").value = parseFloat(d_saved.split("~")[3].split("|")[0]);
      d_wall.querySelector(".wall_width_2").value = parseFloat(d_saved.split("~")[3].split("|")[1]);

      d_wall.querySelector(".house__wall_status").classList.remove('undone');
      d_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      d_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      d_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      d_wall.querySelector(".house__wall_status").classList.remove('measured');
      d_wall.querySelector(".house__wall_status").classList.remove('done');
      // d_wall.querySelector(".house__wall_status").classList.remove('prob');
      // d_wall.querySelector(".house__wall_status").classList.remove('problem');

      d_wall.querySelector(".house__wall_status").classList.add(d_saved.split("~")[1]);

      d_wall.style.height = parseFloat(d_wall.querySelector(".wall_height").value) / 20 + "px";
      d_wall.style.width = parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px";

      k_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px";
      l_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px";
    }
    else {
      d_wall.querySelector(".wall_height").value = 3200;
      d_wall.querySelector(".wall_width_2").value = 6000;
      d_wall.style.height = parseFloat(d_wall.querySelector(".wall_height").value) / 20 + "px";
      d_wall.style.width = parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px";
    }
    if(k_saved.length>10) {
      k_wall.querySelector(".wall_height").value = parseFloat(k_saved.split("~")[3].split("|")[0]);
      k_wall.querySelector(".wall_width").value = parseFloat(k_saved.split("~")[3].split("|")[1]);

      k_wall.querySelector(".house__wall_status").classList.remove('undone');
      k_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      k_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      k_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      k_wall.querySelector(".house__wall_status").classList.remove('measured');
      k_wall.querySelector(".house__wall_status").classList.remove('done');
      // k_wall.querySelector(".house__wall_status").classList.remove('prob');
      // k_wall.querySelector(".house__wall_status").classList.remove('problem');

      k_wall.querySelector(".house__wall_status").classList.add(k_saved.split("~")[1]);

      k_wall.style.height = parseFloat(k_wall.querySelector(".wall_height").value) / 20 + "px";
      k_wall.style.width = parseFloat(k_wall.querySelector(".wall_width").value) / 20 + "px";
    }
    else {
      k_wall.querySelector(".wall_height").value = 3200;
      k_wall.querySelector(".wall_width").value = 6000;

      k_wall.style.height = parseFloat(k_wall.querySelector(".wall_height").value) / 20 + "px";
      k_wall.style.width = parseFloat(k_wall.querySelector(".wall_width").value) / 20 + "px";
    }
    if(l_saved.length>10) {
      l_wall.querySelector(".wall_height").value = parseFloat(l_saved.split("~")[3].split("|")[0]);
      l_wall.querySelector(".wall_width").value = parseFloat(l_saved.split("~")[3].split("|")[1]);


      l_wall.querySelector(".house__wall_status").classList.remove('undone');
      l_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      l_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      l_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      l_wall.querySelector(".house__wall_status").classList.remove('measured');
      l_wall.querySelector(".house__wall_status").classList.remove('done');
      // l_wall.querySelector(".house__wall_status").classList.remove('prob');
      // l_wall.querySelector(".house__wall_status").classList.remove('problem');

      l_wall.querySelector(".house__wall_status").classList.add(l_saved.split("~")[1]);

      l_wall.style.height = parseFloat(l_wall.querySelector(".wall_height").value) / 20 + "px";
      l_wall.style.width = parseFloat(l_wall.querySelector(".wall_width").value) / 20 + "px";
    }
    else {
      l_wall.querySelector(".wall_height").value = 3200;
      l_wall.querySelector(".wall_width").value = 6000;

      l_wall.style.height = parseFloat(l_wall.querySelector(".wall_height").value) / 20 + "px";
      l_wall.style.width = parseFloat(l_wall.querySelector(".wall_width").value) / 20 + "px";
    }

    if(parseFloat(document.querySelector("#house div.house__wall.house__wall_three.house__wall_c").offsetLeft) > 0) {
      document.querySelector("#house .house__wall_roof").style.left = (-35) + document.querySelector("#house div.house__wall.house__wall_three.house__wall_c").offsetLeft + "px";
      document.querySelector("#house .house__wall_floor").style.left = (-35) + document.querySelector("#house div.house__wall.house__wall_three.house__wall_c").offsetLeft + "px";
    }
  }
  console.log("currect_arak:", currect_arak);

  $.ajax({
    url: "/get-walls.php",
    type: "post",
    data: {
      project_id: document.querySelector("#current_project_id").value,
      arak: currect_arak
    },
    success: (answer) => {
      let walls = JSON.parse(answer);
      console.log("walls:", walls);

      // walls.forEach((wall) => {
      //   //  	id 	project_id 	arak 	wall 	asjarj 	name 	description 	hidden 	

      //   let i = wall[3].toLowerCase();
      //   j = i == 'k' ? 'roof' : i == 'l' ? 'floor' : i;

      //   document.querySelector(`#wall_order_${j}`).value = wall[4] && wall[4] > 0 ? parseInt(wall[4]) : wallAToNum(i);
      //   document.querySelector(`#wall_one_${j}`).value = wall[5] ? wall[5] : "SEINÄ " + i.toUpperCase(); console.log(document.querySelector(`#wall_one_${j}`).value);
      //   document.querySelector(`#wall_desc_${j}`).value = wall[6] ? wall[6] : "" ;

      //   wall[7] == "1" ? document.querySelector(`.house__wall_${j}`).classList.add("hidden")
      //   : document.querySelector(`.house__wall_${j}`).classList.remove("hidden");
      // }); 
    }
  });
  }, 400);

  
  statuses = document.querySelectorAll(".house__wall_status");
  for (let s = 0; s < statuses.length; s++) {
    statuses[s].classList.remove("prob");
    statuses[s].classList.remove("problem");
  }
  refresh__drawcontrols();



}

function wallAToNum(a) {
  a = a.toLowerCase();
  if(a == "a") {
    return 1;
  } else if(a == "b") {
    return 2;
  } else if(a == "c") {
    return 3;
  } else if(a == "d") {
    return 4;
  } else if(a == "k" || a == "roof") {
    return 5;
  } else if(a == "l" || a == "floor") {
    return 6;
  }
}

function adjust_roomsizes() {

  if(document.querySelector("#house div.house__wall")) {
    a_wall = document.querySelector("#house div.house__wall.house__wall_one");
    b_wall = document.querySelector("#house div.house__wall.house__wall_two");
    c_wall = document.querySelector("#house div.house__wall.house__wall_three");
    d_wall = document.querySelector("#house div.house__wall.house__wall_four");
    k_wall = document.querySelector("#house div.house__wall.house__wall_roof");
    l_wall = document.querySelector("#house div.house__wall.house__wall_floor");

    a_wall.style.height = parseFloat(a_wall.querySelector(".wall_height").value) / 20 + "px";
    a_wall.style.width = parseFloat(a_wall.querySelector(".wall_width").value) / 20 + "px";

    b_wall.style.height = parseFloat(b_wall.querySelector(".wall_height").value) / 20 + "px";
    b_wall.style.width = parseFloat(b_wall.querySelector(".wall_width_2").value) / 20 + "px";

    c_wall.style.height = parseFloat(c_wall.querySelector(".wall_height").value) / 20 + "px";
    c_wall.style.width = parseFloat(c_wall.querySelector(".wall_width").value) / 20 + "px";

    d_wall.style.height = parseFloat(d_wall.querySelector(".wall_height").value) / 20 + "px";
    d_wall.style.width = parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px";

    k_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px";
    l_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px";

    k_wall.style.width = parseFloat(k_wall.querySelector(".wall_width").value) / 20 + "px";
    k_wall.style.height = parseFloat(k_wall.querySelector(".wall_height").value) / 20 + "px";

    l_wall.style.height = parseFloat(l_wall.querySelector(".wall_height").value) / 20 + "px";
    l_wall.style.width = parseFloat(l_wall.querySelector(".wall_width").value) / 20 + "px";
  }

  
}


function degradate_url(stage) {
  urlString = window.location.href;
  url = new URL(urlString);
  if(stage === 1) {
    removedParam = 'apartment';
    url.searchParams.delete(removedParam);

    removedParam = 'room';
    url.searchParams.delete(removedParam);

    removedParam = 'step';
    url.searchParams.delete(removedParam);
  }
  if(stage === 2) {
    removedParam = 'room';
    url.searchParams.delete(removedParam);

    removedParam = 'step';
    url.searchParams.delete(removedParam);
  }
  if(stage === 3) {
    removedParam = 'step';
    url.searchParams.delete(removedParam);
  }
  url.searchParams.delete(removedParam);
  modified_url = JSON.stringify(url).replaceAll('"',"").replaceAll("'","").replaceAll("http://localhost/","").replaceAll("%22","").replaceAll("https://editori.westface.fi/","").replaceAll("http://editori.westface.fi/","");
  window.history.pushState({ path: modified_url }, '', modified_url);
}
window.addEventListener('popstate', () => {
  
});

jQuery(document).ready(function($) {

  if (window.history && window.history.pushState) {

    $(window).on('popstate', function() {
      degradate_url(1);
      location.reload();
    });

  }
});

function initializebuilding() {
  raput = document.querySelectorAll(".coderdy");
  current_user = document.querySelector("#current_user").value;
  current_role = document.querySelector("#current_role").value;
  if(current_user.toLowerCase() == 'tyonjohto' || current_role.toLowerCase() == 'mittaus') {
    for (let i = 0; i < raput.length; i++) {
        addmore = document.createElement("div");
        addmore.classList.add("projectbtn");
        addmore.classList.add("projectbtn__addmore");
        addmore.innerHTML = "x";
        addmore.setAttribute("onclick","projectfunction__addmore(this);__current__rappu ='"+raput[i].getAttribute("id").toLowerCase()+"';");
        settings = document.createElement("div");
        settings.classList.add("projectbtn");
        settings.classList.add("projectbtn__settings");
        settings.innerHTML = "x";
        settings.setAttribute("onclick","projectfunction__settings(this);");

        raput[i].querySelector("h2").appendChild(addmore);
        raput[i].querySelector("h2").appendChild(settings);
      
    }
  }
  project_type = document.querySelector("#current_project_measurement").value;
  if(project_type === 'after_measure_comment') {
      document.querySelector("#house").style.display = "block";
  }
  else {
    document.querySelector("#house").style.display = "none";    
  }
  
}

initializebuilding();

function projectfunction__addmore(elem) {

  document.querySelector('.five_popup').classList.add("two");
  document.querySelector('.five_popup').classList.remove("out");
  table_to = document.querySelector("#A_");
  table_from = elem.parentElement.parentElement.parentElement;
  console.log(table_from);

  table_from_cells = table_from.querySelectorAll(".project__building_room");
  try {
    for (let i = 0; i < table_from_cells.length; i++) {
    
      table_to.querySelectorAll("tr")[table_to.querySelectorAll("tr").length - parseFloat(table_from_cells[i].dataset.y)].style.display = "flex";  
    
      right_y = table_to.querySelectorAll("tr")[table_to.querySelectorAll("tr").length - parseFloat(table_from_cells[i].dataset.y)].querySelectorAll("td")[parseFloat(table_from_cells[i].dataset.x)];
      

      right_y.dataset.y = table_from_cells[i].dataset.y;
      right_y.dataset.x = table_from_cells[i].dataset.x;
      right_y.dataset.aroom = table_from_cells[i].dataset.aroom;
      right_y.dataset.broom = table_from_cells[i].dataset.broom;
      right_y.dataset.croom = table_from_cells[i].dataset.croom;
      right_y.dataset.droom = table_from_cells[i].dataset.droom;
      right_y.dataset.kroom = table_from_cells[i].dataset.kroom;
      right_y.dataset.lroom = table_from_cells[i].dataset.lroom;


      right_y.click();
      right_y.classList.add("checked");
      right_y.querySelector("input").checked = true;

      if(document.querySelector("#a_nextnum_second").value.length > 1) {
        secondelem = "<br/>" + document.querySelector("#a_nextnum_second").value;
      }
      else {
        secondelem = "";
      }

      if(document.querySelector("#a_nextnum_third").value.length > 1) {
        thirdelem = "<br/>" + document.querySelector("#a_nextnum_third").value;
      }
      else {
        thirdelem = "";
      }

      right_y.querySelector("label").innerHTML = table_from_cells[i].innerHTML;
      
      console.log("CLICK TD");

      document.querySelector("#a_nextnum").value = i+2;
      z = parseFloat(document.querySelector("#a_nextnum").value);
      console.log(i);
      
    }
  } catch (error) {
    
  }
  table_from_trs = table_to.querySelectorAll("tr");
  table_from_trs[49].style.display = "block";
  table_from_trs = table_to.querySelectorAll("tr");

  for (let o = 0; o < table_from_trs.length; o++) {
    if(table_from_trs[o].style.display === "none") {
      table_from_trs[o].remove();
    }
  }
  
}
function projectfunction__settings(elem) {
  document.querySelector('.first_popup').classList.add("two");
  document.querySelector('.first_popup').classList.remove("out");
  
}

function send_new_aparts() {
  const upd__a_array = [];
  const upd__a_ = [];
  $("#A_ .checked").each(function(index) {
      posX = $(this).parent().data("no");
      posY = $(this).index();
      nam = $(this).find("label").html();

      if (nam.length > 2) {
        if($(this).data("aroom")) {
          upd__a_array.push({
            name: nam,
            positionX: posX,
            positionY: posY,
            a_room: $(this).data("aroom"),
            b_room: $(this).data("broom"),
            c_room: $(this).data("croom"),
            d_room: $(this).data("droom"),
            k_room: $(this).data("kroom"),
            l_room: $(this).data("lroom")
          });
        }
        else {
          upd__a_array.push({
            name: nam,
            positionX: posX,
            positionY: posY,
            a_room: "13~undone~1|1~2200|4000~~~~~",
            b_room: "13~undone~1|1~2200|2200~~~~~",
            c_room: "13~undone~1|1~2200|4000~~~~~",
            d_room: "13~undone~1|1~2200|2200~~~~~",
            k_room: "13~undone~1|1~2200|4000~~~~~",
            l_room: "13~undone~1|1~2200|4000~~~~~"
         });         
        }
          $("#a_rooms").val(JSON.stringify(upd__a_array));
      }

  });

  $("#A_ .nowork").each(function(index) {
      posX = $(this).parent().data("no");
      posY = $(this).index();
      nam = "NOWORK";
      upd__a_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      // $("#a_rooms_nowork").val(JSON.stringify(upd__a_));
  });

  console.log(JSON.stringify(upd__a_array));
  console.log(JSON.stringify(upd__a_));


  __id = parseFloat(document.querySelector("#current_project_id").value);
  setTimeout(function () {
    formData = {
      project_id: __id,
      room_identificator: __current__rappu,
      rooms: JSON.stringify(upd__a_array),
      rooms_nowork: JSON.stringify(upd__a_)
    };

    $.ajax({
      type: "POST",
      url: "/vendor/modify__project_apartments.php",
      data: formData,
      error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
        console.log(formData);
      }
    }).done(function (data) {
      alert('Tallennettu, kiitos!');
      location.reload();
    });
  }, 500);
}

function start__measuring(elem) {
  project_id_ = parseFloat(document.querySelector("#current_project_id").value);

  if(elem.innerText === 'Aloita mittaaminen') {
    project_type_ = 'after_measure_comment';
    elem.innerText = 'Päätä mittus';
  }
  else {
    project_type_ = '';
    elem.innerText = 'Aloita mittaaminen';
  }
  elem.classList.toggle("yellow");
  
  formData = {
      project_id: project_id_,
      project_type: project_type_,
  };
  $.ajax({
  type: "POST",
  url: "../vendor/modifyproject_type.php",
  data: formData,
  error: function (jqxhr, status, exception) {
      alert('Tietokantavirhe, soita numeroon +358449782028');
      console.log(formData);
  }
  }).done(function (data) {
      console.log(project_type_);
  });
}

function projectname__change(elem) {
  project_id_ = parseFloat(document.querySelector("#current_project_id").value);
  project_name_ = elem.value;
  
  formData = {
      project_id: project_id_,
      project_name: project_name_,
  };
  $.ajax({
  type: "POST",
  url: "../vendor/modifyproject_name.php",
  data: formData,
  error: function (jqxhr, status, exception) {
      alert('Tietokantavirhe, soita numeroon +358449782028');
      console.log(formData);
  }
  }).done(function (data) {

  });
}

function open__change_btn() {
  change__roomname_btn = document.querySelector(".change__roomname_btn");
  change__roomname_btn.style.opacity = 1;
}

function change__roomname() {
  roomname_forchange = document.querySelector("#roomname_1").value.replaceAll(" ","") + " <br> " + document.querySelector("#roomname_2").value.replaceAll(" ","") + " <br> " + document.querySelector("#roomname_3").value.replaceAll(" ","");
  project_id_ = parseFloat(document.querySelector("#current_project_id").value);
  project_roomname_ = roomname_forchange;
  project_oldroomname_ = document.querySelector("#roomname").dataset.oldname;
  
  formData = {
      project_id: project_id_,
      project_roomname: project_roomname_,
      project_oldroomname: project_oldroomname_,
  };
  $.ajax({
  type: "POST",
  url: "../vendor/modifyproject_roomname.php",
  data: formData,
  error: function (jqxhr, status, exception) {
      alert('Tietokantavirhe, soita numeroon +358449782028');
      console.log(formData);
  }
  }).done(function (data) {
    console.log(project_id_);
    console.log(project_roomname_);
    console.log(project_oldroomname_);
    console.log(data);
    // location.reload();
  });
}


prc_count = 11;
function settings_henkilolisays(elem) {
  elem.classList.add("active")
    prc_count+=1;
    if(prc_count >= 13) {
        alert("Henkilöiden maksimimäärä ylitetty!");
        return;
    }
    var group = document.createElement("div");
    group.classList.add("form-group");
    group.classList.add("form-group_settingsadding");

    var subgroup_1 = document.createElement("div");
    var subgroup_2 = document.createElement("div");
    var subgroup_3 = document.createElement("div");
    var subgroup_4 = document.createElement("div");
    var subgroup_5 = document.createElement("div");
    var subgroup_6 = document.createElement("div");


    subgroup_1.classList.add("form-subgroup");
    subgroup_2.classList.add("form-subgroup");
    subgroup_3.classList.add("form-subgroup");
    subgroup_4.classList.add("form-subgroup");
    subgroup_5.classList.add("form-subgroup");
    subgroup_6.classList.add("form-subgroup");
    
        
    subgroup_1.innerHTML = '<label>Nimi ja Rooli: </label><input type="text" name="prc_new" class="prc_new form-control prc_new" value=" " required list="prc_new_list" onchange="prsettings__give_numbers(this.value);"></div>';
    subgroup_2.innerHTML = '<label>Puhelinnumero: </label><input type="text" name="prc_new_puh" class="prc_new_puh form-control" value=" " required></div>';
    subgroup_3.innerHTML = '<label>Sähköposti: </label><input type="text" name="prc_new_email" class="prc_new_email form-control" value=" " required></div>';
    subgroup_4.innerHTML = '<label for="prc_new_role">Rooli:</label><select name="role" id="prc_new_role"><option value="saaja">Viestien saaja</option><option value="katsoja">Katsoja</option><option value="kommentointi">Kommentointi</option><option value="mittaus">Mittamies</option></select>';
    subgroup_5.innerHTML = '<h5>Saako katsoa kaikki projektin tiedot?</h5><div class="row-reversed"><label for="prc_new_permission">Kyllä</label><input type="checkbox" id="prc_new_permission" class="standard_checkbox"></div><h5>Poista näkymässä projektilla</h5><div class="row-reversed"><label for="prc_new_hiding">Kyllä</label><input type="checkbox" id="prc_new_hiding" class="standard_checkbox"></div>';
    subgroup_6.innerHTML = '<div onclick="settings__sendworkers_db();" class="settings__henkilolisays_button">Lähetä</div>';


    group.appendChild(subgroup_1);
    group.appendChild(subgroup_2);
    group.appendChild(subgroup_3);
    group.appendChild(subgroup_4);
    group.appendChild(subgroup_5);
    group.appendChild(subgroup_6);

    document.querySelector("#settings__henkilolisays_inputs").append(group);
}

function prsettings__give_numbers(elem) {
  try {
      elements_array = document.querySelector("."+elem.replaceAll(' ','___').toLowerCase()+"_userselection").value.split("|");
      console.log(elements_array);
      // document.querySelector(".prc_"+integer+"").value =elements_array[1];
      document.querySelector(".prc_new_puh").value = elements_array[1];
      document.querySelector(".prc_new_email").value = elements_array[2];    

      document.querySelector("#prc_new_role").value = elements_array[3];    
    // console.log(".prc_"+parseFloat(integer)+"_role ."+elements_array[3]);
    if(parseFloat(elements_array[4]) == 1) {
        document.querySelector("#prc_new_permission").checked = true;
    }
    if(parseFloat(elements_array[5]) == 1) {
        document.querySelector("#pprc_new_hiding").checked = true;
    }
    

  } catch (error) {
    console.log("No user exists in the settings");
  }

} 

function settings__sendworkers_db() {
  project_id_ = parseFloat(document.querySelector("#current_project_id").value);
  added__username_ = document.querySelector(".prc_new").value;
  added__userpuh_ = document.querySelector(".prc_new_puh").value;
  added__useremail_ = document.querySelector(".prc_new_email").value;
  added__userrole_ = document.querySelector("#prc_new_role").value;
  added__usernewpermission_ = document.querySelector("#prc_new_permission").value.replaceAll("on",1);
  added__userhidingpermission_ = document.querySelector("#prc_new_hiding").value.replaceAll("on",1);
  added__by_ = document.querySelector(".kommentti_comment_from").value;
  formData = {
    project_id: project_id_,
    added__username: added__username_,
    added__userpuh: added__userpuh_,
    added__useremail: added__useremail_,
    added__userrole: added__userrole_,
    added__usernewpermission: added__usernewpermission_,
    added__userhidingpermission: added__userhidingpermission_,
    added__by: added__by_
  };
  $.ajax({
  type: "POST",
  url: "../vendor/modifyproject_adduser.php",
  data: formData,
  error: function (jqxhr, status, exception) {
      alert('Tietokantavirhe, soita numeroon +358449782028');
      console.log(formData);
  }
  }).done(function (data) {
    console.log(data);
    // location.reload();
  });
}


$(document).ready(function() {
  $('.project__settings_uploadsend').click(function() {
      that_element_class = $(this).attr("name") + '_previewfiles';
      // console.log($(this).parent().children()[1].children[0].children[0]);
      totalfiles = $(this).parent().children()[1].files.length;
      cur_comment_files = $(this).parent().children()[1].files;
      console.log(totalfiles);
      for (var index = 0; index < totalfiles; index++) {
          form_data = new FormData();
          form_data.append("files", cur_comment_files[index]);

          $.ajax({
              url: '/upload.php',
              type: 'POST',
              data: form_data,
              contentType: 'multipart/form-data',
              // dataType: 'json',
              contentType: false,
              processData: false,
              success: function(response) {
                  document.querySelector("." +that_element_class).innerHTML += '<a class="asiakirja_first" target="_blank" href="https://editori.westface.fi/uploads/' + response + '">' + 'https://editori.westface.fi/uploads/' + response + '</a><br>';
                  console.log(response);
              }
          });

          setTimeout(() => {
            naming_2 = $(this).parent().children()[0].innerText;
            naming_ = naming_2.replaceAll("?","").replaceAll(" ","_").toLowerCase();
            attachments_ = document.querySelector("." +that_element_class).innerHTML;
            
            formData = {
              project_id: parseFloat(document.querySelector("#current_project_id").value),
              naming: naming_,
              attachments: attachments_ 
            };

            $.ajax({
              url: '../vendor/modifyproject_registerfiles.php',
              type: 'POST',
              data: formData,
              success: function(response) {
                  console.log(response);
                  console.log(formData);
              }
          });

          }, 1000);
      }
  });
});


Date.prototype.getWeek = function() {
  var onejan = new Date(this.getFullYear(),0,1);
  var today = new Date(this.getFullYear(),this.getMonth(),this.getDate());
  var dayOfYear = ((today - onejan + 86400000)/86400000);
  return Math.ceil(dayOfYear/7)
};
setTimeout(() => {
  if(document.querySelector(`#newcomment__vko`)) {
      document.querySelector(`#newcomment__vko`).value= new Date(document.querySelector(`#newcomment__deadline`).value).getWeek();

  }
}, 1000);



let timer = 0

$('.project__building_room').click((e) => {
  e.preventDefault()
  e.stopPropagation()
  
  $('.project__building_room-overlay').remove()
  $(e.target).find('.active').removeClass('active')
})

$(".p_meaning")
  .on("mousedown touchstart", (e) => {
    $(e.target).focus();
    let $element = $(e.target)

    $( ".p_meaning.active").each(function( index ) {
      $('.p_meaning').removeClass('active')
    });

    timer = window.setTimeout(() => longClick($element), 1000);

    action = $(e.target).data("action");
    action_meaning = $(e.target).text();

  })
  // .on("mouseup mouseleave touchend touchmove", (e) =>
  //   clearTimeout(timer)
  // )
  // .click((e) => {
  //   e.preventDefault()
  //   e.stopPropagation()
  //   $('.popup__statuses').removeClass('active')
  //   console.log("click")
  // });

$(".p_meaning_end")
  .on("mousedown touchstart", (e) => {
    save__newstatuses();
   
    setTimeout(function() { 
      clearTimeout(timer);
      e.preventDefault()
      e.stopPropagation()
      $('.project__building').removeClass('active')
      $('.popup__statuses').removeClass('active')
      $('.project__building_room').removeClass('active')
      $('.project__building_room-overlay').remove()
      window.removeEventListener("click", defaultClick, true)

      $( ".p_meaning.active").each(function( index ) {
        $('.p_meaning').removeClass('active')
      });

      open__workelab();
    }, 500);
    

});
const longClick = (element) => {

  $('.project__building').removeClass('active')
  $('.project__building_room-overlay').remove()
  $('.project__building_room').removeClass('active')
  element.addClass('active')
  element.addClass(action)
  $('.popup__statuses').addClass('active')
  window.addEventListener("click", defaultClick, true)
  element.append(`<div class='project__building_room-overlay'></div>`)
  console.log("longpress")

  if($(element).hasClass('problemo')) elab__comment_enable(true,'basic');
  else if($(element).hasClass('grande_problemo')) elab__comment_enable(true,'critical');
  else {
    elab__comment_enable(false);
  }
};

function elab__comment_enable(stage,criticality) {
  if(stage === false) {
    document.querySelector(`.status__elab_problem`).classList.add(`elab__status_hidden`);
  }
  else {
    console.log('problemo or gorande broblemo');
    console.log(criticality);
    document.querySelector(`.status__elab_problem`).classList.remove(`elab__status_hidden`);
    if(criticality == 'critical') {
      document.querySelector("#is_thecomment_critical2").checked = true;
    }
    else {
      document.querySelector("#is_thecomment_critical2").checked = false;
    }
 

      // p_meaning_end = document.querySelector(".p_meaning_end");
      // document.querySelector(".status__elab_problem commentbox_btn").remove();
      // p_meaning_end.classList.add("commentbox_btn");
      // p_meaning_end.classList.add("drawarea__controls_btn");
      // p_meaning_end.classList.add("btn");
      // p_meaning_end.classList.add("commentreadyready_btn");
      // p_meaning_end.classList.add("sendcommentfiles");
      // p_meaning_end.classList.setAttribute("onclick","comment__create_new(1);");

     

  }
}

const defaultClick = (e) => {
  e.stopPropagation()
  _changed_tilas = "";
  if($(e.target).hasClass('project__building_room')) $(e.target).toggleClass('active');
  if($(e.target).hasClass('project__building_room')) building__action(action);
  
};

function save__newstatuses() {
  a_rooms = '';b_rooms = '';c_rooms = '';d_rooms = '';e_rooms = '';f_rooms = '';g_rooms = '';h_rooms = '';
  if (document.querySelectorAll("#A")) {
    if(document.querySelector("#A").offsetHeight === 0) {
    }
    else {
      a_rooms_ = document.querySelectorAll("#A .project__building_room");

      a_rooms = '';

      for (let i = 0; i < a_rooms_.length; i++) {
        _name = a_rooms_[i].innerHTML.replaceAll(",", "~").replaceAll("   ", " ").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = a_rooms_[i].dataset.x.replaceAll(",", "~").replaceAll("   ", " ");
        positionY = a_rooms_[i].dataset.y.replaceAll(",", "~").replaceAll("   ", " ");;
        a_room = a_rooms_[i].dataset.aroom.replaceAll(",", "~").replaceAll("   ", " ");;
        b_room = a_rooms_[i].dataset.broom.replaceAll(",", "~").replaceAll("   ", " ");;
        c_room = a_rooms_[i].dataset.croom.replaceAll(",", "~").replaceAll("   ", " ");;
        d_room = a_rooms_[i].dataset.droom.replaceAll(",", "~").replaceAll("   ", " ");;
        k_room = a_rooms_[i].dataset.kroom.replaceAll(",", "~").replaceAll("   ", " ");;
        l_room = a_rooms_[i].dataset.lroom.replaceAll(",", "~").replaceAll("   ", " ");;

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        a_rooms += element;
      }
    }
  }
  else {
    
  }
  
  if(document.querySelectorAll("#B")) {
    if(document.querySelector("#B").offsetHeight === 0) {
    }
    else {
      b_rooms_ = document.querySelectorAll("#B .project__building_room");
      b_rooms = '';

      for (let i = 0; i < b_rooms_.length; i++) {     
        _name = b_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = b_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = b_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = b_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = b_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = b_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = b_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = b_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = b_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        b_rooms+=element;
      }
    }
  } 
  else {
    b_rooms = '';
  }
  if(document.querySelectorAll("#C")) {
    if(document.querySelector("#C").offsetHeight === 0) {}
    else {
      c_rooms_ = document.querySelectorAll("#C .project__building_room");
      c_rooms = '';

      for (let i = 0; i < c_rooms_.length; i++) {     
        _name = c_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = c_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = c_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = c_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = c_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = c_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = c_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = c_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = c_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        c_rooms+=element;
      }
    }
  
  }
  else {
    
  }

  
  if(document.querySelectorAll("#C")) {
    if(document.querySelector("#C").offsetHeight === 0) {}
    else {
      c_rooms_ = document.querySelectorAll("#C .project__building_room");
      c_rooms = '';

      for (let i = 0; i < c_rooms_.length; i++) {     
        _name = c_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = c_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = c_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = c_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = c_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = c_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = c_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = c_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = c_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        c_rooms+=element;
      }
    }
  
  }
  else {
    c_rooms = '';
  }

  
  if(document.querySelectorAll("#D")) {
    if(document.querySelector("#D").offsetHeight === 0) {}
    else {
      d_rooms_ = document.querySelectorAll("#D .project__building_room");
      d_rooms = '';

      for (let i = 0; i < d_rooms_.length; i++) {     
        _name = d_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = d_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = d_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = d_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = d_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = d_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = d_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = d_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = d_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        d_rooms+=element;
      }
    }
  
  }
  else {
    d_rooms = '';
  }

  
  if(document.querySelectorAll("#E")) {
    if(document.querySelector("#E").offsetHeight === 0) {}
    else {
      e_rooms_ = document.querySelectorAll("#E .project__building_room");
      e_rooms = '';

      for (let i = 0; i < e_rooms_.length; i++) {     
        _name = e_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = e_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = e_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = e_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = e_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = e_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = e_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = e_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = e_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        e_rooms+=element;
      }
    }
  
  }
  else {
    e_rooms = '';
  }

  
  if(document.querySelectorAll("#F")) {
    if(document.querySelector("#F").offsetHeight === 0) {}
    else {
      f_rooms_ = document.querySelectorAll("#F .project__building_room");
      f_rooms = '';

      for (let i = 0; i < f_rooms_.length; i++) {     
        _name = f_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = f_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = f_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = f_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = f_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = f_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = f_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = f_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = f_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        f_rooms+=element;
      }
    }
  
  }
  else {
    f_rooms = '';
  }

  
  if(document.querySelectorAll("#G")) {
    if(document.querySelector("#G").offsetHeight === 0) {}
    else {
      g_rooms_ = document.querySelectorAll("#G .project__building_room");
      g_rooms = '';

      for (let i = 0; i < g_rooms_.length; i++) {     
        _name = g_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = g_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = g_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = g_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = g_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = g_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = g_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = g_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = g_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        g_rooms+=element;
      }
    }
  
  }
  else {
    g_rooms = '';
  }

  
  if(document.querySelectorAll("#H")) {
    if(document.querySelector("#H").offsetHeight === 0) {}
    else {
      h_rooms_ = document.querySelectorAll("#H .project__building_room");
      h_rooms = '';

      for (let i = 0; i < h_rooms_.length; i++) {     
        _name = h_rooms_[i].innerHTML.replace('"','').replace("'","").replaceAll("<divclass=project__building_room-overlay></div>","");
        positionX = h_rooms_[i].dataset.x.replace('"','').replace("'","");
        positionY = h_rooms_[i].dataset.y.replace('"','').replace("'","");
        a_room = h_rooms_[i].dataset.aroom.replace('"','').replace("'","");
        b_room = h_rooms_[i].dataset.broom.replace('"','').replace("'","");
        c_room = h_rooms_[i].dataset.croom.replace('"','').replace("'","");
        d_room = h_rooms_[i].dataset.droom.replace('"','').replace("'","");
        k_room = h_rooms_[i].dataset.kroom.replace('"','').replace("'","");
        l_room = h_rooms_[i].dataset.lroom.replace('"','').replace("'","");

        element = '{"name": "' + _name + '","positionY": ' + positionY + ',"positionX": ' + positionX + ',"a_room": "' + a_room + '","b_room": "' + b_room + '","c_room": "' + c_room + '","d_room": "' + d_room + '","k_room": "' + k_room + '","l_room": "' + l_room + '"},';
        h_rooms+=element;
      }
    }
  
  }
  else {
    h_rooms = '';
  }
  _id = parseFloat(document.querySelector("#current_project_id").value);
  _who = document.querySelector(".t_users .active_user").innerText;
  _what = action_meaning;

  activerooms = document.querySelectorAll(".project__building_room.active");
  _rooms_array = "";
  for (let a = 0; a < activerooms.length; a++) {
    _rooms_array += activerooms[a].parentElement.parentElement.parentElement.querySelector("h2 input").value + " - " + activerooms[a].innerText + " <br>";
  }
  formData = {
    pr_id: _id,
    who: _who,
    what: _what,
    where: _rooms_array
  };

  console.log(formData);

  $.ajax({
    type: "POST",
    url: "/vendor/send_workdiary.php",
    data: formData,
    error: function (jqxhr, status, exception) {
      alert('Tietokantavirhe, soita numeroon +358449782028');
    }
  }).done(function (data) {
    // alert('Seinä ' + current_room + ' tallennettu');
    console.log("saved rooms: " + data);
  });

  _saving_a_rooms = "[" + a_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";
  _saving_b_rooms = "[" + b_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";
  _saving_c_rooms = "[" + c_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";
  _saving_d_rooms = "[" + d_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";
  _saving_e_rooms = "[" + e_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";
  _saving_f_rooms = "[" + f_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";
  _saving_g_rooms = "[" + g_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";
  _saving_h_rooms = "[" + h_rooms.replace("'", "").replaceAll('<div class="project__building_room-overlay"></div>','') + "]";

  formData = {
    id: _id,
    saving_a_rooms: _saving_a_rooms.replaceAll(",]","]").replaceAll("   ",""),
    saving_b_rooms: _saving_b_rooms.replaceAll(",]","]").replaceAll("   ",""),
    saving_c_rooms: _saving_c_rooms.replaceAll(",]","]").replaceAll("   ",""),
    saving_d_rooms: _saving_d_rooms.replaceAll(",]","]").replaceAll("   ",""),
    saving_e_rooms: _saving_e_rooms.replaceAll(",]","]").replaceAll("   ",""), 
    saving_f_rooms: _saving_f_rooms.replaceAll(",]","]").replaceAll("   ",""), 
    saving_g_rooms: _saving_g_rooms.replaceAll(",]","]").replaceAll("   ",""), 
    saving_h_rooms: _saving_h_rooms.replaceAll(",]","]").replaceAll("   ",""),
    // settings: document.querySelector("#aukko_settings").value,
  };

  $.ajax({
    type: "POST",
    url: "/updateproject.php",
    data: formData,
    error: function (jqxhr, status, exception) {
      alert('Tietokantavirhe, soita numeroon +358449782028');
    }
  }).done(function (data) {
    // alert('Seinä ' + current_room + ' tallennettu');
    console.log("saved Data: " + data);
  });


  p_room = document.querySelectorAll(".project__building_room.active.problemo");
  gp_room = document.querySelectorAll(".project__building_room.active.grande_problemo");

  for (let a = 0; a < p_room.length; a++) {
    comment__create_new(document.querySelector('.commentbox__newfirst'),p_room[a]);
  }
  for (let a = 0; a < gp_room.length; a++) {
    comment__create_new(document.querySelector('.commentbox__newfirst'),gp_room[a]);
  }
}

function building__action(evt) {
  console.log(evt);

  
  console.log(evt);
  console.log("building__action");
  $( ".project__building_room.active").each(function( index ) {
    $( this ).attr("data-aroom", $( this ).attr("data-aroom").replaceAll($( this ).attr("data-aroom").split("~")[1],evt))
    $( this ).attr("data-broom", $( this ).attr("data-broom").replaceAll($( this ).attr("data-broom").split("~")[1],evt))
    $( this ).attr("data-croom", $( this ).attr("data-croom").replaceAll($( this ).attr("data-croom").split("~")[1],evt))
    $( this ).attr("data-droom", $( this ).attr("data-droom").replaceAll($( this ).attr("data-droom").split("~")[1],evt))
    $( this ).attr("data-kroom", $( this ).attr("data-kroom").replaceAll($( this ).attr("data-kroom").split("~")[1],evt))
    $( this ).attr("data-lroom", $( this ).attr("data-lroom").replaceAll($( this ).attr("data-lroom").split("~")[1],evt))
  });
  $('.project__building_room.active').removeClass('<divclass=project__building_room-overlay></div>')
  $('.project__building_room.active').removeClass('prob')
  $('.project__building_room.active').removeClass('problem')
  $('.project__building_room.active').removeClass('problemo')
  $('.project__building_room.active').removeClass('grande_problemo')
  $('.project__building_room.active').removeClass('no_progress')
  $('.project__building_room.active').removeClass('undone')
  
  $('.project__building_room.active').removeClass('l5_a')
  $('.project__building_room.active').removeClass('l5_b')
  $('.project__building_room.active').removeClass('l5_c')
  $('.project__building_room.active').removeClass('l5_d')
  
  $('.project__building_room.active').removeClass('l4_a')
  $('.project__building_room.active').removeClass('l4_b')
  $('.project__building_room.active').removeClass('l4_c')
  $('.project__building_room.active').removeClass('l4_d')

  $('.project__building_room.active').removeClass('l3_a')
  $('.project__building_room.active').removeClass('l3_b')
  $('.project__building_room.active').removeClass('l3_c')
  $('.project__building_room.active').removeClass('l3_d')

  $('.project__building_room.active').removeClass('l2_a')
  $('.project__building_room.active').removeClass('l2_b')
  $('.project__building_room.active').removeClass('l2_c')
  $('.project__building_room.active').removeClass('l2_d')

  $('.project__building_room.active').removeClass('l1_a')
  $('.project__building_room.active').removeClass('l1_b')
  $('.project__building_room.active').removeClass('l1_c')
  $('.project__building_room.active').removeClass('l1_d')
  
  $('.project__building_room.active').addClass(evt)

  // $('.project__building').removeClass('active')
  // $('.popup__statuses').removeClass('active')
  // $('.project__building_room').removeClass('active')
  
  // $('.project__building_room-overlay').remove()
  // window.removeEventListener("click", defaultClick, true)
}


function open__workelab() {
  document.querySelector(".elab__statuses").classList.toggle("active");
}

function toggle__pusers(elem) {
  p_li = document.querySelectorAll(".p_li");

  for (let o = 0; o < p_li.length; o++) {
    p_li[o].classList.remove("active_user");
  }

  elem.classList.add("active_user");
  active__user = elem.innerText;

  

  s_options = document.querySelectorAll(".status__report_from > option");
  for (let i = 0; i < s_options.length; i++) {
    if(s_options[i].value.toLowerCase() === active__user.toLowerCase()) {
      s_options[i].selected = true;
    }    
  }
  s_options = document.querySelectorAll(".kommentti_comment_from");
  for (let i = 0; i < s_options.length; i++) {
    s_options[i].value = active__user;
  }
}

function enable__elabelems() {
  document.querySelector(`.t_elabstatus`).classList.remove(`elab__status_hidden`);
  document.querySelector(`.t_elabday`).classList.remove(`elab__status_hidden`);
  document.querySelector(`.status__elab_noproblem`).classList.remove(`elab__status_hidden`);
}

function zero_controls(e) {
  if(e.value.length > 1) {
   zerocontrols = document.querySelectorAll(".zero_popup .hidden");
    for (let i = 0; i < zerocontrols.length; i++) {
      zerocontrols[i].classList.remove("hidden"); 
    } 
  }
  else {
    zerocontrols = document.querySelectorAll(".zero_popup .modal_close_btn");
    for (let i = 0; i < zerocontrols.length; i++) {
      zerocontrols[i].classList.add("hidden"); 
    } 
  }
}

function zero_controls_close() {
  document.querySelector('.zero_popup').classList.add('out');
  document.querySelector('.zero_popup').classList.remove('two');

  mainsite = window.location.host;
  prid = document.querySelector("#current_project_id").value;

  if(document.querySelector("#usr__selection").value.charAt(0) == " ") {
    selected_user = document.querySelector("#usr__selection").value.replace(" ","");
  }
  else {
    selected_user = document.querySelector("#usr__selection").value;
  }
  window.location.replace("http://"+mainsite+"/post.php?id="+prid+"&user="+selected_user);
}


function add_new_lvlproject(elem) {
  gp = elem.parentElement.parentElement.parentElement;

  table = gp.querySelector(".tablepreviewz tbody");
  len = gp.querySelectorAll("tr").length;
  var tr = document.createElement('tr');
  tr.dataset.no = parseFloat(gp.querySelectorAll("tr")[0].dataset.no) +1;

  if(len > 50) {
      alert("Kerrosten maksimimäärä saavutettu");
      return
  }
  for (let i = 1; i < 31; i++) {
      if(i == 1) {
          num = tr.dataset.no;
          var td = document.createElement('td');
          var td_input = document.createElement('input');
          td_input.setAttribute("name","room_name");
          td_input.setAttribute("type","checkbox");

          var td_label = document.createElement('label');
          td_label.innerHTML=num;
          // td.append(td_input);
          td.append(td_label);
          

          td.classList.add("noindex");
          tr.append(td);
      }
      else {
          var td = document.createElement('td');
          var td_input = document.createElement('input');
          td_input.setAttribute("name","room_name");
          td_input.setAttribute("type","checkbox");

          var td_label = document.createElement('label');
          td.append(td_input);
          td.append(td_label);
          

          tr.append(td);
      }
      
      
  }
  table.prepend(tr);

}



function change__stsplit(e) {
  allimps = document.querySelectorAll(".colormeaningsimps input");
  c_meanings = document.querySelectorAll(".c_meaning");
  _value = "";
  for (let a = 0; a < allimps.length; a++) {
    _value += allimps[a].value + "~~";
  }

  for (let b = 0; b < c_meanings.length; b++) {
    if(e.dataset.action == c_meanings[b].dataset.action) {
      if(c_meanings[b].querySelector("i")) {
        c_meanings[b].querySelector("i").innerHTML = e.value;
      }
    }
  }

  _id = parseFloat(document.querySelector("#current_project_id").value);
  _meta = 'statuses__text';

  formData = {
    pr_id: _id,
    meta: _meta,
    value: _value
  };
  


  $.ajax({
    type: "POST",
    url: "/vendor/updatemeta.php",
    data: formData,
    error: function (jqxhr, status, exception) {
      alert('Tietokantavirhe, soita numeroon +358449782028');
    }
  }).done(function (data) {
    console.log("saved Data: " + data);
  });
}



function next_rabbu() {
  if(current_user.toLowerCase() == 'tyonjohto' || current_role.toLowerCase() == 'mittaus') {
    allrappus = document.querySelectorAll(".coderdy");

    for (let a = 0; a < allrappus.length; a++) {
      if(allrappus[a].offsetHeight < 2) {
        allrappus[a].style.display = 'block';
        break
      }
    }
  }
}