// highlighter for sizer visuals
$('td').mouseover(function() {
  var $this = $(this);
  var col = $this.index();
  var row = $this.closest('tr').index();
  $('#colcount').text(col + 1);
  $('#rowcount').text(row + 1);
  if (document.querySelector("#rappu_count")) {
      document.querySelector("#rappu_count").value = document.querySelector("#colcount").innerHTML;
      document.querySelector("#floor_count").value = document.querySelector("#rowcount").innerHTML;
  }
});
$(".table").delegate('td', 'mouseover mouseleave', function(e) {
  var cellindex = 0;
  if (e.type == 'mouseover') {
      $(this).addClass("cell");
      var cells = $(this).parent().children("td");
      for (var i = 0; i < cells.length; i++) {
          if ($(cells[i]).hasClass("cell")) {
              $(this).removeClass("cell");
              cellindex = i;
              break;
          }
      }
      $(this).parent().addClass("row");
      var rows = $(this).parent().parent().children("tr");
      for (var i = 0; i < rows.length; i++) {
          var tds = $(rows[i]).children("td");
          for (var j = 0; j <= cellindex; j++) {
              $(tds[j]).addClass("SizeChooser-hover");
          }
          if ($(rows[i]).hasClass("row")) {
              $(this).parent().removeClass("row");
              break;
          }
      }
  } else {
      $("td").removeClass("SizeChooser-hover");
  }
});
// END highlighter for sizer visuals
// toggle sizer input
$("#sizertoggle").click(function() {
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
$("#tablepreview td").click(function() {
  $("#tablepreview").removeClass('showsizer');
  $('#tabledisplay .table-responsive').empty();
  row = $('#colcount').text();
  col = $('#rowcount').text();
  var rows = col;
  var cols = row;
  var table = $('<table class="table table-bordered"><tbody>');
  for (var r = 0; r < rows; r++) {
      var tr = $('<tr>');
      for (var c = 0; c < cols; c++) $('<td contenteditable="true"></td>').appendTo(tr);
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
      indentAfter = new Array(level - 1).join('  '),
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
$('button#applycaption').click(function() {
  //remove caption input window
  $("#tablepreview").removeClass('showcaptioner');
  var caption = $('#captioner textarea').val();
  $("#tabledisplay table caption").remove();
  gencode();
});
// ON APPLYING CAPTION
$('button#applyheaders').click(function() {
  //remove caption input window
  $("#tablepreview").removeClass('showheaderer');
  gencode();
});
$('#gencode').click(function() {
  gencode();
  $('#preparetext').text('Code Updated Above');
  $("body").addClass("codeupdated").delay(1500).queue(function() {
      $(this).removeClass("codeupdated").dequeue();
      $('#preparetext').text('Push edits to code');
  });
});

function gencode() {
  if ($('#rowheadercheck').is(':checked')) {
      // add th to first row
      $('#tabledisplay tr td:first-child').replaceWith(function(i, html) {
          return '<th scope="row">click to edit</th>';
      });
  }
  if (!$('#rowheadercheck').is(':checked')) {
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
  $("#tabledisplay table caption").remove();
  $("th, td").removeAttr("contenteditable");
  // update code display
  var htmlString = $('#tabledisplay .container').html();
  $('#tablecode').text(process(htmlString));
  $("#tabledisplay th, #tabledisplay td").attr("contenteditable", "true");
}
var clipboard = new Clipboard('.btn');
clipboard.on('success', function(e) {
  $("body").addClass("codecopied").delay(2500).queue(function() {
      $(this).removeClass("codecopied").dequeue();
  });
});
clipboard.on('error', function(e) {});
$('.codecopiedalert').click(function() {
  $('body').removeClass("codecopied");
});
// THIS IS TO MAKE THE TABLE EDITABLE
var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');
$('.table-add').click(function() {
  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  $TABLE.find('table').append($clone);
});
$('.table-remove').click(function() {
  $(this).parents('tr').detach();
});
$('.table-up').click(function() {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});
$('.table-down').click(function() {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});
// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;
$BTN.click(function() {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function() {
      headers.push($(this).text().toLowerCase());
  });
  // Turn all existing rows into a loopable array
  $rows.each(function() {
      var $td = $(this).find('td');
      var h = {};
      // Use the headers from earlier to name our hash keys
      headers.forEach(function(header, i) {
          h[header] = $td.eq(i).text();
      });
      data.push(h);
  });
  // Output the result
  $EXPORT.text(JSON.stringify(data));
});

$("#A").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";

  if (e.type == 'click') {
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#A .table_size_chooser td').removeClass("SizeChooser-clicked")

          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
                  console.log("IF EVENT");
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
                  console.log("ELSE EVENT");
              }

          }


      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#a_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#a_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#A .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#a_nextnum').val());
          z += 1;
          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#a_val').val();
              var a_val_num = $('#a_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#a_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {
                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#a_val').val() + parseFloat($('#a_nextnum').val());


          posX = $(this).closest('tr').index();
          posY = $(this).index();


          $('#a_nextnum').val(z);
      }

  }
});
$("#B").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";
  console.log("reg B");
  if (e.type == 'click') {
      console.log("reg B");
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#B .table_size_chooser td').removeClass("SizeChooser-clicked")

          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
              }

          }

      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#b_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#b_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#B .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#b_nextnum').val());
          z += 1;
          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#b_val').val();
              var a_val_num = $('#b_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#b_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {
                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#b_val').val() + parseFloat($('#b_nextnum').val());


          posX = $(this).closest('tr').index();
          posY = $(this).index();


          $('#b_nextnum').val(z);
      }

  }
});
$("#C").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";

  if (e.type == 'click') {
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#C .table_size_chooser td').removeClass("SizeChooser-clicked")

          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
              }

          }


      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#c_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#c_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#C .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#c_nextnum').val());
          z += 1;
          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#c_val').val();
              var a_val_num = $('#c_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#c_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {
                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#c_val').val() + parseFloat($('#c_nextnum').val());


          posX = $(this).closest('tr').index();
          posY = $(this).index();


          $('#c_nextnum').val(z);
      }

  }
});
$("#D").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";

  if (e.type == 'click') {
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#D .table_size_chooser td').removeClass("SizeChooser-clicked")

          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
              }

          }


      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#d_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#d_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#D .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#d_nextnum').val());
          z += 1;

          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#d_val').val();
              var a_val_num = $('#d_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#d_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {

                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#d_val').val() + parseFloat($('#d_nextnum').val());



          posX = $(this).closest('tr').index();
          posY = $(this).index();

          $('#d_nextnum').val(z);
      }

  }
});
$("#E").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";

  if (e.type == 'click') {
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#E .table_size_chooser td').removeClass("SizeChooser-clicked")

          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
              }

          }


      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#e_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#e_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#E .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#e_nextnum').val());
          z += 1;

          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#e_val').val();
              var a_val_num = $('#e_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#e_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {
                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#e_val').val() + parseFloat($('#e_nextnum').val());


          posX = $(this).closest('tr').index();
          posY = $(this).index();

          $('#e_nextnum').val(z);
      }

  }
});
$("#F").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";

  if (e.type == 'click') {
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#F .table_size_chooser td').removeClass("SizeChooser-clicked")

          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
              }

          }

      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#f_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#f_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#F .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#f_nextnum').val());
          z += 1;
          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#f_val').val();
              var a_val_num = $('#f_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#f_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {
                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#f_val').val() + parseFloat($('#f_nextnum').val());


          posX = $(this).closest('tr').index();
          posY = $(this).index();

          $('#f_nextnum').val(z);
      }

  }
});
$("#G").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";

  if (e.type == 'click') {
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#G .table_size_chooser td').removeClass("SizeChooser-clicked")
          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
              }

          }

      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#g_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#g_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#G .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#g_nextnum').val());
          z += 1;
          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#g_val').val();
              var a_val_num = $('#g_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#g_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {
                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#g_val').val() + parseFloat($('#g_nextnum').val());


          posX = $(this).closest('tr').index();
          posY = $(this).index();

          $('#g_nextnum').val(z);
      }

  }
});
$("#H").delegate('td', 'mouseover mouseleave click', function(e) {
  var cellindex = 0;
  let rooms = "";

  if (e.type == 'click') {
      if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
          $(this).removeClass("nowork");
      } else if ($('input#pohjakierros').is(':checked')) {
          console.log("Pohja checkattu");


          var cells = $(this).parent().children("td");
          var tds = $('#H .table_size_chooser td').removeClass("SizeChooser-clicked")

          for (var i = 0; i < cells.length; i++) {
              if ($(this).find('label').text().length > 1) {
                  $(this).removeClass("nowork");
                  $(this).find('label').text("");
                  cellindex = i;
              } else {
                  $(this).addClass("nowork"); $(this).removeClass("checked");
                  $(this).find('label').val("");
              }

          }

      } else if ($(this).hasClass("noindex")) {
          z = 0;
          $('#h_nextnum').val(z);
      } else if ($(this).find('input').prop('checked') == false) {
          z -= 1;
          $(this).find('input').val("");
          $(this).find('label').text("");
          $('#h_nextnum').val(z);
      } else {
          $(this).addClass("checked");
          var cells = $(this).parent().children("td");
          var tds = $('#H .table_size_chooser td').removeClass("SizeChooser-clicked")
          z = parseFloat($('#h_nextnum').val());
          z += 1;
          for (var i = 0; i < cells.length; i++) {
              if ($(cells[i]).hasClass("cell")) {
                  $(this).removeClass("cell");
                  cellindex = i;

                  break;


              }
              var a_val = $('#h_val').val();
              var a_val_num = $('#h_nextnum').val();
              $(this).find('label').text(a_val + a_val_num);
              var a_rooms = $('#h_rooms');

          }


          $(this).parent().addClass("row");
          var rows = $(this).parent().parent().children("tr");


          for (var i = 0; i < rows.length; i++) {
              var tds = $(rows[i]).children("label");
              V = "";
              for (var j = 0; j <= cellindex; j++) {
                  Z = i;

                  var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
              }
              if ($(rows[i]).hasClass("row")) {
                  $(this).parent().removeClass("row");
                  break;
              }
          }
          V = $('#h_val').val() + parseFloat($('#h_nextnum').val());


          posX = $(this).closest('tr').index();
          posY = $(this).index();

          $('#h_nextnum').val(z);
      }

  }
});

