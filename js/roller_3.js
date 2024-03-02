/**
 * Repositions the box element to the specified coordinates.
 * @param {number} x - The new horizontal position of the box element.
 * @param {number} y - The new vertical position of the box element.
 * @returns None
 */
var box_left = document.getElementById("box_left");
var boxWrapper = document.getElementById("box-wrapper");
var left_mm = document.querySelector('.box__left_mm');
var left_decor = document.querySelector('.box__left_leftdecor');
var left_initX, left_initY, left_mousePressX, left_mousePressY, left_initW, left_initH, left_initRotate;
document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__left_leftdecor.box__decor").style.opacity = "0";

function left_repositionElement(x, y) {
    boxWrapper.style.left = x;
    boxWrapper.style.top = y;
}

/**
 * Resize the left box element based on the provided width and height values.
 * @param {number} w - The width value for the box.
 * @param {number} h - The height value for the box.
 * @returns None
 */
function left_resize(w, h) {
    box_left.style.maxWidth = (boxWrapper.offsetWidth) + 'px';
    box_left.style.width = (w * (parseFloat(document.querySelector("#box_h").value) / parseFloat(document.querySelector("#box_w").value))) + 'px';
    box_left.style.height = 100 + "%";
    boxWrapper.style.width = w;
    boxWrapper.style.height = h;
    left_mm.value = +((parseFloat(box_left.offsetWidth)) / (parseFloat(boxWrapper.offsetWidth))) * parseFloat(document.querySelector("#box_w").value);
    left_decor.style.width = (parseFloat(box_left.offsetWidth)) + 'px';
    left_decor.style.left = "0";
    left_decor.style.maxWidth = (box_left.offsetWidth) + 'px';
    drawarea__update_cord();
}
// handle left_resize
/**
 * Handles the resizing of the left element based on the event and resize parameters.
 * @param {Event} event - The event that triggered the resize action.
 * @param {boolean} [left=false] - Indicates if the resize is towards the left.
 * @param {boolean} [top=false] - Indicates if the resize is towards the top.
 * @param {boolean} [xleft_resize=false] - Indicates if the resize is along the x-axis.
 * @param {boolean} [yleft_resize=false] - Indicates if the resize is along the y-axis.
 * @returns None
 */
var bottomMid = document.getElementById("box_left__right-mid");

function left_resizeHandler(event, left = false, top = false, xleft_resize = false, yleft_resize = false) {
    left_initX = boxWrapper.offsetLeft;
    left_initY = boxWrapper.offsetTop;
    left_mousePressX = event.clientX;
    left_mousePressY = event.clientY;
    left_initW = box_left.offsetWidth;
    left_initH = box_left.offsetHeight;

    if(event.clientX ) {
        left_mousePressX = event.clientX;
        left_mousePressY = event.clientY;
    }
    else {
        left_mousePressX = event.touches[0].clientX;
        left_mousePressY = event.touches[0].clientY;
    }

    
    function eventMoveHandler(event) {
        var wDiff = event.clientX - left_mousePressX;
        var hDiff = event.clientY - left_mousePressY;
        var newW = left_initW,
            newH = left_initH,
            newX = left_initX,
            newY = left_initY;

        if(event.clientX ) {
            var wDiff = event.clientX - left_mousePressX;
            var hDiff = event.clientY - left_mousePressY;
        }
        else {
            var wDiff = event.touches[0].clientX - left_mousePressX;
            var hDiff = event.touches[0].clientY - left_mousePressY;
        }


        if (xleft_resize) {
            if (left) {
                newW = left_initW - wDiff;
                newX = left_initX + wDiff;
            } else {
                newW = left_initW + wDiff;
            }
        }
        if (yleft_resize) {
            if (top) {
                newH = left_initH - hDiff;
                newY = left_initY + hDiff;
            } else {
                newH = left_initH + hDiff;
            }
        }
        if (document.querySelector("#box_left").style.width == '44px') {
            document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__left_leftdecor.box__decor").style.opacity = "0";
        } else {
            document.querySelector("#box-wrapper > div.drawarea__control.drawarea__bottom > div > div.box__left_leftdecor.box__decor").style.opacity = "1";
        }
        left_resize(newW, newH);
        left_repositionElement(newX, newY);
    }
    window.addEventListener('mousemove', eventMoveHandler, false);
    window.addEventListener('mouseup', function() {
        window.removeEventListener('mousemove', eventMoveHandler, false);
    }, false);

    window.addEventListener('touchmove', eventMoveHandler, false);
    window.addEventListener('touchend', function() {
        window.removeEventListener('touchmove', eventMoveHandler, false);
    }, false);
}
bottomMid.addEventListener('mousedown', e => left_resizeHandler(e, false, false, true, false));
bottomMid.addEventListener('touchstart', e => left_resizeHandler(e, false, false, true, false));


        


