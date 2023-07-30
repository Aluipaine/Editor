kommentti_count = 0;
// Создание отверстия
function comment__create(mode, type, mode_name, mode_ycord, mode_xcord, mode_hcord, mode_wcord, mode_count, mode_id, mode_specifications, ir_mitta_comment, ir_mitta_cfrom, ir_mitta_cto) {
  const newDiv = document.createElement("span");
  const newDiv__comment = document.createElement("span");
  const newDiv__hidden_attention = document.createElement("input");
  const newDiv__hidden_attentioncommmets = document.createElement("input");
  let id = "com" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase();

  comment__container = document.createElement("div");
  comment__text = document.createElement("p");
  comment__from = document.createElement("strong");
  comment__to = document.createElement("strong");
  comment__container.classList.add("comment__container");
  comment__from.classList.add("comment__from");
  comment__to.classList.add("comment__to");
  newDiv.appendChild(comment__container);

  comment__container.appendChild(comment__text);
  comment__container.appendChild(comment__from);
  comment__container.appendChild(comment__to);
  newDiv.appendChild(newDiv__hidden_attention);
  newDiv.appendChild(newDiv__hidden_attentioncommmets);
  newDiv__comment_settings = document.createElement("i");
  newDiv__comment_del = document.createElement("i");
  newDiv__comment_settings.innerHTML =
    "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
  newDiv__comment_del.innerHTML =
    "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";
  newDiv__comment_settings.classList.add("m_btn");
  newDiv__comment_settings.classList.add("newDiv__comment_settings");
  newDiv__comment_del.classList.add("newDiv__comment_del");

  newDiv.dataset.commentname = document.querySelector("#kommentti__name").value;
  newDiv.dataset.files = document.querySelector("#comment__preview_files").innerHTML;
  newDiv.dataset.from = document.querySelector("#kommentti_comment_from").value;
  newDiv.dataset.to = document.querySelector("#kommentti_comment_to").value;
  newDiv.dataset.priority = document.querySelector("#comment__priority").value;
  newDiv.dataset.deadline = document.querySelector('#comment__deadline').value;
  newDiv.dataset.aihe = document.querySelector('input[name="mitta__huomiot"]:checked').value;
  newDiv.dataset.content = document.querySelector("#kommentti_comment").value.replaceAll("/(?:\r\n|\r|\n)/g", ", ");

  document.querySelector("#box-wrapper > main").prepend(newDiv);
  newDiv__comment_del.setAttribute("name", id);
  newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');delete_comment(obj);");
  newDiv__comment_settings.setAttribute("onclick", "open_comment('" + id + "','" + newDiv.dataset.commentname + "','" + newDiv.dataset.files + "','" + newDiv.dataset.from + "','" + newDiv.dataset.to + "','" + newDiv.dataset.priority + "','" + newDiv.dataset.deadline + "','" + newDiv.dataset.content.replaceAll("/(?:\r\n|\r|\n)/g", ", ") + "','" + id + "');");



  input_step = document.querySelector('#step_drawscreen').value;
  kommentti_count += 1;
  newDiv__comment.innerHTML = document.querySelector("#kommentti__name").value + "#" + kommentti_count;
  newDiv__hidden_attention.type = "hidden";
  newDiv__hidden_attention.name = "attentions";
  newDiv__hidden_attentioncommmets.type = "hidden";
  newDiv__hidden_attentioncommmets.name = "commmets";
  document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__comment);
  document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attention);
  document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attentioncommmets);


  newDiv.style.left = eval(document.querySelector("#cord_left").value) / 5 + "px";

  newDiv.style.bottom = eval(document.querySelector("#cord_up").value) / 5 + "px";


  if (document.querySelector("#cord_up").value == "") {
    newDiv.style.bottom = 0;
  }

  if (document.querySelector("#kommentti_comment").value != '') {
    newDiv__hidden_attentioncommmets.value += document.querySelector("#kommentti_comment").value + '<br> Tältä: ' + document.querySelector(
      "#kommentti_comment_from").value + '<br> Tälle: ' + document.querySelector("#kommentti_comment_to").value;
    comment__text.innerHTML = document.querySelector("#kommentti_comment").value;
    comment__from.innerHTML = document.querySelector("#kommentti_comment_from").value;
    comment__to.innerHTML = document.querySelector("#kommentti_comment_to").value;
  }
  newDiv.setAttribute("onclick", "this.classList.toggle('comment__visible')");
  newDiv.classList.add("com");
  newDiv.dataset.no = kommentti_count;



  newDiv__comment_settings.setAttribute("name", id);
  newDiv__comment_del.setAttribute("name", id);
  newDiv__comment.setAttribute("name", id);
  newDiv.setAttribute("id", id);
  newDiv__comment.appendChild(newDiv__comment_settings);
  newDiv__comment.appendChild(newDiv__comment_del);
  // const inH = document.createElement('input');
  // const inW = document.createElement('input');
  // inH.setAttribute('type', 'num');
  // inW.setAttribute('type', 'num');
  // touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );
  if (newDiv.dataset.from !== document.querySelector("#current_user").value) {
    newDiv__comment_del.style.display = "none";
  }
  project_id = document.querySelector("#rooms > input.id").value;
  _attachments = document.querySelector("#comment__preview_files").innerText;
  _urgency = document.querySelector("#comment__priority").value;
  _ending_time = '';
  _deadline = document.querySelector("#comment__deadline").value;
  room_id = document.querySelector(".kommentti_nappula").getAttribute("id");
  x_y = parseFloat(document.querySelector("#cord_left").value) + "|" + parseFloat(document.querySelector("#cord_up").value);
  _name = newDiv.dataset.commentname;
  _aihe = newDiv.dataset.aihe;
  _answer_to = document.querySelector("#comment__answer_to").value;
  setTimeout(function () {
    formData = {
      comment_id: id,
      project_id: project_id,
      room: room_id + ">" + mode_room,
      name: _name,
      x_y: x_y,
      content: document.querySelector("#kommentti_comment").value,
      attachments: _attachments,
      comment_from: document.querySelector("#kommentti_comment_from").value,
      comment_to: document.querySelector("#kommentti_comment_to").value,
      urgency: _urgency,
      ending_time: _ending_time,
      deadline: _deadline,
      aihe: _aihe,
      answer_to: _answer_to
    };

    $.ajax({
      type: "POST",
      url: "/addcomment.php",
      data: formData,
      error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
        console.log(formData);
      }
    }).done(function (data) {
      // alert('Seinä ' + current_room + ' tallennettu');
      // console.log("saved Data: " + data);
    });
  }, 500);
}
function change__newdiv_cord_comment() {
  const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
  const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
  const drawscreen_section_three = document.querySelector('#drawscreen_section_three');
  const drawscreen_section_eight = document.querySelector('#drawscreen_section_eight');
  const input_step = document.querySelector('#step_drawscreen').value;
}

