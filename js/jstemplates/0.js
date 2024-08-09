/**
 * This function is used to change the value of a room based on the user's input.
 * It updates the room value in the UI and makes an AJAX call to update the room value on the server.
 * @param {HTMLElement} order - The element triggering the change event.
 * @returns None
 */
let currect_arak = undefined

current_apartment = null
function rooms__change_asjarj(order) {
	asj = order.dataset.tochange
	mode_room = asj.toLowerCase()
	ir_value = document.querySelector(
		".asjarj" + mode_room.toLowerCase() + ""
	).innerHTML = parseFloat(order.value)

	$.ajax({
		url: "/update-walls.php",
		type: "post",
		data: {
			project_id: document.querySelector("#current_project_id").value,
			username: document.querySelector("#current_user").value,
			arak: currect_arak,
			wall: mode_room,
			asjarj: ir_value,
		},
		success: (answer) => {
			console.log(answer)
		},
	})
}

/**
 * Changes the name of a room based on the provided order.
 * @param {HTMLElement} order - The element containing the order information.
 * @returns None
 */
function rooms__change_name(order) {
	asj = order.dataset.tochange
	mode_room = asj.toLowerCase()
	ir_value = document.querySelector(
		".house__wall_status_" + mode_room.toLowerCase() + ""
	).innerHTML = order.value
	$.ajax({
		url: "/update-walls.php",
		type: "post",
		data: {
			project_id: document.querySelector("#current_project_id").value,
			username: document.querySelector("#current_user").value,
			arak: currect_arak,
			wall: mode_room,
			name: ir_value,
		},
		success: (answer) => {
			console.log(answer)
		},
	})
}

/**
 * Changes the description of a room based on the order data.
 * @param {HTMLElement} order - The order element containing the data to change.
 * @returns None
 */
function rooms__change_description(order) {
	asj = order.dataset.tochange
	mode_room = asj.toLowerCase()
	ir_value = order.value
	$.ajax({
		url: "/update-walls.php",
		type: "post",
		data: {
			project_id: document.querySelector("#current_project_id").value,
			username: document.querySelector("#current_user").value,
			arak: currect_arak,
			wall: mode_room,
			description: ir_value,
		},
		success: (answer) => {
			console.log(answer)
		},
	})
}

/**
 * Function to hide or show a room and update the corresponding elements accordingly.
 * @param {HTMLElement} room - The room element to hide or show.
 * @returns None
 */
function hide__room(room) {
	thiswall = room.parentElement.parentElement
	if (thiswall.classList.contains("hidden")) {
		thiswall.classList.remove("hidden")
		room.innerHTML =
			'<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#EB1010"></path></svg>'
		asj = room.dataset.tochange
		mode_room = asj.toLowerCase()
		tohide__room = document.querySelectorAll(".tohide__room_" + mode_room)
		for (var i = tohide__room.length - 1; i >= 0; i--) {
			tohide__room[i].classList.remove("hidden")
		}

		$.ajax({
			url: "/update-walls.php",
			type: "post",
			data: {
				project_id: document.querySelector("#current_project_id").value,
				username: document.querySelector("#current_user").value,
				arak: currect_arak,
				wall: mode_room,
				hidden: 0,
			},
			success: (answer) => {
				console.log(answer)
			},
		})
	} else {
		thiswall.classList.add("hidden")
		room.innerHTML =
			'<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14px" height="14px" viewBox="0 0 14 14" version="1.1"><g id="surface1"><path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 13.933594 6.820312 C 12.898438 4.839844 10.105469 3.535156 7 3.535156 C 3.894531 3.535156 1.101562 4.839844 0.0664062 6.773438 C -0.0234375 6.910156 -0.0234375 7.046875 0.0664062 7.179688 C 1.101562 9.160156 3.894531 10.464844 7 10.464844 C 10.105469 10.464844 12.898438 9.160156 13.933594 7.226562 C 14.023438 7.089844 14.023438 6.953125 13.933594 6.820312 Z M 7 9.566406 C 4.34375 9.566406 1.957031 8.574219 1.011719 7 C 1.957031 5.425781 4.34375 4.433594 7 4.433594 C 9.65625 4.433594 12.042969 5.425781 12.988281 7 C 12.042969 8.53125 9.65625 9.566406 7 9.566406 Z M 7 9.566406 "/><path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 9.566406 3.894531 C 9.429688 3.667969 9.160156 3.625 8.9375 3.757812 C 8.710938 3.894531 8.664062 4.164062 8.800781 4.390625 C 9.070312 4.75 9.207031 5.199219 9.207031 5.648438 C 9.207031 6.863281 8.214844 7.855469 7 7.855469 C 5.785156 7.855469 4.792969 6.863281 4.792969 5.648438 C 4.792969 5.246094 4.929688 4.792969 5.15625 4.433594 C 5.289062 4.210938 5.246094 3.9375 5.019531 3.804688 C 4.792969 3.667969 4.523438 3.714844 4.390625 3.9375 C 4.027344 4.480469 3.847656 5.0625 3.847656 5.695312 C 3.847656 7.40625 5.246094 8.800781 6.953125 8.800781 C 8.710938 8.800781 10.105469 7.40625 10.105469 5.648438 C 10.105469 5.019531 9.925781 4.433594 9.566406 3.894531 Z M 9.566406 3.894531 "/></g></svg>'
		asj = room.dataset.tochange
		mode_room = asj.toLowerCase()
		tohide__room = document.querySelectorAll(".tohide__room_" + mode_room)
		for (var i = tohide__room.length - 1; i >= 0; i--) {
			tohide__room[i].classList.add("hidden")
		}

		$.ajax({
			url: "/update-walls.php",
			type: "post",
			data: {
				project_id: document.querySelector("#current_project_id").value,
				username: document.querySelector("#current_user").value,
				arak: currect_arak,
				wall: mode_room,
				hidden: 1,
			},
			success: (answer) => {
				console.log(answer)
			},
		})
	}
}
// Huone risti
const inputsName = document.querySelectorAll(".inputname")
const allLinksName = document.querySelectorAll(".house__wall_status")
inputsName.forEach((item) => {
	item.addEventListener("input", () => {
		const room = item.getAttribute("data-room")
		allLinksName.forEach((element) => {
			if (element.getAttribute("data-room") === room) {
				element.innerHTML = item.value
			}
		})
	})
})

/**
 * Changes the heights of various elements in the house based on the given number.
 * @param {number} num - The number to set the heights to.
 * @returns None
 */
function changeHeights(num) {
	const allHeights = document.querySelectorAll(".wall_height")
	allHeights.forEach(function (item) {
		item.value = num
	})

	document.querySelector("#house .house__wall_roof").style.height =
		num / 20 + "px"
	document.querySelector("#house .house__wall_floor").style.height =
		num / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_one"
	).style.height = num / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_two"
	).style.height = num / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_three"
	).style.height = num / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_four"
	).style.height = num / 20 + "px"
}

/**
 * Changes the widths of various elements in the house based on the given number.
 * @param {number} num - The number to set the widths to.
 * @returns None
 */
function changeWidths(num) {
	console.log("changeWidths called")
	if (document.querySelector(".tohide__room_a")) {
		document.querySelector(".tohide__room_a .wall_width").value = num
	}
	if (document.querySelector(".tohide__room_c")) {
		document.querySelector(".tohide__room_c .wall_width").value = num
	}
	if (document.querySelector(".tohide__room_k")) {
		document.querySelector(".tohide__room_k .wall_width").value = num
	}
	if (document.querySelector(".tohide__room_l")) {
		document.querySelector(".tohide__room_l .wall_width").value = num
	}

	document.querySelector("#house .house__wall_roof").style.width =
		num / 20 + "px"
	document.querySelector("#house .house__wall_floor").style.width =
		num / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_one"
	).style.width = num / 20 + "px"
	document.querySelector("#house .house__wall_one .wall_width").value = num
	document.querySelector("#house .house__wall_three .wall_width").value = num
	document.querySelector("#house .house__wall_roof .wall_width").value = num
	document.querySelector("#house .house__wall_floor .wall_width").value = num

	// document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_two").style.width = num/10 + "px";
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_three"
	).style.width = num / 20 + "px"
	// document.querySelector("#house > div:nth-child(2) > div.house__wall.house__wall_four").style.width = num/10 + "px";

	coefficient_left =
		parseFloat(document.querySelector("#house .house__wall_a").style.width) +
		45 +
		parseFloat(document.querySelector("#house .house__wall_b").style.width) +
		45

	document.querySelector(
		"#house div.house__wall.house__wall_floor"
	).style.left = coefficient_left + "px"
	document.querySelector("#house div.house__wall.house__wall_roof").style.left =
		coefficient_left + "px"
}

/**
 * Changes the widths and heights of various elements in a house structure based on the given number.
 * @param {number} num - The number to set the widths and heights to.
 * @returns None
 */
function changeWidths_2(num) {
	console.log("changeWidths_2 Called")
	if (document.querySelector(".tohide__room_b")) {
		document.querySelector(".tohide__room_b .wall_width").value = num
	}
	if (document.querySelector(".tohide__room_d")) {
		document.querySelector(".tohide__room_d .wall_width").value = num
	}

	allWidths = document.querySelectorAll(".wall_width_2")
	allWidths.forEach(function (item) {
		item.value = parseFloat(num)
	})
	allWidths = document.querySelectorAll(".wall_tochange_2")
	allWidths.forEach(function (item) {
		item.value = parseFloat(num)
	})
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_two"
	).style.width = num / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_four"
	).style.width = num / 20 + "px"

	document.querySelector(
		"#house div.house__wall.house__wall_floor"
	).style.height = num / 20 + "px"
	document.querySelector(
		"#house div.house__wall.house__wall_roof"
	).style.height = num / 20 + "px"

	coefficient_left =
		parseFloat(document.querySelector("#house .house__wall_a").style.width) +
		45 +
		parseFloat(document.querySelector("#house .house__wall_b").style.width) +
		45
	document.querySelector(
		"#house div.house__wall.house__wall_floor"
	).style.left = coefficient_left + "px"
	document.querySelector("#house div.house__wall.house__wall_roof").style.left =
		coefficient_left + "px"
}

/**
 * Changes the height and width of the roof based on user input.
 */
function change_roof(check) {
	if (parseFloat(check.value) > 9990) {
		alert("Arvo ei voi olla isompi kuin 9990mm.")
		return
	}
	roof_height = document.querySelector("#wall_one_roof_h").value
	roof_width = document.querySelector("#wall_one_roof_w").value
	document.querySelector(".question-container").classList.add("two")
	document.querySelector(".question-container").classList.remove("out")
	document
		.querySelector(".modal-yes")
		.setAttribute(
			"onclick",
			"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(roof_height);changeWidths(roof_width);changeWidths_2(roof_height);"
		)
	document.querySelector("#house > div:nth-child(1) > div").style.width =
		roof_width / 20 + "px"
	document.querySelector("#house > div:nth-child(1) > div").style.height =
		roof_height / 20 + "px"

	save_rooms()
}

function change_floor(check) {
	if (parseFloat(check.value) > 9990) {
		alert("Arvo ei voi olla isompi kuin 9990mm.")
		return
	}
	floor_height = document.querySelector("#wall_one_floor_h").value
	floor_width = document.querySelector("#wall_one_floor_w").value
	document.querySelector(".question-container").classList.add("two")
	document.querySelector(".question-container").classList.remove("out")

	document
		.querySelector(".modal-yes")
		.setAttribute(
			"onclick",
			"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(floor_height);changeWidths(floor_width);changeWidths_2(floor_height);"
		)

	document.querySelector("#house > div:nth-child(3) > div").style.width =
		floor_width / 20 + "px"
	document.querySelector("#house > div:nth-child(3) > div").style.height =
		floor_height / 20 + "px"
	save_rooms()
}

/**
 * Changes the dimensions of element 'a' based on user input values.
 * @returns None
 */
function change_a(check) {
	if (parseFloat(check.value) > 9990) {
		alert("Arvo ei voi olla isompi kuin 9990mm.")
		return
	}
	a_height = document.querySelector("#wall_one_a_h").value
	a_width = document.querySelector("#wall_one_a_w").value
	document.querySelector(".question-container").classList.add("two")
	document.querySelector(".question-container").classList.remove("out")
	document
		.querySelector(".modal-yes")
		.setAttribute(
			"onclick",
			"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(a_height);changeWidths(a_width);"
		)
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_one"
	).style.width = a_width / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_one"
	).style.height = a_height / 20 + "px"

	save_rooms()
}

/**
 * Changes the height and width of an element based on user input values.
 * Adds and removes classes from a container element.
 * Listens for a click event on a specific element and calls functions to change heights and widths.
 * Updates the width and height of a specific element based on user input values.
 * Calls a function to save room data.
 * @returns None
 */
function change_b(check) {
	if (parseFloat(check.value) > 9990) {
		alert("Arvo ei voi olla isompi kuin 9990mm.")
		return
	}
	b_height = document.querySelector("#wall_one_b_h").value
	b_width = document.querySelector("#wall_one_b_w").value
	document.querySelector(".question-container").classList.add("two")
	document.querySelector(".question-container").classList.remove("out")

	document
		.querySelector(".modal-yes")
		.setAttribute(
			"onclick",
			"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(b_height);changeWidths_2(b_width);"
		)

	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_two"
	).style.width = b_width / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_two"
	).style.height = b_height / 20 + "px"

	save_rooms()
}

/**
 * Changes the dimensions of an element based on the values provided in the input fields.
 * @returns None
 */
