/**
 * This script performs various operations on the page elements based on the data attributes and values.
 * It includes functions to convert letters to Greek characters, encode and decode UTF-8 strings, and apply CSS classes to elements based on specific conditions.
 * Additionally, it sets a timeout to update certain elements after a delay.
 * @param {string} current_asiakas - The value of the current_asiakas element.
 * @param {NodeList} all_apartments - A collection of elements with the class 'project__building_room'.
 * @param {number} saumaset_hm - The horizontal spacing value.
 * @param {number} saumaset_vm - The vertical spacing value.
 * @returns None
 */
// Universal
current_room = null
apartment = null

current_asiakas = document.querySelector("#current_asiakas").value
all_apartments = document.querySelectorAll(".project__building_room")

saumaset_hm = 10
saumaset_vm = 10


const convertLetter = (str) => {
	const map = {
		a: "α",
		b: "β",
		d: "δ",
		e: "ε",
		i: "ι",
		k: "κ",
		n: "η",
		o: "θ",
		p: "ρ",
		r: "π",
		t: "τ",
		u: "μ",
		char: "υ",
		w: "ω",
		x: "χ",
		y: "γ",
	}
	return str.replace(/./g, (char) => {
		if (map[char.toLowerCase()]) {
			return char === char.toUpperCase() ? map[char.toLowerCase()] : map[char]
		}
		return char.toLowerCase()
	})
}

function encode_utf8(s) {
	return unescape(encodeURIComponent(s))
}

function decode_utf8(s) {
	return decodeURIComponent(escape(s))
}

