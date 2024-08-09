// highlighter for sizer visuals
/**
 * Converts a number to its corresponding alphabet character.
 * @param {number} num - The number to convert to alphabet character.
 * @returns {string} The alphabet character corresponding to the input number.
 */
z = 1;
zb = 1;
zc = 1;
zd = 1;
ze = 1;
zf = 1;
zg = 1;
zh = 1;
z_alphabet = 1;
zb_alphabet = 1;
zc_alphabet = 1;
zd_alphabet = 1;
ze_alphabet = 1;
zf_alphabet = 1;
zg_alphabet = 1;
zh_alphabet = 1;
toAlpha = (num) => {
    try {
        if (num < 1 || typeof num !== 'number') {
            return 'nan';
        }
        const leveller = 64;
        //since actually A is represented by 65 and we want to represent it
        return String.fromCharCode(num + leveller);
    } catch (error) {
        return 'nan';
    }

};

/**
 * Adds a mouseover event listener to all 'td' elements. When a 'td' element is hovered over,
 * it retrieves the column and row index of the cell and updates the text content of elements
 * with ids 'colcount' and 'rowcount' respectively. If an element with id 'rappu_count' exists,
 * it updates its value with the text content of element with id 'colcount', and updates the value
 * of element with id 'floor_count' with the text content of element with id 'rowcount'.
 */
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
/**
 * Delegate mouseover and mouseleave events on td elements within a table with the class "table".
 * Adds and removes classes to highlight cells and rows based on mouseover events.
 * @param {string} selector - The selector for the table element to delegate the events to.
 * @returns None
 */
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
/**
 * Adds a click event listener to the element with id "sizertoggle".
 * When clicked, it removes the classes "showcaptioner" and "showheaderer" from the element with id "tablepreview",
 * and toggles the class "showsizer" on the same element.
 * @returns None
 */
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
/**
 * Adds a click event listener to the table cells in the table preview.
 * This function handles the creation of a new table based on the row and column counts.
 * It then appends the table to the table display area and calls the gencode function.
 * @returns None
 */
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
/**
 * Processes a string by creating a div element, setting its innerHTML to the trimmed string,
 * and then formatting the div content with an initial indentation of 0.
 * @param {string} str - The input string to process
 * @returns {string} The formatted content of the div element after processing the input string
 */
function process(str) {
    var div = document.createElement('div');
    div.innerHTML = str.trim();
    return format(div, 0).innerHTML;
}

/**
 * Recursively formats the HTML node and its children by adding proper indentation.
 * @param {Node} node - The HTML node to format
 * @param {number} level - The current level of indentation
 * @returns {Node} The formatted HTML node
 */
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
/**
 * Event listener for the 'applycaption' button click event. Removes the 'showcaptioner' class from
 * the element with id 'tablepreview', gets the caption text from the textarea with id 'captioner',
 * removes any existing caption from the table, and then calls the 'gencode' function.
 */
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

/**
 * Generates code based on the user's selections for table display options.
 * If the row header checkbox is checked, it replaces the first column of each row with a <th> element.
 * If the row header checkbox is unchecked, it replaces the <th> elements in the first column with <td> elements.
 * If the column header checkbox is checked, it replaces the first row of the table with <th> elements.
 * It updates the table caption based on the text entered in the caption textarea.
 * It removes the contenteditable attribute from all <th> and <td> elements.
 * It retrieves the HTML content of the table display container, processes it, and displays the processed code in the tablecode element.
 * It
 */
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
/**
 * Initializes a clipboard instance on elements with the class 'btn' to copy text to the clipboard.
 * Adds a class 'codecopied' to the body element when text is successfully copied, and removes it after 2500ms.
 * Removes the 'codecopied' class from the body element when a specific element with class 'codecopiedalert' is clicked.
 * @param {string} selector - The selector for the elements to attach the clipboard functionality.
 * @returns None
 */
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
/**
 * Initializes table functionality for adding, removing, moving rows up and down.
 * @param None
 * @returns None
 */
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
/**
 * This function defines a custom pop and shift method for jQuery.fn object.
 * It also handles a click event on a button element ($BTN) to extract data from a table ($TABLE),
 * parse it into JSON format, and display it in an element ($EXPORT).
 * @returns None
 */
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

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id "A_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object triggered by the mouseover, mouseleave, or click event.
 * @returns None
 */
$("#A_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
        }
        else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#A_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    $(this).find('label').removeAttr("data-customer");
                    cellindex = i;
                    console.log("IF EVENT");
                }
                else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVENT");
                }
            }
        }
        else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            z = 0;
            z_letter = toAlpha(z_alphabet).toUpperCase();
            if ($('#a_nextnum').val().length >= 1) {
                $('#a_nextnum').val(z);
            }
            if ($('#a_nextnum_second_1').val().length >= 1) {
                $('#a_nextnum_second_1').val(z);
            }
            if ($('#a_nextnum_third_1').val().length >= 1) {
                $('#a_nextnum_third_1').val(z);
            }

            if ($('#a_nextnum_2').val().length >= 1) {
                $('#a_nextnum_2').val(z_letter);
            }
            if ($('#a_nextnum_second_2').val().length >= 1) {
                $('#a_nextnum_second_2').val(z_letter);
            }
            if ($('#a_nextnum_third_2').val().length >= 1) {
                $('#a_nextnum_third_2').val(z_letter);
            }
            console.log($(this));
        }
        else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                $(this).find('input').val("");
                $(this).find('label').text("");
                $(this).find('label').removeAttr("data-customer");
                z -= 1;
                z_alphabet -= 1;

                if ($('#a_nextnum').val().length >= 1) {
                    $('#a_nextnum').val(z);
                }
                if ($('#a_nextnum_second_1').val().length >= 1) {
                    $('#a_nextnum_second_1').val(z);
                }
                if ($('#a_nextnum_third_1').val().length >= 1) {
                    $('#a_nextnum_third_1').val(z);
                }

                if ($('#a_nextnum_2').val().length >= 1) {
                    $('#a_nextnum_2').val(z_letter);
                }
                if ($('#a_nextnum_second_2').val().length >= 1) {
                    $('#a_nextnum_second_2').val(z_letter);
                }
                if ($('#a_nextnum_third_2').val().length >= 1) {
                    $('#a_nextnum_third_2').val(z_letter);
                }

                return
            }

            z -= 1;
            z_alphabet -= 1;
            z_letter = toAlpha(z_alphabet).toUpperCase();
            $(this).find('input').val("");
            $(this).find('label').text("");
            $(this).find('label').removeAttr("data-customer");

            if ($('#a_nextnum').val().length >= 1) {
                $('#a_nextnum').val(z);
            }
            if ($('#a_nextnum_second_1').val().length >= 1) {
                $('#a_nextnum_second_1').val(z);
            }
            if ($('#a_nextnum_third_1').val().length >= 1) {
                $('#a_nextnum_third_1').val(z);
            }

            if ($('#a_nextnum_2').val().length >= 1) {
                $('#a_nextnum_2').val(z_letter);
            }
            if ($('#a_nextnum_second_2').val().length >= 1) {
                $('#a_nextnum_second_2').val(z_letter);
            }
            if ($('#a_nextnum_third_2').val().length >= 1) {
                $('#a_nextnum_third_2').val(z_letter);
            }

        }
        else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#A_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#a_nextnum').val()) == $('#a_nextnum').val() && $.isNumeric($('#a_nextnum').val())) {
                // z = parseFloat($('#a_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + z);
                z += 1;
                z_alphabet += 1;
            }
            else {
                // z = parseFloat($('#a_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + z);
                z += 1;
                z_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var a_val = $('#a_val').val();
                if ($('#a_nextnum_2').val().length >= 1 && $('#a_nextnum_2').val().toLowerCase() != "nan") {
                    var a_val_num = $('#a_nextnum_2').val();
                } else if ($('#a_nextnum_3').val().length >= 1 && $('#a_nextnum_3').val().toLowerCase() != "nan") {
                    var a_val_num = $('#a_nextnum_3').val();
                } else if ($('#a_nextnum').val().length >= 1 && $('#a_nextnum').val().toLowerCase() != "nan") {
                    var a_val_num = $('#a_nextnum').val();
                } else {
                    var a_val_num = "";
                }

                if ($('#a_nextnum_second').val().length >= 1) {
                    var a_val_2 = "<br>" + $('#a_nextnum_second').val();
                } else {
                    var a_val_2 = "";
                }

                if ($('#a_nextnum_second_1').val().length >= 1 && $('#a_nextnum_second_1').val().toLowerCase() != "nan") {
                    var a_val_num2 = $('#a_nextnum_second_1').val();
                } else if ($('#a_nextnum_second_2').val().length >= 1 && $('#a_nextnum_second_2').val().toLowerCase() != "nan") {
                    var a_val_num2 = $('#a_nextnum_second_2').val();
                } else if ($('#a_nextnum_second_3').val().length >= 1 && $('#a_nextnum_second_3').val().toLowerCase() != "nan") {
                    var a_val_num2 = $('#a_nextnum_second_3').val();
                } else {
                    var a_val_num2 = "";
                }
                if ($('#a_nextnum_third').val().length >= 1) {
                    var a_val_3 = "<br>" + $('#a_nextnum_third').val();
                } else {
                    var a_val_3 = "";
                }
                if ($('#a_nextnum_third_1').val().length >= 1 && $('#a_nextnum_third_1').val().toLowerCase() != "nan") {
                    var a_val_num3 = $('#a_nextnum_third_1').val();
                } else if ($('#a_nextnum_third_2').val().length >= 1 && $('#a_nextnum_third_2').val().toLowerCase() != "nan") {
                    var a_val_num3 = $('#a_nextnum_third_2').val();
                } else if ($('#a_nextnum_third_3').val().length >= 1 && $('#a_nextnum_third_3').val().toLowerCase() != "nan") {
                    var a_val_num3 = $('#a_nextnum_third_3').val();
                } else {
                    var a_val_num3 = "";
                }
                $(this).find('label').html(a_val + a_val_num + a_val_2 + a_val_num2 + a_val_3 + a_val_num3);
                var a_rooms = $('#a_rooms');
            }

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));


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
            V = $('#a_val').val() + parseFloat($('#a_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            z_letter = toAlpha(z_alphabet).toUpperCase();

            if ($('#a_nextnum').val().length >= 1) {
                $('#a_nextnum').val(z);
            }
            if ($('#a_nextnum_second_1').val().length >= 1) {
                $('#a_nextnum_second_1').val(z);
            }
            if ($('#a_nextnum_third_1').val().length >= 1) {
                $('#a_nextnum_third_1').val(z);
            }

            if ($('#a_nextnum_2').val().length >= 1) {
                $('#a_nextnum_2').val(z_letter);
            }
            if ($('#a_nextnum_second_2').val().length >= 1) {
                $('#a_nextnum_second_2').val(z_letter);
            }
            if ($('#a_nextnum_third_2').val().length >= 1) {
                $('#a_nextnum_third_2').val(z_letter);
            }
        }
    }
});

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id "B_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object triggered by the mouse action.
 * @returns None
 */