function change_c(check) {
	if (parseFloat(check.value) > 9990) {
		alert("Arvo ei voi olla isompi kuin 9990mm.")
		return
	}
	c_height = document.querySelector("#wall_one_c_h").value
	c_width = document.querySelector("#wall_one_c_w").value
	document.querySelector(".question-container").classList.add("two")
	document.querySelector(".question-container").classList.remove("out")
	document
		.querySelector(".modal-yes")
		.setAttribute(
			"onclick",
			"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(c_height);changeWidths(c_width);"
		)

	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_three"
	).style.width = c_width / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_three"
	).style.height = c_height / 20 + "px"

	save_rooms()
}

/**
 * Changes the dimensions of a wall element based on the input values from the user.
 * Updates the height and width of the wall element, adds and removes classes from
 * the question container, and sets event listeners for modal confirmation.
 * @returns None
 */
function change_d(check) {
	if (parseFloat(check.value) > 9990) {
		alert("Arvo ei voi olla isompi kuin 9990mm.")
		return
	}
	d_height = document.querySelector("#wall_one_d_h").value
	d_width = document.querySelector("#wall_one_d_w").value
	document.querySelector(".question-container").classList.add("two")
	document.querySelector(".question-container").classList.remove("out")
	document
		.querySelector(".modal-yes")
		.setAttribute(
			"onclick",
			"document.querySelector('.question-container').classList.add('out');document.querySelector('.question-container').classList.remove('two');changeHeights(d_height);changeWidths_2(d_width);"
		)

	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_four"
	).style.width = d_width / 20 + "px"
	document.querySelector(
		"#house > div:nth-child(2) > div.house__wall.house__wall_four"
	).style.height = d_height / 20 + "px"

	save_rooms()
}

/**
 * This function is triggered when a specific element with the class 'project__building_room' is clicked.
 * It performs a series of actions such as sliding up an element with the id 'project_start', refreshing draw controls,
 * setting values for various elements based on the clicked element, and initializing a cross based on the text of the clicked element.
 * @returns None
 */
$(".project__building div.project__building_room").click(function () {
	if ($(".toggle_customer_modal").hasClass("active")) {
		$(this).toggleClass("send_email_selected active")
		return
	}

	$("#project_start").slideUp(200)
	refresh__drawcontrols()

	apartment_ = $(this)

	$("#step_drawscreen").val("rooms")

	// $(this).addClass("tomeasure");

	// initalize_cross();

	//OLD#######
	// $("#roomname").val("Tila " + $(this).text());
	// $("#wall_one_a").val("SEINÄ " + $(this).text() + "_A");
	// $("#wall_one_b").val("SEINÄ " + $(this).text() + "_B");
	// $("#wall_one_c").val("SEINÄ " + $(this).text() + "_C");
	// $("#wall_one_d").val("SEINÄ " + $(this).text() + "_D");
	// $("#wall_one_roof").val("KATTO " + $(this).text() + "_K");
	// $("#wall_one_floor").val("LATTIA " + $(this).text() + "_L");
	// $(".house__wall_one > div.house__wall_status").text("SEINÄ " + $(this).text() + "_A");
	// $(".house__wall_two > div.house__wall_status").text("SEINÄ " + $(this).text() + "_B");
	// $(".house__wall_three > div.house__wall_status").text("SEINÄ " + $(this).text() + "_C");
	// $(".house__wall_four > div.house__wall_status").text("SEINÄ " + $(this).text() + "_D");
	// $(".house__wall_roof > div.house__wall_status").text("KATTO " + $(this).text() + "_K");
	// $(".house__wall_floor > div.house__wall_status").text("LATTIA " + $(this).text() + "_L");

	//NEW#######
	$("#roomname").attr("data-oldname", $(this).html())
	$("#roomname").val("" + $(this).text())

	if ($(this).html().split("<br>")[0]) {
		$("#roomname_1").val("" + $(this).html().split("<br>")[0])
	} else {
		$("#roomname_1").val(" ")
	}

	if ($(this).html().split("<br>")[1]) {
		$("#roomname_2").val("" + $(this).html().split("<br>")[1])
	} else {
		$("#roomname_2").val(" ")
	}

	if ($(this).html().split("<br>")[2]) {
		$("#roomname_3").val("" + $(this).html().split("<br>")[2])
	} else {
		$("#roomname_3").val(" ")
	}

	// Sorry for replacing this, but projectmeta is unclear shit. I replaced with another shit (Look for `roomwalls` table in database).
	// var w = $(".walls_content").val().split(",");
	// //floor
	// if(w[0]) {
	//   $("#wall_one_floor").val(w[0]);
	//   $("div.house__wall_status_l").text(w[0]);
	// }
	// else {
	//   $("#wall_one_floor").val("LATTIA " + $(this).text() + "_L");
	// }
	// //a
	// if(w[1]) {
	//   $("#wall_one_a").val(w[1]);
	//   $("div.house__wall_status_a").text(w[1]);
	// }
	// else {
	//  $("#wall_one_a").val("SEINÄ " + $(this).text() + "_A");
	// }
	// //b
	// if(w[2]) {
	//   $("#wall_one_b").val(w[2]);
	//   $("div.house__wall_status_b").text(w[2]);
	// }
	// else {
	//    $("#wall_one_b").val("SEINÄ " + $(this).text() + "_B");
	// }
	// //c
	// if(w[3]) {
	//   $("#wall_one_c").val(w[3]);
	//   $("div.house__wall_status_c").text(w[3]);
	// }
	// else {
	//   $("#wall_one_c").val("SEINÄ " + $(this).text() + "_C");
	// }

	// //d
	// if(w[4]) {
	//   $("#wall_one_d").val(w[4]);
	//   $("div.house__wall_status_d").text(w[4]);
	// }
	// else {
	//   $("#wall_one_d").val("SEINÄ " + $(this).text() + "_D");
	// }
	// //d
	// if(w[5]) {
	//   $("#wall_one_roof").val(w[5]);
	//   $("div.house__wall_status_k").text(w[5]);
	// }
	// else {
	//   $("#wall_one_roof").val("KATTO " + $(this).text() + "_K");
	// }
	k_saved_input = apartment_.data("kroom")
	a_saved_input = apartment_.data("aroom")
	b_saved_input = apartment_.data("broom")
	c_saved_input = apartment_.data("croom")
	d_saved_input = apartment_.data("droom")
	l_saved_input = apartment_.data("lroom")

	if (
		a_saved_input.length > 10 &&
		b_saved_input.length > 10 &&
		c_saved_input.length > 10 &&
		d_saved_input.length > 10 &&
		k_saved_input.length > 10 &&
		l_saved_input.length > 10
	) {
		// k_wall = document.querySelectorAll(".house__wall_status_k");

		//   for (var w = 0; w < k_wall.length; w++) {
		//     k_wall[w].classList.add(k_saved_input.split("~")[1]);
		//   }

		//   a_wall = document.querySelectorAll(".house__wall_status_a");
		//   for (var w = 0; w < a_wall.length; w++) {
		//     a_wall[w].classList.add(a_saved_input.split("~")[1]);
		//   }

		//   b_wall = document.querySelectorAll(".house__wall_status_b");
		//   for (var w = 0; w < b_wall.length; w++) {
		//     b_wall[w].classList.add(b_saved_input.split("~")[1]);
		//   }

		//   c_wall = document.querySelectorAll(".house__wall_status_c");
		//   for (var w = 0; w < c_wall.length; w++) {
		//     c_wall[w].classList.add(c_saved_input.split("~")[1]);
		//   }

		//   d_wall = document.querySelectorAll(".house__wall_status_d");
		//   for (var w = 0; w < d_wall.length; w++) {
		//     d_wall[w].classList.add(d_saved_input.split("~")[1]);
		//   }

		//   l_wall = document.querySelectorAll(".house__wall_status_l");
		//   for (var w = 0; w < l_wall.length; w++) {
		//     l_wall[w].classList.add(l_saved_input.split("~")[1]);
		//   }
		initalize_cross(apartment_.text())
	}
})

/**
 * This function handles the click event on elements with the class 'house__wall_status'
 * within the '#rooms' div. It performs a series of actions such as sliding up the '#rooms'
 * element, showing and sliding down the '#drawscreen_section_zero' element, updating text
 * elements based on user input, setting attributes, and updating input values. It also
 * checks for the presence of an element with the id 'open_comments' and performs additional
 * actions accordingly. Finally, it initializes the 'initalize_cross' function.
 *
 * @returns None
 */
$("#rooms div.house__wall_status").click(function () {
	$("#rooms").slideUp(200)
	$("#drawscreen_section_zero").show()
	$("#drawscreen_section_zero").slideDown(200)
	var tilaname = $("#roomname").val()

	$("#zero_tila").text(tilaname)
	var text = $(this).text()
	$("#zero_huone").text(text)
	// $(this).removeClass("undone");
	// $(this).addClass("tomeasure");
	$(this).parent().find(".wall_height").val()
	$(this).parent().find(".wall_width").val()
	$("#reclamation__popup .modal_close_btn").attr("id", "--" + tilaname)
	if ($(this).parent().find(".wall_width_2").val()) {
		$("#drawarea_w").val($(this).parent().find(".wall_width_2").val())
	} else {
		$("#drawarea_w").val($(this).parent().find(".wall_width").val())
	}
	$("#drawarea_h").val($(this).parent().find(".wall_height").val())
	changesize()

	if (document.querySelector("#open_comments")) {
	} else {
		walls_content =
			document.querySelector(".house__wall_status_l").innerText +
			"," +
			document.querySelector(".house__wall_status_a").innerText +
			"," +
			document.querySelector(".house__wall_status_b").innerText +
			"," +
			document.querySelector(".house__wall_status_c").innerText +
			"," +
			document.querySelector(".house__wall_status_d").innerText +
			"," +
			document.querySelector(".house__wall_status_k").innerText
		try {
			document.querySelector(".walls_content").value = walls_content
		} catch (e) {
			console.log("TRY-CATCH ERROR:", e)
		}
		initalize_cross()
	}
})
/**
 * Creates rooms based on the provided column count, row count, and wall quantity.
 * Inserts cells into the table to represent the rooms.
 * @returns None
 */
var tableId = document.querySelector("#project__room > table")

function create_rooms() {
	var colc = document.querySelector("#colcount").innerHTML
	var floc = document.querySelector("#rowcount").innerHTML
	var wall_qty = document.querySelector("#wall_qty").value
	var insert_cells = parseFloat(
		Math.round(colc) * Math.round(floc) * Math.round(wall_qty)
	)
	var number = Number(insert_cells)
	for (i = 0; i < number; i++) {
		var j = 0 // First Cell
		var newTR = tableId.insertRow(i)
		var newTD1 = newTR.insertCell(j)
		newTD1.innerHTML = " Huone #" + i
	}
}

// $( window ).on( "load", function() {
//   //NEW#######
//   w = $(".walls_content").val().split(",");
//   //floor
//   if(w[0]) {
//     $("#wall_one_floor").val(w[0]);
//     $("div.house__wall_status_l").text(w[0]);
//   }
//   //a
//   if(w[1]) {
//     $("#wall_one_a").val(w[1]);
//     $("div.house__wall_status_a").text(w[1]);
//   }
//   if(w[2]) {
//     $("#wall_one_b").val(w[2]);
//     $("div.house__wall_status_b").text(w[2]);
//   }
//   //c
//   if(w[3]) {
//     $("#wall_one_c").val(w[3]);
//     $("div.house__wall_status_c").text(w[3]);
//   }
//   //d
//   if(w[4]) {
//     $("#wall_one_d").val(w[4]);
//     $("div.house__wall_status_d").text(w[4]);
//   }
//   //w
//   if(w[5]) {
//     $("#wall_one_roof").val(w[5]);
//      $("div.house__wall_status_k").text(w[5]);
//   }
// } );

/**
 * Initializes the cross by processing the given argument and updating the apartment walls based on saved data.
 * @param {any} arg - The argument to be processed.
 * @returns None
 */
