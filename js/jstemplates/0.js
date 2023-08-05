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
      project_id: document.querySelector("#currect_project_id").value,
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
      project_id: document.querySelector("#currect_project_id").value,
      arak: currect_arak,
      wall: mode_room,
      name: ir_value
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
        project_id: document.querySelector("#currect_project_id").value,
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
        project_id: document.querySelector("#currect_project_id").value,
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
  document.querySelector("#house > div:nth-child(1) > div").style.height = num / 10 + "px";
  document.querySelector("#house > div:nth-child(3) > div").style.height = num / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.height = num / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.height = num / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.height = num / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.height = num / 10 + "px";
}

function changeWidths(num) {
  const allWidths = document.querySelectorAll('.wall_width');
  allWidths.forEach(function(item) {
    item.value = num;
  });
  document.querySelector("#house > div:nth-child(1) > div").style.width = num / 10 + "px";
  document.querySelector("#house > div:nth-child(3) > div").style.width = num / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = num / 10 + "px";
  // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num/10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = num / 10 + "px";
  // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num/10 + "px";
}

function changeWidths_2(num) {
  const allWidths = document.querySelectorAll('.wall_width_2');
  allWidths.forEach(function(item) {
    item.value = num;
  });
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num / 10 + "px";
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
  document.querySelector("#house > div:nth-child(1) > div").style.width = roof_width / 10 + "px";
  document.querySelector("#house > div:nth-child(1) > div").style.height = roof_height / 10 + "px";
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
  document.querySelector("#house > div:nth-child(3) > div").style.width = floor_width / 10 + "px";
  document.querySelector("#house > div:nth-child(3) > div").style.height = floor_height / 10 + "px";
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
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = a_width / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.height = a_height / 10 + "px";
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
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = b_width / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.height = b_height / 10 + "px";
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
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = c_width / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.height = c_height / 10 + "px";
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
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = d_width / 10 + "px";
  document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.height = d_height / 10 + "px";
}


$('.project__building div.project__building_room').click(function() {
  $("#project_start").slideUp(200);
  refresh__drawcontrols();
 
  apartment_ = $(this);
 
  $('#step_drawscreen').val('rooms');

  k_saved_input = apartment_.data('kroom');
  a_saved_input = apartment_.data('aroom');
  b_saved_input = apartment_.data('broom');
  c_saved_input = apartment_.data('croom');
  d_saved_input = apartment_.data('droom');
  l_saved_input = apartment_.data('lroom');

  k_wall = document.querySelectorAll(".house__wall_status_k");
  for (var w = 0; w < k_wall.length; w++) {
    k_wall[w].classList.add(k_saved_input.split(",")[1]);
  }


  a_wall = document.querySelectorAll(".house__wall_status_a");
  for (var w = 0; w < a_wall.length; w++) {
    a_wall[w].classList.add(a_saved_input.split(",")[1]);
  }

  b_wall = document.querySelectorAll(".house__wall_status_b");
  for (var w = 0; w < b_wall.length; w++) {
    b_wall[w].classList.add(b_saved_input.split(",")[1]);
  }

  c_wall = document.querySelectorAll(".house__wall_status_c");
  for (var w = 0; w < c_wall.length; w++) {
    c_wall[w].classList.add(c_saved_input.split(",")[1]);
  }
  
  d_wall = document.querySelectorAll(".house__wall_status_d");
  for (var w = 0; w < d_wall.length; w++) {
    d_wall[w].classList.add(d_saved_input.split(",")[1]);
  }

  l_wall = document.querySelectorAll(".house__wall_status_l");
  for (var w = 0; w < l_wall.length; w++) {
    l_wall[w].classList.add(l_saved_input.split(",")[1]);
  }
  initalize_cross(apartment_.text());

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
  $("#roomname").val("Tila " + $(this).text());

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
  

  

});


