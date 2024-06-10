function change__lapivienti_sizecord(e) {
    const height = document.querySelector('#box_h').value;
    const width = document.querySelector('#box_w').value;
    document.querySelector("#lapiviennit__sade_muucord").value = e.value;
  }

function update_lv_ondrawarea() {
    // Added 150524
    if(canvas.querySelector(".lv")) {
      lvs = canvas.querySelectorAll(".lv");
      lv_texts = document.querySelectorAll(".drawarea__controls_elementsthree span");
  
      lv_texts.forEach(lv_t => {
          lv_t.style.display = "none";
      });
      lvs.forEach(lv => {
          lv_id = lv.getAttribute("id");
  
          lv_texts.forEach(lv_t => {
              if(lv_id === lv_t.getAttribute("name")) {
                  lv_t.style.display = "block";
              }
          });
      });
    }
    else {
        document.querySelector(".drawarea__controls_elementsthree").innerHTML = "";
    }
  }