async function initalize_cross(arg) {
	if ($(".toggle_customer_modal").hasClass("active")) {
		return
	}

	a_saved = apartment.dataset.aroom.replaceAll(",", "~")
	b_saved = apartment.dataset.broom.replaceAll(",", "~")
	c_saved = apartment.dataset.croom.replaceAll(",", "~")
	d_saved = apartment.dataset.droom.replaceAll(",", "~")
	k_saved = apartment.dataset.kroom.replaceAll(",", "~")
	l_saved = apartment.dataset.lroom.replaceAll(",", "~")

	// console.log(a_saved);
	// console.log(b_saved);
	// console.log(c_saved);
	// console.log(d_saved);
	// console.log(k_saved);
	// console.log(l_saved);

	console.log("initalize_cross fired")
	//document.querySelector('#step_drawscreen').value='rooms';

	commentboxes = document.querySelectorAll(".house__intro_comments > section")
	for (let i = 0; i < commentboxes.length; i++) {
		commentboxes[i].classList.add("comment__hidden")
	}
	if (document.querySelector("#open_comments")) {
		ir_coms = document.querySelector("#open_comments").value.split("~")
		console.log("ircoms" + ir_coms)

		for (let q = 0; q < ir_coms.length; q++) {
			if (ir_coms[q].length > 4) {
				console.log("ir_coms[q].length" + ir_coms[q].length)
				a_name = removeHTMLTags(ir_coms[q])
					.replaceAll("--Tila", "")
					.replaceAll(" <br> ", "")
					.replaceAll(" <br>", "")
					.replaceAll("<br> ", "")
					.replaceAll("<br", "")
					.replaceAll(" ", "")
					.toLowerCase()
					.split(",")[2]
					.split(">")[0]
					.replaceAll(" ", "")
				console.log("a_name: " + a_name)
				problem_apartment = document.querySelector(
					"." +
						a_name
							.replaceAll(" ", "")
							.replaceAll("<br>", "")
							.replaceAll("/", "")
				)

				if (apartment.classList.contains(problem_apartment)) {
					b_name = removeHTMLTags(ir_coms[q])
						.replaceAll("--Tila", "")
						.replaceAll(" <br> ", "")
						.replaceAll(" <br>", "")
						.replaceAll("<br> ", "")
						.replaceAll("<br", "")
						.replaceAll(" ", "")
						.toLowerCase()
						.split(",")[2]
						.split(">")[1]
						.replaceAll(" ", "")
					problem_room = document.querySelector(
						"." +
							a_name
								.replaceAll(" ", "")
								.replaceAll("<br>", "")
								.replaceAll("/", "")
					)

					// b_name = ir_coms[q].split(",")[2].split(">")[1].replaceAll(" ","").toLowerCase();
					// problem_room = document.querySelector(".house__wall_status_"+b_name.replaceAll("ä","a").replaceAll("ö","o").toLowerCase());

					// problem_room.classList.remove("prob");
					problem_room.classList.remove("undone")
					problem_room.classList.remove("tomeasure")
					problem_room.classList.remove("measured")

					// if(ir_coms[q].split(",")[9] == 'critical') {
					//   problem_apartment.classList.add("problem");
					// }
					// else {
					//   problem_apartment.classList.add("prob");
					// }

					console.log("OPEN_CROSS RECLAMATION FIRED WITH B-NAME: " + b_name)
				}
				commentboxes = document.querySelectorAll(
					".house__intro_comments > section"
				)

				for (let i = 0; i < commentboxes.length; i++) {
					if (
						commentboxes[i].dataset.room
							.replaceAll(" <br> ", "")
							.replaceAll(" <br>", "")
							.replaceAll("<br> ", "")
							.replaceAll("<br", "")
							.replaceAll(" ", "")
							.replaceAll("<br", "")
							.replaceAll(" ", "")
							.toLowerCase()
							.split(">")[0] ==
						apartment.dataset.room
							.replaceAll(" <br> ", "")
							.replaceAll(" <br>", "")
							.replaceAll("<br> ", "")
							.replaceAll("<br", "")
							.replaceAll(" ", "")
							.toLowerCase()
					) {
						commentboxes[i].classList.remove("comment__hidden")
						console.log("comment__hidden removed?")
					} else {
						commentboxes[i].classList.add("comment__hidden")
						console.log("comment__hidden added?")
					}
				}
			}
		}
	}

	if ((arg && typeof arg === "string") || arg instanceof String) {
		console.log("arg" + arg)
		currect_arak = current_apartment = String(arg)
			.replaceAll(" ", "")
			.toLowerCase()
		if (
			window.location.href.indexOf("&apartment=" + current_apartment) === -1
		) {
			console.log("true")
			var refresh = window.location.href + "&apartment=" + current_apartment
			window.history.pushState({ path: refresh }, "", refresh)
		} else if (
			window.location.href.indexOf("&apartment=" + current_apartment) !== -1
		) {
			let paramString = window.location.href.split("?")[1]
			let queryString = new URLSearchParams(paramString)

			for (let pair of queryString.entries()) {
				console.log(pair[0] + ", " + pair[1])
			}
		}

		if (document.querySelector("#open_comments")) {
		} else {
			let preloader = $(".preloader")
			preloader.css({
				position: "absolute",
				top: "-60px",
				left: "-60px",
				display: "block",
				width: "calc(100vw + 60px)",
				height: "calc(100vw + 60px)",
				"z-index": "99999",
			})
			let preview_generation = async () => {
				await sleep(1000)
				let temp_alert = alert
				window.alert = () => {}
				let div = $("#canvas3 .canvas")
				document.querySelector("[data-room=A]").click()
				await sleep(2000)
				let image_a = await domtoimage.toPng(div[0], {
					width: div.find(".levyt").width(),
					height: div.find(".levyt").height(),
				})
				document.querySelector("[data-room=B]").click()
				await sleep(2000)
				let image_b = await domtoimage.toPng(div[0], {
					width: div.find(".levyt").width(),
					height: div.find(".levyt").height(),
				})
				document.querySelector("[data-room=C]").click()
				await sleep(2000)
				let image_c = await domtoimage.toPng(div[0], {
					width: div.find(".levyt").width(),
					height: div.find(".levyt").height(),
				})
				document.querySelector("[data-room=D]").click()
				await sleep(2000)
				let image_d = await domtoimage.toPng(div[0], {
					width: div.find(".levyt").width(),
					height: div.find(".levyt").height(),
				})
				document.querySelector("[data-room=K]").click()
				await sleep(2000)
				let image_k = await domtoimage.toPng(div[0], {
					width: div.find(".levyt").width(),
					height: div.find(".levyt").height(),
				})
				document.querySelector("[data-room=L]").click()
				await sleep(2000)
				let image_l = await domtoimage.toPng(div[0], {
					width: div.find(".levyt").width(),
					height: div.find(".levyt").height(),
				})
				window.alert = temp_alert
				$("#step_drawscreen").val("rooms")
				refresh__drawcontrols()
				updatearea()
				$(".house__wall_one").css({
					background: `url("${image_a}")`,
					"background-size": "100% 100%",
				})
				$(".house__wall_two").css({
					background: `url("${image_b}")`,
					"background-size": "100% 100%",
				})
				$(".house__wall_three").css({
					background: `url("${image_c}")`,
					"background-size": "100% 100%",
				})
				$(".house__wall_four").css({
					background: `url("${image_d}")`,
					"background-size": "100% 100%",
				})
				$(".house__wall_roof").css({
					background: `url("${image_k}")`,
					"background-size": "100% 100%",
				})
				$(".house__wall_floor").css({
					background: `url("${image_k}")`,
					"background-size": "100% 100%",
				})
				preloader.removeAttr("style")
			}

			preview_generation()
		}
	}

	setTimeout(() => {
		if (document.querySelector("#house div.house__wall.house__wall_one")) {
			a_wall = document.querySelector("#house div.house__wall.house__wall_one")
			b_wall = document.querySelector("#house div.house__wall.house__wall_two")
			c_wall = document.querySelector(
				"#house div.house__wall.house__wall_three"
			)
			d_wall = document.querySelector("#house div.house__wall.house__wall_four")
			k_wall = document.querySelector("#house div.house__wall.house__wall_roof")
			l_wall = document.querySelector(
				"#house div.house__wall.house__wall_floor"
			)

			if (a_saved.length > 10) {
				a_wall.querySelector(".house__wall_status").classList.remove("undone")
				a_wall
					.querySelector(".house__wall_status")
					.classList.remove("tomeasure")
				a_wall.querySelector(".house__wall_status").classList.remove("rangatok")
				a_wall.querySelector(".house__wall_status").classList.remove("saumatok")

				a_wall.querySelector(".house__wall_status").classList.remove("measured")
				a_wall.querySelector(".house__wall_status").classList.remove("done")
				// a_wall.querySelector(".house__wall_status").classList.remove('prob');
				// a_wall.querySelector(".house__wall_status").classList.remove('problem');

				a_wall
					.querySelector(".house__wall_status")
					.classList.add(a_saved.split("~")[1])

				a_wall.style.height =
					parseFloat(a_wall.querySelector(".wall_height").value) / 20 + "px"
				a_wall.style.width =
					parseFloat(a_wall.querySelector(".wall_width").value) / 20 + "px"
			} else {
				a_wall.style.height =
					parseFloat(a_wall.querySelector(".wall_height").value) / 20 + "px"
				a_wall.style.width =
					parseFloat(a_wall.querySelector(".wall_width").value) / 20 + "px"
			}

			if (b_saved.length > 10) {
				b_wall.querySelector(".house__wall_status").classList.remove("undone")
				b_wall
					.querySelector(".house__wall_status")
					.classList.remove("tomeasure")
				b_wall.querySelector(".house__wall_status").classList.remove("rangatok")
				b_wall.querySelector(".house__wall_status").classList.remove("saumatok")

				b_wall.querySelector(".house__wall_status").classList.remove("measured")
				b_wall.querySelector(".house__wall_status").classList.remove("done")
				// b_wall.querySelector(".house__wall_status").classList.remove('prob');
				// b_wall.querySelector(".house__wall_status").classList.remove('problem');

				b_wall
					.querySelector(".house__wall_status")
					.classList.add(b_saved.split("~")[1])

				b_wall.style.height =
					parseFloat(b_wall.querySelector(".wall_height").value) / 20 + "px"
				b_wall.style.width =
					parseFloat(b_wall.querySelector(".wall_width_2").value) / 20 + "px"
			} else {
				b_wall.style.height =
					parseFloat(b_wall.querySelector(".wall_height").value) / 20 + "px"
				b_wall.style.width =
					parseFloat(b_wall.querySelector(".wall_width_2").value) / 20 + "px"
			}

			if (c_saved.length > 10) {
				c_wall.querySelector(".house__wall_status").classList.remove("undone")
				c_wall
					.querySelector(".house__wall_status")
					.classList.remove("tomeasure")
				c_wall.querySelector(".house__wall_status").classList.remove("rangatok")
				c_wall.querySelector(".house__wall_status").classList.remove("saumatok")

				c_wall.querySelector(".house__wall_status").classList.remove("measured")
				c_wall.querySelector(".house__wall_status").classList.remove("done")
				// c_wall.querySelector(".house__wall_status").classList.remove('prob');
				// c_wall.querySelector(".house__wall_status").classList.remove('problem');

				c_wall
					.querySelector(".house__wall_status")
					.classList.add(c_saved.split("~")[1])

				c_wall.style.height =
					parseFloat(c_wall.querySelector(".wall_height").value) / 20 + "px"
				c_wall.style.width =
					parseFloat(c_wall.querySelector(".wall_width").value) / 20 + "px"
			} else {
				c_wall.style.height =
					parseFloat(c_wall.querySelector(".wall_height").value) / 20 + "px"
				c_wall.style.width =
					parseFloat(c_wall.querySelector(".wall_width").value) / 20 + "px"
			}
			if (d_saved.length > 10) {
				d_wall.querySelector(".house__wall_status").classList.remove("undone")
				d_wall
					.querySelector(".house__wall_status")
					.classList.remove("tomeasure")
				d_wall.querySelector(".house__wall_status").classList.remove("rangatok")
				d_wall.querySelector(".house__wall_status").classList.remove("saumatok")

				d_wall.querySelector(".house__wall_status").classList.remove("measured")
				d_wall.querySelector(".house__wall_status").classList.remove("done")
				// d_wall.querySelector(".house__wall_status").classList.remove('prob');
				// d_wall.querySelector(".house__wall_status").classList.remove('problem');

				d_wall
					.querySelector(".house__wall_status")
					.classList.add(d_saved.split("~")[1])

				d_wall.style.height =
					parseFloat(d_wall.querySelector(".wall_height").value) / 20 + "px"
				d_wall.style.width =
					parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px"

				k_wall.style.right =
					parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px"
				l_wall.style.right =
					parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px"
			} else {
				d_wall.style.height =
					parseFloat(d_wall.querySelector(".wall_height").value) / 20 + "px"
				d_wall.style.width =
					parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px"
			}
			if (k_saved.length > 10) {
				k_wall.querySelector(".house__wall_status").classList.remove("undone")
				k_wall
					.querySelector(".house__wall_status")
					.classList.remove("tomeasure")
				k_wall.querySelector(".house__wall_status").classList.remove("rangatok")
				k_wall.querySelector(".house__wall_status").classList.remove("saumatok")

				k_wall.querySelector(".house__wall_status").classList.remove("measured")
				k_wall.querySelector(".house__wall_status").classList.remove("done")
				// k_wall.querySelector(".house__wall_status").classList.remove('prob');
				// k_wall.querySelector(".house__wall_status").classList.remove('problem');

				k_wall
					.querySelector(".house__wall_status")
					.classList.add(k_saved.split("~")[1])

				k_wall.style.height =
					parseFloat(k_wall.querySelector(".wall_height").value) / 20 + "px"
				k_wall.style.width =
					parseFloat(k_wall.querySelector(".wall_width").value) / 20 + "px"
			} else {
				k_wall.style.height =
					parseFloat(k_wall.querySelector(".wall_height").value) / 20 + "px"
				k_wall.style.width =
					parseFloat(k_wall.querySelector(".wall_width").value) / 20 + "px"
			}
			if (l_saved.length > 10) {
				l_wall.querySelector(".house__wall_status").classList.remove("undone")
				l_wall
					.querySelector(".house__wall_status")
					.classList.remove("tomeasure")
				l_wall.querySelector(".house__wall_status").classList.remove("rangatok")
				l_wall.querySelector(".house__wall_status").classList.remove("saumatok")

				l_wall.querySelector(".house__wall_status").classList.remove("measured")
				l_wall.querySelector(".house__wall_status").classList.remove("done")
				// l_wall.querySelector(".house__wall_status").classList.remove('prob');
				// l_wall.querySelector(".house__wall_status").classList.remove('problem');

				l_wall
					.querySelector(".house__wall_status")
					.classList.add(l_saved.split("~")[1])

				l_wall.style.height =
					parseFloat(l_wall.querySelector(".wall_height").value) / 20 + "px"
				l_wall.style.width =
					parseFloat(l_wall.querySelector(".wall_width").value) / 20 + "px"
			} else {
				l_wall.style.height =
					parseFloat(l_wall.querySelector(".wall_height").value) / 20 + "px"
				l_wall.style.width =
					parseFloat(l_wall.querySelector(".wall_width").value) / 20 + "px"
			}

			if (
				parseFloat(
					document.querySelector(
						"#house div.house__wall.house__wall_three.house__wall_c"
					).offsetLeft
				) > 0
			) {
				document.querySelector("#house .house__wall_roof").style.left =
					-35 +
					document.querySelector(
						"#house div.house__wall.house__wall_three.house__wall_c"
					).offsetLeft +
					"px"
				document.querySelector("#house .house__wall_floor").style.left =
					-35 +
					document.querySelector(
						"#house div.house__wall.house__wall_three.house__wall_c"
					).offsetLeft +
					"px"
			}
		}
		console.log("currect_arak:", currect_arak)

		togetroom = String(arg)
			.replaceAll("ä", "a")
			.replaceAll(" ", "")
			.replaceAll("ö", "o")
			.toLowerCase()
		;(formData = {
			pr_id: document.querySelector("#current_project_id").value,
			apartment: togetroom,
		}),
			$.ajax({
				type: "POST",
				url: "../vendor/get-apartment_sizes.php",
				data: formData,
				error: function (jqxhr, status, exception) {
					console.log("Tietokantavirhe, soita numeroon +358449782028")
				},
			}).done(function (success) {
				u_rooms = []
				used_rooms = []
				successful = success.split("&&")
				successful.forEach((s) => {
					if (s.length < 2) {
						return
					}
					s = s.split("~~")
					a = s[2]
						.toLowerCase()
						.replaceAll("k", "roof")
						.replaceAll("l", "floor")
					document.querySelector("#wall_one_" + a + "_h").value = s[3]
					document.querySelector("#wall_one_" + a + "_w").value = s[4]

					wallname = s[2].toLowerCase()

					walls = document.querySelectorAll(".tohide__room_" + wallname)
					walls.forEach((w) => {
						w.querySelector(".wall_height").value = parseFloat(s[3])
						w.querySelector(".wall_width").value = parseFloat(s[4])

						console.log("parseFloat(s[3])  " + parseFloat(s[3]))
					})
				})
			})
	}, 400)

	statuses = document.querySelectorAll(".house__wall_status")
	for (let s = 0; s < statuses.length; s++) {
		statuses[s].classList.remove("prob")
		statuses[s].classList.remove("problem")
	}
	refresh__drawcontrols()

	togetroom = String(arg)
		.replaceAll("ä", "a")
		.replaceAll(" ", "")
		.replaceAll("ö", "o")
		.toLowerCase()
	formData = {
		pr_id: document.querySelector("#current_project_id").value,
		apartment: togetroom,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/get-apartment_sizes.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
		},
	}).done(function (success) {
		u_rooms = []
		used_rooms = []
		successful = success.split("&&")
		successful.forEach((s) => {
			if (s.length < 2) {
				return
			}
			s = s.split("~~")
			a = s[2].toLowerCase().replaceAll("k", "roof").replaceAll("l", "floor")
			document.querySelector("#wall_one_" + a + "_h").value = s[3]
			document.querySelector("#wall_one_" + a + "_w").value = s[4]
		})
	})

	let container = $(".col-with-table .customer_contacts")
	container.empty()

	let room_walls = await new Promise((resolve) => {
		$.ajax({
			url: "/get-walls.php",
			type: "POST",
			data: {
				project_id: document.querySelector("#current_project_id").value,
				username: document.querySelector("#current_user").value,
				arak: currect_arak,
			},
			success: (answer) => {
				resolve(answer)
			},
		})
	})

	room_walls = JSON.parse(room_walls)
	room_walls.forEach((wall) => {
		let container = $("#house").parent()
		let name = container.find(`[data-room="${wall.wall.toLowerCase()}"]`)
		name.val(wall.name || name.val())
		container
			.find(`#wall_desc_${wall.wall.toLowerCase()}`)
			.val(wall.description)
		container.find(`[data-room="${wall.wall.toUpperCase()}"]`).text(name.val())
	})

	let room_contacts = await new Promise((resolve) => {
		$.ajax({
			url: "../vendor/get-customer-contacts.php",
			type: "POST",
			data: {
				project_id: document.querySelector("#current_project_id").value,
				rooms: [currect_arak],
			},
			success: (answer) => {
				container.empty()
				resolve(answer)
			},
		})
	})
	room_contacts = JSON.parse(room_contacts)
	room_contacts.forEach((contact) => {
		container.append(
			`<i>${contact.name}, ${contact.tel}, ${contact.email}, ${contact.type}</i><br>`
		)
	})
}

