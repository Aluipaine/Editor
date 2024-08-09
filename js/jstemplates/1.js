let aukko_count = 0
modding = false
from_custom_mp = false
userinteraction = false
tomode_object = null

/**
 * This function is responsible for drawing a point on the screen based on the input step.
 * It creates a new point element with associated controls and settings.
 * @returns None
 */
// Рисование точки опоры на area canvas
function draw__point() {
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const input_step = document.querySelector("#step_drawscreen").value
	if (input_step == "drawscreen_section_one") {
		document
			.querySelector(
				"div.drawarea__controls.drawarea__controls_one > div.drawarea__controls_btns > div:nth-child(2)"
			)
			.click()
		return
		// let id = "mp" + Math.random().toString(16).slice(2).toLowerCase();

		// // Создаем блок
		// const newDiv = document.createElement("span");
		// const ba = document.querySelector("#box-wrapper");
		// const inputH = document.createElement('input');
		// const inputW = document.createElement('input');
		// inputH.setAttribute('type', 'num');
		// inputW.setAttribute('type', 'num');
		// newDiv.innerHTML = "";
		// const newDiv__comment = document.createElement("span");
		// newDiv__comment.innerHTML = "Mittapiste #" + mittapiste_count;
		// const newDiv__comment_settings = document.createElement("i");
		// const newDiv__comment_del = document.createElement("i");
		// // Расположение - по центру canvas
		// // newDiv.style.bottom = (canvas.offsetHeight / 2) + 'px';
		// // newDiv.style.left = (canvas.offsetWidth / 2) + 'px';
		// newDiv__comment_del.setAttribute("onclick",
		//   "obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();mittapiste_count-=1;");
		// newDiv__comment_settings.setAttribute("onclick",
		//   "open_element('"+id+"','"+parseFloat(newDiv.style.left)+"','"+parseFloat(newDiv.style.bottom)+"');submitprogress('','cancel','" +id + "','mp','" + t_array + "');mittapiste_count-=1;mp_previous_vord = '" + mp_previous_vord_ + "';"
		//   );
		// newDiv__comment_settings.innerHTML =
		//   "<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>";
		// newDiv__comment_del.innerHTML =
		//   '<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg>';
		// newDiv.setAttribute("id", id);
		// newDiv.dataset.no = mittapiste_count;
		// newDiv__comment_settings.classList.add("m_btn");
		// newDiv__comment_settings.classList.add("newDiv__comment_settings");
		// newDiv__comment_del.classList.add("newDiv__comment_del");
		// newDiv__comment_settings.setAttribute("name", id);
		// newDiv__comment_del.setAttribute("name", id);
		// newDiv__comment.appendChild(newDiv__comment_settings);
		// newDiv__comment.appendChild(newDiv__comment_del);
		// newDiv.setAttribute("onclick", "this.classList.toggle('comment__visible')");
		// newDiv.classList = "mittapiste_element";
		// newDiv.setAttribute("name", id);
		// document.querySelector("#box-wrapper > main").prepend(newDiv);
		// document.querySelector(".drawarea__controls_elementsone").prepend(newDiv__comment);
		//touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inputW, inputH);
	}
	if (input_step == "drawscreen_section_two") {
		settings__aukko()
		change__newdiv_cord()
	}
}
origo_position = "left_bottom"

/**
 * Moves the origin point on the draw area based on the direction specified in the button clicked.
 * @param {Event} e - The event object triggered by the button click.
 * @returns None
 */
function move_origo(e) {
	if (document.querySelector("#drawarea__origo_central")) {
		if (e.innerHTML == "Origo oikealle") {
			document.querySelector("#drawarea__origo_central").style.left =
				eval(document.querySelector("#drawarea_w").value / 5) - 1 + "px"
			e.innerHTML = "Origo ylös"
			document.querySelector("#drawarea__origo_central").style.bottom = "1px"
			origo_position = "right_bottom"
		} else if (e.innerHTML == "Origo ylös") {
			e.innerHTML = "Origo vasemmalle"
			document.querySelector("#drawarea__origo_central").style.bottom =
				eval(document.querySelector("#drawarea_h").value / 5) - 1 + "px"
			document.querySelector("#drawarea__origo_central").style.left =
				eval(document.querySelector("#drawarea_w").value / 5) - 1 + "px"
			origo_position = "right_top"
		} else if (e.innerHTML == "Origo vasemmalle") {
			document.querySelector("#drawarea__origo_central").style.left = "1px"
			e.innerHTML = "Origo alas"
			document.querySelector("#drawarea__origo_central").style.bottom =
				eval(document.querySelector("#drawarea_h").value / 5) - 1 + "px"
			origo_position = "left_top"
		} else if (e.innerHTML == "Origo alas") {
			document.querySelector("#drawarea__origo_central").style.left = "1px"
			document.querySelector("#drawarea__origo_central").style.bottom = "1px"
			e.innerHTML = "Origo oikealle"
			origo_position = "left_bottom"
		} else {
			document.querySelector("#drawarea__origo_central").style.left = "1px"
			e.innerHTML = "Origo oikealle"
			document.querySelector("#drawarea__origo_central").style.bottom = "1px"
			origo_position = "right_bottom"
		}
	}
}

/**
 * Opens an element based on the input step and adjusts its position and properties accordingly.
 * @param {string} element - The element to open.
 * @param {number} left_distance - The left distance of the element.
 * @param {number} right_distance - The right distance of the element.
 * @param {number} bottom_distance - The bottom distance of the element.
 * @param {number} top_distance - The top distance of the element.
 * @param {string} comment - The comment associated with the element.
 * @param {string} comment_from - The starting point of the comment.
 * @param {string} comment_to - The ending point of the comment.
 * @returns None
 */
function open_element(
	element,
	left_distance,
	right_distance,
	bottom_distance,
	top_distance,
	comment,
	comment_from,
	comment_to
) {
	if (input_step == "drawscreen_section_one") {
		document
			.querySelector("#drawscreen_section_one > div.modal-container")
			.classList.add("two")
		document
			.querySelector("#drawscreen_section_one > div.modal-container")
			.classList.remove("out")
		document.querySelector("body").classList.add("modal-active")
		settings__mitta()
		change__newdiv_cord()
		obj = element
		document.querySelector("#" + obj).remove()
		document.getElementsByName(element)[0].remove()
		document
			.querySelector("#setting__canvas_mitta > main > " + "#" + obj)
			.remove()
		document.querySelector("#cord_left").value = right_distance * 5
		document.querySelector("#cord_up").value = left_distance * 5
	}
	if (input_step == "drawscreen_section_two") {
		document
			.querySelector("#drawscreen_section_two > div.modal-container")
			.classList.add("two")
		document
			.querySelector("#drawscreen_section_two > div.modal-container")
			.classList.remove("out")
		document.querySelector("body").classList.add("modal-active")
		settings__mitta()
		change__newdiv_cord()

		aukko = document.querySelector("#" + element)
		// aukko.parentElement.remove();
		aukko_count -= 1

		///TYPE CHECKING FRUGALITY
		document.querySelector("#aukotcord_left").value = left_distance * 5
		document.querySelector("#aukotcord_right").value =
			(left_distance + right_distance) * 5
		document.querySelector("#aukotcord_low").value = bottom_distance * 5
		document.querySelector("#aukotcord_up").value =
			(bottom_distance + top_distance) * 5

		changedimensions_aukko()

		document.querySelector("#aukko_comment").value = comment
		document.querySelector("#aukko_comment_from").value = comment_from
		document.querySelector("#aukko_comment_to").value = comment_to
	}
	if (input_step == "drawscreen_section_three") {
		document.querySelector(".lv_modal").classList.add("two")
		document.querySelector(".lv_modal").classList.remove("out")
		document.querySelector("body").classList.add("modal-active")
		settings__mitta()
		change__newdiv_cord()

		obj = element
		document.querySelector("#" + obj).remove()
		lapivienti_count -= 1

		document.querySelector("#lapiviennit__sade_muucord").value =
			parseFloat(bottom_distance) * 5
		document.querySelector("#from__side_lapivienti + label").click()

		document.querySelector("#lvcord_low").value = right_distance * 5
		document.querySelector("#lvcord_left").value = left_distance * 5
		document.querySelector("#lv_comment").value = comment
		document.querySelector("#lv_comment_from").value = comment_from
	}
}
/**
 * Draws a hole or a pass-through element based on the input step provided.
 * @function draw__hole
 * @returns None
 */
function draw__hole() {
	// aukko_count += 1;
	const input_step = document.querySelector("#step_drawscreen").value
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	if (input_step == "drawscreen_section_two") {
		const newDiv = document.createElement("span")
		newDiv.innerHTML = ""
		var newDiv__comment = document.createElement("span")
		newDiv__comment.innerHTML = "Aukko" + "#" + aukko_count
		var newDiv__comment_settings = document.createElement("i")
		var newDiv__comment_del = document.createElement("i")
		newDiv__comment_del.setAttribute(
			"onclick",
			"obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();aukko_count-=1;"
		)
		newDiv__comment_settings.setAttribute(
			"onclick",
			"open_aukko(" + newDiv.getAttribute("name") + ")"
		)
		newDiv__comment_settings.innerHTML =
			"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>"
		newDiv__comment_del.innerHTML =
			"svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>"
		var id = "id" + Math.random().toString(16).slice(2).toLowerCase()
		newDiv.setAttribute("id", id)
		// newDiv__comment_settings.classList.add("m_btn");
		newDiv__comment_settings.classList.add("newDiv__comment_settings")
		newDiv__comment_del.classList.add("newDiv__comment_del")
		newDiv__comment_settings.setAttribute("name", id)
		newDiv__comment_del.setAttribute("name", id)
		newDiv__comment.appendChild(newDiv__comment_settings)
		newDiv__comment.appendChild(newDiv__comment_del)
		document.querySelector("#box-wrapper > main").prepend(newDiv)
		document
			.querySelector(".drawarea__controls_elementstwo")
			.prepend(newDiv__comment)
		newDiv.classList.add("aukko")
		// grabbing
	}
	if (input_step == "drawscreen_section_three") {
		var newDiv = document.createElement("span")
		newDiv.innerHTML = ""
		var newDiv__comment = document.createElement("span")
		newDiv__comment.innerHTML = "Läpivienti"
		var newDiv__comment_settings = document.createElement("i")
		var newDiv__comment_del = document.createElement("i")
		newDiv__comment_del.setAttribute(
			"onclick",
			"obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();"
		)
		newDiv__comment_settings.setAttribute(
			"onclick",
			"document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');enable__modding(document.querySelector('#'+obj));"
		)
		newDiv__comment_settings.innerHTML =
			"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>"
		newDiv__comment_del.innerHTML =
			"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>"
		var id = "id" + Math.random().toString(16).slice(2).toLowerCase()
		newDiv.setAttribute("id", id)
		// newDiv__comment_settings.classList.add("m_btn");
		newDiv__comment_settings.classList.add("newDiv__comment_settings")
		newDiv__comment_del.classList.add("newDiv__comment_del")
		newDiv__comment_settings.setAttribute("name", id)
		newDiv__comment_del.setAttribute("name", id)
		newDiv__comment.appendChild(newDiv__comment_settings)
		newDiv__comment.appendChild(newDiv__comment_del)
		document.querySelector("#box-wrapper > main").prepend(newDiv)
		document
			.querySelector(".drawarea__controls_elementsthree")
			.prepend(newDiv__comment)
		newDiv.classList.add("lapivienti")
		newDiv.addEventListener("mousedown", mouseDown, false)
		window.addEventListener("mouseup", mouseUp, false)

		function mouseUp() {
			window.removeEventListener("mousemove", divMove, true)
		}

		function mouseDown(e) {
			window.addEventListener("mousemove", divMove, true)
		}

		function divMove(e) {
			newDiv.style.position = "absolute"
			var mousePressX = e.clientX
			var mousePressY = e.clientY
			var wDiff = e.clientX - mousePressX
			var hDiff = e.clientY - mousePressY
			newDiv.style.bottom = e.clientY - e.clientY / 2 + "px"
			newDiv.style.left = e.clientX - e.clientX / 1.5 + "px"
		}
	}
}

/**
 * Updates the height and width coordinates for a wall element and sets the corresponding values in the draw area.
 * @param {HTMLElement} elem - The element whose parent contains the wall height and width inputs.
 * @returns None
 */
function transfer__height_cords(elem) {
	wallh_cord = parseFloat(
		elem.parentElement.querySelector(".wall_height").value
	)
	wallw_cord = parseFloat(elem.parentElement.querySelector(".wall_width").value)

	drawarea_h.value = wallh_cord
	drawarea_.value = wallw_cord

	// document.querySelector(".tohide__room_"+current_room.toLowerCase() + " .wall_height").value = wallh_cord;
	// document.querySelector(".tohide__room_"+current_room.toLowerCase() + " .wall_width").value = wallw_cord;
}
/**
 * Updates the coordinates and dimensions of the draw area based on user input.
 * If the maximum value is exceeded in either direction, the function returns early.
 * @returns None
 */
// 2.1 Cord
function drawarea__update_cord() {
	if (maxval) {
		mval_cord = maxval.split("|")[0]
		mval_dir = maxval.split("|")[1]
		if (
			(mval_dir === "y" && mval_cord > 3650) ||
			(mval_dir === "x" && mval_cord > 9999)
		) {
			return
		}
	}
	var height = document.querySelector("#box_h").value
	var width = document.querySelector("#box_w").value
	var c_up = parseFloat(document.querySelector(".box__upper_mm").value)
	var c_low = parseFloat(document.querySelector(".box__lower_mm").value)
	var c_left = parseFloat(document.querySelector(".box__left_mm").value)
	var c_right = parseFloat(document.querySelector(".box__right_mm").value)
	c_width = parseFloat(width) - parseFloat(c_left) - parseFloat(c_right)
	c_height = parseFloat(height) - parseFloat(c_up) - parseFloat(c_low)
	document.querySelector(".drawarea__w_cord").innerHTML = Math.floor(c_width)
	document.querySelector(".drawarea__h_cord").innerHTML = Math.floor(c_height)
	document.querySelector(".drawarea__h_cord").style.right =
		parseFloat(box_upper.offsetHeight) + 15 + "px"
	// document.querySelector('.drawarea__h_cord').style.left = ( (-1) * parseFloat(c_low) ) + 'px';
	// document.querySelector('.drawarea__w_cord').style.right = (parseFloat(c_right) ) + 'px';
	document.querySelector(".drawarea__w_cord").style.left =
		parseFloat(box_left.offsetWidth) + 15 + "px"
}