$("#B_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
            console.log("I: " + zb);
        } else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#B_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    cellindex = i;
                    console.log("IF EVbENT");
                } else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVbENT");
                }
            }
        } else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            zb = 0;
            zb_letter = toAlpha(zb_alphabet).toUpperCase();
            if ($('#b_nextnum').val().length >= 1) {
                $('#b_nextnum').val(zb);
            }
            if ($('#b_nextnum_second_1').val().length >= 1) {
                $('#b_nextnum_second_1').val(zb);
            }
            if ($('#b_nextnum_third_1').val().length >= 1) {
                $('#b_nextnum_third_1').val(zb);
            }

            if ($('#b_nextnum_2').val().length >= 1) {
                $('#b_nextnum_2').val(zb_letter);
            }
            if ($('#b_nextnum_second_2').val().length >= 1) {
                $('#b_nextnum_second_2').val(zb_letter);
            }
            if ($('#b_nextnum_third_2').val().length >= 1) {
                $('#b_nextnum_third_2').val(zb_letter);
            }

        } else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                zb -= 1;
                zb_alphabet -= 1;
                zb_letter = toAlpha(zb_alphabet).toUpperCase();
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#b_nextnum').val(zb);
                console.log("IV: " + zb);

                if ($('#b_nextnum').val().length >= 1) {
                    $('#b_nextnum').val(zb);
                }
                if ($('#b_nextnum_second_1').val().length >= 1) {
                    $('#b_nextnum_second_1').val(zb);
                }
                if ($('#b_nextnum_third_1').val().length >= 1) {
                    $('#b_nextnum_third_1').val(zb);
                }

                if ($('#b_nextnum_2').val().length >= 1) {
                    $('#b_nextnum_2').val(zb_letter);
                }
                if ($('#b_nextnum_second_2').val().length >= 1) {
                    $('#b_nextnum_second_2').val(zb_letter);
                }
                if ($('#b_nextnum_third_2').val().length >= 1) {
                    $('#b_nextnum_third_2').val(zb_letter);
                }

                return
            }

            zb -= 1;
            zb_alphabet -= 1;
            zb_letter = toAlpha(zb_alphabet).toUpperCase();
            $(this).find('input').val("");
            $(this).find('label').text("");
            $('#b_nextnum').val(zb);
            console.log("IV: " + zb);

            if ($('#b_nextnum').val().length >= 1) {
                $('#b_nextnum').val(zb);
            }
            if ($('#b_nextnum_second_1').val().length >= 1) {
                $('#b_nextnum_second_1').val(zb);
            }
            if ($('#b_nextnum_third_1').val().length >= 1) {
                $('#b_nextnum_third_1').val(zb);
            }

            if ($('#b_nextnum_2').val().length >= 1) {
                $('#b_nextnum_2').val(zb_letter);
            }
            if ($('#b_nextnum_second_2').val().length >= 1) {
                $('#b_nextnum_second_2').val(zb_letter);
            }
            if ($('#b_nextnum_third_2').val().length >= 1) {
                $('#b_nextnum_third_2').val(zb_letter);
            }
        } else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#B_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#b_nextnum').val()) == $('#b_nextnum').val() && $.isNumeric($('#b_nextnum').val())) {
                zb = parseFloat($('#b_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zb);
                zb += 1;
                zb_alphabet += 1;
            } else {
                zb = parseFloat($('#b_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zb);
                zb += 1;
                zb_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var b_val = $('#b_val').val();
                if ($('#b_nextnum_2').val().length >= 1 && $('#b_nextnum_2').val().toLowerCase() != "nan") {
                    var b_val_num = $('#b_nextnum_2').val();
                } else if ($('#b_nextnum_3').val().length >= 1 && $('#b_nextnum_3').val().toLowerCase() != "nan") {
                    var b_val_num = $('#b_nextnum_3').val();
                } else if ($('#b_nextnum').val().length >= 1 && $('#b_nextnum').val().toLowerCase() != "nan") {
                    var b_val_num = $('#b_nextnum').val();
                } else {
                    var b_val_num = "";
                }

                if ($('#b_nextnum_second').val().length >= 1) {
                    var b_val_2 = "<br>" + $('#b_nextnum_second').val();
                } else {
                    var b_val_2 = "";
                }

                if ($('#b_nextnum_second_1').val().length >= 1 && $('#b_nextnum_second_1').val().toLowerCase() != "nan") {
                    var b_val_num2 = $('#b_nextnum_second_1').val();
                } else if ($('#b_nextnum_second_2').val().length >= 1 && $('#b_nextnum_second_2').val().toLowerCase() != "nan") {
                    var b_val_num2 = $('#b_nextnum_second_2').val();
                } else if ($('#b_nextnum_second_3').val().length >= 1 && $('#b_nextnum_second_3').val().toLowerCase() != "nan") {
                    var b_val_num2 = $('#b_nextnum_second_3').val();
                } else {
                    var b_val_num2 = "";
                }
                if ($('#b_nextnum_third').val().length >= 1) {
                    var b_val_3 = "<br>" + $('#b_nextnum_third').val();
                } else {
                    var b_val_3 = "";
                }
                if ($('#b_nextnum_third_1').val().length >= 1 && $('#b_nextnum_third_1').val().toLowerCase() != "nan") {
                    var b_val_num3 = $('#b_nextnum_third_1').val();
                } else if ($('#b_nextnum_third_2').val().length >= 1 && $('#b_nextnum_third_2').val().toLowerCase() != "nan") {
                    var b_val_num3 = $('#b_nextnum_third_2').val();
                } else if ($('#b_nextnum_third_3').val().length >= 1 && $('#b_nextnum_third_3').val().toLowerCase() != "nan") {
                    var b_val_num3 = $('#b_nextnum_third_3').val();
                } else {
                    var b_val_num3 = "";
                }
                $(this).find('label').html(b_val + b_val_num + b_val_2 + b_val_num2 + b_val_3 + b_val_num3);
                var b_rooms = $('#b_rooms');
            }
            $(this).parent().addClass("row");
            var rows = $(this).parent().parent().children("tr");
            for (var i = 0; i < rows.length; i++) {
                var tds = $(rows[i]).children("label");
                Vb = "";
                for (var j = 0; j <= cellindex; j++) {
                    var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                }
                if ($(rows[i]).hasClass("row")) {
                    $(this).parent().removeClass("row");
                    break;
                }
            }
            Vb = $('#b_val').val() + parseFloat($('#b_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));

            zb_letter = toAlpha(zb_alphabet).toUpperCase();

            if ($('#b_nextnum').val().length >= 1) {
                $('#b_nextnum').val(zb);
            }
            if ($('#b_nextnum_second_1').val().length >= 1) {
                $('#b_nextnum_second_1').val(zb);
            }
            if ($('#b_nextnum_third_1').val().length >= 1) {
                $('#b_nextnum_third_1').val(zb);
            }

            if ($('#b_nextnum_2').val().length >= 1) {
                $('#b_nextnum_2').val(zb_letter);
            }
            if ($('#b_nextnum_second_2').val().length >= 1) {
                $('#b_nextnum_second_2').val(zb_letter);
            }
            if ($('#b_nextnum_third_2').val().length >= 1) {
                $('#b_nextnum_third_2').val(zb_letter);
            }
        }
    }
});

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id "C_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object triggered by the mouse action.
 * @returns None
 */
$("#C_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
            console.log("I: " + zc);
        } else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#C_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    cellindex = i;
                    console.log("IF EVcENT");
                } else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVcENT");
                }
            }
        } else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            zc = 0;
            zc_letter = toAlpha(zc_alphabet).toUpperCase();
            if ($('#c_nextnum').val().length >= 1) {
                $('#c_nextnum').val(zc);
            }
            if ($('#c_nextnum_second_1').val().length >= 1) {
                $('#c_nextnum_second_1').val(zc);
            }
            if ($('#c_nextnum_third_1').val().length >= 1) {
                $('#c_nextnum_third_1').val(zc);
            }

            if ($('#c_nextnum_2').val().length >= 1) {
                $('#c_nextnum_2').val(zc_letter);
            }
            if ($('#c_nextnum_second_2').val().length >= 1) {
                $('#c_nextnum_second_2').val(zc_letter);
            }
            if ($('#c_nextnum_third_2').val().length >= 1) {
                $('#c_nextnum_third_2').val(zc_letter);
            }

        } else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                zc -= 1;
                zc_alphabet -= 1;
                zc_letter = toAlpha(zc_alphabet).toUpperCase();
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#c_nextnum').val(zc);
                console.log("IV: " + zc);

                if ($('#c_nextnum').val().length >= 1) {
                    $('#c_nextnum').val(zc);
                }
                if ($('#c_nextnum_second_1').val().length >= 1) {
                    $('#c_nextnum_second_1').val(zc);
                }
                if ($('#c_nextnum_third_1').val().length >= 1) {
                    $('#c_nextnum_third_1').val(zc);
                }

                if ($('#c_nextnum_2').val().length >= 1) {
                    $('#c_nextnum_2').val(zc_letter);
                }
                if ($('#c_nextnum_second_2').val().length >= 1) {
                    $('#c_nextnum_second_2').val(zc_letter);
                }
                if ($('#c_nextnum_third_2').val().length >= 1) {
                    $('#c_nextnum_third_2').val(zc_letter);
                }

                return
            }

        } else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#C_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#c_nextnum').val()) == $('#c_nextnum').val() && $.isNumeric($('#c_nextnum').val())) {
                zc = parseFloat($('#c_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zc);
                zc += 1;
                zc_alphabet += 1;
            } else {
                zc = parseFloat($('#c_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zc);
                zc += 1;
                zc_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var c_val = $('#c_val').val();
                if ($('#c_nextnum_2').val().length >= 1 && $('#c_nextnum_2').val().toLowerCase() != "nan") {
                    var c_val_num = $('#c_nextnum_2').val();
                } else if ($('#c_nextnum_3').val().length >= 1 && $('#c_nextnum_3').val().toLowerCase() != "nan") {
                    var c_val_num = $('#c_nextnum_3').val();
                } else if ($('#c_nextnum').val().length >= 1 && $('#c_nextnum').val().toLowerCase() != "nan") {
                    var c_val_num = $('#c_nextnum').val();
                } else {
                    var c_val_num = "";
                }

                if ($('#c_nextnum_second').val().length >= 1) {
                    var c_val_2 = "<br>" + $('#c_nextnum_second').val();
                } else {
                    var c_val_2 = "";
                }

                if ($('#c_nextnum_second_1').val().length >= 1 && $('#c_nextnum_second_1').val().toLowerCase() != "nan") {
                    var c_val_num2 = $('#c_nextnum_second_1').val();
                } else if ($('#c_nextnum_second_2').val().length >= 1 && $('#c_nextnum_second_2').val().toLowerCase() != "nan") {
                    var c_val_num2 = $('#c_nextnum_second_2').val();
                } else if ($('#c_nextnum_second_3').val().length >= 1 && $('#c_nextnum_second_3').val().toLowerCase() != "nan") {
                    var c_val_num2 = $('#c_nextnum_second_3').val();
                } else {
                    var c_val_num2 = "";
                }
                if ($('#c_nextnum_third').val().length >= 1) {
                    var c_val_3 = "<br>" + $('#c_nextnum_third').val();
                } else {
                    var c_val_3 = "";
                }
                if ($('#c_nextnum_third_1').val().length >= 1 && $('#c_nextnum_third_1').val().toLowerCase() != "nan") {
                    var c_val_num3 = $('#c_nextnum_third_1').val();
                } else if ($('#c_nextnum_third_2').val().length >= 1 && $('#c_nextnum_third_2').val().toLowerCase() != "nan") {
                    var c_val_num3 = $('#c_nextnum_third_2').val();
                } else if ($('#c_nextnum_third_3').val().length >= 1 && $('#c_nextnum_third_3').val().toLowerCase() != "nan") {
                    var c_val_num3 = $('#c_nextnum_third_3').val();
                } else {
                    var c_val_num3 = "";
                }
                $(this).find('label').html(c_val + c_val_num + c_val_2 + c_val_num2 + c_val_3 + c_val_num3);
                var c_rooms = $('#c_rooms');
            }
            $(this).parent().addClass("row");
            var rows = $(this).parent().parent().children("tr");
            for (var i = 0; i < rows.length; i++) {
                var tds = $(rows[i]).children("label");
                Vc = "";
                for (var j = 0; j <= cellindex; j++) {
                    var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                }
                if ($(rows[i]).hasClass("row")) {
                    $(this).parent().removeClass("row");
                    break;
                }
            }
            Vc = $('#c_val').val() + parseFloat($('#c_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));

            zc_letter = toAlpha(zc_alphabet).toUpperCase();

            if ($('#c_nextnum').val().length >= 1) {
                $('#c_nextnum').val(zc);
            }
            if ($('#c_nextnum_second_1').val().length >= 1) {
                $('#c_nextnum_second_1').val(zc);
            }
            if ($('#c_nextnum_third_1').val().length >= 1) {
                $('#c_nextnum_third_1').val(zc);
            }

            if ($('#c_nextnum_2').val().length >= 1) {
                $('#c_nextnum_2').val(zc_letter);
            }
            if ($('#c_nextnum_second_2').val().length >= 1) {
                $('#c_nextnum_second_2').val(zc_letter);
            }
            if ($('#c_nextnum_third_2').val().length >= 1) {
                $('#c_nextnum_third_2').val(zc_letter);
            }
        }
    }
});

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id "D_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object triggered by the mouseover, mouseleave, or click event.
 * @returns None
 */
$("#D_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
            console.log("I: " + zd);
        } else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#D_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    cellindex = i;
                    console.log("IF EVdENT");
                } else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVdENT");
                }
            }
        } else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            zd = 0;
            zd_letter = toAlpha(zd_alphabet).toUpperCase();
            if ($('#d_nextnum').val().length >= 1) {
                $('#d_nextnum').val(zd);
            }
            if ($('#d_nextnum_second_1').val().length >= 1) {
                $('#d_nextnum_second_1').val(zd);
            }
            if ($('#d_nextnum_third_1').val().length >= 1) {
                $('#d_nextnum_third_1').val(zd);
            }

            if ($('#d_nextnum_2').val().length >= 1) {
                $('#d_nextnum_2').val(zd_letter);
            }
            if ($('#d_nextnum_second_2').val().length >= 1) {
                $('#d_nextnum_second_2').val(zd_letter);
            }
            if ($('#d_nextnum_third_2').val().length >= 1) {
                $('#d_nextnum_third_2').val(zd_letter);
            }

        } else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                zd -= 1;
                zd_alphabet -= 1;
                zd_letter = toAlpha(zd_alphabet).toUpperCase();
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#d_nextnum').val(zd);
                console.log("IV: " + zd);

                if ($('#d_nextnum').val().length >= 1) {
                    $('#d_nextnum').val(zd);
                }
                if ($('#d_nextnum_second_1').val().length >= 1) {
                    $('#d_nextnum_second_1').val(zd);
                }
                if ($('#d_nextnum_third_1').val().length >= 1) {
                    $('#d_nextnum_third_1').val(zd);
                }

                if ($('#d_nextnum_2').val().length >= 1) {
                    $('#d_nextnum_2').val(zd_letter);
                }
                if ($('#d_nextnum_second_2').val().length >= 1) {
                    $('#d_nextnum_second_2').val(zd_letter);
                }
                if ($('#d_nextnum_third_2').val().length >= 1) {
                    $('#d_nextnum_third_2').val(zd_letter);
                }
                return
            }
        } else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#D_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#d_nextnum').val()) == $('#d_nextnum').val() && $.isNumeric($('#d_nextnum').val())) {
                zd = parseFloat($('#d_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zd);
                zd += 1;
                zd_alphabet += 1;
            } else {
                zd = parseFloat($('#d_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zd);
                zd += 1;
                zd_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var d_val = $('#d_val').val();
                if ($('#d_nextnum_2').val().length >= 1 && $('#d_nextnum_2').val().toLowerCase() != "nan") {
                    var d_val_num = $('#d_nextnum_2').val();
                } else if ($('#d_nextnum_3').val().length >= 1 && $('#d_nextnum_3').val().toLowerCase() != "nan") {
                    var d_val_num = $('#d_nextnum_3').val();
                } else if ($('#d_nextnum').val().length >= 1 && $('#d_nextnum').val().toLowerCase() != "nan") {
                    var d_val_num = $('#d_nextnum').val();
                } else {
                    var d_val_num = "";
                }

                if ($('#d_nextnum_second').val().length >= 1) {
                    var d_val_2 = "<br>" + $('#d_nextnum_second').val();
                } else {
                    var d_val_2 = "";
                }

                if ($('#d_nextnum_second_1').val().length >= 1 && $('#d_nextnum_second_1').val().toLowerCase() != "nan") {
                    var d_val_num2 = $('#d_nextnum_second_1').val();
                } else if ($('#d_nextnum_second_2').val().length >= 1 && $('#d_nextnum_second_2').val().toLowerCase() != "nan") {
                    var d_val_num2 = $('#d_nextnum_second_2').val();
                } else if ($('#d_nextnum_second_3').val().length >= 1 && $('#d_nextnum_second_3').val().toLowerCase() != "nan") {
                    var d_val_num2 = $('#d_nextnum_second_3').val();
                } else {
                    var d_val_num2 = "";
                }
                if ($('#d_nextnum_third').val().length >= 1) {
                    var d_val_3 = "<br>" + $('#d_nextnum_third').val();
                } else {
                    var d_val_3 = "";
                }
                if ($('#d_nextnum_third_1').val().length >= 1 && $('#d_nextnum_third_1').val().toLowerCase() != "nan") {
                    var d_val_num3 = $('#d_nextnum_third_1').val();
                } else if ($('#d_nextnum_third_2').val().length >= 1 && $('#d_nextnum_third_2').val().toLowerCase() != "nan") {
                    var d_val_num3 = $('#d_nextnum_third_2').val();
                } else if ($('#d_nextnum_third_3').val().length >= 1 && $('#d_nextnum_third_3').val().toLowerCase() != "nan") {
                    var d_val_num3 = $('#d_nextnum_third_3').val();
                } else {
                    var d_val_num3 = "";
                }
                $(this).find('label').html(d_val + d_val_num + d_val_2 + d_val_num2 + d_val_3 + d_val_num3);
                var d_rooms = $('#d_rooms');
            }
            $(this).parent().addClass("row");
            var rows = $(this).parent().parent().children("tr");
            for (var i = 0; i < rows.length; i++) {
                var tds = $(rows[i]).children("label");
                Vd = "";
                for (var j = 0; j <= cellindex; j++) {
                    var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                }
                if ($(rows[i]).hasClass("row")) {
                    $(this).parent().removeClass("row");
                    break;
                }
            }
            Vd = $('#d_val').val() + parseFloat($('#d_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));

            zd_letter = toAlpha(zd_alphabet).toUpperCase();

            if ($('#d_nextnum').val().length >= 1) {
                $('#d_nextnum').val(zd);
            }
            if ($('#d_nextnum_second_1').val().length >= 1) {
                $('#d_nextnum_second_1').val(zd);
            }
            if ($('#d_nextnum_third_1').val().length >= 1) {
                $('#d_nextnum_third_1').val(zd);
            }

            if ($('#d_nextnum_2').val().length >= 1) {
                $('#d_nextnum_2').val(zd_letter);
            }
            if ($('#d_nextnum_second_2').val().length >= 1) {
                $('#d_nextnum_second_2').val(zd_letter);
            }
            if ($('#d_nextnum_third_2').val().length >= 1) {
                $('#d_nextnum_third_2').val(zd_letter);
            }
        }
    }
});

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id "E_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object.
 * @returns None
 */
$("#E_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
            console.log("I: " + ze);
        } else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#E_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    cellindex = i;
                    console.log("IF EVeENT");
                } else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVeENT");
                }
            }
        } else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            ze = 0;
            ze_letter = toAlpha(ze_alphabet).toUpperCase();
            if ($('#e_nextnum').val().length >= 1) {
                $('#e_nextnum').val(ze);
            }
            if ($('#e_nextnum_second_1').val().length >= 1) {
                $('#e_nextnum_second_1').val(ze);
            }
            if ($('#e_nextnum_third_1').val().length >= 1) {
                $('#e_nextnum_third_1').val(ze);
            }

            if ($('#e_nextnum_2').val().length >= 1) {
                $('#e_nextnum_2').val(ze_letter);
            }
            if ($('#e_nextnum_second_2').val().length >= 1) {
                $('#e_nextnum_second_2').val(ze_letter);
            }
            if ($('#e_nextnum_third_2').val().length >= 1) {
                $('#e_nextnum_third_2').val(ze_letter);
            }

        } else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                ze -= 1;
                ze_alphabet -= 1;
                ze_letter = toAlpha(ze_alphabet).toUpperCase();
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#e_nextnum').val(ze);
                console.log("IV: " + ze);

                if ($('#e_nextnum').val().length >= 1) {
                    $('#e_nextnum').val(ze);
                }
                if ($('#e_nextnum_second_1').val().length >= 1) {
                    $('#e_nextnum_second_1').val(ze);
                }
                if ($('#e_nextnum_third_1').val().length >= 1) {
                    $('#e_nextnum_third_1').val(ze);
                }

                if ($('#e_nextnum_2').val().length >= 1) {
                    $('#e_nextnum_2').val(ze_letter);
                }
                if ($('#e_nextnum_second_2').val().length >= 1) {
                    $('#e_nextnum_second_2').val(ze_letter);
                }
                if ($('#e_nextnum_third_2').val().length >= 1) {
                    $('#e_nextnum_third_2').val(ze_letter);
                }
                return
            }
        } else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#E_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#e_nextnum').val()) == $('#e_nextnum').val() && $.isNumeric($('#e_nextnum').val())) {
                ze = parseFloat($('#e_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + ze);
                ze += 1;
                ze_alphabet += 1;
            } else {
                ze = parseFloat($('#e_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + ze);
                ze += 1;
                ze_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var e_val = $('#e_val').val();
                if ($('#e_nextnum_2').val().length >= 1 && $('#e_nextnum_2').val().toLowerCase() != "nan") {
                    var e_val_num = $('#e_nextnum_2').val();
                } else if ($('#e_nextnum_3').val().length >= 1 && $('#e_nextnum_3').val().toLowerCase() != "nan") {
                    var e_val_num = $('#e_nextnum_3').val();
                } else if ($('#e_nextnum').val().length >= 1 && $('#e_nextnum').val().toLowerCase() != "nan") {
                    var e_val_num = $('#e_nextnum').val();
                } else {
                    var e_val_num = "";
                }

                if ($('#e_nextnum_second').val().length >= 1) {
                    var e_val_2 = "<br>" + $('#e_nextnum_second').val();
                } else {
                    var e_val_2 = "";
                }

                if ($('#e_nextnum_second_1').val().length >= 1 && $('#e_nextnum_second_1').val().toLowerCase() != "nan") {
                    var e_val_num2 = $('#e_nextnum_second_1').val();
                } else if ($('#e_nextnum_second_2').val().length >= 1 && $('#e_nextnum_second_2').val().toLowerCase() != "nan") {
                    var e_val_num2 = $('#e_nextnum_second_2').val();
                } else if ($('#e_nextnum_second_3').val().length >= 1 && $('#e_nextnum_second_3').val().toLowerCase() != "nan") {
                    var e_val_num2 = $('#e_nextnum_second_3').val();
                } else {
                    var e_val_num2 = "";
                }
                if ($('#e_nextnum_third').val().length >= 1) {
                    var e_val_3 = "<br>" + $('#e_nextnum_third').val();
                } else {
                    var e_val_3 = "";
                }
                if ($('#e_nextnum_third_1').val().length >= 1 && $('#e_nextnum_third_1').val().toLowerCase() != "nan") {
                    var e_val_num3 = $('#e_nextnum_third_1').val();
                } else if ($('#e_nextnum_third_2').val().length >= 1 && $('#e_nextnum_third_2').val().toLowerCase() != "nan") {
                    var e_val_num3 = $('#e_nextnum_third_2').val();
                } else if ($('#e_nextnum_third_3').val().length >= 1 && $('#e_nextnum_third_3').val().toLowerCase() != "nan") {
                    var e_val_num3 = $('#e_nextnum_third_3').val();
                } else {
                    var e_val_num3 = "";
                }
                $(this).find('label').html(e_val + e_val_num + e_val_2 + e_val_num2 + e_val_3 + e_val_num3);
                var e_rooms = $('#e_rooms');
            }
            $(this).parent().addClass("row");
            var rows = $(this).parent().parent().children("tr");
            for (var i = 0; i < rows.length; i++) {
                var tds = $(rows[i]).children("label");
                Ve = "";
                for (var j = 0; j <= cellindex; j++) {
                    var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                }
                if ($(rows[i]).hasClass("row")) {
                    $(this).parent().removeClass("row");
                    break;
                }
            }
            Ve = $('#e_val').val() + parseFloat($('#e_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));

            ze_letter = toAlpha(ze_alphabet).toUpperCase();

            if ($('#e_nextnum').val().length >= 1) {
                $('#e_nextnum').val(ze);
            }
            if ($('#e_nextnum_second_1').val().length >= 1) {
                $('#e_nextnum_second_1').val(ze);
            }
            if ($('#e_nextnum_third_1').val().length >= 1) {
                $('#e_nextnum_third_1').val(ze);
            }

            if ($('#e_nextnum_2').val().length >= 1) {
                $('#e_nextnum_2').val(ze_letter);
            }
            if ($('#e_nextnum_second_2').val().length >= 1) {
                $('#e_nextnum_second_2').val(ze_letter);
            }
            if ($('#e_nextnum_third_2').val().length >= 1) {
                $('#e_nextnum_third_2').val(ze_letter);
            }
        }
    }
});

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id starting with "F_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object triggered by the mouse action.
 * @returns None
 */
$("#F_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
            console.log("I: " + zf);
        } else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#F_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    cellindex = i;
                    console.log("IF EVfENT");
                } else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVfENT");
                }
            }
        } else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            zf = 0;
            zf_letter = toAlpha(zf_alphabet).toUpperCase();
            if ($('#f_nextnum').val().length >= 1) {
                $('#f_nextnum').val(zf);
            }
            if ($('#f_nextnum_second_1').val().length >= 1) {
                $('#f_nextnum_second_1').val(zf);
            }
            if ($('#f_nextnum_third_1').val().length >= 1) {
                $('#f_nextnum_third_1').val(zf);
            }

            if ($('#f_nextnum_2').val().length >= 1) {
                $('#f_nextnum_2').val(zf_letter);
            }
            if ($('#f_nextnum_second_2').val().length >= 1) {
                $('#f_nextnum_second_2').val(zf_letter);
            }
            if ($('#f_nextnum_third_2').val().length >= 1) {
                $('#f_nextnum_third_2').val(zf_letter);
            }

        } else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                zf -= 1;
                zf_alphabet -= 1;
                zf_letter = toAlpha(zf_alphabet).toUpperCase();
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#f_nextnum').val(zf);
                console.log("IV: " + zf);

                if ($('#f_nextnum').val().length >= 1) {
                    $('#f_nextnum').val(zf);
                }
                if ($('#f_nextnum_second_1').val().length >= 1) {
                    $('#f_nextnum_second_1').val(zf);
                }
                if ($('#f_nextnum_third_1').val().length >= 1) {
                    $('#f_nextnum_third_1').val(zf);
                }

                if ($('#f_nextnum_2').val().length >= 1) {
                    $('#f_nextnum_2').val(zf_letter);
                }
                if ($('#f_nextnum_second_2').val().length >= 1) {
                    $('#f_nextnum_second_2').val(zf_letter);
                }
                if ($('#f_nextnum_third_2').val().length >= 1) {
                    $('#f_nextnum_third_2').val(zf_letter);
                }
            }
        } else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#F_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#f_nextnum').val()) == $('#f_nextnum').val() && $.isNumeric($('#f_nextnum').val())) {
                zf = parseFloat($('#f_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zf);
                zf += 1;
                zf_alphabet += 1;
            } else {
                zf = parseFloat($('#f_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zf);
                zf += 1;
                zf_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var f_val = $('#f_val').val();
                if ($('#f_nextnum_2').val().length >= 1 && $('#f_nextnum_2').val().toLowerCase() != "nan") {
                    var f_val_num = $('#f_nextnum_2').val();
                } else if ($('#f_nextnum_3').val().length >= 1 && $('#f_nextnum_3').val().toLowerCase() != "nan") {
                    var f_val_num = $('#f_nextnum_3').val();
                } else if ($('#f_nextnum').val().length >= 1 && $('#f_nextnum').val().toLowerCase() != "nan") {
                    var f_val_num = $('#f_nextnum').val();
                } else {
                    var f_val_num = "";
                }

                if ($('#f_nextnum_second').val().length >= 1) {
                    var f_val_2 = "<br>" + $('#f_nextnum_second').val();
                } else {
                    var f_val_2 = "";
                }

                if ($('#f_nextnum_second_1').val().length >= 1 && $('#f_nextnum_second_1').val().toLowerCase() != "nan") {
                    var f_val_num2 = $('#f_nextnum_second_1').val();
                } else if ($('#f_nextnum_second_2').val().length >= 1 && $('#f_nextnum_second_2').val().toLowerCase() != "nan") {
                    var f_val_num2 = $('#f_nextnum_second_2').val();
                } else if ($('#f_nextnum_second_3').val().length >= 1 && $('#f_nextnum_second_3').val().toLowerCase() != "nan") {
                    var f_val_num2 = $('#f_nextnum_second_3').val();
                } else {
                    var f_val_num2 = "";
                }
                if ($('#f_nextnum_third').val().length >= 1) {
                    var f_val_3 = "<br>" + $('#f_nextnum_third').val();
                } else {
                    var f_val_3 = "";
                }
                if ($('#f_nextnum_third_1').val().length >= 1 && $('#f_nextnum_third_1').val().toLowerCase() != "nan") {
                    var f_val_num3 = $('#f_nextnum_third_1').val();
                } else if ($('#f_nextnum_third_2').val().length >= 1 && $('#f_nextnum_third_2').val().toLowerCase() != "nan") {
                    var f_val_num3 = $('#f_nextnum_third_2').val();
                } else if ($('#f_nextnum_third_3').val().length >= 1 && $('#f_nextnum_third_3').val().toLowerCase() != "nan") {
                    var f_val_num3 = $('#f_nextnum_third_3').val();
                } else {
                    var f_val_num3 = "";
                }
                $(this).find('label').html(f_val + f_val_num + f_val_2 + f_val_num2 + f_val_3 + f_val_num3);
                var f_rooms = $('#f_rooms');
            }
            $(this).parent().addClass("row");
            var rows = $(this).parent().parent().children("tr");
            for (var i = 0; i < rows.length; i++) {
                var tds = $(rows[i]).children("label");
                Vf = "";
                for (var j = 0; j <= cellindex; j++) {
                    var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                }
                if ($(rows[i]).hasClass("row")) {
                    $(this).parent().removeClass("row");
                    break;
                }
            }
            Vf = $('#f_val').val() + parseFloat($('#f_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));

            zf_letter = toAlpha(zf_alphabet).toUpperCase();

            if ($('#f_nextnum').val().length >= 1) {
                $('#f_nextnum').val(zf);
            }
            if ($('#f_nextnum_second_1').val().length >= 1) {
                $('#f_nextnum_second_1').val(zf);
            }
            if ($('#f_nextnum_third_1').val().length >= 1) {
                $('#f_nextnum_third_1').val(zf);
            }

            if ($('#f_nextnum_2').val().length >= 1) {
                $('#f_nextnum_2').val(zf_letter);
            }
            if ($('#f_nextnum_second_2').val().length >= 1) {
                $('#f_nextnum_second_2').val(zf_letter);
            }
            if ($('#f_nextnum_third_2').val().length >= 1) {
                $('#f_nextnum_third_2').val(zf_letter);
            }
        }
    }
});

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id "G_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object.
 * @returns None
 */
$("#G_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
            console.log("I: " + zg);
        } else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#G_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    cellindex = i;
                    console.log("IF EVgENT");
                } else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVgENT");
                }
            }
        } else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            zg = 0;
            zg_letter = toAlpha(zg_alphabet).toUpperCase();
            if ($('#g_nextnum').val().length >= 1) {
                $('#g_nextnum').val(zg);
            }
            if ($('#g_nextnum_second_1').val().length >= 1) {
                $('#g_nextnum_second_1').val(zg);
            }
            if ($('#g_nextnum_third_1').val().length >= 1) {
                $('#g_nextnum_third_1').val(zg);
            }

            if ($('#g_nextnum_2').val().length >= 1) {
                $('#g_nextnum_2').val(zg_letter);
            }
            if ($('#g_nextnum_second_2').val().length >= 1) {
                $('#g_nextnum_second_2').val(zg_letter);
            }
            if ($('#g_nextnum_third_2').val().length >= 1) {
                $('#g_nextnum_third_2').val(zg_letter);
            }

        } else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                zg -= 1;
                zg_alphabet -= 1;
                zg_letter = toAlpha(zg_alphabet).toUpperCase();
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#g_nextnum').val(zg);
                console.log("IV: " + zg);

                if ($('#g_nextnum').val().length >= 1) {
                    $('#g_nextnum').val(zg);
                }
                if ($('#g_nextnum_second_1').val().length >= 1) {
                    $('#g_nextnum_second_1').val(zg);
                }
                if ($('#g_nextnum_third_1').val().length >= 1) {
                    $('#g_nextnum_third_1').val(zg);
                }

                if ($('#g_nextnum_2').val().length >= 1) {
                    $('#g_nextnum_2').val(zg_letter);
                }
                if ($('#g_nextnum_second_2').val().length >= 1) {
                    $('#g_nextnum_second_2').val(zg_letter);
                }
                if ($('#g_nextnum_third_2').val().length >= 1) {
                    $('#g_nextnum_third_2').val(zg_letter);
                }
            }
        } else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#G_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#g_nextnum').val()) == $('#g_nextnum').val() && $.isNumeric($('#g_nextnum').val())) {
                zg = parseFloat($('#g_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zg);
                zg += 1;
                zg_alphabet += 1;
            } else {
                zg = parseFloat($('#g_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zg);
                zg += 1;
                zg_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var g_val = $('#g_val').val();
                if ($('#g_nextnum_2').val().length >= 1 && $('#g_nextnum_2').val().toLowerCase() != "nan") {
                    var g_val_num = $('#g_nextnum_2').val();
                } else if ($('#g_nextnum_3').val().length >= 1 && $('#g_nextnum_3').val().toLowerCase() != "nan") {
                    var g_val_num = $('#g_nextnum_3').val();
                } else if ($('#g_nextnum').val().length >= 1 && $('#g_nextnum').val().toLowerCase() != "nan") {
                    var g_val_num = $('#g_nextnum').val();
                } else {
                    var g_val_num = "";
                }

                if ($('#g_nextnum_second').val().length >= 1) {
                    var g_val_2 = "<br>" + $('#g_nextnum_second').val();
                } else {
                    var g_val_2 = "";
                }

                if ($('#g_nextnum_second_1').val().length >= 1 && $('#g_nextnum_second_1').val().toLowerCase() != "nan") {
                    var g_val_num2 = $('#g_nextnum_second_1').val();
                } else if ($('#g_nextnum_second_2').val().length >= 1 && $('#g_nextnum_second_2').val().toLowerCase() != "nan") {
                    var g_val_num2 = $('#g_nextnum_second_2').val();
                } else if ($('#g_nextnum_second_3').val().length >= 1 && $('#g_nextnum_second_3').val().toLowerCase() != "nan") {
                    var g_val_num2 = $('#g_nextnum_second_3').val();
                } else {
                    var g_val_num2 = "";
                }
                if ($('#g_nextnum_third').val().length >= 1) {
                    var g_val_3 = "<br>" + $('#g_nextnum_third').val();
                } else {
                    var g_val_3 = "";
                }
                if ($('#g_nextnum_third_1').val().length >= 1 && $('#g_nextnum_third_1').val().toLowerCase() != "nan") {
                    var g_val_num3 = $('#g_nextnum_third_1').val();
                } else if ($('#g_nextnum_third_2').val().length >= 1 && $('#g_nextnum_third_2').val().toLowerCase() != "nan") {
                    var g_val_num3 = $('#g_nextnum_third_2').val();
                } else if ($('#g_nextnum_third_3').val().length >= 1 && $('#g_nextnum_third_3').val().toLowerCase() != "nan") {
                    var g_val_num3 = $('#g_nextnum_third_3').val();
                } else {
                    var g_val_num3 = "";
                }
                $(this).find('label').html(g_val + g_val_num + g_val_2 + g_val_num2 + g_val_3 + g_val_num3);
                var g_rooms = $('#g_rooms');
            }
            $(this).parent().addClass("row");
            var rows = $(this).parent().parent().children("tr");
            for (var i = 0; i < rows.length; i++) {
                var tds = $(rows[i]).children("label");
                Vg = "";
                for (var j = 0; j <= cellindex; j++) {
                    var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                }
                if ($(rows[i]).hasClass("row")) {
                    $(this).parent().removeClass("row");
                    break;
                }
            }
            Vg = $('#g_val').val() + parseFloat($('#g_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));

            zg_letter = toAlpha(zg_alphabet).toUpperCase();

            if ($('#g_nextnum').val().length >= 1) {
                $('#g_nextnum').val(zg);
            }
            if ($('#g_nextnum_second_1').val().length >= 1) {
                $('#g_nextnum_second_1').val(zg);
            }
            if ($('#g_nextnum_third_1').val().length >= 1) {
                $('#g_nextnum_third_1').val(zg);
            }

            if ($('#g_nextnum_2').val().length >= 1) {
                $('#g_nextnum_2').val(zg_letter);
            }
            if ($('#g_nextnum_second_2').val().length >= 1) {
                $('#g_nextnum_second_2').val(zg_letter);
            }
            if ($('#g_nextnum_third_2').val().length >= 1) {
                $('#g_nextnum_third_2').val(zg_letter);
            }
        }
    }
});

/**
 * Event handler for mouseover, mouseleave, and click events on table cells with id "H_".
 * Handles various actions based on the event type and cell properties.
 * @param {Event} e - The event object triggered by the mouse action.
 * @returns None
 */
$("#H_").delegate('td', 'mouseover mouseleave click', function(e) {
    var cellindex = 0;
    let rooms = "";
    e.stopImmediatePropagation();
    if (e.type == 'click') {
        if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
            $(this).removeClass("nowork");
            console.log("I: " + zh);
        } else if ($('input#pohjakierros').is(':checked')) {
            console.log("Pohja checkattu");
            var cells = $(this).parent().children("td");
            var tds = $('#H_ .table_size_chooser td').removeClass("SizeChooser-clicked")
            for (var i = 0; i < cells.length; i++) {
                if ($(this).find('label').text().length > 1) {
                    $(this).removeClass("nowork");
                    $(this).find('label').text("");
                    cellindex = i;
                    console.log("IF EVhENT");
                } else {
                    $(this).addClass("nowork");
                    $(this).removeClass("checked");
                    $(this).find('label').val("");
                    console.log("ELSE EVhENT");
                }
            }
        } else if ($(this).hasClass("noindex") || $(this).parent().hasClass("noindex")) {
            zh = 0;
            zh_letter = toAlpha(zh_alphabet).toUpperCase();
            if ($('#h_nextnum').val().length >= 1) {
                $('#h_nextnum').val(zh);
            }
            if ($('#h_nextnum_second_1').val().length >= 1) {
                $('#h_nextnum_second_1').val(zh);
            }
            if ($('#h_nextnum_third_1').val().length >= 1) {
                $('#h_nextnum_third_1').val(zh);
            }

            if ($('#h_nextnum_2').val().length >= 1) {
                $('#h_nextnum_2').val(zh_letter);
            }
            if ($('#h_nextnum_second_2').val().length >= 1) {
                $('#h_nextnum_second_2').val(zh_letter);
            }
            if ($('#h_nextnum_third_2').val().length >= 1) {
                $('#h_nextnum_third_2').val(zh_letter);
            }

        } else if ($(this).hasClass("checked") || $(this).hasClass("nowork")) {
            if ($(this).hasClass("nowork")) {
                $(this).removeClass("nowork");
                return
            }
            if ($(this).hasClass("checked")) {
                $(this).removeClass("checked");
                zh -= 1;
                zh_alphabet -= 1;
                zh_letter = toAlpha(zh_alphabet).toUpperCase();
                $(this).find('input').val("");
                $(this).find('label').text("");
                $('#h_nextnum').val(zh);
                console.log("IV: " + zh);

                if ($('#h_nextnum').val().length >= 1) {
                    $('#h_nextnum').val(zh);
                }
                if ($('#h_nextnum_second_1').val().length >= 1) {
                    $('#h_nextnum_second_1').val(zh);
                }
                if ($('#h_nextnum_third_1').val().length >= 1) {
                    $('#h_nextnum_third_1').val(zh);
                }

                if ($('#h_nextnum_2').val().length >= 1) {
                    $('#h_nextnum_2').val(zh_letter);
                }
                if ($('#h_nextnum_second_2').val().length >= 1) {
                    $('#h_nextnum_second_2').val(zh_letter);
                }
                if ($('#h_nextnum_third_2').val().length >= 1) {
                    $('#h_nextnum_third_2').val(zh_letter);
                }
            }
        } else {
            $(this).addClass("checked");
            var cells = $(this).parent().children("td");
            var tds = $('#H_ .table_size_chooser td').removeClass("SizeChooser-clicked");
            if (Math.floor($('#h_nextnum').val()) == $('#h_nextnum').val() && $.isNumeric($('#h_nextnum').val())) {
                zh = parseFloat($('#h_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zh);
                zh += 1;
                zh_alphabet += 1;
            } else {
                zh = parseFloat($('#h_nextnum').val().replace(/\D/g, ''));
                console.log("Z::" + zh);
                zh += 1;
                zh_alphabet += 1;
            }
            for (var i = 0; i < cells.length; i++) {
                if ($(cells[i]).hasClass("cell")) {
                    $(this).removeClass("cell");
                    cellindex = i;
                    break;
                }
                var h_val = $('#h_val').val();
                if ($('#h_nextnum_2').val().length >= 1 && $('#h_nextnum_2').val().toLowerCase() != "nan") {
                    var h_val_num = $('#h_nextnum_2').val();
                } else if ($('#h_nextnum_3').val().length >= 1 && $('#h_nextnum_3').val().toLowerCase() != "nan") {
                    var h_val_num = $('#h_nextnum_3').val();
                } else if ($('#h_nextnum').val().length >= 1 && $('#h_nextnum').val().toLowerCase() != "nan") {
                    var h_val_num = $('#h_nextnum').val();
                } else {
                    var h_val_num = "";
                }

                if ($('#h_nextnum_second').val().length >= 1) {
                    var h_val_2 = "<br>" + $('#h_nextnum_second').val();
                } else {
                    var h_val_2 = "";
                }

                if ($('#h_nextnum_second_1').val().length >= 1 && $('#h_nextnum_second_1').val().toLowerCase() != "nan") {
                    var h_val_num2 = $('#h_nextnum_second_1').val();
                } else if ($('#h_nextnum_second_2').val().length >= 1 && $('#h_nextnum_second_2').val().toLowerCase() != "nan") {
                    var h_val_num2 = $('#h_nextnum_second_2').val();
                } else if ($('#h_nextnum_second_3').val().length >= 1 && $('#h_nextnum_second_3').val().toLowerCase() != "nan") {
                    var h_val_num2 = $('#h_nextnum_second_3').val();
                } else {
                    var h_val_num2 = "";
                }
                if ($('#h_nextnum_third').val().length >= 1) {
                    var h_val_3 = "<br>" + $('#h_nextnum_third').val();
                } else {
                    var h_val_3 = "";
                }
                if ($('#h_nextnum_third_1').val().length >= 1 && $('#h_nextnum_third_1').val().toLowerCase() != "nan") {
                    var h_val_num3 = $('#h_nextnum_third_1').val();
                } else if ($('#h_nextnum_third_2').val().length >= 1 && $('#h_nextnum_third_2').val().toLowerCase() != "nan") {
                    var h_val_num3 = $('#h_nextnum_third_2').val();
                } else if ($('#h_nextnum_third_3').val().length >= 1 && $('#h_nextnum_third_3').val().toLowerCase() != "nan") {
                    var h_val_num3 = $('#h_nextnum_third_3').val();
                } else {
                    var h_val_num3 = "";
                }
                $(this).find('label').html(h_val + h_val_num + h_val_2 + h_val_num2 + h_val_3 + h_val_num3);
                var h_rooms = $('#h_rooms');
            }
            $(this).parent().addClass("row");
            var rows = $(this).parent().parent().children("tr");
            for (var i = 0; i < rows.length; i++) {
                var tds = $(rows[i]).children("label");
                Vh = "";
                for (var j = 0; j <= cellindex; j++) {
                    var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
                }
                if ($(rows[i]).hasClass("row")) {
                    $(this).parent().removeClass("row");
                    break;
                }
            }
            Vh = $('#h_val').val() + parseFloat($('#h_nextnum').val().replace(/\D/g, ''));
            posX = $(this).parent().data("no");
            posY = $(this).index();

            let customers = [];
            $(this).closest(".per50").find(".customer_contacts .contact").each(function() {
                let name = $(this).find(".customer_name"),
                    phone = $(this).find(".customer_phone"),
                    email = $(this).find(".customer_email"),
                    type = $(this).find(".customer_type");
                if (name.val()) {
                    customers.push({
                        name: name.val(),
                        phone: phone.val(),
                        email: email.val(),
                        type: type.val(),
                    });
                    if (!customer_contacts_list.find(v => v.name === name.val())) {
                        customer_contacts_list.push({
                            name: name.val(),
                            phone: phone.val(),
                            email: email.val(),
                            type: type.val(),
                        });
                    }
                    $("#customer_contacts_list").empty();
                    customer_contacts_list.forEach(v => {
                        $("#customer_contacts_list").append(`<option value="${v.name}">${v.name}</option>`)
                    });
                }
                name.val("");
                phone.val("");
                email.val("");
                type[0].selectedIndex = 0;
            });
            $(this).closest(".per50").find(".customer_contacts .contact:not(:first-child)").remove();
            $(this).find('label').attr("data-customer", JSON.stringify(customers));

            zh_letter = toAlpha(zh_alphabet).toUpperCase();

            if ($('#h_nextnum').val().length >= 1) {
                $('#h_nextnum').val(zh);
            }
            if ($('#h_nextnum_second_1').val().length >= 1) {
                $('#h_nextnum_second_1').val(zh);
            }
            if ($('#h_nextnum_third_1').val().length >= 1) {
                $('#h_nextnum_third_1').val(zh);
            }

            if ($('#h_nextnum_2').val().length >= 1) {
                $('#h_nextnum_2').val(zh_letter);
            }
            if ($('#h_nextnum_second_2').val().length >= 1) {
                $('#h_nextnum_second_2').val(zh_letter);
            }
            if ($('#h_nextnum_third_2').val().length >= 1) {
                $('#h_nextnum_third_2').val(zh_letter);
            }
        }
    }
});



/**
 * Sets up event listeners for various toggles and actions on a table preview element.
 * Toggles classes to show/hide different parts of the table preview.
 * Generates a table based on the row and column counts and populates it with editable cells.
 * @returns None
 */
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
/**
 * Processes a string by creating a temporary div element, setting its innerHTML to the trimmed string,
 * and then returning the formatted HTML content.
 * @param {string} str - The input string to be processed as HTML content.
 * @returns {string} The formatted HTML content after processing.
 */
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
//   const _O_ = [];

//   $(".rappu_more").click(function() {
//     setTimeout(console.log("wait"), 1000);
//     $("#A_").delegate('td', 'mouseover mouseleave click', function(e) {
//         var cellindex = 0;
//         let rooms = "";

//         if (e.type == 'click') {
//             if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
//                 $(this).removeClass("nowork");
//             } else if ($('input#pohjakierros').is(':checked')) {
//                 console.log("Pohja checkattu");


//                 var cells = $(this).parent().children("td");
//                 var tds = $('#A_ .table_sizae_chooser td').removeClass("SizaeChooser-clicked")

//                 for (var i = 0; i < cells.length; i++) {
//                     if ($(this).find('label').text().length > 1) {
//                         $(this).removeClass("nowork");
//                         $(this).find('label').text("");
//                         cellindex = i;
//                     } else {
//                         $(this).addClass("nowork"); $(this).removeClass("checked");
//                         $(this).find('label').val("");
//                     }

//                 }

//             } else if ($(this).hasClass("noindex")) {
//                 za -= 0;
//                 $('#a_nextnum').val(za);
//             } else if ($(this).find('input').prop('checked') == false) {
//                 za -= 1;
//                 $(this).find('input').val("");
//                 $(this).find('label').text("");
//                 $('#a_nextnum').val(za);
//             } else {
//                 $(this).addClass("checked");
//                 var cells = $(this).parent().children("td");
//                 var tds = $('#A_ .table_sizae_chooser td').removeClass("SizaeChooser-clicked")
//                 za = parseFloat($('#a_nextnum').val().replace(/\D/g,''));
//                 za += 1;
//                 for (var i = 0; i < cells.length; i++) {
//                     if ($(cells[i]).hasClass("cell")) {
//                         $(this).removeClass("cell");
//                         cellindex = i;
//                         break;
//                     }
//                     var a_val = $('#a_val').val();
//                     var a_val_num = $('#a_nextnum').val();
//                     $(this).find('label').text(a_val + a_val_num);
//                     var a_rooms = $('#a_rooms');

//                 }


//                 $(this).parent().addClass("row");
//                 var rows = $(this).parent().parent().children("tr");


//                 for (var i = 0; i < rows.length; i++) {
//                     var tds = $(rows[i]).children("label");
//                     V = "";
//                     for (var j = 0; j <= cellindex; j++) {
//                         ZA = i;

//                         var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
//                     }
//                     if ($(rows[i]).hasClass("row")) {
//                         $(this).parent().removeClass("row");
//                         break;
//                     }
//                 }
//                 V = parseFloat($('#a_val').val()) + 1;


//                 posX = $(this).parent().data("no");
//                 posY = $(this).index();

//                 $('#a_nextnum').val(za);
//             }

//         }
//     });
//     $("#B_").delegate('td', 'mouseover mouseleave click', function(e) {
//         var cellindex = 0;
//         let rooms = "";
//         if (e.type == 'click') {
//             if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
//                 $(this).removeClass("nowork");
//             } else if ($('input#pohjakierros').is(':checked')) {
//                 console.log("Pohja checkattu");


//                 var cells = $(this).parent().children("td");
//                 var tds = $('#B .table_size_chooser td').removeClass("SizeChooser-clicked")

//                 for (var i = 0; i < cells.length; i++) {
//                     if ($(this).find('label').text().length > 1) {
//                         $(this).removeClass("nowork");
//                         $(this).find('label').text("");
//                         cellindex = i;
//                     } else {
//                         $(this).addClass("nowork"); $(this).removeClass("checked");
//                         $(this).find('label').val("");
//                     }

//                 }

//             } else if ($(this).hasClass("noindex")) {
//                 zb -= 0;
//                 $('#b_nextnum').val(zb);
//             } else if ($(this).find('input').prop('checked') == false) {
//                 zb -= 1;
//                 $(this).find('input').val("");
//                 $(this).find('label').text("");
//                 $('#b_nextnum').val(zb);
//             } else {
//                 $(this).addClass("checked");
//                 var cells = $(this).parent().children("td");
//                 var tds = $('#B .table_size_chooser td').removeClass("SizeChooser-clicked")
//                 zb = parseFloat($('#b_nextnum').val().replace(/\D/g,''));
//                 zb += 1;

//                 for (var i = 0; i < cells.length; i++) {
//                     if ($(cells[i]).hasClass("cell")) {
//                         $(this).removeClass("cell");
//                         cellindex = i;

//                         break;


//                     }

//                     var a_val = $('#b_val').val();
//                     var a_val_num = $('#b_nextnum').val();
//                     if($('#b_nextnum_second').val().length >= 1) {
//                         var a_val_2 = "<br>" + $('#b_nextnum_second').val();
//                     }
//                     else {
//                         var a_val_2 = "";
//                     }
//                     if($('#b_nextnum_third').val().length >= 1) {
//                         var a_val_3 = "<br>" + $('#b_nextnum_third').val();
//                     }
//                     else {
//                         var a_val_3 = "";
//                     }



//                     $(this).find('label').html(a_val + a_val_num+a_val_2+a_val_3);

//                     var a_rooms = $('#b_rooms');

//                 }


//                 $(this).parent().addClass("row");
//                 var rows = $(this).parent().parent().children("tr");


//                 for (var i = 0; i < rows.length; i++) {
//                     var tds = $(rows[i]).children("label");
//                     V = "";
//                     for (var j = 0; j <= cellindex; j++) {

//                         ZB = i;

//                         var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
//                     }
//                     if ($(rows[i]).hasClass("row")) {
//                         $(this).parent().removeClass("row");
//                         break;
//                     }
//                 }
//                 V = $('#b_val').val() + parseFloat($('#b_nextnum').val().replace(/\D/g,''));


//                 posX = $(this).parent().data("no");
//                 posY = $(this).index();

//                 $('#b_nextnum').val(zb);
//             }

//         }
//     });
//     $("#C_").delegate('td', 'mouseover mouseleave click', function(e) {
//         var cellindex = 0;
//         let rooms = "";

//         if (e.type == 'click') {
//             if ($(this).hasClass("nowork") && $('input#pohjakierros').is(':checked')) {
//                 $(this).removeClass("nowork");
//             } else if ($('input#pohjakierros').is(':checked')) {
//                 console.log("Pohja checkattu");


//                 var cells = $(this).parent().children("td");
//                 var tds = $('#C .table_sizce_chooser td').removeClass("SizceChooser-clicked")

//                 for (var i = 0; i < cells.length; i++) {
//                     if ($(this).find('label').text().length > 1) {
//                         $(this).removeClass("nowork");
//                         $(this).find('label').text("");
//                         cellindex = i;
//                     } else {
//                         $(this).addClass("nowork"); $(this).removeClass("checked");
//                         $(this).find('label').val("");
//                     }

//                 }

//             } else if ($(this).hasClass("noindex")) {
//                 zc -= 0;
//                 $('#c_nextnum').val(zc);
//             } else if ($(this).find('input').prop('checked') == false) {
//                 zc -= 1;
//                 $(this).find('input').val("");
//                 $(this).find('label').text("");
//                 $('#c_nextnum').val(zc);
//             } else {
//                 $(this).addClass("checked");
//                 var cells = $(this).parent().children("td");
//                 var tds = $('#C .table_sizce_chooser td').removeClass("SizceChooser-clicked")
//                 zc = parseFloat($('#c_nextnum').val().replace(/\D/g,''));
//                 zc += 1;
//                 for (var i = 0; i < cells.length; i++) {
//                     if ($(cells[i]).hasClass("cell")) {
//                         $(this).removeClass("cell");
//                         cellindex = i;

//                         break;


//                     }
//                     var a_val = $('#c_val').val();

//                     if ($('#a_nextnum_2').val().length >= 1) {
//                         var a_val_num = $('#a_nextnum_2').val();
//                     }
//                     else {
//                         var a_val_num = $('#a_nextnum').val();
//                     }
//                     if($('#c_nextnum_second').val().length >= 1) {
//                         var a_val_2 = "<br>" + $('#c_nextnum_second').val();
//                     }
//                     else {
//                         var a_val_2 = "";
//                     }
//                     if($('#c_nextnum_third').val().length >= 1) {
//                         var a_val_3 = "<br>" + $('#c_nextnum_third').val();
//                     }
//                     else {
//                         var a_val_3 = "";
//                     }



//                     $(this).find('label').html(a_val + a_val_num+a_val_2+a_val_3);
//                     var a_rooms = $('#c_rooms');

//                 }


//                 $(this).parent().addClass("row");
//                 var rows = $(this).parent().parent().children("tr");


//                 for (var i = 0; i < rows.length; i++) {
//                     var tds = $(rows[i]).children("label");
//                     V = "";
//                     for (var j = 0; j <= cellindex; j++) {

//                         ZC = i;

//                         var rappu = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
//                     }
//                     if ($(rows[i]).hasClass("row")) {
//                         $(this).parent().removeClass("row");
//                         break;
//                     }
//                 }
//                 V = $('#c_val').val() + parseFloat($('#c_nextnum').val().replace(/\D/g,''));


//                 posX = $(this).parent().data("no");
//                 posY = $(this).index();

//                 $('#c_nextnum').val(zc);
//             }

//         }
//     });

//   });




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

/**
 * Generates code based on the checked checkboxes and updates the table display accordingly.
 * If the row header checkbox is checked, it replaces the first column of each row with a <th> element.
 * If the row header checkbox is unchecked, it replaces the <th> elements in the first column with <td> elements.
 * If the column header checkbox is checked, it replaces the first row of the table with <th> elements.
 * It updates the table caption based on the text in the textarea with id 'captioner'.
 * It removes the 'contenteditable' attribute from all <th> and <td> elements.
 * It retrieves the HTML content of the table display and processes it before displaying it in the '#tablecode'
 */
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

/**
 * Executes an AJAX request to upload files when a specific element is clicked.
 * @returns None
 */
$(document).ready(function() {
    $('.project__creation_uploadsend').click(function() {
        that_element_class = $(this).attr("name") + '_previewfiles';
        // console.log($(this).parent().children()[1].children[0].children[0]);
        totalfiles = $(this).parent().children()[1].files.length;
        cur_comment_files = $(this).parent().children()[1].files;
        console.log(totalfiles);
        for (var index = 0; index < totalfiles; index++) {
            form_data = new FormData();
            form_data.append("files", cur_comment_files[index]);

            $.ajax({
                url: '/upload.php',
                type: 'POST',
                data: form_data,
                contentType: 'multipart/form-data',
                // dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    document.querySelector("." + that_element_class).innerHTML += '<a class="asiakirja_first" target="_blank" href="https://editori.westface.fi/uploads/' + response + '">' + 'https://editori.westface.fi/uploads/' + response + '</a><br>';
                    document.querySelector("#" + that_element_class + "_value").value += '<a class="asiakirja_first" target="_blank" href="https://editori.westface.fi/uploads/' + response + '">' + 'https://editori.westface.fi/uploads/' + response + '</a><br>';
                    console.log(response);
                }
            });

        }
    });
});

/**
 * Handles the click event on the '.finalization_btn' button.
 * Retrieves data from various elements on the page, processes it, and sends it to the server.
 * @returns None
 */
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

    let form = $('#new_project__form');
    let customer_contacts = [];

    $("#A_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();

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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }
    });

    $("#A_ .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "NOWORK";
        a_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#a_rooms_nowork").val(JSON.stringify(a_));
    });

    $("#B_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();


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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }

    });

    $("#B_ .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "";
        b_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#b_rooms_nowork").val(JSON.stringify(b_));
    });

    $("#C_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();


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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }

    });

    $("#C_ .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "";
        c_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#c_rooms_nowork").val(JSON.stringify(c_));
    });

    $("#D_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();


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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }

    });

    $("#D_ .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "";
        d_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#d_rooms_nowork").val(JSON.stringify(d_));
    });

    $("#E_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();

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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }


    });

    $("#E_ .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "";
        e_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#e_rooms_nowork").val(JSON.stringify(e_));
    });

    $("#F_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();

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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }

    });

    $("#F_ .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "";
        f_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#f_rooms_nowork").val(JSON.stringify(f_));
    });

    $("#G_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();
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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }


    });

    $("#G_ .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "";
        g_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#g_rooms_nowork").val(JSON.stringify(g_));
    });

    $("#H_ .checked").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = $(this).find("label").html();

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
            JSON.parse($(this).find("label").attr("data-customer")).forEach(v => {
                customer_contacts.push({
                    name: nam,
                    info: v
                });
            });
        }


    });

    $("#H .nowork").each(function(index) {
        posX = $(this).parent().data("no");
        posY = $(this).index();
        nam = "";
        h_.push({
            name: nam,
            positionX: posX,
            positionY: posY
        });
        $("#h_rooms_nowork").val(JSON.stringify(h_));
    });

    customer_contacts = JSON.stringify(customer_contacts);

    form.append(`<input type="hidden" name="customer_contacts" value='${customer_contacts}' />`)

    giga_array = [a_array, b_array, c_array, d_array, e_array, f_array, g_array, h_array];
    giga_array.forEach(g => {
        if (g.length < 1) {
            return
        }
        g.forEach(b => {
            console.log(b["name"]);
            roomsnames = ["A", "B", "C", "D", "K", "L"];
            roomsnames.forEach(wall => {
                formData = {
                        apartment: b["name"].replaceAll(" ", "").replaceAll("ä", "a").replaceAll("ö", "o").toLowerCase(),
                        wall: wall,
                        function: "2200~~4000",
                        timestamp: Math.floor(Date.now() / 1000),
                    },
                    $.ajax({
                        type: "POST",
                        url: "../vendor/save-sizesinroom.php",
                        data: formData,
                        error: function(jqxhr, status, exception) {
                            alert('Tietokantavirhe, soita numeroon +358449782028');
                        }
                    }).done(function(success) {

                    });
            });
        });
    });

    form.submit();
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
    <option value="kommentointi">Kommentointi</option>
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