/**
 * Converts a string representation of a wall type to a numerical value.
 * @param {string} a - The string representing the wall type (e.g., "a", "b", "c", etc.).
 * @returns {number} The numerical value corresponding to the wall type:
 *  - "a" -> 1
 *  - "b" -> 2
 *  - "c" -> 3
 *  - "d" -> 4
 *  - "k" or "roof" -> 5
 *  - "l" or "floor" -> 6
 */
function wallAToNum(a) {
	a = a.toLowerCase()
	if (a == "a") {
		return 1
	} else if (a == "b") {
		return 2
	} else if (a == "c") {
		return 3
	} else if (a == "d") {
		return 4
	} else if (a == "k" || a == "roof") {
		return 5
	} else if (a == "l" || a == "floor") {
		return 6
	}
}

/**
 * Adjusts the size of different walls in a house based on the input values.
 * The function retrieves the elements representing different walls of the house
 * and adjusts their height and width based on the values provided in the input fields.
 * The heights and widths are converted from a unit to pixels by dividing by 20.
 * Additionally, it adjusts the position and size of the roof and floor walls accordingly.
 * This function assumes the presence of specific classes and structure in the HTML.
 * If the elements representing the walls are found, their dimensions are updated accordingly.
 * @returns None
 */
function adjust_roomsizes() {
	if (document.querySelector("#house div.house__wall")) {
		a_wall = document.querySelector("#house div.house__wall.house__wall_one")
		b_wall = document.querySelector("#house div.house__wall.house__wall_two")
		c_wall = document.querySelector("#house div.house__wall.house__wall_three")
		d_wall = document.querySelector("#house div.house__wall.house__wall_four")
		k_wall = document.querySelector("#house div.house__wall.house__wall_roof")
		l_wall = document.querySelector("#house div.house__wall.house__wall_floor")

		a_wall.style.height =
			parseFloat(a_wall.querySelector(".wall_height").value) / 20 + "px"
		a_wall.style.width =
			parseFloat(a_wall.querySelector(".wall_width").value) / 20 + "px"

		b_wall.style.height =
			parseFloat(b_wall.querySelector(".wall_height").value) / 20 + "px"
		b_wall.style.width =
			parseFloat(b_wall.querySelector(".wall_width_2").value) / 20 + "px"

		c_wall.style.height =
			parseFloat(c_wall.querySelector(".wall_height").value) / 20 + "px"
		c_wall.style.width =
			parseFloat(c_wall.querySelector(".wall_width").value) / 20 + "px"

		d_wall.style.height =
			parseFloat(d_wall.querySelector(".wall_height").value) / 20 + "px"
		d_wall.style.width =
			parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px"

		k_wall.style.right =
			parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px"
		l_wall.style.right =
			parseFloat(d_wall.querySelector(".wall_width_2").value) / 20 + "px"

		k_wall.style.width =
			parseFloat(k_wall.querySelector(".wall_width").value) / 20 + "px"
		k_wall.style.height =
			parseFloat(k_wall.querySelector(".wall_height").value) / 20 + "px"

		l_wall.style.height =
			parseFloat(l_wall.querySelector(".wall_height").value) / 20 + "px"
		l_wall.style.width =
			parseFloat(l_wall.querySelector(".wall_width").value) / 20 + "px"
	}
}

/**
 * Degrades the URL by removing specified parameters based on the given stage.
 * @param {number} stage - The stage at which to remove parameters from the URL.
 * @returns None
 */
function degradate_url(stage) {
	urlString = window.location.href
	url = new URL(urlString)
	if (stage === 1) {
		removedParam = "apartment"
		url.searchParams.delete(removedParam)

		removedParam = "room"
		url.searchParams.delete(removedParam)

		removedParam = "step"
		url.searchParams.delete(removedParam)

		current_apartment = null
	}
	if (stage === 2) {
		removedParam = "room"
		url.searchParams.delete(removedParam)

		removedParam = "step"
		url.searchParams.delete(removedParam)
	}
	if (stage === 3) {
		removedParam = "step"
		url.searchParams.delete(removedParam)
	}
	url.searchParams.delete(removedParam)
	modified_url = JSON.stringify(url)
		.replaceAll('"', "")
		.replaceAll("'", "")
		.replaceAll("http://localhost/", "")
		.replaceAll("%22", "")
		.replaceAll("https://editori.westface.fi/", "")
		.replaceAll("http://editori.westface.fi/", "")
	window.history.pushState({ path: modified_url }, "", modified_url)
}
/**
 * Adds event listeners for popstate event on window and jQuery document ready function.
 * If window history and pushState are supported, it adds a popstate event listener to
 * degrade the URL and reload the location.
 * @param None
 * @returns None
 */
window.addEventListener("popstate", () => {})

jQuery(document).ready(function ($) {
	if (window.history && window.history.pushState) {
		$(window).on("popstate", function () {
			degradate_url(1)
			location.reload()
		})
	}
})

/**
 * Initializes the building based on the current user and role.
 * If the current user is 'tyonjohto' or the current role is 'mittaus',
 * it adds buttons for project functions to each element with the class 'coderdy'.
 * It also displays or hides the house element based on the project type.
 * @returns None
 */
function initializebuilding() {
	raput = document.querySelectorAll(".coderdy")
	current_user = document.querySelector("#current_user").value
	current_role = document.querySelector("#current_role").value
	if (
		current_user.toLowerCase() == "tyonjohto" ||
		current_role.toLowerCase() == "mittaus"
	) {
		for (let i = 0; i < raput.length; i++) {
			addmore = document.createElement("div")
			addmore.classList.add("projectbtn")
			addmore.classList.add("projectbtn__addmore")
			addmore.innerHTML = "x"
			addmore.setAttribute(
				"onclick",
				"projectfunction__addmore(this);__current__rappu ='" +
					raput[i].getAttribute("id").toLowerCase() +
					"';"
			)
			settings = document.createElement("div")
			settings.classList.add("projectbtn")
			settings.classList.add("projectbtn__settings")
			settings.innerHTML = "x"
			settings.setAttribute("onclick", "projectfunction__settings(this);")

			raput[i].querySelector("h2").appendChild(addmore)
			raput[i].querySelector("h2").appendChild(settings)
		}
	}
	project_type = document.querySelector("#current_project_measurement").value
	if (
		project_type === "after_measure_comment" ||
		project_type === "Huone/seinä"
	) {
		document.querySelector("#house").style.display = "block"
	} else {
		document.querySelector("#house").style.display = "none"
	}
}

initializebuilding()

/**
 * This function is used to add more elements to a project function.
 * It performs various operations like adding and removing classes, updating dataset values,
 * setting display properties, updating innerHTML, and checking input values.
 * @param {Element} elem - The element that triggered the function.
 * @returns None
 */
function projectfunction__addmore(elem) {
	document.querySelector(".five_popup").classList.add("two")
	document.querySelector(".five_popup").classList.remove("out")
	table_to = document.querySelector("#A_")
	table_from = elem.parentElement.parentElement.parentElement
	console.log(table_from)

	table_from_cells = table_from.querySelectorAll(".project__building_room")
	try {
		for (let i = 0; i < table_from_cells.length; i++) {
			table_to.querySelectorAll("tr")[
				table_to.querySelectorAll("tr").length -
					parseFloat(table_from_cells[i].dataset.y)
			].style.display = "flex"

			right_y = table_to
				.querySelectorAll("tr")
				[
					table_to.querySelectorAll("tr").length -
						parseFloat(table_from_cells[i].dataset.y)
				].querySelectorAll("td")[parseFloat(table_from_cells[i].dataset.x)]

			right_y.dataset.y = table_from_cells[i].dataset.y
			right_y.dataset.x = table_from_cells[i].dataset.x
			right_y.dataset.aroom = table_from_cells[i].dataset.aroom
			right_y.dataset.broom = table_from_cells[i].dataset.broom
			right_y.dataset.croom = table_from_cells[i].dataset.croom
			right_y.dataset.droom = table_from_cells[i].dataset.droom
			right_y.dataset.kroom = table_from_cells[i].dataset.kroom
			right_y.dataset.lroom = table_from_cells[i].dataset.lroom

			right_y.click()
			right_y.classList.add("checked")
			right_y.querySelector("input").checked = true

			if (document.querySelector("#a_nextnum_second").value.length > 1) {
				secondelem = "<br/>" + document.querySelector("#a_nextnum_second").value
			} else {
				secondelem = ""
			}

			if (document.querySelector("#a_nextnum_third").value.length > 1) {
				thirdelem = "<br/>" + document.querySelector("#a_nextnum_third").value
			} else {
				thirdelem = ""
			}

			right_y.querySelector("label").innerHTML = table_from_cells[i].innerHTML

			console.log("CLICK TD")

			document.querySelector("#a_nextnum").value = i + 2
			z = parseFloat(document.querySelector("#a_nextnum").value)
			console.log(i)
		}
	} catch (error) {}
	table_from_trs = table_to.querySelectorAll("tr")
	table_from_trs[49].style.display = "block"
	table_from_trs = table_to.querySelectorAll("tr")

	for (let o = 0; o < table_from_trs.length; o++) {
		if (table_from_trs[o].style.display === "none") {
			table_from_trs[o].remove()
		}
	}
}
/**
 * Modifies the classes of the specified element to show a popup.
 * @param {Element} elem - The element to modify.
 * @returns None
 */