$('.rappu_more').click(function() {
  $("#roomconfig_third").slideUp(250).delay(600).fadeIn(100);
  $("#sizertoggle").click(function() {
      $(".tablepreview").removeClass("showcaptioner").removeClass("showheaderer");
      $(".tablepreview").toggleClass('showsizer');
  });
  // toggle caption input
  $("#captiontoggle").click(function() {
      $(".tablepreview").removeClass("showsizer").removeClass("showheaderer");
      $(".tablepreview").toggleClass('showcaptioner');
  });
  $("#titletoggle").click(function() {
      $(".tablepreview").removeClass("showsizer").removeClass("showcaptioner");
      $(".tablepreview").toggleClass('showheaderer');
  });
  // on sizer td click, generate new table
  $(".tablepreview td").click(function() {
      $(".tablepreview").removeClass('showsizer');
      $('#tabledisplay .table-responsive').empty();
      row = $('.colcount').text();
      col = $('.rowcount').text();
      var rows = col; //here's your number of rows and columns
      var cols = row;
      var table = $('<table class="table table-bordered"><tbody>');
      for (var r = 0; r < rows; r++) {
          var tr = $('<tr>');
          for (var c = 0; c < cols; c++)
              $('<td contenteditable="true"></td>').appendTo(tr);
          tr.appendTo(table);
      }
      table.appendTo('#tabledisplay .table-responsive');
      gencode();
  });
});
// BEAUTIFY STRING
function process(str) {
  var div = document.createElement('div');
  div.innerHTML = str.trim();
  return format(div, 0).innerHTML;
}