/**
 * Function to create a new section for adding additional personnel information.
 * Increments the personnel count and creates a new form group with input fields for name, phone number, email, role, and permissions.
 * Displays an alert if the maximum number of personnel is exceeded.
 * @returns None
 */
function creation_henkilolisays() {
    prc_count += 1;
    if (prc_count >= 31) {
        alert("Henkilöiden maksimimäärä ylitetty!");
        return;
    }
    var group = document.createElement("div");
    group.classList.add("form-group");

    var datalist = document.querySelector("#prc_1_list").cloneNode(true);
    datalist.setAttribute("id", 'prc_' + prc_count + '_list');
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


    subgroup_1.innerHTML = '<label>Nimi ja Rooli: </label><input type="text" name="prc_' + prc_count + '" class="form-control" value=" " list="prc_' + prc_count + '_list" onchange="give_numbers(this.value,' + prc_count + ');" required></div>';
    subgroup_2.innerHTML = '<label>Puhelinnumero: </label><input type="text" name="prc_' + prc_count + '_puh" class="form-control prc_' + prc_count + '_puh" value=" " required></div>';
    subgroup_3.innerHTML = '<label>Sähköposti: </label><input type="text" name="prc_' + prc_count + '_email" class="form-control prc_' + prc_count + '_email" value=" " required></div>';
    subgroup_4.innerHTML = '<label for="prc_' + prc_count + '_role">Rooli:</label><select name="role" id="prc_' + prc_count + '_role"><option value="saaja">Viestien saaja</option><option value="katsoja">Katsoja</option><option value="kommentointi">Kommentointi</option><option value="mittaus">Mittamies</option></select>';
    subgroup_5.innerHTML = '<h5>Saako katsoa kaikki projektin tiedot?</h5><div class="row-reversed"><label for="prc_' + prc_count + '_permission">Kyllä</label><input type="checkbox" name="prc_' + prc_count + '_permission" id="prc_' + prc_count + '_permission" class="standard_checkbox" value="1"></div><h5>Poista näkymässä projektilla</h5><div class="row-reversed"><label for="prc_' + prc_count + '_hiding">Kyllä</label><input type="checkbox" id="prc_' + prc_count + '_hiding" name="prc_' + prc_count + '_hiding" class="standard_checkbox" value="1"></div>';


    group.appendChild(subgroup_1);
    group.appendChild(subgroup_2);
    group.appendChild(subgroup_3);
    group.appendChild(subgroup_4);
    group.appendChild(subgroup_5);
    group.appendChild(datalist);

    document.querySelector("#new_project > fieldset").append(group);
}