function givenewtype() {
	setTimeout(() => {
		atypes = document.querySelectorAll(".ovi__asetusheading > b")
		btypes = document.querySelectorAll(".ikkuna__asetusheading > b")
		ctypes = document.querySelectorAll(".pilari__asetusheading > b")
		dtypes = document.querySelectorAll(".palkki__asetusheading > b")
		etypes = document.querySelectorAll(".ilmastointi__asetusheading > b")

		for (let i = 0; i < atypes.length; i++) {
			atypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < btypes.length; i++) {
			btypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < ctypes.length; i++) {
			ctypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < dtypes.length; i++) {
			dtypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
		for (let i = 0; i < etypes.length; i++) {
			etypes[i].innerHTML = convertLetter(
				String.fromCharCode(65 + i).toLowerCase()
			)
		}
	}, 1000)
}
// if(document.querySelector("#open_comments")) {
// for (let i = 0; i < all_apartments.length; i++) {
//   if(all_apartments[i].dataset.aroom.split(",")[1] == "prob" || all_apartments[i].dataset.broom.split(",")[1] == "prob" || all_apartments[i].dataset.croom.split(",")[1] == "prob" || all_apartments[i].dataset.droom.split(",")[1] == "prob" || all_apartments[i].dataset.kroom.split(",")[1] == "prob" || all_apartments[i].dataset.lroom.split(",")[1] == "prob") {
//     all_apartments[i].classList.add("prob");
//   }
// }
// }
// else {
//   for (let i = 0; i < all_apartments.length; i++) {
//     if(all_apartments[i].dataset.aroom && all_apartments[i].dataset.broom && all_apartments[i].dataset.croom && all_apartments[i].dataset.droom && all_apartments[i].dataset.kroom && all_apartments[i].dataset.lroom) {
//       if(all_apartments[i].dataset.aroom.split("~")[1] == "problem" || all_apartments[i].dataset.broom.split("~")[1] == "problem" || all_apartments[i].dataset.croom.split("~")[1] == "problem" || all_apartments[i].dataset.droom.split("~")[1] == "problem" || all_apartments[i].dataset.kroom.split("~")[1] == "problem" || all_apartments[i].dataset.lroom.split("~")[1] == "problem") {
//           all_apartments[i].classList.add("problem");
//       }
//       else if(all_apartments[i].dataset.aroom.split("~")[1] == "prob" || all_apartments[i].dataset.broom.split("~")[1] == "prob" || all_apartments[i].dataset.croom.split("~")[1] == "prob" || all_apartments[i].dataset.droom.split("~")[1] == "prob" || all_apartments[i].dataset.kroom.split("~")[1] == "prob" || all_apartments[i].dataset.lroom.split("~")[1] == "prob") {
//           all_apartments[i].classList.add("prob");
//       }
//
//       else if(all_apartments[i].dataset.aroom.split("~")[1] == "measured" || all_apartments[i].dataset.broom.split("~")[1] == "measured" || all_apartments[i].dataset.croom.split("~")[1] == "measured" || all_apartments[i].dataset.droom.split("~")[1] == "measured" || all_apartments[i].dataset.kroom.split("~")[1] == "measured" || all_apartments[i].dataset.lroom.split("~")[1] == "measured") {
//           all_apartments[i].classList.add("measured");
//       }
//
//       else if(all_apartments[i].dataset.aroom.split("~")[1] == "rangatok" || all_apartments[i].dataset.broom.split("~")[1] == "rangatok" || all_apartments[i].dataset.croom.split("~")[1] == "rangatok" || all_apartments[i].dataset.droom.split("~")[1] == "rangatok" || all_apartments[i].dataset.kroom.split("~")[1] == "rangatok" || all_apartments[i].dataset.lroom.split("~")[1] == "rangatok") {
//           all_apartments[i].classList.add("rangatok");
//       }
//
//       else if(all_apartments[i].dataset.aroom.split("~")[1] == "nowork" || all_apartments[i].dataset.broom.split("~")[1] == "nowork" || all_apartments[i].dataset.croom.split("~")[1] == "nowork" || all_apartments[i].dataset.droom.split("~")[1] == "nowork" || all_apartments[i].dataset.kroom.split("~")[1] == "nowork" || all_apartments[i].dataset.lroom.split("~")[1] == "nowork") {
//           all_apartments[i].classList.add("nowork");
//       }
//
//       else if(all_apartments[i].dataset.aroom.split("~")[1] == "undone" || all_apartments[i].dataset.broom.split("~")[1] == "undone" || all_apartments[i].dataset.croom.split("~")[1] == "undone" || all_apartments[i].dataset.droom.split("~")[1] == "undone" || all_apartments[i].dataset.kroom.split("~")[1] == "undone" || all_apartments[i].dataset.lroom.split("~")[1] == "undone") {
//           all_apartments[i].classList.add("undone");
//       }
//       else {
//           all_apartments[i].classList.add("done");
//       }
//     }
//   }
// }

$("#rooms").hide()
$("#drawscreen_section_zero").hide()
$("#drawscreen_section_one").hide()
$("#drawscreen_section_two").hide()
$("#drawscreen_section_three").hide()
$("#drawscreen_section_four").hide()
$("#drawscreen_section_five").hide()
$("#drawscreen_section_six").hide()
$("#drawscreen_section_seven").hide()
$("#drawscreen_section_eight").hide()
$("#drawscreen_section_tyostot").hide()
$("#drawscreen_section_esikatselu").hide()
$(".drawarea__controls_zero").hide()
$(".drawarea__controls_one").hide()
$(".drawarea__controls_two").hide()
$(".drawarea__controls_three").hide()
$(".drawarea__controls_four").hide()
$(".drawarea__controls_five").hide()
$(".drawarea__controls_six").hide()
$(".drawarea__controls_seven").hide()
$(".drawarea__controls_eight").hide()
$(".drawscreen_controls_esikatselu").hide()
$(".drawarea__navigation").hide()
// $("#drawscreen_section_four").show();
// $('.drawarea__controls_four').show();
// $("#drawscreen_section_four").slideDown(200);
// // document.querySelector("#drawarea_h").value = "3650";
// // document.querySelector("#drawarea_w").value = "9975";
// // setTimeout(changesize(),3000);

/**
 * Changes the walls for all rooms after a delay of 500 milliseconds.
 * If there is a current room selected, it saves the rooms again.
 * @returns None
 */
function changeWalls_all() {
	setTimeout(() => {
		saving_array = []
		saving_id = $(".id").val()

		save_rooms()
	}, 500)
	if (current_room !== null) {
		// submitprogress('', 'save');
		save_rooms()
	}
	// submitprogress('', 'save');
}

/**
 * This function performs a series of operations on elements selected by the class ".drawscreen_section_*name*".
 * It iterates over each room element, checks certain conditions, and adds specific classes based on the data attributes of the room element.
 * Additionally, it performs various DOM manipulations and updates the styles of different elements based on certain conditions.
 * @returns None
 */
function refresh__drawcontrols() {
	$("#rooms").hide()
	$("#drawscreen_section_zero").hide()
	$("#drawscreen_section_one").hide()
	$("#drawscreen_section_two").hide()
	$("#drawscreen_section_three").hide()
	$("#drawscreen_section_four").hide()
	$("#drawscreen_section_five").hide()
	$("#drawscreen_section_six").hide()
	$("#drawscreen_section_seven").hide()
	$("#drawscreen_section_eight").hide()
	$("#drawscreen_section_tyostot").hide()
	$("#drawscreen_section_esikatselu").hide()
	$(".drawarea__controls_zero").hide()
	$(".drawarea__controls_one").hide()
	$(".drawarea__controls_two").hide()
	$(".drawarea__controls_three").hide()
	$(".drawarea__controls_four").hide()
	$(".drawarea__controls_five").hide()
	$(".drawarea__controls_six").hide()
	$(".drawarea__controls_seven").hide()
	$(".drawarea__controls_eight").hide()
	// $('.drawscreen_section_tyostot').hide();
	$(".drawarea__controls_esikatselu").hide()
	$("#rooms").slideUp(200)
	$("#drawscreen_section_zero").slideUp(200)
	$("#drawscreen_section_one").slideUp(200)
	$("#drawscreen_section_two").slideUp(200)
	$("#drawscreen_section_three").slideUp(200)
	$("#drawscreen_section_four").slideUp(200)
	$("#drawscreen_section_five").slideUp(200)
	$("#drawscreen_section_six").slideUp(200)
	$("#drawscreen_section_seven").slideUp(200)
	$("#drawscreen_section_eight").slideUp(200)
	// $("#drawscreen_section_four").show();
	// $('.drawarea__controls_four').show();
	// $("#drawscreen_section_four").slideDown(200);
	input_step = document.querySelector("#step_drawscreen").value
	canvas = document.querySelector("#box-wrapper > main")

	current_tila =
		document.querySelector("#roomname_1").value +
		"_" +
		document.querySelector("#roomname_2").value +
		"_" +
		document.querySelector("#roomname_3").value
	current_tila = current_tila.replaceAll(" ", "")

	if (apartment != null) {
		lift_spot = apartment.dataset.liftpoint
		current_floor = apartment.dataset.y
		// k_saved_input = apartment.dataset.kroom;
		// a_saved_input = apartment.dataset.aroom;
		// b_saved_input = apartment.dataset.broom;
		// c_saved_input = apartment.dataset.croom;
		// d_saved_input = apartment.dataset.droom;
		// l_saved_input = apartment.dataset.lroom;

		// if (k_saved_input.length > 5) {
		//   k_wall = document.querySelectorAll(".house__wall_status_k");
		//   for (var w = 0; w < k_wall.length; w++) {
		//     k_wall[w].classList.add("tomeasure");
		//   }
		// }
		// if (a_saved_input.length > 5) {
		//   a_wall = document.querySelectorAll(".house__wall_status_a");
		//   for (var w = 0; w < a_wall.length; w++) {
		//     a_wall[w].classList.add("tomeasure");
		//   }
		// }
		// if (b_saved_input.length > 5) {
		//   b_wall = document.querySelectorAll(".house__wall_status_b");
		//   for (var w = 0; w < b_wall.length; w++) {
		//     b_wall[w].classList.add("tomeasure");
		//   }
		// }
		// if (c_saved_input.length > 5) {
		//   c_wall = document.querySelectorAll(".house__wall_status_c");
		//   for (var w = 0; w < c_wall.length; w++) {
		//     c_wall[w].classList.add("tomeasure");
		//   }
		// }
		// if (d_saved_input.length > 5) {
		//   d_wall = document.querySelectorAll(".house__wall_status_d");
		//   for (var w = 0; w < d_wall.length; w++) {
		//     d_wall[w].classList.add("tomeasure");
		//   }
		// }
		// if (l_saved_input.length > 5) {
		//   l_wall = document.querySelectorAll(".house__wall_status_l");
		//   for (var w = 0; w < l_wall.length; w++) {
		//     l_wall[w].classList.add("tomeasure");
		//   }
		// }
	}

	setTimeout(function () {
		var drawscreen_section_zero = document.getElementById(
			"drawscreen_section_zero"
		)
		var drawscreen_section_one = document.getElementById(
			"drawscreen_section_one"
		)
		var drawscreen_section_two = document.querySelector(
			"#drawscreen_section_two"
		)
		var drawscreen_section_three = document.querySelector(
			"#drawscreen_section_three"
		)
		var drawscreen_section_four = document.querySelector(
			"#drawscreen_section_four"
		)
		var drawscreen_section_five = document.querySelector(
			"#drawscreen_section_five"
		)
		var drawscreen_section_six = document.querySelector(
			"#drawscreen_section_six"
		)
		var drawscreen_section_seven = document.querySelector(
			"#drawscreen_section_seven"
		)
		var drawscreen_section_eight = document.querySelector(
			"#drawscreen_section_eight"
		)
		var da__controls = document.getElementsByClassName("drawarea__controls")
		var da__topitems = document.getElementsByClassName("drawarea__top_itemtwo")
		var da__topitems_eight = document.getElementsByClassName(
			"drawarea__top_itemeight"
		)
		var boxes = document.getElementsByClassName("box")
		var drawarea__top_circle = document.getElementsByClassName(
			"drawarea__top_circle"
		)
		// var drawarea__top_item = document.getElementsByClassName("")
		canvas = document.querySelector("#box-wrapper > main")
		drawarea = document.querySelector("#box-wrapper")
		if (input_step == "project_start") {
			$("#project_start").slideDown(200)
			$("#project_start").show()
			$(".drawarea__section").hide()
		}

		let rooms = document.querySelectorAll(".project__building_room")

		for (let a = 0; a < rooms.length; a++) {
			if (document.querySelector("#open_comments")) {
				// initializebuilding_comments();
			} else {
				const element = rooms[a]
				t = rooms[a]
				if (t.dataset.aroom) {
				} else {
					continue
				}
				statuses = ""

				// console.log(t);
				statuses += t.dataset.aroom.split("~")[1] + " __ "
				statuses += t.dataset.broom.split("~")[1] + " __ "
				statuses += t.dataset.croom.split("~")[1] + " __ "
				statuses += t.dataset.droom.split("~")[1] + " __ "
				statuses += t.dataset.kroom.split("~")[1] + " __ "
				statuses += t.dataset.lroom.split("~")[1] + " __ "

				if (
					statuses.includes("undone") &&
					statuses.includes("measured") &&
					statuses.includes("tomeasure")
				) {
					element.classList.add("bg-1")
				} else if (
					statuses.includes("undone") &&
					statuses.includes("measured")
				) {
					element.classList.add("bg-2")
				} else if (
					statuses.includes("undone") &&
					statuses.includes("tomeasure")
				) {
					element.classList.add("bg-3")
				} else if (
					statuses.includes("measured") &&
					statuses.includes("tomeasure")
				) {
					element.classList.add("bg-4")
				}
			}
		}

		submitprogress("", "save")
		if (input_step === "rooms") {
			$(".drawarea__section").hide()
			if (document.querySelector(".saumat__grandrow")) {
				document.querySelector(".saumat__grandrow").style.opacity = 0
			}
			if (document.querySelector(".listat__grandrow")) {
				document.querySelector(".listat__grandrow").remove()
			}
			if (canvas.querySelector("div.rangat__grandrow")) {
				document.querySelector("div.rangat__grandrow").remove()
			}
			if (document.querySelector("div.levyt")) {
				document.querySelector("div.levyt").remove()
			}
			aukot = canvas.querySelectorAll(".aukko")
			for (var i = 0; i < aukot.length; i++) {
				aukot[i].remove()
			}
			mpt = canvas.querySelectorAll(".mp")
			for (var i = 0; i < mpt.length; i++) {
				mpt[i].remove()
			}
			lapiviennit = canvas.querySelectorAll(".lv")
			for (var i = 0; i < lapiviennit.length; i++) {
				lapiviennit[i].remove()
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

			$("#rooms").show()
			$("#rooms").slideDown(200)
		}
		if (input_step == "drawscreen_section_zero") {
			input_step = "drawscreen_section_one"
		}
		if (input_step == "drawscreen_section_one") {
			$(".drawarea__section").show()
			$("#drawscreen_section_one").show()
			$(".drawarea__controls_one").show()
			$("#drawscreen_section_one").slideDown(200)
			$(".drawarea__section").css("display", "flex")
			$(".levy__section").css("display", "none")
			document.querySelector("#box-wrapper > main").style.display = "block"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			drawarea__left.onclick = function () {}
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "block"
			}
			if (document.querySelector(".saumat__grandrow")) {
				document.querySelector(".saumat__grandrow").style.opacity = 0
			}
			document.querySelector(".drawarea__controls_one").style.display = "block"
			document.querySelector("#box_upper__bottom-mid").style.display = "block"
			document.querySelector("#box_lower__top-mid").style.display = "block"
			document.querySelector("#box_right__left-mid").style.display = "block"
			document.querySelector("#box_left__right-mid").style.display = "block"
			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "none"
			}
			for (var i = 0; i < drawarea__top_circle.length; i++) {
				drawarea__top_circle[i].style.display = "none"
			}

			// Enable popup for Aukot and Reijät 2.2-2.3
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.add("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"flex"
			document.querySelector(".box__upper_upperdecor").style.display = "block"
			document.querySelector(".box__lower_lowerdecor").style.display = "block"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.remove("disabled")
			document.querySelector(".drawarea__top").classList.remove("disabled")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.add("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.add("disabled")
			// Edit Sauma's for 2.6-2.7
			var saumas = document.querySelectorAll(".sauma")
			var sauma__vertical_ctrl = document.querySelectorAll(
				".sauma__vertical_ctrl"
			)
			if (document.querySelector(".newrow_vertical")) {
				document.querySelector(".newrow_vertical").remove()
			}
			if (document.querySelector(".newrow_horizontal")) {
				document.querySelector(".newrow_horizontal").remove()
			}
			if (saumas) {
				for (var i = 0; i < saumas.length; i += 1) {
					saumas[i].remove()
				}
			}
			if (sauma__vertical_ctrl) {
				for (var i = 0; i < sauma__vertical_ctrl.length; i += 1) {
					sauma__vertical_ctrl[i].remove()
				}
			}
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			document.querySelector(".drawarea__right > span").innerHTML =
				"Reklamaatiot ja huomiot"
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "none"
			}
			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "block"
				}
			}

			room_status = "tomeasure"
			document.querySelector("input.room_status").value = room_status
			// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);

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
				degradate_url(3)
			}
			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = 2
		} else {
			let array__ofinputsy = []
			let array__ofinputsx = []

			// 09-07 change
			try {
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
			} catch (error) {
				array__ofinputsy.push(document.querySelector("#cord_up"))
				array__ofinputsx.push(document.querySelector("#cord_left"))
			}
		}
		if (input_step == "drawscreen_section_two") {
			$(".drawarea__section").show()
			$("#drawscreen_section_two").show()
			$(".drawarea__controls_two").show()
			$("#drawscreen_section_two").slideDown(200)
			$(".drawarea__section").css("display", "flex")
			$(".levy__section").css("display", "none")
			document.querySelector("#box-wrapper > main").style.display = "block"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			drawarea__left.onclick = function () {}
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			drawarea__bottom.onclick = function () {}
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "none"
			}
			if (document.querySelector(".saumat__grandrow")) {
				document.querySelector(".saumat__grandrow").style.opacity = 0
			}
			document.querySelector(".drawarea__top").removeAttribute("onclick")
			document.querySelector(".drawarea__controls_two").style.display = "block"
			// Drawarea limit
			document.querySelector("#box_upper__bottom-mid").style.display = "none"
			document.querySelector("#box_lower__top-mid").style.display = "none"
			document.querySelector("#box_right__left-mid").style.display = "none"
			document.querySelector("#box_left__right-mid").style.display = "none"
			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "flex"
			}
			// Enable popup for Aukot and Reijät 2.2-2.3
			document.querySelector(".drawarea__top").classList.add("m_btn")
			document
				.querySelector(".drawarea__top")
				.classList.remove("drawarea__top-lapiviennit")
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.add("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"none"
			document.querySelector(".box__upper_upperdecor").style.display = "none"
			document.querySelector(".box__lower_lowerdecor").style.display = "none"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.remove("disabled")
			document.querySelector(".drawarea__top").classList.remove("disabled")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.add("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.add("disabled")
			// Edit Sauma's for 2.6-2.7
			var saumas = document.querySelectorAll(".sauma")
			var sauma__vertical_ctrl = document.querySelectorAll(
				".sauma__vertical_ctrl"
			)
			if (document.querySelector(".newrow_vertical")) {
				document.querySelector(".newrow_vertical").remove()
			}
			if (document.querySelector(".newrow_horizontal")) {
				document.querySelector(".newrow_horizontal").remove()
			}
			if (saumas) {
				for (var i = 0; i < saumas.length; i += 1) {
					saumas[i].style.zIndex = "3"
					saumas[i].classList.remove("deformed")
				}
			}
			if (sauma__vertical_ctrl) {
				for (var i = 0; i < sauma__vertical_ctrl.length; i += 1) {
					sauma__vertical_ctrl[i].remove()
				}
			}
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			document.querySelector(".drawarea__right > span").innerHTML =
				"Reklamaatiot ja huomiot"
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "none"
			}
			for (var i = 0; i < drawarea__top_circle.length; i++) {
				drawarea__top_circle[i].style.display = "none"
			}
			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "block"
				}
			}

			room_status = "tomeasure"
			document.querySelector("input.room_status").value = room_status
			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = 2

			aukot = canvas.querySelectorAll(".aukko")
			aukot.forEach((a) => {
				a.style.outline = "1px solid black"
			})
			// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);
		} else {
			aukot = canvas.querySelectorAll(".aukko")
			aukot.forEach((a) => {
				a.style.outline = "unset"
			})
		}
		if (input_step == "drawscreen_section_three") {
			$(".drawarea__section").show()
			$("#drawscreen_section_three").show()
			$(".drawarea__controls_three").show()
			$("#drawscreen_section_three").slideDown(200)
			$(".drawarea__section").css("display", "flex")
			$(".levy__section").css("display", "none")
			document.querySelector("#box-wrapper > main").style.display = "block"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			drawarea__left.onclick = function () {}
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			drawarea__bottom.onclick = function () {}
			if (document.querySelector(".saumat__grandrow")) {
				document.querySelector(".saumat__grandrow").style.opacity = 0
			}
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "none"
			}
			for (var i = 0; i < drawarea__top_circle.length; i++) {
				drawarea__top_circle[i].style.display = "flex"
			}
			document.querySelector(".drawarea__controls_three").style.display =
				"block"
			// Drawarea limit
			document.querySelector("#box_upper__bottom-mid").style.display = "none"
			document.querySelector("#box_lower__top-mid").style.display = "none"
			document.querySelector("#box_right__left-mid").style.display = "none"
			document.querySelector("#box_left__right-mid").style.display = "none"
			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "none"
			}
			// Enable popup for Aukot and Reijät 2.2-2.3
			document.querySelector(".drawarea__top").classList.add("m_btn")
			document
				.querySelector(".drawarea__top")
				.classList.add("drawarea__top-lapiviennit")
			document
				.querySelector(".drawarea__top")
				.classList.add("drawarea__top-lapiviennit")
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.add("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"none"
			document.querySelector(".box__upper_upperdecor").style.display = "none"
			document.querySelector(".box__lower_lowerdecor").style.display = "none"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.remove("disabled")
			document.querySelector(".drawarea__top").classList.remove("disabled")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.add("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.add("disabled")
			// Edit Sauma's for 2.6-2.7
			var saumas = document.querySelectorAll(".sauma")
			var sauma__vertical_ctrl = document.querySelectorAll(
				".sauma__vertical_ctrl"
			)
			if (document.querySelector(".newrow_vertical")) {
				document.querySelector(".newrow_vertical").remove()
			}
			if (document.querySelector(".newrow_horizontal")) {
				document.querySelector(".newrow_horizontal").remove()
			}
			if (saumas) {
				for (var i = 0; i < saumas.length; i += 1) {
					saumas[i].style.zIndex = "3"
					saumas[i].classList.remove("deformed")
				}
			}
			if (sauma__vertical_ctrl) {
				for (var i = 0; i < sauma__vertical_ctrl.length; i += 1) {
					sauma__vertical_ctrl[i].remove()
				}
			}
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			document.querySelector(".drawarea__right > span").innerHTML =
				"Reklamaatiot ja huomiot"
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "none"
			}
			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "block"
				}
			}

			room_status = "tomeasure"
			document.querySelector("input.room_status").value = room_status
			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = 2

			// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);
		}
		if (input_step == "drawscreen_section_four") {
			$(".drawarea__section").show()
			$("#drawscreen_section_four").show()
			$(".drawarea__controls_four").show()
			$("#drawscreen_section_four").slideDown(200)
			$(".drawarea__section").css("display", "flex")
			$(".levy__section").css("display", "none")
			document.querySelector("#box-wrapper > main").style.display = "block"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			drawarea__left.onclick = function () {
				luo__sauma_vdrag()
			}
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			drawarea__bottom.onclick = function () {
				luo__sauma_hdrag()
			}
			if (document.querySelector(".saumat__grandrow")) {
				document.querySelector(".saumat__grandrow").style.opacity = 1
			}
			if (
				document.querySelector(".levy") ||
				document.querySelector(".levyt") ||
				document.querySelector(".levysarake")
			) {
				let levy = document.querySelectorAll(".levy")
				for (var i = 0; i < levy.length; i += 1) {
					// levy[i].style.background = "transparent";
					levy[i].classList.add("levy_transparent")
				}
				let closer = document.querySelectorAll(".closer")
				for (var i = 0; i < closer.length; i += 1) {
					closer[i].style.zIndex = 4
					closer[i].style.opacity = 1
				}

				// let verticalrow_saumat = document.querySelectorAll(".verticalrow_saumat");
				// for (var i=0;i<verticalrow_saumat.length;i+=1){
				//   verticalrow_saumat[i].style.position = "absolute";
				// }
				// let horizontalrow_saumat = document.querySelectorAll(".horizontalrow_saumat");
				// for (var i=0;i<horizontalrow_saumat.length;i+=1){
				//   horizontalrow_saumat[i].style.position = "absolute";
				// }
			}
			// for (var i = 0; i < drawarea__top_circle.length; i++) {
			//     drawarea__top_circle[i].style.display = "none";
			// }
			document.querySelector(".drawarea__control.drawarea__top").style.zIndex =
				"-2"
			document.querySelector(
				".drawarea__control.drawarea__right"
			).style.zIndex = "-2"
			document
				.querySelector(".drawarea__control.drawarea__top")
				.classList.remove("disabled")
			document
				.querySelector(".drawarea__control.drawarea__right")
				.classList.remove("disabled")
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "none"
			}
			document.querySelector(".drawarea__controls_four").style.display = "block"
			// Drawarea limit
			document.querySelector("#box_upper__bottom-mid").style.display = "none"
			document.querySelector("#box_lower__top-mid").style.display = "none"
			document.querySelector("#box_right__left-mid").style.display = "none"
			document.querySelector("#box_left__right-mid").style.display = "none"
			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "none"
			}
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.remove("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"flex"
			document.querySelector(".box__upper_upperdecor").style.display = "none"
			document.querySelector(".box__lower_lowerdecor").style.display = "none"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.add("disabled")
			document.querySelector(".drawarea__top").classList.add("disabled")
			document.querySelector(".drawarea__right").classList.remove("m_btn")
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.remove("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.remove("disabled")
			// Edit Sauma's for 2.6-2.7
			var saumas = document.querySelectorAll(".sauma")
			if (saumas) {
				for (var i = 0; i < saumas.length; i += 1) {
					saumas[i].style.zIndex = "3"
					saumas[i].classList.remove("deformed")
				}
			}
			var drawarea__top_item = document.querySelectorAll(".drawarea__top_item")
			if (drawarea__top_item) {
				for (var i = 0; i < drawarea__top_item.length; i += 1) {
					drawarea__top_item[i].style.display = "none"
				}
			}
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			document.querySelector(".drawarea__right > span").innerHTML = ""
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "none"
			}
			document.querySelector(".drawarea__bottom").style.marginBottom = "-70px"
			document.querySelector(".drawarea__left").style.marginLeft = "-70px"
			if (document.querySelector(".drawarea__left .end_measure")) {
				document.querySelector(".drawarea__left .end_measure").style.left =
					"30px"
			}

			document.querySelector(".drawarea__bottom").style.zIndex = "0"
			// document.querySelector(".drawarea__left").style.opacity = "0.2";
			navs = document.querySelectorAll(".nav")
			for (var i = 0; i < navs.length; i++) {
				navs[i].style.top = "40px"
			}
			// luo drag
			function luo__sauma_vdrag() {
				s_v += 1
				alert("Pystysauma luotu")
				var sauma__interval_horis_vontal =
					parseFloat(
						document.querySelector("#settings__sauma_interval_y").value
					) / 5
				var nhs_vrtl = document.querySelector(".newrow_vertical")
				var sauma__interval_vertical
				if (document.getElementById("settings__sauma_pysty").checked) {
					sauma__interval_vertical = document.querySelector(
						"#settings__sauma_interval_x"
					).value
				}
				if (document.getElementById("settings__sauma_vaaka").checked) {
					sauma__interval_vertical = document.querySelector(
						"#settings__sauma_interval_y"
					).value
				}
				const widthBox = document.querySelector("#box_w").value
				const w = document.querySelector("#box_w").value
				const between_sauma = sauma__interval_vertical / widthBox
				const canvasWidth = document.querySelector(
					"#box-wrapper > main"
				).offsetWidth
				const sauma = document.createElement("div")
				const sauma__control = document.createElement("input")
				const sauma__control_down = document.createElement("b")
				const sauma__controls = document.createElement("div")
				const sauma__controls_del = document.createElement("div")
				const sauma__controls_type = document.createElement("input")
				const newDiv__comment = document.createElement("li")
				const newDiv__comment_del = document.createElement("i")
				const newrow_horis_vontal = document.createElement("div")
				let id = "sauma" + Math.random().toString(16).slice(2).toLowerCase()
				sauma.classList.add("sauma")
				sauma.classList.add("luo__sauma_vertical")
				sauma.classList.add("sauma__vertical")
				sauma__control.classList.add("sauma__vertical_ctrl")
				sauma__control.classList.add("sauma__control")
				sauma__control.classList.add("sauma__vertical_ctrl-lefted")
				sauma__controls_type.classList.add("lineinput")
				sauma__control_down.classList.add("sauma__vertical_ctrldown")
				newDiv__comment_del.classList.add("newDiv__comment_del")
				sauma__controls.classList.add("sauma__controls")
				sauma__controls_del.classList.add("sauma__controls_del")
				newrow_horis_vontal.classList.add("newrow_vertical")
				sauma__control_down.classList.add("sauma__control_down")
				newDiv__comment_del.classList.add("newDiv__comment_del")
				sauma__control_down.classList.add(id)
				sauma__control.classList.add(id)
				newDiv__comment.classList.add(id)
				sauma.classList.add(id)
				newDiv__comment.classList.add(id)
				sauma__controls.classList.add(id)
				sauma__controls_del.classList.add(id)
				sauma__controls_type.classList.add(id)
				sauma.innerHTML = ""
				sauma__control.value = "300"
				sauma__controls.innerHTML = ""
				newDiv__comment.innerHTML = "Sauma"
				newDiv__comment_del.innerHTML =
					"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>"
				sauma__control_down.innerHTML = "0"
				newDiv__comment.innerHTML = "Sauma"
				newDiv__comment_del.innerHTML = ""
				sauma__controls_type.value = "ST1"
				sauma__controls_type.type = "text"
				newDiv__comment.setAttribute("name", id)
				newDiv__comment_del.setAttribute(
					"onclick",
					"obj = this.getAttribute('name');document.querySelector('#'+obj).remove();this.parentElement.remove();"
				)
				newDiv__comment_del.setAttribute("name", id)
				sauma__control.setAttribute("name", id)
				sauma__controls.setAttribute("name", id)
				sauma__controls_del.setAttribute("name", id)
				sauma.dataset.no = s_v
				sauma__controls_type.setAttribute("name", id)
				sauma.setAttribute("id", id)
				sauma.setAttribute("name", id)
				sauma__control_down.setAttribute("name", id)
				sauma__controls_del.setAttribute("onclick", "sauma__del(this);")
				sauma__control.setAttribute("onchange", "changedimensions_sauma(this);")
				sauma__control.setAttribute("onclick", "clearcord(this,'sau');")
				// sauma__control.setAttribute("onclick", "document.querySelector("+id+").remove();this.parentElement.style.opacity = '0';");
				sauma.setAttribute("onclick", "")
				sauma.style.position = "absolute"
				document
					.querySelector(".drawarea__controls_four-pysty")
					.prepend(newDiv__comment)
				if (document.querySelector(".verticalrow_saumat")) {
					document.querySelector(".verticalrow_saumat").prepend(sauma)
				} else {
					alert("luo saumoitus ensin")
				}
				sauma.style.left = "60px"
				calculateamounts()
				saumasize__checkup()
			}

			function luo__sauma_hdrag() {
				alert("Vaakasauma luotu")
				s_h += 1
				var sauma__interval_horizontal
				if (document.getElementById("settings__sauma_pysty").checked) {
					sauma__interval_horizontal = document.querySelector(
						"#settings__sauma_interval_y"
					).value
				} else if (document.getElementById("settings__sauma_vaaka").checked) {
					sauma__interval_horizontal = document.querySelector(
						"#settings__sauma_interval_x"
					).value
				}
				const heightBox = document.querySelector("#box_h").value
				const boxHeight = document.querySelector(
					"#box-wrapper > main"
				).offsetHeight
				const sauma = document.createElement("div")
				const sauma__control = document.createElement("input")
				const sauma__control_down = document.createElement("b")
				const sauma__controls_type = document.createElement("input")
				const sauma__controls_del = document.createElement("div")
				const newDiv__comment = document.createElement("li")
				const newDiv__comment_del = document.createElement("i")
				const newrow_horis_vontal = document.createElement("div")
				const sauma__controls = document.createElement("div")
				var h = document.querySelector("#box_h").value
				var w = document.querySelector("#box_w").value
				let id = "v_sauma" + Math.random().toString(16).slice(2).toLowerCase()
				var nvrtcl = document.querySelector(".newrow_horizontal")
				newrow_horis_vontal.classList.add(id)
				newDiv__comment_del.classList.add("newDiv__comment_del")
				sauma__controls_del.classList.add("sauma__controls_del")
				sauma.classList.add("sauma__horizontal")
				sauma.classList.add("luo__sauma_horizontal")
				sauma.classList.add("sauma")
				sauma__control.classList.add("sauma__horizontal_ctrl")
				sauma__control_down.classList.add("sauma__horizontal_ctrldown")
				sauma__control_down.classList.add("sauma__control_down")
				sauma__control_down.classList.add("luo__sauma_horizontal")
				sauma__controls_type.classList.add("lineinput")
				sauma__controls_type.classList.add("sauma__controls_type")
				sauma__control_down.classList.add("sauma__horizontal_ctrldown")
				sauma__controls.classList.add("sauma__controls")
				sauma__controls.classList.add(id)
				sauma__controls.innerHTML = ""
				sauma.classList.add(id)
				sauma__control.classList.add(id)
				sauma__control_down.classList.add(id)
				sauma__controls_type.classList.add(id)
				sauma__controls_del.classList.add(id)
				newDiv__comment.classList.add(id)
				newDiv__comment_del.classList.add(id)
				sauma__controls_type.setAttribute("name", id)
				newDiv__comment_del.setAttribute("name", id)
				sauma__controls_del.setAttribute("name", id)
				sauma__control_down.setAttribute("name", id)
				sauma.setAttribute("name", id)
				sauma__controls.setAttribute("name", id)
				newDiv__comment.innerHTML = "Sauma"
				newDiv__comment_del.innerHTML =
					"<svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M6.41675 9.91668H2.33341C2.024 9.91668 1.72725 9.79376 1.50846 9.57497C1.28966 9.35618 1.16675 9.05943 1.16675 8.75001V1.75001C1.16675 1.1059 1.28966 1.14384 1.50846 0.925052C1.72725 0.70626 2.024 0.58331 2.33341 0.58331H9.33341V1.75001H2.33341V8.75001H6.41675V7.58334L8.75008 9.33334L6.41675 11.0833V9.91668ZM11.0834 12.25V4.08334H4.66675V7.58334H3.50008V4.08334C3.50008 3.77392 3.623 3.47718 3.84179 3.25839C4.06058 3.03959 4.35733 2.91668 4.66675 2.91668H11.0834C11.3928 2.91668 11.6896 3.03959 11.9084 3.25839C12.1272 3.47718 12.2501 3.77392 12.2501 4.08334V12.25C12.2501 12.5594 12.1272 12.8562 11.9084 13.075C11.6896 13.2938 11.3928 13.4167 11.0834 13.4167H4.66675C4.35733 13.4167 4.06058 13.2938 3.84179 13.075C3.623 12.8562 3.50008 12.5594 3.50008 12.25V11.0833H4.66675V12.25H11.0834Z' fill='#18AB00'/></svg>"
				newDiv__comment.appendChild(newDiv__comment_del)
				newDiv__comment.innerHTML = "Sauma "
				sauma.dataset.no = s_h
				sauma__control.value = "300"
				sauma__controls_del.setAttribute("onclick", "sauma__del(this);")
				sauma__control.setAttribute("onchange", "changedimensions_sauma(this);")
				sauma__control.setAttribute("onclick", "clearcord(this,'sau');")
				sauma__control.setAttribute(
					"data-from",
					parseFloat(sauma__control.value)
				)
				// if (document.querySelector("#settings__saumahanta-yla").checked || document.getElementById("settings__saumahanta-vaakatasoitus")
				// .checked || vaakahanta_alas === true) {
				sauma.style.bottom = "60px"
				// }
				// else {
				//   sauma.style.top = "60px";
				// }
				if (document.querySelector(".horizontalrow_saumat")) {
					document.querySelector(".horizontalrow_saumat").prepend(sauma)
				} else {
					alert("luo saumoitus ensin")
				}
				sauma.append(sauma__controls)
				sauma.dataset.from = 300
				calculateamounts()
			}

			var tyostot = document.querySelectorAll(".tyostot__tyosto")
			if (tyostot) {
				for (var i = 0; i < tyostot.length; i += 1) {
					tyostot[i].style.display = "none"
					// tyostot[i].classList.remove('deformed');
				}
			}

			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "block"
				}
			}

			let closer = document.querySelectorAll(".closer")
			for (var i = 0; i < closer.length; i += 1) {
				closer[i].style.zIndex = 1
				closer[i].style.opacity = 1
			}

			room_status = "saumatok"
			document.querySelector("input.room_status").value = room_status
			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = -2

			// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);
		} else {
			let closer = document.querySelectorAll(".closer")
			for (var i = 0; i < closer.length; i += 1) {
				closer[i].style.zIndex = -1
				closer[i].style.opacity = 0
			}

			var drawarea__left = document.querySelector(".drawarea__left")
			drawarea__left.onclick = function () {}
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			drawarea__bottom.onclick = function () {}
		}

		if (input_step == "drawscreen_section_tyostot") {
			if (canvas.querySelector("div.saumat__grandrow")) {
			} else {
				alert("Sinun tulee asettaa saumat ennen tätä vaihetta.")
				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				return
			}
			$(".drawarea__section").show()
			$(".drawarea__section").css("display", "flex")
			$("#drawscreen_section_tyostot").show()
			$(".drawarea__controls_tyostot").show()

			document.querySelector(".drawarea__left").style.marginLeft = "-40px"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.add("disabled")
			document.querySelector(".drawarea__top").classList.add("disabled")
			document.querySelector(".drawarea__right").classList.remove("m_btn")
			document.querySelector(".drawarea__top").classList.remove("m_btn")

			let tyostot = document.querySelectorAll(".levy_input")
			for (var i = 0; i < tyostot.length; i++) {
				var tyosto_id = tyostot[i].getAttribute("id")
				if (tyosto_id == "k_yrmod" || tyosto_id == "k_yrlevy") {
					tyostot[i].parentElement.style.marginTop =
						parseFloat(tyostot[i].value) / 5 + "px"
				} else if (tyosto_id == "k_armod" || tyosto_id == "k_arlevy") {
					tyostot[i].parentElement.style.marginTop =
						parseFloat((-1 * parseFloat(tyostot[i].value)) / 5) + "px"
				} else if (tyosto_id == "k_ormod" || tyosto_id == "k_orlevy") {
					tyostot[i].parentElement.style.marginLeft =
						parseFloat((-1 * parseFloat(tyostot[i].value)) / 5) + "px"
				} else if (tyosto_id == "k_vrmod" || tyosto_id == "k_vrlevy") {
					tyostot[i].parentElement.style.marginLeft =
						parseFloat(tyostot[i].value) / 5 + "px"
				}
			}
			let sauma__controllers = document.querySelectorAll(".sauma__controls")
			for (var i = sauma__controllers.length - 1; i >= 0; i--) {
				sauma__controllers[i].style.opacity = "1"
				sauma__controllers[i].style.cursor = "not-allowed"
			}

			let levy = document.querySelectorAll(".levy")
			for (var i = 0; i < levy.length; i += 1) {
				levy[i].classList.remove("levy_transparent")
			}

			if (canvas.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = canvas.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "none"
				}
			}
			if (canvas.querySelector(".closer")) {
				closers = canvas.querySelectorAll(".closer")
				for (var i = closers.length - 1; i >= 0; i--) {
					closers[i].style.opacity = 0
					closers[i].style.zIndex = -1
				}
			}

			sauma__controls = canvas.querySelectorAll(".sauma__controls")

			for (var i = 0; i < sauma__controls.length; i++) {
				sauma__controls[i].style.opacity = 0
				sauma__controls[i].style.zIndex = "-1"
				sauma__controls[i].style.display = "none"
			}

			var drawarea__top_item = document.querySelectorAll(".drawarea__top_item")
			if (drawarea__top_item) {
				for (var i = 0; i < drawarea__top_item.length; i += 1) {
					drawarea__top_item[i].style.display = "none"
				}
			}

			if (tyostot_ok !== 0) {
				// only_levy_transfer();
				restore__kiinnikkeet(tyostocontent)
				influence__coordinates("enable")
			} else {
				// kiinnikkeet__siirto();
				// kiinnike_update_settingsinit();
			}

			if (
				tyostot_ok !== 0 &&
				canvas.querySelector(".tyostot__tyosto") == null
			) {
				// kiinnikkeet__siirto();
				// kiinnike_update_settingsinit();
			}

			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = -2
		} else {
			sauma__controls = canvas.querySelectorAll(".sauma__controls")

			for (var i = 0; i < sauma__controls.length; i++) {
				sauma__controls[i].style.opacity = 1
				sauma__controls[i].style.zIndex = 1
				sauma__controls[i].style.display = "block"
			}

			if (
				document.querySelector(
					"#box-wrapper > div.drawarea__control.drawarea__right.disabled"
				)
			) {
				document.querySelector(
					"#box-wrapper > div.drawarea__control.drawarea__right.disabled"
				).style.borderLeft = "1px solid black"
				document.querySelector(
					"#box-wrapper > div.drawarea__control.drawarea__top.disabled"
				).style.borderBottom = "1px solid black"
			}

			influence__coordinates("disable")
		}
		if (input_step == "drawscreen_section_five") {
			if (canvas.querySelector("div.saumat__grandrow")) {
			} else {
				alert("Sinun tulee asettaa saumat ennen tätä vaihetta.")
				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				return
			}

			$(".drawarea__section").show()
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}

			if (
				document.querySelector(".levy_tyostot_x") &&
				document.querySelector(".levy_tyostot_y")
			) {
			} else {
				$("#step_drawscreen").val("drawscreen_section_tyostot")
				refresh__drawcontrols()
				updatearea()
				return
			}

			document.querySelector(".drawarea__left").style.marginLeft = "-40px"

			$("#drawscreen_section_five").show()
			$(".drawarea__controls_five").show()
			$("#drawscreen_section_five").slideDown(200)
			$(".drawarea__section").css("display", "flex")
			$(".drawarea__controls_five").css("display", "block")
			$(".levy__section").css("display", "none")
			document.querySelector("#box-wrapper > main").style.display = "block"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			if (document.querySelector(".sauma")) {
			} else {
				alert("Saumoitathan ennen levyjen asennusta.")
				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				return
			}
			document.querySelector(".drawarea__control.drawarea__top").style.zIndex =
				"2"
			document.querySelector(
				".drawarea__control.drawarea__right"
			).style.zIndex = "2"
			for (var i = 0; i < drawarea__top_circle.length; i++) {
				drawarea__top_circle[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "none"
			}
			// Drawarea limit
			document.querySelector("#box_upper__bottom-mid").style.display = "none"
			document.querySelector("#box_lower__top-mid").style.display = "none"
			document.querySelector("#box_right__left-mid").style.display = "none"
			document.querySelector("#box_left__right-mid").style.display = "none"
			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "none"
			}
			let levy = document.querySelectorAll(".levy")
			for (var i = 0; i < levy.length; i += 1) {
				levy[i].classList.remove("levy_transparent")
			}

			let combined__levy = canvas.querySelectorAll(".combined__levy")
			for (var i = 0; i < combined__levy.length; i += 1) {
				combined__levy[i].classList.remove("combined__levy")
			}
			// Enable popup for Aukot and Reijät 2.2-2.3
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.remove("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"none"
			document.querySelector(".box__upper_upperdecor").style.display = "none"
			document.querySelector(".box__lower_lowerdecor").style.display = "none"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.add("disabled")
			document.querySelector(".drawarea__top").classList.add("disabled")
			document.querySelector(".drawarea__right").classList.remove("m_btn")
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.remove("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.remove("disabled")
			// Edit Sauma's for 2.6-2.7
			var saumas = document.querySelectorAll(".sauma")
			if (saumas) {
				for (var i = 0; i < saumas.length; i += 1) {
					saumas[i].style.zIndex = "3"
					saumas[i].classList.remove("deformed")
				}
			}
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			document.querySelector(".drawarea__right > span").innerHTML =
				"Reklamaatiot ja huomiot"
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "none"
			}
			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "block"
				}
			}

			var tyostot = document.querySelectorAll(".tyostot__tyosto")
			if (tyostot) {
				for (var i = 0; i < tyostot.length; i += 1) {
					tyostot[i].style.display = "block"
					// tyostot[i].classList.remove('deformed');
				}
			}

			sauma__controls = canvas.querySelectorAll(".sauma__controls")

			for (let i = 0; i < sauma__controls.length; i++) {
				sauma__controls[i].style.display = "none"
			}

			x_cords = canvas.querySelectorAll(".x_cord")
			for (let i = 0; i < x_cords.length; i++) {
				x_cords[i].style.display = "none"
			}

			x_cord_mkis = canvas.querySelectorAll(".x_cord_mki")
			for (let i = 0; i < x_cord_mkis.length; i++) {
				x_cord_mkis[i].style.display = "none"
			}

			x_dels = canvas.querySelectorAll(".x_del")
			for (let i = 0; i < x_dels.length; i++) {
				x_dels[i].style.display = "none"
			}

			drawarea__control = document.querySelectorAll(".drawarea__control")
			for (let i = 0; i < drawarea__control.length; i++) {
				drawarea__control[i].style.borderColor = "rgba(0,0,0,.2)"
			}

			t3 = canvas.querySelectorAll(".secondcord")
			for (var s = t3.length - 1; s >= 0; s--) {
				if (t3[s].parentElement.classList.contains("tyostot__tyosto_pysty")) {
					t3[s].style.top = 30 + parseFloat(drawarea.style.height) + "px"
					t3[s].style.position = "absolute"
				}
				if (t3[s].parentElement.classList.contains("tyostot__tyosto_vaaka")) {
					// t3[s].style.left = 10 + (-0.9) * ((parseFloat(drawarea.style.width))) + "px";
					t3[s].style.right = 30 + parseFloat(drawarea.style.width) + "px"
					t3[s].style.position = "absolute"
				}
			}

			room_status = "saumatok"
			document.querySelector("input.room_status").value = room_status
			// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);
			create__ladontaoptions()

			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = -2
		} else {
			// if(canvas.querySelector(".closer")) {
			//    closers = canvas.querySelectorAll(".closer");
			//    for (var i = closers.length - 1; i >= 0; i--) {
			//       closers[i].style.opacity = 0;
			//       closers[i].style.zIndex = -1;
			//    }
			// }
		}
		if (input_step == "drawscreen_section_esikatselu") {
			if (canvas.querySelector("div.saumat__grandrow")) {
			} else {
				alert("Sinun tulee asettaa saumat ennen tätä vaihetta.")
				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				return
			}
			if (canvas.querySelector(".tyostot__tyosto")) {
			} else {
				// alert("Sinun tulee asettaa kiinnikkeet ennen tätä vaihetta.");
				$("#step_drawscreen").val("drawscreen_section_five")
				refresh__drawcontrols()
				updatearea()
				return
			}
			$(".drawarea__section").show()
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}
			sauma__controls = canvas.querySelectorAll(".sauma__controls")

			for (var i = 0; i < sauma__controls.length; i++) {
				sauma__controls[i].style.opacity = 0
			}

			document.querySelector(".drawarea__left").style.marginLeft = "-40px"
			$("#drawscreen_section_esikatselu").show()
			$(".drawarea__controls_esikatselu").show()
			$(".drawarea__navigation").show()
			$("#drawscreen_section_esikatselu").slideDown(200)
			$(".drawarea__section").css("display", "flex")
			$(".levy__section").css("display", "none")
			document.querySelector("#box-wrapper > main").style.display = "block"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			if (document.getElementById("settings__sauma_vaaka").checked) {
				document.getElementById("esikatselu__saumoitussuunta").innerHTML =
					"vaakaan"
			} else if (document.getElementById("settings__sauma_pysty").checked) {
				document.getElementById("esikatselu__saumoitussuunta").innerHTML =
					"pystyyn"
			}
			document.querySelector(".drawarea__control.drawarea__top").style.zIndex =
				"2"
			document.querySelector(
				".drawarea__control.drawarea__right"
			).style.zIndex = "2"
			for (var i = 0; i < drawarea__top_circle.length; i++) {
				drawarea__top_circle[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "none"
			}
			let sauma__controllers = document.querySelectorAll(".sauma__controls")
			for (var i = sauma__controllers.length - 1; i >= 0; i--) {
				sauma__controllers[i].style.opacity = "0.3"
				sauma__controllers[i].style.cursor = "not-allowed"
			}

			current_tila =
				document.querySelector("#roomname_1").value +
				"_" +
				document.querySelector("#roomname_2").value +
				"_" +
				document.querySelector("#roomname_3").value
			current_tila = current_tila.replaceAll(" ", "")
			// Drawarea limit
			document.querySelector("#box_upper__bottom-mid").style.display = "none"
			document.querySelector("#box_lower__top-mid").style.display = "none"
			document.querySelector("#box_right__left-mid").style.display = "none"
			document.querySelector("#box_left__right-mid").style.display = "none"

			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "none"
			}
			// Enable popup for Aukot and Reijät 2.2-2.3
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.remove("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"none"
			document.querySelector(".box__upper_upperdecor").style.display = "none"
			document.querySelector(".box__lower_lowerdecor").style.display = "none"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.add("disabled")
			document.querySelector(".drawarea__top").classList.add("disabled")
			document.querySelector(".drawarea__right").classList.remove("m_btn")
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.remove("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.remove("disabled")
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			document.querySelector(".drawarea__right > span").innerHTML =
				"Reklamaatiot ja huomiot"
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "none"
			}
			let five_levy_closers = canvas.querySelectorAll(".closer")
			for (var i = five_levy_closers.length - 1; i >= 0; i--) {
				five_levy_closers[i].remove()
			}
			// let k_levys = canvas.querySelectorAll(".levy");
			// for (var i = k_levys.length - 1; i >= 0; i--) {
			//   give__tyosto_cord(k_levys[i]);
			//   countdown__kiinnikkeet(k_levys[i]);
			// }
			tyostot__tyosto_pysty = canvas.querySelectorAll(".levy_tyostot_x > div")
			tyostot__tyosto_vaaka = canvas.querySelectorAll(".levy_tyostot_y > div")
			for (var i = tyostot__tyosto_pysty.length - 1; i >= 0; i--) {
				tyostot__tyosto_pysty[i].style.opacity = 1
			}
			for (var i = tyostot__tyosto_vaaka.length - 1; i >= 0; i--) {
				tyostot__tyosto_vaaka[i].style.opacity = 1
			}
			if (canvas.querySelector(".closer")) {
				closers = canvas.querySelectorAll(".closer")
				for (var i = closers.length - 1; i >= 0; i--) {
					closers[i].style.opacity = 0
					closers[i].style.zIndex = -1
				}
			}

			sauma__controls = canvas.querySelectorAll(".sauma__controls")

			for (var i = 0; i < sauma__controls.length; i++) {
				sauma__controls[i].style.opacity = 0
			}

			room_status = "saumatok"
			document.querySelector("input.room_status").value = room_status
			// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);

			// draggable measure
			function k_drag(element) {
				let pos1 = 0,
					pos2 = 0,
					pos3 = 0,
					pos4 = 0
				element.touchstart = dragMouseDown

				function dragMouseDown(e) {
					e = e || window.event
					e.preventDefault()
					pos3 = e.clientX
					pos4 = e.clientY
					document.touchend = closeDragElement
					document.touchmove = elementDrag
				}

				function k_elementDrag(e) {
					e = e || window.event
					e.preventDefault()
					pos1 = pos3 - e.clientX
					pos2 = pos4 - e.clientY
					pos3 = e.clientX
					pos4 = e.clientY
					element.style.top = element.offsetTop - pos2 + "px"
					element.style.left = element.offsetLeft - pos1 + "px"
				}

				function k_closeDragElement() {
					document.touchend = null
					document.touchmove = null
				}
			}
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.remove("drawarea__eight")
			document.querySelector(".drawarea__right > span").innerHTML =
				"Reklamaatiot ja huomiot"
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "none"
			}
			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "none"
				}
			}

			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = -2
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				room: current_tila,
				wall: current_room.toLowerCase(),
				type: "levyt",
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinwall.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					u_rooms = []
					used_rooms = []

					try {
						successful = success.replaceAll("~~~~", ",").split("&&")
						trs = document.querySelectorAll(".levy_excel tr:not(.headingrow)")
						trs.forEach((tr) => {
							tr.remove()
						})

						cols = [
							"Type (drawing)",
							"Materialcode",
							"Leveys (X)",
							"Pituus (Y)",
							"Thickness",
							"Structure",
							"Quantity",
							"Plus",
							"Part number",
							"Nimi 1",
							"Nimi 2",
							"MPR",
							"Palletgroup",
							"Prioriteetti",
							"Asiakas",
							"Asennus",
							"Työstöt",
							"",
							"X KPL",
							"Y KPL",
							"Yhteensä",
							"  ",
							"   ",
							"    ",
							"     ",
							"      ",
							"Tarra",
							"Diameter",
							"X1",
							"X2",
							"X3",
							"X4",
							"X5",
							"X6",
							"X7",
							"X8",
							"X9",
							"X10",
							"Y1",
							"Y2",
							"Y3",
							"Y4",
							"Y5",
							"Y6",
							"Y7",
							"Y8",
							"Y9",
							"Y10",
							"X",
							"Y",
							"X ",
							"Y ",
							"PR1_X",
							"PR1_Y",
							"PR1_DX",
							"PR1_DY",
							"PR2_X",
							"PR2_Y",
							"PR1_DX",
							"PR2_DY",
							"PR3_X",
							"PR3_Y",
							"PR3_DX",
							"PR3_DY",
							"PR4_X",
							"PR4_Y",
							"PR4_DX",
							"PR4_DY",
							"PF1_X",
							"PF1_Y",
							"PF1_DX",
							"PF1_DY",
							"PF2_X",
							"PF2_Y",
							"PF2_DX",
							"PF2_DY",
							"CH 0=OFF 1= ON",
							"Y Vasen",
							"Y oikea",
							"X ala",
							"x ylä",
							"X ala",
							"X ylä",
							"VH1_X",
							"VH1_Y",
							"VH1_L",
							"VH1_KPL",
							"VH1_K",
							"       ",
							"        ",
							"         ",
							"          ",
							"AR Edge 1",
							"YR Edge 1",
							"VR Edge 1",
							"OR Edge 1",
							"AR Edge 2",
							"YR Edge 2",
							"VR Edge 2",
							"OR Edge 2",
							"AR Trim",
							"YR Trim",
							"VR Trim",
							"OR Trim",
							"Yhdistä Xx-XX",
							"Yhdistä Yx-YX",
						]
						raw_data = successful[0].replaceAll("&&", "").split("----")
						console.log(raw_data)
						levy_array = JSON.parse(raw_data[0])
						levy_array.forEach((row) => {
							tr = document.createElement("tr")
							for (var i = 0; i < cols.length; i++) {
								index = cols[i]
								tr.innerHTML += "<td>" + row[index] + "</td>"
							}
							document.querySelector(".levy_excel tbody").appendChild(tr)
						})
					} catch (error) {
						console.log("no previous save detected")
					}
				})
		} else {
		}
		if (input_step == "drawscreen_section_six") {
			if (canvas.querySelector("div.saumat__grandrow")) {
			} else {
				alert("Sinun tulee asettaa saumat ennen tätä vaihetta.")
				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				return
			}

			if (canvas.querySelector(".tyostot__tyosto")) {
			} else {
				// alert("Sinun tulee asettaa kiinnikkeet ennen tätä vaihetta.");
				$("#step_drawscreen").val("drawscreen_section_five")
				refresh__drawcontrols()
				updatearea()
				return
			}

			$(".drawarea__section").show()
			$("#drawscreen_section_six").show()
			$(".drawarea__controls_six").show()
			$("#drawscreen_section_six").slideDown(200)
			$(".drawarea__section").css("display", "flex")
			$(".levy__section").css("display", "none")
			document.querySelector("#box-wrapper > main").style.display = "block"
			if (canvas.querySelector("div.rangat__grandrow")) {
				canvas.querySelector("div.rangat__grandrow").style.opacity = 1
			}
			current_tila =
				document.querySelector("#roomname_1").value +
				"_" +
				document.querySelector("#roomname_2").value +
				"_" +
				document.querySelector("#roomname_3").value
			current_tila = current_tila.replaceAll(" ", "")
			document.querySelector(".drawarea__left").style.marginLeft = "-40px"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			document.querySelector(".drawarea__control.drawarea__top").style.zIndex =
				"2"
			document.querySelector(
				".drawarea__control.drawarea__right"
			).style.zIndex = "2"
			drawarea__left.style.zIndex = "-1"
			drawarea__bottom.style.zIndex = "-1"
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}
			for (var i = 0; i < drawarea__top_circle.length; i++) {
				drawarea__top_circle[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "none"
			}
			document.querySelector(".drawarea__controls_six").style.display = "block"
			// Drawarea limit
			document.querySelector("#box_upper__bottom-mid").style.display = "none"
			document.querySelector("#box_lower__top-mid").style.display = "none"
			document.querySelector("#box_right__left-mid").style.display = "none"
			document.querySelector("#box_left__right-mid").style.display = "none"
			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "none"
			}
			// Enable popup for Aukot and Reijät 2.2-2.3
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.remove("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"none"
			document.querySelector(".box__upper_upperdecor").style.display = "none"
			document.querySelector(".box__lower_lowerdecor").style.display = "none"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.add("disabled")
			document.querySelector(".drawarea__right").style.border = "unset"
			document.querySelector(".drawarea__top").classList.add("disabled")
			document.querySelector(".drawarea__right").classList.remove("m_btn")
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.remove("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.remove("disabled")
			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "none"
				}
			}
			if (canvas.querySelector(".closer")) {
				closers = canvas.querySelectorAll(".closer")
				for (var i = closers.length - 1; i >= 0; i--) {
					closers[i].style.opacity = 0
					closers[i].style.zIndex = -1
				}
			}

			levyt = canvas.querySelectorAll(".levy")
			listat__grandrow = canvas.querySelector(".listat__grandrow")

			for (var i = 0; i < levyt.length; i++) {
				levyt[i].classList.add("six_hidden")
			}
			if (listat__grandrow) {
				listat__grandrow.classList.add("six_hidden")
			}

			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				room: current_tila,
				wall: current_room.toLowerCase(),
				type: "rangat",
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinwall.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					u_rooms = []
					used_rooms = []

					try {
						successful = success.replaceAll("~~~~", ",").split("&&")
						trs = document.querySelectorAll(
							".ranka_tuo_excel tr:not(.headingrow)"
						)
						trs.forEach((tr) => {
							tr.remove()
						})

						cols = [
							"Rivinumero",
							"Rangan tyyppi",
							"Tilauskoodi",
							"Pituus",
							"KPL",
							"MATERIAALI",
							"PAKSUUS",
							"LAATU",
							"Väri nimi",
							"NCS code",
							"Tilattu PVM",
							"STATUS",
							"Asiakas",
							"Projekti",
							"Osoite",
							"Palletgroup",
							"Asunto Nimi 1",
							"Nimi 2",
							"Työstöt",
							"Asennus",
						]
						raw_data = successful[0].replaceAll("&&", "").split("----")
						console.log(raw_data)
						ranka_array = JSON.parse(raw_data[0])
						ranka_array.forEach((row) => {
							tr = document.createElement("tr")
							for (var i = 0; i < cols.length; i++) {
								index = cols[i]
								tr.innerHTML += "<td>" + row[index] + "</td>"
							}
							document.querySelector(".ranka_tuo_excel tbody").appendChild(tr)
						})
					} catch (error) {
						console.log("no previous save detected")
						rangoita()
						room_status = "rangatok"
						document.querySelector("input.room_status").value = room_status
					}
				})
			document.querySelector(".drawarea__top").style.zIndex = -2
			// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);
		} else {
			if (canvas.querySelector("div.rangat__grandrow")) {
				canvas.querySelector("div.rangat__grandrow").style.opacity = 0
			}
		}
		if (input_step == "drawscreen_section_seven") {
			document.querySelector(".drawarea__left").style.marginLeft = "-40px"
			if (canvas.querySelector("div.saumat__grandrow")) {
			} else {
				alert("Sinun pitää asettaa saumat ennen rankoja.")
				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				return
			}
			if (canvas.querySelector(".tyostot__tyosto")) {
			} else {
				// alert("Sinun tulee asettaa kiinnikkeet ennen tätä vaihetta.");
				$("#step_drawscreen").val("drawscreen_section_five")
				refresh__drawcontrols()
				updatearea()
				return
			}
			if (canvas.querySelector("div.rangat__grandrow")) {
				$(".drawarea__section").show()
				$("#drawscreen_section_seven").show()
				$(".drawarea__controls_seven").show()
				$("#drawscreen_section_seven").slideDown(200)
				$(".drawarea__section").css("display", "flex")
				$(".levy__section").css("display", "none")

				document.querySelector("#box-wrapper > main").style.display = "block"
				document.querySelector(".drawarea__section").style.display = "flex"
				document.querySelector("#box-wrapper").style.display = "block"
				var drawarea__left = document.querySelector(".drawarea__left")
				drawarea__left.onclick = function () {}
				var drawarea__bottom = document.querySelector(".drawarea__bottom")
				drawarea__bottom.onclick = function () {}
				document.querySelector(
					".drawarea__control.drawarea__top"
				).style.zIndex = "2"
				document.querySelector(
					".drawarea__control.drawarea__right"
				).style.zIndex = "2"
				for (var i = 0; i < da__controls.length; i++) {
					da__controls[i].style.display = "none"
				}
				for (var i = 0; i < drawarea__top_circle.length; i++) {
					drawarea__top_circle[i].style.display = "none"
				}

				if (canvas.querySelector("div.listat__grandrow")) {
					canvas.querySelector("div.listat__grandrow").style.opacity = 1
				}
				// Enable/disable levytysalue controls
				for (var i = 0; i < boxes.length; i++) {
					boxes[i].style.display = "none"
				}

				document.querySelector(".drawarea__controls_seven").style.display =
					"block"
				// Drawarea limit
				document.querySelector("#box_upper__bottom-mid").style.display = "none"
				document.querySelector("#box_lower__top-mid").style.display = "none"
				document.querySelector("#box_right__left-mid").style.display = "none"
				document.querySelector("#box_left__right-mid").style.display = "none"
				// Aukot for s 2.2
				for (var i = 0; i < da__topitems.length; i++) {
					da__topitems[i].style.display = "none"
				}
				// Enable popup for Aukot and Reijät 2.2-2.3
				document.querySelector(".drawarea__top").classList.remove("m_btn")
				//Enable reclamation for 2.1-2.3
				document.querySelector(".drawarea__right").classList.remove("recl_btn")
				// Enable controls
				document.querySelector(".drawarea__bottom_container").style.display =
					"none"
				document.querySelector(".box__upper_upperdecor").style.display = "none"
				document.querySelector(".box__lower_lowerdecor").style.display = "none"
				// Disable drawarea controls for 2.4-2.7
				document.querySelector(".drawarea__right").classList.add("disabled")
				document.querySelector(".drawarea__top").classList.add("disabled")
				document.querySelector(".drawarea__right").classList.remove("m_btn")
				document.querySelector(".drawarea__top").classList.remove("m_btn")
				document
					.querySelector(".sauma__downctrl_container")
					.classList.remove("disabled")
				document
					.querySelector(".sauma__rightctrl_container")
					.classList.remove("disabled")
				var saumas = document.querySelectorAll(".sauma")
				if (saumas) {
					for (var i = 0; i < saumas.length; i += 1) {
						saumas[i].style.zIndex = "2"
						saumas[i].classList.add("deformed")
					}
				}

				// Reklamation things for 2.8
				document
					.querySelector("#box-wrapper")
					.classList.remove("drawarea__eight")
				document.querySelector(".drawarea__right > span").innerHTML =
					"Reklamaatiot ja huomiot"
				for (var i = 0; i < da__topitems_eight.length; i++) {
					da__topitems_eight[i].style.display = "none"
				}
				if (document.querySelector(".sauma__controls_del")) {
					let sauma__controls_dels = document.querySelectorAll(
						".sauma__controls_del"
					)
					for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
						sauma__controls_dels[i].style.display = "none"
					}
				}
				if (canvas.querySelector(".closer")) {
					closers = canvas.querySelectorAll(".closer")
					for (var i = closers.length - 1; i >= 0; i--) {
						closers[i].style.opacity = 0
						closers[i].style.zIndex = -1
					}
				}

				listoitus()
				;(formData = {
					pr_id: document.querySelector("#current_project_id").value,
					room: current_tila,
					wall: current_room.toLowerCase(),
					type: "listat",
				}),
					$.ajax({
						type: "POST",
						url: "../vendor/get-ordersinwall.php",
						data: formData,
						error: function (jqxhr, status, exception) {
							console.log("Tietokantavirhe, soita numeroon +358449782028")
						},
					}).done(function (success) {
						u_rooms = []
						used_rooms = []

						try {
							successful = success.replaceAll("~~~~", ",").split("&&")
							trs = document.querySelectorAll(
								".lista_tuo_excel tr:not(.headingrow)"
							)
							trs.forEach((tr) => {
								tr.remove()
							})

							cols = [
								"Rivinumero",
								"Rangan tyyppi",
								"Tilauskoodi",
								"Pituus",
								"KPL",
								"MATERIAALI",
								"PAKSUUS",
								"LAATU",
								"Väri nimi",
								"NCS code",
								"Tilattu PVM",
								"STATUS",
								"Asiakas",
								"Projekti",
								"Osoite",
								"Palletgroup",
								"Asunto Nimi 1",
								"Nimi 2",
								"Työstöt",
								"Asennus",
							]
							raw_data = successful[0].replaceAll("&&", "").split("----")
							console.log(raw_data)
							lista_array = JSON.parse(raw_data[0])
							lista_array.forEach((row) => {
								tr = document.createElement("tr")
								for (var i = 0; i < cols.length; i++) {
									index = cols[i]
									tr.innerHTML += "<td>" + row[index] + "</td>"
								}
								document.querySelector(".lista_tuo_excel tbody").appendChild(tr)
							})
						} catch (error) {
							console.log("no previous save detected")
							listoitus()
						}
					})

				levyarray = ""
				levyt = canvas.querySelectorAll(".levy")
				for (let a = 0; a < levyt.length; a++) {
					console.log(a)
					if (a > 0) {
						levyarray += "&"
						levyarray += levyt[a].querySelector(".levy_h").innerText + "|"
						levyarray += levyt[a].querySelector(".levy_w").innerText + "|"
						levyarray += levyt[a].querySelector(".levy_name").innerText + "|"
						levyarray += levyt[a].querySelector(".levy b i").innerText + "|"
						kiinnikkeet_x = levyt[a].querySelectorAll(".tyostot__tyosto_pysty")
						kiinnikkeet_y = levyt[a].querySelectorAll(".tyostot__tyosto_vaaka")
						kiinnikkeet_x.forEach((k) => {
							levyarray += parseFloat(k.style.left) * 5 + "---"
						})
						levyarray += "|"
						kiinnikkeet_y.forEach((k) => {
							levyarray += parseFloat(k.style.bottom) * 5 + "---"
						})
					}
				}
				save("seven~~" + levyarray)
			} else {
				$("#step_drawscreen").val("drawscreen_section_six")
				refresh__drawcontrols()
				updatearea()
				alert("Aseta rangat ennen listoja")
			}
			if (document.querySelector("#open_comments")) {
			} else {
				room_status = "measured"
				document.querySelector("input.room_status").value = room_status
				// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);
			}
			document.querySelector(".drawarea__top").style.zIndex = -2
		} else {
			if (document.querySelector(".listat__grandrow")) {
				// canvas.querySelector("div.listat__grandrow").style.opacity = 0;
			}
		}
		if (input_step == "drawscreen_section_eight") {
			$(".drawarea__section").show()
			$("#drawscreen_section_eight").show()
			$(".drawarea__controls_eight").show()
			$("#drawscreen_section_eight").slideDown(200)
			$(".levy__section").css("display", "block")
			document.querySelector("#box-wrapper > main").style.display = "none"
			document.querySelector(".drawarea__section").style.display = "flex"
			document.querySelector("#box-wrapper").style.display = "block"
			var drawarea__left = document.querySelector(".drawarea__left")
			drawarea__left.onclick = function () {}
			var drawarea__bottom = document.querySelector(".drawarea__bottom")
			drawarea__bottom.onclick = function () {}
			for (var i = 0; i < da__controls.length; i++) {
				da__controls[i].style.display = "none"
			}
			for (var i = 0; i < drawarea__top_circle.length; i++) {
				drawarea__top_circle[i].style.display = "none"
			}
			// Enable/disable levytysalue controls
			for (var i = 0; i < boxes.length; i++) {
				boxes[i].style.display = "none"
			}
			body = document.body
			body.classList.remove("bg")

			// document.querySelector(".drawarea__controls_eight").style.display = 'none';
			// Drawarea limit
			document.querySelector("#box_upper__bottom-mid").style.display = "none"
			document.querySelector("#box_lower__top-mid").style.display = "none"
			document.querySelector("#box_right__left-mid").style.display = "none"
			document.querySelector("#box_left__right-mid").style.display = "none"
			// Aukot for s 2.2
			for (var i = 0; i < da__topitems.length; i++) {
				da__topitems[i].style.display = "none"
			}
			// Enable popup for Aukot and Reijät 2.2-2.3
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			//Enable reclamation for 2.1-2.3
			document.querySelector(".drawarea__right").classList.remove("recl_btn")
			// Enable controls
			document.querySelector(".drawarea__bottom_container").style.display =
				"none"
			document.querySelector(".box__upper_upperdecor").style.display = "none"
			document.querySelector(".box__lower_lowerdecor").style.display = "none"
			// Disable drawarea controls for 2.4-2.7
			document.querySelector(".drawarea__right").classList.remove("disabled")
			document.querySelector(".drawarea__top").classList.remove("disabled")
			document
				.querySelector(".drawarea__right")
				.classList.add("reclamation_btn")
			document.querySelector(".drawarea__top").classList.remove("m_btn")
			document
				.querySelector(".sauma__downctrl_container")
				.classList.add("disabled")
			document
				.querySelector(".sauma__rightctrl_container")
				.classList.add("disabled")
			// Reklamation things for 2.8
			document.querySelector("#box-wrapper").classList.add("drawarea__eight")
			// document.querySelector(".drawarea__right > span").innerHTML = 'Sanalliset reklamaatiot ja huomiot';
			for (var i = 0; i < da__topitems_eight.length; i++) {
				da__topitems_eight[i].style.display = "block"
			}
			if (document.querySelector(".sauma__controls_del")) {
				let sauma__controls_dels = document.querySelectorAll(
					".sauma__controls_del"
				)
				for (var i = sauma__controls_dels.length - 1; i >= 0; i--) {
					sauma__controls_dels[i].style.display = "none"
				}
			}
			if (canvas.querySelector(".closer")) {
				closers = canvas.querySelectorAll(".closer")
				for (var i = closers.length - 1; i >= 0; i--) {
					closers[i].style.opacity = 0
					closers[i].style.zIndex = -1
				}
			}
			document.querySelector(".drawarea__top").style.display = "none"
			document.querySelector(".drawarea__right").style.display = "none"
			document.querySelector(".drawarea__bottom").style.display = "none"
			document.querySelector(".drawarea__left").style.display = "none"
			document.getElementById("copiedcanvases").style.display = "flex"
			// siirto_muualle();
			fixeight()

			canvas3 = document.getElementById("canvas3")
			lineinbuts = canvas3.querySelectorAll(".lineinput")

			for (var a = 0; a < lineinbuts.length; a++) {
				lineinbuts[a].style.display = "none"
			}

			if (document.querySelector("#open_comments")) {
			} else {
				room_status = "measured"
				document.querySelector("input.room_status").value = room_status
				// document.querySelector(".house__wall_status.house__wall_status_" + current_room.toLowerCase()).classList.add(room_status);
			}

			rangat__navigation(false)
			document.querySelector(".drawarea__top").style.zIndex = -2
		} else {
			document.querySelector(".drawarea__top").style.display = "flex"
			document.querySelector(".drawarea__right").style.display = "flex"
			document.querySelector(".drawarea__bottom").style.display = "block"
			document.querySelector(".drawarea__left").style.display = "block"
			document.getElementById("copiedcanvases").style.display = "none"
			// if(document.querySelector(".secondcanvas")) {
			//    secondcanvas = document.querySelectorAll(".secondcanvas");
			//    for (var i = secondcanvas.length - 1; i >= 0; i--) {
			//       secondcanvas[i].remove();
			//    }
			// }
			// document.getElementById("copiedcanvases").style.display = "none";

			canvas3 = document.getElementById("canvas3")
			lineinbuts = canvas3.querySelectorAll(".lineinput")

			for (var a = 0; a < lineinbuts.length; a++) {
				lineinbuts[a].style.display = "block"
			}

			if (document.querySelector(".listat__grandrow")) {
				listat__grandrow = document.querySelector(".listat__grandrow")
				listat__grandrow.remove()
				listoitettu = false
			}

			document.querySelector("#box-wrapper > main").style.display = "block"
		}

		da_b = document.querySelector(".drawarea__bottom")
		da_l = document.querySelector(".drawarea__left")

		changeheights()

		setTimeout(() => {
			if (da_b.querySelector(".end_measure")) {
				b_end_measure.innerHTML =
					parseFloat(document.querySelector("#box_w").value) - saumaset_vm
			} else {
				b_start_measure = document.createElement("b")
				// b_start_measure.innerHTML = "0";
				b_end_measure = document.createElement("b")
				b_end_measure.innerHTML =
					parseFloat(document.querySelector("#box_w").value) - saumaset_vm
				b_end_measure.style.right = -10 + "px"

				b_start_measure.classList.add("start_measure")
				b_end_measure.classList.add("end_measure")
				b_start_measure.classList.add("aukko__cord")
				b_end_measure.classList.add("aukko__cord")

				da_b.appendChild(b_start_measure)
				da_b.appendChild(b_end_measure)
			}

			if (da_l.querySelector(".end_measure")) {
				end_measure.innerHTML =
					parseFloat(document.querySelector("#box_h").value) - saumaset_hm
			} else {
				start_measure = document.createElement("b")
				// start_measure.innerHTML = "0";
				end_measure = document.createElement("b")
				end_measure.innerHTML =
					parseFloat(document.querySelector("#box_h").value) - saumaset_hm
				// end_measure.style.left = -40 + "px";

				start_measure.classList.add("start_measure")
				end_measure.classList.add("end_measure")
				start_measure.classList.add("aukko__cord")
				end_measure.classList.add("aukko__cord")

				da_l.appendChild(start_measure)
				da_l.appendChild(end_measure)
			}
		}, 1350)

		// Modal button
		var m_btn = document.getElementsByClassName("m_btn")
		var m_c = document.getElementsByClassName("modal-container")
		document.querySelectorAll(".m_btn").forEach((item) => {
			item.addEventListener("click", (event) => {
				if (item.classList.contains("m_btn")) {
					for (var i = 0; i < m_c.length; i++) {
						m_c[i].classList.add("two")
						m_c[i].classList.remove("out")
						document.querySelector("body").classList.add("modal-active")
					}
				}
			})
		})
		document.querySelectorAll(".modal_close_btn").forEach((item) => {
			item.addEventListener("click", (event) => {
				for (var i = 0; i < m_c.length; i++) {
					m_c[i].classList.remove("two")
					m_c[i].classList.add("out")
					document.querySelector("body").classList.remove("modal-active")
				}
			})
		})
		// Modal button
		var recl_btn = document.getElementsByClassName("recl_btn")
		if (document.querySelector("#reclamation__popup")) {
			var reclamation__popup = document.querySelector("#reclamation__popup")
			document.querySelectorAll(".recl_btn").forEach((recl_modal) => {
				recl_modal.addEventListener("click", (event) => {
					if (recl_modal.classList.contains("recl_btn")) {
						reclamation__popup.classList.add("two")
						reclamation__popup.classList.remove("out")
						document.querySelector("body").classList.add("modal-active")
					}
				})
			})
			document.querySelectorAll(".modal_close_btn").forEach((recl_modal) => {
				recl_modal.addEventListener("click", (event) => {
					reclamation__popup.classList.remove("two")
					reclamation__popup.classList.add("out")
					document.querySelector("body").classList.remove("modal-active")
				})
			})
		}

		// function drawarea__left__sauma() {
		//   alert ("Hello World!");
		// }
	}, 300)
	if (current_room !== null) {
		submitprogress("", "save")
	}
}
/**
 * Adds a function to be executed when the window has fully loaded.
 * @param {function} callback - The function to be executed on window load.
 * @returns None
 */