za = 1;
zb = 1;
zc = 1;
zd = 1;
ze = 1;
zf = 1;
zg = 1;
zh = 1;
const _O_ = [];

$(".rappu_more").click(function() {
  setTimeout(console.log("wait"), 1000);
  $("#A").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";

      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#A .table_sizae_chooser td').removeClass("SizaeChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              za -= 0;
              $('#a_nextnum').val(za);
          } else if ($(this).find('input').prop('checked') == false) {
              za -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#a_nextnum').val(za);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#A .table_sizae_chooser td').removeClass("SizaeChooser-clicked")
              za = parseFloat($('#a_nextnum').val());
              za += 1;
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#a_val').val();
                  var a_val_num = $('#a_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#a_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      ZA = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = parseFloat($('#a_val').val()) + 1;


              posX = $(this).closest('tr').index();
              posY = $(this).index();

              $('#a_nextnum').val(za);
          }

      }
  });
  $("#B").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";
      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#B .table_sizbe_chooser td').removeClass("SizbeChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              zb -= 0;
              $('#b_nextnum').val(zb);
          } else if ($(this).find('input').prop('checked') == false) {
              zb -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#b_nextnum').val(zb);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#B .table_sizbe_chooser td').removeClass("SizbeChooser-clicked")
              zb = parseFloat($('#b_nextnum').val());
              zb += 1;

              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#b_val').val();
                  var a_val_num = $('#b_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#b_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {

                      ZB = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#b_val').val() + parseFloat($('#b_nextnum').val());


              posX = $(this).closest('tr').index();
              posY = $(this).index();

              $('#b_nextnum').val(zb);
          }

      }
  });
  $("#C").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";

      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#C .table_sizce_chooser td').removeClass("SizceChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              zc -= 0;
              $('#c_nextnum').val(zc);
          } else if ($(this).find('input').prop('checked') == false) {
              zc -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#c_nextnum').val(zc);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#C .table_sizce_chooser td').removeClass("SizceChooser-clicked")
              zc = parseFloat($('#c_nextnum').val());
              zc += 1;
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#c_val').val();
                  var a_val_num = $('#c_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#c_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {

                      ZC = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#c_val').val() + parseFloat($('#c_nextnum').val());


              posX = $(this).closest('tr').index();
              posY = $(this).index();

              $('#c_nextnum').val(zc);
          }

      }
  });
  $("#D").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";

      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#D .table_sizde_chooser td').removeClass("SizdeChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              zd -= 0;
              $('#d_nextnum').val(zd);
          } else if ($(this).find('input').prop('checked') == false) {
              zd -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#d_nextnum').val(zd);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#D .table_sizde_chooser td').removeClass("SizdeChooser-clicked")
              zd = parseFloat($('#d_nextnum').val());
              zd += 1;
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#d_val').val();
                  var a_val_num = $('#d_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#d_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      ZD = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#d_val').val() + parseFloat($('#d_nextnum').val());


              posX = $(this).closest('tr').index();
              posY = $(this).index();
              $('#d_nextnum').val(zd);
          }

      }
  });
  $("#E").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";

      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#E .table_sizee_chooser td').removeClass("SizeeChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              ze -= 0;
              $('#e_nextnum').val(ze);
          } else if ($(this).find('input').prop('checked') == false) {
              ze -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#e_nextnum').val(ze);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#E .table_sizee_chooser td').removeClass("SizeeChooser-clicked")
              ze = parseFloat($('#e_nextnum').val());
              ze += 1;
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#e_val').val();
                  var a_val_num = $('#e_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#e_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      ZE = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#e_val').val() + parseFloat($('#e_nextnum').val());

              posX = $(this).closest('tr').index();
              posY = $(this).index();

              $('#e_nextnum').val(ze);
          }

      }
  });
  $("#F").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";

      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#F .table_sizfe_chooser td').removeClass("SizfeChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              zf -= 0;
              $('#f_nextnum').val(zf);
          } else if ($(this).find('input').prop('checked') == false) {
              zf -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#f_nextnum').val(zf);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#F .table_sizfe_chooser td').removeClass("SizfeChooser-clicked")
              zf = parseFloat($('#f_nextnum').val());
              zf += 1;
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#f_val').val();
                  var a_val_num = $('#f_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#f_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      ZF = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#f_val').val() + parseFloat($('#f_nextnum').val());


              posX = $(this).closest('tr').index();
              posY = $(this).index();
              $('#f_nextnum').val(zf);
          }

      }
  });
  $("#G").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";

      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#G .table_sizge_chooser td').removeClass("SizgeChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              zg -= 0;
              $('#g_nextnum').val(zg);
          } else if ($(this).find('input').prop('checked') == false) {
              zg -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#g_nextnum').val(zg);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#G .table_sizge_chooser td').removeClass("SizgeChooser-clicked")
              zg = parseFloat($('#g_nextnum').val());
              zg += 1;
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#g_val').val();
                  var a_val_num = $('#g_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#g_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      ZG = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#g_val').val() + parseFloat($('#g_nextnum').val());


              posX = $(this).closest('tr').index();
              posY = $(this).index();

              $('#g_nextnum').val(zg);
          }

      }
  });
  $("#H").delegate('td', 'mouseover mouseleave click', function(e) {
      var cellindex = 0;
      let rooms = "";

      if (e.type == 'click') {
          if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
              $(this).removeClass("nowork");
          } else if ($('input#pohjakierros').is(':checked')) {
              console.log("Pohja checkattu");


              var cells = $(this).parent().children("td");
              var tds = $('#H .table_sizhe_chooser td').removeClass("SizheChooser-clicked")

              for (var i = 0; i < cells.length; i++) {
                  if ($(this).find('label').text().length > 1) {
                      $(this).removeClass("nowork");
                      $(this).find('label').text("");
                      cellindex = i;
                  } else {
                      $(this).addClass("nowork"); $(this).removeClass("checked");
                      $(this).find('label').val("");
                  }

              }

          } else if ($(this).hasClass("noindex")) {
              zh -= 0;
              $('#h_nextnum').val(zh);
          } else if ($(this).find('input').prop('checked') == false) {
              zh -= 1;
              $(this).find('input').val("");
              $(this).find('label').text("");
              $('#h_nextnum').val(zh);
          } else {
              $(this).addClass("checked");
              var cells = $(this).parent().children("td");
              var tds = $('#H .table_sizhe_chooser td').removeClass("SizheChooser-clicked")
              zh = parseFloat($('#h_nextnum').val());
              zh += 1;
              for (var i = 0; i < cells.length; i++) {
                  if ($(cells[i]).hasClass("cell")) {
                      $(this).removeClass("cell");
                      cellindex = i;

                      break;


                  }
                  var a_val = $('#h_val').val();
                  var a_val_num = $('#h_nextnum').val();
                  $(this).find('label').text(a_val + a_val_num);
                  var a_rooms = $('#h_rooms');

              }


              $(this).parent().addClass("row");
              var rows = $(this).parent().parent().children("tr");


              for (var i = 0; i < rows.length; i++) {
                  var tds = $(rows[i]).children("label");
                  V = "";
                  for (var j = 0; j <= cellindex; j++) {
                      ZH = i;

                      var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                  }
                  if ($(rows[i]).hasClass("row")) {
                      $(this).parent().removeClass("row");
                      break;
                  }
              }
              V = $('#h_val').val() + parseFloat($('#h_nextnum').val());


              posX = $(this).closest('tr').index();
              posY = $(this).index();

              $('#h_nextnum').val(zh);
          }

      }
  });
});