function null__comment_cord() {
  const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
  const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
  const drawscreen_section_three = document.querySelector('#drawscreen_section_three');
  const input_step = document.querySelector('#step_drawscreen').value;

  if (input_step == "drawscreen_section_one") {
    document.querySelector("#cord_up").value = "0";
    document.querySelector("#cord_left").value = "0";
  }

}

function give__comment_cord() {
  const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
  const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
  const drawscreen_section_three = document.querySelector('#drawscreen_section_three');
  input_step = document.querySelector('#step_drawscreen').value;
  if (input_step == "drawscreen_section_one") {
    getElementCoords("#cord_up", "#cord_left");
  }
  if (input_step == "drawscreen_section_two") {
    getElementCoords("#aukotcord_low", "#aukotcord_left");
  }
  if (input_step == "drawscreen_section_three") {
    getElementCoords("#lvcord_low", "#lvcord_left");
  }
}

function commentcord__check(inp) {
  console.log("Cord check inp " + parseFloat(inp.value) + " --- " + parseFloat(inp.getAttribute("max")));


  if (parseFloat(inp.value) > parseFloat(inp.dataset.maximum)) {
    inp.style.border = "3px dashed red";
    document.querySelector("#drawscreen_section_one .drawarea__controls_btn").style.display = "none";
  }
  else {
    inp.style.border = "unset";
    inp.style.borderBottom = "1px solid #000";
    document.querySelector("#drawscreen_section_one .drawarea__controls_btn").style.display = "flex";
  }
}