var addFunctionOnWindowLoad = function (callback) {
	if (window.addEventListener) {
		window.addEventListener("load", callback, false)
	} else {
		window.attachEvent("onload", callback)
	}
}
addFunctionOnWindowLoad(refresh__drawcontrols)

/**
 * Function to navigate between walls in a house layout.
 * @param {Element} elem - The element representing the wall to navigate to.
 * @returns None
 */
function nav_betweenwalls(elem) {
	setTimeout(function () {
		rooms_array = []
		$("#house .house__wall").each(function (i, obj) {
			wall_name = $(this).find(".house__wall_status").data("room")
			wall_h = $(this).find("input.house__wall_param:nth-child(2)").val()
			wall_w = $(this).find("input.house__wall_param:nth-child(3)").val()
			wall_class = $(this).find(".house__wall_status").attr("class")
			rooms_array.push(
				wall_name + "|" + wall_h + "|" + wall_w + "|" + wall_class
			)
		})
		totransfer_elem = elem
		current_room = elem.innerText.toLowerCase()
		restoreprogress()
		// wallh_cord = elem.parentElement.querySelector(".wall_height").value;
		// wallw_cord = elem.parentElement.querySelector(".wall_width").value;
		changesize()

		// da_houses = document.querySelectorAll(".drawarea__house");
		// for (var a = da_houses.length - 1; a >= 0; a--) {
		//   for (var i = 0; i < rooms_array.length; i++) {
		//     da_houses[a].querySelectorAll(".house__wall_status")[i].innerHTML = rooms_array[i].split("|")[0].replace("Seinä", "").replace("KATTO",
		//       "K").replace("LATTIA", "L").replace(" ", "");
		//     classes = rooms_array[i].split("|")[3].split(" ");
		//     for (var b = 0; b < classes.length; b++) {
		//       da_houses[a].querySelectorAll(".house__wall_status")[i].classList.add(classes[b]);
		//     }
		//     da_houses[a].querySelectorAll(".wall_height")[i].value = parseFloat(rooms_array[i].split("|")[1]);
		//     da_houses[a].querySelectorAll(".wall_width")[i].value = parseFloat(rooms_array[i].split("|")[2]);
		//   }
		// }

		// document.querySelector(".tohide__room_"+current_room.toLowerCase() + " .wall_height").value = wallh_cord;
		// document.querySelector(".tohide__room_"+current_room.toLowerCase() + " .wall_width").value = wallw_cord;

		// drawarea_h.value = wallh_cord;
		// drawarea_w.value = wallw_cord;

		// console.log()

		// changesize();
		// transfer__height_cords(totransfer_elem);
		$(".walls").val(rooms_array)
	}, 1000)
}

/**
 * Initializes a room based on the provided room and menu.
 * @param {HTMLElement} room - The room element to initialize.
 * @param {HTMLElement} menu - The menu element associated with the room.
 * @returns None
 */