function format(node, level) {
  var indentBefore = new Array(level++ + 1).join('  '),
      indentAfter = new Array(level - 1).join('  '),
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
$('button#applycaption').click(function() {
  //remove caption input window
  $(".tablepreview").removeClass('showcaptioner');
  var caption = $('#captioner textarea').val();
  $("#tabledisplay table caption").remove();
  gencode();
});
// ON APPLYING CAPTION
$('button#applyheaders').click(function() {
  //remove caption input window
  $(".tablepreview").removeClass('showheaderer');
  gencode();
});
$('#gencode').click(function() {
  gencode();
  $('#preparetext').text('Code Updated Above');
  $("body").addClass("codeupdated").delay(1500).queue(function() {
      $(this).removeClass("codeupdated").dequeue();
      $('#preparetext').text('Push edits to code');
  });
});

function gencode() {
  if ($('#rowheadercheck').is(':checked')) {
      // add th to first row
      $('#tabledisplay tr td:first-child').replaceWith(function(i, html) {
          return '<th scope="row">click to edit</th>';
      });
  }
  if (!$('#rowheadercheck').is(':checked')) {
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
  $("#tabledisplay table caption").remove();
  $("th, td").removeAttr("contenteditable");
  // update code display
  var htmlString = $('#tabledisplay .container').html();
  $('#tablecode').text(process(htmlString));
  $("#tabledisplay th, #tabledisplay td").attr("contenteditable", "true");
}
var clipboard = new Clipboard('.btn');
clipboard.on('success', function(e) {
  $("body").addClass("codecopied").delay(2500).queue(function() {
      $(this).removeClass("codecopied").dequeue();
  });
});
clipboard.on('error', function(e) {
  console.log(e);
});
$('.codecopiedalert').click(function() {
  $('body').removeClass("codecopied");
});
// THIS IS TO MAKE THE TABLE EDITABLE
var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');
$('.table-add').click(function() {
  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  $TABLE.find('table').append($clone);
});
$('.table-remove').click(function() {
  $(this).parents('tr').detach();
});
$('.table-up').click(function() {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});
$('.table-down').click(function() {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});
// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;
$BTN.click(function() {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function() {
      headers.push($(this).text().toLowerCase());
  });
  // Turn all existing rows into a loopable array
  $rows.each(function() {
      var $td = $(this).find('td');
      var h = {};
      // Use the headers from earlier to name our hash keys
      headers.forEach(function(header, i) {
          h[header] = $td.eq(i).text();
      });
      data.push(h);
  });
  // Output the result
  $EXPORT.text(JSON.stringify(data));
});


$("#new_project").show();
$("#roomconfig_first").hide();
$("#roomconfig_second").hide();
$("#roomconfig_third").hide();
$("#roomconfig_fourth").hide();
$("#roomconfig_fifth").hide();

$("#roomconfig_first").slideUp(200);
$("#roomconfig_second").slideUp(200);
$("#roomconfig_third").slideUp(200);
$("#roomconfig_fourth").slideUp(200);
$("#roomconfig_fifth").slideUp(200);

// $("#new_project").hide();
// new_project
// roomconfig_first
// roomconfig_second

$(document).ready(function() {
  $('#submit-1').click(function() {
      var form_data = new FormData();
      // Read selected files
      var totalfiles = document.getElementById('files-1').files.length;
      for (var index = 0; index < totalfiles; index++) {
          form_data.push("files-1[]", document.getElementById('files-1').files[index]);
          // $('#preview').append('<div>OKe</div>');
      }
      // AJAX request
      $.ajax({
          url: 'ajaxupload.php',
          type: 'post',
          data: form_data,
          dataType: 'json',
          contentType: false,
          processData: false,
          success: function(response) {
              for (var index = 0; index < response.length; index++) {
                  // var src = response[index];
                  $('#preview-1').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/' + response[index] + '">Avaa</a>');
                  $('#preview-1').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="1_asiakirja-commentary" id="1_asiakirja-commentary-' + index + '">');
              }
          }
      });
  });
  $('#submit-2').click(function() {
      var form_data = new FormData();
      // Read selected files
      var totalfiles = document.getElementById('files-2').files.length;
      for (var index = 0; index < totalfiles; index++) {
          form_data.push("files-2[]", document.getElementById('files-2').files[index]);
          // $('#preview').append('<div>OKe</div>');
      }
      // AJAX request
      $.ajax({
          url: 'ajaxupload.php',
          type: 'post',
          data: form_data,
          dataType: 'json',
          contentType: false,
          processData: false,
          success: function(response) {
              for (var index = 0; index < response.length; index++) {
                  // var src = response[index];
                  $('#preview-2').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/' + response[index] + '">Avaa</a>');
                  $('#preview-2').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="2_asiakirja-commentary" id="2_asiakirja-commentary-' + index + '">');
              }
          }
      });
  });
  $('#submit-3').click(function() {
      var form_data = new FormData();
      // Read selected files
      var totalfiles = document.getElementById('files-3').files.length;
      for (var index = 0; index < totalfiles; index++) {
          form_data.push("files-3[]", document.getElementById('files-3').files[index]);
      }
      // AJAX request
      $.ajax({
          url: 'ajaxupload.php',
          type: 'post',
          data: form_data,
          dataType: 'json',
          contentType: false,
          processData: false,
          success: function(response) {
              for (var index = 0; index < response.length; index++) {
                  // var src = response[index];
                  $('#preview-3').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/' + response[index] + '">Avaa</a>');
                  $('#preview-3').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="3_asiakirja-commentary" id="3_asiakirja-commentary-' + index + '">');
              }
          }
      });
  });
  $('#submit-4').click(function() {
      var form_data = new FormData();
      // Read selected files
      var totalfiles = document.getElementById('files-4').files.length;
      for (var index = 0; index < totalfiles; index++) {
          form_data.push("files-4[]", document.getElementById('files-4').files[index]);
          // $('#preview').append('<div>OKe</div>');
      }
      // AJAX request
      $.ajax({
          url: 'ajaxupload.php',
          type: 'post',
          data: form_data,
          dataType: 'json',
          contentType: false,
          processData: false,
          success: function(response) {
              for (var index = 0; index < response.length; index++) {
                  // var src = response[index];
                  $('#preview-4').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/' + response[index] + '">Avaa</a>');
                  $('#preview-4').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="4_asiakirja-commentary" id="4_asiakirja-commentary-' + index + '">');
              }
          }
      });
  });
  
  $('#submit-5').click(function() {
      var form_data = new FormData();
      // Read selected files
      var totalfiles = document.getElementById('files-5').files.length;
      for (var index = 0; index < totalfiles; index++) {
          form_data.push("files-5[]", document.getElementById('files-5').files[index]);
          // $('#preview').append('<div>OKe</div>');
      }
      // AJAX request
      $.ajax({
          url: 'ajaxupload.php',
          type: 'post',
          data: form_data,
          dataType: 'json',
          contentType: false,
          processData: false,
          success: function(response) {
              for (var index = 0; index < response.length; index++) {
                  // var src = response[index];
                  $('#preview-5').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/' + response[index] + '">Avaa</a>');
                  $('#preview-5').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="5_asiakirja-commentary" id="5_asiakirja-commentary-' + index + '">');
              }
          }
      });
  });
  $('#submit-6').click(function() {
      var form_data = new FormData();
      // Read selected files
      var totalfiles = document.getElementById('files-6').files.length;
      for (var index = 0; index < totalfiles; index++) {
          form_data.push("files-6[]", document.getElementById('files-6').files[index]);
          // $('#preview').append('<div>OKe</div>');
      }
      // AJAX request
      $.ajax({
          url: 'ajaxupload.php',
          type: 'post',
          data: form_data,
          dataType: 'json',
          contentType: false,
          processData: false,
          success: function(response) {
              for (var index = 0; index < response.length; index++) {
                  // var src = response[index];
                  $('#preview-6').append('<a class="asiakirja_first" target="_blank" href="https://teditori.gromi.fi/' + response[index] + '">Avaa</a>');
                  $('#preview-6').append('<input class="asiakirja_second" type="text" placeholder="Anna kommentti asiakirjalle (valinnainen)" name="6_asiakirja-commentary" id="6_asiakirja-commentary-' + index + '">');
              }
          }
      });
  });
});

$('.finalization_btn').click(function(e) {

  const a_array = [];
  const a_ = [];
  const b_array = [];
  const b_ = [];
  const c_array = [];
  const c_ = [];
  const d_array = [];
  const d_ = [];
  const e_array = [];
  const e_ = [];
  const f_array = [];
  const f_ = [];
  const g_array = [];
  const g_ = [];
  const h_array = [];
  const h_ = [];



  $("#A .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();

      if (nam.length > 2) {
          a_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#a_rooms").val(JSON.stringify(a_array));
      }

  });

  $("#A .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "NOWORK";
      a_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#a_rooms_nowork").val(JSON.stringify(a_));
  });

  $("#B .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();


      if (nam.length > 2) {
          b_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#b_rooms").val(JSON.stringify(b_array));
      }

  });

  $("#B .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "";
      b_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#b_rooms_nowork").val(JSON.stringify(b_));
  });

  $("#C .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();


      if (nam.length > 2) {
          c_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#c_rooms").val(JSON.stringify(c_array));
      }

  });

  $("#C .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "";
      c_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#c_rooms_nowork").val(JSON.stringify(c_));
  });

  $("#D .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();


      if (nam.length > 2) {
          d_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#d_rooms").val(JSON.stringify(d_array));
      }

  });

  $("#D .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "";
      d_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#d_rooms_nowork").val(JSON.stringify(d_));
  });

  $("#E .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();

      if (nam.length > 2) {
          e_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#e_rooms").val(JSON.stringify(e_array));
      }


  });

  $("#E .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "";
      e_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#e_rooms_nowork").val(JSON.stringify(e_));
  });

  $("#F .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();

      if (nam.length > 2) {
          f_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#f_rooms").val(JSON.stringify(f_array));
      }

  });

  $("#F .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "";
      f_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#f_rooms_nowork").val(JSON.stringify(f_));
  });

  $("#G .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();
      if (nam.length > 2) {
          g_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#g_rooms").val(JSON.stringify(g_array));
      }


  });

  $("#G .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "";
      g_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#g_rooms_nowork").val(JSON.stringify(g_));
  });

  $("#H .checked").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = $(this).find("label").text();

      if (nam.length > 2) {
          h_array.push({
              name: nam,
              positionX: posX,
              positionY: posY,
              a_room: "13~undone~1|1~2200|4000~~~~~",
              b_room: "13~undone~1|1~2200|2200~~~~~",
              c_room: "13~undone~1|1~2200|4000~~~~~",
              d_room: "13~undone~1|1~2200|2200~~~~~",
              k_room: "13~undone~1|1~2200|4000~~~~~",
              l_room: "13~undone~1|1~2200|4000~~~~~"
          });
          $("#h_rooms").val(JSON.stringify(h_array));
      }


  });

  $("#H .nowork").each(function(index) {
      posX = $(this).closest('tr').index();
      posY = $(this).index();
      nam = "";
      h_.push({
          name: nam,
          positionX: posX,
          positionY: posY
      });
      $("#h_rooms_nowork").val(JSON.stringify(h_));
  });



  $('#new_project__form').submit();
});