/**
 * Updates the elements on the page based on the values extracted from the specified element.
 * @param {string} elem - The element to extract values from.
 * @param {number} integer - The integer value used to identify elements on the page.
 * @returns None
 */
function give_numbers(elem, integer) {
    elements_array = document.querySelector("." + elem.replaceAll(' ', '___').toLowerCase() + "_userselection").value.split("|");
    console.log(elements_array);
    // document.querySelector(".prc_"+integer+"").value =elements_array[1];
    document.querySelector(".prc_" + parseFloat(integer) + "_puh").value = elements_array[1];
    document.querySelector(".prc_" + parseFloat(integer) + "_email").value = elements_array[2];
    document.querySelector("#prc_" + parseFloat(integer) + "_role").value = elements_array[3];
    // console.log(".prc_"+parseFloat(integer)+"_role ."+elements_array[3]);
    if (parseFloat(elements_array[4]) == 1) {
        document.querySelector("#prc_" + parseFloat(integer) + "_permission").checked = true;
    }
    if (parseFloat(elements_array[5]) == 1) {
        document.querySelector("#prc_" + parseFloat(integer) + "_hiding").checked = true;
    }

}

function isInt(value) {
    return !isNaN(value) &&
        parseInt(Number(value)) == value &&
        !isNaN(parseInt(value, 10));
}

