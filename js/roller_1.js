/**
 * Repositions the box element to the specified coordinates.
 * @param {number} x - The new horizontal position of the box element.
 * @param {number} y - The new vertical position of the box element.
 * @returns None
 */
var box_lower = document.getElementById("box_lower");
var boxWrapper = document.getElementById("box-wrapper");
var lower_mm = document.querySelector('.box__lower_mm');
var lower_decor = document.querySelector('.box__lower_lowerdecor');
var l_initX, l_initY, l_mousePressX, l_mousePressY, l_initW, l_initH, l_initRotate;
document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__lower_lowerdecor.box__decor").style.opacity = "0";

function l_repositionElement(x, y) {
    boxWrapper.style.left = x;
    boxWrapper.style.top = y;
}

/**
 * Resize the box and its components based on the provided width and height values.
 * @param {number} w - The new width of the box.
 * @param {number} h - The new height of the box.
 * @returns None
 */
function l_resize(w, h) {
    box_lower.style.maxHeight = (boxWrapper.offsetHeight) + 'px';
    box_lower.style.width = w + 'px';
    box_lower.style.height = (h * (parseFloat(document.querySelector("#box_w").value) / parseFloat(document.querySelector("#box_h").value))) + 'px';
    boxWrapper.style.width = w;
    boxWrapper.style.height = h;
    lower_mm.value = +((parseFloat(box_lower.offsetHeight)) / (parseFloat(boxWrapper.offsetHeight))) * parseFloat(document.querySelector("#box_h").value);
    lower_decor.style.width = parseFloat(box_lower.offsetHeight) + 'px';
    lower_decor.style.left = (-1) * parseFloat(boxWrapper.offsetHeight) + 31 + 'px';
    lower_decor.style.maxHeight = (boxWrapper.offsetHeight) + 'px';
    drawarea__update_cord();
}
// handle l_resize
/**
 * Handles the resizing of an element based on mouse or touch events.
 * @param {Event} event - The event object triggering the resize.
 * @param {boolean} [left=false] - Indicates if resizing is happening towards the left.
 * @param {boolean} [top=false] - Indicates if resizing is happening towards the top.
 * @param {boolean} [xl_resize=false] - Indicates if resizing is happening in the x-axis.
 * @param {boolean} [yl_resize=false] - Indicates if resizing is happening in the y-axis.
 * @returns None
 */
var bottomMid = document.getElementById("box_lower__top-mid");

function l_resizeHandler(event, left = false, top = false, xl_resize = false, yl_resize = false) {
    l_initX = boxWrapper.offsetLeft;
    l_initY = boxWrapper.offsetTop;
    l_mousePressX = event.clientX;
    l_mousePressY = event.clientY;
    l_initW = box_lower.offsetWidth;
    l_initH = box_lower.offsetHeight;

    if(event.clientX ) {
        l_mousePressX = event.clientX;
        l_mousePressY = event.clientY;
    }
    else {
        l_mousePressX = event.touches[0].clientX;
        l_mousePressY = event.touches[0].clientY;
    }


    function l_eventMoveHandler(event) {
        var wDiff = event.clientX - l_mousePressX;
        var hDiff = event.clientY - l_mousePressY;
        var newW = l_initW,
            newH = l_initH,
            newX = l_initX,
            newY = l_initY;

        if(event.clientX ) {
            var wDiff = event.clientX - l_mousePressX;
            var hDiff = event.clientY - l_mousePressY;
        }
        else {
            var wDiff = event.touches[0].clientX - l_mousePressX;
            var hDiff = event.touches[0].clientY - l_mousePressY;
        }
        
        if (xl_resize) {
            if (left) {
                newW = l_initW - wDiff;
                newX = l_initX + wDiff;
            } else {
                newW = l_initW + wDiff;
            }
        }
        if (yl_resize) {
            if (top) {
                newH = l_initH - hDiff;
                newY = l_initY + hDiff;
            } else {
                newH = l_initH + hDiff;
            }
        }
        if (document.querySelector("#box_lower").style.height == '44px') {
            document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__lower_lowerdecor.box__decor").style.opacity = "0";
        } else {
            document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__lower_lowerdecor.box__decor").style.opacity = "1";
        }
        l_resize(newW, newH);
        l_repositionElement(newX, newY);
    }
    window.addEventListener('mousemove', l_eventMoveHandler, false);
    window.addEventListener('mouseup', function() {
        window.removeEventListener('mousemove', l_eventMoveHandler, false);
    }, false);

    window.addEventListener('touchmove', l_eventMoveHandler, false);
    window.addEventListener('touchend', function() {
        window.removeEventListener('touchmove', l_eventMoveHandler, false);
    }, false);
}
bottomMid.addEventListener('mousedown', e => l_resizeHandler(e, false, true, false, true));
bottomMid.addEventListener('touchstart', e => l_resizeHandler(e, false, true, false, true));




// boxWrapper.addEventListener("touchstart", l_dragStart, false);
// boxWrapper.addEventListener("touchend", l_dragEnd, false);
// boxWrapper.addEventListener("touchmove", l_drag, false);
// var l_active = false;
// var l_currentX;
// var l_currentY;
// var l_initialX;
// var l_initialY;
// var l_xOffset = 0;
// var l_yOffset = 0;


// function l_dragStart(e) {
//     if (e.type === "touchstart") {
//         l_initialX = e.touches[0].clientX - l_xOffset;
//         l_initialY = l_yOffset - e.touches[0].clientY; // offset 0, потом прежнее значение, - координат по Y 
//     } else {
//         l_initialX = e.clientX - l_xOffset;
//         l_initialY = l_yOffset - e.clientY; // offset 0, потом прежнее значение, - координат по Y, 800
//     }
//     if (e.target === box_lower) {
//         l_active = true;
//     }
// }

// function l_dragEnd(e) {
//     l_initialX = l_currentX;
//     l_initialY = l_currentY; // Запоминается значение Y 
//     l_active = false;
// }

// function l_drag(e) {
//     if (l_active) {
//         e.preventDefault();
//         if (e.type === "touchmove") {
//             l_currentX = e.touches[0].clientX + l_initialX;
//             l_currentY = e.touches[0].clientY + l_initialY;
//         } else {
//             l_currentX = e.clientX + l_initialX;
//             l_currentY = e.clientY + l_initialY;
//         }
//         l_xOffset = l_currentX;
//         l_yOffset = l_currentY;
//         l_setTranslate(l_currentX, l_currentY, box_lower);

//     }
// }

// function l_setTranslate(w, h, el) {
//     // box_lower.style.width = w + 'px';
//     box_lower.style.height = 'calc('+(h - 44) * (-1) +'px * 0.735294118)';
//     // boxWrapper.style.width = w;
//     // boxWrapper.style.height = (h - 44) * (-1);
//     lower_decor.style.opacity = 1;
//     lower_mm.value = (h) * (-10) * 0.735294118;

//     lower_decor.style.left = 'calc(-60vh + 30px)';
//     // lower_decor.style.left ='unset';
//     // lower_decor.style.marginLeft = ((h - 44)) + 'px';
//     lower_decor.style.width = (h ) * (-1) + 'px';

//     drawarea__update_cord();
// }