function initializeroom(room, menu) {
	ir_no = room.dataset.room

	if (
		window.location.href.indexOf("&room=" + current_room.toLowerCase()) === -1
	) {
		degradate_url(2)
		var refresh = window.location.href + "&room=" + current_room.toLowerCase()
		window.history.pushState({ path: refresh }, "", refresh)
		console.log("ADDED TO URL")
	}

	mode_room = ir_no.toLowerCase()
	$("#step_drawscreen").val("drawscreen_section_one")
	if (mode_room == "a") {
		ir_value = apartment.dataset.aroom
	}
	if (mode_room == "b") {
		ir_value = apartment.dataset.broom
	}
	if (mode_room == "c") {
		ir_value = apartment.dataset.croom
	}
	if (mode_room == "d") {
		ir_value = apartment.dataset.droom
	}
	if (mode_room == "k") {
		ir_value = apartment.dataset.kroom
	}
	if (mode_room == "l") {
		ir_value = apartment.dataset.lroom
	}

	room_status = ir_value.replaceAll(",", "~").split("~")[1]
	// INITIALIZE CURRENT STATUS DA
	da_roomnav = document.querySelectorAll(".house__wall")
	for (var i = da_roomnav.length - 1; i >= 0; i--) {
		da_roomnav[i].classList.remove("current__housewall")
	}
	da_curnav = document.querySelectorAll(".tohide__room_" + mode_room)
	for (var i = da_curnav.length - 1; i >= 0; i--) {
		da_curnav[i].classList.add("current__housewall")
	}

	if (document.querySelector("#open_comments")) {
		ir_no = room.dataset.room

		console.log("initializeroom_comments")

		mode_room = ir_no.toLowerCase()
		document.querySelector("#step_drawscreen").value = "drawscreen_section_one"
		if (mode_room == "a") {
			ir_value = apartment.dataset.aroom
		}
		if (mode_room == "b") {
			ir_value = apartment.dataset.broom
		}
		if (mode_room == "c") {
			ir_value = apartment.dataset.croom
		}
		if (mode_room == "d") {
			ir_value = apartment.dataset.droom
		}
		if (mode_room == "k") {
			ir_value = apartment.dataset.kroom
		}
		if (mode_room == "l") {
			ir_value = apartment.dataset.lroom
		}

		room_status = ir_value.replaceAll(",", "~").split("~")[1]
		// INITIALIZE CURRENT STATUS DA
		da_roomnav = document.querySelectorAll(".house__wall")
		for (var i = da_roomnav.length - 1; i >= 0; i--) {
			da_roomnav[i].classList.remove("current__housewall")
		}
		da_curnav = document.querySelectorAll(".tohide__room_" + mode_room)
		for (var i = da_curnav.length - 1; i >= 0; i--) {
			da_curnav[i].classList.add("current__housewall")
		}
		// START CLEARING
		coms = canvas.querySelectorAll(".com")

		for (var i = 0; i < coms.length; i++) {
			coms[i].remove()
		}

		comments__controlelems = document.querySelectorAll(
			"div.drawarea__controls_elementsone.drawarea__things > span"
		)

		for (let i = 0; i < comments__controlelems.length; i++) {
			comments__controlelems[i].remove()
		}

		// STOP CLEARING
		if (ir_value.length > 5) {
			kommentti_count = 0
			ir_coms = document.querySelector("#open_comments").value.split("~")
			console.log(ir_coms.length)
			console.log("OPEN_COMMENTS INPUT" + ir_coms)
			//Comments
			for (var cm = 0; cm < ir_coms.length; cm++) {
				console.log(ir_coms[i])
				console.log(
					"TILA EDITORISSA" +
						"tila" +
						current_apartment
							.replaceAll(" ", "")
							.replaceAll("-", "")
							.toLowerCase()
				)
				console.log(
					"TILA TIETOKANNASSA" + ir_coms[cm].length > 4 &&
						ir_coms[cm]
							.split(",")[2]
							.split(">")[0]
							.replaceAll(" ", "")
							.replaceAll("-", "")
							.toLowerCase()
				)
				// if (ir_coms[i].length > 4) {
				//   console.log(ir_coms[i].split(",")[2].split(">")[0].replaceAll(" ","").replaceAll("-","").toLowerCase());
				//   console.log(document.querySelector("#rooms > input.room").value.replaceAll(" ","").replaceAll("-","").toLowerCase());
				// }
				if (
					ir_coms[cm].length > 4 &&
					ir_coms[cm]
						.split(",")[2]
						.split(">")[0]
						.replaceAll(" ", "")
						.replaceAll("-", "")
						.toLowerCase() ===
						"tila" +
							current_apartment
								.replaceAll(" ", "")
								.replaceAll("-", "")
								.toLowerCase()
				) {
					console.log("ROOM OK ")
					name_splitted = ir_coms[cm].split(",")[2].split(">")[1]
					if (ir_coms[cm].length > 5 && name_splitted == mode_room) {
						grande_array = ir_coms[cm]

						comment__restore(grande_array)
						refresh__drawcontrols()
					}
				}
			}
		}

		ir_no = room.dataset.room
		mode_room = ir_no.toLowerCase()

		if (mode_room == "a") {
			ir_value = apartment.dataset.aroom
		}
		if (mode_room == "b") {
			ir_value = apartment.dataset.broom
		}
		if (mode_room == "c") {
			ir_value = apartment.dataset.croom
		}
		if (mode_room == "d") {
			ir_value = apartment.dataset.droom
		}
		if (mode_room == "k") {
			ir_value = apartment.dataset.kroom
		}
		if (mode_room == "l") {
			ir_value = apartment.dataset.lroom
		}

		refresh__drawcontrols()
	} else {
		// START CLEARING
		mps = canvas.querySelectorAll(".mp")
		aukkos = canvas.querySelectorAll(".aukko")
		lvs = canvas.querySelectorAll(".lv")
		for (var i = 0; i < mps.length; i++) {
			mps[i].remove()
		}
		for (var i = 0; i < aukkos.length; i++) {
			aukkos[i].remove()
		}

		for (var i = 0; i < lvs.length; i++) {
			lvs[i].remove()
		}
		document.querySelector(".drawarea__controls_elementsone").innerHTML = ""
		document.querySelector(".drawarea__controls_elementstwo").innerHTML = ""
		lapivienti_count = 0
		mittapiste_count = 0
		mp_previous_vord = null
		au_previous_vord = null
		lv_previous_vord = null
		document.querySelector(".drawarea__controls_origoset").innerHTML =
			"Origo oikealle"
		document.querySelector("#drawarea__origo_central").style.left = "1px"
		document.querySelector("#drawarea__origo_central").style.bottom = "1px"

		document.querySelector(".mittapisteet").value = ""
		document.querySelector(".aukot").value = ""
		document.querySelector(".lapiviennit").value = ""
		document.querySelector(".saumat_data").value = ""
		document.querySelector(".levyt_data").value = ""
		document.querySelector(".rangat").value = ""
		document.querySelector(".listat").value = ""

		if (canvas.querySelector(".saumat__grandrow")) {
			canvas.querySelector(".saumat__grandrow").remove()
		}
		if (canvas.querySelector(".levyt")) {
			sisa_levyt = canvas.querySelectorAll(".levyt .levy")
			for (let lev = 0; lev < sisa_levyt.length; lev++) {
				sisa_levyt[lev].remove()
			}
			// document.querySelector("div.levyt").remove();
		}
		if (
			canvas.querySelector(".rangat__grandrow") &&
			input_step != "drawscreen_section_six" &&
			input_step != "drawscreen_section_seven" &&
			input_step != "drawscreen_section_eight" &&
			input_step != "drawscreen_section_nine" &&
			input_step != "drawscreen_section_esikatselu"
		) {
			canvas.querySelector(".rangat__grandrow").remove()
		}
		if (canvas.querySelector(".listat__grandrow")) {
			canvas.querySelector(".listat__grandrow").remove()
		}
		// STOP CLEARING
		if (ir_value.length > 5) {
			ir_splitted = ir_value.replaceAll(",", "~").split("~")
			ir_id = ir_splitted[0]
			ir_status = ir_splitted[1]
			ir_origo = ir_splitted[2]
			ir_origo_x = parseFloat(ir_splitted[2].split("|")[0])
			ir_origo_y = parseFloat(ir_splitted[2].split("|")[1])
			// Origo formatting DISABLED
			if (ir_origo_x == 1 && ir_origo_y == 1) {
				document.querySelector(".drawarea__controls_origoset").innerHTML =
					"Origo oikealle"
			} else if (ir_origo_x > 1 && ir_origo_y > 1) {
				document.querySelector(".drawarea__controls_origoset").innerHTML =
					"Origo vasemmalle"
			} else if (ir_origo_x > 1 && ir_origo_y == 1) {
				document.querySelector(".drawarea__controls_origoset").innerHTML =
					"Origo ylös"
			} else if (ir_origo_x == 1 && ir_origo_y > 1) {
				document.querySelector(".drawarea__controls_origoset").innerHTML =
					"Origo alas"
			}
			document.querySelector("#drawarea__origo_central").style.left = 1 + "px"
			document.querySelector("#drawarea__origo_central").style.bottom = 1 + "px"
			if (menu) {
			}
			if (
				room.parentElement.querySelector(".wall_height") &&
				room.parentElement.querySelector(".wall_width")
			) {
				room_h = parseFloat(
					room.parentElement.querySelector(".wall_height").value
				)
				room_w = parseFloat(
					room.parentElement.querySelector(".wall_width").value
				)
				document.querySelector("#drawarea_h").value = parseFloat(room_h)
				document.querySelector("#drawarea_w").value = parseFloat(room_w)
				setTimeout(changesize(), 1000)
			} else {
				// Alue formaddig OKKKKKKK
				ir_alue = ir_splitted[3]
				ir_alue_x = ir_splitted[3].split("|")[1]
				ir_alue_y = ir_splitted[3].split("|")[0]
				document.querySelector("#drawarea_h").value = parseFloat(ir_alue_y)
				document.querySelector("#drawarea_w").value = parseFloat(ir_alue_x)
				setTimeout(changesize(), 1000)
			}
			ir_mps = ir_splitted[4].split("__")
			ir_aus = ir_splitted[5].split("__")
			ir_lv = ir_splitted[6].split("__")
			ir_sau = "" // ir_splitted[7].split("__");
			ir_lev = "" // ir_splitted[8].split("__");
			ir_kin = "" //ir_splitted[5].split("__");
			ir_ran = "" //ir_splitted[5].split("__");
			ir_lis = "" //ir_splitted[5].split("__");

			// LISTAT
			if (ir_lis.length > 1) {
			}

			// RANGAT
			else if (ir_ran.length > 1) {
			}

			// KIINNIKKEET
			else if (ir_kin.length > 1) {
			}

			// LEVYT
			else if (ir_lev.length > 1) {
				// MPs formatting
				for (var i = 0; i < ir_mps.length; i++) {
					if (ir_mps[i].length > 3) {
						ir_mps_name = ir_mps[i].split("|")[0]
						ir_mps_b = parseFloat(ir_mps[i].split("|")[1])
						ir_mps_l = parseFloat(ir_mps[i].split("|")[2])
						ir_mps_vount = parseFloat(ir_mps[i].split("|")[3])
						ir_mps_id = ir_mps[i].split("|")[4]
						mitta__create_mitta(
							"restoring",
							"mp",
							ir_mps_name,
							ir_mps_b,
							ir_mps_l,
							"",
							"",
							ir_mps_vount,
							ir_mps_id,
							mode_room
						)
					}
				}

				for (var i = 0; i < ir_aus.length; i++) {
					if (ir_aus[i].length > 3) {
						ir_aus_name = ir_aus[i].split("|")[0]
						ir_aus_b = parseFloat(ir_aus[i].split("|")[1])
						ir_aus_l = parseFloat(ir_aus[i].split("|")[2])
						ir_aus_h = parseFloat(ir_aus[i].split("|")[5])
						ir_aus_w = parseFloat(ir_aus[i].split("|")[6])
						ir_aus_vount = parseFloat(ir_aus[i].split("|")[3])
						ir_aus_id = ir_aus[i].split("|")[4]
						ir_aus_classes = ir_aus[i].split("|")[7]

						ir_aus_comment = ir_aus[i].split("|")[8]
						ir_aus_cfrom = ir_aus[i].split("|")[9]
						ir_aus_cto = ir_aus[i].split("|")[10]
						mitta__create_mitta(
							"restoring",
							"au",
							ir_aus_name,
							ir_aus_b,
							ir_aus_l,
							ir_aus_h,
							ir_aus_w,
							ir_aus_vount,
							ir_aus_id,
							ir_aus_classes,
							ir_aus_comment,
							ir_aus_cfrom,
							ir_aus_cto
						)
						// mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
						// Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
					}
				}

				$("#step_drawscreen").val("drawscreen_section_three")
				refresh__drawcontrols()
				updatearea()

				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				if (document.querySelector(".saumat__grandrow")) {
					saumat = document.querySelector(".saumat__grandrow")
				} else {
					saumat = document.createElement("div")
					saumat.classList.add("saumat__grandrow")
					canvas.appendChild(saumat)
				}
				if (saumat.querySelector(".horizontalrow_saumat")) {
				} else {
					newrow_horizontal = document.createElement("div")
					saumat.appendChild(newrow_horizontal)
					newrow_horizontal.classList.add("horizontalrow_saumat")
				}
				if (saumat.querySelector(".verticalrow_saumat")) {
				} else {
					newrow_vertical = document.createElement("div")
					saumat.appendChild(newrow_vertical)
					newrow_vertical.classList.add("verticalrow_saumat")
				}
				for (var i = ir_sau.length - 1; i >= 0; i--) {
					sau_data = ir_sau[i].split("|")

					sau_name = sau_data[0]
					sau_type = sau_data[1]
					sau_b = sau_data[2]
					sau_left = sau_data[3]
					sau_cord = sau_data[4]
					sau_name = sau_data[5]
					luo__sauma_restore(
						sau_name,
						sau_type,
						sau_b,
						sau_left,
						sau_cord,
						sau_name
					)
					if (sau_type == "pysty") {
					}
					if (sau_type == "vaaka") {
					}
				}
				alkusaumat()
				calculateamounts()
				sauma__verticals = canvas.querySelectorAll(".sauma__vertical")
				sauma__horizontals = canvas.querySelectorAll(".sauma__horizontal")
				if (canvas.querySelector(".sauma__vertical")) {
					for (var i = 0; i < sauma__verticals.length; i++) {
						if (sauma__verticals[i].querySelector(".sauma__controls_del")) {
							sauma__verticals[i].querySelector(
								".sauma__controls_del"
							).innerHTML = i + 1
							sauma__verticals[i].dataset.no = i + 1
						}
					}
					s_v = i + 1
				}
				if (canvas.querySelector(".sauma__horizontal")) {
					for (var i = 0; i < sauma__horizontals.length; i++) {
						if (sauma__horizontals[i].querySelector(".sauma__controls_del")) {
							sauma__horizontals[i].querySelector(
								".sauma__controls_del"
							).innerHTML = String.fromCharCode(65 + parseFloat(i + 1))
							sauma__horizontals[i].dataset.no = String.fromCharCode(
								65 + parseFloat(i + 1)
							)
						}
					}
					s_h = i + 1
				}

				dels = canvas.querySelectorAll(".sauma__controls_del")

				for (var i = dels.length - 1; i >= 0; i--) {
					sauma = dels[i].parentElement.parentElement
					if (dels[i].querySelector(".delmeasure")) {
						delmeasure = dels[i].querySelector(".delmeasure")
						if (sauma.classList.contains("sauma__vertical")) {
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.left) * 5
							)
						} else if (sauma.classList.contains("sauma__horizontal")) {
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.bottom) * 5
							)
						}
					} else {
						delmeasure = document.createElement("div")
						delmeasure.classList.add("delmeasure")
						if (sauma.classList.contains("sauma__vertical")) {
							delmeasure.classList.add("delmeasure_vertical")
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.left) * 5
							)
						} else if (sauma.classList.contains("sauma__horizontal")) {
							delmeasure.classList.add("delmeasure_horizontal")
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.bottom) * 5
							)
						}

						dels[i].appendChild(delmeasure)
					}
				}

				saumasize__checkup()

				saumat = canvas.querySelectorAll(".sauma")

				for (var i = saumat.length - 1; i >= 0; i--) {
					saumat[i].removeEventListener("touchmove", (e) => {})
					saumat[i]
						.querySelector(".sauma__controls")
						.removeEventListener("touchmove", (e) => {})
				}

				sauma_h = canvas.querySelectorAll(".sauma__horizontal")
				sauma_v = canvas.querySelectorAll(".sauma__vertical")
				sauma_h.forEach(function (j) {
					j.querySelector(".sauma__controls").addEventListener(
						"touchmove",
						(e) => {
							resizeSauma(
								e,
								j,
								j.querySelector(".sauma__controls"),
								j.querySelector(".sauma__control"),
								"v"
							)
						}
					)
					j.addEventListener("touchmove", (e) => {
						resizeSauma(
							e,
							j,
							j.querySelector(".sauma__controls"),
							j.querySelector(".sauma__control"),
							"v"
						)
					})
				})

				sauma_v.forEach(function (j) {
					j.querySelector(".sauma__controls").addEventListener(
						"touchmove",
						(e) => {
							resizeSauma(
								e,
								j,
								j.querySelector(".sauma__controls"),
								j.querySelector(".sauma__control"),
								"h"
							)
						}
					)
					j.addEventListener("touchmove", (e) => {
						resizeSauma(
							e,
							j,
							j.querySelector(".sauma__controls"),
							j.querySelector(".sauma__control"),
							"h"
						)
					})
				})

				refresh__drawcontrols()
				updatearea()
				$("#step_drawscreen").val("drawscreen_section_five")

				// levy initialization

				setTimeout(function () {
					lev = ir_lev[0].split(" ")
					dex = 0
					if (canvas.querySelector(".levyt")) {
						levyt = canvas.querySelector(".levyt")
						levyt.innerHTML = ""
					} else {
						levyt = document.createElement("div")
						levyt.classList.add("levyt")
						canvas.append(levyt)
					}

					for (var i = 0; i < lev.length; i++) {
						if (lev[i].length > 10) {
							levyt.prepend(
								luo__levy_restore(
									lev[i].split("|")[0],
									lev[i].split("|")[1],
									parseFloat(lev[i].split("|")[2]),
									parseFloat(lev[i].split("|")[3]),
									lev[i].split("|")[4],
									lev[i].split("|")[5],
									lev[i].split("|")[6],
									lev[i].split("|")[7]
								)
							)
						}
					}
					console.log("LEVYTÄ FIRED")
				}, 1000)
			}

			//SAUMAT
			else if (ir_sau.length > 1) {
				// MPs formatting
				for (var i = 0; i < ir_mps.length; i++) {
					if (ir_mps[i].length > 3) {
						ir_mps_name = ir_mps[i].split("|")[0]
						ir_mps_b = parseFloat(ir_mps[i].split("|")[1])
						ir_mps_l = parseFloat(ir_mps[i].split("|")[2])
						ir_mps_vount = parseFloat(ir_mps[i].split("|")[3])
						ir_mps_id = ir_mps[i].split("|")[4]
						mitta__create_mitta(
							"restoring",
							"mp",
							ir_mps_name,
							ir_mps_b,
							ir_mps_l,
							"",
							"",
							ir_mps_vount,
							ir_mps_id,
							mode_room
						)
					}
				}

				for (var i = 0; i < ir_aus.length; i++) {
					if (ir_aus[i].length > 3) {
						ir_aus_name = ir_aus[i].split("|")[0]
						ir_aus_b = parseFloat(ir_aus[i].split("|")[1])
						ir_aus_l = parseFloat(ir_aus[i].split("|")[2])
						ir_aus_h = parseFloat(ir_aus[i].split("|")[5])
						ir_aus_w = parseFloat(ir_aus[i].split("|")[6])
						ir_aus_vount = parseFloat(ir_aus[i].split("|")[3])
						ir_aus_id = ir_aus[i].split("|")[4]
						ir_aus_classes = ir_aus[i].split("|")[7]

						ir_aus_comment = ir_aus[i].split("|")[8]
						ir_aus_cfrom = ir_aus[i].split("|")[9]
						ir_aus_cto = ir_aus[i].split("|")[10]
						mitta__create_mitta(
							"restoring",
							"au",
							ir_aus_name,
							ir_aus_b,
							ir_aus_l,
							ir_aus_h,
							ir_aus_w,
							ir_aus_vount,
							ir_aus_id,
							ir_aus_classes,
							ir_aus_comment,
							ir_aus_cfrom,
							ir_aus_cto
						)
						// mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
						// Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
					}
				}
				$("#step_drawscreen").val("drawscreen_section_three")
				refresh__drawcontrols()
				updatearea()

				$("#step_drawscreen").val("drawscreen_section_four")
				refresh__drawcontrols()
				updatearea()
				if (document.querySelector(".saumat__grandrow")) {
					saumat = document.querySelector(".saumat__grandrow")
				} else {
					saumat = document.createElement("div")
					saumat.classList.add("saumat__grandrow")
					canvas.appendChild(saumat)
				}
				if (saumat.querySelector(".horizontalrow_saumat")) {
				} else {
					newrow_horizontal = document.createElement("div")
					saumat.appendChild(newrow_horizontal)
					newrow_horizontal.classList.add("horizontalrow_saumat")
				}
				if (saumat.querySelector(".verticalrow_saumat")) {
				} else {
					newrow_vertical = document.createElement("div")
					saumat.appendChild(newrow_vertical)
					newrow_vertical.classList.add("verticalrow_saumat")
				}
				for (var i = ir_sau.length - 1; i >= 0; i--) {
					sau_data = ir_sau[i].split("|")

					sau_name = sau_data[0]
					sau_type = sau_data[1]
					sau_b = sau_data[2]
					sau_left = sau_data[3]
					sau_cord = sau_data[4]
					sau_name = sau_data[5]
					luo__sauma_restore(
						sau_name,
						sau_type,
						sau_b,
						sau_left,
						sau_cord,
						sau_name
					)
					if (sau_type == "pysty") {
					}
					if (sau_type == "vaaka") {
					}
				}
				alkusaumat()
				calculateamounts()
				sauma__verticals = canvas.querySelectorAll(".sauma__vertical")
				sauma__horizontals = canvas.querySelectorAll(".sauma__horizontal")
				if (canvas.querySelector(".sauma__vertical")) {
					for (var i = 0; i < sauma__verticals.length; i++) {
						if (sauma__verticals[i].querySelector(".sauma__controls_del")) {
							sauma__verticals[i].querySelector(
								".sauma__controls_del"
							).innerHTML = i + 1
							sauma__verticals[i].dataset.no = i + 1
						}
					}
					s_v = i + 1
				}
				if (canvas.querySelector(".sauma__horizontal")) {
					for (var i = 0; i < sauma__horizontals.length; i++) {
						if (sauma__horizontals[i].querySelector(".sauma__controls_del")) {
							sauma__horizontals[i].querySelector(
								".sauma__controls_del"
							).innerHTML = String.fromCharCode(65 + parseFloat(i + 1))
							sauma__horizontals[i].dataset.no = String.fromCharCode(
								65 + parseFloat(i + 1)
							)
						}
					}
					s_h = i + 1
				}

				dels = canvas.querySelectorAll(".sauma__controls_del")

				for (var i = dels.length - 1; i >= 0; i--) {
					sauma = dels[i].parentElement.parentElement
					if (dels[i].querySelector(".delmeasure")) {
						delmeasure = dels[i].querySelector(".delmeasure")
						if (sauma.classList.contains("sauma__vertical")) {
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.left) * 5
							)
						} else if (sauma.classList.contains("sauma__horizontal")) {
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.bottom) * 5
							)
						}
					} else {
						delmeasure = document.createElement("div")
						delmeasure.classList.add("delmeasure")
						if (sauma.classList.contains("sauma__vertical")) {
							delmeasure.classList.add("delmeasure_vertical")
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.left) * 5
							)
						} else if (sauma.classList.contains("sauma__horizontal")) {
							delmeasure.classList.add("delmeasure_horizontal")
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.bottom) * 5
							)
						}

						dels[i].appendChild(delmeasure)
					}
				}

				saumasize__checkup()

				saumat = canvas.querySelectorAll(".sauma")

				for (var i = saumat.length - 1; i >= 0; i--) {
					saumat[i].removeEventListener("touchmove", (e) => {})
					saumat[i]
						.querySelector(".sauma__controls")
						.removeEventListener("touchmove", (e) => {})
				}

				sauma_h = canvas.querySelectorAll(".sauma__horizontal")
				sauma_v = canvas.querySelectorAll(".sauma__vertical")
				sauma_h.forEach(function (j) {
					j.querySelector(".sauma__controls").addEventListener(
						"touchmove",
						(e) => {
							resizeSauma(
								e,
								j,
								j.querySelector(".sauma__controls"),
								j.querySelector(".sauma__control"),
								"v"
							)
						}
					)
					j.addEventListener("touchmove", (e) => {
						resizeSauma(
							e,
							j,
							j.querySelector(".sauma__controls"),
							j.querySelector(".sauma__control"),
							"v"
						)
					})
				})

				sauma_v.forEach(function (j) {
					j.querySelector(".sauma__controls").addEventListener(
						"touchmove",
						(e) => {
							resizeSauma(
								e,
								j,
								j.querySelector(".sauma__controls"),
								j.querySelector(".sauma__control"),
								"h"
							)
						}
					)
					j.addEventListener("touchmove", (e) => {
						resizeSauma(
							e,
							j,
							j.querySelector(".sauma__controls"),
							j.querySelector(".sauma__control"),
							"h"
						)
					})
				})

				setTimeout(function () {
					levyta("important")
					console.log("LEVYTÄ FIRED")
				}, 1000)
				$("#step_drawscreen").val("drawscreen_section_five")
				refresh__drawcontrols()
				updatearea()
			}

			//LV
			else if (ir_lv.length > 1) {
				for (var i = 0; i < ir_mps.length; i++) {
					if (ir_mps[i].length > 5) {
						// room_status = ir_mps[i].split("|")[0];
						ir_mps_name = ir_mps[i].split("|")[0]
						ir_mps_b = parseFloat(ir_mps[i].split("|")[1])
						ir_mps_l = parseFloat(ir_mps[i].split("|")[2])
						ir_mps_vount = parseFloat(ir_mps[i].split("|")[3])
						ir_mps_id = ir_mps[i].split("|")[4]

						mitta__create_mitta(
							"restoring",
							"mp",
							ir_mps_name,
							ir_mps_b,
							ir_mps_l,
							"",
							"",
							ir_mps_vount,
							ir_mps_id,
							mode_room
						)
					}
				}

				$("#step_drawscreen").val("drawscreen_section_one")
				refresh__drawcontrols()
				updatearea()

				for (var i = 0; i < ir_aus.length; i++) {
					if (ir_aus[i].length > 3) {
						ir_aus_name = ir_aus[i].split("|")[0]
						ir_aus_b = parseFloat(ir_aus[i].split("|")[1])
						ir_aus_l = parseFloat(ir_aus[i].split("|")[2])
						ir_aus_h = parseFloat(ir_aus[i].split("|")[5])
						ir_aus_w = parseFloat(ir_aus[i].split("|")[6])
						ir_aus_vount = parseFloat(ir_aus[i].split("|")[3])
						ir_aus_id = ir_aus[i].split("|")[4]
						ir_aus_classes = ir_aus[i].split("|")[7]

						ir_aus_comment = ir_aus[i].split("|")[8]
						ir_aus_cfrom = ir_aus[i].split("|")[9]
						ir_aus_cto = ir_aus[i].split("|")[10]
						mitta__create_mitta(
							"restoring",
							"au",
							ir_aus_name,
							ir_aus_b,
							ir_aus_l,
							ir_aus_h,
							ir_aus_w,
							ir_aus_vount,
							ir_aus_id,
							ir_aus_classes,
							ir_aus_comment,
							ir_aus_cfrom,
							ir_aus_cto
						)
						// mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
						// Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
					}
				}

				$("#step_drawscreen").val("drawscreen_section_two")
				refresh__drawcontrols()
				updatearea()

				for (var i = 0; i < ir_lv.length; i++) {
					if (ir_lv[i].length > 3) {
						ir_lvs_name = ir_lv[i].split("|")[0]
						ir_lvs_b = parseFloat(ir_lv[i].split("|")[1])
						ir_lvs_l = parseFloat(ir_lv[i].split("|")[2])
						ir_lvs_vount = parseFloat(ir_lv[i].split("|")[3])
						ir_lvs_id = ir_lv[i].split("|")[4]
						ir_lvs_sade = parseFloat(ir_lv[i].split("|")[5])

						ir_lv_comment = ir_lv[i].split("|")[6]
						ir_lv_cfrom = ir_lv[i].split("|")[7]
						ir_lv_cto = ir_lv[i].split("|")[8]
						mitta__create_mitta(
							"restoring",
							"lv",
							ir_lvs_name,
							ir_lvs_b,
							ir_lvs_l,
							"",
							"",
							ir_lvs_vount,
							ir_lvs_id,
							ir_lvs_sade,
							ir_lv_comment,
							ir_lv_cfrom,
							ir_lv_cto
						)
					}
				}

				$("#step_drawscreen").val("drawscreen_section_three")
				refresh__drawcontrols()
				updatearea()
			}

			//AUKOT
			else if (ir_aus.length > 1) {
				for (var i = 0; i < ir_mps.length; i++) {
					if (ir_mps[i].length > 5) {
						ir_mps_name = ir_mps[i].split("|")[0]
						ir_mps_b = parseFloat(ir_mps[i].split("|")[1])
						ir_mps_l = parseFloat(ir_mps[i].split("|")[2])
						ir_mps_vount = parseFloat(ir_mps[i].split("|")[3])
						ir_mps_id = ir_mps[i].split("|")[4]
						mitta__create_mitta(
							"restoring",
							"mp",
							ir_mps_name,
							ir_mps_b,
							ir_mps_l,
							"",
							"",
							ir_mps_vount,
							ir_mps_id,
							mode_room
						)
					}
				}

				$("#step_drawscreen").val("drawscreen_section_one")
				refresh__drawcontrols()
				updatearea()

				for (var i = 0; i < ir_aus.length; i++) {
					if (ir_aus[i].length > 3) {
						ir_aus_name = ir_aus[i].split("|")[0]
						ir_aus_b = parseFloat(ir_aus[i].split("|")[1])
						ir_aus_l = parseFloat(ir_aus[i].split("|")[2])
						ir_aus_h = parseFloat(ir_aus[i].split("|")[5])
						ir_aus_w = parseFloat(ir_aus[i].split("|")[6])
						ir_aus_vount = parseFloat(ir_aus[i].split("|")[3])
						ir_aus_id = ir_aus[i].split("|")[4]
						ir_aus_classes = ir_aus[i].split("|")[7]

						ir_aus_comment = ir_aus[i].split("|")[8]
						ir_aus_cfrom = ir_aus[i].split("|")[9]
						ir_aus_cto = ir_aus[i].split("|")[10]
						mitta__create_mitta(
							"restoring",
							"au",
							ir_aus_name,
							ir_aus_b,
							ir_aus_l,
							ir_aus_h,
							ir_aus_w,
							ir_aus_vount,
							ir_aus_id,
							ir_aus_classes,
							ir_aus_comment,
							ir_aus_cfrom,
							ir_aus_cto
						)
						// mode_name,mode_ycord,mode_xcord,mode_hcord,mode_wcord,mode_ycord,mode_count,mode_id,mode_room
						// Ikkuna # 1|500|505|1|aukko00e1462bffe7|1500|2000|A
					}
				}

				$("#step_drawscreen").val("drawscreen_section_two")
				refresh__drawcontrols()
				updatearea()
			}

			//MITTAPISTEET, OK
			else if (ir_mps.length > 1) {
				for (var i = 0; i < ir_mps.length; i++) {
					if (ir_mps[i].length > 5) {
						ir_mps_name = ir_mps[i].split("|")[0]
						ir_mps_b = parseFloat(ir_mps[i].split("|")[1])
						ir_mps_l = parseFloat(ir_mps[i].split("|")[2])
						ir_mps_vount = parseFloat(ir_mps[i].split("|")[3])
						ir_mps_id = ir_mps[i].split("|")[4]
						mitta__create_mitta(
							"restoring",
							"mp",
							ir_mps_name,
							ir_mps_b,
							ir_mps_l,
							"",
							"",
							ir_mps_vount,
							ir_mps_id,
							mode_room
						)
					}
				}

				$("#step_drawscreen").val("drawscreen_section_one")
				refresh__drawcontrols()
				updatearea()
			}
		} else {
		}
		counting__aukkos()

		ir_no = room.dataset.room
		mode_room = ir_no.toLowerCase()

		if (mode_room == "a") {
			ir_value = apartment.dataset.aroom
		}
		if (mode_room == "b") {
			ir_value = apartment.dataset.broom
		}
		if (mode_room == "c") {
			ir_value = apartment.dataset.croom
		}
		if (mode_room == "d") {
			ir_value = apartment.dataset.droom
		}
		if (mode_room == "k") {
			ir_value = apartment.dataset.kroom
		}
		if (mode_room == "l") {
			ir_value = apartment.dataset.lroom
		}
		calculateamounts()
	}

	restoreprogress()

	// added 110324
	refresh__housenav()

	setTimeout(() => {
		update_lv_ondrawarea()
	}, 550)
}

// added 110324

function refresh__housenav() {
	letter__array = ["a", "b", "c", "d", "k", "l"]

	letter__array.forEach((letter) => {
		document.querySelector(".tohide__room_" + letter + " .wall_height").value =
			parseFloat(
				document.querySelector(
					"#wall_one_" +
						letter.replace("k", "roof").replace("l", "floor") +
						"_h"
				).value
			)
		document.querySelector(".tohide__room_" + letter + " .wall_width").value =
			parseFloat(
				document.querySelector(
					"#wall_one_" +
						letter.replace("k", "roof").replace("l", "floor") +
						"_w"
				).value
			)
		console.log(letter)
	})
}