function change__byhands(elem) {
    if (isInt(elem.value) === true) {
        elem.dataset.no = parseFloat(elem.value.replace(/[^\d.-]/g, ''));
    }
}

/**
 * Toggles the visibility of elements based on the length of the value of a given element.
 * @param {HTMLElement} elem - The element whose value determines the toggling.
 * @param {number} lvl - The level of toggling.
 * @returns None
 */
function change__toggling(elem, lvl) {
    f = elem.dataset.alt.split("|")[0];
    s = elem.dataset.alt.split("|")[1];
    console.log(elem.value);
    if (elem.value.length >= 1) {
        document.querySelector("#" + f).classList.add("closed");
        document.querySelector("#" + s).classList.add("closed");
    } else {
        document.querySelector("#" + f).classList.remove("closed");
        document.querySelector("#" + s).classList.remove("closed");
    }
}


function open_ak(elem) {
    let _AK_shits_ = elem.parentElement.querySelectorAll(".AK > td");
    _AK_shits_.forEach(myFunction);
}

function open_k(elem) {
    let _K_shits_ = elem.parentElement.querySelectorAll(".K > td");
    _K_shits_.forEach(myFunction);
}

/**
 * Modifies the class list and content of an HTML element based on its current class list.
 * If the element does not have the class "noindex", it removes the classes "hidden" and "checked",
 * clears the inner HTML of the label element, unchecks the input element, and adds the class "nowork".
 * @param {HTMLElement} item - The HTML element to modify
 * @returns None
 */
