/**
 * Repositions the boxWrapper element to the specified x and y coordinates.
 * @param {number} x - The new x-coordinate for the boxWrapper element.
 * @param {number} y - The new y-coordinate for the boxWrapper element.
 * @returns None
 */
var box_upper = document.getElementById("box_upper");
var boxWrapper = document.getElementById("box-wrapper");
var upper_mm = document.querySelector('.box__upper_mm');
var upper_decor = document.querySelector('.box__upper_upperdecor');
var initX, initY, mousePressX, mousePressY, initW, initH, initRotate;
document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__upper_upperdecor.box__decor").style.opacity = "0";
var active = false;
var currentX;
var currentY;
var initialX;
var initialY;
var xOffset = 0;
var yOffset = 0;

function repositionElement(x, y) {
    boxWrapper.style.left = x;
    boxWrapper.style.top = y;
}

/**
 * Resize the box elements based on the provided width and height values.
 * @param {number} w - The new width value for the box elements.
 * @param {number} h - The new height value for the box elements.
 * @returns None
 */
function resize(w, h) {
    if(h < bw_h) {
        box_upper.style.maxHeight = (boxWrapper.offsetHeight) + 'px';
        box_upper.style.width = w + 'px';
        box_upper.style.height = (h * (parseFloat(document.querySelector("#box_w").value) / parseFloat(document.querySelector("#box_h").value))) + 'px';
        boxWrapper.style.width = w;
        boxWrapper.style.height = h;
        upper_mm.value = +((parseFloat(box_upper.offsetHeight)) / (parseFloat(boxWrapper.offsetHeight))) * parseFloat(document.querySelector("#box_h").value);
        upper_decor.style.right = 12 + 'px';
        upper_decor.style.width = parseFloat(box_upper.offsetHeight) + 'px';
        upper_decor.style.maxWidth = 'unset';
        drawarea__update_cord();
    }
    
}

/**
 * Get the current rotation angle of an element in degrees.
 * @param {HTMLElement} el - The element to get the rotation angle from.
 * @returns {number} The current rotation angle of the element in degrees.
 */
function getCurrentRotation(el) {
    var st = window.getComputedStyle(el, null);
    var tm = st.getPropertyValue("-webkit-transform") ||
        st.getPropertyValue("-moz-transform") ||
        st.getPropertyValue("-ms-transform") ||
        st.getPropertyValue("-o-transform") ||
        st.getPropertyValue("transform")
    "none";
    if (tm != "none") {
        var values = tm.split('(')[1].split(')')[0].split(',');
        var angle = Math.round(Math.atan2(values[1], values[0]) * (180 / Math.PI));
        return (angle < 0 ? angle + 360 : angle);
    }
    return 0;
}

/**
 * Function to handle resizing of a box element based on mouse or touch events.
 * @param {Event} event - The event object triggering the resize.
 * @param {boolean} [left=false] - Indicates if resizing is happening towards the left.
 * @param {boolean} [top=false] - Indicates if resizing is happening towards the top.
 * @param {boolean} [xResize=false] - Indicates if resizing is happening along the x-axis.
 * @param {boolean} [yResize=false] - Indicates if resizing is happening along the y-axis.
 * @returns None
 */
function rotateBox(deg) {
    boxWrapper.style.transform = `rotate(${deg}deg)`;
}
// handle resize
var bottomMid = document.getElementById("box_upper__bottom-mid");

/**
 * Handles resizing of an element based on mouse or touch events.
 * @param {Event} event - The event object triggering the resize.
 * @param {boolean} [left=false] - Indicates if resizing is happening towards the left.
 * @param {boolean} [top=false] - Indicates if resizing is happening towards the top.
 * @param {boolean} [xResize=false] - Indicates if resizing is happening along the x-axis.
 * @param {boolean} [yResize=false] - Indicates if resizing is happening along the y-axis.
 * @returns None
 */