if (document.querySelector('#kommentti_comment_from')) {
  user = document.querySelector("#kommentti_comment_from").value;
  document.querySelector("#kommentti_comment_from").value = user;
}

function delete_comment(id) {
  cur_mp = document.querySelector('#' + id);
  cur_mp.remove();
  names = document.getElementsByName(id);
  for (var i = 0; i < names.length; i++) {
    names[i].remove();
  }
}



function open_comment(id, name, tiedostot, from, to, priority, deadline, aihe, content, comment_id) {
  document.querySelector("#comment__answer_to").value = id;
  document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');
  document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');
  document.querySelector('body').classList.add('modal-active');
  document.querySelector('body').classList.add('commentmodal_active');
  document.querySelector('.commentbox__name').innerHTML = name;
  document.querySelector('.kuittaus_nappula').setAttribute("name", comment_id);
  document.querySelector('.commentbox__tiedostot').innerHTML = tiedostot;
  document.querySelector('.commentbox__from').innerHTML = from; //OK
  document.querySelector('.commentbox__to').innerHTML = to; //OK
  document.querySelector('.commentbox__priority').innerHTML = priority; //OK
  document.querySelector('.commentbox__deadline').innerHTML = deadline; //OK
  document.querySelector('.commentbox__aihe').innerHTML = aihe; //OK
  document.querySelector('.commentbox__content').innerHTML = content; //OK

  $.ajax({
    url: "/getanswers.php",
    type: "post",
    data: {
      answer_to: id,
      user: document.querySelector("#current_user").value
    },
    success: (answers) => {
      console.log("JGHIJSFJKSDJF: ", answers);
      let answersDiv = document.querySelector("#commentbox__answers");
      answersDiv.innerHTML = "<h6>Vastaukset:</h6>";

      answers.split("~").forEach((answer) => {
        let grand_array = answer.split(",");

        if(grand_array.length < 13) {
          return; // continue
        }

        let answer_name = grand_array[3];
        let answer_files = grand_array[6].replaceAll("/(?:\r\n|\r|\n)/g", ", ").replaceAll("\n", " ");
        let answer_from = grand_array[7];
        let answer_to = grand_array[8];
        let answer_priority = grand_array[9];
        let answer_aihe = grand_array[12];
        let answer_deadline = grand_array[13];
        let answer_content = grand_array[5].replaceAll("/(?:\r\n|\r|\n)/g", "  ");
        
        // Sorry for that, I don't know how to use DOM and I have a burning deadline.
        // P.S. Your code is good and understandable, respect for this.
        answersDiv.innerHTML += `
        <section class="commentbox">
          <h2 class="commentbox__name">${answer_name}</h2>
          <div class="row">
              <div class="col-3">
                <h4>Tiedostot:</h4>
                <span class="commentbox__tiedostot">${answer_files}</span>
              </div>
              <div class="col-3">
                  <h4>Keneltä:</h4>
                  <span class="commentbox__from">${answer_from}</span>
              </div>
              <div class="col-3">
                  <h4>Kenelle:</h4>
                  <span class="commentbox__to">${answer_to}</span>
              </div>
              <div class="col-3">
                  <h4>Prioriteetti:</h4>
                  <span class="commentbox__priority">${answer_priority}</span>
              </div>
              <div class="col-3">
                  <h4>Aihe:</h4>
                  <span class="commentbox__aihe">${answer_aihe}</span>
              </div>
              <div class="col-3">
                  <h4>Takaraja:</h4>
                  <span class="commentbox__deadline">${answer_deadline}</span>
              </div>
          </div>
          <div class="commentbox__text">
              <h4>Sisältö:</h4>
              <p class="commentbox__content">${answer_content}</p>
          </div>
          <div class="row center">
              <div class="col-6"><div class="modal_close_btn drawarea__controls_btn sulkemis_nappula">Sulje</div></div>
              <div class="col-6"><div class="modal_close_btn drawarea__controls_btn kuittaus_nappula" onclick="comment__kuittaus(this.getAttribute('name'));addproblemstatus(this);">Kuittaan tehdyksi</div></div>
          </div>
        </section>`
      });
    }
  });
}