function myFunction(item) {
    if (item.classList.contains("noindex")) {} else {
        item.classList.remove("hidden");
        item.classList.remove("checked");
        item.querySelector("label").innerHTML = "";
        item.querySelector("input").checked = false;
        item.classList.add("nowork");
    }
}

function pohjakierros_function() {

}

/**
 * Adds a new level to the table by creating a new row with checkboxes and labels.
 * @param {Element} elem - The element that triggered the function.
 * @returns None
 */
function add_new_lvl(elem) {
    gp = elem.parentElement.parentElement.parentElement;

    table = gp.querySelector(".table > tbody");
    len = gp.querySelectorAll("tr").length;
    var tr = document.createElement('tr');
    tr.dataset.no = parseFloat(gp.querySelectorAll("tr")[0].dataset.no) + 1;

    if (len > 50) {
        alert("Kerrosten maksimimäärä saavutettu");
        return
    }
    for (let i = 1; i < 22; i++) {
        if (i == 1) {
            num = len - 1;
            var td = document.createElement('td');
            var td_input = document.createElement('input');
            td_input.setAttribute("name", "room_name");
            td_input.setAttribute("type", "checkbox");

            var td_label = document.createElement('label');
            td_label.innerHTML = num;
            // td.append(td_input);
            td.append(td_label);


            td.classList.add("noindex");
            tr.append(td);
        } else {
            var td = document.createElement('td');
            var td_input = document.createElement('input');
            td_input.setAttribute("name", "room_name");
            td_input.setAttribute("type", "checkbox");

            var td_label = document.createElement('label');
            td.append(td_input);
            td.append(td_label);


            tr.append(td);
        }


    }
    table.prepend(tr);

}

