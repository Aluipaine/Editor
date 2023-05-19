
  <div class="recl-container" id="reclamation__popup">
    <div class="modal-background">
      <div class="modal">
        <section>
         <h2>Reklamaatiot ja huomiot</h2>
        </section>
        <section>
           <h4>Huomiot</h4>
            <fieldset>
               <input id="m__a_sahko" name="mitta__huomiot" type="checkbox" value="Sähkö">
               <label for="m__a_sahko">Sähkö</label>
               <input id="m__a_putki" name="mitta__huomiot" type="checkbox" value="Putki">
               <label for="m__a_putki">Putki</label>
               <input id="m__a_tornado" name="mitta__huomiot" type="checkbox" value="Tornado">
               <label for="m__a_tornado">Tornado</label>
            </fieldset>
        </section>
        <section class="comment__section">
           <h4>Lähetä kommentti</h4>
           <textarea name="mittapiste_comment" id="mittapiste_comment" cols="30" rows="10" style="resize: none;"></textarea>
           <div class="row">
              <div class="col-6">
                 <h6>Keneltä</h6>
                 <input name="mittapiste_comment_from" id="mittapiste_comment_from" type="text" value="<?php echo $_GET['user']; ?>">
              </div>
              <div class="col-6">
                 <h6>Kenelle</h6>
                 <input name="mittapiste_comment_to" id="mittapiste_comment_to" type="text">
              </div>
           </div>
        </section>
       <!--  <section class="comment__section">
           <h4>Reklamoitavaa:</h4>
           <textarea name="mittapiste_comment" id="mittapiste_comment" cols="30" rows="10" style="resize: none;"></textarea>
        </section> -->
        <div class="form-group"><input type="checkbox" id="comment__importance"><label for="comment__importance">Onko kriittinen?</label></div>
        <div class="modal_close_btn drawarea__controls_btn" id="" onclick="addproblemstatus(this);">Valmis</div>
      </div>
    </div>
  </div>

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


<!-- 2_1 -->
<script src="js/roller.js"></script>
<script src="js/roller_1.js"></script>
<script src="js/roller_2.js"></script>
<script src="js/roller_3.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js'></script>
<!-- Marko new row btn function -->
<script>
  function marko__createnewrow_holes() {
    var newrow = document.createElement("tr");
                    
    newrow.innerHTML='<td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>';

    document.querySelector("#hole_set > table").append(newrow);
  }

  function marko__createnewrow_morehole() {
    var newrow = document.createElement("tr");
                    
    newrow.innerHTML='<td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td><td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td><td><input type="checkbox" name="marko__moreholeparameter" value="" class="lineinput"></td><td><input type="checkbox" name="marko__moreholeparameter" value="" class="lineinput"></td>';

    document.querySelector("#morehole_set > table").append(newrow);
  }

  // function marko__newmaterial() {

  //   if (document.querySelector("#new_material").value == "") {
  //     alert("Materiaalin nimi on pakollinen!");
  //   }
  //   else {
  //     var material = document.createElement("div");
  //     var material__checkbox = document.createElement("input");
  //     var material__checkbox_label = document.createElement("label");

  //     var material__checkbox_hiddenbg = document.createElement("input");
  //     var material__checkbox_hiddencol = document.createElement("input");

  //     material__checkbox_label.innerHTML = document.querySelector("#new_material").value;
  //     var mn = document.querySelector("#new_material").value;
  //     if (document.querySelector("#new_material_color_one").checked) {
  //       material__checkbox_label.style.color = '#000';
  //     }
  //     else {
  //       material__checkbox_label.style.color = '#fff';
  //     }

  //     material__checkbox.type = "checkbox";
  //     material__checkbox.name = "material_type";
  //     material__checkbox.value = document.querySelector("#new_material").value;

  //     material__checkbox_label.style.background = document.querySelector("#app > div > input").value;

  //     material.classList.add("material__customcol_item");
  //     material__checkbox.setAttribute("id", mn.toLowerCase());
  //     material__checkbox_label.setAttribute("for", mn.toLowerCase());

  //     material__checkbox_hiddenbg.type = "hidden";
  //     material__checkbox_hiddencol.type = "hidden";

  //     material__checkbox_hiddenbg.name = "material_bg";
  //     material__checkbox_hiddencol.name = "material_colour";

  //     material__checkbox_hiddenbg.value = material__checkbox_label.style.color;
  //     material__checkbox_hiddencol.value = material__checkbox_label.style.background;

  //     material.appendChild(material__checkbox );
  //     material.appendChild(material__checkbox_label );
  //     material.appendChild(material__checkbox_hiddenbg );
  //     material.appendChild(material__checkbox_hiddencol );

  //     document.querySelector("#materials > fieldset").append(material);
  //   }
  // } 
</script>



<script>
  saumaCtrlsList = [];
  saumaCtrlsListV = [];

  // function rewriter(sauma__control, width, axis) {
  //   if (axis === 'h') {
  //     const widthDoc = document.querySelector('#box_w').value;
  //     const canvasWidth = document.querySelector('.box-wrapper .canvas').offsetWidth;

  //     // console.log("STAGE I: " + widthDoc);
  //     // console.log("STAGE I: " + canvasWidth);
  //     if (saumaCtrlsList.length > 1) {
        
  //       let currentIndex;
  //       // console.log("STAGE I: " + currentIndex);
  //       for (let i = 0; i < saumaCtrlsList.length; i++) {
  //         for (let k = 0; k < saumaCtrlsList.length - 1; k++) {
  //            // console.log("STAGE II: i " + i);
  //            //  console.log("STAGE II: k " + k);
  //           if (parseFloat(saumaCtrlsList[k].getAttribute('data-from')) > parseFloat(saumaCtrlsList[k + 1].getAttribute('data-from'))) {
  //             const tmp = saumaCtrlsList[k + 1];
  //             // console.log("STAGE II: tmp " + tmp);
  //             // console.log("STAGE II: saumaCtrlsList[k] " + saumaCtrlsList[k]);
  //             saumaCtrlsList[k + 1] = saumaCtrlsList[k];
  //             saumaCtrlsList[k] = tmp;
  //           }
  //         }
  //       }
            
  //       saumaCtrlsList.forEach((item, index) => {
  //         if (index === 0) {
  //           saumaCtrlsList[index].innerHTML = saumaCtrlsList[index].getAttribute('data-from');
  //           saumaCtrlsList[index].style.width = saumaCtrlsList[index].getAttribute('data-from')/5 + 'px';
  //           saumaCtrlsList[index].style.left = '0';
  //           // console.log("STAGE III: saumaCtrlsList[index] " + saumaCtrlsList[index]);

  //         } else if (index != 0 && index != (saumaCtrlsList.length - 1)) {
  //           let leftSum = 0;

  //           for (let k = 0; k < index; k++) {
  //             leftSum += +saumaCtrlsList[k].style.width.replace('px', '');
  //              // console.log("STAGE III: saumaCtrlsList[index] " + leftSum);
  //           }
          
  //           saumaCtrlsList[index].innerHTML = saumaCtrlsList[index].getAttribute('data-from') - saumaCtrlsList[index - 1].getAttribute('data-from');
  //           saumaCtrlsList[index].style.width = (saumaCtrlsList[index].getAttribute('data-from') - saumaCtrlsList[index - 1].getAttribute('data-from')) /5 +"px";

  //           saumaCtrlsList[index].style.left = leftSum + "px";
  //         } else if (index === (saumaCtrlsList.length - 1)) {
  //           let leftSum = 0;

  //           for (let k = 0; k < index; k++) {
  //             leftSum += +saumaCtrlsList[k].style.width.replace('px', '');
  //           }

  //           saumaCtrlsList[index].innerHTML = saumaCtrlsList[index].getAttribute('data-from') - saumaCtrlsList[index - 1].getAttribute('data-from');

  //           saumaCtrlsList[index].style.width = (saumaCtrlsList[index].getAttribute('data-from') - saumaCtrlsList[index - 1].getAttribute('data-from')) /5 + 'px';

  //           saumaCtrlsList[index].style.left = leftSum + "px";
  //         }
  //       });
  //     } else {

  //       //sauma__control.style.width = width/5 + 'px';
  //     }
  //   }
  //   // else if (axis === 'v') {
  //   //   const heightDoc = document.querySelector('#box_h').value;
  //   //   if (saumaCtrlsListV.length > 1) {
  //   //     let currentIndex;

  //   //     for (let i = 0; i < saumaCtrlsListV.length; i++) {
  //   //       for (let k = 0; k < saumaCtrlsListV.length - 1; k++) {
  //   //         if (+saumaCtrlsListV[k].getAttribute('data-from') > +saumaCtrlsListV[k + 1].getAttribute('data-from')) {
  //   //           const tmp = saumaCtrlsListV[k + 1];
  //   //           saumaCtrlsListV[k + 1] = saumaCtrlsListV[k];
  //   //           saumaCtrlsListV[k] = tmp;
  //   //         }
  //   //       }
  //   //     }
            
  //   //     saumaCtrlsListV.forEach((item, index) => {
  //   //       if (index === 0) {
  //   //         saumaCtrlsListV[index].innerHTML = saumaCtrlsListV[index].getAttribute('data-from');
  //   //         saumaCtrlsListV[index].style.height = saumaCtrlsListV[index].getAttribute('data-from') / heightDoc * 100 + '%';
  //   //         saumaCtrlsListV[index].style.top = '0';
  //   //       } else if (index != 0 && index != (saumaCtrlsListV.length - 1)) {
  //   //         let topSum = 0;

  //   //         for (let k = 0; k < index; k++) {
  //   //           topSum += +saumaCtrlsListV[k].style.height.replace('%', '');
  //   //         }
          
  //   //         saumaCtrlsListV[index].innerHTML = saumaCtrlsListV[index].getAttribute('data-from') - saumaCtrlsListV[index - 1].getAttribute('data-from');
  //   //         saumaCtrlsListV[index].style.height = (saumaCtrlsListV[index].getAttribute('data-from') - saumaCtrlsListV[index - 1].getAttribute('data-from')) / heightDoc * 100 + '%';
  //   //         saumaCtrlsListV[index].style.top = topSum + "%";
  //   //       } else if (index === (saumaCtrlsListV.length - 1)) {
  //   //         let topSum = 0;

  //   //         for (let k = 0; k < index; k++) {
  //   //           topSum += +saumaCtrlsListV[k].style.height.replace('%', '');
  //   //         }

  //   //         saumaCtrlsListV[index].innerHTML = saumaCtrlsListV[index].getAttribute('data-from') - saumaCtrlsListV[index - 1].getAttribute('data-from');

  //   //         saumaCtrlsListV[index].style.height = (saumaCtrlsListV[index].getAttribute('data-from') - saumaCtrlsListV[index - 1].getAttribute('data-from')) / heightDoc * 100 + '%';

  //   //         saumaCtrlsListV[index].style.top = topSum + "%";
  //   //       }
  //   //     });
  //   //   } else {
  //   //     sauma__control.style.height = width + 'px';
  //   //   }
  //   // }
  // }

  // this list contains created sauma__controls by function
  // e - event for delete original event
  // sauma - HTML element Sauma
  // sauma__controls - HTML element sauma__controls
  // sauma__control - HTML element sauma__control
  // AXIS H for HEIGHT AND V for WIDTH


  function change__pystycord_raahaus(uusi) {
    vs_summ = 0;
    let sauma = canvas.querySelectorAll(".sauma__vertical");
    if(document.getElementById("settings__saumahanta-oik").checked || document.getElementById("settings__saumahanta-tasoitus").checked) {
      sauma.forEach(function(j) {
        saumawidth = parseFloat(j.style.left)*5 - vs_summ;


        // // j.querySelector(".sauma__controls").innerText = ;
        // // j.querySelector(".sauma__vertical_ctrl").innerHTML = saumawidth;
        // // j.querySelector(".sauma__vertical_ctrldown").innerHTML = saumawidth-10;

        // j.querySelector(".sauma__vertical_ctrldown").style.width = saumawidth/5 + "px";
        // j.querySelector(".sauma__vertical_ctrldown").style.left = (-1) * saumawidth/5 + "px";

        // j.querySelector(".sauma__vertical_ctrl").style.width = saumawidth/5 + "px";
        // j.querySelector(".sauma__vertical_ctrl").style.left = (-1) * saumawidth/5 + "px";

        // if(j.classList.contains("sauma__vertical_hanta") !== true) {
        //   j.querySelector(".sauma__vertical_ctrl").value = roundToNearest25(saumawidth);
        //   j.querySelector(".sauma__vertical_ctrldown").innerHTML = roundToNearest25(saumawidth)-10;
          

        //   vs_summ +=saumawidth;
        // }
       

        

        // vs_summ +=saumawidth;
      });

     
      if(document.querySelector(".sauma__vertical_hanta")) {
        hantawidth = w-vs_summ;
        j = document.querySelector(".sauma__vertical_hanta");
        j.style.left = w/5 + "px";
        j.querySelector(".sauma__controls").style.left = "0";
        j.querySelector(".sauma__vertical_ctrldown").style.width = hantawidth/5 + "px";
        j.querySelector(".sauma__vertical_ctrl").style.width = hantawidth/5 + "px";

        j.querySelector(".sauma__vertical_ctrl").value = hantawidth;
        j.querySelector(".sauma__vertical_ctrldown").innerHTML = hantawidth-10;
      }
    }
    if(document.getElementById("settings__saumahanta-vas").checked) {
       sauma.forEach(function(j) {
        saumawidth = parseFloat(j.style.right)*5 - vs_summ;


        // j.querySelector(".sauma__controls").innerText = ;
        // j.querySelector(".sauma__vertical_ctrl").innerHTML = saumawidth;
        // j.querySelector(".sauma__vertical_ctrldown").innerHTML = saumawidth-10;

        j.querySelector(".sauma__vertical_ctrldown").style.width = saumawidth/5 + "px";
        j.querySelector(".sauma__vertical_ctrldown").style.right = (-1) * saumawidth/5 + "px";

        j.querySelector(".sauma__vertical_ctrl").style.width = saumawidth/5 + "px";
        j.querySelector(".sauma__vertical_ctrl").style.right = (-1) * saumawidth/5 + "px";

        if(j.classList.contains("sauma__vertical_hanta") !== true) {
          j.querySelector(".sauma__vertical_ctrl").value = roundToNearest25(saumawidth);
          j.querySelector(".sauma__vertical_ctrldown").innerHTML = roundToNearest25(saumawidth)-10;
          

          vs_summ +=saumawidth;
        }
      });

     
      if(document.querySelector(".sauma__vertical_hanta")) {
        hantawidth = w-vs_summ;
        j = document.querySelector(".sauma__vertical_hanta");
        j.style.right = w/5 + "px";
        j.querySelector(".sauma__controls").style.right = "0";
        j.querySelector(".sauma__vertical_ctrldown").style.width = hantawidth/5 + "px";
        j.querySelector(".sauma__vertical_ctrl").style.width = hantawidth/5 + "px";

        j.querySelector(".sauma__vertical_ctrl").value = hantawidth;
        j.querySelector(".sauma__vertical_ctrldown").innerHTML = hantawidth-10;
      }
    }
      
      
  }
  
  function resizeSauma(e, sauma, sauma__controls, sauma__control, axis) {
    const canvaRight = document.querySelector('.drawarea__top');
    const canvaForV = document.querySelector('.drawarea__right');
    const widthInput = document.querySelector('#box_w').value;
    const heightInput = document.querySelector('#box_h').value;
    // const canvaForLine = document.querySelector('.box-wrapper .canvas');

    // const BETWEENSHAPES_X = widthInput / canvaRight.offsetWidth;
    // const BETWEENSHAPES_Y = heightInput / canvaForV.offsetHeight;

    if (axis === 'h') {
      let whereInput;
      let elemI;
      // Get resize between in parts
      e.preventDefault();

      let h_elements = [];
      if(document.getElementById("settings__saumahanta-oik").checked) {
        let resizeWidth = event.targetTouches[0].pageX - canvaRight.getBoundingClientRect().left;
        if (event.targetTouches[0].pageX > canvaRight.getBoundingClientRect().left && canvaRight.offsetWidth > resizeWidth ) {
        let leftIs = parseInt(resizeWidth) + 'px';



        sauma.style.left = leftIs;
        // sauma__control.style.left = "";
        sauma.querySelector(".sauma__control_down").style.left = "";
        sauma.querySelector(".sauma__control_down").style.width = "auto";

        sauma__control.value = roundToNearest25(5*resizeWidth);
        sauma.querySelector(".sauma__control_down").innerHTML = roundToNearest25(resizeWidth*5)-10;

        change__pystycord_raahaus();

       }
      }
      if(document.getElementById("settings__saumahanta-vas").checked) {
        let resizeWidth = event.targetTouches[0].pageX - canvaRight.getBoundingClientRect().left;
          let rightIs = parseInt(resizeWidth) + 'px';



          sauma.style.right = rightIs;
          sauma__control.style.right = "";
          sauma.querySelector(".sauma__control_down").style.right = "";
          sauma.querySelector(".sauma__control_down").style.width = "auto";

          sauma__control.value = roundToNearest25(5*resizeWidth);
          sauma.querySelector(".sauma__control_down").innerHTML = roundToNearest25(resizeWidth*5)-10;

          change__pystycord_raahaus();

         
      }



      
    } else if (axis === 'v') {
      let whereInput;
      let elemI;
      // Get resize between in parts
      e.preventDefault();
      let resizeHeight = event.targetTouches[0].pageY - canvaForV.getBoundingClientRect().top;
      if (event.targetTouches[0].pageY > canvaForV.getBoundingClientRect().top && canvaForV.offsetHeight > resizeHeight ) {
        let topIs = parseInt(BETWEENSHAPES_Y * resizeHeight) * 100 / heightInput + '%';
        sauma__controls.style.top = topIs;
        sauma.style.top = topIs;
        sauma__control.value = parseInt(BETWEENSHAPES_Y * resizeHeight);
        sauma__control.setAttribute('data-from', parseInt(BETWEENSHAPES_Y * resizeHeight));
        rewriter(sauma__control, resizeHeight, 'v');
      }
    }
  }
  
  function saumoitus__examplephoto() {
    var examplephoto = document.getElementById("sauma__saumoitus_photo");
    if (document.getElementById("settings__sauma_pysty").checked) {
      examplephoto.src = "/img/levytys-h.png";
    }
    if (document.getElementById("settings__sauma_vaaka").checked) {
      examplephoto.src = "/img/levytys-v.png";
    }

    // other variables

    if (document.getElementById("settings__sauma_pysty").checked && document.getElementById("settings__saumahanta-oik").checked) {
      examplephoto.src = "/img/levytys-h.png";
    }
    if (document.getElementById("settings__sauma_vaaka").checked && document.getElementById("settings__saumahanta-oik").checked) {
      examplephoto.src = "/img/levytys-v.png";
    } 
    if (document.getElementById("settings__sauma_pysty").checked && document.getElementById("settings__saumahanta-vas").checked) {
      examplephoto.src = "/img/levytys-v-v.png";
    }
    if (document.getElementById("settings__sauma_vaaka").checked && document.getElementById("settings__saumahanta-vas").checked) {
      examplephoto.src = "/img/levytys-h-v.png";
    } 
    if (document.getElementById("settings__sauma_pysty").checked && document.getElementById("settings__saumahanta-tasoitus").checked) {
      examplephoto.src = "/img/levytys-v-h.png";
    }
    if (document.getElementById("settings__sauma_vaaka").checked && document.getElementById("settings__saumahanta-tasoitus").checked) {
      examplephoto.src = "/img/levytys-h-h.png";
    } 

    if (document.getElementById("settings__sauma_vaaka").checked && document.getElementById("settings__saumahanta-oik").checked && document.getElementById("settings__saumahanta-vas").checked) {
      examplephoto.src = "/img/levytys-h-vh.png";
    } 

    if (document.getElementById("settings__sauma_pysty").checked && document.getElementById("settings__saumahanta-oik").checked && document.getElementById("settings__saumahanta-vas").checked) {
      examplephoto.src = "/img/levytys-v-vh.png";
    } 
  }

  s_h=0;
  s_c=0;


  function luo__sauma_horizontal(item, aukko,tas_li,modcount) {
    s_h+=1;
    var sauma__interval_horizontal;

    if(document.getElementById("settings__sauma_pysty").checked) {
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    }
    else if(document.getElementById("settings__sauma_vaaka").checked) {
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_x").value;
    }



    const heightBox = document.querySelector('#box_h').value;
    const boxHeight = document.querySelector('.canvas').offsetHeight;
    const sauma = document.createElement("div");
    const sauma__control = document.createElement("input");
    const sauma__control_down = document.createElement("b");
    const sauma__controls_type = document.createElement("input");
    const sauma__controls_del = document.createElement("div");
    const newDiv__comment = document.createElement("li");
    const newDiv__comment_del = document.createElement("i");
    const newrow_horis_contal = document.createElement("div");

    const sauma__controls = document.createElement("div");
    

    var h = document.querySelector('#box_h').value;
    var w = document.querySelector('#box_w').value;

    let id = "v_sauma" + Math.random().toString(16).slice(2);
    var nvrtcl = document.querySelector(".newrow_horizontal");

    
    newrow_horis_contal.classList.add(id);
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
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
    newDiv__comment.appendChild(newDiv__comment_del);
    newDiv__comment.innerHTML="Sauma #" + s_h;
    newDiv__comment_del.innerHTML = "";
    

    sauma__controls_del.setAttribute("onclick", "sauma__del(this);");
    sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");

    

    if(document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_one").checked) {
      
      saumcount = Math.ceil(h/sauma__interval_horizontal);
     
      korkeus = tas_li;
      //sauma__control.style.bottom = s_h * parseFloat(korkeus/5) + "px";
      sauma.style.bottom = s_h * parseFloat(korkeus/5) + "px";
      sauma__control.value=korkeus;
      sauma__control_down.innerHTML=korkeus-10;
      sauma.style.marginBottom = "0";


      console.log("P/V, TASOITUS, AY vaaka ");


    }

    else if(document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_three").checked && document.getElementById("saumoitus__sauma_two").checked) {
      
      saumcount = Math.ceil(aukko/sauma__interval_horizontal);
      korkeus = tas_li;
      //sauma__control.style.bottom = s_h * parseFloat(korkeus/5) + "px";
      sauma.style.bottom = modcount * parseFloat(korkeus/5) + "px";
      sauma__control.value=korkeus;
      sauma__control_down.innerHTML=korkeus-10;


      console.log("P/V, TASOITUS, PVA vaaka");


    }
    else if(document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_two").checked) {
        
      saumcount = Math.ceil(aukko/sauma__interval_horizontal);

      korkeus = tas_li;
      //sauma__control.style.bottom = s_h * parseFloat(korkeus/5) + "px";
      sauma.style.bottom = s_h * parseFloat(korkeus/5) + "px";
      sauma__control.value=korkeus;
      sauma__control_down.innerHTML=korkeus-10;


      console.log("P/V, TASOITUS, PA vaaka");


    }
    
    else if(document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_three").checked) {
      
      saumcount = Math.ceil(aukko/sauma__interval_horizontal);
      // korkeus = Math.trunc(aukko/saumcount);
      korkeus = tas_li;
      //sauma__control.style.bottom = s_h * parseFloat(korkeus/5) + "px";
      sauma.style.bottom = modcount * parseFloat(korkeus/5) + "px";
      sauma__control.value=korkeus;
      sauma__control_down.innerHTML=korkeus-10;


      console.log("P/V, TASOITUS, VA vaaka");
    }
    
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_one").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_two").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_three").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_one").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_two").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_three").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_one").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_two").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_three").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_one").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_two").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_three").checked) {
      sauma.innerHTML = "";
      sauma__control_down.innerHTML = parseFloat(sauma__interval_horizontal)-10;
      sauma__control.value = sauma__interval_horizontal;
      sauma__controls_type.type = "text";
      sauma__controls_type.value = "ST2";


      sauma.style.bottom = (s_h * (parseFloat(sauma__interval_horizontal)/5))  + 'px';
      sauma__control.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
      sauma__control_down.style.height = ((parseFloat(sauma__interval_horizontal)/5)) + 'px';
      //sauma__control_down.style.bottom = ((s_h-1) * (parseFloat(sauma__interval_horizontal)/5)) + 'px';
    }
    else {
      alert("");
    }

    if (typeof(nvrtcl) != 'undefined' && nvrtcl != null) {
      nvrtcl.prepend(sauma);
      sauma__controls_del.innerHTML = nvrtcl.children.length;
      if (nvrtcl.children.length == 1 ||nvrtcl.children.length == 0) {
        sauma__controls_del.innerHTML = "A";
      }

      if (nvrtcl.children.length == 2) {
        sauma__controls_del.innerHTML = "B";
      }

      if (nvrtcl.children.length == 3) {
        sauma__controls_del.innerHTML = "C";
      }

      if (nvrtcl.children.length == 4) {
        sauma__controls_del.innerHTML = "D";
      }

      if (nvrtcl.children.length == 5) {
        sauma__controls_del.innerHTML = "E";
      }

      if (nvrtcl.children.length == 6) {
        sauma__controls_del.innerHTML = "F";
      }

      if (nvrtcl.children.length == 7) {
        sauma__controls_del.innerHTML = "G";
      }

      if (nvrtcl.children.length == 8) {
        sauma__controls_del.innerHTML = "H";
      }

      if (nvrtcl.children.length == 9) {
        sauma__controls_del.innerHTML = "I";
      }

      if (nvrtcl.children.length == 10) {
        sauma__controls_del.innerHTML = "J";
      }

      if (nvrtcl.children.length == 11) {
        sauma__controls_del.innerHTML = "K";
      }

      if (nvrtcl.children.length == 12) {
        sauma__controls_del.innerHTML = "L";
      }

      if (nvrtcl.children.length == 13) {
        sauma__controls_del.innerHTML = "M";
      }

      if (nvrtcl.children.length == 14) {
        sauma__controls_del.innerHTML = "N";
      }

      if (nvrtcl.children.length == 15) {
        sauma__controls_del.innerHTML = "O";
      }

      if (nvrtcl.children.length == 16) {
        sauma__controls_del.innerHTML = "P";
      }

      if (nvrtcl.children.length == 17) {
        sauma__controls_del.innerHTML = "Q";
      }

      if (nvrtcl.children.length == 18) {
        sauma__controls_del.innerHTML = "R";
      }

      if (nvrtcl.children.length == 19) {
        sauma__controls_del.innerHTML = "S";
      }

      if (nvrtcl.children.length == 20) {
        sauma__controls_del.innerHTML = "T";
      }
    } 
    else {
        newrow_horizontal = document.createElement("div");
        newrow_horizontal.classList.add("newrow_horizontal");
        document.querySelector("#box-wrapper > main").prepend(newrow_horizontal);
        newrow_horizontal.append(sauma);
        sauma__controls_del.innerHTML = "A";
    }


    document.querySelector(".drawarea__controls_four-vaaka").prepend(newDiv__comment);

    sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));

    return sauma;
  }

  function luo__sauma_vertical(item, aukko,tas_li,modcount) {
    s_c+=1;

    var sauma__interval_horis_contal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
    var nhs_crtl = document.querySelector(".newrow_vertical");
    var sauma__interval_vertical;
   

    if(document.getElementById("settings__sauma_pysty").checked) {
       sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
    }
    if(document.getElementById("settings__sauma_vaaka").checked) {
       sauma__interval_vertical = document.querySelector("#settings__sauma_interval_y").value;
    }


    const widthBox = document.querySelector('#box_w').value;
    const w = document.querySelector('#box_w').value;
    const between_sauma = sauma__interval_vertical / widthBox;
    const canvasWidth = document.querySelector('.canvas').offsetWidth;

    const sauma = document.createElement("div");
    const sauma__control = document.createElement("input");
    const sauma__control_down = document.createElement("b");

    const sauma__controls = document.createElement("div");
    const sauma__controls_del = document.createElement("div");
    const sauma__controls_type = document.createElement("input");

    const newDiv__comment = document.createElement("li");
    const newDiv__comment_del = document.createElement("i");
    const newrow_horis_contal = document.createElement("div");

    let id = "sauma" + Math.random().toString(16).slice(2);

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
    newrow_horis_contal.classList.add("newrow_vertical");
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
    sauma__control.value = "0";
    sauma__controls.innerHTML = "";
    newDiv__comment.innerHTML = "Sauma";
    newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
    sauma__control_down.innerHTML = "0";
    newDiv__comment.innerHTML="Sauma #" + s_c;
    newDiv__comment_del.innerHTML = "";
    sauma__control.value = sauma__interval_vertical;
    sauma__control.setAttribute("data-from", parseFloat(sauma__interval_vertical));
    sauma__control_down.innerHTML = parseFloat(sauma__interval_vertical)-10;


    sauma__controls_type.value = "ST1";
    sauma__controls_type.type = "text";


    newDiv__comment.setAttribute("name", id);
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    newDiv__comment_del.setAttribute("name", id);


    sauma__control.setAttribute("name", id);
    sauma__controls.setAttribute("name", id);
    sauma__controls_del.setAttribute("name", id);
    sauma__controls_type.setAttribute("name", id);
    sauma.setAttribute("id", id);
    sauma.setAttribute("name", id);
    sauma__control_down.setAttribute("name", id);
    sauma__control.setAttribute("mousedown","sauma__move(this);");
    sauma__controls_del.setAttribute("onclick","sauma__del(this);");
    sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
    // sauma__control.setAttribute("onclick", "document.querySelector("+id+").remove();this.parentElement.style.opacity = '0';");
    sauma.setAttribute("onclick","");


    

    sauma.style.position = 'absolute';
    if(document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_three").checked && document.getElementById("saumoitus__sauma_two").checked) {
      console.log("P/V, TASOITUS, PVA");

      leveys = tas_li;

      // sauma__control.style.left = s_c * parseFloat(leveys/5) + "px";
      sauma.style.left = modcount*parseFloat(leveys/5) + "px";
      sauma__controls_del.style.marginLeft ="0px";
      sauma__control_down.style.left ="0px";

      //sauma__control.style.width = "0px";
      sauma__control_down.style.width = "0px";
      sauma.style.width =  "0px";
      // sauma__control.style.top = '-50%';
      
      sauma__control.value=leveys;
      sauma__control_down.innerHTML=leveys-10;
      sauma__control.setAttribute("data-from", parseFloat(leveys));



    }
    else if(document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_one").checked || document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_three").checked) {
      console.log("P/V, TASOITUS, AY");
      // saumcount = Math.ceil(w/sauma__interval_vertical);
      leveys = parseFloat(tas_li);
      // // sauma__control.style.left = s_c * parseFloat(leveys/5) + "px";
      // sauma.style.left = s_c * parseFloat(leveys/5) + "px";
      // sauma__controls_del.style.marginLeft ="0px";
      // sauma__control_down.style.left ="0px";

      // //sauma__control.style.width = "0px";
      // sauma__control_down.style.width = "0px";
      // sauma.style.width =  "0px";
      // // sauma__control.style.top = '-50%';
      
      // sauma__control.value=leveys;
      // sauma__control_down.innerHTML=leveys-10;
      // sauma__control.setAttribute("data-from", parseFloat(leveys));

      sauma.style.left = modcount*parseFloat(leveys/5) + "px";
      sauma__controls_del.style.marginLeft ="0px";
      sauma__control_down.style.left ="0px";

      sauma__control_down.style.width = "0px";
      sauma.style.width =  "0px";
      
      sauma__control.value=leveys;
      sauma__control_down.innerHTML=leveys-10;
      sauma__control.setAttribute("data-from", parseFloat(leveys));

    }

    else if(document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_two").checked) {
      console.log("P/V, TASOITUS, PA");
      saumcount = Math.ceil(parseFloat(aukko)/sauma__interval_vertical);
      leveys = parseFloat(tas_li);
      // sauma__control.style.left = s_c * parseFloat(leveys/5) + "px";
      sauma.style.left = modcount * parseFloat(leveys/5) + "px";
      sauma__controls_del.style.marginLeft ="0px";
      sauma__control_down.style.left ="0px";

      //sauma__control.style.width = "0px";
      sauma__control_down.style.width = "0px";
      sauma.style.width =  "0px";
      // sauma__control.style.top = '-50%';
      
      sauma__control.value=leveys;
      sauma__control_down.innerHTML=leveys-10;
      sauma__control.setAttribute("data-from", parseFloat(leveys));

    }
    
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_one").checked || document.getElementById("settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_one").checked) {
      if (item) {
        sauma.style.left = item;
          sauma__control.style.transform = 'translate(-100%)';
          if (last) {
              sauma__control.value = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
              sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));
              dataset.dateOfBirth
              sauma__control.dataset.from = parseFloat(sauma__control.value);
          } else {
              sauma__control.value = parseInt((item/ 100) * widthBox);
              sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));
              sauma__control.dataset.from =  parseInt((item/ 100) * widthBox);
          }
      } else {
        sauma.style.left = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
        //sauma__control.style.width = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
        sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));
        sauma__control.dataset.from =  parseInt((item/ 100) * widthBox);
      }
      //sauma__control.style.width = between_sauma * canvasWidth + 'px';
      sauma__control.style.left = (-1) * between_sauma * canvasWidth + 'px';
      sauma__control_down.style.left = (-1) * between_sauma * canvasWidth + 'px';
      sauma__control_down.style.width = between_sauma * canvasWidth + 'px';
    }
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_two").checked || document.getElementById("settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_two").checked ) {
      if (item) {
        sauma.style.left = item;
          sauma__control.style.transform = 'translate(-100%)';
          if (last) {
              sauma__control.value = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox));
          } else {
              sauma__control.value = parseInt((item/ 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item/ 100) * widthBox));
          }
      }
      else {
        sauma.style.left = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
        //sauma__control.style.width = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
      }
      //sauma__control.style.width = between_sauma * canvasWidth + 'px';
      sauma__control.style.left = (-1) * between_sauma * canvasWidth + 'px';
      sauma__control_down.style.left = (-1) * between_sauma * canvasWidth + 'px';
      sauma__control_down.style.width = between_sauma * canvasWidth + 'px';
    }
    else if(document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_three").checked  || document.getElementById("settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_three").checked) {
      if (item) {
        sauma.style.left = item;
          sauma__control.style.transform = 'translate(-100%)';
          if (last) {
              sauma__control.value = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox));
          } else {
              sauma__control.value = parseInt((item/ 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item/ 100) * widthBox));
          }
      } else {
        sauma.style.left = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
        //sauma__control.style.width = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
      }
    //sauma__control.style.width = between_sauma * canvasWidth + 'px';
    sauma__control.style.left = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.left = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.width = between_sauma * canvasWidth + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_one").checked) {
      if (item) {
        sauma.style.right = item;
          sauma__control.style.transform = 'translate(-100%)';
          if (last) {
              sauma__control.value = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox));
          } else {
              sauma__control.value = parseInt((item/ 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item/ 100) * widthBox));
          }
      } else {
        sauma.style.right = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
        //sauma__control.style.width = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
      }
    //sauma__control.style.width = between_sauma * canvasWidth + 'px';
    sauma__control.style.right = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.right = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.width = between_sauma * canvasWidth + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_two").checked) {
      if (item) {
        sauma.style.right = item;
          sauma__control.style.transform = 'translate(-100%)';
          if (last) {
              sauma__control.value = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
               sauma__control.setAttribute("data-from", parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox));
          } else {
              sauma__control.value = parseInt((item/ 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item/ 100) * widthBox));
          }
      } else {
        sauma.style.right = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
        //sauma__control.style.width = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
      }
    //sauma__control.style.width = between_sauma * canvasWidth + 'px';
    sauma__control.style.right = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.right = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.width = between_sauma * canvasWidth + 'px';
    }
    else if(document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_three").checked) {
      if (item) {
        sauma.style.right = item;
          sauma__control.style.transform = 'translate(-100%)';
          if (last) {
              sauma__control.value = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
               sauma__control.setAttribute("data-from", parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox));
          } else {
              sauma__control.value = parseInt((item/ 100) * widthBox);
              sauma__control.setAttribute("data-from", parseInt((item/ 100) * widthBox));
          }
      } else {
        sauma.style.right = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
        //sauma__control.style.width = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
      }
    //sauma__control.style.width = between_sauma * canvasWidth + 'px';
    sauma__control.style.right = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.right = (-1) * between_sauma * canvasWidth + 'px';
    sauma__control_down.style.width = between_sauma * canvasWidth + 'px';
    }

    else {
      alert("Nyt on joku perseillään. Ota yhteyttä Koodariin");
    }



    document.querySelector(".drawarea__controls_four-pysty").prepend(newDiv__comment);

    return sauma;
  }

  function luo__sauma_vertical_aukoitus(aukko) {
    if(aukko) {
      s_c+=1;
      var sauma__interval_horis_contal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
      var nhs_crtl = document.querySelector(".newrow_vertical");

      const sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
      const widthBox = document.querySelector('#box_w').value;
      const w = document.querySelector('#box_w').value;
      const between_sauma = sauma__interval_vertical / widthBox;
      const canvasWidth = document.querySelector('.canvas').offsetWidth;

      const sauma = document.createElement("div");
      const sauma__control = document.createElement("input");
      const sauma__control_down = document.createElement("b");

      const sauma__controls = document.createElement("div");
      const sauma__controls_del = document.createElement("div");
      const sauma__controls_type = document.createElement("input");

      const newDiv__comment = document.createElement("li");
      const newDiv__comment_del = document.createElement("i");
      const newrow_horis_contal = document.createElement("div");

      let id = "v_aukoitus" + Math.random().toString(16).slice(2);

      sauma.classList.add("sauma");
      sauma.classList.add("sauma__vertical");

      sauma__control.classList.add("sauma__vertical_ctrl");
      sauma__control.classList.add("sauma__vertical_ctrl-lefted");
      sauma__control.classList.add("sauma__control");
      sauma__controls_type.classList.add("lineinput");
      sauma__control_down.classList.add("sauma__vertical_ctrldown");
      newDiv__comment_del.classList.add("newDiv__comment_del");
      sauma__controls.classList.add("sauma__controls");
      sauma__controls_del.classList.add("sauma__controls_del");
      newrow_horis_contal.classList.add("newrow_vertical");
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
      sauma__control.value = "0";
      sauma__controls.innerHTML = "";
      newDiv__comment.innerHTML = "Sauma";
      newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
      sauma__control_down.innerHTML = "0";
      newDiv__comment.innerHTML="Sauma #" + s_c;
      newDiv__comment_del.innerHTML = "";
      // sauma__control.value = sauma__interval_vertical;
      // sauma__control_down.innerHTML = parseFloat(sauma__interval_vertical)-10;


      sauma__controls_type.value = "ST1";
      sauma__controls_type.type = "text";


      newDiv__comment.setAttribute("name", id);
      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
      newDiv__comment_del.setAttribute("name", id);

      sauma__control.setAttribute("name", id);
      sauma__controls.setAttribute("name", id);
      sauma__controls_del.setAttribute("name", id);
      sauma__controls_type.setAttribute("name", id);
      sauma.setAttribute("id", id);
      sauma.setAttribute("name", id);
      sauma__control_down.setAttribute("name", id);
      sauma__control.setAttribute("mousedown","sauma__move(this);");
      sauma__controls_del.setAttribute("onclick","sauma__del(this);");
      sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
      // sauma__control.setAttribute("onclick", "document.querySelector("+id+").remove();this.parentElement.style.opacity = '0';");
      sauma.setAttribute("onclick","");





      // sauma__controls.addEventListener('touchmove', (e) => {
      //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control"), "h");
      // });

      // sauma.addEventListener('touchmove', (e) => {
      //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control"), "h");
      // });
      sauma.style.position = 'absolute';

      if(document.querySelector("#saumoitus__sauma_two").checked && document.querySelector("#settings__saumahanta-vas").checked && document.querySelector("#settings__sauma_pysty").checked) {
        
        saumacount = Math.trunc(w / sauma__interval_vertical);
        saumacount_ = Math.trunc(w / saumacount);
        last_sauma_size = aukko-saumacount_;
        truesz = last_sauma_size;

        saumcount = Math.trunc(w/sauma__interval_vertical);
        leveys = Math.trunc(w/saumcount);
        
        

        // sauma__control.style.left = s_c * parseFloat(leveys/5) + "px";
        // sauma.style.left = s_c * parseFloat(leveys/5) + "px";
        // sauma__controls_del.style.marginLeft ="0px";
        // sauma__control_down.style.left ="0px";

        // //sauma__control.style.width = "0px";
        // sauma__control_down.style.width = "0px";
        // sauma.style.width =  "0px";
        // sauma__control.style.top = '-50%';

        sauma__control.style.marginLeft = last_sauma_size/5 + "px";
        sauma.style.marginLeft = last_sauma_size/5 + "px";
        // sauma.style.marginLeft = "unset";
        // sauma__controls_del.style.marginLeft ="0px";
        // sauma__control_down.style.marginLeft ="0px";

        // //sauma__control.style.width = "0px";
        // sauma__control_down.style.width = "0px";
        // sauma.style.width =  "0px";
        sauma__control.style.top = '-50%';
        
        sauma__control.value=truesz;
        sauma__control_down.innerHTML=truesz-10;


        
        sauma__control.value=leveys;
        sauma__control_down.innerHTML=leveys-10;
      }
      else if(document.querySelector("#saumoitus__sauma_two").checked && document.querySelector("#settings__saumahanta-oik").checked && document.querySelector("#settings__sauma_pysty").checked) {

        saumacount = Math.trunc(w / sauma__interval_vertical);
        saumacount_ = Math.trunc(w / saumacount);
        last_sauma_size = aukko-saumacount;
        truesz = last_sauma_size;

        
        saumcount = Math.trunc(w/sauma__interval_vertical);
        leveys = Math.trunc(w/saumcount);

        // sauma__control.style.left = s_c * parseFloat(leveys/5) + "px";
        // sauma.style.left = s_c * parseFloat(leveys/5) + "px";
        // sauma__controls_del.style.marginLeft ="0px";
        // sauma__control_down.style.left ="0px";

        // //sauma__control.style.width = "0px";
        // sauma__control_down.style.width = "0px";
        // sauma.style.width =  "0px";
        // sauma__control.style.top = '-50%';

        sauma__control.style.marginLeft = last_sauma_size/5 + "px";
        sauma.style.marginLeft = last_sauma_size/5 + "px";
        sauma.style.marginLeft = "unset";
        // sauma__controls_del.style.marginLeft ="0px";
        // sauma__control_down.style.marginLeft ="0px";

        // //sauma__control.style.width = "0px";
        // sauma__control_down.style.width = "0px";
        // sauma.style.width =  "0px";
        // sauma__control.style.top = '-50%';
        
        sauma__control.value=truesz;
        sauma__control_down.innerHTML=truesz-10;


        
        sauma__control.value=leveys;
        sauma__control_down.innerHTML=leveys-10;
      }
      else {
        // if (item) {
        //     sauma.style.left = item;
        //       sauma__control.style.transform = 'translate(-100%)';
        //       if (last) {
        //           sauma__control.value = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
        //       } else {
        //           sauma__control.value = parseInt((item/ 100) * widthBox);
        //       }
        //   } else {
            sauma.style.left = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
            //sauma__control.style.width = (s_c * parseFloat(sauma__interval_vertical/5)) + 'px';
          // }
        //sauma__control.style.width = between_sauma * canvasWidth + 'px';
        sauma__control.style.left = (-1) * between_sauma * canvasWidth + 'px';
        sauma__control_down.style.left = (-1) * between_sauma * canvasWidth + 'px';
        sauma__control_down.style.width = between_sauma * canvasWidth + 'px';
      }

     

      document.querySelector(".drawarea__controls_four-pysty").prepend(newDiv__comment);


      return sauma;
     }
  }

  function make_lastsauma_horizontal(aukko) {
    s_h+=1;

    if(document.getElementById("settings__sauma_pysty").checked) {
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    }
    else if(document.getElementById("settings__sauma_vaaka").checked) {
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_x").value;
    }

    // const sauma__interval_horizontal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
    // const sauma__interval_horizontal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
    const sauma = document.createElement("div");
    const sauma__control = document.createElement("input");
    const sauma__control_down = document.createElement("b");
    const sauma__controls = document.createElement("div");
    const sauma__controls_del = document.createElement("div");
    const sauma__controls_type = document.createElement("input");

    let saumas = document.querySelectorAll(".sauma__horizontal");
    let ctrl = document.querySelectorAll(".sauma__horizontal_ctrl");



    var h = document.querySelector("#box_h").value;
    var w = document.querySelector("#box_w").value;
    var id = "lastsauma_horizontal" + Math.random().toString(16).slice(2);
    var newrow_vertical = document.createElement("div");
    var newDiv__comment = document.createElement("li");
    var newDiv__comment_del = document.createElement("i");
    var nvrtcl = document.querySelector(".newrow_horizontal");

    saumacount = Math.trunc(h / sauma__interval_horizontal) * sauma__interval_horizontal;
    last_sauma_size = h-saumacount;
    truesz = last_sauma_size;

    summ = 0;
    ctrl.forEach(function(item) {
      summ+=parseFloat(item.innerText);
    });



    sauma.classList.add("sauma");
    sauma.classList.add("sauma__horizontal");
    sauma.classList.add("sauma__horizontal_last");
    sauma__control.classList.add("sauma__horizontal_ctrl");
    sauma__control.classList.add("sauma__control");
    sauma__control.classList.add("sauma__horizontal_ctrl-righted");
    sauma__controls_type.classList.add("lineinput");
    sauma__controls_type.classList.add("sauma__controls_type");
    sauma__controls.classList.add("sauma__controls");
    sauma__controls.classList.add("sauma__controls-left");
    sauma__control_down.classList.add("sauma__horizontal_ctrldown");
    sauma__controls_del.classList.add("sauma__controls_del");

    // newrow_horizontal.classList.add("newrow_horizontal");

    sauma__control.classList.add(id);
    sauma__controls.classList.add(id);
    sauma__controls_del.classList.add(id);
    sauma__controls_type.classList.add(id);
    newDiv__comment.classList.add(id);
    sauma.classList.add(id);
    sauma__control_down.classList.add(id);

    sauma__control.setAttribute("name", id);
    sauma__control_down.setAttribute("name", id);
    sauma__controls.setAttribute("name", id);
    sauma__controls_del.setAttribute("name", id);
    sauma__controls_type.setAttribute("name", id);
    newDiv__comment.setAttribute("name", id);
    newDiv__comment_del.setAttribute("name", id);

    sauma.setAttribute("id", id);

    sauma__control.setAttribute("onclick", "obj = this.getAttribute('name');this.parentElement.remove();document.querySelector('.'+obj).remove();");
    sauma__controls_del.setAttribute("onclick","sauma__del(this);");
    sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
    sauma.setAttribute("onclick", "");
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    sauma__control.setAttribute("onclick", "sauma__del(this);");

    sauma.innerHTML = "";
    sauma__control.value = "0";
    sauma__control.value=truesz;
    sauma__control_down.innerHTML=parseFloat(truesz)-10;
    sauma__controls.innerHTML = "";
    sauma__controls_del.innerHTML = "";
    newDiv__comment.innerHTML = "Sauma";
    newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";

    sauma__controls_type.type = "text";
    sauma__controls_type.value = "ST5";
    if(document.querySelector("#settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-vas").checked) {

      //sauma__control.style.bottom = h/5 + "px";
      sauma.style.bottom = h/5 + "px";
      sauma__control.style.height = truesz/5 + "px";
      sauma__control_down.style.height = truesz/5 + "px";
    }
    // else if(document.querySelector("#settings__saumahanta-vas").checked) {
    //     //sauma__control.style.bottom = last_sauma_size/5 + "px";
    //     sauma.style.bottom = last_sauma_size/5 + "px";
    //     sauma__controls_del.style.marginBottom ="0px";
    //     //sauma__control_down.style.bottom ="0px";

        
    //     sauma__control.value=truesz;
    //     sauma__control_down.innerHTML=truesz-10;

    //     //console.log("debug");

    //     let ctrl_ = document.querySelectorAll(".sauma");

    //     ctrl_.forEach(function(item_) {
    //       item_.style.marginBottom=parseFloat(last_sauma_size/5)+"px";
    //     });
    // }

    else if(document.querySelector("#settings__saumahanta-tasoitus").checked) {
      sauma.style.bottom = h/5 + "px";
      sauma__control.style.height = truesz/5 + "px";
      sauma__control_down.style.height = truesz/5 + "px";
      // //sauma__control.style.bottom = last_sauma_size/5 + "px";
      // if(aukko) {
      //   sauma.style.bottom = (parseFloat(aukko.style.height)) + "px";
      // }
      // else if(canvas) {
      //   sauma.style.bottom = (-1 + parseFloat(canvas.style.height)) + "px";
      // }
      
      // sauma__controls_del.style.marginBottom ="0px";
      // //sauma__control_down.style.bottom ="0px";

      
      // sauma__control.value=parseFloat(h)-summ;
      // sauma__control_down.innerHTML=parseFloat(h)-summ-10;


    // let ctrl_ = document.querySelectorAll(".sauma");

    // ctrl_.forEach(function(item_) {
    //   item_.style.marginBottom=parseFloat(last_sauma_size/5)+"px";
    // });
    }
    

    if(aukko && (document.querySelector("#saumoitus__sauma_three").checked)) {
      let ctrl_ = aukko.querySelectorAll(".sauma__horizontal_ctrl");
      summ=0;
      ctrl_.forEach(function(item) {
        summ+=parseFloat(item.innerText);
      });

      xx = aukko.title.split(",");

      truesz = parseFloat(aukko.style.height)*5;
      sauma__control.value=truesz;
      sauma__control_down.innerHTML=parseFloat(truesz)-10;

      
      if(document.querySelector("#settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
          sauma.style.bottom = truesz/5 + "px";
          //sauma__control.style.bottom = h/5 + "px";
          sauma__control.style.height = truesz/5 + "px";
          sauma__control_down.style.height = truesz/5 + "px";
        }
      else if(document.querySelector("#settings__saumahanta-vas").checked) {
            //sauma__control.style.bottom = last_sauma_size/5 + "px";
        sauma__controls_del.style.marginBottom ="0px";
        //sauma__control_down.style.bottom ="0px";

        sauma.style.bottom = truesz/5 + "px";
      }

    }

    
    


    if (typeof(nvrtcl) != 'undefined' && nvrtcl != null) {
      nvrtcl.prepend(sauma);
      sauma__controls_del.innerHTML = nvrtcl.children.length;

      if (nvrtcl.children.length == 2) {
        sauma__controls_del.innerHTML = "B";
      }

      if (nvrtcl.children.length == 3) {
        sauma__controls_del.innerHTML = "C";
      }

      if (nvrtcl.children.length == 4) {
        sauma__controls_del.innerHTML = "D";
      }

      if (nvrtcl.children.length == 5) {
        sauma__controls_del.innerHTML = "E";
      }

      if (nvrtcl.children.length == 6) {
        sauma__controls_del.innerHTML = "F";
      }

      if (nvrtcl.children.length == 7) {
        sauma__controls_del.innerHTML = "G";
      }

      if (nvrtcl.children.length == 8) {
        sauma__controls_del.innerHTML = "H";
      }

      if (nvrtcl.children.length == 9) {
        sauma__controls_del.innerHTML = "I";
      }

      if (nvrtcl.children.length == 10) {
        sauma__controls_del.innerHTML = "J";
      }

      if (nvrtcl.children.length == 11) {
        sauma__controls_del.innerHTML = "K";
      }

      if (nvrtcl.children.length == 12) {
        sauma__controls_del.innerHTML = "L";
      }

      if (nvrtcl.children.length == 13) {
        sauma__controls_del.innerHTML = "M";
      }

      if (nvrtcl.children.length == 14) {
        sauma__controls_del.innerHTML = "N";
      }

      if (nvrtcl.children.length == 15) {
        sauma__controls_del.innerHTML = "O";
      }

      if (nvrtcl.children.length == 16) {
        sauma__controls_del.innerHTML = "P";
      }

      if (nvrtcl.children.length == 17) {
        sauma__controls_del.innerHTML = "Q";
      }

      if (nvrtcl.children.length == 18) {
        sauma__controls_del.innerHTML = "R";
      }

      if (nvrtcl.children.length == 19) {
        sauma__controls_del.innerHTML = "S";
      }

      if (nvrtcl.children.length == 20) {
        sauma__controls_del.innerHTML = "T";
      }
    } else {
        // newrow_horizontal = document.createElement("div");
        // newrow_horizontal.classList.add("newrow_horizontal");
        // document.querySelector("#box-wrapper > main").prepend(newrow_horizontal);
        // newrow_horizontal.append(sauma);
        sauma__controls_del.innerHTML = "A";
    }

    // sauma__controls.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control"), "v");
    //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control_down"), "v");
     
     
    //   sauma__control_down.innerHTML = parseFloat(sauma.querySelector(".sauma__control_down").innerHTML)-10;
    // });

    // sauma.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control"), "v");
    //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control_down"), "v");
     
     
    //   sauma__control_down.innerHTML = parseFloat(sauma.querySelector(".sauma__control_down").innerHTML)-10;
    // });

    // sauma__control.appendChild(sauma__controls_del);
    // sauma__control.appendChild(sauma__controls_type);
    // newDiv__comment.appendChild(newDiv__comment_del);

    document.querySelector(".drawarea__controls_four-vaaka").prepend(newDiv__comment);
    sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));


    // saumaCtrlsListV.push(sauma__control);

    if(truesz>11) {
      return sauma;
    }
    else {
      console.log("Not ok sauma");
      sauma.remove();
    }

  }
 
  function make_lastsauma_vertical(aukko) {
    s_c+=1;


    let saumas = document.querySelectorAll(".sauma__vertical");
    var h = document.querySelector("#box_h").value;
    var w = document.querySelector("#box_w").value;

    let ctrl = document.querySelectorAll(".sauma__vertical_ctrl");

    summ = 0;
    ctrl.forEach(function(item) {
      summ+=parseFloat(item.value);
    });


    const sauma = document.createElement("div");
    const sauma__control = document.createElement("input");
    const sauma__control_down = document.createElement("b");

    const sauma__controls = document.createElement("div");
    const sauma__controls_del = document.createElement("div");
    const sauma__controls_type = document.createElement("input");

    const newDiv__comment = document.createElement("li");
    const newDiv__comment_del = document.createElement("i");
    const newrow_vertical = document.createElement("div");

    sauma.className = "sauma";
    sauma.classList.add("sauma__vertical");
    sauma.classList.add("sauma__vertical_hanta");
    sauma.classList.add("make_lastsauma_vertical");
    // sauma.innerHTML = "";
    let id = "lastsauma_vertical" + Math.random().toString(16).slice(2);

    // sauma.style.marginLeft = (parseFloat(sauma__interval_vertical) - 1.5) + 'px';
   

    // sauma__control.value = "0";
    sauma__controls.innerHTML = "";

    sauma__control.classList.add("sauma__vertical_ctrl");
    sauma__control.classList.add("make_lastsauma_vertical");
    sauma__control.classList.add("sauma__control");
    sauma__control.classList.add("sauma__vertical_ctrl-lefted")
    sauma__control.classList.add(id);
    sauma__control.setAttribute("name", id);

    // if (saumaCtrlsList.length >= 1) {
    //   sauma__control.style.top = +saumaCtrlsList[saumaCtrlsList.length - 1].style.top.replace('%', '') + 5 + '%';
    // } else if (saumaCtrlsList.length == 0) {
    //   sauma__control.style.top = '-50%';
    // }

    // truesz = parseFloat(w)-summ;
    
    if(aukko && document.querySelector("#saumoitus__sauma_two").checked ) {
        if(aukko.style.width > 10) {
          saumas = aukko.querySelectorAll(".sauma__vertical");
          ctrl = aukko.querySelectorAll(".sauma__vertical_ctrl");
          saumacount = Math.trunc((parseFloat(aukko.style.width)*5) / summ) * summ;
          last_sauma_size = (parseFloat(aukko.style.width)*5)-saumacount;
          truesz = last_sauma_size;

          if(document.querySelector("#settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
            // sauma__control.style.left = summ/5 + "px";
            sauma.style.left = ((parseFloat(aukko.style.width)*5)-15)/5 + "px";
            // sauma__controls_del.style.marginLeft =  w-last_sauma_size/5 + "px";
            // sauma__control_down.style.left =  w-last_sauma_size/5 + "px";

            //sauma__control.style.width = truesz/5 + "px";
            sauma__control_down.style.width = truesz/5 + "px";
            sauma__control_down.style.left = (-1) * (truesz/5) + "px";
            sauma__controls.style.left = (-1) * (truesz/5) + "px";
            // sauma.style.width = truesz/5 + "px";
            // sauma__control.style.top = '-50%';
            sauma__controls_del.style.float = 'right';
            
            sauma__control.value=truesz;
            sauma__control_down.innerHTML=truesz-10;
          }
          else if(document.querySelector("#settings__saumahanta-vas").checked) {
            // sauma.style.right = (w-15)/5 + "px";
            sauma.style.left = "0";

            // sauma__control.style.left = last_sauma_size/5 + "px";
            // sauma.style.left = last_sauma_size/5 + "px";
            // sauma__controls_del.style.marginLeft ="0px";
            // sauma__control_down.style.left ="0px";

            //sauma__control.style.width = truesz/5 + "px";
            sauma__control_down.style.width = truesz/5 + "px";
            sauma.style.width = truesz/5 + "px";
            // sauma__control.style.top = '-50%';
            
            sauma__control.value=truesz;
            sauma__control_down.innerHTML=truesz-10;


            let ctrl_ = document.querySelectorAll(".sauma__vertical");

            ctrl_.forEach(function(item_) {
              item_.style.marginLeft=parseFloat(last_sauma_size/5)+"px";
            });
        }
      }
    }
    
    else if(aukko && document.querySelector("#saumoitus__sauma_three").checked) {
      let _ctrl = document.querySelectorAll(".sauma__vertical_ctrl");

      summ = 0;
      _ctrl.forEach(function(item) {
        summ+=parseFloat(item.innerText);
      });
      if(document.querySelector("#settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
        saumacount = Math.trunc((parseFloat(w-summ)*5) / summ) * summ;
        last_sauma_size = (parseFloat(w-summ)*5)-saumacount;
        truesz = (parseFloat(w-summ));
        // sauma__control.style.left = summ/5 + "px";
        sauma.style.left = parseFloat(w)/5 + "px";
        // sauma.style.left = ((parseFloat(w-summ))-15)/5 + "px";
        // sauma__controls_del.style.marginLeft =  w-last_sauma_size/5 + "px";
        // sauma__control_down.style.left =  w-last_sauma_size/5 + "px";

        //sauma__control.style.width = truesz/5 + "px";
        sauma__control_down.style.width = truesz/5 + "px";
        sauma__control_down.style.left = (-1) * (truesz/5) + "px";
        sauma__controls.style.left = (-1) * (truesz/5) + "px";
        // sauma.style.width = truesz/5 + "px";
        // sauma__control.style.top = '-50%';
        sauma__controls_del.style.float = 'right';
        
        sauma__control.value=truesz;
        sauma__control_down.innerHTML=truesz-10;
      }
     else if(document.querySelector("#settings__saumahanta-vas").checked) {
          saumacount = Math.trunc((parseFloat(w-summ)*5) / summ) * summ;
          last_sauma_size = (parseFloat(w-summ)*5)-saumacount;
          truesz = (parseFloat(w-summ));
          // sauma__control.style.left = summ/5 + "px";
          sauma.style.right = parseFloat(w)/5 + "px";
          // sauma.style.left = ((parseFloat(w-summ))-15)/5 + "px";
          // sauma__controls_del.style.marginLeft =  w-last_sauma_size/5 + "px";
          // sauma__control_down.style.left =  w-last_sauma_size/5 + "px";

          //sauma__control.style.width = truesz/5 + "px";
          sauma__control_down.style.width = truesz/5 + "px";
          sauma__control_down.style.right = (-1) * (truesz/5) + "px";
          sauma__controls.style.right = (-1) * (truesz/5) + "px";
          // sauma.style.width = truesz/5 + "px";
          // sauma__control.style.top = '-50%';
          sauma__controls_del.style.float = 'right';
          sauma__controls.style.left = '0';
          
          sauma__control.value=truesz;
          sauma__control_down.innerHTML=truesz-10;

          let ctrl_ = document.querySelectorAll(".sauma__vertical");

          ctrl_.forEach(function(item_) {
            item_.style.marginRught=parseFloat(last_sauma_size/5)+"px";
          });
      }
    }

    else {
      saumacount = Math.trunc((parseFloat(w-summ)*5) / summ) * summ;
      last_sauma_size = (parseFloat(w-summ)*5)-saumacount;
      truesz = (parseFloat(w-summ));
      if(document.querySelector("#settings__saumahanta-oik").checked && document.querySelector("#saumoitus__sauma_one").checked || document.querySelector("#settings__saumahanta-tasoitus").checked && document.querySelector("#saumoitus__sauma_one").checked || document.querySelector("#settings__saumahanta-tasoitus").checked && document.querySelector("#saumoitus__sauma_three").checked) {
      // sauma__control.style.left = summ/5 + "px";
        sauma.style.left = ((parseFloat(w)))/5 + "px";
        // sauma.style.left = ((parseFloat(w-summ))-15)/5 + "px";
        // sauma__controls_del.style.marginLeft =  w-last_sauma_size/5 + "px";
        // sauma__control_down.style.left =  w-last_sauma_size/5 + "px";

        //sauma__control.style.width = truesz/5 + "px";
        sauma__control_down.style.width = truesz/5 + "px";
        sauma__control_down.style.left = (-1) * (truesz/5) + "px";
        sauma__controls.style.left = (-1) * (truesz/5) + "px";
        // sauma.style.width = truesz/5 + "px";
        // sauma__control.style.top = '-50%';
        sauma__controls_del.style.float = 'right';
        
        sauma__control.value=truesz;
        sauma__control_down.innerHTML=truesz-10;
      }
      else if(document.querySelector("#settings__saumahanta-vas").checked && document.querySelector("#saumoitus__sauma_one").checked) {
        truesz = (parseFloat(w-summ));
        sauma.style.right = (w-10)/5 + "px";
        sauma.style.right = ((parseFloat(w-summ))-10)/5 + "px";
        sauma.style.left = "unset";

        // sauma__control.style.left = last_sauma_size/5 + "px";
        // sauma.style.left = last_sauma_size/5 + "px";
        // sauma__controls_del.style.marginLeft ="0px";
        // sauma__control_down.style.left ="0px";

        //sauma__control.style.width = truesz/5 + "px";
        sauma__control_down.style.width = truesz/5 + "px";
        // sauma.style.width = truesz/5 + "px";
        // sauma__control.style.top = '-50%';
        
        sauma__control.value=truesz;
        sauma__control_down.innerHTML=truesz-10;


        // sauma.style.left = "0px";

        // sauma.style.left = ((parseFloat(w-summ))-15)/5 + "px";
        // sauma__controls_del.style.marginLeft =  w-last_sauma_size/5 + "px";
        // sauma__control_down.style.left =  w-last_sauma_size/5 + "px";

        // //sauma__control.style.width = truesz/5 + "px";
        // sauma__control_down.style.width = truesz/5 + "px";
        // sauma__control_down.style.left = "0px";
        // sauma__controls.style.left = "0px";
        // // sauma.style.width = truesz/5 + "px";
        // // sauma__control.style.top = '-50%';
        // sauma__controls_del.style.float = 'left';
        
        // sauma__control.value=truesz;
        // sauma__control_down.innerHTML=truesz-10;



        
      }
      else if(document.querySelector("#settings__saumahanta-oik").checked && document.querySelector("#saumoitus__sauma_two").checked || document.querySelector("#settings__saumahanta-tasoitus").checked && document.querySelector("#saumoitus__sauma_two").checked) {

        let ctrl = document.querySelectorAll(".sauma__vertical_ctrl");
        summ = 0;
            ctrl.forEach(function(item) {
              summ+=parseFloat(item.innerText);
            });

        saumacount = Math.trunc((parseFloat(w-summ)*5) / summ) * summ;
        last_sauma_size = (parseFloat(w-summ)*5)-saumacount;
        truesz = (parseFloat(w-summ));
        
        sauma.style.left = "100%";
        
        // truesz = last_sauma_size;

        // sauma.style.left = ((parseFloat(w-summ))-15)/5 + "px";
        // sauma__controls_del.style.marginLeft =  w-last_sauma_size/5 + "px";
        // sauma__control_down.style.left =  w-last_sauma_size/5 + "px";

        //sauma__control.style.width = truesz/5 + "px";
        sauma__control_down.style.width = truesz/5 + "px";
        sauma__control_down.style.left = (-1) * (truesz/5) + "px";
        sauma__controls.style.left = (-1) * (truesz/5) + "px";
        // sauma.style.width = truesz/5 + "px";
        // sauma__control.style.top = '-50%';
        sauma__controls_del.style.float = 'right';
        
        sauma__control.value=truesz;
        sauma__control_down.innerHTML=truesz-10;

        
      }
    }

    sauma__control_down.classList.add("sauma__control_down");
    sauma__control_down.classList.add("sauma__control_down_added");
    
    

    // saumaCtrlsList.push(sauma__control);
    sauma__control_down.classList.add(id);
    sauma.classList.add(id);
    sauma__controls.classList.add(id);
    sauma__controls.setAttribute("name", id);
    sauma__controls_del.classList.add(id);
    sauma__controls_del.setAttribute("name", id);
    sauma__controls_type.classList.add(id);
    sauma__controls_type.setAttribute("name", id);
    sauma__controls_type.classList.add("lineinput");
    sauma__control_down.classList.add("sauma__vertical_ctrldown");
    sauma.setAttribute("id", id);
    newDiv__comment.setAttribute("name", id);
    newDiv__comment.classList.add(id);
    newDiv__comment_del.classList.add("newDiv__comment_del");
    newDiv__comment_del.setAttribute("name", id);
     sauma.setAttribute("name", id);
    sauma__control_down.setAttribute("name", id);
    sauma__controls.classList.add("sauma__controls");
    
    sauma__controls_type.type = "text";
    sauma__controls_type.value = "ST5";
    // sauma__controls_type.setAttribute("onclick", "sauma__change(this);");
    sauma__control.setAttribute("mousedown","sauma__move(this);");
    sauma__controls_del.setAttribute("onclick","sauma__del(this);");
    sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
    sauma__controls_del.classList.add("sauma__controls_del");
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    

    newDiv__comment.innerHTML="Sauma #" + s_c;
    newDiv__comment_del.innerHTML = "";

   

    sauma__control.dataset.from = parseFloat(sauma__control.value);
    newDiv__comment.appendChild(newDiv__comment_del);
    document.querySelector(".drawarea__controls_four-pysty").prepend(newDiv__comment);
    



    var nhzrtl = document.querySelector(".newrow_vertical");

    if (typeof(nhzrtl) != 'undefined' && nhzrtl != null){
      nhzrtl.prepend(sauma);
      // sauma__controls_del.innerHTML = nhzrtl.children.length;
    } else {
      newrow_vertical.classList.add("newrow_vertical");
      document.querySelector("#box-wrapper > main").prepend(newrow_vertical);
      newrow_vertical.prepend(sauma);
      // sauma__controls_del.innerHTML = "A";
    }

    // sauma__controls.addEventListener('touchmove', (e) => {

    //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control"), "h");
    // });

    // sauma.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma, sauma.querySelector(".sauma__controls"), sauma.querySelector(".sauma__control"), "h");

    // });

    return sauma;
  }


  function luo__scord_vertical(sauma,id) {

    const sauma__control = document.createElement("input");
    const sauma__control_down = document.createElement("b");

    const sauma__controls = document.createElement("div");
    const sauma__controls_del = document.createElement("div");
    // const sauma__controls_type = document.createElement("input");



      
      sauma__control.classList.add("sauma__vertical_ctrl");
      sauma__control.classList.add("sauma__vertical_ctrl-lefted");
      sauma__control.classList.add("sauma__control");
      // sauma__controls_type.classList.add("lineinput");
      sauma__control_down.classList.add("sauma__vertical_ctrldown");
      sauma__controls.classList.add("sauma__controls");
      sauma__controls_del.classList.add("sauma__controls_del");
      sauma__control_down.classList.add("sauma__control_down");


      sauma__control_down.classList.add(id);
      sauma__control.classList.add(id);
      sauma__control.setAttribute("type","text");

      sauma__controls.classList.add(id);
      sauma__controls_del.classList.add(id);
      // sauma__controls_type.classList.add(id);

      sauma__controls.innerHTML = "";
      sauma__control_down.innerHTML = "0";
      sauma__control.value = sauma;
      sauma__control_down.innerHTML = parseFloat(sauma)-10;


      // sauma__controls_type.value = "sauma";
      // sauma__controls_type.type = "text";

      sauma__control.setAttribute("name", id);
      sauma__controls.setAttribute("name", id);
      sauma__controls_del.setAttribute("name", id);
      // sauma__controls_type.setAttribute("name", id);

      sauma__control_down.setAttribute("name", id);

      sauma__control.dataset.from = sauma;


      // saumaCtrlsList.push(sauma__control);
      // sauma__control.setAttribute("mousedown","sauma__move(this);");
      sauma__controls_del.setAttribute("onclick","sauma__del(this);");
      sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
      // sauma__control.setAttribute("onclick", "document.querySelector("+id+").remove();this.parentElement.style.opacity = '0';");

      if (document.getElementById("settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
        sauma__control_down.style.width = parseFloat(sauma)/5 + "px";
        sauma__control_down.style.left = (-1) * parseFloat(sauma)/5 + "px";

        //sauma__control.style.width = parseFloat(sauma)/5 + "px";
        sauma__control.style.left = (-1) * parseFloat(sauma)/5 + "px";
      }
      if (document.getElementById("settings__saumahanta-vas").checked) {
        sauma__control_down.style.width = sauma/5 + "px";
        sauma__control_down.style.right = (-1) * sauma/5 + "px";

        //sauma__control.style.width = sauma/5 + "px";
        sauma__control.style.right = (-1) * sauma/5 + "px";
      }
      
      else {
        sauma__control_down.style.width = sauma/5 + "px";
        sauma__control_down.style.left = (-1) * sauma/5 + "px";

        //sauma__control.style.width = sauma/5 + "px";
        sauma__control.style.left = (-1) * sauma/5 + "px";
      }
      sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));
  

    sauma__controls.prepend(sauma__control);
    sauma__controls.append(sauma__control_down);
    sauma__controls.append(sauma__controls_del);
    // sauma__controls.append(sauma__controls_type);

    return sauma__controls;
 
  }

  function luo__scord_horizontal(sauma,id) {

    const sauma__control = document.createElement("input");
    const sauma__control_down = document.createElement("b");

    const sauma__controls = document.createElement("div");
    const sauma__controls_del = document.createElement("div");
    const sauma__controls_type = document.createElement("input");




    sauma__control.classList.add("sauma__horizontal_ctrl");
    sauma__control.classList.add("sauma__horizontal_ctrl-righted");
    sauma__control.classList.add("sauma__control");
    sauma__controls_type.classList.add("lineinput");
    sauma__control_down.classList.add("sauma__horizontal_ctrldown");
    sauma__controls.classList.add("sauma__controls");
    sauma__controls_del.classList.add("sauma__controls_del");
    sauma__control_down.classList.add("sauma__control_down");


    sauma__control_down.classList.add(id);
    sauma__control.classList.add(id);

    sauma__controls.classList.add(id);
    sauma__controls_del.classList.add(id);
    sauma__controls_type.classList.add(id);


    sauma__controls.innerHTML = "";
    sauma__control_down.innerHTML = "0";
    sauma__control.value = sauma;
    sauma__control_down.innerHTML = parseFloat(sauma)-10;


    sauma__controls_type.value = "ST1";
    sauma__controls_type.type = "text";

    sauma__control.setAttribute("name", id);
    sauma__controls.setAttribute("name", id);
    sauma__controls_del.setAttribute("name", id);
    sauma__controls_type.setAttribute("name", id);

    sauma__control_down.setAttribute("name", id);
    sauma__control.setAttribute("mousedown","sauma__move(this);");
    sauma__controls_del.setAttribute("onclick","sauma__del(this);");
    sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
    // sauma__control.setAttribute("onclick", "document.querySelector("+id+").remove();this.parentElement.style.opacity = '0';");

    if (document.getElementById("settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
        sauma__control_down.style.height = sauma/5 + "px";
        sauma__control_down.style.bottom = (-1) * sauma/5 + "px";

        sauma__control.style.height = sauma/5 + "px";
        sauma__control.style.bottom = (-1) * sauma/5 + "px";
      }
      if (document.getElementById("settings__saumahanta-vas").checked) {
        sauma__control_down.style.height = sauma/5 + "px";
        sauma__control_down.style.bottom = (-1) * sauma/5 + "px";

        sauma__control.style.height = sauma/5 + "px";
        sauma__control.style.bottom = (-1) * sauma/5 + "px";
      }
      
      else {
        sauma__control_down.style.height = sauma/5 + "px";
        sauma__control_down.style.bottom = (-1) * sauma/5 + "px";

        sauma__control.style.height = sauma/5 + "px";
        sauma__control.style.bottom = (-1) * sauma/5 + "px";
      }

    sauma__control.setAttribute("data-from", parseFloat(sauma__control.value));
    // }

    sauma__controls.append(sauma__control);
    sauma__controls.append(sauma__control_down);
    sauma__controls.append(sauma__controls_del);
    // sauma__controls.append(sauma__controls_type);

    return sauma__controls;
 
  }



  function cord_pystysaumat__aukotyli() {
    canvas = document.querySelector(".canvas");
    let sauma = canvas.querySelectorAll(".sauma__vertical");

    sauma = canvas.querySelectorAll(".sauma__vertical");
    if(canvas.querySelector(".sauma__vertical")) {
      distance = document.querySelector(".verticalrow_saumat");
      // viim_sauma = make_lastsauma_vertical();
      distance.append(make_lastsauma_vertical());
      sauma = canvas.querySelectorAll(".sauma__vertical");
      // console.log("viim_sauma: "+viim_sauma);
      console.log("distance: "+distance);
    }

    if (document.getElementById("settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
       
        h = document.querySelector("#box_h").value;
        w = document.querySelector("#box_w").value;

        var s_summ = 0;

        

        sauma.forEach(function(j) {
          saumawidth = parseFloat(j.style.left)*5 - s_summ;

          id = j.getAttribute("name");

          j.append(luo__scord_vertical(saumawidth,id));

          s_summ +=saumawidth;


        });
       
    }
   


    else if (document.getElementById("settings__saumahanta-vas").checked) {
      var canvas = document.querySelector(".canvas");
      var h = document.querySelector("#box_h").value;
      var w = document.querySelector("#box_w").value;

      var s_summ = 0;

      sauma.forEach(function(j) {
        saumawidth = parseFloat(j.style.right)*5 - s_summ;

        id = j.getAttribute("name");

        j.append(luo__scord_vertical(saumawidth,id));

        s_summ +=saumawidth;
      });

      
    }
    //else if(document.querySelector("#settings__saumahanta-tasoitus").checked) {}
  }

  function cord_vaakasaumat__aukotyli() {

    var canvas = document.querySelector(".canvas");
    var h = document.querySelector("#box_h").value;
    var w = document.querySelector("#box_w").value;

    var s_summ = 0;

    let sauma = canvas.querySelectorAll(".sauma__horizontal");

    sauma = canvas.querySelectorAll(".sauma__horizontal");
      if(canvas.querySelector(".sauma__horizontal")) {
        distance = sauma[0].parentElement;
        viim_sauma = make_lastsauma_horizontal(distance);
        distance.append(viim_sauma);
        sauma = canvas.querySelectorAll(".sauma__horizontal");
      }

    
    if(document.getElementById("settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked || document.getElementById("settings__saumahanta-vas").checked) {
      sauma.forEach(function(j) {
        saumaheight = parseFloat(j.style.bottom)*5 - s_summ;

        if(j.querySelector(".sauma__horizontal_ctrldown")) {
          j.querySelector(".sauma__horizontal_ctrldown").remove();
        }
        if(j.querySelector(".sauma__horizontal_ctrl")) {
          j.querySelector(".sauma__horizontal_ctrl").remove();
        }
        if(j.querySelector(".sauma__controls")) {
          j.querySelector(".sauma__controls").remove();
        }

        id = j.getAttribute("name");

        j.append(luo__scord_horizontal(saumaheight,id));

        s_summ +=saumaheight;
      });

      

       
    }
    else if (document.getElementById("settings__saumahanta-vas").checked) {
      sauma.forEach(function(j) {
        saumaheight = parseFloat(j.style.bottom)*5 - s_summ;

        if(j.querySelector(".sauma__horizontal_ctrldown")) {
          j.querySelector(".sauma__horizontal_ctrldown").remove();
        }
        if(j.querySelector(".sauma__horizontal_ctrl")) {
          j.querySelector(".sauma__horizontal_ctrl").remove();
        }
        if(j.querySelector(".sauma__controls")) {
          j.querySelector(".sauma__controls").remove();
        }

        id = j.getAttribute("name");

        j.append(luo__scord_horizontal(saumaheight,id));

        s_summ +=saumaheight;
      });

       
    }
    

  }

  function cord_pystysaumat__aukotmukaan() {
    if(document.querySelector(".seina_patka_x")) {
      let seina_patkat = document.querySelectorAll(".seina_patka_x");
      sp_lenght = parseFloat(seina_patkat.length) -1;
      var canvas = document.querySelector(".canvas");
      var h = document.querySelector("#box_h").value;
      var w = document.querySelector("#box_w").value;

      if (document.getElementById("settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
        seina_patkat.forEach(function(i) {

          let sauma = i.querySelectorAll(".sauma__vertical");
          var width = parseFloat(i.style.width)*5;
          var s_summ = 0;

          seinapatka_pituus = parseFloat(i.height)*5;
          seinapatka_nosto = parseFloat(i.bottom)*5;


          if(i.querySelector(".sauma__vertical")) {       
            sauma.forEach(function(j) {           
              saumawidth = parseFloat(j.style.left)*5 - s_summ;

              if(j.querySelector(".sauma__vertical_ctrldown")) {
                j.querySelector(".sauma__vertical_ctrldown").remove();
              }
              if(j.querySelector(".sauma__vertical_ctrl")) {
                j.querySelector(".sauma__vertical_ctrl").remove();
              }
              if(j.querySelector(".sauma__controls")) {
                j.querySelector(".sauma__controls").remove();
              }

              id = j.getAttribute("name");




              j.append(luo__scord_vertical(saumawidth,id));


              s_summ +=saumawidth;

              

            });
          }
          sauma__vertical_ctrldown =  i.innerText;
        });
      }
      else if (document.getElementById("settings__saumahanta-vas").checked) {
        seina_patkat.forEach(function(i) {

          let sauma = i.querySelectorAll(".sauma__vertical");
          var width = parseFloat(i.style.width)*5;
          var s_summ = 0;

          seinapatka_pituus = parseFloat(i.height)*5;
          seinapatka_nosto = parseFloat(i.bottom)*5;


          if(i.querySelector(".sauma__vertical")) {       
            sauma.forEach(function(j) {           
              saumawidth = parseFloat(j.style.right)*5 - s_summ;

              if(j.querySelector(".sauma__vertical_ctrldown")) {
                j.querySelector(".sauma__vertical_ctrldown").remove();
              }
              if(j.querySelector(".sauma__vertical_ctrl")) {
                j.querySelector(".sauma__vertical_ctrl").remove();
              }
              if(j.querySelector(".sauma__controls")) {
                j.querySelector(".sauma__controls").remove();
              }

              id = j.getAttribute("name");




              j.append(luo__scord_vertical(saumawidth,id));
              s_summ +=saumawidth;

              

            });
          }
          sauma__vertical_ctrldown =  i.innerText;
        });
      }
    }
    else {
      cord_pystysaumat__aukotyli();
    }
  }

  function cord_vaakasaumat__aukotmukaan() {
    if(document.querySelector(".seina_patka_y")) {
      let seina_patkat = document.querySelectorAll(".seina_patka_y");
      sp_lenght = parseFloat(seina_patkat.length) - 1;
      
      // if(seina_patkat[sp_lenght]) {
      //    seina_patkat[sp_lenght].append(luo__sauma_horizontal_aukoitus_last(seina_patkat[sp_lenght]));
      // }  
      if(document.getElementById("settings__saumahanta-oik").checked || document.getElementById("settings__saumahanta-vas").checked) {
        seina_patkat.forEach(function(i) {
          let sauma = i.querySelectorAll(".sauma__horizontal");
          var height = parseFloat(i.style.height);
          var s_summ = 0;
          var sauma_pituus,sauma_nosto,i_y;

          if(document.getElementById("settings__sauma_pysty").checked) {
            i_y = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
          }
          else if(document.getElementById("settings__sauma_vaaka").checked) {
            i_y = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
          }
          
          if(i.querySelector(".sauma__horizontal")) {

            z=0;
            sauma.forEach(function(j) {
             

              if(j.querySelector(".sauma__horizontal_ctrldown")) {
                j.querySelector(".sauma__horizontal_ctrldown").remove();
              }
              if(j.querySelector(".sauma__horizontal_ctrl")) {
                j.querySelector(".sauma__horizontal_ctrl").remove();
              }
              if(j.querySelector(".sauma__controls")) {
                j.querySelector(".sauma__controls").remove();
              }
              // if(j.style.bottom) {
              //   saumah+= parseFloat(j.style.bottom);
              // }
              // else if(j.parentElement.style.bottom) {
              //   saumah+= parseFloat(j.parentElement.style.bottom);
              // }

              id = j.getAttribute("name");
              if(j.classList.contains("sauma__horizontal") && j.classList.contains("sauma_viim__horizontal") !== true && j.classList.contains("sauma_ensi__horizontal") !== true) {
                var sauma_nosto = parseFloat(j.style.bottom) * 5;
                saumaheight = (sauma_nosto) - z*i_y;
                j.append(luo__scord_horizontal(saumaheight,id));
                z+=1;
                s_summ+=(sauma_nosto);
               }
               
               if(j.classList.contains("sauma_viim__horizontal")) {
                var sauma_nosto = parseFloat(j.style.bottom) * 5;
                saumaheight =(sauma_nosto) - z*i_y;
                j.append(luo__scord_horizontal(saumaheight,id));
              }
            });
          }
          
        });
      } 
      else if(document.getElementById("settings__saumahanta-tasoitus").checked) {
        seina_patkat.forEach(function(i) {
          let sauma = i.querySelectorAll(".sauma__horizontal");
          var height = parseFloat(i.style.height);

          var s_summ = 0;
          if(i.querySelector(".sauma__horizontal")) {
            sauma.forEach(function(j) {
              saumaheight = i;
              if(j.querySelector(".sauma__horizontal_ctrldown")) {
                j.querySelector(".sauma__horizontal_ctrldown").remove();
              }
              if(j.querySelector(".sauma__horizontal_ctrl")) {
                j.querySelector(".sauma__horizontal_ctrl").remove();
              }
              if(j.querySelector(".sauma__controls")) {
                j.querySelector(".sauma__controls").remove();
              }
              // if(j.style.bottom) {
              //   saumah+= parseFloat(j.style.bottom);
              // }
              // else if(j.parentElement.style.bottom) {
              //   saumah+= parseFloat(j.parentElement.style.bottom);
              // }


              seinapatka_pituus = parseFloat(i.style.height) * 5;
              seinapatka_nosto = parseFloat(i.style.bottom) * 5;
              id = j.getAttribute("name");
              var sauma_nosto = parseFloat(j.style.bottom) * 5;
              if(i.classList.contains("viim_rivi")) {
                sauma_nosto = parseFloat(j.style.bottom) * 5;
                sauma_pituus = 15;
                cords = i.querySelector(".area_cord").innerText;
                c_cord = cords.split(",");
                saumah = c_cord[0];
                saumaheight = saumah;
                j.append(luo__scord_horizontal(saumaheight,id));

              } else if(j.classList.contains("sauma__horizontal")) {
                sauma_nosto = parseFloat(i.style.bottom) * 5;
                sauma_pituus = 15;
                cords = i.querySelector(".area_cord").innerText;
                c_cord = cords.split(",");
                saumah = c_cord[0];
                saumaheight = sauma_nosto;
                j.append(luo__scord_horizontal(saumaheight,id));

              }
            });
          }
        });
      }
      else if(document.querySelector("#settings__saumahanta-tasoitus").checked) {
        seina_patkat.forEach(function(i) {
          seinapatka_pituus = parseFloat(i.style.height) * 5;
          seinapatka_nosto = parseFloat(i.style.bottom) * 5;
          console.log("seinapatka_pituus: "+seinapatka_pituus);
          let sauma = i.querySelectorAll(".sauma__horizontal");
          var height = parseFloat(i.style.height);
          var s_summ = 0;
          var sauma_pituus,sauma_nosto,i_y;

          if(document.getElementById("settings__sauma_pysty").checked) {
            i_y = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
          }
          else if(document.getElementById("settings__sauma_vaaka").checked) {
            i_y = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
          }
          
          if(i.querySelector(".sauma__horizontal")) {

          

            
            // seinapatka_pituus
            z=0;
            sauma.forEach(function(j) {
              count_ = i.querySelectorAll(".sauma__horizontal").length;
              _count = i.querySelectorAll(".sauma_ensi__horizontal").length;
              count = count_-_count;

              if(j.querySelector(".sauma__horizontal_ctrldown")) {
                j.querySelector(".sauma__horizontal_ctrldown").remove();
              }
              if(j.querySelector(".sauma__horizontal_ctrl")) {
                j.querySelector(".sauma__horizontal_ctrl").remove();
              }
              if(j.querySelector(".sauma__controls")) {
                j.querySelector(".sauma__controls").remove();
              }

              id = j.getAttribute("name");
              
              if(j.classList.contains("sauma__horizontal") && j.classList.contains("sauma_ensi__horizontal") !== true) {
                saumaheight = seinapatka_pituus/count;
                j.append(luo__scord_horizontal(saumaheight,id));
               }
            });
          }
          // else if(i.querySelector(".sauma__vertical")) {
          //   i.classList.add("horizontalrow_saumat");
          //   // i.style.height = w/5 + "px";
          //   i.append(luo__sauma_horizontal_aukoitus_last(height));
          //   j = i.querySelector(".sauma__horizontal");
          //   saumaheight = (parseFloat(j.parentElement.style.bottom)*5) + parseFloat(j.style.bottom)*5 - s_summ;
          //     if(j.querySelector(".sauma__horizontal_ctrldown")) {
          //       j.querySelector(".sauma__horizontal_ctrldown").remove();
          //     }
          //     if(j.querySelector(".sauma__horizontal_ctrl")) {
          //       j.querySelector(".sauma__horizontal_ctrl").remove();
          //     }
          //     if(j.querySelector(".sauma__controls")) {
          //       j.querySelector(".sauma__controls").remove();
          //     }
          //     j.append(luo__scord_horizontal(saumaheight));

          //     s_summ +=saumaheight;
          // }
          // else {
          //   sauma.forEach(function(j) {           
          //     // if(j.style.bottom) {
          //     //   saumah+= parseFloat(j.style.bottom);
          //     // }
          //     // else if(j.parentElement.style.bottom) {
          //     //   saumah+= parseFloat(j.parentElement.style.bottom);
          //     // }
          //     cords = i.querySelector(".area_cord").innerText;
          //     c_cord = cords.split(",");
          //     saumah = 0;
          //     saumah= c_cord[0];
          //     saumaheight = saumah;
          //     j.append(luo__scord_horizontal(saumaheight));
          //     // else if(j.parentElement.parentElement.style.bottom) {
          //     //   saumah+= parseFloat(j.parentElement.parentElement.style.bottom);
          //     // }
          //     // else if(j.parentElement.parentElement.style.height) {
          //     //   saumah+= parseFloat(j.parentElement.parentElement.style.height);
          //     // }
          //   });
          // }
          // sauma__horizontal_ctrldown =  i.innerText;
        });
      }
    }
    else {
      cord_vaakasaumat__aukotyli();
    }
  }

  function cord_pystysaumat__aukotyli_tasoitus() {
      let seina_patkat = document.querySelectorAll(".seina_patka_x");
      var canvas = document.querySelector(".canvas");
      var h = document.querySelector("#box_h").value;
      var w = document.querySelector("#box_w").value;

      if (document.getElementById("settings__saumahanta-oik").checked  || document.getElementById("settings__saumahanta-tasoitus").checked) {
        var s_summ = 0;

        sauma = canvas.querySelectorAll(".sauma__vertical");
        if(canvas.querySelector(".sauma__vertical")) {
          distance = sauma[0].parentElement;
          viim_sauma = make_lastsauma_vertical(distance);
          distance.append(viim_sauma);
          sauma = canvas.querySelectorAll(".sauma__vertical");
        }

        sauma.forEach(function(j) {
          saumawidth = parseFloat(j.style.left)*5 - s_summ;

          if(j.querySelector(".sauma__vertical_ctrldown")) {
            j.querySelector(".sauma__vertical_ctrldown").remove();
          }
          if(j.querySelector(".sauma__vertical_ctrl")) {
            j.querySelector(".sauma__vertical_ctrl").remove();
          }
          if(j.querySelector(".sauma__controls")) {
            j.querySelector(".sauma__controls").remove();
          }

          id = j.getAttribute("name");

          j.append(luo__scord_vertical(saumawidth,id));



          s_summ +=saumawidth;
        });

         


      }
      else if (document.getElementById("settings__saumahanta-vas").checked) {
        var s_summ = 0;

        sauma = canvas.querySelectorAll(".sauma__vertical");
        if(canvas.querySelector(".sauma__vertical")) {
          distance = sauma[0].parentElement;
          viim_sauma = make_lastsauma_vertical(distance);
          distance.append(viim_sauma);
          sauma = canvas.querySelectorAll(".sauma__vertical");
        }

        sauma.forEach(function(j) {
          saumawidth = parseFloat(j.style.right)*5 - s_summ;

          if(j.querySelector(".sauma__vertical_ctrldown")) {
            j.querySelector(".sauma__vertical_ctrldown").remove();
          }
          if(j.querySelector(".sauma__vertical_ctrl")) {
            j.querySelector(".sauma__vertical_ctrl").remove();
          }
          if(j.querySelector(".sauma__controls")) {
            j.querySelector(".sauma__controls").remove();
          }

          id = j.getAttribute("name");

          j.append(luo__scord_vertical(saumawidth,id));

          s_summ +=saumawidth;
        });

         
      }

      

    }

  function cord_vaakasaumat__aukotyli_tasoitus() {
      let seina_patkat = document.querySelectorAll(".seina_patka_y");
      var canvas = document.querySelector(".canvas");
      var h = document.querySelector("#box_h").value;
      var w = document.querySelector("#box_w").value;

      var s_summ = 0;

      sauma = canvas.querySelectorAll(".sauma__horizontal");
      if(canvas.querySelector(".sauma__horizontal")) {
        distance = sauma[0].parentElement;
        viim_sauma = make_lastsauma_horizontal(distance);
        distance.append(viim_sauma);
        sauma = canvas.querySelectorAll(".sauma__horizontal");
      }

        sauma.forEach(function(j) {
          saumaheight = parseFloat(j.style.bottom)*5 - s_summ;

          if(j.querySelector(".sauma__horizontal_ctrldown")) {
            j.querySelector(".sauma__horizontal_ctrldown").remove();
          }
          if(j.querySelector(".sauma__horizontal_ctrl")) {
            j.querySelector(".sauma__horizontal_ctrl").remove();
          }
          if(j.querySelector(".sauma__controls")) {
            j.querySelector(".sauma__controls").remove();
          }

          id = j.getAttribute("name");

          j.append(luo__scord_horizontal(saumaheight,id));

          s_summ +=saumaheight;
        });

         
      
      

    }


  function calculateamounts() {
    
   

    var canvas = document.querySelector(".canvas");
    var h = document.querySelector("#box_h").value;
    var w = document.querySelector("#box_w").value;

    var s_summ = 0;

    //OK
    if (document.getElementById("settings__saumahanta-oik").checked && document.getElementById("saumoitus__sauma_one").checked) {
        cord_pystysaumat__aukotyli();
        cord_vaakasaumat__aukotyli();

        console.log("OIK,YLI");
    }
    //OK
    else if (document.getElementById("settings__saumahanta-vas").checked && document.getElementById("saumoitus__sauma_one").checked) {
      cord_pystysaumat__aukotyli();
      cord_vaakasaumat__aukotyli();
    }
    //OK
    else if (document.getElementById("settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_one").checked) {
      cord_pystysaumat__aukotyli_tasoitus();
      cord_vaakasaumat__aukotyli_tasoitus();
    }



    //OK
    else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
      cord_pystysaumat__aukotmukaan();
      cord_vaakasaumat__aukotmukaan();  
    }

    //OK
    else if (document.getElementById("saumoitus__sauma_two").checked) {
      cord_pystysaumat__aukotmukaan();
      cord_vaakasaumat__aukotyli();
    }
    //OK
    else if (document.getElementById("saumoitus__sauma_three").checked) {
      cord_pystysaumat__aukotyli();
      cord_vaakasaumat__aukotmukaan();
    }



    //OK?
    else if (document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_three").checked && document.getElementById("saumoitus__sauma_two").checked) {
      cord_pystysaumat__aukotmukaan();
      cord_vaakasaumat__aukotmukaan();  
    }
    //OK
    else if (document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_two").checked) {
        cord_vaakasaumat__aukotyli_tasoitus();
        cord_pystysaumat__aukotmukaan();
    }
    //OK
    else if (document.querySelector("#settings__saumahanta-tasoitus").checked && document.getElementById("saumoitus__sauma_three").checked) {
       cord_pystysaumat__aukotyli_tasoitus();
       cord_vaakasaumat__aukotmukaan(); 
      
    }

    vertical_saumat = canvas.querySelectorAll(".sauma__vertical");
    horizontal_saumat = canvas.querySelectorAll(".sauma__horizontal");

    fixmissing__saumoitus();
   

    
 }

  saumaused=0;

  function luo__sauma_vertical_aukoitus_first(item, last = false) {


    const sauma = document.createElement("div");
    var sauma__interval_horis_contal = parseFloat(document.querySelector("#settings__sauma_interval_x").value) / 5;
    var nhs_crtl = document.querySelector(".newrow_vertical");

    const sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
    const sauma_ensi__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
    const sauma_viim__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
    const widthBox = document.querySelector('#box_w').value;
    const between_sauma = sauma__interval_vertical / widthBox;
    const between_sauma_ensi = sauma__interval_vertical / widthBox;
    const between_sauma_viim = sauma__interval_vertical / widthBox;
    const canvasWidth = document.querySelector('.canvas').offsetWidth;

    const sauma_ensi = document.createElement("div");
    const sauma_ensi__control = document.createElement("b");
    const sauma_ensi__control_down = document.createElement("b");

    const sauma_ensi__controls = document.createElement("div");
    const sauma_ensi__controls_del = document.createElement("div");
    const sauma_ensi__controls_type = document.createElement("input");

    const newDiv__comment = document.createElement("li");
    const newDiv__comment_del = document.createElement("i");
    const newrow_horis_contal = document.createElement("div");


    let _id = "id" + Math.random().toString(16).slice(2);

    sauma_ensi.classList.add("sauma_ensi");
    sauma_ensi.classList.add("sauma");
    sauma_ensi.classList.add("sauma_ensi__vertical");
    sauma_ensi.classList.add("sauma__vertical");

    sauma_ensi__control.classList.add("sauma_ensi__vertical_ctrl");
    sauma_ensi__control.classList.add("sauma__vertical_ctrl");
    sauma_ensi__control.classList.add("sauma__vertical_ctrl-lefted");
    sauma_ensi__control.classList.add("sauma_ensi__control");
    sauma_ensi__control.classList.add("sauma_ensi__vertical_ctrl-lefted");
    sauma_ensi__controls_type.classList.add("lineinput");
    sauma_ensi__control_down.classList.add("sauma_ensi__vertical_ctrldown");
    sauma_ensi__control_down.classList.add("sauma__vertical_ctrldown");
    newDiv__comment_del.classList.add("newDiv__comment_del");
    sauma_ensi__controls.classList.add("sauma_ensi__controls");
    sauma_ensi__controls.classList.add("sauma__controls");
    sauma_ensi__controls_del.classList.add("sauma_ensi__controls_del");
    sauma_ensi__controls_del.classList.add("sauma__controls_del");
    newrow_horis_contal.classList.add("newrow_vertical");
    sauma_ensi__control_down.classList.add("sauma_ensi__control_down");
    sauma_ensi__control_down.classList.add("sauma__control_down");
    newDiv__comment_del.classList.add("newDiv__comment_del");


    sauma_ensi__control_down.classList.add(_id);
    sauma_ensi__control.classList.add(_id);
    newDiv__comment.classList.add(_id);
    sauma_ensi.classList.add(_id);
    newDiv__comment.classList.add(_id);
    sauma_ensi__controls.classList.add(_id);
    sauma_ensi__controls_del.classList.add(_id);
    sauma_ensi__controls_type.classList.add(_id);





    sauma_ensi.innerHTML = "";
    // sauma_ensi__control.innerHTML = "0";
    sauma_ensi__controls.innerHTML = "";
    newDiv__comment.innerHTML = "sauma_ensi";
    newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
    // sauma_ensi__control_down.innerHTML = "0";
    newDiv__comment.innerHTML="sauma_ensi #" + s_c;
    newDiv__comment.innerHTML="sauma_ensi #" + s_c;
    newDiv__comment_del.innerHTML = "";
    sauma_ensi__control.innerHTML = sauma_ensi__interval_vertical;
    sauma_ensi__control_down.innerHTML = parseFloat(sauma_ensi__interval_vertical)-10;


    sauma_ensi__controls_type.value = "ST1";
    sauma_ensi__controls_type.type = "text";


    newDiv__comment.setAttribute("name", _id);
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    newDiv__comment_del.setAttribute("name", _id);

    sauma_ensi__control.setAttribute("name", _id);
    sauma_ensi__controls.setAttribute("name", _id);
    sauma_ensi__controls_del.setAttribute("name", _id);
    sauma_ensi__controls_type.setAttribute("name", _id);
    sauma_ensi.setAttribute("id", _id);
    sauma_ensi.setAttribute("name", _id);
    sauma_ensi__control_down.setAttribute("name", _id);
    sauma_ensi__control.setAttribute("mousedown","sauma_ensi__move(this);");
    sauma_ensi__controls_del.setAttribute("onclick","sauma_ensi__del(this);");
    // sauma_ensi__control.setAttribute("onclick", "document.querySelector("+_id+").remove();this.parentElement.style.opacity = '0';");
    sauma_ensi.setAttribute("onclick","");


    // sauma_ensi__controls.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_ensi, sauma_ensi__controls, sauma_ensi__control,"h");
    // });

    // sauma_ensi.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_ensi, sauma_ensi__controls, sauma_ensi__control,"h");
    // });




    if (item) {
      sauma_ensi.style.position = 'absolute';
      sauma_ensi.style.left = item;
        sauma_ensi__control.style.transform = 'translate(-100%)';
        if (last) {
            sauma_ensi__control.innerHTML = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
        } else {
            sauma_ensi__control.innerHTML = parseInt((item/ 100) * widthBox);
        }
    } else {
      sauma_ensi.style.left = (s_c * parseFloat(document.querySelector("#settings__sauma_intervalx").value/5)) + 'px';
      sauma_ensi__control.style.width = (s_c * parseFloat(document.querySelector("#settings__sauma_intervalx").value/5)) + 'px';
    }



    sauma_ensi__control.style.width = between_sauma_ensi * canvasWidth + 'px';
    sauma_ensi__control.style.left = 0 + 'px';
    sauma_ensi__control_down.style.left = 0 + 'px';
    sauma_ensi__control_down.style.width = between_sauma_ensi * canvasWidth + 'px';


    sauma_ensi.prepend(sauma_ensi__control);
    sauma_ensi.prepend(sauma_ensi__control_down);
    newDiv__comment.appendChild(newDiv__comment_del);
    sauma_ensi__controls.appendChild(sauma_ensi__controls_del);
    sauma_ensi__controls.appendChild(sauma_ensi__controls_type);
    sauma_ensi.prepend(sauma_ensi__controls);
    newDiv__comment.appendChild(newDiv__comment_del);
    document.querySelector(".drawarea__controls_four-pysty").prepend(newDiv__comment);



    return sauma_ensi;

  }

  function luo__sauma_vertical_aukoitus_last(item, aukko) {


    const sauma = document.createElement("div");
    var sauma__interval_horis_contal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
    var nhs_crtl = document.querySelector(".newrow_vertical");

    const sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
    const sauma_ensi__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
    const sauma_viim__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
    const widthBox = document.querySelector('#box_w').value;
    const between_sauma = sauma__interval_vertical / widthBox;
    const between_sauma_ensi = sauma__interval_vertical / widthBox;
    const between_sauma_viim = sauma__interval_vertical / widthBox;
    const canvasWidth = document.querySelector('.canvas').offsetWidth;

    const newDiv__comment = document.createElement("li");
    const newDiv__comment_del = document.createElement("i");
    const newrow_horis_contal = document.createElement("div");


    const sauma_viim = document.createElement("div");
    const sauma_viim__control = document.createElement("b");
    const sauma_viim__control_down = document.createElement("b");

    const sauma_viim__controls = document.createElement("div");
    const sauma_viim__controls_del = document.createElement("div");
    const sauma_viim__controls_type = document.createElement("input");



    let id_ = "id" + Math.random().toString(16).slice(2);

    sauma_viim.classList.add("sauma_viim");
    sauma_viim.classList.add("sauma_viim__vertical");
    sauma_viim.classList.add("sauma__vertical");
    sauma_viim.classList.add("sauma");

    sauma_viim__control.classList.add("sauma_viim__vertical_ctrl");
    sauma_viim__control.classList.add("sauma_viim__vertical_ctrl-lefted");
    sauma_viim__control_down.classList.add("sauma_viim__vertical_ctrldown");

    sauma_viim__controls.classList.add("sauma_viim__controls");
    sauma_viim__controls_del.classList.add("sauma_viim__controls_del");
    sauma_viim__control_down.classList.add("sauma_viim__control_down");

    sauma_viim__controls.classList.add("sauma__controls");
    sauma_viim__controls_del.classList.add("sauma__controls_del");
    sauma_viim__control_down.classList.add("sauma__control_down");

    sauma_viim__controls_type.classList.add("lineinput");

    newDiv__comment_del.classList.add("newDiv__comment_del");
    newrow_horis_contal.classList.add("newrow_vertical");
    newDiv__comment_del.classList.add("newDiv__comment_del");


    sauma_viim__control_down.classList.add(id_);
    sauma_viim__control.classList.add(id_);
    newDiv__comment.classList.add(id_);
    sauma_viim.classList.add(id_);
    newDiv__comment.classList.add(id_);
    sauma_viim__controls.classList.add(id_);
    sauma_viim__controls_del.classList.add(id_);
    sauma_viim__controls_type.classList.add(id_);





    sauma_viim.innerHTML = "";
    // sauma_viim__control.innerHTML = "0";
    sauma_viim__controls.innerHTML = "";
    newDiv__comment.innerHTML = "sauma_viim";
    newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
    // sauma_viim__control_down.innerHTML = "0";
    newDiv__comment.innerHTML="sauma_viim #" + s_c;
    newDiv__comment_del.innerHTML = "";
    // sauma_viim__control.innerHTML = aukko;
    // sauma_viim__control_down.innerHTML = parseFloat(aukko)-10;


    sauma_viim__controls_type.value = "ST1";
    sauma_viim__controls_type.type = "text";


    newDiv__comment.setAttribute("name", id_);
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    newDiv__comment_del.setAttribute("name", id_);

    sauma_viim__control.setAttribute("name", id_);
    sauma_viim__controls.setAttribute("name", id_);
    sauma_viim__controls_del.setAttribute("name", id_);
    sauma_viim__controls_type.setAttribute("name", id_);
    sauma_viim.setAttribute("id", id_);
    sauma_viim.setAttribute("name", id_);
    sauma_viim__control_down.setAttribute("name", id_);
    sauma_viim__control.setAttribute("mousedown","sauma_viim__move(this);");
    sauma_viim__controls_del.setAttribute("onclick","sauma_viim__del(this);");
    // sauma_viim__control.setAttribute("onclick", "document.querySelector("+id_+").remove();this.parentElement.style.opacity = '0';");
    sauma_viim.setAttribute("onclick","");





    if (item) {
      sauma_viim.style.position = 'absolute';
      // sauma_viim.style.left = "item";
        sauma_viim__control.style.transform = 'translate(-100%)';
        if (last) {
            sauma_viim__control.innerHTML = parseInt((item / 100) * widthBox) - parseInt((+last.replace('px', '') / 100) * widthBox);
        } else {
            sauma_viim__control.innerHTML = parseInt((item/ 100) * widthBox);
        }
    } else {
      // sauma_viim.style.left = (s_c * parseFloat(document.querySelector("#settings__sauma_intervalx").value/5)) + 'px';
      sauma_viim__control.style.width = (s_c * parseFloat(document.querySelector("#settings__sauma_intervalx").value/5)) + 'px';
    }

    if(document.getElementById("settings__saumahanta-oik").checked || document.getElementById("settings__saumahanta-tasoitus").checked) {
       sauma_viim__control.style.width = between_sauma_viim * canvasWidth + 'px';
      // sauma_viim__control.style.left = '100%';
      sauma_viim.style.left = aukko/5 + "px";
      // sauma_viim__control_down.style.left = '100%';
      sauma_viim__control_down.style.width = between_sauma_viim * canvasWidth + 'px';
    }

   

    else if(document.getElementById("settings__saumahanta-vas").checked) {
      sauma_viim__control.style.width = between_sauma_viim * canvasWidth + 'px';
      sauma_viim.style.right = aukko/5 + "px";
      sauma_viim__control_down.style.width = between_sauma_viim * canvasWidth + 'px';
    }


    sauma_viim.prepend(sauma_viim__control);
    sauma_viim.prepend(sauma_viim__control_down);
    newDiv__comment.appendChild(newDiv__comment_del);
    sauma_viim__controls.appendChild(sauma_viim__controls_del);
    sauma_viim__controls.appendChild(sauma_viim__controls_type);
    sauma_viim.prepend(sauma_viim__controls);
    newDiv__comment.appendChild(newDiv__comment_del);
    document.querySelector(".drawarea__controls_four-pysty").prepend(newDiv__comment);

    return sauma_viim;


    // sauma_viim__controls.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_viim, sauma_viim__controls, sauma_viim__control,"h");
    // });

    // sauma_viim.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_viim, sauma_viim__controls, sauma_viim__control,"h");
    // });

  }  

  function luo__sauma_horizontal_aukoitus_first(aukko, exception) {

    const sauma = document.createElement("div");
    var sauma__interval_horis_contal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
    var nhs_crtl = document.querySelector(".newrow_horizontal");

    const sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    const sauma_ensi__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    const sauma_viim__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    const h = document.querySelector('#box_h').value;
    const between_sauma = sauma__interval_horizontal / h;
    const between_sauma_ensi = sauma__interval_horizontal / h;
    const between_sauma_viim = sauma__interval_horizontal / h;
    const canvasHeight = document.querySelector('.canvas').offsetHeight;

    const sauma_ensi = document.createElement("div");
    const sauma_ensi__control = document.createElement("b");
    const sauma_ensi__control_down = document.createElement("b");

    const sauma_ensi__controls = document.createElement("div");
    const sauma_ensi__controls_del = document.createElement("div");
    const sauma_ensi__controls_type = document.createElement("input");

    const newDiv__comment = document.createElement("li");
    const newDiv__comment_del = document.createElement("i");
    const newrow_horis_contal = document.createElement("div");


    let _id = "sauma_ensi__vertical" + Math.random().toString(16).slice(2);

    sauma_ensi.classList.add("sauma_ensi");
    sauma_ensi.classList.add("sauma");
    sauma_ensi.classList.add("sauma_ensi__horizontal");
    sauma_ensi.classList.add("sauma__horizontal");

    sauma_ensi__control.classList.add("sauma_ensi__horizontal_ctrl");
    sauma_ensi__control.classList.add("sauma__horizontal_ctrl");
    sauma_ensi__control.classList.add("sauma__control");
    sauma_ensi__control.classList.add("luo__sauma_horizontal_aukoitus_first");
    sauma_ensi__control.classList.add("sauma__horizontal_ctrl-righted");
    sauma_ensi__control.classList.add("sauma_ensi__horizontal_ctrl-righted");
    sauma_ensi__controls_type.classList.add("lineinput");
    sauma_ensi__control_down.classList.add("sauma_ensi__horizontal_ctrldown");
    sauma_ensi__control_down.classList.add("sauma__horizontal_ctrldown");
    newDiv__comment_del.classList.add("newDiv__comment_del");
    sauma_ensi__controls.classList.add("sauma_ensi__controls");
    sauma_ensi__controls.classList.add("sauma__controls");
    sauma_ensi__controls_del.classList.add("sauma_ensi__controls_del");
    sauma_ensi__controls_del.classList.add("sauma__controls_del");
    newrow_horis_contal.classList.add("newrow_horizontal");
    sauma_ensi__control_down.classList.add("sauma_ensi__control_down");
    sauma_ensi__control_down.classList.add("sauma__control_down");
    newDiv__comment_del.classList.add("newDiv__comment_del");


    sauma_ensi__control_down.classList.add(_id);
    sauma_ensi__control.classList.add(_id);
    newDiv__comment.classList.add(_id);
    sauma_ensi.classList.add(_id);
    newDiv__comment.classList.add(_id);
    sauma_ensi__controls.classList.add(_id);
    sauma_ensi__controls_del.classList.add(_id);
    sauma_ensi__controls_type.classList.add(_id);





    // sauma_ensi__control.innerHTML = "0";
    newDiv__comment.innerHTML = "sauma_ensi";
    newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
    // sauma_ensi__control_down.innerHTML = "0";
    newDiv__comment.innerHTML="sauma_ensi #" + s_c;
    newDiv__comment.innerHTML="sauma_ensi #" + s_c;
    // sauma_ensi__control.innerHTML = sauma_ensi__interval_horizontal;
    // sauma_ensi__control_down.innerHTML = parseFloat(sauma_ensi__interval_horizontal)-10;


    sauma_ensi__controls_type.value = "X0";
    sauma_ensi__controls_type.type = "text";


    newDiv__comment.setAttribute("name", _id);
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    newDiv__comment_del.setAttribute("name", _id);

    sauma_ensi__control.setAttribute("name", _id);
    sauma_ensi__controls.setAttribute("name", _id);
    sauma_ensi__controls_del.setAttribute("name", _id);
    sauma_ensi__controls_type.setAttribute("name", _id);
    sauma_ensi.setAttribute("id", _id);
    sauma_ensi.setAttribute("name", _id);
    sauma_ensi__control_down.setAttribute("name", _id);
    sauma_ensi__control.setAttribute("mousedown","sauma_ensi__move(this);");
    sauma_ensi__controls_del.setAttribute("onclick","sauma_ensi__del(this);");
    // sauma_ensi__control.setAttribute("onclick", "document.querySelector("+_id+").remove();this.parentElement.style.opacity = '0';");
    sauma_ensi.setAttribute("onclick","");


    // sauma_ensi__controls.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_ensi, sauma_ensi__controls, sauma_ensi__control);
    // });

    // sauma_ensi.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_ensi, sauma_ensi__controls, sauma_ensi__control);
    // });



    sauma_ensi__control.style.height = between_sauma_ensi * canvasHeight + 'px';
    sauma_ensi__control.style.bottom = 0 + 'px';
    sauma_ensi.style.bottom = 0 + 'px';
    sauma_ensi__control_down.style.bottom = 0 + 'px';
    sauma_ensi__control_down.style.height = between_sauma_ensi * canvasHeight + 'px';


    sauma_ensi.prepend(sauma_ensi__control);
    sauma_ensi.prepend(sauma_ensi__control_down);
    newDiv__comment.appendChild(newDiv__comment_del);
    sauma_ensi__controls.appendChild(sauma_ensi__controls_del);
    sauma_ensi__controls.appendChild(sauma_ensi__controls_type);
    sauma_ensi.prepend(sauma_ensi__controls);
    newDiv__comment.appendChild(newDiv__comment_del);
    document.querySelector(".drawarea__controls_four-vaaka").prepend(newDiv__comment);



    return sauma_ensi

  }

  function luo__sauma_horizontal_aukoitus_last(aukko, exception) {


    const sauma = document.createElement("div");
    var sauma__interval_horis_hontal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 5;
    var nhs_hrtl = document.querySelector(".newrow_horizontal");

    const sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    const sauma_ensi__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    const sauma_viim__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    const HeightBox = document.querySelector('#box_h').value;
    const between_sauma = sauma__interval_horizontal / HeightBox;
    const between_sauma_ensi = sauma__interval_horizontal / HeightBox;
    const between_sauma_viim = sauma__interval_horizontal / HeightBox;
    const canvasHeight = document.querySelector('.canvas').offsetHeight;

    const newDiv__comment = document.createElement("li");
    const newDiv__comment_del = document.createElement("i");
    const newrow_horis_hontal = document.createElement("div");


    const sauma_viim = document.createElement("div");
    const sauma_viim__control = document.createElement("b");
    const sauma_viim__control_down = document.createElement("b");

    const sauma_viim__controls = document.createElement("div");
    const sauma_viim__controls_del = document.createElement("div");
    const sauma_viim__controls_type = document.createElement("input");



    let id_ = "aukkosauma_viim__horizontal" + Math.random().toString(16).slice(2);

    sauma_viim.classList.add("sauma_viim");
    sauma_viim.classList.add("sauma_viim__horizontal");
    sauma_viim.classList.add("luo__sauma_horizontal_aukoitus_last");
    sauma_viim.classList.add("sauma__horizontal");
    sauma_viim.classList.add("sauma");

    sauma_viim__control.classList.add("sauma_viim__horizontal_ctrl");
    sauma_viim__control.classList.add("sauma__control");
    sauma_viim__control.classList.add("sauma_viim__horizontal_ctrl-lefted");
    sauma_viim__control_down.classList.add("sauma_viim__horizontal_ctrldown");

    sauma_viim__controls.classList.add("sauma_viim__controls");
    sauma_viim__controls_del.classList.add("sauma_viim__controls_del");
    sauma_viim__control_down.classList.add("sauma_viim__control_down");

    sauma_viim__controls.classList.add("sauma__controls");
    sauma_viim__controls_del.classList.add("sauma__controls_del");
    sauma_viim__control_down.classList.add("sauma__control_down");

    sauma_viim__controls_type.classList.add("lineinput");

    newDiv__comment_del.classList.add("newDiv__comment_del");
    newrow_horis_hontal.classList.add("newrow_horizontal");
    newDiv__comment_del.classList.add("newDiv__comment_del");


    sauma_viim__control_down.classList.add(id_);
    sauma_viim__control.classList.add(id_);
    newDiv__comment.classList.add(id_);
    sauma_viim.classList.add(id_);
    newDiv__comment.classList.add(id_);
    sauma_viim__controls.classList.add(id_);
    sauma_viim__controls_del.classList.add(id_);
    sauma_viim__controls_type.classList.add(id_);





    sauma_viim.innerHTML = "";
    // sauma_viim__control.innerHTML = "0";
    sauma_viim__controls.innerHTML = "";
    newDiv__comment.innerHTML = "sauma_viim";
    newDiv__comment_del.innerHTML = "<svg Height='14' height='14' viewBox='0 0 14 14' fill='none' ymlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
    // sauma_viim__control_down.innerHTML = "0";
    newDiv__comment.innerHTML="sauma_viim #" + s_h;
    newDiv__comment_del.innerHTML = "";
    // sauma_viim__control.innerHTML = sauma_viim__interval_horizontal;
    // sauma_viim__control_down.innerHTML = parseFloat(sauma_viim__interval_horizontal)-10;


    sauma_viim__controls_type.value = "X1";
    sauma_viim__controls_type.type = "text";


    newDiv__comment.setAttribute("name", id_);
    newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
    newDiv__comment_del.setAttribute("name", id_);

    sauma_viim__control.setAttribute("name", id_);
    sauma_viim__controls.setAttribute("name", id_);
    sauma_viim__controls_del.setAttribute("name", id_);
    sauma_viim__controls_type.setAttribute("name", id_);
    sauma_viim.setAttribute("id", id_);
    sauma_viim.setAttribute("name", id_);
    sauma_viim__control_down.setAttribute("name", id_);
    sauma_viim__control.setAttribute("mousedown","sauma_viim__move(this);");
    sauma_viim__controls_del.setAttribute("onclick","sauma_viim__del(this);");
    // sauma_viim__control.setAttribute("onclick", "document.querySelector("+id_+").remove();this.parentElement.style.opacity = '0';");
    sauma_viim.setAttribute("onclick","");


    // sauma_viim__controls.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_viim, sauma_viim__controls, sauma_viim__control);
    // });

    // sauma_viim.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_viim, sauma_viim__controls, sauma_viim__control);
    // });




    // if (item) {
    //   sauma_viim.style.position = 'absolute';
    //   // sauma_viim.style.left = "item";
    //     sauma_viim__control.style.transform = 'translate(-100%)';
    //     if (last) {
    //         sauma_viim__control.innerHTML = parseInt((item / 100) * HeightBox) - parseInt((+last.replace('px', '') / 100) * HeightBox);
    //     } else {
    //         sauma_viim__control.innerHTML = parseInt((item/ 100) * HeightBox);
    //     }
    // } else {
      // sauma_viim.style.left = (s_h * parseFloat(document.querySelector("#settings__sauma_intervaly").value/5)) + 'px';
      sauma_viim__control.style.height = (s_h * parseFloat(document.querySelector("#settings__sauma_intervaly").value/5)) + 'px';
    // }

    // sauma_viim__controls.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_viim, sauma_viim__controls, sauma_viim__control,"v");
    // });

    // sauma_viim.addEventListener('touchmove', (e) => {
    //   resizeSauma(e, sauma_viim, sauma_viim__controls, sauma_viim__control,"v");
    // });



    sauma_viim__control.style.height = between_sauma_viim * canvasHeight + 'px';
    // sauma_viim__control.style.bottom = item/5 + "px";
    // sauma_viim__control_down.style.bottom = item/5 + "px";
    sauma_viim__control_down.style.height = between_sauma_viim * canvasHeight + 'px';

    if(aukko) {
      
    sauma_viim__control.style.height =  aukko/5  + 'px';
    sauma_viim__control.style.bottom = aukko/5 + "px";
    sauma_viim.style.bottom = aukko/5 + "px";
    sauma_viim__control_down.style.bottom = aukko/5 + "px";
    sauma_viim__control_down.style.height = between_sauma_viim * canvasHeight + 'px';
    }


    sauma_viim.prepend(sauma_viim__control);
    sauma_viim.prepend(sauma_viim__control_down);
    newDiv__comment.appendChild(newDiv__comment_del);
    sauma_viim__controls.appendChild(sauma_viim__controls_del);
    // sauma_viim__controls.appendChild(sauma_viim__controls_type);
    sauma_viim.prepend(sauma_viim__controls);
    newDiv__comment.appendChild(newDiv__comment_del);
    document.querySelector(".drawarea__controls_four-vaaka").prepend(newDiv__comment);

    return sauma_viim;

  }
  
  function sauma__del(e) {
    // alert(e.getAttribute("name"));
    name = e.getAttribute("name");

    var sauma__del = document.getElementsByClassName(name);

    for (var i=0;i<sauma__del.length;){
      sauma__del[i].remove();
    }
  }

  function sauma__move(e) {
    // var name = e.getAttribute("name");
    // var sauma = document.getElementById(name);

    // var mousePressX = e.clientX;
    // var mousePressY = e.clientY;
    // var wDiff = e.clientX - mousePressX;
    // var hDiff = e.clientY - mousePressY;

    // sauma.addEventListener('mousedown', mouseDown, false);
    // window.addEventListener('mouseup', mouseUp, false);

    // function mouseUp(e) {
    //     window.removeEventListener('mousemove', divMove, true);
    // }

    // function mouseDown(e) {
    //   window.addEventListener('mousemove', divMove, true);
    // }

    // function divMove(e) {
    //   sauma.style.marginLeft = Math.round( Math.round(e.clientX) - Math.round(e.clientX / 3) ) + 'px';


    //   if (parseFloat(sauma.style.marginLeft) > parseFloat(document.querySelector("#box_h").value) / 10) {
    //     sauma.style.marginLeft = parseFloat(document.querySelector("#box_h").value / 10) + 'px';
    //   }

    // }
  }

  function pystysaumat__aukkojenyli() {
    var w = parseFloat(document.getElementById('box_w').value);
    var sauma__interval_vertical,sauma__interval_horizontal;
    if(document.getElementById("settings__sauma_pysty").checked) {
      sauma__interval_vertical = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
      sauma__interval_horizontal = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
    }
    if (document.getElementById("settings__sauma_vaaka").checked) {
      sauma__interval_vertical = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
      sauma__interval_horizontal = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
    }

    // if (document.getElementById("settings__saumahanta-tasoitus").checked) {
    //   numOfDivs__vertical+=1;
    // }

    var newrow_horizontal = document.createElement("div");
    var newrow_vertical = document.createElement("div");
    var canvas = document.querySelector("#box-wrapper > main");
    var aukkos = document.getElementsByClassName("aukko");

    myDivs_horizontal = [],
    myDivs_vertical = [],
    i = 0;

    var saumat;
    if(document.querySelector(".saumat__grandrow")) {
      saumat = document.querySelector(".saumat__grandrow");
    } 
    else {
      saumat = document.createElement("div");
      saumat.classList.add("saumat__grandrow");
      canvas.appendChild(saumat);
    }

    saumat.appendChild(newrow_vertical);

    if(document.getElementById("settings__saumahanta-oik").checked || document.getElementById("settings__saumahanta-vas").checked) {
      var numOfDivs__vertical;
      numOfDivs__vertical = Math.floor(w / sauma__interval_vertical);

      for (i = 0; i < numOfDivs__vertical; i++) {
        newrow_vertical.classList.add("verticalrow_saumat");
        // newrow_vertical.style.width = w/5 + "px";
        newrow_vertical.append(luo__sauma_vertical("",w));
      }

      if(newrow_vertical == 0) {
        newrow_vertical.append(make_lastsauma_vertical(newrow_vertical));
      }

    }
    else if(document.querySelector("#settings__saumahanta-tasoitus").checked) {

      numOfDivs__vertical = Math.ceil(w / sauma__interval_vertical);
      v_tas_kaava1 = Math.ceil(w/sauma__interval_vertical);
      area__modcount = (parseFloat(w)/25);
      sauma__modcount = Math.floor(area__modcount/v_tas_kaava1);
      v_tas_li = parseFloat(sauma__modcount)*25;
      

      console.log("numOfDivs__vertical " + numOfDivs__vertical);
      console.log("v_tas_kaava1 " + v_tas_kaava1);
      console.log("area__modcount " + area__modcount);
      console.log("sauma__modcount " + sauma__modcount);
      console.log("tas_li " + v_tas_li);
      for (i = 0; i < numOfDivs__vertical; i++) {
        newrow_vertical.classList.add("verticalrow_saumat");
        newrow_vertical.append(luo__sauma_vertical("",w,v_tas_li,i));
      }



      // newrow_vertical.append(make_lastsauma_vertical(newrow_vertical));

    }


    
    // newrow_vertical.append(make_lastsauma_vertical(canvas));
    
  }

  function vaakasaumat__aukkojenyli() {
    var h = parseFloat(document.getElementById('box_h').value);
    var sauma__interval_vertical,sauma__interval_horizontal;
    if(document.getElementById("settings__sauma_pysty").checked) {
      sauma__interval_vertical = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
      sauma__interval_horizontal = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
    }
    if (document.getElementById("settings__sauma_vaaka").checked) {
      sauma__interval_vertical = parseFloat(document.querySelector("#settings__sauma_interval_y").value);
      sauma__interval_horizontal = parseFloat(document.querySelector("#settings__sauma_interval_x").value);
    }
    var newrow_horizontal = document.createElement("div");
    // var newrow_vertical = document.createElement("div");
    var aukkos = document.getElementsByClassName("aukko");

    myDivs_horizontal = [],
    myDivs_vertical = [],
    i = 0;

    var saumat;
    newrow_horizontal.classList.add("horizontalrow_saumat");
    if(document.querySelector(".saumat__grandrow")) {
      saumat = document.querySelector(".saumat__grandrow");
    } 
    else {
      saumat = document.createElement("div");
      saumat.classList.add("saumat__grandrow");
      canvas.appendChild(saumat);
    }
    
    saumat.prepend(newrow_horizontal);
    var numOfDivs__horizontal;
    if(document.getElementById("settings__saumahanta-oik").checked || document.getElementById("settings__saumahanta-vas").checked) {
      numOfDivs__horizontal = Math.floor(h / sauma__interval_horizontal);
       for (i = 0; i < numOfDivs__horizontal; i++) {
          //newrow_horizontal.style.height = h/5 +"px";
          newrow_horizontal.append(luo__sauma_horizontal("",sauma__interval_horizontal));
      }
      if(numOfDivs__horizontal == 0) {
        newrow_horizontal.append(make_lastsauma_horizontal(newrow_horizontal));
      }
    }
    else if(document.querySelector("#settings__saumahanta-tasoitus").checked) {
      // numOfDivs__horizontal = Math.ceil(h / sauma__interval_horizontal);
      //  for (i = 0; i < numOfDivs__horizontal; i++) {
      //     newrow_horizontal.classList.add("horizontalrow_saumat");
      //     //newrow_horizontal.style.height = h/5 +"px";
      //     newrow_horizontal.append(luo__sauma_horizontal("",sauma__interval_horizontal));
      // }


      numOfDivs__horizontal = Math.ceil(h / sauma__interval_horizontal);
      tas_kaava1 = Math.ceil(h/sauma__interval_horizontal);
      area__modcount = (parseFloat(h)/25);
      sauma__modcount = Math.floor(area__modcount/tas_kaava1);
      tas_li = parseFloat(sauma__modcount)*25;
            

      // tas_li = Math.floor(h/sauma__modcount);


      // if(tas_kaava1 === 1) {
      //   sauma__modcount_ = h;
      // }

      for (i = 0; i < tas_kaava1; i++) {
        newrow_horizontal.classList.add("horizontalrow_saumat");
        newrow_horizontal.append(luo__sauma_horizontal("",h,tas_li,tas_kaava1));
      }
      newrow_horizontal.append(make_lastsauma_horizontal());
      
    }

    
    



  }

  function pystysaumat__aukkojenmukaan() {
    h = parseFloat(document.querySelector("#box_h").value);
    w = parseFloat(document.querySelector("#box_w").value);

    var sauma__interval_vertical,sauma__interval_horizontal;
    if(document.getElementById("settings__sauma_pysty").checked) {
      sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    }
    if (document.getElementById("settings__sauma_vaaka").checked) {
      sauma__interval_vertical = document.querySelector("#settings__sauma_interval_y").value;
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_x").value;
    }
    var newrow_horizontal = document.createElement("div");
    var newrow_vertical = document.createElement("div");
    var verticalrow_saumat = document.createElement("div");
    var canvas = document.querySelector("#box-wrapper > main");
    var aukkos = document.getElementsByClassName("aukko");

    verticalrow_saumat.classList.add("verticalrow_saumat");

    myDivs_horizontal = [],
    myDivs_vertical = [],
    i = 0;

    var saumat;
    if(document.querySelector(".saumat__grandrow")) {
      saumat = document.querySelector(".saumat__grandrow");
    } 
    else {
      saumat = document.createElement("div");
      saumat.classList.add("saumat__grandrow");
      canvas.appendChild(saumat);
    }
    if(document.querySelector(".drawarea > .canvas > .aukko")) {
      let p_aukkos = document.querySelectorAll(".drawarea > .canvas > .aukko");
      var aukko5,aukko4,aukko3,aukko2,aukko1;

      v_l = p_aukkos.length;

      if(v_l==1) {
        aukko1 = p_aukkos[0];
      }
      else if(v_l==2) {
        aukko1 = p_aukkos[1];
        aukko2 = p_aukkos[0];
      }
      else if(v_l==3) {
        aukko1 = p_aukkos[0];
        aukko2 = p_aukkos[1];
        aukko3 = p_aukkos[2];
      }
      else if(v_l==4) {
        aukko1 = p_aukkos[0];
        aukko2 = p_aukkos[1];
        aukko3 = p_aukkos[2];
        aukko4 = p_aukkos[3];
      }
      else if(v_l==5) {
        aukko1 = p_aukkos[0];
        aukko2 = p_aukkos[1];
        aukko3 = p_aukkos[2];
        aukko4 = p_aukkos[3];
        aukko5 = p_aukkos[4];
      }
      


        console.log("aukko1" + aukko1);
        console.log("aukko2" + aukko2);
        console.log("aukko3" + aukko3);
        console.log("aukko4" + aukko4);
        console.log("aukko5" + aukko5);
        if(aukko1 && aukko2 && aukko3 && aukko4 && aukko5) {}
        else if(aukko1 && aukko2 && aukko3 && aukko4) {}
        else if(aukko1 && aukko2 && aukko3) {}
        else if(aukko1 && aukko2) {
          var area_left,area_1,area1_2,area2,area_right;
          const areas = new Array();

          area_left = parseFloat(aukko1.querySelector(".newDiv__x").innerText.replace("X: ",""));
          area_1 = parseFloat(aukko1.querySelector(".newDiv__width").innerText);
          area1_2 = parseFloat(aukko2.querySelector(".newDiv__x").innerText.replace("X: ","")) - parseFloat(aukko1.querySelector(".newDiv__width").innerText)-parseFloat(aukko1.querySelector(".newDiv__x").innerText.replace("X: ",""));
          area_2 = parseFloat(aukko2.querySelector(".newDiv__width").innerText);
          area_right = w - area_1-area1_2-area_2-area_left;

          verticalrow_saumat.classList.add("verticalrow_saumat");
          newrow_horizontal.setAttribute('id', pos_id);
          areas.push(area_left);
          areas.push(area_1);
          areas.push(area1_2);
          areas.push(area_2);
          areas.push(area_right);
          
          for (var j = 0; j < areas.length; j++) {
            var pos_id = "verticalrow"+String(areas[j]).replace(",","-").replace(" ","-");
            if(document.getElementById(pos_id)) {
              console.log("exists, skip");
            }
            else {
              var newrow_vertical = document.createElement("div");

              // 
              numOfDivs__vertical = Math.trunc((areas[j]) / sauma__interval_vertical);
              // if(document.getElementById("settings__saumahanta-tasoitus").checked) {
              //   numOfDivs__vertical = Math.trunc(areas[j] / sauma__interval_vertical) +1;
              // }
              s_c=0;
              s_h=0;
              g = 0;

              newrow_vertical.classList.add("newrow_vertical");
              newrow_vertical.classList.add("seina_patka" + j);
              newrow_vertical.classList.add("seina_patka_x");
              newrow_vertical.setAttribute("id",pos_id);
              
              newrow_vertical.style.width = areas[j]/5 + "px";

              verticalrow_saumat.append(newrow_vertical);
              console.log("numOfDivs__vertical " + numOfDivs__vertical);
              console.log("verticalrow_saumat " + verticalrow_saumat);
              console.log("areas[j] " + areas[j]);

              for (var g = 0; g < numOfDivs__vertical; g++) {
                newrow_vertical.classList.add("verticalrow_saumat");
                newrow_vertical.append(luo__sauma_vertical("",areas[j]));
              }
             
            }
            newrow_vertical.append(luo__sauma_vertical_aukoitus_last("",areas[j]));
          }
        saumat.appendChild(verticalrow_saumat);


        }
        else if(aukko1) {

          var area_left,area_1,area_right;
          const areas = new Array();

          area_left = parseFloat(aukko1.querySelector(".newDiv__x").innerText.replace("X: ",""));
          area_1 = parseFloat(aukko1.querySelector(".newDiv__width").innerText);
          area_right = w - area_1-area_left;

         

          areas.push(area_left);
          areas.push(area_1);
          areas.push(area_right);
          
          for (var j = 0; j < areas.length; j++) {


          if(document.querySelector("#settings__saumahanta-vas").checked || document.querySelector("#settings__saumahanta-oik").checked) {
              var newrow_vertical = document.createElement("div");
              numOfDivs__vertical = Math.trunc((areas[j]) / sauma__interval_vertical);

              // if(document.getElementById("settings__saumahanta-tasoitus").checked) {
              //   numOfDivs__vertical = Math.trunc(areas[j] / sauma__interval_vertical) +1;
              // }
              s_c=0;
              s_h=0;
              g = 0;
              tas_li = 0;

              newrow_vertical.classList.add("newrow_vertical");
              newrow_vertical.classList.add("seina_patka" + j);
              newrow_vertical.classList.add("seina_patka_x");

              
              newrow_vertical.style.width = areas[j]/5 + "px";
              newrow_vertical.setAttribute('id', "verticalrow"+String(areas[j]).replace(",","-").replace(" ","-"));

              verticalrow_saumat.append(newrow_vertical);

             for (var g = 0; g < numOfDivs__vertical; g++) {
                // //console.log(newrow_vertical);
                newrow_vertical.classList.add("verticalrow_saumat");
                //newrow_vertical.style.width = w/5 + "px";
                newrow_vertical.append(luo__sauma_vertical("",areas[j]));
              }
                // newrow_vertical.append(luo__sauma_vertical_aukoitus_first("",areas[j]));
              newrow_vertical.append(luo__sauma_vertical_aukoitus_last("",areas[j]));
          }

          else if(document.querySelector("#settings__saumahanta-tasoitus").checked) {

              var newrow_vertical = document.createElement("div");
              numOfDivs__vertical = Math.trunc((areas[j]) / sauma__interval_vertical);

              newrow_vertical.classList.add("newrow_vertical");
              newrow_vertical.classList.add("seina_patka" + j);
              newrow_vertical.classList.add("seina_patka_x");

              newrow_vertical.style.width = areas[j]/5 + "px";
              newrow_vertical.setAttribute('id', "verticalrow"+String(areas[j]).replace(",","-").replace(" ","-"));

              verticalrow_saumat.append(newrow_vertical);


              numOfDivs__vertical = Math.ceil(areas[j] / sauma__interval_vertical);
              // Itaratioiden määrä
              area__modcount = (parseFloat(areas[j])/25);
              // Moduuleita areassa
              sauma__modcount = Math.floor(area__modcount/numOfDivs__vertical);
              //Moduulimittojen määrä?
              tas_li = parseFloat(sauma__modcount)*25;     

              for (i = 0; i < numOfDivs__vertical; i++) {
                newrow_vertical.classList.add("verticalrow_saumat");
                newrow_vertical.append(luo__sauma_vertical("",areas[j],tas_li,i));
              }
              newrow_vertical.append(luo__sauma_vertical_aukoitus_last("",areas[j]));
          }
          saumat.appendChild(verticalrow_saumat); 
        }
      }
        else {
          console.log("wtf");
          alert("Jotain meni vikaan. Ota yhteyttä Koodariin");
        }

        

      
    }
    else {
      pystysaumat__aukkojenyli();
    }

  
  }

  function vaakasaumat__aukkojenmukaan() {
    h = parseFloat(document.querySelector("#box_h").value);
    w = parseFloat(document.querySelector("#box_w").value);
    var sauma__interval_vertical, sauma__interval_horizontal;
    if (document.getElementById("settings__sauma_pysty").checked) {
      sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;
    }
    if (document.getElementById("settings__sauma_vaaka").checked) {
      sauma__interval_vertical = document.querySelector("#settings__sauma_interval_y").value;
      sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_x").value;
    }
    var newrow_horizontal = document.createElement("div");
    var newrow_vertical = document.createElement("div");
    var canvas = document.querySelector("#box-wrapper > main");
    var aukkos = document.getElementsByClassName("aukko");
    myDivs_horizontal = [],
      myDivs_vertical = [],
      i = 0;
    var horizontalrow_saumat = document.createElement("div");
    var saumat;
    if (document.querySelector(".saumat__grandrow")) {
      saumat = document.querySelector(".saumat__grandrow");
    } else {
      saumat = document.createElement("div");
      saumat.classList.add("saumat__grandrow");
      canvas.appendChild(saumat);
    }
    if (document.querySelector(".drawarea > .canvas > .aukko")) {

      let v_aukkos = document.querySelectorAll(".drawarea > .canvas > .aukko");
      var aukko5,aukko4,aukko3,aukko2,aukko1;

      v_l = v_aukkos.length;

      if(v_l==1) {
        aukko1 = v_aukkos[0];
      }
      else if(v_l==2) {
        aukko1 = v_aukkos[1];
        aukko2 = v_aukkos[0];
      }
      else if(v_l==3) {
        aukko1 = v_aukkos[0];
        aukko2 = v_aukkos[1];
        aukko3 = v_aukkos[2];
      }
      else if(v_l==4) {
        aukko1 = v_aukkos[0];
        aukko2 = v_aukkos[1];
        aukko3 = v_aukkos[2];
        aukko4 = v_aukkos[3];
      }
      else if(v_l==5) {
        aukko1 = v_aukkos[0];
        aukko2 = v_aukkos[1];
        aukko3 = v_aukkos[2];
        aukko4 = v_aukkos[3];
        aukko5 = v_aukkos[4];
      }
      


      if(aukko1 && aukko2 && aukko3 && aukko4 && aukko5) {}
      else if(aukko1 && aukko2 && aukko3 && aukko4) {}
      else if(aukko1 && aukko2 && aukko3) {}
      else if (aukko1 && aukko2) {
        var aukko1_btm, aukko1_h, aukko1_up, aukko2_btm, aukko2_h, aukko2_up;

        const areas = new Array();

        const aukko1_btm_area = new Array();
        const a1_area = new Array();
        const aukko1_up_area = new Array();

        const aukko2_btm_area = new Array();
        const a2_area = new Array();
        const aukko2_up_area = new Array();


        a_h = parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")) + parseFloat(aukko1.querySelector(".newDiv__height").innerText - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")));
        a_btm = (-1) * parseFloat(aukko1.querySelector(".newDiv__height").innerText - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")));


        aukko1_btm_area.push(a_btm);
        aukko1_btm_area.push(0);


        a1_h = parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")) + parseFloat(aukko1.querySelector(".newDiv__height").innerText - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")));
        a1_btm = (-1) * parseFloat(aukko1.querySelector(".newDiv__height").innerText - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")));


        a1_area.push(a1_h);
        a1_area.push(a1_btm);


        a1_h2 = h - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", ""));
        a1_btm2 = parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", ""));


        aukko1_up_area.push(a1_h2);
        aukko1_up_area.push(a1_btm2);



        a_h = parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", "")) + parseFloat(aukko2.querySelector(".newDiv__height").innerText - parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", "")));
        a_btm = (-1) * parseFloat(aukko2.querySelector(".newDiv__height").innerText - parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", "")));



        aukko2_btm_area.push(a_btm);
        aukko2_btm_area.push(0);


        a1_h = parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", "")) + parseFloat(aukko2.querySelector(".newDiv__height").innerText - parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", "")));
        a1_btm = (-1) * parseFloat(aukko2.querySelector(".newDiv__height").innerText - parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", "")));


        a2_area.push(a1_h);
        a2_area.push(a1_btm);


        a1_h2 = h - parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", ""));
        a1_btm2 = parseFloat(aukko2.querySelector(".newDiv__y").innerText.replace("Y: ", ""));


        aukko2_up_area.push(a1_h2);
        aukko2_up_area.push(a1_btm2);


        areas.push(aukko1_btm_area);
        areas.push(a1_area);
        areas.push(aukko1_up_area);
        areas.push(aukko2_btm_area);
        areas.push(a2_area);
        areas.push(aukko2_up_area);


        var newrow_vertical = document.createElement("div");
        for (var j = 0; j < areas.length; j++) {
          var pos_id = "horizontalrow"+String(areas[j]).replace(",","-").replace(" ","-");
          if(document.getElementById(pos_id)) {
            console.log("exists, skip");
          }
          else {
            var newrow_horizontal = document.createElement("div");
            if(document.querySelector("#settings__saumahanta-tasoitus").checked) {
               numOfDivs__horizontal = Math.ceil(areas[j][0] / sauma__interval_horizontal);
            }
            else {
               numOfDivs__horizontal = Math.trunc(areas[j][0] / sauma__interval_horizontal);
            }
           
            s_c = 0;
            s_h = 0;
            g = 0;
            newrow_horizontal.classList.add("newrow_horizontal");
            newrow_horizontal.classList.add("seina_patka" + j);
            newrow_horizontal.classList.add("seina_patka_y");
            newrow_horizontal.setAttribute('id', pos_id);


            newrow_horizontal.setAttribute('title',areas[j]);
            newrow_horizontal.style.height = areas[j][0] / 5 + "px";
            newrow_horizontal.style.bottom = areas[j][1] / 5 + "px";
            newrow_horizontal.style.position = "absolute";

            newrow_horizontal.classList.add("aukko_patka");
            var dim = document.createElement("div");
            dim.innerHTML = areas[j];
            dim.classList.add("area_cord");
            dim.style.display = "none";
            newrow_horizontal.append(dim);
            horizontalrow_saumat.append(newrow_horizontal);
            // a1 = areas[j][0] + areas[j][1];
            newrow_horizontal.append(luo__sauma_horizontal_aukoitus_first());
            for (var g = 0; g < numOfDivs__horizontal; g++) {
              newrow_horizontal.classList.add("horizontalrow_saumat");
              //newrow_horizontal.style.height = h/5 +"px";
              newrow_horizontal.append(luo__sauma_horizontal("", areas[j][0]));
            }
            if(document.querySelector("#settings__saumahanta-tasoitus").checked) {
               
            }
            else {
               newrow_horizontal.append(luo__sauma_horizontal_aukoitus_last(areas[j][0]));
            }

          }
        }
          
        // if (a1 > a2 || a1 == a2) {
        //   var newrow_horizontal = document.createElement("div");
        //   numOfDivs__horizontal = Math.trunc((aukko1_up) / sauma__interval_horizontal);
        //   newrow_horizontal.classList.add("newrow_horizontal");
        //   newrow_horizontal.classList.add("viim_rivi");
        //   newrow_horizontal.classList.add("seina_patka" + j);
        //   newrow_horizontal.classList.add("seina_patka_y");
        //   newrow_horizontal.style.height = (aukko1_up) / 5 + "px";
        //   // newrow_horizontal.style.bottom = a1/5 + "px";
        //   newrow_horizontal.style.bottom = "auto";
        //   newrow_horizontal.style.position = "absolute";
        //   var dim = document.createElement("div");
        //   dim.innerHTML = "5," + aukko1_up + ",5";
        //   dim.classList.add("area_cord");
        //   dim.style.display = "none";
        //   newrow_horizontal.append(dim);
        //   s_c = 0;
        //   s_h = 0;
        //   g = 0;
        //   for (var g = 0; g < numOfDivs__horizontal; g++) {
        //     // //console.log(newrow_horizontal);
        //     newrow_horizontal.classList.add("horizontalrow_saumat");
        //     //newrow_horizontal.style.height = h/5 +"px";
        //     newrow_horizontal.append(luo__sauma_horizontal("", a1));
        //     console.log("a1 " + a1);
        //   }
        //   console.log("aukko1_up +++" + aukko1_up);
        //   newrow_horizontal.append(luo__sauma_horizontal_aukoitus_last(aukko1_up, "up_exception"));
        //   horizontalrow_saumat.classList.add("horizontalrow_saumat");
        //   horizontalrow_saumat.append(newrow_horizontal);
        //   // var seina = document.querySelector(".seina_patka0");
        //   // numOfDivs__horizontal = Math.trunc(a1 / sauma__interval_horizontal);
        //   // for (var g = 0; g < numOfDivs__horizontal; g++) {
        //   //   seina.append(luo__sauma_horizontal("",a1));
        //   //   console.log("a1 " + a1);
        //   // }
        // }
        // else if (a1 < a2) {
        //   var newrow_horizontal = document.createElement("div");
        //   numOfDivs__horizontal = Math.trunc((aukko2_up) / sauma__interval_horizontal);
        //   newrow_horizontal.classList.add("newrow_horizontal");
        //   newrow_horizontal.classList.add("seina_patka" + j);
        //   newrow_horizontal.classList.add("seina_patka_y");
        //   var dim = document.createElement("div");
        //   dim.innerHTML = "5," + aukko2_up + ",5";
        //   dim.classList.add("area_cord");
        //   dim.style.display = "none";
        //   newrow_horizontal.append(dim);
        //   newrow_horizontal.style.height = (aukko2_up) / 5 + "px";
        //   newrow_horizontal.style.bottom = a2 / 5 + "px";
        //   newrow_horizontal.style.position = "absolute";
        //   s_c = 0;
        //   s_h = 0;
        //   g = 0;
        //   for (var g = 0; g < numOfDivs__horizontal; g++) {
        //     // //console.log(newrow_horizontal);
        //     newrow_horizontal.classList.add("horizontalrow_saumat");
        //     //newrow_horizontal.style.height = h/5 +"px";
        //     newrow_horizontal.append(luo__sauma_horizontal("", a2));
        //   }
        //   horizontalrow_saumat.append(newrow_horizontal);
        //   var seina = document.querySelector(".seina_patka1");
        //   numOfDivs__horizontal = Math.trunc(a2 / sauma__interval_horizontal);
        //   for (var g = 0; g < numOfDivs__horizontal; g++) {
        //     newrow_horizontal.classList.add("horizontalrow_saumat");
        //     //newrow_horizontal.style.height = h/5 +"px";
        //     newrow_horizontal.append(luo__sauma_horizontal("", a2));
        //   }
        //   // make_lastsauma_horizontal(a2);
        // }
      } 
      else if (aukko1) {
        var aukko1_top_btm, bottom_area, top_area;
        const areas = new Array();

        const a1_area = new Array();
        const a1_bottom = new Array();
        const a1_top = new Array();

        aukko1_h = parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")) + parseFloat(aukko1.querySelector(".newDiv__height").innerText - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")));
        aukko1_up = h - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", ""));
        aukko1_btm = (-1) * parseFloat(aukko1.querySelector(".newDiv__height").innerText - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")));
        a1_area.push(aukko1_up);
        a1_area.push(aukko1_h);
        a1_area.push(aukko1_btm);
        a1 = aukko1_h + aukko1_btm;
        
        aukko1btm_h = parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", "")) - parseFloat(aukko1.querySelector(".newDiv__height").innerText);
        a1_bottom.push(0);
        a1_bottom.push(aukko1btm_h);
        a1_bottom.push(0);

        aukko1up_h = h - parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", ""));
        aukko1up_btm = parseFloat(aukko1.querySelector(".newDiv__y").innerText.replace("Y: ", ""));
        a1_top.push(0);
        a1_top.push(aukko1up_h);
        a1_top.push(aukko1up_btm);


        horizontalrow_saumat.classList.add("horizontalrow_saumat");
        areas.push(a1_bottom);
        areas.push(a1_area);
        areas.push(a1_top);
        // areas.push(area1_2);
        // areas.push(area_2);
        // areas.push(area_right);

        var newrow_vertical = document.createElement("div");
        for (var j = 0; j < areas.length; j++) {

            var newrow_horizontal = document.createElement("div");
            numOfDivs__horizontal = Math.trunc(areas[j][1] / sauma__interval_horizontal);
            s_c = 0;
            s_h = 0;
            g = 0;
            newrow_horizontal.classList.add("newrow_horizontal");
            newrow_horizontal.classList.add("seina_patka" + j);
            newrow_horizontal.classList.add("seina_patka_y");
            newrow_horizontal.setAttribute('title',areas[j]);
            newrow_horizontal.style.height = areas[j][1] / 5 + "px";
            newrow_horizontal.style.bottom = areas[j][2] / 5 + "px";
            newrow_horizontal.style.position = "absolute";

            newrow_horizontal.classList.add("aukko_patka");
            var dim = document.createElement("div");
            dim.innerHTML = areas[j];
            dim.classList.add("area_cord");
            dim.style.display = "none";
            newrow_horizontal.append(dim);
            horizontalrow_saumat.append(newrow_horizontal);
            a1 = areas[j][1] + areas[j][2];


          if(document.querySelector("#settings__saumahanta-vas").checked || document.querySelector("#settings__saumahanta-oik").checked) {
           
            newrow_horizontal.append(luo__sauma_horizontal_aukoitus_first());
            for (var g = 0; g < numOfDivs__horizontal; g++) {
              newrow_horizontal.classList.add("horizontalrow_saumat");
              //newrow_horizontal.style.height = h/5 +"px";
              newrow_horizontal.append(luo__sauma_horizontal("", a1));
            }

            newrow_horizontal.append(luo__sauma_horizontal_aukoitus_last(areas[j][1]));
          }
          else if(document.querySelector("#settings__saumahanta-tasoitus").checked) {
              // newrow_horizontal.append(luo__sauma_horizontal_aukoitus_first());

              // for (var g = 0; g < numOfDivs__horizontal; g++) {
              //   newrow_horizontal.classList.add("horizontalrow_saumat");
              //   //newrow_horizontal.style.height = h/5 +"px";
              //   newrow_horizontal.append(luo__sauma_horizontal("", a1));
              // }

              // newrow_horizontal.append(luo__sauma_horizontal_aukoitus_last(areas[j][1]));


              numOfDivs__horizontal = Math.ceil(areas[j][1] / sauma__interval_horizontal);
              // Itaratioiden määrä
              area__modcount = (parseFloat(areas[j][1])/25);
              // Moduuleita areassa
              sauma__modcount = Math.floor(area__modcount/numOfDivs__horizontal);
              //Moduulimittojen määrä?
              tas_li = parseFloat(sauma__modcount)*25;
              
              console.log("numOfDivs__horizontal: "+numOfDivs__horizontal+" A: "+areas[j][1]);
              console.log("area__modcount: "+area__modcount+" A: "+areas[j[1]]);              
              console.log("sauma__modcount: "+sauma__modcount+" A: "+areas[j][1]);
              console.log("tas_li: "+tas_li+" A: "+areas[j][1]);              

              newrow_horizontal.append(luo__sauma_horizontal_aukoitus_first());
              for (i = 0; i < numOfDivs__horizontal; i++) {
                newrow_horizontal.classList.add("horizontalrow_saumat");
                newrow_horizontal.append(luo__sauma_horizontal("",areas[j][1],tas_li,i));
              }
              newrow_horizontal.append(luo__sauma_horizontal_aukoitus_last("",areas[j][1]));

          }
          
        }
      } 

      newrow_horizontal.classList.add("horizontalrow_saumat");
      horizontalrow_saumat.classList.add("horizontalrow_saumat");
      saumat.prepend(horizontalrow_saumat);
    }
    else {
      vaakasaumat__aukkojenyli();
    }
    
  }

  function saumoitus__deleterest() {
    if (document.querySelector(".verticalrow_saumat")) {
          let verticalrow_saumat = document.querySelectorAll(".verticalrow_saumat");
          for (var i=0;i<verticalrow_saumat.length;i+=1){
            verticalrow_saumat[i].remove();
          }
    }

    if (document.querySelector(".horizontalrow_saumat")) {
          let horizontalrow_saumat = document.querySelectorAll(".horizontalrow_saumat");
          for (var i=0;i<horizontalrow_saumat.length;i+=1){
            horizontalrow_saumat[i].remove();
          }
    }

    if (document.querySelector(".newrow_vertical")) {
      let newrow_vertical = document.querySelectorAll(".newrow_vertical");
      for (var i=0;i<newrow_vertical.length;i+=1){
        newrow_vertical[i].remove();
      }

      if (document.querySelector(".drawarea__left_container > sauma__downctrl_container")) {
        document.querySelector(".drawarea__left_container > sauma__downctrl_container ").innerHTML = "";
      }

      if (document.querySelector(".drawarea__right > .sauma__controls")) {
        document.querySelector(".drawarea__right > .sauma__controls").innerHTML = "";
      }
    }
    if (document.querySelector(".newrow_horizontal")) {
      let newrow_horizontal = document.querySelectorAll(".newrow_horizontal");
      for (var i=0;i<newrow_horizontal.length;i+=1){
        newrow_horizontal[i].remove();
      }
      
    }

    if (document.querySelector(".levyt")) {
      document.querySelector(".levyt").remove(); 
    }
    if(document.querySelector(".sauma") || document.querySelector(".sauma__controls") || document.querySelector(".sauma__horizontal_ctrl") || document.querySelector(".sauma__horizontal_ctrldown") || document.querySelector(".sauma__vertical_ctrldown") || document.querySelector(".drawarea__controls_fouritems > li") || document.querySelector(".levy") || document.querySelector(".verticalrow_saumat") || document.querySelector(".horizontalrow_saumat")) {
      let saumas = document.querySelectorAll(".sauma");
      for (var i=0;i<saumas.length;i+=1){
        saumas[i].remove();
      }

      let sauma__controls = document.querySelectorAll(".sauma__controls");
      for (var i=0;i<sauma__controls.length;i+=1){
        sauma__controls[i].remove();
      }

      let sauma__horizontal_ctrl = document.querySelectorAll(".sauma__horizontal_ctrl");
      for (var i=0;i<sauma__horizontal_ctrl.length;i+=1){
        sauma__horizontal_ctrl[i].remove();
      }

      let sauma__horizontal_ctrldown = document.querySelectorAll(".sauma__horizontal_ctrldown");
      for (var i=0;i<sauma__horizontal_ctrldown.length;i+=1){
        sauma__horizontal_ctrldown[i].remove();
      }

      let sauma__vertical_ctrldown = document.querySelectorAll(".sauma__vertical_ctrldown");
      for (var i=0;i<sauma__vertical_ctrldown.length;i+=1){
        sauma__vertical_ctrldown[i].remove();
      }

      let drawarea__controls_four_vaaka = document.querySelectorAll(".drawarea__controls_four-vaaka > li");
      for (var i=0;i<drawarea__controls_four_vaaka.length;i+=1){
        drawarea__controls_four_vaaka[i].remove();
      }

      let drawarea__controls_four_pysty = document.querySelectorAll(".drawarea__controls_four-pysty > li");
      for (var i=0;i<drawarea__controls_four_pysty.length;i+=1){
        drawarea__controls_four_pysty[i].remove();
      }

      let levys = document.querySelectorAll(".levy");
      for (var i=0;i<levys.length;i+=1){
        levys[i].remove();
      }
      let verticalrow_saumats = document.querySelectorAll(".verticalrow_saumat");
      for (var i=0;i<verticalrow_saumats.length;i+=1){
        verticalrow_saumats[i].remove();
      }

      let horizontalrow_saumats = document.querySelectorAll(".horizontalrow_saumat");
      for (var i=0;i<horizontalrow_saumats.length;i+=1){
        horizontalrow_saumats[i].remove();
      }

      let horizontalrow_saumat = document.querySelectorAll(".horizontalrow_saumat");
      for (var i=0;i<horizontalrow_saumat.length;i+=1){
        horizontalrow_saumat[i].remove();
      }
    }
  }

  function saumoita() {

    document.querySelector("#settings__sauma_interval_x").value = document.querySelector("#settings__sauma_intervalx").value;
    document.querySelector("#settings__sauma_interval_y").value = document.querySelector("#settings__sauma_intervaly").value;
    s_c=0;
    s_h=0;
    h = parseFloat(document.querySelector("#box_h").value);
    w = parseFloat(document.querySelector("#box_w").value);

    
    var newrow_horizontal = document.createElement("div");
    var newrow_vertical = document.createElement("div");
    var canvas = document.querySelector("#box-wrapper > main");
    var aukkos = document.getElementsByClassName("aukko");

    myDivs_horizontal = [],
    myDivs_vertical = [],
    i = 0;

  

    saumoitus__deleterest();

  
    
    if (document.getElementById("settings__sauma_pysty").checked) {
      if(document.querySelector(".levyt")) {
        document.querySelector(".levyt").style.flexDirection = "row";
      }
      
      var sauma__interval_vertical = document.querySelector("#settings__sauma_interval_x").value;
      var sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_y").value;


      numOfDivs__horizontal = Math.trunc((h-5*2) / sauma__interval_horizontal);
      numOfDivs__vertical = Math.trunc((w-5*2) / sauma__interval_vertical);


      if (document.getElementById('settings__saumahanta-oik').checked) {
          if (document.getElementById('saumoitus__sauma_one').checked) {
            pystysaumat__aukkojenyli();
            vaakasaumat__aukkojenyli();

          }
          else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenmukaan();
          }
          else if (document.getElementById("saumoitus__sauma_two").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenyli();   
          }
          else if (document.getElementById("saumoitus__sauma_three").checked) {
            pystysaumat__aukkojenyli();
            vaakasaumat__aukkojenmukaan();
          }
      }
      else if (document.getElementById('settings__saumahanta-vas').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
          pystysaumat__aukkojenyli();
          vaakasaumat__aukkojenyli();
        }
        else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          pystysaumat__aukkojenmukaan();
          vaakasaumat__aukkojenmukaan();
        }
        else if (document.getElementById("saumoitus__sauma_two").checked) {
          pystysaumat__aukkojenmukaan();
          vaakasaumat__aukkojenyli();   
        }
        else if (document.getElementById("saumoitus__sauma_three").checked) {
          vaakasaumat__aukkojenmukaan();
          pystysaumat__aukkojenyli();
        }

      }
      else if (document.getElementById('settings__saumahanta-tasoitus').checked) {

        if (document.getElementById('saumoitus__sauma_one').checked) {
          pystysaumat__aukkojenyli();
          vaakasaumat__aukkojenyli();
        }
        else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
          pystysaumat__aukkojenmukaan();
          vaakasaumat__aukkojenmukaan();
        }
        else if (document.getElementById("saumoitus__sauma_two").checked) {
          pystysaumat__aukkojenmukaan();
          vaakasaumat__aukkojenyli();   
        }
        else if (document.getElementById("saumoitus__sauma_three").checked) {
          vaakasaumat__aukkojenmukaan();
          pystysaumat__aukkojenyli();
        }
      }
     

    }
    else if (document.getElementById("settings__sauma_vaaka").checked) {
      if(document.querySelector(".levyt")) {
        document.querySelector(".levyt").style.flexDirection = "row-reverse";
      }
      
      var sauma__interval_vertical = document.querySelector("#settings__sauma_interval_y").value;
      var sauma__interval_horizontal = document.querySelector("#settings__sauma_interval_x").value;
      numOfDivs__horizontal = Math.trunc(h / sauma__interval_horizontal);
      numOfDivs__vertical = Math.trunc(w / sauma__interval_vertical);
      if(document.getElementById("settings__saumahanta-tasoitus").checked) {
        numOfDivs__horizontal = Math.ceil(h / sauma__interval_horizontal);
        numOfDivs__vertical = Math.ceil(w / sauma__interval_vertical);
      }

      if (document.getElementById('settings__saumahanta-oik').checked) {
          if (document.getElementById('saumoitus__sauma_one').checked) {
            pystysaumat__aukkojenyli();
            vaakasaumat__aukkojenyli();
          }
          else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenmukaan();
          }
          else if (document.getElementById("saumoitus__sauma_two").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenyli();   
          }
          else if (document.getElementById("saumoitus__sauma_three").checked) {
            vaakasaumat__aukkojenmukaan();
            pystysaumat__aukkojenyli();
          }
      }
      else if (document.getElementById('settings__saumahanta-vas').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
            pystysaumat__aukkojenyli();
            vaakasaumat__aukkojenyli();
          }
          else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenmukaan();
          }
          else if (document.getElementById("saumoitus__sauma_two").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenyli();   
          }
          else if (document.getElementById("saumoitus__sauma_three").checked) {
            vaakasaumat__aukkojenmukaan();
            pystysaumat__aukkojenyli();
          }
      }
      else if (document.getElementById('settings__saumahanta-tasoitus').checked) {
        if (document.getElementById('saumoitus__sauma_one').checked) {
            pystysaumat__aukkojenyli();
            vaakasaumat__aukkojenyli();
          }
          else if (document.getElementById("saumoitus__sauma_two").checked && document.getElementById("saumoitus__sauma_three").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenmukaan();
          }
          else if (document.getElementById("saumoitus__sauma_two").checked) {
            pystysaumat__aukkojenmukaan();
            vaakasaumat__aukkojenyli();   
          }
          else if (document.getElementById("saumoitus__sauma_three").checked) {
            vaakasaumat__aukkojenmukaan();
            pystysaumat__aukkojenyli();
          }
      }
    }
    
    calculateamounts();
    fixmissing__saumoitus();

    aukoitus__siirto();


  }

  function fixmissing__saumoitus() {
    h = parseFloat(document.querySelector("#box_h").value);
    w = parseFloat(document.querySelector("#box_w").value);


    horizontal = 0;
    vertical = 0;
    let sauma__horizontal_ctrl = document.querySelectorAll(".sauma__horizontal_ctrl");
    for (var i=0;i<sauma__horizontal_ctrl.length;i+=1) {
      horizontal += parseFloat(sauma__horizontal_ctrl[i].value);
    }

    if(document.querySelector(".sauma__vertical_ctrl")) {
      let sauma__vertical_ctrl = document.querySelector(".sauma__vertical_ctrl");
      for (var i=0;i<sauma__vertical_ctrl.length;i+=1) {
        vertical += parseFloat(sauma__vertical_ctrl[i].value);
      }
    }
    

    height__check = h-horizontal;
    width__check = w-vertical;

    var sauma__horizontal_ctrl_down, sauma__vertical_ctrl_down;
    if(height__check == 0 || height__check == 15) {
        // console.log("ALL OKE");
    }
    else {
      var sauma__horizontal_ctrl_ = document.querySelector(".sauma_viim b.sauma__horizontal_ctrl.sauma__horizontal_ctrl-righted");
      if(sauma__horizontal_ctrl_) {
        if (sauma__horizontal_ctrl_.value == 5 || sauma__horizontal_ctrl_.value == 0) {
          sauma__horizontal_ctrl_.value = height__check;
          sauma__horizontal_ctrl_.style.height = height__check/5 + "px";
          sauma__horizontal_ctrl_.style.bottom = (-1) * height__check/5 + "px";

          aukko = sauma__horizontal_ctrl_.parentElement;

          sauma__horizontal_ctrl_down = aukko.querySelector(".sauma__control_down");

          sauma__horizontal_ctrl_down.innerHTML = height__check-10;
          sauma__horizontal_ctrl_down.style.height = height__check/5 + "px";
          sauma__horizontal_ctrl_down.style.bottom = (-1) * height__check/5 + "px";
         }
      }
      
    }

    if(width__check == 0 || width__check == 15) {
      // console.log("ALL OKE");
    }
    else {
      var sauma__vertical_ctrl_ = document.querySelector(".sauma__vertical_ctrl");
      if(sauma__vertical_ctrl_) {
        if (sauma__vertical_ctrl_.value == 5 || sauma__vertical_ctrl_.value == 0) {
          sauma__vertical_ctrl_.value = width__check;
          sauma__vertical_ctrl_.style.width = width__check/5 + "px";
          sauma__vertical_ctrl_.style.left = (-1) * width__check/5 + "px";
        }
      }
      
    }

    if(document.querySelector(".verticalrow_saumat > .sauma__horizontal")) {

      let todel_ = document.querySelectorAll(".verticalrow_saumat > .sauma__horizontal");
      todel_.forEach(function(item) {
        item.remove();
      });
    }


    //REMOVE NAN

    let nansauma = document.querySelectorAll(".sauma__control_down");
    for (var i=0;i<nansauma.length;i+=1) {

      if(nansauma[i].innerText == "NaN") {
        nansauma[i].parentElement.parentElement.remove();
      }

      if(nansauma[i].innerText == "-5" || nansauma[i].innerText == "5" || nansauma[i].innerText == "15" || nansauma[i].innerText == "0" || nansauma[i].innerText == "-10"|| nansauma[i].innerText == "-14"|| nansauma[i].innerText == "-24") {
        nansauma[i].parentElement.parentElement.remove();
      }

    }

    let nansauma2 = document.querySelectorAll(".sauma__horizontal_ctrl");
    for (var i = nansauma2.length - 1; i >= 0; i--) {
      if(nansauma2[i].value == "NaN" || nansauma2[i].value == "NaN\n1") {
        nansauma2[i].parentElement.remove();
      }

      if(nansauma2[i].innerText == "15" || nansauma2[i].innerText == "0" || nansauma2[i].innerText == "-10"|| nansauma2[i].innerText == "-14"|| nansauma2[i].innerText == "-24") {
        nansauma2[i].parentElement.remove();
      }
    }
    


    // REMOVE DOUBLE AREAS

    (function findDuplicateIds() {
        var ids = {};
        var all = document.all || document.getElementsByTagName("*");
        for (var i = 0, l = all.length; i < l; i++) {
          if(all[i]) {
              var id = all[i].id;
              if (id) {
                  if (ids[id]) {
                    if(String(id).includes("horizontal")) {
                      if(document.querySelector("#"+id)) {
                        document.querySelector("#"+id).remove();
                      }
                      
                    }
                      
                    
                  } else {
                      ids[id] = 1;
                  }
              }
          }
            
        }
    })();



    (function findDuplicateIds() {
        var ids = {};
        var all = document.all || document.getElementsByTagName("*");
        for (var i = 0, l = all.length; i < l; i++) {
          if(all[i]) {
              var id = all[i].id;
              if (id) {
                  if (ids[id]) {
                    if(String(id).includes("horizontal")) {
                      if(document.querySelector("#"+id)) {
                        document.querySelector("#"+id).remove();
                      }
                      
                    }
                      
                    
                  } else {
                      ids[id] = 1;
                  }
              }
          }
            
        }
    })();


  }

  function aukoitus__siirto() {
    if(document.querySelector(".seina_patka_x")) {
      let seina_patka_x = document.querySelectorAll(".seina_patka_x");

      //reversing array
      for (let i = 0; i < seina_patka_x .length / 2; i++) {
          let temp = seina_patka_x[i];
          seina_patka_x[i] = seina_patka_x[seina_patka_x.length - 1 - i];
          seina_patka_x[seina_patka_x.length - 1 - i] = temp;
        }

      seina_width=0;
      

      for (let i = 0; i < seina_patka_x.length; i++)  {

        let saumat = seina_patka_x[i].querySelectorAll(".sauma");
          sauma_width=0;
          for (var s = saumat.length - 1; s >= 0; s--) {
            console.log(saumat[s]);
            if(saumat[s].querySelector("input")) {
              saumat_left_old = parseFloat(saumat[s].style.left);
              saumat_left_oldparent = parseFloat(saumat[s].parentElement.style.width);
              this_sauma_width=parseFloat(saumat[s].querySelector(".sauma__controls > input").value)/5;
              current_left=saumat_left_old+saumat_left_oldparent;
              cur_left=this_sauma_width+seina_width+sauma_width;

              console.log("this_sauma_width: " + this_sauma_width*5);
              console.log("saumat_left_old: " + saumat_left_old);
              console.log("saumat_left_oldparent: " + saumat_left_oldparent);
              console.log("current_left: " + current_left);
              console.log("cur_left: " + cur_left);

              saumat[s].style.left= cur_left+"px";
              mainparent = saumat[s].parentElement.parentElement;

              mainparent.append(saumat[s]);
              sauma_width+=saumat[s].querySelector(".sauma__control").value/5;
            }
          }
          seina_width +=parseFloat(seina_patka_x[i].style.width);
          console.log(seina_width);
          seina_patka_x[i].remove();
        
      }
    }

     if(document.querySelector(".seina_patka_y")) {
      let seina_patka_y = document.querySelectorAll(".seina_patka_y");
      console.log(seina_patka_y);
      // //reversing array
      for (let i = 0; i < seina_patka_y.length / 2; i++) {
          let temp = seina_patka_y[i];
          seina_patka_y[i] = seina_patka_y[seina_patka_y.length - 1 - i];
          seina_patka_y[seina_patka_y.length - 1 - i] = temp;
        }

      seina_height=0;
      

      for (let i = 0; i < seina_patka_y.length; i++)  {
        
        let saumat = seina_patka_y[i].querySelectorAll(".sauma");
          sauma_height=0;
          for (var s = saumat.length - 1; s >= 0; s--) {
            console.log(saumat[s]);
            if(saumat[s].querySelector("input")) {
              saumat_left_old = parseFloat(saumat[s].style.bottom);
              saumat_left_oldparent = parseFloat(saumat[s].parentElement.style.bottom);
              this_sauma_height=parseFloat(saumat[s].querySelector("input").value)/5;
              current_left=saumat_left_old+saumat_left_oldparent;
              cur_left=this_sauma_height+sauma_height+seina_height;

              console.log("this_sauma_height: " + this_sauma_height*5);
              console.log("saumat_left_old: " + saumat_left_old);
              console.log("saumat_left_oldparent: " + saumat_left_oldparent);
              console.log("current_left: " + current_left);
              console.log("cur_left: " + cur_left);

              saumat[s].style.bottom= cur_left+"px";
              mainparent = saumat[s].parentElement.parentElement;

              mainparent.append(saumat[s]);
              sauma_height+=this_sauma_height;
            }
            
          }
          seina_height +=parseFloat(seina_patka_y[i].style.height);
          console.log(seina_height);
          seina_patka_y[i].remove();
        
      }
    }
    

  }

  function aukkojenallapoisto() {
    // body...
  }
</script>
<script>
  // document.querySelector('.drawarea__section').style.display = "none";

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


      if (input_step == 'drawscreen_section_zero') {
        input_step = 'drawscreen_section_one';
          $("#drawscreen_section_zero").show();
          $('.drawarea__controls_zero').show();
          $("#drawscreen_section_zero").slideDown(200);   

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

          // document.querySelector(".drawarea__controls_zero").style.display = 'block';
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
          document.querySelector(".sauma__downctrl_container").classList.remove("disabled");
          document.querySelector(".sauma__rightctrl_container").classList.remove("disabled");
          // Edit Sauma's for 2.6-2.7
          var saumas = document.querySelectorAll(".sauma");
          var sauma__vertical_ctrl = document.querySelectorAll(".sauma__vertical_ctrl");
          if (document.querySelector(".newrow_vertical")) {document.querySelector(".newrow_vertical").remove();}
          if (document.querySelector(".newrow_horizontal")) {document.querySelector(".newrow_horizontal").remove();}
          if (saumas) {
            for (var i=0;i<saumas.length;i+=1){
              saumas[i].remove();
            }
          }
          if (sauma__vertical_ctrl) {
            for (var i=0;i<sauma__vertical_ctrl.length;i+=1){
              sauma__vertical_ctrl[i].remove();
            }
          }
          // Reklamation things for 2.8
          document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
          document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
          for (var i = 0; i < da__topitems_eight.length; i++) {
              da__topitems_eight[i].style.display = "none";
          }
      }

      if (input_step == 'drawscreen_section_one') {
        $("#drawscreen_section_one").show();
        $('.drawarea__controls_one').show();
        $("#drawscreen_section_one").slideDown(200);
        $('.drawarea__section').css('display', 'flex');
        $('.levy__section').css('display', 'none');

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
        if (document.querySelector(".newrow_vertical")) {document.querySelector(".newrow_vertical").remove();}
        if (document.querySelector(".newrow_horizontal")) {document.querySelector(".newrow_horizontal").remove();}
        if (saumas) {
          for (var i=0;i<saumas.length;i+=1){
            saumas[i].remove();
          }
        }
        if (sauma__vertical_ctrl) {
          for (var i=0;i<sauma__vertical_ctrl.length;i+=1){
            sauma__vertical_ctrl[i].remove();
          }
        }
        // Reklamation things for 2.8
        document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
        document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
        for (var i = 0; i < da__topitems_eight.length; i++) {
            da__topitems_eight[i].style.display = "none";
        }
      }

      if (input_step == 'drawscreen_section_two') {
          $("#drawscreen_section_two").show();
          $('.drawarea__controls_two').show();
          $("#drawscreen_section_two").slideDown(200);
          $('.drawarea__section').css('display', 'flex');
          $('.levy__section').css('display', 'none');

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
          document.querySelector(".drawarea__top").classList.remove("drawarea__top-reijat");

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
          if(document.querySelector(".newrow_vertical")) {document.querySelector(".newrow_vertical").remove();}
          if(document.querySelector(".newrow_horizontal")) {document.querySelector(".newrow_horizontal").remove();}

          if(saumas) {
            for (var i=0;i<saumas.length;i+=1){
              saumas[i].style.zIndex = '3';
              saumas[i].classList.remove('deformed');
            }
          }
          if(sauma__vertical_ctrl) {
            for (var i=0;i<sauma__vertical_ctrl.length;i+=1){
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
         
      }

      if (input_step == 'drawscreen_section_three') {
          $("#drawscreen_section_three").show();
          $('.drawarea__controls_three').show();
          $("#drawscreen_section_three").slideDown(200);
          $('.drawarea__section').css('display', 'flex');
          $('.levy__section').css('display', 'none');

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
          document.querySelector(".drawarea__top").classList.add("drawarea__top-reijat");
          document.querySelector(".drawarea__top").classList.add("drawarea__top-reijat");

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
          if(document.querySelector(".newrow_vertical")) {document.querySelector(".newrow_vertical").remove();}
          if(document.querySelector(".newrow_horizontal")) {document.querySelector(".newrow_horizontal").remove();}

          if(saumas) {
            for (var i=0;i<saumas.length;i+=1){
              saumas[i].style.zIndex = '3';
              saumas[i].classList.remove('deformed');
            }
          }
          if(sauma__vertical_ctrl) {
            for (var i=0;i<sauma__vertical_ctrl.length;i+=1){
              sauma__vertical_ctrl[i].remove();
            }
          }

          // Reklamation things for 2.8
          document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
          document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
          for (var i = 0; i < da__topitems_eight.length; i++) {
              da__topitems_eight[i].style.display = "none";
          }
      }

      if (input_step == 'drawscreen_section_four') {
        $("#drawscreen_section_four").show();
        $('.drawarea__controls_four').show();
        $("#drawscreen_section_four").slideDown(200);
        $('.drawarea__section').css('display', 'flex');
          $('.levy__section').css('display', 'none');

        document.querySelector(".drawarea__section").style.display = 'flex';
        document.querySelector("#box-wrapper").style.display = 'block';
        
        var drawarea__left = document.querySelector(".drawarea__left");
        drawarea__left.onclick = function() { luo__sauma_hdrag() };

        var drawarea__bottom = document.querySelector(".drawarea__bottom");
        drawarea__bottom.onclick = function() { luo__sauma_horizontal() };

        // for (var i = 0; i < drawarea__top_circle.length; i++) {
        //     drawarea__top_circle[i].style.display = "none";
        // }
          



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
        if(saumas) {
          for (var i=0;i<saumas.length;i+=1){
            saumas[i].style.zIndex = '3';
            saumas[i].classList.remove('deformed');
          }
        }

        var drawarea__top_item = document.querySelectorAll(".drawarea__top_item");
        if(drawarea__top_item) {
          for (var i=0;i<drawarea__top_item.length;i+=1){
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
        function luo__sauma_hdrag() {
          var sauma__interval_vertical = parseFloat(document.querySelector("#settings__sauma_interval_x").value) / 5;

          const sauma = document.createElement("div");
          const sauma__control = document.createElement("input");
          const sauma__control_down = document.createElement("b");

          const sauma__controls = document.createElement("div");
          const sauma__controls_del = document.createElement("div");
          const sauma__controls_type = document.createElement("input");

          const newDiv__comment = document.createElement("li");
          const newDiv__comment_del = document.createElement("i");
          const newrow_horizontal = document.createElement("div");

          sauma.className = "sauma";
          sauma.classList.add("sauma__vertical");
          sauma.classList.add("sauma__vertical_added");
          sauma.innerHTML = "";
          let id = "id" + Math.random().toString(16).slice(2);

          // sauma.style.marginLeft = (parseFloat(sauma__interval_vertical) - 1.5) + 'px';

          


          sauma__control.classList.add("sauma__vertical_ctrl");
          sauma__control.classList.add("sauma__vertical_ctrl-lefted")
          sauma__control.classList.add(id);
          sauma__control.setAttribute("name", id);

          // if (saumaCtrlsList.length >= 1) {
          //   sauma__control.style.top = +saumaCtrlsList[saumaCtrlsList.length - 1].style.top.replace('%', '') + 5 + '%';
          // } else if (saumaCtrlsList.length == 0) {
          //   sauma__control.style.top = '-50%';
          // }

          sauma__control.style.top = '-50%';

          saumaCtrlsList.push(sauma__control);

          sauma__control_down.classList.add(id);

          sauma.classList.add(id);
          
          sauma__controls.classList.add(id);
          sauma__controls.setAttribute("name", id);
          sauma__controls_del.classList.add(id);
          sauma__controls_del.setAttribute("name", id);
          sauma__controls_type.classList.add(id);
          sauma__controls_type.setAttribute("name", id);
          sauma__controls_type.classList.add("lineinput");
          sauma__control_down.classList.add("sauma__vertical_ctrldown");
          sauma.setAttribute("id", id);
          newDiv__comment.setAttribute("name", id);
          newDiv__comment.classList.add(id);
          newDiv__comment_del.classList.add("newDiv__comment_del");
          newDiv__comment_del.setAttribute("name", id);
          sauma.setAttribute("name", id);
          sauma__control_down.setAttribute("name", id);
          sauma__controls.classList.add("sauma__controls");
          
          sauma__controls_type.type = "text";
          sauma__controls_type.value = "ST5";
          // sauma__controls_type.setAttribute("onclick", "sauma__change(this);");
          sauma__control.setAttribute("mousedown","sauma__move(this);");
          sauma__controls_del.setAttribute("onclick","sauma__del(this);");
          sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
          sauma__controls_del.classList.add("sauma__controls_del");
          newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
          

          sauma__control_down.innerHTML = "0";
          newDiv__comment.innerHTML="Sauma #" + s_c;
          newDiv__comment_del.innerHTML = "";

          sauma.prepend(sauma__control);
          sauma__controls.appendChild(sauma__controls_del);
          sauma__controls.appendChild(sauma__controls_type);
          sauma__controls.appendChild(sauma__control_down);
          sauma.prepend(sauma__controls);
          
          newDiv__comment.appendChild(newDiv__comment_del);
          document.querySelector(".drawarea__controls_four-pysty").prepend(newDiv__comment);

          sauma__control_down.innerHTML = parseFloat(sauma__interval_vertical)-10;
          sauma__control_down.classList.add("sauma__control_down");
          sauma__control_down.classList.add("sauma__control_down_added");
          document.querySelector('.drawarea__bottom_container').prepend(sauma__control_down);

          var nhzrtl = document.querySelector(".newrow_vertical");

          if (typeof(nhzrtl) != 'undefined' && nhzrtl != null){
            nhzrtl.prepend(sauma);
            sauma__controls_del.innerHTML = nhzrtl.children.length;
          } else {
            newrow_horizontal.classList.add("newrow_vertical");
            document.querySelector("#box-wrapper > main").prepend(newrow_horizontal);
            newrow_horizontal.prepend(sauma);
            sauma__controls_del.innerHTML = "A";
          }

       

        }

        function luo__sauma_vdrag() {
            var sauma__interval_horizontal = parseFloat(document.querySelector("#settings__sauma_interval_y").value) / 10;

            var sauma = document.createElement("div");
            var sauma__control = document.createElement("b");
            var sauma__control_down = document.createElement("b");

            var sauma__controls = document.createElement("div");
            var sauma__controls_del = document.createElement("div");
            var sauma__controls_type = document.createElement("input");

            sauma.className = "sauma";
            sauma.classList.add("sauma__horizontal");
            sauma.innerHTML = "";
            var id = "id" + Math.random().toString(16).slice(2);

            // sauma.style.marginTop = (parseFloat(sauma__interval_horizontal) - 1.5) + 'px';


            sauma__control.classList.add("sauma__horizontal_ctrl");
            sauma__control.classList.add("sauma__horizontal_ctrl-lefted");
            // sauma__control.setAttribute("onclick", "obj = this.getAttribute('name');this.parentElement.remove();document.querySelector('.'+obj).remove();");
            sauma__control.classList.add(id);
            sauma__control.setAttribute("name", id);

            if (saumaCtrlsListV.length >= 1) {
              sauma__control.style.left = +saumaCtrlsListV[saumaCtrlsListV.length - 1].style.left.replace('%', '') + 5 + '%';
            } else if (saumaCtrlsList.length == 0) {
              sauma__control.style.left = '0';
            }

            saumaCtrlsListV.push(sauma__control);

            sauma__control_down.classList.add(id);
            sauma__control_down.setAttribute("name", id);

            sauma__control_down.innerHTML = "0";
            sauma__control_down.classList.add("sauma__horizontal_ctrldown");

            sauma__controls.innerHTML = "";
            sauma__controls.classList.add(id);
            sauma__controls.setAttribute("name", id);
            sauma__controls_del.classList.add(id);
            sauma__controls_del.setAttribute("name", id);
            sauma__controls_type.classList.add(id);
            sauma__controls_type.setAttribute("name", id);
            sauma__controls_type.classList.add("lineinput");
            sauma__controls.classList.add("sauma__controls");
            sauma__controls.classList.add("sauma__controls-left");
            sauma__controls_type.type = "text";
            sauma__controls_type.value = "ST1";
            // sauma__controls_type.setAttribute("onclick", "sauma__change(this);");
            sauma__controls_del.setAttribute("onclick","sauma__del(this);");
            sauma__control.setAttribute("onchange", "changedimensions_sauma(this);");
            sauma__controls_del.classList.add("sauma__controls_del");

            sauma__controls_del.innerHTML = "";
            sauma__controls.appendChild(sauma__controls_del);
            sauma__controls.appendChild(sauma__controls_type);

            sauma.setAttribute("onclick", "");
            document.querySelector('.sauma__downctrl_container').prepend(sauma__control_down);
            document.querySelector('.drawarea__right').append(sauma__controls);
            document.querySelector('.drawarea__right').append(sauma__control);

            var newrow_vertical = document.createElement("div");
            var newDiv__comment = document.createElement("li");
            newDiv__comment.setAttribute("name", id);
            newDiv__comment.classList.add(id);
            newDiv__comment.innerHTML = "Sauma";
            var newDiv__comment_del = document.createElement("i");
            newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
            newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
            sauma__control.setAttribute("onclick", "sauma__del(this);");
            sauma.setAttribute("id", id);
            sauma.classList.add(id);
            newDiv__comment_del.classList.add("newDiv__comment_del");
            newDiv__comment_del.setAttribute("name", id);
            newDiv__comment.appendChild(newDiv__comment_del);
            document.querySelector(".drawarea__controls_four-vaaka").prepend(newDiv__comment);
            var nvrtcl = document.querySelector(".newrow_horizontal");

            if (typeof(nvrtcl) != 'undefined' && nvrtcl != null) {
                nvrtcl.prepend(sauma);
                sauma__controls_del.innerHTML = nvrtcl.children.length;

                if (nvrtcl.children.length == 2) {
                  sauma__controls_del.innerHTML = "B";
                }

                if (nvrtcl.children.length == 3) {
                  sauma__controls_del.innerHTML = "C";
                }

                if (nvrtcl.children.length == 4) {
                  sauma__controls_del.innerHTML = "D";
                }

                if (nvrtcl.children.length == 5) {
                  sauma__controls_del.innerHTML = "E";
                }

                if (nvrtcl.children.length == 6) {
                  sauma__controls_del.innerHTML = "F";
                }

                if (nvrtcl.children.length == 7) {
                  sauma__controls_del.innerHTML = "G";
                }

                if (nvrtcl.children.length == 8) {
                  sauma__controls_del.innerHTML = "H";
                }

                if (nvrtcl.children.length == 9) {
                  sauma__controls_del.innerHTML = "I";
                }

                if (nvrtcl.children.length == 10) {
                  sauma__controls_del.innerHTML = "J";
                }

                if (nvrtcl.children.length == 11) {
                  sauma__controls_del.innerHTML = "K";
                }

                if (nvrtcl.children.length == 12) {
                  sauma__controls_del.innerHTML = "L";
                }

                if (nvrtcl.children.length == 13) {
                  sauma__controls_del.innerHTML = "M";
                }

                if (nvrtcl.children.length == 14) {
                  sauma__controls_del.innerHTML = "N";
                }

                if (nvrtcl.children.length == 15) {
                  sauma__controls_del.innerHTML = "O";
                }

                if (nvrtcl.children.length == 16) {
                  sauma__controls_del.innerHTML = "P";
                }

                if (nvrtcl.children.length == 17) {
                  sauma__controls_del.innerHTML = "Q";
                }

                if (nvrtcl.children.length == 18) {
                  sauma__controls_del.innerHTML = "R";
                }

                if (nvrtcl.children.length == 19) {
                  sauma__controls_del.innerHTML = "S";
                }

                if (nvrtcl.children.length == 20) {
                  sauma__controls_del.innerHTML = "T";
                }
            } else {
                newrow_horizontal = document.createElement("div");
                newrow_horizontal.classList.add("newrow_horizontal");
                document.querySelector("#box-wrapper > main").prepend(newrow_horizontal);
                newrow_horizontal.append(sauma);
                sauma__controls_del.innerHTML = "A";
            }

           

            
        }

      }

      if(input_step == 'drawscreen_section_five') {

          for (var i = 0; i < da__controls.length; i++) {
            da__controls[i].style.display = "none";
          }
          $("#drawscreen_section_five").show();
          $('.drawarea__controls_five').show();              
          $("#drawscreen_section_five").slideDown(200);
          $('.drawarea__section').css('display', 'flex');
          $('.drawarea__controls_five').css('display', 'block');
          $('.levy__section').css('display', 'none');

          document.querySelector(".drawarea__section").style.display = 'flex';
          document.querySelector("#box-wrapper").style.display = 'block';
          var drawarea__left = document.querySelector(".drawarea__left");
          var drawarea__bottom = document.querySelector(".drawarea__bottom");
            

         

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
          if(saumas) {
            for (var i=0;i<saumas.length;i+=1){
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
          
      }

      if (input_step == 'drawscreen_section_tyostot') {
        $('.box-wrapper').css('display', 'none');
        $('.levy__section').css('display', 'flex');
        $('.drawarea__section').css('display', 'flex');
        $('#drawscreen_section_tyostot').show();
        kiinnikkeet__siirto();
        let tyostot = document.querySelectorAll(".levy_input"); 

        for (var i = 0; i < tyostot.length; i++) {

          var tyosto_id = tyostot[i].getAttribute("id");
          if(tyosto_id == 'k_yrmod' || tyosto_id == 'k_yrlevy') {
            tyostot[i].parentElement.style.marginTop = parseFloat(tyostot[i].value)/5 + "px";
          }
          else if(tyosto_id == 'k_armod' || tyosto_id == 'k_arlevy') {
            tyostot[i].parentElement.style.marginTop = parseFloat((-1)* parseFloat(tyostot[i].value)/5) + "px";
          }
          else if(tyosto_id == 'k_ormod' || tyosto_id == 'k_orlevy') {
            tyostot[i].parentElement.style.marginLeft = parseFloat((-1)* parseFloat(tyostot[i].value)/5) + "px";
          }
          else if(tyosto_id == 'k_vrmod' || tyosto_id == 'k_vrlevy') {
            tyostot[i].parentElement.style.marginLeft = parseFloat(tyostot[i].value)/5 + "px";
          }
        }

        let sauma__controllers = document.querySelectorAll(".sauma__controls");

        for (var i = sauma__controllers.length - 1; i >= 0; i--) {
          sauma__controllers[i].style.opacity = "1";
          sauma__controllers[i].style.cursor = "not-allowed";
        }


        kp_one = document.querySelector("#kiinniketys__pkiinnike_one");
        kp_two = document.querySelector("#kiinniketys__pkiinnike_two");
        kp_three = document.querySelector("#kiinniketys__pkiinnike_three");
        kp_four = document.querySelector("#kiinniketys__pkiinnike_four");

        kv_one = document.querySelector("#kiinniketys__vkiinnike_one");
        kv_two = document.querySelector("#kiinniketys__vkiinnike_two");
        kv_three = document.querySelector("#kiinniketys__vkiinnike_three");
        kv_four = document.querySelector("#kiinniketys__vkiinnike_four");

        function tyostanaytto(evt) {
          d_levyt = document.querySelectorAll(".levyt > .levy");
          for (var i = d_levyt.length - 1; i >= 0; i--) {
            tyosta(d_levyt[i],evt);
          }

          tyostot__tyosto_input = document.querySelectorAll(".tyostot__tyosto > input");

          for (var i = tyostot__tyosto_input.length - 1; i >= 0; i--) {
            // tyostot__tyosto_input[i].remove();
            tyostot__tyosto_input[i].setAttribute("onchange","change__tyostocord(this);");
            tyostot__tyosto_input[i].setAttribute("onchange","change__tyostocord(this);");
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
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }

          tyostanaytto(evt);
        });
        kp_two.addEventListener("click", function() {
          let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
          kp_one.checked = false;
          kp_three.checked = false;
          kp_four.checked = false;
          evt = 2;

          for (var i = levyt.length - 1; i >= 0; i--) {
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }

          tyostanaytto(evt);
        });
        kp_three.addEventListener("click", function() {
          let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
          kp_one.checked = false;
          kp_two.checked = false;
          kp_four.checked = false;
          evt = 3;

          for (var i = levyt.length - 1; i >= 0; i--) {
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }
          tyostanaytto(evt);
        });
        kp_four.addEventListener("click", function() {
          let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
          kp_one.checked = false;
          kp_two.checked = false;
          kp_three.checked = false;
          evt = 4;

          for (var i = levyt.length - 1; i >= 0; i--) {
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }
          tyostanaytto(evt);
        });

        kv_one.addEventListener("click", function() {
          let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
          kv_two.checked = false;
          kv_three.checked = false;
          kv_four.checked = false;
          evt = 5;

          for (var i = levyt.length - 1; i >= 0; i--) {
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }

          tyostanaytto(evt);
        });
        kv_two.addEventListener("click", function() {
          let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
          kv_one.checked = false;
          kv_three.checked = false;
          kv_four.checked = false;
          evt = 6;

          for (var i = levyt.length - 1; i >= 0; i--) {
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }

          tyostanaytto(evt);
        });
        kv_three.addEventListener("click", function() {
          let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
          kv_one.checked = false;
          kv_two.checked = false;
          kv_four.checked = false;
          evt = 7;

          for (var i = levyt.length - 1; i >= 0; i--) {
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }

          tyostanaytto(evt);
        });
        kv_four.addEventListener("click", function() {
          let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
          


          kv_one.checked = false;
          kv_two.checked = false;
          kv_three.checked = false;
          evt = 8;

          for (var i = levyt.length - 1; i >= 0; i--) {
            if(levyt[i].classList.contains("visible") || evt != null) {
              tyosta(levyt[i],evt);
            }
          }

          tyostanaytto(evt);

        });


      }

      if(input_step == 'drawscreen_section_esikatselu') {

          for (var i = 0; i < da__controls.length; i++) {
            da__controls[i].style.display = "none";
          }
          $("#drawscreen_section_esikatselu").show();
          $('.drawarea__controls_esikatselu').show();              
          $('.drawarea__navigation').show();              
          $("#drawscreen_section_esikatselu").slideDown(200);
          $('.drawarea__section').css('display', 'flex');
          $('.levy__section').css('display', 'none');

          document.querySelector(".drawarea__section").style.display = 'flex';
          document.querySelector("#box-wrapper").style.display = 'block';
          var drawarea__left = document.querySelector(".drawarea__left");
          var drawarea__bottom = document.querySelector(".drawarea__bottom");
            
          if(document.getElementById("settings__sauma_vaaka").checked) {
            document.getElementById("esikatselu__saumoitussuunta").innerHTML = "vaakaan";
          }
          else if(document.getElementById("settings__sauma_pysty").checked) {
            document.getElementById("esikatselu__saumoitussuunta").innerHTML = "pystyyn";
          }
         

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
          document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
          for (var i = 0; i < da__topitems_eight.length; i++) {
              da__topitems_eight[i].style.display = "none";
          }

          let five_levy_closers = document.querySelectorAll(".closer");

          for (var i = five_levy_closers.length - 1; i >= 0; i--) {
            five_levy_closers[i].remove();
          }

          let k_levys = document.querySelectorAll(".levy");
          for (var i = k_levys.length - 1; i >= 0; i--) {
            fixkiinnikkeet(k_levys[i]);
          }

          

          // draggable measure


          function k_drag(element) {
            let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
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

          
      }

      if (input_step == 'drawscreen_section_six') {
          $("#drawscreen_section_six").show();
          $('.drawarea__controls_six').show();
          $("#drawscreen_section_six").slideDown(200);
          $('.drawarea__section').css('display', 'flex');
          $('.levy__section').css('display', 'none');

          levyt = canvas.querySelectorAll(".levy");

          for (var i = levyt.length - 1; i >= 0; i--) {
            tallenna_kiinnikepaikat(levyt[i]);
          }
          

          document.querySelector(".drawarea__section").style.display = 'flex';
          document.querySelector("#box-wrapper").style.display = 'block';

          var drawarea__left = document.querySelector(".drawarea__left");
          var drawarea__bottom = document.querySelector(".drawarea__bottom");

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

          const saumas = document.querySelectorAll(".sauma");
          let horizontalBleam = 0;
          let verticalBleam = 0;
          const verticalAlphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

          if (saumas) {
            for (var i = 0; i < saumas.length; i += 1) {
              saumas[i].style.zIndex = '-1';
              saumas[i].classList.add('deformed');
            }
          }


          let items = canvas.querySelectorAll(".levy");
          
          

          const tableExcel = document.querySelector('.excel table tbody');
          const equals = [];
          let indexes = 1;
          let dataForSend = [
            ["Type (drawing)","Materialcode","Pituus (X)","Leveys (Y)","Thickness","Structure","Quantity","Plus","Part number","Nimi 1","Nimi 2","MPR","Palletgroup","Prioriteetti","Asiakas","Asennus","Työstöt","","X KPL","Y KPL","Yhteensä","","","","","","Tarra","Diameter","X1","X2","X3","X4","X5","X6","X7","X8","X9","X10","Y1","Y2","Y3","Y4","Y4","Y6","Y7","Y8","Y9","Y10","X","Y","X","Y","PR1_X","PR1_Y","PR1_DX","PR1_DY","PR2_X","PR2_Y","PR1_DX","PR2_DY","PR3_X","PR3_Y","PR3_DX","PR3_DY","PR4_X","PR4_Y","PR4_DX","PR4_DY","PF1_X","PF1_Y","PF1_DX","PF1_DY","PF2_X","PF2_Y","PF2_DX","PF2_DY","CH 0=OFF 1= ON","Y Vasen","Y oikea","Y Vasen","Y oikea","X ala","x ylä","X ala","X ylä","WH1_X","VH1_Y","VH1_L","VH1_KPL","VH1_K","","","","","AR Edge 1","YR Edge 1","VR Edge 1","OR Edge 1","AR Edge 2","YR Edge 2","VR Edge 2","OR Edge 2","AR Trim","YR Trim","VR Trim","OR Trim","Yhdistä Xx-XX","Yhdistä Yx-YX"]
          ];

          items.forEach((item) => {
            const row = document.createElement('tr');
            var h1 = document.createElement('td');
            var h2 = document.createElement('td');
            var h3 = document.createElement('td');
            var h4 = document.createElement('td');
            var h5 = document.createElement('td');
            var h6 = document.createElement('td');
            var h7 = document.createElement('td');
            var h8 = document.createElement('td');
            var h9 = document.createElement('td');
            var h10 = document.createElement('td');
            var h11 = document.createElement('td');
            var h12 = document.createElement('td');
            var h13 = document.createElement('td');
            var h14 = document.createElement('td');
            var h15 = document.createElement('td');
            var h16 = document.createElement('td');
            var h17 = document.createElement('td');
            var h18 = document.createElement('td');
            var h19 = document.createElement('td');
            var h20 = document.createElement('td');
            var h21 = document.createElement('td');
            var h22 = document.createElement('td');
            var h23 = document.createElement('td');
            var h24 = document.createElement('td');
            var h25 = document.createElement('td');
            var h26 = document.createElement('td');
            var h27 = document.createElement('td');
            var h28 = document.createElement('td');
            var h29 = document.createElement('td');
            var h30 = document.createElement('td');
            var h31 = document.createElement('td');
            var h32 = document.createElement('td');
            var h33 = document.createElement('td');
            var h34 = document.createElement('td');
            var h35 = document.createElement('td');
            var h36 = document.createElement('td');
            var h37 = document.createElement('td');
            var h38 = document.createElement('td');
            var h39 = document.createElement('td');
            var h40 = document.createElement('td');
            var h41 = document.createElement('td');
            var h42 = document.createElement('td');
            var h43 = document.createElement('td');
            var h44 = document.createElement('td');
            var h45 = document.createElement('td');
            var h46 = document.createElement('td');
            var h47 = document.createElement('td');
            var h48 = document.createElement('td');
            var h49 = document.createElement('td');
            var h50 = document.createElement('td');
            var h51 = document.createElement('td');
            var h52 = document.createElement('td');
            var h53 = document.createElement('td');
            var h54 = document.createElement('td');
            var h55 = document.createElement('td');
            var h56 = document.createElement('td');
            var h57 = document.createElement('td');
            var h58 = document.createElement('td');
            var h59 = document.createElement('td');
            var h60 = document.createElement('td');
            var h61 = document.createElement('td');
            var h62 = document.createElement('td');
            var h63 = document.createElement('td');
            var h64 = document.createElement('td');
            var h65 = document.createElement('td');
            var h66 = document.createElement('td');
            var h67 = document.createElement('td');
            var h68 = document.createElement('td');
            var h69 = document.createElement('td');
            var h70 = document.createElement('td');
            var h71 = document.createElement('td');
            var h72 = document.createElement('td');
            var h73 = document.createElement('td');
            var h74 = document.createElement('td');
            var h75 = document.createElement('td');
            var h76 = document.createElement('td');
            var h77 = document.createElement('td');
            var h78 = document.createElement('td');
            var h79 = document.createElement('td');
            var h80 = document.createElement('td');
            var h81 = document.createElement('td');
            var h82 = document.createElement('td');
            var h83 = document.createElement('td');
            var h84 = document.createElement('td');
            var h85 = document.createElement('td');
            var h86 = document.createElement('td');
            var h87 = document.createElement('td');
            var h88 = document.createElement('td');
            var h89 = document.createElement('td');
            var h90 = document.createElement('td');
            var h91 = document.createElement('td');
            var h92 = document.createElement('td');
            var h93 = document.createElement('td');
            var h94 = document.createElement('td');
            var h95 = document.createElement('td');
            var h96 = document.createElement('td');
            var h97 = document.createElement('td');
            var h98 = document.createElement('td');
            var h99 = document.createElement('td');
            var h100 = document.createElement('td');
            var h101 = document.createElement('td');
            var h102 = document.createElement('td');
            var h103 = document.createElement('td');
            var h104 = document.createElement('td');
            var h105 = document.createElement('td');
            var h106 = document.createElement('td');
            var h107 = document.createElement('td');
            var h108 = document.createElement('td');

            h1.innerHTML = '';
            h2.innerHTML = '';
            if(document.querySelector("#settings__sauma_pysty").checked) {
              h3.innerHTML = item.querySelector(".levy_h").innerText;
              h4.innerHTML = item.querySelector(".levy_w").innerText;
            }
            else if(document.querySelector("#settings__sauma_vaaka").checked) {
              
              h3.innerHTML = item.querySelector(".levy_w").innerText;
              h4.innerHTML = item.querySelector(".levy_h").innerText;
              
            }
            
            h5.innerHTML = '';
            h6.innerHTML = '';
            let equalsI = 0;
            items.forEach((line, index) => {
              if ((line[0] === item[0] && line[1] === item[1]) || line[1] === item[0] && line[0] === item[1]) {
                equalsI++;
                equals.push(index);
              }
            });

            tyostot = item.querySelector(".l_meta").value;
            t_a = tyostot.split("},{");

            let v_r = [];
            let r_r = [];
            var aggregate_val = [];


            let l_t_x = [];
            let l_t_y = [];

            x_kiinnikkeet = t_a[0].replace("{","").replace("}","");
            y_kiinnikkeet = t_a[1].replace("{","").replace("}","");

            x_kiinnikkeet_ = x_kiinnikkeet.split(",");
            y_kiinnikkeet_ = y_kiinnikkeet.split(",");

            for (var x = x_kiinnikkeet_.length - 1; x >= 0; x--) {
              l_t_x.push(parseFloat(x_kiinnikkeet_[x]));
            }

            for (var y = y_kiinnikkeet_.length - 1; y >= 0; y--) {
              l_t_y.push(parseFloat(y_kiinnikkeet_[y]));
            }


            
            var h29_="",h30_="",h31_="",h32_="",h33_="",h34_="",h35_="",h36_="",h37_="",h38_="",h39_="",h40_="",h41_="",h42_="",h43_="",h44_="",h45_="",h46_="",h47_="",h48_="";


            let uniqueChars_x = l_t_x;

            let uniqueChars_y = l_t_y;

            // console.log(uniqueChars_x);
            // console.log(uniqueChars_y);
            
            if(uniqueChars_x[0]) {
              h29_ = uniqueChars_x[0];
            }
            if(uniqueChars_x[1]) {
              h30_ = uniqueChars_x[1];
            }
            if(uniqueChars_x[2]) {
              h31_ = uniqueChars_x[2];
            }
            if(uniqueChars_x[3]) {
              h32_ = uniqueChars_x[3];
            }
            if(uniqueChars_x[4]) {
              h33_ = uniqueChars_x[4];
            }
            if(uniqueChars_x[5]) {
              h34_ = uniqueChars_x[5];
            }
            if(uniqueChars_x[6]) {
              h35_ = uniqueChars_x[6];
            }
            if(uniqueChars_x[7]) {
              h36_ = uniqueChars_x[7];
            }
            if(uniqueChars_x[8]) {
              h37_ = uniqueChars_x[8];
            }
            if(uniqueChars_x[9]) {
              h38_ = uniqueChars_x[9];
            }
            if(uniqueChars_y[0]) {
              h39_ = parseFloat(uniqueChars_y[0])+25;
            }
            if(uniqueChars_y[1]) {
              h40_ = uniqueChars_y[1];
            }
            if(uniqueChars_y[2]) {
              h41_ = uniqueChars_y[2];
            }
            if(uniqueChars_y[3]) {
              h42_ = uniqueChars_y[3];
            }
            if(uniqueChars_y[4]) {
              h43_ = uniqueChars_y[4];
            }
            if(uniqueChars_y[5]) {
              h44_ = uniqueChars_y[5];
            }
            if(uniqueChars_y[6]) {
              h45_ = uniqueChars_y[6];
            }
            if(uniqueChars_y[7]) {
              h46_ = uniqueChars_y[7];
            }
            if(uniqueChars_y[8]) {
              h47_ = uniqueChars_y[8];
            }
            if(uniqueChars_y[9]) {
              h48_ = uniqueChars_y[9];
            }
            h7.innerHTML = '1';
            h8.innerHTML = ' ';
            h9.innerHTML = indexes;
            h10.innerHTML = item.querySelector(".levy_name").innerText;
            h11.innerHTML = indexes;
            h12.innerHTML = ' ';
            h13.innerHTML = '1';
            h14.innerHTML = '1';
            h15.innerHTML = 'PRIOR';
            h16.innerHTML = '-';
            h17.innerHTML = '-';
            h18.innerHTML = '-';
            h19.innerHTML = uniqueChars_x.length;
            h20.innerHTML = uniqueChars_y.length;
            h21.innerHTML = -1 + t_a.length;
            h22.innerHTML = '';
            h23.innerHTML = '';
            h24.innerHTML = '';
            h25.innerHTML = '';
            h26.innerHTML = '';
            h27.innerHTML = '8';
            h28.innerHTML = aggregate_val[0];
            h29.innerHTML = h29_;
            h30.innerHTML = h30_;
            h31.innerHTML = h31_;
            h32.innerHTML = h32_;
            h33.innerHTML = h33_;
            h34.innerHTML = h34_;
            h35.innerHTML = h35_;
            h36.innerHTML = h36_;
            h37.innerHTML = h37_;
            h38.innerHTML = h38_;
            h39.innerHTML = h39_;
            h40.innerHTML = h40_;
            h41.innerHTML = h41_;
            h42.innerHTML = h42_;
            h43.innerHTML = h43_;
            h44.innerHTML = h44_;
            h45.innerHTML = h45_;
            h46.innerHTML = h46_;
            h47.innerHTML = h47_;
            h48.innerHTML = h48_;
            h49.innerHTML = '-';
            h50.innerHTML = '-';
            h51.innerHTML = '-';
            h52.innerHTML = '-';
            h53.innerHTML = '-';
            h54.innerHTML = '-';
            h55.innerHTML = '-';
            h56.innerHTML = '-';
            h57.innerHTML = '-';
            h58.innerHTML = '-';
            h59.innerHTML = '-';
            h60.innerHTML = '-';
            h61.innerHTML = '-';
            h62.innerHTML = '-';
            h63.innerHTML = '-';
            h64.innerHTML = '-';
            h65.innerHTML = '-';
            h66.innerHTML = '-';
            h67.innerHTML = '-';
            h68.innerHTML = '-';
            h69.innerHTML = '-';
            h70.innerHTML = '-';
            h71.innerHTML = '-';
            h72.innerHTML = '-';
            h73.innerHTML = '-';
            h74.innerHTML = '-';
            h75.innerHTML = '-';
            h76.innerHTML = '-';
            h77.innerHTML = '-';
            h78.innerHTML = '-';
            h79.innerHTML = '-';
            h80.innerHTML = '-';
            h81.innerHTML = '-';
            h82.innerHTML = '-';
            h83.innerHTML = '-';
            h84.innerHTML = '-';
            h85.innerHTML = '-';
            h86.innerHTML = '-';
            h87.innerHTML = '-';
            h88.innerHTML = '-';
            h89.innerHTML = '-';
            h90.innerHTML = '-';
            h91.innerHTML = '-';
            h92.innerHTML = '-';
            h93.innerHTML = '-';
            h94.innerHTML = '-';
            h95.innerHTML = '-';
            h96.innerHTML = '-';
            h97.innerHTML = '-';
            h98.innerHTML = '-';
            h99.innerHTML = '-';
            h100.innerHTML = '-';
            h101.innerHTML = '-';
            h102.innerHTML = '-';
            h103.innerHTML = '-';
            h104.innerHTML = '-';
            h105.innerHTML = '-';
            h106.innerHTML = '-';
            h107.innerHTML = '-';
            h108.innerHTML = '-';

            dataForSend.push([h1.textContent, h2.textContent, h3.textContent, h4.textContent, h5.textContent, h6.textContent, h7.textContent, h8.textContent, h9.textContent, h10.textContent, h11.textContent, h12.textContent, h13.textContent, h14.textContent, h15.textContent, h16.textContent, h17.textContent, h18.textContent, h19.textContent,h20.textContent,h21.textContent,h22.textContent,h23.textContent,h24.textContent,h25.textContent,h26.textContent,h27.textContent,h28.textContent,h29.textContent,h30.textContent,h31.textContent,h32.textContent,h33.textContent,h34.textContent,h35.textContent,h36.textContent,h37.textContent,h38.textContent,h39.textContent,h40.textContent,h41.textContent,h42.textContent,h43.textContent,h44.textContent,h45.textContent,h46.textContent,h47.textContent,h48.textContent,h49.textContent,h50.textContent,h51.textContent,h52.textContent,h53.textContent,h54.textContent,h55.textContent,h56.textContent,h57.textContent,h58.textContent,h59.textContent,h60.textContent,h61.textContent,h62.textContent,h63.textContent,h64.textContent,h65.textContent,h66.textContent,h67.textContent,h68.textContent,h69.textContent,h70.textContent,h71.textContent,h72.textContent,h73.textContent,h74.textContent,h75.textContent,h76.textContent,h77.textContent,h78.textContent,h79.textContent,h80.textContent,h81.textContent,h82.textContent,h83.textContent,h84.textContent,h85.textContent,h86.textContent,h87.textContent,h88.textContent,h89.textContent,h90.textContent,h91.textContent,h92.textContent,h93.textContent,h94.textContent,h95.textContent,h96.textContent,h97.textContent,h98.textContent,h99.textContent,h100.textContent,h101.textContent,h102.textContent,h103.textContent,h104.textContent,h105.textContent,h106.textContent,h107.textContent,h108.textContent]);

            row.append(h1)
            row.append(h2)
            row.append(h3)
            row.append(h4)
            row.append(h5)
            row.append(h6)
            row.append(h7)
            row.append(h8)
            row.append(h9)
            row.append(h10)
            row.append(h11)
            row.append(h12)
            row.append(h13)
            row.append(h14)
            row.append(h15)
            row.append(h16)
            row.append(h17)
            row.append(h18)
            row.append(h19)
            row.append(h20)
            row.append(h21)
            row.append(h22)
            row.append(h23)
            row.append(h24)
            row.append(h25)
            row.append(h26)
            row.append(h27)
            row.append(h28)
            row.append(h29)
            row.append(h30)
            row.append(h31)
            row.append(h32)
            row.append(h33)
            row.append(h34)
            row.append(h35)
            row.append(h36)
            row.append(h37)
            row.append(h38)
            row.append(h39)
            row.append(h40)
            row.append(h41)
            row.append(h42)
            row.append(h43)
            row.append(h44)
            row.append(h45)
            row.append(h46)
            row.append(h47)
            row.append(h48)
            row.append(h49)
            row.append(h50)
            row.append(h51)
            row.append(h52)
            row.append(h53)
            row.append(h54)
            row.append(h55)
            row.append(h56)
            row.append(h57)
            row.append(h58)
            row.append(h59)
            row.append(h60)
            row.append(h61)
            row.append(h62)
            row.append(h63)
            row.append(h64)
            row.append(h65)
            row.append(h66)
            row.append(h67)
            row.append(h68)
            row.append(h69)
            row.append(h70)
            row.append(h71)
            row.append(h72)
            row.append(h73)
            row.append(h74)
            row.append(h75)
            row.append(h76)
            row.append(h77)
            row.append(h78)
            row.append(h79)
            row.append(h80)
            row.append(h81)
            row.append(h82)
            row.append(h83)
            row.append(h84)
            row.append(h85)
            row.append(h86)
            row.append(h87)
            row.append(h88)
            row.append(h89)
            row.append(h90)
            row.append(h91)
            row.append(h92)
            row.append(h93)
            row.append(h94)
            row.append(h95)
            row.append(h96)
            row.append(h97)
            row.append(h98)
            row.append(h99)
            row.append(h100)
            row.append(h101)
            row.append(h102)
            row.append(h103)
            row.append(h104)
            row.append(h105)
            row.append(h106)
            row.append(h107)
            row.append(h108)

            tableExcel.append(row);
            indexes++;
        });

          document.querySelector('.get_excel').addEventListener('click', () => {
        
            // window.location.href = window.location.protocol + '//' + window.location.host + `/get_table.php?data='${JSON.stringify(dataForSend)}'`;
            window.location.href = window.location.protocol + '//' + window.location.host + `/get_table.php?data='${JSON.stringify(dataForSend)}'&name=<?= $post['title'] ?>`;
            
            
          });
          

          // Reklamation things for 2.8
          document.querySelector("#box-wrapper").classList.remove("drawarea__eight");
          document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';
          for (var i = 0; i < da__topitems_eight.length; i++) {
              da__topitems_eight[i].style.display = "none";
          }
          
      }
      
      if (input_step == 'drawscreen_section_seven') {
          $("#drawscreen_section_seven").show();
          $('.drawarea__controls_seven').show();
          $("#drawscreen_section_seven").slideDown(200);
          $('.drawarea__section').css('display', 'flex');
          $('.levy__section').css('display', 'none');

          document.querySelector(".drawarea__section").style.display = 'flex';
          document.querySelector("#box-wrapper").style.display = 'block';

            var drawarea__left = document.querySelector(".drawarea__left");
          drawarea__left.onclick = function() {};
          var drawarea__bottom = document.querySelector(".drawarea__bottom");
          drawarea__bottom.onclick = function() { };
            
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
          if(saumas) {
            for (var i=0;i<saumas.length;i+=1){
              saumas[i].style.zIndex = '2';
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
          document.querySelector(".drawarea__right > span").innerHTML = 'Reklamaatiot ja huomiot';

          for (var i = 0; i < da__topitems_eight.length; i++) {
              da__topitems_eight[i].style.display = "none";
          }
        

      }

      if (input_step == 'drawscreen_section_eight') {
          $("#drawscreen_section_eight").show();
          $('.drawarea__controls_eight').show();
          $("#drawscreen_section_eight").slideDown(200);
          $('.drawarea__section').css('display', 'flex');
          $('.levy__section').css('display', 'none');
          document.querySelector(".drawarea__section").style.display = 'flex';
          document.querySelector("#box-wrapper").style.display = 'block';

            var drawarea__left = document.querySelector(".drawarea__left");
          drawarea__left.onclick = function() {};
          var drawarea__bottom = document.querySelector(".drawarea__bottom");
          drawarea__bottom.onclick = function() { };
            



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

          document.querySelector(".drawarea__right > span").innerHTML = 'Sanalliset reklamaatiot ja huomiot';

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

      // Modal button
      var recl_btn = document.getElementsByClassName("recl_btn");
      var reclamation__popup = document.querySelector("#reclamation__popup");
        document.querySelectorAll('.recl_btn').forEach(recl_modal => {
          recl_modal.addEventListener('click', event => {
            if(recl_modal.classList.contains('recl_btn')) {
              reclamation__popup.classList.add("two");
              reclamation__popup.classList.remove("out");
              document.querySelector("body").classList.add("modal-active");
            }
              
          })
        });

        document.querySelectorAll('.modal_close_btn').forEach(recl_modal => {
            recl_modal.addEventListener('click', event => {
              reclamation__popup.classList.remove("two");
              reclamation__popup.classList.add("out");
              document.querySelector("body").classList.remove("modal-active");
                
            })
        });


        // function drawarea__left__sauma() {
        //   alert ("Hello World!");
        // }


             
          
      
    }, 300);
  }

  function change__levykiinnike(argument) {
    let tyostot = document.querySelectorAll(".levy_input"); 

    for (var i = 0; i < tyostot.length; i++) {

      var tyosto_id = tyostot[i].getAttribute("id");
      if(tyosto_id == 'k_yrmod' || tyosto_id == 'k_yrlevy') {
        tyostot[i].parentElement.style.marginTop = -(8/5) + parseFloat(tyostot[i].value)/5 + "px";
        document.querySelector("#settings__levy_yr_arvo").value = document.querySelector("#k_yrlevy").value;
      }
      else if(tyosto_id == 'k_armod' || tyosto_id == 'k_arlevy') {
        tyostot[i].parentElement.style.marginTop = -(8/5) + parseFloat((-1)* parseFloat(tyostot[i].value)/5) + "px";
        document.querySelector("#settings__levy_ar_arvo").value = document.querySelector("#k_arlevy").value; 
      }
      else if(tyosto_id == 'k_ormod' || tyosto_id == 'k_orlevy') {
        tyostot[i].parentElement.style.marginLeft = -(8/5) + parseFloat((-1)* parseFloat(tyostot[i].value)/5) + "px";
        document.querySelector("#settings__levy_or_arvo").value = document.querySelector("#k_orlevy").value; 
      }
      else if(tyosto_id == 'k_vrmod' || tyosto_id == 'k_vrlevy') {
        tyostot[i].parentElement.style.marginLeft = -(8/5) + parseFloat(tyostot[i].value)/5 + "px";
        document.querySelector("#settings__levy_or_arvo").value = document.querySelector("#k_vrlevy").value; 
      }
    }
  }
  var addFunctionOnWindowLoad = function(callback) {
      if (window.addEventListener) {
          window.addEventListener('load', callback, false);
      } else {
          window.attachEvent('onload', callback);
      }
  }

  addFunctionOnWindowLoad(refresh__drawcontrols);
    
  function submitprogress(b) {
    setTimeout(function() {
    
      var input_step = $('#step_drawscreen').val();
      
        //console.log("step processed" + input_step);

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
      value = h + " " + w;
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

          value=u+","+r+","+_u+","+_r;
          $(obj).val(value);
      });
      var _poisjaava_alue = value;

      $('.keskusmittapiste_cord').each(function(i, obj) {
          l = $("#drawarea__origo_central").css("left");
          t = $("#drawarea__origo_central").css("top");
          value = l + "," + t;
          $(obj).val(value);
      });
      var _keskusmittapiste_cord = value;

      const x = [];
      $('.reklamaatiot').each(function(i, obj) {
        
        if($("#mitta__huomiot")) {
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

      // $('.mittapisteet').each(function(i, obj) {
      //   const _U_ = [];
      //   $('.mittapiste_element').each(function(i_, obj_) {
      //     m_name = $('.drawarea__controls_elementsone > span:nth-child(')+[i_]+(')');
      //     m_l = $(obj_).css("left");
      //     m_t = $(obj_).css("top");

      //     _U_.appendChild(m_name+","+m_l+","+m_t);
      //   });

        
      //   value = _U_;
      //   $(obj).val(value);
      // });
      // var _mittapisteet = value;

      // $('.aukot').each(function(i, obj) {
      //   const _U_ = [];
      //   $('.aukko_element').each(function(i_, obj_) {
      //     m_name = $('.drawarea__controls_elementstwo > span:nth-child(')+[i_]+(')');
      //     m_l = $(obj_).css("left");
      //     m_t = $(obj_).css("bottom");

      //     _U_.appendChild(m_name+","+m_l+","+m_t);
      //   });

        
      //   value = _U_;
      //   $(obj).val(value);
          
      // });
      // var _aukot = value;


      // $('.reijat').each(function(i, obj) {
      //   const _U_ = [];
      //   $('.lapivienti').each(function(i_, obj_) {
      //     m_name = $('.drawarea__controls_elementsfour > span:nth-child(')+[i_]+(')');
      //     m_l = $(obj_).css("left");
      //     m_t = $(obj_).css("top");

      //     _U_.appendChild(m_name+","+m_l+","+m_t);
      //   });

        
      //   value = _U_;
      //   $(obj).val(value);

          
      // });
      // var _reijat = value;

      // $('.saumat').each(function(i, obj) {
      //     const _U_ = [];
      //     $('.sauma').each(function(i_, obj_) {
      //       m_name = $('.drawarea__controls_elementsfour > span:nth-child(')+[i_]+(')');
      //       m_l = $(obj_).css("left");
      //       m_t = $(obj_).css("top");

      //       _U_.appendChild(m_name+","+m_l+","+m_t);
      //     });

          
      //     value = _U_;
      //     $(obj).val(value);

            
      //   });
      // var _saumat = value;

      //  $('.levyt').each(function(i, obj) {
      //     const _U_ = [];
      //     $('.levy').each(function(i_, obj_) {
      //       // m_name = $('.drawarea__controls_elementsfive > span:nth-child(')+[i_]+(')');
      //       m_l = $(obj_).css("left");
      //       m_t = $(obj_).css("top");

      //       _U_.appendChild(m_name+","+m_l+","+m_t);
      //     });

          
      //     value = _U_;
      //     $(obj).val(value);

            
      //   });
      //  var _levyt = value;
      //  $('.rangat').each(function(i, obj) {
      //     const _U_ = [];
      //     $('.ranka').each(function(i_, obj_) {
      //       m_name = $('.drawarea__controls_elementssix > span:nth-child(')+[i_]+(')');
      //       m_l = $(obj_).css("left");
      //       m_t = $(obj_).css("top");

      //       _U_.appendChild(m_name+","+m_l+","+m_t);
      //     });

          
      //     value = _U_;
      //     $(obj).val(value);

            
      //   });
      // var _rangat = value;

      // $('.listat').each(function(i, obj) {
      //     const _U_ = [];
      //     $('.lista').each(function(i_, obj_) {
      //       m_name = $('.drawarea__controls_elementsseven > span:nth-child(')+[i_]+(')');
      //       m_l = $(obj_).css("left");
      //       m_t = $(obj_).css("top");

      //       _U_.appendChild(m_name+","+m_l+","+m_t);
      //     });

          
      //     value = _U_;
      //     $(obj).val(value);

            
      //   });

      var _listat = value;

      var formData = {
          // id: _id,
          // wall: _wall,
          // room: _room,
          // step: _step,
          // settings: _settings,
          // mittapisteet: _mittapisteet,
          // aukot: _aukot,
          // reijat: _reijat,
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

        //console.log(formData);

      $.ajax({
        type: "POST",
        url: "/vendor/updateproject.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        //console.log(data);
      });
    },1000);
  }

  
</script>
<script>

</script>
<script>
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

        //console.log("resizeHeight 1234"+resizeHeight);

        if (event.targetTouches[0].pageX > canvaRight.getBoundingClientRect().left && canvaRight.offsetWidth > resizeWidth ) {
          inWidthInput.value = parseInt(BETWEENSHAPES_X * resizeWidth);
          changeCoords(['inpW', inWidthInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput]);
        }
        if (event.targetTouches[0].pageY > canvaRight.getBoundingClientRect().top && canvaRight.offsetHeight > resizeHeight) {
          inHeightInput.value = parseInt(BETWEENSHAPES_Y * resizeHeight);
          changeCoords(['inpH', inHeightInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput])
        }
      });
    } else if (inInputsFormat === 'elem') {
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
        if (event.targetTouches[0].pageX > canvaRight.getBoundingClientRect().left && canvaRight.offsetWidth > resizeWidth ) {
          inWidthInputSelector.value = parseInt(BETWEENSHAPES_X * resizeWidth);
          changeCoords(['funcW', inWidthInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput]);
        }
        if (event.targetTouches[0].pageY > canvaRight.getBoundingClientRect().top && canvaRight.offsetHeight > resizeHeight) {
          inHeightInputSelector.value = parseInt(heightInput - BETWEENSHAPES_Y * resizeHeight);

          //console.log("inHeightInputSelector2" + inHeightInputSelector);
          //console.log("bottom" + parseInt(canvaRight.getBoundingClientRect().top));
          //console.log("parseInt(1)" + (parseInt(heightInput - BETWEENSHAPES_Y * resizeHeight)));
          //console.log("parseInt(2)" + (parseInt(BETWEENSHAPES_X * resizeWidth)));
          //console.log("resizeHeight" + resizeHeight);
          //console.log("BETWEENSHAPES_Y" + BETWEENSHAPES_Y);
          //console.log("inHeightInputSelector.value" + inHeightInputSelector.value);
          //console.log("heightInput" + heightInput);
          //console.log("heightInputSelector" + heightInputSelector);
          //console.log("elem:" + element.classList);

          if (element.classList.contains('aukko')) {
            element.querySelector(".newDiv__y").innerHTML = "Y: " +(parseInt(heightInput - BETWEENSHAPES_Y * resizeHeight));
            element.querySelector(".newDiv__x").innerHTML = "X: " + (parseInt(BETWEENSHAPES_X * resizeWidth));
            //console.log('aukko ok');
            //console.log('aukko ok');

          }

          changeCoords(['funcH', inHeightInputSelector], elementSelector, null, boxSelector, [widthInput, heightInput])
        }
      });
    }
    
  }

  // Change value of inputs in modals with coords of origo
  // inpCordsUpSelector - up input
  // inpCordsLeftSelector - left input
  function getElementCoords(inpCordsUpSelector, inpCordsLeftSelector) {
    const SHAPE_H = document.querySelector("#box_h").value;
    const SHAPE_W = document.querySelector("#box_w").value;
    const origoTop = document.querySelector(".setting__canvas #drawarea__origo_central").style.top.replace("px","");
    const origoLeft = document.querySelector(".setting__canvas #drawarea__origo_central").style.left.replace("px","");
    const cordsUp = document.querySelector(inpCordsUpSelector);
    const cordsLeft = document.querySelector(inpCordsLeftSelector);

    //console.log(origoTop);
    //console.log(origoLeft);
    if (origoTop && origoLeft) {

      cordsUp.value = parseFloat(document.querySelector("#drawarea_h").value) - (origoTop*5);
      cordsLeft.value = origoLeft*5;
      change__newdiv_cord();
    } else {
      cordsUp.value = 5;
      cordsLeft.value = 5;
      change__newdiv_cord();
    }
  }

  const origo = document.querySelector('#drawarea__origo_central');
  const canvas = document.querySelector('.canvas');

  touchedElement('.drawarea main', '#drawarea_w', '#drawarea_h', '#drawarea__origo_central', 'selector','#origo_x', '#origo_y')

</script>
<script>
   function drawarea__update_cord() {
      // 2.1 Cord
      var height = document.querySelector('#box_h').value;
      var width = document.querySelector('#box_w').value;

      var c_up = parseFloat(document.querySelector(".box__upper_mm").value);
      var c_low = parseFloat(document.querySelector(".box__lower_mm").value);
      var c_left =parseFloat(document.querySelector(".box__left_mm").value);
      var c_right = parseFloat(document.querySelector(".box__right_mm").value);

      c_width = parseFloat(width) - (parseFloat(c_left)) - (parseFloat(c_right));

      c_height = parseFloat(height) - (parseFloat(c_up)) - (parseFloat(c_low));



      document.querySelector('.drawarea__w_cord').innerHTML = Math.floor(c_width);
      document.querySelector('.drawarea__h_cord').innerHTML = Math.floor(c_height);

      document.querySelector('.drawarea__h_cord').style.right = (parseFloat(box_upper.offsetHeight) + 15) + 'px';
      // document.querySelector('.drawarea__h_cord').style.left = ( (-1) * parseFloat(c_low) ) + 'px';

      // document.querySelector('.drawarea__w_cord').style.right = (parseFloat(c_right) ) + 'px';
       document.querySelector('.drawarea__w_cord').style.left = ( parseFloat(box_left.offsetWidth) + 15) + 'px';
    }
</script>
<script>
    function updatearea() {
      // 2.1 Cord
      var height = document.querySelector('.drawarea_h').value;
      var width = document.querySelector('.drawarea_w').value;
      var c_up = parseFloat(document.querySelector(".box__upper_mm").value);
      var c_low = parseFloat(document.querySelector(".box__lower_mm").value);
      var c_left = parseFloat(document.querySelector(".box__right_mm").value);
      var c_right = parseFloat(document.querySelector(".box__left_mm").value);

      c_width = parseFloat(width) - (parseFloat(c_left)) - (parseFloat(c_right));
      c_height = parseFloat(height) - (parseFloat(c_up)) - (parseFloat(c_low));

      document.querySelector('.drawarea_w').value = c_width;
      document.querySelector('.drawarea_h').value = c_height;
      
      document.querySelector("#box_left").style.height = 1 + "px";
      document.querySelector("#box_upper").style.width = 1 + "px";
      document.querySelector("#box_right").style.height = 1 + "px";
      document.querySelector("#box_lower").style.width = 1 + "px";

      document.querySelector(".box__lower_lowerdecor").style.left = -1 * parseFloat(height);

      document.querySelector(".box__upper_mm").value = "0";
      document.querySelector(".box__lower_mm").value = "0";
      document.querySelector(".box__right_mm").value = "0";
      document.querySelector(".box__left_mm").value = "0";

      document.querySelector("#box_upper").style.height = "1px";
      document.querySelector("#box_lower").style.height = "1px";
      document.querySelector("#box_right").style.width = "1px";
      document.querySelector("#box_left").style.width = "1px";

      changesize();

    }

    function changesize__frominput() {

      var box = document.querySelector("#box-wrapper");
      var height = document.querySelector('#box_h').value;
      var width = document.querySelector('#box_w').value;

      var box_left = document.querySelector("#box_left");
      var box_upper = document.querySelector("#box_upper");
      var box_right = document.querySelector("#box_right");
      var box_lower = document.querySelector("#box_lower");

      var c_up = parseFloat(document.querySelector(".box__upper_mm").value);
      var c_low = parseFloat(document.querySelector(".box__lower_mm").value);
      var c_left =parseFloat(document.querySelector(".box__left_mm").value);
      var c_right = parseFloat(document.querySelector(".box__right_mm").value);


      box_upper.style.height =  (((c_up / height)) * box.offsetHeight) + 1 + 'px';
      box_lower.style.height =  (((c_low / height)) * box.offsetHeight) + 1 + 'px';

      box_left.style.width =  (((c_left / width)) * box.offsetWidth) + 1 + 'px';
      box_right.style.width =  (((c_right / width)) * box.offsetWidth) + 1 + 'px';




      drawarea__update_cord();
      gridify();


    }
    function changesize() {
      const height = document.querySelector('.drawarea_h').value;
      const width = document.querySelector('.drawarea_w').value;


      document.querySelector('.box__lower_lowerdecor').style.maxWidth = height/5 + "px";
      document.querySelector('.box__lower_lowerdecor').style.left = (-1) * ((height/5) - 20) + "px";
      document.querySelector('#box_h').value = height;
      document.querySelector('#box_w').value = width;
      document.querySelector(".box__lower_lowerdecor").style.left = -1 * parseFloat(height);

      document.querySelector("#box-wrapper").style.height = height/5 + "px";
      document.querySelector("#box-wrapper").style.width = width/5 + "px";

      document.querySelector("#box-wrapper").style.minHeight = height/5 + "px";
      document.querySelector("#box-wrapper").style.minWidth  = width/5 + "px";

      document.querySelector("#box-wrapper").style.maxHeight = height/5 + "px";
      document.querySelector("#box-wrapper").style.maxWidth = width/5 + "px";
      // } else {
      //   document.querySelector('.box__lower_lowerdecor').style.maxWidth = height/10 + "px";
      //   document.querySelector('.box__lower_lowerdecor').style.left = (-1) * ((height/10) - 20) + "px";
      //   document.querySelector('#box_h').value = height;
      //   document.querySelector('#box_w').value = width;
      //   document.querySelector(".box__lower_lowerdecor").style.left = -1 * parseFloat(height);

      //   document.querySelector("#box-wrapper").style.height = height/10 + "px";
      //   document.querySelector("#box-wrapper").style.width = width/10 + "px";
      // }
      document.querySelector('.canvas').style.width = 100 + "%";
      document.querySelector("#box_left").style.height = ( 100 + "%");
      document.querySelector("#box_upper").style.width = ( 100 + "%");
      document.querySelector("#box_right").style.height = ( 100 + "%");
      document.querySelector("#box_lower").style.width = ( 100 + "%");
      document.querySelector("#box_left").style.maxHeight = ( 100 + "%");
      document.querySelector("#box_upper").style.maxWidth = ( 100 + "%");
      document.querySelector("#box_right").style.maxHeight = ( 100 + "%");
      document.querySelector("#box_lower").style.maxWidth = ( 100 + "%");
      document.querySelector("#box_left").style.maxWidth = ( 100 + "%");
      document.querySelector("#box_upper").style.maxHeight= ( 100 + "%");
      document.querySelector("#box_right").style.maxWidth = ( 100 + "%" );
      document.querySelector("#box_lower").style.maxHeight= ( 100 + "%");


      // document.querySelector('.box-wrapper').style.height = 70 + "vh";

      // document.querySelector('.box-wrapper').style.width = '';

      // document.querySelector('.box-wrapper').style.aspectRatio = `${width} / ${height}`;

      gridify();
      
    }

    function changesize__bottom() {

      const height = document.querySelector('#box_h').value;
      const width = document.querySelector('#box_w').value;
      // document.querySelector(".canvas").style.height = 100 + "%";
      // document.querySelector(".canvas").style.width = 100 + "%";
      document.querySelector("#box_left").style.height = ( 100 + "%");
      document.querySelector("#box_upper").style.width = ( 100 + "%");
      document.querySelector("#box_right").style.height = ( 100 + "%");
      document.querySelector("#box_lower").style.width = ( 100 + "%");
      document.querySelector("#box_left").style.maxHeight = ( 100 + "%");
      document.querySelector("#box_upper").style.maxWidth = ( 100 + "%");
      document.querySelector("#box_right").style.maxHeight = ( 100 + "%");
      document.querySelector("#box_lower").style.maxWidth = ( 100 + "%");
      document.querySelector("#box_left").style.maxWidth = ( 100 + "%");
      document.querySelector("#box_upper").style.maxHeight= ( 100 + "%");
      document.querySelector("#box_right").style.maxWidth = ( 100 + "%" ) - 1+ "px";
      document.querySelector("#box_lower").style.maxHeight= ( 100 + "%");
      document.querySelector('.box-wrapper').style.width = "";
      document.querySelector('.box-wrapper').style.height = '70vh';
      document.querySelector('.box-wrapper').style.aspectRatio = `${width} / ${height}`;
      document.querySelector('.canvas').style.width = 100 + "%";
      document.querySelector('.canvas').style.aspectRatio = `${width} / ${height}`;
      document.querySelector('.box__lower_lowerdecor').style.maxWidth = width/5 + "px";
      document.querySelector('.box__lower_lowerdecor').style.left = (-1) * ((height/5) - 20) + "px";
      document.querySelector('.drawarea_h').value = height;
      document.querySelector('.drawarea_w').value = width;
      document.querySelector(".box__lower_lowerdecor").style.left = -1 * parseFloat(height);

      gridify();
    }


    function roundToNearest25(num) {
      return Math.round(num/25)*25;
    }
    

  </script>


<script>
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

      allHeights.forEach(function (item) {
         item.value = num;
      });

      document.querySelector("#house > div:nth-child(1) > div").style.height = num/10 + "px";      
      document.querySelector("#house > div:nth-child(3) > div").style.height = num/10 + "px";      
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.height = num/10 + "px";      
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.height = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.height = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.height = num/10 + "px";
    }


    function changeWidths(num) {
      const allWidths = document.querySelectorAll('.wall_width');

      allWidths.forEach(function (item) {
         item.value = num;
      });

      document.querySelector("#house > div:nth-child(1) > div").style.width = num/10 + "px";      
      document.querySelector("#house > div:nth-child(3) > div").style.width = num/10 + "px";      
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = num/10 + "px";      
      // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = num/10 + "px";
      // document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num/10 + "px";
    }

    function changeWidths_2(num) {
      const allWidths = document.querySelectorAll('.wall_width_2');

      allWidths.forEach(function (item) {
         item.value = num;
      });

      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num/10 + "px";
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num/10 + "px";
    }

    function change_roof() {
      const roof_height = document.querySelector('#wall_one_roof_h').value;
      const roof_width = document.querySelector('#wall_one_roof_w').value;

      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");

      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(roof_height);
         changeWidths(roof_width);
      });

      
      
      document.querySelector("#house > div:nth-child(1) > div").style.width = roof_width/10 + "px";
    }

    function change_floor() {
      const floor_height = document.querySelector('#wall_one_floor_h').value;
      const floor_width = document.querySelector('#wall_one_floor_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(floor_height);
         changeWidths(floor_width);
      });

      

      document.querySelector("#house > div:nth-child(3) > div").style.width = floor_width/10 + "px";


    }

    function change_a() {
      const a_height = document.querySelector('#wall_one_a_h').value;
      const a_width = document.querySelector('#wall_one_a_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(a_height);
         changeWidths(a_width);
      });

      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_one").style.width = a_width/10 + "px";
    }

    function change_b() {
      const b_height = document.querySelector('#wall_one_b_h').value;
      const b_width = document.querySelector('#wall_one_b_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(b_height);
         changeWidths_2(b_width);
      });

      
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = b_width/10 + "px";
    }

    function change_c() {
      const c_height = document.querySelector('#wall_one_c_h').value;
      const c_width = document.querySelector('#wall_one_c_w').value;

      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(c_height);
         changeWidths(c_width);
      });
      
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_three").style.width = c_width/10 + "px";
    }

    function change_d() {
      const d_height = document.querySelector('#wall_one_d_h').value;
      const d_width = document.querySelector('#wall_one_d_w').value;
      document.querySelector('.question-container').classList.add("two");document.querySelector('.question-container').classList.remove("out");
      document.querySelector('.modal-yes').addEventListener("click",function() {
         changeHeights(d_height);
         changeWidths_2(d_width);
      });

      
      document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = d_width/10 + "px";
    }
</script>
</script>


  

<!-- 2.0 -->
<script>
  

  $('.project__building div.project__building_room').click(function() {
    $("#project_start").slideUp(200);
    $("#rooms").show();
    $("#rooms").slideDown(200);
    $(this).addClass( "tomeasure" );

    $("#roomname").val("Tila " + $(this).text());
    $("#wall_one_a").val( "SEINÄ " + $(this).text() + "_A");
    $("#wall_one_b").val( "SEINÄ " + $(this).text() + "_B");
    $("#wall_one_c").val( "SEINÄ " + $(this).text() + "_C");
    $("#wall_one_d").val( "SEINÄ " + $(this).text() + "_D");
    $("#wall_one_roof").val( "KATTO " + $(this).text() + "_R");
    $("#wall_one_floor").val( "LATTIA " + $(this).text() + "_F");

    $(".house__wall_one > div").text( "1." + " SEINÄ " + $(this).text() + "_A");
    $(".house__wall_two > div").text( "2." + " SEINÄ " + $(this).text() + "_B");
    $(".house__wall_three > div").text( "3." + " SEINÄ " + $(this).text() + "_C");
    $(".house__wall_four > div").text( "4." + " SEINÄ " + $(this).text() + "_D");
    $(".house__wall_roof > div").text( "5." + " KATTO " + $(this).text() + "_R");
    $(".house__wall_floor > div").text( "6." + " LATTIA " + $(this).text() + "_F");


  });

  $('#rooms div.house__wall_status').click(function() {
    $("#rooms").slideUp(200);
    $("#drawscreen_section_zero").show();
    $("#drawscreen_section_zero").slideDown(200);
    var tilaname=$("#roomname").val();
    $("#zero_tila").text(tilaname);
    var text = $(this).text();
    $("#zero_huone").text(text);


    

    $(this).addClass( "tomeasure" );
    $(this).parent().find('.wall_height').val();
    $(this).parent().find('.wall_width').val();

    $('#reclamation__popup .modal_close_btn').attr('id', '--' + tilaname);

    if($(this).parent().find('.wall_width_2').val()) {
        $("#drawarea_w").val($(this).parent().find('.wall_width_2').val());
    } else {
        $("#drawarea_w").val($(this).parent().find('.wall_width').val());
    }

    $("#drawarea_h").val($(this).parent().find('.wall_height').val());

    changesize();

  });
</script>

<script>
   // highlighter for sizer visuals
   $('td').mouseover(function(){   
      var $this = $(this);
      var col   = $this.index();
      var row   = $this.closest('tr').index();

      $('#colcount').text(col+1);
     $('#rowcount').text(row+1);
      if (document.querySelector("#rappu_count")) {
        document.querySelector("#rappu_count").value = document.querySelector("#colcount").innerHTML;
        document.querySelector("#floor_count").value = document.querySelector("#rowcount").innerHTML;
      }
   });

   $(".table").delegate('td','mouseover mouseleave', function(e) {
       var cellindex = 0;
       if (e.type == 'mouseover') {
           
           $(this).addClass("cell");
           var cells = $(this).parent().children("td");
           for(var i=0;i<cells.length;i++){
               if($(cells[i]).hasClass("cell")){
                   $(this).removeClass("cell");
                   cellindex = i;
                   break;
               }
           }
           
           $(this).parent().addClass("row");
           var rows = $(this).parent().parent().children("tr");
           for(var i=0;i<rows.length;i++){
               var tds = $(rows[i]).children("td");
               for(var j=0;j<=cellindex;j++){
                   $(tds[j]).addClass("SizeChooser-hover");
               }
               if($(rows[i]).hasClass("row")){
                   $(this).parent().removeClass("row");
                   break;
               }
           }
       }
       else {
           $("td").removeClass("SizeChooser-hover");
       }
   });
   // END highlighter for sizer visuals

   // toggle sizer input
   $( "#sizertoggle" ).click(function() {
     $("#tablepreview").removeClass("showcaptioner").removeClass("showheaderer");
     $("#tablepreview").toggleClass('showsizer');
   });

   // toggle caption input
   $("#captiontoggle").click(function() {
     $("#tablepreview").removeClass("showsizer").removeClass("showheaderer");
     $("#tablepreview").toggleClass('showcaptioner');
   });

   $("#titletoggle").click(function() {
     $("#tablepreview").removeClass("showsizer").removeClass("showcaptioner");
     $("#tablepreview").toggleClass('showheaderer');
   });

   // on sizer td click, generate new table
   $( "#tablepreview td" ).click(function() {
     $("#tablepreview").removeClass('showsizer');
     
     $('#tabledisplay .table-responsive').empty();
     
     
     row = $('#colcount').text();
   col = $('#rowcount').text();
     
     var rows = col; //here's your number of rows and columns
   var cols = row;
   var table = $('<table class="table table-bordered"><tbody>');
   for(var r = 0; r < rows; r++)
   {
       var tr = $('<tr>');
       for (var c = 0; c < cols; c++)
           $('<td contenteditable="true"></td>').appendTo(tr); 
       tr.appendTo(table);
   }

   table.appendTo('#tabledisplay .table-responsive'); 
     
     
     
     
     gencode();
     
   });



   // BEAUTIFY STRING

   function process(str) {
       
       var div = document.createElement('div');
       div.innerHTML = str.trim();
       
       return format(div, 0).innerHTML;
   }

   function format(node, level) {
       
       var indentBefore = new Array(level++ + 1).join('  '),
           indentAfter  = new Array(level - 1).join('  '),
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
   $('button#applycaption').click(function(){
     
   //remove caption input window
   $("#tablepreview").removeClass('showcaptioner');
     
   var caption = $('#captioner textarea').val();
     
     $( "#tabledisplay table caption" ).remove();
     
     
     gencode();
   });

   // ON APPLYING CAPTION
   $('button#applyheaders').click(function(){
     
   //remove caption input window
   $("#tablepreview").removeClass('showheaderer');
     

     
     gencode();
   });




   $('#gencode').click(function(){
     
     gencode();
     
     $('#preparetext').text('Code Updated Above');
     $("body").addClass("codeupdated").delay(1500).queue(function(){
      $(this).removeClass("codeupdated").dequeue();
       $('#preparetext').text('Push edits to code');
       
   });

   });


   function gencode(){
     
     
     
       if ($('#rowheadercheck').is(':checked')) {
     // add th to first row
     $('#tabledisplay tr td:first-child').replaceWith(function(i, html) {
       return '<th scope="row">click to edit</th>';
     });
     }
     
     
     if ( !$('#rowheadercheck').is(':checked')) {
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
     
     $( "#tabledisplay table caption" ).remove();
     
     
     $("th, td").removeAttr("contenteditable");
     // update code display
     var htmlString = $( '#tabledisplay .container' ).html();
   $('#tablecode').text(process(htmlString));

     $("#tabledisplay th, #tabledisplay td").attr("contenteditable","true");
     
   }



   var clipboard = new Clipboard('.btn');

   clipboard.on('success', function(e) {
           
     $("body").addClass("codecopied").delay(2500).queue(function(){
      $(this).removeClass("codecopied").dequeue();
     
       
   });
     
     });
       clipboard.on('error', function(e) {
       });



   $('.codecopiedalert').click(function() {
     $('body').removeClass("codecopied");
   });









   // THIS IS TO MAKE THE TABLE EDITABLE
   var $TABLE = $('#table');
   var $BTN = $('#export-btn');
   var $EXPORT = $('#export');

   $('.table-add').click(function () {
     var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
     $TABLE.find('table').append($clone);
   });

   $('.table-remove').click(function () {
     $(this).parents('tr').detach();
   });

   $('.table-up').click(function () {
     var $row = $(this).parents('tr');
     if ($row.index() === 1) return; // Don't go above the header
     $row.prev().before($row.get(0));
   });

   $('.table-down').click(function () {
     var $row = $(this).parents('tr');
     $row.next().after($row.get(0));
   });

   // A few jQuery helpers for exporting only
   jQuery.fn.pop = [].pop;
   jQuery.fn.shift = [].shift;

   $BTN.click(function () {
     var $rows = $TABLE.find('tr:not(:hidden)');
     var headers = [];
     var data = [];
     
     // Get the headers (add special header logic here)
     $($rows.shift()).find('th:not(:empty)').each(function () {
       headers.push($(this).text().toLowerCase());
     });
     
     // Turn all existing rows into a loopable array
     $rows.each(function () {
       var $td = $(this).find('td');
       var h = {};
       
       // Use the headers from earlier to name our hash keys
       headers.forEach(function (header, i) {
         h[header] = $td.eq(i).text();   
       });
       
       data.push(h);
     });
     
     // Output the result
     $EXPORT.text(JSON.stringify(data)); 
   });
</script>

<script>
    


    var tableId = document.querySelector("#project__room > table");

      function create_rooms() {
        var colc = document.querySelector("#colcount").innerHTML;
        var floc = document.querySelector("#rowcount").innerHTML;
        var wall_qty = document.querySelector("#wall_qty").value;

        var insert_cells = parseFloat( Math.round(colc) * Math.round(floc) * Math.round(wall_qty) );
        var number = Number(insert_cells);

        for (i = 0; i < number; i++) {
          var j = 0; // First Cell
          var newTR = tableId.insertRow(i);
          var newTD1 = newTR.insertCell(j);

          newTD1.innerHTML = " Huone #" + i;
        
        };
      };
</script> 

<!-- Mittapisteet, Aukot and Lapiviennit fast adding (2.1-2.3) -->
<script>
  // Рисование точки опоры на area canvas
  function draw__point() {
    const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
    const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
    const input_step = document.querySelector('#step_drawscreen').value;

    if (input_step == "drawscreen_section_one") {
      // Создаем блок
      const newDiv = document.createElement("span");
      const ba = document.querySelector("#box-wrapper");
      const inputH = document.createElement('input');
      const inputW = document.createElement('input');
      inputH.setAttribute('type', 'num');
      inputW.setAttribute('type', 'num');
      newDiv.innerHTML = "";
      const newDiv__comment = document.createElement("span");
      newDiv__comment.innerHTML="Mittapiste";
      const newDiv__comment_settings = document.createElement("i");
      const newDiv__comment_del = document.createElement("i");
      // Расположение - по центру canvas
      newDiv.style.bottom = (canvas.offsetHeight / 2) + 'px';
      newDiv.style.left = (canvas.offsetWidth / 2) + 'px';
      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
      newDiv__comment_settings.setAttribute("onclick", "document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();document.querySelector('#setting__canvas_mitta > main > '+'#'+obj).remove();");
      newDiv__comment_settings.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
      newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>";
      
      let id = "id" + Math.random().toString(16).slice(2);
      
      newDiv.setAttribute("id", id);
      newDiv__comment_settings.classList.add("m_btn");
      newDiv__comment_settings.classList.add("newDiv__comment_settings");
      newDiv__comment_del.classList.add("newDiv__comment_del");
      newDiv__comment_settings.setAttribute("name", id);
      newDiv__comment_del.setAttribute("name", id);
      newDiv__comment.appendChild(newDiv__comment_settings);
      newDiv__comment.appendChild(newDiv__comment_del);
      newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");
      newDiv.classList = "mittapiste_element";
      newDiv.setAttribute("name", id);
      document.querySelector("#box-wrapper > main").prepend(newDiv);
      document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__comment);
      touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inputW, inputH);

      
    }

    if (input_step == "drawscreen_section_two") {
      settings__aukko(); change__newdiv_cord();
    }
  }


  function move_origo(e) {
    if(document.querySelector("#drawarea__origo_central")) {
      
      if(e.innerHTML == "Origo oikealle") {
        document.querySelector("#drawarea__origo_central").style.left =  (parseFloat(document.querySelector("#drawarea_w").value/5)-4) + "px";
        e.innerHTML = "Origo ylös";
        document.querySelector("#drawarea__origo_central").style.bottom = "1px";
      }

      else if(e.innerHTML == "Origo ylös") {
          e.innerHTML = "Origo vasemmalle";
        document.querySelector("#drawarea__origo_central").style.bottom = (parseFloat(document.querySelector("#drawarea_h").value/5)-1) + "px";
        document.querySelector("#drawarea__origo_central").style.left = (parseFloat(document.querySelector("#drawarea_w").value/5)-4) + "px";
        
      }


      else if(e.innerHTML == "Origo vasemmalle") {
        document.querySelector("#drawarea__origo_central").style.left = "1px";
        e.innerHTML = "Origo alas";
        document.querySelector("#drawarea__origo_central").style.bottom = (parseFloat(document.querySelector("#drawarea_h").value/5)-1) + "px";
        
      }

      else if(e.innerHTML == "Origo alas") {
        document.querySelector("#drawarea__origo_central").style.left = "1px";
        document.querySelector("#drawarea__origo_central").style.bottom = "1px";

        e.innerHTML = "Origo oikealle";
        
      }
      else {
         document.querySelector("#drawarea__origo_central").style.left = "1px";
          e.innerHTML = "Origo oikealle";
          document.querySelector("#drawarea__origo_central").style.bottom = "1px";
      }
    }
  }

  function draw__hole() {
    const input_step = document.querySelector('#step_drawscreen').value;
    const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
    const drawscreen_section_three = document.querySelector('#drawscreen_section_three');
    if (input_step == "drawscreen_section_two") {
      const newDiv = document.createElement("span");        
      newDiv.innerHTML="";
      var newDiv__comment = document.createElement("span");
      newDiv__comment.innerHTML="Aukko";

      var newDiv__comment_settings = document.createElement("i");
      var newDiv__comment_del = document.createElement("i");
      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
      newDiv__comment_settings.setAttribute("onclick", "document.querySelector('#drawscreen_section_two > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_two > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");

      
      newDiv__comment_settings.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
      newDiv__comment_del.innerHTML = "svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";

      var id = "id" + Math.random().toString(16).slice(2);
      newDiv.setAttribute("id", id);

      newDiv__comment_settings.classList.add("m_btn");
      newDiv__comment_settings.classList.add("newDiv__comment_settings");
      newDiv__comment_del.classList.add("newDiv__comment_del");

      newDiv__comment_settings.setAttribute("name", id);
      newDiv__comment_del.setAttribute("name", id);
      newDiv__comment.appendChild(newDiv__comment_settings);
      newDiv__comment.appendChild(newDiv__comment_del);

      document.querySelector("#box-wrapper > main").prepend(newDiv);
      document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__comment);


      newDiv.classList.add("aukko");

      
      // grabbing
    }

    if (input_step == "drawscreen_section_three") {
            var newDiv = document.createElement("span");
                  
            newDiv.innerHTML="";
            var newDiv__comment = document.createElement("span");
            newDiv__comment.innerHTML="Läpivienti";

            var newDiv__comment_settings = document.createElement("i");
            var newDiv__comment_del = document.createElement("i");
            newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
            newDiv__comment_settings.setAttribute("onclick", "document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");

         
            newDiv__comment_settings.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
            newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";

            var id = "id" + Math.random().toString(16).slice(2);
            newDiv.setAttribute("id", id);

            newDiv__comment_settings.classList.add("m_btn");
            newDiv__comment_settings.classList.add("newDiv__comment_settings");
            newDiv__comment_del.classList.add("newDiv__comment_del");

            newDiv__comment_settings.setAttribute("name", id);
            newDiv__comment_del.setAttribute("name", id);
            newDiv__comment.appendChild(newDiv__comment_settings);
            newDiv__comment.appendChild(newDiv__comment_del);


            document.querySelector("#box-wrapper > main").prepend(newDiv);
            document.querySelector(".drawarea__controls_elementsthree").prepend(newDiv__comment);
            newDiv.classList.add("lapivienti");

            
            newDiv.addEventListener('mousedown', mouseDown, false);
            window.addEventListener('mouseup', mouseUp, false);

             function mouseUp()
            {
                window.removeEventListener('mousemove', divMove, true);
            }

            function mouseDown(e){
              window.addEventListener('mousemove', divMove, true);
            }

            function divMove(e){
              newDiv.style.position = 'absolute';

              var mousePressX = e.clientX;
              var mousePressY = e.clientY;
              var wDiff = e.clientX - mousePressX;
              var hDiff = e.clientY - mousePressY;

              newDiv.style.top = ( e.clientY - (e.clientY / 2) ) + 'px';
              newDiv.style.left = ( e.clientX  - (e.clientX / 1.5) ) + 'px';
            }
          }
        }
</script>
<!-- Mittapisteet, Aukot and Lapiviennit (2.1-2.3) -->
<script>
  function settings__mitta() {
    const input_step = document.querySelector('#step_drawscreen').value;
    const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
    const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
    const drawscreen_section_three = document.querySelector('#drawscreen_section_three');



    document.querySelector("#setting__canvas_mitta").style.height = document.querySelector("#box-wrapper").style.height;
    document.querySelector("#setting__canvas_mitta").style.width = document.querySelector("#box-wrapper").style.width;

    if (input_step == "drawscreen_section_one")  {
      const mitta_settings = document.querySelector("#box-wrapper > main").cloneNode(true);
      const mitta_origo = document.querySelector("#box-wrapper > div.drawarea__origo").cloneNode(true);
      
      document.querySelector("#setting__canvas_mitta").innerHTML = "";
      document.querySelector("#setting__canvas_mitta").append(mitta_settings);
      document.querySelector("#setting__canvas_mitta").prepend(mitta_origo)
      ;

      document.querySelector("#box-wrapper")
      

      const newDiv = document.createElement("span");
      const inW = document.createElement('input');
      const inH = document.createElement('input');

      inW.setAttribute('type', 'num');
      inH.setAttribute('type', 'num');
      
      newDiv.classList.add("settings__mittapiste");
      newDiv.setAttribute("id","settings__mittapiste");  
      newDiv.innerHTML="";

      document.querySelector("#setting__canvas_mitta > main").prepend(newDiv);
      newDiv.style.left = "0";
      newDiv.style.bottom = "0";
      newDiv.style.top = "unset";
      newDiv.style.right = "unset";
      
      touchedElement('.setting__canvas > .canvas', '#drawarea_w', '#drawarea_h', newDiv, 'elem', document.querySelector('#cord_left'), document.querySelector('#cord_up') );
    } 
    
    if (input_step == "drawscreen_section_three") {
      var lapiviennit_settings = document.querySelector("#box-wrapper > main").cloneNode(true);
      var lapiviennit_origo = document.querySelector("#box-wrapper > div.drawarea__origo").cloneNode(true);

      document.querySelector("#setting__canvas_lapiviennit").innerHTML = "";
      document.querySelector("#setting__canvas_lapiviennit").append(lapiviennit_settings);
      document.querySelector("#setting__canvas_lapiviennit").prepend(lapiviennit_origo);
      document.querySelector("#setting__canvas_lapiviennit").style.height = document.querySelector("#box-wrapper").style.height;
      document.querySelector("#setting__canvas_lapiviennit").style.width = document.querySelector("#box-wrapper").style.width;

      var newDiv = document.createElement("span");
      newDiv.classList.add("settings__lv");
      newDiv.setAttribute("id","settings__lv");  
      newDiv.innerHTML="";
      document.querySelector("#setting__canvas_lapiviennit > main").prepend(newDiv);

      touchedElement('#setting__canvas_lapiviennit > main', '#box_w', '#box_h', newDiv, 'elem', document.querySelector('#lvcord_left'), document.querySelector('#lvcord_low') );
    } 
  }

  function settings__aukko() {
      const input_step = document.querySelector('#step_drawscreen').value;
      var aukot_settings = document.querySelector("#box-wrapper > main").cloneNode(true);
      var aukot_origo = document.querySelector("#box-wrapper > div.drawarea__origo").cloneNode(true);

      document.querySelector("#setting__canvas_aukot").innerHTML = "";
      document.querySelector("#setting__canvas_aukot").append(aukot_settings);
      document.querySelector("#setting__canvas_aukot").prepend(aukot_origo);

      document.querySelector("#setting__canvas_aukot").style.height = document.querySelector("#box-wrapper").style.height;
      document.querySelector("#setting__canvas_aukot").style.width = document.querySelector("#box-wrapper").style.width;


      var newDiv = document.createElement("span");
      newDiv.classList.add("settings__aukko");
      newDiv.setAttribute("id","settings__aukko");  
      newDiv.innerHTML = "";

      document.querySelector("#setting__canvas_aukot > main").prepend(newDiv);
      if (input_step == "drawscreen_section_two") {
        touchedElement('#setting__canvas_aukot > main', '#box_w', '#box_h', newDiv, 'elem', document.querySelector('#aukotcord_left'), document.querySelector('#aukotcord_up') );
      }
      document.querySelector('#type__door').click();
  }
  
  function null__origo_cord() {
    const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
    const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
    const drawscreen_section_three = document.querySelector('#drawscreen_section_three');

    const input_step = document.querySelector('#step_drawscreen').value;

    if (input_step == "drawscreen_section_one") {
      document.querySelector("#cord_up").value = "0";
      document.querySelector("#cord_left").value = "0";
      document.getElementById("settings__mittapiste").style.bottom = "0";
      document.getElementById("settings__mittapiste").style.left = '0';
    }

    if (input_step == "drawscreen_section_two") {
      document.querySelector("#aukotcord_up").value = "0";
      document.querySelector("#aukotcord_left").value = "0";
      document.getElementById("settings__aukko").style.bottom = "0";
      document.getElementById("settings__aukko").style.left = "0";
    }

    if (input_step == "drawscreen_section_three") {
      document.querySelector("#lvcord_low").value = "0";
      document.querySelector("#lvcord_left").value = "0";
      document.getElementById("settings__lv").style.bottom = "0";
      document.getElementById("settings__lv").style.left = "0";
    }
  }
    
  function change__newdiv_cord() {
    const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
    const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
    const drawscreen_section_three = document.querySelector('#drawscreen_section_three');
    const drawscreen_section_eight = document.querySelector('#drawscreen_section_eight');

    const input_step = document.querySelector('#step_drawscreen').value;

    if (input_step == "drawscreen_section_one") {
      const newDiv = document.getElementById("settings__mittapiste");
      newDiv.style.bottom = ( document.getElementById("cord_up").value / document.getElementById("box_h").value ) * 100 + '%';
      newDiv.style.left = ( document.getElementById("cord_left").value / document.getElementById("box_w").value ) * 100 + "%";
    }

    if (input_step == "drawscreen_section_two") {
      // const newDiv = document.getElementById("settings__aukko");
      // newDiv.style.bottom = ( document.getElementById("aukotcord_up").value / document.getElementById("box_h").value ) * 100 + '%';
      // newDiv.style.left = ( document.getElementById("aukotcord_left").value / document.getElementById("box_w").value ) * 100 + '%';
      // newDiv.style.height = ((parseFloat(document.getElementById("hole__height").value) / (parseFloat(document.getElementById("box_h").value))) * 100) + '%';
      // newDiv.style.width = ((parseFloat(document.getElementById("hole__width").value) / (parseFloat(document.getElementById("box_w").value))) * 100 ) + '%';

    }

    if (input_step == "drawscreen_section_three") {
      const newDiv = document.getElementById("settings__lv");
      newDiv.style.bottom = ( document.getElementById("lvcord_low").value / 5  ) + 'px';
      newDiv.style.left = ( document.getElementById("lvcord_left").value / 5 ) + "px";
    }

    if (input_step == "drawscreen_section_eight") {
      const newDiv = document.getElementById("settings__reclamation");
      newDiv.style.bottom = (parseFloat(document.querySelector("#r-cord_up").value) / 10) + 'px';
      newDiv.style.right = ( parseFloat(document.querySelector("#r-cord_r").value) / 10) + 'px';
      newDiv.style.bottom = ( parseFloat(document.querySelector("#r-cord_low").value) / 10) + 'px';
      newDiv.style.left = ( parseFloat(document.querySelector("#r-cord_left").value) / 10) + 'px';
    }
  }

  function give__origo_cord() {
    const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
    const drawscreen_section_two = document.querySelector('#drawscreen_section_two');  
    const drawscreen_section_three = document.querySelector('#drawscreen_section_three');

    const input_step = document.querySelector('#step_drawscreen').value;

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

  // Создание отверстия
  function mitta__create_mitta() {
    const drawscreen_section_one = document.querySelector('#drawscreen_section_one');
    const drawscreen_section_two = document.querySelector('#drawscreen_section_two');
    const drawscreen_section_three = document.querySelector('#drawscreen_section_three');

    const input_step = document.querySelector('#step_drawscreen').value;


    if (input_step == "drawscreen_section_one") {
      const newDiv = document.createElement("span");
      const newDiv__comment = document.createElement("span");
      const newDiv__hidden_attention = document.createElement("input");
      const newDiv__hidden_attentioncommmets = document.createElement("input");

      newDiv__hidden_attention.type = "hidden";
      newDiv__hidden_attention.name = "attentions";
      newDiv__hidden_attentioncommmets.type = "hidden";
      newDiv__hidden_attentioncommmets.name = "commmets";
      newDiv.innerHTML = "";          
      newDiv__comment.innerHTML = document.querySelector("#mittapiste__name").value;

      document.querySelector("#box-wrapper > main").prepend(newDiv);
      document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__comment);
      document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attention);
      document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attentioncommmets);

      newDiv.style.bottom = ( document.querySelector("#cord_up").value / document.querySelector("#box_h").value * 100) + '%';
      newDiv.style.left = ( document.querySelector("#cord_left").value / document.querySelector("#box_w").value * 100) + '%';

      if (document.querySelector("#cord_up").value == "") {
        newDiv.style.bottom = 0;
      }

      if (document.querySelector("#m__a_sahko").checked) {
        newDiv__hidden_attention.value += document.querySelector("#m__a_sahko").value + '. ';
      }

      if (document.querySelector("#m__a_putki").checked) {
        newDiv__hidden_attention.value += document.querySelector("#m__a_putki").value + '. ';
      }

      if (document.querySelector("#m__a_tornado").checked) {
        newDiv__hidden_attention.value += document.querySelector("#m__a_tornado").value + '. ';
      }

      if (document.querySelector("#mittapiste_comment").value != '') {
        newDiv__hidden_attentioncommmets.value += document.querySelector("#mittapiste_comment").value + '<br> Tältä: ' + document.querySelector("#mittapiste_comment_from").value + '<br> Tälle: ' + document.querySelector("#mittapiste_comment_to").value;

        const comment__container = document.createElement("div");
        const comment__text = document.createElement("p");
        const comment__from = document.createElement("strong");
        const comment__to = document.createElement("strong");

        comment__text.innerHTML = document.querySelector("#mittapiste_comment").value;
        comment__from.innerHTML = document.querySelector("#mittapiste_comment_from").value;
        comment__to.innerHTML = document.querySelector("#mittapiste_comment_to").value;
        comment__container.classList.add("comment__container");
        comment__from.classList.add("comment__from");
        comment__to.classList.add("comment__to");
        newDiv.appendChild(comment__container);
        comment__container.appendChild(comment__text);
        comment__container.appendChild(comment__from);
        comment__container.appendChild(comment__to);
      }

      newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");
      newDiv.classList.add("mp");
      newDiv.appendChild(newDiv__hidden_attention);
      newDiv.appendChild(newDiv__hidden_attentioncommmets);

      const newDiv__comment_settings = document.createElement("i");
      const newDiv__comment_del = document.createElement("i");
      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
      

      newDiv__comment_settings.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";

      newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";

      let id = "id" + Math.random().toString(16).slice(2);
      newDiv__comment_settings.setAttribute("onclick", "document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();document.querySelector('#drawscreen_section_one > div.modal-container > canvas >'+id)");
      newDiv.setAttribute("id", id);
      newDiv__comment_settings.classList.add("m_btn");
      newDiv__comment_settings.classList.add("newDiv__comment_settings");
      newDiv__comment_del.classList.add("newDiv__comment_del");
      newDiv__comment_settings.setAttribute("name", id);
      newDiv__comment_del.setAttribute("name", id);
      newDiv__comment.appendChild(newDiv__comment_settings);
      newDiv__comment.appendChild(newDiv__comment_del); 

      const inH = document.createElement('input');
      const inW = document.createElement('input');

      inH.setAttribute('type', 'num');
      inW.setAttribute('type', 'num');

      touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );
    }

    if (input_step == "drawscreen_section_two")  {

      changedimensions_aukko();
      const newDiv = document.createElement("span");
      const newDiv__comment = document.createElement("span");
      const newDiv__hidden_attention = document.createElement("input");
      const newDiv__hidden_attentioncommmets = document.createElement("input");

      const newDiv__height = document.createElement("b");
      const newDiv__width = document.createElement("b");

      const newDiv__y = document.createElement("i");
      const newDiv__x = document.createElement("i");

      newDiv__height.classList.add("newDiv__height");
      newDiv__width.classList.add("newDiv__width");

      newDiv__y.classList.add("newDiv__y");
      newDiv__x.classList.add("newDiv__x");


      newDiv__hidden_attention.type = "hidden";
      newDiv__hidden_attention.name = "aukko__attentions";
      newDiv__hidden_attentioncommmets.type = "hidden";
      newDiv__hidden_attentioncommmets.name = "aukko__commmets";       
      newDiv.innerHTML = "";
      newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");
      newDiv__comment.innerHTML = document.querySelector("#aukko__name").value;  
      document.querySelector("#box-wrapper > main").prepend(newDiv);
      document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__comment);
      document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__hidden_attention);
      document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__hidden_attentioncommmets);


      newDiv.style.width = parseFloat(parseFloat(document.querySelector("#hole__width").value)/5) + "px";
      parseFloat(parseFloat(document.querySelector("#hole__height").value)/5) + "px";
      newDiv.style.height = parseFloat(parseFloat(document.querySelector("#hole__height").value)/5) + "px";

      newDiv.style.bottom = (parseFloat(document.getElementById("aukotcord_low").value) /5 )  + "px";
      newDiv.style.left =  (parseFloat(document.getElementById("aukotcord_left").value)/5) + 'px';

    

      if (document.querySelector("#aukotcord_low").value == "") {
        newDiv.style.bottom = 0 + 'px';
      }
      if (document.querySelector("#aukotcord_left").value == "") {
        newDiv.style.left = 0 + 'px';
      }
      if (document.querySelector("#m__a_sahko").checked) {
        newDiv__hidden_attention.value += document.querySelector("#m__a_sahko").value + '. ';
      }

      if (document.querySelector("#m__a_putki").checked) {
        newDiv__hidden_attention.value += document.querySelector("#m__a_putki").value + '. ';
      }

      if (document.querySelector("#m__a_tornado").checked) {
        newDiv__hidden_attention.value += document.querySelector("#m__a_tornado").value + '. ';
      }

      if (document.querySelector("#aukko_comment").value != '') {
        newDiv__hidden_attentioncommmets.value += document.querySelector("#aukko_comment").value + '<br> Tältä: ' + document.querySelector("#aukko_comment_from").value + '<br> Tälle: ' + document.querySelector("#aukko_comment_to").value;
        var comment__container = document.createElement("div");
        var comment__text = document.createElement("p");
        var comment__from = document.createElement("strong");
        var comment__to = document.createElement("strong");
        comment__text.innerHTML = document.querySelector("#aukko_comment").value;
        comment__from.innerHTML = document.querySelector("#aukko_comment_from").value;
        comment__to.innerHTML = document.querySelector("#aukko_comment_to").value;
        comment__container.classList.add("comment__container");
        comment__from.classList.add("comment__from");
        comment__to.classList.add("comment__to");
        newDiv.appendChild(comment__container);
        comment__container.appendChild(comment__text);
        comment__container.appendChild(comment__from);
        comment__container.appendChild(comment__to);
      }

      newDiv.appendChild(newDiv__hidden_attention);
      newDiv.appendChild(newDiv__hidden_attentioncommmets);
      newDiv.classList.add("aukko");
      newDiv__height.innerHTML = (parseFloat(document.getElementById("hole__height").value));
      newDiv__width.innerHTML = (parseFloat(document.getElementById("hole__width").value));

      newDiv__y.innerHTML = ("Y: " + parseFloat(document.getElementById("aukotcord_up").value));
      newDiv__x.innerHTML = ("X: " + parseFloat(document.getElementById("aukotcord_left").value));

      newDiv.appendChild(newDiv__height);
      newDiv.appendChild(newDiv__width);

      newDiv.appendChild(newDiv__y);
      newDiv.appendChild(newDiv__x);
      // Add styles to new hole

      if (document.querySelector("#type__door").checked) {
        newDiv.classList.add("ovi");
      }
      if (document.querySelector("#type__window").checked) {
        newDiv.classList.add("ikkuna");
      }
      if (document.querySelector("#type__palkki").checked) {
        newDiv.classList.add("palkki");
      }
      if (document.querySelector("#type__collar").checked) {
        newDiv.classList.add("pilari");
      }
      if (document.querySelector("#type__ventilation").checked) {
        newDiv.classList.add("tuuletus");
      } 

      const newDiv__comment_settings = document.createElement("i");
      const newDiv__comment_del = document.createElement("i");
      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
      newDiv__comment_settings.setAttribute("onclick", "document.querySelector('#drawscreen_section_two > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_two > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
      newDiv__comment_settings.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
      newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";

      let id = "id" + Math.random().toString(16).slice(2);
      newDiv.setAttribute("id", id);

      newDiv__comment_settings.classList.add("m_btn");
      newDiv__comment_settings.classList.add("newDiv__comment_settings");
      newDiv__comment_del.classList.add("newDiv__comment_del");

      newDiv__comment_settings.setAttribute("name", id);
      newDiv__comment_del.setAttribute("name", id);
      newDiv__comment.appendChild(newDiv__comment_settings);
      newDiv__comment.appendChild(newDiv__comment_del);
      const inH = document.createElement('input');
      const inW = document.createElement('input');

      inH.setAttribute('type', 'num');
      inW.setAttribute('type', 'num');

      newDiv_title = (parseFloat(document.getElementById("hole__height").value)) + "," + (parseFloat(document.getElementById("hole__width").value)) + "," + parseFloat(document.getElementById("aukotcord_up").value) + "," + parseFloat(document.getElementById("aukotcord_left").value);
      newDiv.setAttribute("title", newDiv_title);



      touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );
    }

    if (input_step == "drawscreen_section_three") {
      const newDiv = document.createElement("span");
      const newDiv__comment = document.createElement("span");
      const newDiv__hidden_attention = document.createElement("input");
      const newDiv__hidden_attentioncommmets = document.createElement("input");
      newDiv__hidden_attention.type = "hidden";
      newDiv__hidden_attention.name = "attentions";
      newDiv__hidden_attentioncommmets.type = "hidden";
      newDiv__hidden_attentioncommmets.name = "commmets";        
      newDiv.innerHTML = "";
      newDiv__comment.innerHTML = document.querySelector("#lv__name").value;
      document.querySelector("#box-wrapper > main").prepend(newDiv);
        
      document.querySelector(".drawarea__controls_elementsthree").prepend(newDiv__comment);
      document.querySelector(".drawarea__controls_elementsthree").prepend(newDiv__hidden_attention);
      document.querySelector(".drawarea__controls_elementsthree").prepend(newDiv__hidden_attentioncommmets);
      newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");

      newDiv.style.bottom = (parseFloat(document.getElementById("lvcord_low").value) / 5 ) + "px";

      newDiv.style.left = (parseFloat(document.getElementById("lvcord_left").value) / 5 ) + "px";

      if (document.querySelector("#lapiviennit__sade_first").checked) {
        newDiv.innerHTML = document.getElementById("lapiviennit__sade_first").value;
      }
      if (document.querySelector("#lapiviennit__sade_second").checked) {
        newDiv.innerHTML = document.getElementById("lapiviennit__sade_second").value;
      }
      if (document.querySelector("#lapiviennit__sade_third").checked) {
        newDiv.innerHTML = document.getElementById("lapiviennit__sade_third").value;
      }
      if (document.querySelector("#lapiviennit__sade_fourth").checked) {
        newDiv.innerHTML = document.getElementById("lapiviennit__sade_fourth").value;
      }
      if (document.querySelector("#lapiviennit__sade_fifth").checked) {
        newDiv.innerHTML = document.getElementById("lapiviennit__sade_fifth").value;
      } 

      if (document.querySelector("#lapiviennit__sade_muucord").value != "") {
        newDiv.innerHTML = document.getElementById("lapiviennit__sade_muucord").value;
      } 

      if (document.querySelector("#lv_comment").value != '') {
        newDiv__hidden_attentioncommmets.value += document.querySelector("#lv_comment").value + '<br> Tältä: ' + document.querySelector("#lv_comment_from").value + '<br> Tälle: ' + document.querySelector("#lv_comment_to").value;
        const comment__container = document.createElement("div");
        const comment__text = document.createElement("p");
        const comment__from = document.createElement("strong");
        const comment__to = document.createElement("strong");

        comment__text.innerHTML = document.querySelector("#lv_comment").value;
        comment__from.innerHTML = document.querySelector("#lv_comment_from").value;
        comment__to.innerHTML = document.querySelector("#lv_comment_to").value;

        comment__container.classList.add("comment__container");
        comment__from.classList.add("comment__from");
        comment__to.classList.add("comment__to");

        newDiv.appendChild(comment__container);
        comment__container.appendChild(comment__text);
        comment__container.appendChild(comment__from);
        comment__container.appendChild(comment__to);
      }

      newDiv.classList.add("lapivienti"); 
      newDiv.appendChild(newDiv__hidden_attention);
      newDiv.appendChild(newDiv__hidden_attentioncommmets);

      // Add styles to new lapivienti

      newDiv.style.marginTop = "0";
      newDiv.style.marginLeft = "0";

      const height = document.querySelector('#box_h').value;
      const width = document.querySelector('#box_w').value;
    
      if (document.querySelector("#lapiviennit__sade_first").checked) {
        newDiv.style.height = ( document.getElementById("lapiviennit__sade_first").value / height ) * 100 + '%';
        newDiv.style.width = ( document.getElementById("lapiviennit__sade_first").value / width ) * 100 + '%';
        newDiv.classList.add("lapivienti__twofive");
      }

      if (document.querySelector("#lapiviennit__sade_second").checked) {
        newDiv.style.height = ( document.getElementById("lapiviennit__sade_second").value / height ) * 100 + '%';
        newDiv.style.width = ( document.getElementById("lapiviennit__sade_second").value / width ) * 100 + '%';
        newDiv.classList.add("lapivienti__fivezero");
      }

      if (document.querySelector("#lapiviennit__sade_third").checked) {
        newDiv.style.height = ( document.getElementById("lapiviennit__sade_third").value / height ) * 100 + '%';
        newDiv.style.width = ( document.getElementById("lapiviennit__sade_third").value / width ) * 100 + '%';
        newDiv.classList.add("lapivienti__sevenfive");
      }

      if (document.querySelector("#lapiviennit__sade_fourth").checked) {
        newDiv.style.height = ( document.getElementById("lapiviennit__sade_fourth").value / height ) * 100 + '%';
        newDiv.style.width = ( document.getElementById("lapiviennit__sade_fourth").value / width ) * 100 + '%';
        newDiv.classList.add("lapivienti__onezerozero");
      }

      if (document.querySelector("#lapiviennit__sade_fifth").checked) {
        newDiv.style.height = ( document.getElementById("lapiviennit__sade_fifth").value / height ) * 100 + '%';
        newDiv.style.width = ( document.getElementById("lapiviennit__sade_fifth").value / width ) * 100 + '%';
        newDiv.classList.add("lapivienti__onetwofive");
      } 
      
      if (document.querySelector("#lapiviennit__sade_muucord").value != "") {
        newDiv.style.height = ( document.getElementById("lapiviennit__sade_muucord").value / height ) * 100 + '%';
        newDiv.style.width = ( document.getElementById("lapiviennit__sade_muucord").value / width ) * 100 + '%';
        newDiv.classList.add("lapivienti__customsize");
      }

      const newDiv__comment_settings = document.createElement("i");
      const newDiv__comment_del = document.createElement("i");
      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");
      newDiv__comment_settings.setAttribute("onclick", "document.querySelector('#drawscreen_section_three > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_three > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();");

        
      newDiv__comment_settings.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
      newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";

      let id = "id" + Math.random().toString(16).slice(2);
      newDiv.setAttribute("id", id);

      newDiv__comment_settings.classList.add("m_btn");
      newDiv__comment_settings.classList.add("newDiv__comment_settings");
      newDiv__comment_del.classList.add("newDiv__comment_del");

      newDiv__comment_settings.setAttribute("name", id);
      newDiv__comment_del.setAttribute("name", id);
      newDiv__comment.appendChild(newDiv__comment_settings);
      newDiv__comment.appendChild(newDiv__comment_del);

      const inH = document.createElement('input');
      const inW = document.createElement('input');

      inH.setAttribute('type', 'num');
      inW.setAttribute('type', 'num');

      touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );
    }
  }

  var a = 0;
  var b = 0;
  var c = 0;
  var d = 0;
  var e = 0;

  function change__aukko_sizecord() {
    const height = document.querySelector('#box_h').value;
    const width = document.querySelector('#box_w').value;
    
    

    if (document.querySelector("#type__door").checked) {
      a+=1;
      // document.getElementById("hole__height").value = 2000;
      // document.getElementById("hole__width").value = 1000;


      document.querySelector("#aukko__name").value="Ovi #" + a; 
    }
    if (document.querySelector("#type__window").checked) {
      b+=1;
      // document.getElementById("hole__height").value = 1000;
      // document.getElementById("hole__width").value = 2000;

      document.querySelector("#aukko__name").value="Ikkuna #" + b; 
    }
    if (document.querySelector("#type__palkki").checked) {
      c+=1;
      // document.getElementById("hole__height").value = 100;
      // document.getElementById("hole__width").value = 1000;

      document.querySelector("#aukko__name").value="Palkki #" + c; 
    }
    if (document.querySelector("#type__collar").checked) {
      d+=1;
      // document.getElementById("hole__height").value = 1000;
      // document.getElementById("hole__width").value = 100;

      document.querySelector("#aukko__name").value="Pilari #" + d; 
    }
    if (document.querySelector("#type__ventilation").checked) {
      e+=1;
      // document.getElementById("hole__height").value = 200;
      // document.getElementById("hole__width").value = 200;

      document.querySelector("#aukko__name").value="Ilmastointi #" + e; 
    } 

    // document.getElementById("settings__aukko").style.height = (document.getElementById("hole__height").value / height * 100) + '%';
    // document.getElementById("settings__aukko").style.width = (document.getElementById("hole__width").value / width * 100) + '%';

    // change__aukko_size();
  }

  // function change__aukko_size() {
  //   const height = document.querySelector('#box_h').value;
  //   const width = document.querySelector('#box_w').value;
    
  //   document.getElementById("settings__aukko").style.height = (document.getElementById("hole__height").value / height * 100) + '%';
  //   document.getElementById("settings__aukko").style.width = (document.getElementById("hole__width").value / width * 100) + '%';
  // }
        

  function change__lapivienti_sizecord() {
    const height = document.querySelector('#box_h').value;
    const width = document.querySelector('#box_w').value;
  
    if (document.querySelector("#lapiviennit__sade_first").checked) {
      document.getElementById("settings__lv").style.height = ( document.getElementById("lapiviennit__sade_first").value / height ) * 100 + '%';
      document.getElementById("settings__lv").style.width = ( document.getElementById("lapiviennit__sade_first").value / width ) * 100 + '%';
    }

    if (document.querySelector("#lapiviennit__sade_second").checked) {
      document.getElementById("settings__lv").style.height = ( document.getElementById("lapiviennit__sade_second").value / height ) * 100 + '%';
      document.getElementById("settings__lv").style.width = ( document.getElementById("lapiviennit__sade_second").value / width ) * 100 + '%';
    }

    if (document.querySelector("#lapiviennit__sade_third").checked) {
      document.getElementById("settings__lv").style.height = ( document.getElementById("lapiviennit__sade_third").value / height ) * 100 + '%';
      document.getElementById("settings__lv").style.width = ( document.getElementById("lapiviennit__sade_third").value / width ) * 100 + '%';
    }

    if (document.querySelector("#lapiviennit__sade_fourth").checked) {
      document.getElementById("settings__lv").style.height = ( document.getElementById("lapiviennit__sade_fourth").value / height ) * 100 + '%';
      document.getElementById("settings__lv").style.width = ( document.getElementById("lapiviennit__sade_fourth").value / width ) * 100 + '%';
    }

    if (document.querySelector("#lapiviennit__sade_fifth").checked) {
      document.getElementById("settings__lv").style.height = ( document.getElementById("lapiviennit__sade_fifth").value / height ) * 100 + '%';
      document.getElementById("settings__lv").style.width = ( document.getElementById("lapiviennit__sade_fifth").value / width ) * 100 + '%';
    } 
    
    if (document.querySelector("#lapiviennit__sade_muucord").value != "") {
      document.getElementById("settings__lv").style.height = ( document.getElementById("lapiviennit__sade_muucord").value / height ) * 100 + '%';
      document.getElementById("settings__lv").style.width = ( document.getElementById("lapiviennit__sade_muucord").value / width ) * 100 + '%';
    }
  }

  function changedimensions_aukko(input) {
      document.querySelector("#hole__width").value = ((parseFloat(document.getElementById("aukotcord_right").value) - (parseFloat(document.getElementById("aukotcord_left").value))));
      document.querySelector("#hole__height").value = ((parseFloat(document.getElementById("aukotcord_up").value) - (parseFloat(document.getElementById("aukotcord_low").value))));

    if(input) {
      if (input.value % 25 !== 0) {
        alert("Moduulimittaa, kiitos");
        console.log(input);

        document.querySelector("#drawscreen_section_two > div > div > div > div.modal_close_btn.drawarea__controls_btn").style.opacity = 0;
      } else {
        // alert("Moduulimittaa, kiitos.");
        document.querySelector("#drawscreen_section_two > div > div > div > div.modal_close_btn.drawarea__controls_btn").style.opacity = 1;
      }
    }
      
  }
</script>

<!-- 2.4 - Saumoitus -->
<script>
  function changedimensions_sauma(input) {
    const elements = document.querySelectorAll('.sauma__vertical');
    const h_elements = document.querySelectorAll('.sauma__horizontal');
    if(input) {
      if (input.value % 25 !== 0) {
        input.style.border = "3px dashed red";
      }
      else {

        oldvalue = parseFloat(input.dataset.from);
        input.style.border = "unset";
        if((input.parentElement).classList.contains("sauma__vertical") || (input.parentElement.parentElement).classList.contains("sauma__vertical")) {

          if((input.parentElement).classList.contains("sauma__vertical")) {
            sauma = input.parentElement; 
          }
          else if((input.parentElement.parentElement).classList.contains("sauma__vertical")) {
            sauma = input.parentElement.parentElement;
          }

          const currentIndex = Array.from(elements).indexOf(sauma);
          console.log("currentIndex " + currentIndex);
          console.log("elements.length " + elements.length );

          if(currentIndex+1 === elements.length) {
            alert("Älä muokkaa häntää");
          }
          else {
            if(document.querySelector("#settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
              old_cord = parseFloat(sauma.style.left)*5;
            } 
            else if(document.querySelector("#settings__saumahanta-vas").checked) {
              old_cord = parseFloat(sauma.style.right)*5;
            }

            newvalue = parseFloat(input.value);
            initialcord = old_cord-oldvalue;
            changed_value = oldvalue + (newvalue - oldvalue); 
            new_cord = (parseFloat(initialcord)+changed_value)/5 + "px";
            sauma.querySelector(".sauma__control_down").innerHTML = changed_value-10;

            if(document.querySelector("#settings__saumahanta-oik").checked || document.querySelector("#settings__saumahanta-tasoitus").checked) {
              sauma.style.left = new_cord;
            } 
            else if(document.querySelector("#settings__saumahanta-vas").checked) {
              sauma.style.right = new_cord;
            }

            input.dataset.from=newvalue;
            sauma.querySelector(".sauma__controls > b").innerHTML=newvalue-10;


            
            erotus=newvalue-oldvalue;

            if(oldvalue>newvalue) {
              next_sauma = document.querySelectorAll('.sauma__vertical')[currentIndex+1];
              next_sauma_value = parseFloat(next_sauma.querySelector("input").value);
              next_sauma_newvalue = parseFloat(next_sauma_value-erotus);
              next_sauma.querySelector("input").value = parseFloat(next_sauma_newvalue);
              next_sauma.querySelector(".sauma__controls > b").innerHTML = parseFloat(next_sauma_newvalue)-10;
              next_sauma.style.left = (parseFloat(initialcord)+parseFloat(changed_value)+parseFloat(next_sauma_newvalue))/5 + "px";
              
              sauma.querySelector(".sauma__controls > b").style.width = parseFloat(newvalue)/5 + "px";
              sauma.querySelector(".sauma__controls > b").style.left =  (-1)* parseFloat(newvalue)/5 + "px";

              next_sauma.querySelector(".sauma__controls > b").style.width = parseFloat(next_sauma_newvalue)/5 + "px";
              next_sauma.querySelector(".sauma__controls > b").style.left = (-1) * parseFloat(next_sauma_newvalue)/5 + "px";
            }

            else if(oldvalue<newvalue) {
              prev_sauma = document.querySelectorAll('.sauma__vertical')[currentIndex+1];
              prev_sauma_value = parseFloat(prev_sauma.querySelector("input").value);
              prev_sauma_newvalue = parseFloat(prev_sauma_value-erotus);
              prev_sauma.querySelector("input").value = parseFloat(prev_sauma_newvalue);
              prev_sauma.querySelector(".sauma__controls > b").innerHTML = parseFloat(prev_sauma_newvalue)-10;
              prev_sauma.style.left = (parseFloat(initialcord)+parseFloat(changed_value)+parseFloat(prev_sauma_newvalue))/5 + "px";
              
              sauma.querySelector(".sauma__controls > b").style.width = parseFloat(newvalue)/5 + "px";
              sauma.querySelector(".sauma__controls > b").style.left =  (-1)* parseFloat(newvalue)/5 + "px";

              prev_sauma.querySelector(".sauma__controls > b").style.width = parseFloat(prev_sauma_newvalue)/5 + "px";
              prev_sauma.querySelector(".sauma__controls > b").style.left = (-1)* parseFloat(prev_sauma_newvalue)/5 + "px";
            }
          }
          
          

        }
        if((input.parentElement).classList.contains("sauma__horizontal") || (input.parentElement.parentElement).classList.contains("sauma__horizontal")) {

          

          if((input.parentElement).classList.contains("sauma__horizontal")) {
            sauma = input.parentElement; 
          }
          else if((input.parentElement.parentElement).classList.contains("sauma__horizontal")) {
            sauma = input.parentElement.parentElement;
          }

          const currentIndex = Array.from(h_elements).indexOf(sauma);

         


          if(currentIndex+1 === h_elements.length) {
            alert("Älä muokkaa häntää");
          }
          else {  
            oldvalue = parseFloat(input.dataset.from);
            old_cord = parseFloat(sauma.style.bottom)*5;
            newvalue = parseFloat(input.value);
            initialcord = old_cord-oldvalue;
            changed_value = oldvalue + (newvalue - oldvalue); 
            new_cord = (parseFloat(initialcord)+changed_value)/5 + "px";
            sauma.querySelector(".sauma__control_down").innerHTML = changed_value-10;

            sauma.style.bottom = new_cord;
            input.dataset.from=newvalue;
            sauma.querySelector(".sauma__controls > b").innerHTML=newvalue-10;

            console.log("HORIZONTAL");
            console.log("h_elements" + h_elements);
            console.log("currentIndex" + currentIndex);

            
            console.log("old_cord " + old_cord);
            console.log("newvalue " + newvalue);
            console.log("initialcord " + initialcord);
            console.log("changed_value " + changed_value);
            console.log("new_cord " + new_cord);
            


            
            erotus=newvalue-oldvalue;
            console.log("erotus " + erotus);

            if(oldvalue>newvalue) {
              next_sauma = document.querySelectorAll('.sauma__horizontal')[currentIndex+1];
              next_sauma_value = parseFloat(next_sauma.querySelector("input").value);
              next_sauma_newvalue = parseFloat(next_sauma_value-erotus);
              next_sauma.querySelector("input").value = parseFloat(next_sauma_newvalue);
              next_sauma.querySelector(".sauma__controls > b").innerHTML = parseFloat(next_sauma_newvalue)-10;
              next_sauma.style.bottom = (parseFloat(initialcord)+parseFloat(changed_value)+parseFloat(next_sauma_newvalue))/5 + "px";
              
              sauma.querySelector(".sauma__controls > b").style.height = parseFloat(newvalue)/5 + "px";
              sauma.querySelector(".sauma__controls > b").style.bottom =  (-1)* parseFloat(newvalue)/5 + "px";

              next_sauma.querySelector(".sauma__controls > b").style.height = parseFloat(next_sauma_newvalue)/5 + "px";
              next_sauma.querySelector(".sauma__controls > b").style.bottom = (-1) * parseFloat(next_sauma_newvalue)/5 + "px";
            }

            else if(oldvalue<newvalue) {
              prev_sauma = document.querySelectorAll('.sauma__horizontal')[currentIndex+1];
              prev_sauma_value = parseFloat(prev_sauma.querySelector("input").value);
              prev_sauma_newvalue = parseFloat(prev_sauma_value-erotus);
              prev_sauma.querySelector("input").value = parseFloat(prev_sauma_newvalue);
              prev_sauma.querySelector(".sauma__controls > b").innerHTML = parseFloat(prev_sauma_newvalue)-10;
              prev_sauma.style.bottom = (parseFloat(initialcord)+parseFloat(changed_value)+parseFloat(prev_sauma_newvalue))/5 + "px";
              
              sauma.querySelector(".sauma__controls > b").style.height = parseFloat(newvalue)/5 + "px";
              sauma.querySelector(".sauma__controls > b").style.bottom =  (-1)* parseFloat(newvalue)/5 + "px";

              prev_sauma.querySelector(".sauma__controls > b").style.height = parseFloat(prev_sauma_newvalue)/5 + "px";
              prev_sauma.querySelector(".sauma__controls > b").style.bottom = (-1)* parseFloat(prev_sauma_newvalue)/5 + "px";
            }
          }

        }
      }
    }
      
  }
</script>

<!-- 2.5 - Levytys -->
<script>
  function luo__levy(h,w,dex,col,b,l) {
    dex+=1;
    var ind;

    title_index = h+","+w+","+b+","+l;
    var roomname = document.querySelector(".room").value;
    var wallname = document.querySelector(".wall").value;

    if(roomname == "") {
      roomname = "Seinän levy";
    }

    r = wallname.replace("SEINÄ ","").replace("1. ","").replace("2. ","").replace("3. ","").replace("4. ","").replace("5. ","").replace("6. ","").replace("KATTO ","").replace("LATTIA ","");

    var levy__interval_horizontal = parseFloat(h) / 5 +1;
    var levy__interval_vertical = parseFloat(w) / 5 +1;

    var levy = document.createElement("div");
    var levy_h = document.createElement("div");
    var levy_w = document.createElement("div");
    var levy_name = document.createElement("div");

    levy.classList.add("levy");
    levy_h.classList.add("levy_h");
    levy_w.classList.add("levy_w");
    levy_name.classList.add("levy_name");

    if (document.getElementById("settings__sauma_pysty").checked) {
      levy.classList.add("dir_y");
    }
    
    else if(document.getElementById("settings__sauma_vaaka").checked) {
      levy.classList.add("dir_x");
    }

    ind = String.fromCharCode(65 + col);

   
    
    levy_h.innerHTML = h
    levy_w.innerHTML = w;
    levy_name.innerHTML = r + "_"  + ind + dex;

    levy.innerHTML = "<b> <div class='levy_name'> " + levy_name.innerHTML + "</div><i>" + h + "x" + w + "mm</i></b>";


    levy.setAttribute("title", title_index);

    levy.style.height = (parseFloat(levy__interval_vertical)) + 'px';
    // levy.style.width = (parseFloat(levy__interval_horizontal)) + 'px';
    levy.style.width = (parseFloat(levy__interval_horizontal)) + 'px';

    levy_h.style.display = "none";
    levy_w.style.display = "none";

    levy.appendChild(levy_h);
    levy.appendChild(levy_w);

    
    levy.style.position = "absolute";

    levy.style.bottom = (parseFloat(b)/5)+"px";

    if(document.getElementById("settings__saumahanta-oik").checked || document.getElementById("settings__saumahanta-tasoitus").checked || document.getElementById("settings__saumahanta-vas").checked && document.querySelector("#saumoitus__sauma_two").checked) {
      levy.style.left = (parseFloat(l)/5)+"px";
    }

    else if(document.getElementById("settings__saumahanta-vas").checked && document.querySelector("#saumoitus__sauma_one").checked) {
      levy.style.right = (parseFloat(l)/5)+"px";
    }
    else {
      levy.style.right = (parseFloat(l)/5)+"px";
    }
    

    // levy.appendChild(levy_name);

    var l_meta = document.createElement("input");
    l_meta.type="hidden";
    l_meta.classList = "l_meta";

    levy.appendChild(l_meta);


    return levy;
    levy_array.append(levy);
  }



  function levyta() {
    levy_c=-1;
    levy_array = [];
    if(document.querySelector(".levy") || document.querySelector(".levyt") || document.querySelector(".levysarake")) {
      let levy = document.querySelectorAll(".levy");

      for (var i=0;i<levy.length;i+=1){
        levy[i].remove();
       
      }


      let levyrow = document.querySelectorAll(".levyt");
      for (var i=0;i<levyrow.length;i+=1){
        levyrow[i].remove();
      }

      let levysarake = document.querySelectorAll(".levysarake");
      for (var i=0;i<levysarake.length;i+=1){
        levysarake[i].remove();
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
      
    let vaakamitat = document.querySelectorAll(".sauma__horizontal_ctrldown");
    let pystymitat = document.querySelectorAll(".sauma__vertical_ctrldown");
    var levyt = document.createElement("div");
    
    var canvas = document.querySelector("#box-wrapper > main");

    myDivs_horizontal = [],
    myDivs_vertical = [],
    i = 0,2
    j = 0;
    levycount = parseFloat(vaakamitat.length * pystymitat.length);

    if (document.getElementById("settings__sauma_pysty").checked) {
      document.querySelector("#settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;
      document.querySelector("#settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;

      document.querySelector("#k_settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;
      document.querySelector("#k_settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;

      document.querySelector("#drawscreen_section_tyostot .visible").classList.add("dir_y");
    }
    else if (document.getElementById("settings__sauma_vaaka").checked) {
      document.querySelector("#settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;
      document.querySelector("#settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;
      document.querySelector("#k_settings__levy_levysizeh").value = document.querySelector("#settings__sauma_interval_y").value;
      document.querySelector("#k_settings__levy_levysizew").value = document.querySelector("#settings__sauma_interval_x").value;

      document.querySelector("#drawscreen_section_tyostot .visible").classList.add("dir_x");
    }


    levyt.classList.add("levyt");
    // if (document.getElementById("settings__saumahanta-vas").checked) {
    //   levyt.style.flexDirection = "row-reverse";
    // }

    var prev_b = 0;
    var prev_l = 0;
    for (var i = 0; i < vaakamitat.length; i++) {
      var levysarake = document.createElement("div");
      levysarake.classList.add("levysarake");
      levysarake.setAttribute("title", "s"+i);
      
      prev_b+=parseFloat(vaakamitat[i].innerHTML);
      b=prev_b-parseFloat(vaakamitat[i].innerHTML)+10*[i]+5;

      prev_l=0;

      //LEFT
      for (var j = 0; j < pystymitat.length; j++) {
        h = parseFloat(pystymitat[j].innerHTML);
        w = parseFloat(vaakamitat[i].innerHTML);

        prev_l+=parseFloat(pystymitat[j].innerHTML);
        l=prev_l-parseFloat(pystymitat[j].innerHTML)+10*[j]+5;


        levyt.append(luo__levy(h,w,i,j,b,l))
        // levy_array.push(luo__levy(h,w,i,j,b,l))
      }

      // levyt.append(levysarake);
    }

    canvas.append(levyt);

    // var saumat__grandrow = document.querySelector(".saumat__grandrow");
    // var verticalrow_saumat = document.querySelector(".verticalrow_saumat");
    // saumat__grandrow.style.position = "absolute";
    // verticalrow_saumat.style.top = "0";

    // saumat__grandrow.remove();

    let levy = document.querySelectorAll(".levy");
    for (var i=0;i<levy.length;i+=1){
      raksita(levy[i]);
    }

    poista__aukkoala();
  }

  function poista__aukkoala() {
    aukkos = canvas.querySelectorAll(".aukko");
    levys = canvas.querySelectorAll(".levy");


    for (var i = aukkos.length - 1; i >= 0; i--) {
      a_title_ = aukkos[i].title;
      a_title = a_title_.split(",");

      aukko_h = parseFloat(a_title[0]);
      aukko_w = parseFloat(a_title[1]);
      aukko_l = parseFloat(a_title[3]);
      aukko_b = parseFloat(a_title[2]);


      for (var l = levys.length - 1; l >= 0; l--) {
        l_title_ = levys[l].title;
        l_title = l_title_.split(",");

        levy_h = parseFloat(l_title[1]);
        levy_w = parseFloat(l_title[0]);
        levy_l = parseFloat(l_title[3]);
        levy_b = parseFloat(l_title[2]);


        

        //DELETE IF COMPLETELY SAME

        if(levy_h === aukko_h-10) {
          // levys[l].style.background = "green";
          console.log("aukko_h " + aukko_h + " levy_h: " + levy_h);

        }
        if(levy_w === (aukko_w-10)) {
            // levys[l].style.background = "blue";
            console.log("aukko_w " + aukko_w + " levy_w: " + levy_w);
        }
        if(levy_l-5 === aukko_l) {
          // levys[l].style.background = "yellow";
          console.log("aukko_l " + aukko_l + " levy_l: " + levy_l);
        }
        if(levy_b-5 === aukko_b) {
          // levys[l].style.background = "purple";
          console.log("aukko_b " + aukko_b + " levy_b: " + levy_b);
        }


        if(levy_h === aukko_h-10 && levy_w === (aukko_w-10) && levy_l-5 === aukko_l &&levy_b-5 === aukko_b) {
          levys[l].remove();
        }
      }
    }

  }



  function raksita(levy) {
    levy_c+=1;

    var closer_1 = document.createElement("div");
    var closer_2 = document.createElement("div");
    var closer_3 = document.createElement("div");
    var closer_4 = document.createElement("div");

    closer_1.classList.add("closer");
    closer_2.classList.add("closer");
    closer_3.classList.add("closer");
    closer_4.classList.add("closer");

    closer_1.classList.add("closer_1");
    closer_2.classList.add("closer_2");
    closer_3.classList.add("closer_3");
    closer_4.classList.add("closer_4");

    closer_1.innerHTML = "X";
    closer_2.innerHTML = "X";
    closer_3.innerHTML = "X";
    closer_4.innerHTML = "X";


    closer_1.setAttribute("onclick", "");
    closer_2.setAttribute("onclick", "");
    closer_3.setAttribute("onclick", "");
    closer_4.setAttribute("onclick", "");

    if(isEven(levy_c)) {
      levy.appendChild(closer_1);
      levy.appendChild(closer_2);
      levy.appendChild(closer_3);
      levy.appendChild(closer_4);
    }

    levy.setAttribute("data-levy", levy_c);
    $('.closer').click(function() {
      var c = $(this).parent().data("levy");


      if($(this).hasClass("closer_4")) {
        $('div[data-levy="' + (c-1) + '"]').css( "background-color", "red" );
        $(this).parent().css( "background-color", "red" );
        value=$(this).parent().width() + $('div[data-levy="' + (c-1) + '"]').width() + 20;
        $('div[data-levy="' + (c-1) + '"]').width(value);

        $(this).parent().remove();

      }
      if($(this).hasClass("closer_2")) {
        $('div[data-levy="' + (c+1) + '"]').css( "background-color", "red" );
        $(this).parent().css( "background-color", "red" );
        value=$(this).parent().width() + $('div[data-levy="' + (c+1) + '"]').width() + 20;
        $(this).parent().width(value);

        $('div[data-levy="' + (c+1) + '"]').remove();

      }
      all_levyt = $(".levyt > .levysarake").children().length;

      var p = $(this).parent();
      var current = $(this).attr("data-levy");
      

    });
  }

  
  function aloita_tyosto_kiinnikkeet() {
    let levyt = document.querySelectorAll("#drawscreen_section_tyostot .visible");
    evt = 0;

    // k_main_levy = document.querySelectorAll("#drawscreen_section_tyostot .levy")[0].getAttribute("title");

    // k_min_h = parseFloat(document.querySelector("#p_two").value);
    // k_min_w = parseFloat(document.querySelector("#v_two").value);


    // k_main_levy_ = k_main_levy.split(",");
      if(document.querySelector("#kiinniketys__pkiinnike_one").checked === true) {
        evt = 1;
        levyt.forEach(element => tyosta(element, evt));
      }
      if(document.querySelector("#kiinniketys__pkiinnike_two").checked === true) {
        evt = 2;
        levyt.forEach(element => tyosta(element, evt));
      }
      if(document.querySelector("#kiinniketys__pkiinnike_three").checked === true) {
        evt = 3;
        levyt.forEach(element => tyosta(element, evt));
      }
      if(document.querySelector("#kiinniketys__pkiinnike_four").checked === true) {
        evt = 4;
        levyt.forEach(element => tyosta(element, evt));
      }
    
   
      if(document.querySelector("#kiinniketys__vkiinnike_one").checked === true) {
        evt = 5;
        levyt.forEach(element => tyosta(element, evt));
      }
      if(document.querySelector("#kiinniketys__vkiinnike_two").checked === true) {
        evt = 6;
        levyt.forEach(element => tyosta(element, evt));
      }
      if(document.querySelector("#kiinniketys__vkiinnike_three").checked === true) {
        evt = 7;
        levyt.forEach(element => tyosta(element, evt));
      }
      if(document.querySelector("#kiinniketys__vkiinnike_four").checked === true) {
        evt = 8;
        levyt.forEach(element => tyosta(element, evt));
      }


       
    
  }

  
</script>

<!-- 2.5-5 Kiinnikkeet -->
<script>
  function isEven(num) {
    return num % 2 === 0;
  }


  function tyosta(levy, evt) {
      levy_c_x = 0;
      levy_c_y = 0;

      var left_cord = 0, bottom_cord = 0;



      if(levy.querySelector(".levy_tyostot_y")) {
        var levy_tyostot_y = levy.querySelector(".levy_tyostot_y");
      }
      else {
        var levy_tyostot_y = document.createElement("div");
        levy_tyostot_y.classList.add("levy_tyostot_y");
        levy.append(levy_tyostot_y);
      }

      if(levy.querySelector(".levy_tyostot_x")) {
        var levy_tyostot_x = levy.querySelector(".levy_tyostot_x");
      }
      else {
        var levy_tyostot_x = document.createElement("div");     
        levy_tyostot_x.classList.add("levy_tyostot_x");
        levy.append(levy_tyostot_x);
      }



     
      k_one = document.querySelector("#kiinniketys__kiinnike_one");
      k_two = document.querySelector("#kiinniketys__kiinnike_two");
      k_three = document.querySelector("#kiinniketys__kiinnike_three");
      k_four = document.querySelector("#kiinniketys__kiinnike_four");
      k_five = document.querySelector("#kiinniketys__kiinnike_five");
      k_six = document.querySelector("#kiinniketys__kiinnike_six");
            

      levy_meta = (levy.title).split(",")
      
      l_d = 8;



      k_main_levy = levy.getAttribute("title");

      k_min_h = parseFloat(document.querySelector("#p_two").value);
      k_min_w = parseFloat(document.querySelector("#v_two").value);


      k_main_levy_ = k_main_levy.split(",");





      //PYSTYKIINNIKKEET
      if(evt === 1 || evt === 2 || evt === 3 || evt === 4) {
        let tyosto_levy = levy.querySelectorAll(".tyostot__tyosto_pysty");
        for (var i = tyosto_levy.length - 1; i >= 0; i--) {
          tyosto_levy[i].remove()
        }
       
        height_levy = parseFloat(document.querySelector("#k_settings__levy_levysizew").value);
        l_i = document.querySelector("#p_target").value;
        p_left = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
        p_right = parseFloat(document.querySelector("#settings__levy_or_arvo").value);

        p_h_ = (height_levy-(p_left+p_right));
        p_kaava1 = p_h_/l_i;
        
       
        if(p_h_ < k_min_h) {
          p_h =-1;
          p_kaava1 = 0;
          p_c_kaava1 = Math.ceil(p_kaava1);
          p_t_kaava1 = 1 + Math.trunc(p_kaava1);
        }
        else {
          p_h = p_h_;
          p_c_kaava1 = Math.ceil(p_kaava1);
          p_t_kaava1 = 1 + Math.trunc(p_kaava1);
        }


        if(evt === 1 &&  k_min_h < parseFloat(k_main_levy_[0])|| evt === 2 &&  k_min_h < parseFloat(k_main_levy_[0])) { 
          for (var j = 1; j < p_c_kaava1; j++) {
            if(evt === 1) {
              var x = document.createElement("div");
              left_cord = ((parseFloat(l_i)*j)/5) + "px";
              x.style.right = left_cord;

              x.classList.add("tyostot__tyosto");
              x.classList.add("tyostot__tyosto_pysty");
              x.style.height = "100%";
              x.style.width = parseFloat(8/5)+"px";
              x.style.position = "absolute";
              
              levy_tyostot_x.prepend(x);            
              levy.append(levy_tyostot_x);

              var x_cord = document.createElement("input");
              x_cord.type = "text";
              x_cord.classList.add("x_cord");
              cord = parseFloat((parseFloat(l_i)*(j))) - parseFloat((parseFloat(l_i)*(j-1)));
              x_cord.value = cord.toFixed(0);
              x_cord.dataset.from = x_cord.value;
              x_cord.style.right = cord/10;
              x_cord.style.float = "left";
              x.prepend(x_cord);

            }
            else if(evt === 2) {
              var x = document.createElement("div");
              right_cord = ((parseFloat(l_i)*j)/5) + "px";
              x.style.left = right_cord;

              x.classList.add("tyostot__tyosto");
              x.classList.add("tyostot__tyosto_pysty");
              x.style.height = "100%";
              x.style.width = parseFloat(8/5)+"px";
              x.style.position = "absolute";
              levy_tyostot_x.prepend(x);
             

              levy.append(levy_tyostot_x);
              cord = parseFloat((parseFloat(l_i)*(j))) - parseFloat((parseFloat(l_i)*(j-1)));
              var x_cord = document.createElement("input");
              x_cord.type = "text";
              x_cord.classList.add("x_cord");
              x_cord.value = cord.toFixed(0);
              x_cord.dataset.from = x_cord.value;
              x_cord.style.float = "right";
              // x_cord.style.left = cord/10;
              x.prepend(x_cord);
            }
            // if(evt === 1) {
            //   x_cord.style.float = "left";
            // }
            // else if(evt === 2) {
            //   x_cord.style.float = "right";
            // }
          }
        }


        if(evt === 3 && k_min_h < parseFloat(k_main_levy_[0]) || evt === 4 &&  k_min_h < parseFloat(k_main_levy_[0])) {
          lahinmodmitta = (p_h/25);
          areas = Math.ceil(p_c_kaava1);

          modcount =  Math.floor((lahinmodmitta)/areas);
          l_i = parseFloat(modcount*25);

          p_t_kaava1 = Math.floor(p_h/l_i);

          if(evt === 4) {
            if(isEven(p_t_kaava1)) {
              
            }
            else {
              p_t_kaava1+=1;
            }

          }

          for (var j = 0; j < p_t_kaava1; j++) {
            if(j !== 0) {
              var x = document.createElement("div");
              tas_cord = (j*l_i)/5 + "px";

              x.style.left = tas_cord;
              x.classList.add("tyostot__tyosto");
              x.classList.add("tyostot__tyosto_pysty");
             
              x.style.height = "100%";
              x.style.width = parseFloat(8/5)+"px";
              x.style.position = "absolute";
              levy_tyostot_x.prepend(x);

              var x_cord = document.createElement("input");
              x_cord.type = "text";
              x_cord.classList.add("x_cord");
              cord = (j*(l_i) - (j-1)*(parseFloat(l_i)));
              x_cord.value = cord.toFixed(0);
              x_cord.dataset.from = x_cord.value;
               x_cord.style.float = "right";
              // x_cord.style.left = cord/10 + "px";
              x.prepend(x_cord);


               
            }
          }
        }
        t_last_right(levy,levy_tyostot_x,evt);
        t_last_left(levy,levy_tyostot_x,evt);
      }
      //VAAKAKIINNIKKEET
      if(evt === 5 || evt === 6 || evt === 7 || evt === 8) {
        let tyosto_levy = levy.querySelectorAll(".tyostot__tyosto_vaaka");
        for (var i = tyosto_levy.length - 1; i >= 0; i--) {
          tyosto_levy[i].remove()
        }

        l_i = document.querySelector("#v_target").value;

        v_u = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
        v_b = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);

        width_levy = parseFloat(document.querySelector("#k_settings__levy_levysizeh").value);
        v_w_ = (width_levy-(v_u+v_b));

        v_kaava1 = v_w_/l_i;


        if(v_w_ < k_min_w) {
          v_w =-1;
          p_kaava1 = 0;
          v_c_kaava1 = 0;
          v_t_kaava1 = 0;
        }
        else {
          v_w = v_w_;
          v_c_kaava1 = parseFloat(1 + Math.ceil(v_kaava1));
          v_t_kaava1 = parseFloat(1 + Math.trunc(v_kaava1));
        }

        // l_i = 
        if( evt === 5 && k_min_w < parseFloat(k_main_levy_[1])|| evt === 6 && k_min_w < parseFloat(k_main_levy_[1])) {
          for (var g = 1; g < v_t_kaava1; g++) {
            if(evt === 5) {
              var x = document.createElement("div");
              bottom_cord = (parseFloat(l_i)*g)/5 + "px";
              x.style.bottom = bottom_cord;

              x.classList.add("tyostot__tyosto");
              x.classList.add("tyostot__tyosto_vaaka");
              x.style.width = "100%";
              x.style.height = parseFloat(8/5)+"px";
              x.style.position = "absolute";

              levy_tyostot_y.prepend(x);


              var x_cord = document.createElement("input");
              x_cord.type = "text";
              cord = parseFloat((parseFloat(l_i)*(g))) - parseFloat((parseFloat(l_i)*(g-1)));
              x_cord.value = cord.toFixed(0);
              x_cord.dataset.from = x_cord.value;
              x_cord.style.top = "-15px";
              x.prepend(x_cord);
            
              levy.append(levy_tyostot_y);
            }
            else if(evt === 6) {
              var x = document.createElement("div");
              top_cord = (parseFloat(l_i)*g)/5 + "px";
              x.style.top = top_cord;
              x.classList.add("tyostot__tyosto");
              x.classList.add("tyostot__tyosto_vaaka");
              x.style.width = "100%";
              x.style.height = parseFloat(8/5)+"px";
              x.style.position = "absolute";

              levy_tyostot_y.prepend(x);


              var x_cord = document.createElement("input");
              x_cord.type = "text";
              cord = parseFloat((parseFloat(l_i)*(g))) - parseFloat((parseFloat(l_i)*(g-1)));
              x_cord.value = cord.toFixed(0);
              x_cord.dataset.from = x_cord.value;
              x_cord.style.top = "-15px";
              x.prepend(x_cord);

              levy.append(levy_tyostot_y);
            }
          }
        }
        if(evt === 8) {
          if(isEven(v_t_kaava1)) {
            
          }
          else {
            v_t_kaava1+=1;
          }

        }
        
        if( evt === 7 && k_min_w < parseFloat(k_main_levy_[1]) || evt === 8 && k_min_w < parseFloat(k_main_levy_[1]) ) {


          areas = Math.ceil(v_kaava1);
          lahinmodmitta = (v_w/25);
          modcount = Math.floor((lahinmodmitta)/areas);
          l_i = parseFloat(modcount*25);

          v_t_kaava1 = Math.floor(v_w/l_i);


          for (var g = 1; g < v_t_kaava1; g++) {
            if(g !== 0) {
              var x = document.createElement("div");
              tas_cord = (g*l_i)/5 + "px";
              x.style.bottom = tas_cord;
              x.classList.add("tyostot__tyosto");
              x.classList.add("tyostot__tyosto_vaaka");
             
              x.style.width = "100%";
              x.style.height = parseFloat(8/5)+"px";
              x.style.position = "absolute";
              levy_tyostot_y.appendChild(x);


              var x_cord = document.createElement("input");
              x_cord.type = "text";
              cord = (g*l_i) - ((g-1)*l_i);
              x_cord.value = cord.toFixed(0);
              x_cord.dataset.from = x_cord.value;
              x_cord.style.top = "15px";
              x.prepend(x_cord);
            }
          }
        }

        
        t_last_top(levy,levy_tyostot_y,evt);
        t_last_bottom(levy,levy_tyostot_y,evt);
      }


      // levy.setAttribute("data-levy_x",(parseFloat(levy_c_x-levy_c_y)));
      // levy.setAttribute("data-levy_y",(parseFloat(levy_c_y)));

      l_meta = {};
      
    }
  function t_last_top(levy,tyosto,evt) {

   

    var interval = parseFloat(document.querySelector("#k_yrlevy").value);
    var x = document.createElement("div");
      x.classList.add("tyostot__tyosto");
      x.classList.add("tyostot__tyosto_vaaka");
      x.classList.add("viim__tyosto_vaaka");
      x.classList.add("no_siirto");
      x.style.width = "100%";
      x.style.height = parseFloat(8/5)+"px";
      x.style.position = "absolute";
      x.style.bottom = (parseFloat(levy_meta[1] - interval))/5 + "px";
      tyosto.prepend(x);
      

      


      if(evt === 5 || evt === 7 || evt === 8) {
        var x_cord = document.createElement("input");
        x_cord.type = "text";
        v_u = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
        v_b = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
        v_w = (levy_meta[1]-(v_u+v_b));
        var i_ = 0;
        let gg = levy.querySelectorAll(".levy_tyostot_y > div > input");

        for (var g = 0; g < gg.length; g++) {
          i_ += parseFloat(gg[g].value);
        }
        // x_cord.style.bottom = (v_w - i_)/10+"px";
        

        x_cord.value = (v_w - i_);
        x_cord.dataset.from = x_cord.value;
        x.prepend(x_cord);

        var x_last_cord = document.createElement("input");
        x_last_cord.type = "text";
        x_last_cord.classList.add("x_cord");
        x_last_cord.classList.add("y_cord_border");
        x_last_cord_cord = parseFloat(levy_meta[1]) - parseFloat(x.style.bottom)*5;
        x_last_cord.value = v_u;
        x.prepend(x_last_cord);
      }
      else {
        var x_cord = document.createElement("input");
        x_cord.type = "text";
        x_cord.classList.add("x_cord");
        x_cord.classList.add("y_cord_border");
        cord = parseFloat(x.style.bottom)*5;
        x_cord.value = v_u;
        x_cord.dataset.from = x_cord.value;
        x.prepend(x_cord);
      }
  }
  function t_last_right(levy,tyosto,evt) {

    var interval = parseFloat(document.querySelector("#k_orlevy").value);
    p_left = parseFloat(document.querySelector("#settings__levy_vr_arvo").value);
    p_right = parseFloat(document.querySelector("#settings__levy_or_arvo").value);
    p_h = (levy_meta[0]-(p_left+p_right));

    var x = document.createElement("div");
      x.classList.add("tyostot__tyosto");
      x.classList.add("tyostot__tyosto_pysty");
      x.classList.add("viim__tyosto_pysty");
      x.classList.add("no_siirto");
      x.style.height = "100%";
      x.style.width = parseFloat(8/5)+"px";
      x.style.position = "absolute";
      x.style.left = ((parseFloat(8/5)*(-5)) + parseFloat(levy_meta[0] - interval))/5 + "px";
      tyosto.prepend(x);

      
      if(evt === 2 || evt === 3 || evt === 4) {
        var x_cord = document.createElement("input");
        x_cord.type = "text";

        var i_ = 0;
        let jj = levy.querySelectorAll(".levy_tyostot_x > div > input");
        for (var j = 0; j < jj.length; j++) {
          i_ += parseFloat(jj[j].value);
        }

        cord = (parseFloat(p_h - i_));

        x_cord.value = cord.toFixed(0);
        x_cord.dataset.from = x_cord.value;

        if(evt === 1) {
          // x_cord.style.right = cord/10 + "px";
        }
        else if(evt === 2 || evt === 3 || evt === 4) {
          // x_cord.style.left = cord/10 + "px";
          x_cord.style.float = "right";
        }
        x.prepend(x_cord);


        var x_last_cord = document.createElement("input");
        x_last_cord.type = "text";
        x_last_cord.classList.add("x_cord");
        x_last_cord.classList.add("x_cord_border");
        x_last_cord_cord = parseFloat(levy_meta[0]) - parseFloat(x.style.left)*5;
        x_last_cord.value = p_right;
        x.prepend(x_last_cord);


      }
       else {
        var x_cord = document.createElement("input");
        x_cord.type = "text";
        x_cord.classList.add("x_cord");
        x_cord.classList.add("x_cord_border");
        cord = parseFloat(x.style.left)*5;
        x_cord.value = p_right;
        x_cord.dataset.from = x_cord.value;
        x.prepend(x_cord);
      }

      
  }
  function t_last_left(levy,tyosto,evt) {
    var interval = parseFloat(document.querySelector("#k_vrlevy").value);
    var x = document.createElement("div");
      x.classList.add("tyostot__tyosto");
      x.classList.add("tyostot__tyosto_pysty");
      x.classList.add("alku__tyosto_pysty");
      x.classList.add("no_siirto");
      x.style.height = "100%";
      x.style.width = parseFloat(8/5)+"px";
      x.style.position = "absolute";
      x.style.left = parseFloat(interval)/5 + "px";
      tyosto.prepend(x);

       


      if(evt === 1) {
        var x_cord = document.createElement("input");
        x_cord.type = "text";

        var i_ = 0;
        let jj = levy.querySelectorAll(".levy_tyostot_x > div > input");
        for (var j = 0; j < jj.length; j++) {
          i_ += parseFloat(jj[j].value);
        }

        cord = (parseFloat(p_h - i_));

        x_cord.value = cord.toFixed(2);
        x_cord.dataset.from = x_cord.value;
        if(evt === 1) {
           // x_cord.style.right = cord/10 + "px";
        }

        x.prepend(x_cord);

        var x_last_cord = document.createElement("input");
        x_last_cord.type = "text";
        x_last_cord.classList.add("x_cord");
        x_last_cord.classList.add("x_cord_border");
        x_last_cord_cord = parseFloat(levy_meta[0]) - parseFloat(x.style.left)*5;
        x_last_cord.value = p_left;
        x.prepend(x_last_cord);
      }

      else {
        var x_cord = document.createElement("input");
        x_cord.type = "text";
        x_cord.classList.add("x_cord");
        x_cord.classList.add("x_cord_border");
        cord = parseFloat(x.style.left)*5;
        x_cord.value = p_left;
        x_cord.dataset.from = x_cord.value;
        x.prepend(x_cord);
      }


  }
  function t_last_bottom(levy,tyosto,evt) {
    
    var interval = parseFloat(document.querySelector("#k_arlevy").value);
    var x = document.createElement("div");
      x.classList.add("tyostot__tyosto");
      x.classList.add("tyostot__tyosto_vaaka");
      x.classList.add("alku__tyosto_vaaka");
      x.classList.add("no_siirto");
      x.style.width = "100%";
      x.style.height = parseFloat(8/5)+"px";
      x.style.position = "absolute";
      x.style.bottom = ( parseFloat(interval+4)/5 + "px");
      tyosto.prepend(x);

      if(evt === 6) {
        var x_cord = document.createElement("input");
        x_cord.type = "text";
        var i_ = 0;
        let gg = levy.querySelectorAll(".levy_tyostot_y > div > input");

        for (var g = 0; g < gg.length; g++) {
          i_ += parseFloat(gg[g].value);
        }

        v_u = parseFloat(document.querySelector("#settings__levy_yr_arvo").value);
        v_b = parseFloat(document.querySelector("#settings__levy_ar_arvo").value);
        v_w = (levy_meta[1]-(v_u+v_b));
        // x_cord.style.top = "-15px";
        x_cord.type = "text";
        x_cord.value = (v_w - i_);
        x_cord.dataset.from = x_cord.value;
        x.prepend(x_cord);

        var x_last_cord = document.createElement("input");
        x_last_cord.type = "text";
        x_last_cord.classList.add("x_cord");
        x_last_cord.classList.add("y_cord_border");
        x_last_cord_cord = v_b;
        x_last_cord.value = x_last_cord_cord.toFixed(2);
        x.prepend(x_last_cord);
        
      }

      else {
        var x_cord = document.createElement("input");
        x_cord.type = "text";
        x_cord.classList.add("x_cord");
        x_cord.classList.add("y_cord_border");
        cord = parseFloat(x.style.bottom)*5;
        x_cord.value = v_b;
        x_cord.dataset.from = x_cord.value;
        x.prepend(x_cord);
      }

      // var x_cord = document.createElement("input");
      // x_cord.value = (interval);
      // x.prepend(x_cord);

  }

  function kiinnikkeet__siirto() {
    let levytys = document.querySelectorAll('.levyt .levy');
    levytys_array = [];

    for (var i = 0; i < levytys.length; i++) {
      titteli = levytys[i].title.split(",");

      title = titteli[0] +","+ titteli[1];
      levytys_array.push(""+title+"");
    }

    levy_siirto = levytys_array.filter((element, index) => {
        return levytys_array.indexOf(element) === index;
    });



    levy_siirto.sort(function(a, b) {
      return b.replace(",","") - a.replace(",","");
    });

    if(document.querySelector(".levy_type")) {
      l_t = document.querySelectorAll(".levy_type");

      for (var i = l_t.length - 1; i >= 0; i--) {
        l_t[i].remove();
      }
    }


    levytypes_target = document.querySelector(".levy_types");
    br = 0
    for (var i = levy_siirto.length - 1; i >= 0; i--) {
      n_m = "'" + levy_siirto[i].replace(",","x") + "'";
      l = document.createElement("div");
      l.classList.add("levy_type");
      l.setAttribute("onclick","change__klevy("+(n_m)+");");
      l.innerHTML= String(n_m);
      levytypes_target.prepend(l);



      
      var addclass = 'selected';
      var $cols = $('.levy_type').click(function(e) {
          $cols.removeClass(addclass);
          $(this).addClass(addclass);
      });
    }

    document.querySelectorAll(".levy_type")[0].click();

  }

  function change__klevy(info) {
    
    info_cord = String(info).replace("'","").split("x");

    levy = document.querySelector("#drawscreen_section_tyostot .visible");

    var verticalinputs_up = document.querySelector(".verticalinputs-up");
    var verticalinputs_down = document.querySelector(".verticalinputs-down");

    levy.style.width = (info_cord[0]/5)+"px";
    levy.style.height = (info_cord[1]/5)+"px";
    levy.classList.add("levy");

    levy.style.width = (info_cord[0]/5)+"px";

    verticalinputs_up.style.left = (info_cord[0]/5) + "px";
    verticalinputs_down.style.left = (info_cord[0]/5) + "px";
    verticalinputs_down.style.top = (info_cord[1]/5) + "px";

    levy.title = info_cord[0] + "," + info_cord[1];

    document.querySelector("#k_settings__levy_levysizew").value = parseFloat(info_cord[0]);
    document.querySelector("#k_settings__levy_levysizeh").value = parseFloat(info_cord[1]); 
   
    aloita_tyosto_kiinnikkeet();
  } 

</script>
<!-- 2.95 Esikatselu -->
<script>
  // levyt = document.querySelectorAll(".levy");
  // for (var i = levyt.length - 1; i >= 0; i--) {
  //   fixkiinnikkeet(levyt[i]);
  // }

  function removeDuplicates(arr) {
    return arr.filter((item, index) => arr.indexOf(item) === index);
  }

  function change__tyostocord(input) {
    const oldvalue = input.dataset.from;
    let c_kiinnikkeet = canvas.querySelectorAll(".tyostot__tyosto");

    k_x = [];
    k_y = [];

    tochange_array_x = [];
    tochange_array_y = [];

    for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {

      k_x.push(c_kiinnikkeet[i].getBoundingClientRect().left);
      k_y.push(c_kiinnikkeet[i].getBoundingClientRect().bottom);

    }

    if((input.parentElement.parentElement).classList.contains("levy")) {
      thislevy = input.parentElement; 
    }
    else if((input.parentElement.parentElement.parentElement).classList.contains("levy")) {
      thislevy = input.parentElement.parentElement;
    }

    if((input.parentElement).classList.contains("tyostot__tyosto")) {
      thistyosto = input.parentElement; 
    }
    else if((input.parentElement.parentElement).classList.contains("tyostot__tyosto")) {
      thistyosto = input.parentElement.parentElement;
    }

    k_x_array = removeDuplicates(k_x);
    k_y_array = removeDuplicates(k_y);

   

    thisinput_l = input.parentElement.getBoundingClientRect().left;
    thisinput_b = input.parentElement.getBoundingClientRect().bottom;
    
    tochange_array_x.push(thisinput_l);
    tochange_array_y.push(thisinput_b);
    
    for (var i = k_x_array.length - 1; i >= 0; i--) {
      if(thisinput_l === k_x_array[i]) {
        tochange_array_x.push(k_x_array[i]);
      }
    }

     for (var i = k_y_array.length - 1; i >= 0; i--) {
      if(thisinput_b === k_y_array[i]) {
        tochange_array_y.push(k_y_array[i]);
      }
    }

    x = removeDuplicates(tochange_array_x);
    y = removeDuplicates(tochange_array_y);

    if(thistyosto.classList.contains("tyostot__tyosto_pysty")) {
      old_cord = parseFloat(thistyosto.style.left);
    } 
    else if(thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
      old_cord = parseFloat(thistyosto.style.bottom);
    }

    newvalue = parseFloat(input.value);

    erotus=oldvalue-newvalue;

    new_cord = (parseFloat(old_cord)-(parseFloat(erotus)/5)) + "px";

    if(thistyosto.classList.contains("tyostot__tyosto_pysty")) {
      thistyosto.style.left = new_cord;

      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        if(thisinput_l === c_kiinnikkeet[i].getBoundingClientRect().left) {
          c_kiinnikkeet[i].style.left = new_cord;
          c_kiinnikkeet[i].querySelector("input").value = newvalue;
        }
      }
    } 
    else if(thistyosto.classList.contains("tyostot__tyosto_vaaka")) {
      thistyosto.style.bottom = new_cord;

      for (var i = c_kiinnikkeet.length - 1; i >= 0; i--) {
        if(thisinput_b === c_kiinnikkeet[i].getBoundingClientRect().bottom) {
          c_kiinnikkeet[i].style.bottom = new_cord;
          c_kiinnikkeet[i].querySelector("input").value = newvalue;
        }
      }
    }


    




    console.log("XXX: " + x);
    console.log("YYY: " + y);

  }

  function tallenna_kiinnikepaikat(levy) {
    kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");
    l_meta = levy.querySelector(".l_meta");
    l_meta.value="";
    l_meta_x = [];
    l_meta_y = [];

    kiinnike_inputy = [];
    kiinnike_inputx = [];

    for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
      if(kiinnikkeet[i]) {
        
        if(kiinnikkeet[i].classList.contains("tyostot__tyosto_vaaka")) {
          kiinnike_inputy.push(kiinnikkeet[i]);          
        }

        if(kiinnikkeet[i].classList.contains("tyostot__tyosto_pysty")) {
          kiinnike_inputx.push(kiinnikkeet[i]);          
        }

      }
    }



    for (var y = kiinnike_inputy.length - 1; y >= 0; y--) {
      k_input = kiinnike_inputy[y].querySelectorAll("input");
      for (var k = k_input.length - 1; k >= 0; k--) {
        l_meta_y.push(k_input[k].value);
      }
    }

    for (var x = kiinnike_inputx.length - 1; x >= 0; x--) {
      k_input = kiinnike_inputx[x].querySelectorAll("input");
      for (var k = k_input.length - 1; k >= 0; k--) {
        l_meta_x.push(k_input[k].value);
      }
    }


    l_meta.value = ("{"+l_meta_x+"},"+"{"+l_meta_y+"}");
    console.log("l_meta_x: " + l_meta_x);
    console.log("l_meta_y: " + l_meta_y);
  }
  

  function fixkiinnikkeet(levy) {
    title = levy.getAttribute("title");
    k_min_h = parseFloat(document.querySelector("#p_two").value);
    k_min_w = parseFloat(document.querySelector("#v_two").value);

    let kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");

    t_ = title.split(",");


    if(parseFloat(t_[0]) < k_min_h) {
      // console.log("IJJJ: " + parseFloat(t_[0]) + " DD " + k_min_h);

      for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
        if(kiinnikkeet[i].classList.contains("no_siirto") !== true && kiinnikkeet[i].classList.contains("tyostot__tyosto_pysty") === true) {
          kiinnikkeet[i].remove();
          console.log("OK");
        }
        else {
          // console.log("OK");
          // kiinnikkeet[i].remove();
        }
      }
    }
    if(parseFloat(t_[1]) < k_min_w) {
      // console.log("IJJJ: " + parseFloat(t_[1]) + " DD " + k_min_w);
      for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
        if(kiinnikkeet[i].classList.contains("no_siirto") !== true && kiinnikkeet[i].classList.contains("tyostot__tyosto_vaaka") === true ) {
          kiinnikkeet[i].remove();
          console.log("OK");
        }
        else {
          // console.log("OK");
          // kiinnikkeet[i].remove();
        }
      }
    }

    kiinnikkeet = levy.querySelectorAll(".tyostot__tyosto");

    for (var i = kiinnikkeet.length - 1; i >= 0; i--) {
      if(kiinnikkeet[i].parentElement) {

      }
      if(kiinnikkeet[i].parentElement.querySelector(".tyostot__tyosto_vaaka")) {
         kiinnike_input_y = kiinnikkeet[i].parentElement.querySelectorAll(".tyostot__tyosto_vaaka");
         // console.log("Y " + kiinnike_input_y.innerHTML);
         for (var y = kiinnike_input_y.length - 1; y >= 0; y--) {
            k_input = kiinnike_input_y[y].querySelectorAll("input");

            for (var k = k_input.length - 1; k >= 0; k--) {
              //console.log("k_input: " + k_input[k].value);
               if(parseFloat(k_input[k].value)<0) {
                oldvalue = k_input[k].value;
                newvalue = parseFloat(document.querySelector("#p_target").value)+parseFloat(oldvalue);
                k_input[k].value = newvalue;
               }
            }
            // console.log("k_input: " + k_input);
            // if(parseFloat(k_input)<0) {
            //   alert(k_input);
            //   // parseFloat(document.querySelector("#p_target"))-parseFloat(k_input);
            //   // k_input.remove();
            // }
          }
      }

      if(kiinnikkeet[i].parentElement.querySelector(".tyostot__tyosto_pysty")) {
        kiinnike_input_x = kiinnikkeet[i].parentElement.querySelectorAll(".tyostot__tyosto_pysty");

        for (var x = kiinnike_input_x.length - 1; x >= 0; x--) {
            k_input = kiinnike_input_x[x].querySelectorAll("input");
            for (var k = k_input.length - 1; k >= 0; k--) {
              //console.log("k_input: " + k_input[k].value);
               if(parseFloat(k_input[k].value)<0) {
                oldvalue = k_input[k].value;
                newvalue = parseFloat(document.querySelector("#v_target").value)+parseFloat(oldvalue);
                k_input[k].value = newvalue;
               }
            }
          }

      }
    }
  }
</script>

<!-- 2.6 - Rangoitus -->
<script>
  function rangat__navigation() {
    var sauma__vertical = document.getElementsByClassName("sauma__vertical");
    var sauma__horizontal = document.getElementsByClassName("sauma__horizontal");

      for (var i = 0; i < sauma__horizontal.length; i++) {
        sauma__horizontal[i].classList.add("ranka__false");
      }
      for (var i = 0; i < sauma__vertical.length; i++) {
        sauma__vertical[i].classList.add("ranka__false");
      }

    if (document.getElementById("rangoitus__lvl_one").checked) {
      for (var i = 0; i < sauma__vertical.length; i++) {
        sauma__vertical[i].classList.remove("ranka__false");
      }
    }

    if (document.getElementById("rangoitus__lvl_two").checked) {
      for (var i = 0; i < sauma__horizontal.length; i++) {
        sauma__horizontal[i].classList.remove("ranka__false");
      }
    }
  }


</script>

<!-- 2.7 - Listoitus -->
<script>
  
</script>

<!-- 2.8 Reklamaatiot -->
<script>
  function create__reclamation() {
    var drawscreen_section_eight = document.getElementById("drawscreen_section_eight");
    const input_step = document.querySelector('#step_drawscreen').value;
    if (input_step == "drawscreen_section_eight") {
        var reclamation_settings = document.querySelector("#box-wrapper > main").cloneNode(true);
        var reclamation_origo = document.querySelector("#box-wrapper > div.drawarea__origo").cloneNode(true);
        
        document.querySelector("#setting__canvas_reclamation").innerHTML = "";
        document.querySelector("#setting__canvas_reclamation").append(reclamation_settings);
        document.querySelector("#setting__canvas_reclamation").prepend(reclamation_origo);

        var newDiv = document.createElement("span");
        newDiv.classList.add("settings__reclamation");
        newDiv.setAttribute("id","settings__reclamation");  
        newDiv.innerHTML="";

        document.querySelector("#setting__canvas_reclamation > main").prepend(newDiv);
        
        newDiv.addEventListener('mousedown', mouseDown, false);
        window.addEventListener('mouseup', mouseUp, false);

        function mouseUp(){
            window.removeEventListener('mousemove', divMove, true);
        }

        function mouseDown(e){
          window.addEventListener('mousemove', divMove, true);
        }

        function divMove(e){
          newDiv.style.position = 'absolute';

          var mousePressX = e.clientX;
          var mousePressY = e.clientY;
          var wDiff = e.clientX - mousePressX;
          var hDiff = e.clientY - mousePressY;

          newDiv.style.top = ( e.clientY - (e.clientY / 2) ) + 'px';
          newDiv.style.left = ( e.clientX  - (e.clientX / 1.5) ) + 'px';
        }

        newDiv.innerHTML="";
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
    newDiv.style.bottom = ( parseFloat(document.querySelector("#r-cord_low").value) / 10) + 'px';
    newDiv.style.left = ( parseFloat(document.querySelector("#r-cord_left").value) / 10) + 'px';
      
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

      newDiv.style.top = ( e.clientY - (e.clientY / 2) ) + 'px';
      newDiv.style.left = ( e.clientX  - (e.clientX / 1.5) ) + 'px';
    }

    newDiv.classList.add("reclamation");


    if(document.querySelector("#reclamation_comment").value != '') {
      newDiv__hidden_attentioncommmets.value += document.querySelector("#reclamation_comment").value + '<br> Tältä: ' + document.querySelector("#reclamation_comment_from").value + '<br> Tälle: ' + document.querySelector("#reclamation_comment_to").value;

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
    el_ = elid.replace('--Tila ', '').toLowerCase()
    document.querySelector(".project__building_room."+el_).classList.add("prob");

    if (document.querySelector('#comment__importance').checked === true) {
      document.querySelector(".project__building_room."+el_).classList.add("critical");
    }
    
  }
  
</script>

<!-- Ultimate rule: all radiobuttons and checkboxes get focus on checked -->
<script>
  var radios = document.querySelectorAll('input[type="radio"]');
      radios.forEach(function (r) {
        r.addEventListener(
          "click",
          function (e) {
            r.focus();
          },
          { useCapture: true }
        );
  });

  var checkedboxes = document.querySelectorAll('input[type="checkbox"]');
    checkedboxes.forEach(function (ch) {
    ch.addEventListener(
      "click",
      function (e) {
        ch.focus();
      },
      { useCapture: true }
    );
  });
</script>
</body>
</html>

<script>
  
  function gridify() {
      setTimeout(() => {
         let item = document.querySelectorAll(".grid-item");
         let row = document.querySelectorAll(".grid-row");
         var drawarea = document.querySelector("#box-wrapper");

        item.forEach(itemF);

         function itemF(item) {
           var h = document.querySelector(".canvas").clientHeight;
           var w = document.querySelector(".canvas").clientWidth;
           var w_ = document.querySelector("#drawarea_w").value;
           var h_ = document.querySelector("#drawarea_h").value;

           widthP = (500/w_);

           item.style.width = w * widthP + 'px';
           item.style.height = w * widthP + 'px';

           // item.style.width = "100%";

        }

        row.forEach(itemF2);
          

          function itemF2(r) {
             var h = document.querySelector(".canvas").clientHeight;
             var w = document.querySelector(".canvas").clientWidth;
             var w_ = document.querySelector("#drawarea_w").value;
             var h_ = document.querySelector("#drawarea_h").value;

             widthP = (500/w_);

             r.style.width = w * widthP + 'px';

             
          }
        }, 1000);
     }

   
  window.onload = (event) => {
    gridify();
  };

   $(document).ready(function() {
        $(window).keydown(function(event){
          if(event.keyCode == 13) {
            event.preventDefault();
            return false;
          }
        });
      });
  

   
   if(document.querySelector("#drawscreen_section_tyostot .levy")) {
        document.querySelector("#drawscreen_section_tyostot .visible").classList.removeClass("levy");
      }

</script>
<!-- <script>
 
  $("#drawscreen_section_five").show();
  // $('.levy__section').css('display', 'flex');
  $('.drawscreen_section_five').show();
  $("#drawscreen_section_five").slideDown(200);
  $('#step_drawscreen').val('drawscreen_section_five');
  
  $("#project_start").hide();
  refresh__drawcontrols();updatearea();

  document.querySelector("#drawarea_h").value = "2425";
  document.querySelector("#drawarea_w").value = "3400";

  setTimeout(changesize(),2000);
</script> -->
<!-- 
<script type="text/javascript">
function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
     $(document).on("keydown", disableF5);
}
</script> -->