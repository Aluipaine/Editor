let levy_name_input = document.querySelector(".levymodal__levyname");

let levy_sizes_w_input = document.querySelector(".drawarea_w");
let levy_sizes_h_input = document.querySelector(".drawarea_h");
let levy_count_input = document.querySelector(".drawarea_count");

let canvas = document.querySelector(".canvas");
let levy_tyostot_x = document.querySelector(".levy_tyostot_x");
let levy_tyostot_y = document.querySelector(".levy_tyostot_y");
let levy_name = document.querySelector(".levy_name");
let levy_size = document.querySelector(".levy_size");
let levy_count = document.querySelector(".levy_count > b");

let tyosto_pysty = document.querySelector(".viim__tyosto_pysty");
let tyosto_vaaka = document.querySelector(".viim__tyosto_vaaka");

let levyn_ruuvit = document.querySelectorAll(".levyn_ruuvit");
let levyn_x_del = document.querySelectorAll(".x_del");
let levyn_temp_input = document.querySelectorAll(".temp_input");
let levyn_lv_list = document.querySelectorAll(".lv");

let levyn_lv = document.querySelector(".levyn_lv");
let lvfrom_1 = document.querySelector("#lvfrom__checkpoint_1");
let lvfrom_2 = document.querySelector("#lvfrom__checkpoint_2");
let lvcord_low = document.querySelector("#lvcord_low");
let lvcord_left = document.querySelector("#lvcord_left");

let add_tyosto_modal = document.querySelector(".add-tyosto-modal");
let add_lv_modal = document.querySelector(".add-lv-modal");

function generateRandomString() {
    const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let randomString = '';

    for (let i = 0; i < 16; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        randomString += characters[randomIndex];
    }

    return randomString;
}

levy_name_input.addEventListener("input", () => {
    levy_name.innerHTML = levy_name_input.value;
});

levy_sizes_w_input.addEventListener("input", () => {
    let value = levy_sizes_w_input.value / 5;

    canvas.style.width = value + "px";
    levy_size.innerHTML =
        levy_sizes_w_input.value + "x" + levy_sizes_h_input.value + "mm";

    tyosto_pysty.style.left = value - 6.5 + "px";
});

levy_sizes_h_input.addEventListener("input", () => {
    let value = levy_sizes_h_input.value / 5;

    canvas.style.height = value + "px";
    levy_size.innerHTML =
        levy_sizes_w_input.value + "x" + levy_sizes_h_input.value + "mm";

    tyosto_vaaka.style.bottom = value - 6.5 + "px";
});

levy_count_input.addEventListener("input", () => {
    levy_count.innerHTML = levy_count_input.value;
});

function levy_color_change(obj) {
    canvas.style.backgroundColor =
        obj.style.backgroundColor;
}

// Radio-like checkboxes
levyn_ruuvit.forEach((ruuvit) => {
    ruuvit.addEventListener("click", () => {
        levyn_ruuvit.forEach((levyn) => {
            if (ruuvit != levyn) {
                levyn.checked = false;
            }
        });

        // Add button
        if (levyn_ruuvit[0].checked) {
            add_tyosto_modal.classList.remove("out");
            add_tyosto_modal.classList.add("two");

            levyn_lv_list.forEach((lv) => {
                lv.style.display = "none";
            });

            levyn_ruuvit[0].checked = false;
        }

        // Remove button
        if (levyn_ruuvit[1].checked) {
            levyn_x_del.forEach((x_del) => {
                x_del.style.display = "block";
            });
        } else {
            levyn_x_del.forEach((x_del) => {
                x_del.style.display = "none";
            });
        }

        // Edit button
        if (levyn_ruuvit[2].checked) {
            levyn_temp_input.forEach((temp_input) => {
                temp_input.style.display = "block";
            });
        } else {
            levyn_temp_input.forEach((temp_input) => {
                temp_input.style.display = "none";
            });
        }
    });
});