// Function for changing element coords
// Parametrs:
// where - where is function called? Array in [where ("funcAXIS" or "inpAXIS (AXIS can be W - width or H - height, eg. inpW or funcH)" - input element), *if input* selector].
// elemSelector - a selector of element that needs to be changed
// coords - data in [x, y] (array!) !! WITH INPUT ONCHANGE USE null !!
// canvaSelector - selector of canva, where the element is
// size - array with size of wall ( [width, height] )
function changeCoords(where, elemSelector, coords, canvaSelector, size) {
	// This elem for changing its coords
	// Canva where elem is storing
	const canva = document.querySelector(canvaSelector)
	// Input
	let whereInput
	let elemI
	// Check, where's function called
	switch (where[0]) {
		// input with width
		case "inpW":
			elemI = document.querySelector(elemSelector)
			whereInput = document.querySelector(where[1])
			elemI.style.left = (whereInput.value * 100) / size[0] + "%"
			break
		case "inpH":
			// Input with Height
			elemI = document.querySelector(elemSelector)
			whereInput = document.querySelector(where[1])
			elemI.style.top = (whereInput.value * 100) / size[1] + "%"
			break
		case "funcW":
			elemSelector.style.left = (where[1].value * 100) / size[0] + "%"
			break
		case "funcH":
			elemSelector.style.bottom = (where[1].value * 100) / size[1] + "%"
			break
	}
}
// boxSelector - selector of element, where main element is being draggble, another "container"
// widthInputSelector - selector of input with original width in mm
// heightInputSelector - selector of input with original height in mm
// element - a main element that should be draggble
// inInputsFormat - 'elem' or 'selector' for next elem
// inWidthInputSelector - selector of input that controlls draggble element in x axis
// inHeightInputSelector - selector of input that controlls draggble element in y axis
function touchedElement(
	boxSelector,
	widthInputSelector,
	heightInputSelector,
	elementSelector,
	inInputsFormat,
	inWidthInputSelector,
	inHeightInputSelector
) {
	// Touch Event for
	let element = elementSelector
	if (inInputsFormat === "selector") {
		element = document.querySelector(elementSelector)
		element.addEventListener("touchmove", (e) => {
			const canvaRight = document.querySelector(boxSelector)
			const widthInput = document.querySelector(widthInputSelector).value
			const heightInput = document.querySelector(heightInputSelector).value
			const inWidthInput = document.querySelector(inWidthInputSelector)
			const inHeightInput = document.querySelector(inHeightInputSelector)
			// Get resize between in parts
			const BETWEENSHAPES_X = widthInput / canvaRight.offsetWidth
			const BETWEENSHAPES_Y = heightInput / canvaRight.offsetHeight
			e.preventDefault()
			let resizeWidth =
				event.targetTouches[0].pageX - canvaRight.getBoundingClientRect().left
			let resizeHeight =
				event.targetTouches[0].pageY - canvaRight.getBoundingClientRect().top

			if (
				event.targetTouches[0].pageX >
					canvaRight.getBoundingClientRect().left &&
				canvaRight.offsetWidth > resizeWidth
			) {
				inWidthInput.value = parseInt(BETWEENSHAPES_X * resizeWidth)
				changeCoords(
					["inpW", inWidthInputSelector],
					elementSelector,
					null,
					boxSelector,
					[widthInput, heightInput]
				)
			}
			if (
				event.targetTouches[0].pageY > canvaRight.getBoundingClientRect().top &&
				canvaRight.offsetHeight > resizeHeight
			) {
				inHeightInput.value = parseInt(BETWEENSHAPES_Y * resizeHeight)
				changeCoords(
					["inpH", inHeightInputSelector],
					elementSelector,
					null,
					boxSelector,
					[widthInput, heightInput]
				)
			}
		})
	} else if (inInputsFormat === "elem") {
		elementSelector.addEventListener("touchmove", (e) => {
			const canvaRight = document.querySelector(boxSelector)
			const widthInput = document.querySelector(widthInputSelector).value
			const heightInput = document.querySelector(heightInputSelector).value
			// Get resize between in parts
			const BETWEENSHAPES_X = widthInput / canvaRight.offsetWidth
			const BETWEENSHAPES_Y = heightInput / canvaRight.offsetHeight
			e.preventDefault()
			let resizeWidth =
				event.targetTouches[0].pageX - canvaRight.getBoundingClientRect().left
			let resizeHeight =
				event.targetTouches[0].pageY - canvaRight.getBoundingClientRect().top
			if (
				event.targetTouches[0].pageX >
					canvaRight.getBoundingClientRect().left &&
				canvaRight.offsetWidth > resizeWidth
			) {
				inWidthInputSelector.value = parseInt(BETWEENSHAPES_X * resizeWidth)
				changeCoords(
					["funcW", inWidthInputSelector],
					elementSelector,
					null,
					boxSelector,
					[widthInput, heightInput]
				)
			}
			if (
				event.targetTouches[0].pageY > canvaRight.getBoundingClientRect().top &&
				canvaRight.offsetHeight > resizeHeight
			) {
				inHeightInputSelector.value = parseInt(
					heightInput - BETWEENSHAPES_Y * resizeHeight
				)

				if (element.classList.contains("aukko")) {
					element.querySelector(".newDiv__y").innerHTML =
						"Y: " + parseInt(heightInput - BETWEENSHAPES_Y * resizeHeight)
					element.querySelector(".newDiv__x").innerHTML =
						"X: " + parseInt(BETWEENSHAPES_X * resizeWidth)
				}
				changeCoords(
					["funcH", inHeightInputSelector],
					elementSelector,
					null,
					boxSelector,
					[widthInput, heightInput]
				)
			}
		})
	}
}
// Change value of inputs in modals with coords of origo
// bottom_input - up input
// left_input - left input
function getElementCoords(bottom_input, left_input) {
	if (document.querySelector("#drawscreen_section_two")) {
		const SHAPE_H = document.querySelector("#box_h").value
		const SHAPE_W = document.querySelector("#box_w").value
		const origoBottom = document
			.querySelector(".setting__canvas #drawarea__origo_central")
			.style.bottom.replace("px", "")
		const origoLeft = document
			.querySelector(".setting__canvas #drawarea__origo_central")
			.style.left.replace("px", "")
		const cordsBottom = document.querySelector(bottom_input)
		const cordsLeft = document.querySelector(left_input)

		if (origoBottom && origoLeft) {
			// DEPRECATED 130324
			// cordsBottom.value = origoBottom * 5;
			// cordsLeft.value = origoLeft * 5;
			cordsBottom.value = 5
			cordsLeft.value = 5
			change__newdiv_cord()
		} else {
			cordsBottom.value = 5
			cordsLeft.value = 5
			change__newdiv_cord()
		}
	}
}
origo = document.querySelector("#drawarea__origo_central")
canvas = document.querySelector("#box-wrapper > main")
// touchedElement('.drawarea main', '#drawarea_w', '#drawarea_h', '#drawarea__origo_central', 'selector','#origo_x', '#origo_y')
/**
 * Rounds a given number to the nearest multiple of 25.
 * @param {number} num - The number to round to the nearest multiple of 25.
 * @returns {number} The rounded number.
 */
function roundToNearest25(num) {
	return Math.round(num / 25) * 25
}

/**
 * Function that adjusts the grid layout based on the dimensions of the canvas and draw area.
 * It calculates the width and height of grid items and rows based on the canvas size and draw area dimensions.
 * It also sets the value of the ".kokonaisalue" element to the concatenated values of drawarea_h and drawarea_w.
 * Additionally, it prevents the default behavior of the Enter key when pressed.
 * @returns None
 */
function gridify() {
	setTimeout(() => {
		drawarea = document.querySelector("#box-wrapper")
		let item = drawarea.querySelectorAll(".grid-item")
		let row = drawarea.querySelectorAll(".grid-row")
		item.forEach(itemF)

		function itemF(item) {
			var h = drawarea.querySelector(".canvas").clientHeight
			var w = drawarea.querySelector(".canvas").clientWidth
			var w_ = document.querySelector("#drawarea_w").value
			var h_ = document.querySelector("#drawarea_h").value
			widthP = 500 / w_
			item.style.width = w * widthP + "px"
			item.style.height = w * widthP + "px"
			// item.style.width = "100%";
		}
		row.forEach(itemF2)

		function itemF2(r) {
			var h = drawarea.querySelector(".canvas").clientHeight
			var w = drawarea.querySelector(".canvas").clientWidth
			var w_ = document.querySelector("#drawarea_w").value
			var h_ = document.querySelector("#drawarea_h").value
			widthP = 500 / w_
			r.style.width = w * widthP + "px"
		}

		document.querySelector(".kokonaisalue").value =
			document.querySelector("#drawarea_h").value +
			" " +
			document.querySelector("#drawarea_w").value
	}, 1000)
}
window.onload = (event) => {
	gridify()
}
// $(document).ready(function () {
//   $(window).keydown(function (event) {
//     if (event.keyCode == 13) {
//       event.preventDefault();
//       return false;
//     }
//   });
//
// });

/**
 * Check if a given number is even.
 * @param {number} num - The number to check for evenness.
 * @returns {boolean} Returns true if the number is even, false otherwise.
 */
function isEven(num) {
	return num % 2 === 0
}

/**
 * Removes duplicate elements from an array while preserving the original order.
 * @param {Array} arr - The input array from which duplicates are to be removed.
 * @returns {Array} - A new array with duplicate elements removed.
 */
function removeDuplicates(arr) {
	return arr.filter((item, index) => arr.indexOf(item) === index)
}

/**
 * Takes a screenshot of a specific element based on the argument provided.
 * @param {number} arg - The argument to determine which element to take a screenshot of (0, 1, or 2).
 * @returns None
 */
function takeshot(arg) {
	let div = document.querySelector(
		"body > section.row.drawarea__section > div.drawarea__section_container"
	)
	if (arg === 0) {
		output = document.getElementById("levyt__havainnekuva")
		img_name = current_tila + "_Seina_" + current_room + "_Levyt"
	} else if (arg === 1) {
		output = document.getElementById("rangat__havainnekuva")
		img_name = current_tila + "_Seina_" + current_room + "_Rangat"
	} else if (arg === 2) {
		output = document.getElementById("listat__havainnekuva")
		img_name = current_tila + "_Seina_" + current_room + "_Listat"
	}
	// else if(arg === 3) {
	//    output = document.getElementById('ikkunalistat__havainnekuva');
	//    img_name = "Havainnekuva_Levyt"
	// }
	drawarea__controls = document.querySelectorAll(".drawarea__controls")
	for (var i = 0; i < drawarea__controls.length; i++) {
		drawarea__controls[i].style.opacity = 0
	}
	// Use the html2canvas
	// function to take a screenshot
	// and append it
	// to the output div
	output.innerHTML = ""
	html2canvas(div).then(function (canvas2) {
		// output.appendChild(canvas2);
		const imageData = canvas2.toDataURL("image/png")
		const screenshotImage = new Image()
		screenshotImage.src = imageData
		link = document.createElement("a")
		link.download = img_name
		var pdf = new jsPDF({
			orientation: "landscape",
		})
		imgProps = pdf.getImageProperties(imageData)
		const pdfWidth = pdf.internal.pageSize.getWidth()
		const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width
		pdf.addImage(imageData, "PNG", 3, 3, pdfWidth, pdfHeight, null, null, 0)
		pdf.save(img_name + ".pdf")
		link.href = pdf.output("datauristring")
		link.appendChild(screenshotImage)
		output.appendChild(link)
	})
	for (var i = 0; i < drawarea__controls.length; i++) {
		drawarea__controls[i].style.opacity = 1
	}
}

/**
 * Creates and appends a new div element to the main box wrapper with specific styling and event listeners.
 * @returns None
 */
function prepend__reclamation() {
	var newDiv = document.createElement("span")
	var newDiv__comment = document.createElement("span")
	var newDiv__hidden_attention = document.createElement("input")
	var newDiv__hidden_attentioncommmets = document.createElement("input")
	newDiv__hidden_attention.type = "hidden"
	newDiv__hidden_attention.name = "attentions"
	newDiv__hidden_attentioncommmets.type = "hidden"
	newDiv__hidden_attentioncommmets.name = "commmets"
	newDiv.innerHTML = ""
	if (document.querySelector("#reclamation__item_first").checked) {
		newDiv.innerHTML =
			"<i>" + document.getElementById("reclamation__item_first").value + "</i>"
	}
	if (document.querySelector("#reclamation__item_second").checked) {
		newDiv.innerHTML =
			"<i>" + document.getElementById("reclamation__item_second").value + "</i>"
	}
	if (document.querySelector("#reclamation__item_third").checked) {
		newDiv.innerHTML =
			"<i>" + document.getElementById("reclamation__item_third").value + "</i>"
	}
	if (document.querySelector("#reclamation__item_fourth").checked) {
		newDiv.innerHTML =
			"<i>" + document.getElementById("reclamation__item_fourth").value + "</i>"
	}
	if (document.querySelector("#reclamation__item_fifth").checked) {
		newDiv.innerHTML =
			"<i>" + document.getElementById("reclamation__item_fifth").value + "</i>"
	}
	document.querySelector("#box-wrapper > main").prepend(newDiv)
	newDiv.style.top = "unset" //(parseFloat(document.querySelector("#r-cord_up").value) / 10) + 'px';
	newDiv.style.right = "unset" //( parseFloat(document.querySelector("#r-cord_r").value) / 10) + 'px';
	newDiv.style.bottom =
		parseFloat(document.querySelector("#r-cord_low").value) / 10 + "px"
	newDiv.style.left =
		parseFloat(document.querySelector("#r-cord_left").value) / 10 + "px"
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
		newDiv.style.top = e.clientY - e.clientY / 2 + "px"
		newDiv.style.left = e.clientX - e.clientX / 1.5 + "px"
	}
	newDiv.classList.add("reclamation")
	if (document.querySelector("#reclamation_comment").value != "") {
		newDiv__hidden_attentioncommmets.value +=
			document.querySelector("#reclamation_comment").value +
			"<br> Tältä: " +
			document.querySelector("#reclamation_comment_from").value +
			"<br> Tälle: " +
			document.querySelector("#reclamation_comment_to").value
		var comment__container = document.createElement("div")
		var comment__text = document.createElement("p")
		var comment__from = document.createElement("strong")
		var comment__to = document.createElement("strong")
		comment__text.innerHTML = document.querySelector(
			"#reclamation_comment"
		).value
		comment__from.innerHTML = document.querySelector(
			"#reclamation_comment_from"
		).value
		comment__to.innerHTML = document.querySelector(
			"#reclamation_comment_to"
		).value
		comment__container.classList.add("comment__container")
		comment__from.classList.add("comment__from")
		comment__to.classList.add("comment__to")
		newDiv.appendChild(comment__container)
		comment__container.appendChild(comment__text)
		comment__container.appendChild(comment__from)
		comment__container.appendChild(comment__to)
	}
}

/**
 * Adds a problem status to a specific element based on the provided event.
 * @param {Event} e - The event that triggered the function.
 * @returns None
 */
function addproblemstatus(e) {
	elid = e.getAttribute("id")
	el_ = elid
		.replace("--Tila ", "")
		.replace("", "")
		.replaceAll(" ", "")
		.toLowerCase()
	document
		.querySelector(".project__building_room." + el_.replaceAll(" ", ""))
		.classList.add("prob")
	if (document.querySelector("#comment__importance")) {
		if (document.querySelector("#comment__importance").checked === true) {
			document
				.querySelector(".project__building_room." + el_.replaceAll(" ", ""))
				.classList.add("critical")
		}
	}
}
/**
 * Adds a click event listener to all radio buttons and checkboxes on the page to focus on the element when clicked.
 * This helps with accessibility by making it easier for users to interact with the form elements using the keyboard.
 * @returns None
 */
//Ultimate rule: all radiobuttons and checkboxes get focus on checked
var radios = document.querySelectorAll('input[type="radio"]')
radios.forEach(function (r) {
	r.addEventListener(
		"click",
		function (e) {
			r.focus()
		},
		{
			useCapture: true,
		}
	)
})
var checkedboxes = document.querySelectorAll('input[type="checkbox"]')
checkedboxes.forEach(function (ch) {
	ch.addEventListener(
		"click",
		function (e) {
			ch.focus()
		},
		{
			useCapture: true,
		}
	)
})

/**
 * Removes all canvas elements with the class "canvas" that are children of the element with the id "copiedcanvases".
 * @returns None
 */
function delcanvases() {
	copiedcanvases = document.getElementById("copiedcanvases")

	todel = copiedcanvases.querySelectorAll(".canvas")
	for (var i = todel.length - 1; i >= 0; i--) {
		todel[i].remove()
	}
}

/**
 * This function is used to skip certain steps in a web application based on the URL parameters.
 * It checks for specific URL parameters and performs actions accordingly to skip to the desired step.
 * Note: This function relies on specific HTML elements and URL parameters to function correctly.
 * @returns None
 */
function skipping() {
	const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms))
	;(async () => {
		console.log("Skipping started")
		if (window.location.href.indexOf("&apartment=") > 1) {
			try {
				skipping_apartment = document
					.querySelector("#skipping_apartment")
					.value.replaceAll("ä", "a")
					.replaceAll("ö", "o")
				document.querySelector("." + skipping_apartment).click()
				await sleep(1000)
				if (window.location.href.indexOf("&room=") > 1) {
					skipping_room = document.querySelector("#skipping_room").value
					document.querySelector(".house__wall_status_" + skipping_room).click()
					await sleep(1000)
					if (window.location.href.indexOf("&step=") > 1) {
						input_step = document.querySelector("#step_drawscreen").value
						skipping_step = document.querySelector("#skipping_step").value
						input_step = skipping_step
							.replaceAll("0", "drawscreen_section_zero")
							.replaceAll("1", "drawscreen_section_one")
							.replaceAll("2", "drawscreen_section_two")
							.replaceAll("3", "drawscreen_section_three")
							.replaceAll("4", "drawscreen_section_four")
							.replaceAll("5", "drawscreen_section_five")
							.replaceAll("6", "drawscreen_section_six")
							.replaceAll("7", "drawscreen_section_seven")
							.replaceAll("8", "drawscreen_section_eight")
							.replaceAll("9", "drawscreen_section_tyostot")
							.replaceAll("10", "drawscreen_section_esikatselu")

						await sleep(1000)
						$("#step_drawscreen").val(input_step)
						refresh__drawcontrols()
						updatearea()
					}
				}
			} catch (error) {
				console.log(error)
				// degradate_url(1);
				// location.reload();
			}
		}
		// await sleep(100);
		$(".preloader").removeClass("active")
	})()

	// if(current_user_permissions)
}

/**
 * Executes the function 'skipping' after a delay of 550 milliseconds.
 * @param {Function} skipping - The function to be executed after the delay.
 * @param {number} 550 - The delay in milliseconds before executing the function.
 * @returns None
 */
// document.querySelector(".preloader").classList.add("active");
$(".preloader").addClass("active")
setTimeout(() => {
	skipping()
}, "550")

sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms))

/**
 * Initializes the house template based on the provided arguments and stage.
 * @param {templ} templ - The argument to initialize the house template.
 * @param {number} stage - The stage of initialization (1 or 2).
 * @returns None
 */
function initialize__housetempla(templ, stage) {
	rdata = document.querySelector("." + current_apartment)

	if (stage === 1) {
		house__templeates = document.querySelectorAll(".house__types_type")
		for (let a = 0; a < house__templeates.length; a++) {
			house__templeates[a].classList.remove("active")
		}
		templ.classList.add("active")

		document.querySelector("#wall_one_a_h").value = templ.dataset.aroom
			.split(",")[3]
			.split("|")[0]
		document.querySelector("#wall_one_a_w").value = templ.dataset.aroom
			.split(",")[3]
			.split("|")[1]
		document.querySelector("#wall_one_b_h").value = templ.dataset.broom
			.split(",")[3]
			.split("|")[0]
		document.querySelector("#wall_one_b_w").value = templ.dataset.broom
			.split(",")[3]
			.split("|")[1]
		document.querySelector("#wall_one_c_h").value = templ.dataset.croom
			.split(",")[3]
			.split("|")[0]
		document.querySelector("#wall_one_c_w").value = templ.dataset.croom
			.split(",")[3]
			.split("|")[1]
		document.querySelector("#wall_one_d_h").value = templ.dataset.droom
			.split(",")[3]
			.split("|")[0]
		document.querySelector("#wall_one_d_w").value = templ.dataset.droom
			.split(",")[3]
			.split("|")[1]
		document.querySelector("#wall_one_roof_h").value = templ.dataset.kroom
			.split(",")[3]
			.split("|")[0]
		document.querySelector("#wall_one_roof_w").value = templ.dataset.kroom
			.split(",")[3]
			.split("|")[1]
		document.querySelector("#wall_one_floor_h").value = templ.dataset.lroom
			.split(",")[3]
			.split("|")[0]
		document.querySelector("#wall_one_floor_w").value = templ.dataset.lroom
			.split(",")[3]
			.split("|")[1]

		preset_id = parseFloat(templ.dataset.presetid)
		formData = {
			preset_id: preset_id,
			key: "aukko",
		}

		$.ajax({
			type: "POST",
			url: "vendor/get-presetcontent.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				//console.log('Tietokantavirhe, soita numeroon +358449782028');
			},
		}).done(function (settings) {
			;(async () => {
				presetcontent = JSON.parse(settings)
				console.log(presetcontent)
				await sleep(100)
				save_rooms()
				await sleep(2000)
				presetcontent.forEach((preset) => {
					current_room = preset[0].split("|")[0]
					save(preset[0].split("|")[1])
				})
				await sleep(200)
				location.reload()
			})()
		})
	}
	if (stage === 2) {
		let housetemplate_name = prompt("Enter the name of the template:")

		if (housetemplate_name == null) {
			return
		}

		if (housetemplate_name == "") {
			alert("Invalid template name!")
			return
		}

		newtype = document.createElement("div")
		newtype.classList.add("house__types_type")
		newtype.innerHTML = housetemplate_name
		newtype.dataset.aroom = rdata.dataset.aroom
		newtype.dataset.broom = rdata.dataset.broom
		newtype.dataset.croom = rdata.dataset.croom
		newtype.dataset.droom = rdata.dataset.droom
		newtype.dataset.kroom = rdata.dataset.kroom
		newtype.dataset.lroom = rdata.dataset.lroom

		formData = {
			name: housetemplate_name,
			a: newtype.dataset.aroom.toString(),
			b: newtype.dataset.broom.toString(),
			c: newtype.dataset.croom.toString(),
			d: newtype.dataset.droom.toString(),
			k: newtype.dataset.kroom.toString(),
			l: newtype.dataset.lroom.toString(),
		}

		$.ajax({
			type: "POST",
			url: "/vendor/updatepohjat.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				if (jqxhr.status == 409) {
					// if request returns status 409 - name is not unique
					alert("Template name in not unique!")
				} else {
					console.log("Tietokantavirhe, soita numeroon +358449782028")
				}
			},
		}).done(function (data) {
			// alert('Seinä ' + current_room + ' tallennettu');
			// console.log("saved Data: " + data);

			document.querySelector(".house__types_row").appendChild(newtype)
			// add button for template

			alert("function initialize__housetempla(9) OK")
		})
	}
}

/**
 * Sends an AJAX request to "/kumoa.php" to undo a specific action.
 * Retrieves the project ID and current user from the DOM elements with IDs "current_project_id" and "current_user".
 * Displays an alert if there is a database error or a network error.
 * @returns None
 */
function kumoa() {
	$.ajax({
		url: "/kumoa.php",
		type: "post",
		data: {
			project_id: document.querySelector("#current_project_id").value,
			username: document.querySelector("#current_user").value,
		},
		success: (answer) => {
			console.log("KUMOA:", answer)
			if (answer != "ok" && answer != "") {
				console.log("Tietokantavirhe, soita numeroon +358449782028")
			}
		},
		error: (e) => {
			console.log("NETWORK ERROR:", e)
			console.log("Tietokantavirhe, soita numeroon +358449782028")
		},
	})
}

/**
 * Sends a value to the server using AJAX POST request.
 * @param {any} val - The value to be sent to the server.
 * @param {string} metakey - The meta key associated with the value.
 * @returns None
 */
function send__value(val, metakey) {
	;(formData = {
		pr_id: document.querySelector("#current_project_id").value,
		meta: metakey,
		value: val,
	}),
		$.ajax({
			type: "POST",
			url: "/vendor/updatemeta.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				console.log("Tietokantavirhe, soita numeroon +358449782028")
			},
		}).done(function (data) {})
}

/**
 * Initializes the cropping functionality for tables with multiple rows and columns.
 * It calculates the maximum height and width based on the data attributes of the elements.
 * @returns None
 */
function initializecropping() {
	tables = document.querySelectorAll(".tablepreview")

	for (let t = 0; t < tables.length; t++) {
		if (tables[t].querySelectorAll(".project__building_room").length > 1) {
			pbr = tables[t].querySelectorAll(".project__building_room")
			pbr_array = []
			pbr_array_x = []
			for (let r = 0; r < pbr.length; r++) {
				if (isNaN(parseFloat(pbr[r].dataset.y)) === false) {
					pbr_array.push(parseFloat(pbr[r].dataset.y))
				}
			}

			for (let r = 0; r < pbr.length; r++) {
				if (isNaN(parseFloat(pbr[r].dataset.x)) == false) {
					pbr_array_x.push(parseFloat(pbr[r].dataset.x))
				}
			}
			max_pbrarray = Math.max(...pbr_array)
			max_pbrarray_x = Math.max(...pbr_array_x)
			rowcount = 1 + max_pbrarray
			rowcount_x = max_pbrarray_x + 1
			tables[t].style.maxHeight = "calc(" + rowcount + "*80px)"
			tables[t].querySelector(".project__building").style.height =
				tables[t].style.maxHeight
			tables[t].style.maxWidth = "calc(" + rowcount_x + "*80px + 3px)"
			if (
				tables[t].parentElement.querySelector(
					".project__building_liftingplaces"
				)
			) {
				tables[t].parentElement.querySelector(
					".project__building_liftingplaces"
				).style.maxWidth = "calc(" + rowcount_x + "*80px + 3px)"
			}
			tables[t].style.overflowX = "clip"
		}

		// clip-pathinset(0 0 240px 0)
	}
}

/**
 * Opens a settings modal based on the dataset value of the event target.
 * @param {Event} e - The event object that triggered the function.
 * @returns None
 */
function settings__modal_open(e) {
	asmodal_mode = e.dataset.asmodal_mode

	console.log("." + asmodal_mode)
	document.querySelector("." + asmodal_mode).classList.add("two")
	document.querySelector("." + asmodal_mode).classList.remove("out")

	if (input_step === "drawscreen_section_one") {
		give__origo_cord()
	} else if (input_step === "drawscreen_section_two") {
		document.querySelector("#aukotcord_left").value = ""
		document.querySelector("#aukotcord_right").value = ""
		document.querySelector("#aukotcord_low").value = ""
		document.querySelector("#aukotcord_up").value = ""

		document.querySelector("#hole__width").value = ""
		document.querySelector("#hole__height").value = ""
	} else if (input_step === "drawscreen_section_three") {
		give__origo_cord()
	}
}

initializecropping()

/**
 * Initializes settings for measurements by making AJAX calls to retrieve preset settings.
 * @returns None
 */