/**
 * Converts a string to a slug format by removing special characters, accents, and spaces.
 * @param {string} separator - The separator to use in place of spaces.
 * @returns {string} The slugified string.
 */
String.prototype.slugify = function(separator = "-") {
    return this
        .toString()
        .normalize('NFD') // split an accented letter in the base letter and the acent
        .replace(/[\u0300-\u036f]/g, '') // remove all previously split accents
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9 ]/g, '') // remove all chars not letters, numbers and spaces (to be replaced)
        .replace(/\s+/g, separator);
};

/**
 * Function to slugify the project name and populate it in the designated input field.
 */
function slugify__prname() {
    document.querySelector(".project_name_slugto").value = document.querySelector(".project_name_slugfrom").value.slugify("-");
}

/**
 * Executes the provided function when the document is fully loaded and ready to be manipulated.
 * If the browser supports history manipulation, it listens for a popstate event and performs
 * specific actions on certain DOM elements when the event occurs.
 * @param {jQuery} $ - Reference to the jQuery object.
 * @returns None
 */
jQuery(document).ready(function($) {
    if (window.history && window.history.pushState) {
        $(window).on('popstate', function() {
            $('#roomconfig_first').hide();
            $('#roomconfig_first').slideUp(200);
            $('#roomconfig_second').hide();
            $('#roomconfig_second').slideUp(200);
            $('#roomconfig_third').hide();
            $('#roomconfig_third').slideUp(200);

            $('#new_project').slideDown(200);
            $('#new_project').show();
        });
    }

    $("#roomconfig_third").on("click", ".add_contact", function(event) {
        event.preventDefault();
        event.stopPropagation();
        let copy = $(this).prev().clone();
        copy.find("input").val("");
        copy.find("select")[0].selectedIndex = 0;
        $(this).before(copy);
    })
    .on("change", ".customer_name", function() {
        let match = [...customer_contacts_list].find(v => v.name === this.value);
        if (match) {
            $(this).closest(".contact").find(".customer_phone").val(match.phone);
            $(this).closest(".contact").find(".customer_email").val(match.email);
            $(this).closest(".contact").find(".customer_type").val(match.type);
        }
    });
});

$("#project_type").on("change", function () {
    if ($(this).val() == "Julkisivu") {
        $("#roomconfig_second .next_btn").hide();
        $("#roomconfig_second .finalization_btn").show();
    } else {
        $("#roomconfig_second .next_btn").show();
        $("#roomconfig_second .finalization_btn").hide();
    }
});