function resizeHandler(event, left = false, top = false, xResize = false, yResize = false) {

    touches = event.touches;
    console.log("touches "+touches);
    console.log("touches.lenght "+touches.lenght);
    console.log("event.touches[0].clientY "+event.touches[0].clientY);
    console.log("event.touches[1].clientY "+event.touches[1]);
    console.log("event.touches[2].clientY "+event.touches[2]);
    console.log("event.touches[3].clientY "+event.touches[3]);
    console.log("event.touches[4].clientY "+event.touches[4]);


    initX = boxWrapper.offsetLeft;
    initY = boxWrapper.offsetTop;

    if(event.clientX ) {
        mousePressX = event.clientX;
        mousePressY = event.clientY;
    }
    else {
        mousePressX = event.touches[0].clientX;
        mousePressY = event.touches[0].clientY;
    }

    mousePressX = event.touches[0].clientX;
    mousePressY = event.touches[0].clientY;
    

    initW = box_upper.offsetWidth;
    initH = box_upper.offsetHeight;
    initRotate = getCurrentRotation(boxWrapper);

    bw_h=parseFloat(boxWrapper.style.height)-100;
    console.log("mousePressY " + mousePressY);
    console.log("bw_h " + bw_h);

    if(parseFloat(mousePressY) < bw_h) {
        function eventMoveHandler(event) {
            var wDiff = event.clientX - mousePressX;
            var hDiff = event.clientY - mousePressY;


            if(event.clientX ) {
                var wDiff = event.clientX - mousePressX;
                var hDiff = event.clientY - mousePressY;
            }
            else {
                var wDiff = event.touches[0].clientX - mousePressX;
                var hDiff = event.touches[0].clientY - mousePressY;
            }

            console.log("initW " + initW);
            console.log("initH " + initH);
            console.log("initX " + initX);
            console.log("initY " + initY);


            var newW = initW,
                newH = initH,
                newX = initX,
                newY = initY;

            if(bw_h > newH) {
                if (xResize) {
                    if (left) {
                        newW = initW - wDiff;
                        newX = initX + wDiff;
                    } else {
                        newW = initW + wDiff;
                    }
                }
                if (yResize) {
                    if (top) {
                        newH = initH - hDiff;
                        newY = initY + hDiff;
                    } else {
                        newH = initH + hDiff;
                    }
                }
                if (document.querySelector("#box_upper").style.height == '1px') {
                    document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__upper_upperdecor.box__decor").style.opacity = "0";
                } else {
                    document.querySelector("#box-wrapper > div.drawarea__control.drawarea__left > div > div.box__upper_upperdecor.box__decor").style.opacity = "1";
                }
                resize(newW, newH);
                repositionElement(newX, newY);
            }
            
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

    
}
bottomMid.addEventListener('mousedown', e => resizeHandler(e, false, false, false, true));
bottomMid.addEventListener('touchstart', e => resizeHandler(e, false, false, false, true));


//   el.addEventListener('touchend', handleEnd);
//   el.addEventListener('touchcancel', handleCancel);
//   el.addEventListener('touchmove', handleMove);



// boxWrapper.addEventListener("touchstart", dragStart, false);
// boxWrapper.addEventListener("touchend", dragEnd, false);
// boxWrapper.addEventListener("touchmove", drag, false);

// function dragStart(e) {
//     if (e.type === "touchstart") {
//         initialX = e.touches[0].clientX - xOffset;
//         initialY = e.touches[0].clientY - yOffset;
//     } else {
//         initialX = e.clientX - xOffset;
//         initialY = e.clientY - yOffset;
//     }
//     if (e.target === box_upper) {
//         active = true;
//     }
// }

// function dragEnd(e) {
//     initialX = currentX;
//     initialY = currentY;
//     active = false;
// }

// function drag(e) {
//     if (active) {
//         e.preventDefault();
//         if (e.type === "touchmove") {
//             currentX = e.touches[0].clientX - initialX;
//             currentY = e.touches[0].clientY - initialY;
//         } else {
//             currentX = e.clientX - initialX;
//             currentY = e.clientY - initialY;
//         }
//         xOffset = currentX;
//         yOffset = currentY;
//         setTranslate(currentX, currentY, box_upper);
//     }
// }

// function setTranslate(w, h, el) {
//     // box_upper.style.width = w + 'px';
//     box_upper.style.height = h + 'px';
//     // boxWrapper.style.width = w;
//     boxWrapper.style.height = h;
//     upper_mm.value = (h - 44) * 10;
//     upper_decor.style.right = 21 + 'px';
//     upper_decor.style.width = (h - 44) + 'px';
//     drawarea__update_cord();
// }