/**
 * Updates the area dimensions based on the provided maximum value.
 * @param {string} maxval - The maximum value for the area in the format "coordinate|direction".
 * @returns None
 */
function updatearea(maxval) {
	// 2.1 Cord
	if (maxval) {
		mval_cord = maxval.split("|")[0]
		mval_dir = maxval.split("|")[1]
		if (
			(mval_dir === "y" && mval_cord > 3650) ||
			(mval_dir === "x" && mval_cord > 9999)
		) {
			return
		}
	}
	var height = document.querySelector(".drawarea_h").value
	var width = document.querySelector(".drawarea_w").value
	var c_up = parseFloat(document.querySelector(".box__upper_mm").value)
	var c_low = parseFloat(document.querySelector(".box__lower_mm").value)
	var c_left = parseFloat(document.querySelector(".box__right_mm").value)
	var c_right = parseFloat(document.querySelector(".box__left_mm").value)
	c_width = parseFloat(width) - parseFloat(c_left) - parseFloat(c_right)
	c_height = parseFloat(height) - parseFloat(c_up) - parseFloat(c_low)
	document.querySelector(".drawarea_w").value = c_width
	document.querySelector(".drawarea_h").value = c_height
	document.querySelector("#box_left").style.height = 1 + "px"
	document.querySelector("#box_upper").style.width = 1 + "px"
	document.querySelector("#box_right").style.height = 1 + "px"
	document.querySelector("#box_lower").style.width = 1 + "px"
	document.querySelector(".box__lower_lowerdecor").style.left =
		-1 * parseFloat(height)
	document.querySelector(".box__upper_mm").value = "0"
	document.querySelector(".box__lower_mm").value = "0"
	document.querySelector(".box__right_mm").value = "0"
	document.querySelector(".box__left_mm").value = "0"
	document.querySelector("#box_upper").style.height = "1px"
	document.querySelector("#box_lower").style.height = "1px"
	document.querySelector("#box_right").style.width = "1px"
	document.querySelector("#box_left").style.width = "1px"

	try {
		changesize()
	} catch (error) {
		setTimeout(() => {
			changesize()
		}, 2000)
	}
}

/**
 * Adjusts the size of a box based on the input values and updates the corresponding elements.
 * @param {string} maxval - The maximum value for resizing the box.
 * @returns None
 */
function changesize__frominput(maxval) {
	if (maxval) {
		mval_cord = maxval.split("|")[0]
		mval_dir = maxval.split("|")[1]
		if (
			(mval_dir === "y" && mval_cord > 3650) ||
			(mval_dir === "x" && mval_cord > 9999)
		) {
			return
		}
	}
	var box = document.querySelector("#box-wrapper")
	var height = document.querySelector("#box_h").value
	var width = document.querySelector("#box_w").value
	var box_left = document.querySelector("#box_left")
	var box_upper = document.querySelector("#box_upper")
	var box_right = document.querySelector("#box_right")
	var box_lower = document.querySelector("#box_lower")
	var c_up = parseFloat(document.querySelector(".box__upper_mm").value)
	var c_low = parseFloat(document.querySelector(".box__lower_mm").value)
	var c_left = parseFloat(document.querySelector(".box__left_mm").value)
	var c_right = parseFloat(document.querySelector(".box__right_mm").value)
	box_upper.style.height = (c_up / height) * box.offsetHeight + 1 + "px"
	box_lower.style.height = (c_low / height) * box.offsetHeight + 1 + "px"
	box_left.style.width = (c_left / width) * box.offsetWidth + 1 + "px"
	box_right.style.width = (c_right / width) * box.offsetWidth + 1 + "px"
	drawarea__update_cord()
	gridify()

	document.querySelector(".kokonaisalue").value =
		document.querySelector("#drawarea_h").value +
		" " +
		document.querySelector("#drawarea_w").value

	changeheights()
}
/**
 * Updates the heights of elements based on the values of input fields.
 * Sets the value of the element with class "kokonaisalue" to the concatenated values of
 * elements with ids "drawarea_h" and "drawarea_w".
 * Updates the value of elements with class "wall_height" within elements with class "house__wall"
 * to the parsed float value of the element with id "drawarea_h".
 * @returns None
 */
function changeheights() {
	document.querySelector(".kokonaisalue").value =
		document.querySelector("#drawarea_h").value +
		" " +
		document.querySelector("#drawarea_w").value

	tochange_roomarray = document.querySelectorAll(".house__wall")

	for (var i = tochange_roomarray.length - 1; i >= 0; i--) {
		//  tochange_roomarray[i].querySelector(".wall_height").value = parseFloat(document.querySelector("#drawarea_h").value);
		//  console.log("tochange_roomarray[i].querySelector(.wall_height).value " + parseFloat(document.querySelector("#drawarea_h").value));
	}
}
/**
 * Adjusts the size of elements based on the maximum value provided.
 * @param {number} maxval - The maximum value for resizing elements.
 * @returns None
 */

function changesize(maxval, frominput) {
	if (
		frominput &&
		canvas.querySelector(".levyt") &&
		canvas.querySelector(".saumat__grandrow")
	) {
		if (
			canvas.querySelector(".levyt").innerHTML.length > 1 ||
			canvas.querySelector(".saumat__grandrow").innerHTML.length > 1
		) {
			canvas.querySelector(".saumat__grandrow").remove()
			canvas.querySelector(".levyt").innerHTML = ""
			if (canvas.querySelector(".rangat__grandrow")) {
				canvas.querySelector(".rangat__grandrow").remove()
			}
			if (canvas.querySelector(".listat__grandrow")) {
				canvas.querySelector(".listat__grandrow").remove()
			}
			alert(
				"Syystä että alueen koko on vaihtunut, piirrosalueen ladonta pyyhitty."
			)
		}
	}

	// if (input_step === "drawscreen_section_one") {
	measureforcross_h = document.querySelector(".drawarea_h").value
	measureforcross_w = document.querySelector(".drawarea_w").value
	if (
		current_room === "b" ||
		current_room === "d" ||
		current_room === "k" ||
		current_room === "l"
	) {
		document
			.querySelector(".modal-yes")
			.setAttribute(
				"onclick",
				"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(measureforcross_h);changeWidths_2(measureforcross_w);save_rooms();"
			)
	} else if (current_room === "a" || current_room === "c") {
		document
			.querySelector(".modal-yes")
			.setAttribute(
				"onclick",
				"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(measureforcross_h);changeWidths(measureforcross_w);save_rooms();"
			)
	}
	// }

	if (canvas.querySelectorAll(".mp").length > 0) {
		mps = canvas.querySelectorAll(".mp")
		mps.forEach((mp) => {
			if (
				canvas.offsetHeight < parseFloat(mp.style.bottom) ||
				canvas.offsetWidth < parseFloat(mp.style.left)
			) {
				console.log(mp.getAttribute("id"))
				document
					.querySelector(
						".newDiv__comment_del[name='" + mp.getAttribute("id") + "']"
					)
					.click()
				alert("Syystä että mittapiste on alueen ulkopuolella, se poistettiin")
			}
		})
	}

	try {
		changeheights()
		if (maxval) {
			reserve_maxval = maxval
			mval_cord = maxval.split("|")[0]
			mval_dir = maxval.split("|")[1]
			if (
				(mval_dir === "y" && mval_cord > 3650) ||
				(mval_dir === "x" && mval_cord > 9999)
			) {
				return
			}

			if (mval_dir == "y") {
				document.querySelector(".drawarea__left b.end_measure").innerHTML =
					parseFloat(mval_cord) - saumaset_hm
			} else if (mval_dir == "x") {
				document.querySelector(".drawarea__bottom b.end_measure").innerHTML =
					parseFloat(mval_cord) - saumaset_vm
			}
		}
		height = document.querySelector(".drawarea_h").value
		width = document.querySelector(".drawarea_w").value

		if (userinteraction === true) {
			thisroom = document.querySelector(
				".house__wall_" + current_room.toLowerCase()
			)

			thisroom.querySelectorAll("input")[0].value = parseFloat(height)
			thisroom.querySelectorAll("input")[1].value = parseFloat(width)

			document.querySelector(".question-container").classList.add("two")
			document.querySelector(".question-container").classList.remove("out")

			document.querySelector(
				"#house > div:nth-child(2) > div.house__wall.house__wall_two"
			).style.width = width / 20 + "px"
			document.querySelector(
				"#house > div:nth-child(2) > div.house__wall.house__wall_two"
			).style.height = height / 20 + "px"
			userinteraction = false
		}
	} catch (error) {
		setTimeout(() => {
			changesize(reserve_maxval)
		}, 500)
	}

	wall_oncross = document.querySelector(".current__housewall")

	wall_oncross.querySelectorAll("input")[0].value = parseFloat(height)
	wall_oncross.querySelectorAll("input")[1].value = parseFloat(width)

	document.querySelector(".box__lower_lowerdecor").style.maxWidth =
		height / 5 + "px"
	document.querySelector(".box__lower_lowerdecor").style.left =
		-1 * (height / 5 - 20) + "px"
	document.querySelector("#box_h").value = height
	document.querySelector("#box_w").value = width
	document.querySelector(".box__lower_lowerdecor").style.left =
		-1 * parseFloat(height)
	document.querySelector("#box-wrapper").style.height = height / 5 + "px"
	document.querySelector("#box-wrapper").style.width = width / 5 + "px"
	document.querySelector("#box-wrapper").style.minHeight = height / 5 + "px"
	document.querySelector("#box-wrapper").style.minWidth = width / 5 + "px"
	document.querySelector("#box-wrapper").style.maxHeight = height / 5 + "px"
	document.querySelector("#box-wrapper").style.maxWidth = width / 5 + "px"
	// } else {
	//   document.querySelector('.box__lower_lowerdecor').style.maxWidth = height/10 + "px";
	//   document.querySelector('.box__lower_lowerdecor').style.left = (-1) * ((height/10) - 20) + "px";
	//   document.querySelector('#box_h').value = height;
	//   document.querySelector('#box_w').value = width;
	//   document.querySelector(".box__lower_lowerdecor").style.left = -1 * parseFloat(height);
	//   document.querySelector("#box-wrapper").style.height = height/10 + "px";
	//   document.querySelector("#box-wrapper").style.width = width/10 + "px";
	// }
	document.querySelector("#box-wrapper > main").style.width = 100 + "%"
	document.querySelector("#box_left").style.height = 100 + "%"
	document.querySelector("#box_upper").style.width = 100 + "%"
	document.querySelector("#box_right").style.height = 100 + "%"
	document.querySelector("#box_lower").style.width = 100 + "%"
	document.querySelector("#box_left").style.maxHeight = 100 + "%"
	document.querySelector("#box_upper").style.maxWidth = 100 + "%"
	document.querySelector("#box_right").style.maxHeight = 100 + "%"
	document.querySelector("#box_lower").style.maxWidth = 100 + "%"
	document.querySelector("#box_left").style.maxWidth = 100 + "%"
	document.querySelector("#box_upper").style.maxHeight = 100 + "%"
	document.querySelector("#box_right").style.maxWidth = 100 + "%"
	document.querySelector("#box_lower").style.maxHeight = 100 + "%"
	// document.querySelector('.box-wrapper').style.height = 70 + "vh";
	// document.querySelector('.box-wrapper').style.width = '';
	// document.querySelector('.box-wrapper').style.aspectRatio = `${width} / ${height}`;
	gridify()

	try {
		let array__ofinputsx = []

		array__ofinputsy.push(document.querySelector("#cord_up"))
		array__ofinputsx.push(document.querySelector("#cord_left"))
		array__ofinputsx.push(document.querySelector("#aukotcord_left"))
		array__ofinputsx.push(document.querySelector("#aukotcord_right"))
		array__ofinputsy.push(document.querySelector("#aukotcord_low"))
		array__ofinputsy.push(document.querySelector("#aukotcord_up"))
		array__ofinputsy.push(document.querySelector("#lvcord_low"))
		array__ofinputsx.push(document.querySelector("#lvcord_left"))

		for (var i = 0; i < array__ofinputsx.length; i++) {
			array__ofinputsx[i].dataset.maximum = parseFloat(width)
		}

		for (var i = 0; i < array__ofinputsy.length; i++) {
			array__ofinputsy[i].dataset.maximum = parseFloat(height)
		}
	} catch (error) {}

	let array__ofinputsy = []

	changeheights()
	adjust_roomsizes()
}
/**
 * Adjusts the size and dimensions of various elements based on the provided max value.
 * @param {string} maxval - The maximum value for adjustment in the format "value|direction".
 * @returns None
 */