function projectfunction__settings(elem) {
	document.querySelector(".first_popup").classList.add("two")
	document.querySelector(".first_popup").classList.remove("out")
}

/**
 * Sends updated apartment information to the server.
 * Iterates over selected apartments and non-working areas, constructs JSON objects
 * and sends them via AJAX POST request to the server for processing.
 * @returns None
 */
function send_new_aparts() {
	const upd__a_array = []
	const upd__a_ = []
	$("#A_ .checked").each(function (index) {
		posX = $(this).parent().data("no")
		posY = $(this).index()
		nam = $(this).find("label").html()

		if (nam.length > 2) {
			if ($(this).data("aroom")) {
				upd__a_array.push({
					name: nam,
					positionX: posX,
					positionY: posY,
					a_room: $(this).data("aroom"),
					b_room: $(this).data("broom"),
					c_room: $(this).data("croom"),
					d_room: $(this).data("droom"),
					k_room: $(this).data("kroom"),
					l_room: $(this).data("lroom"),
				})
			} else {
				upd__a_array.push({
					name: nam,
					positionX: posX,
					positionY: posY,
					a_room: "13~undone~1|1~2200|4000~~~~~",
					b_room: "13~undone~1|1~2200|2200~~~~~",
					c_room: "13~undone~1|1~2200|4000~~~~~",
					d_room: "13~undone~1|1~2200|2200~~~~~",
					k_room: "13~undone~1|1~2200|4000~~~~~",
					l_room: "13~undone~1|1~2200|4000~~~~~",
				})
			}
			$("#a_rooms").val(JSON.stringify(upd__a_array))
		}
	})

	$("#A_ .nowork").each(function (index) {
		posX = $(this).parent().data("no")
		posY = $(this).index()
		nam = "NOWORK"
		upd__a_.push({
			name: nam,
			positionX: posX,
			positionY: posY,
		})
		// $("#a_rooms_nowork").val(JSON.stringify(upd__a_));
	})

	console.log(JSON.stringify(upd__a_array))
	console.log(JSON.stringify(upd__a_))

	__id = parseFloat(document.querySelector("#current_project_id").value)
	setTimeout(function () {
		formData = {
			project_id: __id,
			room_identificator: __current__rappu,
			rooms: JSON.stringify(upd__a_array),
			rooms_nowork: JSON.stringify(upd__a_),
		}

		$.ajax({
			type: "POST",
			url: "/vendor/modify__project_apartments.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				console.log("Tietokantavirhe, soita numeroon +358449782028")
				console.log(formData)
			},
		}).done(function (data) {
			alert("Tallennettu, kiitos!")
			location.reload()
		})
	}, 500)
}

/**
 * Function to start or stop measuring based on the text content of the element.
 * If the text is 'Aloita mittaaminen', it changes the text to 'Päätä mittaus' and sets project_type to 'after_measure_comment'.
 * If the text is not 'Aloita mittaaminen', it changes the text back to 'Aloita mittaaminen' and clears the project_type.
 * It also toggles the class 'yellow' on the element.
 * Sends a POST request to modify the project type using AJAX.
 * @param {Element} elem - The element that triggers the function.
 * @returns None
 */
function start__measuring(elem) {
	project_id_ = parseFloat(document.querySelector("#current_project_id").value)

	if (elem.innerText === "Aloita mittaaminen") {
		project_type_ = "after_measure_comment"
		elem.innerText = "Päätä mittus"
	} else {
		project_type_ = ""
		elem.innerText = "Aloita mittaaminen"
	}
	elem.classList.toggle("yellow")

	formData = {
		project_id: project_id_,
		project_type: project_type_,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifyproject_type.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		console.log(project_type_)
	})
}

/**
 * Updates the project name in the database using an AJAX POST request.
 * @param {Element} elem - The HTML element that triggered the change event.
 * @returns None
 */
function projectname__change(elem) {
	project_id_ = parseFloat(document.querySelector("#current_project_id").value)
	project_name_ = elem.value

	formData = {
		project_id: project_id_,
		project_name: project_name_,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifyproject_name.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {})
}

/**
 * Function to open the change room name button by setting its opacity to 1.
 * This function selects the change room name button element and sets its opacity to 1 to make it visible.
 * @returns None
 */
function open__change_btn() {
	change__roomname_btn = document.querySelector(".change__roomname_btn")
	change__roomname_btn.style.opacity = 1
}

/**
 * Function to change the room name by concatenating values from input fields and sending
 * an AJAX request to update the room name in the database.
 * @returns None
 */
function change__roomname() {
	roomname_forchange =
		document.querySelector("#roomname_1").value.replaceAll(" ", "") +
		" <br> " +
		document.querySelector("#roomname_2").value.replaceAll(" ", "") +
		" <br> " +
		document.querySelector("#roomname_3").value.replaceAll(" ", "")
	project_id_ = parseFloat(document.querySelector("#current_project_id").value)
	project_roomname_ = roomname_forchange
	project_oldroomname_ = document.querySelector("#roomname").dataset.oldname

	formData = {
		project_id: project_id_,
		project_roomname: project_roomname_,
		project_oldroomname: project_oldroomname_,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifyproject_roomname.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		console.log(project_id_)
		console.log(project_roomname_)
		console.log(project_oldroomname_)
		console.log(data)

		alert("Tilan nimen vaihto tehty. Sivu tulee nyt päivittää painamalla OK")
		location.reload()
	})
}

/**
 * Function to add a new person entry in the settings form.
 * Increments the prc_count variable and adds a new person entry form if the count is less than 13.
 * @param {Element} elem - The element triggering the function.
 * @returns None
 */
prc_count = 11
function settings_henkilolisays(elem) {
	elem.classList.add("active")
	prc_count += 1
	if (prc_count >= 13) {
		alert("Henkilöiden maksimimäärä ylitetty!")
		return
	}
	var group = document.createElement("div")
	group.classList.add("form-group")
	group.classList.add("form-group_settingsadding")

	var subgroup_1 = document.createElement("div")
	var subgroup_2 = document.createElement("div")
	var subgroup_3 = document.createElement("div")
	var subgroup_4 = document.createElement("div")
	var subgroup_5 = document.createElement("div")
	var subgroup_6 = document.createElement("div")

	subgroup_1.classList.add("form-subgroup")
	subgroup_2.classList.add("form-subgroup")
	subgroup_3.classList.add("form-subgroup")
	subgroup_4.classList.add("form-subgroup")
	subgroup_5.classList.add("form-subgroup")
	subgroup_6.classList.add("form-subgroup")

	subgroup_1.innerHTML =
		'<label>Nimi ja Rooli: </label><input type="text" name="prc_new" class="prc_new form-control prc_new" value=" " required list="prc_new_list" onchange="prsettings__give_numbers(this.value);"></div>'
	subgroup_2.innerHTML =
		'<label>Puhelinnumero: </label><input type="text" name="prc_new_puh" class="prc_new_puh form-control" value=" " required></div>'
	subgroup_3.innerHTML =
		'<label>Sähköposti: </label><input type="text" name="prc_new_email" class="prc_new_email form-control" value=" " required></div>'
	subgroup_4.innerHTML =
		'<label for="prc_new_role">Rooli:</label><select name="role" id="prc_new_role"><option value="saaja">Viestien saaja</option><option value="katsoja">Katsoja</option><option value="kommentointi">Kommentointi</option><option value="mittaus">Mittamies</option></select>'
	subgroup_5.innerHTML =
		'<h5>Saako katsoa kaikki projektin tiedot?</h5><div class="row-reversed"><label for="prc_new_permission">Kyllä</label><input type="checkbox" id="prc_new_permission" class="standard_checkbox"></div><h5>Poista näkymässä projektilla</h5><div class="row-reversed"><label for="prc_new_hiding">Kyllä</label><input type="checkbox" id="prc_new_hiding" class="standard_checkbox"></div>'
	subgroup_6.innerHTML =
		'<div onclick="settings__sendworkers_db();" class="settings__henkilolisays_button">Lähetä</div>'

	group.appendChild(subgroup_1)
	group.appendChild(subgroup_2)
	group.appendChild(subgroup_3)
	group.appendChild(subgroup_4)
	group.appendChild(subgroup_5)
	group.appendChild(subgroup_6)

	document.querySelector("#settings__henkilolisays_inputs").append(group)
}

/**
 * Retrieves and assigns values to elements based on the user selection.
 * @param {string} elem - The element to retrieve values from.
 * @returns None
 */
function prsettings__give_numbers(elem) {
	try {
		elements_array = document
			.querySelector(
				"." + elem.replaceAll(" ", "___").toLowerCase() + "_userselection"
			)
			.value.split("|")
		console.log(elements_array)
		// document.querySelector(".prc_"+integer+"").value =elements_array[1];
		document.querySelector(".prc_new_puh").value = elements_array[1]
		document.querySelector(".prc_new_email").value = elements_array[2]

		document.querySelector("#prc_new_role").value = elements_array[3]
		// console.log(".prc_"+parseFloat(integer)+"_role ."+elements_array[3]);
		if (parseFloat(elements_array[4]) == 1) {
			document.querySelector("#prc_new_permission").checked = true
		}
		if (parseFloat(elements_array[5]) == 1) {
			document.querySelector("#pprc_new_hiding").checked = true
		}
	} catch (error) {
		console.log("No user exists in the settings")
	}
}

/**
 * Sends worker data to the database using an AJAX POST request.
 * Retrieves input values from specific elements in the document and constructs a formData object.
 * Sends the formData object to the server-side script for processing.
 * Displays an alert in case of a database error and logs the formData object.
 * @returns None
 */
function settings__sendworkers_db() {
	project_id_ = parseFloat(document.querySelector("#current_project_id").value)
	added__username_ = document.querySelector(".prc_new").value
	added__userpuh_ = document.querySelector(".prc_new_puh").value
	added__useremail_ = document.querySelector(".prc_new_email").value
	added__userrole_ = document.querySelector("#prc_new_role").value
	added__usernewpermission_ = document
		.querySelector("#prc_new_permission")
		.value.replaceAll("on", 1)
	added__userhidingpermission_ = document
		.querySelector("#prc_new_hiding")
		.value.replaceAll("on", 1)
	added__by_ = document.querySelector(".kommentti_comment_from").value
	formData = {
		project_id: project_id_,
		added__username: added__username_,
		added__userpuh: added__userpuh_,
		added__useremail: added__useremail_,
		added__userrole: added__userrole_,
		added__usernewpermission: added__usernewpermission_,
		added__userhidingpermission: added__userhidingpermission_,
		added__by: added__by_,
	}
	$.ajax({
		type: "POST",
		url: "../vendor/modifyproject_adduser.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
			console.log(formData)
		},
	}).done(function (data) {
		console.log(data)
		// location.reload();
	})
}

/**
 * This function is triggered when a specific element with the class 'project__settings_uploadsend' is clicked.
 * It performs multiple actions including uploading files via AJAX, formatting the file names, and sending data to the server.
 * Additionally, it extends the Date object prototype to include a method 'getWeek' that calculates the week number of the year.
 * @returns None
 */
$(document).ready(function () {
	$(".project__settings_uploadsend").click(function () {
		that_element_class = $(this).attr("name") + "_previewfiles"
		// console.log($(this).parent().children()[1].children[0].children[0]);
		totalfiles = $(this).parent().children()[1].files.length
		cur_comment_files = $(this).parent().children()[1].files
		console.log(totalfiles)
		for (var index = 0; index < totalfiles; index++) {
			form_data = new FormData()
			form_data.append("files", cur_comment_files[index])

			$.ajax({
				url: "/upload.php",
				type: "POST",
				data: form_data,
				contentType: "multipart/form-data",
				// dataType: 'json',
				contentType: false,
				processData: false,
				success: function (response) {
					document.querySelector("." + that_element_class).innerHTML +=
						'<a class="asiakirja_first" target="_blank" href="https://editori.westface.fi/uploads/' +
						response +
						'">' +
						"https://editori.westface.fi/uploads/" +
						response +
						"</a><br>"
					console.log(response)
				},
			})

			setTimeout(() => {
				naming_2 = $(this).parent().children()[0].innerText
				naming_ = naming_2
					.replaceAll("?", "")
					.replaceAll(" ", "_")
					.toLowerCase()
				attachments_ = document.querySelector(
					"." + that_element_class
				).innerHTML

				formData = {
					project_id: parseFloat(
						document.querySelector("#current_project_id").value
					),
					naming: naming_,
					attachments: attachments_,
				}

				$.ajax({
					url: "../vendor/modifyproject_registerfiles.php",
					type: "POST",
					data: formData,
					success: function (response) {
						console.log(response)
						console.log(formData)
					},
				})
			}, 1000)
		}
	})
})

