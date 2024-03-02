/**
 * Repositions the boxWrapper element to the specified coordinates (x, y).
 * Also sets the opacity of a specific element to 0.
 * @param {number} x - The new horizontal position for the boxWrapper element.
 * @param {number} y - The new vertical position for the boxWrapper element.
 * @returns None
 */
var box_right = document.getElementById("box_right");
var boxWrapper = document.getElementById("box-wrapper");
var right_mm = document.querySelector('.box__right_mm');
var right_decor = document.querySelector('.box__right_rightdecor');
var r_initX, r_initY, r_mousePressX, r_mousePressY, r_initW, r_initH, r_initRotate;
document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__right_rightdecor.box__decor").style.opacity = "0";

function r_repositionElement(x, y) {
    boxWrapper.style.left = x;
    boxWrapper.style.top = y;
}

/**
 * Resize the box elements based on the provided width and height values.
 * @param {number} w - The width value for resizing the elements.
 * @param {number} h - The height value for resizing the elements.
 * @returns None
 */
function r_resize(w, h) {
    // box_right.style.width = (w * (parseFloat(document.querySelector("#box_h").value)/parseFloat(document.querySelector("#box_w").value))) + 'px';
    // box_right.style.height = h + 'px';
    // boxWrapper.style.width = w;
    // boxWrapper.style.height = h;
    // right_mm.value =+ ( w - 44 ) * 10 * ((parseFloat(document.querySelector("#box_h").value)/parseFloat(document.querySelector("#box_w").value)));
    // right_decor.style.width = ( w - 44  ) + 'px';
    box_right.style.maxWidth = (boxWrapper.offsetWidth) + 'px';
    box_right.style.width = (w * (parseFloat(document.querySelector("#box_h").value) / parseFloat(document.querySelector("#box_w").value))) + 'px';
    box_right.style.height = 100 + "%";
    boxWrapper.style.width = w;
    boxWrapper.style.height = h;
    right_mm.value = +((parseFloat(box_right.offsetWidth)) / (parseFloat(boxWrapper.offsetWidth))) * parseFloat(document.querySelector("#box_w").value);
    right_decor.style.width = (parseFloat(box_right.offsetWidth)) + 'px';
    right_decor.style.left = "0";
    right_decor.style.maxWidth = (box_right.offsetWidth) + 'px';
    drawarea__update_cord();
}
// handle r_resize
/**
 * Handles the resizing of an element based on mouse or touch events.
 * @param {Event} event - The event object triggering the resize.
 * @param {boolean} [left=false] - Indicates if resizing is happening towards the left.
 * @param {boolean} [top=false] - Indicates if resizing is happening towards the top.
 * @param {boolean} [xr_resize=false] - Indicates if resizing is happening on the x-axis.
 * @param {boolean} [yr_resize=false] - Indicates if resizing is happening on the y-axis.
 * @returns None
 */
var bottomMid = document.getElementById("box_right__left-mid");

function r_resizeHandler(event, left = false, top = false, xr_resize = false, yr_resize = false) {
    r_initX = boxWrapper.offsetLeft;
    r_initY = boxWrapper.offsetTop;
    r_mousePressX = event.clientX;
    r_mousePressY = event.clientY;
    r_initW = box_right.offsetWidth;
    r_initH = box_right.offsetHeight;

    if(event.clientX ) {
        r_mousePressX = event.clientX;
        r_mousePressY = event.clientY;
    }
    else {
        r_mousePressX = event.touches[0].clientX;
        r_mousePressY = event.touches[0].clientY;
    }



    function eventMoveHandler(event) {

        var wDiff = event.clientX - r_mousePressX;
        var hDiff = event.clientY - r_mousePressY;

        if(event.clientX ) {
            var wDiff = event.clientX - r_mousePressX;
            var hDiff = event.clientY - r_mousePressY;
        }
        else {
            var wDiff = event.touches[0].clientX - r_mousePressX;
            var hDiff = event.touches[0].clientY - r_mousePressY;
        }


        var newW = r_initW,
            newH = r_initH,
            newX = r_initX,
            newY = r_initY;
        if (xr_resize) {
            if (left) {
                newW = r_initW - wDiff;
                newX = r_initX + wDiff;
            } else {
                newW = r_initW + wDiff;
            }
        }
        if (yr_resize) {
            if (top) {
                newH = r_initH - hDiff;
                newY = r_initY + hDiff;
            } else {
                newH = r_initH + hDiff;
            }
        }
        if (document.querySelector("#box_right").style.width == '44px') {
            document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__right_rightdecor.box__decor").style.opacity = "0";
        } else {
            document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__right_rightdecor.box__decor").style.opacity = "1";
        }
        r_resize(newW, newH);
        r_repositionElement(newX, newY);
    }

            
    window.addEventListener('touchmove', eventMoveHandler, false);
    window.addEventListener('touchend', function() {
        window.removeEventListener('touchmove', eventMoveHandler, false);
    }, false);

    window.addEventListener('mousemove', eventMoveHandler, false);
    window.addEventListener('mouseup', function() {
        window.removeEventListener('mousemove', eventMoveHandler, false);
    }, false);
}
bottomMid.addEventListener('mousedown', e => r_resizeHandler(e, true, false, true, false));
bottomMid.addEventListener('touchstart', e => r_resizeHandler(e, true, false, true, false));