function changesize__bottom(maxval, frominput) {
	if (
		frominput &&
		canvas.querySelector(".levyt") &&
		canvas.querySelector(".saumat__grandrow")
	) {
		if (
			canvas.querySelector(".levyt").innerHTML.length > 1 ||
			canvas.querySelector(".saumat__grandrow").innerHTML.length > 1
		) {
			canvas.querySelector(".saumat__grandrow").remove()
			if (canvas.querySelector(".rangat__grandrow")) {
				canvas.querySelector(".rangat__grandrow").remove()
			}
			if (canvas.querySelector(".listat__grandrow")) {
				canvas.querySelector(".listat__grandrow").remove()
			}

			canvas.querySelector(".levyt").innerHTML = ""
			alert(
				"Syystä että alueen koko on vaihtunut, piirrosalueen ladonta pyyhitty."
			)
		}
	}
	if (maxval) {
		mval_cord = maxval.split("|")[0]
		mval_dir = maxval.split("|")[1]

		if (mval_dir == "x") {
			document.querySelector(".drawarea__bottom .end_measure").innerHTML =
				parseFloat(mval_cord) - saumaset_hm
		} else if (mval_dir == "y") {
			document.querySelector(".drawarea__left .end_measure").innerHTML =
				parseFloat(mval_cord) - saumaset_vm
		}

		if (
			(mval_dir === "y" && mval_cord > 3650) ||
			(mval_dir === "x" && mval_cord > 9999)
		) {
			return
		}
	}
	const height = document.querySelector("#box_h").value
	const width = document.querySelector("#box_w").value
	// document.querySelector(".canvas").style.height = 100 + "%";
	// document.querySelector(".canvas").style.width = 100 + "%";
	document.querySelector("#box_left").style.height = 100 + "%"
	document.querySelector("#box_upper").style.width = 100 + "%"
	document.querySelector("#box_right").style.height = 100 + "%"
	document.querySelector("#box_lower").style.width = 100 + "%"
	document.querySelector("#box_left").style.maxHeight = 100 + "%"
	document.querySelector("#box_upper").style.maxWidth = 100 + "%"
	document.querySelector("#box_right").style.maxHeight = 100 + "%"
	document.querySelector("#box_lower").style.maxWidth = 100 + "%"
	document.querySelector("#box_left").style.maxWidth = 100 + "%"
	document.querySelector("#box_upper").style.maxHeight = 100 + "%"
	document.querySelector("#box_right").style.maxWidth = 100 + "%" - 1 + "px"
	document.querySelector("#box_lower").style.maxHeight = 100 + "%"
	document.querySelector(".box-wrapper").style.width = ""
	document.querySelector(".box-wrapper").style.height = "70vh"
	document.querySelector(
		".box-wrapper"
	).style.aspectRatio = `${width} / ${height}`
	document.querySelector("#box-wrapper > main").style.width = 100 + "%"
	document.querySelector(
		"#box-wrapper > main"
	).style.aspectRatio = `${width} / ${height}`
	document.querySelector(".box__lower_lowerdecor").style.maxWidth =
		width / 5 + "px"
	document.querySelector(".box__lower_lowerdecor").style.left =
		-1 * (height / 5 - 20) + "px"
	document.querySelector(".drawarea_h").value = height
	document.querySelector(".drawarea_w").value = width
	document.querySelector(".box__lower_lowerdecor").style.left =
		-1 * parseFloat(height)
	gridify()

	let array__ofinputsy = []
	let array__ofinputsx = []

	array__ofinputsy.push(document.querySelector("#cord_up"))
	array__ofinputsx.push(document.querySelector("#cord_left"))
	array__ofinputsx.push(document.querySelector("#aukotcord_left"))
	array__ofinputsx.push(document.querySelector("#aukotcord_right"))
	array__ofinputsy.push(document.querySelector("#aukotcord_low"))
	array__ofinputsy.push(document.querySelector("#aukotcord_up"))
	array__ofinputsy.push(document.querySelector("#lvcord_low"))
	array__ofinputsx.push(document.querySelector("#lvcord_left"))

	for (var i = 0; i < array__ofinputsx.length; i++) {
		array__ofinputsx[i].dataset.maximum = parseFloat(width)
	}

	for (var i = 0; i < array__ofinputsy.length; i++) {
		array__ofinputsy[i].dataset.maximum = parseFloat(height)
	}

	changeheights()
}
/**
 * Function to handle settings related to measurements on the canvas.
 * @returns None
 */
mittapiste_count = 0
lapivienti_count = 0
mp_previous_vord = null
au_previous_vord = null
lv_previous_vord = null
prevdata = null

function settings__mitta() {
	const input_step = document.querySelector("#step_drawscreen").value
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	document.querySelector("#setting__canvas_mitta").style.height =
		document.querySelector("#box-wrapper").style.height
	document.querySelector("#setting__canvas_mitta").style.width =
		document.querySelector("#box-wrapper").style.width

	document
		.querySelector("#cord_up")
		.setAttribute("max", parseFloat(document.querySelector("#box_h").value))
	document
		.querySelector("#cord_left")
		.setAttribute("max", parseFloat(document.querySelector("#box_w").value))

	document.querySelector("#cord_up").setAttribute("type", "num")
	document.querySelector("#cord_left").setAttribute("type", "num")
	if (input_step == "drawscreen_section_one") {
		const mitta_settings = document
			.querySelector("#box-wrapper > main")
			.cloneNode(true)
		const mitta_origo = document
			.querySelector("#box-wrapper > div.drawarea__origo")
			.cloneNode(true)
		document.querySelector("#setting__canvas_mitta").innerHTML = ""
		document.querySelector("#setting__canvas_mitta").append(mitta_settings)
		document.querySelector("#setting__canvas_mitta").prepend(mitta_origo)
		document.querySelector("#box-wrapper")
		const newDiv = document.createElement("span")
		const inW = document.createElement("input")
		const inH = document.createElement("input")
		inW.setAttribute("type", "num")
		inH.setAttribute("type", "num")
		newDiv.classList.add("settings__mittapiste")
		newDiv.setAttribute("id", "settings__mittapiste")
		newDiv.innerHTML = ""
		document.querySelector("#setting__canvas_mitta > main").prepend(newDiv)
		newDiv.style.left = "0"
		newDiv.style.bottom = "0"
		newDiv.style.top = "unset"
		newDiv.style.right = "unset"

		if (origo_position === "left_bottom") {
			document.querySelector(".label_mp_cord_a").innerHTML = "Ylös"
			document.querySelector(".label_mp_cord_b").innerHTML = "Oikealle"
		} else if (origo_position === "right_bottom") {
			document.querySelector(".label_mp_cord_a").innerHTML = "Ylös"
			document.querySelector(".label_mp_cord_b").innerHTML = "Vasemmalle"
		} else if (origo_position === "right_top") {
			document.querySelector(".label_mp_cord_a").innerHTML = "Alas"
			document.querySelector(".label_mp_cord_b").innerHTML = "Vasemmalle"
		} else if (origo_position === "left_top") {
			document.querySelector(".label_mp_cord_a").innerHTML = "Alas"
			document.querySelector(".label_mp_cord_b").innerHTML = "Oikealle"
		} else {
			document.querySelector(".label_mp_cord_a").innerHTML = "Ylös"
			document.querySelector(".label_mp_cord_b").innerHTML = "Oikealle"
		}

		document.querySelector("#cord_up").value = 0
		document.querySelector("#cord_left").value = 0
		//touchedElement('.setting__canvas > .canvas', '#drawarea_w', '#drawarea_h', newDiv, 'elem', document.querySelector('#cord_left'), document.querySelector('#cord_up') );
	}
	if (input_step == "drawscreen_section_three") {
		var lapiviennit_settings = document
			.querySelector("#box-wrapper > main")
			.cloneNode(true)
		var lapiviennit_origo = document
			.querySelector("#box-wrapper > div.drawarea__origo")
			.cloneNode(true)
		document.querySelector("#setting__canvas_lapiviennit").innerHTML = ""
		document
			.querySelector("#setting__canvas_lapiviennit")
			.append(lapiviennit_settings)
		document
			.querySelector("#setting__canvas_lapiviennit")
			.prepend(lapiviennit_origo)
		document.querySelector("#setting__canvas_lapiviennit").style.height =
			document.querySelector("#box-wrapper").style.height
		document.querySelector("#setting__canvas_lapiviennit").style.width =
			document.querySelector("#box-wrapper").style.width
		var newDiv = document.createElement("span")
		newDiv.classList.add("settings__lv")
		newDiv.setAttribute("id", "settings__lv")
		newDiv.innerHTML = ""
		document
			.querySelector("#setting__canvas_lapiviennit > main")
			.prepend(newDiv)

		if (origo_position === "left_bottom") {
			document.querySelector(".label_lv_cord_a").innerHTML = "Ylös"
			document.querySelector(".label_lv_cord_b").innerHTML = "Oikealle"
		} else if (origo_position === "right_bottom") {
			document.querySelector(".label_lv_cord_a").innerHTML = "Ylös"
			document.querySelector(".label_lv_cord_b").innerHTML = "Vasemmalle"
		} else if (origo_position === "right_top") {
			document.querySelector(".label_lv_cord_a").innerHTML = "Alas"
			document.querySelector(".label_lv_cord_b").innerHTML = "Vasemmalle"
		} else if (origo_position === "left_top") {
			document.querySelector(".label_lv_cord_a").innerHTML = "Alas"
			document.querySelector(".label_lv_cord_b").innerHTML = "Oikealle"
		} else {
			document.querySelector(".label_lv_cord_a").innerHTML = "Ylös"
			document.querySelector(".label_lv_cord_b").innerHTML = "Oikealle"
		}
		// touchedElement('#setting__canvas_lapiviennit > main', '#box_w', '#box_h', newDiv, 'elem', document.querySelector('#lvcord_left'), document.querySelector('#lvcord_low') );
	}

	let array__ofinputsy = []
	let array__ofinputsx = []

	array__ofinputsy.push(document.querySelector("#cord_up"))
	array__ofinputsx.push(document.querySelector("#cord_left"))
	array__ofinputsx.push(document.querySelector("#aukotcord_left"))
	array__ofinputsx.push(document.querySelector("#aukotcord_right"))
	array__ofinputsy.push(document.querySelector("#aukotcord_low"))
	array__ofinputsy.push(document.querySelector("#aukotcord_up"))
	array__ofinputsy.push(document.querySelector("#lvcord_low"))
	array__ofinputsx.push(document.querySelector("#lvcord_left"))

	const i_height = document.querySelector("#box_h").value
	const i_width = document.querySelector("#box_w").value

	for (var i = 0; i < array__ofinputsx.length; i++) {
		array__ofinputsx[i].dataset.maximum = parseFloat(i_width)
	}

	for (var i = 0; i < array__ofinputsy.length; i++) {
		array__ofinputsy[i].dataset.maximum = parseFloat(i_height)
	}
}

/**
 * Updates the settings for the aukko canvas based on the input step value.
 * @returns None
 */
function settings__aukko() {
	const input_step = document.querySelector("#step_drawscreen").value
	var aukot_settings = document
		.querySelector("#box-wrapper > main")
		.cloneNode(true)
	var aukot_origo = document
		.querySelector("#box-wrapper > div.drawarea__origo")
		.cloneNode(true)
	document.querySelector("#setting__canvas_aukot").innerHTML = ""
	document.querySelector("#setting__canvas_aukot").append(aukot_settings)
	document.querySelector("#setting__canvas_aukot").prepend(aukot_origo)
	document.querySelector("#setting__canvas_aukot").style.height =
		document.querySelector("#box-wrapper").style.height
	document.querySelector("#setting__canvas_aukot").style.width =
		document.querySelector("#box-wrapper").style.width
	var newDiv = document.createElement("span")
	newDiv.classList.add("settings__aukko")
	newDiv.setAttribute("id", "settings__aukko")
	newDiv.innerHTML = ""
	document.querySelector("#setting__canvas_aukot > main").prepend(newDiv)
	if (input_step == "drawscreen_section_two") {
		// touchedElement('#setting__canvas_aukot > main', '#box_w', '#box_h', newDiv, 'elem', document.querySelector('#aukotcord_left'), document.querySelector('#aukotcord_up') );
		document.querySelector("#aukko_comment").value = ""
		document.querySelector("#aukko_comment_from").value = ""
		document.querySelector("#aukko_comment_to").value = ""
	}
	document.querySelector("#type__door").click()
}

/**
 * Sets the coordinates of different sections on the draw screen based on the input step.
 * @returns None
 */
function null__origo_cord() {
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	const input_step = document.querySelector("#step_drawscreen").value
	if (input_step == "drawscreen_section_one") {
		document.querySelector("#cord_up").value = "0"
		document.querySelector("#cord_left").value = "0"
		document.getElementById("settings__mittapiste").style.bottom = "0"
		document.getElementById("settings__mittapiste").style.left = "0"
	}
	if (input_step == "drawscreen_section_two") {
		document.querySelector("#aukotcord_up").value = "0"
		document.querySelector("#aukotcord_left").value = "0"
		document.getElementById("settings__aukko").style.bottom = "0"
		document.getElementById("settings__aukko").style.left = "0"
	}
	if (input_step == "drawscreen_section_three") {
		document.querySelector("#lvcord_low").value = "0"
		document.querySelector("#lvcord_left").value = "0"
		document.getElementById("settings__lv").style.bottom = "0"
		document.getElementById("settings__lv").style.left = "0"
	}
}

function elem_del(e, count) {
	console.log("elem_del CALLED")
	if (e) {
		obj = e.getAttribute("id")
	} else {
		return
	}
	names = document.getElementsByName(obj)
	for (var i = 0; i < names.length; i++) {
		names[i].remove()
	}

	if (document.getElementsByName(obj)[0]) {
		barent = document.getElementsByName(obj)[0]
		barent.remove()
	}

	e.remove()
}
/**
 * Retrieves coordinates from custom map points based on the argument provided.
 * @param {number} arg - The argument to match with the dataset number of map points.
 * @returns None
 */
function get_from_custom_mp(arg) {
	mp_s = canvas.querySelectorAll(".mp")
	bottomcord = 0
	leftcord = 0
	from_custom_mp = true
	if (input_step == "drawscreen_section_two") {
		for (var i = mp_s.length - 1; i >= 0; i--) {
			if (arg === parseFloat(mp_s[i].dataset.no)) {
				bottomcord = parseFloat(mp_s[i].style.bottom) * 5
				leftcord = parseFloat(mp_s[i].style.left) * 5
			}
		}
		document.querySelector("#aukotcord_left").value = 0
		document.querySelector("#aukotcord_low").value = 0

		mp_bottomcord = bottomcord
		mp_leftcord = leftcord

		// Deprecated 130324
		// document.querySelector("#aukotcord_left").value = leftcord;
		// document.querySelector("#aukotcord_low").value = bottomcord;
	}
	if (input_step == "drawscreen_section_three") {
		for (var i = mp_s.length - 1; i >= 0; i--) {
			if (arg === parseFloat(mp_s[i].dataset.no)) {
				bottomcord = parseFloat(mp_s[i].style.bottom) * 5
				leftcord = parseFloat(mp_s[i].style.left) * 5
			}
		}
		document.querySelector("#lvcord_left").value = 0
		document.querySelector("#lvcord_low").value = 0
		mp_bottomcord = bottomcord
		mp_leftcord = leftcord
		// document.querySelector("#lvcord_left").value = leftcord;
		// document.querySelector("#lvcord_low").value = bottomcord;
	}
}

/**
 * Changes the coordinates of specific div elements based on the input step value.
 * @returns None
 */
