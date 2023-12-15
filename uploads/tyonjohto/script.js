// НАЧАЛО DROP

const todoInput = document.querySelector(".todo-input"); // Поле ввода задачи
const todoContainer = document.querySelector(".todo-box .box-body"); // Контейнер для задач
const allTodoBox = document.querySelectorAll(".box-body"); // Все контейнеры для задач

allTodoBox.forEach((box) => {
  new Sortable(box, {
    handle: ".comment_name",
    group: "shared",
    sort: false, // запрещает чортиовку внутри списка
    animation: 150,
    // Element is chosen
    onStart: function (evt) {
      evt.item.classList.add("dragging");
    },
    // Окончание перетаскивания элемента
    onEnd: function (evt) {
      var itemEl = evt.item; // перемещаемый HTMLElement
      itemEl.classList.remove("dragging");

      var data = itemEl.id;
      var dataWeek = itemEl.closest(".box-body").dataset.week;

      countdown_hours();

      if (dataWeek) {
        document.getElementById(data).querySelector(".commentbox__vko").value = dataWeek;
        change_task_vko(
          document.getElementById(data).querySelector(".commentbox__vko"),
          document.getElementById(data).querySelector(".commentbox__vko").getAttribute("name")
        );
      }
    },
  });
});

// КОНЕW DROP

// const todoInput = document.querySelector('.todo-input');         
// // const addTodoBtn = document.querySelector('.add-todo');           
// const todoContainer = document.querySelector('.todo-box .box-body');    
// const allTodoBox = document.querySelectorAll(".box-body"); 
   


// let todocartNumber = 1;          
                                
// todocards = document.querySelectorAll(".todo-card");    
// for (let i = 0; i < todocards.length; i++) {
//     const todoCard = todocards[i];
//     todoCard.addEventListener("dragstart", (e) => dragStart(e));    
//     todoCard.addEventListener("dragend", (e) => dragEnd(e));   

//     const delBtn = todoCard.querySelectorAll(".delete");       
//         delBtn.forEach((item)=>{                                    
//         item.addEventListener('click', (e) => e.target.parentElement.remove()); 
//     });
// }       


// allTodoBox.forEach(box => {                                      
//     box.addEventListener("dragover", (e) => allowDrop(e));         
//     box.addEventListener("drop", (e) => drop(e));                  
// });



// // addTodoBtn.addEventListener("click", (e) => { 
// //     e.preventDefault();                                          
// //     addTodoFunction();                                           
// // });

// function addTodoFunction() {                                     
//     let id = todocartNumber++;                                  
//     const todoCard = document.createElement("article");          
//     todoCard.classList.add("todo-card");                         

//     todoCard.innerHTML = `  
//     <h5 class="task-name">${todoInput.value}</h5>
//     <button class="fas fa-trash delete"></button>
//     `;                                                         

//     todoCard.draggable = true;                                  
//     todoCard.id = `todo${id}`;                                  
//     todoCard.addEventListener("dragstart", (e) => dragStart(e));    
//     todoCard.addEventListener("dragend", (e) => dragEnd(e));  
    
   

//     todoCard.addEventListener("touchstart", dragStart(e), true);
//     todoCard.addEventListener("touchend", dragEnd(e), true);
//     todoCard.addEventListener("touchcancel", dragEnd(e), true);
//     todoCard.addEventListener("touchleave", dragEnd(e), true);


//   // ^ Do the same for the rest of the events

//     if (todoInput.value !== "") {
//         todoContainer.appendChild(todoCard);
//     } else {
//         alert("Set Title !");                                   
//     }                                                           

//     todoInput.value = "";                                       

//     const delBtn = document.querySelectorAll(".delete");       
//         delBtn.forEach((item)=>{                                    
//         item.addEventListener('click', (e) => e.target.parentElement.remove()); 
//     });

//     console.log("ITEM ADDED")
// }


// function dragStart(event) {
//     event.target.classList.add("dragging");                     
//     event.dataTransfer.setData("Text/html", event.target.id);   
//     console.log(event.target);
//     console.log(event);
// }