function comment__kuittaus(comment_id) {

  setTimeout(function () {
    formData = {
      comment_id: comment_id,
      ending_time: ""
    };

    $.ajax({
      type: "POST",
      url: "/comment__kuittaus.php",
      data: formData,
      error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
      }
    }).done(function (data) {
      alert("Kommentti Kuitattu");
      location.reload();

    });
  }, 500);


}

function initializeroom_comments(room, menu) {
  ir_no = room.dataset.room;


  mode_room = ir_no.toLowerCase();
  $('#step_drawscreen').val('drawscreen_section_one');
  if (mode_room == 'a') {
    ir_value = apartment.dataset.aroom;
  }
  if (mode_room == 'b') {
    ir_value = apartment.dataset.broom;
  }
  if (mode_room == 'c') {
    ir_value = apartment.dataset.croom;
  }
  if (mode_room == 'd') {
    ir_value = apartment.dataset.droom;
  }
  if (mode_room == 'k') {
    ir_value = apartment.dataset.kroom;
  }
  if (mode_room == 'l') {
    ir_value = apartment.dataset.lroom;
  }

  room_status = ir_value.split(",")[1];
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
  coms = canvas.querySelectorAll(".com");

  for (var i = 0; i < coms.length; i++) {
    coms[i].remove();
  }

  // STOP CLEARING
  if (ir_value.length > 5) {
    kommentti_count = 0;
    ir_coms = document.querySelector("#open_comments").value.split("~");

    //GOMMENTIT

    for (var i = 0; i < ir_coms.length; i++) {
      if (ir_coms[i].length > 4) {
        name_splitted = ir_coms[i].split(",")[2].split(">")[1];
        if (ir_coms[i].length > 5 && name_splitted == mode_room) {
          grande_array = ir_coms[i]
          comment__restore(grande_array);
        }
      }
    }
  }

  ir_no = room.dataset.room;
  mode_room = ir_no.toLowerCase();

  if (mode_room == 'a') {
    ir_value = apartment.dataset.aroom;
  }
  if (mode_room == 'b') {
    ir_value = apartment.dataset.broom;
  }
  if (mode_room == 'c') {
    ir_value = apartment.dataset.croom;
  }
  if (mode_room == 'd') {
    ir_value = apartment.dataset.droom;
  }
  if (mode_room == 'k') {
    ir_value = apartment.dataset.kroom;
  }
  if (mode_room == 'l') {
    ir_value = apartment.dataset.lroom;
  }
}