function change__newdiv_cord() {
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	const drawscreen_section_eight = document.querySelector(
		"#drawscreen_section_eight"
	)
	const input_step = document.querySelector("#step_drawscreen").value
	if (document.querySelector("#drawscreen_section_two")) {
		if (input_step == "drawscreen_section_one") {
			const newDiv = document.getElementById("settings__mittapiste")
			newDiv.style.bottom =
				eval(document.getElementById("cord_up").value / 5) + "px"
			newDiv.style.left =
				eval(document.getElementById("cord_left").value / 5) + "px"
		}
		if (input_step == "drawscreen_section_two") {
		}
		if (input_step == "drawscreen_section_three") {
			const newDiv = document.getElementById("settings__lv")
			newDiv.style.bottom =
				eval(document.getElementById("lvcord_low").value / 5) + "px"
			newDiv.style.left =
				eval(document.getElementById("lvcord_left").value / 5) + "px"
		}
	}
}

/**
 * Retrieves the coordinates of specific elements based on the input step.
 * @returns None
 */
function give__origo_cord() {
	const drawscreen_section_one = document.querySelector(
		"#drawscreen_section_one"
	)
	const drawscreen_section_two = document.querySelector(
		"#drawscreen_section_two"
	)
	const drawscreen_section_three = document.querySelector(
		"#drawscreen_section_three"
	)
	input_step = document.querySelector("#step_drawscreen").value
	if (input_step == "drawscreen_section_one") {
		getElementCoords("#cord_up", "#cord_left")
	}
	if (input_step == "drawscreen_section_two") {
		getElementCoords("#aukotcord_low", "#aukotcord_left")
	}
	if (input_step == "drawscreen_section_three") {
		getElementCoords("#lvcord_low", "#lvcord_left")
	}
}
/**
 * Creates a new element based on the mode, type, and other parameters provided.
 * @param {string} mode - The mode of the element.
 * @param {string} type - The type of the element.
 * @param {string} mode_name - The name of the mode.
 * @param {number} mode_ycord - The y-coordinate of the mode.
 * @param {number} mode_xcord - The x-coordinate of the mode.
 * @param {number} mode_hcord - The height coordinate of the mode.
 * @param {number} mode_wcord - The width coordinate of the mode.
 * @param {number} mode_count - The count of the mode.
 * @param {string
 */
