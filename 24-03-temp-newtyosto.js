function rangoita() {

  tyostot__tyosto_pysty = canvas.querySelectorAll(".tyostot__tyosto_pysty");
  tyostot__tyosto_vaaka = canvas.querySelectorAll(".tyostot__tyosto_vaaka");


  td_p = [];
  td_v = [];
  for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
    console.log(tyostot__tyosto_pysty[i].getBoundingClientRect().left);
    tyostot__tyosto_pysty.dataset.cord = tyostot__tyosto_pysty[i].querySelector("input").value;
    t_p_array = tyostot__tyosto_pysty[i].getBoundingClientRect().left + ","+ parseFloat(tyostot__tyosto_pysty.dataset.cord) + ","+tyostot__tyosto_pysty[i].innerHTML;
    td_p.push(t_p_array);
  }

  for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
    console.log(tyostot__tyosto_vaaka[i].getBoundingClientRect().top);
    tyostot__tyosto_vaaka.dataset.cord = tyostot__tyosto_vaaka[i].querySelector("input").value;
    t_v_array = tyostot__tyosto_vaaka[i].getBoundingClientRect().top + ","+ parseFloat(tyostot__tyosto_vaaka.dataset.cord) + ","+tyostot__tyosto_vaaka[i].innerHTML;
    td_v.push(t_v_array);
  }

  td_p.sort(function(a, b) {
    if(a.split(",")[0] > b.split(",")[0]) return 1;
    if(a.split(",")[0] < b.split(",")[0]) return -1;
    return 0;
  });

  td_v.sort(function(a, b) {
    if(a.split(",")[0] > b.split(",")[0]) return 1;
    if(a.split(",")[0] < b.split(",")[0]) return -1;
    return 0;
  });

  function removeDupleTyosto(arr) {
     return arr.filter((item, index) => arr.indexOf(item) === index);
  }
  t_p = removeDupleTyosto(td_p);
  t_v = removeDupleTyosto(td_v);

  for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
    tyostot__tyosto_pysty[i].remove();
  }

  for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
    tyostot__tyosto_vaaka[i].remove();
  }

  var tyostot;
  if(document.querySelector(".tyostot__grandrow")) {
    tyostot = document.querySelector(".tyostot__grandrow");
  } 
  else {
    tyostot = document.createElement("div");
    tyostot.classList.add("tyostot__grandrow");
    canvas.prepend(tyostot);
  }



  for(var i = 0; i < t_p.length; i++) {
    tyosto = document.createElement("div");
    tyosto.classList.add("tyostot__tyosto");
    tyosto.classList.add("tyostot__tyosto_pysty");
    tyosto.style.left = parseFloat(t_p[i].split(",")[1]) + "px";
    tyosto.innerHTML = parseFloat(t_p[i].split(",")[2]);
    console.log("tyosto " + tyosto);
    tyostot.prepend(tyosto);
  }
  for(var i = 0; i < t_v.length; i++) {
    tyosto = document.createElement("div");
    tyosto.innerHTML = t_v[i].split(",")[2];
    tyosto.classList.add("tyostot__tyosto");
    tyosto.classList.add("tyostot__tyosto_vaaka");
    tyosto.style.bottom = parseFloat(t_p[i].split(",")[1]) + "px";
    console.log("tyosto " + tyosto);    
    tyostot.prepend(tyosto);
  }


}