function initializesettings__mittaus() {
	if (document.querySelector(".commentbox")) {
		return
	}

	formData = {
		pr_id: parseFloat(document.querySelector("#current_project_id").value),
		key: "s_settings",
	}

	$.ajax({
		type: "POST",
		url: "vendor/get-presetid.php",
		data: formData,
		error: function (jqxhr, status, exception) {
			//console.log('Tietokantavirhe, soita numeroon +358449782028');
		},
	}).done(function (settings) {
		preset_id = settings
	})

	rankatype_array = [
		"",
		"Saumaranka",
		"Väliranka",
		"Päättöranka",
		"Kulmaranka",
		"ikkunaranka",
	]

	trs = [
		"lapiviennit__tbody",
		"systems__tbody",
		"reikaframe__tbody",
		"levytysreunat__tbody",
		"ranka__tbody_eight",
		"ranka__tbody_seven",
		"ranka__tbody_six",
		"ranka__tbody_five",
		"ranka__tbody_four",
		"ranka__tbody_three",
		"ranka__tbody_two",
		"ranka__tbody_one",
		"materials__tbody",
		"saumapysty__tbody",
		"saumavaaka__tbody",
		"ranka__tbody",
		"listapysty__tbody",
		"listavaaka__tbody",
	]
	for (let a = 0; a < trs.length; a++) {
		tds = document.querySelectorAll("." + trs[a] + " tr:not(.headingrow)")

		tds.forEach((td) => {
			td.remove()
		})
	}

	hs = document.querySelector("#hole_set")
	hs.innerHTML = ""

	setTimeout(() => {
		formData = {
			preset_id: preset_id,
		}
		$.ajax({
			type: "POST",
			url: "vendor/get-presetsettings.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				//console.log('Tietokantavirhe, soita numeroon +358449782028');
			},
		}).done(function (settings) {
			let settings_array = settings.split("],[")

			settings.split("],[").forEach((setting) => {
				key = setting.split('","')[2]
				v_ = setting
					.replaceAll(String.fromCharCode(92), "")
					.replaceAll(/u00f6/g, decode_utf8(encode_utf8("\u00f6")))
					.replaceAll(/u00e4/g, decode_utf8(encode_utf8("\u00e4")))
					.replaceAll("[", "")
					.replaceAll("]", "")
					.split('","')[3]

				if (key == "s_materials") {
					t = document.querySelector(".materials__tbody")
					v_.split("~~").forEach((v) => {
						v = v.replaceAll('"', "").split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"

							sauma__presets = document.querySelector("#sauma__presets")
							sauma__presets_2 = document.querySelector("#sauma__presets_2")

							img = ""
							if (v[8].length > 4) {
								img = `style="background-image: url('/uploads/${v[8]}');"`
							}
							sauma__presets.innerHTML +=
								`
              <td>
              <input type="radio" data-orlista="${v[10]}" data-yrlista="${v[9]}" data-levysku="${v[1]}" data-levystructure="${v[7]}" data-levythickness="${v[6]}" data-levyimg="${v[8]}" data-h="${v[2]}" data-w="${v[3]}" data-aihioh="${v[4]}" data-aihiow="${v[5]}" name="sauma_material" onclick="change__sauma_koko(this);" id="sauma_material` +
								count +
								`">
                <label for="sauma_material` +
								count +
								`" ${img}>${v[1]}</label>
              </td>`
							sauma__presets_2.innerHTML +=
								`
              <td>
                <input type="radio" data-orlista="${v[10]}" data-yrlista="${v[9]}" data-sku="${v[1]}" data-structure="${v[7]}" data-thickness="${v[6]}" data-img="${v[8]}" data-h="${v[2]}" data-w="${v[3]}" data-aihioh="${v[4]}" data-aihiow="${v[5]}" name="levyn_vari" id="levy_vari_` +
								count +
								`">
                <label onclick="levy__interaction(1,this);" class="levy__label" for="levy_vari_` +
								count +
								`" ${img}>${v[1]}</label>
              </td>`

							row.innerHTML +=
								`
                <td>
                  <input type="checkbox" name="admin_material" value="" onclick="this.checked ? this.value = 'on' : this.value = '';" id="material_` +
								count +
								`" ${checked}>
                  <label for="material_` +
								count +
								`"></label>
                </td>`
							row.innerHTML += `
                  <td>
                      <input type="text" disabled value="${v[1]}" class="lineinput" oninput="">
                  </td>
                  <td>
                      <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
                  </td>
                  <td>
                      <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
                  </td>
                  <td>
                      <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
                  </td>
                  <td>
                      <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
                  </td>
                  <td>
                      <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
                  </td>
                  <td>
                      <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
                  </td>
                  `

							if (v.length > 5 && v[8].length > 5) {
								row.innerHTML +=
									'<td><img src="/uploads/' +
									v[8] +
									'" style="max-width: 100px"><input type="hidden" class="fileinput_value" value="' +
									v[8] +
									'"></td>'
							} else {
								row.innerHTML += `
                    <td>
                        <input type="file" class="fileinput">
                        <input type="hidden" class="fileinput_value" value="">
                        <div class="send_material_btn">Ammu kuva sisään</div>
                    </td>`
							}

							row.innerHTML += `
                <td>
                    <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
                </td>
                <td>
                    <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
                </td>
              `

							t.appendChild(row)

							setTimeout(() => {
								change__sauma_koko(document.querySelector("#sauma_material1"))
								document.querySelector("#sauma_material1").checked = true
							}, 3350)
						}
					})

					if (t.querySelector("tr:not(.headingrow)")) {
					} else {
						t.style.opacity = 0
					}
				}

				if (key == "s_levytysreunat") {
					t = document.querySelector(".levytysreunat__tbody")
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"

							row.innerHTML +=
								`
                <td>
                  <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="lvreunat_` +
								count +
								`" ${checked}>
                  <label for="lvreunat_` +
								count +
								`"></label>
                </td>`
							row.innerHTML += `
                <td>
                    <input type="text" disabled value="${v[1]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[2]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[3]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[4]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[5]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[6]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[7]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[8]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[9]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[10]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[11]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[12]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[13]}" class="lineinput">
                </td>
                `
							t.appendChild(row)
						}
					})

					if (t.querySelector("tr:not(.headingrow)")) {
					} else {
						t.style.opacity = 0
					}
				}

				for (let i = 1; i < 6; i++) {
					if (key == "s_aukot_" + i) {
						if (i == 1) {
							h2 = "<h2>Oviaukon asetukset</h2>"
							typeclass = "ovi"
						} else if (i == 2) {
							h2 = "<h2>Ikkuna-aukon asetukset</h2>"
							typeclass = "ikkuna"
						} else if (i == 3) {
							h2 = "<h2>Pilariaukon asetukset</h2>"
							typeclass = "pilari"
						} else if (i == 4) {
							h2 = "<h2>Palkkiaukon asetukset</h2>"
							typeclass = "palkki"
						} else if (i == 5) {
							h2 = "<h2>Ilmastointiaukon asetukset</h2>"
							typeclass = "ilmastointi"
						}

						newsection = document.createElement("section")
						newsection.classList = typeclass + "_section"
						newsection.dataset.aukkotype = typeclass
						newsection.dataset.count = i

						newsection_h4 = document.createElement("h4")
						newsection_h4.classList = typeclass + "__asetusheading"
						newsection_h4.innerHTML =
							typeclass + " aukko-asetus, Tyyppi <b></b>"

						newsection_table = document.createElement("table")
						newsection_table.classList.add("tabs__target_table")
						newsection_table.classList.add("aukko-table")
						newtr = document.createElement("tr")
						newtr.classList = "headingrow"
						newtr.innerHTML = `
              <td>Aukkojen tyypit</td>
              <td>Max</td>
              <td>Min</td>
              <td>L2A Ranka</td>
              <td>L2A Rangan pituus</td>
              <td>L2A +	Rangan laatu</td>
              <td>L2B Ranka</td>
              <td>L2B Rangan pituus</td>
              <td>L2B +	Rangan laatu</td>
              <td>L2A Listat</td>
              <td>L2A Listan pituus +</td>
              <td>L2A Listan laatu</td>
              <td>L2B Listat</td>
              <td>L2B Listan pituus +</td>
              <td>L2B Listan laatu</td>
            `

						count_rows = 0

						newsection.appendChild(newsection_h4)
						newsection.appendChild(newsection_table)
						newsection_table.appendChild(newtr)

						v_.split("~~").forEach((v) => {
							counting_item = 0
							if (count_rows == 4) {
								newsection_h4 = document.createElement("h4")
								newsection_h4.classList = typeclass + "__asetusheading"
								newsection_h4.innerHTML =
									typeclass + " aukko-asetus, Tyyppi <b></b>"

								newsection_table = document.createElement("table")
								newsection_table.classList.add("tabs__target_table")
								newsection_table.classList.add("aukko-table")
								newtr = document.createElement("tr")
								newtr.classList = "headingrow"
								newtr.innerHTML = `
                  <td>Aukkojen tyypit</td>
                  <td>Max</td>
                  <td>Min</td>
                  <td>L2A Ranka</td>
                  <td>L2A Rangan pituus</td>
                  <td>L2A +	Rangan laatu</td>
                  <td>L2B Ranka</td>
                  <td>L2B Rangan pituus</td>
                  <td>L2B +	Rangan laatu</td>
                  <td>L2A Listat</td>
                  <td>L2A Listan pituus +</td>
                  <td>L2A Listan laatu</td>
                  <td>L2B Listat</td>
                  <td>L2B Listan pituus +</td>
                  <td>L2B Listan laatu</td>`
								newsection_table.appendChild(newtr)

								count_rows = 0
								newsection.appendChild(newsection_h4)
								newsection.appendChild(newsection_table)

								count_rows = 0
							}
							v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")
							newtr = document.createElement("tr")
							if (v.length > 1) {
								v.forEach((vchild) => {
									counting_item += 1
									if (counting_item == 2 || counting_item == 3) {
										newtr.innerHTML += `
                    <td>
                      <input type="number" data-key="s_aukot_${i}" value="${vchild}" class='lineinput'>
                    </td>`
									} else {
										newtr.innerHTML += `
                      <td>
                        <input type='text' data-key="s_aukot_${i}" value="${vchild}" class='lineinput'>
                      </td>`
									}
								})
							}
							newsection_table.appendChild(newtr)
							count_rows += 1
						})

						newdiv = document.createElement("div")
						newdiv.classList = "newtableshere"
						newsection.appendChild(newdiv)
						hs.appendChild(newsection)
					}
				}

				if (key == "s_reikaframe") {
					t = document.querySelector(".reikaframe__tbody")
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[1] == "on") {
							checked = "checked"
						}
						row.innerHTML +=
							`


              <td>
                  <input type="text" disabled value="${v[0]}" class="lineinput" oninput="">
              </td>

              <td>
                <input type="checkbox" value="${v[1]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="reikaframe_` +
							count +
							`" ${checked}>
                <label for="reikaframe_` +
							count +
							`"></label>
              </td>

              `
						t.appendChild(row)
					})
				}

				if (key == "s_lapiviennit") {
					dt = document.querySelector(".drawarea__top")
					t = document.querySelector(".lapiviennit__tbody")
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"

							additional_lvclass = ""
							measurements = ""

							if (v[3].length > 0 && v[4].length > 0) {
								additional_lvclass = "drawarea__top_circle drawarea__top_rect"
								measurements = "'" + v[3] + "x" + v[4] + "'"
							} else if (v[3].length > 0) {
								additional_lvclass = "drawarea__top_circle"
								measurements = v[3]
							}
							dt.innerHTML += `<div class="drawarea__top_item ${additional_lvclass}" style="background: #eee;display:flex;" onclick="settings__mitta();document.querySelector('#lapiviennit__sade_muucord').value = ${measurements};">${v[1]} <br> ${v[2]}</div>`
						} else {
							return
						}
						checked2 = ""
						if (v[5] == "on") {
							checked2 = "checked"
						}

						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="lapivienti_` +
							count +
							`" ${checked}>
                <label for="lapivienti_` +
							count +
							`"></label>
              </td>
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                <input type="checkbox" value="${v[5]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="lapivienti_dust_` +
							count +
							`" ${checked2}>
                <label for="lapivienti_dust_` +
							count +
							`"></label>
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>
              `
						t.appendChild(row)
					})

					dt.innerHTML += `<div class="drawarea__top_item drawarea__top_circle drawarea__top_custom" style="background: #eee;" onclick="document.querySelector('#lapiviennit__sade_muucord').value = '';settings__mitta();">x</div>`
					dt.innerHTML += `<div class="drawarea__top_item drawarea__top_circle drawarea__top_custom" style="border-radius: 0;background: #eee;" onclick="document.querySelector('#lapiviennit__sade_muucord').value = '100x100';settings__mitta();">x</div>`
				}

				if (key == "s_saumakulku") {
					sauma__xkulku = document.getElementsByName("sauma__saumoitus_x")
					sauma__ykulku = document.getElementsByName("sauma__saumoitus_y")

					v_ = v_.replaceAll('"', "")

					if (v_.split("~~")[0] == "yli") {
						sauma__xkulku[0].checked = true
					} else if (v_.split("~~")[0] == "mukaan") {
						sauma__xkulku[1].checked = true
					}

					if (v_.split("~~")[1] == "yli") {
						sauma__ykulku[0].checked = true
					} else if (v_.split("~~")[1] == "mukaan") {
						sauma__ykulku[1].checked = true
					}
				}

				if (key == "s_saumasuunta") {
					v_ = v_.replaceAll('"', "")

					if (v_ == "levytys_pystyyn") {
						document.querySelector("#settings__sauma_pysty").checked = true
					} else if (v_ == "levytys_vaakaan") {
						document.querySelector("#settings__sauma_vaaka").checked = true
					}
				}

				if (key == "s_saumatyyppi") {
					saumat__xkulku = document.getElementsByName("sauma__xtype")
					saumat__ykulku = document.getElementsByName("sauma__ytype")

					v_ = v_.replaceAll('"', "")

					if (v_.split("~~")[0] == "oik") {
						saumat__xkulku[0].checked = true
					} else if (v_.split("~~")[0] == "vas") {
						saumat__xkulku[1].checked = true
					} else if (v_.split("~~")[0] == "tasoitus") {
						saumat__xkulku[2].checked = true
					}
					if (v_.split("~~")[1] == "yla") {
						saumat__ykulku[0].checked = true
					} else if (v_.split("~~")[1] == "ala") {
						saumat__ykulku[1].checked = true
					} else if (v_.split("~~")[1] == "vaakatasoitus") {
						saumat__ykulku[2].checked = true
					}
				}

				if (key == "s_saumatpysty") {
					t = document.querySelector(".saumapysty__tbody")
					v_.split("~~").forEach((v) => {
						v = v.replaceAll('"', "").split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
						} else {
							return
						}

						row.innerHTML += `
                <td>
                    <input type="text" disabled value="${v[1]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[2]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[3]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[4]}" class="lineinput">
                </td>
                `
						t.appendChild(row)
					})
					saumaset_vm = parseFloat(
						document.querySelector(".saumapysty__tbody td:nth-child(2) > input")
							.value
					)
				}

				if (key == "s_saumatvaaka") {
					t = document.querySelector(".saumavaaka__tbody")
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
						} else {
							return
						}

						row.innerHTML += `
                <td>
                    <input type="text" disabled value="${v[1]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[2]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[3]}" class="lineinput">
                </td>
                <td>
                    <input type="text" disabled value="${v[4]}" class="lineinput">
                </td>
                `
						t.appendChild(row)
					})
					saumaset_hm = parseFloat(
						document.querySelector(".saumavaaka__tbody td:nth-child(2) > input")
							.value
					)
				}

				if (key == "s_rangat_1") {
					t = document.querySelector(".ranka__tbody_one")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}

						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}

						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_one_` +
							count +
							`" ${checked}>
                <label for="ranka_one_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list"  onchange="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>

              `
						t.appendChild(row)
					})
				}
				if (key == "s_rangat_2") {
					t = document.querySelector(".ranka__tbody_two")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}
						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}

						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_two_` +
							count +
							`" ${checked}>
                <label for="ranka_two_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>


              `
						t.appendChild(row)
					})
				}
				if (key == "s_rangat_3") {
					t = document.querySelector(".ranka__tbody_three")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}

						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}
						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_three_` +
							count +
							`" ${checked}>
                <label for="ranka_three_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list"  onchange="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>

              `
						t.appendChild(row)
					})
				}
				if (key == "s_rangat_4") {
					t = document.querySelector(".ranka__tbody_four")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}

						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}
						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_four_` +
							count +
							`" ${checked}>
                <label for="ranka_four_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list"  onchange="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>

              `
						t.appendChild(row)
					})
				}
				if (key == "s_rangat_5") {
					t = document.querySelector(".ranka__tbody_five")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}

						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}
						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_five_` +
							count +
							`" ${checked}>
                <label for="ranka_five_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list"  onchange="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>

              `
						t.appendChild(row)
					})
				}
				if (key == "s_rangat_6") {
					t = document.querySelector(".ranka__tbody_six")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}

						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}
						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_six_` +
							count +
							`" ${checked}>
                <label for="ranka_six_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list"  onchange="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>

              `
						t.appendChild(row)
					})
				}
				if (key == "s_rangat_7") {
					t = document.querySelector(".ranka__tbody_seven")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}

						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}

						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_seven_` +
							count +
							`" ${checked}>
                <label for="ranka_seven_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list"  onchange="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>

              `
						t.appendChild(row)
					})
				}
				if (key == "s_rangat_8") {
					t = document.querySelector(".ranka__tbody_eight")
					t.style.display = "none"
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
							t.style.display = "table"
						} else {
							return
						}

						r_options = ""
						for (let i = 0; i < rankatype_array.length; i++) {
							if (v[13] == rankatype_array[i]) {
								r_options +=
									"<option selected>" + rankatype_array[i] + "</option>"
							} else {
								r_options += "<option>" + rankatype_array[i] + "</option>"
							}
						}
						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="ranka_eight_` +
							count +
							`" ${checked}>
                <label for="ranka_eight_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="" list="ranka_list"  onchange="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>

              `
						t.appendChild(row)
					})
				}

				welcome_marko_rangat_duplicate(key)

				if (key == "s_listatpysty") {
					t = document.querySelector(".listapysty__tbody")
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
						} else {
							return
						}
						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="listatpysty_` +
							count +
							`" ${checked}>
                <label for="listatpysty_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[12]}" class="lineinput" oninput="">
              </td>
              `
						t.appendChild(row)
					})
				}

				if (key == "s_listatvaaka") {
					t = document.querySelector(".listavaaka__tbody")
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")

						count = t.querySelectorAll("tr").length
						row = document.createElement("tr")
						checked = ""
						if (v[0] == "on") {
							checked = "checked"
						} else {
							return
						}
						row.innerHTML +=
							`
              <td>
                <input type="checkbox" value="${v[0]}" onclick="this.checked ? this.value = 'on' : this.value = '';" id="listatvaaka_` +
							count +
							`" ${checked}>
                <label for="listatvaaka_` +
							count +
							`"></label>
              </td>`
						row.innerHTML += `
              <td>
                  <input type="text" disabled value="${v[1]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[2]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[3]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[4]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[5]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[6]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[7]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[8]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[9]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[10]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[11]}" class="lineinput" oninput="">
              </td>
              <td>
                  <input type="text" disabled value="${v[12]}" class="lineinput" oninput="">
              </td>
              `
						t.appendChild(row)
					})
				}

				if (key == "s_listat") {
					t = document.querySelector(".listat__tbody")
					v_.split("~~").forEach((v) => {
						v = decode_utf8(encode_utf8(v.replaceAll('"', ""))).split(",")
						if (v.length > 0) {
							document.querySelector("#listat_list").value +=
								v[1] +
								"~~" +
								v[2] +
								"~~" +
								v[3] +
								"~~" +
								v[4] +
								"~~" +
								v[5] +
								"~~" +
								v[6] +
								"~~" +
								v[7] +
								"~~" +
								v[8] +
								"~~" +
								v[9] +
								"~~" +
								v[10] +
								"~~" +
								v[11] +
								"~~" +
								v[12] +
								"~~" +
								v[13] +
								"~~" +
								v[14] +
								"~~" +
								v[15] +
								v[16] +
								"~~" +
								v[17] +
								"||"
						}
					})
				}

				if (key == "s_pituussuunnan") {
					const inputs = document.querySelectorAll(".pituussuunnan input")
					const data = v_.slice(0, -1).split(",")

					for (let i = 0; i < inputs.length; i++) {
						inputs[i].value = data[i]
					}
				}

				if (key == "s_leveyssuunnan") {
					const inputs = document.querySelectorAll(".leveyssuunnan input")
					const data = v_.slice(0, -1).split(",")

					for (let i = 0; i < inputs.length; i++) {
						inputs[i].value = data[i]
					}
				}

				if (key == "s_reunaasetukset") {
					const inputs = document.querySelectorAll(".poraukset input")
					const data = v_.slice(0, -1).split(",")

					for (let i = 0; i < inputs.length; i++) {
						inputs[i].value = data[i]
					}
				}
			})
		})
		givenewtype()
	}, 1250)
}
initializesettings__mittaus()

/**
 * Submits progress data based on the provided parameters.
 * @param {any} b - The data to be submitted.
 * @param {string} moddingtype - The type of modification being made (adding, cancel, back, save).
 * @param {string} id - The ID of the element being modified.
 * @param {string} type - The type of data being modified (mp, aukot, lv, sau).
 * @param {array} array - The array of data to be modified.
 * @param {string} aukkotallennus - Additional data for a specific type of modification.
 * @returns None
 */
function submitprogress(b, moddingtype, id, type, array, aukkotallennus) {
	setTimeout(function () {
		var input_step = $("#step_drawscreen").val()
		$(".id").each(function (i, obj) {
			value = $("#project__building_id").text()
			$(obj).val(value)
			var _id = value
		})
		var _id = value
		$(".wall").each(function (i, obj) {
			value = $(b).text()
			$(obj).val(value)
			var _wall = value
		})
		var _wall = value
		$(".room").each(function (i, obj) {
			value = $("#roomname").val()
			$(obj).val(value)
			var _room = value
		})
		var _room = value
		$(".step").each(function (i, obj) {
			value = "drawscreen_section_zero"
			$(obj).val(value)
			var _step = value
		})
		var _step = value
		$(".settings").each(function (i, obj) {
			value = "{}"
			$(obj).val(value)
			var _settings = value
		})
		var _settings = value
		$(".kokonaisalue").each(function (i, obj) {
			h = $(this).parent().find("input.wall_height").val()
			w = $(this).parent().find("input.wall_width").val()
			value = h + " " + w
			$(obj).val(value)
			var _kokonaisalue = value
		})
		value = h + "|" + w
		var _kokonaisalue = value
		$(".levytettava_alue").each(function (i, obj) {
			h = $(".drawarea__h_cord").text()
			w = $(".drawarea__w_cord").text()
			value = h + " " + w
			$(obj).val(value)
		})
		var _levytettava_alue = value
		$(".poisjaava_alue").each(function (i, obj) {
			u = $(".box__upper_mm").text()
			r = $(".box__right_mm").text()
			_u = $(".box__lower_mm").text()
			_r = $(".box__left_mm").text()
			value = u + "," + r + "," + _u + "," + _r
			$(obj).val(value)
		})
		var _poisjaava_alue = value
		$(".keskusmittapiste_cord").each(function (i, obj) {
			l = $("#drawarea__origo_central").css("left")
			t = $("#drawarea__origo_central").css("bottom")
			value = l + "," + t
			$(obj).val(value)
		})
		$(".room_status").each(function (i, obj) {
			value = room_status
			$(obj).val(value)
		})
		var _keskusmittapiste_cord = value
		const x = []
		$(".reklamaatiot").each(function (i, obj) {
			if ($("#mitta__huomiot")) {
				if ($("#m__a_sahko").is(":checked")) {
					x.push("sahko,")
				} else if ($("#m__a_putki").is(":checked")) {
					x.push("putki,")
				} else if ($("#m__a_tornado").is(":checked")) {
					x.push("jotain,")
				} else if ($("#comment__importance").is(":checked")) {
					x.push("tarkea")
				}
				x.push($("#mitta__huomiot").val())
				x.push($("#mittapiste_comment").val())
				x.push($("#mittapiste_comment_from").val())
				x.push($("#mittapiste_comment_to").val())
				$(obj).val(x)
			}
		})
		var _reklamaatiot = x
		var _listat = value
	}, 1000)
	if (moddingtype === "adding") {
		prevdata = array
		if (type === "mp") {
			mps = document.querySelector("input.mittapisteet")
			mps.value += array
		}
		if (type === "aukot") {
			aukkos = document.querySelector("input.aukot")
			aukkos.value += array
		}
		if (type === "lv") {
			lapiviennit = document.querySelector("input.lapiviennit")
			lapiviennit.value += array
		}
		// if (type === "sau") {
		//   array = [];
		//   saumat_data = document.querySelector("input.saumat_data");

		//   if (saumat_data.value.length > 2) {
		//     document.querySelector("input.saumat_dataforback").value = saumat_data.value;
		//   }
		//   saumat_data.value = "";
		//   v_s = document.querySelectorAll('.verticalrow_saumat > div');
		//   h_s = document.querySelectorAll('.horizontalrow_saumat > div');
		//   for (var i = 0; i < v_s.length; i++) {
		//     vs_name = parseFloat(v_s[i].dataset.no);
		//     vs_type = "pysty";
		//     vs_b = 0;
		//     vs_left = parseFloat(v_s[i].style.left);
		//     vs_cord = v_s[i].querySelector(".sauma__vertical_ctrl").value;
		//     array += vs_name + "|" + vs_type + "|" + vs_b + "|" + vs_left + "|" + vs_cord + "|" + vs_name + "__";
		//   }
		//   for (var i = 0; i < h_s.length; i++) {
		//     vs_name = h_s[i].dataset.no;
		//     vs_type = "vaaka";
		//     vs_b = parseFloat(h_s[i].style.bottom);
		//     vs_left = 0;
		//     vs_cord = h_s[i].querySelector(".sauma__horizontal_ctrl").value;
		//     array += vs_name + "|" + vs_type + "|" + vs_b + "|" + vs_left + "|" + vs_cord + "|" + vs_name + "__";
		//   }
		//   saumat_data = document.querySelector("input.saumat_data");
		//   saumat_data.value = array;
		//   realval = saumat_data.value;
		//   saumat_data.value = realval.replace(",", "__");

		//   prevdata = document.querySelector("input.saumat_dataforback").value;
		// }
		// if (type === "lev") {
		//   levy_array = [];
		//   levyt_data = document.querySelector("input.levyt_data");
		//   levyt_data.value = "";
		//   levy_item = canvas.querySelectorAll('.levy');
		//   for (var i = 0; i < levy_item.length; i++) {

		//     l_name = levy_item[i].querySelector(".levy_name").innerHTML;
		//     if (levy_item[i].classList.contains("dir_y")) {
		//       l_type = "pysty";
		//     }
		//     else if (levy_item[i].classList.contains("dir_x")) {
		//       l_type = "vaaka";
		//     }
		//     l_title = levy_item[i].title;

		//     l_b = parseFloat(levy_item[i].style.bottom) * 5;
		//     l_l = parseFloat(levy_item[i].style.left) * 5;
		//     l_w = parseFloat(levy_item[i].style.width) * 5;
		//     l_h = parseFloat(levy_item[i].style.height) * 5;

		//     l_title = parseFloat(l_h) + "--" + parseFloat(l_w) + "--" + parseFloat(l_b) + "--" + parseFloat(l_l);

		//     l_no = levy_item[i].dataset.levy;

		//     l_tyostot_y = "";
		//     l_tyostot_x = "";

		//     levy_array += l_name + "|" + l_type + "|" + l_b + "|" + l_l + "|" + l_h + "|" + l_w + "|" + l_title + "|" + l_no + "|" + l_tyostot_y + "|" + l_tyostot_x + "|";
		//   }
		//   levyt_data = document.querySelector("input.levyt_data");
		//   levyt_data.value = levy_array;
		//   realval = levyt_data.value;
		//   levyt_data.value = realval.replace("_", " ");
		//   prevdata = levyt_data.value;
		// }
		// if (type === "rangat") {
		//   rangat = document.querySelector("input.rangat");
		//   rangat.value += array;
		// }
		// if (type === "listat") {
		//   listat = document.querySelector("input.listat");
		//   listat.value += array;
		// }
	}
	if (moddingtype === "cancel") {
		if (type === "mp") {
			cur_mp = document.querySelector("#" + id)
			cur_mp.remove()
			names = document.getElementsByName(id)
			for (var i = 0; i < names.length; i++) {
				names[i].remove()
			}
			inpu = document.querySelector(".mittapisteet")
			val = inpu.value
			pdata = array.replace('"', "")
			inpu.value = val.replace(pdata, "")
			mp_previous_vord = pdata.split("|")[1] + "|" + pdata.split("|")[2]
		}
		if (type === "aukot") {
			inpu = document.querySelector(".aukot")
			val = inpu.value
			pdata = array.replace('"', "")
			inpu.value = val.replace(pdata, "")

			names = document.getElementsByName(id)
			for (var i = 0; i < names.length; i++) {
				names[i].remove()
			}
		}
		if (type === "lv") {
			inpu = document.querySelector(".lapiviennit")
			val = inpu.value
			pdata = array.replace('"', "")
			inpu.value = val.replace(pdata, "")

			names = document.getElementsByName(id)
			for (var i = 0; i < names.length; i++) {
				names[i].remove()
			}
		}
	}
	if (moddingtype === "back") {
		// if(array) {
		//    prevdata = array;
		// }
		if (prevdata !== null) {
			if (type === "mp") {
				inpu = document.querySelector(".mittapisteet")
				val = inpu.value
				if (val.includes(prevdata)) {
					obj = prevdata.split("|")[4].replace("__", "").toLowerCase()
					if (
						document.querySelector("#" + obj) &&
						document.querySelector("#" + obj).dataset.prevcord
					) {
						document.querySelector("#" + obj).style.bottom =
							parseFloat(
								document.querySelector("#" + obj).dataset.prevcord.split("|")[1]
							) /
								5 +
							"px"
						document.querySelector("#" + obj).style.left =
							parseFloat(
								document.querySelector("#" + obj).dataset.prevcord.split("|")[2]
							) /
								5 +
							"px"
					} else {
						if (document.querySelector("#" + obj)) {
							document.querySelector("#" + obj).remove()
							mittapiste_count -= 1
						}
						if (document.getElementsByName(obj)) {
							names = document.getElementsByName(obj)
							for (var i = 0; i < names.length; i++) {
								names[i].remove()
							}
						}
						pdata = prevdata.replace('"', "")
						inpu.value = val.replace(pdata, "")
					}
				}
			}
			if (type === "aukot") {
				inpu = document.querySelector(".aukot")
				val = inpu.value
				if (val.includes(prevdata)) {
					pdata = prevdata.replace('"', "")
					inpu.value = val.replace(pdata, "")
					og_id = pdata.split("|")[4].replace("__", "").toLowerCase()
					aukko = canvas.querySelector("#" + og_id)
					if (
						document.querySelector("#" + og_id) &&
						document.querySelector("#" + og_id).dataset.prevcord
					) {
						aukko.style.bottom =
							parseFloat(aukko.dataset.prevcord.split("|")[1]) / 5 + "px"
						aukko.style.left =
							parseFloat(aukko.dataset.prevcord.split("|")[2]) / 5 + "px"
						aukko.style.width =
							parseFloat(aukko.dataset.prevcord.split("|")[3]) / 5 + "px"
						aukko.style.height =
							parseFloat(aukko.dataset.prevcord.split("|")[4]) / 5 + "px"
						document.querySelector(
							"#" + og_id + " > .newDiv__height"
						).innerHTML = parseFloat(aukko.style.height) * 5
						document.querySelector(
							"#" + og_id + " > .aukko_inner_lcord"
						).style.bottom = -30 + parseFloat(aukko.style.height) + "px"
						document.querySelector(
							"#" + og_id + " > .newDiv__width"
						).innerHTML = parseFloat(aukko.style.width) * 5
						document.querySelector(
							"#" + og_id + " > .aukko_inner_rcord"
						).style.bottom = -30 + parseFloat(aukko.style.height) + "px"
						document.querySelector(
							"#" + og_id + " > .aukko_inner_rcord"
						).style.left = -30 + parseFloat(aukko.style.width) + "px"
						document.querySelector("#" + og_id + " > .newDiv__y").innerHTML =
							"Y: " +
							(parseFloat(aukko.dataset.prevcord.split("|")[1]) +
								parseFloat(aukko.dataset.prevcord.split("|")[4]))
						document.querySelector("#" + og_id + " > .newDiv__x").innerHTML =
							"X: " +
							(parseFloat(aukko.style.left) + parseFloat(aukko.style.width))
					} else {
						aukko_del(aukko, "")
					}
				}
			}
			if (type === "lv") {
				inpu = document.querySelector(".lapiviennit")
				val = inpu.value
				if (val.includes(prevdata)) {
					pdata = prevdata.replace('"', "")
					inpu.value = val.replace(pdata, "")
					obj = prevdata.split("|")[4].replace("__", "")
					if (
						document.querySelector("#" + obj) &&
						document.querySelector("#" + obj).dataset.prevcord
					) {
						document.querySelector("#" + obj).style.bottom =
							parseFloat(
								document.querySelector("#" + obj).dataset.prevcord.split("|")[1]
							) /
								5 +
							"px"
						document.querySelector("#" + obj).style.left =
							parseFloat(
								document.querySelector("#" + obj).dataset.prevcord.split("|")[2]
							) /
								5 +
							"px"

						real_lv = document.querySelector("#" + obj)

						real_lv.querySelector(".lv_lcord").innerHTML =
							parseFloat(document.querySelector("#" + obj).style.bottom) * 5
						real_lv.querySelector(".lv_bcord").innerHTML =
							parseFloat(document.querySelector("#" + obj).style.left) * 5
					} else {
						if (document.querySelector("#" + obj)) {
							document.querySelector("#" + obj).remove()
							lapivienti_count -= 1
						}
						if (document.getElementsByName(obj)) {
							names = document.getElementsByName(obj)
							for (var i = 0; i < names.length; i++) {
								names[i].remove()
							}
						}
					}
				}
			}
		}
		if (type === "sau") {
			ir_sau_ = document.querySelector(".saumat_dataforback").value
			somat = canvas.querySelectorAll(".sauma")

			for (var i = 0; i < somat.length; i++) {
				somat[i].remove()
			}
			document.querySelector(".drawarea__controls_four-pysty").innerHTML = ""
			document.querySelector(".drawarea__controls_four-vaaka").innerHTML = ""

			ir_sau = ir_sau_.split("__")
			//SAUMAT
			if (ir_sau.length > 1) {
				for (var i = ir_sau.length - 1; i >= 0; i--) {
					sau_data = ir_sau[i].split("|")
					if (sau_data.length > 1) {
						sau_name = sau_data[0]
						sau_type = sau_data[1]
						sau_b = sau_data[2]
						sau_left = sau_data[3]
						sau_cord = sau_data[4]
						sau_name = sau_data[5]
						luo__sauma_restore(
							sau_name,
							sau_type,
							sau_b,
							sau_left,
							sau_cord,
							sau_name
						)
						if (sau_type == "pysty") {
						}
						if (sau_type == "vaaka") {
						}
					}
				}
				alkusaumat()
				calculateamounts()
				sauma__verticals = canvas.querySelectorAll(".sauma__vertical")
				sauma__horizontals = canvas.querySelectorAll(".sauma__horizontal")
				if (canvas.querySelector(".sauma__vertical")) {
					for (var i = 0; i < sauma__verticals.length; i++) {
						if (sauma__verticals[i].querySelector(".sauma__controls_del")) {
							sauma__verticals[i].querySelector(
								".sauma__controls_del"
							).innerHTML = i + 1
							sauma__verticals[i].dataset.no = i + 1
						}
					}
					s_v = i + 1
				}
				if (canvas.querySelector(".sauma__horizontal")) {
					for (var i = 0; i < sauma__horizontals.length; i++) {
						if (sauma__horizontals[i].querySelector(".sauma__controls_del")) {
							sauma__horizontals[i].querySelector(
								".sauma__controls_del"
							).innerHTML = String.fromCharCode(65 + parseFloat(i + 1))
							sauma__horizontals[i].dataset.no = String.fromCharCode(
								65 + parseFloat(i + 1)
							)
						}
					}
					s_h = i + 1
				}

				dels = canvas.querySelectorAll(".sauma__controls_del")

				for (var i = dels.length - 1; i >= 0; i--) {
					sauma = dels[i].parentElement.parentElement
					if (dels[i].querySelector(".delmeasure")) {
						delmeasure = dels[i].querySelector(".delmeasure")
						if (sauma.classList.contains("sauma__vertical")) {
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.left) * 5
							)
						} else if (sauma.classList.contains("sauma__horizontal")) {
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.bottom) * 5
							)
						}
					} else {
						delmeasure = document.createElement("div")
						delmeasure.classList.add("delmeasure")
						if (sauma.classList.contains("sauma__vertical")) {
							delmeasure.classList.add("delmeasure_vertical")
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.left) * 5
							)
						} else if (sauma.classList.contains("sauma__horizontal")) {
							delmeasure.classList.add("delmeasure_horizontal")
							delmeasure.innerHTML = roundToNearest25(
								parseFloat(sauma.style.bottom) * 5
							)
						}

						dels[i].appendChild(delmeasure)
					}
				}

				saumasize__checkup()

				// sauma_h = canvas.querySelectorAll(".sauma__horizontal");
				// sauma_v = canvas.querySelectorAll(".sauma__vertical");
				// sauma_h.forEach(function(j) {
				//   j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
				//     resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
				//   });
				//   j.addEventListener('touchmove', (e) => {
				//     resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "v");
				//   });
				// });

				// sauma_v.forEach(function(j) {
				//   j.querySelector(".sauma__controls").addEventListener('touchmove', (e) => {
				//       resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
				//   });
				//   j.addEventListener('touchmove', (e) => {
				//     resizeSauma(e, j, j.querySelector(".sauma__controls"), j.querySelector(".sauma__control"), "h");
				//   });
				// });

				setTimeout(function () {
					levyta()
					console.log("LEVYTÄ FIRED")
				}, 1000)

				calculateamounts()
			}
		}
		prevdata = null
	}
	if (moddingtype === "save") {
		setTimeout(function () {
			$(".id").each(function (i, obj) {
				value = $("#project__building_id").text()
				$(obj).val(value)
				var _id = value
			})

			var _id = value
			saving_array = []
			saving_id = $(".id").val()
			if (document.querySelector("#open_comments")) {
				room_status = "prob"
			} else {
				room_status = "measured"

				if (current_room) {
					//current_room = current_room.replaceAll("seinä ","");
					current_room = current_room.split` `[1] || current_room
					if (current_room === "lattia") {
						current_room = "l"
					} else if (current_room === "katto") {
						current_room = "k"
					}
					if (
						document
							.querySelector(
								".house__wall_status.house__wall_status_" +
									current_room.toLowerCase()
							)
							.classList.contains("problem")
					) {
						room_status = "problem"
					} else if (
						document
							.querySelector(
								".house__wall_status.house__wall_status_" +
									current_room.toLowerCase()
							)
							.classList.contains("prob")
					) {
						room_status = "prob"
					} else if (
						document
							.querySelector(".house__wall_" + current_room.toLowerCase())
							.classList.contains("hidden")
					) {
						room_status = "hidden"
					} else if (
						document
							.querySelector(
								".house__wall_status.house__wall_status_" +
									current_room.toLowerCase()
							)
							.classList.contains("done")
					) {
						room_status = "done"
					} else if (
						document
							.querySelector(
								".house__wall_status.house__wall_status_" +
									current_room.toLowerCase()
							)
							.classList.contains("rangatok")
					) {
						room_status = "rangatok"
					} else if (
						document
							.querySelector(
								".house__wall_status.house__wall_status_" +
									current_room.toLowerCase()
							)
							.classList.contains("measured")
					) {
						room_status = "measured"
					} else if (
						document
							.querySelector(
								".house__wall_status.house__wall_status_" +
									current_room.toLowerCase()
							)
							.classList.contains("nowork")
					) {
						room_status = "nowork"
					} else {
						room_status = "undone"
					}
				}
			}

			saving_origo =
				parseFloat(
					document.querySelector("#drawarea__origo_central").style.left
				) +
				"|" +
				parseFloat(
					document.querySelector("#drawarea__origo_central").style.bottom
				)
			try {
				_saving_walls = $(".walls_content").val()
			} catch (e) {
				console.log("TRY-CATCH ERROR:", e)
			}

			saving_mps = $(".mittapisteet").val()
			saving_aus = $(".aukot").val()
			saving_lv = $(".lapiviennit").val()
			saving_sau = $(".saumat_data").val()
			saving_lev = $(".levyt_data").val()
			saving_w = $("#box_w").val()
			saving_h = $("#box_h").val()
			saving_cord = saving_h + "|" + saving_w

			saving_array.push(saving_id)
			saving_array.push(room_status)
			saving_array.push(saving_origo)
			saving_array.push(saving_cord)
			saving_array.push(saving_mps)
			saving_array.push(saving_aus)
			saving_array.push(saving_lv)
			saving_array.push(saving_sau)
			saving_array.push(saving_lev)
			//current_room = 'C';  TEMPORARY FOR TESTING

			if (current_room != null) {
				if (current_room.toLowerCase() == "a") {
					apartment.dataset.aroom = saving_array
				}
				if (current_room.toLowerCase() == "b") {
					apartment.dataset.broom = saving_array
				}
				if (current_room.toLowerCase() == "c") {
					apartment.dataset.croom = saving_array
				}
				if (current_room.toLowerCase() == "d") {
					apartment.dataset.droom = saving_array
				}
				if (current_room.toLowerCase() == "k") {
					apartment.dataset.kroom = saving_array
				}
				if (current_room.toLowerCase() == "l") {
					apartment.dataset.lroom = saving_array
				}
			}
			if (document.querySelectorAll("#A")) {
				a_rooms_ = document.querySelectorAll("#A .project__building_room")

				a_rooms = ""

				for (let i = 0; i < a_rooms_.length; i++) {
					_name = a_rooms_[i].dataset.room
						.replaceAll(",", "~")
						.replaceAll("   ", " ")
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
						_name.toUpperCase() +
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
			} else {
				a_rooms = ""
			}
			b_rooms = ""
			if (document.querySelectorAll("#B")) {
				b_rooms_ = document.querySelectorAll("#B .project__building_room")
				b_rooms = ""

				for (let i = 0; i < b_rooms_.length; i++) {
					_name = b_rooms_[i].dataset.room
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					positionX = b_rooms_[i].dataset.x
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					positionY = b_rooms_[i].dataset.y
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					a_room = b_rooms_[i].dataset.aroom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					b_room = b_rooms_[i].dataset.broom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					c_room = b_rooms_[i].dataset.croom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					d_room = b_rooms_[i].dataset.droom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					k_room = b_rooms_[i].dataset.kroom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					l_room = b_rooms_[i].dataset.lroom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")

					element =
						'{"name": "' +
						_name +
						'","positionX": ' +
						positionX +
						',"positionY": ' +
						positionY +
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
			} else {
				b_rooms = ""
			}
			c_rooms = ""
			if (document.querySelectorAll("#C")) {
				c_rooms_ = document.querySelectorAll("#C .project__building_room")
				c_rooms = ""

				for (let i = 0; i < c_rooms_.length; i++) {
					_name = c_rooms_[i].dataset.room
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					positionX = c_rooms_[i].dataset.x
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					positionY = c_rooms_[i].dataset.y
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					a_room = c_rooms_[i].dataset.aroom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					b_room = c_rooms_[i].dataset.broom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					c_room = c_rooms_[i].dataset.croom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					d_room = c_rooms_[i].dataset.droom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					k_room = c_rooms_[i].dataset.kroom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")
					l_room = c_rooms_[i].dataset.lroom
						.replaceAll(",", "~")
						.replace('"', "")
						.replace("'", "")

					element =
						'{"name": "' +
						_name +
						'","positionX": ' +
						positionX +
						',"positionY": ' +
						positionY +
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
			} else {
				c_rooms = ""
			}

			// if (document.querySelectorAll("#D")) {
			//   d_rooms = document.querySelectorAll("#D .project__building_room");
			// }
			// else {
			//   d_rooms = '';
			// }

			// if (document.querySelectorAll("#E")) {
			//   e_rooms = document.querySelectorAll("#E .project__building_room");
			// }
			// else {
			//   e_rooms = '';
			// }

			// if (document.querySelectorAll("#F")) {
			//   f_rooms = document.querySelectorAll("#F .project__building_room");
			// }
			// else {
			//   f_rooms = '';
			// }

			// if (document.querySelectorAll("#G")) {
			//   g_rooms = document.querySelectorAll("#G .project__building_room");
			// }
			// else {
			//   g_rooms = '';
			// }

			// if (document.querySelectorAll("#H")) {
			//   h_rooms = document.querySelectorAll("#H .project__building_room");
			// }
			// else {
			//   h_rooms = '';
			// }

			_saving_a_rooms = "[" + a_rooms.replace("'", "") + "]"
			_saving_b_rooms = "[" + b_rooms.replace("'", "") + "]"
			_saving_c_rooms = "[" + c_rooms.replace("'", "") + "]"
			// _saving_d_rooms
			// _saving_e_rooms
			// _saving_f_rooms
			// _saving_g_rooms
			// _saving_h_rooms

			formData = {
				id: _id.replace('"', "").replace("'", ""),
				saving_a_rooms: _saving_a_rooms,
				saving_b_rooms: _saving_b_rooms,
				saving_c_rooms: _saving_c_rooms,
				// saving_d_rooms: _saving_d_rooms,
				// saving_e_rooms: _saving_e_rooms,
				// saving_f_rooms: _saving_f_rooms,
				// saving_g_rooms: _saving_g_rooms,
				// saving_h_rooms: _saving_h_rooms
			}

			if (aukkotallennus) {
				if (aukkotallennus == "aukkotallennus") {
					settings_aukot = document.querySelectorAll(".aukko__toindex")

					formData = {
						id: _id.replace('"', "").replace("'", ""),
						username: document.querySelector("#current_user").value,
						saving_a_rooms: _saving_a_rooms,
						saving_b_rooms: _saving_b_rooms,
						saving_c_rooms: _saving_c_rooms,
						// saving_d_rooms: _saving_d_rooms,
						// saving_e_rooms: _saving_e_rooms,
						// saving_f_rooms: _saving_f_rooms,
						// saving_g_rooms: _saving_g_rooms,
						// saving_h_rooms: _saving_h_rooms
					}
				}
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
				// console.log("saved Data: " + data);
			})
		}, 500)
	}
}

/**
 * Creates an Excel generation timestamp based on the provided event data.
 * @param {Event} e - The event data that triggered the function.
 * @returns None
 */
function create__excelgenerationtimestamp(e) {
	_who = current_user
	_type = e.dataset.generatingtype
	_timedate = ""
	_room = current_tila
	_wall = current_room.toLowerCase()
	_generated_array = ""

	if (_type === "levyt") {
		__generated_array = JSON.stringify(levyexcel_array)
	}
	if (_type === "rangat") {
		__generated_array = JSON.stringify(rangat_tuotanto_data)
	}
	if (_type === "listat") {
		__generated_array = JSON.stringify(listat_tuotanto_data)
	}
	_generated_array = __generated_array.replaceAll(",", "~~~~")
	;(formData = {
		project_id: document.querySelector("#current_project_id").value,
		generated_array: _generated_array,
		room: _room,
		wall: _wall,
		who: _who,
		type: _type,
		timedate: _timedate,
	}),
		$.ajax({
			type: "POST",
			url: "../vendor/excel_orderlog.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				console.log("Tietokantavirhe, soita numeroon +358449782028")
			},
		}).done(function (data) {
			console.log("excel generation timestamp initiated on type " + _type)
			console.log(data)
		})
}