// function allowDrop(event) {
//     event.preventDefault();
//     console.log(event.target);
//     console.log(event);
// }

// function drop(event) {
//     event.preventDefault();
//     console.log(event.target);
//     console.log(event);

//     const data = event.dataTransfer.getData("Text/html");       
//     // if(event.target.classList.contains("box")) {
//     event.target.appendChild(document.getElementById(data));  
//     // }

    
     
// }

// function dragEnd(event) {
//     event.target.classList.remove("dragging");                  
// }

// function dragStart(event) {
//     event.target.classList.add("dragging");                     
//     event.dataTransfer.setData("Text/html", event.target.id);   
// }

// function allowDrop(event) {
//     event.preventDefault();
// }

// function drop(event) {
//     event.preventDefault();
//     const data = event.dataTransfer.getData("Text/html");       
//      if(event.target.classList.contains("box-body")) {
//         event.target.appendChild(document.getElementById(data)); 
//         countdown_hours(); 
//         if(event.target.dataset.week) {
//             document.getElementById(data).querySelector(".commentbox__vko").value = event.target.dataset.week;
//             change_task_vko(document.getElementById(data).querySelector(".commentbox__vko"),document.getElementById(data).querySelector(".commentbox__vko").getAttribute("name"));
//         }
//         console.log(event.target);
//         event.target.scrollTop = event.target.scrollHeight;
//     }
// }

// function dragEnd(event) {
//     event.target.classList.remove("dragging");                  
// }  

function toggle__tprojects(elem,prid) {
    allprojects=document.querySelectorAll(".t_projects ul.t_projectslist > li");
    allprojecttickets=document.querySelectorAll("article");

    allprojects.forEach(project => {
        project.classList.remove("active");
    });     
    elem.classList.add("active");
    if(elem.innerText.toLowerCase() == "kaikki") {
        allprojecttickets.forEach(projectticket => {
            projectticket.classList.remove("hidden");
        });  
    }
    else {
       allprojecttickets.forEach(projectticket => {
            if(parseFloat(prid) == parseFloat(projectticket.dataset.project)) {
                projectticket.classList.remove("hidden");
            }
            else {
                projectticket.classList.add("hidden");
            }
        });  
    }

    countdown_hours();
     
}
function toggle__tusers(elem) {
    allusers=document.querySelectorAll(".t_users > ul > li");
    allusertickets=document.querySelectorAll("article");

    allusers.forEach(user => {
        user.classList.remove("active");
        
    });     
    elem.classList.add("active");
    if(elem.innerText.toLowerCase() == "kaikki") {
        allusertickets.forEach(userticket => {
            userticket.classList.remove("hidden");
        });  
    }
    else {
       allusertickets.forEach(userticket => {
            if(elem.innerText.toLowerCase() == userticket.dataset.ticket_to.toLowerCase()) {
                userticket.classList.remove("hidden");
            }
            else {
                userticket.classList.add("hidden");
            }
        });  
    }

    countdown_hours();
     
}


function change_task_vko(item,com_id_) { 
    if(item.value != null && item.value != undefined) {
        vko_ = item.value;
    } else {
        vko_ = item.dataset.week;
    }
    
    console.log("vko_ :::" + vko_);

    formData = {
        comment_id: com_id_,
        vko_arvio: parseFloat(vko_),
    };
    $.ajax({
    type: "POST",
    url: "../vendor/modifycommentvko.php",
    data: formData,
    error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
        console.log(formData);
    }
    }).done(function (data) {
        console.log(data);
        // alert('Poistettu kuittaamatta');
        // location.reload();
    });
}

