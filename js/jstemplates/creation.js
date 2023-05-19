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
  }
  else {
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
  var rows = col; //here's your number of rows and columns
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