/* <div class="form-subgroup">
  <label>Rakennesuunnittelija:</label>
  <input type="text" name="prc_11" class="form-control" value=" " required>
</div>
<div class="form-subgroup">
  <label>Rakennesuunnittelija puh:</label>
  <input type="text" name="prc_11_puh" class="form-control" value=" " required>
</div>
<div class="form-subgroup">
  <label>Rakennesuunnittelija email:</label>
  <input type="text" name="prc_11_email" class="form-control" value=" " required>
</div>
<div class="form-subgroup">
  <label for="firstrole">Rooli:</label>
  <select name="role" id="firstrole">
    <option value="saaja">Viestien saaja</option>
    <option value="katsoja">Katsoja</option>
    <option value="duunari">Kommentointi</option>
  </select>
</div>
<div class="form-subgroup">
  <h5>Saako katsoa kaikki projektin tiedot?</h5>
  <div class="row-reversed">
    <label for="firstrole_permission">Kyllä</label>
    <input type="checkbox" id="firstrole_permission" class="standard_checkbox">
  </div>
</div> */

prc_count = 11;
function creation_henkilolisays() {
    prc_count+=1;
    if(prc_count >= 31) {
        alert("Henkilöiden maksimimäärä ylitetty!");
        return;
    }
    var group = document.createElement("div");
    group.classList.add("form-group");

    var subgroup_1 = document.createElement("div");
    var subgroup_2 = document.createElement("div");
    var subgroup_3 = document.createElement("div");
    var subgroup_4 = document.createElement("div");
    var subgroup_5 = document.createElement("div");


    subgroup_1.classList.add("form-subgroup");
    subgroup_2.classList.add("form-subgroup");
    subgroup_3.classList.add("form-subgroup");
    subgroup_4.classList.add("form-subgroup");
    subgroup_5.classList.add("form-subgroup");
    
        
    subgroup_1.innerHTML = '<label>Nimi ja Rooli: </label><input type="text" name="prc_'+prc_count+'" class="form-control" value=" " required></div>';
    subgroup_2.innerHTML = '<label>Puhelinnumero: </label><input type="text" name="prc_'+prc_count+'_puh" class="form-control" value=" " required></div>';
    subgroup_3.innerHTML = '<label>Sähköposti: </label><input type="text" name="prc_'+prc_count+'_email" class="form-control" value=" " required></div>';
    subgroup_4.innerHTML = '<label for="prc_'+prc_count+'_role">Rooli:</label><select name="role" id="prc_'+prc_count+'_role"><option value="saaja">Viestien saaja</option><option value="katsoja">Katsoja</option><option value="duunari">Kommentointi</option><option value="mittaus">Mittamies</option></select>';
    subgroup_5.innerHTML = '<h5>Saako katsoa kaikki projektin tiedot?</h5><div class="row-reversed"><label for="prc_'+prc_count+'_permission">Kyllä</label><input type="checkbox" id="prc_'+prc_count+'_permission" class="standard_checkbox"></div><h5>Poista näkymässä projektilla</h5><div class="row-reversed"><label for="prc_'+prc_count+'_hiding">Kyllä</label><input type="checkbox" id="prc_'+prc_count+'_hiding" class="standard_checkbox"></div>';


    group.appendChild(subgroup_1);
    group.appendChild(subgroup_2);
    group.appendChild(subgroup_3);
    group.appendChild(subgroup_4);
    group.appendChild(subgroup_5);

    document.querySelector("#new_project > fieldset").append(group);
}