function countdown_hours() {
    late_hours=document.querySelectorAll(".late-box  article");
    lateh_count=0;
    for (let i = 0; i < late_hours.length; i++) {
        if(late_hours[i].classList.contains("hidden") != true) {
            lateh_count+=parseFloat(late_hours[i].querySelector(".commentbox__hours").innerText);
        }
    }
    document.querySelector(".countdown_summarum_late").innerHTML = lateh_count;
    if(lateh_count == 0) {
        document.querySelector(".box.late-box").style.minHeight = "10rem";
        document.querySelector(".box.late-box").style.height = "10rem";
    }
    else {
        document.querySelector(".box.late-box").style.minHeight = "25rem";
        document.querySelector(".box.late-box").style.height = "25rem";
    }
    

    a_hours=document.querySelectorAll(".in-progress-box  article");
    ah_count=0;
    for (let i = 0; i < a_hours.length; i++) {
        if(a_hours[i].classList.contains("hidden") != true) {
            ah_count+=parseFloat(a_hours[i].querySelector(".commentbox__hours").innerText);
        }
    }
    document.querySelector(".countdown_summarum_a").innerHTML = ah_count;

    if(ah_count == 0) {
        document.querySelector(".box.in-progress-box").style.minHeight = "10rem";
        document.querySelector(".box.in-progress-box").style.height = "10rem";
    }
    else {
        document.querySelector(".box.in-progress-box").style.minHeight = "25rem";
        document.querySelector(".box.in-progress-box").style.height = "25rem";
    }

    b_hours=document.querySelectorAll(".next-box article");
    bh_count=0;
    for (let i = 0; i < b_hours.length; i++) {
        if(b_hours[i].classList.contains("hidden") != true) {
            bh_count+=parseFloat(b_hours[i].querySelector(".commentbox__hours").innerText);
        }
    }
    document.querySelector(".countdown_summarum_b").innerHTML = bh_count;
    if(bh_count == 0) {
        document.querySelector(".box.next-box").style.minHeight = "10rem";
        document.querySelector(".box.next-box").style.height = "10rem";
    }
    else {
        document.querySelector(".box.next-box").style.minHeight = "25rem";
        document.querySelector(".box.next-box").style.height = "25rem";
    }

    c_hours=document.querySelectorAll(".nextnext-box article");
    ch_count=0;
    for (let i = 0; i < c_hours.length; i++) {
        if(c_hours[i].classList.contains("hidden") != true) {
            ch_count+=parseFloat(c_hours[i].querySelector(".commentbox__hours").innerText);
        }
    }
    document.querySelector(".countdown_summarum_c").innerHTML = ch_count;

    if(ch_count == 0) {
        document.querySelector(".box.nextnext-box").style.minHeight = "10rem";
        document.querySelector(".box.nextnext-box").style.height = "10rem";
    }
    else {
        document.querySelector(".box.nextnext-box").style.minHeight = "25rem";
        document.querySelector(".box.nextnext-box").style.height = "25rem";
    }

    d_hours=document.querySelectorAll(".done-box article");
    dh_count=0;
    for (let i = 0; i < d_hours.length; i++) {
        if(d_hours[i].classList.contains("hidden") != true) {
            dh_count+=parseFloat(d_hours[i].querySelector(".commentbox__hours").innerText);
        }
    }

    if(dh_count == 0) {
        document.querySelector(".box.done-box").style.minHeight = "10rem";
        document.querySelector(".box.done-box").style.height = "10rem";
    }
    else {
        document.querySelector(".box.done-box").style.minHeight = "25rem";
        document.querySelector(".box.done-box").style.height = "25rem";
    }

    e_hours=document.querySelectorAll(".others-box article");
    eh_count=0;
    for (let i = 0; i < e_hours.length; i++) {
        if(e_hours[i].classList.contains("hidden") != true) {
            eh_count+=parseFloat(e_hours[i].querySelector(".commentbox__hours").innerText);
        }
    }

    if(eh_count == 0) {
        document.querySelector(".box.others-box").style.minHeight = "10rem";
        document.querySelector(".box.others-box").style.height = "10rem";
    }
    else {
        document.querySelector(".box.others-box").style.minHeight = "25rem";
        document.querySelector(".box.others-box").style.height = "25rem";
    }
    document.querySelector(".countdown_summarum_d").innerHTML = dh_count;
    document.querySelector(".countdown_summarum_e").innerHTML = eh_count;
    document.querySelector(".countdown_summarum_done").innerHTML = dh_count;
    document.querySelector(".countdown_summarum_undone").innerHTML = ah_count+bh_count+ch_count + eh_count+lateh_count;
    document.querySelector(".countdown_summarum").innerHTML = ah_count+bh_count+ch_count+dh_count + eh_count+lateh_count;
}

