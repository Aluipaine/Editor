<?php

require "../vendor/config.php";
include('../header.php');

?>
<section class="tpv active">
  <h2>Tulosta työmaapäiväkirja</h2>
  <div class="row tpvrow">  
    <div class="tpv_start">
      <label for="tyopaivakirja_start"></label><input id="tyopaivakirja_start" type="date" max="<?= date("Y-m-d"); ?>">
    </div>
    <b> -- </b>
    <div class="tpv_end">
      <label for="tyopaivakirja_end"></label><input id="tyopaivakirja_end" type="date" max="<?= date("Y-m-d"); ?>">
    </div>
  </div>
  <div class="row tpvrow">
    <div class="tpv_additionals">
      <label for="tyopaivakirja_projektihaku">Hae projektilla</label>
      <select id="tyopaivakirja_projektihaku">
        <?php
           $projects = mysqli_query($db, "SELECT * FROM `projects`");
           $projects = mysqli_fetch_all($projects);

           $options.='<option value="-">-</option>';
           foreach ($projects as $p) { 
              $wdiary_p = mysqli_query($db, "SELECT * FROM `workdiary`");
              $wdiary_p = mysqli_fetch_all($wdiary_p);
              
              $pr_name = $p[1];
              
              foreach ($wdiary_p as $wp) {
                $wpr_name = $wp[1];

                if($p[0] === $wpr_name) {
                  $options.='<option value="'.$p[0].'">'.$pr_name.'</option>';
                  break;
                }
              }
              
           }
        ?>
        <?= $options ?>
      </select>
      <label for="tyopaivakirja_tekija">, Hae tekijällä</label>
        <?php
          $options = "";
          $users = mysqli_query($db, "SELECT * FROM `users`");
          $users = mysqli_fetch_all($users);
          $options.='<option value="-">-</option>';
          foreach ($users as $p) { 
            $wdiary_p = mysqli_query($db, "SELECT * FROM `workdiary`");
            $wdiary_p = mysqli_fetch_all($wdiary_p);
            $pr_name = $p[1];

            foreach ($wdiary_p as $wp) {
              $wpr_name = $wp[2];

              if($p[1] === $wpr_name) {
                // give_numbers(this,`'.$p[6].'`,`'.$p[7].'`,`'.$p[8].'`);
                $options.='<option value="'.$p[1].'">'.$p[1].'</option>';
                break;
              }
            }
            
          }
        ?>
      <select id="tyopaivakirja_tekija">
        <?= $options ?>
      </select>

    </div>
  </div>
  
  
  <div class="tpv_search" onclick="get_that_pdf();">
    hae
  </div>
  <section id="done_table">

  </section>
</section>


<script src='/js/jquery.min.js'></script>
<script>
  function get_that_pdf() {
    _start_time = document.querySelector("#tyopaivakirja_start").value;
    _end_time = document.querySelector("#tyopaivakirja_end").value;
    _projektihaku = document.querySelector("#tyopaivakirja_projektihaku").value;
    _tekijahaku = document.querySelector("#tyopaivakirja_tekija").value;

    answersDiv = document.querySelector("#done_table");

    if(_end_time.lenght < 2) {
      $.ajax({
        url: "../vendor/paivakirja__ajanjaksot.php",
        type: "post",
        data: {
          start_time: _start_time,
          end_time: '',
          projektihaku: _projektihaku,
          tekijahaku: _tekijahaku,
        },
        success: (answers) => {
          print_function(answers);
        }
      });
    }
    else {
      $.ajax({
        url: "../vendor/paivakirja__ajanjaksot.php",
        type: "post",
        data: {
          start_time: _start_time,
          end_time: _end_time,
          projektihaku: _projektihaku,
          tekijahaku: _tekijahaku,
        },
        success: (answers) => {
          print_function(answers);
        }
      });
    }
    

  }

  function print_function(answers) {
    console.log(answers);
    let grand_array = answers.split("||");
    answersDiv.innerHTML = "";

    if (grand_array.length < 4) {
      return; // continue
    }

    project_array = new Array();
    for (let a = 0; a < grand_array.length; a++) {
      g_array = grand_array[a].split("~~");

      prname = g_array[0].replaceAll("\r","").replaceAll("\n","");
      if(prname.length > 1) {
            project_array.push(prname);
      }
    }

    project_array = removeDuplicates(project_array);

    project_array.forEach(pa => {
      answersDiv.innerHTML += "<h2>"+pa+"</h2>";
     
      time_array = new Array();
      for (let a = 0; a < grand_array.length; a++) {
        g_array = grand_array[a].split("~~");
        if(time_array != undefined) {
          time_array.push(g_array[4]);
        }
        
      }

      time_array_ = removeDuplicates(time_array);

      time_array_.forEach(ta => {
        if(ta == undefined) {
          return;
        }
        answersDiv.innerHTML += "<h4 style='margin: 19px 0 10px 0;'>"+ta+"</h4>";
        answersDiv_table = document.createElement("table");
        answersDiv.append(answersDiv_table);
        for (let a = 0; a < grand_array.length; a++) {
          g_array = grand_array[a].split("~~");
          prname = g_array[0].replaceAll("\r","").replaceAll("\n","");
         
          if(g_array[4] === ta) {
            who = g_array[1];
            what = g_array[2];
            where = g_array[3];
            when = g_array[4];

            if(when != 'undefined' && when != undefined) {
              answersDiv_table.innerHTML += `
                <tr style="display:flex;">
                  <td style="flex: 0 0 20%;height: auto;padding:2px 4px;">${who}</td>
                  <td style="flex: 0 0 20%;height: auto;padding:2px 4px;">${what}</td>
                  <td style="flex: 0 0 60%;height: auto;padding:2px 4px;">${where}</td>
                </tr>`;
            }
          }
        }
      });
    });

    
      
    document.querySelector(".tpv").classList.remove("active");

    window.print();
  }

  function removeDuplicates(arr) { 
    return arr.filter((item, 
        index) => arr.indexOf(item) === index); 
} 
</script>
</body>

</html>