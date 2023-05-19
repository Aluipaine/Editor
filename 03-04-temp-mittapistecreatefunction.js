function mitta__create_mitta(mode,type,name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room) {
  const newDiv = document.createElement("span");
  const newDiv__comment = document.createElement("span");
  const newDiv__hidden_attention = document.createElement("input");
  const newDiv__hidden_attentioncommmets = document.createElement("input");

  const comment__container = document.createElement("div");
  const comment__text = document.createElement("p");
  const comment__from = document.createElement("strong");
  const comment__to = document.createElement("strong");

  comment__container.classList.add("comment__container");
  comment__from.classList.add("comment__from");
  comment__to.classList.add("comment__to");
  newDiv.appendChild(comment__container);
  comment__container.appendChild(comment__text);
  comment__container.appendChild(comment__from);
  comment__container.appendChild(comment__to);

  newDiv.appendChild(newDiv__hidden_attention);
  newDiv.appendChild(newDiv__hidden_attentioncommmets);
  const newDiv__comment_settings = document.createElement("i");
  const newDiv__comment_del = document.createElement("i");

  newDiv__comment_settings.classList.add("m_btn");
  newDiv__comment_settings.classList.add("newDiv__comment_settings");
  newDiv__comment_del.classList.add("newDiv__comment_del");
  newDiv__comment.appendChild(newDiv__comment_settings);
  newDiv__comment.appendChild(newDiv__comment_del); 

  newDiv__comment_settings.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
  newDiv__comment_del.innerHTML = "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>";


  document.querySelector("#box-wrapper > main").prepend(newDiv);

  newDiv.innerHTML = "";   

  if(mode) {
    newDiv__comment.innerHTML = name + "#"+mode_count;
    newDiv.style.bottom = parseFloat(mode_ycord) + "px";
    newDiv.style.left = parseFloat(mode_xcord) + "px";

    let id = mode_id;

    newDiv.setAttribute("id", id);
    newDiv__comment_settings.setAttribute("name", id);
    newDiv__comment_del.setAttribute("name", id);
    newDiv__comment.setAttribute("name", id);

    
    if(type == "mp") {
      mittapiste_count+=1; 
      

      newDiv__hidden_attention.type = "hidden";
      newDiv__hidden_attention.name = "attentions";
      newDiv__hidden_attentioncommmets.type = "hidden";
      newDiv__hidden_attentioncommmets.name = "commmets";

      document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__comment);
      document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attention);
      document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attentioncommmets);

      // COMMENT COMING LATER
      // if (document.querySelector("#mittapiste_comment").value != '') {
      //   newDiv__hidden_attentioncommmets.value += document.querySelector("#mittapiste_comment").value + '<br> Tältä: ' + document.querySelector("#mittapiste_comment_from").value + '<br> Tälle: ' + document.querySelector("#mittapiste_comment_to").value;
      //   comment__text.innerHTML = document.querySelector("#mittapiste_comment").value;
      //   comment__from.innerHTML = document.querySelector("#mittapiste_comment_from").value;
      //   comment__to.innerHTML = document.querySelector("#mittapiste_comment_to").value;
      // }

      newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");
      newDiv.classList.add("mp");

      
      newDiv.dataset.no = mode_count;

      things_array = ['"'+newDiv__comment.innerText+'|'+''+parseFloat(newDiv.style.bottom)*5+'|'+''+parseFloat(newDiv.style.left)*5+'|'+newDiv.dataset.no+'|'+id+''+mode_room+'__"'];
      t_array = JSON.parse(things_array);
      mp_prevdata = t_array;
      submitprogress("","adding",id,"mp",t_array);
      mp_previous_cord_ = "0|"+parseFloat(newDiv.style.bottom)*5+"|"+parseFloat(newDiv.style.left)*5;

      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');submitprogress('','cancel','"+mode_id+"','mp','"+t_array+"');mittapiste_count-=1;");
      newDiv__comment_settings.setAttribute("onclick", " document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord(); submitprogress('','cancel','"+id+"','mp','"+t_array+"');mittapiste_count-=1;mp_previous_cord = '"+mp_previous_cord_+"';");



    }
    else if(type == "au") {
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
      newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");
      
      document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__comment);
      document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__hidden_attention);
      document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__hidden_attentioncommmets);

      newDiv.style.width = parseFloat(mode_wcord) + "px";
        // parseFloat(parseFloat(document.querySelector("#hole__height").value)/5) + "px";
      newDiv.style.height = parseFloat(mode_hcord) + "px";

      // if (document.querySelector("#aukko_comment").value != '') {
      //     newDiv__hidden_attentioncommmets.value += document.querySelector("#aukko_comment").value + '<br> Tältä: ' + document.querySelector("#aukko_comment_from").value + '<br> Tälle: ' + document.querySelector("#aukko_comment_to").value;
        
      //     comment__text.innerHTML = document.querySelector("#aukko_comment").value;
      //     comment__from.innerHTML = document.querySelector("#aukko_comment_from").value;
      //     comment__to.innerHTML = document.querySelector("#aukko_comment_to").value;
      //   }
      newDiv.classList.add("aukko");
      newDiv__height.innerHTML = parseFloat(newDiv.style.height)*5;
      newDiv__width.innerHTML = parseFloat(newDiv.style.width)*5;

      au_y = (parseFloat(newDiv.style.height)*5)+(parseFloat(newDiv.style.bottom)*5);
      au_x = (parseFloat(newDiv.style.width)*5)+(parseFloat(newDiv.style.left)*5);

      newDiv__y.innerHTML = ("Y: " + au_y);
      newDiv__x.innerHTML = ("X: " + au_x);

      newDiv.appendChild(newDiv__height);
      newDiv.appendChild(newDiv__width);

      newDiv.appendChild(newDiv__y);
      newDiv.appendChild(newDiv__x);
      // Add styles to new hole

      newDiv.dataset.no = "";


      newDiv__comment.innerHTML = name + "# <b class='aukko_count'>"+mode_count+"</b>";  

      newDiv.setAttribute("id", id);
      newDiv__comment_settings.setAttribute("name", id);
      newDiv__comment_del.setAttribute("name", id);
      newDiv__comment.setAttribute("name", id);
      newDiv_title = (newDiv__height.innerHTML + "," + newDiv__width.innerHTML + "," + au_y + "," + au_x);
      newDiv.setAttribute("title", newDiv_title);
      things_array = ['"'+newDiv__comment.innerText+'|'+''+parseFloat(newDiv.style.bottom)*5+'|'+''+parseFloat(newDiv.style.left)*5+'|'+newDiv.dataset.no+'|'+id+'|'+(parseFloat(newDiv__height.innerHTML))+'|'+''+parseFloat(newDiv__width.innerHTML)+'|'+mode_room+'__"'];

      console.log("Things_arraythings_array: " + things_array);

      t_array = JSON.parse(things_array);
      console.log("Things_arrayt_array: " + t_array);

      au_prevdata = t_array;

      submitprogress("","adding",id,"aukot",t_array);

      if(au_previous_cord !== null) {
         newDiv.dataset.prevcord =  au_previous_cord;
         au_previous_cord = null;
      }
      au_previous_cord = "0|"+parseFloat(newDiv.style.bottom)*5+"|"+parseFloat(newDiv.style.left)*5+"|"+(parseFloat(newDiv.style.width)+1)*5 + "|" + parseFloat(newDiv.style.height)*5;


      newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');submitprogress('','cancel','"+id+"','aukot','"+t_array+"');aukko_del(document.querySelector('#'+obj), -1);"); //aukko_del(document.querySelector('#'+obj), -1);
      newDiv__comment_settings.setAttribute("onclick", "obj = this.getAttribute('name');aukko_del(document.querySelector('#'+obj), -1);document.querySelector('#drawscreen_section_two > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_two > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();this.parentElement.remove();submitprogress('','cancel','"+id+"','aukot','"+t_array+"');au_previous_cord = '"+au_previous_cord+"';");


    }
    else if(type == "lv") {
      return;
    }
   }
   else {
     input_step = document.querySelector('#step_drawscreen').value;


      if (input_step == "drawscreen_section_one") {

        mittapiste_count+=1; 
        newDiv__comment.innerHTML = document.querySelector("#mittapiste__name").value + "#"+mittapiste_count;

        newDiv__hidden_attention.type = "hidden";
        newDiv__hidden_attention.name = "attentions";
        newDiv__hidden_attentioncommmets.type = "hidden";
        newDiv__hidden_attentioncommmets.name = "commmets";


        document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__comment);
        document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attention);
        document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__hidden_attentioncommmets);

        newDiv.style.bottom = parseFloat(document.querySelector("#cord_up").value) / 5 + "px";
        newDiv.style.left = parseFloat(document.querySelector("#cord_left").value) / 5 + "px";

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
          comment__text.innerHTML = document.querySelector("#mittapiste_comment").value;
          comment__from.innerHTML = document.querySelector("#mittapiste_comment_from").value;
          comment__to.innerHTML = document.querySelector("#mittapiste_comment_to").value;
        }

        newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");
        newDiv.classList.add("mp");

        let id = "mp" + Math.random().toString(16).slice(2);

        newDiv.setAttribute("id", id);
        newDiv.dataset.no = mittapiste_count;
        
        newDiv__comment_settings.setAttribute("name", id);
        newDiv__comment_del.setAttribute("name", id);
        newDiv__comment.setAttribute("name", id);

        

        // const inH = document.createElement('input');
        // const inW = document.createElement('input');

        // inH.setAttribute('type', 'num');
        // inW.setAttribute('type', 'num');
        // touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );

        things_array = ['"'+newDiv__comment.innerText+'|'+''+parseFloat(newDiv.style.bottom)*5+'|'+''+parseFloat(newDiv.style.left)*5+'|'+newDiv.dataset.no+'|'+id+''+current_room+'__"'];
        t_array = JSON.parse(things_array);
        mp_prevdata = t_array;
        submitprogress("","adding",id,"mp",t_array);
        mp_previous_cord_ = "0|"+parseFloat(newDiv.style.bottom)*5+"|"+parseFloat(newDiv.style.left)*5;


        newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');submitprogress('','cancel','"+id+"','mp','"+t_array+"');mittapiste_count-=1;");
        newDiv__comment_settings.setAttribute("onclick", " document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord(); submitprogress('','cancel','"+id+"','mp','"+t_array+"');mittapiste_count-=1;mp_previous_cord = '"+mp_previous_cord_+"';");

        if(mp_previous_cord !== null) {
          newDiv.dataset.prevcord =  mp_previous_cord;
          mp_previous_cord = null;
        }
      }

      if (input_step == "drawscreen_section_two")  {
        
        changedimensions_aukko();
       

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
        newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");
        
        document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__comment);
        document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__hidden_attention);
        document.querySelector(".drawarea__controls_elementstwo").prepend(newDiv__hidden_attentioncommmets);


        newDiv.style.width = parseFloat(parseFloat(document.querySelector("#hole__width").value)/5)-1 + "px";
        // parseFloat(parseFloat(document.querySelector("#hole__height").value)/5) + "px";
        newDiv.style.height = parseFloat(parseFloat(document.querySelector("#hole__height").value)/5) + "px";


        newDiv.style.bottom = (parseFloat(document.getElementById("aukotcord_low").value) /5 )  + "px";
        newDiv.style.left =  (1+parseFloat(document.getElementById("aukotcord_left").value)/5) + 'px';



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
        
          comment__text.innerHTML = document.querySelector("#aukko_comment").value;
          comment__from.innerHTML = document.querySelector("#aukko_comment_from").value;
          comment__to.innerHTML = document.querySelector("#aukko_comment_to").value;
        }

       
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

        newDiv.dataset.no = "";

        if (document.querySelector("#type__door").checked) {
          newDiv.classList.add("ovi");
          aukko_count(newDiv, 1);
        }
        if (document.querySelector("#type__window").checked) {
          newDiv.classList.add("ikkuna");
          aukko_count(newDiv, 1);
        }
        if (document.querySelector("#type__palkki").checked) {
          newDiv.classList.add("palkki");
          aukko_count(newDiv, 1);
        }
        if (document.querySelector("#type__collar").checked) {
          newDiv.classList.add("pilari");
          aukko_count(newDiv, 1);
        }
        if (document.querySelector("#type__ventilation").checked) {
          newDiv.classList.add("tuuletus");
          aukko_count(newDiv, 1);
        } 

        newDiv__comment.innerHTML = document.querySelector("#aukko__name").value + "# <b class='aukko_count'>"+newDiv.dataset.no+"</b>";  



        let id = "aukko" + Math.random().toString(16).slice(2);
        newDiv.setAttribute("id", id);
        newDiv__comment_settings.setAttribute("name", id);
        newDiv__comment_del.setAttribute("name", id);
        newDiv__comment.setAttribute("name", id);

        
        // const inH = document.createElement('input');
        // const inW = document.createElement('input');

        // inH.setAttribute('type', 'num');
        // inW.setAttribute('type', 'num');
        // touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );

        newDiv_title = (parseFloat(document.getElementById("hole__height").value)) + "," + (parseFloat(document.getElementById("hole__width").value)) + "," + parseFloat(document.getElementById("aukotcord_up").value) + "," + parseFloat(document.getElementById("aukotcord_left").value);
        newDiv.setAttribute("title", newDiv_title);


        things_array = ['"'+newDiv__comment.innerText+'|'+''+parseFloat(newDiv.style.bottom)*5+'|'+''+parseFloat(newDiv.style.left)*5+'|'+newDiv.dataset.no+'|'+id+'|'+(parseFloat(document.getElementById("hole__height").value))+'|'+''+parseFloat(document.getElementById("hole__width").value)+'|'+current_room+'__"'];

        console.log("Things_arraythings_array: " + things_array);

        t_array = JSON.parse(things_array);
        console.log("Things_arrayt_array: " + t_array);

        au_prevdata = t_array;

        submitprogress("","adding",id,"aukot",t_array);

        if(au_previous_cord !== null) {
           newDiv.dataset.prevcord =  au_previous_cord;

           au_previous_cord = null;
        }
        au_previous_cord = "0|"+parseFloat(newDiv.style.bottom)*5+"|"+parseFloat(newDiv.style.left)*5+"|"+(parseFloat(newDiv.style.width)+1)*5 + "|" + parseFloat(newDiv.style.height)*5;


        newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');submitprogress('','cancel','"+id+"','aukot','"+t_array+"');aukko_del(document.querySelector('#'+obj), -1);"); //aukko_del(document.querySelector('#'+obj), -1);
        newDiv__comment_settings.setAttribute("onclick", "obj = this.getAttribute('name');aukko_del(document.querySelector('#'+obj), -1);document.querySelector('#drawscreen_section_two > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_two > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();this.parentElement.remove();submitprogress('','cancel','"+id+"','aukot','"+t_array+"');au_previous_cord = '"+au_previous_cord+"';");
      }

      if (input_step == "drawscreen_section_three") {
        lapivienti_count+=1;
        
        newDiv__hidden_attention.type = "hidden";
        newDiv__hidden_attention.name = "attentions";
        newDiv__hidden_attentioncommmets.type = "hidden";
        newDiv__hidden_attentioncommmets.name = "commmets";        
        newDiv__comment.innerHTML = document.querySelector("#lv__name").value + "#"+lapivienti_count;
          
        document.querySelector(".drawarea__controls_elementsthree").prepend(newDiv__comment);
        document.querySelector(".drawarea__controls_elementsthree").prepend(newDiv__hidden_attention);
        document.querySelector(".drawarea__controls_elementsthree").prepend(newDiv__hidden_attentioncommmets);
        newDiv.setAttribute("onclick","this.classList.toggle('comment__visible')");

        newDiv.style.bottom = (parseFloat(document.getElementById("lvcord_low").value) / 5 ) + "px";

        newDiv.style.left = (parseFloat(document.getElementById("lvcord_left").value) / 5 ) + "px";

        newDiv.innerHTML = document.getElementById("lapiviennit__sade_muucord").value; 

        lv_sade = parseFloat(document.getElementById("lapiviennit__sade_muucord").value); 

        if (document.querySelector("#lv_comment").value != '') {
          newDiv__hidden_attentioncommmets.value += document.querySelector("#lv_comment").value + '<br> Tältä: ' + document.querySelector("#lv_comment_from").value + '<br> Tälle: ' + document.querySelector("#lv_comment_to").value;


          comment__text.innerHTML = document.querySelector("#lv_comment").value;
          comment__from.innerHTML = document.querySelector("#lv_comment_from").value;
          comment__to.innerHTML = document.querySelector("#lv_comment_to").value;
        }

        newDiv.classList.add("lapivienti"); 
        newDiv.classList.add("lv"); 

        // Add styles to new lapivienti

        newDiv.style.marginBottom = (-1) * lv_sade/10+"px";
        newDiv.style.marginLeft = (-1) * lv_sade/10+"px";

        const height = document.querySelector('#box_h').value;
        const width = document.querySelector('#box_w').value;


        if (document.querySelector("#lapiviennit__sade_muucord").value != "") {
          newDiv.style.height = lv_sade/5 + "px";
          newDiv.style.width = lv_sade/5 + "px";
          newDiv.classList.add("lapivienti__customsize");
        }


        let id = "lv" + Math.random().toString(16).slice(2);
        newDiv.setAttribute("id", id);
        newDiv.dataset.no = lapivienti_count;
        newDiv__comment_settings.setAttribute("name", id);
        newDiv__comment_del.setAttribute("name", id);
        newDiv__comment.setAttribute("name", id);

        // const inH = document.createElement('input');
        // const inW = document.createElement('input');

        // inH.setAttribute('type', 'num');
        // inW.setAttribute('type', 'num');
        // touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );

        things_array = ['"'+newDiv__comment.innerText+'|'+''+parseFloat(newDiv.style.bottom)*5+'|'+''+parseFloat(newDiv.style.left)*5+'|'+newDiv.dataset.no+'|'+id+'__"'];

        console.log("Things_arraythings_array: " + things_array);

        t_array = JSON.parse(things_array);
        console.log("Things_arrayt_array: " + t_array);

        
        submitprogress("","adding",id,"lv",t_array);



        things_array = ['"'+newDiv__comment.innerText+'|'+''+parseFloat(newDiv.style.bottom)*5+'|'+''+parseFloat(newDiv.style.left)*5+'|'+newDiv.dataset.no+'|'+id+'__"'];
        t_array = JSON.parse(things_array);
        lv_prevdata = t_array;


        
         

         console.log("Things_arraythings_array: " + things_array);

         
         console.log("Things_arrayt_array: " + t_array);

         
         submitprogress("","adding",id,"mp",t_array);
         lv_previous_cord_ = "0|"+parseFloat(newDiv.style.bottom)*5+"|"+parseFloat(newDiv.style.left)*5;


        newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();lapivienti_count-=1;submitprogress('','cancel','"+id+"','lv','"+t_array+"');mittapiste_count-=1;");
        newDiv__comment_settings.setAttribute("onclick", "document.querySelector('#drawscreen_section_three > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_three > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();lapivienti_count-=1;submitprogress('','cancel','"+id+"','lv','"+t_array+"');lv_previous_cord = '"+lv_previous_cord_+"';");

         // newDiv__comment_del.setAttribute("onclick", "obj = this.getAttribute('name');submitprogress('','cancel','"+id+"','lv','"+t_array+"');mittapiste_count-=1;");
         // newDiv__comment_settings.setAttribute("onclick", " document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord(); submitprogress('','cancel','"+id+"','lv','"+t_array+"');mittapiste_count-=1;lv_previous_cord = '"+lv_previous_cord_+"';");

         if(lv_previous_cord !== null) {
            newDiv.dataset.prevcord =  lv_previous_cord;

            lv_previous_cord = null;
         }


        // touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );
      }
   }

   
  }