countdown_hours();

function change_task_tja(item,com_id_) { 
    pvm_ = item.value;

    formData = {
        comment_id: com_id_,
        vko_arvio: pvm_,
    };
    $.ajax({
    type: "POST",
    url: "../vendor/modifycomment_tja.php",
    data: formData,
    error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
        console.log(formData);
    }
    }).done(function (data) {
        console.log(data);
        // alert('Poistettu kuittaamatta');
        // location.reload();
    });
}

function save_to_db() {
    alert("Työt lähetetty");
}

function send_work() {
    $.ajax({
    type: "POST",
    url: "../vendor/commentreport.php",
    data: '',
    error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
        console.log(formData);
    }
    }).done(function (data) {
        alert("Työt lähetetty!");
        // alert('Poistettu kuittaamatta');
        // location.reload();
    });
}

function changeworkbtn_toggle(week) {
    allinps = document.querySelectorAll(".mass__selection_btn");
    change__work_btn = document.querySelector(".change__work_btn");
    change__worker_btn = document.querySelector(".change__worker_btn");
    change__pvm_btn = document.querySelector(".change__pvm_btn");
    gotit = false;
    for (let i = 0; i < allinps.length; i++) {
        if(allinps[i].checked === true) {
            change__work_btn.style.opacity = 1;
            change__worker_btn.style.opacity = 1;
            change__pvm_btn.style.opacity = 1;
            gotit = true;
        }
    }

    if(gotit === false) {
        change__work_btn.style.opacity = 0;
        change__worker_btn.style.opacity = 0;
        change__pvm_btn.style.opacity = 0;
    }

    weeknum = week;
}

function raise__work_modal() {
    fp = document.querySelector('.first_popup');
    if(fp.classList.contains("two")) {
        fp.classList.remove("two");
        fp.classList.add("out");
    }
    else {
        fp.classList.add("two");
        fp.classList.remove("out");
    }
    document.querySelector(".weekselection."+weeknum).checked = true;    
}
function raise__worker_modal() {
    sp = document.querySelector('.second_popup');
    if(sp.classList.contains("two")) {
        sp.classList.remove("two");
        sp.classList.add("out");
    }
    else {
        sp.classList.add("two");
        sp.classList.remove("out");
    }
}

function raise__pvm_modal() {
    sp = document.querySelector('.third_popup');
    if(sp.classList.contains("two")) {
        sp.classList.remove("two");
        sp.classList.add("out");
    }
    else {
        sp.classList.add("two");
        sp.classList.remove("out");
    }
}

function change__tickets_direction() {
    destination__imps = document.querySelectorAll(".weekselection");
    for (let i = 0; i < destination__imps.length; i++) {
        if(destination__imps[i].checked === true) {
            destination = destination__imps[i].dataset.to;
        }
    }

    allinps = document.querySelectorAll(".mass__selection_btn");
   
    for (let i = 0; i < allinps.length; i++) {
        
        if(allinps[i].checked === true) {
            console.log("destination" + destination);

            destination_week = document.querySelector("#"+destination);
            allinps[i].checked = false;
            copied_thing = allinps[i].parentElement.parentElement.cloneNode(true);
            
            console.log("FUNCTION DETAILS" + destination_week.dataset.week + "_>" +  "`"+allinps[i].dataset.comid+"`");
            change_task_vko(destination_week, String(allinps[i].dataset.comid));

            document.querySelector("#"+destination).appendChild(copied_thing);
            allinps[i].parentElement.parentElement.remove();
        }
    }

    change__work_btn = document.querySelector(".change__work_btn");
    change__worker_btn = document.querySelector(".change__worker_btn");
    change__pvm_btn = document.querySelector(".change__pvm_btn");

    change__work_btn.style.opacity = 0;
    change__worker_btn.style.opacity = 0;
    change__pvm_btn.style.opacity = 0;
}

