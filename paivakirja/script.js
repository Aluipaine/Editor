const todoInput = document.querySelector('.todo-input');         
// const addTodoBtn = document.querySelector('.add-todo');           
const todoContainer = document.querySelector('.todo-box .box-body');    
const allTodoBox = document.querySelectorAll(".box-body"); 
   


let todocartNumber = 1;          
                                
todocards = document.querySelectorAll(".todo-card");    
for (let i = 0; i < todocards.length; i++) {
    const todoCard = todocards[i];
    todoCard.addEventListener("dragstart", (e) => dragStart(e));    
    todoCard.addEventListener("dragend", (e) => dragEnd(e));   

    const delBtn = todoCard.querySelectorAll(".delete");       
        delBtn.forEach((item)=>{                                    
        item.addEventListener('click', (e) => e.target.parentElement.remove()); 
    });
}       


allTodoBox.forEach(box => {                                      
    box.addEventListener("dragover", (e) => allowDrop(e));         
    box.addEventListener("drop", (e) => drop(e));                  
});

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

// addTodoBtn.addEventListener("click", (e) => { 
//     e.preventDefault();                                          
//     addTodoFunction();                                           
// });

function addTodoFunction() {                                     
    let id = todocartNumber++;                                  
    const todoCard = document.createElement("article");          
    todoCard.classList.add("todo-card");                         

    todoCard.innerHTML = `  
    <h5 class="task-name">${todoInput.value}</h5>
    <button class="fas fa-trash delete"></button>
    `;                                                         

    todoCard.draggable = true;                                  
    todoCard.id = `todo${id}`;                                  
    todoCard.addEventListener("dragstart", (e) => dragStart(e));    
    todoCard.addEventListener("dragend", (e) => dragEnd(e));    

    if (todoInput.value !== "") {
        todoContainer.appendChild(todoCard);
    } else {
        alert("Set Title !");                                   
    }                                                           

    todoInput.value = "";                                       

    const delBtn = document.querySelectorAll(".delete");       
        delBtn.forEach((item)=>{                                    
        item.addEventListener('click', (e) => e.target.parentElement.remove()); 
    });

    console.log("ITEM ADDED")
}


function dragStart(event) {
    event.target.classList.add("dragging");                     
    event.dataTransfer.setData("Text/html", event.target.id);   
    console.log(event.target);
    console.log(event);
}

function allowDrop(event) {
    event.preventDefault();
    console.log(event.target);
    console.log(event);
}

function drop(event) {
    event.preventDefault();
    console.log(event.target);
    console.log(event);

    const data = event.dataTransfer.getData("Text/html");       
    // if(event.target.classList.contains("box")) {
    event.target.appendChild(document.getElementById(data));  
    // }

    
     
}

function dragEnd(event) {
    event.target.classList.remove("dragging");                  
}

function dragStart(event) {
    event.target.classList.add("dragging");                     
    event.dataTransfer.setData("Text/html", event.target.id);   
}

function allowDrop(event) {
    event.preventDefault();
}

function drop(event) {
    event.preventDefault();
    const data = event.dataTransfer.getData("Text/html");       
     if(event.target.classList.contains("box-body")) {
        event.target.appendChild(document.getElementById(data)); 
        countdown_hours(); 
        if(event.target.dataset.week) {
            document.getElementById(data).querySelector(".commentbox__vko").value = event.target.dataset.week;
            change_task_vko(document.getElementById(data).querySelector(".commentbox__vko"),document.getElementById(data).querySelector(".commentbox__vko").getAttribute("name"));
        }
        console.log(event.target);
        event.target.scrollTop = event.target.scrollHeight;
    }
}

function dragEnd(event) {
    event.target.classList.remove("dragging");                  
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
    vko_ = item.value;

    formData = {
        comment_id: com_id_,
        vko_arvio: vko_,
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

   
    document.querySelector(".countdown_summarum_done").innerHTML = dh_count;
    document.querySelector(".countdown_summarum_valmis").innerHTML = dh_count;
    document.querySelector(".countdown_summarum_undone").innerHTML = ah_count+lateh_count;
    document.querySelector(".countdown_summarum").innerHTML = ah_count+dh_count +lateh_count;

    document.querySelector(".myyjanakyma__voilaskuttaa > b").innerHTML = dh_count + "*50€" + " = " + dh_count*50 + "€ +alv24%";

}

countdown_hours();

function change_task_tja(item,com_id_) { 
    vko_ = item.value;

    formData = {
        comment_id: com_id_,
        vko_arvio: vko_,
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

function change_task_deadline(item,com_id_) { 
    deadline_ = item.value;

    formData = {
        comment_id: com_id_,
        deadline: deadline_,
    };
    $.ajax({
    type: "POST",
    url: "../vendor/modifycomment_deadline.php",
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
function change_task_promisedeadline(item,com_id_) { 
    myyja_lupaus_ = item.value;

    formData = {
        comment_id: com_id_,
        myyja_lupaus: myyja_lupaus_,
    };
    $.ajax({
    type: "POST",
    url: "../vendor/modifycomment_myyjalupaus.php",
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
    // This is now an empty function, because all the process has been made synchronized!
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