/**
 * Converts a date string to a Unix timestamp in seconds.
 * @param {string} strDate - The date string to convert to a timestamp.
 * @returns {number} The Unix timestamp in seconds.
 */
function toTimestamp(strDate) {
	var datum = Date.parse(strDate)
	return datum / 1000
}

/**
 * Toggle function to switch between different modes in the application.
 * @param {number} mode - The mode to switch to.
 * @param {HTMLElement} b - The button element that triggered the toggle.
 * @returns None
 */
function toggle__asexcel(mode, b) {
	current_tila =
		document.querySelector("#roomname_1").value +
		"_" +
		document.querySelector("#roomname_2").value +
		"_" +
		document.querySelector("#roomname_3").value
	current_tila = current_tila.replaceAll(" ", "")

	sheets = document.querySelectorAll(".three_sheet_item")
	btns = document.querySelectorAll(".tilalista_btn")

	sheets.forEach((sheet) => {
		sheet.classList.add("hidden")
	})

	btns.forEach((btn) => {
		btn.classList.remove("active")
	})

	b.classList.add("active")
	sheets[mode].classList.remove("hidden")
	levyt_cols = [
		"Type (drawing)",
		"Materialcode",
		"Leveys (X)",
		"Pituus (Y)",
		"Thickness",
		"Structure",
		"Quantity",
		"Plus",
		"Part number",
		"Nimi 1",
		"Nimi 2",
		"MPR",
		"Palletgroup",
		"Prioriteetti",
		"Asiakas",
		"Asennus",
		"Työstöt",
		"",
		"X KPL",
		"Y KPL",
		"Yhteensä",
		"  ",
		"   ",
		"    ",
		"     ",
		"      ",
		"Tarra",
		"Diameter",
		"X1",
		"X2",
		"X3",
		"X4",
		"X5",
		"X6",
		"X7",
		"X8",
		"X9",
		"X10",
		"Y1",
		"Y2",
		"Y3",
		"Y4",
		"Y5",
		"Y6",
		"Y7",
		"Y8",
		"Y9",
		"Y10",
		"X",
		"Y",
		"X ",
		"Y ",
		"PR1_X",
		"PR1_Y",
		"PR1_DX",
		"PR1_DY",
		"PR2_X",
		"PR2_Y",
		"PR1_DX",
		"PR2_DY",
		"PR3_X",
		"PR3_Y",
		"PR3_DX",
		"PR3_DY",
		"PR4_X",
		"PR4_Y",
		"PR4_DX",
		"PR4_DY",
		"PF1_X",
		"PF1_Y",
		"PF1_DX",
		"PF1_DY",
		"PF2_X",
		"PF2_Y",
		"PF2_DX",
		"PF2_DY",
		"CH 0=OFF 1= ON",
		"Y Vasen",
		"Y oikea",
		"X ala",
		"x ylä",
		"X ala",
		"X ylä",
		"VH1_X",
		"VH1_Y",
		"VH1_L",
		"VH1_KPL",
		"VH1_K",
		"       ",
		"        ",
		"         ",
		"          ",
		"AR Edge 1",
		"YR Edge 1",
		"VR Edge 1",
		"OR Edge 1",
		"AR Edge 2",
		"YR Edge 2",
		"VR Edge 2",
		"OR Edge 2",
		"AR Trim",
		"YR Trim",
		"VR Trim",
		"OR Trim",
		"Yhdistä Xx-XX",
		"Yhdistä Yx-YX",
	]
	rangat_cols = [
		"Rivinumero",
		"Rangan tyyppi",
		"Tilauskoodi",
		"Pituus",
		"KPL",
		"MATERIAALI",
		"PAKSUUS",
		"LAATU",
		"Väri nimi",
		"NCS code",
		"Tilattu PVM",
		"STATUS",
		"Asiakas",
		"Projekti",
		"Osoite",
		"Palletgroup",
		"Asunto Nimi 1",
		"Nimi 2",
		"Työstöt",
		"Asennus",
	]
	listat_cols = [
		"Rivinumero",
		"Rangan tyyppi",
		"Tilauskoodi",
		"Pituus",
		"KPL",
		"MATERIAALI",
		"PAKSUUS",
		"LAATU",
		"Väri nimi",
		"NCS code",
		"Tilattu PVM",
		"STATUS",
		"Asiakas",
		"Projekti",
		"Osoite",
		"Palletgroup",
		"Asunto Nimi 1",
		"Nimi 2",
		"Työstöt",
		"Asennus",
	]

	current_id = parseFloat(document.querySelector("#current_project_id").value)

	if (mode === 0) {
		_type = "tilaus"
		_types = ["levyt", "rangat", "listat"]
		used_rooms = []
		u_rooms = []
		trs = document.querySelectorAll(".tilatilaus__tbody tr:not(.headingrow)")
		trs.forEach((tr) => {
			tr.remove()
		})
		_types.forEach((_type) => {
			_tr = document.createElement("tr")
			rinnerText = current_tila + " " + _type.toUpperCase()
			rinnerText_selector = rinnerText
				.replaceAll("ä", "a")
				.replaceAll("ö", "o")
				.replaceAll(" ", "_")
				.replaceAll("\n", "_")
				.toLowerCase()
			_tr.classList.add(rinnerText_selector)
			_tr.innerHTML = `
        <td>${rinnerText}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      `
			document.querySelector(".tilatilaus__tbody").appendChild(_tr)
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				room: current_tila,
				type: _type,
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinroom.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					u_rooms = []
					used_rooms = []
					successful = success.replaceAll("~~~~", ",").split("&&")
					successful.forEach((timestamp) => {
						if (timestamp.length < 5) {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						console.log(raw_data)
						wall = raw_data[1]
						roomstatus = raw_data[3]
						timing = toTimestamp(raw_data[2])
						if (used_rooms.includes(wall + "|" + roomstatus)) {
							used_rooms.push(wall + "|" + roomstatus)
							u_rooms.push(wall)
						} else {
							used_rooms.push(wall + "|" + roomstatus)
							u_rooms.push(wall)
						}
					})
					rinnerText = current_tila + " " + _type.toUpperCase()
					rinnerText_selector = rinnerText
						.replaceAll("ä", "a")
						.replaceAll("ö", "o")
						.replaceAll(" ", "_")
						.replaceAll("\n", "_")
						.toLowerCase()

					console.log("rinnerText_selector: " + rinnerText_selector)

					used_rooms.forEach((r) => {
						r_wall = r
							.split("|")[0]
							.replaceAll("ä", "a")
							.replaceAll("ö", "o")
							.replaceAll(" ", "_")
							.replaceAll("\n", "_")
							.toLowerCase()
						r_row = document.querySelector(
							".tilatilaus__tbody tr." + rinnerText_selector
						)
						wall_status = r.split("|")[1].toUpperCase()
						if (r_wall === "a") {
							r_row.querySelectorAll("td")[1].innerHTML = wall_status
						} else if (r_wall === "b") {
							r_row.querySelectorAll("td")[2].innerHTML = wall_status
						} else if (r_wall === "c") {
							r_row.querySelectorAll("td")[3].innerHTML = wall_status
						} else if (r_wall === "d") {
							r_row.querySelectorAll("td")[4].innerHTML = wall_status
						} else if (r_wall === "k") {
							r_row.querySelectorAll("td")[5].innerHTML = wall_status
						} else if (r_wall === "l") {
							r_row.querySelectorAll("td")[6].innerHTML = wall_status
						}
					})
				})
		})

		return
	}
	if (mode === 1) {
		_type = "levyt"
		cols = [
			"Type (drawing)",
			"Materialcode",
			"Leveys (X)",
			"Pituus (Y)",
			"Thickness",
			"Structure",
			"Quantity",
			"Plus",
			"Part number",
			"Nimi 1",
			"Nimi 2",
			"MPR",
			"Palletgroup",
			"Prioriteetti",
			"Asiakas",
			"Asennus",
			"Työstöt",
			"",
			"X KPL",
			"Y KPL",
			"Yhteensä",
			"  ",
			"   ",
			"    ",
			"     ",
			"      ",
			"Tarra",
			"Diameter",
			"X1",
			"X2",
			"X3",
			"X4",
			"X5",
			"X6",
			"X7",
			"X8",
			"X9",
			"X10",
			"Y1",
			"Y2",
			"Y3",
			"Y4",
			"Y5",
			"Y6",
			"Y7",
			"Y8",
			"Y9",
			"Y10",
			"X",
			"Y",
			"X ",
			"Y ",
			"PR1_X",
			"PR1_Y",
			"PR1_DX",
			"PR1_DY",
			"PR2_X",
			"PR2_Y",
			"PR1_DX",
			"PR2_DY",
			"PR3_X",
			"PR3_Y",
			"PR3_DX",
			"PR3_DY",
			"PR4_X",
			"PR4_Y",
			"PR4_DX",
			"PR4_DY",
			"PF1_X",
			"PF1_Y",
			"PF1_DX",
			"PF1_DY",
			"PF2_X",
			"PF2_Y",
			"PF2_DX",
			"PF2_DY",
			"CH 0=OFF 1= ON",
			"Y Vasen",
			"Y oikea",
			"X ala",
			"x ylä",
			"X ala",
			"X ylä",
			"VH1_X",
			"VH1_Y",
			"VH1_L",
			"VH1_KPL",
			"VH1_K",
			"       ",
			"        ",
			"         ",
			"          ",
			"AR Edge 1",
			"YR Edge 1",
			"VR Edge 1",
			"OR Edge 1",
			"AR Edge 2",
			"YR Edge 2",
			"VR Edge 2",
			"OR Edge 2",
			"AR Trim",
			"YR Trim",
			"VR Trim",
			"OR Trim",
			"Yhdistä Xx-XX",
			"Yhdistä Yx-YX",
		]
	}
	if (mode === 2) {
		_type = "rangat"
		cols = [
			"Rivinumero",
			"Rangan tyyppi",
			"Tilauskoodi",
			"Pituus",
			"KPL",
			"MATERIAALI",
			"PAKSUUS",
			"LAATU",
			"Väri nimi",
			"NCS code",
			"Tilattu PVM",
			"STATUS",
			"Asiakas",
			"Projekti",
			"Osoite",
			"Palletgroup",
			"Asunto Nimi 1",
			"Nimi 2",
			"Työstöt",
			"Asennus",
		]
	}
	if (mode === 3) {
		_type = "listat"
		cols = [
			"Rivinumero",
			"Rangan tyyppi",
			"Tilauskoodi",
			"Pituus",
			"KPL",
			"MATERIAALI",
			"PAKSUUS",
			"LAATU",
			"Väri nimi",
			"NCS code",
			"Tilattu PVM",
			"STATUS",
			"Asiakas",
			"Projekti",
			"Osoite",
			"Palletgroup",
			"Asunto Nimi 1",
			"Nimi 2",
			"Työstöt",
			"Asennus",
		]
	}

	;(formData = {
		pr_id: document.querySelector("#current_project_id").value,
		room: current_tila,
		type: _type,
	}),
		$.ajax({
			type: "POST",
			url: "../vendor/get-ordersinroom.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				console.log("Tietokantavirhe, soita numeroon +358449782028")
			},
		}).done(function (success) {
			trs = document.querySelectorAll(
				".tila" + _type + "__tbody tr:not(.headingrow)"
			)
			trs.forEach((tr) => {
				tr.remove()
			})

			successful = success.replaceAll("~~~~", ",").split("&&")
			used_rooms = []
			u_rooms = []
			successful.forEach((timestamp) => {
				if (timestamp.length < 5) {
					return
				}
				raw_data = timestamp.replaceAll("&&", "").split("----")
				console.log(raw_data)
				wall = raw_data[1]
				timing = toTimestamp(raw_data[2])
				if (used_rooms.includes(wall + "|" + timing)) {
					used_rooms.push(wall + "|" + timing)
					u_rooms.push(wall)
				} else {
					used_rooms.push(wall + "|" + timing)
					u_rooms.push(wall)
				}
			})

			successful.forEach((timestamp) => {
				if (timestamp.length < 5) {
					return
				}
				raw_data = timestamp.replaceAll("&&", "").split("----")
				wall = raw_data[1]
				timing = toTimestamp(raw_data[2])
				used_rooms.forEach((u1) => {
					for (let u2 = 0; u2 < used_rooms.length; u2++) {
						if (
							u1.split("|")[0] === wall &&
							used_rooms[u2].split("|")[0] === wall
						) {
							console.log(wall)
							if (u1.split("|")[1] > used_rooms[u2].split("|")[1]) {
								timest = u1.split("|")[1]
							} else {
								timest = used_rooms[u2].split("|")[1]
							}
						}
					}
				})

				if (parseFloat(timest) !== parseFloat(timing)) {
					return
				} else {
					content = JSON.parse(raw_data[0])
					content.forEach((row) => {
						tr = document.createElement("tr")
						for (var i = 0; i < cols.length; i++) {
							index = cols[i]
							tr.innerHTML += "<td>" + row[index] + "</td>"
						}
						document.querySelector(".tila" + _type + "__tbody").appendChild(tr)
					})
				}
			})
		})
}

/**
 * Get the formatted date string in the format "YYYY-MM-DD HH:MM:SS" from the given date object.
 * @param {Date} date - The date object to format.
 * @returns {string} The formatted date string.
 */
function GetDatabaseDate(date) {
	var month = ("0" + (date.getMonth() + 1)).slice(-2)
	var day = ("0" + date.getDate()).slice(-2)
	var year = date.getFullYear()
	var hour = ("0" + date.getHours()).slice(-2)
	var min = ("0" + date.getMinutes()).slice(-2)
	var seg = ("0" + date.getSeconds()).slice(-2)
	return year + "-" + month + "-" + day + " " + hour + ":" + min + ":" + seg
}

/**
 * Function to load and format data from an Excel file based on the given arguments.
 * @param {arg} arg - The argument to determine the data loading process.
 * @returns None
 */
function lataa_seinaexcel(arg) {
	aslevytarray = []
	asrangat_array = []
	aslistat_array = []
	_types = ["levyt", "rangat", "listat"]

	if (arg) {
		_types.forEach((_type) => {
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				room: current_tila,
				type: _type,
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinroom.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					timest = 0
					successful = success.replaceAll("~~~~", ",").split("&&")
					used_rooms = []
					u_rooms = []
					successful.forEach((timestamp) => {
						if (timestamp.length < 5) {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						console.log(raw_data)
						wall = raw_data[1]
						timing = toTimestamp(raw_data[2])
						statusroom = raw_data[3]
						if (statusroom === "hyväksyttävä") {
							if (used_rooms.includes(wall + "|" + timing)) {
								used_rooms.push(wall + "|" + timing)
								u_rooms.push(wall)
							} else {
								used_rooms.push(wall + "|" + timing)
								u_rooms.push(wall)
							}
						}
					})

					successful.forEach((timestamp) => {
						statusroom = raw_data[3]
						timest = 0
						if (timestamp.length < 5 && statusroom !== "hyväksyttävä") {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						wall = raw_data[1]
						timing = toTimestamp(raw_data[2])
						used_rooms.forEach((u1) => {
							for (let u2 = 0; u2 < used_rooms.length; u2++) {
								if (
									u1.split("|")[0] === wall &&
									used_rooms[u2].split("|")[0] === wall
								) {
									console.log(wall)
									if (u1.split("|")[1] > used_rooms[u2].split("|")[1]) {
										timest = u1.split("|")[1]
									} else {
										timest = used_rooms[u2].split("|")[1]
									}
								}
							}
						})

						if (parseFloat(timest) !== parseFloat(timing)) {
							return
						} else {
							content = JSON.parse(raw_data[0])
							content.forEach((row) => {
								if (_type === "levyt") {
									aslevytarray.push(row)
								}
								if (_type === "rangat") {
									asrangat_array.push(row)
								}
								if (_type === "listat") {
									aslistat_array.push(row)
								}
							})

							timestamby = parseFloat(timest) * 1000
							formatted_db_date = new Date(timestamby)

							formattedDate = GetDatabaseDate(formatted_db_date)
							formData = {
								status: "tilattu",
								timedate: formattedDate,
							}

							$.ajax({
								type: "POST",
								url: "../vendor/excel_changestatus.php",
								data: formData,
								error: function (jqxhr, status, exception) {
									console.log("Tietokantavirhe, soita numeroon +358449782028")
								},
							}).done(function (success) {
								console.log(success)
							})
						}
					})
				})
		})
		setTimeout(() => {
			rows = document.querySelectorAll(".tilatilaus__tbody tr:not(.headingrow)")
			astilausarray = []
			rows.forEach((row) => {
				tds = row.querySelectorAll("td")
				astilausarray.push({
					HUONE: tds[0].innerText,
					"SEINÄ A": tds[1].innerText,
					"SEINÄ B": tds[2].innerText,
					"SEINÄ C": tds[3].innerText,
					"SEINÄ D": tds[4].innerText,
					KATTO: tds[5].innerText,
					LATTIA: tds[6].innerText,
				})
			})

			filename = current_tila + " [Tilausexcel].xlsx"
			var ws0 = XLSX.utils.json_to_sheet(astilausarray)
			var ws1 = XLSX.utils.json_to_sheet(aslevytarray)
			var ws2 = XLSX.utils.json_to_sheet(asrangat_array)
			var ws3 = XLSX.utils.json_to_sheet(aslistat_array)
			var wb = XLSX.utils.book_new()

			XLSX.utils.book_append_sheet(wb, ws0, "Tilaukset")
			XLSX.utils.book_append_sheet(wb, ws1, "Levyt")
			XLSX.utils.book_append_sheet(wb, ws2, "Rangat")
			XLSX.utils.book_append_sheet(wb, ws3, "Listat")
			XLSX.writeFile(wb, filename)
		}, 250)
	} else {
		alert("Olet tilaamassa myös tilatut tuotteet.")
		_types.forEach((_type) => {
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				room: current_tila,
				type: _type,
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinroom.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					successful = success.replaceAll("~~~~", ",").split("&&")
					used_rooms = []
					u_rooms = []
					successful.forEach((timestamp) => {
						if (timestamp.length < 5) {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						console.log(raw_data)
						wall = raw_data[1]
						timing = toTimestamp(raw_data[2])
						if (used_rooms.includes(wall + "|" + timing)) {
							used_rooms.push(wall + "|" + timing)
							u_rooms.push(wall)
						} else {
							used_rooms.push(wall + "|" + timing)
							u_rooms.push(wall)
						}
					})

					successful.forEach((timestamp) => {
						if (timestamp.length < 5) {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						wall = raw_data[1]
						timing = toTimestamp(raw_data[2])
						used_rooms.forEach((u1) => {
							for (let u2 = 0; u2 < used_rooms.length; u2++) {
								if (
									u1.split("|")[0] === wall &&
									used_rooms[u2].split("|")[0] === wall
								) {
									console.log(wall)
									if (u1.split("|")[1] > used_rooms[u2].split("|")[1]) {
										timest = u1.split("|")[1]
									} else {
										timest = used_rooms[u2].split("|")[1]
									}
								}
							}
						})

						if (parseFloat(timest) !== parseFloat(timing)) {
							return
						} else {
							content = JSON.parse(raw_data[0])
							content.forEach((row) => {
								if (_type === "levyt") {
									aslevytarray.push(row)
								}
								if (_type === "rangat") {
									asrangat_array.push(row)
								}
								if (_type === "listat") {
									aslistat_array.push(row)
								}
							})

							timestamby = parseFloat(timest) * 1000
							formatted_db_date = new Date(timestamby)

							formattedDate = GetDatabaseDate(formatted_db_date)
							formData = {
								status: "tilattu",
								timedate: formattedDate,
							}

							$.ajax({
								type: "POST",
								url: "../vendor/excel_changestatus.php",
								data: formData,
								error: function (jqxhr, status, exception) {
									console.log("Tietokantavirhe, soita numeroon +358449782028")
								},
							}).done(function (success) {
								console.log(success)
							})
						}
					})
				})
		})
		setTimeout(() => {
			rows = document.querySelectorAll(".tilatilaus__tbody tr:not(.headingrow)")
			astilausarray = []
			rows.forEach((row) => {
				tds = row.querySelectorAll("td")
				astilausarray.push({
					HUONE: tds[0].innerText,
					"SEINÄ A": tds[1].innerText,
					"SEINÄ B": tds[2].innerText,
					"SEINÄ C": tds[3].innerText,
					"SEINÄ D": tds[4].innerText,
					KATTO: tds[5].innerText,
					LATTIA: tds[6].innerText,
				})
			})

			filename = current_tila + " [Tilausexcel].xlsx"
			var ws0 = XLSX.utils.json_to_sheet(astilausarray)
			var ws1 = XLSX.utils.json_to_sheet(aslevytarray)
			var ws2 = XLSX.utils.json_to_sheet(asrangat_array)
			var ws3 = XLSX.utils.json_to_sheet(aslistat_array)
			var wb = XLSX.utils.book_new()

			XLSX.utils.book_append_sheet(wb, ws0, "Tilaukset")
			XLSX.utils.book_append_sheet(wb, ws1, "Levyt")
			XLSX.utils.book_append_sheet(wb, ws2, "Rangat")
			XLSX.utils.book_append_sheet(wb, ws3, "Listat")
			XLSX.writeFile(wb, filename)
		}, 250)
	}
}