$('#rooms div.house__wall_status').click(function() {
  $("#rooms").slideUp(200);
  $("#drawscreen_section_zero").show();
  $("#drawscreen_section_zero").slideDown(200);
  var tilaname = $("#roomname").val();
  $("#zero_tila").text(tilaname);
  var text = $(this).text();
  $("#zero_huone").text(text);
  $(this).removeClass("undone");
  $(this).addClass("tomeasure");
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

  walls_content=document.querySelector(".house__wall_status_l").innerText + ","+document.querySelector(".house__wall_status_a").innerText + ","+document.querySelector(".house__wall_status_b").innerText + ","+document.querySelector(".house__wall_status_c").innerText + ","+document.querySelector(".house__wall_status_d").innerText + ","+document.querySelector(".house__wall_status_k").innerText;
  document.querySelector(".walls_content").value = walls_content;

  initalize_cross();

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

  a_saved = apartment.dataset.aroom;
  b_saved = apartment.dataset.broom;
  c_saved = apartment.dataset.croom;
  d_saved = apartment.dataset.droom;
  k_saved = apartment.dataset.kroom;
  l_saved = apartment.dataset.lroom;

  console.log(a_saved);
  console.log(b_saved);
  console.log(c_saved);
  console.log(d_saved);
  console.log(k_saved);
  console.log(l_saved);

  console.log('initalize_cross fired');
  //document.querySelector('#step_drawscreen').value='rooms';

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

    a_wall = document.querySelector("#house div.house__wall.house__wall_one");
    b_wall = document.querySelector("#house div.house__wall.house__wall_two");
    c_wall = document.querySelector("#house div.house__wall.house__wall_three");
    d_wall = document.querySelector("#house div.house__wall.house__wall_four");
    k_wall = document.querySelector("#house div.house__wall.house__wall_roof");
    l_wall = document.querySelector("#house div.house__wall.house__wall_floor");

    if(a_saved.length>10) {
      a_wall.querySelector(".wall_height").value = parseFloat(a_saved.split(",")[3].split("|")[0]);
      a_wall.querySelector(".wall_width").value = parseFloat(a_saved.split(",")[3].split("|")[1]);

      a_wall.querySelector(".house__wall_status").classList.remove('undone');
      a_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      a_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      a_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      a_wall.querySelector(".house__wall_status").classList.remove('measured');
      a_wall.querySelector(".house__wall_status").classList.remove('done');
      a_wall.querySelector(".house__wall_status").classList.remove('prob');
      a_wall.querySelector(".house__wall_status").classList.remove('problem');

      a_wall.querySelector(".house__wall_status").classList.add(a_saved.split(",")[1]);

      a_wall.style.height = parseFloat(a_wall.querySelector(".wall_height").value) / 10 + "px";
      a_wall.style.width = parseFloat(a_wall.querySelector(".wall_width").value) / 10 + "px";
    }
    else {
      a_wall.querySelector(".wall_height").value = 3200;
      a_wall.querySelector(".wall_width").value = 6000;

      a_wall.style.height = parseFloat(a_wall.querySelector(".wall_height").value) / 10 + "px";
      a_wall.style.width = parseFloat(a_wall.querySelector(".wall_width").value) / 10 + "px";
    }

    if(b_saved.length>10) {
      b_wall.querySelector(".wall_height").value = parseFloat(b_saved.split(",")[3].split("|")[0]);
      b_wall.querySelector(".wall_width_2").value = parseFloat(b_saved.split(",")[3].split("|")[1]);

      b_wall.querySelector(".house__wall_status").classList.remove('undone');
      b_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      b_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      b_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      b_wall.querySelector(".house__wall_status").classList.remove('measured');
      b_wall.querySelector(".house__wall_status").classList.remove('done');
      b_wall.querySelector(".house__wall_status").classList.remove('prob');
      b_wall.querySelector(".house__wall_status").classList.remove('problem');

      b_wall.querySelector(".house__wall_status").classList.add(b_saved.split(",")[1]);

      b_wall.style.height = parseFloat(b_wall.querySelector(".wall_height").value) / 10 + "px";
      b_wall.style.width = parseFloat(b_wall.querySelector(".wall_width_2").value) / 10 + "px";
    }
    else {
      b_wall.querySelector(".wall_height").value = 3200;
      b_wall.querySelector(".wall_width_2").value = 6000;

      b_wall.style.height = parseFloat(b_wall.querySelector(".wall_height").value) / 10 + "px";
      b_wall.style.width = parseFloat(b_wall.querySelector(".wall_width_2").value) / 10 + "px";
    }

    if(c_saved.length>10) {
      c_wall.querySelector(".wall_height").value = parseFloat(c_saved.split(",")[3].split("|")[0]);
      c_wall.querySelector(".wall_width").value = parseFloat(c_saved.split(",")[3].split("|")[1]);

      c_wall.querySelector(".house__wall_status").classList.remove('undone');
      c_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      c_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      c_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      c_wall.querySelector(".house__wall_status").classList.remove('measured');
      c_wall.querySelector(".house__wall_status").classList.remove('done');
      c_wall.querySelector(".house__wall_status").classList.remove('prob');
      c_wall.querySelector(".house__wall_status").classList.remove('problem');

      c_wall.querySelector(".house__wall_status").classList.add(c_saved.split(",")[1]);

      c_wall.style.height = parseFloat(c_wall.querySelector(".wall_height").value) / 10 + "px";
      c_wall.style.width = parseFloat(c_wall.querySelector(".wall_width").value) / 10 + "px";
    }
    else {
      c_wall.querySelector(".wall_height").value = 3200;
      c_wall.querySelector(".wall_width").value = 6000;

      c_wall.style.height = parseFloat(c_wall.querySelector(".wall_height").value) / 10 + "px";
      c_wall.style.width = parseFloat(c_wall.querySelector(".wall_width").value) / 10 + "px";
    }
    if(d_saved.length>10) {
      d_wall.querySelector(".wall_height").value = parseFloat(d_saved.split(",")[3].split("|")[0]);
      d_wall.querySelector(".wall_width_2").value = parseFloat(d_saved.split(",")[3].split("|")[1]);

      d_wall.querySelector(".house__wall_status").classList.remove('undone');
      d_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      d_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      d_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      d_wall.querySelector(".house__wall_status").classList.remove('measured');
      d_wall.querySelector(".house__wall_status").classList.remove('done');
      d_wall.querySelector(".house__wall_status").classList.remove('prob');
      d_wall.querySelector(".house__wall_status").classList.remove('problem');

      d_wall.querySelector(".house__wall_status").classList.add(d_saved.split(",")[1]);

      d_wall.style.height = parseFloat(d_wall.querySelector(".wall_height").value) / 10 + "px";
      d_wall.style.width = parseFloat(d_wall.querySelector(".wall_width_2").value) / 10 + "px";

      k_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 10 + "px";
      l_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 10 + "px";
    }
    else {
      d_wall.querySelector(".wall_height").value = 3200;
      d_wall.querySelector(".wall_width_2").value = 6000;
      d_wall.style.height = parseFloat(d_wall.querySelector(".wall_height").value) / 10 + "px";
      d_wall.style.width = parseFloat(d_wall.querySelector(".wall_width_2").value) / 10 + "px";
    }
    if(k_saved.length>10) {
      k_wall.querySelector(".wall_height").value = parseFloat(k_saved.split(",")[3].split("|")[0]);
      k_wall.querySelector(".wall_width").value = parseFloat(k_saved.split(",")[3].split("|")[1]);

      k_wall.querySelector(".house__wall_status").classList.remove('undone');
      k_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      k_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      k_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      k_wall.querySelector(".house__wall_status").classList.remove('measured');
      k_wall.querySelector(".house__wall_status").classList.remove('done');
      k_wall.querySelector(".house__wall_status").classList.remove('prob');
      k_wall.querySelector(".house__wall_status").classList.remove('problem');

      k_wall.querySelector(".house__wall_status").classList.add(k_saved.split(",")[1]);

      k_wall.style.height = parseFloat(k_wall.querySelector(".wall_height").value) / 10 + "px";
      k_wall.style.width = parseFloat(k_wall.querySelector(".wall_width").value) / 10 + "px";
    }
    else {
      k_wall.querySelector(".wall_height").value = 3200;
      k_wall.querySelector(".wall_width").value = 6000;

      k_wall.style.height = parseFloat(k_wall.querySelector(".wall_height").value) / 10 + "px";
      k_wall.style.width = parseFloat(k_wall.querySelector(".wall_width").value) / 10 + "px";
    }
    if(l_saved.length>10) {
      l_wall.querySelector(".wall_height").value = parseFloat(l_saved.split(",")[3].split("|")[0]);
      l_wall.querySelector(".wall_width").value = parseFloat(l_saved.split(",")[3].split("|")[1]);


      l_wall.querySelector(".house__wall_status").classList.remove('undone');
      l_wall.querySelector(".house__wall_status").classList.remove('tomeasure');
      l_wall.querySelector(".house__wall_status").classList.remove('rangatok');
      l_wall.querySelector(".house__wall_status").classList.remove('saumatok');

      l_wall.querySelector(".house__wall_status").classList.remove('measured');
      l_wall.querySelector(".house__wall_status").classList.remove('done');
      l_wall.querySelector(".house__wall_status").classList.remove('prob');
      l_wall.querySelector(".house__wall_status").classList.remove('problem');

      l_wall.querySelector(".house__wall_status").classList.add(l_saved.split(",")[1]);

      l_wall.style.height = parseFloat(l_wall.querySelector(".wall_height").value) / 10 + "px";
      l_wall.style.width = parseFloat(l_wall.querySelector(".wall_width").value) / 10 + "px";
    }
    else {
      l_wall.querySelector(".wall_height").value = 3200;
      l_wall.querySelector(".wall_width").value = 6000;

      l_wall.style.height = parseFloat(l_wall.querySelector(".wall_height").value) / 10 + "px";
      l_wall.style.width = parseFloat(l_wall.querySelector(".wall_width").value) / 10 + "px";
    }

    console.log("currect_arak:", currect_arak);

    $.ajax({
      url: "/get-walls.php",
      type: "post",
      data: {
        project_id: document.querySelector("#currect_project_id").value,
        arak: currect_arak
      },
      success: (answer) => {
        let walls = JSON.parse(answer);
        console.log("walls:", walls);

        walls.forEach((wall) => {
          //  	id 	project_id 	arak 	wall 	asjarj 	name 	description 	hidden 	

          let i = wall[3].toLowerCase();
          j = i == 'k' ? 'roof' : i == 'l' ? 'floor' : i;

          document.querySelector(`#wall_order_${j}`).value = wall[4] && wall[4] > 0 ? parseInt(wall[4]) : wallAToNum(i);
          document.querySelector(`#wall_one_${j}`).value = wall[5] ? wall[5] : "SEINÄ " + i.toUpperCase(); console.log(document.querySelector(`#wall_one_${j}`).value);
          document.querySelector(`#wall_desc_${j}`).value = wall[6] ? wall[6] : "" ;

          wall[7] ? document.querySelector(`.house__wall_${j}`).classList.remove("hidden")
          : document.querySelector(`.house__wall_${j}`).classList.add("hidden") ;
        }); 
      }
    });
  }, 500);

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

  a_wall = document.querySelector("#house div.house__wall.house__wall_one");
  b_wall = document.querySelector("#house div.house__wall.house__wall_two");
  c_wall = document.querySelector("#house div.house__wall.house__wall_three");
  d_wall = document.querySelector("#house div.house__wall.house__wall_four");
  k_wall = document.querySelector("#house div.house__wall.house__wall_roof");
  l_wall = document.querySelector("#house div.house__wall.house__wall_floor");


  a_wall.style.height = parseFloat(a_wall.querySelector(".wall_height").value) / 10 + "px";
  a_wall.style.width = parseFloat(a_wall.querySelector(".wall_width").value) / 10 + "px";

  b_wall.style.height = parseFloat(b_wall.querySelector(".wall_height").value) / 10 + "px";
  b_wall.style.width = parseFloat(b_wall.querySelector(".wall_width_2").value) / 10 + "px";

  c_wall.style.height = parseFloat(c_wall.querySelector(".wall_height").value) / 10 + "px";
  c_wall.style.width = parseFloat(c_wall.querySelector(".wall_width").value) / 10 + "px";

  d_wall.style.height = parseFloat(d_wall.querySelector(".wall_height").value) / 10 + "px";
  d_wall.style.width = parseFloat(d_wall.querySelector(".wall_width_2").value) / 10 + "px";

  k_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 10 + "px";
  l_wall.style.right = parseFloat(d_wall.querySelector(".wall_width_2").value) / 10 + "px";

  k_wall.style.width = parseFloat(k_wall.querySelector(".wall_width").value) / 10 + "px";
  k_wall.style.height = parseFloat(k_wall.querySelector(".wall_height").value) / 10 + "px";

  l_wall.style.height = parseFloat(l_wall.querySelector(".wall_height").value) / 10 + "px";
  l_wall.style.width = parseFloat(l_wall.querySelector(".wall_width").value) / 10 + "px";
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
  // location.href = url;
  modified_url = JSON.stringify(url).replaceAll('"',"").replaceAll("'","").replaceAll("http://localhost/","").replaceAll("%22","").replaceAll("https://teditori.gromi.fi/","").replaceAll("http://teditori.gromi.fi/","");
  window.history.pushState({ path: modified_url }, '', modified_url);
}