Date.prototype.getWeek = function () {
	var onejan = new Date(this.getFullYear(), 0, 1)
	var today = new Date(this.getFullYear(), this.getMonth(), this.getDate())
	var dayOfYear = (today - onejan + 86400000) / 86400000
	return Math.ceil(dayOfYear / 7)
}
setTimeout(() => {
	if (document.querySelector(`#newcomment__vko`)) {
		document.querySelector(`#newcomment__vko`).value = new Date(
			document.querySelector(`#newcomment__deadline`).value
		).getWeek()
	}
}, 1000)

function onLongPress(element, callback, duration) {
	let timer

	element
		.on("mousedown touchstart", function () {
			timer = setTimeout(callback.bind(this), duration)
		})
		.on("mouseup mouseleave touchend touchmove", function () {
			clearTimeout(timer)
		})

	return () => clearTimeout(timer)
}

/**
 * This script handles the click event on elements with the class 'project__building_room'.
 * It prevents the default action, stops the event from propagating further, removes any overlay,
 * and removes the 'active' class from the clicked element.
 * It also handles the mousedown and touchstart events on elements with the class 'p_meaning'.
 * It focuses on the target element, removes the 'active' class from all elements with the class 'p_meaning',
 * sets a timer for a long click event, and retrieves the data-action and text content of the target element.
 */
let timer = 0

$(".project__building_room").click((e) => {
	e.preventDefault()
	e.stopPropagation()

	if ($(".toggle_customer_modal").hasClass("active")) {
		return
	}

	$(".project__building_room-overlay").remove()
	$(e.target).find(".active").removeClass("active")
})

onLongPress(
	$(".project__building_room"),
	function () {
		current_apartment = this.dataset.room
		showSendEmailDialog()
	},
	2000
)
onLongPress(
	$(".preset"),
	function () {
		dialog = $("#send_email_dialog")
		title_oldval = dialog.find(".title").val()
		oldval = dialog.find(".message").val()

		alert(
			'Presetin muokkaustila on otettu käyttöön. Paina "Presetin muokkaus valmis"-nappia kun olet valmis'
		)
		cur_preset_id = $(this).data("identifiction")
		cur_preset_name = $(this).text()
		cur_preset_type = $(this).data("type")
		dialog.find(".title").val(title_oldval.replace(rooms_names, ""))
		dialog
			.find(".message")
			.val(
				oldval
					.replace(rooms_names_text, "")
					.replace(changed_link_text, "%LINKKI%")
			)
		$(".preset_is_ok").addClass("active")
	},
	1500
)
$(".preset_is_ok").click((e) => {
	dialog = $("#send_email_dialog")

	let formData = {
		id: cur_preset_id,
		name: cur_preset_name,
		subject: dialog.find(".title").val(),
		preset_type: cur_preset_type,
		message: dialog.find(".message").val(),
	}
	$.ajax({
		url: "vendor/admin__updatemessagepreset.php",
		type: "POST",
		data: formData,
	})

	cur_preset.attr("data-title", dialog.find(".title").val())
	cur_preset.attr("data-message", dialog.find(".message").val())
	$(".preset_is_ok").removeClass("active")
	alert("Muutokset tallennettu tietokantaan")
	oldval = dialog.find(".message").val()
	title_oldval = dialog.find(".title").val()
	dialog
		.find(".message")
		.val(rooms_names_textoldval.replace("%LINKKI%", changed_link_text))
	dialog.find(".title").val(title_oldval + " " + rooms_names)
})
$(".p_meaning").on("mousedown touchstart", (e) => {
	$(e.target).focus()
	let $element = $(e.target)

	$(".p_meaning.active").each(function (index) {
		$(".p_meaning").removeClass("active")
	})

	timer = window.setTimeout(() => longClick($element), 1000)

	action = $(e.target).data("action")
	action_meaning = $(e.target).text()
})
// .on("mouseup mouseleave touchend touchmove", (e) =>
//   clearTimeout(timer)
// )
// .click((e) => {
//   e.preventDefault()
//   e.stopPropagation()
//   $('.popup__statuses').removeClass('active')
//   console.log("click")
// });

/**
 * Attaches event listeners to the ".p_meaning_end" element for mouse down and touch start events.
 * Saves new statuses, removes classes, and adds classes based on the event.
 * @param {Event} e - The event object.
 * @returns None
 */
$(".p_meaning_end").on("mousedown touchstart", (e) => {
	save__newstatuses()

	setTimeout(function () {
		clearTimeout(timer)
		e.preventDefault()
		e.stopPropagation()
		$(".project__building").removeClass("active")
		$(".popup__statuses").removeClass("active")
		$(".project__building_room").removeClass("active")
		$(".project__building_room-overlay").remove()
		window.removeEventListener("click", defaultClick, true)

		$(".p_meaning.active").each(function (index) {
			$(".p_meaning").removeClass("active")
		})

		open__workelab()
	}, 500)
})
const longClick = (element) => {
	$(".project__building").removeClass("active")
	$(".project__building_room-overlay").remove()
	$(".project__building_room").removeClass("active")
	element.addClass("active")
	element.addClass(action)
	$(".popup__statuses").addClass("active")
	window.addEventListener("click", defaultClick, true)
	element.append(`<div class='project__building_room-overlay'></div>`)
	console.log("longpress")

	if (current_role != "mittaus") {
		if ($(element).hasClass("problemo")) {
			elab__comment_enable(true, "basic")
		} else if ($(element).hasClass("grande_problemo")) {
			elab__comment_enable(true, "critical")
		} else {
			elab__comment_enable(false)
		}
	}
}

/**
 * Enable or disable the comment based on the stage and criticality.
 * @param {boolean} stage - The stage of the comment (true for enabled, false for disabled).
 * @param {string} criticality - The criticality level of the comment.
 * @returns None
 */
function elab__comment_enable(stage, criticality) {
	if (stage === false) {
		document
			.querySelector(`.status__elab_problem`)
			.classList.add(`elab__status_hidden`)
	} else {
		console.log("problemo or gorande broblemo")
		console.log(criticality)
		document
			.querySelector(`.status__elab_problem`)
			.classList.remove(`elab__status_hidden`)
		if (criticality == "critical") {
			document.querySelector("#is_thecomment_critical2").checked = true
		} else {
			document.querySelector("#is_thecomment_critical2").checked = false
		}

		// p_meaning_end = document.querySelector(".p_meaning_end");
		// document.querySelector(".status__elab_problem commentbox_btn").remove();
		// p_meaning_end.classList.add("commentbox_btn");
		// p_meaning_end.classList.add("drawarea__controls_btn");
		// p_meaning_end.classList.add("btn");
		// p_meaning_end.classList.add("commentreadyready_btn");
		// p_meaning_end.classList.add("sendcommentfiles");
		// p_meaning_end.classList.setAttribute("onclick","comment__create_new(1);");
	}
}

const defaultClick = (e) => {
	e.stopPropagation()
	_changed_tilas = ""
	if ($(e.target).hasClass("project__building_room"))
		$(e.target).toggleClass("active")
	if ($(e.target).hasClass("project__building_room")) building__action(action)
}

/**
 * This function saves the new statuses of different rooms in a project.
 * It retrieves data from specific elements in the document, processes the data, and sends it to the server for storage.
 * @returns None
 */
function save__newstatuses() {
	a_rooms = ""
	b_rooms = ""
	c_rooms = ""
	d_rooms = ""
	e_rooms = ""
	f_rooms = ""
	g_rooms = ""
	h_rooms = ""
	if (document.querySelectorAll("#A")) {
		if (document.querySelector("#A").offsetHeight === 0) {
		} else {
			a_rooms_ = document.querySelectorAll("#A .project__building_room")

			a_rooms = ""

			for (let i = 0; i < a_rooms_.length; i++) {
				_name = a_rooms_[i].innerHTML
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = a_rooms_[i].dataset.x
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
				positionY = a_rooms_[i].dataset.y
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
				a_room = a_rooms_[i].dataset.aroom
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
				b_room = a_rooms_[i].dataset.broom
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
				c_room = a_rooms_[i].dataset.croom
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
				d_room = a_rooms_[i].dataset.droom
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
				k_room = a_rooms_[i].dataset.kroom
					.replaceAll(",", "~")
					.replaceAll("   ", " ")
				l_room = a_rooms_[i].dataset.lroom
					.replaceAll(",", "~")
					.replaceAll("   ", " ")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				a_rooms += element
			}
		}
	} else {
	}

	if (document.querySelectorAll("#B")) {
		if (document.querySelector("#B").offsetHeight === 0) {
		} else {
			b_rooms_ = document.querySelectorAll("#B .project__building_room")
			b_rooms = ""

			for (let i = 0; i < b_rooms_.length; i++) {
				_name = b_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = b_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = b_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = b_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = b_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = b_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = b_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = b_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = b_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				b_rooms += element
			}
		}
	} else {
		b_rooms = ""
	}
	if (document.querySelectorAll("#C")) {
		if (document.querySelector("#C").offsetHeight === 0) {
		} else {
			c_rooms_ = document.querySelectorAll("#C .project__building_room")
			c_rooms = ""

			for (let i = 0; i < c_rooms_.length; i++) {
				_name = c_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = c_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = c_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = c_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = c_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = c_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = c_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = c_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = c_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				c_rooms += element
			}
		}
	} else {
	}

	if (document.querySelectorAll("#C")) {
		if (document.querySelector("#C").offsetHeight === 0) {
		} else {
			c_rooms_ = document.querySelectorAll("#C .project__building_room")
			c_rooms = ""

			for (let i = 0; i < c_rooms_.length; i++) {
				_name = c_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = c_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = c_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = c_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = c_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = c_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = c_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = c_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = c_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				c_rooms += element
			}
		}
	} else {
		c_rooms = ""
	}

	if (document.querySelectorAll("#D")) {
		if (document.querySelector("#D").offsetHeight === 0) {
		} else {
			d_rooms_ = document.querySelectorAll("#D .project__building_room")
			d_rooms = ""

			for (let i = 0; i < d_rooms_.length; i++) {
				_name = d_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = d_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = d_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = d_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = d_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = d_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = d_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = d_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = d_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				d_rooms += element
			}
		}
	} else {
		d_rooms = ""
	}

	if (document.querySelectorAll("#E")) {
		if (document.querySelector("#E").offsetHeight === 0) {
		} else {
			e_rooms_ = document.querySelectorAll("#E .project__building_room")
			e_rooms = ""

			for (let i = 0; i < e_rooms_.length; i++) {
				_name = e_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = e_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = e_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = e_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = e_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = e_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = e_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = e_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = e_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				e_rooms += element
			}
		}
	} else {
		e_rooms = ""
	}

	if (document.querySelectorAll("#F")) {
		if (document.querySelector("#F").offsetHeight === 0) {
		} else {
			f_rooms_ = document.querySelectorAll("#F .project__building_room")
			f_rooms = ""

			for (let i = 0; i < f_rooms_.length; i++) {
				_name = f_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = f_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = f_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = f_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = f_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = f_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = f_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = f_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = f_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				f_rooms += element
			}
		}
	} else {
		f_rooms = ""
	}

	if (document.querySelectorAll("#G")) {
		if (document.querySelector("#G").offsetHeight === 0) {
		} else {
			g_rooms_ = document.querySelectorAll("#G .project__building_room")
			g_rooms = ""

			for (let i = 0; i < g_rooms_.length; i++) {
				_name = g_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = g_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = g_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = g_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = g_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = g_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = g_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = g_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = g_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				g_rooms += element
			}
		}
	} else {
		g_rooms = ""
	}

	if (document.querySelectorAll("#H")) {
		if (document.querySelector("#H").offsetHeight === 0) {
		} else {
			h_rooms_ = document.querySelectorAll("#H .project__building_room")
			h_rooms = ""

			for (let i = 0; i < h_rooms_.length; i++) {
				_name = h_rooms_[i].innerHTML
					.replace('"', "")
					.replace("'", "")
					.replaceAll("<divclass=project__building_room-overlay></div>", "")
				positionX = h_rooms_[i].dataset.x.replace('"', "").replace("'", "")
				positionY = h_rooms_[i].dataset.y.replace('"', "").replace("'", "")
				a_room = h_rooms_[i].dataset.aroom.replace('"', "").replace("'", "")
				b_room = h_rooms_[i].dataset.broom.replace('"', "").replace("'", "")
				c_room = h_rooms_[i].dataset.croom.replace('"', "").replace("'", "")
				d_room = h_rooms_[i].dataset.droom.replace('"', "").replace("'", "")
				k_room = h_rooms_[i].dataset.kroom.replace('"', "").replace("'", "")
				l_room = h_rooms_[i].dataset.lroom.replace('"', "").replace("'", "")

				element =
					'{"name": "' +
					_name +
					'","positionY": ' +
					positionY +
					',"positionX": ' +
					positionX +
					',"a_room": "' +
					a_room +
					'","b_room": "' +
					b_room +
					'","c_room": "' +
					c_room +
					'","d_room": "' +
					d_room +
					'","k_room": "' +
					k_room +
					'","l_room": "' +
					l_room +
					'"},'
				h_rooms += element
			}
		}
	} else {
		h_rooms = ""
	}
	_id = parseFloat(document.querySelector("#current_project_id").value)
	_who = document.querySelector(".t_users .active_user").innerText
	_what = action_meaning

	activerooms = document.querySelectorAll(".project__building_room.active")
	_rooms_array = ""

	for (let a = 0; a < activerooms.length; a++) {
		_rooms_array +=
			activerooms[a].parentElement.parentElement.parentElement.querySelector(
				"h2 input"
			).value +
			" - " +
			activerooms[a].innerText +
			" <br>"
	}
	_rooms_array2 = _rooms_array
		.replaceAll("å", "a")
		.replaceAll("ä", "a")
		.replaceAll("ö", "o")
	formData = {
		pr_id: _id,
		who: _who,
		what: _what,
		where: _rooms_array2,
	}

	console.log(formData)

	$.ajax({
		type: "POST",
		url: "/vendor/send_workdiary.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
		},
	}).done(function (data) {
		// alert('Seinä ' + current_room + ' tallennettu');
		console.log("saved rooms: " + data)
	})

	_saving_a_rooms =
		"[" +
		a_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"
	_saving_b_rooms =
		"[" +
		b_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"
	_saving_c_rooms =
		"[" +
		c_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"
	_saving_d_rooms =
		"[" +
		d_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"
	_saving_e_rooms =
		"[" +
		e_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"
	_saving_f_rooms =
		"[" +
		f_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"
	_saving_g_rooms =
		"[" +
		g_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"
	_saving_h_rooms =
		"[" +
		h_rooms
			.replace("'", "")
			.replaceAll('<div class="project__building_room-overlay"></div>', "") +
		"]"

	formData = {
		id: _id,
		saving_a_rooms: _saving_a_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		saving_b_rooms: _saving_b_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		saving_c_rooms: _saving_c_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		saving_d_rooms: _saving_d_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		saving_e_rooms: _saving_e_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		saving_f_rooms: _saving_f_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		saving_g_rooms: _saving_g_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		saving_h_rooms: _saving_h_rooms.replaceAll(",]", "]").replaceAll("   ", ""),
		// settings: document.querySelector("#aukko_settings").value,
	}

	$.ajax({
		type: "POST",
		url: "/updateproject.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
		},
	}).done(function (data) {
		// alert('Seinä ' + current_room + ' tallennettu');
		console.log("saved Data: " + data)
	})

	if (current_role != "mittaus") {
		p_room = document.querySelectorAll(
			".project__building_room.active.problemo"
		)
		gp_room = document.querySelectorAll(
			".project__building_room.active.grande_problemo"
		)

		for (let a = 0; a < p_room.length; a++) {
			comment__create_new(
				document.querySelector(".commentbox__newfirst"),
				p_room[a]
			)
		}
		for (let a = 0; a < gp_room.length; a++) {
			comment__create_new(
				document.querySelector(".commentbox__newfirst"),
				gp_room[a]
			)
		}
	}
}