/**
 * Toggle the display of project excel sheets based on the mode provided.
 * @param {number} mode - The mode to determine which project excel sheet to display.
 * @param {HTMLElement} b - The button element that triggered the toggle.
 * @returns None
 */
function toggle__projectexcel(mode, b) {
	sheets = document.querySelectorAll(".prthree_sheet_item")
	btns = document.querySelectorAll(".projektilista_btn")

	sheets.forEach((sheet) => {
		sheet.classList.add("hidden")
	})

	btns.forEach((btn) => {
		btn.classList.remove("active")
	})

	timest = null

	b.classList.add("active")
	sheets[mode].classList.remove("hidden")
	levyt_cols = [
		"Type (drawing)",
		"Materialcode",
		"Leveys (X)",
		"Pituus (Y)",
		"Thickness",
		"Structure",
		"Quantity",
		"Plus",
		"Part number",
		"Nimi 1",
		"Nimi 2",
		"MPR",
		"Palletgroup",
		"Prioriteetti",
		"Asiakas",
		"Asennus",
		"Työstöt",
		"",
		"X KPL",
		"Y KPL",
		"Yhteensä",
		"  ",
		"   ",
		"    ",
		"     ",
		"      ",
		"Tarra",
		"Diameter",
		"X1",
		"X2",
		"X3",
		"X4",
		"X5",
		"X6",
		"X7",
		"X8",
		"X9",
		"X10",
		"Y1",
		"Y2",
		"Y3",
		"Y4",
		"Y5",
		"Y6",
		"Y7",
		"Y8",
		"Y9",
		"Y10",
		"X",
		"Y",
		"X ",
		"Y ",
		"PR1_X",
		"PR1_Y",
		"PR1_DX",
		"PR1_DY",
		"PR2_X",
		"PR2_Y",
		"PR1_DX",
		"PR2_DY",
		"PR3_X",
		"PR3_Y",
		"PR3_DX",
		"PR3_DY",
		"PR4_X",
		"PR4_Y",
		"PR4_DX",
		"PR4_DY",
		"PF1_X",
		"PF1_Y",
		"PF1_DX",
		"PF1_DY",
		"PF2_X",
		"PF2_Y",
		"PF2_DX",
		"PF2_DY",
		"CH 0=OFF 1= ON",
		"Y Vasen",
		"Y oikea",
		"X ala",
		"x ylä",
		"X ala",
		"X ylä",
		"VH1_X",
		"VH1_Y",
		"VH1_L",
		"VH1_KPL",
		"VH1_K",
		"       ",
		"        ",
		"         ",
		"          ",
		"AR Edge 1",
		"YR Edge 1",
		"VR Edge 1",
		"OR Edge 1",
		"AR Edge 2",
		"YR Edge 2",
		"VR Edge 2",
		"OR Edge 2",
		"AR Trim",
		"YR Trim",
		"VR Trim",
		"OR Trim",
		"Yhdistä Xx-XX",
		"Yhdistä Yx-YX",
	]
	rangat_cols = [
		"Rivinumero",
		"Rangan tyyppi",
		"Tilauskoodi",
		"Pituus",
		"KPL",
		"MATERIAALI",
		"PAKSUUS",
		"LAATU",
		"Väri nimi",
		"NCS code",
		"Tilattu PVM",
		"STATUS",
		"Asiakas",
		"Projekti",
		"Osoite",
		"Palletgroup",
		"Asunto Nimi 1",
		"Nimi 2",
		"Työstöt",
		"Asennus",
	]
	listat_cols = [
		"Rivinumero",
		"Rangan tyyppi",
		"Tilauskoodi",
		"Pituus",
		"KPL",
		"MATERIAALI",
		"PAKSUUS",
		"LAATU",
		"Väri nimi",
		"NCS code",
		"Tilattu PVM",
		"STATUS",
		"Asiakas",
		"Projekti",
		"Osoite",
		"Palletgroup",
		"Asunto Nimi 1",
		"Nimi 2",
		"Työstöt",
		"Asennus",
	]

	current_id = parseFloat(document.querySelector("#current_project_id").value)
	if (mode === 0) {
		_type = "tilaus"
		trs = document.querySelectorAll(
			".project" + _type + "__tbody tr:not(.headingrow)"
		)
		trs.forEach((tr) => {
			tr.remove()
		})

		_types = ["levyt", "rangat", "listat"]
		_t_u_rooms = []
		_types.forEach((_type) => {
			t_used_rooms = []
			t_u_rooms_ = []
			apart_statuses = []
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				type: _type,
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinproject.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					// ITERATE ROOM>WALLARRAY
					successful = success.replaceAll("~~~~", ",").split("&&")
					successful.forEach((timestamp) => {
						if (timestamp.length < 5) {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						wall = raw_data[1]
						apart = raw_data[3]
						timing = toTimestamp(raw_data[2])
						roomstatus = raw_data[4]
						if (t_used_rooms.includes(apart + ">" + wall + "|" + timing)) {
							t_used_rooms.push(apart + ">" + wall + "|" + timing)
							apart_statuses.push(timing + "|" + roomstatus)
							t_u_rooms_.push(apart + ">" + wall)
						} else {
							t_used_rooms.push(
								apart + ">" + wall + "|" + timing + "|" + roomstatus
							)
							apart_statuses.push(timing + "|" + roomstatus)
							t_u_rooms_.push(apart + ">" + wall)
						}
					})

					toiterate = removeDuplicates(t_u_rooms_)
					toiterate.forEach((iteration) => {
						toiterate__apart = iteration.split(">")[0]
						wall = iteration.split(">")[1]
						successful.forEach((timestamp) => {
							if (timestamp.length < 5) {
							} else {
								raw_data = timestamp.replaceAll("&&", "").split("----")
								apart = raw_data[3]
								timing = toTimestamp(raw_data[2])
								raw_wall = raw_data[1]
								if (apart === toiterate__apart && raw_wall === wall) {
									t_used_rooms.forEach((u1) => {
										if (
											u1.split("|")[0].split(">")[1] === wall &&
											u1.split("|")[0] === iteration
										) {
											if (timest !== null) {
												if (u1.split("|")[1] > timest) {
													timest = u1.split("|")[1]
													timest_item =
														u1.split("|")[0] + "|" + u1.split("|")[1]
												} else if (timest < timing) {
													timest = timing
													timest_item = apart + ">" + raw_wall + "|" + timing
												}
											} else {
												if (u1.split("|")[1] > timing) {
													timest = u1.split("|")[1]
													timest_item =
														u1.split("|")[0] + "|" + u1.split("|")[1]
												} else {
													timest = timing
													timest_item = apart + ">" + raw_wall + "|" + timing
												}
											}
										}
									})
								}
							}
						})

						console.log("timest_item -> " + timest_item)

						successful.forEach((timestamp) => {
							raw_data = timestamp.replaceAll("&&", "").split("----")
							apart = raw_data[3]
							timing = toTimestamp(raw_data[2])
							raw_wall = raw_data[1]

							if (timest_item === apart + ">" + raw_wall + "|" + timing) {
								console.log(
									"MATCH apart raw_wall timing " +
										apart +
										">" +
										raw_wall +
										"|" +
										timing
								)
								apart_statuses.forEach((as) => {
									if (parseFloat(as.split("|")[0]) === parseFloat(timing)) {
										mystatus = as.split("|")[1]
										_t_u_rooms.push(apart + ">" + raw_wall + "|" + mystatus)
									}
								})
							}
						})
					})
				})
		})

		setTimeout(() => {
			rooms_data = document.querySelectorAll(".project__building_room")
			rooms_data.forEach((r) => {
				if (r.innerText.length > 1) {
					_tr = document.createElement("tr")
					rinnerText = r.innerText
					rinnerText_selector = rinnerText
						.replaceAll("ä", "a")
						.replaceAll("ö", "o")
						.replaceAll(" ", "_")
						.replaceAll("\n", "_")
						.toLowerCase()
					_tr.classList.add(rinnerText_selector)
					_tr.innerHTML = `
            <td>${rinnerText}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          `
					if (rinnerText !== "[]") {
						document
							.querySelector(".project" + _type + "__tbody")
							.appendChild(_tr)
					}
				}
			})
		}, 550)

		setTimeout(() => {
			_t_u_rooms.forEach((r) => {
				r_name = r
					.split("|")[0]
					.split(">")[0]
					.replaceAll("ä", "a")
					.replaceAll("ö", "o")
					.replaceAll(" ", "_")
					.replaceAll("\n", "_")
					.toLowerCase()
				r_wall = r
					.split("|")[0]
					.split(">")[1]
					.replaceAll("ä", "a")
					.replaceAll("ö", "o")
					.replaceAll(" ", "_")
					.replaceAll("\n", "_")
					.toLowerCase()

				r_row = document.querySelector(
					".projecttilaus__tbody ." +
						r_name
							.replaceAll("ä", "a")
							.replaceAll("ö", "o")
							.replaceAll(" ", "_")
							.replaceAll("\n", "_")
							.toLowerCase()
				)
				wall_status = r.split("|")[1].toUpperCase()
				if (r_wall === "a") {
					r_row.querySelectorAll("td")[1].innerHTML = wall_status
				} else if (r_wall === "b") {
					r_row.querySelectorAll("td")[2].innerHTML = wall_status
				} else if (r_wall === "c") {
					r_row.querySelectorAll("td")[3].innerHTML = wall_status
				} else if (r_wall === "d") {
					r_row.querySelectorAll("td")[4].innerHTML = wall_status
				} else if (r_wall === "k") {
					r_row.querySelectorAll("td")[5].innerHTML = wall_status
				} else if (r_wall === "l") {
					r_row.querySelectorAll("td")[6].innerHTML = wall_status
				}
			})
		}, 650)

		return
	}

	if (mode === 1) {
		_type = "levyt"
		cols = [
			"Part number",
			"Materialcode",
			"Leveys (X)",
			"Pituus (Y)",
			"Quantity",
			"Nimi 1",
			"X1",
			"X2",
			"X3",
			"X4",
			"X5",
			"X6",
			"X7",
			"X8",
			"X9",
			"X10",
			"Y1",
			"Y2",
			"Y3",
			"Y5",
			"Y4",
			"Y6",
			"Y7",
			"Y8",
			"Y9",
			"Y10",
			"Palletgroup",
			"Diameter",
			"Prioriteetti",
			"X",
			"Y",
			"X",
			"Y",
			"PR1_X",
			"PR1_Y",
			"PR1_DX",
			"PR1_DY",
			"PR2_X",
			"PR2_Y",
			"PR1_DX",
			"PR2_DY",
			"PR3_X",
			"PR3_Y",
			"PR3_DX",
			"PR3_DY",
			"PR4_X",
			"PR4_Y",
			"PR4_DX",
			"PR4_DY",
			"PF1_X",
			"PF1_Y",
			"PF1_DX",
			"PF1_DY",
			"PF2_X",
			"PF2_Y",
			"PF2_DX",
			"PF2_DY",
			"CH 0=OFF 1= ON",
			"Y Vasen",
			"Y oikea",
			"Y Vasen",
			"Y oikea",
			"X ala",
			"x ylä",
			"X ala",
			"X ylä",
			"VH1_X",
			"VH1_Y",
			"VH1_L",
			"VH1_KPL",
			"VH1_K",
			"Asiakas",
			"Tarra",
			"Nimi 2",
			"Asennus",
			"Työstöt",
			"MPR",
			"Type (drawing)",
			"Thickness",
			"Structure",
			"Plus",
			"AR Edge 1",
			"YR Edge 1",
			"VR Edge 1",
			"OR Edge 1",
			"AR Edge 2",
			"YR Edge 2",
			"VR Edge 2",
			"OR Edge 2",
			"AR Trim",
			"YR Trim",
			"VR Trim",
			"OR Trim",
			"Yhdistä Xx-XX",
			"Yhdistä Yx-YX",
		]
	}
	if (mode === 2) {
		_type = "rangat"
		cols = [
			"Rivinumero",
			"Rangan tyyppi",
			"Tilauskoodi",
			"Pituus",
			"KPL",
			"MATERIAALI",
			"PAKSUUS",
			"LAATU",
			"Väri nimi",
			"NCS code",
			"Tilattu PVM",
			"STATUS",
			"Asiakas",
			"Projekti",
			"Osoite",
			"Palletgroup",
			"Asunto Nimi 1",
			"Nimi 2",
			"Työstöt",
			"Asennus",
		]
	}
	if (mode === 3) {
		_type = "listat"
		cols = [
			"Rivinumero",
			"Rangan tyyppi",
			"Tilauskoodi",
			"Pituus",
			"KPL",
			"MATERIAALI",
			"PAKSUUS",
			"LAATU",
			"Väri nimi",
			"NCS code",
			"Tilattu PVM",
			"STATUS",
			"Asiakas",
			"Projekti",
			"Osoite",
			"Palletgroup",
			"Asunto Nimi 1",
			"Nimi 2",
			"Työstöt",
			"Asennus",
		]
	}

	;(formData = {
		pr_id: document.querySelector("#current_project_id").value,
		type: _type,
	}),
		$.ajax({
			type: "POST",
			url: "../vendor/get-ordersinproject.php",
			data: formData,
			error: function (jqxhr, status, exception) {
				console.log("Tietokantavirhe, soita numeroon +358449782028")
			},
		}).done(function (success) {
			trs = document.querySelectorAll(
				".project" + _type + "__tbody tr:not(.headingrow)"
			)
			trs.forEach((tr) => {
				tr.remove()
			})

			// ITERATE ROOM>WALLARRAY
			successful = success.replaceAll("~~~~", ",").split("&&")
			used_rooms = []
			u_rooms = []
			successful.forEach((timestamp) => {
				if (timestamp.length < 5) {
					return
				}
				raw_data = timestamp.replaceAll("&&", "").split("----")
				wall = raw_data[1]
				apart = raw_data[3]
				timing = toTimestamp(raw_data[2])
				if (used_rooms.includes(apart + ">" + wall + "|" + timing)) {
					used_rooms.push(apart + ">" + wall + "|" + timing)
					u_rooms.push(apart + ">" + wall)
				} else {
					used_rooms.push(apart + ">" + wall + "|" + timing)
					u_rooms.push(apart + ">" + wall)
				}
			})
			// END ROOM>WALLARRAY

			toiterate = removeDuplicates(u_rooms)
			toiterate.forEach((iteration) => {
				toiterate__apart = iteration.split(">")[0]
				wall = iteration.split(">")[1]
				successful.forEach((timestamp) => {
					if (timestamp.length < 5) {
						return
					}
					raw_data = timestamp.replaceAll("&&", "").split("----")
					apart = raw_data[3]
					timing = toTimestamp(raw_data[2])
					raw_wall = raw_data[1]
					if (apart === toiterate__apart && raw_wall === wall) {
						used_rooms.forEach((u1) => {
							if (
								u1.split("|")[0].split(">")[1] === wall &&
								u1.split("|")[0] === iteration
							) {
								if (timest !== null) {
									if (u1.split("|")[1] > timest) {
										timest = u1.split("|")[1]
										timest_item = u1
									} else if (timest < timing) {
										timest = timing
										timest_item = apart + ">" + raw_wall + "|" + timing
									}
								} else {
									if (u1.split("|")[1] > timing) {
										timest = u1.split("|")[1]
										timest_item = u1
									} else {
										timest = timing
										timest_item = apart + ">" + raw_wall + "|" + timing
									}
								}
							}
						})
					}
				})
				successful.forEach((timestamp) => {
					raw_data = timestamp.replaceAll("&&", "").split("----")
					apart = raw_data[3]
					timing = toTimestamp(raw_data[2])
					raw_wall = raw_data[1]
					if (timest_item === apart + ">" + raw_wall + "|" + timing) {
						content = JSON.parse(raw_data[0])
						content.forEach((row) => {
							tr = document.createElement("tr")
							for (var i = 0; i < cols.length; i++) {
								index = cols[i]
								tr.innerHTML += "<td>" + row[index] + "</td>"
							}
							document
								.querySelector(".project" + _type + "__tbody")
								.appendChild(tr)
						})
						timest = null
					}
				})
			})
		})
}

/**
 * Downloads an Excel file for the current project based on the argument provided.
 * If the argument is true, it downloads an Excel file for approved orders only.
 * If the argument is false, it downloads an Excel file for all orders.
 * @param {boolean} arg - Determines whether to download for approved orders only.
 * @returns None
 */
function lataa_projektiexcel(arg) {
	current_project = document.querySelector(".project_start_heading").innerText
	prtilausarray = []
	prlevytarray = []
	prrangat_array = []
	prlistat_array = []

	_types = ["levyt", "rangat", "listat"]

	if (arg) {
		_types.forEach((_type) => {
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				type: _type,
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinproject.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					// ITERATE ROOM>WALLARRAY
					successful = success.replaceAll("~~~~", ",").split("&&")
					used_rooms = []
					u_rooms = []
					successful.forEach((timestamp) => {
						if (timestamp.length < 5) {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						wall = raw_data[1]
						apart = raw_data[3]
						roomstatus = raw_data[4]
						timing = toTimestamp(raw_data[2])
						console.log(raw_data)
						if (roomstatus == "hyväksyttävä") {
							if (used_rooms.includes(apart + ">" + wall + "|" + timing)) {
								used_rooms.push(apart + ">" + wall + "|" + timing)
								u_rooms.push(apart + ">" + wall)
							} else {
								used_rooms.push(apart + ">" + wall + "|" + timing)
								u_rooms.push(apart + ">" + wall)
							}
						}
					})
					// END ROOM>WALLARRAY

					toiterate = removeDuplicates(u_rooms)
					toiterate.forEach((iteration) => {
						toiterate__apart = iteration.split(">")[0]
						wall = iteration.split(">")[1]
						successful.forEach((timestamp) => {
							if (timestamp.length < 5) {
								return
							}
							raw_data = timestamp.replaceAll("&&", "").split("----")
							apart = raw_data[3]
							roomstatus = raw_data[4]
							timing = toTimestamp(raw_data[2])
							raw_wall = raw_data[1]
							if (apart === toiterate__apart && raw_wall === wall) {
								used_rooms.forEach((u1) => {
									if (
										u1.split("|")[0].split(">")[1] === wall &&
										u1.split("|")[0] === iteration
									) {
										if (timest !== null) {
											if (u1.split("|")[1] > timest) {
												timest = u1.split("|")[1]
												timest_item = u1
											} else if (timest < timing) {
												timest = timing
												timest_item = apart + ">" + raw_wall + "|" + timing
											}
										} else {
											if (u1.split("|")[1] > timing) {
												timest = u1.split("|")[1]
												timest_item = u1
											} else {
												timest = timing
												timest_item = apart + ">" + raw_wall + "|" + timing
											}
										}
									}
								})
							}
						})
						successful.forEach((timestamp) => {
							raw_data = timestamp.replaceAll("&&", "").split("----")
							apart = raw_data[3]
							timing = toTimestamp(raw_data[2])
							raw_wall = raw_data[1]
							if (timest_item === apart + ">" + raw_wall + "|" + timing) {
								content = JSON.parse(raw_data[0])
								content.forEach((row) => {
									if (_type === "levyt") {
										prlevytarray.push(row)
									}
									if (_type === "rangat") {
										prrangat_array.push(row)
									}
									if (_type === "listat") {
										prlistat_array.push(row)
									}
								})

								timestamby = parseFloat(timing) * 1000
								formatted_db_date = new Date(timestamby)

								formattedDate = GetDatabaseDate(formatted_db_date)
								formData = {
									status: "tilattu",
									timedate: formattedDate,
								}

								$.ajax({
									type: "POST",
									url: "../vendor/excel_changestatus.php",
									data: formData,
									error: function (jqxhr, status, exception) {
										console.log("Tietokantavirhe, soita numeroon +358449782028")
									},
								}).done(function (success) {
									console.log(success)
								})
								timest = null
							}
						})
					})
				})
		})

		setTimeout(() => {
			rows = document.querySelectorAll(
				".projecttilaus__tbody tr:not(.headingrow)"
			)

			rows.forEach((row) => {
				tds = row.querySelectorAll("td")
				prtilausarray.push({
					HUONE: tds[0].innerText,
					"SEINÄ A": tds[1].innerText,
					"SEINÄ B": tds[2].innerText,
					"SEINÄ C": tds[3].innerText,
					"SEINÄ D": tds[4].innerText,
					KATTO: tds[5].innerText,
					LATTIA: tds[6].innerText,
				})
			})

			filename = current_project + " [Tilausexcel hyväksytyt].xlsx"
			var ws0 = XLSX.utils.json_to_sheet(prtilausarray)
			var ws1 = XLSX.utils.json_to_sheet(prlevytarray)
			var ws2 = XLSX.utils.json_to_sheet(prrangat_array)
			var ws3 = XLSX.utils.json_to_sheet(prlistat_array)
			var wb = XLSX.utils.book_new()

			XLSX.utils.book_append_sheet(wb, ws0, "Tilaukset")
			XLSX.utils.book_append_sheet(wb, ws1, "Levyt")
			XLSX.utils.book_append_sheet(wb, ws2, "Rangat")
			XLSX.utils.book_append_sheet(wb, ws3, "Listat")
			XLSX.writeFile(wb, filename)
		}, 250)
	} else {
		alert("Olet tilaamassa myös tilatut tuotteet.")
		_types.forEach((_type) => {
			;(formData = {
				pr_id: document.querySelector("#current_project_id").value,
				type: _type,
			}),
				$.ajax({
					type: "POST",
					url: "../vendor/get-ordersinproject.php",
					data: formData,
					error: function (jqxhr, status, exception) {
						console.log("Tietokantavirhe, soita numeroon +358449782028")
					},
				}).done(function (success) {
					// ITERATE ROOM>WALLARRAY
					successful = success.replaceAll("~~~~", ",").split("&&")
					used_rooms = []
					u_rooms = []
					successful.forEach((timestamp) => {
						if (timestamp.length < 5) {
							return
						}
						raw_data = timestamp.replaceAll("&&", "").split("----")
						wall = raw_data[1]
						apart = raw_data[3]
						timing = toTimestamp(raw_data[2])
						if (used_rooms.includes(apart + ">" + wall + "|" + timing)) {
							used_rooms.push(apart + ">" + wall + "|" + timing)
							u_rooms.push(apart + ">" + wall)
						} else {
							used_rooms.push(apart + ">" + wall + "|" + timing)
							u_rooms.push(apart + ">" + wall)
						}
					})
					// END ROOM>WALLARRAY

					toiterate = removeDuplicates(u_rooms)
					toiterate.forEach((iteration) => {
						toiterate__apart = iteration.split(">")[0]
						wall = iteration.split(">")[1]
						successful.forEach((timestamp) => {
							if (timestamp.length < 5) {
								return
							}
							raw_data = timestamp.replaceAll("&&", "").split("----")
							apart = raw_data[3]
							timing = toTimestamp(raw_data[2])
							raw_wall = raw_data[1]
							if (apart === toiterate__apart && raw_wall === wall) {
								used_rooms.forEach((u1) => {
									if (
										u1.split("|")[0].split(">")[1] === wall &&
										u1.split("|")[0] === iteration
									) {
										if (timest !== null) {
											if (u1.split("|")[1] > timest) {
												timest = u1.split("|")[1]
												timest_item = u1
											} else if (timest < timing) {
												timest = timing
												timest_item = apart + ">" + raw_wall + "|" + timing
											}
										} else {
											if (u1.split("|")[1] > timing) {
												timest = u1.split("|")[1]
												timest_item = u1
											} else {
												timest = timing
												timest_item = apart + ">" + raw_wall + "|" + timing
											}
										}
									}
								})
							}
						})
						successful.forEach((timestamp) => {
							raw_data = timestamp.replaceAll("&&", "").split("----")
							apart = raw_data[3]
							timing = toTimestamp(raw_data[2])
							raw_wall = raw_data[1]
							if (timest_item === apart + ">" + raw_wall + "|" + timing) {
								content = JSON.parse(raw_data[0])
								content.forEach((row) => {
									if (_type === "levyt") {
										prlevytarray.push(row)
									}
									if (_type === "rangat") {
										prrangat_array.push(row)
									}
									if (_type === "listat") {
										prlistat_array.push(row)
									}
								})

								timestamby = parseFloat(timing) * 1000
								formatted_db_date = new Date(timestamby)

								formattedDate = GetDatabaseDate(formatted_db_date)
								formData = {
									status: "tilattu",
									timedate: formattedDate,
								}

								$.ajax({
									type: "POST",
									url: "../vendor/excel_changestatus.php",
									data: formData,
									error: function (jqxhr, status, exception) {
										console.log("Tietokantavirhe, soita numeroon +358449782028")
									},
								}).done(function (success) {
									console.log(success)
								})
								timest = null
							}
						})
					})
				})
		})

		setTimeout(() => {
			rows = document.querySelectorAll(
				".projecttilaus__tbody tr:not(.headingrow)"
			)

			rows.forEach((row) => {
				tds = row.querySelectorAll("td")
				prtilausarray.push({
					HUONE: tds[0].innerText,
					"SEINÄ A": tds[1].innerText,
					"SEINÄ B": tds[2].innerText,
					"SEINÄ C": tds[3].innerText,
					"SEINÄ D": tds[4].innerText,
					KATTO: tds[5].innerText,
					LATTIA: tds[6].innerText,
				})
			})

			filename = current_project + " [Tilausexcel kaikki].xlsx"
			var ws0 = XLSX.utils.json_to_sheet(prtilausarray)
			var ws1 = XLSX.utils.json_to_sheet(prlevytarray)
			var ws2 = XLSX.utils.json_to_sheet(prrangat_array)
			var ws3 = XLSX.utils.json_to_sheet(prlistat_array)
			var wb = XLSX.utils.book_new()

			XLSX.utils.book_append_sheet(wb, ws0, "Tilaukset")
			XLSX.utils.book_append_sheet(wb, ws1, "Levyt")
			XLSX.utils.book_append_sheet(wb, ws2, "Rangat")
			XLSX.utils.book_append_sheet(wb, ws3, "Listat")
			XLSX.writeFile(wb, filename)
		}, 250)
	}
}

function change_np(val, forrow, entrance = "a") {
	project__building_rooms = document.querySelectorAll(".project__building_room")

	project__building_rooms.forEach((r) => {
		if (r.dataset.x === forrow) {
			r.dataset.liftpoint = val
		}
	})

	$.ajax({
		url: "/update_project_np.php",
		type: "POST",
		data: {
			project_id: document.querySelector("#current_project_id").value,
			username: document.querySelector("#current_user").value,
			entrance: entrance,
			np: val,
			index: forrow,
		},
		success: (answer) => {
			console.log(answer)
		},
	})
}