// Создание отверстия
async function mitta__create_mitta(
	mode,
	type,
	mode_name,
	mode_ycord,
	mode_xcord,
	mode_hcord,
	mode_wcord,
	mode_count,
	mode_id,
	mode_specifications,
	ir_mitta_comment,
	ir_mitta_cfrom,
	ir_mitta_cto
) {
	if (modding === true) {
		correct_name = tomode_object.getAttribute("id")

		a_dels = document.querySelectorAll(".newDiv__comment_del")

		a_dels.forEach((a_del) => {
			if (a_del.getAttribute("name") === correct_name) {
				a_del.click()
				modding = false
				tomode_object = null
			}
		})
	}

	const newDiv = document.createElement("span")
	const newDiv__comment = document.createElement("span")
	const newDiv__hidden_attention = document.createElement("input")
	const newDiv__hidden_attentioncommmets = document.createElement("input")
	comment__container = document.createElement("div")
	comment__text = document.createElement("p")
	comment__from = document.createElement("strong")
	comment__to = document.createElement("strong")
	comment__container.classList.add("comment__container")
	comment__from.classList.add("comment__from")
	comment__to.classList.add("comment__to")
	newDiv.appendChild(comment__container)
	comment__container.appendChild(comment__text)
	comment__container.appendChild(comment__from)
	comment__container.appendChild(comment__to)
	newDiv.appendChild(newDiv__hidden_attention)
	newDiv.appendChild(newDiv__hidden_attentioncommmets)
	newDiv__comment_settings = document.createElement("i")
	newDiv__comment_del = document.createElement("i")
	newDiv__comment_settings.innerHTML =
		"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M7.00159 9.45C6.33358 9.45 5.69293 9.19188 5.22058 8.73241C4.74822 8.27295 4.48286 7.64978 4.48286 7C4.48286 6.35022 4.74822 5.72705 5.22058 5.26759C5.69293 4.80812 6.33358 4.55 7.00159 4.55C7.6696 4.55 8.31025 4.80812 8.7826 5.26759C9.25495 5.72705 9.52032 6.35022 9.52032 7C9.52032 7.64978 9.25495 8.27295 8.7826 8.73241C8.31025 9.19188 7.6696 9.45 7.00159 9.45ZM12.3485 7.679C12.3773 7.455 12.3989 7.231 12.3989 7C12.3989 6.769 12.3773 6.538 12.3485 6.3L13.8669 5.159C14.0037 5.054 14.0396 4.865 13.9533 4.711L12.514 2.289C12.4277 2.135 12.2334 2.072 12.075 2.135L10.2831 2.835C9.90892 2.562 9.52032 2.324 9.06695 2.149L8.80068 0.294C8.7719 0.126 8.62077 0 8.1086 0H5.56231C5.38241 0 5.23128 0.126 5.2025 0.294L4.93623 2.149C4.48286 2.324 4.09425 2.562 3.72004 2.835L1.92815 2.135C1.76983 2.072 1.57552 2.135 1.48917 2.289L0.0498936 4.711C-0.0436593 4.865 -0.000480936 5.054 0.13625 5.159L1.65468 6.3C1.6259 6.538 1.60431 6.769 1.60431 7C1.60431 7.231 1.6259 7.455 1.65468 7.679L0.13625 8.841C-0.000480936 8.946 -0.0436593 9.135 0.0498936 9.289L1.48917 11.711C1.57552 11.865 1.76983 11.921 1.92815 11.865L3.72004 11.158C4.09425 11.438 4.48286 11.676 4.93623 11.851L5.2025 13.706C5.23128 13.874 5.38241 14 5.56231 14H8.1086C8.62077 14 8.7719 13.874 8.80068 13.706L9.06695 11.851C9.52032 11.669 9.90892 11.438 10.2831 11.158L12.075 11.865C12.2334 11.921 12.4277 11.865 12.514 11.711L13.9533 9.289C14.0396 9.135 14.0037 8.946 13.8669 8.841L12.3485 7.679Z' fill='#222222'/></svg>"
	newDiv__comment_del.innerHTML =
		"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z' fill='#EB1010'/></svg>"
	// newDiv__comment_settings.classList.add("m_btn");
	newDiv__comment_settings.classList.add("newDiv__comment_settings")
	newDiv__comment_del.classList.add("newDiv__comment_del")
	document.querySelector("#box-wrapper > main").prepend(newDiv)
	newDiv.innerHTML = ""
	mittapiste_count = canvas.querySelectorAll(".mp").length + 1
	if (mode) {
		name = mode_name
		realname = name.split("#")[0]
		newDiv__comment.innerHTML =
			realname + "# <b class='mp_count'>" + mode_count + "</b>"
		let id = mode_id
		newDiv.setAttribute("id", id)
		newDiv__comment_settings.setAttribute("name", id)
		newDiv__comment_del.setAttribute("name", id)
		newDiv__comment.setAttribute("name", id)
		if (type == "mp") {
			newDiv__comment.innerHTML =
				document.querySelector("#mittapiste__name").value +
				"# <b class='mp_count'>" +
				mittapiste_count +
				"</b>"
			newDiv__hidden_attention.type = "hidden"
			newDiv__hidden_attention.name = "attentions"
			newDiv__hidden_attentioncommmets.type = "hidden"
			newDiv__hidden_attentioncommmets.name = "commmets"
			document
				.querySelector(".drawarea__controls_elementsone")
				.prepend(newDiv__comment)
			document
				.querySelector(".drawarea__controls_elementsone")
				.prepend(newDiv__hidden_attention)
			document
				.querySelector(".drawarea__controls_elementsone")
				.prepend(newDiv__hidden_attentioncommmets)

			newDiv.style.left =
				eval(document.querySelector("#cord_left").value) / 5 + "px"

			newDiv.style.bottom =
				eval(document.querySelector("#cord_up").value) / 5 + "px"

			if (document.querySelector("#cord_up").value == "") {
				newDiv.style.bottom = 0
			}
			// if (document.querySelector("#m__a_sahko").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_sahko").value + '. ';
			// }
			// if (document.querySelector("#m__a_putki").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_putki").value + '. ';
			// }
			// if (document.querySelector("#m__a_tornado").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_tornado").value + '. ';
			// }
			// if (document.querySelector("#mittapiste_comment").value != '') {
			//   newDiv__hidden_attentioncommmets.value += document.querySelector("#mittapiste_comment").value + '<br> Tältä: ' + document.querySelector(
			//     "#mittapiste_comment_from").value + '<br> Tälle: ' + document.querySelector("#mittapiste_comment_to").value;
			//   comment__text.innerHTML = document.querySelector("#mittapiste_comment").value;
			//   comment__from.innerHTML = document.querySelector("#mittapiste_comment_from").value;
			//   comment__to.innerHTML = document.querySelector("#mittapiste_comment_to").value;
			// }
			newDiv.setAttribute(
				"onclick",
				"this.classList.toggle('comment__visible')"
			)
			newDiv.classList.add("mp")
			let id =
				"mp" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
			newDiv.dataset.no = mittapiste_count
			newDiv__comment_settings.setAttribute("name", id)
			newDiv__comment_del.setAttribute("name", id)
			newDiv__comment.setAttribute("name", id)
			newDiv.setAttribute("id", id)
			newDiv__comment.appendChild(newDiv__comment_settings)
			newDiv__comment.appendChild(newDiv__comment_del)
			// const inH = document.createElement('input');
			// const inW = document.createElement('input');
			// inH.setAttribute('type', 'num');
			// inW.setAttribute('type', 'num');
			// touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );
			things_array = [
				'"' +
					newDiv__comment.innerText +
					"|" +
					"" +
					parseFloat(newDiv.style.bottom) * 5 +
					"|" +
					"" +
					parseFloat(newDiv.style.left) * 5 +
					"|" +
					newDiv.dataset.no +
					"|" +
					id +
					"|" +
					current_room +
					'__"',
			]

			t_array = JSON.parse(things_array)
			mp_prevdata = t_array
			mode_xcord = parseFloat(newDiv.style.left) * 5
			mode_ycord = parseFloat(newDiv.style.bottom) * 5

			newDiv__comment_del.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');delete_from_db('" +
					t_array +
					"');elem_del(document.querySelector('#'+obj), -1);"
			)
			newDiv__comment_settings.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();enable__modding(document.querySelector('#'+obj));"
			)
			// newDiv__comment_settings.setAttribute("onclick", " document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();delete_from_db('"+t_array+"');mp_previous_vord = '';");
		}
		if (type == "au") {
			if (canvas.querySelectorAll(".aukko").length >= 10) {
				alert("Huomio! Aukkoja voi olla yhdessä seinässä max 10.")
				return
			}
			changedimensions_aukko()
			const newDiv__height = document.createElement("b")
			const newDiv__width = document.createElement("b")
			const newDiv__y = document.createElement("i")
			const newDiv__x = document.createElement("i")

			newDiv__height.classList.add("newDiv__height")
			newDiv__width.classList.add("newDiv__width")
			newDiv__y.classList.add("newDiv__y")
			newDiv__x.classList.add("newDiv__x")
			newDiv__hidden_attention.type = "hidden"
			newDiv__hidden_attention.name = "aukko__attentions"
			newDiv__hidden_attentioncommmets.type = "hidden"
			newDiv__hidden_attentioncommmets.name = "aukko__commmets"
			newDiv.setAttribute(
				"onclick",
				"this.classList.toggle('comment__visible')"
			)
			document
				.querySelector(".drawarea__controls_elementstwo")
				.prepend(newDiv__comment)
			document
				.querySelector(".drawarea__controls_elementstwo")
				.prepend(newDiv__hidden_attention)
			document
				.querySelector(".drawarea__controls_elementstwo")
				.prepend(newDiv__hidden_attentioncommmets)
			newDiv.style.width =
				eval(parseFloat(document.querySelector("#hole__width").value) / 5) +
				"px"
			// parseFloat(parseFloat(document.querySelector("#hole__height").value)/5) + "px";
			newDiv.style.height =
				eval(parseFloat(document.querySelector("#hole__height").value) / 5) +
				"px"
			newDiv.style.bottom =
				eval(document.getElementById("aukotcord_low").value) / 5 + "px"
			newDiv.style.left =
				eval(document.getElementById("aukotcord_left").value) / 5 + "px"
			if (document.querySelector("#aukotcord_low").value == "") {
				newDiv.style.bottom = 0 + "px"
			}
			if (document.querySelector("#aukotcord_left").value == "") {
				newDiv.style.left = 0 + "px"
			}
			// if (document.querySelector("#m__a_sahko").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_sahko").value + '. ';
			// }
			// if (document.querySelector("#m__a_putki").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_putki").value + '. ';
			// }
			// if (document.querySelector("#m__a_tornado").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_tornado").value + '. ';
			// }
			if (document.querySelector("#aukko_comment").value != "") {
				newDiv__hidden_attentioncommmets.value +=
					document.querySelector("#aukko_comment").value +
					"<br> Tältä: " +
					document.querySelector("#aukko_comment_from").value +
					"<br> Tälle: " +
					document.querySelector("#aukko_comment_to").value
				comment__text.innerHTML = document.querySelector("#aukko_comment").value
				comment__from.innerHTML = document.querySelector(
					"#aukko_comment_from"
				).value
				comment__to.innerHTML =
					document.querySelector("#aukko_comment_to").value
			}
			newDiv.classList.add("aukko")
			newDiv.classList.add(mode_name)
			newDiv.dataset.no = canvas.querySelectorAll("." + mode_name).length
			newDiv__height.innerHTML = eval(
				document.getElementById("hole__height").value
			)
			newDiv__width.innerHTML = eval(
				document.getElementById("hole__width").value
			)
			newDiv__y.innerHTML =
				"Y: " + eval(document.getElementById("aukotcord_up").value)
			newDiv__x.innerHTML =
				"X: " + eval(document.getElementById("aukotcord_left").value)
			newDiv.appendChild(newDiv__height)
			newDiv.appendChild(newDiv__width)
			newDiv.appendChild(newDiv__y)
			newDiv.appendChild(newDiv__x)

			realcount = newDiv.dataset.no

			mode_name_title = mode_name.charAt(0).toUpperCase() + mode_name.slice(1)

			newDiv__comment.innerHTML =
				mode_name_title +
				" # <b class='aukko_count'>" +
				newDiv.dataset.no +
				"</b>"
			let id =
				"aukko" +
				Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
			newDiv.setAttribute("id", id)
			newDiv__comment_settings.setAttribute("name", id)
			newDiv__comment_del.setAttribute("name", id)
			newDiv__comment.setAttribute("name", id)
			newDiv__comment.appendChild(newDiv__comment_settings)
			newDiv__comment.appendChild(newDiv__comment_del)

			c_text = comment__text.innerHTML
			c_from = comment__from.innerHTML
			c_to = comment__to.innerHTML

			newDiv.dataset.comment = comment__text.innerHTML
			newDiv.dataset.comment_from = comment__from.innerHTML
			newDiv.dataset.comment_to = comment__to.innerHTML
			// const inH = document.createElement('input');
			// const inW = document.createElement('input');
			// inH.setAttribute('type', 'num');
			// inW.setAttribute('type', 'num');
			// touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );
			newDiv_title =
				eval(document.getElementById("hole__height").value) +
				"," +
				eval(document.getElementById("hole__width").value) +
				"," +
				eval(document.getElementById("aukotcord_up").value) +
				"," +
				eval(document.getElementById("aukotcord_left").value)
			newDiv.setAttribute("title", newDiv_title)
			things_array = [
				'"' +
					newDiv__comment.innerText +
					"|" +
					"" +
					parseFloat(newDiv.style.bottom) * 5 +
					"|" +
					"" +
					parseFloat(newDiv.style.left) * 5 +
					"|" +
					newDiv.dataset.no +
					"|" +
					id +
					"|" +
					eval(document.getElementById("hole__height").value) +
					"|" +
					"" +
					eval(document.getElementById("hole__width").value) +
					"|" +
					newDiv.classList +
					"|" +
					c_text +
					"|" +
					c_from +
					"|" +
					c_to +
					'__"',
			]

			newDiv.appendChild(comment__container)
			console.log(comment__container)

			t_array = JSON.parse(things_array)

			au_prevdata = t_array
			if (au_previous_vord !== null) {
				newDiv.dataset.prevcord = au_previous_vord
				au_previous_vord = null
			}
			au_previous_vord =
				"0|" +
				parseFloat(newDiv.style.bottom) * 5 +
				"|" +
				parseFloat(newDiv.style.left) * 5 +
				"|" +
				(parseFloat(newDiv.style.width) + 1) * 5 +
				"|" +
				parseFloat(newDiv.style.height) * 5
			newDiv__comment_del.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');delete_from_db('" +
					t_array +
					"');aukko_del(document.querySelector('#'+obj), -1);"
			)
			newDiv__comment_settings.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');open_element(this.getAttribute('name'),parseFloat(document.querySelector('#'+obj).style.left),parseFloat(document.querySelector('#'+obj).style.width),parseFloat(document.querySelector('#'+obj).style.bottom),parseFloat(document.querySelector('#'+obj).style.height),document.querySelector('#'+obj).dataset.comment,document.querySelector('#'+obj).dataset.comment_from,document.querySelector('#'+obj).dataset.comment_to);/*aukko_del(document.querySelector('#' + obj), -1);*/document.querySelector('#drawscreen_section_two > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_two > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');enable__modding(document.querySelector('#'+obj));"
			)

			aukko_lcord = document.createElement("div")
			aukko_lcord.classList.add("aukko__cord")
			aukko_lcord.classList.add("aukko_lcord")
			aukko_lcord.innerHTML = parseFloat(newDiv.style.left) * 5
			aukko_lcord.style.bottom =
				-1 * parseFloat(newDiv.style.bottom) - 32 + "px"
			newDiv.appendChild(aukko_lcord)

			aukko_rcord = document.createElement("div")
			aukko_rcord.classList.add("aukko__cord")
			aukko_rcord.classList.add("aukko_rcord")
			aukko_rcord.innerHTML =
				parseFloat(newDiv.style.left) * 5 + parseFloat(newDiv.style.width) * 5
			aukko_rcord.style.bottom =
				-1 * parseFloat(newDiv.style.bottom) - 32 + "px"
			newDiv.appendChild(aukko_rcord)

			aukko_tcord = document.createElement("div")
			aukko_tcord.classList.add("aukko__cord")
			aukko_tcord.classList.add("aukko_tcord")
			aukko_tcord.innerHTML =
				parseFloat(newDiv.style.bottom) * 5 +
				parseFloat(newDiv.style.height) * 5
			aukko_tcord.style.left = -1 * parseFloat(newDiv.style.left) - 32 + "px"
			newDiv.appendChild(aukko_tcord)

			aukko_bcord = document.createElement("div")
			aukko_bcord.classList.add("aukko__cord")
			aukko_bcord.classList.add("aukko_bcord")
			aukko_bcord.innerHTML = parseFloat(newDiv.style.bottom) * 5
			aukko_bcord.style.left = -1 * parseFloat(newDiv.style.left) - 32 + "px"
			newDiv.appendChild(aukko_bcord)

			aukko_lcord.dataset.from = parseFloat(aukko_lcord.innerHTML)
			aukko_rcord.dataset.from = parseFloat(aukko_rcord.innerHTML)
			aukko_tcord.dataset.from = parseFloat(aukko_tcord.innerHTML)
			aukko_bcord.dataset.from = parseFloat(aukko_bcord.innerHTML)

			aukko_inner_lcord = document.createElement("div")
			aukko_inner_lcord.classList.add("aukko_inner__cord")
			aukko_inner_lcord.classList.add("aukko_inner_lcord")
			aukko_inner_lcord.innerHTML =
				"x:" +
				parseFloat(newDiv.style.left) * 5 +
				"  <br/> y:" +
				(parseFloat(newDiv.style.height) * 5 +
					parseFloat(newDiv.style.bottom) * 5)
			aukko_inner_lcord.style.bottom =
				parseFloat(newDiv.style.height) - 25 + "px"
			aukko_inner_lcord.style.left = 10 + "px"
			newDiv.appendChild(aukko_inner_lcord)

			aukko_inner_rcord = document.createElement("div")
			aukko_inner_rcord.classList.add("aukko_inner__cord")
			aukko_inner_rcord.classList.add("aukko_inner_rcord")
			aukko_inner_rcord.innerHTML =
				"x:" +
				(parseFloat(newDiv.style.left) * 5 +
					parseFloat(newDiv.style.width) * 5) +
				"  <br/> y:" +
				(parseFloat(newDiv.style.height) * 5 +
					parseFloat(newDiv.style.bottom) * 5)
			aukko_inner_rcord.style.bottom =
				parseFloat(newDiv.style.height) - 25 + "px"
			aukko_inner_rcord.style.left =
				-32.5 + parseFloat(newDiv.style.width) + "px"
			newDiv.appendChild(aukko_inner_rcord)

			aukko_inner_tcord = document.createElement("div")
			aukko_inner_tcord.classList.add("aukko_inner__cord")
			aukko_inner_tcord.classList.add("aukko_inner_tcord")
			aukko_inner_tcord.innerHTML =
				"x:" +
				(parseFloat(newDiv.style.left) * 5 +
					parseFloat(newDiv.style.width) * 5) +
				"  <br/> y:" +
				parseFloat(newDiv.style.bottom) * 5
			aukko_inner_tcord.style.left =
				parseFloat(newDiv.style.width) - 32.5 + "px"
			aukko_inner_tcord.style.bottom = 10 + "px"
			newDiv.appendChild(aukko_inner_tcord)

			aukko_inner_bcord = document.createElement("div")
			aukko_inner_bcord.classList.add("aukko_inner__cord")
			aukko_inner_bcord.classList.add("aukko_inner_bcord")
			aukko_inner_bcord.innerHTML =
				"x:" +
				parseFloat(newDiv.style.left) * 5 +
				"  <br/> y:" +
				parseFloat(newDiv.style.bottom) * 5
			aukko_inner_bcord.style.left = 10 + "px"
			aukko_inner_bcord.style.bottom = 10 + "px"
			newDiv.appendChild(aukko_inner_bcord)

			aukko_inner_lcord.dataset.from = parseFloat(aukko_inner_lcord.innerHTML)
			aukko_inner_rcord.dataset.from = parseFloat(aukko_inner_rcord.innerHTML)
			aukko_inner_tcord.dataset.from = parseFloat(aukko_inner_tcord.innerHTML)
			aukko_inner_bcord.dataset.from = parseFloat(aukko_inner_bcord.innerHTML)

			ylitys__array(mode_name)

			saving_leftcord = parseFloat(newDiv.style.left) * 5
			saving_bottomcord = parseFloat(newDiv.style.bottom) * 5
			saving_w = parseFloat(newDiv.style.width) * 5
			saving_h = parseFloat(newDiv.style.height) * 5
			ylitys_mode = document.querySelector(
				".aukko_ylitys > input:checked"
			).value
			comment = newDiv.dataset.comment
			comment_from = newDiv.dataset.comment_from
			comment_to = newDiv.dataset.comment_to
		}
		if (type == "lv") {
			let id =
				"lv" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
			lapivienti_count += 1
			newDiv__hidden_attention.type = "hidden"
			newDiv__hidden_attention.name = "attentions"
			newDiv__hidden_attentioncommmets.type = "hidden"
			newDiv__hidden_attentioncommmets.name = "commmets"
			newDiv__comment.innerHTML =
				document.querySelector("#lv__name").value +
				"# <b class='lv_count'>" +
				lapivienti_count +
				"</b>"
			document
				.querySelector(".drawarea__controls_elementsthree")
				.prepend(newDiv__comment)
			document
				.querySelector(".drawarea__controls_elementsthree")
				.prepend(newDiv__hidden_attention)
			document
				.querySelector(".drawarea__controls_elementsthree")
				.prepend(newDiv__hidden_attentioncommmets)
			newDiv.setAttribute(
				"onclick",
				"this.classList.toggle('comment__visible')"
			)
			if (origo_position === "left_bottom") {
				newDiv.style.left =
					eval(document.querySelector("#lvcord_left").value) / 5 + "px"
				newDiv.style.bottom =
					eval(document.querySelector("#lvcord_low").value) / 5 + "px"
			} else if (origo_position === "right_bottom") {
				newDiv.style.left =
					parseFloat(canvas.offsetWidth) -
					eval(document.querySelector("#lvcord_left").value) / 5 +
					"px"
				newDiv.style.bottom =
					eval(document.querySelector("#lvcord_low").value) / 5 + "px"
			} else if (origo_position === "right_top") {
				newDiv.style.left =
					parseFloat(canvas.offsetWidth) -
					eval(document.querySelector("#lvcord_left").value) / 5 +
					"px"
				newDiv.style.bottom =
					parseFloat(canvas.offsetHeight) -
					eval(document.querySelector("#lvcord_low").value) / 5 +
					"px"
			} else if (origo_position === "left_top") {
				newDiv.style.left =
					eval(document.querySelector("#lvcord_left").value) / 5 + "px"
				newDiv.style.bottom =
					parseFloat(canvas.offsetHeight) -
					eval(document.querySelector("#lvcord_low").value) / 5 +
					"px"
			}

			// newDiv.style.bottom = (eval(document.getElementById("lvcord_low").value) / 5) + "px";
			// newDiv.style.left = (eval(document.getElementById("lvcord_left").value) / 5) + "px";

			newDiv.innerHTML = document.getElementById(
				"lapiviennit__sade_muucord"
			).value

			if (document.querySelector("#lvframing_dust").checked) {
				newDiv.dataset.lvframing = "dust"
			} else if (document.querySelector("#lvframing_frame").checked) {
				newDiv.dataset.lvframing = "frame"
			}

			if (
				document.getElementById("lapiviennit__sade_muucord").value.includes("x")
			) {
				lv_sade = document
					.getElementById("lapiviennit__sade_muucord")
					.value.split("x")
				newDiv.style.marginBottom = (-1 * lv_sade[0]) / 10 + "px"
				newDiv.style.marginLeft = (-1 * lv_sade[1]) / 10 + "px"

				newDiv.style.height = lv_sade[0] / 5 + "px"
				newDiv.style.width = lv_sade[1] / 5 + "px"

				newDiv.style.borderRadius = "0"
			} else {
				lv_sade = eval(
					document.getElementById("lapiviennit__sade_muucord").value
				)
				newDiv.style.marginBottom = (-1 * lv_sade) / 10 + "px"
				newDiv.style.marginLeft = (-1 * lv_sade) / 10 + "px"
				newDiv.style.height = lv_sade / 5 + "px"
				newDiv.style.width = lv_sade / 5 + "px"
			}

			if (document.querySelector("#lv_comment").value != "") {
				newDiv__hidden_attentioncommmets.value +=
					document.querySelector("#lv_comment").value +
					"<br> Tältä: " +
					document.querySelector("#lv_comment_from").value +
					"<br> Tälle: " +
					document.querySelector("#lv_comment_to").value
				comment__text.innerHTML = document.querySelector("#lv_comment").value
				comment__from.innerHTML =
					document.querySelector("#lv_comment_from").value
				comment__to.innerHTML = document.querySelector("#lv_comment_to").value
			}
			newDiv__comment.appendChild(newDiv__comment_settings)
			newDiv__comment.appendChild(newDiv__comment_del)
			newDiv.classList.add("lapivienti")
			newDiv.classList.add("lv")
			// Add styles to new lapivienti

			const height = document.querySelector("#box_h").value
			const width = document.querySelector("#box_w").value
			if (document.querySelector("#lapiviennit__sade_muucord").value != "") {
				newDiv.classList.add("lapivienti__customsize")
			}

			newDiv.setAttribute("id", id)
			newDiv.dataset.no = lapivienti_count
			newDiv__comment_settings.setAttribute("name", id)
			newDiv__comment_del.setAttribute("name", id)
			newDiv__comment.setAttribute("name", id)
			// const inH = document.createElement('input');
			// const inW = document.createElement('input');
			// inH.setAttribute('type', 'num');
			// inW.setAttribute('type', 'num');
			// touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );
			c_text = comment__text.innerText
			c_from = comment__from.innerText
			c_to = comment__to.innerText

			if (
				document.getElementById("lapiviennit__sade_muucord").value.includes("x")
			) {
				things_array = [
					'"' +
						newDiv__comment.innerText +
						"|" +
						"" +
						parseFloat(newDiv.style.bottom) * 5 +
						"|" +
						"" +
						parseFloat(newDiv.style.left) * 5 +
						"|" +
						newDiv.dataset.no +
						"|" +
						id +
						"|" +
						document.getElementById("lapiviennit__sade_muucord").value +
						"|" +
						c_text +
						"|" +
						c_from +
						"|" +
						c_to +
						'__"',
				]
			} else {
				things_array = [
					'"' +
						newDiv__comment.innerText +
						"|" +
						"" +
						parseFloat(newDiv.style.bottom) * 5 +
						"|" +
						"" +
						parseFloat(newDiv.style.left) * 5 +
						"|" +
						newDiv.dataset.no +
						"|" +
						id +
						"|" +
						lv_sade +
						"|" +
						c_text +
						"|" +
						c_from +
						"|" +
						c_to +
						'__"',
				]
			}

			t_array = JSON.parse(things_array)
			lv_prevdata = t_array
			console.log("Things_arraythings_array: " + things_array)
			console.log("Things_arrayt_array: " + t_array)
			lv_previous_vord_ =
				"0|" +
				parseFloat(newDiv.style.bottom) * 5 +
				"|" +
				parseFloat(newDiv.style.left) * 5
			newDiv__comment_del.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();lapivienti_count-=1;delete_from_db('" +
					t_array +
					"');elem_del(document.querySelector('#'+obj), -1);"
			)

			newDiv__comment_settings.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');open_element('" +
					id +
					"','" +
					parseFloat(newDiv.style.left) +
					"','" +
					parseFloat(newDiv.style.bottom) +
					"','" +
					parseFloat(newDiv.style.height) +
					"','" +
					parseFloat(newDiv.style.width) +
					"','" +
					c_text.innerText +
					"','" +
					document.querySelector("#lv_comment_from").value +
					"','" +
					document.querySelector("#lv_comment_to").value +
					"');lv_previous_vord = '" +
					lv_previous_vord_ +
					"';enable__modding(document.querySelector('#'+obj));"
			)

			// delete_from_db('"+t_array+"');

			if (lv_previous_vord !== null) {
				newDiv.dataset.prevcord = lv_previous_vord
				lv_previous_vord = null
			}

			aukko_lcord = document.createElement("div")
			aukko_lcord.classList.add("lv__cord")
			aukko_lcord.classList.add("lv_lcord")
			aukko_lcord.innerHTML = parseFloat(newDiv.style.bottom) * 5
			aukko_lcord.style.bottom =
				(-1 * parseFloat(newDiv.style.width)) / 2 - 12 + "px"
			newDiv.appendChild(aukko_lcord)

			aukko_bcord = document.createElement("div")
			aukko_bcord.classList.add("lv__cord")
			aukko_bcord.classList.add("lv_bcord")
			aukko_bcord.innerHTML = parseFloat(newDiv.style.left) * 5
			aukko_bcord.style.left =
				(-1 * parseFloat(newDiv.style.height)) / 2 - 15 + "px"
			newDiv.appendChild(aukko_bcord)
			// touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );

			newDiv.appendChild(comment__container)
			console.log(comment__container)

			if (document.querySelector("#lv_comment").value.length > 2) {
				comment__text.innerHTML = document.querySelector("#lv_comment").value
			} else {
				comment__text.innerHTML = ""
			}

			if (document.querySelector("#lv_comment_from").value.length > 2) {
				comment__from.innerHTML =
					document.querySelector("#lv_comment_from").value
			} else {
				comment__from.innerHTML = ""
			}

			if (document.querySelector("#lv_comment_to").value.length > 2) {
				comment__to.innerHTML = document.querySelector("#lv_comment_to").value
			} else {
				comment__to.innerHTML = ""
			}

			saving_leftcord = parseFloat(newDiv.style.left) * 5
			saving_bottomcord = parseFloat(newDiv.style.bottom) * 5
			saving_w = parseFloat(newDiv.style.width) * 5
			saving_h = parseFloat(newDiv.style.height) * 5

			if (
				document.getElementById("lapiviennit__sade_muucord").value.includes("x")
			) {
				border_radius = "0"
			} else {
				border_radius = "50%"
			}
		}
	} else {
		input_step = document.querySelector("#step_drawscreen").value
		if (input_step == "drawscreen_section_one") {
			if (canvas.querySelectorAll(".mp").length === 2) {
				alert("Maksimi mittapistemäärä on 2.")
				return
			}
			newDiv__comment.innerHTML =
				document.querySelector("#mittapiste__name").value +
				"# <b class='mp_count'>" +
				mittapiste_count +
				"</b>"
			newDiv__hidden_attention.type = "hidden"
			newDiv__hidden_attention.name = "attentions"
			newDiv__hidden_attentioncommmets.type = "hidden"
			newDiv__hidden_attentioncommmets.name = "commmets"
			document
				.querySelector(".drawarea__controls_elementsone")
				.prepend(newDiv__comment)
			document
				.querySelector(".drawarea__controls_elementsone")
				.prepend(newDiv__hidden_attention)
			document
				.querySelector(".drawarea__controls_elementsone")
				.prepend(newDiv__hidden_attentioncommmets)

			if (origo_position === "left_bottom") {
				newDiv.style.left =
					eval(document.querySelector("#cord_left").value) / 5 + "px"
				newDiv.style.bottom =
					eval(document.querySelector("#cord_up").value) / 5 + "px"
			} else if (origo_position === "right_bottom") {
				newDiv.style.left =
					parseFloat(canvas.offsetWidth) -
					eval(document.querySelector("#cord_left").value) / 5 +
					"px"
				newDiv.style.bottom =
					eval(document.querySelector("#cord_up").value) / 5 + "px"
			} else if (origo_position === "right_top") {
				newDiv.style.left =
					parseFloat(canvas.offsetWidth) -
					eval(document.querySelector("#cord_left").value) / 5 +
					"px"
				newDiv.style.bottom =
					parseFloat(canvas.offsetHeight) -
					eval(document.querySelector("#cord_up").value) / 5 +
					"px"
			} else if (origo_position === "left_top") {
				newDiv.style.left =
					eval(document.querySelector("#cord_left").value) / 5 + "px"
				newDiv.style.bottom =
					parseFloat(canvas.offsetHeight) -
					eval(document.querySelector("#cord_up").value) / 5 +
					"px"
			}

			if (document.querySelector("#cord_up").value == "") {
				newDiv.style.bottom = 0
			}
			// if (document.querySelector("#m__a_sahko").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_sahko").value + '. ';
			// }
			// if (document.querySelector("#m__a_putki").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_putki").value + '. ';
			// }
			// if (document.querySelector("#m__a_tornado").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_tornado").value + '. ';
			// }
			// if (document.querySelector("#mittapiste_comment").value != '') {
			//   newDiv__hidden_attentioncommmets.value += document.querySelector("#mittapiste_comment").value + '<br> Tältä: ' + document.querySelector(
			//     "#mittapiste_comment_from").value + '<br> Tälle: ' + document.querySelector("#mittapiste_comment_to").value;
			//   comment__text.innerHTML = document.querySelector("#mittapiste_comment").value;
			//   comment__from.innerHTML = document.querySelector("#mittapiste_comment_from").value;
			//   comment__to.innerHTML = document.querySelector("#mittapiste_comment_to").value;
			// }
			newDiv.setAttribute(
				"onclick",
				"this.classList.toggle('comment__visible')"
			)
			newDiv.classList.add("mp")
			let id =
				"mp" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
			newDiv.dataset.no = mittapiste_count
			newDiv__comment_settings.setAttribute("name", id)
			newDiv__comment_del.setAttribute("name", id)
			newDiv__comment.setAttribute("name", id)
			newDiv.setAttribute("id", id)
			newDiv__comment.appendChild(newDiv__comment_settings)
			newDiv__comment.appendChild(newDiv__comment_del)
			// const inH = document.createElement('input');
			// const inW = document.createElement('input');
			// inH.setAttribute('type', 'num');
			// inW.setAttribute('type', 'num');
			// touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );
			things_array = [
				'"' +
					newDiv__comment.innerText +
					"|" +
					"" +
					parseFloat(newDiv.style.bottom) * 5 +
					"|" +
					"" +
					parseFloat(newDiv.style.left) * 5 +
					"|" +
					newDiv.dataset.no +
					"|" +
					id +
					"|" +
					current_room +
					'__"',
			]

			t_array = JSON.parse(things_array)
			mp_prevdata = t_array

			mode_xcord = parseFloat(newDiv.style.left) * 5
			mode_ycord = parseFloat(newDiv.style.bottom) * 5
			save(
				"mp~~" +
					mode_xcord +
					"~~" +
					mode_ycord +
					"~~" +
					newDiv__comment.innerText
			)

			mp_previous_vord_ =
				"0|" +
				parseFloat(newDiv.style.bottom) * 5 +
				"|" +
				parseFloat(newDiv.style.left) * 5
			newDiv__comment_del.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');delete_from_db('" +
					t_array +
					"');elem_del(document.querySelector('#'+obj), -1);"
			)
			newDiv__comment_settings.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');document.querySelector('#drawscreen_section_one > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_one > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();enable__modding(document.querySelector('#'+obj));"
			)
			// delete_from_db('"+t_array+"');mittapiste_count-=1;mp_previous_vord = '" + mp_previous_vord_ + "';elem_del(document.querySelector('#'+obj), -1);
			if (mp_previous_vord !== null) {
				newDiv.dataset.prevcord = mp_previous_vord
				mp_previous_vord = null
			}
		}
		if (input_step == "drawscreen_section_two") {
			if (canvas.querySelectorAll(".aukko").length >= 10) {
				alert("Huomio! Aukkoja voi olla yhdessä seinässä max 10.")
				return
			}
			changedimensions_aukko()
			const newDiv__height = document.createElement("b")
			const newDiv__width = document.createElement("b")
			const newDiv__y = document.createElement("i")
			const newDiv__x = document.createElement("i")

			newDiv__height.classList.add("newDiv__height")
			newDiv__width.classList.add("newDiv__width")
			newDiv__y.classList.add("newDiv__y")
			newDiv__x.classList.add("newDiv__x")
			newDiv__hidden_attention.type = "hidden"
			newDiv__hidden_attention.name = "aukko__attentions"
			newDiv__hidden_attentioncommmets.type = "hidden"
			newDiv__hidden_attentioncommmets.name = "aukko__commmets"
			newDiv.setAttribute(
				"onclick",
				"this.classList.toggle('comment__visible')"
			)
			if (document.querySelector(".aukko_ylitys input")) {
				newDiv.dataset.settingsmode = document.querySelector(
					".aukko_ylitys input:checked"
				).value
			}
			document
				.querySelector(".drawarea__controls_elementstwo")
				.prepend(newDiv__comment)
			document
				.querySelector(".drawarea__controls_elementstwo")
				.prepend(newDiv__hidden_attention)
			document
				.querySelector(".drawarea__controls_elementstwo")
				.prepend(newDiv__hidden_attentioncommmets)

			if (from_custom_mp !== true) {
				if (origo_position === "left_bottom") {
					newDiv.style.left =
						eval(document.querySelector("#aukotcord_left").value) / 5 + "px"
					newDiv.style.bottom =
						eval(document.querySelector("#aukotcord_low").value) / 5 + "px"
				} else if (origo_position === "right_bottom") {
					newDiv.style.left =
						parseFloat(canvas.offsetWidth) -
						eval(document.querySelector("#aukotcord_left").value) / 5 +
						"px"
					newDiv.style.bottom =
						eval(document.querySelector("#aukotcord_low").value) / 5 + "px"
				} else if (origo_position === "right_top") {
					newDiv.style.left =
						parseFloat(canvas.offsetWidth) -
						eval(document.querySelector("#aukotcord_left").value) / 5 +
						"px"
					newDiv.style.bottom =
						parseFloat(canvas.offsetHeight) -
						eval(document.querySelector("#aukotcord_low").value) / 5 +
						"px"
				} else if (origo_position === "left_top") {
					newDiv.style.left =
						eval(document.querySelector("#aukotcord_left").value) / 5 + "px"
					newDiv.style.bottom =
						parseFloat(canvas.offsetHeight) -
						eval(document.querySelector("#aukotcord_low").value) / 5 +
						"px"
				}

				// newDiv.style.bottom = (eval(document.getElementById("aukotcord_low").value) / 5) + "px";
				// newDiv.style.left = (eval(document.getElementById("aukotcord_left").value) / 5) + 'px';
			} else {
				newDiv.style.left =
					parseFloat(mp_leftcord) / 5 +
					eval(document.querySelector("#aukotcord_left").value) / 5 +
					"px"
				newDiv.style.bottom =
					parseFloat(mp_bottomcord) / 5 +
					eval(document.querySelector("#aukotcord_low").value) / 5 +
					"px"
				from_custom_mp = false
			}
			newDiv.style.width =
				eval(parseFloat(document.querySelector("#hole__width").value) / 5) +
				"px"
			newDiv.style.height =
				eval(parseFloat(document.querySelector("#hole__height").value) / 5) +
				"px"

			if (
				document.querySelector("#aukotcord_low").value == "" ||
				document.querySelector("#aukotcord_left").value == "" ||
				document.querySelector("#aukotcord_right").value == "" ||
				document.querySelector("#aukotcord_up").value == ""
			) {
				alert(
					"Aukkoa ei lisätty, sillä jotain koordinaattia ei annettu. Kokeile uudelleen"
				)
				return
			}
			// if (document.querySelector("#m__a_sahko").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_sahko").value + '. ';
			// }
			// if (document.querySelector("#m__a_putki").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_putki").value + '. ';
			// }
			// if (document.querySelector("#m__a_tornado").checked) {
			//   newDiv__hidden_attention.value += document.querySelector("#m__a_tornado").value + '. ';
			// }
			if (document.querySelector("#aukko_comment").value != "") {
				newDiv__hidden_attentioncommmets.value +=
					document.querySelector("#aukko_comment").value +
					"<br> Tältä: " +
					document.querySelector("#aukko_comment_from").value +
					"<br> Tälle: " +
					document.querySelector("#aukko_comment_to").value
				comment__text.innerHTML = document.querySelector("#aukko_comment").value
				comment__from.innerHTML = document.querySelector(
					"#aukko_comment_from"
				).value
				comment__to.innerHTML =
					document.querySelector("#aukko_comment_to").value
			}
			newDiv.classList.add("aukko")
			newDiv__height.innerHTML = eval(
				document.getElementById("hole__height").value
			)
			newDiv__width.innerHTML = eval(
				document.getElementById("hole__width").value
			)
			newDiv__y.innerHTML =
				"Y: " + eval(document.getElementById("aukotcord_up").value)
			newDiv__x.innerHTML =
				"X: " + eval(document.getElementById("aukotcord_left").value)
			newDiv.appendChild(newDiv__height)
			newDiv.appendChild(newDiv__width)
			newDiv.appendChild(newDiv__y)
			newDiv.appendChild(newDiv__x)
			mytype = ""
			if (document.querySelector("#type__door").checked) {
				newDiv.dataset.no = canvas.querySelectorAll(".ovi").length + 1
				newDiv.classList.add("ovi")
				mytype = "ovi"
			}
			if (document.querySelector("#type__window").checked) {
				newDiv.dataset.no = canvas.querySelectorAll(".ikkuna").length + 1
				newDiv.classList.add("ikkuna")
				mytype = "ikkuna"
			}
			if (document.querySelector("#type__palkki").checked) {
				newDiv.dataset.no = canvas.querySelectorAll(".palkki").length + 1
				newDiv.classList.add("palkki")
				mytype = "palkki"
			}
			if (document.querySelector("#type__collar").checked) {
				newDiv.dataset.no = canvas.querySelectorAll(".pilari").length + 1
				newDiv.classList.add("pilari")
				mytype = "pilari"
			}
			if (document.querySelector("#type__ventilation").checked) {
				newDiv.dataset.no = canvas.querySelectorAll(".tuuletus").length + 1
				newDiv.classList.add("tuuletus")
				mytype = "tuuletus"
			}

			realcount = newDiv.dataset.no
			newDiv__comment.innerHTML =
				document.querySelector("#aukko__name").value +
				"# <b class='aukko_count'>" +
				newDiv.dataset.no +
				"</b>"
			let id =
				"aukko" +
				Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
			newDiv.setAttribute("id", id)
			newDiv__comment_settings.setAttribute("name", id)
			newDiv__comment_del.setAttribute("name", id)
			newDiv__comment.setAttribute("name", id)
			newDiv__comment.appendChild(newDiv__comment_settings)
			newDiv__comment.appendChild(newDiv__comment_del)

			c_text = comment__text.innerHTML
			c_from = comment__from.innerHTML
			c_to = comment__to.innerHTML

			newDiv.dataset.comment = comment__text.innerHTML
			newDiv.dataset.comment_from = comment__from.innerHTML
			newDiv.dataset.comment_to = comment__to.innerHTML
			// const inH = document.createElement('input');
			// const inW = document.createElement('input');
			// inH.setAttribute('type', 'num');
			// inW.setAttribute('type', 'num');
			// touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );
			newDiv_title =
				eval(document.getElementById("hole__height").value) +
				"," +
				eval(document.getElementById("hole__width").value) +
				"," +
				eval(document.getElementById("aukotcord_up").value) +
				"," +
				eval(document.getElementById("aukotcord_left").value)
			newDiv.setAttribute("title", newDiv_title)
			things_array = [
				'"' +
					newDiv__comment.innerText +
					"|" +
					"" +
					parseFloat(newDiv.style.bottom) * 5 +
					"|" +
					"" +
					parseFloat(newDiv.style.left) * 5 +
					"|" +
					newDiv.dataset.no +
					"|" +
					id +
					"|" +
					eval(document.getElementById("hole__height").value) +
					"|" +
					"" +
					eval(document.getElementById("hole__width").value) +
					"|" +
					newDiv.classList +
					"|" +
					c_text +
					"|" +
					c_from +
					"|" +
					c_to +
					'__"',
			]

			newDiv.appendChild(comment__container)
			console.log(comment__container)

			t_array = JSON.parse(things_array)

			au_prevdata = t_array

			if (au_previous_vord !== null) {
				newDiv.dataset.prevcord = au_previous_vord
				au_previous_vord = null
			}
			au_previous_vord =
				"0|" +
				parseFloat(newDiv.style.bottom) * 5 +
				"|" +
				parseFloat(newDiv.style.left) * 5 +
				"|" +
				(parseFloat(newDiv.style.width) + 1) * 5 +
				"|" +
				parseFloat(newDiv.style.height) * 5
			newDiv__comment_del.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');delete_from_db('" +
					t_array +
					"');aukko_del(document.querySelector('#'+obj), -1);"
			) //aukko_del(document.querySelector('#'+obj), -1);
			newDiv__comment_settings.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');open_element(this.getAttribute('name'),parseFloat(document.querySelector('#'+obj).style.left),parseFloat(document.querySelector('#'+obj).style.width),parseFloat(document.querySelector('#'+obj).style.bottom),parseFloat(document.querySelector('#'+obj).style.height),document.querySelector('#'+obj).dataset.comment,document.querySelector('#'+obj).dataset.comment_from,document.querySelector('#'+obj).dataset.comment_to);/*aukko_del(document.querySelector('#' + obj), -1);*/document.querySelector('#drawscreen_section_two > div.modal-container').classList.add('two');document.querySelector('#drawscreen_section_two > div.modal-container').classList.remove('out');document.querySelector('body').classList.add('modal-active');settings__mitta();change__newdiv_cord();obj = this.getAttribute('name');aukko_count -= 1;au_previous_vord = '" +
					au_previous_vord +
					"';select__ylitys(document.querySelector('#'+obj).dataset.settingsmode,document.querySelector('#'+obj));enable__modding(document.querySelector('#'+obj));"
			)
			// delete_from_db('"+t_array+"');

			aukko_lcord = document.createElement("div")
			aukko_lcord.classList.add("aukko__cord")
			aukko_lcord.classList.add("aukko_lcord")
			aukko_lcord.innerHTML = parseFloat(newDiv.style.left) * 5
			aukko_lcord.style.bottom =
				-1 * parseFloat(newDiv.style.bottom) - 32 + "px"
			newDiv.appendChild(aukko_lcord)

			aukko_rcord = document.createElement("div")
			aukko_rcord.classList.add("aukko__cord")
			aukko_rcord.classList.add("aukko_rcord")
			aukko_rcord.innerHTML =
				parseFloat(newDiv.style.left) * 5 + parseFloat(newDiv.style.width) * 5
			aukko_rcord.style.bottom =
				-1 * parseFloat(newDiv.style.bottom) - 32 + "px"
			newDiv.appendChild(aukko_rcord)

			aukko_tcord = document.createElement("div")
			aukko_tcord.classList.add("aukko__cord")
			aukko_tcord.classList.add("aukko_tcord")
			aukko_tcord.innerHTML =
				parseFloat(newDiv.style.bottom) * 5 +
				parseFloat(newDiv.style.height) * 5
			aukko_tcord.style.left = -1 * parseFloat(newDiv.style.left) - 32 + "px"
			newDiv.appendChild(aukko_tcord)

			aukko_bcord = document.createElement("div")
			aukko_bcord.classList.add("aukko__cord")
			aukko_bcord.classList.add("aukko_bcord")
			aukko_bcord.innerHTML = parseFloat(newDiv.style.bottom) * 5
			aukko_bcord.style.left = -1 * parseFloat(newDiv.style.left) - 32 + "px"
			newDiv.appendChild(aukko_bcord)

			aukko_lcord.dataset.from = parseFloat(aukko_lcord.innerHTML)
			aukko_rcord.dataset.from = parseFloat(aukko_rcord.innerHTML)
			aukko_tcord.dataset.from = parseFloat(aukko_tcord.innerHTML)
			aukko_bcord.dataset.from = parseFloat(aukko_bcord.innerHTML)

			aukko_inner_lcord = document.createElement("div")
			aukko_inner_lcord.classList.add("aukko_inner__cord")
			aukko_inner_lcord.classList.add("aukko_inner_lcord")
			aukko_inner_lcord.innerHTML =
				"x:" +
				parseFloat(newDiv.style.left) * 5 +
				"  <br/> y:" +
				(parseFloat(newDiv.style.height) * 5 +
					parseFloat(newDiv.style.bottom) * 5)
			aukko_inner_lcord.style.bottom =
				parseFloat(newDiv.style.height) - 25 + "px"
			aukko_inner_lcord.style.left = 10 + "px"
			newDiv.appendChild(aukko_inner_lcord)

			aukko_inner_rcord = document.createElement("div")
			aukko_inner_rcord.classList.add("aukko_inner__cord")
			aukko_inner_rcord.classList.add("aukko_inner_rcord")
			aukko_inner_rcord.innerHTML =
				"x:" +
				(parseFloat(newDiv.style.left) * 5 +
					parseFloat(newDiv.style.width) * 5) +
				"  <br/> y:" +
				(parseFloat(newDiv.style.height) * 5 +
					parseFloat(newDiv.style.bottom) * 5)
			aukko_inner_rcord.style.bottom =
				parseFloat(newDiv.style.height) - 25 + "px"
			aukko_inner_rcord.style.left =
				-32.5 + parseFloat(newDiv.style.width) + "px"
			newDiv.appendChild(aukko_inner_rcord)

			aukko_inner_tcord = document.createElement("div")
			aukko_inner_tcord.classList.add("aukko_inner__cord")
			aukko_inner_tcord.classList.add("aukko_inner_tcord")
			aukko_inner_tcord.innerHTML =
				"x:" +
				(parseFloat(newDiv.style.left) * 5 +
					parseFloat(newDiv.style.width) * 5) +
				"  <br/> y:" +
				parseFloat(newDiv.style.bottom) * 5
			aukko_inner_tcord.style.left =
				parseFloat(newDiv.style.width) - 32.5 + "px"
			aukko_inner_tcord.style.bottom = 10 + "px"
			newDiv.appendChild(aukko_inner_tcord)

			aukko_inner_bcord = document.createElement("div")
			aukko_inner_bcord.classList.add("aukko_inner__cord")
			aukko_inner_bcord.classList.add("aukko_inner_bcord")
			aukko_inner_bcord.innerHTML =
				"x:" +
				parseFloat(newDiv.style.left) * 5 +
				"  <br/> y:" +
				parseFloat(newDiv.style.bottom) * 5
			aukko_inner_bcord.style.left = 10 + "px"
			aukko_inner_bcord.style.bottom = 10 + "px"
			newDiv.appendChild(aukko_inner_bcord)

			aukko_inner_lcord.dataset.from = parseFloat(aukko_inner_lcord.innerHTML)
			aukko_inner_rcord.dataset.from = parseFloat(aukko_inner_rcord.innerHTML)
			aukko_inner_tcord.dataset.from = parseFloat(aukko_inner_tcord.innerHTML)
			aukko_inner_bcord.dataset.from = parseFloat(aukko_inner_bcord.innerHTML)

			ylitys__array(mytype)

			saving_leftcord = parseFloat(newDiv.style.left) * 5
			saving_bottomcord = parseFloat(newDiv.style.bottom) * 5
			saving_w = parseFloat(newDiv.style.width) * 5
			saving_h = parseFloat(newDiv.style.height) * 5
			ylitys_mode = document.querySelector(
				".aukko_ylitys > input:checked"
			).value
			comment = newDiv.dataset.comment
			comment_from = newDiv.dataset.comment_from
			comment_to = newDiv.dataset.comment_to

			await sleep(250)

			let lvs = [...canvas.querySelectorAll(".lv")]
			let aukko_coords = newDiv.getBoundingClientRect()
			let lv_remove_confirm = document.querySelector("#lv_remove_confirm")
			lvs = lvs.filter((lv) => {
				let lv_coords = lv.getBoundingClientRect()
				return (
					aukko_coords.left <= lv_coords.left &&
					aukko_coords.right >= lv_coords.right &&
					aukko_coords.bottom >= lv_coords.bottom &&
					aukko_coords.top <= lv_coords.top
				)
			})
			if (lvs.length) {
				lv_remove_confirm.showModal()
				lv_remove_confirm
					.querySelector(".okay")
					.addEventListener("click", () => {
						lv_remove_confirm.close()
						modal_result = 1
					})

				var modal_result = 0
				var modal_promise = new Promise((resolve) => {
					let interval = setInterval(() => {
						if (modal_result > 0) {
							clearInterval(interval)
							document
								.querySelector(
									`.drawarea__controls_three .newDiv__comment_del[name=${lvs[0].id}]`
								)
								.click()
							resolve(true)
						}
					}, 100)
				})

				await modal_promise
			}

			save(
				"au~~" +
					saving_leftcord +
					"~~" +
					saving_bottomcord +
					"~~" +
					(saving_leftcord + saving_w) +
					"~~" +
					(saving_bottomcord + saving_h) +
					"~~" +
					ylitys_mode +
					"~~" +
					comment +
					"~~" +
					comment_from +
					"~~" +
					comment_to +
					"~~" +
					mytype
			)
		}
		if (
			input_step == "drawscreen_section_three" ||
			input_step === "drawscreen_section_five"
		) {
			let id =
				"lv" + Math.random().toString(16).slice(2).toLowerCase().toLowerCase()
			lapivienti_count += 1
			newDiv__hidden_attention.type = "hidden"
			newDiv__hidden_attention.name = "attentions"
			newDiv__hidden_attentioncommmets.type = "hidden"
			newDiv__hidden_attentioncommmets.name = "commmets"
			newDiv__comment.innerHTML =
				document.querySelector("#lv__name").value +
				"# <b class='lv_count'>" +
				lapivienti_count +
				"</b>"
			document
				.querySelector(".drawarea__controls_elementsthree")
				.prepend(newDiv__comment)
			document
				.querySelector(".drawarea__controls_elementsthree")
				.prepend(newDiv__hidden_attention)
			document
				.querySelector(".drawarea__controls_elementsthree")
				.prepend(newDiv__hidden_attentioncommmets)
			newDiv.setAttribute(
				"onclick",
				"this.classList.toggle('comment__visible')"
			)

			if (from_custom_mp !== true) {
				if (origo_position === "left_bottom") {
					newDiv.style.left =
						eval(document.querySelector("#lvcord_left").value) / 5 + "px"
					newDiv.style.bottom =
						eval(document.querySelector("#lvcord_low").value) / 5 + "px"
				} else if (origo_position === "right_bottom") {
					newDiv.style.left =
						parseFloat(canvas.offsetWidth) -
						eval(document.querySelector("#lvcord_left").value) / 5 +
						"px"
					newDiv.style.bottom =
						eval(document.querySelector("#lvcord_low").value) / 5 + "px"
				} else if (origo_position === "right_top") {
					newDiv.style.left =
						parseFloat(canvas.offsetWidth) -
						eval(document.querySelector("#lvcord_left").value) / 5 +
						"px"
					newDiv.style.bottom =
						parseFloat(canvas.offsetHeight) -
						eval(document.querySelector("#lvcord_low").value) / 5 +
						"px"
				} else if (origo_position === "left_top") {
					newDiv.style.left =
						eval(document.querySelector("#lvcord_left").value) / 5 + "px"
					newDiv.style.bottom =
						parseFloat(canvas.offsetHeight) -
						eval(document.querySelector("#lvcord_low").value) / 5 +
						"px"
				}
			} else {
				newDiv.style.left =
					parseFloat(mp_leftcord) / 5 +
					eval(document.querySelector("#lvcord_left").value) / 5 +
					"px"
				newDiv.style.bottom =
					parseFloat(mp_bottomcord) / 5 +
					eval(document.querySelector("#lvcord_low").value) / 5 +
					"px"

				from_custom_mp = false
			}
			newDiv.innerHTML = document.getElementById(
				"lapiviennit__sade_muucord"
			).value

			if (
				document.getElementById("lapiviennit__sade_muucord").value.includes("x")
			) {
				lv_sade = document
					.getElementById("lapiviennit__sade_muucord")
					.value.split("x")
				newDiv.style.marginBottom = (-1 * lv_sade[0]) / 10 + "px"
				newDiv.style.marginLeft = (-1 * lv_sade[1]) / 10 + "px"

				newDiv.style.height = lv_sade[0] / 5 + "px"
				newDiv.style.width = lv_sade[1] / 5 + "px"

				newDiv.style.borderRadius = "0"
			} else {
				lv_sade = eval(
					document.getElementById("lapiviennit__sade_muucord").value
				)
				newDiv.style.marginBottom = (-1 * lv_sade) / 10 + "px"
				newDiv.style.marginLeft = (-1 * lv_sade) / 10 + "px"
				newDiv.style.height = lv_sade / 5 + "px"
				newDiv.style.width = lv_sade / 5 + "px"
			}

			if (document.querySelector("#lv_comment").value != "") {
				newDiv__hidden_attentioncommmets.value +=
					document.querySelector("#lv_comment").value +
					"<br> Tältä: " +
					document.querySelector("#lv_comment_from").value +
					"<br> Tälle: " +
					document.querySelector("#lv_comment_to").value
				comment__text.innerHTML = document.querySelector("#lv_comment").value
				comment__from.innerHTML =
					document.querySelector("#lv_comment_from").value
				comment__to.innerHTML = document.querySelector("#lv_comment_to").value
			}
			newDiv__comment.appendChild(newDiv__comment_settings)
			newDiv__comment.appendChild(newDiv__comment_del)
			newDiv.classList.add("lapivienti")
			newDiv.classList.add("lv")
			// Add styles to new lapivienti

			const height = document.querySelector("#box_h").value
			const width = document.querySelector("#box_w").value
			if (document.querySelector("#lapiviennit__sade_muucord").value != "") {
				newDiv.classList.add("lapivienti__customsize")
			}

			newDiv.setAttribute("id", id)
			newDiv.dataset.no = lapivienti_count
			newDiv__comment_settings.setAttribute("name", id)
			newDiv__comment_del.setAttribute("name", id)
			newDiv__comment.setAttribute("name", id)
			// const inH = document.createElement('input');
			// const inW = document.createElement('input');
			// inH.setAttribute('type', 'num');
			// inW.setAttribute('type', 'num');
			// touchedElement('#box-wrapper > main', '#drawarea_w', '#drawarea_h', newDiv, 'elem', inH, inW );
			c_text = comment__text.innerText
			c_from = comment__from.innerText
			c_to = comment__to.innerText

			if (
				document.getElementById("lapiviennit__sade_muucord").value.includes("x")
			) {
				things_array = [
					'"' +
						newDiv__comment.innerText +
						"|" +
						"" +
						parseFloat(newDiv.style.bottom) * 5 +
						"|" +
						"" +
						parseFloat(newDiv.style.left) * 5 +
						"|" +
						newDiv.dataset.no +
						"|" +
						id +
						"|" +
						document.getElementById("lapiviennit__sade_muucord").value +
						"|" +
						c_text +
						"|" +
						c_from +
						"|" +
						c_to +
						'__"',
				]
			} else {
				things_array = [
					'"' +
						newDiv__comment.innerText +
						"|" +
						"" +
						parseFloat(newDiv.style.bottom) * 5 +
						"|" +
						"" +
						parseFloat(newDiv.style.left) * 5 +
						"|" +
						newDiv.dataset.no +
						"|" +
						id +
						"|" +
						lv_sade +
						"|" +
						c_text +
						"|" +
						c_from +
						"|" +
						c_to +
						'__"',
				]
			}

			t_array = JSON.parse(things_array)
			lv_prevdata = t_array
			console.log("Things_arraythings_array: " + things_array)
			console.log("Things_arrayt_array: " + t_array)
			lv_previous_vord_ =
				"0|" +
				parseFloat(newDiv.style.bottom) * 5 +
				"|" +
				parseFloat(newDiv.style.left) * 5
			newDiv__comment_del.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();lapivienti_count-=1;delete_from_db('" +
					t_array +
					"');"
			)

			newDiv__comment_settings.setAttribute(
				"onclick",
				"obj = this.getAttribute('name');open_element('" +
					id +
					"','" +
					parseFloat(newDiv.style.left) +
					"','" +
					parseFloat(newDiv.style.bottom) +
					"','" +
					parseFloat(newDiv.style.height) +
					"','" +
					parseFloat(newDiv.style.width) +
					"','" +
					c_text.innerText +
					"','" +
					document.querySelector("#lv_comment_from").value +
					"','" +
					document.querySelector("#lv_comment_to").value +
					"');lv_previous_vord = '" +
					lv_previous_vord_ +
					"';enable__modding(document.querySelector('#'+obj));"
			)
			// delete_from_db('"+t_array+"');
			if (lv_previous_vord !== null) {
				newDiv.dataset.prevcord = lv_previous_vord
				lv_previous_vord = null
			}

			aukko_lcord = document.createElement("div")
			aukko_lcord.classList.add("lv__cord")
			aukko_lcord.classList.add("lv_lcord")
			aukko_lcord.innerHTML = parseFloat(newDiv.style.bottom) * 5
			aukko_lcord.style.bottom =
				(-1 * parseFloat(newDiv.style.width)) / 2 - 12 + "px"
			newDiv.appendChild(aukko_lcord)

			aukko_bcord = document.createElement("div")
			aukko_bcord.classList.add("lv__cord")
			aukko_bcord.classList.add("lv_bcord")
			aukko_bcord.innerHTML = parseFloat(newDiv.style.left) * 5
			aukko_bcord.style.left =
				(-1 * parseFloat(newDiv.style.height)) / 2 - 15 + "px"
			newDiv.appendChild(aukko_bcord)
			// touchedElement('#box-wrapper > main', '#box_w', '#box_h', newDiv, 'elem', inH, inW );

			newDiv.appendChild(comment__container)
			console.log(comment__container)

			if (document.querySelector("#lv_comment").value.length > 2) {
				comment__text.innerHTML = document.querySelector("#lv_comment").value
			} else {
				comment__text.innerHTML = ""
			}

			if (document.querySelector("#lv_comment_from").value.length > 2) {
				comment__from.innerHTML =
					document.querySelector("#lv_comment_from").value
			} else {
				comment__from.innerHTML = ""
			}

			if (document.querySelector("#lv_comment_to").value.length > 2) {
				comment__to.innerHTML = document.querySelector("#lv_comment_to").value
			} else {
				comment__to.innerHTML = ""
			}

			saving_leftcord = parseFloat(newDiv.style.left) * 5
			saving_bottomcord = parseFloat(newDiv.style.bottom) * 5
			saving_w = parseFloat(newDiv.style.width) * 5
			saving_h = parseFloat(newDiv.style.height) * 5

			await sleep(250)

			let aukkos = [...canvas.querySelectorAll(".aukko")]
			let lv_coords = newDiv.getBoundingClientRect()
			let lv_remove_confirm = document.querySelector("#lv_remove_confirm")
			if (
				aukkos.filter((aukko) => {
					let aukko_coords = aukko.getBoundingClientRect()
					return (
						aukko_coords.left <= lv_coords.left &&
						aukko_coords.right >= lv_coords.right &&
						aukko_coords.bottom >= lv_coords.bottom &&
						aukko_coords.top <= lv_coords.top
					)
				}).length
			) {
				lv_remove_confirm.showModal()
				lv_remove_confirm
					.querySelector(".okay")
					.addEventListener("click", () => {
						lv_remove_confirm.close()
						modal_result = 1
					})

				var modal_result = 0
				var modal_promise = new Promise((resolve) => {
					let interval = setInterval(() => {
						if (modal_result > 0) {
							clearInterval(interval)
							document
								.querySelector(
									`.drawarea__controls_three .newDiv__comment_del[name=${newDiv.id}]`
								)
								.click()
							resolve(true)
						}
					}, 100)
				})

				await modal_promise
			}

			lapiviennit__sade_muucord = document.querySelector(
				"#lapiviennit__sade_muucord"
			).value

			if (document.querySelector("#lvframing_dust").checked) {
				newDiv.dataset.lvframing = "dust"
			} else if (document.querySelector("#lvframing_frame").checked) {
				newDiv.dataset.lvframing = "frame"
			}
			save(
				"lv~~" +
					lapiviennit__sade_muucord +
					"~~" +
					saving_leftcord +
					"~~" +
					saving_bottomcord +
					"~~" +
					document.querySelector("#lapiviennit__sade_muucord").value +
					"~~" +
					document.querySelector("#lv_comment").value +
					"~~" +
					document.querySelector("#lv_comment_from").value +
					"~~" +
					document.querySelector("#lv_comment_to").value +
					"~~" +
					newDiv.dataset.lvframing
			)
		}
	}

	if (
		canvas.querySelector(".levyt") &&
		canvas.querySelector(".saumat__grandrow")
	) {
		if (
			canvas.querySelector(".levyt").innerHTML.length > 1 ||
			canvas.querySelector(".saumat__grandrow").innerHTML.length > 1
		) {
			canvas.querySelector(".saumat__grandrow").remove()
			canvas.querySelector(".levyt").innerHTML = ""
			if (canvas.querySelector(".rangat__grandrow")) {
				canvas.querySelector(".rangat__grandrow").remove()
			}
			if (canvas.querySelector(".listat__grandrow")) {
				canvas.querySelector(".listat__grandrow").remove()
			}

			document.querySelector(
				".drawarea__controls_four-pysty.drawarea__controls_fouritems"
			).innerHTML = ""
			document.querySelector(
				".drawarea__controls_four-vaaka.drawarea__controls_fouritems"
			).innerHTML = ""
			alert(
				"Syystä että alueelle tuli uusia huomiota kaipaavia kohteita, piirrosalueen vanhentunut ladonta on pyyhitty. Tee ladonta uudelleen."
			)
			if (input_step === "drawscreen_section_five") {
				let preloader = $(".preloader"),
					step_drawscreen = $("#step_drawscreen")
				preloader.addClass("active")
				step_drawscreen.val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				await sleep(1000)
				$(".sauma_as .drawarea__controls_btn").trigger("click")
				await sleep(1000)
				step_drawscreen.val("drawscreen_section_tyostot")
				refresh__drawcontrols()
				updatearea()
				await sleep(1000)
				step_drawscreen.val("drawscreen_section_five")
				refresh__drawcontrols()
				updatearea()
				await sleep(1000)
				preloader.removeClass("active")
			}
		}
	}

	// document.querySelector(".drawarea__bottom");
	count__mp()
	count__lv()
}