/**
 * Perform an action on a building element based on the event.
 * @param {Event} evt - The event that triggered the action.
 * @returns None
 */
function building__action(evt) {
	console.log(evt)

	console.log(evt)
	console.log("building__action")
	if (evt == "problemo" || evt == "grande_problemo") {
		$(".project__building_room.active").removeClass("prob")
		$(".project__building_room.active").removeClass("problem")
		$(".project__building_room.active").removeClass("problemo")
		$(".project__building_room.active").removeClass("grande_problemo")
	} else {
		$(".project__building_room.active").each(function (index) {
			$(this).attr(
				"data-aroom",
				$(this)
					.attr("data-aroom")
					.replaceAll($(this).attr("data-aroom").split("~")[1], evt)
			)
			$(this).attr(
				"data-broom",
				$(this)
					.attr("data-broom")
					.replaceAll($(this).attr("data-broom").split("~")[1], evt)
			)
			$(this).attr(
				"data-croom",
				$(this)
					.attr("data-croom")
					.replaceAll($(this).attr("data-croom").split("~")[1], evt)
			)
			$(this).attr(
				"data-droom",
				$(this)
					.attr("data-droom")
					.replaceAll($(this).attr("data-droom").split("~")[1], evt)
			)
			$(this).attr(
				"data-kroom",
				$(this)
					.attr("data-kroom")
					.replaceAll($(this).attr("data-kroom").split("~")[1], evt)
			)
			$(this).attr(
				"data-lroom",
				$(this)
					.attr("data-lroom")
					.replaceAll($(this).attr("data-lroom").split("~")[1], evt)
			)
		})
		$(".project__building_room.active").removeClass("no_progress")
		$(".project__building_room.active").removeClass("undone")

		$(".project__building_room.active").removeClass("l5_a")
		$(".project__building_room.active").removeClass("l5_b")
		$(".project__building_room.active").removeClass("l5_c")
		$(".project__building_room.active").removeClass("l5_d")
		$(".project__building_room.active").removeClass("l5_e")

		$(".project__building_room.active").removeClass("l4_a")
		$(".project__building_room.active").removeClass("l4_b")
		$(".project__building_room.active").removeClass("l4_c")
		$(".project__building_room.active").removeClass("l4_d")
		$(".project__building_room.active").removeClass("l4_e")

		$(".project__building_room.active").removeClass("l3_a")
		$(".project__building_room.active").removeClass("l3_b")
		$(".project__building_room.active").removeClass("l3_c")
		$(".project__building_room.active").removeClass("l3_d")
		$(".project__building_room.active").removeClass("l3_e")

		$(".project__building_room.active").removeClass("l2_a")
		$(".project__building_room.active").removeClass("l2_b")
		$(".project__building_room.active").removeClass("l2_c")
		$(".project__building_room.active").removeClass("l2_d")
		$(".project__building_room.active").removeClass("l2_e")

		$(".project__building_room.active").removeClass("l1_a")
		$(".project__building_room.active").removeClass("l1_b")
		$(".project__building_room.active").removeClass("l1_c")
		$(".project__building_room.active").removeClass("l1_d")
		$(".project__building_room.active").removeClass("l1_e")
	}
	$(".project__building_room.active").removeClass(
		"<divclass=project__building_room-overlay></div>"
	)
	$(".project__building_room.active").addClass(evt)

	// $('.project__building').removeClass('active')
	// $('.popup__statuses').removeClass('active')
	// $('.project__building_room').removeClass('active')

	// $('.project__building_room-overlay').remove()
	// window.removeEventListener("click", defaultClick, true)
}

/**
 * Toggles the 'active' class on the element with the class 'elab__statuses'.
 * This function is used to open or close the workelab statuses.
 * @returns None
 */
function open__workelab() {
	document.querySelector(".elab__statuses").classList.toggle("active")
}

/**
 * Toggles the active user by adding and removing CSS classes and updating select options.
 * @param {Element} elem - The element representing the active user.
 * @returns None
 */
function toggle__pusers(elem) {
	p_li = document.querySelectorAll(".p_li")

	for (let o = 0; o < p_li.length; o++) {
		p_li[o].classList.remove("active_user")
	}

	elem.classList.add("active_user")
	active__user = elem.innerText

	s_options = document.querySelectorAll(".status__report_from > option")
	for (let i = 0; i < s_options.length; i++) {
		if (s_options[i].value.toLowerCase() === active__user.toLowerCase()) {
			s_options[i].selected = true
		}
	}
	s_options = document.querySelectorAll(".kommentti_comment_from")
	for (let i = 0; i < s_options.length; i++) {
		s_options[i].value = active__user
	}
}

/**
 * Enables the visibility of certain elements on the page by removing the 'elab__status_hidden' class.
 * Specifically, it removes the 'elab__status_hidden' class from elements with classes '.t_elabstatus',
 * '.t_elabday', and '.status__elab_noproblem'.
 * @returns None
 */
function enable__elabelems() {
	document
		.querySelector(`.t_elabstatus`)
		.classList.remove(`elab__status_hidden`)
	document.querySelector(`.t_elabday`).classList.remove(`elab__status_hidden`)
	document
		.querySelector(`.status__elab_noproblem`)
		.classList.remove(`elab__status_hidden`)
}

/**
 * Controls the visibility of elements based on the length of the input value.
 * If the input value has a length greater than 1, it removes the "hidden" class from elements with the class "zero_popup .hidden".
 * If the input value has a length of 1 or less, it adds the "hidden" class to elements with the class "zero_popup .modal_close_btn".
 * @param {Event} e - The event object that triggered the function.
 * @returns None
 */
function zero_controls(e) {
	if (e.value.length > 1) {
		zerocontrols = document.querySelectorAll(".zero_popup .hidden")
		for (let i = 0; i < zerocontrols.length; i++) {
			zerocontrols[i].classList.remove("hidden")
		}
	} else {
		zerocontrols = document.querySelectorAll(".zero_popup .modal_close_btn")
		for (let i = 0; i < zerocontrols.length; i++) {
			zerocontrols[i].classList.add("hidden")
		}
	}
}

/**
 * Closes the zero controls popup by adding and removing classes,
 * extracting necessary information from the current page, and redirecting the user.
 * @returns None
 */
function zero_controls_close() {
	document.querySelector(".zero_popup").classList.add("out")
	document.querySelector(".zero_popup").classList.remove("two")

	mainsite = window.location.host
	prid = document.querySelector("#current_project_id").value

	if (document.querySelector("#usr__selection").value.charAt(0) == " ") {
		selected_user = document
			.querySelector("#usr__selection")
			.value.replace(" ", "")
	} else {
		selected_user = document.querySelector("#usr__selection").value
	}
	window.location.replace(
		"http://" + mainsite + "/post.php?id=" + prid + "&user=" + selected_user
	)
}

/**
 * Adds a new level project element to the table preview.
 * @param {Element} elem - The element to which the new level project is added.
 * @returns None
 */
function add_new_lvlproject(elem) {
	gp = elem.parentElement.parentElement.parentElement

	table = gp.querySelector(".tablepreviewz tbody")
	len = gp.querySelectorAll("tr").length
	var tr = document.createElement("tr")
	tr.dataset.no = parseFloat(gp.querySelectorAll("tr")[0].dataset.no) + 1

	if (len > 50) {
		alert("Kerrosten maksimimäärä saavutettu")
		return
	}
	for (let i = 1; i < 31; i++) {
		if (i == 1) {
			num = tr.dataset.no
			var td = document.createElement("td")
			var td_input = document.createElement("input")
			td_input.setAttribute("name", "room_name")
			td_input.setAttribute("type", "checkbox")

			var td_label = document.createElement("label")
			td_label.innerHTML = num
			// td.append(td_input);
			td.append(td_label)

			td.classList.add("noindex")
			tr.append(td)
		} else {
			var td = document.createElement("td")
			var td_input = document.createElement("input")
			td_input.setAttribute("name", "room_name")
			td_input.setAttribute("type", "checkbox")

			var td_label = document.createElement("label")
			td.append(td_input)
			td.append(td_label)

			tr.append(td)
		}
	}
	table.prepend(tr)
}

/**
 * This function is triggered when a change event occurs. It updates the values of certain elements
 * on the page and sends an AJAX request to update metadata on the server.
 * @param {Event} e - The event object that triggered the function.
 * @returns None
 */
function change__stsplit(e) {
	allimps = document.querySelectorAll(".colormeaningsimps input")
	c_meanings = document.querySelectorAll(".c_meaning")
	_value = ""
	for (let a = 0; a < allimps.length; a++) {
		_value += allimps[a].value + "~~"
	}

	for (let b = 0; b < c_meanings.length; b++) {
		if (e.dataset.action == c_meanings[b].dataset.action) {
			if (c_meanings[b].querySelector("i")) {
				c_meanings[b].querySelector("i").innerHTML = e.value
			}
		}
	}

	_id = parseFloat(document.querySelector("#current_project_id").value)
	_meta = "statuses__text"

	formData = {
		pr_id: _id,
		meta: _meta,
		value: _value,
	}

	$.ajax({
		type: "POST",
		url: "/vendor/updatemeta.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			console.log("Tietokantavirhe, soita numeroon +358449782028")
		},
	}).done(function (data) {
		console.log("saved Data: " + data)
	})
}

/**
 * Function to show the next element with class "coderdy" if the current user is 'tyonjohto' or the current role is 'mittaus'.
 * It iterates through all elements with the class "coderdy" and displays the first element with a height less than 2.
 * @returns None
 */
function next_rabbu() {
	if (
		current_user.toLowerCase() == "tyonjohto" ||
		current_role.toLowerCase() == "mittaus"
	) {
		allrappus = document.querySelectorAll(".coderdy")

		for (let a = 0; a < allrappus.length; a++) {
			if (allrappus[a].offsetHeight < 2) {
				allrappus[a].style.display = "block"
				break
			}
		}
	}
}

/**
 * Saves room data for the current apartment by sending a POST request to the server.
 * Replaces special characters in the apartment name, iterates through walls, and sends
 * wall measurements to the server.
 * @returns None
 */
function save_rooms() {
	togetroom = current_apartment
		.replaceAll("ä", "a")
		.replaceAll(" ", "")
		.replaceAll("ö", "o")
		.toLowerCase()
	walls = ["a", "b", "c", "d", "K", "L"]
	walls.forEach((wall) => {
		setTimeout(() => {
			well = wall.replaceAll("K", "roof").replaceAll("L", "floor")
			console.log(well)
			h = document.querySelector("#wall_one_" + well + "_h").value
			w = document.querySelector("#wall_one_" + well + "_w").value

			wall_measures = h + "~~" + w
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				apartment: togetroom,
				wall: wall,
				function: wall_measures,
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/save-apartment_sizes.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				})
		}, 1400)
	})
}

function getFileIcon(url) {
	if (url.endsWith(".xls") || url.endsWith(".xlsx")) {
		return "/img/file-xls.svg"
	} else if (url.endsWith(".pdf")) {
		return "/img/file-pdf.svg"
	} else if (url.endsWith(".mp4")) {
		return "/img/file-video.svg"
	} else {
		return url
	}
}