function comment__restore(ga) {
  console.log("GA: " + ga);
  grand_array = ga.split(",");
  console.log("grand_array:", grand_array)
  console.log("grand_array[14]:", grand_array[14]);

  if (grand_array[14] == '') {

    const newDiv = document.createElement("span");
    const newDiv__comment = document.createElement("span");
    const newDiv__hidden_attention = document.createElement("input");
    const newDiv__hidden_attentioncommmets = document.createElement("input");
    let id = grand_array[0];

    newDiv__comment_settings = document.createElement("i");
    newDiv__comment_del = document.createElement("i");

    comment__container = document.createElement("div");
    comment__text = document.createElement("p");
    comment__from = document.createElement("strong");
    comment__to = document.createElement("strong");
    comment__container.classList.add("comment__container");
    comment__from.classList.add("comment__from");
    comment__to.classList.add("comment__to");
    newDiv.appendChild(comment__container);

    comment__container.appendChild(comment__text);
    comment__container.appendChild(comment__from);
    comment__container.appendChild(comment__to);
    newDiv.appendChild(newDiv__hidden_attention);
    newDiv.appendChild(newDiv__hidden_attentioncommmets);

    newDiv__comment_settings.innerHTML =
      "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
    newDiv__comment_del.innerHTML =
      "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";
    newDiv__comment_settings.classList.add("m_btn");
    newDiv__comment_settings.classList.add("newDiv__comment_settings");
    newDiv__comment_del.classList.add("newDiv__comment_del");

    newDiv.dataset.commentname = grand_array[3];
    newDiv.dataset.files = grand_array[6].replaceAll("/(?:\r\n|\r|\n)/g", ", ").replaceAll("\n", " ");
    newDiv.dataset.from = grand_array[7];
    newDiv.dataset.to = grand_array[8];
    newDiv.dataset.priority = grand_array[9];
    newDiv.dataset.aihe = grand_array[12];
    newDiv.dataset.deadline = grand_array[13];
    newDiv.dataset.content = grand_array[5].replaceAll("/(?:\r\n|\r|\n)/g", "  ");

    newDiv__comment_del.setAttribute("name", id);
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');delete_comment(obj);");
    newDiv__comment_settings.setAttribute("onclick", "open_comment('" + id + "','" + "','" + newDiv.dataset.commentname + "','" + newDiv.dataset.files + "','" + newDiv.dataset.from + "','" + newDiv.dataset.to + "','" + newDiv.dataset.priority + "','" + newDiv.dataset.deadline + "','" + newDiv.dataset.aihe + "','" + newDiv.dataset.content.replaceAll("/(?:\r\n|\r|\n)/g", ", ") + "','" + id + "');");

    console.log("newDiv:", newDiv)
    console.log("dataset:", newDiv.dataset);

    kommentti_count += 1;
    newDiv__comment.innerHTML = newDiv.dataset.commentname;
    newDiv__hidden_attention.type = "hidden";
    newDiv__hidden_attention.name = "attentions";
    newDiv__hidden_attentioncommmets.type = "hidden";
    newDiv__hidden_attentioncommmets.name = "commmets";



    newDiv.style.left = eval(grand_array[4].split("|")[0]) / 5 + "px";
    newDiv.style.bottom = eval(grand_array[4].split("|")[1]) / 5 + "px";


    if (grand_array[5] != '') {
      newDiv__hidden_attentioncommmets.value += grand_array[5] + '<br> Tältä: ' + grand_array[7] + '<br> Tälle: ' + grand_array[8];
      comment__text.innerHTML = grand_array[5];
      comment__from.innerHTML = grand_array[7];
      comment__to.innerHTML = grand_array[8];
    }
    newDiv.setAttribute("onclick", "this.classList.toggle('comment__visible')");
    newDiv.classList.add("com");
    newDiv.dataset.no = kommentti_count;

  

    newDiv__comment_settings.setAttribute("name", id);
    newDiv__comment_del.setAttribute("name", id);
    newDiv__comment.setAttribute("name", id);
    newDiv.setAttribute("id", id);
    newDiv__comment.appendChild(newDiv__comment_settings);
    newDiv__comment.appendChild(newDiv__comment_del);

    document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__comment);
    document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attention);
    document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attentioncommmets);


    if (newDiv.dataset.from !== document.querySelector("#current_user").value) {
      newDiv__comment_del.style.display = "none";
    }
    document.querySelector("#box-wrapper > main").prepend(newDiv);

  }

}