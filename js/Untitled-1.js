let rooms = document.querySelectorAll(".project__building_room");

for (let a = 0; a < rooms.length; a++) {
    
    const element = rooms[a];
    t = rooms[a];
    if(t.dataset.aroom) {}
    else {
        continue;
    }
    statuses = "";

    // console.log(t);
    statuses += t.dataset.aroom.split(",")[1] + " __ ";
    statuses += t.dataset.broom.split(",")[1] + " __ ";
    statuses += t.dataset.croom.split(",")[1] + " __ ";
    statuses += t.dataset.droom.split(",")[1] + " __ ";
    statuses += t.dataset.kroom.split(",")[1] + " __ ";
    statuses += t.dataset.lroom.split(",")[1] + " __ ";

    if(statuses.includes("undone") && statuses.includes("measured") && statuses.includes("tomeasure")) {
        element.classList.add("bg-1");
    }
    else if(statuses.includes("undone") && statuses.includes("measured")) {
        element.classList.add("bg-2");
    }
    else if(statuses.includes("undone") && statuses.includes("tomeasure")) {
        element.classList.add("bg-3");
    }

    else if(statuses.includes("measured") && statuses.includes("tomeasure")) {
        element.classList.add("bg-4");
    }
}

// for (let t of rooms) {
//     statuses = [];

//     console.log(t);
//     statuses.push(t.dataset.aroom);
//     statuses.push(t.dataset.broom);
//     statuses.push(t.dataset.croom);
//     statuses.push(t.dataset.droom);
//     statuses.push(t.dataset.kroom);
//     statuses.push(t.dataset.lroom);
// }