$(".show_project_files_btn").on("click", function () {
	let dialog = $("#project_files_dialog")
	let files_list = dialog.find(".preview_files")
	let data = {
		project_id: document.querySelector("#current_project_id").value,
	}
	dialog[0].showModal()
	document.body.style.overflow = "hidden"
	files_list.empty()
	if (current_apartment) {
		data.room = current_apartment
	}
	$.ajax({
		url: "/vendor/get-project-files.php",
		data: data,
		success: (answer) => {
			let files = JSON.parse(answer)
			files_list.toggle(!!files.length)
			dialog.find(".project_files_empty").toggle(!files.length)
			files.forEach((file) => {
				let tags = ""
				if (file.tags) {
					tags = file.tags
						.split(",")
						.map(
							(tag) => `
            <div class="tag">
              <input class="tag_name" value="${tag}">
              <button class="tag_delete">x</button>
            </div>
          `
						)
						.join("")
				}
				files_list.append(`
          <div class="preview_item" data-id="${file.id}">
            <a href="${file.url}" target="_blank">
              <img src="${getFileIcon(file.url)}">
              <div>${file.photo_title}</div>
            </a>
            <div class="tag_list">
              ${tags}
              <button class="tag_add">+ Tägi</button>
            </div>
          </div>
        `)
			})
		},
	})
})
$(".close_dialog").on("click", function () {
	this.closest("dialog").close()
	document.body.style.overflow = ""
})

$("#show_add_new_customer_contact").on("click", function (event) {
	event.preventDefault()
	event.stopPropagation()
	$("#add_customer_dialog")[0].showModal()
})
$("#close_add_customer_dialog").on("click", function (event) {
	event.preventDefault()
	event.stopPropagation()
	$("#add_customer_dialog")[0].close()
})
$("#add_new_customer_contact").on("click", function (event) {
	event.preventDefault()
	event.stopPropagation()
	$(this).attr("disabled", "disabled")
	let form = $("#add_customer_dialog .form"),
		name = form.find(".customer_name"),
		phone = form.find(".customer_phone"),
		email = form.find(".customer_email"),
		type = form.find(".customer_type")
	if (name.val()) {
		$.ajax({
			url: "../vendor/add-customer-contacts.php",
			type: "POST",
			data: {
				project_id: document.querySelector("#current_project_id").value,
				room: currect_arak,
				name: name.val(),
				phone: phone.val(),
				email: email.val(),
				type: type.val(),
			},
			success: () => {
				let container = $(".col-with-table .customer_contacts")
				container.append(
					`<i>${name.val()}, ${phone.val()}, ${email.val()}, ${type.val()}</i><br>`
				)
				let dialog = $("#add_customer_dialog")
				dialog.find("input").val("")
				dialog.find("select")[0].selectedIndex = 0
				dialog[0].close()
				$(this).removeAttr("disabled")
			},
		})
	}
})
$("#close_send_email_dialog").on("click", function (event) {
	event.preventDefault()
	event.stopPropagation()
	$("#send_email_dialog")[0].close()
	$(".preset_is_ok").removeClass("active")
	current_apartment = null
})

$("#email_type_presets")
	.find(".toggling_preset")
	.on("click", function () {
		let dialog = $("#send_email_dialog")
		presets = dialog.find(".preset")
		type_to_show = $(this).data("show")
		$(presets).each(function (i, obj) {
			if ($(this).data("type") == type_to_show) {
				$(this).addClass("active")
				rooms_names = $(".send_email_selected")
					.get()
					.map((v) => v.innerText.split("\n")[0].replaceAll(" ", ""))
				current_apartment = rooms_names.join()
				rooms_names = [current_apartment]
				rooms_names_text =
					"Tämä viesti koskee kyseisiä asuntoja: " + rooms_names + "."
			} else {
				$(this).removeClass("active")
			}
		})
	})

$("#email_presets")
	.find(".preset")
	.on("click", function () {
		status_of_room = this.dataset.status_of_link
		changed_link_text =
			"Paina tätä linkkiä kun olet valmis: " +
			"https://editori.westface.fi/status.php?post=" +
			current_project +
			";" +
			rappu_coordinate_of_room +
			"," +
			x_coordinate_of_room +
			"," +
			y_coordinate_of_room +
			";" +
			status_of_room +
			""
		let dialog = $("#send_email_dialog")
		dialog.find(".title").val(this.dataset.title + " " + rooms_names)
		dialog
			.find(".message")
			.val(
				rooms_names_text +
					this.dataset.message.replace("%LINKKI%", changed_link_text)
			)

		dialog.find(".preset_name").val(this.textContent)
		cur_preset = $(this)
		updateSendEmailUrl()
	})

$(".toggle_customer_modal").on("click", function () {
	$(this).toggleClass("active")
	$("#send_email_popup").toggleClass("active")
	if (!$(this).hasClass("active")) {
		$(".send_email_selected.active").removeClass("active send_email_selected")
	}
})

function showSendEmailDialog() {
	// DEFINE DATA FOR STATUS LINK
	active_rooms = document.querySelectorAll(".send_email_selected")
	if (active_rooms.length == 1) {
		status_link = true
		current_project = parseFloat(
			document.querySelector("#current_project_id").value
		)
		x_coordinate_of_room = parseFloat(active_rooms[0].dataset.x)
		y_coordinate_of_room = parseFloat(active_rooms[0].dataset.y)
		rappu_coordinate_of_room =
			active_rooms[0].parentElement.parentElement.parentElement.id.toLowerCase()
		status_of_room = ""
	} else {
		status_link = false
		x_coordinate_of_room =
			rappu_coordinate_of_room =
			y_coordinate_of_room =
			status_of_room =
				""
	}

	// END DEFINING
	let dialog = $("#send_email_dialog")
	dialog[0].showModal()
	dialog.find(".without_phone").empty()
	dialog.find(".with_phone").empty()
	dialog.find(".owner").empty()
	dialog
		.find(".send_email_button")
		.attr("disabled", "disabled")
		.attr("href", "#")
	let owner_types = dialog.find(".type_select .type")

	$(owner_types).each(function (i) {
		if ($(this).data("type") !== "tilaaja") {
			// this.style.color = "blue"
		} else {
			// $(this).addClass("checked")
		}
	})
	let rooms
	if ($(".toggle_customer_modal").hasClass("active")) {
		rooms = $(".send_email_selected")
			.get()
			.map((v) => v.getAttribute("data-room"))
		current_apartment = rooms.join()
	} else {
		rooms = [current_apartment]
	}
	$.ajax({
		url: "../vendor/get-customer-contacts.php",
		type: "POST",
		data: {
			project_id: parseFloat(
				document.querySelector("#current_project_id").value
			),
			rooms: rooms,
		},
		success: (answer) => {
			let selected_owner_types = owner_types
				.filter(".checked")
				.get()
				.map((v) => $(v).attr("data-type"))

			let contacts = JSON.parse(answer)
			let residents = contacts.filter(
				(v) => v.type == "asukas" || v.type == "osakas"
			)
			dialog.find(".without_phone").empty()
			dialog.find(".with_phone").empty()
			residents.forEach((v) => {
				dialog.find(".without_phone").append(`
					<tr>
						<td>${v.name}</td>
						<td class="email">${v.email}</td>
						<td class="owner_type">${v.type}</td>
					</tr>
					`)
				dialog.find(".with_phone").append(`
					<tr class="${selected_owner_types.includes(v.type) ? "owner_checked" : ""}">
						<td>${v.name}</td>
						<td>${v.tel}</td>
						<td class="email">${v.email}</td>
						<td class="owner_type">${v.type}</td>
					</tr>
					`)
			})
			let owner = contacts.filter((v) => v.type === "omistaja")
			dialog.find(".owner").empty()
			owner.forEach((v) => {
				dialog.find(".owner").append(`
					<tr class="${selected_owner_types.includes(v.type) ? "owner_checked" : ""}">
						<td>${v.name}</td><td>${v.tel}</td>
						<td class="email">${v.email}</td>
						<td class="owner_type">${v.type}</td>
					</tr>
					`)
			})
			let project_contacts = contacts.filter(
				(v) =>
					v.type == "myyja" ||
					v.type == "tilaaja" ||
					v.type == "hankkeen_johtaja"
			)
			dialog.find(".project_contacts").empty()
			project_contacts.forEach((v) => {
				dialog.find(".project_contacts").append(`
	<tr class="${selected_owner_types.includes(v.type) ? "owner_checked" : ""}">
            <td>${v.name}</td>
            <td>${v.tel}</td>
            <td class="email">${v.email}</td>
            <td class="owner_type">${v.type}</td>
          </tr>
        `)
			})
			dialog.find(".send_email_button").removeAttr("disabled")
			updateSendEmailUrl()
		},
	})
}

function updateSendEmailUrl() {
	let dialog = $("#send_email_dialog")
	let title = dialog.find(".title").val()
	let message = dialog.find(".message").val() + "\n"
	let emails = new Set()
	dialog.find("table .owner_checked .email").each(function () {
		emails.add($(this).text())
	})
	emails = [...emails]
	message = message.replaceAll("\n", "%0D%0A")
	dialog
		.find(".send_email_button")
		.attr(
			"href",
			`mailto:${emails[0] || ""}?subject=${title}&body=${message}&cc=${emails
				.slice(1)
				.join(",")}`
		)
}

$("#show_send_email_dialog").on("click", showSendEmailDialog)

$("#send_email_dialog").find(".title, .message").on("keyup", updateSendEmailUrl)

$(
	"#send_email_dialog .type_select .type,#send_email_dialog .secondtype_select .type"
).on("click", function () {
	$(this).toggleClass("checked")
	let dialog = $("#send_email_dialog")
	let owner_types = dialog.find(".type_select .type, .secondtype_select .type")
	let selected_owner_types = owner_types
		.filter(".checked")
		.get()
		.map((v) => $(v).attr("data-type"))
	dialog
		.find(
			".with_phone tr, .owner tr, .project_contacts tr, .project_workers tr"
		)
		.each(function () {
			if (selected_owner_types.includes($(this).find(".owner_type").text())) {
				$(this).addClass("owner_checked")
			} else {
				$(this).removeClass("owner_checked")
			}
		})
	updateSendEmailUrl()
})

$("#send_email_dialog .comment__files").on("change", function () {
	let dialog = $("#send_email_dialog")
	let previews = dialog.find(".preview_files")
	let form_data = new FormData()
	let preset = dialog.find(".preset_name").val()

	if (preset === "" || preset === null) {
		preset = "kuva_"
	}
	for (let file of this.files) {
		form_data.append("comment__files[]", file, file.name)
	}

	form_data.append("preset", preset)
	form_data.append("room", current_apartment)
	form_data.append("projectid", $("#current_project_id").val())
	console.log(form_data.get("comment__files[]"))
	$.ajax({
		url: "../ajaxupload.php",
		type: "POST",
		data: form_data,
		cache: false,
		contentType: false,
		processData: false,
		success: (answer) => {
			console.log(answer)
			files = JSON.parse(answer)
			Object.entries(files).forEach(([id, url]) => {
				previews.append(`
			  <div class="preview_item" data-id="${id}" data-url="${url}">
			    <img src="${getFileIcon(url)}">
			    <button class="preview_delete">x</button>
			    <div class="tag_list">
			      <button class="tag_add">+ Tägi</button>
			    </div>
			  </div>
			`)
			})
			updateSendEmailUrl()
		},
		error: function (e) {
			console.log(e)
			alert("error!")
		},
	})
})

$("#send_email_dialog .preview_files").on(
	"click",
	".preview_delete",
	function () {
		$(this).parent().remove()
		updateSendEmailUrl()
	}
)

$(".preview_files").on("click", ".tag_add", function () {
	$(this).before(`
    <div class="tag">
      <input class="tag_name">
      <button class="tag_delete">x</button>
    </div>
  `)
})

function updateFileTags(item) {
	$.ajax({
		url: "/vendor/update-project-file.php",
		type: "POST",
		data: {
			id: item.data("id"),
			tags: item
				.find(".tag_name")
				.get()
				.filter((tag) => tag.value)
				.map((tag) => tag.value)
				.join(),
		},
	})
}

$(".dialog").on("change", ".preview_item", function () {
	updateFileTags($(this))
})

$(".preview_files").on("click", ".tag_delete", function () {
	let preview_item = $(this).closest(".preview_item")
	$(this).parent().remove()
	updateFileTags(preview_item)
})

document.addEventListener("DOMContentLoaded", function () {
	$(".send_email_button").on("click", function (e) {
		let dialog = $("#send_email_dialog")
		let attachments = dialog.find(".preview_item").get()
		let html = attachments.map((file) => {
			let img_url = file.querySelector("img").src
			let file_url = `${window.location.origin}/${file.dataset.url}`
			if (file_url == img_url) {
				return `<img src="${img_url}">`
			} else {
				return `<a href="${file_url}"><img src="${img_url}" width="200"></a>`
			}
		})
		navigator.permissions
			.query({ name: "clipboard-write" })
			.then((result) => {
				if (result.state == "granted" || result.state == "prompt") {
					alert("Write access granted!")
				}
			})
			.catch(console.error)
		navigator.clipboard
			.write([
				new ClipboardItem({
					"text/plain": new Blob(html, { type: "text/plain" }),
					"text/html": new Blob(html, { type: "text/html" }),
				}),
			])
			.then(() => {
				let location = $(this).attr("href")
				let win = window.open(location)
				if (win) {
					//Browser has allowed it to be opened
					win.focus()
				} else {
					//Browser has blocked it
					alert("Please allow popups for this website")
				}
			})
			.catch(console.error)
	})
})