document.querySelector(".submit_add_tyosto_modal").addEventListener("click", () => {
    let value = document.querySelector("#ruulit_cord").value;
    let cord = value / 5;
    let type = document.querySelector("#ruulit_vaaka").checked ? 1 : document.querySelector("#ruulit_pysty") ? 2 : 0;
    if (cord != "" && type > 0) {
        if (type == 1) {
            // horizontal --
            levy_tyostot_y.innerHTML += `
            <div class="tyostot__tyosto tyostot__tyosto_vaaka" style="bottom: ${cord}px; width: 100%; height: 1.6px; position: absolute; opacity: 1; display: block;">
                <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                <input class="temp_input" type="number" onchange="change__tyostocord(this, 1);" value="${value}" style="display: none;">
            </div>
            `;
        } else {
            // vertical |
            levy_tyostot_x.innerHTML += `
            <div class="tyostot__tyosto tyostot__tyosto_pysty levy_blessedcord" style="right: unset; height: 100%; width: 1.6px; position: absolute; left: ${cord}px; opacity: 1; display: block;">
                <div class="x_del" onclick="tyosto__del(this);" style="display: none;"></div>
                <input class="temp_input" type="number" onchange="change__tyostocord(this, 2);" value="${value}" style="display: none;">
            </div>
            `;
        }

        levyn_x_del = document.querySelectorAll(".x_del");
        levyn_temp_input = document.querySelectorAll(".temp_input");

        levyn_lv_list.forEach((lv) => {
            lv.style.display = "flex";
        });

        add_tyosto_modal.classList.add("out");
        add_tyosto_modal.classList.remove("two");
    }
});

document.querySelector(".add_tyosto_modal_close_btn").addEventListener("click", () => {
    add_tyosto_modal.classList.add("out");
    add_tyosto_modal.classList.remove("two");

    levyn_lv_list.forEach((lv) => {
        lv.style.display = "flex";
    });
});

function tyosto__del(obj) {
    obj.parentElement.remove();
}

function change__tyostocord(obj, type) {
    let cord = obj.value / 5;

    if (type == 1) {
        // horizontal --
        obj.parentElement.style.bottom = cord + "px";
    } else {
        // vertical |
        obj.parentElement.style.left = cord + "px";
    }
}

levyn_lv.addEventListener("click", () => {
    add_lv_modal.classList.remove("out");
    add_lv_modal.classList.add("two");

    levyn_lv_list.forEach((lv) => {
        lv.style.display = "none";
    });

    levyn_lv.checked = false;
});

document.querySelector(".submit_add_lv_modal").addEventListener("click", () => {
    let id = generateRandomString();

    let name = document.querySelector("#lv__name").value;
    
    let radius =
        document.querySelector("#lapiviennit__sade_first").checked ? 25 :
        document.querySelector("#lapiviennit__sade_second").checked ? 50 :
        document.querySelector("#lapiviennit__sade_third").checked ? 75 :
        document.querySelector("#lapiviennit__sade_fourth").checked ? 100 :
        document.querySelector("#lapiviennit__sade_fifth").checked ? 125 :
        document.querySelector("#lapiviennit__sade_muucord").checked ?
        document.querySelector("#lapiviennit__sade_muucord_input").value : 0;

    let radius_px = radius / 5;
    
    let from =
        document.querySelector("#from__origo_lapivienti").checked ? 1 :
        document.querySelector("#from__side_lapivienti").checked ? 2 : 0;

    let distance =
        lvfrom_1.checked ? 1 :
        document.querySelector("#lvfrom__checkpoint_2").checked ? 2 : 0;

    let ylos = lvcord_low.value;

    let oikealle = lvcord_left.value;

    let comment = document.querySelector("#lv_comment").value;

    if (name != "" && radius != 0 && from != 0 && distance != 0 && comment != "") {
        canvas.innerHTML += `
        <span onclick="this.classList.toggle('comment__visible')" style="bottom: 1px; left: 1px; margin-bottom: -11px; margin-left: -11px; height: ${radius_px}px; width: ${radius_px}px;" class="lapivienti lv lapivienti__customsize" id="${id}" data-no="1">
            ${radius}
            <div class="comment__container">
                <p>${comment}</p><!--<strong class="comment__from">Jyri</strong><strong class="comment__to">Jari</strong>-->
            </div>
        </span>`;

        levyn_lv_list = document.querySelectorAll(".lv");

        add_lv_modal.classList.add("out");
        add_lv_modal.classList.remove("two");
    
        levyn_lv_list.forEach((lv) => {
            lv.style.display = "flex";
        });
    }
});

document.querySelector(".add_lv_modal_close_btn").addEventListener("click", () => {
    add_lv_modal.classList.add("out");
    add_lv_modal.classList.remove("two");

    levyn_lv_list.forEach((lv) => {
        lv.style.display = "flex";
    });
});

document.querySelector("#lapiviennit__sade_muucord_input").addEventListener("click", () => {
    document.querySelector("#lapiviennit__sade_muucord").checked = true;
});

function lv_from_change() {
    if(lvfrom_1.checked) {
        lvcord_low.value = 5;
        lvcord_left.value = 5;
    } else if (lvfrom_2.checked) {
        lvcord_low.value = 0;
        lvcord_left.value = 0;
    }
}