/**
 * Checks the input value against the maximum value and updates the styling of the input element and related buttons accordingly.
 * @param {HTMLElement} inp - The input element to check.
 * @returns None
 */
function cord__check(inp) {
	console.log(
		"Cord check inp " +
			parseFloat(inp.value) +
			" --- " +
			parseFloat(inp.getAttribute("max"))
	)

	if (parseFloat(inp.value) > parseFloat(inp.dataset.maximum)) {
		inp.style.border = "3px dashed red"
		document.querySelector(
			"#drawscreen_section_one .drawarea__controls_btn"
		).style.display = "none"
		document.querySelector(
			"#drawscreen_section_two .drawarea__controls_btn"
		).style.display = "none"
		document.querySelector(
			"#drawscreen_section_three .drawarea__controls_btn"
		).style.display = "none"
	} else {
		inp.style.border = "unset"
		inp.style.borderBottom = "1px solid #000"
		document.querySelector(
			"#drawscreen_section_one .drawarea__controls_btn"
		).style.display = "flex"
		document.querySelector(
			"#drawscreen_section_two .drawarea__controls_btn"
		).style.display = "flex"
		document.querySelector(
			"#drawscreen_section_three .drawarea__controls_btn"
		).style.display = "flex"
	}
}

function enable__modding(object) {
	modding = true
	tomode_object = object
}

function select__ylitys(setmode, object) {
	input_types = document.querySelectorAll(".aukko_ylitys input")

	input_types.forEach((type) => {
		if (type.value === setmode) {
			type.checked = true
		}
	})
}

function count__mp() {
	mps = canvas.querySelectorAll(".mp")
	mp_count = 0
	mps.forEach((mp) => {
		mp_count += 1
		mp.dataset.no = mp_count
		obj = mp.getAttribute("id")
		names = document.getElementsByName(obj)
		for (var i = 0; i < names.length; i++) {
			if (names[i].querySelector(".mp_count")) {
				names[i].querySelector(".mp_count").innerHTML = mp_count
			}
		}
	})
}
function count__lv() {
	lvs = canvas.querySelectorAll(".lv")
	lv_count = 0
	lvs.forEach((lv) => {
		lv_count += 1
		lv.dataset.no = lv_count
		obj = lv.getAttribute("id")
		names = document.getElementsByName(obj)
		for (var i = 0; i < names.length; i++) {
			if (names[i].querySelector(".lv_count")) {
				names[i].querySelector(".lv_count").innerHTML = lv_count
			}
		}
	})
}