function change__tickets_receipent() {
    allinps = document.querySelectorAll(".mass__selection_btn");
    for (let i = 0; i < allinps.length; i++) {
        if(allinps[i].checked === true) {
            change__task_worker(String(allinps[i].dataset.comid));
        }
    }

    change__work_btn = document.querySelector(".change__work_btn");
    change__worker_btn = document.querySelector(".change__worker_btn");
    change__pvm_btn = document.querySelector(".change__pvm_btn");

    change__work_btn.style.opacity = 0;
    change__worker_btn.style.opacity = 0;
    change__pvm_btn.style.opacity = 0;
}

function change__task_worker(item) {
    select = document.querySelector(".kommentti_comment_newto");
    var result = [];
    var options = select && select.options;
    var opt;
    selected = 0;
    for (var i=0, iLen=options.length; i<iLen; i++) {
      opt = options[i];
      
      if (opt.selected) {
       
        if(selected>0) {
          result +="|";
        }
         selected +=1;
        result += opt.value || opt.text;
        
      }
    }
      // _comment_to = document.querySelector(".commentbox."+item+" .commentbox__to").value;
      _comment_to = result.replaceAll(",","|");
  
    formData = {
        comment_id: item,
        comment_to: _comment_to
    };
    $.ajax({
    type: "POST",
    url: "../vendor/modifytaskresponsible.php",
    data: formData,
    error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
        console.log(formData);
    }
    }).done(function (data) {
      console.log(data);
      document.querySelector("."+item + " .comment_who").innerHTML = _comment_to;
    });
}

function change__tickets_pvm() {


    allinps = document.querySelectorAll(".mass__selection_btn");
   
    for (let i = 0; i < allinps.length; i++) {
        
        if(allinps[i].checked === true) {

            destination_week = document.querySelector("#newcomment__vko");
            destination_pvm = document.querySelector("#newcomment__deadline");
            allinps[i].checked = false;
            copied_thing = allinps[i].parentElement.parentElement.cloneNode(true);
            
            change_task_vko(destination_week, String(allinps[i].dataset.comid));
            change_task_tja(destination_pvm, String(allinps[i].dataset.comid));
        }
    }

    change__work_btn = document.querySelector(".change__work_btn");
    change__worker_btn = document.querySelector(".change__worker_btn");
    change__pvm_btn = document.querySelector(".change__pvm_btn");

    change__work_btn.style.opacity = 0;
    change__worker_btn.style.opacity = 0;
    change__pvm_btn.style.opacity = 0;

    location.reload();
}

function modify__ticketapproval(elem) {
    com_id_ = elem.parentElement.parentElement.dataset.name;
    _comment_status = '';
    if(elem.innerText.toLowerCase() == 'hylkää') { 
        document.querySelector("#"+com_id_+" .comment__status").style.borderColor = "red";
        _comment_status = 'Palautettu';      
        
        formData = {
            comment_id: com_id_
        };
        $.ajax({
            type: "POST",
            url: "../vendor/modifycommentclosing_pvm.php",
            data: formData,
            error: function (jqxhr, status, exception) {
                alert('Tietokantavirhe, soita numeroon +358449782028');
                console.log(formData);
            }
            }).done(function (data) {
                               
        });
    }
    if(elem.innerText.toLowerCase() == 'hyväksy') {
        document.querySelector("#"+com_id_+" .comment__status").style.borderColor = "green";
        _comment_status = 'OK';
    }

    formData = {
        comment_id: com_id_,
        comment_status: _comment_status
    };

    if(_comment_status == '') {
        return;
    }

    $.ajax({
    type: "POST",
    url: "../vendor/modifycommentstatus.php",
    data: formData,
    error: function (jqxhr, status, exception) {
        alert('Tietokantavirhe, soita numeroon +358449782028');
        console.log(formData);
    }
    }).done(function (data) {
        // alert(data);
        // location.reload();

        document.querySelector("#"+com_id_+" .comment__status").innerHTML = _comment_status;
        
    });
}
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