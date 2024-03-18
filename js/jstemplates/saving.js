/**
 * Saves the given array data to the server using an AJAX POST request.
 * @param {string} array - The array data to be saved
 * @returns None
 */
function save(array) {
    type = array.split("~~")[0];
    current_project_id = parseFloat(document.querySelector("#current_project_id").value);

    formData = {
        projectid: parseFloat(current_project_id),
        apartment: current_apartment,
        wall: current_room,
        function: array,
        timestamp: Date.now()
        };
    $.ajax({
        type: "POST",
        url: "/vendor/addsaving.php",
        data: formData,
        error: function (jqxhr, status, exception) {
            console.log('Tietokantavirhe, soita numeroon +358449782028');
        }
    }).done(function (data) {
        console.log("Saving made on array: " + array.toString());
        console.log(data);
    });
}


/**
 * Function to restore progress in the application based on saved data.
 * This function performs multiple asynchronous AJAX calls to retrieve and restore
 * various settings and user inputs for a specific project.
 * @returns None
 */
function restoreprogress() {
    lvalarm = true;
    sleep = ms => new Promise(resolve => setTimeout(resolve, ms));
    
    $(".preloader").addClass( "active" );
    s_ar = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
    s_yr = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
    s_vr = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
    s_or = parseFloat(document.querySelector("#settings__levy_or_arvo").value);

    sau_ok = 0;
    tyostot_ok = 0;
    five_ok = 0;
    levyt_ok = 0;

    formData = {
        pr_id: document.querySelector("#current_project_id").value,
        apartment: current_apartment,
        wall: current_room
    },
    $.ajax({
        type: "POST",
        url: "../vendor/get-sizesinroom.php",
        data: formData,
        error: function (jqxhr, status, exception) {
        console.log('Tietokantavirhe, soita numeroon +358449782028');
        }
    }).done(function (success) {
        u_rooms = [];
        used_rooms = [];
        successful = success.split("&&");
        console.log(successful);
        successful.forEach(s => {
            if(s.length < 2) {
                return
            }
            s = s.split("~~");
            document.querySelector("#drawarea_h").value = parseFloat(s[3]);
            document.querySelector("#drawarea_w").value = parseFloat(s[4]);

            changesize(parseFloat(document.querySelector("#drawarea_h").value)+'|y');
            changesize(parseFloat(document.querySelector("#drawarea_w").value)+'|x');

            wallname = s[2].toLowerCase();

            walls = document.querySelectorAll(".tohide__room_"+wallname); 
            walls.forEach(w => {
                w.querySelector(".wall_height").value = parseFloat(s[3]);
                w.querySelector(".wall_width").value = parseFloat(s[4]);
            });
        });
    });
    formData = {
        pr_id: document.querySelector("#current_project_id").value,
        room: current_apartment,
        wall: current_room,
    },
    $.ajax({
        type: "POST",
        url: "../vendor/get-savedprogressroom.php",
        data: formData,
        error: function (jqxhr, status, exception) {
          console.log('Tietokantavirhe, soita numeroon +358449782028');
        }
    }).done(function (success) {
        successful = success.split("],[");
        if(successful[0].length > 3) {
            successful.forEach(s_unprocessed => {
                s = s_unprocessed.replaceAll('"','').replaceAll("]","").replaceAll("[","").split(",");
                content = s[4];
                timestamp = s[5];
                if(content.split("~~")[0] === "mp") {
                    input_step = "drawscreen_section_one";
                    if(content.split("~~")[3].includes("#")) {
                        document.querySelector("#mittapiste__name").value = content.split("~~")[3].split("#")[0];
                    }
                    else {
                        document.querySelector("#mittapiste__name").value = content.split("~~")[3];
                    }
                    origo_position = "left_bottom";
                    document.querySelector("#cord_left").value = parseFloat(content.split("~~")[1]);
                    document.querySelector("#cord_up").value = parseFloat(content.split("~~")[2]);
                    mitta__create_mitta("restore","mp");
                }
                else if(content.split("~~")[0] === "au") {
                    $('#step_drawscreen').val('drawscreen_section_two');refresh__drawcontrols();updatearea();           
                    settings__aukko();
                    ylitys__array();
                    console.log(content.split("~~"));
                    input_step = "drawscreen_section_two";
                    origo_position = "left_bottom";

                    refresh__drawcontrols();
                    document.querySelector("#aukotcord_left").value = parseFloat(content.split("~~")[1]);
                    document.querySelector("#aukotcord_right").value = parseFloat(content.split("~~")[3]);
                    document.querySelector("#aukotcord_low").value = parseFloat(content.split("~~")[2]);
                    document.querySelector("#aukotcord_up").value = parseFloat(content.split("~~")[4]);
                    aukko__ylitykset = document.querySelectorAll(".aukko_ylitys input");
                    aukko__ylitykset.forEach(ylitys => {
                        greeklet = content.split("~~")[5].replace(/\\u([\da-fA-F]{4})/g, function (m, $1) {
                            return String.fromCharCode(parseInt($1, 16));
                        }); 
                        if(ylitys.value === greeklet) {
                            ylitys.checked = true;
                            console.log("checkedok");
                        }
                        console.log("checked try");
                    });
                    document.querySelector("#aukko_comment").value = content.split("~~")[6];
                    document.querySelector("#aukko_comment_from").value = content.split("~~")[7];
                    document.querySelector("#aukko_comment_to").value = content.split("~~")[8];
                    // aukko__types
                    aukko__types = document.querySelectorAll(".aukko__types > input[name='aukko__types']");
                    
                    // DEPRECATED. NOT WORKING  130324
                    // aukko__types.forEach(a_type => {
                    //     if(content.split("~~")[9].toLowerCase() === a_type.value.toLowerCase()) {
                    //         a_type.click();
                    //         a_type.checked = true;
                    //     }
                    // });
                    mitta__create_mitta("restore","au",content.split("~~")[9].toLowerCase());
                    
                }
                else if(content.split("~~")[0] === "lv") {
                    origo_position = "left_bottom";

                    document.querySelector("#lapiviennit__sade_muucord").value = content.split("~~")[1];
                    document.querySelector("#from__side_lapivienti").checked = true;
                    document.querySelector("#lvcord_low").value = content.split("~~")[3];
                    document.querySelector("#lvcord_left").value = content.split("~~")[2];
                    document.querySelector("#lv_comment").value = content.split("~~")[5];
                    document.querySelector("#lv_comment_from").value = content.split("~~")[6];
                    document.querySelector("#lv_comment_to").value = content.split("~~")[7];
                    
                    mitta__create_mitta("restore","lv");
                }
                else if(sau_ok < timestamp && content.split("~~")[0] === "sau") {
                    input_step = "drawscreen_section_four";
                    sau_ok = timestamp;
   
                    if(content.split("~~")[11] === "vly") {
                        document.querySelector(".settings__saumahanta-yla").click();
                    }
                    else if(content.split("~~")[11] === "vla") {
                        document.querySelector(".settings__saumahanta-ala").click();
                    }
                    else if(content.split("~~")[11] === "tk") {
                        document.querySelector(".settings__saumahanta-vaakatasoitus").click();
                    }
                    if(content.split("~~")[12] === "vlo") {
                        document.querySelector(".settings__saumahanta-oik").click();
                    }
                    else if(content.split("~~")[12] === "vlv") {
                        document.querySelector(".settings__saumahanta-vas").click();
                    }
                    else if(content.split("~~")[12] === "tl") {
                        document.querySelector(".settings__saumahanta-tasoitus").click();

                    }



                    if(content.split("~~")[1] == 'levytysvaakaan') {
                        document.querySelector("#settings__sauma_vaaka").checked = true;
                    }
                    else if(content.split("~~")[1] === 'levytyspystyyn') {
                        document.querySelector("#settings__sauma_pysty").checked = true;
                    }
                    if(content.split("~~")[2] === 'pystysaumataukkojenyli') {
                        document.querySelector("#saumoitus__sauma_one").checked = true;
                    }
                    else if(content.split("~~")[2] === 'pystysaumataukkojenmukaan') {
                        document.querySelector("#saumoitus__sauma_two").checked = true;
                    }
                    if(content.split("~~")[3] === 'vaakasaumataukkojenyli') {
                        document.querySelector("#saumoitus__sauma_one_v").checked = true;
                    }
                    else if(content.split("~~")[3] === 'vaakasaumataukkojenmukaan') {
                        document.querySelector("#saumoitus__sauma_three").checked = true;
                    }
                    sauma_presets = document.querySelectorAll("#sauma__presets label");
                    sauma_presets.forEach(preset => {
                        if(preset.innerText === content.split("~~")[10]) {
                            preset.click();
                            console.log("sauma-checked OK");
                        }
                    });
                    document.querySelector("#settings__sauma_intervalx").value = content.split("~~")[4];
                    document.querySelector("#settings__sauma_intervaly").value = content.split("~~")[5];
                    // document.querySelector("#settings__sauma_aihiotrimx").value = content.split("~~")[6];
                    // document.querySelector("#settings__sauma_aihiotrimy").value = content.split("~~")[7];
                    document.querySelector("#settings__sauma_aihiopituus").value = content.split("~~")[8];
                    document.querySelector("#settings__sauma_aihioleveys").value = content.split("~~")[9];
                    
                }
                else if(levyt_ok < timestamp && content.split("~~")[0] === "levyt") {
                    levyt_ok = timestamp;
                }
                else if(five_ok < timestamp && content.split("~~")[0] === "five") {
                    five_ok = timestamp;
                }
                else if(tyostot_ok < timestamp && content.split("~~")[0] === "tyostot") {
                    tyostot_ok = timestamp;
                    tyostocontent = content;
                }
                
            });
        }

        input_step = "drawscreen_section_one";
        refresh__drawcontrols();
        if(sau_ok !== 0) {
            input_step = "drawscreen_section_four";
            $('#step_drawscreen').val('drawscreen_section_four');refresh__drawcontrols();updatearea();
            saumoita("restore");

            if(levyt_ok !== 0) {
                setTimeout(() => {
                    input_step = "drawscreen_section_tyostot";
                    $('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();
                    restore__kiinnikkeet(tyostocontent);
                    reorganise__newtyosto();
                    removeduplicatecords__adjustcords();
                }, 250);
                setTimeout(() => {
                    input_step = "drawscreen_section_esikatselu";
                    $('#step_drawscreen').val('drawscreen_section_esikatselu');refresh__drawcontrols();updatearea();
                }, 500);
            }
            else if(five_ok !== 0) {
                setTimeout(() => {
                    input_step = "drawscreen_section_tyostot";
                    $('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();
                    restore__kiinnikkeet(tyostocontent);
                    reorganise__newtyosto();
                    removeduplicatecords__adjustcords();
                }, 250);

                setTimeout(() => {
                    input_step = "drawscreen_section_five";
                    $('#step_drawscreen').val('drawscreen_section_five');refresh__drawcontrols();updatearea();
                }, 500);
            }
            else if(tyostot_ok !== 0) {
                setTimeout(() => {
                    input_step = "drawscreen_section_tyostot";
                    $('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();
                    restore__kiinnikkeet(tyostocontent);
                    reorganise__newtyosto();
                    removeduplicatecords__adjustcords();
                }, 250);     
            }

            if(tyostot_ok !== 0) {
                setTimeout(() => {
                    input_step = "drawscreen_section_tyostot";
                    $('#step_drawscreen').val('drawscreen_section_tyostot');refresh__drawcontrols();updatearea();
                    restore__kiinnikkeet(tyostocontent);
                    reorganise__newtyosto();
                    removeduplicatecords__adjustcords();
                }, 250);     
            }
        }
    });

    $(".preloader").removeClass( "active" );
}


/**
 * Deletes data from the database based on the input step and array provided.
 * @param {string} t_array - The array containing data to be deleted.
 * @returns None
 */
function delete_from_db(t_array) {
    console.log(t_array);
    array = "";
    if(input_step === "drawscreen_section_one") {
        array += "mp~~";
        array += t_array.split("|")[2] + "~~" + t_array.split("|")[1]; 
    }
    else if(input_step === "drawscreen_section_two") {
        array += "au~~";
        array += t_array.split("|")[2] + "~~" + (parseFloat(t_array.split("|")[1])) + "~~"+  (parseFloat(t_array.split("|")[6])+ parseFloat(t_array.split("|")[2])) + "~~"+ (parseFloat(t_array.split("|")[1]) + parseFloat(t_array.split("|")[5]));
    }
    else if(input_step === "drawscreen_section_three") {
        array += "lv~~";
        array += t_array.split("|")[5]+ "~~" + t_array.split("|")[2] +"~~" + t_array.split("|")[1];
    }
   
    formData = {
        projectid: parseFloat(document.querySelector("#current_project_id").value),
        apartment: current_apartment,
        wall: current_room,
        function: array
    };
    $.ajax({
        type: "POST",
        url: "/vendor/removesaving.php",
        data: formData,
        error: function (jqxhr, status, exception) {
            console.log('Tietokantavirhe, soita numeroon +358449782028');
        }
    }).done(function (data) {
        console.log("Removal made on array: " + array.toString());
        console.log(data);
    });
}